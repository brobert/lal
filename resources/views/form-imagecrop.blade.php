<!DOCTYPE html>
<html class="backend">
    <!-- START Head -->
    <head>
        <!-- START META SECTION -->
        @include('partials.head_meta')
        <!--/ END META SECTION -->

        <!-- START STYLESHEETS -->
        <!-- Plugins stylesheet : optional -->
        <link rel="stylesheet" href="/plugins/jcrop/css/jcrop.css">
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
                        <h4 class="title semibold">Image Crop</h4>
                    </div>
                    <div class="page-header-section">
                        <!-- Toolbar -->
                        <div class="toolbar">
                            <ol class="breadcrumb breadcrumb-transparent nm">
                                <li><a href="#">Form</a></li>
                                <li class="active">Image Crop</li>
                            </ol>
                        </div>
                        <!--/ Toolbar -->
                    </div>
                </div>
                <!-- Page Header -->

                <!-- START Row -->
                <div class="row">
                    <div class="col-md-3 col-sm-4">
                        <!-- START Panel -->
                        <div class="panel panel-default">
                            <!-- panel heading/header -->
                            <div class="panel-heading">
                                <h3 class="panel-title">Jcrop API</h3>
                            </div>
                            <!--/ panel heading/header -->
                            <!-- panel body -->
                            <div class="panel-body">
                                <button class="btn btn-default btn-block mb10" id="set-select">setSelect</button>
                                <button class="btn btn-default btn-block mb10" id="animated-to">animatedTo</button>
                                <button class="btn btn-default btn-block mb10" id="release">Release</button>
                                <button class="btn btn-default btn-block mb10" id="disable">Disable</button>
                                <button class="btn btn-default btn-block mb10 hide" id="enable">Enable</button>
                                <button class="btn btn-danger btn-block" id="unhook">Destroy!</button>
                                <button class="btn btn-success btn-block hide" id="rehook">Attach!</button>
                            </div>
                            <!--/ panel body -->
                            <!-- table -->
                            <table class="table">
                                <thead></thead>
                                <tbody>
                                    <tr>
                                        <td>Aspect ratio</td>
                                        <td class="text-right">
                                            <label class="switch switch-sm switch-primary">
                                                <input type="checkbox" id="ar_lock">
                                                <span class="switch"></span>
                                            </label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>minSize/maxSize setting</td>
                                        <td class="text-right">
                                            <label class="switch switch-sm switch-primary">
                                                <input type="checkbox" id="size_lock">
                                                <span class="switch"></span>
                                            </label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Allow new selections</td>
                                        <td class="text-right">
                                            <label class="switch switch-sm switch-primary">
                                                <input type="checkbox" id="can_click">
                                                <span class="switch"></span>
                                            </label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Selection can be moved</td>
                                        <td class="text-right">
                                            <label class="switch switch-sm switch-primary">
                                                <input type="checkbox" id="can_move">
                                                <span class="switch"></span>
                                            </label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Resizable selection</td>
                                        <td class="text-right">
                                            <label class="switch switch-sm switch-primary">
                                                <input type="checkbox" id="can_size">
                                                <span class="switch"></span>
                                            </label>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <!--/ table -->
                        </div>
                        <!--/ END Panel -->
                    </div>

                    <div class="col-md-9 col-sm-8">
                        <!-- thumbnail -->
                        <div class="thumbnail thumbnail-album">
                            <!-- media -->
                            <div class="media">
                                <!--/ indicator -->
                                <img src="/image/background/background1.jpg" alt="Cover" width="100%" id="target">
                            </div>
                            <!--/ media -->
                            <!-- caption -->
                            <div class="caption pa15">
                                <h4 class="semibold mt0 mb5">Jcrop Image Sample</h4>
                                <p class="mb0 text-muted">Click below button to change image</p>
                            </div>
                            <!--/ caption -->
                            <div class="pa15" id="change-background">
                                <button class="btn btn-default active" data-background="/image/background/background1.jpg">#background1</button>
                                <button class="btn btn-default" data-background="/image/background/background2.jpg">#background2</button>
                                <button class="btn btn-default" data-background="/image/background/background3.jpg">#background3</button>
                            </div>
                        </div>
                        <!--/ thumbnail -->
                    </div>
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
        <script type="text/javascript" src="/plugins/jcrop/js/jquery.Jcrop.js"></script>
        <script type="text/javascript" src="/js/backend/forms/imagecrop.js"></script>
        <!--/ Plugins and page level script : optional -->
        <!--/ END JAVASCRIPT SECTION -->
    </body>
    <!--/ END Body -->
</html>