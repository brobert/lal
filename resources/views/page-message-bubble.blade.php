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
        <link rel="stylesheet" href="/plugins/selectize/css/selectize.css">
        <link rel="stylesheet" href="/plugins/gritter/css/gritter.css">
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
                        <h4 class="title semibold">Message - bubble</h4>
                    </div>
                    <div class="page-header-section">
                        <div class="toolbar">
                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#ModalComposeMessage"><i class="ico-pencil5"></i> Compose Message</button>
                        </div>
                    </div>
                </div>
                <!-- Page Header -->

                <!-- START Table layout -->
                <div class="table-layout nm">
                    <!-- message list-->
                    <div class="col-lg-4 valign-top panel panel-minimal">
                        <!-- panel heading -->
                        <div class="panel-heading">
                            <!-- panel toolbar -->
                            <div class="panel-toolbar">
                                <div class="input-group">
                                    <div class="has-icon">
                                        <input type="text" class="form-control" placeholder="Filter message...">
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
                        <!--/ panel heading -->

                        <hr class="mt10 mb10"><!-- horizontal line -->
                        
                        <!-- panel body -->
                        <div class="panel-body np">
                            <!-- message list -->
                            <div class="media-list">
                                <a href="" class="media">
                                    <span class="pull-left">
                                        <img src="/image/avatar/avatar6.jpg" class="media-object img-circle" alt="" width="50px" height="50px;">
                                    </span>
                                    <span class="media-body">
                                        <span class="media-heading">Arthur Abbott</span>
                                        <span class="media-text ellipsis nm">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</span>
                                        <!-- meta icon -->
                                        <span class="media-meta"><i class="ico-star6"></i></span>
                                        <span class="media-meta"><i class="ico-attachment"></i></span>
                                        <span class="media-meta pull-right">2m</span>
                                        <!--/ meta icon -->
                                    </span>
                                </a>

                                <a href="" class="media read">
                                    <span class="pull-left">
                                        <img src="/image/avatar/avatar1.jpg" class="media-object img-circle" alt="" width="50px" height="50px;">
                                    </span>
                                    <span class="media-body">
                                        <span class="media-heading">Martina Poole</span>
                                        <span class="media-text ellipsis nm">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</span>
                                        <!-- meta icon -->
                                        <span class="media-meta"><i class="ico-reply"></i></span>
                                        <span class="media-meta"><i class="ico-attachment"></i></span>
                                        <span class="media-meta pull-right">20m</span>
                                        <!--/ meta icon -->
                                    </span>
                                </a>

                                <a href="" class="media">
                                    <span class="pull-left">
                                        <img src="/image/avatar/avatar2.jpg" class="media-object img-circle" alt="" width="50px" height="50px;">
                                    </span>
                                    <span class="media-body">
                                        <span class="media-heading">Elvis Christensen</span>
                                        <span class="media-text ellipsis nm">Duis aute irure dolor in reprehenderit in voluptate velit esse.</span>
                                        <!-- meta icon -->
                                        <span class="media-meta"><i class="ico-attachment"></i></span>
                                        <span class="media-meta pull-right">5h</span>
                                        <!--/ meta icon -->
                                    </span>
                                </a>

                                <a href="" class="media read">
                                    <span class="pull-left">
                                        <img src="/image/avatar/avatar3.jpg" class="media-object img-circle" alt="" width="50px" height="50px;">
                                    </span>
                                    <span class="media-body">
                                        <span class="media-heading">Walter Foster</span>
                                        <span class="media-text ellipsis nm">Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</span>
                                        <!-- meta icon -->
                                        <span class="media-meta"><i class="ico-attachment"></i></span>
                                        <span class="media-meta pull-right">21h</span>
                                        <!--/ meta icon -->
                                    </span>
                                </a>

                                <a href="" class="media read">
                                    <span class="pull-left">
                                        <img src="/image/avatar/avatar4.jpg" class="media-object img-circle" alt="" width="50px" height="50px;">
                                    </span>
                                    <span class="media-body">
                                        <span class="media-heading">Callum Santosr</span>
                                        <span class="media-text ellipsis nm">Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</span>
                                        <!-- meta icon -->
                                        <span class="media-meta pull-right">1d</span>
                                        <!--/ meta icon -->
                                    </span>
                                </a>

                                <a href="" class="media read">
                                    <span class="pull-left">
                                        <img src="/image/avatar/avatar5.jpg" class="media-object img-circle" alt="" width="50px" height="50px;">
                                    </span>
                                    <span class="media-body">
                                        <span class="media-heading">Noelani Blevins</span>
                                        <span class="media-text ellipsis nm">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis.</span>
                                        <!-- meta icon -->
                                        <span class="media-meta pull-right">2d</span>
                                        <!--/ meta icon -->
                                    </span>
                                </a>

                                <a href="" class="media read">
                                    <span class="pull-left">
                                        <img src="/image/avatar/avatar8.jpg" class="media-object img-circle" alt="" width="50px" height="50px;">
                                    </span>
                                    <span class="media-body">
                                        <span class="media-heading">Carl Johnson</span>
                                        <span class="media-text ellipsis nm">Curabitur consequat, lectus sit amet luctus vulputate, nisi sem</span>
                                        <!-- meta icon -->
                                        <span class="media-meta"><i class="ico-attachment"></i></span>
                                        <span class="media-meta pull-right">2w</span>
                                        <!--/ meta icon -->
                                    </span>
                                </a>

                                <a href="" class="media read">
                                    <span class="pull-left">
                                        <img src="/image/avatar/avatar9.jpg" class="media-object img-circle" alt="" width="50px" height="50px;">
                                    </span>
                                    <span class="media-body">
                                        <span class="media-heading">Tamara Moon</span>
                                        <span class="media-text ellipsis nm">Aliquam ultrices iaculis odio. Nam interdum enim non nisi. Aenean eget metus.</span>
                                        <!-- meta icon -->
                                        <span class="media-meta"><i class="ico-attachment"></i></span>
                                        <span class="media-meta pull-right">2w</span>
                                        <!--/ meta icon -->
                                    </span>
                                </a>
                            </div>
                            <!-- message list -->
                        </div>
                        <!--/ panel body -->
                    </div>
                    <!--/ message list -->

                    <!-- message content -->
                    <div class="col-lg-8 valign-top panel panel-default">
                        <!-- panel heading -->
                        <div class="panel-heading">
                            <h5 class="panel-title"><i class="ico-star6 text-warning mr5"></i> Arthur Abbott</h5>
                            <!-- panel toolbar -->
                            <div class="panel-toolbar text-right">
                                <div class="btn-group hidden-xs">
                                    <button type="button" class="btn btn-sm btn-default"><i class="ico-folder"></i></button>
                                    <button type="button" class="btn btn-sm btn-default dropdown-toggle" data-toggle="dropdown">
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
                                    <button type="button" class="btn btn-sm btn-default"><i class="ico-archive2"></i></button>
                                    <button type="button" class="btn btn-sm btn-default"><i class="ico-warning2"></i></button>
                                    <button type="button" class="btn btn-sm btn-default"><i class="ico-remove2"></i></button>
                                </div>
                            </div>
                            <!--/ panel toolbar -->
                        </div>
                        <!--/ panel heading -->

                        <!-- panel body -->
                        <div class="panel-body">
                            <!-- message list -->
                            <ul class="media-list media-list-bubble">
                                <li class="media media-right">
                                    <a href="javascript:void(0);" class="media-object">
                                        <img src="/image/avatar/avatar7.jpg" class="img-circle" alt="">
                                    </a>
                                    <div class="media-body">
                                        <p class="media-text">eros non enim commodo hendrerit.</p>
                                        <span class="clearfix"></span>
                                        <p class="media-text">Suspendisse dui.</p>
                                        <span class="clearfix"></span>
                                        <p class="media-text">eu nulla at</p>
                                        <!-- meta -->
                                        <span class="clearfix"></span><!-- important: clearing floated media text -->
                                        <p class="media-meta">Sun, Mar 02</p>
                                    </div>
                                </li>
                                <li class="media">
                                    <a href="javascript:void(0);" class="media-object">
                                        <img src="/image/avatar/avatar6.jpg" class="img-circle" alt="">
                                    </a>
                                    <div class="media-body">
                                        <p class="media-text">Etiam laoreet, libero et tristique pellentesque, tellus sem mollis dui, in sodales elit erat.</p>
                                        <span class="clearfix"></span>
                                        <p class="media-text">faucibus ut, nulla. Cras eu tellus</p>
                                        <!-- meta -->
                                        <span class="clearfix"></span><!-- important: clearing floated media text -->
                                        <p class="media-meta">Tue, Oct 01</p>
                                    </div>
                                </li>
                                <li class="media media-right">
                                    <a href="javascript:void(0);" class="media-object">
                                        <img src="/image/avatar/avatar7.jpg" class="img-circle" alt="">
                                    </a>
                                    <div class="media-body">
                                        <p class="media-text">Duis a mi fringilla mi lacinia mattis. Integer</p>
                                        <!-- meta -->
                                        <span class="clearfix"></span><!-- important: clearing floated media text -->
                                        <p class="media-meta">Fri, Sep 27</p>
                                    </div>
                                </li>
                                <li class="media">
                                    <a href="javascript:void(0);" class="media-object">
                                        <img src="/image/avatar/avatar6.jpg" class="img-circle" alt="">
                                    </a>
                                    <div class="media-body">
                                        <p class="media-text">Praesent interdum ligula eu enim. Etiam imperdiet dictum magna.</p>
                                        <!-- meta -->
                                        <span class="clearfix"></span><!-- important: clearing floated media text -->
                                        <p class="media-meta">Wed, Aug 28</p>
                                    </div>
                                </li>
                                <li class="media media-right">
                                    <a href="javascript:void(0);" class="media-object">
                                        <img src="/image/avatar/avatar7.jpg" class="img-circle" alt="">
                                    </a>
                                    <div class="media-body">
                                        <p class="media-text">Aliquam rutrum lorem ac risus. Morbi metus. Vivamus euismod urna.</p>
                                        <!-- meta -->
                                        <span class="clearfix"></span><!-- important: clearing floated media text -->
                                        <p class="media-meta">Sat, Sep 27</p>
                                    </div>
                                </li>
                                <li class="media">
                                    <a href="javascript:void(0);" class="media-object">
                                        <img src="/image/avatar/avatar6.jpg" class="img-circle" alt="">
                                    </a>
                                    <div class="media-body">
                                        <p class="media-text">Vestibulum accumsan neque et nunc. Quisque ornare tortor at risus. Nunc ac</p>
                                        <span class="clearfix"></span>
                                        <p class="media-text">Nam porttitor scelerisque neque</p>
                                        <!-- meta -->
                                        <span class="clearfix"></span><!-- important: clearing floated media text -->
                                        <p class="media-meta">Sun, Feb 22</p>
                                    </div>
                                </li>
                            </ul>
                            <!--/ message list -->
                        </div>
                        <!-- panel body -->

                        <!-- panel footer -->
                        <div class="panel-footer">
                            <div class="panel-toolbar-wrapper">
                                <div class="panel-toolbar">
                                    <div class="input-group" style="width:100%;">
                                        <input type="text" class="form-control" placeholder="Type your message">
                                        <span class="input-group-btn">
                                            <button class="btn btn-primary" type="button"><i class="ico-paper-plane"></i> <span class="semibold">Send</span></button>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <hr class="mt10 mb10"><!-- horizontal line -->
                            <div class="panel-toolbar-wrapper">
                                <div class="panel-toolbar">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-default"><i class="ico-google-drive"></i></button>
                                        <button type="button" class="btn btn-default"><i class="ico-instagram"></i></button>
                                    </div>
                                </div>
                                <div class="panel-toolbar text-right">
                                    <a href="javascript:void(0);" class="btn btn-default"><i class="ico-attachment"></i> Attach files</a>
                                </div>
                            </div>
                        </div>
                        <!-- panel footer -->
                    </div>
                    <!--/ message content -->
                </div>
                <!--/ END Table layout -->

                <!-- START Modal compose message -->
                <div id="ModalComposeMessage" class="modal fade">
                    <div class="modal-dialog">
                        <form class="modal-content" action="" parsley-validate>
                            <div class="modal-header text-center">
                                <button type="button" class="close" data-dismiss="modal">×</button>
                                <div class="ico-bubbles mb15 mt15" style="font-size:36px;"></div>
                                <h4 class="semibold modal-title text-primary">Compose message</h4>
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
                                            <textarea name="message" class="form-control" rows="4" placeholder="Message"></textarea>
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
        <script type="text/javascript" src="/plugins/shuffle/js/jquery.shuffle.js"></script>
        <script type="text/javascript" src="/plugins/selectize/js/selectize.js"></script>
        <script type="text/javascript" src="/plugins/gritter/js/jquery.gritter.js"></script>
        <script type="text/javascript" src="/js/backend/pages/message.js"></script>
        <!--/ Plugins and page level script : optional -->
        <!--/ END JAVASCRIPT SECTION -->
    </body>
    <!--/ END Body -->
</html>