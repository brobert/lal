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
        <link rel="stylesheet" href="/plugins/steps/css/jquery-steps.css">
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
                        <h4 class="title semibold">Form wizard</h4>
                    </div>
                    <div class="page-header-section">
                        <!-- Toolbar -->
                        <div class="toolbar">
                            <ol class="breadcrumb breadcrumb-transparent nm">
                                <li><a href="javascript:void(0);">Form</a></li>
                                <li class="active">Wizard</li>
                            </ol>
                        </div>
                        <!--/ Toolbar -->
                    </div>
                </div>
                <!-- Page Header -->

                <!-- section header -->
                <div class="section-header">
                    <h5 class="semibold title mb15">With Validation</h5>
                </div>
                <!--/ section header -->

                <!-- START row -->
                <div class="row">
                    <div class="col-md-12">
                        <!-- START Panel -->
                        <div class="panel panel-default">
                            <!-- panel heading/header -->
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="ico-tshirt mr5"></i> T-Shirt Order Form</h3>
                            </div>
                            <!--/ panel heading/header -->
                            <!-- START Form Wizard -->         
                            <form class="form-horizontal form-bordered" action="" id="wizard-validate">
                                <!-- Wizard Container 1 -->
                                <div class="wizard-title">Customize Order</div>
                                <div class="wizard-container">
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <h5 class="semibold text-primary nm">Customize your shirt order.</h5>
                                            <p class="text-muted nm">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua.</p>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Shirt type <span class="text-danger">*</span></label>
                                        <div class="col-sm-5">
                                            <select class="form-control" name="shirt" id="select-shirt" data-parsley-group="order" data-parsley-required>
                                                <option value="">Please choose</option>
                                                <option value="1">Ninja shirt</option>
                                                <option value="2">Robot shirt</option>
                                                <option value="3">Pirate shirt</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Size <span class="text-danger">*</span></label>
                                        <div class="col-sm-3">
                                            <select class="form-control" name="size" id="select-size" data-parsley-group="order" data-parsley-required>
                                                <option value="">Please choose</option>
                                                <option value="1">Small</option>
                                                <option value="2">Medium</option>
                                                <option value="3">Large</option>
                                                <option value="4">X-Large</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Color <span class="text-danger">*</span></label>
                                        <div class="col-sm-3">
                                            <select class="form-control" name="color" id="select-color" data-parsley-group="order" data-parsley-required>
                                                <option value="">Please choose</option>
                                                <option value="1">Red</option>
                                                <option value="2">Purple</option>
                                                <option value="3">Blue</option>
                                                <option value="4">Green</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <!--/ Wizard Container 1 -->

                                <!-- Wizard Container 2 -->
                                <div class="wizard-title">Informations</div>
                                <div class="wizard-container">
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <h5 class="semibold text-primary nm">Provide some of your details.</h5>
                                            <p class="text-muted nm">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua.</p>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Name <span class="text-danger">*</span></label>
                                        <div class="col-sm-4">
                                            <input type="text" name="first-name" class="form-control" placeholder="First Name" data-parsley-group="information" data-parsley-required>
                                        </div>
                                        <div class="col-sm-4">
                                            <input type="text" name="last-name" class="form-control" placeholder="Last Name" data-parsley-group="information" data-parsley-required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Email <span class="text-danger">*</span></label>
                                        <div class="col-sm-5">
                                            <input type="text" name="email" class="form-control" data-parsley-group="information" data-parsley-required data-parsley-type="email">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Address</label>
                                        <div class="col-sm-10">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <input type="text" name="street-address" class="form-control mb5" placeholder="Street Address">
                                                </div>
                                                <div class="col-sm-12">
                                                    <input type="text" name="line2-address" class="form-control mb5" placeholder="Address Line 2">
                                                </div>
                                                <div class="col-sm-6">
                                                    <input type="text" name="city-address" class="form-control mb5" placeholder="City">
                                                </div>
                                                <div class="col-sm-6">
                                                    <input type="text" name="state-address" class="form-control mb5" placeholder="State / Province / Region">
                                                </div>
                                                <div class="col-sm-6">
                                                    <input type="text" name="postal-address" class="form-control mb5" placeholder="Postal / Zip Code">
                                                </div>
                                                <div class="col-sm-6">
                                                    <select class="form-control" name="country-address">
                                                        <option value="xx">Select Country</option>
                                                        <option value="xx">Worldwide</option>
                                                        <option value="af">Afghanistan</option>
                                                        <option value="dz">Algeria</option>
                                                        <option value="ar">Argentina</option>
                                                        <option value="au">Australia</option>
                                                        <option value="bd">Bangladesh</option>
                                                        <option value="br">Brazil</option>
                                                        <option value="cm">Cameroon</option>
                                                        <option value="ca">Canada</option>
                                                        <option value="co">Colombia</option>
                                                        <option value="dk">Denmark</option>
                                                        <option value="eg">Egypt</option>
                                                        <option value="et">Ethiopia</option>
                                                        <option value="fr">France</option>
                                                        <option value="de">Germany</option>
                                                        <option value="gh">Ghana</option>
                                                        <option value="gr">Greece</option>
                                                        <option value="in">India</option>
                                                        <option value="id">Indonesia</option>
                                                        <option value="iq">Iraq</option>
                                                        <option value="ie">Ireland</option>
                                                        <option value="il">Israel</option>
                                                        <option value="it">Italy</option>
                                                        <option value="jp">Japan</option>
                                                        <option value="ke">Kenya</option>
                                                        <option value="mg">Madagascar</option>
                                                        <option value="my">Malaysia</option>
                                                        <option value="mx">Mexico</option>
                                                        <option value="ma">Morocco</option>
                                                        <option value="mz">Mozambique</option>
                                                        <option value="np">Nepal</option>
                                                        <option value="nl">Netherlands</option>
                                                        <option value="nz">New Zealand</option>
                                                        <option value="ng">Nigeria</option>
                                                        <option value="pk">Pakistan</option>
                                                        <option value="pe">Peru</option>
                                                        <option value="ph">Philippines</option>
                                                        <option value="pl">Poland</option>
                                                        <option value="ro">Romania</option>
                                                        <option value="ru">Russia</option>
                                                        <option value="sa">Saudi Arabia</option>
                                                        <option value="sg">Singapore</option>
                                                        <option value="za">South Africa</option>
                                                        <option value="kr">South Korea</option>
                                                        <option value="es">Spain</option>
                                                        <option value="lk">Sri Lanka</option>
                                                        <option value="se">Sweden</option>
                                                        <option value="ch">Switzerland</option>
                                                        <option value="tw">Taiwan</option>
                                                        <option value="tz">Tanzania</option>
                                                        <option value="th">Thailand</option>
                                                        <option value="tr">Turkey</option>
                                                        <option value="ug">Uganda</option>
                                                        <option value="ua">Ukraine</option>
                                                        <option value="gb">United Kingdom</option>
                                                        <option value="us">United States</option>
                                                        <option value="uz">Uzbekistan</option>
                                                        <option value="ve">Venezuela</option>
                                                        <option value="vn">Vietnam</option>
                                                        <option value="ye">Yemen</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--/ Wizard Container 2 -->

                                <!-- Wizard Container 3 -->
                                <div class="wizard-title">Payment</div>
                                <div class="wizard-container">
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <h5 class="semibold text-primary nm">Proceed to payment</h5>
                                            <p class="text-muted nm">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua.</p>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Card number <span class="text-danger">*</span></label>
                                        <div class="col-sm-5">
                                            <input type="text" name="card-number" class="form-control" data-parsley-group="payment" data-parsley-required data-mask="9999-9999-9999-9999">
                                        </div>
                                        <div class="col-sm-5">
                                            <input type="text" name="security-code" class="form-control" placeholder="Security code" data-parsley-group="payment" data-parsley-required data-parsley-maxlength="3" data-parsley-type="integer">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Name on card <span class="text-danger">*</span></label>
                                        <div class="col-sm-5">
                                            <input type="text" name="card-holder" class="form-control" data-parsley-group="payment" data-parsley-required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Expiration <span class="text-danger">*</span></label>
                                        <div class="col-sm-10">
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <select name="month" class="form-control" data-parsley-group="payment" data-parsley-required>
                                                        <option value="">Month</option>
                                                        <option value="1">January</option>
                                                        <option value="2">February</option>
                                                        <option value="3">March</option>
                                                        <option value="4">April</option>
                                                        <option value="5">May</option>
                                                        <option value="6">June</option>
                                                        <option value="7">July</option>
                                                        <option value="8">August</option>
                                                        <option value="9">September</option>
                                                        <option value="10">October</option>
                                                        <option value="11">November</option>
                                                        <option value="12">December</option>
                                                    </select>
                                                </div>
                                                <div class="col-sm-4">
                                                    <select name="year" class="form-control" data-parsley-group="payment" data-parsley-required>
                                                        <option value="">Year</option>
                                                        <option value="1">2014</option>
                                                        <option value="2">2015</option>
                                                        <option value="3">2016</option>
                                                        <option value="4">2017</option>
                                                        <option value="5">2018</option>
                                                        <option value="6">2019</option>
                                                        <option value="7">2020</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--/ Wizard Container 3 -->

                                <!-- Wizard Container 4 -->
                                <div class="wizard-title">Checkout</div>
                                <div class="wizard-container">
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <h5 class="semibold text-primary nm">Checkout</h5>
                                            <p class="text-muted nm">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Term Of Services</label>
                                        <div class="col-md-10">
                                            <span class="checkbox custom-checkbox">
                                                <input type="checkbox" name="checkbox-tos" id="checkbox-tos">
                                                <label for="checkbox-tos">&nbsp;&nbsp;I agree with this site <a href="javascript:void(0);">Term Of Services</a></label>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Notes</label>
                                        <div class="col-md-10">
                                            <textarea class="form-control" rows="5" placeholder="Add some notes!"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <!-- Wizard Container 4 -->
                            </form>
                            <!--/ END Form Wizard --> 
                        </div>
                        <!--/ END Panel -->
                    </div>
                </div>
                <!--/ END row -->
                <hr><!-- Horizontal rule -->

                <!-- section header -->
                <div class="section-header">
                    <h5 class="semibold title mb15">No Validation</h5>
                </div>
                <!--/ section header -->

                <!-- START row -->
                <div class="row">
                    <div class="col-md-12">
                        <!-- START Panel -->
                        <div class="panel panel-default">
                            <!-- panel heading/header -->
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="ico-tshirt mr5"></i> T-Shirt Order Form</h3>
                            </div>
                            <!--/ panel heading/header -->
                            <!-- START Form Wizard -->         
                            <form class="form-horizontal form-bordered" action="" id="wizard">
                                <!-- Wizard Container 1 -->
                                <div class="wizard-title">Customize Order</div>
                                <div class="wizard-container">
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <h5 class="semibold text-primary nm">Customize your shirt order.</h5>
                                            <p class="text-muted nm">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua.</p>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Shirt type</label>
                                        <div class="col-sm-5">
                                            <select class="form-control" name="shirt">
                                                <option value="">Please choose</option>
                                                <option value="1">Ninja shirt</option>
                                                <option value="2">Robot shirt</option>
                                                <option value="3">Pirate shirt</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Size</label>
                                        <div class="col-sm-3">
                                            <select class="form-control" name="size">
                                                <option value="">Please choose</option>
                                                <option value="1">Small</option>
                                                <option value="2">Medium</option>
                                                <option value="3">Large</option>
                                                <option value="4">X-Large</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Color</label>
                                        <div class="col-sm-3">
                                            <select class="form-control" name="color">
                                                <option value="">Please choose</option>
                                                <option value="1">Red</option>
                                                <option value="2">Purple</option>
                                                <option value="3">Blue</option>
                                                <option value="4">Green</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <!--/ Wizard Container 1 -->

                                <!-- Wizard Container 2 -->
                                <div class="wizard-title">Informations</div>
                                <div class="wizard-container">
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <h5 class="semibold text-primary nm">Provide some of your details.</h5>
                                            <p class="text-muted nm">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua.</p>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Name</label>
                                        <div class="col-sm-4">
                                            <input type="text" name="first-name" class="form-control" placeholder="First Name">
                                        </div>
                                        <div class="col-sm-4">
                                            <input type="text" name="last-name" class="form-control" placeholder="Last Name">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Email</label>
                                        <div class="col-sm-5">
                                            <input type="text" name="email" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Address</label>
                                        <div class="col-sm-10">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <input type="text" name="street-address" class="form-control mb5" placeholder="Street Address">
                                                </div>
                                                <div class="col-sm-12">
                                                    <input type="text" name="line2-address" class="form-control mb5" placeholder="Address Line 2">
                                                </div>
                                                <div class="col-sm-6">
                                                    <input type="text" name="city-address" class="form-control mb5" placeholder="City">
                                                </div>
                                                <div class="col-sm-6">
                                                    <input type="text" name="state-address" class="form-control mb5" placeholder="State / Province / Region">
                                                </div>
                                                <div class="col-sm-6">
                                                    <input type="text" name="postal-address" class="form-control mb5" placeholder="Postal / Zip Code">
                                                </div>
                                                <div class="col-sm-6">
                                                    <select class="form-control" name="country-address">
                                                        <option value="xx">Select Country</option>
                                                        <option value="xx">Worldwide</option>
                                                        <option value="af">Afghanistan</option>
                                                        <option value="dz">Algeria</option>
                                                        <option value="ar">Argentina</option>
                                                        <option value="au">Australia</option>
                                                        <option value="bd">Bangladesh</option>
                                                        <option value="br">Brazil</option>
                                                        <option value="cm">Cameroon</option>
                                                        <option value="ca">Canada</option>
                                                        <option value="co">Colombia</option>
                                                        <option value="dk">Denmark</option>
                                                        <option value="eg">Egypt</option>
                                                        <option value="et">Ethiopia</option>
                                                        <option value="fr">France</option>
                                                        <option value="de">Germany</option>
                                                        <option value="gh">Ghana</option>
                                                        <option value="gr">Greece</option>
                                                        <option value="in">India</option>
                                                        <option value="id">Indonesia</option>
                                                        <option value="iq">Iraq</option>
                                                        <option value="ie">Ireland</option>
                                                        <option value="il">Israel</option>
                                                        <option value="it">Italy</option>
                                                        <option value="jp">Japan</option>
                                                        <option value="ke">Kenya</option>
                                                        <option value="mg">Madagascar</option>
                                                        <option value="my">Malaysia</option>
                                                        <option value="mx">Mexico</option>
                                                        <option value="ma">Morocco</option>
                                                        <option value="mz">Mozambique</option>
                                                        <option value="np">Nepal</option>
                                                        <option value="nl">Netherlands</option>
                                                        <option value="nz">New Zealand</option>
                                                        <option value="ng">Nigeria</option>
                                                        <option value="pk">Pakistan</option>
                                                        <option value="pe">Peru</option>
                                                        <option value="ph">Philippines</option>
                                                        <option value="pl">Poland</option>
                                                        <option value="ro">Romania</option>
                                                        <option value="ru">Russia</option>
                                                        <option value="sa">Saudi Arabia</option>
                                                        <option value="sg">Singapore</option>
                                                        <option value="za">South Africa</option>
                                                        <option value="kr">South Korea</option>
                                                        <option value="es">Spain</option>
                                                        <option value="lk">Sri Lanka</option>
                                                        <option value="se">Sweden</option>
                                                        <option value="ch">Switzerland</option>
                                                        <option value="tw">Taiwan</option>
                                                        <option value="tz">Tanzania</option>
                                                        <option value="th">Thailand</option>
                                                        <option value="tr">Turkey</option>
                                                        <option value="ug">Uganda</option>
                                                        <option value="ua">Ukraine</option>
                                                        <option value="gb">United Kingdom</option>
                                                        <option value="us">United States</option>
                                                        <option value="uz">Uzbekistan</option>
                                                        <option value="ve">Venezuela</option>
                                                        <option value="vn">Vietnam</option>
                                                        <option value="ye">Yemen</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--/ Wizard Container 2 -->

                                <!-- Wizard Container 3 -->
                                <div class="wizard-title">Payment</div>
                                <div class="wizard-container">
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <h5 class="semibold text-primary nm">Proceed to payment</h5>
                                            <p class="text-muted nm">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua.</p>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Card number</label>
                                        <div class="col-sm-5">
                                            <input type="text" name="card-number" class="form-control" data-mask="9999-9999-9999-9999">
                                        </div>
                                        <div class="col-sm-5">
                                            <input type="text" name="security-code" class="form-control" placeholder="Security code">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Name on card</label>
                                        <div class="col-sm-5">
                                            <input type="text" name="card-holder" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Expiration</label>
                                        <div class="col-sm-10">
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <select name="month" class="form-control">
                                                        <option value="">Month</option>
                                                        <option value="1">January</option>
                                                        <option value="2">February</option>
                                                        <option value="3">March</option>
                                                        <option value="4">April</option>
                                                        <option value="5">May</option>
                                                        <option value="6">June</option>
                                                        <option value="7">July</option>
                                                        <option value="8">August</option>
                                                        <option value="9">September</option>
                                                        <option value="10">October</option>
                                                        <option value="11">November</option>
                                                        <option value="12">December</option>
                                                    </select>
                                                </div>
                                                <div class="col-sm-4">
                                                    <select name="year" class="form-control">
                                                        <option value="">Year</option>
                                                        <option value="1">2014</option>
                                                        <option value="2">2015</option>
                                                        <option value="3">2016</option>
                                                        <option value="4">2017</option>
                                                        <option value="5">2018</option>
                                                        <option value="6">2019</option>
                                                        <option value="7">2020</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--/ Wizard Container 3 -->
                            </form>
                            <!--/ END Form Wizard --> 
                        </div>
                        <!--/ END Panel -->
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
		<script type="text/javascript" src="/plugins/steps/js/jquery-steps.js"></script>
        <script type="text/javascript" src="/plugins/parsley/js/parsley.js"></script>
        <script type="text/javascript" src="/plugins/inputmask/js/inputmask.js"></script>
        <script type="text/javascript" src="/js/backend/forms/wizard.js"></script>
        <!--/ Plugins and page level script : optional -->
        <!--/ END JAVASCRIPT SECTION -->
    </body>
    <!--/ END Body -->
</html>