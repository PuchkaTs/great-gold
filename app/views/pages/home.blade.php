@extends('layouts/default_min')

@section('content')

@include('layouts.partials.flexslider')
<!--    place holder-->

<div style="min-height: 500px; width: 100%">
    <h1 style="text-align: center; margin-top: 50px; margin-bottom: 30px;">{{ trans('main.@greatGoldStar') }}</h1>
    <article class="twitters">
        <div class="row " id="tweet">
            <div class="col-md-8 col-md-offset-2">
                @if($gtweets->count())
                <div class="col-md-4 col-sm-12" style="text-align: center"><img src="uploads/tweets/3.jpg" class="img-circle"
                                                     style="height: 100px; width: 100px;">

                    <p style="text-align: center; color: rgba(255,255,255,0.8);" id="title">President: <b>{{ trans('main.lihailong') }}</b></p>
                </div>
                <div  class="status col-md-8 col-sm-12">
                    <ul id="slideshow">
                        @foreach($gtweets as $index => $gtweet)

                        @if($index == 0)
                        <li class="next row">
                            <h3><i class="fa fa-quote-left">&nbsp;</i>{{
                                    (App::getLocale() == 'en') ? $gtweet->status_en : $gtweet->status_mn }}&nbsp;<i
                                        class="fa fa-quote-right"></i></h3>
                        </li>
                        @else
                        <li>
                            <h3><i class="fa fa-quote-left">&nbsp;</i>{{
                                    (App::getLocale() == 'en') ? $gtweet->status_en : $gtweet->status_mn }}&nbsp;<i
                                        class="fa fa-quote-right"></i></h3>
                        </li>
                        @endif
                        @endforeach
                    </ul>

                </div>
                    @endif
            </div>
        </div>
    </article>


    <article class="col2 uk-scrollspy-init-inview uk-scrollspy-inview uk-animation-fade"
             data-uk-scrollspy="{cls:'uk-animation-fade', repeat: true}">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <h1 style="text-align: center">{{ $header}}</h1>

                <p>{{ $body }}</p>
            </div>
        </div>

    </article>
    <hr>
    <article>
        <div class="row">
            <div class="">
                <h1 style="text-align: center">{{ trans('main.latestProjects') }}</h1>

                <div class="main row uk-scrollspy-init-inview uk-scrollspy-inview uk-animation-fade"
                     data-uk-scrollspy="{cls:'uk-animation-fade', repeat: true}">
                    @if($projects->count())
                    @foreach($projects as $index => $project)
                    <div class="view view-first">
                        @if($project->image->count())
                        {{ HTML::image("uploads/projects/300x200/" . $project->image->first()->image) }}
                        @endif
                        <div class="mask">
                            <h2>{{ $project->title_en }}</h2>

<!--                            <p>{{ $project->shorten(100) }}</p>-->
                            {{ link_to_route('project_path', trans('main.readMore'), $project->id, ['class' =>
                            'info'])}}
                        </div>
                    </div>
                    @endforeach
                    @endif
                </div>
            </div>
        </div>
    </article>

        <h1 style="text-align: center; margin-top: 50px; margin-bottom: 30px;">{{ trans('main.clients') }}</h1>
    <article class="twitters">
        <div id="logos">
            @for ($i = 1; $i < 7; $i++)
            <img src="logos/{{ $i }}.png">
            @endfor
        </div>
    </article>

    @include('layouts.partials.contactForm')


</div>

@stop