<!DOCTYPE html>
<html class="backend">
    <!-- START Head -->
    <head>
        <!-- START META SECTION -->
        @include('partials.head_meta')
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
        @include('partials.template_header')
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
                    @if($errors)
                       @foreach ($errors->all() as $error)
                          <div>{{ $error }}</div>
                      @endforeach
                    @endif
                <!-- START row -->
                <div class="row">
                    <!-- Left / Top Side -->
                    <div class="col-lg-3">
                        <!-- tab menu -->
                        <ul class="list-group list-group-tabs">
                            <li class="list-group-item {{old('scope', 'profile') === 'profile' ? 'active' : ''}}"><a href="#profile"  data-toggle="tab"><i class="ico-user2 mr5"></i> Profile</a></li>
                            <li class="list-group-item {{old('scope', 'profile') === 'account' ? 'active' : ''}}"><a href="#account"  data-toggle="tab"><i class="ico-archive2 mr5"></i> Account</a></li>
                            <li class="list-group-item {{old('scope', 'profile') === 'password' ? 'active' : ''}}"><a href="#password" data-toggle="tab"><i class="ico-key2 mr5"></i> Password</a></li>
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
@if(0)
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
@endif
                    </div>
                    <!--/ Left / Top Side -->

                    <!-- Left / Bottom Side -->
                    <div class="col-lg-9">
                        <!-- START Tab-content -->
                        <div class="tab-content">
                            <!-- tab-pane: profile -->
                            <div class="tab-pane {{old('scope', 'profile') === 'profile' ? 'active' : ''}}" id="profile">
                            @include('profile.tab_profile')
                            </div>
                            <!--/ tab-pane: profile -->

                            <!-- tab-pane: account -->
                            <div class="tab-pane {{old('scope', 'profile') === 'account' ? 'active' : ''}}" id="account">
                            @include('profile.tab_account')
                            </div>
                            <!--/ tab-pane: account -->

                            <!-- tab-pane: password -->
                            <div class="tab-pane {{old('scope', 'profile') === 'password' ? 'active' : ''}}" id="password">
                            @include('profile.tab_password')
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