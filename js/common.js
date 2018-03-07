function shohid(e) {
    $('.autohide').not(e.next()).hide();
    $(e).parents('.autohide').show();
    $(e).next().toggle();
}
