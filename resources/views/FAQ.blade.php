@extends('layout')

@section('content')
<h2>
    Here you'll find some frequently asked questions about HZ and how things work around here. You'll also
    <br>
    find the answers to the questions on this page.
</h2>
<p>
    <br>

<ul>

    @foreach($posts as $post)
        <li>{{ $post->question }}</li>
        <li>{{ $post->answer }}</li>
        <br>
    @endforeach
</ul>
</p>

<br>
<br>

@endsection
