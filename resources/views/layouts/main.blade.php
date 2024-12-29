<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!-- CSS Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

        <!-- CSS da aplicação -->
        <link rel="stylesheet" href="/css/styles.css">
        <script src="/js/scripts.js"></script>
        <!-- Fonts -->
    
        <link href="https://fonts.googleapis.com/css2?family=Roboto">


    </head>
    <body >
    <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div id='navbar' class="container d-flex align-items-center justify-content-between">
            <!-- Logo -->
            <a href="/" class="navbar-brand">
                <img src="/img/hdcevents_logo.svg" alt="Logo da HDC Events" width="150">
            </a>
            <!-- Menu -->
            <ul class="navbar-nav d-flex flex-row gap-3">
                <li class="nav-item">
                    <a href="/" class="nav-link">Eventos</a>
                </li>
                <li class="nav-item">
                    <a href="/events/create" class="nav-link">Criar Eventos</a>
                </li>
                <li class="nav-item">
                    <a href="/" class="nav-link">Entrar</a>
                </li>
                <li class="nav-item">
                    <a href="/" class="nav-link">Cadastrar</a>
                </li>
            </ul>
        </div>
    </nav>
</header>

        @yield('content')
        <footer>
            <p>Lucas Correia &copy; 2024</p>
        </footer>
        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>

    </body>
</html>
