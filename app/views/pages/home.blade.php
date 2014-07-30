@extends('layouts/default_min')

@section('content')
<div class="container">
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <img class="c_img" src="/img/1.jpg" alt="...">

                <div class="carousel-caption">

                </div>
            </div>
            <div class="item">
                <img class="c_img" src="/img/2.jpg" alt="...">

                <div class="carousel-caption">

                </div>
            </div>

        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
    </div>
    <!--    place holder-->
    <div style="height: 500px; width: 100%">
        <h1> hello</h1>
    </div>
</div>
<div class="pt-message">
    <p>Your browser does not support CSS animations.</p>
</div>



@stop