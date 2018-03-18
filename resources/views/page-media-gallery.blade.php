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
        <link rel="stylesheet" href="/plugins/magnific/css/magnific.css">
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
                        <h4 class="title semibold">Media gallery</h4>
                    </div>
                    <div class="page-header-section">
                        <!-- Toolbar -->
                        <div class="toolbar">
                            <span class="toolbar-label semibold mr5">Filters : </span>
                            <div class="btn-group" id="shuffle-filter">
                                <button class="btn btn-default" data-group="creative">Creative</button>
                                <button class="btn btn-default" data-group="business">Business</button>
                                <button class="btn btn-default" data-group="nature">Nature</button>
                            </div>
                        </div>
                        <!--/ Toolbar -->
                    </div>
                    <div class="page-header-section">
                        <!-- Toolbar -->
                        <div class="toolbar clearfix">
                            <div class="col-sm-6">
                                <span class="toolbar-label semibold mr5">Sort : </span>
                            </div>
                            <div class="col-sm-6">
                                <select class="form-control" id="shuffle-sort">
                                    <option value="">Default</option>
                                    <option value="title">Title</option>
                                    <option value="date-created">Date Created</option>
                                </select>
                            </div>
                        </div>
                        <!--/ Toolbar -->
                    </div>
                </div>
                <!-- Page Header -->

                <!-- START row -->
                <div class="row" id="shuffle-grid">
                    <div class="col-md-3 shuffle" data-groups='["nature"]' data-date-created="2014-01-02" data-title="background1">
                        <!-- thumbnail -->
                        <div class="thumbnail">
                            <!-- media -->
                            <div class="media">
                                <!-- indicator -->
                                <div class="indicator"><span class="spinner"></span></div>
                                <!--/ indicator -->
                                <!-- toolbar overlay -->
                                <div class="overlay">
                                    <div class="toolbar">
                                        <a href="/image/background/background1.jpg" class="btn btn-default magnific" title="view picture"><i class="ico-search"></i></a>
                                        <a href="#" class="btn btn-default" title="love this picture"><i class="ico-heart6"></i></a>
                                    </div>
                                </div>
                                <!--/ toolbar overlay -->
                                <!-- meta -->
                                <span class="meta bottom darken">
                                    <h5 class="nm semibold">
                                        background1.jpg <br/>
                                        <small><i class="ico-calendar2"></i> 2014-01-02</small>
                                    </h5>
                                </span>
                                <!--/ meta -->
                                <img data-toggle="unveil" src="/image/background/400x400/placeholder.jpg" data-src="/image/background/400x400/background1.jpg" alt="Photo" width="100%" />
                            </div>
                            <!--/ media -->
                        </div>
                        <!--/ thumbnail -->
                    </div>
                    <div class="col-md-3 shuffle" data-groups='["creative"]' data-date-created="2014-01-04" data-title="background2">
                        <!-- thumbnail -->
                        <div class="thumbnail">
                            <!-- media -->
                            <div class="media">
                                <!-- indicator -->
                                <div class="indicator"><span class="spinner"></span></div>
                                <!--/ indicator -->
                                <!-- toolbar overlay -->
                                <div class="overlay">
                                    <div class="toolbar">
                                        <a href="/image/background/background2.jpg" class="btn btn-default magnific" title="view picture"><i class="ico-search"></i></a>
                                        <a href="#" class="btn btn-default" title="love this picture"><i class="ico-heart6"></i></a>
                                    </div>
                                </div>
                                <!--/ toolbar overlay -->
                                <!-- meta -->
                                <span class="meta bottom darken">
                                    <h5 class="nm semibold">
                                        background2.jpg <br/>
                                        <small><i class="ico-calendar2"></i> 2014-01-04</small>
                                    </h5>
                                </span>
                                <!--/ meta -->
                                <img data-toggle="unveil" src="/image/background/400x400/placeholder.jpg" data-src="/image/background/400x400/background2.jpg" alt="Photo" width="100%" />
                            </div>
                            <!--/ media -->
                        </div>
                        <!--/ thumbnail -->
                    </div>
                    <div class="col-md-3 shuffle" data-groups='["nature"]' data-date-created="2014-02-06" data-title="background3">
                        <!-- thumbnail -->
                        <div class="thumbnail">
                            <!-- media -->
                            <div class="media">
                                <!-- indicator -->
                                <div class="indicator"><span class="spinner"></span></div>
                                <!--/ indicator -->
                                <!-- toolbar overlay -->
                                <div class="overlay">
                                    <div class="toolbar">
                                        <a href="/image/background/background3.jpg" class="btn btn-default magnific" title="view picture"><i class="ico-search"></i></a>
                                        <a href="#" class="btn btn-default" title="love this picture"><i class="ico-heart6"></i></a>
                                    </div>
                                </div>
                                <!--/ toolbar overlay -->
                                <!-- meta -->
                                <span class="meta bottom darken">
                                    <h5 class="nm semibold">
                                        background3.jpg <br/>
                                        <small><i class="ico-calendar2"></i> 2014-02-06</small>
                                    </h5>
                                </span>
                                <!--/ meta -->
                                <img data-toggle="unveil" src="/image/background/400x400/placeholder.jpg" data-src="/image/background/400x400/background3.jpg" alt="Photo" width="100%" />
                            </div>
                            <!--/ media -->
                        </div>
                        <!--/ thumbnail -->
                    </div>
                    <div class="col-md-3 shuffle" data-groups='["nature", "creative"]' data-date-created="2014-01-20" data-title="background4">
                        <!-- thumbnail -->
                        <div class="thumbnail">
                            <!-- media -->
                            <div class="media">
                                <!-- indicator -->
                                <div class="indicator"><span class="spinner"></span></div>
                                <!--/ indicator -->
                                <!-- toolbar overlay -->
                                <div class="overlay">
                                    <div class="toolbar">
                                        <a href="/image/background/background4.jpg" class="btn btn-default magnific" title="view picture"><i class="ico-search"></i></a>
                                        <a href="#" class="btn btn-default" title="love this picture"><i class="ico-heart6"></i></a>
                                    </div>
                                </div>
                                <!--/ toolbar overlay -->
                                <!-- meta -->
                                <span class="meta bottom darken">
                                    <h5 class="nm semibold">
                                        background4.jpg <br/>
                                        <small><i class="ico-calendar2"></i> 2014-01-20</small>
                                    </h5>
                                </span>
                                <!--/ meta -->
                                <img data-toggle="unveil" src="/image/background/400x400/placeholder.jpg" data-src="/image/background/400x400/background4.jpg" alt="Photo" width="100%" />
                            </div>
                            <!--/ media -->
                        </div>
                        <!--/ thumbnail -->
                    </div>
                    <div class="col-md-3 shuffle" data-groups='["nature"]' data-date-created="2014-02-01" data-title="background5">
                        <!-- thumbnail -->
                        <div class="thumbnail">
                            <!-- media -->
                            <div class="media">
                                <!-- indicator -->
                                <div class="indicator"><span class="spinner"></span></div>
                                <!--/ indicator -->
                                <!-- toolbar overlay -->
                                <div class="overlay">
                                    <div class="toolbar">
                                        <a href="/image/background/background5.jpg" class="btn btn-default magnific" title="view picture"><i class="ico-search"></i></a>
                                        <a href="#" class="btn btn-default" title="love this picture"><i class="ico-heart6"></i></a>
                                    </div>
                                </div>
                                <!--/ toolbar overlay -->
                                <!-- meta -->
                                <span class="meta bottom darken">
                                    <h5 class="nm semibold">
                                        background5.jpg <br/>
                                        <small><i class="ico-calendar2"></i> 2014-02-01</small>
                                    </h5>
                                </span>
                                <!--/ meta -->
                                <img data-toggle="unveil" src="/image/background/400x400/placeholder.jpg" data-src="/image/background/400x400/background5.jpg" alt="Photo" width="100%" />
                            </div>
                            <!--/ media -->
                        </div>
                        <!--/ thumbnail -->
                    </div>
                    <div class="col-md-3 shuffle" data-groups='["creative"]' data-date-created="2014-02-01" data-title="background6">
                        <!-- thumbnail -->
                        <div class="thumbnail">
                            <!-- media -->
                            <div class="media">
                                <!-- indicator -->
                                <div class="indicator"><span class="spinner"></span></div>
                                <!--/ indicator -->
                                <!-- toolbar overlay -->
                                <div class="overlay">
                                    <div class="toolbar">
                                        <a href="/image/background/background6.jpg" class="btn btn-default magnific" title="view picture"><i class="ico-search"></i></a>
                                        <a href="#" class="btn btn-default" title="love this picture"><i class="ico-heart6"></i></a>
                                    </div>
                                </div>
                                <!--/ toolbar overlay -->
                                <!-- meta -->
                                <span class="meta bottom darken">
                                    <h5 class="nm semibold">
                                        background6.jpg <br/>
                                        <small><i class="ico-calendar2"></i> 2014-02-01</small>
                                    </h5>
                                </span>
                                <!--/ meta -->
                                <img data-toggle="unveil" src="/image/background/400x400/placeholder.jpg" data-src="/image/background/400x400/background6.jpg" alt="Photo" width="100%" />
                            </div>
                            <!--/ media -->
                        </div>
                        <!--/ thumbnail -->
                    </div>
                    <div class="col-md-3 shuffle" data-groups='["business", "creative"]' data-date-created="2014-02-08" data-title="background7">
                        <!-- thumbnail -->
                        <div class="thumbnail">
                            <!-- media -->
                            <div class="media">
                                <!-- indicator -->
                                <div class="indicator"><span class="spinner"></span></div>
                                <!--/ indicator -->
                                <!-- toolbar overlay -->
                                <div class="overlay">
                                    <div class="toolbar">
                                        <a href="/image/background/background7.jpg" class="btn btn-default magnific" title="view picture"><i class="ico-search"></i></a>
                                        <a href="#" class="btn btn-default" title="love this picture"><i class="ico-heart6"></i></a>
                                    </div>
                                </div>
                                <!--/ toolbar overlay -->
                                <!-- meta -->
                                <span class="meta bottom darken">
                                    <h5 class="nm semibold">
                                        background7.jpg <br/>
                                        <small><i class="ico-calendar2"></i> 2014-02-08</small>
                                    </h5>
                                </span>
                                <!--/ meta -->
                                <img data-toggle="unveil" src="/image/background/400x400/placeholder.jpg" data-src="/image/background/400x400/background7.jpg" alt="Photo" width="100%" />
                            </div>
                            <!--/ media -->
                        </div>
                        <!--/ thumbnail -->
                    </div>
                    <div class="col-md-3 shuffle" data-groups='["nature", "creative"]' data-date-created="2014-01-21" data-title="background8">
                        <!-- thumbnail -->
                        <div class="thumbnail">
                            <!-- media -->
                            <div class="media">
                                <!-- indicator -->
                                <div class="indicator"><span class="spinner"></span></div>
                                <!--/ indicator -->
                                <!-- toolbar overlay -->
                                <div class="overlay">
                                    <div class="toolbar">
                                        <a href="/image/background/background8.jpg" class="btn btn-default magnific" title="view picture"><i class="ico-search"></i></a>
                                        <a href="#" class="btn btn-default" title="love this picture"><i class="ico-heart6"></i></a>
                                    </div>
                                </div>
                                <!--/ toolbar overlay -->
                                <!-- meta -->
                                <span class="meta bottom darken">
                                    <h5 class="nm semibold">
                                        background8.jpg <br/>
                                        <small><i class="ico-calendar2"></i> 2014-01-21</small>
                                    </h5>
                                </span>
                                <!--/ meta -->
                                <img data-toggle="unveil" src="/image/background/400x400/placeholder.jpg" data-src="/image/background/400x400/background8.jpg" alt="Photo" width="100%"/>
                            </div>
                            <!--/ media -->
                        </div>
                        <!--/ thumbnail -->
                    </div>
                    <div class="col-md-3 shuffle" data-groups='["business"]' data-date-created="2014-01-01" data-title="background9">
                        <!-- thumbnail -->
                        <div class="thumbnail">
                            <!-- media -->
                            <div class="media">
                                <!-- indicator -->
                                <div class="indicator"><span class="spinner"></span></div>
                                <!--/ indicator -->
                                <!-- toolbar overlay -->
                                <div class="overlay">
                                    <div class="toolbar">
                                        <a href="/image/background/background9.jpg" class="btn btn-default magnific" title="view picture"><i class="ico-search"></i></a>
                                        <a href="#" class="btn btn-default" title="love this picture"><i class="ico-heart6"></i></a>
                                    </div>
                                </div>
                                <!--/ toolbar overlay -->
                                <!-- meta -->
                                <span class="meta bottom darken">
                                    <h5 class="nm semibold">
                                        background9.jpg <br/>
                                        <small><i class="ico-calendar2"></i> 2014-01-01</small>
                                    </h5>
                                </span>
                                <!--/ meta -->
                                <img data-toggle="unveil" src="/image/background/400x400/placeholder.jpg" data-src="/image/background/400x400/background9.jpg" alt="Photo" width="100%" />
                            </div>
                            <!--/ media -->
                        </div>
                        <!--/ thumbnail -->
                    </div>
                    <div class="col-md-3 shuffle" data-groups='["business", "creative"]' data-date-created="2014-02-01" data-title="background10">
                        <!-- thumbnail -->
                        <div class="thumbnail">
                            <!-- media -->
                            <div class="media">
                                <!-- indicator -->
                                <div class="indicator"><span class="spinner"></span></div>
                                <!--/ indicator -->
                                <!-- toolbar overlay -->
                                <div class="overlay">
                                    <div class="toolbar">
                                        <a href="/image/background/background10.jpg" class="btn btn-default magnific" title="view picture"><i class="ico-search"></i></a>
                                        <a href="#" class="btn btn-default" title="love this picture"><i class="ico-heart6"></i></a>
                                    </div>
                                </div>
                                <!--/ toolbar overlay -->
                                <!-- meta -->
                                <span class="meta bottom darken">
                                    <h5 class="nm semibold">
                                        background10.jpg <br/>
                                        <small><i class="ico-calendar2"></i> 2014-02-01</small>
                                    </h5>
                                </span>
                                <!--/ meta -->
                                <img data-toggle="unveil" src="/image/background/400x400/placeholder.jpg" data-src="/image/background/400x400/background10.jpg" alt="Photo" width="100%" />
                            </div>
                            <!--/ media -->
                        </div>
                        <!--/ thumbnail -->
                    </div>
                    <div class="col-md-3 shuffle" data-groups='["nature"]' data-date-created="2014-03-11" data-title="background11">
                        <!-- thumbnail -->
                        <div class="thumbnail">
                            <!-- media -->
                            <div class="media">
                                <!-- indicator -->
                                <div class="indicator"><span class="spinner"></span></div>
                                <!--/ indicator -->
                                <!-- toolbar overlay -->
                                <div class="overlay">
                                    <div class="toolbar">
                                        <a href="/image/background/background11.jpg" class="btn btn-default magnific" title="view picture"><i class="ico-search"></i></a>
                                        <a href="#" class="btn btn-default" title="love this picture"><i class="ico-heart6"></i></a>
                                    </div>
                                </div>
                                <!--/ toolbar overlay -->
                                <!-- meta -->
                                <span class="meta bottom darken">
                                    <h5 class="nm semibold">
                                        background11.jpg <br/>
                                        <small><i class="ico-calendar4"></i> 2014-03-11</small>
                                    </h5>
                                </span>
                                <!--/ meta -->
                                <img data-toggle="unveil" src="/image/background/400x400/placeholder.jpg" data-src="/image/background/400x400/background11.jpg" alt="Photo" width="100%" />
                            </div>
                            <!--/ media -->
                        </div>
                        <!--/ thumbnail -->
                    </div>
                    <div class="col-md-3 shuffle" data-groups='["nature", "creative"]' data-date-created="2014-02-11" data-title="background12">
                        <!-- thumbnail -->
                        <div class="thumbnail">
                            <!-- media -->
                            <div class="media">
                                <!-- indicator -->
                                <div class="indicator"><span class="spinner"></span></div>
                                <!--/ indicator -->
                                <!-- toolbar overlay -->
                                <div class="overlay">
                                    <div class="toolbar">
                                        <a href="/image/background/background12.jpg" class="btn btn-default magnific" title="view picture"><i class="ico-search"></i></a>
                                        <a href="#" class="btn btn-default" title="love this picture"><i class="ico-heart6"></i></a>
                                    </div>
                                </div>
                                <!--/ toolbar overlay -->
                                <!-- meta -->
                                <span class="meta bottom darken">
                                    <h5 class="nm semibold">
                                        background11.jpg <br/>
                                        <small><i class="ico-calendar4"></i> 2014-02-11</small>
                                    </h5>
                                </span>
                                <!--/ meta -->
                                <img data-toggle="unveil" src="/image/background/400x400/placeholder.jpg" data-src="/image/background/400x400/background12.jpg" alt="Photo" width="100%" />
                            </div>
                            <!--/ media -->
                        </div>
                        <!--/ thumbnail -->
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
        <script type="text/javascript" src="/plugins/magnific/js/jquery.magnific-popup.js"></script>
        <script type="text/javascript" src="/plugins/shuffle/js/jquery.shuffle.js"></script>
        <script type="text/javascript" src="/js/backend/pages/media-gallery.js"></script>
        <!--/ Plugins and page level script : optional -->
        <!--/ END JAVASCRIPT SECTION -->
    </body>
    <!--/ END Body -->
</html>