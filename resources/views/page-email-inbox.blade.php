<!DOCTYPE html>
<html class="backend">
    <!-- START Head -->
    <head>
        <!-- START META SECTION -->
        @include('partials.head_meta')
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
                        <h4 class="title semibold">Email inbox <small class="text-muted">(3 Unread)</small></h4>
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
                                <a href="" class="list-group-item"><i class="ico-drawer mr5"></i> Inbox <span class="semibold text-muted pull-right">1943</span></a>
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
                        <!-- panel toolbar wrapper -->
                        <div class="panel-toolbar-wrapper pl0 pt5 pb5">
                            <!-- panel toolbar -->
                            <div class="panel-toolbar pl10">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-default"><i class="ico-loop4"></i></button>
                                    <button type="button" class="btn btn-default"><i class="ico-remove3"></i></button>
                                </div>
                                <div class="btn-group hidden-xs">
                                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                        <i class="ico-folder"></i>&nbsp;&nbsp;<span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-right" role="menu">
                                        <li role="presentation" class="dropdown-header">Move to folder</li>
                                        <li><a href="javascript:void(0);">Important</a></li>
                                        <li><a href="javascript:void(0);">Misc</a></li>
                                        <li><a href="javascript:void(0);">Work</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="panel-toolbar text-right">
                                <div class="static-text mr10 hidden-xs">
                                    <span class="semibold">1-20</span> of <span class="semibold">1053</span>
                                </div>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-default"><i class="ico-angle-left"></i></button>
                                    <button type="button" class="btn btn-default"><i class="ico-angle-right"></i></button>
                                </div>
                            </div>
                            <!--/ panel toolbar -->
                        </div>
                        <!--/ panel toolbar wrapper -->

                        <!-- email list -->
                        <div class="table-responsive nm">
                            <table class="table table-hover table-email" id="table-email">
                                <tbody>
                                    <tr>
                                        <td width="2%">
                                            <div class="checkbox custom-checkbox nm">
                                                <input type="checkbox" id="customcheckbox1" value="1" data-toggle="selectrow" data-target="tr">
                                                <label for="customcheckbox1"></label>
                                            </div>
                                        </td>
                                        <td width="2%">
                                            <span class="checkbox checkbox-icon icon-star">
                                                <input type="checkbox" id="checkboxicon1" value="1">
                                                <label for="checkboxicon1"></label>
                                            </span>
                                        </td>
                                        <td class="meta">
                                            <h5 class="sender">Karly Osborn</h5>
                                            <p class="date">Today</p>
                                        </td>
                                        <td class="message">
                                            <h5 class="heading">
                                                <i class="ico-square text-danger mr5"></i>
                                                <i class="ico-attachment text-muted mr5"></i>
                                                <a href="page-email-view.html">Click me. I'll take you to the email view</a>
                                            </h5>
                                            <p class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt.</p>
                                        </td>
                                    </tr>
                                    <tr class="read">
                                        <td width="2%">
                                            <div class="checkbox custom-checkbox nm">
                                                <input type="checkbox" id="customcheckbox2" value="1" data-toggle="selectrow" data-target="tr">
                                                <label for="customcheckbox2"></label>
                                            </div>
                                        </td>
                                        <td width="2%">
                                            <span class="checkbox checkbox-icon icon-star">
                                                <input type="checkbox" id="checkboxicon2" value="1">
                                                <label for="checkboxicon2"></label>
                                            </span>
                                        </td>
                                        <td class="meta">
                                            <h5 class="sender">Pinterest</h5>
                                            <p class="date">Yesterday</p>
                                        </td>
                                        <td class="message">
                                            <h5 class="heading">
                                                <a href="javascript:void(0);">ëŻ¸ě��ěť� ě‹śě˛´ started following 1 of your boards</a>
                                            </h5>
                                            <p class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt.</p>
                                        </td>
                                    </tr>
                                    <tr class="read">
                                        <td width="2%">
                                            <div class="checkbox custom-checkbox nm">
                                                <input type="checkbox" id="customcheckbox3" value="1" data-toggle="selectrow" data-target="tr">
                                                <label for="customcheckbox3"></label>
                                            </div>
                                        </td>
                                        <td width="2%">
                                            <span class="checkbox checkbox-icon icon-star">
                                                <input type="checkbox" id="checkboxicon3" value="1">
                                                <label for="checkboxicon3"></label>
                                            </span>
                                        </td>
                                        <td class="meta">
                                            <h5 class="sender">Pinterest</h5>
                                            <p class="date">Yesterday</p>
                                        </td>
                                        <td class="message">
                                            <h5 class="heading">
                                                <a href="javascript:void(0);">Jae Dong Cha repinned 1 of your pins</a>
                                            </h5>
                                            <p class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt.</p>
                                        </td>
                                    </tr>
                                    <tr class="read">
                                        <td width="2%">
                                            <div class="checkbox custom-checkbox nm">
                                                <input type="checkbox" id="customcheckbox4" value="1" data-toggle="selectrow" data-target="tr">
                                                <label for="customcheckbox4"></label>
                                            </div>
                                        </td>
                                        <td width="2%">
                                            <span class="checkbox checkbox-icon icon-star">
                                                <input type="checkbox" id="checkboxicon4" value="1" checked="">
                                                <label for="checkboxicon4"></label>
                                            </span>
                                        </td>
                                        <td class="meta">
                                            <h5 class="sender">Dropbox</h5>
                                            <p class="date">Yesterday</p>
                                        </td>
                                        <td class="message">
                                            <h5 class="heading">
                                                <i class="ico-square text-default mr5"></i>
                                                <a href="javascript:void(0);">Update to the dropbox Term Of Service</a>
                                            </h5>
                                            <p class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt.</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="2%">
                                            <div class="checkbox custom-checkbox nm">
                                                <input type="checkbox" id="customcheckbox5" value="1" data-toggle="selectrow" data-target="tr">
                                                <label for="customcheckbox5"></label>
                                            </div>
                                        </td>
                                        <td width="2%">
                                            <span class="checkbox checkbox-icon icon-star">
                                                <input type="checkbox" id="checkboxicon5" value="1" checked="">
                                                <label for="checkboxicon5"></label>
                                            </span>
                                        </td>
                                        <td class="meta">
                                            <h5 class="sender">iTunes</h5>
                                            <p class="date">Yesterday</p>
                                        </td>
                                        <td class="message">
                                            <h5 class="heading">
                                                <a href="javascript:void(0);">Top-Selling albums &amp; movies at a special</a>
                                            </h5>
                                            <p class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt.</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="2%">
                                            <div class="checkbox custom-checkbox nm">
                                                <input type="checkbox" id="customcheckbox6" value="1" data-toggle="selectrow" data-target="tr">
                                                <label for="customcheckbox6"></label>
                                            </div>
                                        </td>
                                        <td width="2%">
                                            <span class="checkbox checkbox-icon icon-star">
                                                <input type="checkbox" id="checkboxicon6" value="1">
                                                <label for="checkboxicon6"></label>
                                            </span>
                                        </td>
                                        <td class="meta">
                                            <h5 class="sender">Avira Online</h5>
                                            <p class="date">Yesterday</p>
                                        </td>
                                        <td class="message">
                                            <h5 class="heading">
                                                <a href="javascript:void(0);">Verify your Avira Online account now</a>
                                            </h5>
                                            <p class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt.</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="2%">
                                            <div class="checkbox custom-checkbox nm">
                                                <input type="checkbox" id="customcheckbox7" value="1" data-toggle="selectrow" data-target="tr">
                                                <label for="customcheckbox7"></label>
                                            </div>
                                        </td>
                                        <td width="2%">
                                            <span class="checkbox checkbox-icon icon-star">
                                                <input type="checkbox" id="checkboxicon7" value="1">
                                                <label for="checkboxicon7"></label>
                                            </span>
                                        </td>
                                        <td class="meta">
                                            <h5 class="sender">AirAsia</h5>
                                            <p class="date">Friday</p>
                                        </td>
                                        <td class="message">
                                            <h5 class="heading">
                                                <a href="javascript:void(0);"><i class="ico-heart"></i> FREE SEATS? Stay tuned!</a>
                                            </h5>
                                            <p class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt.</p>
                                        </td>
                                    </tr>
                                    <tr class="read">
                                        <td width="2%">
                                            <div class="checkbox custom-checkbox nm">
                                                <input type="checkbox" id="customcheckbox8" value="1" data-toggle="selectrow" data-target="tr">
                                                <label for="customcheckbox8"></label>
                                            </div>
                                        </td>
                                        <td width="2%">
                                            <span class="checkbox checkbox-icon icon-star">
                                                <input type="checkbox" id="checkboxicon8" value="1">
                                                <label for="checkboxicon8"></label>
                                            </span>
                                        </td>
                                        <td class="meta">
                                            <h5 class="sender">Behance Team</h5>
                                            <p class="date">Friday</p>
                                        </td>
                                        <td class="message">
                                            <h5 class="heading">
                                                <i class="ico-square text-danger mr5"></i>
                                                <a href="javascript:void(0);">This creative ritual worth stealing</a>
                                            </h5>
                                            <p class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt.</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="2%">
                                            <div class="checkbox custom-checkbox nm">
                                                <input type="checkbox" id="customcheckbox9" value="1" data-toggle="selectrow" data-target="tr">
                                                <label for="customcheckbox9"></label>
                                            </div>
                                        </td>
                                        <td width="2%">
                                            <span class="checkbox checkbox-icon icon-star">
                                                <input type="checkbox" id="checkboxicon9" value="1" checked="">
                                                <label for="checkboxicon9"></label>
                                            </span>
                                        </td>
                                        <td class="meta">
                                            <h5 class="sender">GoDaddy</h5>
                                            <p class="date">Thursday</p>
                                        </td>
                                        <td class="message">
                                            <h5 class="heading">
                                                <a href="javascript:void(0);">Be your own boss. It starts with 25% off.</a>
                                            </h5>
                                            <p class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt.</p>
                                        </td>
                                    </tr>
                                    <tr class="read">
                                        <td width="2%">
                                            <div class="checkbox custom-checkbox nm">
                                                <input type="checkbox" id="customcheckbox10" value="1" data-toggle="selectrow" data-target="tr">
                                                <label for="customcheckbox10"></label>
                                            </div>
                                        </td>
                                        <td width="2%">
                                            <span class="checkbox checkbox-icon icon-star">
                                                <input type="checkbox" id="checkboxicon10" value="1">
                                                <label for="checkboxicon10"></label>
                                            </span>
                                        </td>
                                        <td class="meta">
                                            <h5 class="sender">Twitter</h5>
                                            <p class="date">Thursday</p>
                                        </td>
                                        <td class="message">
                                            <h5 class="heading">
                                                <i class="ico-square text-danger mr5"></i>
                                                <a href="javascript:void(0);">Louis Twenty (@LouisTwenty) is now following you.</a>
                                            </h5>
                                            <p class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt.</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="2%">
                                            <div class="checkbox custom-checkbox nm">
                                                <input type="checkbox" id="customcheckbox11" value="1" data-toggle="selectrow" data-target="tr">
                                                <label for="customcheckbox11"></label>
                                            </div>
                                        </td>
                                        <td width="2%">
                                            <span class="checkbox checkbox-icon icon-star">
                                                <input type="checkbox" id="checkboxicon11" value="1" checked="">
                                                <label for="checkboxicon11"></label>
                                            </span>
                                        </td>
                                        <td class="meta">
                                            <h5 class="sender">BlackBerry</h5>
                                            <p class="date">Wednesday</p>
                                        </td>
                                        <td class="message">
                                            <h5 class="heading">
                                                <a href="javascript:void(0);">BBM 2.0: Better than ever!</a>
                                            </h5>
                                            <p class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt.</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="2%">
                                            <div class="checkbox custom-checkbox nm">
                                                <input type="checkbox" id="customcheckbox12" value="1" data-toggle="selectrow" data-target="tr">
                                                <label for="customcheckbox12"></label>
                                            </div>
                                        </td>
                                        <td width="2%">
                                            <span class="checkbox checkbox-icon icon-star">
                                                <input type="checkbox" id="checkboxicon12" value="1">
                                                <label for="checkboxicon12"></label>
                                            </span>
                                        </td>
                                        <td class="meta">
                                            <h5 class="sender">Team Typeform</h5>
                                            <p class="date">Wednesday</p>
                                        </td>
                                        <td class="message">
                                            <h5 class="heading">
                                                <i class="ico-attachment text-muted mr5"></i>
                                                <a href="javascript:void(0);">Important! security announcement (api)</a>
                                            </h5>
                                            <p class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt.</p>
                                        </td>
                                    </tr>
                                    <tr class="read">
                                        <td width="2%">
                                            <div class="checkbox custom-checkbox nm">
                                                <input type="checkbox" id="customcheckbox13" value="1" data-toggle="selectrow" data-target="tr">
                                                <label for="customcheckbox13"></label>
                                            </div>
                                        </td>
                                        <td width="2%">
                                            <span class="checkbox checkbox-icon icon-star">
                                                <input type="checkbox" id="checkboxicon7" value="1">
                                                <label for="checkboxicon13"></label>
                                            </span>
                                        </td>
                                        <td class="meta">
                                            <h5 class="sender">Twitter</h5>
                                            <p class="date">Wednesday</p>
                                        </td>
                                        <td class="message">
                                            <h5 class="heading">
                                                <i class="ico-square text-teal mr5"></i>
                                                <a href="javascript:void(0);">Do you know John Doe and Tamara Moon?</a>
                                            </h5>
                                            <p class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt.</p>
                                        </td>
                                    </tr>
                                    <tr class="read">
                                        <td width="2%">
                                            <div class="checkbox custom-checkbox nm">
                                                <input type="checkbox" id="customcheckbox14" value="1" data-toggle="selectrow" data-target="tr">
                                                <label for="customcheckbox14"></label>
                                            </div>
                                        </td>
                                        <td width="2%">
                                            <span class="checkbox checkbox-icon icon-star">
                                                <input type="checkbox" id="checkboxicon14" value="1">
                                                <label for="checkboxicon14"></label>
                                            </span>
                                        </td>
                                        <td class="meta">
                                            <h5 class="sender">Spotify</h5>
                                            <p class="date">Tuesday</p>
                                        </td>
                                        <td class="message">
                                            <h5 class="heading">
                                                <a href="javascript:void(0);">Topsify added a new song lists.</a>
                                            </h5>
                                            <p class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt.</p>
                                        </td>
                                    </tr>
                                    <tr class="read">
                                        <td width="2%">
                                            <div class="checkbox custom-checkbox nm">
                                                <input type="checkbox" id="customcheckbox15" value="1" data-toggle="selectrow" data-target="tr">
                                                <label for="customcheckbox15"></label>
                                            </div>
                                        </td>
                                        <td width="2%">
                                            <span class="checkbox checkbox-icon icon-star">
                                                <input type="checkbox" id="checkboxicon15" value="1">
                                                <label for="checkboxicon15"></label>
                                            </span>
                                        </td>
                                        <td class="meta">
                                            <h5 class="sender">Behance</h5>
                                            <p class="date">Tuesday</p>
                                        </td>
                                        <td class="message">
                                            <h5 class="heading">
                                                <i class="ico-square text-teal mr5"></i>
                                                <a href="javascript:void(0);">Kasmir Ali published a new project</a>
                                            </h5>
                                            <p class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt.</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="2%">
                                            <div class="checkbox custom-checkbox nm">
                                                <input type="checkbox" id="customcheckbox16" value="1" data-toggle="selectrow" data-target="tr">
                                                <label for="customcheckbox16"></label>
                                            </div>
                                        </td>
                                        <td width="2%">
                                            <span class="checkbox checkbox-icon icon-star">
                                                <input type="checkbox" id="checkboxicon16" value="1" checked="">
                                                <label for="checkboxicon16"></label>
                                            </span>
                                        </td>
                                        <td class="meta">
                                            <h5 class="sender">Paypal</h5>
                                            <p class="date">Monday</p>
                                        </td>
                                        <td class="message">
                                            <h5 class="heading">
                                                <i class="ico-attachment text-muted mr5"></i>
                                                <a href="javascript:void(0);">Receipt for your payment to GoDaddy.com.</a>
                                            </h5>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="2%">
                                            <div class="checkbox custom-checkbox nm">
                                                <input type="checkbox" id="customcheckbox17" value="1" data-toggle="selectrow" data-target="tr">
                                                <label for="customcheckbox17"></label>
                                            </div>
                                        </td>
                                        <td width="2%">
                                            <span class="checkbox checkbox-icon icon-star">
                                                <input type="checkbox" id="checkboxicon17" value="1">
                                                <label for="checkboxicon17"></label>
                                            </span>
                                        </td>
                                        <td class="meta">
                                            <h5 class="sender">Facebook</h5>
                                            <p class="date">Feb 16</p>
                                        </td>
                                        <td class="message">
                                            <h5 class="heading">
                                                <i class="ico-square text-teal mr5"></i>
                                                <a href="javascript:void(0);">Tamara Moon tagged you in a post on Facebook</a>
                                            </h5>
                                            <p class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt.</p>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!--/ email list -->
                    </div>
                    <!--/ content -->
                </div>
                <!--/ END Table layout -->

                <!-- START Modal compose message -->
                <div id="ModalComposeMessage" class="modal fade">
                    <div class="modal-dialog">
                        <form class="modal-content" action="" parsley-validate>
                            <div class="modal-header text-center">
                                <button type="button" class="close" data-dismiss="modal">Ă—</button>
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