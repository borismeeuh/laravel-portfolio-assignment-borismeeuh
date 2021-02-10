@extends('layout')

@section('content')

<div id="wrapper" style="">
    <div id="page" class="articleContainer">
        <h1>New Article</h1>

    <form method="post", action="/profession">
        @csrf

        <div class="field">
                <label class="title">Article Title</label><br>
                <div class="control">
                <input type="text" id="title" name="title"><br>
            </div>
        </div>

        <div class="field">
                <label for="excerpt">Excerpt</label><br>
                <div class="control">
                <input type="text" id="excerpt" name="excerpt"><br>
            </div>
        </div>

        <div class="field">
                <label for="body">Complete Article</label><br>
                <div class="control">
                <input type="text" id="body" name="body"><br><br>
            </div>
        </div>
        <input type="submit" value="Submit">
    </form>
    </div>
</div>
@endsection




