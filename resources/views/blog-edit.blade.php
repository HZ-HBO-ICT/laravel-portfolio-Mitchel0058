@extends('layout')
@section('content')
    <main>
        <h1>Edit blog</h1>
        <form method="POST" action="/blog/{{ $blogpost->id }}">
            @csrf
            @method('PUT')

            <div class="field">
                <label class="label" for="main_text">Main text</label>
                <div class="control">
                    <textarea class="input" type="text" name="main_text" id="main_text" cols="75"
                              rows="10">{{ $blogpost->main_text }}</textarea>
                </div>
            </div>

            <div class="field">
                <label class="label" for="link">Link</label>
                <div class="control">

                    <input class="input" type="text" name="link" id="link" value="{{ $blogpost->link }}">
                </div>
            </div>

            <div class="field is-grouped">
                <div class="control">
                    <button class="button-is-text">Submit</button>
                </div>
            </div>
        </form>

        <br>

        <form method="POST" action="/blog/{{ $blogpost->id }}">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>

    </main>
@endsection
