@extends('layout')

@section('content')

    <div>
        <h2 style="text-align: center">Recent</h2>
        <h2 style="text-align: center">________________________________________________________</h2>
        <ul style="text-align: center;">
            @foreach($articles as $article)
                <li style="text-align: center">
                    <h3>
                        <a href="/articles/{{$article->id}}">{{$article->title}}</a>
                    </h3>

                    <p>{{$article->excerpt}}</p>
                    <p>________________________________________________________</p>
                </li>
            @endforeach
        </ul>
    </div>


@endsection
