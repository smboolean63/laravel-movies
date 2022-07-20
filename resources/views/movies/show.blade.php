@extends('layouts.base')

@section('content')
    <h1>{{$movie->title}}</h1>
    <h4>{{$movie->director}}</h4>
    <div>
        {{$movie->plot}}
    </div>
@endsection