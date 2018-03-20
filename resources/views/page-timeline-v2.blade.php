<!DOCTYPE html>
<html class="backend">
    <!-- START Head -->
    <head>
        <!-- START META SECTION -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Lander.v2 - Bootstrap WebApp & Dashboard</title>
        <meta name="author" content="optimisticdesigns">
        <meta name="description" content="Lander.v2 Admin is a clean and flat backend built with twitter bootstrap">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/image/touch/apple-touch-icon-144x144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/image/touch/apple-touch-icon-114x114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/image/touch/apple-touch-icon-72x72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="/image/touch/apple-touch-icon-57x57-precomposed.png">
        <link rel="shortcut icon" href="/image/favicon.ico">
        <!--/ END META SECTION -->

        <!-- START STYLESHEETS -->
        <!-- Plugins stylesheet : optional -->
        <!--/ Plugins stylesheet : optional -->

        <!-- Application stylesheet : mandatory -->
        <link rel="stylesheet" href="/css/bootstrap.css">
        <link rel="stylesheet" href="/css/layout.css">
        <link rel="stylesheet" href="/css/uielement.css">
        <!--/ Application stylesheet -->

        <!-- Theme stylesheet -->
        <link rel="stylesheet" href="/css/themes/theme.css">
        <!--/ Theme stylesheet -->

        <!-- modernizr script -->
        <script type="text/javascript" src="/plugins/modernizr/js/modernizr.js"></script>
        <!--/ modernizr script -->
        <!-- END STYLESHEETS -->
    </head>
    <!--/ END Head -->

    <!-- START Body -->
    <body>
        <!-- START Template Header -->
        <header id="header" class="navbar">
            <!-- START navbar header -->
            <div class="navbar-header">
                <!-- Brand -->
                <a class="navbar-brand" href="javascript:void(0);">
                    <span class="logo-figure"></span>
                    <span class="logo-text"></span>
                </a>
                <!--/ Brand -->
            </div>
            <!--/ END navbar header -->

            <!-- START Toolbar -->
            <div class="navbar-toolbar clearfix">
                <!-- START Left nav -->
                <ul class="nav navbar-nav navbar-left">
                    <!-- Sidebar shrink -->
                    <li class="hidden-xs hidden-sm">
                        <a href="javascript:void(0);" class="sidebar-minimize" data-toggle="minimize" title="Minimize sidebar">
                            <span class="meta">
                                <span class="icon"></span>
                            </span>
                        </a>
                    </li>
                    <!--/ Sidebar shrink -->

                    <!-- Offcanvas left: This menu will take position at the top of template header (mobile only). Make sure that only #header have the `position: relative`, or it may cause unwanted behavior -->
                    <li class="navbar-main hidden-lg hidden-md hidden-sm">
                        <a href="javascript:void(0);" data-toggle="sidebar" data-direction="ltr" rel="tooltip" title="Menu sidebar">
                            <span class="meta">
                                <span class="icon"><i class="ico-paragraph-justify3"></i></span>
                            </span>
                        </a>
                    </li>
                    <!--/ Offcanvas left -->

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown</a>
                            <ul class="dropdown-menu">
                                <li><a href="#">First item</a></li>
                                <li><a href="#">Second item</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Third item</a></li>
                            </ul>
                    </li>
                    
                </ul>
                <!--/ END Left nav -->

                <!-- START navbar form -->
                <div class="navbar-form navbar-left dropdown" id="dropdown-form">
                    <form action="" role="search">
                        <div class="has-icon">
                            <input type="text" class="form-control" placeholder="Search application...">
                            <i class="ico-search form-control-icon"></i>
                        </div>
                    </form>
                </div>
                <!-- START navbar form -->

                <!-- START Right nav -->
                <ul class="nav navbar-nav navbar-right">
                    @include('partials.notification_dropdown')
                    
                    @include('partials.auth_dropdown')
                    <!-- Offcanvas right This menu will take position at the top of template header (mobile only). Make sure that only #header have the `position: relative`, or it may cause unwanted behavior -->
                    <li class="navbar-main">
                        <a href="javascript:void(0);" data-toggle="sidebar" data-direction="rtl" rel="tooltip" title="Feed / contact sidebar">
                            <span class="meta">
                                <span class="icon"><i class="ico-users3"></i></span>
                            </span>
                        </a>
                    </li>
                    <!--/ Offcanvas right -->
                  
                </ul>
                <!--/ END Right nav -->
            </div>
            <!--/ END Toolbar -->
        </header>
        <!--/ END Template Header -->

        @include('partials.left_aside')
        
        @include('partials.right_aside')

        <!-- START Template Main -->
        <section id="main" role="main">
            <!-- START Template Container -->
            <div class="container-fluid">
                <!-- START jumbotron -->
                <section class="jumbotron jumbotron-bg7 jumbotron mt-15 mb15 mr-15 ml-15" data-stellar-background-ratio="0.4" style="min-height:320px;">
                    <!-- pattern overlay -->
                    <div class="pattern pattern2 overlay overlay-primary"></div>
                    <!--/ pattern overlay -->
                    <div class="container" style="padding-top:8%;">
                        <h1 class="thin text-white text-center font-alt">Create your application in an instant.</h1>
                        <div class="text-center pt15">
                            <a href="javascript:void(0);" class="btn btn-danger">Learn More <i class="ico-angle-right"></i></a>
                        </div>
                    </div>
                </section>
                <!--/ END jumbotron -->
            
                <!-- START Row -->
                <div class="row">
                    <!-- Left side / top side -->
                    <div class="col-md-9">
                        <!-- START Timeline -->
                        <ul class="timeline">
                            <li class="header">
                                <!-- Post form -->
                                <form class="panel" action="">
                                    <textarea class="form-control form-control-minimal" rows="2" placeholder="Add project events / progress"></textarea>
                                    <div class="panel-footer">
                                        <div class="panel-toolbar-wrapper">
                                            <div class="panel-toolbar">
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-default"><i class="ico-user-plus2"></i></button>
                                                    <button type="button" class="btn btn-default"><i class="ico-camera3"></i></button>
                                                    <button type="button" class="btn btn-default"><i class="ico-location"></i></button>
                                                </div>
                                            </div>
                                            <div class="panel-toolbar text-right">
                                                <button type="submit" class="btn btn-primary">Post</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <!--/ Post form -->
                            </li>
                            <li class="header year ellipsis">Now</li>
                            <li class="wrapper">
                                <!-- START Events -->
                                <ul class="events">
                                    <li class="wrapper">
                                        <div class="figure bgcolor-success"><i class="ico-file-plus"></i></div>
                                        <!-- panel -->
                                        <div class="panel">
                                            <div class="panel-body">
                                                <ul class="list-table">
                                                    <li class="text-left" style="width:60px;">
                                                        <img class="img-circle" src="/image/avatar/avatar9.jpg" alt="" width="50px" height="50px">
                                                    </li>
                                                    <li class="text-left">
                                                        <p class="mb5"><span class="semibold">Tamara Moon</span> create a new project</p>
                                                        <h5 class="text-accent semibold nm">"Alpha Omega"</h5>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!--/ panel -->
                                    </li>

                                    <li class="wrapper">
                                        <div class="figure bgcolor-success"><i class="ico-user-plus"></i></div>
                                        <!-- panel -->
                                        <div class="panel">
                                            <div class="panel-body">
                                                <ul class="list-table">
                                                    <li class="text-left" style="width:60px;">
                                                        <img class="img-circle" src="/image/avatar/avatar9.jpg" alt="" width="50px" height="50px">
                                                    </li>
                                                    <li class="text-left">
                                                        <p class="nm"><span class="semibold">Tamara Moon</span> assign 6 people to this project</p>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="panel-footer">
                                                <div class="img-group img-group-stack">
                                                    <img src="/image/avatar/avatar7.jpg" class="img-circle" alt="">
                                                    <img src="/image/avatar/avatar2.jpg" class="img-circle" alt="">
                                                    <img src="/image/avatar/avatar4.jpg" class="img-circle" alt="">
                                                    <img src="/image/avatar/avatar5.jpg" class="img-circle" alt="">
                                                    <span class="more img-circle">2+</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!--/ panel -->
                                    </li>

                                    <li class="wrapper">
                                        <div class="figure bgcolor-success"><i class="ico-upload22"></i></div>
                                        <!-- panel -->
                                        <div class="panel">
                                            <div class="panel-body">
                                                <ul class="list-table">
                                                    <li class="text-left" style="width:60px;">
                                                        <img class="img-circle" src="/image/avatar/avatar5.jpg" alt="" width="50px" height="50px">
                                                    </li>
                                                    <li class="text-left">
                                                        <p class="nm"><span class="semibold">Emi Steele</span> update project location</p>
                                                    </li>
                                                </ul>
                                            </div>
                                            <hr class="nm"><!-- horizontal line -->
                                            <!-- Thumbnail -->
                                            <div class="thumbnail thumbnail-album">
                                                <!-- media -->
                                                <div class="media">
                                                    <!-- indicator -->
                                                    <div class="indicator"><span class="spinner"></span></div>
                                                    <!--/ indicator -->
                                                    <img data-toggle="unveil" src="/image/background/400x250/placeholder.jpg" data-src="http://maps.googleapis.com/maps/api/staticmap?center=Brooklyn+Bridge,New+York,NY&zoom=13&size=400x200&maptype=roadmap&markers=color:blue%7Clabel:S%7C40.702147,-74.015794&markers=color:green%7Clabel:G%7C40.711614,-74.012318&markers=color:red%7Clabel:C%7C40.718217,-73.998284&sensor=false" alt="Cover" width="100%">
                                                </div>
                                                <!--/ media -->
                                            </div>
                                            <!--/ Thumbnail -->
                                            <!-- Toolbar -->
                                            <div class="panel-footer">
                                                <div class="panel-toolbar">
                                                    <a href="javascript:void(0);" class="semibold text-default">Comment</a>
                                                    <span class="text-muted mr5 ml5">&#8226;</span>
                                                    <a href="javascript:void(0);" class="semibold text-default">Share</a>
                                                </div>
                                            </div>
                                            <!--/ Toolbar -->
                                        </div>
                                        <!--/ panel -->
                                    </li>

                                    <li class="wrapper">
                                        <div class="figure bgcolor-success"><i class="ico-bubbles2"></i></div>
                                        <!-- panel -->
                                        <div class="panel">
                                            <div class="panel-body">
                                                <ul class="list-table">
                                                    <li class="text-left" style="width:60px;">
                                                        <img class="img-circle" src="/image/avatar/avatar9.jpg" alt="" width="50px" height="50px">
                                                    </li>
                                                    <li class="text-left">
                                                        <p class="nm"><span class="semibold">Tamara Moon</span> post a shoutout.</p>
                                                    </li>
                                                </ul>
                                                <blockquote class="mb0">
                                                    <p>Do your best guys as the launching ceremony is near!</p>
                                                </blockquote>
                                            </div>
                                        </div>
                                        <!--/ panel -->
                                    </li>
                                </ul>
                                <!--/ END Events -->
                            </li>
                            <li class="header year ellipsis">Mar 29, 2014</li>
                            <li class="wrapper">
                                <!-- START Events -->
                                <ul class="events">
                                    <li class="wrapper">
                                        <div class="figure bgcolor-danger"><i class="ico-ticket"></i></div>
                                        <!-- panel -->
                                        <div class="panel">
                                            <!-- ribbon -->
                                            <span class="panel-ribbon panel-ribbon-danger"><i class="ico-bug2"></i></span>
                                            <!-- ribbon -->
                                            <div class="panel-body">
                                                <ul class="list-table">
                                                    <li class="text-left" style="width:60px;">
                                                        <img class="img-circle" src="/image/avatar/avatar6.jpg" alt="" width="50px" height="50px">
                                                    </li>
                                                    <li class="text-left">
                                                        <p class="nm"><span class="semibold">Ethan Olsen</span> submit a ticket</p>
                                                        <h5 class="semibold text-muted nm">#15479</h5>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="panel-footer">
                                                found a bug on line <strong>3011</strong> inside framework.js file. Could someone fix this?
                                            </div>
                                        </div>
                                        <!--/ panel -->
                                    </li>

                                    <li class="wrapper">
                                        <div class="figure bgcolor-success"><i class="ico-star6"></i></div>
                                        <!-- panel -->
                                        <div class="panel">
                                            <div class="panel-body">
                                                <ul class="list-table">
                                                    <li class="text-left" style="width:60px;">
                                                        <img class="img-circle" src="/image/avatar/avatar9.jpg" alt="" width="50px" height="50px">
                                                    </li>
                                                    <li class="text-left">
                                                        <p class="nm"><span class="semibold">Tamara Moon</span> promoted <a href="javascript:void(0)l" class="semibold">Rudyard Miles</a> &amp; <a href="javascript:void(0)l" class="semibold">Caleb Mercado</a> as the project manager.</p>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!--/ panel -->
                                    </li>

                                    <li class="wrapper">
                                        <div class="figure bgcolor-success"><i class="ico-ticket"></i></div>
                                        <!-- panel -->
                                        <div class="panel">
                                            <div class="panel-body">
                                                <ul class="list-table">
                                                    <li class="text-left" style="width:60px;">
                                                        <img class="img-circle" src="/image/avatar/avatar2.jpg" alt="" width="50px" height="50px">
                                                    </li>
                                                    <li class="text-left">
                                                        <p class="nm"><span class="semibold">Denise Armstrong</span> assigned to ticket <a href="javascript:void(0);">#15479</a></p>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!--/ panel -->
                                    </li>

                                    <li class="wrapper">
                                        <div class="figure bgcolor-primary"><i class="ico-pencil"></i></div>
                                        <!-- panel -->
                                        <div class="panel">
                                            <div class="panel-body">
                                                <ul class="list-table">
                                                    <li class="text-left" style="width:60px;">
                                                        <img class="img-circle" src="/image/avatar/avatar2.jpg" alt="" width="50px" height="50px">
                                                    </li>
                                                    <li class="text-left">
                                                        <p class="nm"><span class="semibold">Denise Armstrong</span> update ticket <a href="javascript:void(0);">#15479</a> progress</p>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="panel-footer">
                                                <p class="semibold clearfix mb5">
                                                    <span class="pull-left">Fixing framework.js</span>
                                                    <span class="pull-right">70%</span>
                                                </p>
                                                <div class="progress progress-xs mb5">
                                                    <div class="progress-bar progress-bar-success" style="width:70%"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--/ panel -->
                                    </li>

                                    <li class="wrapper">
                                        <div class="figure bgcolor-success"><i class="ico-checkmark3"></i></div>
                                        <!-- panel -->
                                        <div class="panel">
                                            <div class="panel-body">
                                                <ul class="list-table">
                                                    <li class="text-left" style="width:60px;">
                                                        <img class="img-circle" src="/image/avatar/avatar2.jpg" alt="" width="50px" height="50px">
                                                    </li>
                                                    <li class="text-left">
                                                        <p class="nm"><span class="semibold">Denise Armstrong</span> closed ticket <a href="javascript:void(0);">#15479</a></p>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!--/ panel -->
                                    </li>
                                </ul>
                                <!--/ END Events -->
                            </li>
                            <li class="header year ellipsis">Oct 24, 2014</li>
                            <li class="wrapper">
                                <!-- START Events -->
                                <ul class="events">
                                    <li class="wrapper featured">
                                        <div class="figure bgcolor-success"><i class="ico-ladder"></i></div>
                                        <!-- panel -->
                                        <div class="panel">
                                            <div class="panel-body">
                                                <ul class="list-table">
                                                    <li class="text-left" style="width:60px;">
                                                        <img class="img-circle" src="/image/avatar/avatar9.jpg" alt="" width="50px" height="50px">
                                                    </li>
                                                    <li class="text-left">
                                                        <p class="nm"><span class="semibold">Tamara Moon</span> update project <span class="text-accent bold">"Alpha Omega"</span> overall progress</p>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="panel-footer">
                                                <p class="semibold clearfix mb5">
                                                    <span class="pull-left">Overall</span>
                                                    <span class="pull-right">65%</span>
                                                </p>
                                                <div class="progress">
                                                    <div class="progress-bar progress-bar-success" style="width: 35%"></div>
                                                    <div class="progress-bar progress-bar-warning" style="width: 20%"></div>
                                                    <div class="progress-bar progress-bar-danger" style="width: 10%"></div>
                                                </div>
                                                <ul class="list-table">
                                                    <li><i class="ico-circle text-success"></i> <span class="semibold">35%</span></li>
                                                    <li><i class="ico-circle text-warning"></i> <span class="semibold">20%</span></li>
                                                    <li><i class="ico-circle text-danger"></i> <span class="semibold">10%</span></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!--/ panel -->
                                    </li>
                                </ul>
                                <!--/ END Events -->
                            </li>
                            <li class="header text-center semibold nm"><a href="javascript:void(0);">Load more</a></li>
                        </ul>
                        <!--/ END Timeline -->
                    </div>
                    <!--/ Left side / top side -->

                    <!-- Right Side / Bottom side -->
                    <div class="col-md-3 hidden-xs hidden-sm">
                        <div class="panel panel-minimal nm">
                            <!-- START Twitter Widget -->
                            <div class="panel-toolbar-wrapper">
                                <div class="panel-toolbar">
                                    <h5 class="semibold nm text-info"><i class="ico-twitter mr5"></i>Twitter</h5>
                                </div>
                                <div class="panel-toolbar text-right">
                                    <button class="btn btn-sm btn-default">Follow</button>
                                </div>
                            </div>
                            <div class="panel-body pt0 pb0">
                                <ul class="list-table">
                                    <li style="width:55px;">
                                        <img class="img-circle" src="/image/avatar/avatar9.jpg" alt="" width="45px" height="45px">
                                    </li>
                                    <li class="text-left">
                                        <h5 class="semibold ellipsis">
                                            Tamara Moon<br>
                                            <small class="text-muted">@tmoon</small>
                                        </h5>
                                    </li>
                                </ul>
                            </div>
                            <ul class="nav nav-justified mt15">
                                <li class="text-center">
                                    <h4 class="nm">12.5k</h4>
                                    <p class="nm text-muted">Followers</p>
                                </li>
                                <li class="text-center">
                                    <h4 class="nm">1853</h4>
                                    <p class="nm text-muted">Following</p>
                                </li>
                                <li class="text-center">
                                    <h4 class="nm">3451</h4>
                                    <p class="nm text-muted">Tweets</p>
                                </li>
                            </ul>
                            <!--/ END Twitter Widget -->

                            <hr><!--horizontal line -->

                            <!-- START Bio -->
                            <div class="panel-toolbar-wrapper">
                                <div class="panel-toolbar">
                                    <h5 class="semibold nm text-info"><i class="ico-info2 mr5"></i>About</h5>
                                </div>
                                <div class="panel-toolbar text-right">
                                    <button class="btn btn-sm btn-default"><i class="ico-pencil7"></i></button>
                                </div>
                            </div>
                            <div class="panel-body pt0">
                                <p class="semibold mb5">Bio</p>
                                <ul class="list-unstyled mb10">
                                    <li><i class="ico-briefcase text-muted mr5"></i> UI/UX Designer</li>
                                    <li><i class="ico-graduation text-muted mr5"></i> Studied interface design</li>
                                    <li><i class="ico-location text-muted mr5"></i> Lives in Sierra Leone</li>
                                    <li><i class="ico-home4 text-muted mr5"></i> From Perth, Australia</li>
                                </ul>
                                <address class="nm">
                                    <p class="semibold nm">Address</p>
                                    795 Folsom Ave, Suite 600<br>
                                    San Francisco, CA 94107<br>
                                    <abbr title="Phone">P:</abbr> (123) 456-7890
                                </address>
                            </div>
                            <!--/ END Bio -->

                            <hr><!--horizontal line -->

                            <!-- START Friend lists -->
                            <div class="panel-toolbar-wrapper">
                                <div class="panel-toolbar">
                                    <h5 class="semibold nm text-info"><i class="ico-users3 mr5"></i>Friend lists</h5>
                                </div>
                                <div class="panel-toolbar text-right">
                                    <button class="btn btn-sm btn-default"><i class="ico-plus"></i></button>
                                </div>
                            </div>
                            <div class="panel-body pt0">
                                <div class="media-list media-list-contact">
                                    <a href="page-message-rich.html" class="media">
                                        <span class="media-object pull-left">
                                            <img src="/image/avatar/avatar1.jpg" class="img-circle" alt="">
                                        </span>
                                        <span class="media-body">
                                            <span class="media-heading"><span class="hasnotification hasnotification-success mr5"></span> Autumn Barker</span>
                                            <span class="media-meta">Sint Maarten</span>
                                        </span>
                                    </a>

                                    <a href="page-message-rich.html" class="media">
                                        <span class="media-object pull-left">
                                            <img src="/image/avatar/avatar2.jpg" class="img-circle" alt="">
                                        </span>
                                        <span class="media-body">
                                            <span class="media-heading"><span class="hasnotification hasnotification-success mr5"></span> Giselle Horn</span>
                                            <span class="media-meta">Saudi Arabia</span>
                                        </span>
                                    </a>

                                    <a href="page-message-rich.html" class="media">
                                        <span class="media-object pull-left">
                                            <img src="/image/avatar/avatar.png" class="img-circle" alt="">
                                        </span>
                                        <span class="media-body">
                                            <span class="media-heading"><span class="hasnotification hasnotification-danger mr5"></span> Austin Shields</span>
                                            <span class="media-meta">Ghana</span>
                                        </span>
                                    </a>

                                    <a href="page-message-rich.html" class="media">
                                        <span class="media-object pull-left">
                                            <img src="/image/avatar/avatar.png" class="img-circle" alt="">
                                        </span>
                                        <span class="media-body">
                                            <span class="media-heading"><span class="hasnotification hasnotification-danger mr5"></span> Caryn Gibson</span>
                                            <span class="media-meta">Rwanda</span>
                                        </span>
                                    </a>

                                    <a href="page-message-rich.html" class="media">
                                        <span class="media-object pull-left">
                                            <img src="/image/avatar/avatar3.jpg" class="img-circle" alt="">
                                        </span>
                                        <span class="media-body">
                                            <span class="media-heading"><span class="hasnotification hasnotification-success mr5"></span> Nash Evans</span>
                                            <span class="media-meta">Somalia</span>
                                        </span>
                                    </a>
                                </div>
                                <p class="nm"><a href="javascript:void(0);" class="semibold">View all</a></p>
                            </div>
                            <!--/ END Friend lists -->
                        </div>
                    </div>
                    <!--/ Right side / bottom side -->
                </div>
                <!-- END Row -->
            </div>
            <!--/ END Template Container -->

            <!-- START To Top Scroller -->
            <a href="#" class="totop animation" data-toggle="waypoints totop" data-showanim="bounceIn" data-hideanim="bounceOut" data-offset="50%"><i class="ico-angle-up"></i></a>
            <!--/ END To Top Scroller -->
        </section>
        <!--/ END Template Main -->

        <!-- START JAVASCRIPT SECTION (Load javascripts at bottom to reduce load time) -->
        <!-- Application and vendor script : mandatory -->
        <script type="text/javascript" src="/js/vendor.js"></script>
        <script type="text/javascript" src="/js/core.js"></script>
        <script type="text/javascript" src="/js/backend/app.js"></script>
        <!--/ Application and vendor script : mandatory -->

        <!-- Plugins and page level script : optional -->
        <script type="text/javascript" src="/js/pace.min.js"></script>
        <script type="text/javascript" src="/plugins/stellar/js/jquery.stellar.js"></script>
        <script type="text/javascript" src="/js/backend/pages/timeline-v2.js"></script>
        <!--/ Plugins and page level script : optional -->
        <!--/ END JAVASCRIPT SECTION -->
    </body>
    <!--/ END Body -->
</html>