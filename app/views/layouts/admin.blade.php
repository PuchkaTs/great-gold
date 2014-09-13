<!doctype html>

<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Design & Development, Branding & Marketing firm</title>
    <meta name="author" content="AirKreativ">
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/css/docs.min.css">
    <link rel="stylesheet" type="text/css" href="/css/component.css">
    <link rel="stylesheet" type="text/css" href="/css/main.css">
    <link rel="icon" href="/favicon.ico">

        {{ HTML::script('js/tinymce/tinymce.min.js') }}
    <script>
        tinymce.init({
            theme : "modern",
            mode: "exact",
            elements : "elm1",

            plugins: [
                "advlist autolink lists link image charmap print preview hr anchor pagebreak",
                "searchreplace wordcount visualblocks visualchars code fullscreen",
                "insertdatetime media nonbreaking save table contextmenu directionality",
                "emoticons filemanager template paste textcolor colorpicker textpattern"
            ],
            toolbar1: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image",
            toolbar2: "print preview media | forecolor backcolor emoticons",
            image_advtab: true,
            templates: [
                {title: 'Test template 1', content: 'Test 1'},
                {title: 'Test template 2', content: 'Test 2'}
            ]
        });

    </script>
</head>
<body>
@include('layouts.partials.nav')
<!--<h2>Sample using TinyMCE and PHP</h2>-->
<!--<form method="post" action="--><?//=$_SERVER['REQUEST_URI']?><!--">-->
<!--    <textarea id="elm1" name="elm1" rows="15" cols="80"></textarea>-->
<!--    <br />-->
<!--    <input type="submit" name="save" value="Submit" />-->
<!--    <input type="reset" name="reset" value="Reset" />-->
<!--</form>-->
@yield('content')

<script src="/js/jquery-1.11.1.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="/js/air.js"></script>
</body>
</html>