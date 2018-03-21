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
                        <h4 class="title semibold">Form Layout</h4>
                    </div>
                    <div class="page-header-section">
                        <!-- Toolbar -->
                        <div class="toolbar">
                            <ol class="breadcrumb breadcrumb-transparent nm">
                                <li><a href="javascript:void(0);">Form</a></li>
                                <li class="active">Layout</li>
                            </ol>
                        </div>
                        <!--/ Toolbar -->
                    </div>
                </div>
                <!-- Page Header -->

                <!-- START row -->
                <div class="row">
                    <div class="col-md-6">
                        <!-- Form default layout -->
                        <form class="panel panel-default" action="">
                            <div class="panel-heading">
                                <h3 class="panel-title">Default Layout</h3>
                            </div>               
                            <div class="panel-body">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <label class="control-label">Which one?</label>
                                            <select name="type" class="form-control">
                                                <option value="">Select</option>
                                                <option value="1">Ninja shirt</option>
                                                <option value="2">Pirate shirt</option>
                                                <option value="3">Bobo shirt</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <label class="control-label">Size</label>
                                            <select name="size" class="form-control">
                                                <option value="">Select</option>
                                                <option value="1">S</option>
                                                <option value="2">M</option>
                                                <option value="3">L</option>
                                                <option value="3">XL</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="control-label">Color</label>
                                            <select name="color" class="form-control">
                                                <option value="">Select</option>
                                                <option value="1">Red</option>
                                                <option value="2">Green</option>
                                                <option value="3">Yellow</option>
                                                <option value="3">Purple</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <label class="control-label">Name</label>
                                            <input name="name" type="text" class="form-control">
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="control-label">Email</label>
                                            <input name="email" type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <label class="control-label">Address</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12 mb10">
                                            <input name="street" type="text" class="form-control" placeholder="Street Address">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12 mb10">
                                            <input name="addressline" type="text" class="form-control" placeholder="Address Line 2">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6 mb10">
                                            <input name="city" type="text" class="form-control" placeholder="City">
                                        </div>
                                        <div class="col-sm-6 mb10">
                                            <input name="state" type="text" class="form-control" placeholder="State / Province / Region">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="checkbox custom-checkbox">  
                                        <input type="checkbox" name="gift" id="giftcheckbox" value="1">  
                                        <label for="giftcheckbox">&nbsp;&nbsp;Send as a gift</label>   
                                    </div>
                                </div>
                            </div>
                            <div class="panel-footer">
                                <button type="submit" class="btn btn-primary">Proceed</button>
                                <button type="reset" class="btn btn-inverse">Reset</button>
                            </div>
                        </form>
                        <!--/ Form default layout -->
                    </div>

                    <div class="col-md-6">
                        <!-- Form horizontal layout -->
                        <form class="form-horizontal panel panel-default" action="">
                            <div class="panel-heading">
                                <h3 class="panel-title">Horizontal Layout</h3>
                            </div>               
                            <div class="panel-body">
                                <div class="form-group">
                                    <label class="control-label col-sm-4">Which one?</label>
                                    <div class="col-sm-8">
                                        <select name="type" class="form-control">
                                            <option value="">Select</option>
                                            <option value="1">Ninja shirt</option>
                                            <option value="2">Pirate shirt</option>
                                            <option value="3">Bobo shirt</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-4">Size</label>
                                    <div class="col-sm-8">
                                        <select name="size" class="form-control">
                                            <option value="">Select</option>
                                            <option value="1">S</option>
                                            <option value="2">M</option>
                                            <option value="3">L</option>
                                            <option value="3">XL</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-4">Color</label>
                                    <div class="col-sm-8">
                                        <select name="color" class="form-control">
                                            <option value="">Select</option>
                                            <option value="1">Red</option>
                                            <option value="2">Green</option>
                                            <option value="3">Yellow</option>
                                            <option value="3">Purple</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-4">Name</label>
                                    <div class="col-sm-8">
                                        <input name="name" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-4">Email</label>
                                    <div class="col-sm-8">
                                        <input name="email" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-4">Address</label>
                                    <div class="col-sm-8">
                                        <div class="row mb5">
                                            <div class="col-sm-12"><input name="street" type="text" class="form-control" placeholder="Street Address"></div>
                                        </div>
                                        <div class="row mb5">
                                            <div class="col-sm-12"><input name="addressline" type="text" class="form-control" placeholder="Address Line 2"></div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-6 pr5"><input name="city" type="text" class="form-control" placeholder="City"></div>
                                            <div class="col-xs-6 pl5"><input name="state" type="text" class="form-control" placeholder="State / Province / Region"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-8 col-sm-offset-4">
                                        <div class="checkbox custom-checkbox">  
                                            <input type="checkbox" name="gift" id="giftcheckbox" value="1">  
                                            <label for="giftcheckbox">&nbsp;&nbsp;Send as a gift</label>   
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel-footer">
                                <button type="submit" class="btn btn-primary">Proceed</button>
                                <button type="reset" class="btn btn-inverse">Reset</button>
                            </div>
                        </form>
                        <!--/ Form horizontal layout -->
                    </div>
                </div>
                <!--/ END row -->

                <!-- START row -->
                <div class="row">
                    <div class="col-md-6">
                        <!-- Form horizontal layout bordered -->
                        <form class="form-horizontal form-bordered panel panel-default" action="">
                            <div class="panel-heading">
                                <h3 class="panel-title">Horizontal Layout - bordered</h3>
                            </div>               
                            <div class="panel-body">
                                <div class="form-group">
                                    <label class="control-label col-sm-4">Which one?</label>
                                    <div class="col-sm-8">
                                        <select name="type" class="form-control">
                                            <option value="">Select</option>
                                            <option value="1">Ninja shirt</option>
                                            <option value="2">Pirate shirt</option>
                                            <option value="3">Bobo shirt</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-4">Size</label>
                                    <div class="col-sm-8">
                                        <select name="size" class="form-control">
                                            <option value="">Select</option>
                                            <option value="1">S</option>
                                            <option value="2">M</option>
                                            <option value="3">L</option>
                                            <option value="3">XL</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-4">Color</label>
                                    <div class="col-sm-8">
                                        <select name="color" class="form-control">
                                            <option value="">Select</option>
                                            <option value="1">Red</option>
                                            <option value="2">Green</option>
                                            <option value="3">Yellow</option>
                                            <option value="3">Purple</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-4">Name</label>
                                    <div class="col-sm-8">
                                        <input name="name" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-4">Email</label>
                                    <div class="col-sm-8">
                                        <input name="email" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-4">Address</label>
                                    <div class="col-sm-8">
                                        <div class="row mb5">
                                            <div class="col-sm-12"><input name="street" type="text" class="form-control" placeholder="Street Address"></div>
                                        </div>
                                        <div class="row mb5">
                                            <div class="col-sm-12"><input name="addressline" type="text" class="form-control" placeholder="Address Line 2"></div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-6 pr5"><input name="city" type="text" class="form-control" placeholder="City"></div>
                                            <div class="col-xs-6 pl5"><input name="state" type="text" class="form-control" placeholder="State / Province / Region"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-8 col-sm-offset-4">
                                        <div class="checkbox custom-checkbox">  
                                            <input type="checkbox" name="gift" id="giftcheckbox" value="1">  
                                            <label for="giftcheckbox">&nbsp;&nbsp;Send as a gift</label>   
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel-footer">
                                <button type="submit" class="btn btn-primary">Proceed</button>
                                <button type="reset" class="btn btn-inverse">Reset</button>
                            </div>
                        </form>
                        <!--/ Form horizontal layout bordered -->
                    </div>

                    <div class="col-md-6">
                        <!-- Form horizontal layout striped -->
                        <form class="form-horizontal form-striped panel panel-default" action="">
                            <div class="panel-heading">
                                <h3 class="panel-title">Horizontal Layout - striped</h3>
                            </div>               
                            <div class="panel-body">
                                <div class="form-group">
                                    <label class="control-label col-sm-4">Which one?</label>
                                    <div class="col-sm-8">
                                        <select name="type" class="form-control">
                                            <option value="">Select</option>
                                            <option value="1">Ninja shirt</option>
                                            <option value="2">Pirate shirt</option>
                                            <option value="3">Bobo shirt</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-4">Size</label>
                                    <div class="col-sm-8">
                                        <select name="size" class="form-control">
                                            <option value="">Select</option>
                                            <option value="1">S</option>
                                            <option value="2">M</option>
                                            <option value="3">L</option>
                                            <option value="3">XL</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-4">Color</label>
                                    <div class="col-sm-8">
                                        <select name="color" class="form-control">
                                            <option value="">Select</option>
                                            <option value="1">Red</option>
                                            <option value="2">Green</option>
                                            <option value="3">Yellow</option>
                                            <option value="3">Purple</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-4">Name</label>
                                    <div class="col-sm-8">
                                        <input name="name" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-4">Email</label>
                                    <div class="col-sm-8">
                                        <input name="email" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-4">Address</label>
                                    <div class="col-sm-8">
                                        <div class="row mb5">
                                            <div class="col-sm-12"><input name="street" type="text" class="form-control" placeholder="Street Address"></div>
                                        </div>
                                        <div class="row mb5">
                                            <div class="col-sm-12"><input name="addressline" type="text" class="form-control" placeholder="Address Line 2"></div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-6 pr5"><input name="city" type="text" class="form-control" placeholder="City"></div>
                                            <div class="col-xs-6 pl5"><input name="state" type="text" class="form-control" placeholder="State / Province / Region"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-8 col-sm-offset-4">
                                        <div class="checkbox custom-checkbox">  
                                            <input type="checkbox" name="gift" id="giftcheckbox" value="1">  
                                            <label for="giftcheckbox">&nbsp;&nbsp;Send as a gift</label>   
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel-footer">
                                <button type="submit" class="btn btn-primary">Proceed</button>
                                <button type="reset" class="btn btn-inverse">Reset</button>
                            </div>
                        </form>
                        <!--/ Form horizontal layout striped -->
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