@extends('layout')
@section('content')
    <main>
        <h1>Blog</h1>
        @foreach($blogposts as $blogpost)
            <div class="blog1container">
                <div class="blog1">{{ $blogpost->main_text }}<br>
                    <em>{{ $blogpost->date_added }}</em>
                    <a href="{{ $blogpost->link }}"><em>Lees meer...</em></a>
                </div>
            </div>
        @endforeach

    </main>
@endsection
