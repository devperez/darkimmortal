<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>DarkImmortal</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>

        <link href="{{ asset('css/Hover-master/css/hover.css') }}" rel="stylesheet">
        <link href="{{ asset('css/layout.css') }}" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Nosifer&family=Roboto&display=swap" rel="stylesheet">
        
    </head>
    <body>
    <!-- <iframe style="position:absolute; right:0;" src="https://feed.mikle.com/widget/v2/150351/?preloader-text=Loading" height="108px" width="25%" class="fw-iframe" scrolling="no" frameborder="0"></iframe>    <iframe style="position:absolute; right:0;" src="https://feed.mikle.com/widget/v2/150351/?preloader-text=Loading" height="105px" width="25%" class="fw-iframe" scrolling="no" frameborder="0"></iframe> -->

        <div class="container">
            <a href=" {{ route('groupes') }}"><h1 class="hvr-underline-from-center sitename" style="font-size:3rem;">DARKIMMORTAL</h1></a>
        </div>
    <nav class="navbar navbar-light bg-grey">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false" style="width:150px; color:black;">Genres</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href=" {{ route('black') }}">Black</a></li>
                        <li><a class="dropdown-item" href=" {{ route('death') }}">Death</a></li>
                        <li><a class="dropdown-item" href="{{ route('doom') }}">Doom</a></li>
                        <li><a class="dropdown-item" href="{{ route('autre') }}">Autre</a></li>
                    </ul>
                </li>
                <div class="container-fluid">
                    <ul style="display:flex; justify-content:center;">
                        <li class="customli"><a href="{{ route('groupes') }}">Groupes</a></li>
                        <li class="customli"><a href="{{ route('search') }}">Chercher un groupe</a></li>
                        <li class="customli"><a href="{{ route('random') }}" title="un groupe au hasard">Roulette russe</a></li>
                        <li class="customli"><a href="{{ route('about') }}">À propos</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
        <!-- <div class="sitename">
            <div class="navbar">
                <a href="#">Black</a>
                <a href="#">Death</a>
            </div>
            <h1 class="hvr-underline-from-center" style="font-size:3rem;">DARKIMMORTAL</h1>
            <div class="nav">
                <a href="#">Doom</a>
                <a href="#">Autre</a>
            </div>
        </div> -->
        <!-- <div class="navigation">
            <ul class="liwrapper">
                <li class="customli"><a href="{{ route('groupes') }}">Groupes</a></li>
                <li class="customli"><a href="{{ route('search') }}">Chercher un groupe</a></li>
                <li><a href="#">Catégories</a></li>
                <li class="customli"><a href="{{ route('random') }}" title="un groupe au hasard">Roulette russe</a></li>
                <li class="customli"><a href="{{ route('about') }}">À propos</a></li>
            </ul>
        </div> -->
            @yield('content')
    </body>
</html>