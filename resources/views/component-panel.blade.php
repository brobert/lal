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
                        <h4 class="title semibold">Panel</h4>
                    </div>
                    <div class="page-header-section">
                        <!-- Toolbar -->
                        <div class="toolbar">
                            <ol class="breadcrumb breadcrumb-transparent nm">
                                <li><a href="javascript:void(0);">UI Elements</a></li>
                                <li class="active">Panel</li>
                            </ol>
                        </div>
                        <!--/ Toolbar -->
                    </div>
                </div>
                <!-- Page Header -->

                <!-- section header -->
                <div class="section-header">
                    <h5 class="semibold title mb15">Panel toolbar location</h5>
                </div>
                <!--/ section header -->

                <!-- START row -->
                <div class="row">
                    <div class="col-md-4">
                        <!-- START panel -->
                        <div class="panel panel-default">
                            <!-- panel heading/header -->
                            <div class="panel-heading">
                                <h3 class="panel-title">Inside panel</h3>
                            </div>
                            <!--/ panel heading/header -->
                            <!-- panel toolbar -->
                            <div class="panel-toolbar-wrapper">
                                <div class="panel-toolbar">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-default">Left</button>
                                        <button type="button" class="btn btn-sm btn-default">Pos.</button>
                                    </div>
                                </div>
                                <div class="panel-toolbar text-right">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-default">Right</button>
                                        <button type="button" class="btn btn-sm btn-default">Pos.</button>
                                    </div>
                                </div>
                            </div>
                            <!--/ panel toolbar -->
                            <!-- panel body with collapse capabale -->
                            <div class="panel-collapse">
                                <div class="panel-body">
                                    Lorem ipsum dolor sit amet, mei essent everti theophrastus an, accusam lucilius vis eu. In mei accusamus efficiendi mediocritatem, eos ex paulo complectitur.
                                </div>
                            </div>
                            <!--/ panel body with collapse capabale -->
                        </div>
                        <!--/ END panel -->
                    </div>

                    <div class="col-md-4">
                        <!-- START panel -->
                        <div class="panel panel-default">
                            <!-- panel heading/header -->
                            <div class="panel-heading">
                                <h3 class="panel-title">Inside panel-collapse</h3>
                            </div>
                            <!--/ panel heading/header -->
                            <!-- panel body with collapse capabale -->
                            <div class="panel-collapse pull out">
                                <!-- panel toolbar -->
                                <div class="panel-toolbar-wrapper">
                                    <div class="panel-toolbar">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-sm btn-default"><i class="ico-align-left2"></i></button>
                                            <button type="button" class="btn btn-sm btn-default"><i class="ico-align-center"></i></button>
                                            <button type="button" class="btn btn-sm btn-default"><i class="ico-align-right2"></i></button>
                                        </div>
                                    </div>
                                    <div class="panel-toolbar text-right">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-sm btn-default"><i class="ico-bold"></i></button>
                                            <button type="button" class="btn btn-sm btn-default"><i class="ico-text-height"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <!--/ panel toolbar -->
                                <!-- panel body -->
                                <div class="panel-body">
                                    Lorem ipsum dolor sit amet, mei essent everti theophrastus an, accusam lucilius vis eu. In mei accusamus efficiendi mediocritatem, eos ex paulo complectitur.
                                </div>
                                <!--/ panel body -->
                            </div>
                            <!--/ panel body with collapse capabale -->
                        </div>
                        <!--/ END panel -->
                    </div>

                    <div class="col-md-4">
                        <!-- START panel -->
                        <div class="panel panel-default">
                            <!-- panel heading/header -->
                            <div class="panel-heading">
                                <h3 class="panel-title">Inside header</h3>
                                <!-- panel toolbar -->
                                <div class="panel-toolbar text-right">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-default">Right</button>
                                        <button type="button" class="btn btn-sm btn-default">Pos.</button>
                                    </div>
                                </div>
                                <!--/ panel toolbar -->
                            </div>
                            <!--/ panel heading/header -->
                            <!-- panel body -->
                            <div class="panel-body">
                                Lorem ipsum dolor sit amet, mei essent everti theophrastus an, accusam lucilius vis eu. In mei accusamus efficiendi mediocritatem, eos ex paulo complectitur.
                            </div>
                            <!--/ panel body -->
                        </div>
                        <!--/ END panel -->
                    </div>
                </div>
                <!--/ END Row -->
                <hr><!-- Horizontal rule -->

                <!-- section header -->
                <div class="section-header">
                    <h5 class="semibold title mb15">Panel toolbar tools</h5>
                </div>
                <!--/ section header -->

                <!-- START row -->
                <div class="row">
                    <div class="col-md-4">
                        <!-- START panel -->
                        <div class="panel panel-default">
                            <!-- panel heading/header -->
                            <div class="panel-heading">
                                <h4 class="panel-title ellipsis">Button</h4>
                                <!-- panel toolbar button -->
                                <div class="panel-toolbar text-right">
                                    <button class="btn btn-primary">Default</button>
                                    <button class="btn btn-sm btn-success">Small</button>
                                </div>
                                <!--/ panel toolbar button -->
                            </div>
                            <!--/ panel heading/header -->
                            <!-- panel body -->
                            <div class="panel-body">
                                Lorem ipsum dolor sit amet, mei essent everti theophrastus an, accusam lucilius vis eu. In mei accusamus efficiendi mediocritatem, eos ex paulo complectitur.
                            </div>
                            <!--/ panel body -->
                        </div>
                        <!--/ END panel -->
                    </div>

                    <div class="col-md-4">
                        <!-- START panel -->
                        <div class="panel panel-default">
                            <!-- panel heading/header -->
                            <div class="panel-heading">
                                <h4 class="panel-title ellipsis">Button dropdown</h4>
                                <!-- panel toolbar button -->
                                <div class="panel-toolbar text-right">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-danger dropdown-toggle" data-toggle="dropdown">Danger <span class="caret"></span></button>
                                        <ul class="dropdown-menu pull-right">
                                            <li><a href="javascript:void(0);">Create</a></li>
                                            <li><a href="javascript:void(0);">Update</a></li>
                                            <li class="divider"></li>
                                            <li><a href="javascript:void(0);" class="text-danger">Delete</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <!--/ panel toolbar button -->
                            </div>
                            <!--/ panel heading/header -->
                            <!-- panel body -->
                            <div class="panel-body">
                                Lorem ipsum dolor sit amet, mei essent everti theophrastus an, accusam lucilius vis eu. In mei accusamus efficiendi mediocritatem, eos ex paulo complectitur.
                            </div>
                            <!--/ panel body -->
                        </div>
                        <!--/ END panel -->
                    </div>

                    <div class="col-md-4">
                        <!-- START panel -->
                        <div class="panel panel-default">
                            <!-- panel heading/header -->
                            <div class="panel-heading">
                                <h4 class="panel-title ellipsis">Button group</h4>
                                <!-- panel toolbar button -->
                                <div class="panel-toolbar text-right">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-default">Left</button>
                                        <button type="button" class="btn btn-sm btn-default">Right</button>
                                    </div>
                                </div>
                                <!--/ panel toolbar button -->
                            </div>
                            <!--/ panel heading/header -->
                            <!-- panel body -->
                            <div class="panel-body">
                                Lorem ipsum dolor sit amet, mei essent everti theophrastus an, accusam lucilius vis eu. In mei accusamus efficiendi mediocritatem, eos ex paulo complectitur.
                            </div>
                            <!--/ panel body -->
                        </div>
                        <!--/ END panel -->
                    </div>

                    <div class="col-md-4">
                        <!-- START panel -->
                        <div class="panel panel-default">
                            <!-- panel heading/header -->
                            <div class="panel-heading">
                                <h3 class="panel-title">Button link</h3>
                                <!-- panel toolbar -->
                                <div class="panel-toolbar text-right">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-link dropdown-toggle" data-toggle="dropdown">Dropdown <span class="caret"></span></button>
                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li><a href="javascript:void(0);">Create</a></li>
                                            <li><a href="javascript:void(0);">Update</a></li>
                                            <li class="divider"></li>
                                            <li><a href="javascript:void(0);" class="text-danger">Delete</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <!--/ panel toolbar -->
                            </div>
                            <!--/ panel heading/header -->
                            <!-- panel body -->
                            <div class="panel-body">
                                Lorem ipsum dolor sit amet, mei essent everti theophrastus an, accusam lucilius vis eu. In mei accusamus efficiendi mediocritatem, eos ex paulo complectitur.
                            </div>
                            <!--/ panel body -->
                        </div>
                        <!--/ END panel -->
                    </div>

                    <div class="col-md-4">
                        <!-- START panel -->
                        <div class="panel panel-default">
                            <!-- panel heading/header -->
                            <div class="panel-heading">
                                <h3 class="panel-title">Option</h3>
                                <!-- panel toolbar -->
                                <div class="panel-toolbar text-right">
                                    <!-- option -->
                                    <div class="option">
                                        <button class="btn demo" data-toggle="panelrefresh"><i class="reload"></i></button>
                                        <button class="btn down" data-toggle="panelcollapse"><i class="arrow"></i></button>
                                        <button class="btn" data-toggle="panelremove" data-parent=".col-md-4"><i class="remove"></i></button>
                                    </div>
                                    <!--/ option -->
                                </div>
                                <!--/ panel toolbar -->
                            </div>
                            <!--/ panel heading/header -->

                            <!-- panel body with collapse capable -->
                            <div class="panel-collapse pull in">
                                <div class="panel-body">
                                    Lorem ipsum dolor sit amet, mei essent everti theophrastus an, accusam lucilius vis eu. In mei accusamus efficiendi mediocritatem, eos ex paulo complectitur.
                                </div>
                            </div>
                            <!--/ panel body with collapse capabale -->

                            <!-- Loading indicator -->
                            <div class="indicator"><span class="spinner"></span></div>
                            <!--/ Loading indicator -->
                        </div>
                        <!--/ END panel -->
                    </div>

                    <div class="col-md-4">
                        <!-- START panel -->
                        <div class="panel panel-default">
                            <!-- panel heading/header -->
                            <div class="panel-heading">
                                <h3 class="panel-title">Input field</h3>
                                <!-- panel toolbar -->
                                <div class="panel-toolbar text-right">
                                    <form class="form-horizontal" action="">
                                        <div class="form-group has-feedback">
                                            <i class="ico-key6 form-control-feedback"></i>
                                            <input type="text" class="form-control" placeholder="Text input...">
                                        </div>
                                    </form>
                                </div>
                                <!--/ panel toolbar -->
                            </div>
                            <!--/ panel heading/header -->
                            <!-- panel body -->
                            <div class="panel-body">
                                Lorem ipsum dolor sit amet, mei essent everti theophrastus an, accusam lucilius vis eu. In mei accusamus efficiendi mediocritatem, eos ex paulo complectitur.
                            </div>
                            <!--/ panel body -->
                        </div>
                        <!--/ END panel -->
                    </div>

                    <div class="col-md-4">
                        <!-- START panel -->
                        <div class="panel panel-default">
                            <!-- panel heading/header -->
                            <div class="panel-heading">
                                <h3 class="panel-title">Tabs</h3>
                                <!-- panel toolbar -->
                                <div class="panel-toolbar">
                                    <ul class="nav nav-tabs pull-right">
                                        <li class="dropdown">
                                            <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">Two <i class="caret"></i></a>
                                            <ul class="dropdown-menu dropdown-menu-right">
                                                <li><a href="javascript:void(0);">Create</a></li>
                                                <li><a href="javascript:void(0);">Update</a></li>
                                                <li class="divider"></li>
                                                <li><a href="javascript:void(0);" class="text-danger">Delete</a></li>
                                            </ul>
                                        </li>
                                        <li class="active"><a href="#one" data-toggle="tab">One</a></li>
                                    </ul>
                                </div>
                                <!--/ panel toolbar -->
                            </div>
                            <!--/ panel heading/header -->
                            <!-- panel body -->
                            <div class="tab-content pa15">
                                <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse.</p>
                                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                            </div>
                            <!--/ panel body -->
                        </div>
                        <!--/ END panel -->
                    </div>

                    <div class="col-md-4">
                        <!-- START panel -->
                        <div class="panel panel-default">
                            <!-- panel heading/header -->
                            <div class="panel-heading">
                                <div class="panel-toolbar">
                                    <ul class="nav nav-tabs nav-justified">
                                        <li class="active"><a href="#one" data-toggle="tab">One</a></li>
                                        <li><a href="#two" data-toggle="tab">Two</a></li>
                                        <li class="dropdown">
                                            <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">Three <i class="caret"></i></a>
                                            <ul class="dropdown-menu dropdown-menu-right">
                                                <li><a href="javascript:void(0);">Create</a></li>
                                                <li><a href="javascript:void(0);">Update</a></li>
                                                <li class="divider"></li>
                                                <li><a href="javascript:void(0);" class="text-danger">Delete</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!--/ panel heading/header -->
                            <!-- panel body -->
                            <div class="panel-body">
                                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                cillum dolore eu fugiat nulla pariatur.
                            </div>
                            <!--/ panel body -->
                        </div>
                        <!--/ END panel -->
                    </div>

                    <div class="col-md-4">
                        <!-- START panel -->
                        <div class="panel panel-primary">
                            <!-- panel heading/header -->
                            <div class="panel-heading">
                                <h3 class="panel-title">Tabs</h3>
                                <!-- panel toolbar -->
                                <div class="panel-toolbar text-right">
                                    <!-- option -->
                                    <div class="option">
                                        <button class="btn demo" data-toggle="panelrefresh"><i class="reload"></i></button>
                                        <button class="btn up" data-toggle="panelcollapse"><i class="arrow"></i></button>
                                        <button class="btn" data-toggle="panelremove" data-parent=".col-md-4"><i class="remove"></i></button>
                                    </div>
                                    <!--/ option -->
                                </div>
                                <!--/ panel toolbar -->
                            </div>
                            <!--/ panel heading/header -->
                            <!-- panel body with collapse capable -->
                            <div class="panel-collapse pull out">
                                <!-- panel toolbar -->
                                <div class="panel-toolbar-wrapper">
                                    <div class="panel-toolbar">
                                        <ul class="nav nav-tabs nav-justified">
                                            <li class="active"><a href="#one" data-toggle="tab">One</a></li>
                                            <li><a href="#two" data-toggle="tab">Two</a></li>
                                            <li class="dropdown">
                                                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">Three <i class="caret"></i></a>
                                                <ul class="dropdown-menu dropdown-menu-right">
                                                    <li><a href="javascript:void(0);">Create</a></li>
                                                    <li><a href="javascript:void(0);">Update</a></li>
                                                    <li class="divider"></li>
                                                    <li><a href="javascript:void(0);" class="text-danger">Delete</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!--/ panel toolbar -->
                                <!-- panel body -->
                                <div class="panel-body">
                                    Lorem ipsum dolor sit amet, mei essent everti theophrastus an, accusam lucilius vis eu. In mei accusamus efficiendi mediocritatem, eos ex paulo complectitur.
                                </div>
                                <!--/ panel body -->
                            </div>
                            <!--/ panel body with collapse capabale -->
                            <!-- Loading indicator -->
                            <div class="indicator"><span class="spinner"></span></div>
                            <!--/ Loading indicator -->
                        </div>
                        <!--/ END panel -->
                    </div>
                </div>
                <!--/ END row -->
                <hr><!-- Horizontal rule -->

                <!-- section header -->
                <div class="section-header">
                    <h5 class="semibold title mb15">Panel misc</h5>
                </div>
                <!--/ section header -->

                <!-- START row -->
                <div class="row">
                    <div class="col-md-4">
                        <!-- START panel -->
                        <div class="panel panel-default">
                            <!-- panel heading/header -->
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="ico-quotes-left mr5"></i> Panel icon</h3>
                            </div>
                            <!--/ panel heading/header -->
                            <!-- panel body -->
                            <div class="panel-body">
                                Lorem ipsum dolor sit amet, mei essent everti theophrastus an, accusam lucilius vis eu. In mei accusamus efficiendi mediocritatem, eos ex paulo complectitur.
                            </div>
                            <!--/ panel body -->
                        </div>
                        <!--/ END panel -->
                    </div>

                    <div class="col-md-4">
                        <!-- START panel -->
                        <div class="panel panel-default">
                            <!-- panel heading/header -->
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="ico-wrench3 mr5"></i> Panel icon </h3>
                            </div>
                            <!--/ panel heading/header -->
                            <!-- panel body -->
                            <div class="panel-body">
                                Lorem ipsum dolor sit amet, mei essent everti theophrastus an, accusam lucilius vis eu. In mei accusamus efficiendi mediocritatem, eos ex paulo complectitur.
                            </div>
                            <!--/ panel body -->
                        </div>
                        <!--/ END panel -->
                    </div>

                    <div class="col-md-4">
                        <!-- START panel -->
                        <div class="panel panel-default">
                            <!-- panel heading/header -->
                            <div class="panel-heading">
                                <h4 class="panel-title">Scrollable content</h4>
                            </div>
                            <!--/ panel heading/header -->
                            <!-- panel body with collapse capabale -->
                            <div class="panel-collapse">
                                <div class="panel-body slimscroll" style="height:105px;">
                                    <p>Lorem ipsum dolor sit amet, mei essent everti theophrastus an, accusam lucilius vis eu. In mei accusamus efficiendi mediocritatem, eos ex paulo complectitur.</p>
                                    <p>Vix ad altera viderer. Utinam legendos platonem ei vel, everti numquam dignissim sed et.</p>
                                    <p>An his consulatu imperdiet. Ei minim nullam possit usu, consequat honestatis id sit, option accusamus nam ea. Tractatos voluptaria definitiones et mea, sed tritani inimicus ea. Vel mundi debitis id, an putent facete verterem sed. Cu mei congue dissentiet. Hinc possit salutatus vix ut, pri volumus conceptam at. Sed id natum appellantur, sed an illum conclusionemque, ne nec autem voluptatum assueverit.</p>
                                </div>
                            </div>
                            <!--/ panel body with collapse capabale -->
                        </div>
                        <!--/ END panel -->
                    </div>

                    <div class="col-md-4">
                        <!-- START panel -->
                        <div class="panel panel-default">
                            <!-- panel heading/header -->
                            <div class="panel-heading">
                                <h3 class="panel-title">Panel collapsible</h3>
                                <!-- panel toolbar -->
                                <div class="panel-toolbar text-right">
                                    <!-- option -->
                                    <div class="option">
                                        <button class="btn up" data-toggle="panelcollapse"><i class="arrow"></i></button>
                                    </div>
                                    <!--/ option -->
                                </div>
                                <!--/ panel toolbar -->
                            </div>
                            <!--/ panel heading/header -->
                            <!-- panel body with collapse capable -->
                            <div class="panel-collapse pull out">
                                <div class="panel-body">
                                    Lorem ipsum dolor sit amet, mei essent everti theophrastus an, accusam lucilius vis eu. In mei accusamus efficiendi mediocritatem, eos ex paulo complectitur.
                                </div>
                            </div>
                            <!--/ panel body with collapse capabale -->
                        </div>
                        <!--/ END panel -->
                    </div>

                    <div class="col-md-4">
                        <!-- START panel -->
                        <div class="panel panel-default">
                            <!-- panel heading/header -->
                            <div class="panel-heading">
                                <h3 class="panel-title">Panel remove</h3>
                                <!-- panel toolbar -->
                                <div class="panel-toolbar text-right">
                                    <!-- option -->
                                    <div class="option">
                                        <button class="btn" data-toggle="panelremove" data-parent=".col-md-4"><i class="remove"></i></button>
                                    </div>
                                    <!--/ option -->
                                </div>
                                <!--/ panel toolbar -->
                            </div>
                            <!--/ panel heading/header -->
                            <!-- panel body -->
                            <div class="panel-body">
                                Lorem ipsum dolor sit amet, mei essent everti theophrastus an, accusam lucilius vis eu. In mei accusamus efficiendi mediocritatem, eos ex paulo complectitur.
                            </div>
                            <!--/ panel body -->
                        </div>
                        <!--/ END panel -->
                    </div>

                    <div class="col-md-4">
                        <!-- START panel -->
                        <div class="panel panel-default">
                            <!-- panel heading/header -->
                            <div class="panel-heading">
                                <h3 class="panel-title">Panel reload</h3>
                                <!-- panel toolbar -->
                                <div class="panel-toolbar text-right">
                                    <!-- option -->
                                    <div class="option">
                                        <button class="btn demo" data-toggle="panelrefresh"><i class="reload"></i></button>
                                    </div>
                                    <!--/ option -->
                                </div>
                                <!--/ panel toolbar -->
                            </div>
                            <!--/ panel heading/header -->
                            <!-- panel body -->
                            <div class="panel-body">
                                Lorem ipsum dolor sit amet, mei essent everti theophrastus an, accusam lucilius vis eu. In mei accusamus efficiendi mediocritatem, eos ex paulo complectitur.
                            </div>
                            <!--/ panel body -->
                            <!-- Loading indicator -->
                            <div class="indicator"><span class="spinner"></span></div>
                            <!--/ Loading indicator -->
                        </div>
                        <!--/ END panel -->
                    </div>
                </div>
                <!--/ END row -->
                <hr><!-- Horizontal rule -->

                <!-- section header -->
                <div class="section-header">
                    <h5 class="semibold title mb15">Panel contextual</h5>
                </div>
                <!--/ section header -->

                <!-- START row -->
                <div class="row">
                    <div class="col-md-4">
                        <!-- START panel -->
                        <div class="panel panel-default">
                            <!-- panel heading/header -->
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="ico-quotes-left mr5"></i> Default</h3>
                                <!-- panel toolbar -->
                                <div class="panel-toolbar text-right">
                                    <!-- option -->
                                    <div class="option">
                                        <button class="btn demo" data-toggle="panelrefresh"><i class="reload"></i></button>
                                        <button class="btn up" data-toggle="panelcollapse"><i class="arrow"></i></button>
                                        <button class="btn" data-toggle="panelremove" data-parent=".col-md-4"><i class="remove"></i></button>
                                    </div>
                                    <!--/ option -->
                                </div>
                                <!--/ panel toolbar -->
                            </div>
                            <!--/ panel heading/header -->

                            <!-- panel body with collapse capable -->
                            <div class="panel-collapse pull out">
                                <div class="panel-body">
                                    Lorem ipsum dolor sit amet, mei essent everti theophrastus an, accusam lucilius vis eu. In mei accusamus efficiendi mediocritatem, eos ex paulo complectitur.
                                </div>
                            </div>
                            <!--/ panel body with collapse capabale -->

                            <!-- Loading indicator -->
                            <div class="indicator"><span class="spinner"></span></div>
                            <!--/ Loading indicator -->
                        </div>
                        <!--/ END panel -->
                    </div>

                    <div class="col-md-4">
                        <!-- START panel -->
                        <div class="panel panel-primary">
                            <!-- panel heading/header -->
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="ico-quotes-left mr5"></i> Primary</h3>
                                <!-- panel toolbar -->
                                <div class="panel-toolbar text-right">
                                    <!-- option -->
                                    <div class="option">
                                        <button class="btn demo" data-toggle="panelrefresh"><i class="reload"></i></button>
                                        <button class="btn up" data-toggle="panelcollapse"><i class="arrow"></i></button>
                                        <button class="btn" data-toggle="panelremove" data-parent=".col-md-4"><i class="remove"></i></button>
                                    </div>
                                    <!--/ option -->
                                </div>
                                <!--/ panel toolbar -->
                            </div>
                            <!--/ panel heading/header -->

                            <!-- panel body with collapse capable -->
                            <div class="panel-collapse pull out">
                                <div class="panel-body">
                                    Lorem ipsum dolor sit amet, mei essent everti theophrastus an, accusam lucilius vis eu. In mei accusamus efficiendi mediocritatem, eos ex paulo complectitur.
                                </div>
                            </div>
                            <!--/ panel body with collapse capabale -->

                            <!-- Loading indicator -->
                            <div class="indicator"><span class="spinner"></span></div>
                            <!--/ Loading indicator -->
                        </div>
                        <!--/ END panel -->
                    </div>

                    <div class="col-md-4">
                        <!-- START panel -->
                        <div class="panel panel-success">
                            <!-- panel heading/header -->
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="ico-quotes-left mr5"></i> Success</h3>
                                <!-- panel toolbar -->
                                <div class="panel-toolbar text-right">
                                    <!-- option -->
                                    <div class="option">
                                        <button class="btn demo" data-toggle="panelrefresh"><i class="reload"></i></button>
                                        <button class="btn up" data-toggle="panelcollapse"><i class="arrow"></i></button>
                                        <button class="btn" data-toggle="panelremove" data-parent=".col-md-4"><i class="remove"></i></button>
                                    </div>
                                    <!--/ option -->
                                </div>
                                <!--/ panel toolbar -->
                            </div>
                            <!--/ panel heading/header -->

                            <!-- panel body with collapse capable -->
                            <div class="panel-collapse pull out">
                                <div class="panel-body">
                                    Lorem ipsum dolor sit amet, mei essent everti theophrastus an, accusam lucilius vis eu. In mei accusamus efficiendi mediocritatem, eos ex paulo complectitur.
                                </div>
                            </div>
                            <!--/ panel body with collapse capabale -->

                            <!-- Loading indicator -->
                            <div class="indicator"><span class="spinner"></span></div>
                            <!--/ Loading indicator -->
                        </div>
                        <!--/ END panel -->
                    </div>
                </div>
                <!--/ END row -->

                <!-- START row -->
                <div class="row">
                    <div class="col-md-4">
                        <!-- START panel -->
                        <div class="panel panel-info">
                            <!-- panel heading/header -->
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="ico-quotes-left mr5"></i> Info</h3>
                                <!-- panel toolbar -->
                                <div class="panel-toolbar text-right">
                                    <!-- option -->
                                    <div class="option">
                                        <button class="btn demo" data-toggle="panelrefresh"><i class="reload"></i></button>
                                        <button class="btn up" data-toggle="panelcollapse"><i class="arrow"></i></button>
                                        <button class="btn" data-toggle="panelremove" data-parent=".col-md-4"><i class="remove"></i></button>
                                    </div>
                                    <!--/ option -->
                                </div>
                                <!--/ panel toolbar -->
                            </div>
                            <!--/ panel heading/header -->

                            <!-- panel body with collapse capable -->
                            <div class="panel-collapse pull out">
                                <div class="panel-body">
                                    Lorem ipsum dolor sit amet, mei essent everti theophrastus an, accusam lucilius vis eu. In mei accusamus efficiendi mediocritatem, eos ex paulo complectitur.
                                </div>
                            </div>
                            <!--/ panel body with collapse capabale -->

                            <!-- Loading indicator -->
                            <div class="indicator"><span class="spinner"></span></div>
                            <!--/ Loading indicator -->
                        </div>
                        <!--/ END panel -->
                    </div>

                    <div class="col-md-4">
                        <!-- START panel -->
                        <div class="panel panel-warning">
                            <!-- panel heading/header -->
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="ico-quotes-left mr5"></i> Warning</h3>
                                <!-- panel toolbar -->
                                <div class="panel-toolbar text-right">
                                    <!-- option -->
                                    <div class="option">
                                        <button class="btn demo" data-toggle="panelrefresh"><i class="reload"></i></button>
                                        <button class="btn up" data-toggle="panelcollapse"><i class="arrow"></i></button>
                                        <button class="btn" data-toggle="panelremove" data-parent=".col-md-4"><i class="remove"></i></button>
                                    </div>
                                    <!--/ option -->
                                </div>
                                <!--/ panel toolbar -->
                            </div>
                            <!--/ panel heading/header -->

                            <!-- panel body with collapse capable -->
                            <div class="panel-collapse pull out">
                                <div class="panel-body">
                                    Lorem ipsum dolor sit amet, mei essent everti theophrastus an, accusam lucilius vis eu. In mei accusamus efficiendi mediocritatem, eos ex paulo complectitur.
                                </div>
                            </div>
                            <!--/ panel body with collapse capabale -->

                            <!-- Loading indicator -->
                            <div class="indicator"><span class="spinner"></span></div>
                            <!--/ Loading indicator -->
                        </div>
                        <!--/ END panel -->
                    </div>

                    <div class="col-md-4">
                        <!-- START panel -->
                        <div class="panel panel-danger">
                            <!-- panel heading/header -->
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="ico-quotes-left mr5"></i> Danger</h3>
                                <!-- panel toolbar -->
                                <div class="panel-toolbar text-right">
                                    <!-- option -->
                                    <div class="option">
                                        <button class="btn demo" data-toggle="panelrefresh"><i class="reload"></i></button>
                                        <button class="btn up" data-toggle="panelcollapse"><i class="arrow"></i></button>
                                        <button class="btn" data-toggle="panelremove" data-parent=".col-md-4"><i class="remove"></i></button>
                                    </div>
                                    <!--/ option -->
                                </div>
                                <!--/ panel toolbar -->
                            </div>
                            <!--/ panel heading/header -->

                            <!-- panel body with collapse capable -->
                            <div class="panel-collapse pull out">
                                <div class="panel-body">
                                    Lorem ipsum dolor sit amet, mei essent everti theophrastus an, accusam lucilius vis eu. In mei accusamus efficiendi mediocritatem, eos ex paulo complectitur.
                                </div>
                            </div>
                            <!--/ panel body with collapse capabale -->

                            <!-- Loading indicator -->
                            <div class="indicator"><span class="spinner"></span></div>
                            <!--/ Loading indicator -->
                        </div>
                        <!--/ END panel -->
                    </div>
                </div>
                <!--/ END row -->

                <!-- START row -->
                <div class="row">
                    <div class="col-md-4">
                        <!-- START panel -->
                        <div class="panel panel-teal">
                            <!-- panel heading/header -->
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="ico-quotes-left mr5"></i> Teal</h3>
                                <!-- panel toolbar -->
                                <div class="panel-toolbar text-right">
                                    <!-- option -->
                                    <div class="option">
                                        <button class="btn demo" data-toggle="panelrefresh"><i class="reload"></i></button>
                                        <button class="btn up" data-toggle="panelcollapse"><i class="arrow"></i></button>
                                        <button class="btn" data-toggle="panelremove" data-parent=".col-md-4"><i class="remove"></i></button>
                                    </div>
                                    <!--/ option -->
                                </div>
                                <!--/ panel toolbar -->
                            </div>
                            <!--/ panel heading/header -->

                            <!-- panel body with collapse capable -->
                            <div class="panel-collapse pull out">
                                <div class="panel-body">
                                    Lorem ipsum dolor sit amet, mei essent everti theophrastus an, accusam lucilius vis eu. In mei accusamus efficiendi mediocritatem, eos ex paulo complectitur.
                                </div>
                            </div>
                            <!--/ panel body with collapse capabale -->

                            <!-- Loading indicator -->
                            <div class="indicator"><span class="spinner"></span></div>
                            <!--/ Loading indicator -->
                        </div>
                        <!--/ END panel -->
                    </div>

                    <div class="col-md-4">
                        <!-- START panel -->
                        <div class="panel panel-inverse">
                            <!-- panel heading/header -->
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="ico-quotes-left mr5"></i> Inverse</h3>
                                <!-- panel toolbar -->
                                <div class="panel-toolbar text-right">
                                    <!-- option -->
                                    <div class="option">
                                        <button class="btn demo" data-toggle="panelrefresh"><i class="reload"></i></button>
                                        <button class="btn up" data-toggle="panelcollapse"><i class="arrow"></i></button>
                                        <button class="btn" data-toggle="panelremove" data-parent=".col-md-4"><i class="remove"></i></button>
                                    </div>
                                    <!--/ option -->
                                </div>
                                <!--/ panel toolbar -->
                            </div>
                            <!--/ panel heading/header -->

                            <!-- panel body with collapse capable -->
                            <div class="panel-collapse pull out">
                                <div class="panel-body">
                                    Lorem ipsum dolor sit amet, mei essent everti theophrastus an, accusam lucilius vis eu. In mei accusamus efficiendi mediocritatem, eos ex paulo complectitur.
                                </div>
                            </div>
                            <!--/ panel body with collapse capabale -->

                            <!-- Loading indicator -->
                            <div class="indicator"><span class="spinner"></span></div>
                            <!--/ Loading indicator -->
                        </div>
                        <!--/ END panel -->
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