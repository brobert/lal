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
                        <h4 class="title semibold">Blog grid</h4>
                    </div>
                    <div class="page-header-section">
                        <!-- Toolbar -->
                        <div class="toolbar">
                            <ol class="breadcrumb breadcrumb-transparent nm">
                                <li><a href="#">Miscelleneous</a></li>
                                <li class="active">Blog grid</li>
                            </ol>
                        </div>
                        <!--/ Toolbar -->
                    </div>
                </div>
                <!-- Page Header -->

                <!-- START Row -->
                <div class="row">
                    <!-- START left / top side -->
                    <div class="col-lg-9">
                        <div class="row" id="shuffle-grid">
                            <!-- Blog post #1 -->
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 post">
                                <article class="panel overflow-hidden">
                                    <!-- Content -->
                                    <section class="panel-body">
                                        <!-- heading -->
                                        <h4 class="thin mt0 ellipsis"><a href="javascript:void(0);" class="text-default">Fusce mollis. Duis sit amet diam eu</a></h4>
                                        <!--/ heading -->

                                        <!-- text -->
                                        <div class="text-default">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                            consequat</p>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                            consequat&#8230;</p>
                                        </div>
                                        <!--/ text -->

                                        <!-- Meta & button -->
                                        <!-- meta -->
                                        <p class="meta mb15">
                                            <a href="javascript:void(0);">Feb 28, 2015</a><!-- date -->
                                            <span class="text-muted mr5 ml5">&#8226;</span>
                                            <span class="text-muted">In </span><a href="javascript:void(0);">Lifestyle</a><!-- category -->
                                            <span class="text-muted mr5 ml5">&#8226;</span>
                                            <span class="text-muted">By </span><a href="javascript:void(0);">Dexter Holmes</a><!-- author -->
                                        </p>
                                        <!--/ meta -->
                                        <a href="javascript:void(0);" class="btn btn-success">Read more&#8230;</a>
                                        <!-- Meta & button -->
                                    </section>
                                    <!--/ Content -->
                                </article>
                            </div>
                            <!--/ Blog post #1 -->

                            <!-- Blog post #2 -->
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 post">
                                <article class="panel overflow-hidden">
                                    <!-- Thumbnail -->
                                    <header class="thumbnail">
                                        <!-- media -->
                                        <div class="media">
                                            <!-- indicator -->
                                            <div class="indicator"><span class="spinner"></span></div>
                                            <!--/ indicator -->
                                            <!-- toolbar overlay -->
                                            <div class="overlay">
                                                <div class="toolbar">
                                                    <a href="javascript:void(0);" class="btn btn-danger"><i class="ico-heart6"></i></a>
                                                </div>
                                            </div>
                                            <!--/ toolbar overlay -->
                                            <img data-toggle="unveil" src="/image/background/blog/placeholder.jpg" data-src="/image/background/blog/blog1.jpg" alt="Photo" height="300px">
                                        </div>
                                        <!--/ media -->
                                    </header>
                                    <!--/ Thumbnail -->

                                    <!-- Content -->
                                    <section class="panel-body">
                                        <!-- heading -->
                                        <h4 class="thin mt0 ellipsis"><a href="javascript:void(0);" class="text-default">Vivamus non lorem vitae odio sagittis semper.</a></h4>
                                        <!--/ heading -->

                                        <!-- text -->
                                        <div class="text-default">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                            consequat&#8230;</p>
                                        </div>
                                        <!--/ text -->

                                        <!-- Meta & button -->
                                        <!-- meta -->
                                        <p class="meta mb15">
                                            <a href="javascript:void(0);">Oct 8, 2013</a><!-- date -->
                                            <span class="text-muted mr5 ml5">&#8226;</span>
                                            <span class="text-muted">In </span><a href="javascript:void(0);">Latest news</a><!-- category -->
                                            <span class="text-muted mr5 ml5">&#8226;</span>
                                            <span class="text-muted">By </span><a href="javascript:void(0);">Uriel Waters</a><!-- author -->
                                        </p>
                                        <!--/ meta -->
                                        <a href="javascript:void(0);" class="btn btn-success">Read more&#8230;</a>
                                        <!-- Meta & button -->
                                    </section>
                                    <!--/ Content -->
                                </article>
                            </div>
                            <!--/ Blog post #2 -->

                            <!-- Blog post #3 -->
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 post">
                                <article class="panel overflow-hidden">
                                    <!-- Owl Carousel -->
                                    <header id="carousel2" class="owl-carousel">
                                        <div class="image"><img src="/image/background/blog/blog2.jpg" height="260px"></div>
                                        <div class="image"><img src="/image/background/blog/blog3.jpg" height="260px"></div>
                                        <div class="image"><img src="/image/background/blog/blog4.jpg" height="260px"></div>
                                    </header>
                                    <!--/ Owl Carousel -->

                                    <!-- Content -->
                                    <section class="panel-body">
                                        <!-- heading -->
                                        <h4 class="thin mt0 ellipsis"><a href="javascript:void(0);" class="text-default">Donec vitae erat vel pede blandit congue.</a></h4>
                                        <!--/ heading -->

                                        <!-- text -->
                                        <div class="text-default">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                            consequat&#8230;</p>
                                        </div>
                                        <!--/ text -->

                                        <!-- Meta & button -->
                                        <!-- meta -->
                                        <p class="meta mb15">
                                            <a href="javascript:void(0);">Sep 21, 2014</a><!-- date -->
                                            <span class="text-muted mr5 ml5">&#8226;</span>
                                            <span class="text-muted">In </span><a href="javascript:void(0);">Technology</a><!-- category -->
                                            <span class="text-muted mr5 ml5">&#8226;</span>
                                            <span class="text-muted">By </span><a href="javascript:void(0);">Ima Mack</a><!-- author -->
                                        </p>
                                        <!--/ meta -->
                                        <a href="javascript:void(0);" class="btn btn-success">Read more&#8230;</a>
                                        <!-- Meta & button -->
                                    </section>
                                    <!--/ Content -->
                                </article>
                            </div>
                            <!--/ Blog post #3 -->

                            <!-- Blog post #4 -->
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 post">
                                <article class="panel overflow-hidden">
                                    <!-- Content -->
                                    <section class="panel-body">
                                        <!-- heading -->
                                        <h4 class="thin mt0 ellipsis"><a href="javascript:void(0);" class="text-default">Phasellus vitae mauris sit amet lorem semper auctor. Mauris</a></h4>
                                        <!--/ heading -->

                                        <!-- text -->
                                        <div class="text-default">
                                            <blockquote>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                                consequat.</p>
                                                <footer>Someone famous in <cite title="Source Title">Source Title</cite></footer>
                                            </blockquote>
                                        </div>
                                        <!--/ text -->

                                        <!-- Meta & button -->
                                        <!-- meta -->
                                        <p class="meta mb15">
                                            <a href="javascript:void(0);">Apr 25, 2014</a><!-- date -->
                                            <span class="text-muted mr5 ml5">&#8226;</span>
                                            <span class="text-muted">In </span><a href="javascript:void(0);">Latest news</a><!-- category -->
                                            <span class="text-muted mr5 ml5">&#8226;</span>
                                            <span class="text-muted">By </span><a href="javascript:void(0);">Quon Hayden</a><!-- author -->
                                        </p>
                                        <!--/ meta -->
                                        <a href="javascript:void(0);" class="btn btn-success">Read more&#8230;</a>
                                        <!-- Meta & button -->
                                    </section>
                                    <!--/ Content -->
                                </article>
                            </div>
                            <!--/ Blog post #4 -->

                            <!-- Blog post #5 -->
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 post">
                                <article class="panel overflow-hidden">
                                    <!-- Iframe container -->
                                    <div class="iframe-container">
                                        <iframe src="//player.vimeo.com/video/7449107" webkitallowfullscreen mozallowfullscreen allowfullscreen frameborder="0"></iframe>
                                    </div>
                                    <!--/ Iframe container -->

                                    <!-- Content -->
                                    <section class="panel-body">
                                        <!-- heading -->
                                        <h4 class="thin mt0 ellipsis"><a href="javascript:void(0);" class="text-default">Tempus eu, ligula. Aenean euismod mauris eu elit. Nulla facilisi.</a></h4>
                                        <!--/ heading -->

                                        <!-- text -->
                                        <div class="text-default">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                            consequat&#8230;</p>
                                        </div>
                                        <!--/ text -->

                                        <!-- Meta & button -->
                                        <!-- meta -->
                                        <p class="meta mb15">
                                            <a href="javascript:void(0);">Oct 23, 2014</a><!-- date -->
                                            <span class="text-muted mr5 ml5">&#8226;</span>
                                            <span class="text-muted">In </span><a href="javascript:void(0);">Latest news</a><!-- category -->
                                            <span class="text-muted mr5 ml5">&#8226;</span>
                                            <span class="text-muted">By </span><a href="javascript:void(0);">Mollie Beck</a><!-- author -->
                                        </p>
                                        <!--/ meta -->
                                        <a href="javascript:void(0);" class="btn btn-success">Read more&#8230;</a>
                                        <!-- Meta & button -->
                                    </section>
                                    <!--/ Content -->
                                </article>
                            </div>
                            <!--/ Blog post #5 -->

                            <!-- Blog post #6 -->
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 post">
                                <article class="panel overflow-hidden">
                                    <!-- Thumbnail -->
                                    <header class="thumbnail">
                                        <!-- media -->
                                        <div class="media">
                                            <!-- indicator -->
                                            <div class="indicator"><span class="spinner"></span></div>
                                            <!--/ indicator -->
                                            <!-- toolbar overlay -->
                                            <div class="overlay">
                                                <div class="toolbar">
                                                    <a href="javascript:void(0);" class="btn btn-danger"><i class="ico-heart6"></i></a>
                                                </div>
                                            </div>
                                            <!--/ toolbar overlay -->
                                            <img data-toggle="unveil" src="/image/background/blog/placeholder.jpg" data-src="/image/background/blog/blog5.jpg" alt="Photo" height="230px">
                                        </div>
                                        <!--/ media -->
                                    </header>
                                    <!--/ Thumbnail -->

                                    <!-- Content -->
                                    <section class="panel-body">
                                        <!-- heading -->
                                        <h4 class="thin mt0 ellipsis"><a href="javascript:void(0);" class="text-default">Vivamus nibh dolor, nonummy ac, feugiat non, lobortis quis, pede.</a></h4>
                                        <!--/ heading -->

                                        <!-- text -->
                                        <div class="text-default">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                            consequat&#8230;</p>
                                        </div>
                                        <!--/ text -->

                                        <!-- Meta & button -->
                                        <!-- meta -->
                                        <p class="meta mb15">
                                            <a href="javascript:void(0);">Jul 15, 2013</a><!-- date -->
                                            <span class="text-muted mr5 ml5">&#8226;</span>
                                            <span class="text-muted">In </span><a href="javascript:void(0);">Nature</a><!-- category -->
                                            <span class="text-muted mr5 ml5">&#8226;</span>
                                            <span class="text-muted">By </span><a href="javascript:void(0);">Glenna Espinoza</a><!-- author -->
                                        </p>
                                        <!--/ meta -->
                                        <a href="javascript:void(0);" class="btn btn-success">Read more&#8230;</a>
                                        <!-- Meta & button -->
                                    </section>
                                    <!--/ Content -->
                                </article>
                            </div>
                            <!--/ Blog post #6 -->
                        </div>

                        <hr><!-- horizontal line -->

                        <!-- pager -->
                        <div class="row">
                            <div class="col-lg-12">
                                <ul class="pager mt0">
                                    <li class="previous"><a href="javascript:void(0);"><i class="ico-angle-left mr5"></i> Older</a></li>
                                    <li class="next"><a href="javascript:void(0);">Newer <i class="ico-angle-right ml5"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <!--/ pager -->
                    </div>
                    <!--/ END left / top side -->

                    <!-- START right / bottom side -->
                    <div class="col-lg-3">
                        <!-- Search form -->
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search">
                                    <span class="input-group-btn">
                                        <button class="btn btn-default" type="button"><i class="ico-search"></i></button>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <!--/ Search form -->

                        <hr><!-- horizontal line -->

                        <!-- Categories -->
                        <div class="row">
                            <div class="col-xs-12">
                                <h5 class="semibold mt0 text-primary">Categories</h5>
                                <div class="list-group">
                                    <a href="#" class="list-group-item"><i class="ico-angle-right mr5"></i> Photo</a>
                                    <a href="#" class="list-group-item"><i class="ico-angle-right mr5"></i> Nature</a>
                                    <a href="#" class="list-group-item"><i class="ico-angle-right mr5"></i> Web Design</a>
                                    <a href="#" class="list-group-item"><i class="ico-angle-right mr5"></i> Lifestyle</a>
                                    <a href="#" class="list-group-item"><i class="ico-angle-right mr5"></i> Technology</a>
                                </div>
                            </div>
                        </div>
                        <!--/ Categories -->

                        <hr><!-- horizontal line -->

                        <!-- Tags -->
                        <div class="row">
                            <div class="col-xs-12">
                                <h5 class="semibold mt0 text-primary">Tags</h5>
                                <div class="btn-tag">
                                    <a href="javascript:void(0);" class="btn btn-default btn-sm">wordpress</a>
                                    <a href="javascript:void(0);" class="btn btn-default btn-sm">development</a>
                                    <a href="javascript:void(0);" class="btn btn-default btn-sm">bootstrap</a>
                                    <a href="javascript:void(0);" class="btn btn-default btn-sm">admin</a>
                                    <a href="javascript:void(0);" class="btn btn-default btn-sm">template</a>
                                    <a href="javascript:void(0);" class="btn btn-default btn-sm">flat</a>
                                    <a href="javascript:void(0);" class="btn btn-default btn-sm">clean</a>
                                    <a href="javascript:void(0);" class="btn btn-default btn-sm">awesome</a>
                                </div>
                            </div>
                        </div>
                        <!-- Tags -->

                        <hr><!-- horizontal line -->

                        <!-- Text widget -->
                        <div class="row">
                            <div class="col-xs-12">
                                <h5 class="semibold mt0 text-primary">Text widget</h5>
                                <p class="nm text-default">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                consequat.</p>
                            </div>
                        </div>
                        <!-- Text widget -->

                        <hr><!-- horizontal line -->

                        <!-- Tabbed content -->
                        <div class="row">
                            <div class="col-xs-12">
                                <h5 class="semibold mt0 text-primary">Tabbed content</h5>
                                <ul class="nav nav-tabs">
                                    <li class="active"><a href="#popular" data-toggle="tab">Popular</a></li>
                                    <li class=""><a href="#recent" data-toggle="tab">Recent</a></li>
                                </ul>
                                <div class="tab-content panel nm">
                                    <div class="tab-pane active pl0 pr0" id="popular">
                                        <!-- Media list -->
                                        <div class="media-list">
                                            <a href="javascript:void(0);" class="media border-dotted">
                                                <span class="pull-left">
                                                    <img src="/image/background/400x400/background1.jpg" class="media-object" alt="">
                                                </span>
                                                <span class="media-body">
                                                    <!-- meta icon -->
                                                    <span class="media-meta">Jan 13, 2014</span>
                                                    <!--/ meta icon -->
                                                    <span class="media-heading">Lorem ipsum dolor sit amet</span>
                                                </span>
                                            </a>
                                            <a href="javascript:void(0);" class="media border-dotted">
                                                <span class="pull-left">
                                                    <img src="/image/background/400x400/background2.jpg" class="media-object" alt="">
                                                </span>
                                                <span class="media-body">
                                                    <!-- meta icon -->
                                                    <span class="media-meta">Nov 27, 2014</span>
                                                    <!--/ meta icon -->
                                                    <span class="media-heading">Mauris eu turpis. Nulla aliquet.</span>
                                                </span>
                                            </a>
                                            <a href="javascript:void(0);" class="media border-dotted">
                                                <span class="pull-left">
                                                    <img src="/image/background/400x400/background3.jpg" class="media-object" alt="">
                                                </span>
                                                <span class="media-body">
                                                    <!-- meta icon -->
                                                    <span class="media-meta">Oct 13, 2014</span>
                                                    <!--/ meta icon -->
                                                    <span class="media-heading">Consectetur adipisicing elit.</span>
                                                </span>
                                            </a>
                                        </div>
                                        <!--/ Message list -->
                                    </div>
                                    <div class="tab-pane pl0 pr0" id="recent">
                                        <!-- Media list -->
                                        <div class="media-list">
                                            <a href="javascript:void(0);" class="media border-dotted">
                                                <span class="pull-left">
                                                    <img src="/image/background/400x400/background4.jpg" class="media-object" alt="">
                                                </span>
                                                <span class="media-body">
                                                    <!-- meta icon -->
                                                    <span class="media-meta">Apr 26, 2013</span>
                                                    <!--/ meta icon -->
                                                    <span class="media-heading">Ut enim ad minim veniam</span>
                                                </span>
                                            </a>
                                            <a href="javascript:void(0);" class="media border-dotted">
                                                <span class="pull-left">
                                                    <img src="/image/background/400x400/background5.jpg" class="media-object" alt="">
                                                </span>
                                                <span class="media-body">
                                                    <!-- meta icon -->
                                                    <span class="media-meta">Nov 30, 2013</span>
                                                    <!--/ meta icon -->
                                                    <span class="media-heading">Duis aute irure dolor in reprehenderit.</span>
                                                </span>
                                            </a>
                                            <a href="javascript:void(0);" class="media border-dotted">
                                                <span class="pull-left">
                                                    <img src="/image/background/400x400/background6.jpg" class="media-object" alt="">
                                                </span>
                                                <span class="media-body">
                                                    <!-- meta icon -->
                                                    <span class="media-meta">Oct 8, 2014</span>
                                                    <!--/ meta icon -->
                                                    <span class="media-heading">Excepteur sint occaecat cupidatat non</span>
                                                </span>
                                            </a>
                                        </div>
                                        <!--/ Message list -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Tabbed content -->
                    </div>
                    <!--/ END right / bottom side -->
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
        <script type="text/javascript" src="/plugins/shuffle/js/jquery.shuffle.js"></script>
        <script type="text/javascript" src="/js/backend/pages/blog.js"></script>
        <!--/ Plugins and page level script : optional -->
        <!--/ END JAVASCRIPT SECTION -->
    </body>
    <!--/ END Body -->
</html>