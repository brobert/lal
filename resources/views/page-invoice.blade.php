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
                        <h4 class="title semibold">Invoice</h4>
                    </div>
                    <div class="page-header-section">
                        <!-- Toolbar -->
                        <div class="toolbar">
                            <a href="page-invoice-printable.html" target="_new" class="btn btn-primary"><i class="ico-print3"></i> Print</a>
                            &nbsp;<span class="text-muted semibold">or</span>&nbsp;
                            <div class="btn-group">
                                <button type="button" class="btn btn-default"><i class="ico-screwdriver2"></i></button>
                                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button>
                                <ul class="dropdown-menu dropdown-menu-right" role="menu">
                                    <li><a href="javascript:void(0);">Send</a></li>
                                    <li><a href="javascript:void(0);">Save</a></li>
                                    <li><a href="javascript:void(0);">Forward</a></li>
                                </ul>
                            </div>
                        </div>
                        <!--/ Toolbar -->
                    </div>
                </div>
                <!-- Page Header -->

                <!-- START row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="table-layout">
                            <!-- Left / Bottom Side -->
                            <div class="col-lg-12 panel">
                                <!-- panel body -->
                                <div class="panel-body text-right">
                                    <h4 class="semibold nm">John Doe</h4>
                                    <p class="text-muted nm">ABCD Incorporated</p>
                                    <p class="text-muted nm">France</p>
                                </div>
                                <!-- panel body -->
                                <hr class="nm">
                                <!-- panel body -->
                                <div class="panel-body">
                                    <ul class="list-table">
                                        <li class="text-left">
                                            <h4 class="semibold nm">Invoice / December Period</h4>
                                            <p class="semibold text-muted nm">December 22nd, 2014 - October 8th, 2014</p>
                                        </li>
                                        <li class="text-right">
                                            <p class="semibold text-primary nm">Invoice ID : #541141</p>
                                        </li>
                                    </ul>
                                </div>
                                <!-- panel body -->
                                <!-- panel table -->
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th width="5%"></th>
                                                <th>Task Description</th>
                                                <th width="15%" class="text-center">Rate</th>
                                                <th width="15%" class="text-center">Hours</th>
                                                <th width="15%" class="text-center">Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="valign-top text-center">1.</td>
                                                <td>
                                                    <h5 class="semibold mt0 mb5">Website design &amp; development</h5>
                                                    <span class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua..</span>
                                                </td>
                                                <td class="valign-top text-center"><span class="bold">$50</span></td>
                                                <td class="valign-top text-center"><span class="bold">50</span></td>
                                                <td class="valign-top text-center"><span class="text-primary bold">$1500</span></td>
                                            </tr>
                                            <tr>
                                                <td class="valign-top text-center">2.</td>
                                                <td>
                                                    <h5 class="semibold mt0 mb5">Branding</h5>
                                                    <span class="text-muted">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</span>
                                                </td>
                                                <td class="valign-top text-center"><span class="bold">$50</span></td>
                                                <td class="valign-top text-center"><span class="bold">20</span></td>
                                                <td class="valign-top text-center"><span class="text-primary bold">$1000</span></td>
                                            </tr>
                                            <tr>
                                                <td class="valign-top text-center">3.</td>
                                                <td>
                                                    <h5 class="semibold mt0 mb5">Surfboard design</h5>
                                                    <span class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua..</span>
                                                </td>
                                                <td class="valign-top text-center"><span class="bold">$60</span></td>
                                                <td class="valign-top text-center"><span class="bold">100</span></td>
                                                <td class="valign-top text-center"><span class="text-primary bold">$6000</span></td>
                                            </tr>
                                            <tr>
                                                <td class="valign-top text-center">4.</td>
                                                <td>
                                                    <h5 class="semibold mt0 mb5">Print design</h5>
                                                    <span class="text-muted">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</span>
                                                </td>
                                                <td class="valign-top text-center"><span class="bold">$20</span></td>
                                                <td class="valign-top text-center"><span class="bold">20</span></td>
                                                <td class="valign-top text-center"><span class="text-primary bold">$40</span></td>
                                            </tr>
                                            <tr>
                                                <td class="valign-top text-center">5.</td>
                                                <td>
                                                    <h5 class="semibold mt0 mb5">Marketing setup / coaching</h5>
                                                    <span class="text-muted">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span>
                                                </td>
                                                <td class="valign-top text-center"><span class="bold">$80</span></td>
                                                <td class="valign-top text-center"><span class="bold">20</span></td>
                                                <td class="valign-top text-center"><span class="text-primary bold">$1600</span></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!--/ panel table -->
                                <!-- panel footer -->
                                <div class="panel-footer">
                                    <ul class="list-table pa10">
                                        <li>
                                            <h5 class="semibold nm">SUB TOTAL</h5>
                                        </li>
                                        <li class="text-right">
                                            <h3 class="semibold nm">$10,140.00</h3>
                                        </li>
                                    </ul>
                                </div>
                                <!-- panel footer -->
                                <!-- panel footer -->
                                <div class="panel-footer">
                                    <ul class="list-table pa10">
                                        <li>
                                            <h5 class="semibold nm">TAXES &amp; FEES</h5>
                                        </li>
                                        <li class="text-right">
                                            <h3 class="semibold nm">$60.00</h3>
                                        </li>
                                    </ul>
                                </div>
                                <!-- panel footer -->
                                <!-- panel footer -->
                                <div class="panel-footer">
                                    <ul class="list-table pa10">
                                        <li>
                                            <h5 class="semibold nm">TOTAL PAYABLE</h5>
                                        </li>
                                        <li class="text-right">
                                            <h3 class="semibold nm text-success">$10,200.00</h3>
                                        </li>
                                    </ul>
                                </div>
                                <!-- panel footer -->
                            </div>
                            <!--/ Left / Bottom Side -->
                        </div>
                    </div>
                </div>
                <!--/ END row -->

                <hr><!-- horizontal line -->

                <!-- START row -->
                <div class="row">
                    <div class="col-lg-12">
                        <p class="text-muted text-center mb0"><strong>Note: </strong> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua.</p>
                        <p class="text-center"><a href="#" class="text-center">www.site.com</a></p>
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