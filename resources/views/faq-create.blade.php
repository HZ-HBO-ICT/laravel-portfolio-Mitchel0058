@extends('layout')
@section('content')
    <main>
        <h1>New FAQ</h1>
        <form method="post" action="/faq">
            @csrf

            <div class="field">
                <label class="label" for="question">Question</label>
                <div class="control">
                    <input
                        class="@error('question') is-invalid @enderror"
                        type="text"
                        name="question"
                        id="question"
                        value="{{ old('question') }}">
                </div>
            </div>

            @error('question')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <div class="field">
                <label class="label" for="answer">Answer</label>
                <div class="control">
                    <textarea
                        class="@error('answer') is-invalid @enderror"
                        type="text"
                        name="answer"
                        id="answer"
                        cols="75"
                        rows="10">{{ old('answer') }}</textarea>
                </div>
            </div>

            @error('answer')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror

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
