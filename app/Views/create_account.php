<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>On Boarding</title>
    <meta name="description" content="The small framework with powerful features">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="/favicon.ico" />
    <link rel="stylesheet" href="<?php echo base_url('assets/css/create_account.css?stamp=' . time()); ?>" />
    <link rel="stylesheet" href="<?php echo base_url('assets/css/create_account.mobile.css?stamp=' . time()); ?>" />
    <link rel="stylesheet" href="<?php echo base_url('assets/css/font-icons/entypo/css/entypo.css'); ?>" id="style-resource-2">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/font-icons/font-awesome/css/font-awesome.min.css'); ?>" id="style-resource-1">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Noto+Sans:400,700,400italic" id="style-resource-3">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.css'); ?>" id="style-resource-4">


    <script src="<?php echo base_url('assets/js/jquery-1.11.3.min.js'); ?>"></script>
</head>

<body>

    <div class="main_content">
        <div class="row main_row">
            <div class="col-sm-8 left_home_panel">
                <div class="row top">
                    <div class="col-md-8 col-sm-7 col-xs-6">
                        <a href="<?php echo base_url(); ?>"><img src="<?php echo base_url('assets/images/logo.png'); ?>" class="logo" /> <span class="logo-text">MonMax</span></a>
                    </div>
                    <div class="col-md-4 col-sm-5 col-xs-6 text-right">
                        <a href="<?php echo base_url('auth/login'); ?>">Log In</a>
                        <a href="#">English <span class="fa fa-chevron-down"></span></a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 yourself">
                        <h3 class="the_title">Tell us about yourself</h3>
                        <div class="user_type">
                            <table>
                                <tbody>
                                    <tr class="user_type_chooser" data-type="company">
                                        <td><img src="<?php echo base_url('assets/images/logo.png'); ?>" /></td>
                                        <td class="user-type">Company<span>Best suited for Companies</span></td>
                                        <td><span class="fa fa-chevron-right"></span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="user_type">
                            <table>
                                <tbody>
                                    <tr class="user_type_chooser" data-type="freelancer">
                                        <td><img src="<?php echo base_url('assets/images/freelancer.jpg'); ?>" /></td>
                                        <td class="user-type">Freelancer<span>Best suited for Freelancers</span></td>
                                        <td><span class="fa fa-chevron-right"></span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="user_type">
                            <table>
                                <tbody>
                                    <tr class="user_type_chooser" data-type="personal">
                                        <td><img src="<?php echo base_url('assets/images/logo.png') ?>" /></td>
                                        <td class="user-type">Individual<span>Best suited for Individuals and Personal use</span></td>
                                        <td><span class="fa fa-chevron-right"></span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <span class="go_back"><a href="<?php echo base_url() ?>" data-step="email"><span class="fal fa fa-arrow-left"></span> Go Back</a></span>
                    </div>
                    <div class="col-xs-12 the_email" style="display: none;">
                        <h3 class="the_title">Enter your email address</h3>
                        <span class="the_subtitle">You'll need to log in and access your account</span>
                        <div class="the_email_input">
                            <span class="the_email_input_title">Email Address</span>
                            <input autocomplete="FALSE" type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" placeholder="you@mail.com" class="form_control" name="user_email" />
                            <button type="submit" class="ca_next" data-step="email">NEXT <span class="fal fa fa-arrow-next"></span></button>
                            <span class="agreement">By clicking on submit you agree to out <a href="<?php echo base_url('privacy_policy'); ?>">Privacy Policy</a> applicable to the processing of your account</span>
                        </div>
                        <span class="go_back"><a href="#" class="back_link" data-step="email"><span class="fal fa fa-arrow-left"></span> Go Back</a></span>
                    </div>
                    <div class="col-xs-12 the_code" style="display: none;">
                        <h3 class="the_title">Your confirmation code is waiting for you in your email box!</h3>
                        <span class="the_subtitle">Enter the 6-digit confirmation code we've sent you at <span class="email_with_code"></span> to confirm your email address</span>
                        <div class="the_email_input">
                            <span class="the_email_input_title">Confirmation Code</span>
                            <input autocomplete="FALSE" type="text" pattern="[a-zA-Z0-9]{3}-[a-zA-Z0-9]{3}" placeholder="XXX-XXX" class="form_control" name="user_code" />
                            <span class="resend_code"><span class="fal fa fa-info-circle"></span> Didn't get any code? <a href="<?php echo base_url('privacy_policy'); ?>">Send a new code</a></span>
                            <button class="ca_next" data-step="code" type="submit">Confirm <span class="fal fa fa-arrow-next"></span></button>
                        </div>
                        <span class="go_back"><a href="#" class="back_link" data-step="code"><span class="fal fa fa-arrow-left"></span> Go Back</a></span>
                    </div>
                    <div class="col-xs-12 the_password" style="display: none;">
                        <h3 class="the_title">Create your password</h3>
                        <span class="the_subtitle">Choose a secure password that you can easily remember</span>
                        <div class="the_email_input">
                            <span class="the_email_input_title">Password</span>
                            <input autocomplete="FALSE" type="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" placeholder="******" class="form_control" name="user_password" />
                            <span class="resend_code"><span class="fal fa fa-info-circle"></span> Make sure your password is at least 8 characters long and avoid personal details like your date of birth, pet name, nickname or simple patterns like 1234 or 0000</span>
                            <button class="ca_next" data-step="password" type="submit">Confirm <span class="fal fa fa-arrow-next"></span></button>
                        </div>
                        <span class="go_back"><a href="#" class="back_link" data-step="password"><span class="fal fa fa-arrow-left"></span> Go Back</a></span>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 hidden-xs right_home_panel">
                <video muted autoplay loop>
                    <source src="<?php echo base_url('assets/video/register-country-loop.mp4') ?>" type="video/mp4">
                </video>
                <span style="background: url(https://miro.medium.com/max/1838/1*_KZKYMI2hlndOSGL02PK9w.gif);"></span>
            </div>
        </div>
    </div>
    <script src="<?php echo base_url('assets/js/pryce.js?stamp=' . time()); ?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.js'); ?>" id="script-resource-3"></script>

</body>

</html>