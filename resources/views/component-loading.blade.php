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
                        <h4 class="title semibold">Loading indicator</h4>
                    </div>
                    <div class="page-header-section">
                        <!-- Toolbar -->
                        <div class="toolbar">
                            <ol class="breadcrumb breadcrumb-transparent nm">
                                <li><a href="javascript:void(0);">UI Elements</a></li>
                                <li class="active">Loading indicator</li>
                            </ol>
                        </div>
                        <!--/ Toolbar -->
                    </div>
                </div>
                <!-- Page Header -->

                <!-- START row -->
                <div class="row">
                    <div class="col-lg-3">
                        <!-- panel -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h5 class="panel-title">Default spinner</h5>
                            </div>
                            <div class="panel-body">
                                <!-- indicator -->
                                <div class="indicator show"><span class="spinner"></span></div>
                                <!--/ indicator -->
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                        </div>
                        <!--/ panel -->
                    </div>

                    <div class="col-lg-3">
                        <!-- panel -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h5 class="panel-title">spinner1</h5>
                            </div>
                            <div class="panel-body">
                                <!-- indicator -->
                                <div class="indicator show"><span class="spinner spinner1"></span></div>
                                <!--/ indicator -->
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                        </div>
                        <!--/ panel -->
                    </div>

                    <div class="col-lg-3">
                        <!-- panel -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h5 class="panel-title">spinner2</h5>
                            </div>
                            <div class="panel-body">
                                <!-- indicator -->
                                <div class="indicator show"><span class="spinner spinner2"></span></div>
                                <!--/ indicator -->
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                        </div>
                        <!--/ panel -->
                    </div>

                    <div class="col-lg-3">
                        <!-- panel -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h5 class="panel-title">spinner3</h5>
                            </div>
                            <div class="panel-body">
                                <!-- indicator -->
                                <div class="indicator show"><span class="spinner spinner3"></span></div>
                                <!--/ indicator -->
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                        </div>
                        <!--/ panel -->
                    </div>
                </div>
                <!--/ END row -->

                <!-- START row -->
                <div class="row">
                    <div class="col-lg-3">
                        <!-- panel -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h5 class="panel-title">spinner4</h5>
                            </div>
                            <div class="panel-body">
                                <!-- indicator -->
                                <div class="indicator show"><span class="spinner spinner4"></span></div>
                                <!--/ indicator -->
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                        </div>
                        <!--/ panel -->
                    </div>

                    <div class="col-lg-3">
                        <!-- panel -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h5 class="panel-title">spinner5</h5>
                            </div>
                            <div class="panel-body">
                                <!-- indicator -->
                                <div class="indicator show"><span class="spinner spinner5"></span></div>
                                <!--/ indicator -->
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                        </div>
                        <!--/ panel -->
                    </div>

                    <div class="col-lg-3">
                        <!-- panel -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h5 class="panel-title">spinner6</h5>
                            </div>
                            <div class="panel-body">
                                <!-- indicator -->
                                <div class="indicator show"><span class="spinner spinner6"></span></div>
                                <!--/ indicator -->
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                        </div>
                        <!--/ panel -->
                    </div>

                    <div class="col-lg-3">
                        <!-- panel -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h5 class="panel-title">spinner7</h5>
                            </div>
                            <div class="panel-body">
                                <!-- indicator -->
                                <div class="indicator show"><span class="spinner spinner7"></span></div>
                                <!--/ indicator -->
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                        </div>
                        <!--/ panel -->
                    </div>
                </div>
                <!--/ END row -->

                <!-- START row -->
                <div class="row">
                    <div class="col-lg-3">
                        <!-- panel -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h5 class="panel-title">spinner8</h5>
                            </div>
                            <div class="panel-body">
                                <!-- indicator -->
                                <div class="indicator show"><span class="spinner spinner8"></span></div>
                                <!--/ indicator -->
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                        </div>
                        <!--/ panel -->
                    </div>

                    <div class="col-lg-3">
                        <!-- panel -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h5 class="panel-title">spinner9</h5>
                            </div>
                            <div class="panel-body">
                                <!-- indicator -->
                                <div class="indicator show"><span class="spinner spinner9"></span></div>
                                <!--/ indicator -->
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                        </div>
                        <!--/ panel -->
                    </div>

                    <div class="col-lg-3">
                        <!-- panel -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h5 class="panel-title">spinner10</h5>
                            </div>
                            <div class="panel-body">
                                <!-- indicator -->
                                <div class="indicator show"><span class="spinner spinner10"></span></div>
                                <!--/ indicator -->
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                        </div>
                        <!--/ panel -->
                    </div>

                    <div class="col-lg-3">
                        <!-- panel -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h5 class="panel-title">spinner11</h5>
                            </div>
                            <div class="panel-body">
                                <!-- indicator -->
                                <div class="indicator show"><span class="spinner spinner11"></span></div>
                                <!--/ indicator -->
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                        </div>
                        <!--/ panel -->
                    </div>
                </div>
                <!--/ END row -->

                <!-- START row -->
                <div class="row">
                    <div class="col-lg-3">
                        <!-- panel -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h5 class="panel-title">spinner12</h5>
                            </div>
                            <div class="panel-body">
                                <!-- indicator -->
                                <div class="indicator show"><span class="spinner spinner12"></span></div>
                                <!--/ indicator -->
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                        </div>
                        <!--/ panel -->
                    </div>

                    <div class="col-lg-3">
                        <!-- panel -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h5 class="panel-title">spinner13</h5>
                            </div>
                            <div class="panel-body">
                                <!-- indicator -->
                                <div class="indicator show"><span class="spinner spinner13"></span></div>
                                <!--/ indicator -->
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                        </div>
                        <!--/ panel -->
                    </div>

                    <div class="col-lg-3">
                        <!-- panel -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h5 class="panel-title">spinner14</h5>
                            </div>
                            <div class="panel-body">
                                <!-- indicator -->
                                <div class="indicator show"><span class="spinner spinner14"></span></div>
                                <!--/ indicator -->
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                        </div>
                        <!--/ panel -->
                    </div>

                    <div class="col-lg-3">
                        <!-- panel -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h5 class="panel-title">spinner15</h5>
                            </div>
                            <div class="panel-body">
                                <!-- indicator -->
                                <div class="indicator show"><span class="spinner spinner15"></span></div>
                                <!--/ indicator -->
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                        </div>
                        <!--/ panel -->
                    </div>
                </div>
                <!--/ END row -->

                <!-- START row -->
                <div class="row">
                    <div class="col-lg-3">
                        <!-- panel -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h5 class="panel-title">spinner16</h5>
                            </div>
                            <div class="panel-body">
                                <!-- indicator -->
                                <div class="indicator show"><span class="spinner spinner16"></span></div>
                                <!--/ indicator -->
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                        </div>
                        <!--/ panel -->
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
        <!--/ Plugins and page level script : optional -->
        <!--/ END JAVASCRIPT SECTION -->
    </body>
    <!--/ END Body -->
</html>