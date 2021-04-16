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
    <div class="main-content">

    </div>

    <?php include($_SERVER['DOCUMENT_ROOT'] . '/chama/application/views/base/footer.php'); ?>
</body>

</html>