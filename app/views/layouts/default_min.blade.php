<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('meta-title', 'Great gold star construction')</title>
    <meta name="description" content="The HTML5 Herald">
    <meta name="author" content="SitePoint">
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/css/animate.css">
    <link rel="stylesheet" type="text/css" href="/css/animations.css">
    <link rel="stylesheet" type="text/css" href="/css/component.css">
    <link rel="stylesheet" type="text/css" href="/css/docs.min.css">
    <link href='http://fonts.googleapis.com/css?family=Comfortaa' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<!--    <link rel="stylesheet" type="text/css" href="/css/jquery.fullPage.css" />-->
    <link rel="stylesheet" type="text/css" href="/css/social-buttons.css"/>
    <link rel="stylesheet" type="text/css" href="/css/main.css">
    <link rel="icon" href="/favicon.ico">
    <script src="/js/modernizr.custom.js"></script>
    <script src="/js/respond.min.js"></script>
    @yield('css')
</head>

<body>
@include('layouts.partials.nav')


@yield('content')
@include('layouts.partials.footer')
<script src="/js/jquery-1.11.1.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="/js/wow.min.js"></script>

<!--[if IE]>
<script type="text/javascript">
    var console = { log: function() {} };
</script>
<![endif]-->
<script type="text/javascript" src="/js/vendors/jquery.slimscroll.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/jquery-ui.min.js"></script>
<script type="text/javascript" src="/js/jquery.fullPage.js"></script>
<script type="text/javascript" src="/js/examples.js"></script>
@yield('script')

<script>
    new WOW().init();
</script>
</body>
</html>