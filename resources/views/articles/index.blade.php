@extends('layout')

@section('content')

    <h2 style="text-align: center">All Articles</h2>

    <form class="secondaryForm", action="profession/create", method="get">
        <button class="button">Create Article</button>
    </form>

    <ul>
        @foreach($articles as $article)
            <li>
                <h3>
                    <a href="{{ route('profession.show', $article) }}">{{$article->title}}</a>
                </h3>

                <p>{{$article->excerpt}}</p>
                <p>________________________________________________________</p>
            </li>
        @endforeach
    </ul>

@endsection
