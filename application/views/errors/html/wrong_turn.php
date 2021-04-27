<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>GO BACK NOW!</title>
</head>

<body style="overflow: hidden; color: #ffffff; text-shadow: 0px 0px 10px black; background: url(<?php echo base_url('assets/images/forest.jpg'); ?>); background-size: cover;">
    <div style="font: 20px normal Helvetica, Arial, sans-serif;height: 100vh; width: 100vw; display: flex; align-items: center; align-content: center; justify-content: center;; flex-direction: column;">
        <img src="<?php echo base_url('assets/images/wrong_turn.gif'); ?>" style="opacity: 0.2; width: auto; max-width: 500px; min-width: 300px; height: auto; margin-bottom: 20px;" />
        <h3>You sure you're still on the correct road? You may want to turn back.</h3>
        <a href="<?php echo base_url(); ?>" style="text-decoration: none; background: black; color: white; padding: 10px; margin: 20px; font-size: 16px;">OR GO TO THE HOMEPAGE</a>
    </div>
</body>

</html>