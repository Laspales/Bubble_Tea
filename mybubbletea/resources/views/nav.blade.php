<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/nav.css">
    <script src="https://kit.fontawesome.com/db2bf29261.js" crossorigin="anonymous"></script>
    <title>Navbar</title>
</head>
<body>
<header>

    <div class="logo">
        <a href="/"><img src="boba1.png" class="logo"></img></a>
        <sup><a href="/" class="logo_name">My Bubble Tea</a></sup>
    </div>
    <nav class="navbar">
    <div class="connection">

    @if (Route::has('login'))
                <ul class="connect">
                  <li class="nv"><a href="/products">Products</a></li>
                  <li class="nv"><a href="/">About us</a></li>
                  <li class="nv" id="help_link"><a href="/">Help & Contact</a></li>
                  <li id="li-search"><input type="text" placeholder="Search... " id="search" name="search" style=" background-image:url('loupe.png') ;"/></li>
                    @auth
                        <li><a href="{{ url('/dashboard') }}">Dashboard</a></li>
                    @else
                        <li><a href="{{ route('login') }}" >LogIn&nbsp;<i class="fa-solid fa-user"></i></li>
                    @endauth
                </ul>
            @endif
        </div>
    </nav>
</header>
</body> 
</html>