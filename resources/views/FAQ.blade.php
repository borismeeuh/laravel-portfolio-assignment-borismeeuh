@extends('layout')

@section('content')
<h2>
    Here you'll find some frequently asked questions about HZ and how things work around here. You'll also
    <br>
    find the answers to the questions on this page.
</h2>
<h3 style="text-align: center">Click <a href="FAQ/createFaq">here</a> to add your question.</h3>
<p>
    <br>

<ul>

    @foreach($posts as $post)
        <li>{{ $post->question }}</li>
        <li>{{ $post->answer }}</li>
        <button><a href="FAQ/{{ $post->id }}/edit">Edit Question</a></button>
        <br>
    @endforeach
</ul>
</p>

<br>
<br>

@endsection
