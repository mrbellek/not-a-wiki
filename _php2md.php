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
    //skip some things because we want to leave those in html
    if (strpos($lines[$i], 'usemap=') !== false ||
        strpos($lines[$i], '<map ') !== false ||
        strpos($lines[$i], '</map>') !== false ||
        strpos($lines[$i], '<area ') !== false) {

        print('x');
        continue;
    }
    print('.');

    //headers
    $lines[$i] = str_replace('<h6>', '###### ', $lines[$i]);
    $lines[$i] = str_replace('</h6>', '', $lines[$i]);

    //remove paragraphs
    $lines[$i] = str_replace('<p>', '', $lines[$i]);
    $lines[$i] = str_replace('</p>', '', $lines[$i]);

    //emphasis
    $lines[$i] = preg_replace('/<b>\s*/', '**', $lines[$i]);
    $lines[$i] = preg_replace('/\s*<\/b>/', '**', $lines[$i]);
    $lines[$i] = preg_replace('/<i>\s*/', '*', $lines[$i]);
    $lines[$i] = preg_replace('/\s*<\/i>/', '*', $lines[$i]);

    //image tags, try to preserve (meaningful) alt attribute into title attribute
    if (preg_match('/<img src="(.+)" alt="(.+)" align="middle">/', $lines[$i], $matches)) {
        if ($matches[2] == 'Smiley face') {
            $matches[2] = '';
        }
        $lines[$i] = preg_replace('/<img src="(.+)" alt="(.+)" align="middle">/', sprintf('![%1$s](%2$s "%1$s")', $matches[2], $matches[1]), $lines[$i]);
    } elseif (preg_match('/<img src="(.+)">/', $lines[$i], $matches)) {
        $lines[$i] = preg_replace('/<img src="(.+)">/', sprintf('![](%s)', $matches[1]), $lines[$i]);
    } else {
        $lines[$i] = str_replace('<img src="', '![](', $lines[$i]);
        $lines[$i] = str_replace('" alt=', ' ', $lines[$i]);
        $lines[$i] = str_replace(' align="middle">', ')', $lines[$i]);
    }

    //replace absolute links
    $lines[$i] = str_replace('http://musicfamily.org/realm/Factions/picks', '/realm/assets/img/picks', $lines[$i]);

    //stuff
    $lines[$i] = preg_replace('/^\*\*[-]+\*\*/', '---', $lines[$i]);
    $lines[$i] = trim($lines[$i], ' ');

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
     * - hyperlinks
     * - hyperlinked images
     * - font tags
     * - images within <b> tags
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

//by imploding contents read with file() we essentially add a blank line after every line
$contents = implode(PHP_EOL, $lines);

file_put_contents($path, $contents);

//delete original file
if (is_file($path)) {
    //unlink($argv[1]);
}

printf('Done! Write %d bytes to %s.' . PHP_EOL, strlen($contents), $path);
