<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!--fonte do Google-->
        <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans" rel="stylesheet">
        <!--CSS do BootStrap-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        <!--CSS da Aplicação-->
        <link rel="stylesheet" href="/css/style.css">
        <script>scr="/js/script.js"</script>
    
    </head>

    <body >
        <header>
            <nav class ="navbar navbar-expand-lg navbar-light">
                <div class="collapse navbar-collapse" id ="navbar" >
                    <a href="/" class="navbar-brand"> 
                        <img src="/img/logomarca-profissional.jpg" alt="HDC eventos">
                    </a>

                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="/" class="nav-link">Eventos </a>
                        </li>
                        <li class="nav-item">
                            <a href="/" class="nav-link">Criar eventos </a>
                        </li>
                        <li class="nav-item">
                            <a href="/" class="nav-link">Entar </a>
                        </li>
                        <li class="nav-item">
                            <a href="/" class="nav-link">Cadastrar </a>
                        </li>
                    </ul>
                </div>
            </nav>        
        </header>

        @yield('content')
        <footer>
        <p> HDC Evendtos &copy; 2021</p>
        </footer>
    </body>
</html>
