@extends('layout')
@section('content')
<ul class="navbar">
    <li>
        <nav>Links:</nav>
    </li>
    <li class="active">
        <nav><a href="../" class="different-page">Home</a></nav>
    </li>
    <li class="active">
        <nav><a href="../profile" class="different-page">Profile</a></nav>
    </li>
    <li class="active">
        <nav><a href="../dashboard" class="different-page">Dashboard</a></nav>
    </li>
    <li class="active">
        <nav><a href="../faq" class="different-page">FAQ</a></nav>
    </li>
    <li class="active">
        <nav><a href="../blog" class="current-page">Blog</a></nav>
    </li>
    <li class="active">
        <nav><a href="../aside" class="different-page">Aside</a></nav>
    </li>
</ul>
<p class="footer">Gemaakt door:<br> Mitchel Goedegebuure</p>
<main>
    <h1>Student maakt website</h1>
    <h2>Dit was vooral een test pagina, dus kan je dit nu vergeten, maar omdat je hier helemaal naar toe kwam is hier
        een foto van een wimpergekko.</h2>
    <img src="/img/gekkopic.jpg" id="gekkopic">
</main>
<nav><a href="index.html">Home Page</a></nav>
@endsection
