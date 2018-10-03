<!DOCTYPE html>
<html class="backend">
    <!-- START Head -->
    <head>
        <!-- START META SECTION -->
        @include('partials.head_meta')
        <!--/ END META SECTION -->

        <!-- START STYLESHEETS -->
        <!-- Plugins stylesheet : optional -->
        <link rel="stylesheet" href="/plugins/selectize/css/selectize.css">
        <link rel="stylesheet" href="/plugins/jquery-ui/css/jquery-ui.css">
        <link rel="stylesheet" href="/plugins/select2/css/select2.css">
        <link rel="stylesheet" href="/plugins/touchspin/css/touchspin.css">
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
                        <h4 class="title semibold">Form elements</h4>
                    </div>
                    <div class="page-header-section">
                        <!-- Toolbar -->
                        <div class="toolbar">
                            <ol class="breadcrumb breadcrumb-transparent nm">
                                <li><a href="javascript:void(0);">Forms</a></li>
                                <li class="active">Elements</li>
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
                                <h3 class="panel-title">General</h3>
                            </div>
                            <!--/ panel heading/header -->
                            <!-- panel body -->
                            <div class="panel-body">
                                <form class="form-horizontal form-bordered" action="">
                                    <h4 class="text-primary mt0">Basic example</h4>
                                    <p class="pb10">Individual form controls automatically receive some global styling. All textual <code>&lt;input&gt;</code>, <code>&lt;textarea&gt;</code>, and <code>&lt;select&gt;</code> elements with <code>.form-control</code> are set to <code>width: 100%;</code> by default. Wrap labels and controls in <code>.form-group</code> for optimum spacing.</p>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Input Text</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Input Password</label>
                                        <div class="col-sm-9">
                                            <input type="password" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Help text</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control">
                                            <span class="help-block">Help text that breaks onto a new line and may extend beyond one line.</span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Input Placeholder</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" placeholder="Placeholder...">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Textarea</label>
                                        <div class="col-sm-9">
                                            <textarea class="form-control" rows="3"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Select</label>
                                        <div class="col-sm-9">
                                            <select class="form-control">
                                                <option value="1">Option 1</option>
                                                <option value="2">Option 2</option>
                                                <option value="3">Option 3</option>
                                                <option value="4">Option 4</option>
                                                <option value="5">Option 5</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Custom select</label>
                                        <div class="col-sm-9">
                                            <select class="form-control" id="selectize-customselect">
                                                <option value="1">Option 1</option>
                                                <option value="2">Option 2</option>
                                                <option value="3">Option 3</option>
                                                <option value="4">Option 4</option>
                                                <option value="5">Option 5</option>
                                            </select>
                                            <small class="help-block text-danger">*Require selectize plugin to be include.</small>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Select Multiple</label>
                                        <div class="col-sm-9">
                                            <select class="form-control" multiple>
                                                <option value="1">Option 1</option>
                                                <option value="2">Option 2</option>
                                                <option value="3">Option 3</option>
                                                <option value="4">Option 4</option>
                                                <option value="5">Option 5</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Static control</label>
                                        <div class="col-sm-9">
                                            <p class="form-control-static">email@example.com</p>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Checkbox</label>
                                        <div class="col-sm-9">
                                            <label class="checkbox-inline">
                                                <input type="checkbox" value="option1"> Checkbox 1
                                            </label>
                                            <label class="checkbox-inline">
                                                <input type="checkbox" value="option2"> Checkbox 2
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Custom checkbox</label>
                                        <div class="col-sm-9">
                                            <span class="checkbox custom-checkbox custom-checkbox-inverse">
                                                <input type="checkbox" name="customcheckbox1" id="customcheckbox1" />
                                                <label for="customcheckbox1">&nbsp;&nbsp;Checkbox 1</label>
                                            </span>
                                            <span class="checkbox custom-checkbox">
                                                <input type="checkbox" name="customcheckbox2" id="customcheckbox2" />
                                                <label for="customcheckbox2">&nbsp;&nbsp;Checkbox 2</label>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Radio Button</label>
                                        <div class="col-sm-9">
                                            <label class="radio-inline">
                                                <input type="radio" value="option1">Radio 1
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" value="option2">Radio 2
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Custom radio</label>
                                        <div class="col-sm-9">
                                            <span class="radio custom-radio custom-radio-primary">
                                                <input type="radio" id="customradio1" value="option1">
                                                <label for="customradio1">&nbsp;&nbsp;Radio 1</label>
                                            </span>
                                            <span class="radio custom-radio custom-radio-teal">
                                                <input type="radio" id="customradio2" value="option2">
                                                <label for="customradio2">&nbsp;&nbsp;Radio 2</label>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Native file Upload</label>
                                        <div class="col-sm-9">
                                            <input type="file" name="upload">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Custom file Upload</label>
                                        <div class="col-sm-9">
                                            <div class="input-group">
                                                <input type="text" class="form-control" readonly>
                                                <span class="input-group-btn">
                                                    <div class="btn btn-primary btn-file">
                                                        <span class="icon iconmoon-file-3"></span> Browse <input type="file">
                                                    </div>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Stack Input</label>
                                        <div class="col-sm-9">
                                            <div class="form-stack-wrapper">
                                                <div class="form-stack has-icon">
                                                    <input type="text" class="form-control input-lg" placeholder="Stack one">
                                                    <i class="ico-pencil5 form-control-icon"></i>
                                                </div>
                                                <div class="form-stack has-icon pull-left">
                                                    <input type="text" class="form-control input-lg" placeholder="Stack two">
                                                    <i class="ico-camera form-control-icon"></i>
                                                </div>
                                                <div class="form-stack has-icon">
                                                    <input type="text" class="form-control input-lg" placeholder="Stack three">
                                                    <i class="ico-bubble10 form-control-icon"></i>
                                                </div>
                                            </div>
                                            <p class="help-block mb0 mt10">Default font-size on <code>input-lg</code> is 13px</p>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Has Icon</label>
                                        <div class="col-sm-9">
                                            <div class="has-icon mb10">
                                                <input type="text" class="form-control">
                                                <i class="ico-lock2 form-control-icon"></i>
                                            </div>
                                            <div class="has-icon pull-left">
                                                <input type="text" class="form-control input-lg">
                                                <i class="ico-cog2 form-control-icon"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel-footer">
                                        <div class="form-group no-border">
                                            <label class="col-sm-3 control-label">Button</label>
                                            <div class="col-sm-9">
                                                <button type="submit" class="btn btn-primary">Submit button</button>
                                                <button type="reset" class="btn btn-danger">Reset button</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!-- panel body -->
                        </div>
                        <!--/ END form panel -->
                    </div>
                </div>
                <!--/ END row -->

                <!-- START row -->
                <div class="row">
                    <div class="col-md-12">
                        <!-- START panel -->
                        <form class="panel panel-default form-horizontal form-bordered" action="">
                            <!-- panel heading/header -->
                            <div class="panel-heading">
                                <h3 class="panel-title">Form State</h3>
                            </div>
                            <!--/ panel heading/header -->
                            <!-- panel body -->
                            <div class="panel-body">
                                <h4 class="text-teal mt0">Validation states</h4>
                                <p class="pb10">Includes validation styles for error, warning, and success states on form controls. To use, add <code>.has-warning</code>, <code>.has-error</code>, or <code>.has-success</code> to the parent element. Any <code>.control-label</code>, <code>.form-control</code>, and <code>.help-block</code> within that element will receive the validation styles.</p>
                                <div class="form-group has-success">
                                    <label class="col-sm-3 control-label">Success state</label>
                                    <div class="col-sm-9">
                                        <div class="has-feedback">
                                            <input class="form-control" type="text">
                                            <span class="ico-checkmark form-control-feedback"></span>
                                        </div>
                                        <select class="form-control mt10">
                                            <option value="">Select</option>
                                            <option value="1">Option 1</option>
                                            <option value="2">Option 2</option>
                                            <option value="3">Option 3</option>
                                            <option value="4">Option 4</option>
                                            <option value="5">Option 5</option>
                                        </select>
                                        <span class="checkbox custom-checkbox">
                                            <input type="checkbox" id="successcheckbox1" value="option1">
                                            <label for="successcheckbox1">&nbsp;&nbsp;Checkbox</label>
                                        </span>
                                        <div class="help-block mt10">Help text that breaks onto a new line and may extend beyond one line.</div>
                                    </div>
                                </div>
                                <div class="form-group has-warning">
                                    <label class="col-sm-3 control-label">Warning state</label>
                                    <div class="col-sm-9">
                                        <div class="has-feedback">
                                            <input class="form-control" type="text">
                                            <span class="ico-warning-sign form-control-feedback"></span>
                                        </div>
                                        <select class="form-control mt10">
                                            <option value="">Select</option>
                                            <option value="1">Option 1</option>
                                            <option value="2">Option 2</option>
                                            <option value="3">Option 3</option>
                                            <option value="4">Option 4</option>
                                            <option value="5">Option 5</option>
                                        </select>
                                        <span class="radio custom-radio">
                                            <input type="radio" id="warningradio1" value="option1">
                                            <label for="warningradio1">&nbsp;&nbsp;Radio Button</label>
                                        </span>
                                        <div class="help-block mt10">Help text that breaks onto a new line and may extend beyond one line.</div>
                                    </div>
                                </div>
                                <div class="form-group has-error">
                                    <label class="col-sm-3 control-label">Error state</label>
                                    <div class="col-sm-9">
                                        <div class="has-feedback">
                                            <input class="form-control" type="text">
                                            <span class="ico-close2 form-control-feedback"></span>
                                        </div>
                                        <select class="form-control mt10">
                                            <option value="">Select</option>
                                            <option value="1">Option 1</option>
                                            <option value="2">Option 2</option>
                                            <option value="3">Option 3</option>
                                            <option value="4">Option 4</option>
                                            <option value="5">Option 5</option>
                                        </select>
                                        <span class="checkbox custom-checkbox">
                                            <input type="checkbox" id="errorcheckbox1" value="option1">
                                            <label for="errorcheckbox1">&nbsp;&nbsp;Checkbox</label>
                                        </span>
                                        <div class="help-block mt10">Help text that breaks onto a new line and may extend beyond one line.</div>
                                    </div>
                                </div>
                            </div>
                            <!--/ panel body -->
                        </form>
                        <!-- END form panel -->
                    </div>
                </div>
                <!--/ END row -->

                <!-- START row -->
                <div class="row">
                    <div class="col-md-6">
                        <!-- START panel -->
                        <form class="panel panel-default form-horizontal form-bordered" action="">
                            <!-- panel heading/header -->
                            <div class="panel-heading">
                                <h3 class="panel-title">Form Sizing</h3>
                            </div>
                            <!--/ panel heading/header -->
                            <!-- panel body -->
                            <div class="panel-body">
                                <h4>Height sizing</h4>
                                <p class="text-info">Set heights using classes like <code>.input-lg</code>, and set widths using grid column classes like <code>.col-lg-*</code>.</p>
                                <p><input class="form-control input-lg" type="text" placeholder=".input-lg"></p>
                                <p><input type="text" class="form-control" placeholder="Default input"></p>
                                <p><input class="form-control input-sm" type="text" placeholder=".input-sm"></p>
                                <p>
                                    <select class="form-control input-lg">
                                        <option value="">.input-lg</option>
                                    </select>
                                </p>
                                <p>
                                    <select class="form-control">
                                        <option value="">Default select</option>
                                    </select>
                                </p>
                                <p>
                                    <select class="form-control input-sm">
                                        <option value="">.input-sm</option>
                                    </select>
                                </p>
                            </div>
                            <div class="panel-body">
                                <h4>Column sizing</h4>
                                <p class="text-info">Wrap inputs in grid columns, or any custom parent element, to easily enforce desired widths.</p>
                                <div class="row">
                                    <div class="col-sm-2">
                                        <input type="text" class="form-control" placeholder=".col-sm-2">
                                    </div>
                                    <div class="col-sm-3">
                                        <input type="text" class="form-control" placeholder=".col-sm-3">
                                    </div>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" placeholder=".col-sm-4">
                                    </div>
                                </div>
                            </div>
                            <!--/ panel body -->
                        </form>
                        <!-- END form panel -->
                    </div>

                    <div class="col-md-6">
                        <!-- START panel -->
                        <form class="panel panel-default form-horizontal form-bordered" action="">
                            <!-- panel heading/header -->
                            <div class="panel-heading">
                                <h3 class="panel-title">Input groups</h3>
                            </div>
                            <!--/ panel heading/header -->
                            <!-- panel body -->
                            <div class="panel-body">
                                <p class="text-info">Extend form controls by adding text or buttons before, after, or on both sides of any text-based input.</p>
                                <div class="form-group has-warning">
                                    <div class="col-sm-12">
                                        <div class="input-group input-group-lg">
                                            <span class="input-group-addon">@</span>
                                            <input type="text" class="form-control" placeholder=".input-group-lg">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <div class="input-group input-group-sm">
                                            <input type="text" class="form-control" placeholder=".input-group-sm">
                                            <span class="input-group-addon">.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <div class="input-group">
                                            <span class="input-group-addon">$</span>
                                            <input type="text" class="form-control">
                                            <span class="input-group-addon">.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="ico-lock2"></i></span>
                                            <input type="text" class="form-control">
                                            <span class="input-group-addon"><i class="ico-key2"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <div class="input-group">
                                            <span class="input-group-btn">
                                                <button class="btn btn-primary" type="button">Go!</button>
                                            </span>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <div class="input-group">
                                            <input type="text" class="form-control">
                                            <span class="input-group-btn">
                                                <button class="btn btn-info" type="button">Go!</button>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <div class="input-group">
                                            <div class="input-group-btn">
                                                <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown">Action <span class="caret"></span></button>
                                                <ul class="dropdown-menu">
                                                    <li><a href="#">Action</a></li>
                                                    <li><a href="#">Another action</a></li>
                                                    <li><a href="#">Something else here</a></li>
                                                    <li class="divider"></li>
                                                    <li><a href="#">Separated link</a></li>
                                                </ul>
                                            </div><!-- /btn-group -->
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <div class="input-group">
                                            <input type="text" class="form-control">
                                            <div class="input-group-btn">
                                                <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">Action <span class="caret"></span></button>
                                                <ul class="dropdown-menu pull-right">
                                                    <li><a href="#">Action</a></li>
                                                    <li><a href="#">Another action</a></li>
                                                    <li><a href="#">Something else here</a></li>
                                                    <li class="divider"></li>
                                                    <li><a href="#">Separated link</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <div class="input-group">
                                            <div class="input-group-btn">
                                                <button type="button" class="btn btn-inverse">Action</button>
                                                <button type="button" class="btn btn-inverse dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button>
                                                <ul class="dropdown-menu">
                                                    <li><a href="#">Action</a></li>
                                                    <li><a href="#">Another action</a></li>
                                                    <li><a href="#">Something else here</a></li>
                                                    <li class="divider"></li>
                                                    <li><a href="#">Separated link</a></li>
                                                </ul>
                                            </div>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--/ panel body -->
                        </form>
                        <!-- END form panel -->
                    </div>
                </div>
                <!--/ END row -->

                <!-- START row -->
                <div class="row">
                    <div class="col-md-12">
                        <!-- START panel -->
                        <form class="panel panel-default form-horizontal form-bordered" action="">
                            <!-- panel heading/header -->
                            <div class="panel-heading">
                                <h3 class="panel-title">Selectize</h3>
                            </div>
                            <!--/ panel heading/header -->
                            <!-- panel body -->
                            <div class="panel-body">
                                <p>Selectize is the hybrid of a textbox and box. It's jQuery-based and it's useful for tagging, contact lists, country selectors, and so on.</p>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Tagging</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="selectize-tagging" value="awesome,neat">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Select</label>
                                    <div class="col-sm-9">
                                        <select id="selectize-select" class="form-control" placeholder="Select a person...">
                                            <option value="">Select a person...</option>
                                            <option value="4">Thomas Edison</option>
                                            <option value="1">Nikola</option>
                                            <option value="3">Nikola Tesla</option>
                                            <option value="5">Arnold Schwarzenegger</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Select multiple</label>
                                    <div class="col-sm-9">
                                        <select id="selectize-selectmultiple" class="form-control" placeholder="Select state..." multiple>
                                            <option value="">Select a state...</option>
                                            <option value="AL">Alabama</option>
                                            <option value="AK">Alaska</option>
                                            <option value="AZ">Arizona</option>
                                            <option value="AR">Arkansas</option>
                                            <option value="CA" selected>California</option>
                                            <option value="CO">Colorado</option>
                                            <option value="CT">Connecticut</option>
                                            <option value="DE">Delaware</option>
                                            <option value="DC">District of Columbia</option>
                                            <option value="FL">Florida</option>
                                            <option value="GA">Georgia</option>
                                            <option value="HI">Hawaii</option>
                                            <option value="ID">Idaho</option>
                                            <option value="IL">Illinois</option>
                                            <option value="IN">Indiana</option>
                                            <option value="IA">Iowa</option>
                                            <option value="KS">Kansas</option>
                                            <option value="KY">Kentucky</option>
                                            <option value="LA">Louisiana</option>
                                            <option value="ME">Maine</option>
                                            <option value="MD">Maryland</option>
                                            <option value="MA">Massachusetts</option>
                                            <option value="MI">Michigan</option>
                                            <option value="MN">Minnesota</option>
                                            <option value="MS">Mississippi</option>
                                            <option value="MO">Missouri</option>
                                            <option value="MT">Montana</option>
                                            <option value="NE">Nebraska</option>
                                            <option value="NV">Nevada</option>
                                            <option value="NH">New Hampshire</option>
                                            <option value="NJ">New Jersey</option>
                                            <option value="NM">New Mexico</option>
                                            <option value="NY">New York</option>
                                            <option value="NC">North Carolina</option>
                                            <option value="ND">North Dakota</option>
                                            <option value="OH">Ohio</option>
                                            <option value="OK">Oklahoma</option>
                                            <option value="OR">Oregon</option>
                                            <option value="PA">Pennsylvania</option>
                                            <option value="RI">Rhode Island</option>
                                            <option value="SC">South Carolina</option>
                                            <option value="SD">South Dakota</option>
                                            <option value="TN">Tennessee</option>
                                            <option value="TX">Texas</option>
                                            <option value="UT">Utah</option>
                                            <option value="VT">Vermont</option>
                                            <option value="VA">Virginia</option>
                                            <option value="WA">Washington</option>
                                            <option value="WV">West Virginia</option>
                                            <option value="WI">Wisconsin</option>
                                            <option value="WY" selected>Wyoming</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Contact style</label>
                                    <div class="col-sm-9">
                                        <select id="selectize-contact" class="form-control" placeholder="Select contact..."></select>
                                    </div>
                                </div>
                            </div>
                            <!--/ panel body -->
                        </form>
                        <!-- END panel -->
                    </div>
                </div>
                <!--/ END row -->

                <!-- START row -->
                <div class="row">
                    <div class="col-md-6">
                        <!-- START panel -->
                        <form class="panel panel-default form-horizontal form-bordered" action="">
                            <!-- panel heading/header -->
                            <div class="panel-heading">
                                <h3 class="panel-title">Input Masking</h3>
                            </div>
                            <!--/ panel heading/header -->
                            <!-- panel body -->
                            <div class="panel-body">
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">ISBN</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" data-mask="999-99-999-9999-9" placeholder="ISBN">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Date</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" data-mask="99/99/9999" placeholder="Date">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Phone</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" data-mask="(999) 999-9999" placeholder="Phone">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">TIN</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" data-mask="99-9999999" placeholder="TIN">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">SSN</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" data-mask="999-99-9999" placeholder="SSN">
                                    </div>
                                </div>
                            </div>
                            <!--/ panel body -->
                        </form>
                        <!-- END form panel -->
                    </div>

                    <div class="col-md-6">
                        <!-- START panel -->
                        <form class="panel panel-default form-horizontal form-bordered" action="">
                            <!-- panel heading/header -->
                            <div class="panel-heading">
                                <h3 class="panel-title">Datepicker</h3>
                            </div>
                            <!--/ panel heading/header -->
                            <!-- panel body with collapse capabale -->
                            <div class="panel-collapse">
                                <div class="panel-body">
                                    <div class="form-group">
                                        <label class="col-sm-4 control-label">Default</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="datepicker1" placeholder="Select a date" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-4 control-label">Date other month</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="datepicker2" placeholder="Select a date" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-4 control-label">Button bar</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="datepicker3" placeholder="Select a date" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-4 control-label">Display month &amp; year</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="datepicker4" placeholder="Select a date" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-4 control-label">Select date range</label>
                                        <div class="col-sm-8">
                                            <div class="row">
                                                <div class="col-md-6"><input type="text" class="form-control" id="datepicker-from" placeholder="From" /></div>
                                                <div class="col-md-6"><input type="text" class="form-control" id="datepicker-to" placeholder="to" /></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--/ panel body with collapse capabale -->
                        </form>
                        <!-- END form panel -->
                    </div>
                </div>
                <!--/ END row -->

                <!-- START Row -->
                <div class="row">
                    <div class="col-md-6">
                        <!-- START panel -->
                        <form class="panel panel-default form-horizontal form-bordered" action="">
                            <!-- panel heading/header -->
                            <div class="panel-heading">
                                <h3 class="panel-title">Timepicker</h3>
                            </div>
                            <!--/ panel heading/header -->
                            <!-- panel body with collapse capabale -->
                            <div class="panel-collapse">
                                <div class="panel-body">
                                    <div class="form-group">
                                        <label class="col-sm-4 control-label">Date + Timepicker</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="datetime-picker" placeholder="Select a date and time" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-4 control-label">Timepicker</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="time-picker" placeholder="Select a time" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-4 control-label">Time format</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="time-picker-format" placeholder="Select a time" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-4 control-label">Time zone</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="time-picker-timezone" placeholder="Select a time" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--/ panel body with collapse capabale -->
                        </form>
                        <!-- END form panel -->
                    </div>

                    <div class="col-md-6">
                        <!-- START panel -->
                        <form class="panel panel-default form-horizontal form-bordered" action="">
                            <!-- panel heading/header -->
                            <div class="panel-heading">
                                <h3 class="panel-title">Select2</h3>
                            </div>
                            <!--/ panel heading/header -->
                            <!-- panel body with collapse capabale -->
                            <div class="panel-collapse">
                                <div class="panel-body">
                                    <div class="form-group">
                                        <label class="col-sm-4 control-label">Basic</label>
                                        <div class="col-sm-8">
                                            <select name="select2-basic">
                                                <optgroup label="Alaskan/Hawaiian Time Zone">
                                                    <option value="AK">Alaska</option>
                                                    <option value="HI">Hawaii</option>
                                                </optgroup>
                                                <optgroup label="Pacific Time Zone">
                                                    <option value="CA">California</option>
                                                    <option value="NV">Nevada</option>
                                                    <option value="OR">Oregon</option>
                                                    <option value="WA">Washington</option>
                                                </optgroup>
                                                <optgroup label="Mountain Time Zone">
                                                    <option value="AZ">Arizona</option>
                                                    <option value="CO">Colorado</option>
                                                    <option value="ID">Idaho</option>
                                                    <option value="MT">Montana</option><option value="NE">Nebraska</option>
                                                    <option value="NM">New Mexico</option>
                                                    <option value="ND">North Dakota</option>
                                                    <option value="UT">Utah</option>
                                                    <option value="WY">Wyoming</option>
                                                </optgroup>
                                                <optgroup label="Central Time Zone">
                                                    <option value="AL">Alabama</option>
                                                    <option value="AR">Arkansas</option>
                                                    <option value="IL">Illinois</option>
                                                    <option value="IA">Iowa</option>
                                                    <option value="KS">Kansas</option>
                                                    <option value="KY">Kentucky</option>
                                                    <option value="LA">Louisiana</option>
                                                    <option value="MN">Minnesota</option>
                                                    <option value="MS">Mississippi</option>
                                                    <option value="MO">Missouri</option>
                                                    <option value="OK">Oklahoma</option>
                                                    <option value="SD">South Dakota</option>
                                                    <option value="TX">Texas</option>
                                                    <option value="TN">Tennessee</option>
                                                    <option value="WI">Wisconsin</option>
                                                </optgroup>
                                                <optgroup label="Eastern Time Zone">
                                                    <option value="CT">Connecticut</option>
                                                    <option value="DE">Delaware</option>
                                                    <option value="FL">Florida</option>
                                                    <option value="GA">Georgia</option>
                                                    <option value="IN">Indiana</option>
                                                    <option value="ME">Maine</option>
                                                    <option value="MD">Maryland</option>
                                                    <option value="MA">Massachusetts</option>
                                                    <option value="MI">Michigan</option>
                                                    <option value="NH">New Hampshire</option><option value="NJ">New Jersey</option>
                                                    <option value="NY">New York</option>
                                                    <option value="NC">North Carolina</option>
                                                    <option value="OH">Ohio</option>
                                                    <option value="PA">Pennsylvania</option><option value="RI">Rhode Island</option><option value="SC">South Carolina</option>
                                                    <option value="VT">Vermont</option><option value="VA">Virginia</option>
                                                    <option value="WV">West Virginia</option>
                                                </optgroup>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-4 control-label">Multiple</label>
                                        <div class="col-sm-8">
                                            <select name="select2-multiple" multiple>
                                                <optgroup label="Alaskan/Hawaiian Time Zone">
                                                    <option value="AK">Alaska</option>
                                                    <option value="HI">Hawaii</option>
                                                </optgroup>
                                                <optgroup label="Pacific Time Zone">
                                                    <option value="CA">California</option>
                                                    <option value="NV">Nevada</option>
                                                    <option value="OR">Oregon</option>
                                                    <option value="WA">Washington</option>
                                                </optgroup>
                                                <optgroup label="Mountain Time Zone">
                                                    <option value="AZ">Arizona</option>
                                                    <option value="CO">Colorado</option>
                                                    <option value="ID">Idaho</option>
                                                    <option value="MT">Montana</option><option value="NE">Nebraska</option>
                                                    <option value="NM">New Mexico</option>
                                                    <option value="ND">North Dakota</option>
                                                    <option value="UT">Utah</option>
                                                    <option value="WY">Wyoming</option>
                                                </optgroup>
                                                <optgroup label="Central Time Zone">
                                                    <option value="AL">Alabama</option>
                                                    <option value="AR">Arkansas</option>
                                                    <option value="IL">Illinois</option>
                                                    <option value="IA">Iowa</option>
                                                    <option value="KS">Kansas</option>
                                                    <option value="KY">Kentucky</option>
                                                    <option value="LA">Louisiana</option>
                                                    <option value="MN">Minnesota</option>
                                                    <option value="MS">Mississippi</option>
                                                    <option value="MO">Missouri</option>
                                                    <option value="OK">Oklahoma</option>
                                                    <option value="SD">South Dakota</option>
                                                    <option value="TX">Texas</option>
                                                    <option value="TN">Tennessee</option>
                                                    <option value="WI">Wisconsin</option>
                                                </optgroup>
                                                <optgroup label="Eastern Time Zone">
                                                    <option value="CT">Connecticut</option>
                                                    <option value="DE">Delaware</option>
                                                    <option value="FL">Florida</option>
                                                    <option value="GA">Georgia</option>
                                                    <option value="IN">Indiana</option>
                                                    <option value="ME">Maine</option>
                                                    <option value="MD">Maryland</option>
                                                    <option value="MA">Massachusetts</option>
                                                    <option value="MI">Michigan</option>
                                                    <option value="NH">New Hampshire</option><option value="NJ">New Jersey</option>
                                                    <option value="NY">New York</option>
                                                    <option value="NC">North Carolina</option>
                                                    <option value="OH">Ohio</option>
                                                    <option value="PA">Pennsylvania</option><option value="RI">Rhode Island</option><option value="SC">South Carolina</option>
                                                    <option value="VT">Vermont</option><option value="VA">Virginia</option>
                                                    <option value="WV">West Virginia</option>
                                                </optgroup>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-4 control-label">Placeholder</label>
                                        <div class="col-sm-8">
                                            <select name="select2-placeholder" multiple>
                                                <optgroup label="Alaskan/Hawaiian Time Zone">
                                                    <option value="AK">Alaska</option>
                                                    <option value="HI">Hawaii</option>
                                                </optgroup>
                                                <optgroup label="Pacific Time Zone">
                                                    <option value="CA">California</option>
                                                    <option value="NV">Nevada</option>
                                                    <option value="OR">Oregon</option>
                                                    <option value="WA">Washington</option>
                                                </optgroup>
                                                <optgroup label="Mountain Time Zone">
                                                    <option value="AZ">Arizona</option>
                                                    <option value="CO">Colorado</option>
                                                    <option value="ID">Idaho</option>
                                                    <option value="MT">Montana</option><option value="NE">Nebraska</option>
                                                    <option value="NM">New Mexico</option>
                                                    <option value="ND">North Dakota</option>
                                                    <option value="UT">Utah</option>
                                                    <option value="WY">Wyoming</option>
                                                </optgroup>
                                                <optgroup label="Central Time Zone">
                                                    <option value="AL">Alabama</option>
                                                    <option value="AR">Arkansas</option>
                                                    <option value="IL">Illinois</option>
                                                    <option value="IA">Iowa</option>
                                                    <option value="KS">Kansas</option>
                                                    <option value="KY">Kentucky</option>
                                                    <option value="LA">Louisiana</option>
                                                    <option value="MN">Minnesota</option>
                                                    <option value="MS">Mississippi</option>
                                                    <option value="MO">Missouri</option>
                                                    <option value="OK">Oklahoma</option>
                                                    <option value="SD">South Dakota</option>
                                                    <option value="TX">Texas</option>
                                                    <option value="TN">Tennessee</option>
                                                    <option value="WI">Wisconsin</option>
                                                </optgroup>
                                                <optgroup label="Eastern Time Zone">
                                                    <option value="CT">Connecticut</option>
                                                    <option value="DE">Delaware</option>
                                                    <option value="FL">Florida</option>
                                                    <option value="GA">Georgia</option>
                                                    <option value="IN">Indiana</option>
                                                    <option value="ME">Maine</option>
                                                    <option value="MD">Maryland</option>
                                                    <option value="MA">Massachusetts</option>
                                                    <option value="MI">Michigan</option>
                                                    <option value="NH">New Hampshire</option><option value="NJ">New Jersey</option>
                                                    <option value="NY">New York</option>
                                                    <option value="NC">North Carolina</option>
                                                    <option value="OH">Ohio</option>
                                                    <option value="PA">Pennsylvania</option><option value="RI">Rhode Island</option><option value="SC">South Carolina</option>
                                                    <option value="VT">Vermont</option><option value="VA">Virginia</option>
                                                    <option value="WV">West Virginia</option>
                                                </optgroup>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--/ panel body with collapse capabale -->
                        </form>
                        <!-- END form panel -->
                    </div>
                </div>
                <!--/ END row -->

                <!-- START Row -->
                <div class="row">
                    <div class="col-md-6">
                        <!-- START panel -->
                        <form class="panel panel-default form-horizontal form-bordered" action="">
                            <!-- panel heading/header -->
                            <div class="panel-heading">
                                <h3 class="panel-title">Bootstrap Touchspin</h3>
                            </div>
                            <!--/ panel heading/header -->
                            <!-- panel body with collapse capabale -->
                            <div class="panel-collapse">
                                <div class="panel-body">
                                    <div class="form-group">
                                        <label class="col-sm-4 control-label">Basic</label>
                                        <div class="col-sm-8">
                                            <input type="text" value="55" name="bs-touchspin-basic">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-4 control-label">Vertical button</label>
                                        <div class="col-sm-8">
                                            <input type="text" value="55" name="bs-touchspin-vbutton">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-4 control-label">With postfix</label>
                                        <div class="col-sm-8">
                                            <input type="text" value="55" name="bs-touchspin-postfix">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-4 control-label">With prefix</label>
                                        <div class="col-sm-8">
                                            <input type="text" value="55" name="bs-touchspin-prefix">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--/ panel body with collapse capabale -->
                        </form>
                        <!-- END form panel -->
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
        <script type="text/javascript" src="/plugins/selectize/js/selectize.js"></script>
        <script type="text/javascript" src="/plugins/jquery-ui/js/jquery-ui.js"></script>
        <script type="text/javascript" src="/plugins/jquery-ui/js/addon/timepicker/jquery-ui-timepicker.js"></script>
        <script type="text/javascript" src="/plugins/jquery-ui/js/jquery-ui-touch.js"></script>
        <script type="text/javascript" src="/plugins/inputmask/js/inputmask.js"></script>
        <script type="text/javascript" src="/plugins/select2/js/select2.js"></script>
        <script type="text/javascript" src="/plugins/touchspin/js/jquery.bootstrap-touchspin.js"></script>
        <script type="text/javascript" src="/js/backend/forms/element.js"></script>
        <!--/ Plugins and page level script : optional -->
        <!--/ END JAVASCRIPT SECTION -->
    </body>
    <!--/ END Body -->
</html>