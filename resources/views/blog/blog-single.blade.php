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
                        <h4 class="title semibold">Blog single</h4>
                    </div>
                    <div class="page-header-section">
                        <!-- Toolbar -->
                        <div class="toolbar">
                            <ol class="breadcrumb breadcrumb-transparent nm">
                                <li><a href="#">Miscelleneous</a></li>
                                <li class="active">Blog single</li>
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
                        <!-- Blog post #1 -->
                        <article class="panel overflow-hidden">
                            <!-- Owl Carousel -->
                            <header id="carousel1" class="owl-carousel">
                                <div class="image"><img src="/image/background/blog/blog4.jpg"></div>
                                <div class="image"><img src="/image/background/blog/blog3.jpg"></div>
                                <div class="image"><img src="/image/background/blog/blog5.jpg"></div>
                            </header>
                            <!--/ Owl Carousel -->

                            <!-- Content -->
                            <section class="panel-body">
                                <div class="row">
                                    <!-- post date -->
                                    <div class="col-xs-3 col-sm-1 col-md-1 pr0">
                                        <div class="panel widget">
                                            <div class="pa10">
                                                <h4 class="bold nm text-primary text-center">28</h4>
                                            </div>
                                            <hr class="nm">
                                            <div class="pa10 bgcolor-default">
                                                <p class="semibold nm text-default text-center">Oct</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!--/ post date -->

                                    <!-- post content -->
                                    <div class="col-xs-9 col-sm-11 col-md-11">
                                        <!-- heading -->
                                        <h4 class="mt0"><a href="javascript:void(0);" class="text-primary">Pellentesque tincidunt tempus risus. Donec egestas. Duis ac</a></h4>
                                        <!--/ heading -->

                                        <!-- text -->
                                        <div class="text-default">
                                            <p>Lorem ipsum dolor sit amet, ex tritani mandamus mea. Numquam saperet labores in quo, et nam animal fuisset. Id eum mutat impedit, ei sumo dicat accusata eam. Quo no debet omnes probatus. Sit alienum deleniti insolens cu, ut sed utinam ubique iracundia. Cum sanctus corpora ponderum ea, te mei alii cetero, ea tollit docendi reprimique pri. Essent torquatos an eam.</p>
                                            <p>Ex duo vidit solum, equidem copiosae te pro. Elitr iisque pro ut, ut pro phaedrum theophrastus. At mea novum detraxit, ea nam tation tractatos. In eos errem minimum moderatius. Fugit soleat efficiendi ut mei, paulo abhorreant ex mea. Rebum volutpat mea ne.</p>
                                            <p>Duo eius illud laboramus ea, deleniti intellegam pro ex. Impedit signiferumque mei id, vim fugit suscipit intellegat ut. Quod epicuri qui cu, est ex omittam intellegam. Mei augue sententiae definitionem ad.</p>
                                            <p>Constituto mnesarchum mea at, quaestio efficiantur ad ius, eum scripserit mediocritatem ad. An pri essent impedit. Vis everti splendide an, munere dolorem ei pro, est in perpetua explicari percipitur. Vis te vitae accumsan repudiare, per habeo atomorum ad, et facer liberavisse sit.</p>
                                            <p>Ex etiam laoreet explicari sea, propriae intellegam te pro, sit no vide eius. Per possim suscipiantur an. Eam lorem mediocrem consectetuer eu, utinam dictas salutatus et eos, nec nulla vivendo et. Fugit placerat pro id, pri facilis periculis evertitur ne.</p>
                                        </div>
                                        <!--/ text -->

                                        <!-- meta -->
                                        <p class="meta mt15 mb0">
                                            <a href="javascript:void(0);">6 comment</a><!-- comments -->
                                            <span class="text-muted mr5 ml5">&#8226;</span>
                                            <span class="text-muted">In </span><a href="javascript:void(0);">Nature</a><!-- category -->
                                            <span class="text-muted mr5 ml5">&#8226;</span>
                                            <span class="text-muted">By </span><a href="javascript:void(0);">Colt Jenkins</a><!-- author -->
                                        </p>
                                        <!--/ meta -->
                                    </div>
                                    <!--/ post content -->
                                </div>
                            </section>
                            <!--/ Content -->

                            <!-- Author bio -->
                            <section class="panel-body">
                                <h4 class="mt0 mb15 text-primary">About the author</h4>
                                <div class="well mb0">
                                    <ul class="list-table">
                                        <li style="width:80px;">
                                            <img class="img-circle" src="/image/avatar/avatar4.jpg" alt="" width="70px" height="70px">
                                        </li>
                                        <li class="text-left">
                                            <h5 class="semibold mt0 text-accent">Colt Jenkins</h5>
                                            <p class="text-muted nm">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Pellentesque adipiscing, neque ut pulvinar tincidunt, est sem euismod odio, eu ullamcorper turpis nisl sit amet velit.</p>
                                        </li>
                                    </ul>
                                </div>
                            </section>
                            <!--/ Author bio -->

                            <!-- Comments -->
                            <section class="panel-body">
                                <h4 class="mt0 mb15 text-primary">Comments (6)</h4>
                                <div class="media-list media-list-bubble">
                                    <div class="media">
                                        <a href="javascript:void(0);" class="media-object pull-left">
                                            <img src="/image/avatar/avatar1.jpg" class="img-circle" alt="">
                                        </a>
                                        <div class="media-body">
                                            <div class="media-text">
                                                <h5 class="semibold mt0 mb5 text-default">Erica Jacobson</h5>
                                                <p class="mb5">Lorem ipsum dolor sit amet, eu vide nusquam sed, sit et vitae vocent. At est possit numquam percipit. Vidisse aliquip comprehensam pro cu, vim ex dolore docendi.</p>
                                                <!-- meta icon -->
                                                <p class="mb0">
                                                    <span class="media-meta">Aug 26, 2013</span>
                                                    <span class="mr5 ml5 text-muted">&#8226;</span>
                                                    <a href="javascript:void(0);" class="media-meta text-default" data-toggle="tooltip" title="Reply"><i class="ico-reply"></i></a>
                                                </p>
                                                <!--/ meta icon -->
                                            </div>

                                            <!-- nested #1 -->
                                            <div class="media">
                                                <a href="javascript:void(0);" class="media-object pull-left">
                                                    <img src="/image/avatar/avatar4.jpg" class="img-circle" alt="">
                                                </a>
                                                <div class="media-body">
                                                    <div class="media-text">
                                                        <h5 class="semibold mt0 mb5 text-accent">Colt Jenkins</h5>
                                                        <p class="mb5">Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Proin vel arcu eu odio tristique pharetra. Quisque ac libero nec ligula consectetuer rhoncus.</p>
                                                        <!-- meta icon -->
                                                        <p class="mt5 mb0">
                                                            <span class="media-meta">Mar 23, 2014</span>
                                                            <span class="mr5 ml5 text-muted">&#8226;</span>
                                                            <a href="javascript:void(0);" class="media-meta text-default" data-toggle="tooltip" title="Reply"><i class="ico-reply"></i></a>
                                                        </p>
                                                        <!--/ meta icon -->
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- nested #1 -->

                                            <!-- nested #2 -->
                                            <div class="media">
                                                <a href="javascript:void(0);" class="media-object pull-left">
                                                    <img src="/image/avatar/avatar9.jpg" class="img-circle" alt="">
                                                </a>
                                                <div class="media-body">
                                                    <div class="media-text">
                                                        <h5 class="semibold mt0 mb5 text-default">Tamara Moon</h5>
                                                        <p class="mb5">Aenean euismod mauris eu elit. Nulla facilisi. Sed neque. Sed eget lacus. Mauris non dui nec urna suscipit nonummy.</p>
                                                        <!-- meta icon -->
                                                        <p class="mt5 mb0">
                                                            <span class="media-meta">Apr 10, 2014</span>
                                                            <span class="mr5 ml5 text-muted">&#8226;</span>
                                                            <a href="javascript:void(0);" class="media-meta text-default" data-toggle="tooltip" title="Reply"><i class="ico-reply"></i></a>
                                                        </p>
                                                        <!--/ meta icon -->
                                                    </div>

                                                    <!-- nested #2-1 -->
                                                    <div class="media">
                                                        <a href="javascript:void(0);" class="media-object pull-left">
                                                            <img src="/image/avatar/avatar3.jpg" class="img-circle" alt="">
                                                        </a>
                                                        <div class="media-body">
                                                            <div class="media-text">
                                                                <h5 class="semibold mt0 mb5 text-default">Oscar Daniels</h5>
                                                                <p class="mb5">Duis gravida. Praesent eu nulla at sem molestie sodales. Mauris blandit enim consequat purus. Maecenas libero est, congue a, aliquet vel, vulputate eu, odio.</p>
                                                                <!-- meta icon -->
                                                                <p class="mt5 mb0">
                                                                    <span class="media-meta">Apr 8, 2014</span>
                                                                    <span class="mr5 ml5 text-muted">&#8226;</span>
                                                                    <a href="javascript:void(0);" class="media-meta text-default" data-toggle="tooltip" title="Reply"><i class="ico-reply"></i></a>
                                                                </p>
                                                                <!--/ meta icon -->
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- nested #2-1 -->
                                                </div>
                                            </div>
                                            <!-- nested #2 -->
                                        </div>
                                    </div>

                                    <div class="media">
                                        <a href="javascript:void(0);" class="media-object pull-left">
                                            <img src="/image/avatar/avatar4.jpg" class="img-circle" alt="">
                                        </a>
                                        <div class="media-body">
                                            <div class="media-text">
                                                <h5 class="semibold mt0 mb5 text-accent">Colt Jenkins</h5>
                                                <p class="mb5">Aliquam fringilla cursus purus. Nullam scelerisque neque sed sem egestas blandit. Nam nulla magna, malesuada vel, convallis in, cursus et, eros.</p>
                                                <!-- meta icon -->
                                                <p class="mt5 mb0">
                                                    <span class="media-meta">Nov 11, 2014</span>
                                                    <span class="mr5 ml5 text-muted">&#8226;</span>
                                                    <a href="javascript:void(0);" class="media-meta text-default" data-toggle="tooltip" title="Reply"><i class="ico-reply"></i></a>
                                                </p>
                                                <!--/ meta icon -->
                                            </div>
                                        </div>
                                    </div>

                                    <div class="media">
                                        <a href="javascript:void(0);" class="media-object pull-left">
                                            <img src="/image/avatar/avatar5.jpg" class="img-circle" alt="">
                                        </a>
                                        <div class="media-body">
                                            <div class="media-text">
                                                <h5 class="semibold mt0 mb5 text-default">Hermione Mayo</h5>
                                                <p class="mb5">Donec est mauris, rhoncus id, mollis nec, cursus a, enim. Suspendisse aliquet, sem ut cursus luctus, ipsum leo elementum sem, vitae aliquam eros turpis non enim. Mauris quis turpis</p>
                                                <!-- meta icon -->
                                                <p class="mt5 mb0">
                                                    <span class="media-meta">Aug 2, 2014</span>
                                                    <span class="mr5 ml5 text-muted">&#8226;</span>
                                                    <a href="javascript:void(0);" class="media-meta text-default" data-toggle="tooltip" title="Reply"><i class="ico-reply"></i></a>
                                                </p>
                                                <!--/ meta icon -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <!-- Comments -->

                            <!-- Post Comments -->
                            <section class="panel-footer pb0">
                                <h4 class="mt0 mb15 text-primary">Post your comment</h4>
                                <!-- form -->
                                <form class="form-horizontal">
                                    <div class="form-group message-container">
                                        <div class="alert alert-info">
                                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                            <h4 class="mt0 mb5 semibold">Info</h4>
                                            <p class="nm">Please do not spam. Any spamming activity will not be tolerate.</p>
                                        </div>
                                    </div><!-- will be use as done/fail message container -->
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Name <span class="text-danger">*</span></label>
                                        <div class="col-sm-9">
                                            <input type="text" name="name" class="form-control" data-parsley-required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Email <span class="text-danger">*</span></label>
                                        <div class="col-sm-9">
                                            <input type="email" name="email" class="form-control" data-parsley-required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Website</label>
                                        <div class="col-sm-9">
                                            <input type="email" name="website" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Your comment</label>
                                        <div class="col-sm-9">
                                            <textarea class="form-control" rows="6" name="comment"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <button type="reset" class="btn btn-default">Reset</button>
                                            <button type="submit" class="btn btn-success"><span class="ladda-label">Submit</span></button>
                                        </div>
                                    </div>
                                </form>
                                <!-- form -->
                            </section>
                            <!--/ Post Comments -->
                        </article>
                        <!--/ Blog post #1 -->
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