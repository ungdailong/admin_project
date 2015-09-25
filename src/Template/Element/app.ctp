<section ng-include="'views/tmpl/header.html'" id="header" class="{{main.settings.navbarHeaderColor}}"></section>
<div id="controls">
    <aside ng-include="'views/tmpl/nav.html'" id="sidebar" class="{{main.settings.sidebarColor}}" ng-class="{'aside-fixed':main.settings.asideFixed}"></aside> 
    <aside ng-include="'views/tmpl/rightbar.html'" id="rightbar"></aside> 
</div> 
<div class="view-container" ui-view-container> 
    <section ui-view id="content" autoscroll="false"></section> 
</div>