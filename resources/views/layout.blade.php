<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>The main page of 'me'</title>
    <link rel="stylesheet" href="/css/style.css">
</head>

<body>
<p class="footer">Gemaakt door:<br> Mitchel Goedegebuure</p>

<ul class="navbar">
    <li>
        <nav>Links:</nav>
    </li>
    <?php $sites = ['/', 'profile', 'dashboard', 'faq', 'blog', 'aside'] ?>
    @foreach($sites as $site)
        @if(Request::is($site) || Request::is("$site/*") ? $page = 'current-page' : $page = 'different-page') @endif
        @if($site == '/' ? $appearance = 'Home' : $appearance = ucfirst($site)) @endif
        @if($site != '/' ? $site = "/$site" : null) @endif
        <li class="active">
            <nav><a href="{{ $site }}" class="{{ $page }}">{{ $appearance }}</a></nav>
        </li>
    @endforeach
</ul>

@yield('content');

</body>
</html>

