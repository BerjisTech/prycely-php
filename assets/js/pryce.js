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
        url: base_url + '/internals/link_stats',
        data: link_data,
        method: 'POST',
        success: function () { },
        error: function (e) { log_errors('link_stats', link_data, e) }
    });
})

function log_errors(from, data, e) {

}

$('.user_type_chooser').on('click', function () {
    let this_step = $(this).attr('data-type');
    $('.yourself').hide();
    $('.the_email').show();
})

$('.ca_next').on('click', function () {
    let this_step = $(this).attr('data-step');
    console.log();
    if (this_step == 'email') {
        $('.the_email').hide();

        $('.the_code').show();
    }
    if (this_step == 'code') {
        $('.the_code').hide();
        $('.the_password').show();
    }
    if (this_step == 'password') {

    }
})

$('.go_back').on('click', function () {
    let this_step = $(this).attr('data-step');
    if (this_step == 'email') {
        $('.yourself').show();
        $('.the_email').hide();
    }
    if (this_step == 'code') {
        $('.the_email').show();
        $('.the_code').hide();
    }
    if (this_step == 'password') {
        $('.the_code').show();
        $('.the_password').hide();
    }
})