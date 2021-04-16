<?php
defined('BASEPATH') or exit('No direct script access allowed');
if (isset($user_details)) {
    if ($user_details->the_person_first == '' or $user_details->the_person_last == '' or $user_details->the_person_last == '') redirect(base_url('onboarding'));
} else {
    redirect(base_url('p/wrongturn'));
}
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
    <?php include('base/header.php'); ?>
</head>

<body>
    <?php include('base/nav.php'); ?>
    <div class="main-content">
        <?php include($page_name . '.php'); ?>
    </div>
    <?php include('base/modals.php'); ?>
    <?php include('base/footer.php'); ?>

</body>

</html>