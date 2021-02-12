@extends('layout')

@section('content')

    <h2 style="text-align: center">{{$article->title}}</h2>

    <p style="text-align: center">
        {{$article->body}}
    </p>
    <button style="position: relative; left: 46%"><a href="{{ $article->id }}/edit">Edit Question</a></button>

@endsection
