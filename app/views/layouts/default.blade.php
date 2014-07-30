<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Design & Development, Branding & Marketing firm</title>
    <meta name="description" content="Web design, development, product branding, marketing firm">
    <meta name="author" content="AirKreativ">
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/css/animate.css">
    <link rel="stylesheet" type="text/css" href="/css/animations.css">
    <link rel="stylesheet" type="text/css" href="/css/component.css">
    <link rel="stylesheet" type="text/css" href="/css/docs.min.css">
    <link rel="stylesheet" type="text/css" href="/css/social-buttons.css"/>
    <link href='http://fonts.googleapis.com/css?family=Comfortaa' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="/css/main.css">
    <link rel="icon" href="/favicon.ico">
    <script src="/js/modernizr.custom.js"></script>
    <script src="/js/respond.min.js"></script>
</head>

<body>
@include('layouts.partials.nav')


@yield('content')
<script src="/js/jquery-1.11.1.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="/js/wow.min.js"></script>
<script src="/js/plugins.js"></script>
<script src="/js/air.js"></script>
<script src="/js/pagetransitions.js"></script>
<script>
    new WOW().init();
</script>
</body>
</html>