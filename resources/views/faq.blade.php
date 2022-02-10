<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Frequently Asked Questions about hz</title>
</head>

<body>
<ul class="navbar">
    <li>
        <nav>Links:</nav>
    </li>
    <li class="active">
        <nav><a href="/" class="different-page">Home</a></nav>
    </li>
    <li class="active">
        <nav><a href="profile" class="different-page">Profile</a></nav>
    </li>
    <li class="active">
        <nav><a href="dashboard" class="different-page">Dashboard</a></nav>
    </li>
    <li class="active">
        <nav><a href="faq" class="current-page">FAQ</a></nav>
    </li>
    <li class="active">
        <nav><a href="blog" class="different-page">Blog</a></nav>
    </li>
    <li class="active">
        <nav><a href="aside" class="different-page">Aside</a></nav>
    </li>
</ul>
<p class="footer">Gemaakt door:<br> Mitchel Goedegebuure</p>
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
</body>

</html>
