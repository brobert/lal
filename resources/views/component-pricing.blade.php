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
                        <h4 class="title semibold">Pricing table / box</h4>
                    </div>
                    <div class="page-header-section">
                        <!-- Toolbar -->
                        <div class="toolbar">
                            <ol class="breadcrumb breadcrumb-transparent nm">
                                <li><a href="javascript:void(0);">Component</a></li>
                                <li class="active">Pricing table</li>
                            </ol>
                        </div>
                        <!--/ Toolbar -->
                    </div>
                </div>
                <!-- Page Header -->

                <!-- section header -->
                <div class="section-header">
                    <h5 class="semibold title mb15">Using panel components</h5>
                </div>
                <!--/ section header -->

                <!-- START row -->
                <div class="row">
                    <div class="col-md-3">
                        <!-- START Panel pricing -->
                        <div class="panel panel-default">
                            <!-- panel heading -->
                            <div class="panel-heading text-center pa15" style="min-height:150px;">
                                <h4 class="semibold mt0">
                                    Australian Mist<br/>
                                    <small>Spotted and Classic tabby</small>
                                </h4>
                            </div>
                            <!-- panel heading -->
                            <!-- panel body -->
                            <div class="panel-body text-center" style="margin-top:-50px;">
                                <img class="img-circle img-bordered" src="/image/avatar/cat1.jpg" alt="" width="75px" height="75px">
                                <h2 class="text-center text-success semibold mb0">$29.99</h2>
                                <p class="text-muted bold mb15">PER CAT</p>
                            </div>
                            <!--/ panel body -->
                            <!-- table -->
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td width="20%" align="right"><i class="ico-checkmark3 text-success"></i></td>
                                        <td>Crossbreed origin</td>
                                    </tr>
                                    <tr>
                                        <td width="20%" align="right"><i class="ico-checkmark3 text-success"></i></td>
                                        <td>Moderate body type</td>
                                    </tr>
                                    <tr>
                                        <td width="20%" align="right"><i class="ico-checkmark3 text-success"></i></td>
                                        <td><strong>Short coat</strong></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2" align="center"><button class="btn btn-default">Order Now</button></td>
                                    </tr>
                                </tbody>
                            </table>
                            <!--/ table -->
                        </div>
                        <!--/ END Panel pricing -->
                    </div>
                    <div class="col-md-3">
                        <!-- START Panel pricing -->
                        <div class="panel panel-default">
                            <!-- panel heading -->
                            <div class="panel-heading text-center pa15" style="min-height:150px;">
                                <h4 class="semibold mt0">
                                    Don Sphynx<br/>
                                    <small>Hairless cat breed</small>
                                </h4>
                            </div>
                            <!-- panel heading -->
                            <!-- panel body -->
                            <div class="panel-body text-center" style="margin-top:-50px;">
                                <img class="img-circle img-bordered" src="/image/avatar/cat2.jpg" alt="" width="75px" height="75px">
                                <h2 class="text-center text-success semibold mb0">$49.00</h2>
                                <p class="text-muted bold mb15">PER CAT</p>
                            </div>
                            <!--/ panel body -->
                            <!-- table -->
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td width="20%" align="right"><i class="ico-checkmark3 text-success"></i></td>
                                        <td>Crossbread origin</td>
                                    </tr>
                                    <tr>
                                        <td width="20%" align="right"><i class="ico-checkmark3 text-success"></i></td>
                                        <td>Hairless / Furry down</td>
                                    </tr>
                                    <tr>
                                        <td width="20%" align="right"><i class="ico-checkmark3 text-success"></i></td>
                                        <td><strong>Short coat</strong></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2" align="center"><button class="btn btn-default">Order Now</button></td>
                                    </tr>
                                </tbody>
                            </table>
                            <!--/ table -->
                        </div>
                        <!--/ END Panel pricing -->
                    </div>
                    <div class="col-md-3">
                        <!-- START Panel pricing -->
                        <div class="panel panel-primary">
                            <!-- panel heading -->
                            <div class="panel-heading text-center pa15" style="min-height:150px;">
                                <h4 class="semibold mt0">
                                    Aegean cat<br/>
                                    <small>Naturally occurring landrace</small>
                                </h4>
                            </div>
                            <!-- panel heading -->
                            <!-- panel body -->
                            <div class="panel-body text-center" style="margin-top:-50px;">
                                <img class="img-circle img-bordered-primary" src="/image/avatar/cat3.jpg" alt="" width="75px" height="75px">
                                <h2 class="text-center text-primary semibold mb0">$69.00</h2>
                                <p class="text-muted bold mb15">PER CAT</p>
                            </div>
                            <!--/ panel body -->
                            <!-- table -->
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td width="20%" align="right"><i class="ico-checkmark3 text-success"></i></td>
                                        <td>Natural / Standard origin</td>
                                    </tr>
                                    <tr>
                                        <td width="20%" align="right"><i class="ico-checkmark3 text-success"></i></td>
                                        <td>Bi- or tri-colored</td>
                                    </tr>
                                    <tr>
                                        <td width="20%" align="right"><i class="ico-checkmark3 text-success"></i></td>
                                        <td><strong>Semi-long coat</strong></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2" align="center"><button class="btn btn-primary">Order Now</button></td>
                                    </tr>
                                </tbody>
                            </table>
                            <!--/ table -->
                        </div>
                        <!--/ END Panel pricing -->
                    </div>
                    <div class="col-md-3">
                        <!-- START Panel pricing -->
                        <div class="panel panel-default">
                            <!-- panel heading -->
                            <div class="panel-heading text-center pa15" style="min-height:150px;">
                                <h4 class="semibold mt0">
                                    Birman<br/>
                                    <small>Sacred Cat of Burma</small>
                                </h4>
                            </div>
                            <!-- panel heading -->
                            <!-- panel body -->
                            <div class="panel-body text-center" style="margin-top:-50px;">
                                <img class="img-circle img-bordered" src="/image/avatar/cat4.jpg" alt="" width="75px" height="75px">
                                <h2 class="text-center text-success semibold mb0">$99.99</h2>
                                <p class="text-muted bold mb15">PER CAT</p>
                            </div>
                            <!--/ panel body -->
                            <!-- table -->
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td width="20%" align="right"><i class="ico-checkmark3 text-success"></i></td>
                                        <td>Natural origin</td>
                                    </tr>
                                    <tr>
                                        <td width="20%" align="right"><i class="ico-checkmark3 text-success"></i></td>
                                        <td>Semi long coat</td>
                                    </tr>
                                    <tr>
                                        <td width="20%" align="right"><i class="ico-checkmark3 text-success"></i></td>
                                        <td><strong>Colourpoint</strong></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2" align="center"><button class="btn btn-default">Order Now</button></td>
                                    </tr>
                                </tbody>
                            </table>
                            <!--/ table -->
                        </div>
                        <!--/ END Panel pricing -->
                    </div>
                </div>
                <!--/ END row -->

                <!-- START Table layout -->
                <div class="table-layout">
                    <!-- START Panel pricing -->
                    <div class="col-md-3 panel valign-top">
                        <!-- panel heading -->
                        <div class="panel-heading text-center pa15">
                            <h4 class="semibold mt0">
                                BASIC<br/>
                                <small>Great for startups</small>
                            </h4>
                        </div>
                        <!-- panel heading -->
                        <!-- panel body -->
                        <div class="panel-body text-center">
                            <h2 class="bold text-muted nm">$159</h2>
                            <p class="bold text-muted nm">MONTHLY</p>
                        </div>
                        <!--/ panel body -->
                        <!-- table -->
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td class="text-center"><i class="ico-alarm2 mr5"></i> 24 Hour support</td>
                                </tr>
                                <tr>
                                    <td class="text-center"><i class="ico-equalizer mr5"></i> Advance configurations</td>
                                </tr>
                                <tr>
                                    <td class="text-center"><i class="ico-database mr5"></i> <strong>5 MySQL Database</strong></td>
                                </tr>
                                <tr>
                                    <td class="text-center"><i class="ico-power mr5"></i> <strong>1 GB Bandwidth</strong></td>
                                </tr>
                                <tr>
                                    <td class="text-center"><button class="btn btn-success">Get It Now</button></td>
                                </tr>
                            </tbody>
                        </table>
                        <!--/ table -->
                    </div>
                    <!--/ END Panel pricing -->
                    <!-- START Panel pricing -->
                    <div class="col-md-3 panel valign-top">
                        <!-- panel heading -->
                        <div class="panel-heading text-center pa15">
                            <h4 class="semibold mt0">
                                DELUXE<br/>
                                <small>Great for small business</small>
                            </h4>
                        </div>
                        <!-- panel heading -->
                        <!-- panel body -->
                        <div class="panel-body text-center">
                            <h2 class="bold text-muted nm">$199</h2>
                            <p class="bold text-muted nm">MONTHLY</p>
                        </div>
                        <!--/ panel body -->
                        <!-- table -->
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td class="text-center"><i class="ico-alarm2 mr5"></i> 24 Hour support</td>
                                </tr>
                                <tr>
                                    <td class="text-center"><i class="ico-equalizer mr5"></i> Advance configurations</td>
                                </tr>
                                <tr>
                                    <td class="text-center"><i class="ico-database mr5"></i> <strong>10 MySQL Database</strong></td>
                                </tr>
                                <tr>
                                    <td class="text-center"><i class="ico-power mr5"></i> <strong>10 GB Bandwidth</strong></td>
                                </tr>
                                <tr>
                                    <td class="text-center"><button class="btn btn-success">Get It Now</button></td>
                                </tr>
                            </tbody>
                        </table>
                        <!--/ table -->
                    </div>
                    <!--/ END Panel pricing -->
                    <!-- START Panel pricing -->
                    <div class="col-md-3 panel panel-danger valign-top">
                        <!-- panel heading -->
                        <div class="panel-heading text-center pa15">
                            <h4 class="semibold mt0">
                                ADVANCE<br/>
                                <small>Great for medium size company</small>
                            </h4>
                        </div>
                        <!-- panel heading -->
                        <!-- panel body -->
                        <div class="panel-body text-center">
                            <h2 class="bold text-danger nm">$249</h2>
                            <p class="bold text-danger nm">MONTHLY</p>
                        </div>
                        <!--/ panel body -->
                        <!-- table -->
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td class="text-center"><i class="ico-alarm2 mr5"></i> 24 Hour support</td>
                                </tr>
                                <tr>
                                    <td class="text-center"><i class="ico-equalizer mr5"></i> Advance configurations</td>
                                </tr>
                                <tr>
                                    <td class="text-center"><i class="ico-database mr5"></i> <strong>20 MySQL Database</strong></td>
                                </tr>
                                <tr>
                                    <td class="text-center"><i class="ico-power mr5"></i> <strong>50 GB Bandwidth</strong></td>
                                </tr>
                                <tr>
                                    <td class="text-center"><button class="btn btn-danger"><i class="ico-thumbs-up2"></i> Get It Now</button></td>
                                </tr>
                            </tbody>
                        </table>
                        <!--/ table -->
                    </div>
                    <!--/ END Panel pricing -->
                    <!-- START Panel pricing -->
                    <div class="col-md-3 panel valign-top">
                        <!-- panel heading -->
                        <div class="panel-heading text-center pa15">
                            <h4 class="semibold mt0">
                                SUPREME<br/>
                                <small>Great for large size company</small>
                            </h4>
                        </div>
                        <!-- panel heading -->
                        <!-- panel body -->
                        <div class="panel-body text-center">
                            <h2 class="bold text-muted nm">$299</h2>
                            <p class="bold text-muted nm">MONTHLY</p>
                        </div>
                        <!--/ panel body -->
                        <!-- table -->
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td class="text-center"><i class="ico-alarm2 mr5"></i> 24 Hour support</td>
                                </tr>
                                <tr>
                                    <td class="text-center"><i class="ico-equalizer mr5"></i> Advance configurations</td>
                                </tr>
                                <tr>
                                    <td class="text-center"><i class="ico-database mr5"></i> <strong>50 MySQL Database</strong></td>
                                </tr>
                                <tr>
                                    <td class="text-center"><i class="ico-power mr5"></i> <strong>100 GB Bandwidth</strong></td>
                                </tr>
                                <tr>
                                    <td class="text-center"><button class="btn btn-success">Get It Now</button></td>
                                </tr>
                            </tbody>
                        </table>
                        <!--/ table -->
                    </div>
                    <!--/ END Panel pricing -->
                </div>
                <!--/ END Table layout -->
                
                <hr><!-- horizontal line -->

                <!-- section header -->
                <div class="section-header">
                    <h5 class="semibold title mb15">Using table components</h5>
                </div>
                <!--/ section header -->

                <!-- START row -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-primary">
                            <!-- panel heading/header -->
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="ico-dice mr5"></i> Simple &amp; powerful software</h3>
                            </div>
                            <!--/ panel heading/header -->
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th><h3 class="semibold nm">Features</h3></th>
                                            <th width="25%" class="text-center">
                                                <h4 class="semibold  mt0 mb5">Small</h4>
                                                <h4 class="semibold nm text-primary">$150.00 <small>/ mo</small></h4>
                                            </th>
                                            <th width="25%" class="text-center">
                                                <h4 class="semibold  mt0 mb5">Medium</h4>
                                                <h4 class="semibold nm text-primary">$250.00 <small>/ mo</small></h4>
                                            </th>
                                            <th width="25%" class="text-center">
                                                <h4 class="semibold mt0 mb5">Large</h4>
                                                <h4 class="semibold nm text-primary">$400.00 <small>/ mo</small></h4>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Adwords budget</td>
                                            <td class="text-center">0 - 500 USD/mo</td>
                                            <td class="text-center">500 - 1500 USD/mo</td>
                                            <td class="text-center">1500 - 3500 USD/mo</td>
                                        </tr>
                                        <tr>
                                            <td>Number of product</td>
                                            <td class="text-center"><strong>Limited</strong></td>
                                            <td class="text-center"><strong>Unlimited</strong></td>
                                            <td class="text-center"><strong>Unlimited</strong></td>
                                        </tr>
                                        <tr>
                                            <td>24/7 super support</td>
                                            <td class="text-center"><i class="ico-cancel-circle2 text-danger" style="font-size:18px;"></i></td>
                                            <td class="text-center"><i class="ico-checkmark-circle2 text-success" style="font-size:18px;"></i></td>
                                            <td class="text-center"><i class="ico-checkmark-circle2 text-success" style="font-size:18px;"></i></td>
                                        </tr>
                                        <tr>
                                            <td>Automatic updated</td>
                                            <td class="text-center"><i class="ico-checkmark-circle2 text-success" style="font-size:18px;"></i></td>
                                            <td class="text-center"><i class="ico-checkmark-circle2 text-success" style="font-size:18px;"></i></td>
                                            <td class="text-center"><i class="ico-checkmark-circle2 text-success" style="font-size:18px;"></i></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td class="text-center"><button class="btn btn-default">Buy now</button></td>
                                            <td class="text-center"><button class="btn btn-default">Buy now</button></td>
                                            <td class="text-center"><button class="btn btn-default">Buy now</button></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
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