<!DOCTYPE html>
<html class="backend">
    <!-- START Head -->
    <head>
        <!-- START META SECTION -->
        @include('partials.head_meta')
        <!--/ END META SECTION -->

        <!-- START STYLESHEETS -->
        <!-- Plugins stylesheet : optional -->
        <link rel="stylesheet" href="/plugins/jquery-ui/css/jquery-ui.css">
        <link rel="stylesheet" href="/plugins/fullcalendar/css/fullcalendar.css">
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
                        <h4 class="title semibold">Calendar</h4>
                    </div>
                    <div class="page-header-section text-right">
                        <button class="btn btn-primary" data-toggle="modal" data-target="#ModalAddEvent"><span class="ico-plus-circle2"></span> Add Event</button>
                    </div>
                </div>
                <!-- Page Header -->

                <!-- START row -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel fullcalendar panel-inverse">
                            <div class="panel-heading">
                                <h3 class="panel-title"><span class="panel-icon mr5"><i class="ico-calendar3"></i></span> Calendar</h3>
                                <!-- panel toolbar -->
                                <div class="panel-toolbar text-right">
                                    <!-- option -->
                                    <div class="option">
                                        <button class="btn up" data-toggle="panelcollapse"><i class="arrow"></i></button>
                                        <button class="btn" data-toggle="panelremove"><i class="remove"></i></button>
                                    </div>
                                    <!--/ option -->
                                </div>
                                <!--/ panel toolbar -->
                            </div>
                            <div class="panel-collapse pull out">
                                <div id="full_calendar" class="calendar"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/ END row -->

                <!-- START Modal -->
                <div id="ModalAddEvent" class="modal fade">
                    <div class="modal-dialog">
                        <form class="modal-content" action="">
                            <div class="modal-header">
                                <div class="cell text-center">
                                    <button type="button" class="close" data-dismiss="modal">×</button>
                                    <div class="ico-calendar-empty mb15 mt15 fsize32"></div>
                                    <h4 class="semibold text-primary">Add new event</h4>
                                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
                                </div>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="control-label">Event Name <span class="text-danger">*</span></label>
                                            <input name="eventname" type="text" class="form-control" data-parsley-required>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <label class="control-label">Date (from) <span class="text-danger">*</span></label>
                                                    <input id="datepicker-from" name="datefrom" type="text" class="form-control" placeholder="01/01/2014" data-parsley-required>
                                                </div>
                                                <div class="col-sm-6">
                                                    <label class="control-label">Date (to)</label>
                                                    <input id="datepicker-to" name="dateto" type="text" class="form-control" placeholder="30/01/2014">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <label class="control-label">All day event ?</label>
                                                    <select class="form-control" name="allday">
                                                        <option value="no">No</option>
                                                        <option value="yes">yes</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <label class="control-label">Event Color</label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <span class="radio-inline custom-radio custom-radio-primary">
                                                        <input type="radio" name="eventcolor" id="color1" value="primary" checked data-parsley-group="event-color">
                                                        <label for="color1" class="pl10"></label>
                                                    </span>
                                                    <span class="radio-inline custom-radio custom-radio-info">
                                                        <input type="radio" name="eventcolor" id="color2" value="info" data-parsley-group="event-color">
                                                        <label for="color2" class="pl10"></label>
                                                    </span>
                                                    <span class="radio-inline custom-radio custom-radio-success">
                                                        <input type="radio" name="eventcolor" id="color3" value="success" data-parsley-group="event-color">
                                                        <label for="color3" class="pl10"></label>
                                                    </span>
                                                    <span class="radio-inline custom-radio custom-radio-warning">
                                                        <input type="radio" name="eventcolor" id="color4" value="warning" data-parsley-group="event-color">
                                                        <label for="color4" class="pl10"></label>
                                                    </span>
                                                    <span class="radio-inline custom-radio custom-radio-danger">
                                                        <input type="radio" name="eventcolor" id="color5" value="danger" data-parsley-group="event-color">
                                                        <label for="color5" class="pl10"></label>
                                                    </span>
                                                    <span class="radio-inline custom-radio custom-radio-teal">
                                                        <input type="radio" name="eventcolor" id="color6" value="teal" data-parsley-group="event-color">
                                                        <label for="color6" class="pl10"></label>
                                                    </span>
                                                    <span class="radio-inline custom-radio custom-radio-inverse">
                                                        <input type="radio" name="eventcolor" id="color7" value="inverse" data-parsley-group="event-color">
                                                        <label for="color7" class="pl10"></label>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Description</label>
                                            <textarea name="eventdescription" class="form-control" rows="4" placeholder="Describe your event"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                <button type="submit" class="btn btn-success">Add</button>
                            </div>
                        </form><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div>
                <!--/ END Modal -->
            </div>

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
        <script type="text/javascript" src="/plugins/jquery-ui/js/jquery-ui.js"></script>
        <script type="text/javascript" src="/plugins/jquery-ui/js/jquery-ui-touch.js"></script>
        <script type="text/javascript" src="/plugins/parsley/js/parsley.js"></script>
        <script type="text/javascript" src="/plugins/fullcalendar/js/fullcalendar.js"></script>
        <script type="text/javascript" src="/js/backend/pages/calendar.js"></script>
        <!--/ Plugins and page level script : optional -->
        <!--/ END JAVASCRIPT SECTION -->
    </body>
    <!--/ END Body -->
</html>