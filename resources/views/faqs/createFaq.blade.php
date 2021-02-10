@extends('layout')

@section('content')

    <div id="faqWrapper" style="">
        <div id="faqPage" class="faqContainer">
            <h1>New Question</h1>

            <form method="post", action="/FAQ">
                @csrf

                <div class="field">
                    <label class="question">Question</label><br>
                    <div class="control">
                        <input type="text" id="question" name="question"><br>
                    </div>
                </div>

                <div class="field">
                    <label for="answer">Answer</label><br>
                    <div class="control">
                        <input type="text" id="answer" name="answer"><br>
                    </div>
                </div>
                <input type="submit" value="Submit">
            </form>
        </div>
    </div>
@endsection
