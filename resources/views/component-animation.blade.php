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
                <!-- Page Header -->
                <div class="page-header page-header-block">
                    <div class="page-header-section">
                        <h4 class="title semibold">Animation</h4>
                    </div>
                    <div class="page-header-section">
                        <!-- Toolbar -->
                        <div class="toolbar">
                            <ol class="breadcrumb breadcrumb-transparent nm">
                                <li><a href="javascript:void(0);">UI Components</a></li>
                                <li class="active">Animation</li>
                            </ol>
                        </div>
                        <!--/ Toolbar -->
                    </div>
                </div>
                <!-- Page Header -->

                <!-- START row -->
                <div class="row">
                    <!-- Animation bounce -->
                    <div class="col-sm-3">
                        <div class="panel panel-default">
                            <!-- panel heading/header -->
                            <div class="panel-heading pr0">
                                <h3 class="panel-title">bounce</h3>
                                <!-- panel toolbar -->
                                <div class="panel-toolbar text-right">
                                    <button type="button" class="btn btn-link btn-toggle-anim" data-anim="bounce" title="Play"><i class="ico-play32"></i></button>
                                </div>
                                <!--/ panel toolbar -->
                            </div>
                            <!--/ panel heading/header -->
                            
                            <!-- panel body with collapse capable -->
                            <div class="panel-collapse pull out">
                                <div class="panel-body">
                                    <code class="ellipsis" style="display:block;">animation animating bounce</code>
                                </div>
                            </div>
                            <!--/ panel body with collapse capabale -->
                        </div>
                    </div>
                    <!--/ Animation bounce -->

                    <!-- Animation flash -->
                    <div class="col-sm-3">
                        <div class="panel panel-default">
                            <!-- panel heading/header -->
                            <div class="panel-heading pr0">
                                <h3 class="panel-title">flash</h3>
                                <!-- panel toolbar -->
                                <div class="panel-toolbar text-right">
                                    <button type="button" class="btn btn-link btn-toggle-anim" data-anim="flash" title="Play"><i class="ico-play32"></i></button>
                                </div>
                                <!--/ panel toolbar -->
                            </div>
                            <!--/ panel heading/header -->
                            
                            <!-- panel body with collapse capable -->
                            <div class="panel-collapse pull out">
                                <div class="panel-body">
                                    <code class="ellipsis" style="display:block;">animation animating flash</code>
                                </div>
                            </div>
                            <!--/ panel body with collapse capabale -->
                        </div>
                    </div>
                    <!--/ Animation flash -->

                    <!-- Animation pulse -->
                    <div class="col-sm-3">
                        <div class="panel panel-default">
                            <!-- panel heading/header -->
                            <div class="panel-heading pr0">
                                <h3 class="panel-title">pulse</h3>
                                <!-- panel toolbar -->
                                <div class="panel-toolbar text-right">
                                    <button type="button" class="btn btn-link btn-toggle-anim" data-anim="pulse" title="Play"><i class="ico-play32"></i></button>
                                </div>
                                <!--/ panel toolbar -->
                            </div>
                            <!--/ panel heading/header -->
                            
                            <!-- panel body with collapse capable -->
                            <div class="panel-collapse pull out">
                                <div class="panel-body">
                                    <code class="ellipsis" style="display:block;">animation animating pulse</code>
                                </div>
                            </div>
                            <!--/ panel body with collapse capabale -->
                        </div>
                    </div>
                    <!--/ Animation pulse -->

                    <!-- Animation rubberBand -->
                    <div class="col-sm-3">
                        <div class="panel panel-default">
                            <!-- panel heading/header -->
                            <div class="panel-heading pr0">
                                <h3 class="panel-title">rubberBand</h3>
                                <!-- panel toolbar -->
                                <div class="panel-toolbar text-right">
                                    <button type="button" class="btn btn-link btn-toggle-anim" data-anim="rubberBand" title="Play"><i class="ico-play32"></i></button>
                                </div>
                                <!--/ panel toolbar -->
                            </div>
                            <!--/ panel heading/header -->
                            
                            <!-- panel body with collapse capable -->
                            <div class="panel-collapse pull out">
                                <div class="panel-body">
                                    <code class="ellipsis" style="display:block;">animation animating rubberBand</code>
                                </div>
                            </div>
                            <!--/ panel body with collapse capabale -->
                        </div>
                    </div>
                    <!--/ Animation rubberBand -->

                    <!-- Animation shake -->
                    <div class="col-sm-3">
                        <div class="panel panel-default">
                            <!-- panel heading/header -->
                            <div class="panel-heading pr0">
                                <h3 class="panel-title">shake</h3>
                                <!-- panel toolbar -->
                                <div class="panel-toolbar text-right">
                                    <button type="button" class="btn btn-link btn-toggle-anim" data-anim="shake" title="Play"><i class="ico-play32"></i></button>
                                </div>
                                <!--/ panel toolbar -->
                            </div>
                            <!--/ panel heading/header -->
                            
                            <!-- panel body with collapse capable -->
                            <div class="panel-collapse pull out">
                                <div class="panel-body">
                                    <code class="ellipsis" style="display:block;">animation animating shake</code>
                                </div>
                            </div>
                            <!--/ panel body with collapse capabale -->
                        </div>
                    </div>
                    <!--/ Animation shake -->

                    <!-- Animation swing -->
                    <div class="col-sm-3">
                        <div class="panel panel-default">
                            <!-- panel heading/header -->
                            <div class="panel-heading pr0">
                                <h3 class="panel-title">swing</h3>
                                <!-- panel toolbar -->
                                <div class="panel-toolbar text-right">
                                    <button type="button" class="btn btn-link btn-toggle-anim" data-anim="swing" title="Play"><i class="ico-play32"></i></button>
                                </div>
                                <!--/ panel toolbar -->
                            </div>
                            <!--/ panel heading/header -->
                            
                            <!-- panel body with collapse capable -->
                            <div class="panel-collapse pull out">
                                <div class="panel-body">
                                    <code class="ellipsis" style="display:block;">animation animating swing</code>
                                </div>
                            </div>
                            <!--/ panel body with collapse capabale -->
                        </div>
                    </div>
                    <!--/ Animation swing -->

                    <!-- Animation tada -->
                    <div class="col-sm-3">
                        <div class="panel panel-default">
                            <!-- panel heading/header -->
                            <div class="panel-heading pr0">
                                <h3 class="panel-title">tada</h3>
                                <!-- panel toolbar -->
                                <div class="panel-toolbar text-right">
                                    <button type="button" class="btn btn-link btn-toggle-anim" data-anim="tada" title="Play"><i class="ico-play32"></i></button>
                                </div>
                                <!--/ panel toolbar -->
                            </div>
                            <!--/ panel heading/header -->
                            
                            <!-- panel body with collapse capable -->
                            <div class="panel-collapse pull out">
                                <div class="panel-body">
                                    <code class="ellipsis" style="display:block;">animation animating tada</code>
                                </div>
                            </div>
                            <!--/ panel body with collapse capabale -->
                        </div>
                    </div>
                    <!--/ Animation tada -->

                    <!-- Animation wobble -->
                    <div class="col-sm-3">
                        <div class="panel panel-default">
                            <!-- panel heading/header -->
                            <div class="panel-heading pr0">
                                <h3 class="panel-title">wobble</h3>
                                <!-- panel toolbar -->
                                <div class="panel-toolbar text-right">
                                    <button type="button" class="btn btn-link btn-toggle-anim" data-anim="wobble" title="Play"><i class="ico-play32"></i></button>
                                </div>
                                <!--/ panel toolbar -->
                            </div>
                            <!--/ panel heading/header -->
                            
                            <!-- panel body with collapse capable -->
                            <div class="panel-collapse pull out">
                                <div class="panel-body">
                                    <code class="ellipsis" style="display:block;">animation animating wobble</code>
                                </div>
                            </div>
                            <!--/ panel body with collapse capabale -->
                        </div>
                    </div>
                    <!--/ Animation wobble -->

                    <!-- Animation bounceIn -->
                    <div class="col-sm-3">
                        <div class="panel panel-default">
                            <!-- panel heading/header -->
                            <div class="panel-heading pr0">
                                <h3 class="panel-title">bounceIn</h3>
                                <!-- panel toolbar -->
                                <div class="panel-toolbar text-right">
                                    <button type="button" class="btn btn-link btn-toggle-anim" data-anim="bounceIn" title="Play"><i class="ico-play32"></i></button>
                                </div>
                                <!--/ panel toolbar -->
                            </div>
                            <!--/ panel heading/header -->
                            
                            <!-- panel body with collapse capable -->
                            <div class="panel-collapse pull out">
                                <div class="panel-body">
                                    <code class="ellipsis" style="display:block;">animation animating bounceIn</code>
                                </div>
                            </div>
                            <!--/ panel body with collapse capabale -->
                        </div>
                    </div>
                    <!--/ Animation bounceIn -->

                    <!-- Animation bounceInDown -->
                    <div class="col-sm-3">
                        <div class="panel panel-default">
                            <!-- panel heading/header -->
                            <div class="panel-heading pr0">
                                <h3 class="panel-title">bounceInDown</h3>
                                <!-- panel toolbar -->
                                <div class="panel-toolbar text-right">
                                    <button type="button" class="btn btn-link btn-toggle-anim" data-anim="bounceInDown" title="Play"><i class="ico-play32"></i></button>
                                </div>
                                <!--/ panel toolbar -->
                            </div>
                            <!--/ panel heading/header -->
                            
                            <!-- panel body with collapse capable -->
                            <div class="panel-collapse pull out">
                                <div class="panel-body">
                                    <code class="ellipsis" style="display:block;">animation animating bounceInDown</code>
                                </div>
                            </div>
                            <!--/ panel body with collapse capabale -->
                        </div>
                    </div>
                    <!--/ Animation bounceInDown -->

                    <!-- Animation bounceInLeft -->
                    <div class="col-sm-3">
                        <div class="panel panel-default">
                            <!-- panel heading/header -->
                            <div class="panel-heading pr0">
                                <h3 class="panel-title">bounceInLeft</h3>
                                <!-- panel toolbar -->
                                <div class="panel-toolbar text-right">
                                    <button type="button" class="btn btn-link btn-toggle-anim" data-anim="bounceInLeft" title="Play"><i class="ico-play32"></i></button>
                                </div>
                                <!--/ panel toolbar -->
                            </div>
                            <!--/ panel heading/header -->
                            
                            <!-- panel body with collapse capable -->
                            <div class="panel-collapse pull out">
                                <div class="panel-body">
                                    <code class="ellipsis" style="display:block;">animation animating bounceInLeft</code>
                                </div>
                            </div>
                            <!--/ panel body with collapse capabale -->
                        </div>
                    </div>
                    <!--/ Animation bounceInLeft -->

                    <!-- Animation bounceInRight -->
                    <div class="col-sm-3">
                        <div class="panel panel-default">
                            <!-- panel heading/header -->
                            <div class="panel-heading pr0">
                                <h3 class="panel-title">bounceInRight</h3>
                                <!-- panel toolbar -->
                                <div class="panel-toolbar text-right">
                                    <button type="button" class="btn btn-link btn-toggle-anim" data-anim="bounceInRight" title="Play"><i class="ico-play32"></i></button>
                                </div>
                                <!--/ panel toolbar -->
                            </div>
                            <!--/ panel heading/header -->
                            
                            <!-- panel body with collapse capable -->
                            <div class="panel-collapse pull out">
                                <div class="panel-body">
                                    <code class="ellipsis" style="display:block;">animation animating bounceInRight</code>
                                </div>
                            </div>
                            <!--/ panel body with collapse capabale -->
                        </div>
                    </div>
                    <!--/ Animation bounceInRight -->

                    <!-- Animation bounceInUp -->
                    <div class="col-sm-3">
                        <div class="panel panel-default">
                            <!-- panel heading/header -->
                            <div class="panel-heading pr0">
                                <h3 class="panel-title">bounceInUp</h3>
                                <!-- panel toolbar -->
                                <div class="panel-toolbar text-right">
                                    <button type="button" class="btn btn-link btn-toggle-anim" data-anim="bounceInUp" title="Play"><i class="ico-play32"></i></button>
                                </div>
                                <!--/ panel toolbar -->
                            </div>
                            <!--/ panel heading/header -->
                            
                            <!-- panel body with collapse capable -->
                            <div class="panel-collapse pull out">
                                <div class="panel-body">
                                    <code class="ellipsis" style="display:block;">animation animating bounceInUp</code>
                                </div>
                            </div>
                            <!--/ panel body with collapse capabale -->
                        </div>
                    </div>
                    <!--/ Animation bounceInUp -->

                    <!-- Animation bounceOut -->
                    <div class="col-sm-3">
                        <div class="panel panel-default">
                            <!-- panel heading/header -->
                            <div class="panel-heading pr0">
                                <h3 class="panel-title">bounceOut</h3>
                                <!-- panel toolbar -->
                                <div class="panel-toolbar text-right">
                                    <button type="button" class="btn btn-link btn-toggle-anim" data-anim="bounceOut" title="Play"><i class="ico-play32"></i></button>
                                </div>
                                <!--/ panel toolbar -->
                            </div>
                            <!--/ panel heading/header -->
                            
                            <!-- panel body with collapse capable -->
                            <div class="panel-collapse pull out">
                                <div class="panel-body">
                                    <code class="ellipsis" style="display:block;">animation animating bounceOut</code>
                                </div>
                            </div>
                            <!--/ panel body with collapse capabale -->
                        </div>
                    </div>
                    <!--/ Animation bounceOut -->

                    <!-- Animation bounceOutDown -->
                    <div class="col-sm-3">
                        <div class="panel panel-default">
                            <!-- panel heading/header -->
                            <div class="panel-heading pr0">
                                <h3 class="panel-title">bounceOutDown</h3>
                                <!-- panel toolbar -->
                                <div class="panel-toolbar text-right">
                                    <button type="button" class="btn btn-link btn-toggle-anim" data-anim="bounceOutDown" title="Play"><i class="ico-play32"></i></button>
                                </div>
                                <!--/ panel toolbar -->
                            </div>
                            <!--/ panel heading/header -->
                            
                            <!-- panel body with collapse capable -->
                            <div class="panel-collapse pull out">
                                <div class="panel-body">
                                    <code class="ellipsis" style="display:block;">animation animating bounceOutDown</code>
                                </div>
                            </div>
                            <!--/ panel body with collapse capabale -->
                        </div>
                    </div>
                    <!--/ Animation bounceOutDown -->

                    <!-- Animation bounceOutLeft -->
                    <div class="col-sm-3">
                        <div class="panel panel-default">
                            <!-- panel heading/header -->
                            <div class="panel-heading pr0">
                                <h3 class="panel-title">bounceOutLeft</h3>
                                <!-- panel toolbar -->
                                <div class="panel-toolbar text-right">
                                    <button type="button" class="btn btn-link btn-toggle-anim" data-anim="bounceOutLeft" title="Play"><i class="ico-play32"></i></button>
                                </div>
                                <!--/ panel toolbar -->
                            </div>
                            <!--/ panel heading/header -->
                            
                            <!-- panel body with collapse capable -->
                            <div class="panel-collapse pull out">
                                <div class="panel-body">
                                    <code class="ellipsis" style="display:block;">animation animating bounceOutLeft</code>
                                </div>
                            </div>
                            <!--/ panel body with collapse capabale -->
                        </div>
                    </div>
                    <!--/ Animation bounceOutLeft -->

                    <!-- Animation bounceOutUp -->
                    <div class="col-sm-3">
                        <div class="panel panel-default">
                            <!-- panel heading/header -->
                            <div class="panel-heading pr0">
                                <h3 class="panel-title">bounceOutUp</h3>
                                <!-- panel toolbar -->
                                <div class="panel-toolbar text-right">
                                    <button type="button" class="btn btn-link btn-toggle-anim" data-anim="bounceOutUp" title="Play"><i class="ico-play32"></i></button>
                                </div>
                                <!--/ panel toolbar -->
                            </div>
                            <!--/ panel heading/header -->
                            
                            <!-- panel body with collapse capable -->
                            <div class="panel-collapse pull out">
                                <div class="panel-body">
                                    <code class="ellipsis" style="display:block;">animation animating bounceOutUp</code>
                                </div>
                            </div>
                            <!--/ panel body with collapse capabale -->
                        </div>
                    </div>
                    <!--/ Animation bounceOutUp -->

                    <!-- Animation hinge -->
                    <div class="col-sm-3">
                        <div class="panel panel-default">
                            <!-- panel heading/header -->
                            <div class="panel-heading pr0">
                                <h3 class="panel-title">hinge</h3>
                                <!-- panel toolbar -->
                                <div class="panel-toolbar text-right">
                                    <button type="button" class="btn btn-link btn-toggle-anim" data-anim="hinge" title="Play"><i class="ico-play32"></i></button>
                                </div>
                                <!--/ panel toolbar -->
                            </div>
                            <!--/ panel heading/header -->
                            
                            <!-- panel body with collapse capable -->
                            <div class="panel-collapse pull out">
                                <div class="panel-body">
                                    <code class="ellipsis" style="display:block;">animation animating hinge</code>
                                </div>
                            </div>
                            <!--/ panel body with collapse capabale -->
                        </div>
                    </div>
                    <!--/ Animation hinge -->

                    <!-- Animation rollIn -->
                    <div class="col-sm-3">
                        <div class="panel panel-default">
                            <!-- panel heading/header -->
                            <div class="panel-heading pr0">
                                <h3 class="panel-title">rollIn</h3>
                                <!-- panel toolbar -->
                                <div class="panel-toolbar text-right">
                                    <button type="button" class="btn btn-link btn-toggle-anim" data-anim="rollIn" title="Play"><i class="ico-play32"></i></button>
                                </div>
                                <!--/ panel toolbar -->
                            </div>
                            <!--/ panel heading/header -->
                            
                            <!-- panel body with collapse capable -->
                            <div class="panel-collapse pull out">
                                <div class="panel-body">
                                    <code class="ellipsis" style="display:block;">animation animating rollIn</code>
                                </div>
                            </div>
                            <!--/ panel body with collapse capabale -->
                        </div>
                    </div>
                    <!--/ Animation rollIn -->

                    <!-- Animation rollOut -->
                    <div class="col-sm-3">
                        <div class="panel panel-default">
                            <!-- panel heading/header -->
                            <div class="panel-heading pr0">
                                <h3 class="panel-title">rollOut</h3>
                                <!-- panel toolbar -->
                                <div class="panel-toolbar text-right">
                                    <button type="button" class="btn btn-link btn-toggle-anim" data-anim="rollOut" title="Play"><i class="ico-play32"></i></button>
                                </div>
                                <!--/ panel toolbar -->
                            </div>
                            <!--/ panel heading/header -->
                            
                            <!-- panel body with collapse capable -->
                            <div class="panel-collapse pull out">
                                <div class="panel-body">
                                    <code class="ellipsis" style="display:block;">animation animating rollOut</code>
                                </div>
                            </div>
                            <!--/ panel body with collapse capabale -->
                        </div>
                    </div>
                    <!--/ Animation rollOut -->
                </div>
                <!--/ END row -->
                <hr><!-- horizontal line -->

                <!-- section header -->
                <div class="section-header">
                    <h5 class="semibold title mb15">Trigger animation if element / component visible in template viewport. This can be achieve with <span class="text-primary">WayPoints</span> plugins.</h5>
                </div>
                <!--/ section header -->

                <!-- START row -->
                <div class="row">
                    <!-- WayPoints Animation bounceIn -->
                    <div class="col-sm-3">
                        <div class="panel panel-default animation" data-toggle="waypoints" data-showanim="bounceIn" data-hideanim="bounceOut" data-offset="80%">
                            <!-- panel heading/header -->
                            <div class="panel-heading pr0">
                                <h3 class="panel-title">bounceIn</h3>
                            </div>
                            <!--/ panel heading/header -->
                            
                            <!-- panel body with collapse capable -->
                            <div class="panel-collapse pull out">
                                <div class="panel-body">
                                    <small class="text-muted">data-toggle="waypoints" data-showanim="bounceIn" data-hideanim="bounceOut" data-offset="80%"</small>
                                </div>
                            </div>
                            <!--/ panel body with collapse capabale -->
                        </div>
                    </div>
                    <!--/ WayPoints Animation bounceIn -->

                    <!-- WayPoints Animation fadeInDown -->
                    <div class="col-sm-3">
                        <div class="panel panel-default animation" data-toggle="waypoints" data-showanim="fadeInDown" data-hideanim="fadeOutDown" data-offset="80%">
                            <!-- panel heading/header -->
                            <div class="panel-heading pr0">
                                <h3 class="panel-title">fadeInDown</h3>
                            </div>
                            <!--/ panel heading/header -->
                            
                            <!-- panel body with collapse capable -->
                            <div class="panel-collapse pull out">
                                <div class="panel-body">
                                    <small class="text-muted">data-toggle="waypoints" data-showanim="fadeInDown" data-hideanim="fadeOutDown" data-offset="80%"</small>
                                </div>
                            </div>
                            <!--/ panel body with collapse capabale -->
                        </div>
                    </div>
                    <!--/ WayPoints Animation fadeInDown -->

                    <!-- WayPoints Animation rotateIn -->
                    <div class="col-sm-3">
                        <div class="panel panel-default animation" data-toggle="waypoints" data-showanim="rotateIn" data-hideanim="rotateOut" data-offset="80%">
                            <!-- panel heading/header -->
                            <div class="panel-heading pr0">
                                <h3 class="panel-title">rotateIn</h3>
                            </div>
                            <!--/ panel heading/header -->
                            
                            <!-- panel body with collapse capable -->
                            <div class="panel-collapse pull out">
                                <div class="panel-body">
                                    <small class="text-muted">data-toggle="waypoints" data-showanim="rotateIn" data-hideanim="rotateOut" data-offset="80%"</small>
                                </div>
                            </div>
                            <!--/ panel body with collapse capabale -->
                        </div>
                    </div>
                    <!--/ WayPoints Animation rotateIn -->

                    <!-- WayPoints Animation slideInLeft -->
                    <div class="col-sm-3">
                        <div class="panel panel-default animation" data-toggle="waypoints" data-showanim="slideInLeft" data-hideanim="slideOutRight" data-offset="80%">
                            <!-- panel heading/header -->
                            <div class="panel-heading pr0">
                                <h3 class="panel-title">slideInLeft</h3>
                            </div>
                            <!--/ panel heading/header -->
                            
                            <!-- panel body with collapse capable -->
                            <div class="panel-collapse pull out">
                                <div class="panel-body">
                                    <small class="text-muted">data-toggle="waypoints" data-showanim="slideInLeft" data-hideanim="slideOutRight" data-offset="80%"</small>
                                </div>
                            </div>
                            <!--/ panel body with collapse capabale -->
                        </div>
                    </div>
                    <!--/ WayPoints Animation slideInLeft -->

                    <!-- WayPoints Animation rollIn -->
                    <div class="col-sm-3">
                        <div class="panel panel-default animation" data-toggle="waypoints" data-showanim="rollIn" data-hideanim="rollOut" data-offset="80%">
                            <!-- panel heading/header -->
                            <div class="panel-heading pr0">
                                <h3 class="panel-title">rollIn</h3>
                            </div>
                            <!--/ panel heading/header -->
                            
                            <!-- panel body with collapse capable -->
                            <div class="panel-collapse pull out">
                                <div class="panel-body">
                                    <small class="text-muted">data-toggle="waypoints" data-showanim="rollIn" data-hideanim="rollOut" data-offset="80%"</small>
                                </div>
                            </div>
                            <!--/ panel body with collapse capabale -->
                        </div>
                    </div>
                    <!--/ WayPoints Animation rollIn -->

                    <!-- WayPoints Animation rotateInDownLeft -->
                    <div class="col-sm-3">
                        <div class="panel panel-default animation" data-toggle="waypoints" data-showanim="rotateInDownLeft" data-hideanim="rotateOutDownLeft" data-offset="80%">
                            <!-- panel heading/header -->
                            <div class="panel-heading pr0">
                                <h3 class="panel-title">rotateInDownLeft</h3>
                            </div>
                            <!--/ panel heading/header -->
                            
                            <!-- panel body with collapse capable -->
                            <div class="panel-collapse pull out">
                                <div class="panel-body">
                                    <small class="text-muted">data-toggle="waypoints" data-showanim="rotateInDownLeft" data-hideanim="rotateOutDownLeft" data-offset="80%"</small>
                                </div>
                            </div>
                            <!--/ panel body with collapse capabale -->
                        </div>
                    </div>
                    <!--/ WayPoints Animation rotateInDownLeft -->
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
        <script type="text/javascript" src="/js/backend/components/animation.js"></script>
        <!--/ Plugins and page level script : optional -->
        <!--/ END JAVASCRIPT SECTION -->
    </body>
    <!--/ END Body -->
</html>