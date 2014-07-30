@extends('layouts/default')
    @section('content')
    @foreach($users as $user)
        <ul>
            <li>{{ $user->username }}</li>
        </ul>
    @endforeach
@stop