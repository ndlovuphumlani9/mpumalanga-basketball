<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Mpumalanga Basketball')</title>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>

    <nav class="navbar">

        <div class="logo">
            MPUMALANGA BASKETBALL
        </div>

        <ul class="nav-links">
            <a href="{{ url('/') }}">Home</a>
            <a href="#">About</a>
            <a href="{{ url('/districts') }}">Districts</a>
            <a href="{{ url('/players') }}">Players</a>
            <a href="{{ url('/player/register') }}">Register Player</a>
            <a href="#">Teams</a>
            <a href="#">Login</a>
        </ul>

    </nav>

    @yield('content')

    <footer>
        <p>
            © 2026 <span>Mpumalanga Basketball</span>.
            All rights reserved.
        </p>
    </footer>

</body>
</html>