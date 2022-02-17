@extends('layout')
@section('content')
    <main>
        <h1>Update Article</h1>
        <form method="POST" action="/faq/edit/{{ $faq->id }}">
            @csrf
            @method('PUT')

            <div class="field">
                <label class="label" for="question">Question</label>
                <div class="control">
                    <input class="input" type="text" name="question" id="question" value="{{ $faq->question }}">
                </div>
            </div>

            <div class="field">
                <label class="label" for="answer">Answer</label>
                <div class="control">
                    <textarea class="input" type="text" name="answer" id="answer" cols="75" rows="10">{{ $faq->answer }}</textarea>
                </div>
            </div>

            <div class="field">
                <label class="label" for="link">Link</label>
                <div class="control">

                    <input class="input" type="text" name="link" id="link" value="{{ $faq->link }}">
                </div>
            </div>

            <div class="field is-grouped">
                <div class="control">
                    <button class="button-is-text">Submit</button>
                </div>
            </div>

            <br>

            <form method="POST" action="/faq/edit/{{ $faq->id }}">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>

        </form>
    </main>
@endsection
