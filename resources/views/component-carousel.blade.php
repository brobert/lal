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
                        <h4 class="title semibold">Carousel</h4>
                    </div>
                    <div class="page-header-section">
                        <!-- Toolbar -->
                        <div class="toolbar">
                            <ol class="breadcrumb breadcrumb-transparent nm">
                                <li><a href="javascript:void(0);">UI Elements</a></li>
                                <li class="active">Carousel</li>
                            </ol>
                        </div>
                        <!--/ Toolbar -->
                    </div>
                </div>
                <!-- Page Header -->

                <!-- START Row -->
                <div class="row">
                    <div class="col-sm-3">
                        <h5 class="semibold mt0 mb5">Auto play</h5>
                        <p class="nm text-default">Change to any integrer for example <code>autoPlay : 5000</code> to play every 5 seconds. If you set <code>autoPlay: true</code> default speed will be 5 seconds.</p>
                    </div>
                    <div class="col-sm-9">
                        <!-- example 2 -->
                        <div class="owl-carousel" id="auto-play">
                            <!-- thumbnail #1 -->
                            <div class="item thumbnail">
                                <!-- media -->
                                <div class="media">
                                    <!-- toolbar overlay -->
                                    <div class="overlay">
                                        <div class="toolbar">
                                            <a href="#" class="btn btn-danger" title="love this picture"><i class="ico-heart6"></i></a>
                                        </div>
                                    </div>
                                    <!--/ toolbar overlay -->
                                    <!-- meta -->
                                    <span class="meta bottom darken">
                                        <h5 class="nm semibold">background1.jpg</h5>
                                    </span>
                                    <!--/ meta -->
                                    <img src="/image/background/400x400/background1.jpg" alt="Photo" width="100%" />
                                </div>
                                <!--/ media -->
                            </div>
                            <!--/ thumbnail #1 -->

                            <!-- thumbnail #2 -->
                            <div class="item thumbnail">
                                <!-- media -->
                                <div class="media">
                                    <!-- toolbar overlay -->
                                    <div class="overlay">
                                        <div class="toolbar">
                                            <a href="#" class="btn btn-danger" title="love this picture"><i class="ico-heart6"></i></a>
                                        </div>
                                    </div>
                                    <!--/ toolbar overlay -->
                                    <!-- meta -->
                                    <span class="meta bottom darken">
                                        <h5 class="nm semibold">background2.jpg</h5>
                                    </span>
                                    <!--/ meta -->
                                    <img src="/image/background/400x400/background2.jpg" alt="Photo" width="100%" />
                                </div>
                                <!--/ media -->
                            </div>
                            <!--/ thumbnail #2 -->

                            <!-- thumbnail #3 -->
                            <div class="item thumbnail">
                                <!-- media -->
                                <div class="media">
                                    <!-- toolbar overlay -->
                                    <div class="overlay">
                                        <div class="toolbar">
                                            <a href="#" class="btn btn-danger" title="love this picture"><i class="ico-heart6"></i></a>
                                        </div>
                                    </div>
                                    <!--/ toolbar overlay -->
                                    <!-- meta -->
                                    <span class="meta bottom darken">
                                        <h5 class="nm semibold">background3.jpg</h5>
                                    </span>
                                    <!--/ meta -->
                                    <img src="/image/background/400x400/background3.jpg" alt="Photo" width="100%" />
                                </div>
                                <!--/ media -->
                            </div>
                            <!--/ thumbnail #3 -->

                            <!-- thumbnail #4 -->
                            <div class="item thumbnail">
                                <!-- media -->
                                <div class="media">
                                    <!-- toolbar overlay -->
                                    <div class="overlay">
                                        <div class="toolbar">
                                            <a href="#" class="btn btn-danger" title="love this picture"><i class="ico-heart6"></i></a>
                                        </div>
                                    </div>
                                    <!--/ toolbar overlay -->
                                    <!-- meta -->
                                    <span class="meta bottom darken">
                                        <h5 class="nm semibold">background4.jpg</h5>
                                    </span>
                                    <!--/ meta -->
                                    <img src="/image/background/400x400/background4.jpg" alt="Photo" width="100%" />
                                </div>
                                <!--/ media -->
                            </div>
                            <!--/ thumbnail #4 -->

                            <!-- thumbnail #5 -->
                            <div class="item thumbnail">
                                <!-- media -->
                                <div class="media">
                                    <!-- toolbar overlay -->
                                    <div class="overlay">
                                        <div class="toolbar">
                                            <a href="#" class="btn btn-danger" title="love this picture"><i class="ico-heart6"></i></a>
                                        </div>
                                    </div>
                                    <!--/ toolbar overlay -->
                                    <!-- meta -->
                                    <span class="meta bottom darken">
                                        <h5 class="nm semibold">background5.jpg</h5>
                                    </span>
                                    <!--/ meta -->
                                    <img src="/image/background/400x400/background5.jpg" alt="Photo" width="100%" />
                                </div>
                                <!--/ media -->
                            </div>
                            <!--/ thumbnail #5 -->

                            <!-- thumbnail #6 -->
                            <div class="item thumbnail">
                                <!-- media -->
                                <div class="media">
                                    <!-- toolbar overlay -->
                                    <div class="overlay">
                                        <div class="toolbar">
                                            <a href="#" class="btn btn-danger" title="love this picture"><i class="ico-heart6"></i></a>
                                        </div>
                                    </div>
                                    <!--/ toolbar overlay -->
                                    <!-- meta -->
                                    <span class="meta bottom darken">
                                        <h5 class="nm semibold">background6.jpg</h5>
                                    </span>
                                    <!--/ meta -->
                                    <img src="/image/background/400x400/background6.jpg" alt="Photo" width="100%" />
                                </div>
                                <!--/ media -->
                            </div>
                            <!--/ thumbnail #6 -->

                            <!-- thumbnail #7 -->
                            <div class="item thumbnail">
                                <!-- media -->
                                <div class="media">
                                    <!-- toolbar overlay -->
                                    <div class="overlay">
                                        <div class="toolbar">
                                            <a href="#" class="btn btn-danger" title="love this picture"><i class="ico-heart6"></i></a>
                                        </div>
                                    </div>
                                    <!--/ toolbar overlay -->
                                    <!-- meta -->
                                    <span class="meta bottom darken">
                                        <h5 class="nm semibold">background7.jpg</h5>
                                    </span>
                                    <!--/ meta -->
                                    <img src="/image/background/400x400/background7.jpg" alt="Photo" width="100%" />
                                </div>
                                <!--/ media -->
                            </div>
                            <!--/ thumbnail #7 -->
                        </div>
                        <!--/ example 2 -->
                    </div>
                </div>
                <!--/ END Row -->

                <hr><!-- horizontal line -->

                <!-- START Row -->
                <div class="row">
                    <div class="col-sm-3">
                        <h5 class="semibold mt0 mb5">Lazy load</h5>
                        <p class="nm text-default">Delays loading of ../images. ../images outside of viewport wont be loaded before user scrolls to them. Great for mobile devices to speed up page loadings.</p>
                    </div>
                    <div class="col-sm-9">
                        <!-- example 3 -->
                        <div class="owl-carousel" id="lazy-load">
                            <!-- thumbnail #1 -->
                            <div class="item thumbnail">
                                <!-- media -->
                                <div class="media">
                                    <!-- toolbar overlay -->
                                    <div class="overlay">
                                        <div class="toolbar">
                                            <a href="#" class="btn btn-danger" title="love this picture"><i class="ico-heart6"></i></a>
                                        </div>
                                    </div>
                                    <!--/ toolbar overlay -->
                                    <!-- meta -->
                                    <span class="meta bottom darken">
                                        <h5 class="nm semibold">background1.jpg</h5>
                                    </span>
                                    <!--/ meta -->
                                    <img class="lazyOwl" data-src="/image/background/400x400/background1.jpg" alt="Photo" width="100%" />
                                </div>
                                <!--/ media -->
                            </div>
                            <!--/ thumbnail #1 -->

                            <!-- thumbnail #2 -->
                            <div class="item thumbnail">
                                <!-- media -->
                                <div class="media">
                                    <!-- toolbar overlay -->
                                    <div class="overlay">
                                        <div class="toolbar">
                                            <a href="#" class="btn btn-danger" title="love this picture"><i class="ico-heart6"></i></a>
                                        </div>
                                    </div>
                                    <!--/ toolbar overlay -->
                                    <!-- meta -->
                                    <span class="meta bottom darken">
                                        <h5 class="nm semibold">background2.jpg</h5>
                                    </span>
                                    <!--/ meta -->
                                    <img class="lazyOwl" data-src="/image/background/400x400/background2.jpg" alt="Photo" width="100%" />
                                </div>
                                <!--/ media -->
                            </div>
                            <!--/ thumbnail #2 -->

                            <!-- thumbnail #3 -->
                            <div class="item thumbnail">
                                <!-- media -->
                                <div class="media">
                                    <!-- toolbar overlay -->
                                    <div class="overlay">
                                        <div class="toolbar">
                                            <a href="#" class="btn btn-danger" title="love this picture"><i class="ico-heart6"></i></a>
                                        </div>
                                    </div>
                                    <!--/ toolbar overlay -->
                                    <!-- meta -->
                                    <span class="meta bottom darken">
                                        <h5 class="nm semibold">background3.jpg</h5>
                                    </span>
                                    <!--/ meta -->
                                    <img class="lazyOwl" data-src="/image/background/400x400/background3.jpg" alt="Photo" width="100%" />
                                </div>
                                <!--/ media -->
                            </div>
                            <!--/ thumbnail #3 -->

                            <!-- thumbnail #4 -->
                            <div class="item thumbnail">
                                <!-- media -->
                                <div class="media">
                                    <!-- toolbar overlay -->
                                    <div class="overlay">
                                        <div class="toolbar">
                                            <a href="#" class="btn btn-danger" title="love this picture"><i class="ico-heart6"></i></a>
                                        </div>
                                    </div>
                                    <!--/ toolbar overlay -->
                                    <!-- meta -->
                                    <span class="meta bottom darken">
                                        <h5 class="nm semibold">background4.jpg</h5>
                                    </span>
                                    <!--/ meta -->
                                    <img class="lazyOwl" data-src="/image/background/400x400/background4.jpg" alt="Photo" width="100%" />
                                </div>
                                <!--/ media -->
                            </div>
                            <!--/ thumbnail #4 -->

                            <!-- thumbnail #5 -->
                            <div class="item thumbnail">
                                <!-- media -->
                                <div class="media">
                                    <!-- toolbar overlay -->
                                    <div class="overlay">
                                        <div class="toolbar">
                                            <a href="#" class="btn btn-danger" title="love this picture"><i class="ico-heart6"></i></a>
                                        </div>
                                    </div>
                                    <!--/ toolbar overlay -->
                                    <!-- meta -->
                                    <span class="meta bottom darken">
                                        <h5 class="nm semibold">background5.jpg</h5>
                                    </span>
                                    <!--/ meta -->
                                    <img class="lazyOwl" data-src="/image/background/400x400/background5.jpg" alt="Photo" width="100%" />
                                </div>
                                <!--/ media -->
                            </div>
                            <!--/ thumbnail #5 -->

                            <!-- thumbnail #6 -->
                            <div class="item thumbnail">
                                <!-- media -->
                                <div class="media">
                                    <!-- toolbar overlay -->
                                    <div class="overlay">
                                        <div class="toolbar">
                                            <a href="#" class="btn btn-danger" title="love this picture"><i class="ico-heart6"></i></a>
                                        </div>
                                    </div>
                                    <!--/ toolbar overlay -->
                                    <!-- meta -->
                                    <span class="meta bottom darken">
                                        <h5 class="nm semibold">background6.jpg</h5>
                                    </span>
                                    <!--/ meta -->
                                    <img class="lazyOwl" data-src="/image/background/400x400/background6.jpg" alt="Photo" width="100%" />
                                </div>
                                <!--/ media -->
                            </div>
                            <!--/ thumbnail #6 -->

                            <!-- thumbnail #7 -->
                            <div class="item thumbnail">
                                <!-- media -->
                                <div class="media">
                                    <!-- toolbar overlay -->
                                    <div class="overlay">
                                        <div class="toolbar">
                                            <a href="#" class="btn btn-danger" title="love this picture"><i class="ico-heart6"></i></a>
                                        </div>
                                    </div>
                                    <!--/ toolbar overlay -->
                                    <!-- meta -->
                                    <span class="meta bottom darken">
                                        <h5 class="nm semibold">background7.jpg</h5>
                                    </span>
                                    <!--/ meta -->
                                    <img class="lazyOwl" data-src="/image/background/400x400/background7.jpg" alt="Photo" width="100%" />
                                </div>
                                <!--/ media -->
                            </div>
                            <!--/ thumbnail #7 -->
                        </div>
                        <!--/ example 3 -->
                    </div>
                </div>
                <!--/ END Row -->

                <hr><!-- horizontal line -->

                <!-- START Row -->
                <div class="row">
                    <div class="col-sm-3">
                        <h5 class="semibold mt0 mb5">One slide</h5>
                        <p class="nm text-default">Display one item per slide. Great for features showcase</p>
                    </div>
                    <div class="col-sm-9">
                        <!-- example 4 -->
                        <div class="panel nm no-border">
                            <div class="panel-body owl-carousel" id="one-slide">
                                <!-- slide #1 -->
                                <div class="item table-layout">
                                    <div class="col-sm-12">
                                        <h4>Affiliate Marketing</h4>
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
                                    <div class="col-sm-12">
                                        <h4>Cost Per Impression</h4>
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
                                    <div class="col-sm-12">
                                        <h4>Spider Tool</h4>
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
                        <!--/ example 4 -->
                    </div>
                </div>
                <!--/ END Row -->
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
        <script type="text/javascript" src="/js/backend/components/carousel.js"></script>
        <!--/ Plugins and page level script : optional -->
        <!--/ END JAVASCRIPT SECTION -->
    </body>
    <!--/ END Body -->
</html>