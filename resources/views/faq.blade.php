@extends('layout');
@section('content');
<main>
    <h1>FAQ</h1>
    <article>
        <ol class="faqol">
            @foreach($posts as $post)
                <li class="faqli">{{ $post->question }}</li>
                <ul>{{ $post->answer }}</ul>
                @if($post->link != null)
                    <a href="https://{{ $post->link }}" target="blank">{{ $post->link }}</a>
                @endif
            @endforeach
        </ol>
    </article>
</main>
@endsection
