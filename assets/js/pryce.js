let base_url = 'https://' + window.location.hostname + '/';

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

$('.user_type_chooser').on('click', function () {
    let this_step = $(this).attr('data-type');
    $('.right_home_panel video').attr('src', base_url + 'assets/video/register-email-intro.mp4');
    $('.yourself').hide();
    $('.the_email').show();
})

$('.ca_next').on('click', function () {
    let this_step = $(this).attr('data-step');
    console.log();
    if (this_step == 'email') {
        $('.right_home_panel video').attr('src', base_url + 'assets/video/register-confirm-email-loop.mp4');
        $('.the_email').hide();
        $('.the_code').show();
    }
    if (this_step == 'code') {
        $('.right_home_panel video').attr('src', base_url + 'assets/video/register-confirm-email-loop.mp4');
        $('.the_code').hide();
        $('.the_password').show();
    }
    if (this_step == 'password') {
        window.location.href = base_url + "overview";
    }
})



$('.back_link').on('click', function () {
    let this_step = $(this).attr('data-step');
    if (this_step == 'email') {
        $('.right_home_panel video').attr('src', base_url + 'assets/video/register-country-loop.mp4');
        $('.yourself').show();
        $('.the_email').hide();
    }
    if (this_step == 'code') {
        $('.right_home_panel video').attr('src', base_url + 'assets/video/register-email-intro.mp4');
        $('.the_email').show();
        $('.the_code').hide();
    }
    if (this_step == 'password') {
        $('.right_home_panel video').attr('src', base_url + 'assets/video/register-confirm-email-loop.mp4');
        $('.the_code').show();
        $('.the_password').hide();
    }
})

$('.switch-tab').on('click', function () {
    let to_be_switched = $(this).attr('data-hide');
    $('.switch-card').removeClass('hidden-xs');
    $('.switch-card').hide();

    if (to_be_switched == 'switch-card') {
        $('.switch-card').show();
        $('.switch-transactions').hide();
    }
    if (to_be_switched == 'switch-transactions') {
        $('.switch-card').hide();
        $('.switch-transactions').show();
    }
})

$('img').on('error', function () {
    $(this).onerror = "";
    $(this).src = base_url + "assets/images/logo.png";
    return true;
})

$('.go_to_group').on('click', function () {
    let group_id = $(this).attr('data-id');
    window.location.href = base_url + "group/g/" + group_id;
})

$('.group-entypo').on('click', function () {
    if ($(this).hasClass('entypo-current')) { return false; } else {
        $('.entypo-current').removeClass('entypo-current');
        $(this).addClass('entypo-current');
        $('.group-switched').hide(100);
        $('.' + $(this).attr('data-show')).show(400);
    }
})