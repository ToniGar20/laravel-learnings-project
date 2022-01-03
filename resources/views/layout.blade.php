<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title')</title>
    <style>
        .active a {color:red; text-decoration: none; }
    </style>
</head>
<body>

<nav>
    <ul>
        <li class="{{ setActiveMenuLink('home') }}"><a href="/">Home</a></li>
        <li class="{{ setActiveMenuLink('about') }}"><a href="/about">About</a></li>
        <li class="{{ setActiveMenuLink('contact') }}"><a href="/contact">Contact</a></li>
        <li><a href="/visits">Visits counter</a></li>
    </ul>
</nav>

@yield('content')

</body>
</html>
