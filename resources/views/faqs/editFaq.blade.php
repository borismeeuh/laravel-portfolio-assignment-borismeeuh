@extends('layout')

@section('content')

    <div id="faqWrapper" style="">
        <div id="faqPage" class="faqContainer">
            <h1>Update Question</h1>

            <form method="POST", action="/FAQ/{{$question->id}}">
                @csrf
                @method('PUT')

                <div class="field">
                    <label class="question">Question</label><br>
                    <div class="control">
                        <input type="text" id="question" name="question" value="{{ $question->question }}"><br>
                    </div>
                </div>

                <div class="field">
                    <label for="answer">Answer</label><br>
                    <div class="control">
                        <input type="text" id="answer" name="answer" value=" {{ $question->answer }}"><br>
                    </div>
                </div>
                <input type="submit" value="Submit">
            </form>

            <form method="POST" action="/FAQ/ {{ $question->id }}">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        </div>
    </div>
@endsection
