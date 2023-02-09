<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
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
        </ul>
    </nav>

    <div class="content">
        @yield('content')
    </div>


</body>

</html>
