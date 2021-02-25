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

    let link_data = {
        'page': window.location.href,
        'date': new Date(),
        'class': $(this).attr('class'),
        'id': $(this).attr('id'),
        'text': $(this).html()
    };
    console.log(link_data);
    $.ajax({
        url: base_url + 'internals/link_stats',
        data: link_data,
        method: 'POST',
        success: function () { },
        error: function (e) { log_errors('link_stats', link_data, e) }
    });
})

function log_errors(from, data, e) {

}