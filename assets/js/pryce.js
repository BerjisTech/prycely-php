console.log('Go pryce');

$('.switch-tab').on('click', function () {
    console.log($(this));
    if ($(this).attr('class').includes('active')) {
        return;
    } else {
        $('.switch-tab').removeClass('active');
        $(this).addClass('active');
    }
})