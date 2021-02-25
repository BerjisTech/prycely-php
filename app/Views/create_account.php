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
                        <img src="<?php echo base_url('assets/images/logo.png'); ?>" class="logo"> MonMax
                    </div>
                    <div class="col-md-4 col-sm-5 col-6 text-right">
                            <a href="">Log In</a>
                            <a href="#">English <span class="fa fa-chevron-down"></span></a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 yourself">
                    <h3>Tell us about yourself</h3>
                    <div class="user_type">
                        <table>
                            <tbody>
                                <tr>
                                    <td><img src="<?php echo base_url('assets/images/logo.png') ?>" /></td>
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
                                    <td><img src="<?php echo base_url('assets/images/logo.png') ?>" /></td>
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
                    <span class="go_back"><span class="fal fa fa-arrow-left"></span> Go Back</span>
                </div>
            </div>
        </div>
        <div class="col-sm-4 hidden-xs right_home_panel">
            <span style="background: url(https://miro.medium.com/max/1838/1*_KZKYMI2hlndOSGL02PK9w.gif);"></span>
        </div>
    </div>
    </div>

    <script src="<?php echo base_url('node_modules/bootstrap/dist/js/bootstrap.js'); ?>"></script>
    <script src="<?php echo base_url('node_modules/bootstrap/dist/js/bootstrap.bundle.js'); ?>"></script>

</body>

</html>