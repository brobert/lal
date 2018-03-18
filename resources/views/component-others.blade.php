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
                        <h4 class="title semibold">Miscelleneous</h4>
                    </div>
                    <div class="page-header-section">
                        <!-- Toolbar -->
                        <div class="toolbar">
                            <ol class="breadcrumb breadcrumb-transparent nm">
                                <li><a href="javascript:void(0);">UI Elements</a></li>
                                <li class="active">Miscelleneous</li>
                            </ol>
                        </div>
                        <!--/ Toolbar -->
                    </div>
                </div>
                <!-- Page Header -->

                <!-- section header -->
                <div class="section-header">
                    <h5 class="semibold title mb15">Progress bars</h5>
                </div>
                <!--/ section header -->

                <!-- START row -->
                <div class="row">
                    <div class="col-md-6">
                        <!-- START panel -->
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <h5 class="text-primary semibold mt0">Contextual alternatives</h5>
                                <p>Progress bars use some of the same button and alert classes for consistent styles.</p>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-success" style="width: 40%">
                                        <span class="sr-only">40% Complete (success)</span>
                                    </div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-info" style="width: 20%">
                                        <span class="sr-only">20% Complete</span>
                                    </div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-warning" style="width: 60%">
                                        <span class="sr-only">60% Complete (warning)</span>
                                    </div>
                                </div>
                                <div class="progress mb0">
                                    <div class="progress-bar progress-bar-danger" style="width: 80%">
                                        <span class="sr-only">80% Complete (danger)</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/ END panel -->
                    </div>
                    <div class="col-md-6">
                        <!-- START panel -->
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <h5 class="text-primary semibold mt0">Striped</h5>
                                <p>Uses a gradient to create a striped effect. Not available in IE8.</p>
                                <div class="progress progress-striped">
                                    <div class="progress-bar progress-bar-success" style="width: 40%">
                                        <span class="sr-only">40% Complete (success)</span>
                                    </div>
                                </div>
                                <div class="progress progress-striped">
                                    <div class="progress-bar progress-bar-info" style="width: 20%">
                                        <span class="sr-only">20% Complete</span>
                                    </div>
                                </div>
                                <div class="progress progress-striped">
                                    <div class="progress-bar progress-bar-warning" style="width: 60%">
                                        <span class="sr-only">60% Complete (warning)</span>
                                    </div>
                                </div>
                                <div class="progress progress-striped mb0">
                                    <div class="progress-bar progress-bar-danger" style="width: 80%">
                                        <span class="sr-only">80% Complete (danger)</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/ END panel -->
                    </div>
                </div>
                <!-- END row -->

                <!-- START row -->
                <div class="row">
                    <div class="col-md-6">
                        <!-- START panel -->
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <h5 class="text-primary semibold mt0">Animated</h5>
                                <p>Add <code>.active</code> to <code>.progress-striped</code> to animate the stripes right to left. Not available in all versions of IE.</p>
                                <div class="progress progress-striped active">
                                    <div class="progress-bar progress-bar-success" style="width: 40%">
                                        <span class="sr-only">40% Complete (success)</span>
                                    </div>
                                </div>
                                <h4 class="mt0 text-info">Stacked</h4>
                                <p>Place multiple bars into the same <code>.progress</code> to stack them.</p>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-success" style="width: 35%">
                                        <span class="sr-only">35% Complete (success)</span>
                                    </div>
                                    <div class="progress-bar progress-bar-warning" style="width: 20%">
                                        <span class="sr-only">20% Complete (warning)</span>
                                    </div>
                                    <div class="progress-bar progress-bar-danger" style="width: 10%">
                                        <span class="sr-only">10% Complete (danger)</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/ END panel -->
                    </div>
                    <div class="col-md-6">
                        <!-- START panel -->
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <h5 class="text-primary semibold mt0">Sizing</h5>
                                <p>Set progress size using classes like <code>.progress-sm</code> or <code>.progress-xs</code></p>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-success" style="width: 40%">
                                        <span class="sr-only">40% Complete (success)</span>
                                    </div>
                                </div>
                                <div class="progress progress-sm">
                                    <div class="progress-bar progress-bar-info" style="width: 20%">
                                        <span class="sr-only">20% Complete</span>
                                    </div>
                                </div>
                                <div class="progress progress-xs">
                                    <div class="progress-bar progress-bar-warning" style="width: 60%">
                                        <span class="sr-only">60% Complete (warning)</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/ END panel -->
                    </div>
                </div>
                <!--/ END row -->
                <hr><!-- Horizontal rule -->

                <!-- section header -->
                <div class="section-header">
                    <h5 class="semibold title mb15">Breadcrumbs</h5>
                </div>
                <!--/ section header -->

                <!-- START row -->
                <div class="row">
                    <div class="col-md-6">
                        <!-- START panel -->
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <p>Separators are automatically added in CSS through <code>:before</code> and <code>content</code>.</p>
                                <ol class="breadcrumb">
                                    <li class="active">Home</li>
                                </ol>
                                <ol class="breadcrumb">
                                    <li><a href="javascript:void(0);">Home</a></li>
                                    <li class="active">Library</li>
                                </ol>
                                <ol class="breadcrumb" style="margin-bottom: 5px;">
                                    <li><a href="javascript:void(0);">Home</a></li>
                                    <li><a href="javascript:void(0);">Library</a></li>
                                    <li class="active">Data</li>
                                </ol>
                            </div>
                        </div>
                        <!--/ END panel -->
                    </div>
                </div>
                <!-- START row -->
                <hr><!-- Horizontal rule -->

                <!-- section header -->
                <div class="section-header">
                    <h5 class="semibold title mb15">List group</h5>
                </div>
                <!--/ section header -->

                <!-- START row -->
                <div class="row">
                    <div class="col-md-6">
                        <!-- START panel -->
                        <div class="panel">
                            <div class="panel-body">
                                <h5 class="text-primary semibold mt0">Basic Example</h5>
                                <p>The most basic list group is simply an unordered list with list items, and the proper classes. Build upon it with the options that follow, or your own CSS as needed.</p>
                                <ul class="list-group mb0">
                                    <li class="list-group-item">Cras justo odio</li>
                                    <li class="list-group-item">Dapibus ac facilisis in</li>
                                    <li class="list-group-item">Morbi leo risus</li>
                                    <li class="list-group-item">Porta ac consectetur ac</li>
                                    <li class="list-group-item">Vestibulum at eros</li>
                                </ul>
                            </div>
                        </div>
                        <!--/ END panel -->
                    </div>
                    <div class="col-md-6">
                        <!-- START panel -->
                        <div class="panel">
                            <div class="panel-body">
                                <h5 class="text-primary semibold mt0">Badges</h5>
                                <p>The most basic list group is simply an unordered list with list items, and the proper classes. Build upon it with the options that follow, or your own CSS as needed.</p>
                                <ul class="list-group mb0">
                                    <li class="list-group-item">Cras justo odio <span class="badge">14</span></li>
                                    <li class="list-group-item">Dapibus ac facilisis in <span class="badge">7</span></li>
                                    <li class="list-group-item">Morbi leo risus <span class="badge">1</span></li>
                                    <li class="list-group-item">Porta ac consectetur ac <span class="badge"></span></li>
                                    <li class="list-group-item">Vestibulum at eros</li>
                                </ul>
                            </div>
                        </div>
                        <!--/ END panel -->
                    </div>
                </div>
                <!-- END row -->

                <!-- START row -->
                <div class="row">
                    <div class="col-md-6">
                        <!-- START panel -->
                        <div class="panel">
                            <div class="panel-body">
                                <h5 class="text-primary semibold mt0">Custom content</h5>
                                <p>Add nearly any HTML within, even for linked list groups like the one below.</p>
                                <div class="list-group">
                                    <a href="javascript:void(0);" class="list-group-item active">
                                        <h4 class="list-group-item-heading">List group item heading</h4>
                                        <p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                                    </a>
                                    <a href="javascript:void(0);" class="list-group-item">
                                        <h4 class="list-group-item-heading">List group item heading</h4>
                                        <p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                                    </a>
                                    <a href="javascript:void(0);" class="list-group-item">
                                        <h4 class="list-group-item-heading">List group item heading</h4>
                                        <p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!--/ END panel -->
                    </div>
                    <div class="col-md-6">
                        <!-- START panel -->
                        <div class="panel">
                            <div class="panel-body">
                                <h5 class="text-primary semibold mt0">Linked items</h5>
                                <p>Linkify list group items by using anchor tags instead of list items (that also means a parent <code>&lt;div&gt;</code> instead of an <code>&lt;ul&gt;</code>). No need for individual parents around each element.</p>
                                <div class="list-group">
                                    <a href="javascript:void(0);" class="list-group-item active">Cras justo odio</a>
                                    <a href="javascript:void(0);" class="list-group-item">Dapibus ac facilisis in</a>
                                    <a href="javascript:void(0);" class="list-group-item">Morbi leo risus</a>
                                    <a href="javascript:void(0);" class="list-group-item">Porta ac consectetur ac</a>
                                    <a href="javascript:void(0);" class="list-group-item">Vestibulum at eros</a>
                                </div>
                            </div>
                        </div>
                        <!--/ END panel -->
                    </div>
                </div>
                <!-- START row -->
                <hr><!-- Horizontal rule -->

                <!-- section header -->
                <div class="section-header">
                    <h5 class="semibold title mb15">Custom Switch</h5>
                </div>
                <!--/ section header -->

                <!-- START row -->
                <div class="row">
                    <div class="col-md-4">
                        <!-- START panel -->
                        <div class="panel">
                            <div class="panel-body">
                                <h5 class="semibold text-primary mt0">Checked by default</h5>
                                <p>Only thing you need is to add a <code>checked</code> attribute to your checkbox input. Simple as that.</p>
                                <label class="switch switch-primary">
                                    <input type="checkbox" checked>
                                    <span class="switch"></span>
                                </label>
                            </div>
                        </div>
                        <!--/ END panel -->
                    </div>

                    <div class="col-md-4">
                        <!-- START panel -->
                        <div class="panel">
                            <div class="panel-body">
                                <h5 class="semibold text-primary mt0">Switches color</h5>
                                <p>Comes with 4 type of colors</p>
                                <label class="switch switch-primary">
                                    <input type="checkbox" checked>
                                    <span class="switch"></span>
                                </label>
                                <label class="switch switch-success">
                                    <input type="checkbox" checked>
                                    <span class="switch"></span>
                                </label>
                                <label class="switch switch-info">
                                    <input type="checkbox" checked>
                                    <span class="switch"></span>
                                </label>
                                </label>
                                <label class="switch switch-danger">
                                    <input type="checkbox" checked>
                                    <span class="switch"></span>
                                </label>
                            </div>
                        </div>
                        <!--/ END panel -->
                    </div>

                    <div class="col-md-4">
                        <!-- START panel -->
                        <div class="panel">
                            <div class="panel-body">
                                <h5 class="semibold text-primary mt0">Size variation</h5>
                                <p>You can set switch size to.</p>
                                <p>
                                    <label class="switch switch-lg">
                                        <input type="checkbox">
                                        <span class="switch"></span><span class="text ml-xs">&nbsp;.switch-lg</span>
                                    </label>
                                </p>
                                <p>
                                    <label class="switch switch-info">
                                        <input type="checkbox" checked>
                                        <span class="switch"></span><span class="text ml-xs">&nbsp;switch default</span>
                                    </label>
                                </p>
                                <p>
                                    <label class="switch switch-sm switch-success">
                                        <input type="checkbox">
                                        <span class="switch"></span><span class="text ml-xs">&nbsp;.switch-sm</span>
                                    </label>
                                </p>
                                <p>
                                    <label class="switch switch-xs switch-warning">
                                        <input type="checkbox" checked>
                                        <span class="switch"></span><span class="text ml-xs">&nbsp;.switch-xs</span>
                                    </label>
                                </p>
                            </div>
                        </div>
                        <!--/ END panel -->
                    </div>
                </div>
                <!--/ END row -->
                <hr><!-- Horizontal rule -->

                <!-- section header -->
                <div class="section-header">
                    <h5 class="semibold title mb15">Note</h5>
                </div>
                <!--/ section header -->

                <!-- START row -->
                <div class="row">
                    <div class="col-md-12">
                        <!-- START panel -->
                        <div class="panel">
                            <div class="panel-body bgcolor-white">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="note note-default mb15">note default</div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="note note-primary mb15">note primary</div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="note note-info mb15">note info</div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="note note-success mb15">note success</div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="note note-warning mb15">note warning</div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="note note-danger mb15">note danger</div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="note note-inverse mb15">note inverse</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/ END panel -->
                    </div>
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="note note-rounded note-default mb15">note default</div>
                            </div>
                            <div class="col-sm-3">
                                <div class="note note-rounded note-primary mb15">note primary</div>
                            </div>
                            <div class="col-sm-3">
                                <div class="note note-rounded note-info mb15">note info</div>
                            </div>
                            <div class="col-sm-3">
                                <div class="note note-rounded note-success mb15">note success</div>
                            </div>
                            <div class="col-sm-3">
                                <div class="note note-rounded note-warning mb15">note warning</div>
                            </div>
                            <div class="col-sm-3">
                                <div class="note note-rounded note-danger mb15">note danger</div>
                            </div>
                            <div class="col-sm-3">
                                <div class="note note-rounded note-inverse mb15">note inverse</div>
                            </div>
                        </div>
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
        <!--/ Plugins and page level script : optional -->
        <!--/ END JAVASCRIPT SECTION -->
    </body>
    <!--/ END Body -->
</html>