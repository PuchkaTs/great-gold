@extends('layouts/default_min')

@section('content')

<div class="row" id="projects" style="min-height: 700px">
    <div class="col-md-8 col-lg-6 col-lg-offset-2">
        <header>
            <h1>{{ trans('main.ourProjects') }}</h1>
            <p>{{ trans('main.ourProjectDescription') }}</p>
        </header>

        @foreach($projects as $project)
            <div class="col-md-12">
                <article class="project">
                    <h3>{{ (App::getLocale() == 'en') ? $project->title_en : $project->title_mn }}</h3>
                    @if($project->image->count())
                    {{ HTML::image("uploads/projects/thumbs/" . $project->image->first()->image) }}
                    @else
                    {{ HTML::image("uploads/projects/thumbs/bla.jpg") }}
                    @endif
                    <div class="text">
                        <p class="subdate">{{ $project->created_at->diffForHumans() }}</p>
                        <p>{{ $project->shorten() }} {{ link_to_route('project_path', (App::getLocale() == 'en') ? 'Read more' : 'Дэлгэрэнгүй', $project->id, ['class' => 'more'])}}
                        </p>
                    </div>


                </article>

            </div>
        @endforeach
    </div>

    @include('layouts.partials.sidebar')

</div>
<div class="placeholder"></div>


@stop