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
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css">
        <link rel="stylesheet" href="/plugins/magnific/css/magnific.css">
        <link rel="stylesheet" href="/plugins/selectize/css/selectize.css">
        <link rel="stylesheet" href="/plugins/gritter/css/gritter.css">
        <link rel="stylesheet" href="/plugins/summernote/css/summernote.css">
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
                        <h4 class="title semibold">Email view</h4>
                    </div>
                    <div class="page-header-section">
                        <div class="toolbar">
                            <div class="input-group">
                                <div class="has-icon">
                                    <input type="text" class="form-control" placeholder="Search your email...">
                                    <i class="ico-search form-control-icon"></i>
                                </div>
                                <div class="input-group-btn">
                                    <button type="button" class="btn btn-default">Search</button>
                                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button>
                                    <ul class="dropdown-menu pull-right" role="menu">
                                        <li class="dropdown-header">Filter :</li>
                                        <li><a href="javascript:void(0);"><i class="icon ico-download22"></i>Inbox</a></li>
                                        <li><a href="javascript:void(0);"><i class="icon ico-upload22"></i>Outbox</a></li>
                                        <li><a href="javascript:void(0);"><i class="icon ico-remove4"></i>Trash</a></li>
                                        <li class="divider"></li>
                                        <li><a href="javascript:void(0);"><i class="icon ico-briefcase2"></i>Others</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Page Header -->

                <!-- START Table layout -->
                <div class="table-layout">
                    <!-- message list-->
                    <div class="col-lg-3 valign-top panel panel-minimal">
                        <!-- panel heading -->
                        <div class="panel-heading">
                            <!-- panel toolbar -->
                            <div class="panel-toolbar">
                                <button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#ModalComposeMessage">
                                    <i class="ico-pencil5"></i> 
                                    <span class="semibold">Compose Email</span>
                                </button>
                            </div>
                        </div>
                        <!--/ panel heading -->
                        
                        <!-- panel body -->
                        <div class="panel-body">
                            <!-- Browse -->
                            <h5 class="semibold">Browse</h5>
                            <div class="list-group">
                                <a href="page-email-inbox.html" class="list-group-item"><i class="ico-drawer mr5"></i> Inbox <span class="semibold text-muted pull-right">1943</span></a>
                                <a href="javascript:void(0);" class="list-group-item"><i class="ico-paper-plane mr5"></i> Sent <span class="semibold text-muted pull-right">51</span></a>
                                <a href="javascript:void(0);" class="list-group-item"><i class="ico-pen3 mr5"></i> Draft <span class="semibold text-muted pull-right">11</span></a>
                                <a href="javascript:void(0);" class="list-group-item"><i class="ico-remove2 mr5"></i> Trash</a>
                            </div>
                            <!--/ Browse -->
                            <!-- Label -->
                            <h5 class="semibold">Label</h5>
                            <div class="list-group">
                                <a href="javascript:void(0);" class="list-group-item"><i class="ico-square text-danger mr5"></i> Work</a>
                                <a href="javascript:void(0);" class="list-group-item"><i class="ico-square text-muted mr5"></i> Design</a>
                                <a href="javascript:void(0);" class="list-group-item"><i class="ico-square text-teal mr5"></i> Social</a>
                                <a href="javascript:void(0);" class="list-group-item"><i class="ico-square text-success mr5"></i> Magazine</a>
                            </div>
                            <!--/ Label-->
                            <!-- Progress bar -->
                            <h5 class="semibold">Space Used</h5>
                            <div class="list-group">
                                <div class="list-group-item">
                                    <ul class="list-table nm">
                                        <li class="text-left">Inbox</li>
                                        <li>
                                            <div class="progress progress-xs nm">
                                                <div class="progress-bar" style="width: 40%"></div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="list-group-item">
                                    <ul class="list-table nm">
                                        <li class="text-left">Sent</li>
                                        <li>
                                            <div class="progress progress-xs nm">
                                                <div class="progress-bar" style="width: 15%"></div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="list-group-item">
                                    <ul class="list-table nm">
                                        <li class="text-left">Draft</li>
                                        <li>
                                            <div class="progress progress-xs nm">
                                                <div class="progress-bar" style="width: 20%"></div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="list-group-item">
                                    <ul class="list-table nm">
                                        <li class="text-left">Trash</li>
                                        <li>
                                            <div class="progress progress-xs nm">
                                                <div class="progress-bar progress-bar-danger" style="width: 90%"></div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!--/ Progress bar -->

                            <hr><!-- horizontal line -->

                            <!-- Advertisements -->
                            <h5 class="semibold">Dummie Advert</h5>
                            <ul class="list-table mb15">
                                <li class="text-left valign-top">
                                    <div class="thumbnail nm">
                                        <!-- media -->
                                        <div class="media">
                                            <!-- indicator -->
                                            <div class="indicator"><span class="spinner"></span></div>
                                            <!-- indicator -->
                                            <img data-toggle="unveil" src="/image/background/400x250/placeholder.jpg" data-src="/image/background/400x250/adv.jpg" alt="Advertisements" width="100%">
                                        </div>
                                        <!--/ media -->
                                    </div>
                                </li>
                                <li class="text-left valign-top">
                                    <a class="semibold" href="javascript:void(0);">Bootstrap3</a>
                                    <p class="text-muted nm">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                </li>
                            </ul>
                            <!--/ Advertisements -->
                        </div>
                        <!--/ panel body -->
                    </div>
                    <!--/ message list -->

                    <!-- content -->
                    <div class="col-lg-8 valign-top panel panel-default">
                        <!-- toolbar -->
                        <div class="panel-toolbar-wrapper pt10 pb10">
                            <div class="panel-toolbar">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-default"><i class="ico-arrow-left"></i></button>
                                    <button type="button" class="btn btn-default"><i class="ico-forward"></i></button>
                                    <button type="button" class="btn btn-default"><i class="ico-reply"></i></button>
                                    <button type="button" class="btn btn-default"><i class="ico-remove2"></i></button>
                                </div>
                            </div>
                            <div class="panel-toolbar text-right">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-default"><i class="ico-folder"></i></button>
                                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-right" role="menu">
                                        <li role="presentation" class="dropdown-header">Move to folder</li>
                                        <li><a href="javascript:void(0);">Important</a></li>
                                        <li><a href="javascript:void(0);">Misc</a></li>
                                        <li><a href="javascript:void(0);">Work</a></li>
                                    </ul>
                                </div>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-default"><i class="ico-tags"></i></button>
                                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-right" role="menu">
                                        <li role="presentation" class="dropdown-header">Set tags</li>
                                        <li><a href="javascript:void(0);"><i class="icon ico-radio-unchecked text-primary"></i> Primary</a></li>
                                        <li><a href="javascript:void(0);"><i class="icon ico-radio-unchecked text-danger"></i> Important</a></li>
                                        <li><a href="javascript:void(0);"><i class="icon ico-radio-unchecked text-success"></i> Done</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!--/ toolbar -->

                        <!-- panel body -->
                        <div class="panel-body bgcolor-default">
                            <h3 class="semibold mt0 mb5">Click me. I'll take you to the email view</h3>
                            <p class="nm">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                        <!--/ panel body -->

                        <hr class="nm"><!-- horizontal line -->

                        <!-- panel body -->
                        <div class="panel-body">
                            <!-- sender detail -->
                            <ul class="list-table">
                                <li style="width:70px;">
                                    <img class="img-circle" src="/image/avatar/avatar6.jpg" alt="" width="65px" height="65px">
                                </li>
                                <li class="text-left">
                                    <h4 class="semibold ellipsis nm">
                                        Colt Jenkins / 
                                        <small class="text-muted"><a href="javascript:void(0);">cj@mail.com</a> to <a href="javascript:void(0);">Me</a></small>
                                    </h4>
                                </li>
                                <li class="text-right">
                                    <h5 class="semibold text-muted">Jul 19, 2013</h5>
                                </li>
                            </ul>
                            <!--/ sender detail -->
                        </div>
                        <!--/ panel body -->

                        <!-- panel body -->
                        <div class="panel-body slimscroll" style="height:450px;">
                            <h5 class="semibold">Dear Mr. John Doe,</h5>

                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

                            <blockquote class="mt15 mb15">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                <footer>Someone famous in <cite title="Source Title">Source Title</cite></footer>
                            </blockquote>

                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>


                            <p>Check this awesome photo :)</p>
                            <div class="row mt15 mb15" id="photo-album">
                                <div class="col-md-2 col-xs-4">
                                    <!-- thumbnail -->
                                    <a href="/image/background/background1.jpg" class="thumbnail magnific">
                                        <img src="/image/background/400x400/background1.jpg" alt="" width="100%" />
                                    </a>
                                    <!--/ thumbnail -->
                                </div>
                                <div class="col-md-2 col-xs-4">
                                    <!-- thumbnail -->
                                    <a href="/image/background/background2.jpg" class="thumbnail magnific">
                                        <img src="/image/background/400x400/background2.jpg" alt="" width="100%" />
                                    </a>
                                    <!--/ thumbnail -->
                                </div>
                                <div class="col-md-2 col-xs-4">
                                    <!-- thumbnail -->
                                    <a href="/image/background/background3.jpg" class="thumbnail magnific">
                                        <img src="/image/background/400x400/background3.jpg" alt="" width="100%" />
                                    </a>
                                    <!--/ thumbnail -->
                                </div>
                                <div class="col-md-2 col-xs-4">
                                    <!-- thumbnail -->
                                    <a href="/image/background/background4.jpg" class="thumbnail magnific">
                                        <img src="/image/background/400x400/background4.jpg" alt="" width="100%" />
                                    </a>
                                    <!--/ thumbnail -->
                                </div>
                                <div class="col-md-2 col-xs-4">
                                    <!-- thumbnail -->
                                    <a href="/image/background/background5.jpg" class="thumbnail magnific">
                                        <img src="/image/background/400x400/background5.jpg" alt="" width="100%" />
                                    </a>
                                    <!--/ thumbnail -->
                                </div>
                                <div class="col-md-2 col-xs-4">
                                    <!-- thumbnail -->
                                    <a href="/image/background/background6.jpg" class="thumbnail magnific">
                                        <img src="/image/background/400x400/background6.jpg" alt="" width="100%" />
                                    </a>
                                    <!--/ thumbnail -->
                                </div>
                            </div>

                            <address>
                                <p class="semibold nm">Best Regard,</p>
                                <p class="nm">Arthur Abbott</p>
                                <a href="mailto:#">arbb@mail.com</a>
                            </address>
                        </div>
                        <!--/ panel body -->

                        <!-- panel body -->
                        <div class="panel-body">
                            <h5 class="semibold mt0">Attachment</h5>

                            <!-- attachment -->
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped nm">
                                    <tbody>
                                        <tr>
                                            <td>
                                                <span class="label label-success">HTML</span> file.html (1.2 MB)
                                            </td>
                                            <td width="6%"><a href="javascript:void(0);">View</a></td>
                                            <td width="6%"><a href="javascript:void(0);">Download</a></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="label label-primary">CSS</span> file.css (1.2 MB)
                                            </td>
                                            <td width="6%"><a href="javascript:void(0);">View</a></td>
                                            <td width="6%"><a href="javascript:void(0);">Download</a></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="label label-danger">PHP</span> file.php (1.2 MB)
                                            </td>
                                            <td width="6%"><a href="javascript:void(0);">View</a></td>
                                            <td width="6%"><a href="javascript:void(0);">Download</a></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!--/ attachment -->
                        </div>
                        <!--/ panel body -->

                        <!-- reply box -->
                        <div class="summernote">
                            <i>Click here to <strong>Reply</strong> or <strong>Forward</strong></i>
                        </div>
                        <!--/ reply box -->
                    </div>
                    <!--/ content -->
                </div>
                <!--/ END Table layout -->

                <!-- START Modal compose message -->
                <div id="ModalComposeMessage" class="modal fade">
                    <div class="modal-dialog">
                        <form class="modal-content" action="" parsley-validate>
                            <div class="modal-header text-center">
                                <button type="button" class="close" data-dismiss="modal">×</button>
                                <div class="ico-envelop-opened mb15 mt15" style="font-size:36px;"></div>
                                <h4 class="semibold modal-title text-primary">Compose Email</h4>
                                <p class="text-muted">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="control-label">To <span class="text-danger">*</span></label>
                                            <input type="text" name="contact" id="selectize-contact" class="form-control" placeholder="Select contact...">
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Subject <span class="text-danger">*</span></label>
                                            <input name="subject" type="text" class="form-control" parsley-required="true">
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Your message</label>
                                            <div class="summernote"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                <button type="submit" class="btn btn-success">Send</button>
                            </div>
                        </form><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div>
                <!--/ END Modal compose message -->
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
        <script type="text/javascript" src="/plugins/selectize/js/selectize.js"></script>
        <script type="text/javascript" src="/plugins/gritter/js/jquery.gritter.js"></script>
        <script type="text/javascript" src="/plugins/summernote/js/summernote.js"></script>
        <script type="text/javascript" src="/js/backend/pages/email.js"></script>
        <!--/ Plugins and page level script : optional -->
        <!--/ END JAVASCRIPT SECTION -->
    </body>
    <!--/ END Body -->
</html>