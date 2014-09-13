@extends('layouts/default_min')
@section('content')

    {{ $map['html'] }}
@include('layouts.partials.contactForm')
@stop

@section('script')
   {{ $map['js'] }}
@stop
