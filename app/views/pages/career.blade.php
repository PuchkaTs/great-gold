@extends('layouts/default_min')
@section('content')
@include('layouts.partials.flexslider')
    <article>
        <div class="col-md-6 col-md-offset-3">
            <div class="panel-group" id="accordion">
                <h1 style="text-align: center">{{ $header }}</h1>
                <p>&nbsp</p>
                @foreach($career as $index => $career)
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse{{ $index }}">
                                {{ $career->header_en }}
                            </a>
                        </h4>
                    </div>
                    <div id="collapse{{ $index }}" class="panel-collapse collapse in">
                        <div class="panel-body">
                            {{ $career->body_en }}
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            <div style="margin-top: 50px; margin-bottom: 70px;">
                {{ $body }}
            </div>
        </div>

    </article>
@stop