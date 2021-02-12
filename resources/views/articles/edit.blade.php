@extends('layout')

@section('content')


    <div id="wrapper" style="">
        <div id="page" class="articleContainer">
            <h1>Update Article</h1>

            <form method="POST", action="/profession/{{ $article->id }}">
                @csrf
                @method('PUT')

                <div class="field">
                    <label class="title">Article Title</label><br>
                    <div class="control">
                        <input type="text" id="title" name="title" value="{{ $article->title }}"><br>
                    </div>
                </div>

                <div class="field">
                    <label for="excerpt">Excerpt</label><br>
                    <div class="control">
                        <input type="text" id="excerpt" name="excerpt" value="{{ $article->excerpt }}"><br>
                    </div>
                </div>

                <div class="field">
                    <label for="body">Complete Article</label><br>
                    <div class="control">
                        <input type="text" id="body" name="body" value="{{ $article->body }}"><br><br>
                    </div>
                </div>
                <input type="submit" value="Submit">
            </form>

            <form method="POST" action="/profession/{{ $article->id }}">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        </div>
    </div>

@endsection
