<!DOCTYPE html>
<html class="backend">
    <!-- START Head -->
    <head>
        <!-- START META SECTION -->
		@include('partials.head_meta')
		<!--/ END META SECTION -->

        <!-- START STYLESHEETS -->
        <!-- Plugins stylesheet : optional -->
        <link rel="stylesheet" href="/plugins/owl/css/owl-carousel.css">
        <link rel="stylesheet" href="/plugins/flot/css/flot.css">
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
                        <h4 class="title semibold"><span class="figure"><i class="ico-tasks"></i></span> Stats & Widgets</h4>
                    </div>
                </div>
                <!-- Page Header -->

                <!-- START row -->
                <div class="row">
                    <div class="col-xs-12 col-md-6 col-lg-4">
                        @include('widgets.weather_1')
                    </div>

                    <div class="col-xs-12 col-md-6 col-lg-4">
                        @include('widgets.weather_2')
                    </div>

                    <div class="col-xs-12 col-md-6 col-lg-4">
                        @include('widgets.weather_3')
                        @include('widgets.weather_3_inv')
                    </div>
                </div>
                <!--/ END row -->

                <!-- START row -->
                <div class="row">
                    <div class="col-lg-3">
                        @include('widgets.weather_4')
                    </div>

                    <div class="col-lg-3">
                        @include('widgets.weather_5')
                    </div>
                </div>
                <!--/ END row -->
                <hr><!-- horizontal line -->

                <!-- section header -->
                <div class="section-header">
                    <h5 class="semibold title mb15">Social Widget</h5>
                </div>
                <!--/ section header -->

                <!-- START row -->
                <div class="row">
                    <div class="col-xs-12 col-md-6 col-lg-4">
                        @include('widgets.social_1')
                    </div>

                    <div class="col-xs-12 col-md-6 col-lg-4">
                        @include('widgets.social_2')
                    </div>

                    <div class="col-xs-12 col-md-6 col-lg-4">
                        @include('widgets.social_3')
                    </div>
                </div>
                <!--/ END row -->

                <!-- START row -->
                <div class="row">
                    <div class="col-xs-12 col-md-6 col-lg-4">
                        @include('widgets.social_4')
                    </div>

                    <div class="col-xs-12 col-md-6 col-lg-4">
                        @include('widgets.social_5')
                    </div>

                    <div class="col-xs-12 col-md-6 col-lg-4">
                        @include('widgets.social_6')
                    </div>
                </div>
                <!--/ END row -->

                <!-- START row -->
                <div class="row">
                    <div class="col-sm-4 col-md-4 col-lg-4">
                        @include('widgets.social_7')
                    </div>

                    <div class="col-sm-4 col-md-4 col-lg-4">
                        @include('widgets.social_8')
                    </div>

                    <div class="col-sm-4 col-md-4 col-lg-4">
                        @include('widgets.social_9')
                    </div>
                </div>
                <!--/ END row -->

                <!-- START row -->
                <div class="row">
                    <div class="col-md-3">
                        @include('widgets.user_thumb', ['imgStyle' => 'img-rounded'])
                    </div>
                    <div class="col-md-3">
                        @include('widgets.user_thumb', ['imgStyle' => 'img-circle'])
                    </div>
                    <div class="col-md-3">
                        @include('widgets.user_thumb', ['imgStyle' => 'img-rounded'])
                    </div>
                    <div class="col-md-3">
                        @include('widgets.user_thumb', ['imgStyle' => 'img-circle'])
                    </div>
                </div>
                <!--/ END row -->
                <hr><!-- horizontal line -->

                <!-- section header -->
                <div class="section-header">
                    <h5 class="semibold title mb15">Misc Widget</h5>
                </div>
                <!--/ section header -->

                <!-- START row -->
                <div class="row">
                    <div class="col-md-4">
                        @include('widgets.tasks')
                    </div>

                    <div class="col-md-4">
                        @include('widgets.audio')
                    </div>

                    <div class="col-md-4">
                        @include('widgets.video')
                    </div>

                    <div class="col-lg-6">
                        @include('widgets.chart_1')
                    </div>
                    <div class="col-lg-6">
                        @include('widgets.chart_2')
                    </div>
                </div>
                <!--/ END row -->

                <!-- START row -->
                <div class="row">
                    <div class="col-lg-6">
                        <!-- Carousel -->
                        <div class="panel nm no-border">
                            <div class="panel-body owl-carousel" id="carousel1">
                                <!-- slide #1 -->
                                <div class="item table-layout">
                                    <div class="col-sm-3 text-center">
                                        <img src="/image/icons/supportservices.png" alt="support" width="100%">
                                    </div>
                                    <div class="col-sm-9">
                                        <h4>24 Hour Awesome Support</h4>
                                        <p class="text-default">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                        cillum dolore eu fugiat nulla pariatur.</p>
                                        <a href="javascript:void(0);">Learn more&#8230;</a>
                                    </div>
                                </div>
                                <!--/ slide #1 -->
                                <!-- slide #2 -->
                                <div class="item table-layout">
                                    <div class="col-sm-3 text-center">
                                        <img src="/image/icons/socialengagement.png" alt="advertisment" width="100%">
                                    </div>
                                    <div class="col-sm-9 pl15">
                                        <h4>Awesome Advertisment Services</h4>
                                        <p class="text-default">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                        cillum dolore eu fugiat nulla pariatur.</p>
                                        <a href="javascript:void(0);">Learn more&#8230;</a>
                                    </div>
                                </div>
                                <!--/ slide #2 -->
                                <!-- slide #3 -->
                                <div class="item table-layout">
                                    <div class="col-sm-3 text-center">
                                        <img src="/image/icons/onlinepresencemanagement.png" alt="fast" width="100%">
                                    </div>
                                    <div class="col-sm-9 pl15">
                                        <h4>Blazing Fast</h4>
                                        <p class="text-default">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                        cillum dolore eu fugiat nulla pariatur.</p>
                                        <a href="javascript:void(0);">Learn more&#8230;</a>
                                    </div>
                                </div>
                                <!--/ slide #3 -->
                            </div>
                        </div>
                        <!--/ Carousel -->
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
        <script type="text/javascript" src="/plugins/owl/js/owl.carousel.js"></script>
        <script type="text/javascript" src="/plugins/flot/js/jquery.flot.js"></script>
        <script type="text/javascript" src="/plugins/flot/js/jquery.flot.resize.js"></script>
        <script type="text/javascript" src="/plugins/flot/js/jquery.flot.categories.js"></script>
        <script type="text/javascript" src="/plugins/flot/js/jquery.flot.time.js"></script>
        <script type="text/javascript" src="/plugins/flot/js/jquery.flot.tooltip.js"></script>
        <script type="text/javascript" src="/plugins/flot/js/jquery.flot.spline.js"></script>
        <script type="text/javascript" src="/js/backend/components/widget.js"></script>
        <!--/ Plugins and page level script : optional -->
        <!--/ END JAVASCRIPT SECTION -->
    </body>
    <!--/ END Body -->
</html>