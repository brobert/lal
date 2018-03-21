<!DOCTYPE html>
<html class="backend">
    <!-- START Head -->
    <head>
        <!-- START META SECTION -->
		@include('partials.head_meta')
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
                        <h4 class="title semibold">Grid</h4>
                    </div>
                    <div class="page-header-section">
                        <!-- Toolbar -->
                        <div class="toolbar">
                            <ol class="breadcrumb breadcrumb-transparent nm">
                                <li><a href="javascript:void(0);">UI Elements</a></li>
                                <li class="active">Grid</li>
                            </ol>
                        </div>
                        <!--/ Toolbar -->
                    </div>
                </div>
                <!-- Page Header -->

                <!-- START row -->
                <div class="row">
                    <div class="col-md-2">
                        <div class="panel">
                            <div class="panel-body"><code>.col-md-2</code></div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="panel">
                            <div class="panel-body"><code>.col-md-2</code></div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="panel">
                            <div class="panel-body"><code>.col-md-2</code></div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="panel">
                            <div class="panel-body"><code>.col-md-2</code></div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="panel">
                            <div class="panel-body"><code>.col-md-2</code></div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="panel">
                            <div class="panel-body"><code>.col-md-2</code></div>
                        </div>
                    </div>
                </div>
                <!--/ END row -->

                <!-- START row -->
                <div class="row">
                    <div class="col-md-3">
                        <div class="panel">
                            <div class="panel-body"><code>.col-md-3</code></div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="panel">
                            <div class="panel-body"><code>.col-md-3</code></div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="panel">
                            <div class="panel-body"><code>.col-md-3</code></div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="panel">
                            <div class="panel-body"><code>.col-md-3</code></div>
                        </div>
                    </div>
                </div>
                <!--/ END row -->

                <!-- START row -->
                <div class="row">
                    <div class="col-md-4">
                        <div class="panel">
                            <div class="panel-body"><code>.col-md-4</code></div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="panel">
                            <div class="panel-body"><code>.col-md-4</code></div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="panel">
                            <div class="panel-body"><code>.col-md-4</code></div>
                        </div>
                    </div>
                </div>
                <!--/ END row -->

                <!-- START row -->
                <div class="row">
                    <div class="col-md-6">
                        <div class="panel">
                            <div class="panel-body"><code>.col-md-6</code></div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="panel">
                            <div class="panel-body"><code>.col-md-6</code></div>
                        </div>
                    </div>
                </div>
                <!--/ END row -->

                <!-- START row -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel">
                            <div class="panel-body"><code>.col-md-12</code></div>
                        </div>
                    </div>
                </div>
                <!--/ END row -->

                <!-- section title -->
                <div class="row">
                    <div class="col-md-12">
                        <h5 class="semibold mb5">Mobile and desktop</h5>
                        <p>Don't want your columns to simply stack in smaller devices? Use the extra small and medium device grid classes by adding <code>.col-xs-*</code> <code>.col-md-*</code> to your columns. See the example below for a better idea of how it all works.</p>
                    </div>
                </div>
                <!--/ section title -->
                <!-- START row -->
                <div class="row">
                    <div class="col-xs-12 col-md-8">
                        <div class="panel">
                            <div class="panel-body"><code>.col-xs-12.col-md-8</code></div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-4">
                        <div class="panel">
                            <div class="panel-body"><code>.col-xs-12.col-md-8</code></div>
                        </div>
                    </div>
                </div>
                <!--/ END row -->

                <!-- START row -->
                <div class="row">
                    <div class="col-xs-6 col-md-4">
                        <div class="panel">
                            <div class="panel-body"><code>.col-xs-6.col-md-4</code></div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-4">
                        <div class="panel">
                            <div class="panel-body"><code>.col-xs-6.col-md-4</code></div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-4">
                        <div class="panel">
                            <div class="panel-body"><code>.col-xs-6.col-md-4</code></div>
                        </div>
                    </div>
                </div>
                <!--/ END row -->

                <!-- START row -->
                <div class="row">
                    <div class="col-xs-6">
                        <div class="panel">
                            <div class="panel-body"><code>.col-xs-6</code></div>
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <div class="panel">
                            <div class="panel-body"><code>.col-xs-6</code></div>
                        </div>
                    </div>
                </div>
                <!--/ END row -->

                <!-- section title -->
                <!-- section title -->
                <div class="row">
                    <div class="col-md-12">
                        <h5 class="semibold mb5">Offsetting columns</h5>
                        <p>Move columns to the right using <code>.col-md-offset-*</code> classes. These classes increase the left margin of a column by <code>*</code> columns. For example, <code>.col-md-offset-4</code> moves <code>.col-md-4</code> over four columns.</p>
                    </div>
                </div>
                <!--/ section title -->
                <!-- START row -->
                <div class="row">
                    <div class="col-md-4">
                        <div class="panel">
                            <div class="panel-body"><code>.col-md-4</code></div>
                        </div>
                    </div>
                    <div class="col-md-4 col-md-offset-4">
                        <div class="panel">
                            <div class="panel-body"><code>.col-md-4.col-md-offset-4</code></div>
                        </div>
                    </div>
                </div>
                <!--/ END row -->

                <!-- START row -->
                <div class="row">
                    <div class="col-md-3 col-md-offset-3">
                        <div class="panel">
                            <div class="panel-body"><code>.col-md-3.col-md-offset-3</code></div>
                        </div>
                    </div>
                    <div class="col-md-3 col-md-offset-3">
                        <div class="panel">
                            <div class="panel-body"><code>.col-md-3.col-md-offset-3</code></div>
                        </div>
                    </div>
                </div>
                <!--/ END row -->

                <!-- START row -->
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <div class="panel">
                            <div class="panel-body"><code>.col-md-6.col-md-offset-3</code></div>
                        </div>
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