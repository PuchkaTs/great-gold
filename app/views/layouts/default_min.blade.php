<!doctype html>
<html lang="en">
<head>
    <title>Great Gold Star Construction</title>
    <meta charset="utf-8">
    <meta name="description" content="Great Gold Star Construction company. Building design, structure, foundation, curtain wall services">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:type" content="Great Gold Star Construction">
    <meta property="og:title" content="Great Gold Star Construction">
    <meta property="og:description" content="Great Gold Star Construction company. Building design, structure, foundation, curtain wall services">
    <meta name="author" content="AirKreativ">
    <link rel="stylesheet" type="text/css" href="/css/css_uikit/uikit.min.css">
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
    <link href='http://fonts.googleapis.com/css?family=Roboto:300&subset=latin,cyrillic-ext' rel='stylesheet' type='text/css'>
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/css/main.css">
    <link rel="stylesheet" type="text/css" href="/css/image_css/style1.css">
    <link rel="stylesheet" type="text/css" href="/css/image_css/style_common.css">
    <link rel="stylesheet" type="text/css" href="/css/flexslider/flexslider.css">
    <link rel="icon" href="/favic.ico">
    <script src="/js/respond.min.js"></script>
    @yield('css')
</head>

<body>
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-45056968-5', 'auto');
    ga('send', 'pageview');

</script>
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