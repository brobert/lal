<!DOCTYPE html>
<html class="backend">
    <!-- START Head -->
    <head>
        <!-- START META SECTION -->
        @include('partials.head_meta')
        <!--/ END META SECTION -->

        <!-- START STYLESHEETS -->
        <!-- Plugins stylesheet : optional -->
        <link rel="stylesheet" href="/plugins/xeditable/css/xeditable.css">
        <link rel="stylesheet" href="/plugins/xeditable/inputs-ext/typeaheadjs/lib/typeahead.js-bootstrap.css">
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
                        <h4 class="title semibold">Form X-editable</h4>
                    </div>
                    <div class="page-header-section">
                        <!-- Toolbar -->
                        <div class="toolbar">
                            <ol class="breadcrumb breadcrumb-transparent nm">
                                <li><a href="javascript:void(0);">Form</a></li>
                                <li class="active">x-editable</li>
                            </ol>
                        </div>
                        <!--/ Toolbar -->
                    </div>
                </div>
                <!-- Page Header -->

                <!-- START row -->
                <div class="row">
                    <div class="col-md-12">
                        <!-- START panel -->
                        <div class="panel panel-default">
                            <!-- panel heading/header -->
                            <div class="panel-heading">
                                <h3 class="panel-title"><span class="panel-icon mr5"><i class="ico-equalizer"></i></span> X-editable example</h3>
                            </div>
                            <!--/ panel heading/header -->
                            <!-- table responsive -->
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th width="40%">Inputs Types</th>
                                            <th>Example</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>text</td>
                                            <td><a href="#" id="xe_username" data-type="text" data-pk="1">awesome</a></td>
                                        </tr>
                                        <tr>
                                            <td>textarea</td>
                                            <td><a href="#" id="xe_comments" data-type="textarea" data-pk="1">awesome comment!</a></td>
                                        </tr>
                                        <tr>
                                            <td>select</td>
                                            <td><a href="#" id="xe_status" data-type="select" data-pk="1" data-title="Select status"></a></td>
                                        </tr>
                                        <tr>
                                            <td>checklist</td>
                                            <td><a href="#" id="xe_checklist" data-type="checklist" data-pk="1" data-title="Select options"></a></td>
                                        </tr>
                                        <tr>
                                            <td>combodate</td>
                                            <td><a href="#" id="xe_combodate" data-type="combodate" data-pk="1" data-value="1984-05-15" data-title="Select date"></a></td>
                                        </tr>
                                        <tr>
                                            <td>dateui</td>
                                            <td><a href="#" id="xe_dateui" data-type="date" data-pk="1" data-title="Select date">15/05/1984</a></td>
                                        </tr>
                                        <tr>
                                            <td>typeahead</td>
                                            <td><a href="#" id="xe_typehead" data-type="typeaheadjs" data-pk="1" data-title="Input country"></a></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!--/ table responsive -->
                            <hr class="nm">
                            <div class="panel-body bgcolor-white">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="note note-rounded note-default">
                                            for more example usage, please visit the <a href="http://vitalets.github.io/x-editable/docs.html#inputs" style="text-decoration:underline;">x-editable</a> plugin site.
                                        </div>
                                    </div>
                                </div>
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
        <script type="text/javascript" src="/plugins/xeditable/js/bootstrap-editable.js"></script>
        <script type="text/javascript" src="/plugins/xeditable/inputs-ext/address/address.js"></script>
        <script type="text/javascript" src="/plugins/xeditable/inputs-ext/typeaheadjs/lib/typeahead.js"></script>
        <script type="text/javascript" src="/plugins/xeditable/inputs-ext/typeaheadjs/typeaheadjs.js"></script>
        <script type="text/javascript" src="/js/backend/forms/xeditable.js"></script>
        <!--/ Plugins and page level script : optional -->
        <!--/ END JAVASCRIPT SECTION -->
    </body>
    <!--/ END Body -->
</html>