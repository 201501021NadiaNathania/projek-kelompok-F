<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Manajemen Proyek</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="This is an example dashboard created using build-in elements and components.">
    <meta name="msapplication-tap-highlight" content="no">
    <script src="js/web3Webpacked.min.js"></script>
    <link href="<?php echo base_url('./assets/css/main.css'); ?>" rel="stylesheet"></head>
<body>
<div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
<?php
include 'menu.php';
$menu = new menu();
$menu->atas();
echo "<div class='ui-theme-settings'>
        <button type='button' id='TooltipDemo' class='btn-open-options btn btn-warning'></button>
      </div>
      <div class='app-main__outer'>";
$menu->show();
$menu->footer();
?>
</div>
<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
<script type="text/javascript" src="<?php echo base_url('./assets/scripts/main.js'); ?>"></script></body>
</html>