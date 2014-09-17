@extends('layouts/default_min')
@section('css')
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
@stop

@section('content')

    @include('layouts.partials.flexslider')
    <!--    place holder-->

    <div style="min-height: 500px; width: 100%">
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
                                        <p>{{ $project->shorten(100) }}</p>
                                        {{ link_to_route('project_path', trans('main.readMore'), $project->id, ['class' => 'info'])}}
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </article>
        <article class="twitters uk-scrollspy-inview"
                 data-uk-scrollspy="{cls:'uk-animation-fade', repeat: true}"  >
            <div class="row " id="tweet">
                <div class="col-md-8 col-md-offset-2 uk-scrollspy-inview"
                     data-uk-scrollspy="{cls:'uk-animation-slide-bottom', repeat: true}" >
                    <h1 style="text-align: center">{{ trans('main.@greatGoldStar') }}</h1>
                    <div id="slideshow">
                        <ul>
                            @if($gtweets->count())
                                @foreach($gtweets as $index => $gtweet)
                                    @if($index == 0)
                                        <li class="next row">
                                            <div class="col-md-4 col-sm-12"><img src="uploads/tweets/{{ $gtweet->image }}" class="img-circle" style="height: 100px; width: 100px;">
                                                <p style="text-align: center;">{{ (App::getLocale() == 'en') ? $gtweet->title_en : $gtweet->title_mn  }}</p>
                                            </div>
                                            <div class="status col-md-8 col-sm-12"><h3><i class="fa fa-quote-left">&nbsp;</i>{{ (App::getLocale() == 'en') ? $gtweet->status_en : $gtweet->status_mn  }}&nbsp;<i class="fa fa-quote-right"></i></h3></div>
                                        </li>
                                    @else
                                        <li class="row">
                                            <div class="col-md-4 col-sm-12"><img src="uploads/tweets/{{ $gtweet->image }}" class="img-circle" style="height: 100px; width: 100px;">
                                                <p style="text-align: center;">{{ (App::getLocale() == 'en') ? $gtweet->title_en : $gtweet->title_mn  }}</p>
                                            </div>
                                            <div class="status col-md-8 col-sm-12"><h3><i class="fa fa-quote-left">&nbsp;</i>{{ (App::getLocale() == 'en') ? $gtweet->status_en : $gtweet->status_mn  }}&nbsp;<i class="fa fa-quote-right"></i></h3></div>
                                        </li>
                                    @endif
                                @endforeach
                            @endif


                        </ul>

                    </div>
                </div>
            </div>

        </article>

       @include('layouts.partials.contactForm')


    </div>

    @stop