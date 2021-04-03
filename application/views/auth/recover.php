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
            <div class="col-sm-6 left_home_panel">

                <div class="col-sm-2 hidden-xs"></div>
                <form autocomplete="off" autocapitalize="ON" class="col-sm-8 col-xs-12 the_email_input" name="the_recover_form">
                    <a href="<?php echo base_url(); ?>"><img src="<?php echo base_url('assets/images/logo.png'); ?>" class="logo" style="margin: 0px;" /> <span class="logo-text">MonMax</span></a>
                    <br /><br />
                    <p class="the_email_title">Change your password</p>
                    <br />
                    <small>Forgot your password? Enter the email address you usually use to sign in to your company's Qonto account!</small>
                    <br /><br />
                    <div class="col-xs-12 input-group">
                        <label>Email adress</label>
                        <input autocomplete="off" type="email" name="the_email" />
                    </div>
                    <br />
                    <br />
                    <div class="col-xs-12 input-group" style="vertical-align: middle;">
                        <button type="submit" name="the_submit" style="width: auto; margin-top: auto;">Login</button>
                        <a href="<?php echo base_url('auth/recover'); ?>" class="pull-right" style="margin-top: 12px;">Forgot password?</a>
                    </div>
                    <hr />
                    <div>
                        <p>Don't have an account? <a href="<?php echo base_url('createaccount'); ?>">Open an account</a></p>
                    </div>
                </form>

                <form autocomplete="off" autocapitalize="ON" class="hidden col-sm-8 col-xs-12 the_email_input" name="the_code_form">
                    <a href="<?php echo base_url(); ?>"><img src="<?php echo base_url('assets/images/logo.png'); ?>" class="logo" style="margin: 0px;" /> <span class="logo-text">MonMax</span></a>
                    <br /><br />
                    <p class="the_email_title">Verify code</p>
                    <br />
                    <small>Check your email for the code we sent you.</small>
                    <br /><br />
                    <div class="col-xs-12 input-group">
                        <input autocomplete="off" type="text" name="the_code" />
                    </div>
                    <br />
                    <br />
                    <div class="col-xs-12 input-group" style="vertical-align: middle;">
                        <button type="submit" name="the_code_submit" style="width: auto; margin-top: auto;">Login</button>
                        <a href="<?php echo base_url('auth/recover'); ?>" class="pull-right" style="margin-top: 12px;">Forgot password?</a>
                    </div>
                    <hr />
                    <div>
                        <p>Don't have an account? <a href="<?php echo base_url('createaccount'); ?>">Open an account</a></p>
                    </div>
                </form>

                <form autocomplete="off" autocapitalize="ON" class="hidden col-sm-8 col-xs-12 the_email_input" name="the_password_form">
                    <a href="<?php echo base_url(); ?>"><img src="<?php echo base_url('assets/images/logo.png'); ?>" class="logo" style="margin: 0px;" /> <span class="logo-text">MonMax</span></a>
                    <br /><br />
                    <p class="the_email_title">Change your password</p>
                    <br />
                    <small>Choose a new password</small>
                    <br /><br />
                    <div class="col-xs-12 input-group">
                        <label>New password</label>
                        <input autocomplete="off" type="password" name="the_password" />
                    </div>
                    <br />
                    <br />
                    <div class="col-xs-12 input-group" style="vertical-align: middle;">
                        <button type="submit" name="the_password_submit" style="width: auto; margin-top: auto;">Login</button>
                        <a href="<?php echo base_url('auth/recover'); ?>" class="pull-right" style="margin-top: 12px;">Forgot password?</a>
                    </div>
                    <hr />
                    <div>
                        <p>Don't have an account? <a href="<?php echo base_url('createaccount'); ?>">Open an account</a></p>
                    </div>
                </form>
            </div>
            <div class="col-sm-6 hidden-xs right_home_panel" style="vertical-align: middle; text-align: center;">
                <div style="width: 250px; margin-left: 30%; margin-top: 30%;" class="fs" id="lottie-container-ember16"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 1000" width="1000" height="1000" preserveAspectRatio="xMidYMid meet" style="width: 100%; height: 100%; transform: translate3d(0px, 0px, 0px);">
                        <defs>
                            <clipPath id="__lottie_element_132">
                                <rect width="1000" height="1000" x="0" y="0"></rect>
                            </clipPath>
                            <linearGradient id="__lottie_element_136" spreadMethod="pad" gradientUnits="userSpaceOnUse" x1="-286.23199462890625" y1="-429.5350036621094" x2="291.7300109863281" y2="737.8319702148438">
                                <stop offset="0%" stop-color="rgb(255,135,135)" stop-opacity="1"></stop>
                                <stop offset="50%" stop-color="rgb(255,135,135)" stop-opacity="0.5"></stop>
                                <stop offset="100%" stop-color="rgb(255,135,135)" stop-opacity="0"></stop>
                            </linearGradient>
                            <linearGradient id="__lottie_element_144" spreadMethod="pad" gradientUnits="userSpaceOnUse" x1="-22.30500030517578" y1="-50.59400177001953" x2="42.51599884033203" y2="294.91400146484375">
                                <stop offset="0%" stop-color="rgb(107,90,237)"></stop>
                                <stop offset="50%" stop-color="rgb(98,81,231)"></stop>
                                <stop offset="100%" stop-color="rgb(90,72,224)"></stop>
                            </linearGradient>
                            <linearGradient id="__lottie_element_148" spreadMethod="pad" gradientUnits="userSpaceOnUse" x1="330.43798828125" y1="241.843994140625" x2="14.25" y2="-128.781005859375">
                                <stop offset="0%" stop-color="rgb(73,57,196)"></stop>
                                <stop offset="50%" stop-color="rgb(90,73,216)"></stop>
                                <stop offset="100%" stop-color="rgb(107,90,237)"></stop>
                            </linearGradient>
                        </defs>
                        <g clip-path="url(#__lottie_element_132)">
                            <g transform="matrix(1,0,0,1,191.40301513671875,-0.25)" opacity="1" style="display: block;">
                                <g opacity="1" transform="matrix(1,0,0,1,308.5929870605469,500.25)">
                                    <path fill="url(#__lottie_element_136)" fill-opacity="1" d=" M0.0010000000474974513,-500 C-170.29299926757812,-500 -308.3429870605469,-361.95001220703125 -308.3429870605469,-191.656005859375 C-308.3429870605469,-83.70800018310547 -252.85699462890625,11.267999649047852 -168.86300659179688,66.35199737548828 C-168.86300659179688,66.35199737548828 -282.9639892578125,500 -282.9639892578125,500 C-282.9639892578125,500 282.9649963378906,500 282.9649963378906,500 C282.9649963378906,500 168.86300659179688,66.35199737548828 168.86300659179688,66.35199737548828 C252.85800170898438,11.267999649047852 308.3429870605469,-83.70800018310547 308.3429870605469,-191.656005859375 C308.3429870605469,-361.95001220703125 170.29400634765625,-500 0.0010000000474974513,-500z"></path>
                                </g>
                            </g>
                            <g transform="matrix(0.9925869107246399,0.12153677642345428,-0.12153677642345428,0.9925869107246399,109.39361572265625,215.74449157714844)" opacity="1" style="display: block;">
                                <g opacity="1" transform="matrix(1,0,0,1,47.542999267578125,85.88700103759766)">
                                    <path fill="rgb(211,207,251)" fill-opacity="1" d=" M8.946999549865723,85.63700103759766 C8.946999549865723,85.63700103759766 1.2790000438690186,37.066001892089844 24.285999298095703,8.946999549865723 C47.292999267578125,-19.17300033569336 41.527000427246094,-44.10499954223633 36.415000915527344,-49.21699905395508 C31.302000045776367,-54.33000183105469 24.285999298095703,-19.172000885009766 21.729000091552734,-26.840999603271484 C19.17300033569336,-34.5099983215332 1.2790000438690186,-85.63700103759766 -14.059000015258789,-85.63700103759766 C-29.39699935913086,-85.63700103759766 -47.292999267578125,-49.847999572753906 -39.624000549316406,-29.39699935913086 C-36.88800048828125,-22.10300064086914 -33.821998596191406,4.163000106811523 -14.156000137329102,23.82900047302246 C-11.345999717712402,46.30500030517578 -6.390999794006348,80.7030029296875 -6.390999794006348,85.63700103759766 C-6.390999794006348,85.63700103759766 8.946999549865723,85.63700103759766 8.946999549865723,85.63700103759766z"></path>
                                </g>
                            </g>
                            <g transform="matrix(1,0,0,1,49.625,362.8590087890625)" opacity="1" style="display: block;">
                                <g opacity="1" transform="matrix(1,0,0,1,270.85101318359375,262.72900390625)">
                                    <path fill="url(#__lottie_element_144)" fill-opacity="1" d=" M229.78399658203125,-16.104000091552734 C-164.02378845214844,287.79742431640625 -215.94558715820312,-158.97914123535156 -207.9268341064453,-246.93251037597656 C-206.33798217773438,-262.7987365722656 -192.59466552734375,-269.1956787109375 -181.20338439941406,-268.3443908691406 C-166.33798217773438,-267.2355651855469 -161.69947814941406,-255.07205200195312 -160.78346252441406,-240.7323760986328 C-155.72145080566406,-165.64535522460938 -98.57565307617188,-5.210793972015381 -33.20664978027344,-32.73479461669922 C45.90534973144531,-66.04579162597656 98.21570587158203,-205.296630859375 266.45343017578125,-203.66018676757812 C266.45343017578125,-203.66018676757812 229.78399658203125,-16.104000091552734 229.78399658203125,-16.104000091552734z"></path>
                                </g>
                            </g>
                            <g transform="matrix(1,0,0,1,0,0)" opacity="1" style="display: block;">
                                <g opacity="1" transform="matrix(1,0,0,1,586.8049926757812,706.2750244140625)">
                                    <path fill="url(#__lottie_element_148)" fill-opacity="1" d=" M-196.15499877929688,293.7250061035156 C-183.36500549316406,211.77499389648438 -164.98500061035156,68.24500274658203 -166.3249969482422,-73.36499786376953 C-167.71499633789062,-220.44500732421875 -22.073999404907227,-283.17498779296875 -22.073999404907227,-283.17498779296875 C-22.073999404907227,-283.17498779296875 121.3949966430664,-293.7250061035156 158.02499389648438,-243.48500061035156 C162.3350067138672,-238.90499877929688 166.5050048828125,-233.7449951171875 170.5449981689453,-228.0749969482422 C147.36500549316406,-193.01499938964844 117.21499633789062,-162.97500610351562 82.05500030517578,-139.9250030517578 C82.05500030517578,-139.9250030517578 196.15499877929688,293.7250061035156 196.15499877929688,293.7250061035156 C196.15499877929688,293.7250061035156 -196.15499877929688,293.7250061035156 -196.15499877929688,293.7250061035156z"></path>
                                </g>
                            </g>
                            <g transform="matrix(0.9987905621528625,0.049167316406965256,-0.049167316406965256,0.9987905621528625,471.4032287597656,41.0517578125)" opacity="1" style="display: block;">
                                <g opacity="1" transform="matrix(1,0,0,1,142.2239990234375,232.7239990234375)">
                                    <path fill="rgb(255,255,255)" fill-opacity="1" d=" M88.56600189208984,25.19700050354004 C102.48200225830078,-23.716999053955078 74.11000061035156,-74.6500015258789 25.19700050354004,-88.56600189208984 C-23.716999053955078,-102.48200225830078 -74.6500015258789,-74.11000061035156 -88.56600189208984,-25.19700050354004 C-102.48200225830078,23.716999053955078 -74.11100006103516,74.6500015258789 -25.19700050354004,88.56600189208984 C23.715999603271484,102.48200225830078 74.6500015258789,74.11100006103516 88.56600189208984,25.19700050354004z"></path>
                                </g>
                                <g opacity="1" transform="matrix(1,0,0,1,154.66099548339844,171.57899475097656)">
                                    <path fill="rgb(28,15,124)" fill-opacity="1" d=" M-66.54299926757812,-133.9969940185547 C-102.58100128173828,-171.3300018310547 -154.41200256347656,-23.22800064086914 -60.15700149536133,0.621999979019165 C34.09700012207031,24.472999572753906 29.11199951171875,73.44599914550781 23.356000900268555,113.46399688720703 C21.03700065612793,129.58700561523438 39.28499984741211,171.3300018310547 80.86100006103516,138.78599548339844 C117.01499938964844,110.48799896240234 154.41200256347656,23.66200065612793 91.58300018310547,-45.76100158691406 C28.753000259399414,-115.18399810791016 2.805999994277954,-62.159000396728516 -66.54299926757812,-133.9969940185547z"></path>
                                </g>
                            </g>
                        </g>
                    </svg>
                </div>
            </div>
        </div>
    </div>
    <script src="<?php echo base_url('assets/js/pryce.js?stamp=' . time()); ?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.js'); ?>" id="script-resource-3"></script>

</body>

</html>