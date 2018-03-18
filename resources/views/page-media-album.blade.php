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
                        <h4 class="title semibold">Media album</h4>
                    </div>
                    <div class="page-header-section">
                        <!-- Toolbar -->
                        <div class="toolbar">
                            <button type="button" class="btn btn-primary"><i class="ico-plus-circle"></i> Create New Album</button>
                            &nbsp;<span class="text-muted semibold">or</span>&nbsp;
                            <div class="btn-group">
                                <button type="button" class="btn btn-default"><i class="ico-upload22"></i></button>
                                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button>
                                <ul class="dropdown-menu dropdown-menu-right" role="menu">
                                    <li class="dropdown-header">Album option</li>
                                    <li><a href="javascript:void(0);">Upload to new album</a></li>
                                    <li><a href="javascript:void(0);">Upload to existing album</a></li>
                                </ul>
                            </div>
                        </div>
                        <!--/ Toolbar -->
                    </div>
                </div>
                <!-- Page Header -->

                <!-- START row -->
                <div class="row">
                    <div class="col-md-3">
                        <!-- thumbnail -->
                        <div class="thumbnail thumbnail-album animation animating delay fadeInLeft">
                            <!-- media -->
                            <div class="media">
                                <!-- indicator -->
                                <div class="indicator"><span class="spinner"></span></div>
                                <!--/ indicator -->
                                <!-- toolbar overlay -->
                                <div class="overlay">
                                    <div class="toolbar">
                                        <a href="javascript:void(0);" class="btn btn-default" title="upload to collection"><i class="ico-upload22"></i></a>
                                        <a href="javascript:void(0);" class="btn btn-success" title="watch collection"><i class="ico-facetime-video"></i></a>
                                        <a href="javascript:void(0);" class="btn btn-default" title="love this collection"><i class="ico-heart6"></i></a>
                                    </div>
                                </div>
                                <!--/ toolbar overlay -->
                                <img data-toggle="unveil" src="/image/background/400x250/placeholder.jpg" data-src="/image/background/400x250/background1.jpg" alt="Cover" width="100%" />
                            </div>
                            <!--/ media -->
                            <!-- caption -->
                            <div class="caption">
                                <h5 class="semibold mt0 mb5">Rock collections</h5>
                                <p class="text-muted mb5 ellipsis">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                                <p class="tag ellipsis">
                                    <a href="javascript:void(0);">#Rock</a>&nbsp;
                                    <a href="javascript:void(0);">#Nature</a>
                                </p>
                            </div>
                            <!--/ caption -->
                            <hr class="mt5 mb5">
                            <ul class="meta">
                                <li>
                                    <div class="img-group img-group-stack">
                                        <img src="/image/avatar/avatar1.jpg" class="img-circle" alt="" />
                                        <img src="/image/avatar/avatar2.jpg" class="img-circle" alt="" />
                                        <img src="/image/avatar/avatar3.jpg" class="img-circle" alt="" />
                                    </div>
                                </li>
                                <li>
                                    <p class="nm"><a href="javascript:void(0);" class="semibold">3 people</a> love this</p>
                                </li>
                            </ul>
                        </div>
                        <!--/ thumbnail -->
                    </div>
                    <div class="col-md-3">
                        <!-- thumbnail -->
                        <div class="thumbnail thumbnail-album animation animating delay fadeInLeft">
                            <!-- media -->
                            <div class="media">
                                <!-- indicator -->
                                <div class="indicator"><span class="spinner"></span></div>
                                <!--/ indicator -->
                                <!-- toolbar overlay -->
                                <div class="overlay">
                                    <div class="toolbar">
                                        <a href="javascript:void(0);" class="btn btn-default" title="upload to collection"><i class="ico-upload22"></i></a>
                                        <a href="javascript:void(0);" class="btn btn-success" title="watch collection"><i class="ico-facetime-video"></i></a>
                                        <a href="javascript:void(0);" class="btn btn-default" title="love this collection"><i class="ico-heart6"></i></a>
                                    </div>
                                </div>
                                <!--/ toolbar overlay -->
                                <img data-toggle="unveil" src="/image/background/400x250/placeholder.jpg" data-src="/image/background/400x250/background5.jpg" alt="Cover" width="100%" />
                            </div>
                            <!--/ media -->
                            <!-- caption -->
                            <div class="caption">
                                <h5 class="semibold mt0 mb5">Road Challenge</h5>
                                <p class="text-muted mb5 ellipsis">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                                <p class="tag ellipsis">
                                    <a href="javascript:void(0);">#Road</a>&nbsp;
                                    <a href="javascript:void(0);">#Hill</a>&nbsp;
                                    <a href="javascript:void(0);">#Challenge</a>
                                </p>
                            </div>
                            <!--/ caption -->
                            <hr class="mt5 mb5">
                            <ul class="meta">
                                <li>
                                    <div class="img-group img-group-stack">
                                        <img src="/image/avatar/avatar4.jpg" class="img-circle" alt="" />
                                        <img src="/image/avatar/avatar5.jpg" class="img-circle" alt="" />
                                    </div>
                                </li>
                                <li>
                                    <p class="nm"><a href="javascript:void(0);" class="semibold">2 people</a> love this</p>
                                </li>
                            </ul>
                        </div>
                        <!--/ thumbnail -->
                    </div>
                    <div class="col-md-3">
                        <!-- media figure -->
                        <div class="thumbnail thumbnail-album animation animating delay fadeInRight">
                            <!-- media -->
                            <div class="media">
                                <!-- indicator -->
                                <div class="indicator"><span class="spinner"></span></div>
                                <!--/ indicator -->
                                <!-- toolbar overlay -->
                                <div class="overlay">
                                    <div class="toolbar">
                                        <a href="javascript:void(0);" class="btn btn-default" title="upload to collection"><i class="ico-upload22"></i></a>
                                        <a href="javascript:void(0);" class="btn btn-success" title="watch collection"><i class="ico-facetime-video"></i></a>
                                        <a href="javascript:void(0);" class="btn btn-default" title="love this collection"><i class="ico-heart6"></i></a>
                                    </div>
                                </div>
                                <!--/ toolbar overlay -->
                                <img data-toggle="unveil" src="/image/background/400x250/placeholder.jpg" data-src="/image/background/400x250/background11.jpg" alt="Cover" width="100%" />
                            </div>
                            <!--/ media -->
                            <!-- caption -->
                            <div class="caption">
                                <h5 class="semibold mt0 mb5">Retro camera</h5>
                                <p class="text-muted mb5 ellipsis">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                                <p class="tag ellipsis">
                                    <a href="javascript:void(0);">#Retro</a>&nbsp;
                                    <a href="javascript:void(0);">#Camera</a>&nbsp;
                                    <a href="javascript:void(0);">#Oldschool</a>
                                </p>
                            </div>
                            <!--/ caption -->
                            <hr class="mt5 mb5">
                            <ul class="meta">
                                <li>
                                    <div class="img-group img-group-stack">
                                        <img src="/image/avatar/avatar6.jpg" class="img-circle" alt="" />
                                    </div>
                                </li>
                                <li>
                                    <p class="nm"><a href="javascript:void(0);" class="semibold">John doe</a> love this</p>
                                </li>
                            </ul>
                        </div>
                        <!--/ thumbnail -->
                    </div>
                    <div class="col-md-3">
                        <!-- media figure -->
                        <div class="thumbnail thumbnail-album animation animating delay fadeInRight">
                            <!-- media -->
                            <div class="media">
                                <!-- indicator -->
                                <div class="indicator"><span class="spinner"></span></div>
                                <!--/ indicator -->
                                <!-- toolbar overlay -->
                                <div class="overlay">
                                    <div class="toolbar">
                                        <a href="javascript:void(0);" class="btn btn-default" title="upload to collection"><i class="ico-upload22"></i></a>
                                        <a href="javascript:void(0);" class="btn btn-success" title="watch collection"><i class="ico-facetime-video"></i></a>
                                        <a href="javascript:void(0);" class="btn btn-default" title="love this collection"><i class="ico-heart6"></i></a>
                                    </div>
                                </div>
                                <!--/ toolbar overlay -->
                                <img data-toggle="unveil" src="/image/background/400x250/placeholder.jpg" data-src="/image/background/400x250/background12.jpg" alt="Cover" width="100%" />
                            </div>
                            <!--/ media -->
                            <!-- caption -->
                            <div class="caption">
                                <h5 class="semibold mt0 mb5">Animal planet</h5>
                                <p class="text-muted mb5 ellipsis">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                                <p class="tag ellipsis">
                                    <a href="javascript:void(0);">#Animal</a>&nbsp;
                                    <a href="javascript:void(0);">#Nature</a>&nbsp;
                                </p>
                            </div>
                            <!--/ caption -->
                            <hr class="mt5 mb5">
                            <ul class="meta">
                                <li>
                                    <div class="img-group img-group-stack">
                                        <img src="/image/avatar/avatar5.jpg" class="img-circle" alt="" />
                                        <img src="/image/avatar/avatar1.jpg" class="img-circle" alt="" />
                                        <img src="/image/avatar/avatar9.jpg" class="img-circle" alt="" />
                                    </div>
                                </li>
                                <li>
                                    <p class="nm"><a href="javascript:void(0);" class="semibold">3 people</a> love this</p>
                                </li>
                            </ul>
                        </div>
                        <!--/ thumbnail -->
                    </div>
                    <div class="col-md-4">
                        <!-- thumbnail -->
                        <div class="thumbnail thumbnail-album animation animating delay fadeInLeft">
                            <!-- media -->
                            <div class="media">
                                <!-- indicator -->
                                <div class="indicator"><span class="spinner"></span></div>
                                <!--/ indicator -->
                                <!-- toolbar overlay -->
                                <div class="overlay">
                                    <div class="toolbar">
                                        <a href="javascript:void(0);" class="btn btn-default" title="upload to collection"><i class="ico-upload22"></i></a>
                                        <a href="javascript:void(0);" class="btn btn-success" title="watch collection"><i class="ico-facetime-video"></i></a>
                                        <a href="javascript:void(0);" class="btn btn-default" title="love this collection"><i class="ico-heart6"></i></a>
                                    </div>
                                </div>
                                <!--/ toolbar overlay -->
                                <img data-toggle="unveil" src="/image/background/400x250/placeholder.jpg" data-src="/image/background/400x250/background13.jpg" alt="Cover" width="100%" />
                            </div>
                            <!--/ media -->
                            <!-- caption -->
                            <div class="caption">
                                <h5 class="semibold mt0 mb5">Bird collection</h5>
                                <p class="text-muted mb5 ellipsis">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                                <p class="tag ellipsis">
                                    <a href="javascript:void(0);">#Animal</a>&nbsp;
                                    <a href="javascript:void(0);">#Bird</a>
                                </p>
                            </div>
                            <!--/ caption -->
                            <hr class="mt5 mb5">
                            <ul class="meta">
                                <li>
                                    <div class="img-group img-group-stack">
                                        <img src="/image/avatar/avatar2.jpg" class="img-circle" alt="" />
                                        <img src="/image/avatar/avatar7.jpg" class="img-circle" alt="" />
                                        <span class="more img-circle">6+</span>
                                    </div>
                                </li>
                                <li>
                                    <p class="nm"><a href="javascript:void(0);" class="semibold">8 people</a> love this</p>
                                </li>
                            </ul>
                        </div>
                        <!--/ thumbnail -->
                    </div>
                    <div class="col-md-4">
                        <!-- thumbnail -->
                        <div class="thumbnail thumbnail-album animation animating delay fadeInLeft">
                            <!-- media -->
                            <div class="media">
                                <!-- indicator -->
                                <div class="indicator"><span class="spinner"></span></div>
                                <!--/ indicator -->
                                <!-- toolbar overlay -->
                                <div class="overlay">
                                    <div class="toolbar">
                                        <a href="javascript:void(0);" class="btn btn-default" title="upload to collection"><i class="ico-upload22"></i></a>
                                        <a href="javascript:void(0);" class="btn btn-success" title="watch collection"><i class="ico-facetime-video"></i></a>
                                        <a href="javascript:void(0);" class="btn btn-default" title="love this collection"><i class="ico-heart6"></i></a>
                                    </div>
                                </div>
                                <!--/ toolbar overlay -->
                                <img data-toggle="unveil" src="/image/background/400x250/placeholder.jpg" data-src="/image/background/400x250/background14.jpg" alt="Cover" width="100%" />
                            </div>
                            <!--/ media -->
                            <!-- caption -->
                            <div class="caption">
                                <h5 class="semibold mt0 mb5">Rail station</h5>
                                <p class="text-muted mb5 ellipsis">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                                <p class="tag ellipsis">
                                    <a href="javascript:void(0);">#Railstation</a>&nbsp;
                                    <a href="javascript:void(0);">#Rail</a>&nbsp;
                                    <a href="javascript:void(0);">#Train</a>
                                </p>
                            </div>
                            <!--/ caption -->
                            <hr class="mt5 mb5">
                            <ul class="meta">
                                <li>
                                    <div class="img-group img-group-stack">
                                        <img src="/image/avatar/avatar7.jpg" class="img-circle" alt="" />
                                        <img src="/image/avatar/avatar2.jpg" class="img-circle" alt="" />
                                        <span class="more img-circle">2+</span>
                                    </div>
                                </li>
                                <li>
                                    <p class="nm"><a href="javascript:void(0);" class="semibold">4 people</a> love this</p>
                                </li>
                            </ul>
                        </div>
                        <!--/ thumbnail -->
                    </div>
                    <div class="col-md-4">
                        <!-- thumbnail -->
                        <div class="thumbnail thumbnail-album animation animating delay fadeInLeft">
                            <!-- media -->
                            <div class="media">
                                <!-- indicator -->
                                <div class="indicator"><span class="spinner"></span></div>
                                <!--/ indicator -->
                                <!-- toolbar overlay -->
                                <div class="overlay">
                                    <div class="toolbar">
                                        <a href="javascript:void(0);" class="btn btn-default" title="upload to collection"><i class="ico-upload22"></i></a>
                                        <a href="javascript:void(0);" class="btn btn-success" title="watch collection"><i class="ico-facetime-video"></i></a>
                                        <a href="javascript:void(0);" class="btn btn-default" title="love this collection"><i class="ico-heart6"></i></a>
                                    </div>
                                </div>
                                <!--/ toolbar overlay -->
                                <img data-toggle="unveil" src="/image/background/400x250/placeholder.jpg" data-src="/image/background/400x250/background15.jpg" alt="Cover" width="100%" />
                            </div>
                            <!--/ media -->
                            <!-- caption -->
                            <div class="caption">
                                <h5 class="semibold mt0 mb5">Cute pet</h5>
                                <p class="text-muted mb5 ellipsis">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                                <p class="tag ellipsis">
                                    <a href="javascript:void(0);">#Pet</a>&nbsp;
                                    <a href="javascript:void(0);">#Cute</a>
                                </p>
                            </div>
                            <!--/ caption -->
                            <hr class="mt5 mb5">
                            <ul class="meta">
                                <li>
                                    <div class="img-group img-group-stack">
                                        <img src="/image/avatar/avatar8.jpg" class="img-circle" alt="" />
                                    </div>
                                </li>
                                <li>
                                    <p class="nm"><a href="javascript:void(0);" class="semibold">Samuel Jackson</a> love this</p>
                                </li>
                            </ul>
                        </div>
                        <!--/ thumbnail -->
                    </div>
                    <div class="col-md-3">
                        <!-- thumbnail -->
                        <div class="thumbnail thumbnail-album animation animating delay fadeInLeft">
                            <!-- media -->
                            <div class="media">
                                <!-- indicator -->
                                <div class="indicator"><span class="spinner"></span></div>
                                <!--/ indicator -->
                                <!-- toolbar overlay -->
                                <div class="overlay">
                                    <div class="toolbar">
                                        <a href="javascript:void(0);" class="btn btn-default" title="upload to collection"><i class="ico-upload22"></i></a>
                                        <a href="javascript:void(0);" class="btn btn-success" title="watch collection"><i class="ico-facetime-video"></i></a>
                                        <a href="javascript:void(0);" class="btn btn-default" title="love this collection"><i class="ico-heart6"></i></a>
                                    </div>
                                </div>
                                <!--/ toolbar overlay -->
                                <img data-toggle="unveil" src="/image/background/400x250/placeholder.jpg" data-src="/image/background/400x250/background8.jpg" alt="Cover" width="100%" />
                            </div>
                            <!--/ media -->
                            <!-- caption -->
                            <div class="caption">
                                <h5 class="semibold mt0 mb5">Nice Weather</h5>
                                <p class="text-muted mb5 ellipsis">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                                <p class="tag ellipsis">
                                    <a href="javascript:void(0);">#Weather</a>&nbsp;
                                    <a href="javascript:void(0);">#Nature</a>
                                </p>
                            </div>
                            <!--/ caption -->
                            <hr class="mt5 mb5">
                            <ul class="meta">
                                <li>
                                    <div class="img-group img-group-stack">
                                        <img src="/image/avatar/avatar5.jpg" class="img-circle" alt="" />
                                        <img src="/image/avatar/avatar3.jpg" class="img-circle" alt="" />
                                    </div>
                                </li>
                                <li>
                                    <p class="nm"><a href="javascript:void(0);" class="semibold">2 people</a> love this</p>
                                </li>
                            </ul>
                        </div>
                        <!--/ thumbnail -->
                    </div>
                    <div class="col-md-3">
                        <!-- thumbnail -->
                        <div class="thumbnail thumbnail-album animation animating delay fadeInLeft">
                            <!-- media -->
                            <div class="media">
                                <!-- indicator -->
                                <div class="indicator"><span class="spinner"></span></div>
                                <!--/ indicator -->
                                <!-- toolbar overlay -->
                                <div class="overlay">
                                    <div class="toolbar">
                                        <a href="javascript:void(0);" class="btn btn-default" title="upload to collection"><i class="ico-upload22"></i></a>
                                        <a href="javascript:void(0);" class="btn btn-success" title="watch collection"><i class="ico-facetime-video"></i></a>
                                        <a href="javascript:void(0);" class="btn btn-default" title="love this collection"><i class="ico-heart6"></i></a>
                                    </div>
                                </div>
                                <!--/ toolbar overlay -->
                                <img data-toggle="unveil" src="/image/background/400x250/placeholder.jpg" data-src="/image/background/400x250/background7.jpg" alt="Cover" width="100%" />
                            </div>
                            <!--/ media -->
                            <!-- caption -->
                            <div class="caption">
                                <h5 class="semibold mt0 mb5">Awesome Beach</h5>
                                <p class="text-muted mb5 ellipsis">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                                <p class="tag ellipsis">
                                    <a href="javascript:void(0);">#Beach</a>&nbsp;
                                    <a href="javascript:void(0);">#Nature</a>
                                </p>
                            </div>
                            <!--/ caption -->
                            <hr class="mt5 mb5">
                            <ul class="meta">
                                <li>
                                    <div class="img-group img-group-stack">
                                        <img src="/image/avatar/avatar2.jpg" class="img-circle" alt="" />
                                        <img src="/image/avatar/avatar7.jpg" class="img-circle" alt="" />
                                        <img src="/image/avatar/avatar9.jpg" class="img-circle" alt="" />
                                    </div>
                                </li>
                                <li>
                                    <p class="nm"><a href="javascript:void(0);" class="semibold">3 people</a> love this</p>
                                </li>
                            </ul>
                        </div>
                        <!--/ thumbnail -->
                    </div>
                    <div class="col-md-3">
                        <!-- thumbnail -->
                        <div class="thumbnail thumbnail-album animation animating delay fadeInRight">
                            <!-- media -->
                            <div class="media">
                                <!-- indicator -->
                                <div class="indicator"><span class="spinner"></span></div>
                                <!--/ indicator -->
                                <!-- toolbar overlay -->
                                <div class="overlay">
                                    <div class="toolbar">
                                        <a href="javascript:void(0);" class="btn btn-default" title="upload to collection"><i class="ico-upload22"></i></a>
                                        <a href="javascript:void(0);" class="btn btn-success" title="watch collection"><i class="ico-facetime-video"></i></a>
                                        <a href="javascript:void(0);" class="btn btn-default" title="love this collection"><i class="ico-heart6"></i></a>
                                    </div>
                                </div>
                                <!--/ toolbar overlay -->
                                <img data-toggle="unveil" src="/image/background/400x250/placeholder.jpg" data-src="/image/background/400x250/background3.jpg" alt="Cover" width="100%" />
                            </div>
                            <!--/ media -->
                            <!-- caption -->
                            <div class="caption">
                                <h5 class="semibold mt0 mb5">Hiking collection</h5>
                                <p class="text-muted mb5 ellipsis">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                                <p class="tag ellipsis">
                                    <a href="javascript:void(0);">#Hiking</a>&nbsp;
                                    <a href="javascript:void(0);">#Mountain</a>&nbsp;
                                    <a href="javascript:void(0);">#Nature</a>
                                </p>
                            </div>
                            <!--/ caption -->
                            <hr class="mt5 mb5">
                            <ul class="meta">
                                <li>
                                    <div class="img-group img-group-stack">
                                        <img src="/image/avatar/avatar2.jpg" class="img-circle" alt="" />
                                        <img src="/image/avatar/avatar7.jpg" class="img-circle" alt="" />
                                        <span class="more img-circle">4+</span>
                                    </div>
                                </li>
                                <li>
                                    <p class="nm"><a href="javascript:void(0);" class="semibold">6 people</a> love this</p>
                                </li>
                            </ul>
                        </div>
                        <!--/ thumbnail -->
                    </div>
                    <div class="col-md-3">
                        <!-- thumbnail -->
                        <div class="thumbnail thumbnail-album animation animating delay fadeInRight">
                            <!-- media -->
                            <div class="media">
                                <!-- indicator -->
                                <div class="indicator"><span class="spinner"></span></div>
                                <!--/ indicator -->
                                <!-- toolbar overlay -->
                                <div class="overlay">
                                    <div class="toolbar">
                                        <a href="javascript:void(0);" class="btn btn-default" title="upload to collection"><i class="ico-upload22"></i></a>
                                        <a href="javascript:void(0);" class="btn btn-success" title="watch collection"><i class="ico-facetime-video"></i></a>
                                        <a href="javascript:void(0);" class="btn btn-default" title="love this collection"><i class="ico-heart6"></i></a>
                                    </div>
                                </div>
                                <!--/ toolbar overlay -->
                                <img data-toggle="unveil" src="/image/background/400x250/placeholder.jpg" data-src="/image/background/400x250/background9.jpg" alt="Cover" width="100%" />
                            </div>
                            <!--/ media -->
                            <!-- caption -->
                            <div class="caption">
                                <h5 class="semibold mt0 mb5">Rainy day</h5>
                                <p class="text-muted mb5 ellipsis">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                                <p class="tag ellipsis">
                                    <a href="javascript:void(0);">#Weather</a>&nbsp;
                                    <a href="javascript:void(0);">#Rain</a>&nbsp;
                                    <a href="javascript:void(0);">#Building</a>
                                </p>
                            </div>
                            <!--/ caption -->
                            <hr class="mt5 mb5">
                            <ul class="meta">
                                <li>
                                    <div class="img-group img-group-stack">
                                        <img src="/image/avatar/avatar1.jpg" class="img-circle" alt="" />
                                        <img src="/image/avatar/avatar3.jpg" class="img-circle" alt="" />
                                        <span class="more img-circle">3+</span>
                                    </div>
                                </li>
                                <li>
                                    <p class="nm"><a href="javascript:void(0);" class="semibold">5 people</a> love this</p>
                                </li>
                            </ul>
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
        <!--/ Plugins and page level script : optional -->
        <!--/ END JAVASCRIPT SECTION -->
    </body>
    <!--/ END Body -->
</html>