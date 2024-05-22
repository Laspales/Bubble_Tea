<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/db2bf29261.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/css/nav.css">
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/admin.css">
    <title>Home</title>
</head>

<body>
    <header>
        <div class="logo">
            <a href="/"><img src="/boba1.png" class="logo"></img></a>
            <sup><a href="/" class="logo_name">My Bubble Tea</a></sup>
        </div>
        <nav class="navbar">
            <div class="connection">
                @if (Route::has('login'))
                    <ul class="connect">
                        <li class="nv"><a href="/">Home</a></li>
                        <li class="nv"><a href="{{ route('products') }}">Products</a></li>
                        <li class="nv"><a href="/">About us</a></li>
                        <li class="nv" id="help_link"><a href="/">Help & Contact</a></li>
                        <li id="li-search"><input type="text" placeholder=" Search... " id="search" name="search"
                                style=" background-image:url('loupe.png');" /></li>
                        @auth
                            @can('admin')
                                <li><a href="{{ url('/admin') }}"><i class="fa-solid fa-gear"></i></a></li>
                            @endcan
                            <li><a href="{{ url('/dashboard') }}"><i class="fa-solid fa-user"></i></a></li>
                            <li><a href="{{ url('/cart') }}"><i class="fa-solid fa-basket-shopping"></i></a></li>
                        @else
                            <li><a href="{{ route('login') }}"><i class="fa-regular fa-user"></i>&nbsp;LogIn</a></li>
                        @endauth
                    </ul>
                @endif
            </div>
        </nav>
    </header>
    <h1>@yield('title')</h1>
    <main>
        @yield('main')
    </main>
</body>

</html>
