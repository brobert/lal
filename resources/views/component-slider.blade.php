<!DOCTYPE html>
<html class="backend">
    <!-- START Head -->
    <head>
        <!-- START META SECTION -->
		@include('partials.head_meta')
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
		@include('partials.template_header')
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