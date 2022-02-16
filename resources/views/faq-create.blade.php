@extends('layout')
@section('content')
    <main>
        <h1>New FAQ</h1>
        <form method="post" action="/faq">
            @csrf

            <div class="field">
                <label class="label" for="question">Question</label>
                <div class="control">
                    <input class="input" type="text" name="question" id="question">
                </div>
            </div>

            <div class="field">
                <label class="label" for="answer">Answer</label>
                <div class="control">
                    <textarea class="input" type="text" name="answer" id="answer"></textarea>
                </div>
            </div>

            <div class="field">
                <label class="label" for="link">Link</label>
                <div class="control">

                    <input class="input" type="text" name="link" id="link">
                </div>
            </div>

            <div class="field is-grouped">
                <div class="control">
                    <button class="button-is-text">Submit</button>
                </div>
            </div>


        </form>
    </main>
@endsection
