<!DOCTYPE html>
<html class="backend">
    <!-- START Head -->
    <head>
        <!-- START META SECTION -->
		@include('partials.head_meta')
		<!--/ END META SECTION -->

        <!-- START STYLESHEETS -->
        <!-- Plugins stylesheet : optional -->
        <link rel="stylesheet" href="/plugins/selectize/css/selectize.css">
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
                        <h4 class="title semibold"><span class="figure"><i class="ico-home2"></i></span> Dashboards</h4>
                    </div>
                </div>
                <!-- Page Header -->

                <div class="row">
                    <!-- START Left Side -->
                    <div class="col-md-9">

                        <!-- Website States -->
                        <div class="row">
                            <div class="col-sm-12">
                                <!-- START panel -->
                                <div class="panel ">
                                    <!-- panel-toolbar -->
                                    <div class="panel-heading pt10">
                                        <div class="panel-toolbar">
                                            <h5 class="semibold nm ellipsis">
                                                Website Stats
                                            </h5>
                                        </div>
                                    </div>
                                    <!--/ panel-toolbar -->
                                    <!-- panel-body -->
                                    <div class="panel-body pt0">
                                        <div class="chart mt10" id="chart-audience" style="height:250px;"></div>
                                    </div>
                                    <!--/ panel-body -->
                                    <!-- panel-footer -->
                                    <div class="panel-footer hidden-xs">
                                        <ul class="nav nav-section nav-justified">
                                                @each('dashboard.chartStats', $stats, 'data')
                                        </ul>
                                    </div>
                                    <!--/ panel-footer -->
                                </div>
                                <!--/ END panel -->
                            </div>
                        </div>
                        <!--/ Website States -->

                        <!-- Browser Breakpoint -->
                        <div class="row">
                            <div class="col-lg-12">
                                <!-- START panel -->
                                <div class="panel panel-default">
                                    <!-- panel heading/header -->
                                    <div class="panel-heading">
                                        <h3 class="panel-title ellipsis"><i class="ico-chrome mr5"></i>Browser Breakpoint</h3>
                                        <!-- panel toolbar -->
                                        <div class="panel-toolbar text-right">
                                            <!-- option -->
                                            <div class="option">
                                                <button class="btn up" data-toggle="panelcollapse"><i class="arrow"></i></button>
                                                <button class="btn" data-toggle="panelremove" data-parent=".col-md-12"><i class="remove"></i></button>
                                            </div>
                                            <!--/ option -->
                                        </div>
                                        <!--/ panel toolbar -->
                                    </div>
                                    <!--/ panel heading/header -->
                                    <!-- panel body with collapse capabale -->
                                    <div class="table-responsive panel-collapse pull out">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>Browser Name</th>
                                                    <th>Rendering Engine</th>
                                                    <th>Platform</th>
                                                    <th>Activity</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><span class="semibold text-accent">Google Chrome</span></td>
                                                    <td>Webkit</td>
                                                    <td>Win 2k+ / OSX.3+</td>
                                                    <td>
                                                        <span class="sparklines" sparkType="bar" sparkBarColor="#ed5466">2,4,1,5,3</span>
                                                        <span class="text-muted mr5 ml5">•</span>
                                                        <span class="semibold text-muted">50.65%</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><span class="semibold text-accent">Safari</span></td>
                                                    <td>Webkit</td>
                                                    <td>Win 2k+ / OSX.3+</td>
                                                    <td>
                                                        <span class="sparklines" sparkType="bar" sparkBarColor="#ed5466">5,2,1,3,4</span>
                                                        <span class="text-muted mr5 ml5">•</span>
                                                        <span class="semibold text-muted">20.31%</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><span class="semibold text-accent">Mozilla Firefox</span></td>
                                                    <td>Webkit</td>
                                                    <td>Win 2k+ / OSX.3+</td>
                                                    <td>
                                                        <span class="sparklines" sparkType="bar" sparkBarColor="#ed5466">2,1,5,3,4</span>
                                                        <span class="text-muted mr5 ml5">•</span>
                                                        <span class="semibold text-muted">61.22%</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><span class="semibold text-accent">Internet Explorer</span></td>
                                                    <td>Trident</td>
                                                    <td>Win 2k+ / OSX.3+</td>
                                                    <td>
                                                        <span class="sparklines" sparkType="bar" sparkBarColor="#ed5466">3,1,4,5,2</span>
                                                        <span class="text-muted mr5 ml5">•</span>
                                                        <span class="semibold text-muted">0.65%</span>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!--/ panel body with collapse capabale -->
                                </div>
                                <!--/ END panel -->
                            </div>
                        </div>
                        <!-- Browser Breakpoint -->
                    </div>
                    <!--/ END Left Side -->

                    <!-- START Right Side -->
                    <div class="col-md-3">
                        <div class="panel panel-minimal">
                            @include('dashboard.income', ['data' => $income])
                            @include('dashboard.weather')
                            @include('dashboard.traffic')
                        </div>
                    </div>
                    <!--/ END Right Side -->
                </div>
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
        <script type="text/javascript" src="/plugins/selectize/js/selectize.js"></script>
        <script type="text/javascript" src="/plugins/flot/js/jquery.flot.js"></script>
        <script type="text/javascript" src="/plugins/flot/js/jquery.flot.resize.js"></script>
        <script type="text/javascript" src="/plugins/flot/js/jquery.flot.categories.js"></script>
        <script type="text/javascript" src="/plugins/flot/js/jquery.flot.time.js"></script>
        <script type="text/javascript" src="/plugins/flot/js/jquery.flot.tooltip.js"></script>
        <script type="text/javascript" src="/plugins/flot/js/jquery.flot.spline.js"></script>
        <script type="text/javascript" src="/js/backend/pages/dashboard-v1.js"></script>
        <script type="text/javascript" src="/js/backend/components/widget.js"></script>
        <!--/ Plugins and page level script : optional -->
        <!--/ END JAVASCRIPT SECTION -->
    </body>
    <!--/ END Body -->
</html>