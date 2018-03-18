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
                        <h4 class="title semibold">Profile / account settings</h4>
                    </div>
                    <div class="page-header-section">
                        <!-- Toolbar -->
                        <div class="toolbar">
                            <ol class="breadcrumb breadcrumb-transparent nm">
                                <li><a href="#">Miscelleneous</a></li>
                                <li class="active">Profile</li>
                            </ol>
                        </div>
                        <!--/ Toolbar -->
                    </div>
                </div>
                <!-- Page Header -->

                <!-- START row -->
                <div class="row">
                    <!-- Left / Top Side -->
                    <div class="col-lg-3">
                        <!-- tab menu -->
                        <ul class="list-group list-group-tabs">
                            <li class="list-group-item active"><a href="#profile" data-toggle="tab"><i class="ico-user2 mr5"></i> Profile</a></li>
                            <li class="list-group-item"><a href="#account" data-toggle="tab"><i class="ico-archive2 mr5"></i> Account</a></li>
                            <li class="list-group-item"><a href="#security" data-toggle="tab"><i class="ico-shield3 mr5"></i> Security &amp; privacy</a></li>
                            <li class="list-group-item"><a href="#password" data-toggle="tab"><i class="ico-key2 mr5"></i> Password</a></li>
                        </ul>
                        <!-- tab menu -->

                        <hr><!-- horizontal line -->

                        <!-- figure with progress -->
                        <ul class="list-table">
                            <li style="width:70px;">
                                <img class="img-circle img-bordered" src="{{$user->photo}}" alt="{{$user->name}}" width="65px">
                            </li>
                            <li class="text-left">
                                <h5 class="semibold ellipsis mt0">{{Auth::user()->name}}</h5>
                                <div style="max-width:200px;">
                                    <div class="progress progress-xs mb5">
                                        <div class="progress-bar progress-bar-warning" style="width:70%"></div>
                                    </div>
                                    <p class="text-muted clearfix nm">
                                        <span class="pull-left">Profile complete</span>
                                        <span class="pull-right">70%</span>
                                    </p>
                                </div>
                            </li>
                        </ul>
                        <!--/ figure with progress -->

                        <hr><!-- horizontal line -->

                        <!-- follower stats -->
                        <ul class="nav nav-section nav-justified mt15">
                            <li>
                                <div class="section">
                                    <h4 class="nm semibold">12.5k</h4>
                                    <p class="nm text-muted">Followers</p>
                                </div>
                            </li>
                            <li>
                                <div class="section">
                                    <h4 class="nm semibold">1853</h4>
                                    <p class="nm text-muted">Following</p>
                                </div>
                            </li>
                            <li>
                                <div class="section">
                                    <h4 class="nm semibold">3451</h4>
                                    <p class="nm text-muted">Tweets</p>
                                </div>
                            </li>
                        </ul>
                        <!--/ follower stats -->
                    </div>
                    <!--/ Left / Top Side -->

                    <!-- Left / Bottom Side -->
                    <div class="col-lg-9">
                        <!-- START Tab-content -->
                        <div class="tab-content">
                            <!-- tab-pane: profile -->
                            <div class="tab-pane active" id="profile">
                                <!-- form profile -->
                                <form action="{{route('page-profile.store')}}" method="post" class="panel form-horizontal form-bordered" name="form-profile">
                                    @csrf
                                    <div class="panel-body pt0 pb0">
                                        <div class="form-group header bgcolor-default">
                                            <div class="col-md-12">
                                                <h4 class="semibold text-primary mt0 mb5">Profile</h4>
                                                <p class="text-default nm">This information appears on your public profile, search results, and beyond.</p>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Photo</label>
                                            <div class="col-sm-9">
                                                <div class="btn-group pr5">
                                                    <img class="img-circle img-bordered" src="{{$user->photo}}" alt="{{$user->name}}" width="34px">
                                                </div>
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-default">Change photo</button>
                                                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                                        <span class="caret"></span>
                                                    </button>
                                                    <ul class="dropdown-menu" role="menu">
                                                        <li><a href="#">Upload photo</a></li>
                                                        <li><a href="#">Remove</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Name</label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="name" value="{{Auth::user()->name}}">
                                                <p class="help-block">Enter your real name.</p>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Location</label>
                                            <div class="col-sm-5">
                                                <input type="text" class="form-control" name="location" value="{{Auth::user()->location}}">
                                                <p class="help-block">Where in the world are you?</p>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Website</label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="website" value="{{Auth::user()->website}}">
                                                <p class="help-block">Have a homepage or a blog? Put the address here.</p>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Bio</label>
                                            <div class="col-sm-6">
                                                <textarea class="form-control" rows="3" placeholder="Describe about yourself" name="bio"></textarea>
                                                <p class="help-block">About yourself in 160 characters or less.</p>
                                            </div>
                                        </div>
                                        <div class="form-group header bgcolor-default">
                                            <div class="col-md-12">
                                                <h4 class="semibold text-primary nm">Facebook</h4>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">&nbsp;</label>
                                            <div class="col-sm-9">
                                                <div class="btn-group pr5">
                                                    <img class="img-circle img-bordered" src="/image/avatar/avatar7.jpg" alt="" width="34px">
                                                </div>
                                                <a href="javascript:void(0);" class="btn btn-facebook">Login to facebook</a>
                                                <p class="help-block">to manage your connection with Facebook.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel-footer">
                                        @include('partials/form_footer')
                                    </div>
                                </form>
                                <!--/ form profile -->
                            </div>
                            <!--/ tab-pane: profile -->

                            <!-- tab-pane: account -->
                            <div class="tab-pane" id="account">
                                <!-- form account -->
                                <form class="panel form-horizontal form-bordered" name="form-account">
                                    <div class="panel-body pt0 pb0">
                                        <div class="form-group header bgcolor-default">
                                            <div class="col-md-12">
                                                <h4 class="semibold text-primary mt0 mb5">Account</h4>
                                                <p class="text-default nm">Change your basic account and language settings.</p>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Username</label>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" name="username" value="{{Auth::user()->name}}">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Email</label>
                                            <div class="col-sm-5">
                                                <input type="text" class="form-control" name="email" value="{{Auth::user()->email}}">
                                                <p class="help-block">Email will not be publicly displayed. <a href="javascript:void(0);">Learn more.</a></p>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">language</label>
                                            <div class="col-sm-5">
                                                    <select class="form-control" name="language">
                                                    <option>Select Language...</option>
                                                    <option value="eu">Basque - Euskara (beta)</option>
                                                    <option value="ca">Catalan - català (beta)</option>
                                                    <option value="cs">Czech - Čeština (beta)</option>
                                                    <option value="da">Danish - Dansk</option>
                                                    <option value="nl">Dutch - Nederlands</option>
                                                    <option value="en" selected="">English</option>
                                                    <option value="en-gb">English UK - EnglishUK</option>
                                                    <option value="fil">Filipino - Filipino</option>
                                                    <option value="fi">Finnish - Suomi</option>
                                                    <option value="fr">French - français</option>
                                                    <option value="gl">Galician - Galego (beta)</option>
                                                    <option value="de">German - Deutsch</option>
                                                    <option value="el">Greek - Ελληνικά (beta)</option>
                                                    <option value="hu">Hungarian - Magyar</option>
                                                    <option value="id">Indonesian - Bahasa Indonesia</option>
                                                    <option value="it">Italian - Italiano</option>
                                                    <option value="xx-lc">Lolcat - LOLCATZ (beta)</option>
                                                    <option value="msa">Malay - Bahasa Melayu</option>
                                                    <option value="no">Norwegian - Norsk</option>
                                                    <option value="pl">Polish - Polski</option>
                                                    <option value="pt">Portuguese - Português</option>
                                                    <option value="ro">Romanian - română (beta)</option>
                                                    <option value="ru">Russian - Русский</option>
                                                    <option value="es">Spanish - Español</option>
                                                    <option value="sv">Swedish - Svenska</option>
                                                    <option value="tr">Turkish - Türkçe</option>
                                                    <option value="uk">Ukrainian - Українська мова (beta)</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Timezone</label>
                                            <div class="col-sm-5">
                                                <select class="form-control" name="timezone">
                                                    <option>Select Timezone...</option>
                                                    @foreach ($timeZones as $tz)
                                                        <option value="{{$tz->id}}" {{$user->tz === $tz->name ? 'selected':''}}>
                                                        	(GMT{{$tz->offset_to_CET}}) {{$tz->name}}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group header bgcolor-default">
                                            <div class="col-md-12">
                                                <h4 class="semibold text-primary mt0 mb5">Content</h4>
                                                <p class="text-default nm">Change your change settings.</p>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Country</label>
                                            <div class="col-sm-5">
                                                <select class="form-control" name="country">
                                                <option>Select Country...</option>
                                                    @foreach ($countries as $cc)
                                                        <option value="{{$cc->id}}" {{$user->country === $cc->code ? 'selected':''}}>
                                                         [{{$cc->code}}] <b>{{$cc->name}}</b>
                                                        </option>
                                                    @endforeach
                                                </select>
                                                <p class="help-block">Select your country. This setting is saved to this browser.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel-footer">
                                        @include('partials/form_footer')
                                    </div>
                                </form>
                                <!--/ form account -->
                            </div>
                            <!--/ tab-pane: account -->

                            <!-- tab-pane: security -->
                            <div class="tab-pane" id="security">
                                <!-- form security -->
                                <form class="panel form-horizontal form-bordered" name="form-security">
                                    <div class="panel-body pt0 pb0">
                                        <div class="form-group header bgcolor-default">
                                            <div class="col-md-12">
                                                <h4 class="semibold text-primary mt0 mb5">Security</h4>
                                                <p class="text-default nm">Change your security settings.</p>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Login verification</label>
                                            <div class="col-sm-9">
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <span class="radio custom-radio">
                                                            <input type="radio" name="loginverification" id="loginverification1">
                                                            <label for="loginverification1">&nbsp;&nbsp;Send login verification requests to my phone</label>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <span class="radio custom-radio">
                                                            <input type="radio" name="loginverification" id="loginverification2">
                                                            <label for="loginverification2">&nbsp;&nbsp;Send login verification requests to my phone</label>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Password reset</label>
                                            <div class="col-sm-9">
                                                <span class="checkbox custom-checkbox">
                                                    <input type="checkbox" name="passwordreset" id="passwordreset">
                                                    <label for="passwordreset">&nbsp;&nbsp;Require personal information to reset my password</label>
                                                </span>
                                                <p class="help-block">By default, you can initiate a password reset by entering only your @username. If you check this box, you will be prompted to enter your email address or phone number if you forget your password.</p>
                                            </div>
                                        </div>
                                        <div class="form-group header bgcolor-default">
                                            <div class="col-md-12">
                                                <h4 class="semibold text-primary mt0 mb5">Privacy</h4>
                                                <p class="text-default nm">Change your privacy settings.</p>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Photo tagging</label>
                                            <div class="col-sm-9">
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <span class="radio custom-radio">
                                                            <input type="radio" name="phototagging" id="phototagging1">
                                                            <label for="phototagging1">&nbsp;&nbsp;Allow anyone to tag me in photos</label>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <span class="radio custom-radio">
                                                            <input type="radio" name="phototagging" id="phototagging2">
                                                            <label for="phototagging2">&nbsp;&nbsp;Only allow people I follow to tag me in photos</label>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <span class="radio custom-radio">
                                                            <input type="radio" name="phototagging" id="phototagging3">
                                                            <label for="phototagging3">&nbsp;&nbsp;Do not allow anyone to tag me in photos</label>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Discoverability</label>
                                            <div class="col-sm-9">
                                                <span class="checkbox custom-checkbox">
                                                    <input type="checkbox" name="discoverability" id="discoverability">
                                                    <label for="discoverability">&nbsp;&nbsp;Let others find me by my email address</label>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Personalization</label>
                                            <div class="col-sm-9">
                                                <span class="checkbox custom-checkbox">
                                                    <input type="checkbox" name="personalization" id="personalization">
                                                    <label for="personalization">&nbsp;&nbsp;Tailor content based on my recent website visits</label>
                                                </span>
                                                <p class="help-block"><a href="javascript:void(0);">Learn more</a> about how this works and your additional privacy controls.</p>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Promoted content</label>
                                            <div class="col-sm-9">
                                                <span class="checkbox custom-checkbox">
                                                    <input type="checkbox" name="ads" id="ads">
                                                    <label for="ads">&nbsp;&nbsp;Tailor ads based on information shared by ad partners.</label>
                                                </span>
                                                <p class="help-block"><a href="javascript:void(0);">Learn more</a> about how this works and your additional privacy controls.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel-footer">
                                        @include('partials/form_footer')
                                    </div>
                                </form>
                            </div>
                            <!--/ tab-pane: security -->

                            <!-- tab-pane: password -->
                            <div class="tab-pane" id="password">
                                <!-- form password -->
                                <form class="panel form-horizontal form-bordered" name="form-password">
                                    <div class="panel-body pt0 pb0">
                                        <div class="form-group header bgcolor-default">
                                            <div class="col-md-12">
                                                <h4 class="semibold text-primary mt0 mb5">Password</h4>
                                                <p class="text-default nm">Change your password or recover your current one.</p>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Current password</label>
                                            <div class="col-sm-5">
                                                <input type="text" class="form-control" name="currentpass">
                                                <p class="help-block"><a href="javascript:void(0);">Forgot password?</a></p>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">New password</label>
                                            <div class="col-sm-5">
                                                <input type="text" class="form-control" name="newpass">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Verify password</label>
                                            <div class="col-sm-5">
                                                <input type="text" class="form-control" name="verifypass">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel-footer">
                                        @include('partials/form_footer')
                                    </div>
                                </form>
                            </div>
                            <!--/ tab-pane: password -->
                        </div>
                        <!--/ END Tab-content -->
                    </div>
                    <!--/ Left / Bottom Side -->
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