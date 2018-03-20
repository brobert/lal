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
        <link rel="stylesheet" href="/plugins/jquery-ui/css/jquery-ui.css">
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
                <!-- Page Header -->
                <div class="page-header page-header-block">
                    <div class="page-header-section">
                        <h4 class="title semibold">Slider</h4>
                    </div>
                    <div class="page-header-section">
                        <!-- Toolbar -->
                        <div class="toolbar">
                            <ol class="breadcrumb breadcrumb-transparent nm">
                                <li><a href="javascript:void(0);">UI Elements</a></li>
                                <li class="active">Slider</li>
                            </ol>
                        </div>
                        <!--/ Toolbar -->
                    </div>
                </div>
                <!-- Page Header -->

                <!-- START row -->
                <div class="row">
                    <div class="col-lg-6">
                        <!-- START panel -->
                        <div class="panel panel-default">
                            <!-- panel heading/header -->
                            <div class="panel-heading">
                                <h3 class="panel-title">Default</h3>
                                <!-- panel toolbar -->
                                <div class="panel-toolbar text-right">
                                    <!-- option -->
                                    <div class="option">
                                        <button class="btn demo" data-toggle="panelrefresh"><i class="reload"></i></button>
                                        <button class="btn up" data-toggle="panelcollapse"><i class="arrow"></i></button>
                                        <button class="btn" data-toggle="panelremove"><i class="remove"></i></button>
                                    </div>
                                    <!--/ option -->
                                </div>
                                <!--/ panel toolbar -->
                            </div>
                            <!--/ panel heading/header -->
                            
                            <!-- panel body with collapse capable -->
                            <div class="panel-collapse pull out">
                                <!-- Loading indicator -->
                                <div class="indicator"><span class="spinner"></span></div>
                                <!--/ Loading indicator -->
                                <div class="panel-body">
                                    The basic slider is horizontal and has a single handle that can be moved with the mouse or by using the arrow keys.
                                </div>
                                <hr class="nm"><!-- horizontal line -->
                                <div class="panel-body">
                                    <ul id="default-slider" class="list-unstyled mb0">
                                        <li class="slider-primary mb15" data-min="20"></li>
                                        <li class="slider-info mb15" data-min="30"></li>
                                        <li class="slider-success mb15" data-min="40"></li>
                                        <li class="slider-warning mb15" data-min="50"></li>
                                        <li class="slider-danger" data-min="60"></li>
                                    </ul>
                                </div>
                            </div>
                            <!--/ panel body with collapse capabale -->
                        </div>
                        <!--/ END panel -->
                    </div>

                    <div class="col-lg-6">
                        <!-- START panel -->
                        <div class="panel panel-default">
                            <!-- panel heading/header -->
                            <div class="panel-heading">
                                <h3 class="panel-title">Range slider</h3>
                                <!-- panel toolbar -->
                                <div class="panel-toolbar text-right">
                                    <!-- option -->
                                    <div class="option">
                                        <button class="btn demo" data-toggle="panelrefresh"><i class="reload"></i></button>
                                        <button class="btn up" data-toggle="panelcollapse"><i class="arrow"></i></button>
                                        <button class="btn" data-toggle="panelremove"><i class="remove"></i></button>
                                    </div>
                                    <!--/ option -->
                                </div>
                                <!--/ panel toolbar -->
                            </div>
                            <!--/ panel heading/header -->
                            
                            <!-- panel body with collapse capable -->
                            <div class="panel-collapse pull out">
                                <!-- Loading indicator -->
                                <div class="indicator"><span class="spinner"></span></div>
                                <!--/ Loading indicator -->
                                <div class="panel-body">
                                    The space between the handles is filled with a different background color to indicate those values are selected.
                                </div>
                                <hr class="nm"><!-- horizontal line -->
                                <div class="panel-body">
                                    <ul id="range-slider" class="list-unstyled mb0">
                                        <li class="slider-primary mb15" data-min="10" data-max="40"></li>
                                        <li class="slider-info mb15" data-min="20" data-max="50"></li>
                                        <li class="slider-success mb15" data-min="30" data-max="60"></li>
                                        <li class="slider-warning mb15" data-min="40" data-max="70"></li>
                                        <li class="slider-danger" data-min="50" data-max="80"></li>
                                    </ul>
                                </div>
                            </div>
                            <!--/ panel body with collapse capabale -->
                        </div>
                        <!--/ END panel -->
                    </div>
                </div>
                <!--/ END row -->

                <!-- START row -->
                <div class="row">
                    <div class="col-lg-4">
                        <!-- START panel -->
                        <div class="panel panel-default">
                            <!-- panel heading/header -->
                            <div class="panel-heading">
                                <h3 class="panel-title">Fixed maximum</h3>
                                <!-- panel toolbar -->
                                <div class="panel-toolbar text-right">
                                    <span class="label label-success" id="amount-max-slider"></span>
                                </div>
                                <!--/ panel toolbar -->
                            </div>
                            <!--/ panel heading/header -->
                            
                            <!-- panel body with collapse capable -->
                            <div class="panel-collapse pull out">
                                <!-- Loading indicator -->
                                <div class="indicator"><span class="spinner"></span></div>
                                <!--/ Loading indicator -->
                                <div class="panel-body">
                                    Fix the maximum value of the range slider so that the user can only select a minimum.
                                </div>
                                <hr class="nm"><!-- horizontal line -->
                                <div class="panel-body">
                                    <div id="fixed-max-slider" class="slider-success"></div>
                                </div>
                            </div>
                            <!--/ panel body with collapse capabale -->
                        </div>
                        <!--/ END panel -->
                    </div>

                    <div class="col-lg-4">
                        <!-- START panel -->
                        <div class="panel panel-default">
                            <!-- panel heading/header -->
                            <div class="panel-heading">
                                <h3 class="panel-title">Fixed minimum</h3>
                                <!-- panel toolbar -->
                                <div class="panel-toolbar text-right">
                                    <span class="label label-danger" id="amount-min-slider"></span>
                                </div>
                                <!--/ panel toolbar -->
                            </div>
                            <!--/ panel heading/header -->
                            
                            <!-- panel body with collapse capable -->
                            <div class="panel-collapse pull out">
                                <!-- Loading indicator -->
                                <div class="indicator"><span class="spinner"></span></div>
                                <!--/ Loading indicator -->
                                <div class="panel-body">
                                    Fix the minimum value of the range slider so that the user can only select a maximum.
                                </div>
                                <hr class="nm"><!-- horizontal line -->
                                <div class="panel-body">
                                    <div id="fixed-min-slider" class="slider-danger"></div>
                                </div>
                            </div>
                            <!--/ panel body with collapse capabale -->
                        </div>
                        <!--/ END panel -->
                    </div>

                    <div class="col-lg-4">
                        <!-- START panel -->
                        <div class="panel panel-default">
                            <!-- panel heading/header -->
                            <div class="panel-heading">
                                <h3 class="panel-title">Snap to increments</h3>
                                <!-- panel toolbar -->
                                <div class="panel-toolbar text-right">
                                    <span class="label label-primary" id="amount-snap-increment-slider"></span>
                                </div>
                                <!--/ panel toolbar -->
                            </div>
                            <!--/ panel heading/header -->
                            
                            <!-- panel body with collapse capable -->
                            <div class="panel-collapse pull out">
                                <!-- Loading indicator -->
                                <div class="indicator"><span class="spinner"></span></div>
                                <!--/ Loading indicator -->
                                <div class="panel-body">
                                    Fix the minimum value of the range slider so that the user can only select a maximum.
                                </div>
                                <hr class="nm"><!-- horizontal line -->
                                <div class="panel-body">
                                    <div id="snap-increment-slider" class="slider-primary"></div>
                                </div>
                            </div>
                            <!--/ panel body with collapse capabale -->
                        </div>
                        <!--/ END panel -->
                    </div>
                </div>
                <!--/ END row -->

                <!-- START row -->
                <div class="row">
                    <div class="col-lg-6">
                        <!-- START panel -->
                        <div class="panel panel-default">
                            <!-- panel heading/header -->
                            <div class="panel-heading">
                                <h3 class="panel-title">Vertical slider</h3>
                                <!-- panel toolbar -->
                                <div class="panel-toolbar text-right">
                                    <!-- option -->
                                    <div class="option">
                                        <button class="btn demo" data-toggle="panelrefresh"><i class="reload"></i></button>
                                        <button class="btn up" data-toggle="panelcollapse"><i class="arrow"></i></button>
                                        <button class="btn" data-toggle="panelremove"><i class="remove"></i></button>
                                    </div>
                                    <!--/ option -->
                                </div>
                                <!--/ panel toolbar -->
                            </div>
                            <!--/ panel heading/header -->
                            
                            <!-- panel body with collapse capable -->
                            <div class="panel-collapse pull out">
                                <!-- Loading indicator -->
                                <div class="indicator"><span class="spinner"></span></div>
                                <!--/ Loading indicator -->
                                <div class="panel-body">
                                    Change the orientation of the slider to vertical. Assign a height value via <code>.height()</code> or by setting the height through CSS, and set the <code>orientation</code> option to "vertical."
                                </div>
                                <hr class="nm"><!-- horizontal line -->
                                <div class="panel-body">
                                    <ul id="vertical-slider" class="list-inline mb0 text-center">
                                        <li class="slider-primary mr15" data-min="20" style="height:150px;"></li>
                                        <li class="slider-info mr15" data-min="30" style="height:150px;"></li>
                                        <li class="slider-success mr15" data-min="40" style="height:150px;"></li>
                                        <li class="slider-warning mr15" data-min="50" style="height:150px;"></li>
                                        <li class="slider-danger" data-min="60" style="height:150px;"></li>
                                    </ul>
                                </div>
                            </div>
                            <!--/ panel body with collapse capabale -->
                        </div>
                        <!--/ END panel -->
                    </div>

                    <div class="col-lg-6">
                        <!-- START panel -->
                        <div class="panel panel-default">
                            <!-- panel heading/header -->
                            <div class="panel-heading">
                                <h3 class="panel-title">Vertical range slider</h3>
                                <!-- panel toolbar -->
                                <div class="panel-toolbar text-right">
                                    <!-- option -->
                                    <div class="option">
                                        <button class="btn demo" data-toggle="panelrefresh"><i class="reload"></i></button>
                                        <button class="btn up" data-toggle="panelcollapse"><i class="arrow"></i></button>
                                        <button class="btn" data-toggle="panelremove"><i class="remove"></i></button>
                                    </div>
                                    <!--/ option -->
                                </div>
                                <!--/ panel toolbar -->
                            </div>
                            <!--/ panel heading/header -->
                            
                            <!-- panel body with collapse capable -->
                            <div class="panel-collapse pull out">
                                <!-- Loading indicator -->
                                <div class="indicator"><span class="spinner"></span></div>
                                <!--/ Loading indicator -->
                                <div class="panel-body">
                                    Change the orientation of the range slider to vertical. Assign a height value via <code>.height()</code> or by setting the height through CSS, and set the <code>orientation</code> option to "vertical."
                                </div>
                                <hr class="nm"><!-- horizontal line -->
                                <div class="panel-body">
                                    <ul id="vertical-range-slider" class="list-inline mb0 text-center">
                                        <li class="slider-primary mr15" data-min="10" data-max="40" style="height:150px;"></li>
                                        <li class="slider-info mr15" data-min="20" data-max="50" style="height:150px;"></li>
                                        <li class="slider-success mr15" data-min="30" data-max="60" style="height:150px;"></li>
                                        <li class="slider-warning mr15" data-min="40" data-max="70" style="height:150px;"></li>
                                        <li class="slider-danger" data-min="50" data-max="80" style="height:150px;"></li>
                                    </ul>
                                </div>
                            </div>
                            <!--/ panel body with collapse capabale -->
                        </div>
                        <!--/ END panel -->
                    </div>
                </div>
                <!--/ END row -->
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
        <script type="text/javascript" src="/plugins/jquery-ui/js/jquery-ui.js"></script>
        <script type="text/javascript" src="/js/backend/components/slider.js"></script>
        <!--/ Plugins and page level script : optional -->
        <!--/ END JAVASCRIPT SECTION -->
    </body>
    <!--/ END Body -->
</html>