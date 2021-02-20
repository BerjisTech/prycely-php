console.log('Go pryce');

document.querySelector('.switch-tab').onclick = function () {
    console.log($(this));
    if ($(this).attr('class').includes('active')) {
        return;
    } else {
        $('.switch-tab').removeClass('active');
        $(this).addClass('active');
    }
}