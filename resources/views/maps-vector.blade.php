<!DOCTYPE html>
<html class="backend">
    <!-- START Head -->
    <head>
        <!-- START META SECTION -->
		@include('partials.head_meta')
		<!--/ END META SECTION -->

        <!-- START STYLESHEETS -->
        <!-- Plugins stylesheet : optional -->
        <link rel="stylesheet" href="/plugins/jqvmap/css/jqvmap.css">
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
                        <h4 class="title semibold">Vector Maps</h4>
                    </div>
                    <div class="page-header-section">
                        <!-- Toolbar -->
                        <div class="toolbar">
                            <ol class="breadcrumb breadcrumb-transparent nm">
                                <li><a href="#">Maps</a></li>
                                <li class="active">Vector</li>
                            </ol>
                        </div>
                        <!--/ Toolbar -->
                    </div>
                </div>
                <!-- Page Header -->

                <!-- START row -->
                <div class="row">
                    <div class="col-md-12">
                        <!-- START panel -->
                        <div class="panel panel-default overflow-hidden">
                            <div class="panel-heading">
                                <h3 class="panel-title">World map</h3>
                            </div>
                            <!-- panel body with collapse capabale -->
                            <div class="panel-collapse">
                                <div class="panel-body np" id="world-map" style="height:400px;"></div>
                            </div>
                            <!--/ panel body with collapse capabale -->
                            <!-- Loading indicator -->
                            <div class="indicator show"><span class="spinner spinner16"></span></div>
                            <!--/ Loading indicator -->
                        </div>
                        <!--/ END panel -->
                    </div>
                </div>
                <!--/ END row -->

                <!-- START row -->
                <div class="row">
                    <div class="col-md-4">
                        <div class="panel panel-default">
                            <!-- panel heading/header -->
                            <div class="panel-heading">
                                <h3 class="panel-title">Continents - Asia</h3>
                            </div>
                            <!--/ panel heading/header -->
                            <!-- panel body with collapse capabale -->
                            <div class="panel-collapse">
                                <div class="panel-body" id="map-asia" style="height:300px;"></div>
                            </div>
                            <!--/ panel body with collapse capabale -->
                            <!-- Loading indicator -->
                            <div class="indicator show"><span class="spinner spinner16"></span></div>
                            <!--/ Loading indicator -->
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="panel panel-default">
                            <!-- panel heading/header -->
                            <div class="panel-heading">
                                <h3 class="panel-title">Continents - Europe</h3>
                            </div>
                            <!--/ panel heading/header -->
                            <!-- panel body with collapse capabale -->
                            <div class="panel-collapse">
                                <div class="panel-body" id="map-europe" style="height:300px;"></div>
                            </div>
                            <!--/ panel body with collapse capabale -->
                            <!-- Loading indicator -->
                            <div class="indicator show"><span class="spinner spinner16"></span></div>
                            <!--/ Loading indicator -->
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="panel panel-default">
                            <!-- panel heading/header -->
                            <div class="panel-heading">
                                <h3 class="panel-title">Continents - Australia</h3>
                            </div>
                            <!--/ panel heading/header -->
                            <!-- panel body with collapse capabale -->
                            <div class="panel-collapse">
                                <div class="panel-body" id="map-australia" style="height:300px;"></div>
                            </div>
                            <!--/ panel body with collapse capabale -->
                            <!-- Loading indicator -->
                            <div class="indicator show"><span class="spinner spinner16"></span></div>
                            <!--/ Loading indicator -->
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="panel panel-default">
                            <!-- panel heading/header -->
                            <div class="panel-heading">
                                <h3 class="panel-title">Continents - Africa</h3>
                            </div>
                            <!--/ panel heading/header -->
                            <!-- panel body with collapse capabale -->
                            <div class="panel-collapse">
                                <div class="panel-body" id="map-africa" style="height:300px;"></div>
                            </div>
                            <!--/ panel body with collapse capabale -->
                            <!-- Loading indicator -->
                            <div class="indicator show"><span class="spinner spinner16"></span></div>
                            <!--/ Loading indicator -->
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="panel panel-default">
                            <!-- panel heading/header -->
                            <div class="panel-heading">
                                <h3 class="panel-title">Continents - North America</h3>
                            </div>
                            <!--/ panel heading/header -->
                            <!-- panel body with collapse capabale -->
                            <div class="panel-collapse">
                                <div class="panel-body" id="map-north-america" style="height:300px;"></div>
                            </div>
                            <!--/ panel body with collapse capabale -->
                            <!-- Loading indicator -->
                            <div class="indicator show"><span class="spinner spinner16"></span></div>
                            <!--/ Loading indicator -->
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="panel panel-default">
                            <!-- panel heading/header -->
                            <div class="panel-heading">
                                <h3 class="panel-title">Continents - South America</h3>
                            </div>
                            <!--/ panel heading/header -->
                            <!-- panel body with collapse capabale -->
                            <div class="panel-collapse">
                                <div class="panel-body" id="map-south-america" style="height:300px;"></div>
                            </div>
                            <!--/ panel body with collapse capabale -->
                            <!-- Loading indicator -->
                            <div class="indicator show"><span class="spinner spinner16"></span></div>
                            <!--/ Loading indicator -->
                        </div>
                    </div>
                </div>
                <!--/ END row -->

                <!-- START row -->
                <div class="row">
                    <div class="col-md-12">
                        <!-- START panel -->
                        <div class="panel panel-default overflow-hidden">
                            <div class="panel-heading">
                                <h3 class="panel-title">Markers</h3>
                            </div>
                            <!-- panel body with collapse capabale -->
                            <div class="panel-collapse">
                                <div class="panel-body np" id="map-marker" style="height:600px;"></div>
                            </div>
                            <!--/ panel body with collapse capabale -->
                            <!-- Loading indicator -->
                            <div class="indicator show"><span class="spinner spinner16"></span></div>
                            <!--/ Loading indicator -->
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
        <script type="text/javascript" src="/plugins/jqvmap/js/jquery.vmap.js"></script>
        <script type="text/javascript" src="/js/backend/maps/vector.js"></script>
        <!--/ Plugins and page level script : optional -->
        <!--/ END JAVASCRIPT SECTION -->
    </body>
    <!--/ END Body -->
</html>