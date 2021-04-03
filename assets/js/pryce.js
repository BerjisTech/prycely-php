// @ts_check

/* Pryce JS File */
const Base64 = { _keyStr: "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=", encode: function (e) { var t = ""; var n, r, i, s, o, u, a; var f = 0; e = Base64._utf8_encode(e); while (f < e.length) { n = e.charCodeAt(f++); r = e.charCodeAt(f++); i = e.charCodeAt(f++); s = n >> 2; o = (n & 3) << 4 | r >> 4; u = (r & 15) << 2 | i >> 6; a = i & 63; if (isNaN(r)) { u = a = 64 } else if (isNaN(i)) { a = 64 } t = t + this._keyStr.charAt(s) + this._keyStr.charAt(o) + this._keyStr.charAt(u) + this._keyStr.charAt(a) } return t }, decode: function (e) { var t = ""; var n, r, i; var s, o, u, a; var f = 0; e = e.replace(/[^A-Za-z0-9\+\/\=]/g, ""); while (f < e.length) { s = this._keyStr.indexOf(e.charAt(f++)); o = this._keyStr.indexOf(e.charAt(f++)); u = this._keyStr.indexOf(e.charAt(f++)); a = this._keyStr.indexOf(e.charAt(f++)); n = s << 2 | o >> 4; r = (o & 15) << 4 | u >> 2; i = (u & 3) << 6 | a; t = t + String.fromCharCode(n); if (u != 64) { t = t + String.fromCharCode(r) } if (a != 64) { t = t + String.fromCharCode(i) } } t = Base64._utf8_decode(t); return t }, _utf8_encode: function (e) { e = e.replace(/\r\n/g, "\n"); var t = ""; for (var n = 0; n < e.length; n++) { var r = e.charCodeAt(n); if (r < 128) { t += String.fromCharCode(r) } else if (r > 127 && r < 2048) { t += String.fromCharCode(r >> 6 | 192); t += String.fromCharCode(r & 63 | 128) } else { t += String.fromCharCode(r >> 12 | 224); t += String.fromCharCode(r >> 6 & 63 | 128); t += String.fromCharCode(r & 63 | 128) } } return t }, _utf8_decode: function (e) { var t = ""; var n = 0; var r = c1 = c2 = 0; while (n < e.length) { r = e.charCodeAt(n); if (r < 128) { t += String.fromCharCode(r); n++ } else if (r > 191 && r < 224) { c2 = e.charCodeAt(n + 1); t += String.fromCharCode((r & 31) << 6 | c2 & 63); n += 2 } else { c2 = e.charCodeAt(n + 1); c3 = e.charCodeAt(n + 2); t += String.fromCharCode((r & 15) << 12 | (c2 & 63) << 6 | c3 & 63); n += 3 } } return t } }
const base_check = (b64) => {
    return Base64.encode(b64).replace(/\+/g, '-').replace(/\//g, '_').replace(/\=+$/, '')
}
let base_url = 'http://' + window.location.hostname + '/chama/'
console.log('Go pryce')
const page = window.location.pathname

$(document).on('focus', ':input', function () {
    $(this).attr('autocomplete', 'off');
});


/* On Boarding Page */
if (page.includes('createaccount') === true) {
    const the_person_form = $('form[name="the_person_form"]')
    let the_person = { 'type': '', 'email': '', 'password': '' }
    console.log('Create account')

    $('.user_type_chooser').on('click', function () {
        the_person.type = $(this).attr('data-person-type')
        $('.right_home_panel video').attr('src', base_url + 'assets/video/register-email-intro.mp4')
        $('.yourself').hide()
        $('.the_email').show()
    })

    $('.ca_next').on('click', function (e) {

        e.preventDefault()
        let this_step = $(this).data('step')
        let html_fallback = $(this).html()
        $('p.error').remove()

        $(this).html('<img src="' + base_url + 'assets/images/loader.gif" alt="loader" style="width: 100%; height: auto" />')
        if (this_step == 'email') {
            the_person.email = $('input[name="user_email"]').val()
            if (the_person.email == '') {
                $(this).html('NEXT')
                $('<p class="error bg-danger" style="padding: 10px;">You have to type your email first</p>').insertBefore($('input[name="user_email"]'))
            } else {
                $.ajax({
                    url: base_url + '/auth/send_code/',
                    method: 'POST',
                    data: { 'the_email': the_person.email },
                    success: (r) => {
                        console.log(r)
                        $('.right_home_panel video').attr('src', base_url + 'assets/video/register-confirm-email-loop.mp4')
                        $('.the_email').hide()
                        $('.the_code').show()
                        $(this).html('NEXT')
                    },
                    error: () => {
                        $(this).html('NEXT')
                        console.log('Error')
                        $('<p class="error bg-danger" style="padding: 10px;">Something went wrong. Please try again!</p>').insertBefore($('input[name="user_email"]'))
                    }
                })
            }

        }
        if (this_step == 'code') {
            the_code = $('input[name="user_code"]').val()
            if (the_code == '') {
                $(this).html('LET\'S TRY THAT AGAIN')
                $('<p class="error bg-danger" style="padding: 10px;">Kindly check that you\'ve typed the code</p>').insertBefore($('input[name="user_code"]'))
            }
            else {
                $.ajax({
                    url: base_url + '/auth/check_code/' + the_code,
                    method: 'GET',
                    success: function (r) {
                        if (r === 'the_proceed') {
                            $('.right_home_panel video').attr('src', base_url + 'assets/video/register-confirm-email-loop.mp4')
                            $('.the_code').hide()
                            $('.the_password').show()
                            $('button[data-step="' + this_step + '"]').html('LET\'S TRY THAT AGAIN')
                        } else {
                            $('button[data-step="' + this_step + '"]').html('LET\'S TRY THAT AGAIN')
                            $('<p class="error bg-danger" style="padding: 10px;">The code enetered isn\'t correct</p>').insertBefore($('input[name="user_code"]'))
                        }
                    },
                    error: function () {
                        $(this).html('LET\'S TRY THAT AGAIN')
                        $('<p class="error bg-danger" style="padding: 10px;">There\'s something went wrong, kindly try again</p>').insertBefore($('input[name="user_code"]'))
                    }
                })
            }
        }
        if (this_step == 'password') {
            the_person.password = $('input[name="user_password"]').val()

            if (the_person.password == '') {
                $(this).html('LET\'S TRY THAT AGAIN')
                $('<p class="error bg-danger" style="padding: 10px;">Empty password</p>').insertBefore($('input[name="user_password"]'))
                return false
            }

            if (the_person.password.length < 6) {
                $(this).html('LET\'S TRY THAT AGAIN')
                $('<p class="error bg-danger" style="padding: 10px;">Password should be at least 6 characters long</p>').insertBefore($('input[name="user_password"]'))
                return false
            }

            if (the_person.password.length > 15) {
                $(this).html('LET\'S TRY THAT AGAIN')
                $('<p class="error bg-danger" style="padding: 10px;">WHY!!! Why do you need such a long password. How do you intend to remember this</p>').insertBefore($('input[name="user_password"]'))
                return false;
            }

            $.ajax({
                url: base_url + '/auth/create_account',
                method: 'POST',
                data: {
                    'the_person_type': the_person.type,
                    'the_person_email': the_person.email,
                    'the_person_password': the_person.password,
                },
                success: (r) => {
                    $(this).html('YAY!!')
                    console.log(JSON.parse(r))
                    // window.location.href = base_url + "onboarding"
                },
                error: (e) => {

                }
            })
        }
    })

    $('.back_link').on('click', function () {
        let this_step = $(this).attr('data-step')
        if (this_step == 'email') {
            $('.right_home_panel video').attr('src', base_url + 'assets/video/register-country-loop.mp4')
            $('.yourself').show()
            $('.the_email').hide()
        }
        if (this_step == 'code') {
            $('.right_home_panel video').attr('src', base_url + 'assets/video/register-email-intro.mp4')
            $('.the_email').show()
            $('.the_code').hide()
        }
        if (this_step == 'password') {
            $('.right_home_panel video').attr('src', base_url + 'assets/video/register-confirm-email-loop.mp4')
            $('.the_code').show()
            $('.the_password').hide()
        }
    })
}


$('.switch-tab').on('click', function () {
    if ($(this).attr('class').includes('active')) {
        return
    } else {
        $('.switch-tab').removeClass('active')
        $(this).addClass('active')
    }
})

$('a').on('click', function () {

    let link_data = {
        'page': window.location.href,
        'date': new Date(),
        'class': $(this).attr('class'),
        'id': $(this).attr('id'),
        'text': $(this).html()
    }
    console.log(link_data)
    $.ajax({
        url: base_url + 'internals/link_stats',
        data: link_data,
        method: 'POST',
        success: function () { },
        error: function (e) { log_errors('link_stats', link_data, e) }
    })
})

function log_errors(from, data, e) {

}

$('.switch-tab').on('click', function () {
    let to_be_switched = $(this).attr('data-hide')
    $('.switch-card').removeClass('hidden-xs')
    $('.switch-card').hide()

    if (to_be_switched == 'switch-card') {
        $('.switch-card').show()
        $('.switch-transactions').hide()
    }
    if (to_be_switched == 'switch-transactions') {
        $('.switch-card').hide()
        $('.switch-transactions').show()
    }
})

$('img').on('error', function () {
    $(this).onerror = ""
    $(this).src = base_url + "assets/images/logo.png"
    return true
})

$('.go_to_group').on('click', function () {
    let group_id = $(this).attr('data-id')
    window.location.href = base_url + "group/g/" + group_id
})

$('.group-entypo').on('click', function () {
    if ($(this).hasClass('entypo-current')) { return false } else {
        $('.entypo-current').removeClass('entypo-current')
        $(this).addClass('entypo-current')
        $('.group-switched').hide(100)
        $('.' + $(this).attr('data-show')).show(400)
    }
})