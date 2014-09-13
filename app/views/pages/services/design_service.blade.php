@extends('layouts/default_min')

@section('content')
@include('layouts.partials.flexslider')

<div style="min-height: 500px; width: 100%">
    <article class="col2">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <h1 style="text-align: center">{{ $header}}</h1>

                <p> {{ $body }}</p>
            </div>
        </div>

    </article>

</div>
@stop