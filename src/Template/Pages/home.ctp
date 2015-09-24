<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Network\Exception\NotFoundException;
use Cake\Routing\Router;

$this->layout = false;

if (!Configure::read('debug')):
    throw new NotFoundException();
endif;

$cakeDescription = 'CakePHP: the rapid development php framework';
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
    var dashboardUrl = "element/html/dashboard",
        appUrl = "element/html/app",
        headerUrl = "element/html/header",
        navUrl = "element/html/nav",
        rightbarUrl = "element/html/rightbar",
        languageUrl = "<?php echo Router::url('/') ?>languages/";;
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