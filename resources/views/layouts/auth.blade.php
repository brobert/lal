<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" class="backend">
    <!-- START Head -->
    <head>
        <!-- START META SECTION -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'Laravel') }}</title>
        <meta name="author" content="{{ config('app.author', 'optimisticdesigns') }}">
        <meta name="description" content="{{ config('app.description', 'Site description') }}">
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
        <link rel="stylesheet" href="{{ asset('/css/bootstrap.css') }}">
        <link rel="stylesheet" href="{{ asset('/css/layout.css') }}">
        <link rel="stylesheet" href="{{ asset('/css/uielement.css') }}">
        <!--/ Application stylesheet -->

        <!-- Theme stylesheet -->
		<link rel="stylesheet" href="{{ asset('/css/themes/theme.css') }}">
        <!--/ Theme stylesheet -->

        <!-- modernizr script -->
        <script type="text/javascript" src="/plugins/modernizr/js/modernizr.js"></script>
        <!--/ modernizr script -->
        <!-- END STYLESHEETS -->
    </head>
    <!--/ END Head -->

    <!-- START Body -->
    <body>

		@yield('content')

        <!-- START JAVASCRIPT SECTION (Load javascripts at bottom to reduce load time) -->
        <!-- Application and vendor script : mandatory -->
        <script type="text/javascript" src="/js/vendor.js"></script>
        <script type="text/javascript" src="/js/core.js"></script>
        <script type="text/javascript" src="/js/backend/app.js"></script>
        <!--/ Application and vendor script : mandatory -->

        <!-- Plugins and page level script : optional -->
        <script type="text/javascript" src="/js/pace.min.js"></script>
        <script type="text/javascript" src="/plugins/parsley/js/parsley.js"></script>
        <script type="text/javascript" src="/plugins/ladda/js/ladda.js"></script>
        <script type="text/javascript" src="/plugins/nprogress/nprogress.js"></script>
        <script type="text/javascript" src="/js/backend/pages/auth_form.js"></script>
        <!--/ Plugins and page level script : optional -->
        <!--/ END JAVASCRIPT SECTION -->
    </body>
    <!--/ END Body -->
</html>