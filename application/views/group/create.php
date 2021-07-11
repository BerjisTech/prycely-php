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
    <link rel="stylesheet" href="<?php echo base_url('assets/css/pryce.css?stamp=' . time()); ?>" />
    <link rel="stylesheet" href="<?php echo base_url('assets/css/pryce.mobile.css?stamp=' . time()); ?>" />
    <link rel="stylesheet" href="<?php echo base_url('assets/css/font-icons/entypo/css/entypo.css'); ?>" id="style-resource-2">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/font-icons/font-awesome/css/font-awesome.min.css'); ?>" id="style-resource-1">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Noto+Sans:400,700,400italic" id="style-resource-3">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.css'); ?>" id="style-resource-4">


    <script src="<?php echo base_url('assets/js/jquery-1.11.3.min.js'); ?>"></script>
</head>

<body>
    <script>
        let base_url = '<?php echo base_url(); ?>'
    </script>

    <div class="main_content">
        <div class="row main_row">
            <div class="col-sm-8 left_home_panel">
                <div class="row top">
                    <div class="col-md-8 col-sm-7 col-xs-6">
                    </div>
                    <div class="col-md-4 col-sm-5 col-xs-6 text-right">
                        <a href="<?php echo base_url('group '); ?>">cancel</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 yourself">
                        <h3 class="the_title">Which type group are you creating</h3>
                        <div class="user_type">
                            <table>
                                <tbody>
                                    <tr class="user_type_chooser" data-type="personal">
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
                                    <tr class="user_type_chooser" data-type="sacco">
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
                                    <tr class="user_type_chooser" data-type="wash">
                                        <td><img src="<?php echo base_url('assets/images/logo.png') ?>" /></td>
                                        <td class="user-type">Wash Wash<span>Laundering. Unlimited members. We are open to money laundering😜</span></td>
                                        <td><span class="fa fa-chevron-right"></span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <span class="go_back" onclick="window.history.back();"><span class="fal fa fa-arrow-left"></span> Go Back</span>
                    </div>
                    <div class="col-12 the_name" style="display: none;">
                        <h3 class="the_title">Choose Group Name</h3>
                        <span class="the_subtitle">They don't have to be unique. Just something that describes your group</span>
                        <div class="the_email_input">
                            <span class="the_email_input_title">Group Name</span>
                            <input autocomplete="FALSE" type="text" placeholder="The Money Group" class="form_control" name="group_name" />
                            <button type="submit" class="ca_next" data-step="name">NEXT <span class="fal fa fa-arrow-next"></span></button>
                            <span class="agreement">By clicking on submit you agree to out <a href="<?php echo base_url('privacy_policy'); ?>">Privacy Policy</a> applicable to the processing of your account</span>
                        </div>
                        <span class="go_back"><a href="#" class="back_link" data-step="name"><span class="fal fa fa-arrow-left"></span> Go Back</a></span>
                    </div>
                    <div class="col-12 the_description" style="display: none;">
                        <h3 class="the_title">Add A Group Goal</h3>
                        <span class="the_subtitle">A goal is a milestone and can be one of many you will hit. It's the amount of cash you intend to raise.</span>
                        <div class="the_email_input">
                            <span class="the_email_input_title">Group Goal</span>
                            <textarea autocomplete="FALSE" placeholder="Write here" class="form_control" name="group_description"></textarea>
                            <span class="resend_code"><span class="fal fa fa-info-circle"></span> This goal can be edited later</span>
                            <button class="ca_next" data-step="description" type="submit">NEXT <span class="fal fa fa-arrow-next"></span></button>
                        </div>
                        <span class="go_back"><a href="#" class="back_link" data-step="description"><span class="fal fa fa-arrow-left"></span> Go Back</a></span>
                    </div>
                    <div class="col-12 the_goal" style="display: none;">
                        <h3 class="the_title">Set a Goal</h3>
                        <span class="the_subtitle">How much do you and your group members intend to raise? This helps everyone keep track of the investment or saings progress</span>
                        <div class="the_email_input">
                            <div class="goal-block">
                                <div class="goal-details">
                                    <img src="<?php echo base_url('assets/images/flags/') . strtolower(substr($currencies[0]['code'], 0, 2)); ?>.svg" />
                                    <span><?php echo $currencies[0]['code']; ?></span>
                                    <span class="entypo-down-open" <?php if (count($currencies) == 1) {
                                                                        echo 'style="color: #F7F7F9;"';
                                                                    } ?>></span>
                                </div>
                                <div class="goal-amount-details">
                                    <span>Initial financial goal</span>
                                    <input type="number" name="group_goal" value="1000" />
                                </div>
                                <div class="goal-currency-drop">
                                    <input type="search" name="sCurrency" data-wallet="" placeholder="Search currency" />
                                    <?php foreach ($currencies as $currency) : ?>
                                        <div class="currency-select" onclick="change_group_currency('<?php echo $currency['code']; ?>', '<?php $currency['currency'] ?>', '<?php echo base_url('assets/images/flags/') . strtolower(substr($currency['code'], 0, 2)); ?>.svg')">
                                            <img src="<?php echo base_url('assets/images/flags/') . strtolower(substr($currency['code'], 0, 2)); ?>.svg" />
                                            <span><?php echo $currency['code']; ?></span>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                            <button class="ca_next" data-step="goal" type="submit">CREATE GROUP <span class="fal fa fa-arrow-next"></span></button>
                            <span class="go_back"><a href="#" class="back_link" data-step="goal"><span class="fal fa fa-arrow-left"></span> Go Back</a></span>
                        </div>
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