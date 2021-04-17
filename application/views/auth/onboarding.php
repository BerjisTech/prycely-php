<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>
        <?php
        if (isset($page_title)) {
            echo $page_title . ' | ';
        }
        ?> MonMax
    </title>
    <meta name="description" content="The small framework with powerful features">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="/favicon.ico" />
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/chama/application/views/base/header.php'); ?>
</head>

<body>
    <div class="side_bar onboarder">
        <!-- 0% 13% 38% 63% 89% loading & save to db 100%; redirecting you -->
        <div class="flow">
            <div class="process">
                <div class="process-flow"></div>
            </div>
            <div class="process-step">
                <div class="process-stepper">
                    <span class="entypo-user"></span><span class="step-name">Your name</span>
                </div>
                <div class="process-stepper">
                    <span class="entypo-picture"></span><span class="step-name">Your photo</span>
                </div>
                <div class="process-stepper">
                    <span class="entypo-compass"></span><span class="step-name">Your address</span>
                </div>
                <div class="process-stepper">
                    <span class="entypo-check"></span><span class="step-name">Verify account</span>
                </div>
            </div>
        </div>
    </div>
    <div class="main-content" style="padding: 0px;">
        <div class="onboarding-main">
            <form class="onboarding-pane formPersonal">
                <h2 class="ob_pane_title">Your personal info</h2>

                <div class="input-group">
                    <label for="the_person_first_name">First name</label>
                    <input type="text" name="the_person_first_name" class="form-control" placeholder="Your first name here" required />
                </div>
                <div class="input-group">
                    <label for="the_person_last_name">Last name</label>
                    <input type="text" name="the_person_last_name" class="form-control" placeholder="Your last name here" required />
                </div>
                <button type="submit" class="finishPersonal onBoardNext">Next<span class="entypo-right-thin"></span></button>
            </form>
            <form class="onboarding-pane formPhoto" enctype="multipart/form-data">
                <div class="fileinput fileinput-new" data-provides="fileinput"><input type="hidden">
                    <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;" data-trigger="fileinput">
                        <img src="<?php echo base_url('assets/images/logo.png'); ?>" id="the_person_photo_placeholder" class="the_person_photo_placeholder" alt="..." />
                    </div>
                    <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 10px;"></div>
                    <div>
                        <span class="btn btn-white btn-file">
                            <span class="fileinput-new">Select image</span>
                            <span class="fileinput-exists">Change</span>
                            <input type="file" name="the_person_photo" accept="image/*" onchange="$('.fileinput-new .fileinput-exists').show();$('.fileinput-exists .fileinput-new').hide();document.getElementById('the_person_photo_placeholder').src = window.URL.createObjectURL(this.files[0])">
                        </span>
                        <a href="#" class="btn btn-orange fileinput-exists" onclick="$('#the_person_photo_placeholder').attr('src', '<?php echo base_url('assets/images/logo.png'); ?>');$('.fileinput-new .fileinput-exists').hide();$('.fileinput-exists .fileinput-new').show();" data-dismiss="fileinput">Remove</a>
                    </div>
                </div>
                <span class="entypo-left-thin startPersonal onBoardBack">Back</span>
                <button type="submit" class="finishPhoto onBoardNext">Next<span class="entypo-right-thin"></span></button>
            </form>
            <form class="onboarding-pane formAddress">
                <h2 class="ob_pane_title">Your personal info</h2>

                <div class="input-group">
                    <label for="the_person_first_name">First name</label>
                    <input type="text" name="the_person_first_name" class="form-control" placeholder="Your first name here" required />
                </div>
                <div class="input-group">
                    <label for="the_person_last_name">Last name</label>
                    <input type="text" name="the_person_last_name" class="form-control" placeholder="Your last name here" required />
                </div>
                <span class="entypo-left-thin startPhoto onBoardBack">Back</span>
                <button type="submit" class="finishAddress onBoardNext">Finish</span></button>
            </form>
        </div>
    </div>

    <?php include($_SERVER['DOCUMENT_ROOT'] . '/chama/application/views/base/footer.php'); ?>
</body>

</html>