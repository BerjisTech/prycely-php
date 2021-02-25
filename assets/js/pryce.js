const { data } = require("jquery");

let base_url = 'https://' + window.location.hostname;

console.log('Go pryce');

$('.switch-tab').on('click', function () {
    if ($(this).attr('class').includes('active')) {
        return;
    } else {
        $('.switch-tab').removeClass('active');
        $(this).addClass('active');
    }
})

$('a').on('click', function () {
    $.ajax({
        url: base_url + 'internals/link_stats',
        data: link_data,
        method: 'POST',
        success: function () { },
        error: function () { }
    });
})