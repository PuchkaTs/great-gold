@extends('layouts/default_min')

@section('content')

<div class="row" id="projects" style="min-height: 500px">
    <div class="col-md-8 col-lg-6 col-lg-offset-2">
        <header>
            <h1>{{ trans('main.projects') }}</h1>
            <p>{{ (App::getLocale() == 'en') ? $project->title_en : $project->title_mn }}</p>
        </header>

        <div class="col-md-12" id="project_by_id">
            <div class="flexslider">
                <ul class="slides">
                    @foreach($project->image()->orderBy('position', 'asc')->get() as $image)
                    <li>
                        {{ HTML::image("uploads/projects/$image->image") }}
                    </li>
                    @endforeach
                </ul>
            </div>
            <article>
                <h3>{{ (App::getLocale() == 'en') ? $project->title_en : $project->title_mn }}</h3>
                <div>
                    <p class="subdate">{{ $project->created_at->diffForHumans() }}</p>
                    <p>{{ (App::getLocale() == 'en') ? $project->body_en : $project->body_mn }}</p>
                </div>
            </article>

        </div>
    </div>

    @include('layouts.partials.sidebar')

</div>
<div class="placeholder"></div>


@stop

@section('script')
<script type="text/javascript" charset="utf-8">
    $(window).load(function() {
        $('.flexslider').flexslider({
            animation: "fade",
            slideshowSpeed: 4000
        });
    });
</script>
@stop