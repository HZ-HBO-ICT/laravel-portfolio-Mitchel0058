@extends('layout')
@section('content')
    <main>
        <h1>New blog</h1>
        <form method="post" action="/blog">
            @csrf

            <div class="field">
                <label class="label" for="main_text">Main text</label>
                <div class="control">
                    <textarea class="input" type="text" name="main_text" id="main_text" cols="75" rows="10"></textarea>
                </div>
            </div>

            <div class="field">
                <label class="label" for="link">Link</label>
                <div class="control">

                    <input class="input" type="text" name="link" id="link" value="/blog/">
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
