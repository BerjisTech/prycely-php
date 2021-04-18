<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Create New Group</title>
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
                    </div>
                    <div class="col-md-4 col-sm-5 col-xs-6 text-right">
                        <a href="" onclick="window.history.back()">cancel</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 yourself">
                        <h3 class="the_title">Which type group are you creating</h3>
                        <div class="user_type">
                            <table>
                                <tbody>
                                    <tr class="user_type_chooser" data-type="company">
                                        <td><img src="<?php echo base_url('assets/images/logo.png'); ?>" /></td>
                                        <td class="user-type">PRYCELY<span>Casual savings between close friends. 250 Members Max</span></td>
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
                                        <td class="user-type">SACCO<span>Official Savings. Plus project management. 500 Max</span></td>
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
                                        <td class="user-type">Wash Wash<span>Laundering. Unlimited members. We are open to money laundering😜</span></td>
                                        <td><span class="fa fa-chevron-right"></span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <span class="go_back" onclick="window.history.back();"><span class="fal fa fa-arrow-left"></span> Go Back</span>
                    </div>
                    <div class="col-xs-12 the_email" style="display: none;">
                        <h3 class="the_title">Choose Group Name</h3>
                        <span class="the_subtitle">They don't have to be unique. Just something that describes your group</span>
                        <div class="the_email_input">
                            <span class="the_email_input_title">Group Name</span>
                            <input autocomplete="FALSE" type="text" placeholder="The Money Group" class="form_control" name="group_name" />
                            <button type="submit" class="ca_next" data-step="email">NEXT <span class="fal fa fa-arrow-next"></span></button>
                            <span class="agreement">By clicking on submit you agree to out <a href="<?php echo base_url('privacy_policy'); ?>">Privacy Policy</a> applicable to the processing of your account</span>
                        </div>
                        <span class="go_back"><a href="#" class="back_link" data-step="email"><span class="fal fa fa-arrow-left"></span> Go Back</a></span>
                    </div>
                    <div class="col-xs-12 the_code" style="display: none;">
                        <h3 class="the_title">Add A Group Description</h3>
                        <span class="the_subtitle">Something short about this group.<span class="email_with_code"></span> to confirm your email address</span>
                        <div class="the_email_input">
                            <span class="the_email_input_title">Group Description</span>
                            <textarea autocomplete="FALSE" placeholder="Write here" class="form_control" name="group_description"></textarea>
                            <span class="resend_code"><span class="fal fa fa-info-circle"></span> Didn't get any code? <a href="<?php echo base_url('privacy_policy'); ?>">Send a new code</a></span>
                            <button class="ca_next" data-step="code" type="submit">NEXT <span class="fal fa fa-arrow-next"></span></button>
                        </div>
                        <span class="go_back"><a href="#" class="back_link" data-step="code"><span class="fal fa fa-arrow-left"></span> Go Back</a></span>
                    </div>
                    <div class="col-xs-12 the_password" style="display: none;">
                        <h3 class="the_title">Set a Goal</h3>
                        <span class="the_subtitle">How much do you and your group members intend to raise? This helps everyone keep track of the investment or saings progress</span>
                        <div class="the_email_input">
                            <span class="the_email_input_title">Group Goal</span>
                            <div style="width: 100%;" class="input-group">
                                <select>
                                    <option value="USD" data-thumbnail="<?php echo base_url('assets/images/flags/us.svg'); ?>"> USD</option>
                                    <option value="GBP" data-thumbnail="<?php echo base_url('assets/images/flags/gb.svg'); ?>"> GBP</option>
                                    <option value="GBP" data-thumbnail="<?php echo base_url('assets/images/flags/ca.svg'); ?>"> CAD</option>
                                    <option value="GBP" data-thumbnail="<?php echo base_url('assets/images/flags/ke.svg'); ?>"> KES</option>
                                    <option value="GBP" data-thumbnail="<?php echo base_url('assets/images/flags/jm.svg'); ?>"> JMD</option>
                                    <option value="GBP" data-thumbnail="<?php echo base_url('assets/images/flags/au.svg'); ?>"> AUD</option>
                                    <option value="GBP" data-thumbnail="<?php echo base_url('assets/images/flags/nz.svg'); ?>"> NZD</option>
                                    <option value="GBP" data-thumbnail="<?php echo base_url('assets/images/flags/cn.svg'); ?>"> CNY</option>
                                    <option value="GBP" data-thumbnail="<?php echo base_url('assets/images/flags/jp.svg'); ?>"> JPY</option>
                                    <option value="GBP" data-thumbnail="<?php echo base_url('assets/images/flags/ug.svg'); ?>"> UGS</option>
                                    <option value="GBP" data-thumbnail="<?php echo base_url('assets/images/flags/tz.svg'); ?>"> TZS</option>
                                    <option value="GBP" data-thumbnail="<?php echo base_url('assets/images/flags/eg.svg'); ?>"> EGP</option>
                                    <option value="GBP" data-thumbnail="<?php echo base_url('assets/images/flags/za.svg'); ?>"> SAR</option>
                                </select>
                                <input style="width: auto;" autocomplete="FALSE" type="number" placeholder="0.00" name="group_goal" />
                            </div>
                            <span class="resend_code"><span class="fal fa fa-info-circle"></span> Make sure your password is at least 8 characters long and avoid personal details like your date of birth, pet name, nickname or simple patterns like 1234 or 0000</span>
                            <button class="ca_next" data-step="password" type="submit">CREATE GROUP <span class="fal fa fa-arrow-next"></span></button>
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