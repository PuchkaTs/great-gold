@extends('layouts/default_min')

@section('content')

<div class="row" id="projects" style="min-height: 700px">
    <div class="col-md-8 col-lg-6 col-lg-offset-2">
        <header>
            <h1>Our Projects</h1>
            <p>Here is our projects showroom</p>
        </header>

        @foreach($projects as $project)
            <div class="col-md-12">
                <article class="project">
                    <h3>{{ $project->title_en }}</h3>
                    @if($project->image->count())
                     {{ HTML::image("uploads/projects/thumbs/" . $project->image->first()->image) }}
                    @else
                        <img src="bla">
                    @endif
                    <div class="text">
                        <p class="subdate">{{ $project->created_at->diffForHumans() }}</p>
                        <p>{{ $project->shorten() }} {{ link_to_route('project_path', 'Read more', $project->id, ['class' => 'more'])}}
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