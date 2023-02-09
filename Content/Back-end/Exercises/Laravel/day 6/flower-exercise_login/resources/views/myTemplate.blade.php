<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <nav>
        <ul>
            <li>
                <a href="/flowers">Flower list</a>
            </li>
            <li>
                <a href="/flowers/create">Create new flower</a>
            </li>
            @if (!session('email'))
                <li>
                    <a href="register">Register</a>
                </li>
                <li>
                    <a href="login">Login</a>
                </li>
            @endif
        </ul>

        @if (session('email'))
            <form action="/logout" method="get">
                <input type="button" value="Logout">
            </form>
        @endif
        

    </nav>

    <div class="content">
        @yield('content')
    </div>


</body>

</html>
