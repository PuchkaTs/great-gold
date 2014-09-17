<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('meta-title', 'Great Gold Star Construction')</title>
    <meta name="description" content="Great Gold Star Construction company. Building design, structure, foundation, curtain wall services">
    <meta name="author" content="AirKreativ">
    <link rel="stylesheet" type="text/css" href="/css/css_uikit/uikit.min.css">
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
    <link href='http://fonts.googleapis.com/css?family=Roboto:300&subset=latin,cyrillic-ext' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="/css/main.css">
    <link rel="stylesheet" type="text/css" href="/css/image_css/style1.css">
    <link rel="stylesheet" type="text/css" href="/css/image_css/style_common.css">
    <link rel="stylesheet" type="text/css" href="/css/flexslider/flexslider.css">
    <link rel="icon" href="/favic.ico">
    <script src="/js/respond.min.js"></script>
    @yield('css')
</head>

<body>
@include('layouts.partials.nav')

<div class="container-fluid">
    @include('flash::message')
    @yield('content')
</div>

@include('layouts.partials.footer')
<script src="/js/jquery-1.11.1.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="/js/js_uikit/uikit.min.js"></script>
<script src="/js/jquery-scrollspy.js"></script>
<script src="/js/flexslider/jquery.flexslider-min.js"></script>
<script src="/js/air.js"></script>
@yield('script')
</body>
</html>