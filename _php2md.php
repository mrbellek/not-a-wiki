<?php
if (empty($argv[1]) || !is_file($argv[1])) {
    die('no script' . PHP_EOL);
}

$lines = file($argv[1]);

//take off header lines
while (strpos($lines[0], 'scripts/header.html') === false || !$lines) {
    array_shift($lines);
}
if (!$lines) {
    die('error: header include line not found' . PHP_EOL);
}
array_shift($lines);

//take off footer line
end($lines);
while (strpos(current($lines), 'scripts/footer.html') === false || !$lines) {
    array_pop($lines);
    end($lines);
}
array_pop($lines);

//replace tags
for ($i = 0; $i < count($lines); $i++) {
    $line = $lines[$i];
    $skipMarkDownConversion = false;

    //skip some things because we want to leave those in html
    if (strpos($line, 'usemap=') !== false ||
        strpos($line, '<map ') !== false ||
        strpos($line, '</map>') !== false ||
        strpos($line, '<area ') !== false ||
        strpos($line, '<div ') !== false ||
        strpos($line, '</div>') !== false ||
        strpos($line, '"shohid(') !== false) {

        $skipMarkDownConversion = true;
        $line = rtrim($line, PHP_EOL);
        print('x');
    }

    if (!$skipMarkDownConversion) {
        print('.');

        //headers
        $line = str_replace('<h6>', '###### ', $line);
        $line = str_replace('</h6>', '', $line);

        //remove paragraphs
        $line = str_replace('<p>', '', $line);
        $line = str_replace('</p>', '', $line);

        //emphasis
        $line = preg_replace('/<b>\s*/', '**', $line);
        $line = preg_replace('/\s*<\/b>/', '**', $line);
        $line = preg_replace('/<i>\s*/', '*', $line);
        $line = preg_replace('/\s*<\/i>/', '*', $line);

        //image tags, try to preserve (meaningful) alt attribute into title attribute
        if (preg_match('/<img src="(.+)" alt="(.+)" align="middle">/', $line, $matches)) {
            if ($matches[2] == 'Smiley face') {
                $matches[2] = '';
            }
            $line = preg_replace('/<img src="(.+)" alt="(.+)" align="middle">/', sprintf('![%1$s](%2$s "%1$s")', $matches[2], $matches[1]), $line);
        } elseif (preg_match('/<img src="(.+)">/', $line, $matches)) {
            $line = preg_replace('/<img src="(.+)">/', sprintf('![](%s)', $matches[1]), $line);
        } else {
            $line = str_replace('<img src="', '![](', $line);
            $line = str_replace('" alt=', ' ', $line);
            $line = str_replace(' align="middle">', ')', $line);
        }

        //hyperlinks
        if (preg_match('/<a target="_blank" href="(.+?)">(.+?)<\/a>/', $line, $matches)) {
            //link with target
            $line = preg_replace('/<a target="_blank" href="(.+?)">(.+?)<\/a>/', sprintf('[%s](%s)', $matches[2], $matches[1]), $line);
        } elseif (preg_match('/<a href="(.+?)" title="(.+?)">(.+?)<\/a>/', $line, $matches)) {
            //link with title
            $line = preg_replace('/<a href="(.+?)" title="(.+?)">(.+?)<\/a>/', sprintf('[%s](%s "%s")', $matches[3], $matches[1], $matches[2]), $line);
        } elseif (preg_match('/<a href="(.+?)">(.+?)<\/a>/', $line, $matches)) {
            //regular link
            $line = preg_replace('/<a href="(.+?)">(.+?)<\/a>/', sprintf('[%s](%s)', $matches[2], $matches[1]), $line);
        }

        //stuff
        $line = preg_replace('/^\*\*[-]+\*\*/', '---', $line);
        $line = preg_replace('/^<hr\/?>/', '---', $line);
        $line = trim($line, ' ');

        //fix incorrectly formatted html results

        //replace [**text**](link) with **[text](link)**
        if (preg_match('/\[\*\*(.+)\*\*\]\((.+)\)/', $line, $matches)) {
            $line = preg_replace('/\[\*\*(.+)\*\*\]\((.+)\)/', sprintf('**[%s](%s)**', $matches[1], $matches[2]), $line);
        }

        //replace **![text](link) text** with ![text](link) **text**
        if (preg_match('/\*\*!\[(.*)\]\((.+)\) ?(.+)\*\*/', $line, $matches)) {
            $line = preg_replace('/\*\*!\[(.*)\]\((.+)\) ?(.+)\*\*/', sprintf('![%s](%s) **%s**', $matches[1], $matches[2], $matches[3]), $line);
        }

        //replace <font> tags
        if (preg_match('/<font color="(.+)">(.+)<\/font>/', $line, $matches)) {
            $line = preg_replace('/<font color="(.+)">(.+)<\/font>/', sprintf('<span style="color: %s;">%s</span>', $matches[1], $matches[2]), $line);
        }

        //replace **<span style="">** with <span style="font-weight: bold">
        if (preg_match('/\*\*<span style="(.+)">(.+)<\/span>\*\*/', $line, $matches)) {
            $line = preg_replace('/\*\*<span style="(.+)">(.+)<\/span>\*\*/', sprintf('<span style="font-weight: bold; %s">%s</span>', $matches[1], $matches[2]), $line);
        } elseif (preg_match('/\*\*<span style="(.+)">(.+)\*\*<\/span>/', $line, $matches)) {
            //also replace malformed version <b><span>....</b></span>
            $line = preg_replace('/\*\*<span style="(.+)">(.+)\*\*<\/span>/', sprintf('<span style="font-weight: bold; %s">%s</span>', $matches[1], $matches[2]), $line);
        }

        //remove comments
        $line = preg_replace('/<\!--(.+)-->/', '', $line);
    }

    //replace absolute links
    $line = str_replace('http://musicfamily.org/realm/Factions/picks', '/realm/assets/img/picks', $line);
    $line = str_replace('http://musicfamily.org/realm/', '/realm/', $line);

    //apply modified line
    if (trim($line) == '') {
        $lines[$i] = '';
    } else {
        $lines[$i] = $line;
    }

    //replace two subsequent <br/> lines with &nbsp;, otherwise remove line
    if (preg_match('/^<br\/>/', $lines[$i])) {
        if ($lines[$i - 1] == '') {
            $lines[$i] = '&nbsp;' . PHP_EOL;
        } else {
            $lines[$i] = '';
        }
    }

    /**
     * TODO:
     * v double <br> lines
     * v images without alt/align attributes
     * v hyperlinks
     * - hyperlinked images
     * v font tags
     * - images within <b> tags
     * - unfuck /realm/img links
     * - multiple <font> tags in a line (R16Guide)
     * - multiple hyperlinks in a line (Kong)
     */
}
print(PHP_EOL);

//remove blanked lines
$lines = array_filter($lines);

//add liquid header
array_unshift($lines, '---', 'layout: default', '---', '');

//write new file
define('DS', DIRECTORY_SEPARATOR);
$pathinfo = pathinfo($argv[1]);
$path = $pathinfo['dirname'] . DS . $pathinfo['filename'] . '.md';

//by imploding contents that were read with file() we essentially add a blank line after every line
$contents = implode(PHP_EOL, $lines);

file_put_contents($path, $contents);

//delete original file
if (is_file($path)) {
    //unlink($argv[1]);
}

printf('Done! Write %d bytes to %s.' . PHP_EOL, strlen($contents), $path);
