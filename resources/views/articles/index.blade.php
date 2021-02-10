@extends('layout')

@section('content')

    <h2 style="text-align: center">All articles</h2>
    <h3 style="text-align: center">Click <a href="profession/create">here</a> to add your article.</h3>
    <ul>
        @foreach($articles as $article)
            <li>
                <h3>
                    <a href="/profession/{{$article->id}}">{{$article->title}}</a>
                </h3>

                <p>{{$article->excerpt}}</p>
                <p>________________________________________________________</p>
            </li>
        @endforeach
    </ul>

@endsection
