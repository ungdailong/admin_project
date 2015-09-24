<?php
use Cake\Routing\Router;
?>
<!doctype html>
<html ng-app="minovateApp" ng-controller="MainCtrl" class="no-js {{containerClass}}">
<head>
<meta charset="utf-8">
<title>Minovate - Admin Dashboard</title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width">
<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
<link rel="icon" type="image/ico" href="favicon.ico">
<?= $this->Html->css("vendor.4575e575"); ?>
<?= $this->Html->css("main.53e5242d"); ?>
<script>
    var dashboardUrl = "<?php echo Router::url('/') ?>element/html/dashboard",
        appUrl = "<?php echo Router::url('/') ?>element/html/app",
        headerUrl = "<?php echo Router::url('/') ?>element/html/header",
        navUrl = "<?php echo Router::url('/') ?>element/html/nav",
        rightbarUrl = "<?php echo Router::url('/') ?>element/html/rightbar",
        languageUrl = "<?php echo Router::url('/') ?>languages/";
</script>
<body id="minovate" class="{{main.settings.navbarHeaderColor}} {{main.settings.activeColor}} {{containerClass}}" ng-class="{'header-fixed':main.settings.headerFixed, 'header-static':!main.settings.headerFixed, 'aside-fixed':main.settings.asideFixed, 'aside-static':!main.settings.asideFixed, 'rightbar-show':main.settings.rightbarShow, 'rightbar-hidden':!main.settings.rightbarShow }"> 
<!--[if lt IE 7]>
      <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
 <![endif]--> 
    <!-- Application content --> 
    <div id="wrap" ui-view autoscroll="false"></div>
    <!-- Page Loader --> <div id="pageloader" page-loader></div> 

    <script src="//maps.googleapis.com/maps/api/js?libraries=weather,geometry,visualization,places,drawing&sensor=false&language=en&v=3.17"></script>
    <!--[if lt IE 9]>
    <?= $this->Html->script("oldieshim.ff90b0fb"); ?>
    <![endif]--> 
    <?= $this->Html->script("vendor.1de22ac9"); ?>
    <?= $this->Html->script("app.ebf29d05"); ?>