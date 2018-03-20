@extends('layouts.auth')

@section('content')
<!-- START Template Main -->
<section id="main" role="main">
    <!-- START Template Container -->
    <section class="container">
        <!-- START row -->
        <div class="row">
            <div class="col-lg-4 col-lg-offset-4">
                <!-- Brand -->
                <div class="text-center" style="margin-bottom:20px;">
                    <span class="logo-figure inverse"></span>
                    <span class="logo-text inverse"></span>
                    <h5 class="semibold text-muted mt-5">@lang('auth.register.title')</h5>
                </div>
                <!--/ Brand -->

                <!-- Register form -->
                <form class="panel -auth-form" name="form-register" action="/register" method="post">
                    {{csrf_field()}}
                    <div class="panel-body">
                        <div class="form-group">
                            <label class="control-label">@lang('auth.register.label.name')</label>
                            <div class="has-icon pull-left">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" autofocus data-parsley-required>
                                <i class="ico-user2 form-control-icon"></i>
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label">@lang('auth.register.label.password')</label>
                            <div class="has-icon pull-left">
                                <input type="password" class="form-control" name="password" data-parsley-required>
                                <i class="ico-key2 form-control-icon"></i>
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label">@lang('auth.register.label.password_confirmation')</label>
                            <div class="has-icon pull-left">
                                <input type="password" class="form-control" name="password_confirmation" data-parsley-equalto="input[name=password]">
                                <i class="ico-asterisk form-control-icon"></i>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label">@lang('auth.register.label.email')</label>
                            <div class="has-icon pull-left">
                                <input type="email" class="form-control" name="email" placeholder="you@mail.com">
                                <i class="ico-envelop form-control-icon"></i>
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="checkbox custom-checkbox">
                                <input type="checkbox" name="agree" id="agree" value="1" data-parsley-required>
                                <label for="agree">&nbsp;&nbsp;@lang('auth.register.agree') <a class="semibold" href="javascript:void(0);">@lang('auth.register.term')</a></label>
                                @if ($errors->has('agree'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('agree') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="panel-footer">

                        <div class="col-md-12 message-container"></div>

                        <button type="submit" class="btn btn-block btn-success"><span class="semibold">@lang('auth.register.label.register')</span></button>
                    </div>
                </form>
                <!-- Register form -->

                <hr><!-- horizontal line -->

                <p class="text-center">
                    <span class="text-muted">@lang('auth.register.already_registered') <a class="semibold" href="/login">@lang('auth.register.got_to_login')</a></span>
                </p>
            </div>
        </div>
        <!--/ END row -->
    </section>
    <!--/ END Template Container -->
</section>
<!--/ END Template Main -->
@endsection