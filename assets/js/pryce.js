// @ts_check

/* Pryce JS File */
const Base64 = { _keyStr: "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=", encode: function (e) { var t = ""; var n, r, i, s, o, u, a; var f = 0; e = Base64._utf8_encode(e); while (f < e.length) { n = e.charCodeAt(f++); r = e.charCodeAt(f++); i = e.charCodeAt(f++); s = n >> 2; o = (n & 3) << 4 | r >> 4; u = (r & 15) << 2 | i >> 6; a = i & 63; if (isNaN(r)) { u = a = 64 } else if (isNaN(i)) { a = 64 } t = t + this._keyStr.charAt(s) + this._keyStr.charAt(o) + this._keyStr.charAt(u) + this._keyStr.charAt(a) } return t }, decode: function (e) { var t = ""; var n, r, i; var s, o, u, a; var f = 0; e = e.replace(/[^A-Za-z0-9\+\/\=]/g, ""); while (f < e.length) { s = this._keyStr.indexOf(e.charAt(f++)); o = this._keyStr.indexOf(e.charAt(f++)); u = this._keyStr.indexOf(e.charAt(f++)); a = this._keyStr.indexOf(e.charAt(f++)); n = s << 2 | o >> 4; r = (o & 15) << 4 | u >> 2; i = (u & 3) << 6 | a; t = t + String.fromCharCode(n); if (u != 64) { t = t + String.fromCharCode(r) } if (a != 64) { t = t + String.fromCharCode(i) } } t = Base64._utf8_decode(t); return t }, _utf8_encode: function (e) { e = e.replace(/\r\n/g, "\n"); var t = ""; for (var n = 0; n < e.length; n++) { var r = e.charCodeAt(n); if (r < 128) { t += String.fromCharCode(r) } else if (r > 127 && r < 2048) { t += String.fromCharCode(r >> 6 | 192); t += String.fromCharCode(r & 63 | 128) } else { t += String.fromCharCode(r >> 12 | 224); t += String.fromCharCode(r >> 6 & 63 | 128); t += String.fromCharCode(r & 63 | 128) } } return t }, _utf8_decode: function (e) { var t = ""; var n = 0; var r = c1 = c2 = 0; while (n < e.length) { r = e.charCodeAt(n); if (r < 128) { t += String.fromCharCode(r); n++ } else if (r > 191 && r < 224) { c2 = e.charCodeAt(n + 1); t += String.fromCharCode((r & 31) << 6 | c2 & 63); n += 2 } else { c2 = e.charCodeAt(n + 1); c3 = e.charCodeAt(n + 2); t += String.fromCharCode((r & 15) << 12 | (c2 & 63) << 6 | c3 & 63); n += 3 } } return t } }
const base_check = (b64) => {
    return Base64.encode(b64).replace(/\+/g, '-').replace(/\//g, '_').replace(/\=+$/, '')
}
let base_url = 'http://' + window.location.hostname + '/prycely/'
console.log('Go pryce')
const page = window.location.pathname

const logCurrency = (country, code, currency) => {
    console.log(`${country}, ${code}, ${currency}`)
    $('[name="the_wallet_currency"').val(code)
    $('.the_wallet_currency').val(`${currency} (${code}) - ${country}`)
    $('.the_wallet_currencies').hide()
}

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
        window.location.replace(base_url + 'createaccount#email')
    })

    $('.ca_next').on('click', function (e) {

        e.preventDefault()
        let this_step = $(this).data('step')
        let html_fallback = $(this).html()
        $('p.error').remove()

        $(this).html(`<img src="${base_url}assets/images/loader.gif" alt="loader" style="width: 100px; height: auto" />`)
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
                        if (r.includes('the_proceed')) {
                            $('.right_home_panel video').attr('src', base_url + 'assets/video/register-confirm-email-loop.mp4')
                            $('.the_email').hide()
                            $('.the_code').show()
                            $(this).html('NEXT')
                            window.location.replace(base_url + 'createaccount#code')
                        } else {
                            $(this).html('LET\'S TRY THAT AGAIN')
                            $(`<p class="the_login_error bg-danger" style="padding: 10px;">${r}</p>`).insertBefore($('input[name="user_email"]'))
                        }
                    },
                    error: () => {
                        $(this).html('ERROR!')
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
                            $('.right_home_panel video').attr('src', base_url + 'assets/video/register-password-intro.mp4')
                            $('.the_code').hide()
                            $('.the_password').show()
                            $('button[data-step="' + this_step + '"]').html('LET\'S TRY THAT AGAIN')
                            window.location.replace(base_url + 'createaccount#password')
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
                    if (r.includes('the_proceed')) {
                        window.location.href = base_url + "onboarding"
                    } else {
                        $(this).html('LET\'S TRY THAT AGAIN')
                        $(`<p class="the_login_error bg-danger" style="padding: 10px;">${r}</p>`).insertBefore($('input[name="user_password"]'))
                    }
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
            window.location.replace(base_url + 'createaccount#type')
        }
        if (this_step == 'code') {
            $('.right_home_panel video').attr('src', base_url + 'assets/video/register-email-intro.mp4')
            $('.the_email').show()
            $('.the_code').hide()
            window.location.replace(base_url + 'createaccount#email')
        }
        if (this_step == 'password') {
            $('.right_home_panel video').attr('src', base_url + 'assets/video/register-confirm-email-loop.mp4')
            $('.the_code').show()
            $('.the_password').hide()
            window.location.replace(base_url + 'createaccount#code')
        }
    })
}

if (page.includes('/onboarding') === true) {

    setTimeout(function () {
        $('.process-step .process-stepper:first').animate({ fontSize: "20px", fontWeight: "700" }, 300)
        $('.process-step .process-stepper:first span:first').hide(500)
        $('.process-flow').animate({ height: "13%" }, 500)
    }, 300);

    $('.finishPersonal').on('click', (e) => {
        e.preventDefault()
        $('.the_login_error').remove()

        if ($('[name="the_person_first_name"]').val() === '' || $('[name="the_person_last_name"]').val() === '') {
            $(this).html('LET\'S TRY THAT AGAIN')
            $('.formPersonal').prepend($(`<div class="the_login_error bg-danger" style="padding: 10px;">You must enter both your <strong>first</strong> and <strong>last</strong> names</div>`))
            return false;
        }

        $.ajax({
            url: base_url + 'onboarding/personal',
            method: 'GET',
            data: $('.formPersonal').serialize(),
            success: (response) => {
                console.log(response)
                if (response.includes('the_proceed')) {
                    $('.process-step .process-stepper:first').animate({ fontSize: "16px", fontWeight: "300" }, 300)
                    $('.process-step .process-stepper:nth-child(2)').animate({ fontSize: "20px", fontWeight: "700" }, 300)

                    $('.process-step .process-stepper:first span:first').show(500)
                    $('.process-step .process-stepper:nth-child(2) span:first').hide(500)

                    $('.process-flow').animate({ height: "38%" }, 700)
                    $('.formPersonal').animate({ width: 'toggle' }, 300);
                } else {
                    $(this).html('LET\'S TRY THAT AGAIN')
                    $('.formPersonal').prepend($(`<div class="the_login_error bg-danger" style="padding: 10px;">${response}</div>`))
                }
            }
        })

    })

    $('.finishPhoto').on('click', (e) => {
        e.preventDefault()
        $('.the_login_error').remove()
        console.log(new FormData($('.formPhoto')[0]))
        $.ajax({
            url: base_url + 'onboarding/photo',
            method: 'POST',
            data: new FormData($('.formPhoto')[0]),
            cache: false,
            contentType: false,
            processData: false,
            success: (response) => {
                if (response.includes('the_proceed')) {
                    $('.process-step .process-stepper:nth-child(2)').animate({ fontSize: "16px", fontWeight: "300" }, 500)
                    $('.process-step .process-stepper:nth-child(3)').animate({ fontSize: "20px", fontWeight: "700" }, 500)

                    $('.process-step .process-stepper:nth-child(2) span:first').show(500)
                    $('.process-step .process-stepper:nth-child(3) span:first').hide(500)

                    $('.process-flow').animate({ height: "63%" }, 500)
                    $('.formPhoto').animate({ width: 'toggle' }, 300);
                } else {
                    $(this).html('LET\'S TRY THAT AGAIN')
                    $('.formPhoto').prepend($(`<div class="the_login_error bg-danger" style="padding: 10px;">${response}</div>`))
                }
            }
        })
    })

    $('.skipPhoto').on('click', () => {
        $('.the_login_error').remove()
        $('.process-step .process-stepper:nth-child(2)').animate({ fontSize: "16px", fontWeight: "300" }, 500)
        $('.process-step .process-stepper:nth-child(3)').animate({ fontSize: "20px", fontWeight: "700" }, 500)

        $('.process-step .process-stepper:nth-child(2) span:first').show(500)
        $('.process-step .process-stepper:nth-child(3) span:first').hide(500)

        $('.process-flow').animate({ height: "63%" }, 500)
        $('.formPhoto').animate({ width: 'toggle' }, 300);
    })

    $('.finishAddress').on('click', (e) => {
        e.preventDefault()

        if ($('[name="the_person_street"]').val() === '' ||
            $('[name="the_person_address"]').val() === '' ||
            $('[name="the_person_postal"]').val() === '' ||
            $('[name="the_person_country"]').val() === '' ||
            $('[name="the_person_county"]').val() === '' ||
            $('[name="the_person_city"]').val() === '') {
            $(this).html('LET\'S TRY THAT AGAIN')
            $('.formAddress').prepend($(`<div class="the_login_error bg-danger" style="padding: 10px;">All Fields are required</div>`))
            return false;
        }

        $('.the_login_error').remove()
        $('.process-step .process-stepper:nth-child(3)').animate({ fontSize: "16px", fontWeight: "300" }, 300)
        $('.process-step .process-stepper:last').animate({ fontSize: "20px", fontWeight: "700" }, 300)

        $('.process-step .process-stepper:nth-child(3) span:first').show(500)
        $('.process-step .process-stepper:last span:first').hide(500)
        $('.process-flow').animate({ height: "89%" }, 500)

        $.ajax({
            url: base_url + 'onboarding/address',
            method: 'GET',
            data: $('.formAddress').serialize(),
            success: (response) => {
                console.log(response)
                if (response.includes('the_proceed')) {
                    $('.process-step .process-stepper:last').animate({ fontSize: "16px", fontWeight: "300" }, 300)
                    $('.process-step .process-stepper:last span:first').show(500)
                    $('.process-flow').animate({ height: "100%" }, 500)
                    $('.finishAddress').css({ background: "#ffffff" })
                    $('.startPhoto').hide()
                    $('.finishAddress').html(`<img src="${base_url}assets/images/loader.gif" alt="loader" style="width: 100px; height: auto" />`)
                    setTimeout(function () {
                        window.location.href = base_url + 'overview'
                    }, 1000);

                } else {
                    $(this).html('LET\'S TRY THAT AGAIN')
                    $('.formAddress').prepend($(`<div class="the_login_error bg-danger" style="padding: 10px;">${response}</div>`))

                    $('.startPhoto').show()
                }
            },
            error: (e) => {
                $('.startPhoto').show()
            }
        })
    })

    $('.startPersonal').on('click', () => {
        $('.process-step .process-stepper:first').animate({ fontSize: "20px", fontWeight: "700" }, 300)
        $('.process-step .process-stepper:nth-child(2)').animate({ fontSize: "16px", fontWeight: "300" }, 300)

        $('.process-step .process-stepper:first span:first').hide(500)
        $('.process-step .process-stepper:nth-child(2) span:first').show(500)

        $('.process-flow').animate({ height: "13%" }, 500)
        $('.formPersonal').animate({ width: 'toggle' }, 300);
    })

    $('.startPhoto').on('click', () => {
        $('.process-step .process-stepper:nth-child(2)').animate({ fontSize: "20px", fontWeight: "700" }, 300)
        $('.process-step .process-stepper:nth-child(3)').animate({ fontSize: "16px", fontWeight: "300" }, 300)

        $('.process-step .process-stepper:nth-child(2) span:first').hide(500)
        $('.process-step .process-stepper:nth-child(3) span:first').show(500)

        $('.process-flow').animate({ height: "38%" }, 700)
        $('.formPhoto').animate({ width: 'toggle' }, 300);
    })

}

if (page.includes('/auth/login') === true) {
    $('form[name="the_login_form"]').on('submit', (e) => {
        e.preventDefault()
        $('button[name="the_submit"]').html(`<img src="${base_url}assets/images/loader.gif" alt="loader" style="width: 100px; height: auto" />`)
        $.ajax({
            url: base_url + 'auth/kuingia',
            data: $('form[name="the_login_form"]').serialize(),
            method: 'POST',
            success: (r) => {
                if (r.includes('the_login')) {
                    window.location.href = base_url + 'overview'
                } else {
                    $('button[name="the_submit"]').html('LET\'S TRY THAT AGAIN')
                    $('.the_login_error').remove();
                    $(`<p class="the_login_error bg-danger" style="padding: 10px;">${r}</p>`).insertBefore($('button[name="the_submit"]'))
                }
            },
            error: (r) => {
                console.log(r)
                $('button[name="the_submit"]').html('LET\'S TRY THAT AGAIN');
                $('.the_login_error').remove();
                $('<p class="the_login_error bg-danger" style="padding: 10px;">There has been an error</p>').insertBefore($('button[name="the_submit"]'))
            }
        })
    })
}

if (page.includes('/auth/recover') === true) {
    $('form[name="the_recover_form"]').on('submit', (e) => {
        e.preventDefault()
        $('.the_login_error').remove();
        $('button[name="the_submit"]').html(`<img src="${base_url}assets/images/loader.gif" alt="loader" style="width: 100px; height: auto" />`)
        $.ajax({
            url: base_url + 'auth/recover_code',
            method: 'POST',
            data: $('form[name="the_recover_form"]').serialize(),
            success: (r) => {
                if (r.includes('the_proceed')) {
                    $('form[name="the_recover_form"]').hide()
                    $('form[name="the_code_form"]').show()
                } else {
                    $('button[name="the_submit"]').html('LET\'S TRY THAT AGAIN')
                    $('.the_login_error').remove();
                    $(`<p class="the_login_error bg-danger" style="padding: 10px;">${r}</p>`).insertBefore($('button[name="the_submit"]'))
                }
            },
            error: (r) => {
                console.log(r)
                $('button[name="the_submit"]').html('LET\'S TRY THAT AGAIN');
                $('.the_login_error').remove();
                $('<p class="the_login_error bg-danger" style="padding: 10px;">There has been an error</p>').insertBefore($('button[name="the_submit"]'))
            }
        })
    })

    $('form[name="the_code_form"]').on('submit', (e) => {
        e.preventDefault()
        $('.the_login_error').remove();
        $('button[name="the_code_submit"]').html(`<img src="${base_url}assets/images/loader.gif" alt="loader" style="width: 100px; height: auto" />`)
        $.ajax({
            url: base_url + 'auth/check_recovery_code',
            method: 'POST',
            data: $('form[name="the_code_form"]').serialize(),
            success: (r) => {
                if (r.includes('the_proceed')) {
                    $('form[name="the_code_form"]').hide()
                    $('form[name="the_password_form"]').show()
                } else {
                    $('button[name="the_code_submit"]').html('LET\'S TRY THAT AGAIN')
                    $('.the_login_error').remove();
                    $(`<p class="the_login_error bg-danger" style="padding: 10px;">${r}</p>`).insertBefore($('button[name="the_code_submit"]'))
                }
            },
            error: (r) => {
                console.log(r)
                $('button[name="the_code_submit"]').html('LET\'S TRY THAT AGAIN');
                $('.the_login_error').remove();
                $('<p class="the_login_error bg-danger" style="padding: 10px;">There has been an error</p>').insertBefore($('button[name="the_code_submit"]'))
            }
        })
    })

    $('form[name="the_password_form"]').on('submit', (e) => {
        e.preventDefault()
        $('.the_login_error').remove();
        $('button[name="the_password_submit"]').html(`<img src="${base_url}assets/images/loader.gif" alt="loader" style="width: 100px; height: auto" />`)
        $.ajax({
            url: base_url + 'auth/change_password',
            method: 'POST',
            data: $('form[name="the_password_form"]').serialize(),
            success: (r) => {
                if (r.includes('the_proceed')) {
                    window.location.href = base_url + 'auth/login'
                } else {
                    $('button[name="the_password_submit"]').html('LET\'S TRY THAT AGAIN')
                    $('.the_login_error').remove();
                    $(`<p class="the_login_error bg-danger" style="padding: 10px;">${r}</p>`).insertBefore($('button[name="the_password_submit"]'))
                }
            },
            error: (r) => {
                console.log(r)
                $('button[name="the_password_submit"]').html('LET\'S TRY THAT AGAIN');
                $('.the_login_error').remove();
                $('<p class="the_login_error bg-danger" style="padding: 10px;">There has been an error</p>').insertBefore($('button[name="the_password_submit"]'))
            }
        })
    })
}

if (page.includes('/wallet/create') === true) {
    $('.the_wallet_currencies').hide()
    
    $('.get_wallet_currency').on('input', () => {
        $.ajax({
            url: base_url + 'p/currency',
            method: 'GET',
            data: $('.walletPage').serialize(),
            success: (currency_list) => {
                $('.the_wallet_currencies').show()
                $('.the_wallet_currencies').html(currency_list)
            }
        })
    })

    $('.the_wallet_create_button').on('click', (e) => {
        e.preventDefault()
        let data = { 'the_wallet_currency': $('.submit_the_wallet_currency').val() }
        $.ajax({
            url: base_url + 'wallet/add',
            method: 'GET',
            data: $('.walletPage').serialize(),
            success: (wallet_result) => {

                console.log(wallet_result)
                if (wallet_result.includes('Error:')) {
                    $('.the_wallet_create_button').html('LET\'S TRY THAT AGAIN')
                    $('.the_login_error').remove();
                    $(`<p class="the_login_error bg-danger" style="padding: 10px;">${wallet_result}</p>`).insertBefore($('.the_wallet_create_button'))
                    return false;
                }
                window.location.href = base_url + "wallet/view/" + wallet_result

            }
        })
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