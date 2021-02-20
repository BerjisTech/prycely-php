console.log('Go pryce');

function switch_tab(this) {
    if (this.attr('class').includes('active')) {
        return;
    } else {
        $('.switch-tab').removeClass('active');
        this.addClass('active');
    }
}