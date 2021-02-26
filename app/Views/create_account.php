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
    <link rel="stylesheet" href="<?php echo base_url('node_modules/font-awesome/css/font-awesome.css?stamp=' . time()); ?>" />
    <link rel="stylesheet" href="<?php echo base_url('node_modules/bootstrap/dist/css/bootstrap.css'); ?>" />
    <link rel="stylesheet" href="<?php echo base_url('node_modules/bootstrap/dist/css/bootstrap-grid.css'); ?>" />
    <link rel="stylesheet" href="<?php echo base_url('node_modules/bootstrap/dist/css/bootstrap-reboot.css'); ?>" />


    <script src="<?php echo base_url('node_modules/jquery/dist/jquery.min.js?stamp=' . time()); ?>"></script>
</head>

<body>

    <div class="main_content">
        <div class="row main_row">
            <div class="col-sm-8 left_home_panel">
                <div class="row top">
                    <div class="col-md-8 col-sm-7 col-6">
                        <a href="<?php echo base_url(); ?>"><img src="<?php echo base_url('assets/images/logo.png'); ?>" class="logo" /> MonMax</a>
                    </div>
                    <div class="col-md-4 col-sm-5 col-6 text-right">
                        <a href="<?php echo base_url('auth/login'); ?>">Log In</a>
                        <a href="#">English <span class="fa fa-chevron-down"></span></a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 yourself" style="display: none;">
                        <h3 class="the_title">Tell us about yourself</h3>
                        <div class="user_type">
                            <table>
                                <tbody>
                                    <tr>
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
                                    <tr>
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
                                    <tr>
                                        <td><img src="<?php echo base_url('assets/images/logo.png') ?>" /></td>
                                        <td class="user-type">Individual<span>Best suited for Individuals and Personal use</span></td>
                                        <td><span class="fa fa-chevron-right"></span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <span class="go_back"><a href="<?php echo base_url() ?>"><span class="fal fa fa-arrow-left"></span> Go Back</a></span>
                    </div>
                    <div class="col-12 the_email">
                        <h3 class="the_title">Enter your email address</h3>
                        <span class="the_subtitle">You'll need to log in and access your account</span>
                        <div class="the_email_input">
                            <span>Email Address</span>
                            <input type="email" placeholder="you@mail.com" class="form_control" />
                            <button type="submit">NEXT <span class="fal fa fa-arrow-next"></span></button>
                            <span class="agreement">By clicking on submit you agree to out <a href="<?php echo base_url('privacy_policy'); ?>">Privacy Policy</a> applicable to the processing of your account</span>
                        </div>
                        <span class="go_back"><a href="#" data-step="2"><span class="fal fa fa-arrow-left"></span> Go Back</a></span>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 hidden-xs right_home_panel">
                <video muted autoplay loop>
                    <source src="<?php echo base_url('assets/video/register-email-intro.mp4') ?>" type="video/mp4">
                </video>
                <span style="background: url(https://miro.medium.com/max/1838/1*_KZKYMI2hlndOSGL02PK9w.gif);"></span>
            </div>
        </div>
    </div>
    <script src="<?php echo base_url('assets/js/pryce.js?stamp=' . time()); ?>"></script>
    <script src="<?php echo base_url('node_modules/bootstrap/dist/js/bootstrap.js'); ?>"></script>
    <script src="<?php echo base_url('node_modules/bootstrap/dist/js/bootstrap.bundle.js'); ?>"></script>

</body>

</html>