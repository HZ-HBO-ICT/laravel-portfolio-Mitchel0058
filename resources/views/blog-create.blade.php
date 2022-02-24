@extends('layout')
@section('content')
    <main>
        <h1>New blog</h1>
        <form method="POST" action="/blog">
            @csrf

            <div class="field">
                <label class="label" for="main_text">Main text</label>
                <div class="control">
                    <textarea
                        class="@error('main_text') is-invalid @enderror"
                        type="text"
                        name="main_text"
                        id="main_text"
                        cols="75" rows="10">{{ old('main_text') }}</textarea>
                </div>
            </div>

            @error('main_text')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <div class="field">
                <label class="label" for="link">Link</label>
                <div class="control">
                    <input
                        class="@error('link') is-invalid @enderror"
                        type="text"
                        name="link"
                        id="link"
                        value="{{ old('link', '/blog/') }}">
                </div>
            </div>

            @error('link')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <div class="field is-grouped">
                <div class="control">
                    <button class="button-is-text">Submit</button>
                </div>
            </div>


        </form>
    </main>
@endsection
