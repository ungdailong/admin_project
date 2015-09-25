<div class="page page-dashboard">
    <div class="pageheader">
        <h2>{{page.title}} <span>// {{page.subtitle}}</span></h2>
        <div class="page-bar">
            <ul class="page-breadcrumb">
                <li> <a ui-sref="app.dashboard"><i class="fa fa-home"></i> {{main.title}}</a> </li>
                <li> <a ui-sref="app.dashboard">{{page.title}}</a> </li>
            </ul>
            <div ng-controller="DaterangepickerCtrl" class="page-toolbar">
                <a href="javascript:;" class="btn btn-lightred no-border" daterangepicker="rangeOptions" date-begin="startDate" date-end="endDate"> <i class="fa fa-calendar"></i>&nbsp;&nbsp;<span>{{startDate}} - {{endDate}}</span>&nbsp;&nbsp;<i class="fa fa-angle-down"></i> </a>
            </div>
        </div>
    </div>
    <!-- cards row -->
    <div class="row">
        <!-- col -->
        <div class="card-container col-lg-3 col-sm-6 col-sm-12">
            <div class="card">
                <div class="front bg-greensea">
                    <!-- row -->
                    <div class="row">
                        <!-- col -->
                        <div class="col-xs-4"> <i class="fa fa-users fa-4x"></i> </div>
                        <!-- /col -->
                        <!-- col -->
                        <div class="col-xs-8">
                            <p class="text-elg text-strong mb-0">3 659</p> <span>New Users</span> </div>
                        <!-- /col -->
                    </div>
                    <!-- /row -->
                </div>
                <div class="back bg-greensea">
                    <!-- row -->
                    <div class="row">
                        <!-- col -->
                        <div class="col-xs-4"> <a href="javascript:;"><i class="fa fa-cog fa-2x"></i> Settings</a> </div>
                        <!-- /col -->
                        <!-- col -->
                        <div class="col-xs-4"> <a href="javascript:;"><i class="fa fa-chain-broken fa-2x"></i> Content</a> </div>
                        <!-- /col -->
                        <!-- col -->
                        <div class="col-xs-4"> <a href="javascript:;"><i class="fa fa-ellipsis-h fa-2x"></i> More</a> </div>
                        <!-- /col -->
                    </div>
                    <!-- /row -->
                </div>
            </div>
        </div>
        <!-- /col -->
        <!-- col -->
        <div class="card-container col-lg-3 col-sm-6 col-sm-12">
            <div class="card">
                <div class="front bg-lightred">
                    <!-- row -->
                    <div class="row">
                        <!-- col -->
                        <div class="col-xs-4"> <i class="fa fa-shopping-cart fa-4x"></i> </div>
                        <!-- /col -->
                        <!-- col -->
                        <div class="col-xs-8">
                            <p class="text-elg text-strong mb-0">19 364</p> <span>New Orders</span> </div>
                        <!-- /col -->
                    </div>
                    <!-- /row -->
                </div>
                <div class="back bg-lightred">
                    <!-- row -->
                    <div class="row">
                        <!-- col -->
                        <div class="col-xs-4"> <a href="javascript:;"><i class="fa fa-cog fa-2x"></i> Settings</a> </div>
                        <!-- /col -->
                        <!-- col -->
                        <div class="col-xs-4"> <a href="javascript:;"><i class="fa fa-chain-broken fa-2x"></i> Content</a> </div>
                        <!-- /col -->
                        <!-- col -->
                        <div class="col-xs-4"> <a href="javascript:;"><i class="fa fa-ellipsis-h fa-2x"></i> More</a> </div>
                        <!-- /col -->
                    </div>
                    <!-- /row -->
                </div>
            </div>
        </div>
        <!-- /col -->
        <!-- col -->
        <div class="card-container col-lg-3 col-sm-6 col-sm-12">
            <div class="card">
                <div class="front bg-blue">
                    <!-- row -->
                    <div class="row">
                        <!-- col -->
                        <div class="col-xs-4"> <i class="fa fa-usd fa-4x"></i> </div>
                        <!-- /col -->
                        <!-- col -->
                        <div class="col-xs-8">
                            <p class="text-elg text-strong mb-0">165 984</p> <span>Sales</span> </div>
                        <!-- /col -->
                    </div>
                    <!-- /row -->
                </div>
                <div class="back bg-blue">
                    <!-- row -->
                    <div class="row">
                        <!-- col -->
                        <div class="col-xs-4"> <a href="javascript:;"><i class="fa fa-cog fa-2x"></i> Settings</a> </div>
                        <!-- /col -->
                        <!-- col -->
                        <div class="col-xs-4"> <a href="javascript:;"><i class="fa fa-chain-broken fa-2x"></i> Content</a> </div>
                        <!-- /col -->
                        <!-- col -->
                        <div class="col-xs-4"> <a href="javascript:;"><i class="fa fa-ellipsis-h fa-2x"></i> More</a> </div>
                        <!-- /col -->
                    </div>
                    <!-- /row -->
                </div>
            </div>
        </div>
        <!-- /col -->
        <!-- col -->
        <div class="card-container col-lg-3 col-sm-6 col-sm-12">
            <div class="card">
                <div class="front bg-slategray">
                    <!-- row -->
                    <div class="row">
                        <!-- col -->
                        <div class="col-xs-4"> <i class="fa fa-eye fa-4x"></i> </div>
                        <!-- /col -->
                        <!-- col -->
                        <div class="col-xs-8">
                            <p class="text-elg text-strong mb-0">29 651</p> <span>Visits</span> </div>
                        <!-- /col -->
                    </div>
                    <!-- /row -->
                </div>
                <div class="back bg-slategray">
                    <!-- row -->
                    <div class="row">
                        <!-- col -->
                        <div class="col-xs-4"> <a href="javascript:;"><i class="fa fa-cog fa-2x"></i> Settings</a> </div>
                        <!-- /col -->
                        <!-- col -->
                        <div class="col-xs-4"> <a href="javascript:;"><i class="fa fa-chain-broken fa-2x"></i> Content</a> </div>
                        <!-- /col -->
                        <!-- col -->
                        <div class="col-xs-4"> <a href="javascript:;"><i class="fa fa-ellipsis-h fa-2x"></i> More</a> </div>
                        <!-- /col -->
                    </div>
                    <!-- /row -->
                </div>
            </div>
        </div>
        <!-- /col -->
    </div>
    <!-- /row -->
    <!-- row -->
    <div class="row">
        <!-- col -->
        <div class="col-md-8">
            <!-- tile -->
            <section class="tile" fullscreen="isFullscreen01">
                <!-- tile header -->
                <div class="tile-header bg-greensea dvd dvd-btm">
                    <h1 class="custom-font"><strong>Statistics </strong>Graph</h1>
                    <ul class="controls">
                        <li ng-controller="DaterangepickerCtrl">
                            <a href="javascript:;" daterangepicker="rangeOptions" date-begin="startDate" date-end="endDate"> <span>{{startDate}} - {{endDate}}</span>&nbsp;&nbsp;<i class="fa fa-angle-down"></i> </a>
                        </li>
                        <li class="dropdown" dropdown on-toggle="toggled(open)"> <a href dropdown-toggle class="dropdown-toggle settings"><i class="fa fa-cog"></i></a>
                            <ul class="dropdown-menu pull-right with-arrow animated littleFadeInUp">
                                <li>
                                    <a href tile-control-toggle> <span class="minimize"><fa name="angle-down"></fa>&nbsp;&nbsp;&nbsp;Minimize</span> <span class="expand"><fa name="angle-up"></fa>&nbsp;&nbsp;&nbsp;Expand</span> </a>
                                </li>
                                <li>
                                    <a href tile-control-refresh ng-click="ajaxFaker()">
                                        <fa name="refresh"></fa> Refresh </a>
                                </li>
                                <li>
                                    <a href tile-control-fullscreen ng-click="isFullscreen01 = !isFullscreen01">
                                        <fa name="expand"></fa> Fullscreen </a>
                                </li>
                            </ul>
                        </li>
                        <li class="remove"><a href tile-control-close><i class="fa fa-times"></i></a></li>
                    </ul>
                </div>
                <!-- /tile header -->
                <!-- tile widget -->
                <div class="tile-widget bg-greensea" ng-controller="StatisticsChartCtrl">
                    <flot dataset="dataset" options="options" height="250px"></flot>
                </div>
                <!-- /tile widget -->
                <!-- tile body -->
                <div class="tile-body" ng-controller="ActualStatisticsCtrl">
                    <!-- row -->
                    <div class="row">
                        <!-- col -->
                        <div class="col-md-8 col-sm-12">
                            <h4 class="underline custom-font mb-20"><strong>Actual</strong> Statistics</h4>
                            <!-- row -->
                            <div class="row">
                                <!-- col -->
                                <div class="col-lg-4 text-center">
                                    <div easypiechart options="easypiechart.options" percent="easypiechart.percent" class="easypiechart" style="width: 140px; height: 140px"> <i class="fa fa-usd fa-4x text-blue" style="line-height: 140px"></i> </div>
                                    <p class="text-uppercase text-elg mt-20 mb-0"><strong class="text-blue">6,175</strong> <small class="text-lg text-light text-default lt">Sales</small></p>
                                    <p class="text-light"><i class="fa fa-caret-up text-success"></i> 18% this month</p>
                                </div>
                                <!-- /col
                <!-- col -->
                                <div class="col-lg-4 text-center">
                                    <div easypiechart options="easypiechart2.options" percent="easypiechart2.percent" class="easypiechart" style="width: 140px; height: 140px"> <i class="fa fa-eye fa-4x text-lightred" style="line-height: 140px"></i>
                                        <p class="text-uppercase text-elg mt-20 mb-0"><strong class="text-lightred">8,213</strong> <small class="text-lg text-light text-default lt">Visits</small></p>
                                        <p class="text-light"><i class="fa fa-caret-down text-warning"></i> 25% this month</p>
                                    </div>
                                </div>
                                <!-- /col -->
                                <!-- col -->
                                <div class="col-lg-4 text-center">
                                    <div easypiechart options="easypiechart3.options" percent="easypiechart3.percent" class="easypiechart" style="width: 140px; height: 140px"> <i class="fa fa-user fa-4x text-greensea" style="line-height: 140px"></i>
                                        <p class="text-uppercase text-elg mt-20 mb-0"><strong class="text-greensea">632</strong> <small class="text-lg text-light text-default lt">Users</small></p>
                                        <p class="text-light"><i class="fa fa-caret-down text-danger"></i> 61% this month</p>
                                    </div>
                                </div>
                                <!-- /col -->
                            </div>
                            <!-- /row -->
                        </div>
                        <!-- /col -->
                        <!-- col -->
                        <div class="col-md-4 col-sm-12">
                            <h4 class="underline custom-font"><strong>Visitors</strong> Statistics</h4>
                            <div class="progress-list">
                                <div class="details">
                                    <div class="title">America</div>
                                    <div class="description">visitor from america</div>
                                </div>
                                <div class="status pull-right"> <span>40</span>% </div>
                                <div class="clearfix"></div>
                                <progressbar class="progress-xs not-rounded" value="40" type="dutch"><b>40%</b></progressbar>
                            </div>
                            <div class="progress-list">
                                <div class="details">
                                    <div class="title">Europe</div>
                                    <div class="description">visitor from europe</div>
                                </div>
                                <div class="status pull-right"> <span>38</span>% </div>
                                <div class="clearfix"></div>
                                <progressbar class="progress-xs not-rounded" value="38" type="greensea"><b>38%</b></progressbar>
                            </div>
                            <div class="progress-list">
                                <div class="details">
                                    <div class="title">Asia</div>
                                    <div class="description">visitor from asia</div>
                                </div>
                                <div class="status pull-right"> <span>12</span>% </div>
                                <div class="clearfix"></div>
                                <progressbar class="progress-xs not-rounded" value="12" type="lightred"><b>12%</b></progressbar>
                            </div>
                            <div class="progress-list">
                                <div class="details">
                                    <div class="title">Africa</div>
                                    <div class="description">visitor from africa</div>
                                </div>
                                <div class="status pull-right"> <span>7</span>% </div>
                                <div class="clearfix"></div>
                                <progressbar class="progress-xs not-rounded" value="7" type="blue"><b>7%</b></progressbar>
                            </div>
                            <div class="progress-list">
                                <div class="details">
                                    <div class="title">Other</div>
                                    <div class="description">visitor from other</div>
                                </div>
                                <div class="status pull-right"> <span>6</span>% </div>
                                <div class="clearfix"></div>
                                <progressbar class="progress-xs not-rounded" value="6" type="hotpink"><b>6%</b></progressbar>
                            </div>
                        </div>
                        <!-- /col -->
                    </div>
                    <!-- /row -->
                </div>
                <!-- /tile body -->
            </section>
            <!-- /tile -->
        </div>
        <!-- /col -->
        <!-- col -->
        <div class="col-md-4">
            <!-- tile -->
            <section class="tile" fullscreen="isFullscreen02" ng-controller="BrowseUsageCtrl">
                <!-- tile header -->
                <div class="tile-header dvd dvd-btm">
                    <h1 class="custom-font"><strong>Browser </strong>Usage</h1>
                    <ul class="controls">
                        <li class="dropdown" dropdown on-toggle="toggled(open)"> <a href dropdown-toggle class="dropdown-toggle settings"><i class="fa fa-cog"></i></a>
                            <ul class="dropdown-menu pull-right with-arrow animated littleFadeInUp">
                                <li>
                                    <a href tile-control-toggle> <span class="minimize"><fa name="angle-down"></fa>&nbsp;&nbsp;&nbsp;Minimize</span> <span class="expand"><fa name="angle-up"></fa>&nbsp;&nbsp;&nbsp;Expand</span> </a>
                                </li>
                                <li>
                                    <a href tile-control-refresh ng-click="ajaxFaker()">
                                        <fa name="refresh"></fa> Refresh </a>
                                </li>
                                <li>
                                    <a href tile-control-fullscreen ng-click="isFullscreen02 = !isFullscreen02">
                                        <fa name="expand"></fa> Fullscreen </a>
                                </li>
                            </ul>
                        </li>
                        <li class="remove"><a href tile-control-close><i class="fa fa-times"></i></a></li>
                    </ul>
                </div>
                <!-- /tile header -->
                <!-- tile widget -->
                <div class="tile-widget">
                    <div morris-donut-chart donut-data="donutData" style="height: 250px"></div>
                </div>
                <!-- /tile widget -->
                <!-- tile body -->
                <div class="tile-body p-0">
                    <accordion close-others="oneAtATime">
                        <accordion-group is-open="status.tab1.open" class="panel-transparent">
                            <accordion-heading> <span ng-class="{'text-default lt': !status.tab1.open}"><i class="fa text-sm mr-5" ng-class="{'fa-minus': status.tab1.open, 'fa-plus': !status.tab1.open}"></i> This Month</span><span class="badge pull-right bg-lightred">3</span> </accordion-heading>
                            <table class="table table-no-border m-0">
                                <tbody>
                                    <tr>
                                        <td>1
                                            <td>Chrome
                                                <td>6985
                                                    <td><i class="fa fa-caret-up text-success"></i>
                                                        <tr>
                                                            <td>2
                                                                <td>Other
                                                                    <td>2697
                                                                        <td><i class="fa fa-caret-up text-success"></i>
                                                                            <tr>
                                                                                <td>3
                                                                                    <td>Safari
                                                                                        <td>3597
                                                                                            <td><i class="fa fa-caret-down text-danger"></i>
                                                                                                <tr>
                                                                                                    <td>4
                                                                                                        <td>Firefox
                                                                                                            <td>2145
                                                                                                                <td><i class="fa fa-caret-up text-success"></i>
                                                                                                                    <tr>
                                                                                                                        <td>5
                                                                                                                            <td>Internet Explorer
                                                                                                                                <td>1854
                                                                                                                                    <td><i class="fa fa-caret-down text-danger"></i>
                                                                                                                                        <tr>
                                                                                                                                            <td>6
                                                                                                                                                <td>Opera
                                                                                                                                                    <td>654
                                                                                                                                                        <td><i class="fa fa-caret-up text-success"></i> </table>
                        </accordion-group>
                        <accordion-group is-open="status.tab2.open" class="panel-transparent">
                            <accordion-heading> <span ng-class="{'text-default lt': !status.tab2.open}"><i class="fa text-sm mr-5" ng-class="{'fa-minus': status.tab2.open, 'fa-plus': !status.tab2.open}"></i> Last Month</span> </accordion-heading>
                            <table class="table table-no-border m-0">
                                <tbody>
                                    <tr>
                                        <td>1
                                            <td>Chrome
                                                <td>6985
                                                    <td><i class="fa fa-caret-up text-success"></i>
                                                        <tr>
                                                            <td>2
                                                                <td>Other
                                                                    <td>2697
                                                                        <td><i class="fa fa-caret-up text-success"></i>
                                                                            <tr>
                                                                                <td>3
                                                                                    <td>Safari
                                                                                        <td>3597
                                                                                            <td><i class="fa fa-caret-down text-danger"></i>
                                                                                                <tr>
                                                                                                    <td>4
                                                                                                        <td>Firefox
                                                                                                            <td>2145
                                                                                                                <td><i class="fa fa-caret-up text-success"></i>
                                                                                                                    <tr>
                                                                                                                        <td>5
                                                                                                                            <td>Internet Explorer
                                                                                                                                <td>1854
                                                                                                                                    <td><i class="fa fa-caret-down text-danger"></i>
                                                                                                                                        <tr>
                                                                                                                                            <td>6
                                                                                                                                                <td>Opera
                                                                                                                                                    <td>654
                                                                                                                                                        <td><i class="fa fa-caret-up text-success"></i> </table>
                        </accordion-group>
                        <accordion-group is-open="status.tab3.open" class="panel-transparent">
                            <accordion-heading> <span ng-class="{'text-default lt': !status.tab3.open}"><i class="fa text-sm mr-5" ng-class="{'fa-minus': status.tab3.open, 'fa-plus': !status.tab3.open}"></i> This Year</span> </accordion-heading>
                            <table class="table table-no-border m-0">
                                <tbody>
                                    <tr>
                                        <td>1
                                            <td>Chrome
                                                <td>6985
                                                    <td><i class="fa fa-caret-up text-success"></i>
                                                        <tr>
                                                            <td>2
                                                                <td>Other
                                                                    <td>2697
                                                                        <td><i class="fa fa-caret-up text-success"></i>
                                                                            <tr>
                                                                                <td>3
                                                                                    <td>Safari
                                                                                        <td>3597
                                                                                            <td><i class="fa fa-caret-down text-danger"></i>
                                                                                                <tr>
                                                                                                    <td>4
                                                                                                        <td>Firefox
                                                                                                            <td>2145
                                                                                                                <td><i class="fa fa-caret-up text-success"></i>
                                                                                                                    <tr>
                                                                                                                        <td>5
                                                                                                                            <td>Internet Explorer
                                                                                                                                <td>1854
                                                                                                                                    <td><i class="fa fa-caret-down text-danger"></i>
                                                                                                                                        <tr>
                                                                                                                                            <td>6
                                                                                                                                                <td>Opera
                                                                                                                                                    <td>654
                                                                                                                                                        <td><i class="fa fa-caret-up text-success"></i> </table>
                        </accordion-group>
                    </accordion>
                </div>
                <!-- /tile body -->
            </section>
            <!-- /tile -->
        </div>
        <!-- /col -->
    </div>
    <!-- /row -->
    <!-- row -->
    <div class="row">
        <!-- col -->
        <div class="col-md-4">
            <!-- tile -->
            <section class="tile tile-simple bg-lightred" style="min-height: 190px; overflow: hidden">
                <!-- tile header -->
                <div class="tile-header">
                    <h1 class="custom-font">Todos's</h1>
                    <ul class="controls">
                        <li class="remove"><a href tile-control-close><i class="fa fa-times"></i></a></li>
                    </ul>
                </div>
                <!-- /tile header -->
                <!-- tile body -->
                <div class="tile-body">
                    <wrap-owlcarousel class="owl-carousel" data-options="{
          autoPlay: 5000,
          stopOnHover: true,
          slideSpeed : 300,
          paginationSpeed : 400,
          singleItem : true}">
                        <div>
                            <div class="progress-list">
                                <div class="details">
                                    <div class="title"><i class="fa fa-caret-right mr-5"></i> <span class="text-md">Release update</span></div>
                                    <div class="description text-transparent-white text-lowercase">high priority, started at: 12.08.2014</div>
                                </div>
                                <div class="clearfix" style="height: 45px"></div>
                                <progressbar class="transparent-black not-rounded mb-10" value="50">50%</progressbar>
                            </div>
                            <div class="pull-right">
                                <button type="button" class="btn btn-border btn-rounded-20 btn-white btn-xs mr-5" style="width:22px"><i class="fa fa-thumbs-o-up"></i></button>
                                <button type="button" class="btn btn-border btn-rounded-20 btn-white btn-xs mr-5" style="width:22px"><i class="fa fa-caret-down"></i></button>
                                <button type="button" class="btn btn-border btn-rounded-20 btn-white btn-xs" style="width:22px"><i class="fa fa-ellipsis-h"></i></button>
                            </div>
                            <p class="text-thin">Deadline: <strong>12h 15m</strong></p>
                        </div>
                        <div>
                            <div class="progress-list">
                                <div class="details">
                                    <div class="title"><i class="fa fa-caret-right mr-5"></i> <span class="text-md">Fix navigation</span></div>
                                    <div class="description text-transparent-white text-lowercase">normal priority, started at: 20.09.2014</div>
                                </div>
                                <div class="clearfix" style="height: 45px"></div>
                                <progressbar class="transparent-black not-rounded mb-10" value="26">26%</progressbar>
                            </div>
                            <div class="pull-right">
                                <button type="button" class="btn btn-border btn-rounded-20 btn-white btn-xs mr-5" style="width:22px"><i class="fa fa-thumbs-o-up"></i></button>
                                <button type="button" class="btn btn-border btn-rounded-20 btn-white btn-xs mr-5" style="width:22px"><i class="fa fa-caret-down"></i></button>
                                <button type="button" class="btn btn-border btn-rounded-20 btn-white btn-xs" style="width:22px"><i class="fa fa-ellipsis-h"></i></button>
                            </div>
                            <p class="text-thin">Deadline: <strong>2d 9h 45m</strong></p>
                        </div>
                        <div>
                            <div class="progress-list">
                                <div class="details">
                                    <div class="title"><i class="fa fa-caret-right mr-5"></i> <span class="text-md">Remove dependencies</span></div>
                                    <div class="description text-transparent-white text-lowercase">high priority, started at: 26.10.2014</div>
                                </div>
                                <div class="clearfix" style="height: 45px"></div>
                                <progressbar class="transparent-black not-rounded mb-10" value="78">78%</progressbar>
                            </div>
                            <div class="pull-right">
                                <button type="button" class="btn btn-border btn-rounded-20 btn-white btn-xs mr-5" style="width:22px"><i class="fa fa-thumbs-o-up"></i></button>
                                <button type="button" class="btn btn-border btn-rounded-20 btn-white btn-xs mr-5" style="width:22px"><i class="fa fa-caret-down"></i></button>
                                <button type="button" class="btn btn-border btn-rounded-20 btn-white btn-xs" style="width:22px"><i class="fa fa-ellipsis-h"></i></button>
                            </div>
                            <p class="text-thin">Deadline: <strong>1h 5m</strong></p>
                        </div>
                    </wrap-owlcarousel>
                </div>
                <!-- /tile body -->
            </section>
            <!-- /tile -->
            <!-- tile -->
            <section class="tile" fullscreen="isFullscreen03">
                <!-- tile header -->
                <div class="tile-header dvd dvd-btm">
                    <h1 class="custom-font"><strong>Realtime </strong>Load</h1>
                    <ul class="controls">
                        <li class="dropdown" dropdown on-toggle="toggled(open)"> <a href dropdown-toggle class="dropdown-toggle settings"><i class="fa fa-cog"></i></a>
                            <ul class="dropdown-menu pull-right with-arrow animated littleFadeInUp">
                                <li>
                                    <a href tile-control-toggle> <span class="minimize"><fa name="angle-down"></fa>&nbsp;&nbsp;&nbsp;Minimize</span> <span class="expand"><fa name="angle-up"></fa>&nbsp;&nbsp;&nbsp;Expand</span> </a>
                                </li>
                                <li>
                                    <a href tile-control-refresh ng-click="ajaxFaker()">
                                        <fa name="refresh"></fa> Refresh </a>
                                </li>
                                <li>
                                    <a href tile-control-fullscreen ng-click="isFullscreen03 = !isFullscreen03">
                                        <fa name="expand"></fa> Fullscreen </a>
                                </li>
                            </ul>
                        </li>
                        <li class="remove"><a href tile-control-close><i class="fa fa-times"></i></a></li>
                    </ul>
                </div>
                <!-- /tile header -->
                <!-- tile widget -->
                <div class="tile-widget mb-40">
                    <div class="progress-list mt-20">
                        <div class="details">
                            <div class="title text-lg" style="line-height: 30px"><strong>125</strong> Users Online</div>
                        </div>
                        <div class="status pull-right bg-greensea"> <span>41</span>% </div>
                        <div class="clearfix"></div>
                        <progressbar class="not-rounded" value="41" type="greensea"></progressbar>
                    </div>
                    <!-- row -->
                    <div class="row">
                        <!-- col -->
                        <div class="col-md-4">
                            <h4 class="text-light">HDD 1 <i class="fa fa-caret-up text-success"></i></h4>
                            <progressbar class="progress-xs not-rounded mb-0" value="75" type="primary"></progressbar> <small>Health: <span class="text-success">Good</span></small> </div>
                        <!-- /col -->
                        <!-- col -->
                        <div class="col-md-4">
                            <h4 class="text-light">HDD 2 <i class="fa fa-caret-up text-success"></i></h4>
                            <progressbar class="progress-xs not-rounded mb-0" value="20" type="primary"></progressbar> <small>Health: <span class="text-success">Good</span></small> </div>
                        <!-- /col -->
                        <!-- col -->
                        <div class="col-md-4">
                            <h4 class="text-light">HDD 3 <i class="fa fa-caret-down text-danger"></i></h4>
                            <progressbar class="progress-xs not-rounded mb-0" value="90" type="primary"></progressbar> <small>Health: <span class="text-danger">Bad</span></small> </div>
                        <!-- /col -->
                    </div>
                    <!-- /row -->
                </div>
                <!-- /tile widget -->
                <!-- tile body -->
                <div class="tile-body p-0" ng-controller="RealtimeLoadCtrl" style="height: 133px">
                    <rickshaw rickshaw-options="options1" rickshaw-features="features1" rickshaw-series="series1"> </rickshaw>
                </div>
                <!-- /tile body -->
            </section>
            <!-- /tile -->
        </div>
        <!-- /col -->
        <!-- col -->
        <div class="col-md-4">
            <!-- tile -->
            <section class="tile tile-simple bg-blue" style="min-height: 190px; overflow: hidden">
                <!-- tile header -->
                <div class="tile-header">
                    <h1 class="custom-font"><strong>Social</strong> Feed</h1>
                    <ul class="controls">
                        <li class="remove"><a href tile-control-close><i class="fa fa-times"></i></a></li>
                    </ul>
                </div>
                <!-- /tile header -->
                <!-- tile body -->
                <div class="tile-body">
                    <wrap-owlcarousel class="owl-carousel" data-options="{
          autoPlay: 5000,
          stopOnHover: true,
          slideSpeed : 300,
          paginationSpeed : 400,
          singleItem : true}">
                        <div class="media social-feed"> <span class="pull-left"> <i class="fa fa-facebook fa-2x icon-border wh45 text-center" style="line-height: 45px"></i> </span>
                            <div class="media-body">
                                <p class="media-heading"><strong>Imrich Kamarel</strong> <small class="text-light text-transparent-white">18 minutes ago</small></p>
                                <p class="text-transparent-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim...</p>
                            </div>
                        </div>
                        <div class="media social-feed"> <span class="pull-left"> <i class="fa fa-twitter fa-2x icon-border wh45 text-center" style="line-height: 45px"></i> </span>
                            <div class="media-body">
                                <p class="media-heading"><strong>George Schwarz</strong> <small class="text-light text-transparent-white">1 hour ago</small></p>
                                <p class="text-transparent-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim...</p>
                            </div>
                        </div>
                        <div class="media social-feed"> <span class="pull-left"> <i class="fa fa-google-plus fa-2x icon-border wh45 text-center" style="line-height: 45px"></i> </span>
                            <div class="media-body">
                                <p class="media-heading"><strong>Milan Klement</strong> <small class="text-light text-transparent-white">56 minutes ago</small></p>
                                <p class="text-transparent-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim...</p>
                            </div>
                        </div>
                    </wrap-owlcarousel>
                </div>
                <!-- /tile body -->
            </section>
            <!-- /tile -->
            <!-- tile -->
            <section class="tile widget-todo" fullscreen="isFullscreen04" ng-controller="TodoWidgetCtrl">
                <!-- tile header -->
                <div class="tile-header dvd dvd-btm">
                    <h1 class="custom-font"><strong>Todo </strong>List</h1>
                    <ul class="controls">
                        <li class="dropdown" dropdown on-toggle="toggled(open)"> <a href dropdown-toggle class="dropdown-toggle settings"><i class="fa fa-cog"></i></a>
                            <ul class="dropdown-menu pull-right with-arrow animated littleFadeInUp">
                                <li>
                                    <a href tile-control-toggle> <span class="minimize"><fa name="angle-down"></fa>&nbsp;&nbsp;&nbsp;Minimize</span> <span class="expand"><fa name="angle-up"></fa>&nbsp;&nbsp;&nbsp;Expand</span> </a>
                                </li>
                                <li>
                                    <a href tile-control-refresh ng-click="ajaxFaker()">
                                        <fa name="refresh"></fa> Refresh </a>
                                </li>
                                <li>
                                    <a href tile-control-fullscreen ng-click="isFullscreen04 = !isFullscreen04">
                                        <fa name="expand"></fa> Fullscreen </a>
                                </li>
                            </ul>
                        </li>
                        <li class="remove"><a href tile-control-close><i class="fa fa-times"></i></a></li>
                    </ul>
                </div>
                <!-- /tile header -->
                <!-- tile body -->
                <div class="tile-body lined-paper">
                    <form class="form-horizontal" role="form" ng-submit="addTodo()">
                        <label for="todo" class="text-strong mb-0">Add Todo: </label>
                        <div class="form-group mb-0">
                            <div class="col-sm-10">
                                <input type="text" class="form-control input-unstyled" id="todo" ng-model="todo" placeholder="type todo here..." required> </div>
                            <div class="col-sm-2">
                                <button type="submit" class="btn btn-link"><i class="fa fa-chevron-right text-lg"></i></button>
                            </div>
                        </div>
                    </form>
                    <ul class="todo-list list-unstyled">
                        <li ng-repeat="todo in todos" ng-class="{completed: todo.completed, editing: todo == editedTodo}">
                            <div class="view">
                                <label class="checkbox checkbox-custom m-0 text-muted inline">
                                    <input type="checkbox" ng-checked="todo.completed" ng-model="todo.completed"><i></i> </label> <span ng-dblclick="editTodo(todo)">{{todo.text}}</span>
                                <a href="javascriph:;" class="text-danger remove-todo pull-right" ng-click="removeTodo(todo)" aria-label="Remove"> <i class="fa fa-times"></i> </a>
                            </div>
                            <form ng-submit="doneEditing(todo)">
                                <input class="form-control edit input-unstyled mb-0" ng-trim="false" ng-model="todo.text" ng-blur="doneEditing(todo)" todo-escape="revertEditing(todo)" todo-focus="todo == editedTodo"> </form>
                        </li>
                    </ul>
                </div>
                <!-- /tile body -->
            </section>
            <!-- /tile -->
        </div>
        <!-- /col -->
        <!-- col -->
        <div class="col-md-4">
            <!-- tile -->
            <section class="tile tile-simple" style="min-height: 190px; overflow: hidden">
                <!-- tile header -->
                <div class="tile-header p-0">
                    <ul class="controls">
                        <li class="remove"><a href tile-control-close><i class="fa fa-times"></i></a></li>
                    </ul>
                </div>
                <!-- /tile header -->
                <!-- tile body -->
                <div class="tile-body lined-paper">
                    <wrap-owlcarousel class="owl-carousel" data-options="{
          autoPlay: 5000,
          stopOnHover: true,
          slideSpeed : 300,
          paginationSpeed : 400,
          singleItem : true}">
                        <div>
                            <h4 class="mt-5 mb-5">This is my note #1</h4>
                            <p class="text-muted mb-10">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad.</p>
                        </div>
                        <div>
                            <h4 class="mt-5 mb-5">This is my note #2</h4>
                            <p class="text-muted mb-10">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad.</p>
                        </div>
                        <div>
                            <h4 class="mt-5 mb-5">This is my note #3</h4>
                            <p class="text-muted mb-10">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad.</p>
                        </div>
                    </wrap-owlcarousel>
                </div>
                <!-- /tile body -->
            </section>
            <!-- /tile -->
            <!-- tile -->
            <section class="tile bg-slategray widget-calendar" fullscreen="isFullscreen05">
                <!-- tile header -->
                <div class="tile-header dvd dvd-btm">
                    <h1 class="custom-font"><strong>Mini </strong>Calendar</h1>
                    <ul class="controls">
                        <li class="dropdown" dropdown on-toggle="toggled(open)"> <a href dropdown-toggle class="dropdown-toggle settings"><i class="fa fa-cog"></i></a>
                            <ul class="dropdown-menu pull-right with-arrow animated littleFadeInUp">
                                <li>
                                    <a href tile-control-toggle> <span class="minimize"><fa name="angle-down"></fa>&nbsp;&nbsp;&nbsp;Minimize</span> <span class="expand"><fa name="angle-up"></fa>&nbsp;&nbsp;&nbsp;Expand</span> </a>
                                </li>
                                <li>
                                    <a href tile-control-refresh ng-click="ajaxFaker()">
                                        <fa name="refresh"></fa> Refresh </a>
                                </li>
                                <li>
                                    <a href tile-control-fullscreen ng-click="isFullscreen05 = !isFullscreen05">
                                        <fa name="expand"></fa> Fullscreen </a>
                                </li>
                            </ul>
                        </li>
                        <li class="remove"><a href tile-control-close><i class="fa fa-times"></i></a></li>
                    </ul>
                </div>
                <!-- /tile header -->
                <!-- tile body -->
                <div class="tile-body p-0" ng-controller="CalendarWidgetCtrl">
                    <datepicker ng-model="dt" show-weeks="false" class="datepicker"></datepicker>
                </div>
                <!-- /tile body -->
            </section>
            <!-- /tile -->
        </div>
        <!-- /col -->
    </div>
    <!-- /row -->
    <!-- row -->
    <div class="row">
        <!-- col -->
        <div class="col-md-8">
            <!-- tile -->
            <section class="tile" fullscreen="isFullscreen06">
                <!-- tile header -->
                <div class="tile-header dvd dvd-btm">
                    <h1 class="custom-font"><strong>Project </strong>Progress</h1>
                    <ul class="controls">
                        <li ng-controller="DaterangepickerCtrl">
                            <a href="javascript:;" daterangepicker="rangeOptions" date-begin="startDate" date-end="endDate"> <span>{{startDate}} - {{endDate}}</span>&nbsp;&nbsp;<i class="fa fa-angle-down"></i> </a>
                        </li>
                        <li class="dropdown" dropdown on-toggle="toggled(open)"> <a href dropdown-toggle class="dropdown-toggle settings"><i class="fa fa-cog"></i></a>
                            <ul class="dropdown-menu pull-right with-arrow animated littleFadeInUp">
                                <li>
                                    <a href tile-control-toggle> <span class="minimize"><fa name="angle-down"></fa>&nbsp;&nbsp;&nbsp;Minimize</span> <span class="expand"><fa name="angle-up"></fa>&nbsp;&nbsp;&nbsp;Expand</span> </a>
                                </li>
                                <li>
                                    <a href tile-control-refresh ng-click="ajaxFaker()">
                                        <fa name="refresh"></fa> Refresh </a>
                                </li>
                                <li>
                                    <a href tile-control-fullscreen ng-click="isFullscreen06 = !isFullscreen06">
                                        <fa name="expand"></fa> Fullscreen </a>
                                </li>
                            </ul>
                        </li>
                        <li class="remove"><a href tile-control-close><i class="fa fa-times"></i></a></li>
                    </ul>
                </div>
                <!-- /tile header -->
                <!-- tile body -->
                <div class="tile-body table-custom" ng-controller="ProjectProgressCtrl">
                    <div class="table-responsive">
                        <table datatable="ng" dt-options="dtOptions" dt-column-defs="dtColumnDefs" class="table table-custom">
                            <thead>
                                <tr>
                                    <th>ID
                                        <th>Project
                                            <th>Priority
                                                <th style="width: 180px">Status
                                                    <th style="width: 60px" class="text-right">Chart
                                                        <tbody>
                                                            <tr ng-repeat="project in projects">
                                                                <td>{{ $index+1 }}
                                                                    <td>{{ project.title }}
                                                                        <td><small ng-class="{'text-danger': project.priority.value == 1, 'text-warning': project.priority.value == 2, 'text-success': project.priority.value == 3}">{{ project.priority.title }}</small>
                                                                            <td>
                                                                                <progressbar class="progress-xxs not-rounded mb-0 inline-block" value="project.status" type="greensea" style="width: 150px; margin-right: 5px"></progressbar><small>{{project.status}}%</small>
                                                                                <td class="text-right"><span sparkline data="project.chart.data" options="{
                  type: 'bar',
                  barColor: project.chart.color,
                  barWidth: '4px',
                  height: '18px'
                }"></span> </table>
                    </div>
                </div>
                <!-- /tile body -->
            </section>
            <!-- /tile -->
        </div>
        <!-- /col -->
        <!-- col -->
        <div class="col-md-4">
            <!-- tile -->
            <section class="tile" fullscreen="isFullscreen07">
                <!-- tile header -->
                <div class="tile-header dvd dvd-btm">
                    <h1 class="custom-font"><strong>Users </strong>Feed</h1>
                    <ul class="controls">
                        <li class="dropdown" dropdown on-toggle="toggled(open)"> <a href dropdown-toggle class="dropdown-toggle settings"><i class="fa fa-cog"></i></a>
                            <ul class="dropdown-menu pull-right with-arrow animated littleFadeInUp">
                                <li>
                                    <a href tile-control-toggle> <span class="minimize"><fa name="angle-down"></fa>&nbsp;&nbsp;&nbsp;Minimize</span> <span class="expand"><fa name="angle-up"></fa>&nbsp;&nbsp;&nbsp;Expand</span> </a>
                                </li>
                                <li>
                                    <a href tile-control-refresh ng-click="ajaxFaker()">
                                        <fa name="refresh"></fa> Refresh </a>
                                </li>
                                <li>
                                    <a href tile-control-fullscreen ng-click="isFullscreen07 = !isFullscreen07">
                                        <fa name="expand"></fa> Fullscreen </a>
                                </li>
                            </ul>
                        </li>
                        <li class="remove"><a href tile-control-close><i class="fa fa-times"></i></a></li>
                    </ul>
                </div>
                <!-- /tile header -->
                <!-- tile widget -->
                <div class="tile-widget">
                    <!-- row -->
                    <div class="row">
                        <!-- col -->
                        <div class="col-lg-6">
                            <div class="media mb-20">
                                <div class="pull-left thumb"> <img class="media-object img-circle" src="images/ici-avatar.b5d0063b.jpg" alt=""> </div>
                                <div class="media-body">
                                    <h4 class="media-heading mb-0">Imrich <strong>Kamarel</strong></h4> <small class="text-lightred">UI/UX Designer</small> </div>
                            </div>
                            <!-- row -->
                            <div class="row">
                                <!-- col -->
                                <div class="col-xs-4 text-center b-r b-solid"> <small class="text-lightred"><i class="fa fa-heart-o"></i> 125</small> </div>
                                <!-- /col -->
                                <!-- col -->
                                <div class="col-xs-4 text-center b-r b-solid"> <small class="text-greensea"><i class="fa fa-star-o"></i> 67</small> </div>
                                <!-- /col -->
                                <!-- col -->
                                <div class="col-xs-4 text-center"> <small class="text-blue"><i class="fa fa-comment-o"></i> 26</small> </div>
                                <!-- /col -->
                            </div>
                            <!-- /row -->
                        </div>
                        <!-- /col -->
                        <!-- col -->
                        <div class="col-lg-6">
                            <dl class="text-sm"> <dt>About:  <dd>Lorem ipsum dolor sit amet, consectetur adipisicing elit. <dt>Hobbies:  <dd>Sleep, games, animals, nature <dt>Skills:  <dd>jquery, html, css, angularjs <dt>Rating:  <dd class="text-lightred"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-o"></i> </dl> </div> <!-- /col --> </div> <!-- /row --> </div> <!-- /tile widget --> <!-- tile body --> <div class="tile-body p-0"> <tabset class="tabs-dark"> <tab heading="All"> <div class="wrap-reset" style="max-height: 216px;overflow:auto"> <div class="media"> <div class="pull-left thumb"> <img class="media-object img-circle" src="images/random-avatar8.cbf94387.jpg" alt=""> </div> <div class="pull-right mt-10"> <button type="button" class="btn btn-rounded-20 btn-default btn-sm mr-5" style="width:30px"><i class="fa fa-times"></i></button> <button type="button" class="btn btn-rounded-20 btn-default btn-sm mr-5" style="width:30px"><i class="fa fa-pencil"></i></button> <button type="button" class="btn btn-rounded-20 btn-default btn-sm" style="width:30px"><i class="fa fa-eye" style="margin-left: -2px"></i></button> </div> <div class="media-body"> <p class="media-heading mb-0 mt-10">Anna <strong>Opichia</strong></p> <small class="text-lightred">lead designer</small> </div> </div> <div class="media"> <div class="pull-left thumb"> <img class="media-object img-circle" src="images/random-avatar7.ff6f80e4.jpg" alt=""> </div> <div class="pull-right mt-10"> <button type="button" class="btn btn-rounded-20 btn-default btn-sm mr-5" style="width:30px"><i class="fa fa-times"></i></button> <button type="button" class="btn btn-rounded-20 btn-default btn-sm mr-5" style="width:30px"><i class="fa fa-pencil"></i></button> <button type="button" class="btn btn-rounded-20 btn-default btn-sm" style="width:30px"><i class="fa fa-eye" style="margin-left: -2px"></i></button> </div> <div class="media-body"> <p class="media-heading mb-0 mt-10">Bobby <strong>Socks</strong></p> <small class="text-lightred">CEO</small> </div> </div> <div class="media"> <div class="pull-left thumb"> <img class="media-object img-circle" src="images/random-avatar6.ab0a6ab0.jpg" alt=""> </div> <div class="pull-right mt-10"> <button type="button" class="btn btn-rounded-20 btn-default btn-sm mr-5" style="width:30px"><i class="fa fa-times"></i></button> <button type="button" class="btn btn-rounded-20 btn-default btn-sm mr-5" style="width:30px"><i class="fa fa-pencil"></i></button> <button type="button" class="btn btn-rounded-20 btn-default btn-sm" style="width:30px"><i class="fa fa-eye" style="margin-left: -2px"></i></button> </div> <div class="media-body"> <p class="media-heading mb-0 mt-10">Nico <strong>Vulture</strong></p> <small class="text-lightred">Referent</small> </div> </div> <div class="media"> <div class="pull-left thumb"> <img class="media-object img-circle" src="images/random-avatar5.8d023fb4.jpg" alt=""> </div> <div class="pull-right mt-10"> <button type="button" class="btn btn-rounded-20 btn-default btn-sm mr-5" style="width:30px"><i class="fa fa-times"></i></button> <button type="button" class="btn btn-rounded-20 btn-default btn-sm mr-5" style="width:30px"><i class="fa fa-pencil"></i></button> <button type="button" class="btn btn-rounded-20 btn-default btn-sm" style="width:30px"><i class="fa fa-eye" style="margin-left: -2px"></i></button> </div> <div class="media-body"> <p class="media-heading mb-0 mt-10">Roger <strong>Flopple</strong></p> <small class="text-lightred">Manager</small> </div> </div> <div class="media"> <div class="pull-left thumb"> <img class="media-object img-circle" src="images/random-avatar4.cf48ac15.jpg" alt=""> </div> <div class="pull-right mt-10"> <button type="button" class="btn btn-rounded-20 btn-default btn-sm mr-5" style="width:30px"><i class="fa fa-times"></i></button> <button type="button" class="btn btn-rounded-20 btn-default btn-sm mr-5" style="width:30px"><i class="fa fa-pencil"></i></button> <button type="button" class="btn btn-rounded-20 btn-default btn-sm" style="width:30px"><i class="fa fa-eye" style="margin-left: -2px"></i></button> </div> <div class="media-body"> <p class="media-heading mb-0 mt-10">Deel <strong>McApple</strong></p> <small class="text-lightred">Print master</small> </div> </div> </div> </tab> <tab heading="Superheroes"> <div class="wrap-reset" style="max-height: 216px;overflow:auto"> <div class="media"> <div class="pull-left thumb"> <img class="media-object img-circle" src="images/random-avatar7.ff6f80e4.jpg" alt=""> </div> <div class="pull-right mt-10"> <button type="button" class="btn btn-rounded-20 btn-default btn-sm mr-5" style="width:30px"><i class="fa fa-times"></i></button> <button type="button" class="btn btn-rounded-20 btn-default btn-sm mr-5" style="width:30px"><i class="fa fa-pencil"></i></button> <button type="button" class="btn btn-rounded-20 btn-default btn-sm" style="width:30px"><i class="fa fa-eye" style="margin-left: -2px"></i></button> </div> <div class="media-body"> <p class="media-heading mb-0 mt-10">Bobby <strong>Socks</strong></p> <small class="text-lightred">CEO</small> </div> </div> <div class="media"> <div class="pull-left thumb"> <img class="media-object img-circle" src="images/random-avatar6.ab0a6ab0.jpg" alt=""> </div> <div class="pull-right mt-10"> <button type="button" class="btn btn-rounded-20 btn-default btn-sm mr-5" style="width:30px"><i class="fa fa-times"></i></button> <button type="button" class="btn btn-rounded-20 btn-default btn-sm mr-5" style="width:30px"><i class="fa fa-pencil"></i></button> <button type="button" class="btn btn-rounded-20 btn-default btn-sm" style="width:30px"><i class="fa fa-eye" style="margin-left: -2px"></i></button> </div> <div class="media-body"> <p class="media-heading mb-0 mt-10">Nico <strong>Vulture</strong></p> <small class="text-lightred">Referent</small> </div> </div> <div class="media"> <div class="pull-left thumb"> <img class="media-object img-circle" src="images/random-avatar8.cbf94387.jpg" alt=""> </div> <div class="pull-right mt-10"> <button type="button" class="btn btn-rounded-20 btn-default btn-sm mr-5" style="width:30px"><i class="fa fa-times"></i></button> <button type="button" class="btn btn-rounded-20 btn-default btn-sm mr-5" style="width:30px"><i class="fa fa-pencil"></i></button> <button type="button" class="btn btn-rounded-20 btn-default btn-sm" style="width:30px"><i class="fa fa-eye" style="margin-left: -2px"></i></button> </div> <div class="media-body"> <p class="media-heading mb-0 mt-10">Anna <strong>Opichia</strong></p> <small class="text-lightred">lead designer</small> </div> </div> <div class="media"> <div class="pull-left thumb"> <img class="media-object img-circle" src="images/random-avatar5.8d023fb4.jpg" alt=""> </div> <div class="pull-right mt-10"> <button type="button" class="btn btn-rounded-20 btn-default btn-sm mr-5" style="width:30px"><i class="fa fa-times"></i></button> <button type="button" class="btn btn-rounded-20 btn-default btn-sm mr-5" style="width:30px"><i class="fa fa-pencil"></i></button> <button type="button" class="btn btn-rounded-20 btn-default btn-sm" style="width:30px"><i class="fa fa-eye" style="margin-left: -2px"></i></button> </div> <div class="media-body"> <p class="media-heading mb-0 mt-10">Roger <strong>Flopple</strong></p> <small class="text-lightred">Manager</small> </div> </div> <div class="media"> <div class="pull-left thumb"> <img class="media-object img-circle" src="images/random-avatar4.cf48ac15.jpg" alt=""> </div> <div class="pull-right mt-10"> <button type="button" class="btn btn-rounded-20 btn-default btn-sm mr-5" style="width:30px"><i class="fa fa-times"></i></button> <button type="button" class="btn btn-rounded-20 btn-default btn-sm mr-5" style="width:30px"><i class="fa fa-pencil"></i></button> <button type="button" class="btn btn-rounded-20 btn-default btn-sm" style="width:30px"><i class="fa fa-eye" style="margin-left: -2px"></i></button> </div> <div class="media-body"> <p class="media-heading mb-0 mt-10">Deel <strong>McApple</strong></p> <small class="text-lightred">Print master</small> </div> </div> </div> </tab> <tab heading="Friends"> <div class="wrap-reset" style="max-height: 216px;overflow:auto"> <div class="media"> <div class="pull-left thumb"> <img class="media-object img-circle" src="images/random-avatar5.8d023fb4.jpg" alt=""> </div> <div class="pull-right mt-10"> <button type="button" class="btn btn-rounded-20 btn-default btn-sm mr-5" style="width:30px"><i class="fa fa-times"></i></button> <button type="button" class="btn btn-rounded-20 btn-default btn-sm mr-5" style="width:30px"><i class="fa fa-pencil"></i></button> <button type="button" class="btn btn-rounded-20 btn-default btn-sm" style="width:30px"><i class="fa fa-eye" style="margin-left: -2px"></i></button> </div> <div class="media-body"> <p class="media-heading mb-0 mt-10">Roger <strong>Flopple</strong></p> <small class="text-lightred">Manager</small> </div> </div> <div class="media"> <div class="pull-left thumb"> <img class="media-object img-circle" src="images/random-avatar4.cf48ac15.jpg" alt=""> </div> <div class="pull-right mt-10"> <button type="button" class="btn btn-rounded-20 btn-default btn-sm mr-5" style="width:30px"><i class="fa fa-times"></i></button> <button type="button" class="btn btn-rounded-20 btn-default btn-sm mr-5" style="width:30px"><i class="fa fa-pencil"></i></button> <button type="button" class="btn btn-rounded-20 btn-default btn-sm" style="width:30px"><i class="fa fa-eye" style="margin-left: -2px"></i></button> </div> <div class="media-body"> <p class="media-heading mb-0 mt-10">Deel <strong>McApple</strong></p> <small class="text-lightred">Print master</small> </div> </div> <div class="media"> <div class="pull-left thumb"> <img class="media-object img-circle" src="images/random-avatar8.cbf94387.jpg" alt=""> </div> <div class="pull-right mt-10"> <button type="button" class="btn btn-rounded-20 btn-default btn-sm mr-5" style="width:30px"><i class="fa fa-times"></i></button> <button type="button" class="btn btn-rounded-20 btn-default btn-sm mr-5" style="width:30px"><i class="fa fa-pencil"></i></button> <button type="button" class="btn btn-rounded-20 btn-default btn-sm" style="width:30px"><i class="fa fa-eye" style="margin-left: -2px"></i></button> </div> <div class="media-body"> <p class="media-heading mb-0 mt-10">Anna <strong>Opichia</strong></p> <small class="text-lightred">lead designer</small> </div> </div> <div class="media"> <div class="pull-left thumb"> <img class="media-object img-circle" src="images/random-avatar7.ff6f80e4.jpg" alt=""> </div> <div class="pull-right mt-10"> <button type="button" class="btn btn-rounded-20 btn-default btn-sm mr-5" style="width:30px"><i class="fa fa-times"></i></button> <button type="button" class="btn btn-rounded-20 btn-default btn-sm mr-5" style="width:30px"><i class="fa fa-pencil"></i></button> <button type="button" class="btn btn-rounded-20 btn-default btn-sm" style="width:30px"><i class="fa fa-eye" style="margin-left: -2px"></i></button> </div> <div class="media-body"> <p class="media-heading mb-0 mt-10">Bobby <strong>Socks</strong></p> <small class="text-lightred">CEO</small> </div> </div> <div class="media"> <div class="pull-left thumb"> <img class="media-object img-circle" src="images/random-avatar6.ab0a6ab0.jpg" alt=""> </div> <div class="pull-right mt-10"> <button type="button" class="btn btn-rounded-20 btn-default btn-sm mr-5" style="width:30px"><i class="fa fa-times"></i></button> <button type="button" class="btn btn-rounded-20 btn-default btn-sm mr-5" style="width:30px"><i class="fa fa-pencil"></i></button> <button type="button" class="btn btn-rounded-20 btn-default btn-sm" style="width:30px"><i class="fa fa-eye" style="margin-left: -2px"></i></button> </div> <div class="media-body"> <p class="media-heading mb-0 mt-10">Nico <strong>Vulture</strong></p> <small class="text-lightred">Referent</small> </div> </div> </div> </tab> </tabset> </div> <!-- /tile body --> </section> <!-- /tile --> </div> <!-- /col --> </div> <!-- /row --> <!-- row --> <div class="row"> <!-- col --> <div class="col-md-4"> <!-- tile --> <section class="tile widget-message" fullscreen="isFullscreen08" ng-controller="MessageWidgetCtrl"> <!-- tile header --> <div class="tile-header bg-blue dvd dvd-btm"> <h1 class="custom-font"><strong>Quick </strong>Message</h1> <ul class="controls"> <li class="dropdown" dropdown on-toggle="toggled(open)"> <a href dropdown-toggle class="dropdown-toggle settings"><i class="fa fa-cog"></i></a> <ul class="dropdown-menu pull-right with-arrow animated littleFadeInUp"> <li> <a href tile-control-toggle> <span class="minimize"><fa name="angle-down"></fa>&nbsp;&nbsp;&nbsp;Minimize</span> <span class="expand"><fa name="angle-up"></fa>&nbsp;&nbsp;&nbsp;Expand</span> </a> </li> <li> <a href tile-control-refresh ng-click="ajaxFaker()"> <fa name="refresh"></fa> Refresh </a> </li> <li> <a href tile-control-fullscreen ng-click="isFullscreen08 = !isFullscreen08"> <fa name="expand"></fa> Fullscreen </a> </li> </ul> </li> <li class="remove"><a href tile-control-close><i class="fa fa-times"></i></a></li> </ul> </div> <!-- /tile header --> <!-- tile widget --> <div class="tile-widget bg-blue"> <form role="form" class="ng-pristine ng-valid"> <div class="form-group"> <ui-select multiple="multiple" ng-model="recipients.emails" ng-disabled="disabled" class="underline-input"> <ui-select-match placeholder="Select recipients...">{{$item}}</ui-select-match> <ui-select-choices repeat="recipient in availableRecipients | filter:$select.search"> {{recipient}} </ui-select-choices> </ui-select> </div> <div class="form-group"> <input type="text" class="form-control underline-input" placeholder="Type subject..."> </div> </form> </div> <!-- /tile widget --> <!-- tile body --> <div class="tile-body p-0"> <text-angular ng-model="messageContent" ta-toolbar="[['h1','h2','h3'],['bold','italics','underline'],['justifyLeft','justifyCenter','justifyRight'],['ul','ol']]"></text-angular> </div> <!-- /tile body --> <!-- tile footer --> <div class="tile-footer bg-blue text-right"> <button class="btn btn-blue btn-ef btn-ef-7 btn-ef-7h" activate-button="success"><i class="fa fa-envelope"></i> Send message</button> </div> <!-- /tile footer --> </section> <!-- /tile --> </div> <!-- /col --> <!-- col --> <div class="col-md-4"> <!-- tile --> <section class="tile widget-chat" fullscreen="isFullscreen09"> <!-- tile header --> <div class="tile-header dvd dvd-btm"> <h1 class="custom-font">Chat</h1> <ul class="controls"> <li class="dropdown" dropdown on-toggle="toggled(open)"> <a href class="dropdown-toggle">John Douey <i class="fa fa-angle-down ml-5"></i></a> <ul class="dropdown-menu pull-right with-arrow animated littleFadeInUp"> <li> <a href>Imrich Kamarel</a> </li> <li> <a href>Arnold Schwarz</a> </li> <li> <a href>Deel McApple</a> </li> </ul> </li> <li class="dropdown" dropdown on-toggle="toggled(open)"> <a href dropdown-toggle class="dropdown-toggle settings"><i class="fa fa-cog"></i></a> <ul class="dropdown-menu pull-right with-arrow animated littleFadeInUp"> <li> <a href tile-control-toggle> <span class="minimize"><fa name="angle-down"></fa>&nbsp;&nbsp;&nbsp;Minimize</span> <span class="expand"><fa name="angle-up"></fa>&nbsp;&nbsp;&nbsp;Expand</span> </a> </li> <li> <a href tile-control-refresh ng-click="ajaxFaker()"> <fa name="refresh"></fa> Refresh </a> </li> <li> <a href tile-control-fullscreen ng-click="isFullscreen09 = !isFullscreen09"> <fa name="expand"></fa> Fullscreen </a> </li> </ul> </li> <li class="remove"><a href tile-control-close><i class="fa fa-times"></i></a></li> </ul> </div> <!-- /tile header --> <!-- tile body --> <div class="tile-body" style="max-height: 320px;overflow:auto" slimscroll="{height: '100%'}"> <ul class="chats p-0"> <li class="in"> <div class="media"> <div class="pull-left thumb thumb-sm"> <img class="media-object img-circle" src="images/random-avatar2.35045c15.jpg" alt=""> </div> <div class="media-body"> <p class="media-heading"><a href="#" class="name">John Douey </a><span class="datetime">at 12.10.2014</span></p> <span class="body">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </span> </div> </div> </li> <li class="out"> <div class="media"> <div class="pull-right thumb thumb-sm"> <img class="media-object img-circle" src="images/random-avatar1.5c5e2735.jpg" alt=""> </div> <div class="media-body"> <p class="media-heading"><a href="#" class="name">You </a><span class="datetime">2 hours ago</span></p> <span class="body">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </span> </div> </div> </li> <li class="in"> <div class="media"> <div class="pull-left thumb thumb-sm"> <img class="media-object img-circle" src="images/random-avatar2.35045c15.jpg" alt=""> </div> <div class="media-body"> <p class="media-heading"><a href="#" class="name">John Douey </a><span class="datetime">2 hours ago</span></p> <span class="body">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </span> </div> </div> </li> <li class="out"> <div class="media"> <div class="pull-right thumb thumb-sm"> <img class="media-object img-circle" src="images/random-avatar1.5c5e2735.jpg" alt=""> </div> <div class="media-body"> <p class="media-heading"><a href="#" class="name">You </a><span class="datetime">1 hours ago</span></p> <span class="body">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </span> </div> </div> </li> <li class="in"> <div class="media"> <div class="pull-left thumb thumb-sm"> <img class="media-object img-circle" src="images/random-avatar2.35045c15.jpg" alt=""> </div> <div class="media-body"> <p class="media-heading"><a href="#" class="name">John Douey </a><span class="datetime">53 minutes ago</span></p> <span class="body">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </span> </div> </div> </li> <li class="out"> <div class="media"> <div class="pull-right thumb thumb-sm"> <img class="media-object img-circle" src="images/random-avatar1.5c5e2735.jpg" alt=""> </div> <div class="media-body"> <p class="media-heading"><a href="#" class="name">You </a><span class="datetime">40 minutes ago</span></p> <span class="body">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </span> </div> </div> </li> </ul> </div> <!-- /tile body --> <!-- tile footer --> <div class="tile-footer"> <div class="chat-form"> <div class="input-group"> <input type="text" class="form-control" placeholder="Type your message here..."> <span class="input-group-btn"> <button class="btn btn-default" type="button"><i class="fa fa-chevron-right"></i></button> </span> </div> </div> </div> <!-- /tile footer --> </section> <!-- /tile --> </div> <!-- /col --> <!-- col --> <div class="col-md-4"> <!-- tile --> <section class="tile bg-greensea widget-appointments" fullscreen="isFullscreen10" ng-controller="AppointmentsWidgetCtrl"> <!-- tile header --> <div class="tile-header dvd dvd-btm"> <h1 class="custom-font">Appointments</h1> <ul class="controls"> <li class="dropdown" dropdown on-toggle="toggled(open)"> <a href dropdown-toggle class="dropdown-toggle settings"><i class="fa fa-cog"></i></a> <ul class="dropdown-menu pull-right with-arrow animated littleFadeInUp"> <li> <a href tile-control-toggle> <span class="minimize"><fa name="angle-down"></fa>&nbsp;&nbsp;&nbsp;Minimize</span> <span class="expand"><fa name="angle-up"></fa>&nbsp;&nbsp;&nbsp;Expand</span> </a> </li> <li> <a href tile-control-refresh ng-click="ajaxFaker()"> <fa name="refresh"></fa> Refresh </a> </li> <li> <a href tile-control-fullscreen ng-click="isFullscreen10 = !isFullscreen10"> <fa name="expand"></fa> Fullscreen </a> </li> </ul> </li> <li class="remove"><a href tile-control-close><i class="fa fa-times"></i></a></li> </ul> </div> <!-- /tile header --> <!-- tile body --> <div class="tile-body"> <!-- row --> <div class="row"> <!-- col --> <div class="col-md-6 text-center"> <h4 class="text-light">Bratislava</h4> <clock radius="60"></clock> <span class="text-light">30&deg;C</span> </div> <!-- /col --> <!-- col --> <div class="col-md-6 b-l text-center"> <span class="day">{{date | date:'dd'}}</span><br> <span class="month">{{date | date:'MMMM'}}</span> </div> <!-- /col --> </div> <!-- /row --> </div> <!-- /tile body --> <!-- tile footer --> <div class="tile-footer dvd dvd-top mt-20"> <wrap-owlcarousel class="owl-carousel" data-options="{
          autoPlay: 5000,
          stopOnHover: true,
          slideSpeed : 300,
          paginationSpeed : 400,
          navigation: true,
          navigationText : ['<i class=\'fa fa-chevron-left\'></i>','<i class=\'fa fa-chevron-right\'></i>'],
          singleItem : true}"> <div> <p class="text-center text-strong"><i class="fa fa-clock-o"></i> 16:00, <small class="text-thin">Estimated time: 2 hours</small></p> <p> <h5 class="mt-10 mb-0 text-strong">Release Update</h5> <small class="text-thin text-transparent-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua...</small> </p> </div> <div> <p class="text-center text-strong"><i class="fa fa-clock-o"></i> 19:00, <small class="text-thin">Estimated time: 5 hours</small></p> <p> <h5 class="mt-10 mb-0 text-strong">Make a Backup</h5> <small class="text-thin text-transparent-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua...</small> </p> </div> <div> <p class="text-center text-strong"><i class="fa fa-clock-o"></i> 22:45, <small class="text-thin">Estimated time: 8 hours 45 minutes</small></p> <p> <h5 class="mt-10 mb-0 text-strong">Buy Tickets</h5> <small class="text-thin text-transparent-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua...</small> </p> </div> </wrap-owlcarousel> </div> <!-- /tile footer --> </section> <!-- /tile --> </div> <!-- /col --> </div> <!-- /row --> </div>