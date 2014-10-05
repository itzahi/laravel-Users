@extends('layout')

@section('content')
    @foreach($users as $user)
        <p>{{ $user}}</p>
    @endforeach
@stop