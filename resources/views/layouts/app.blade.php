<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
              <a class="navbar-brand" href="">EMPRESTIMO DE LIVRO</a>
              <button class="navbar-toggler" type="text" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="../livros">Inserir livro</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="../agendamento" >Agendamento</a> 
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="../meus_agendamentos">Meus Agendamentos</a>
                  </li>
                  <li class="nav-item">
                    <button onclick="window.location.href='#';">Acesse o Vídeo explicativo do programa</button>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
        <main class="py-4">
            @yield('content')
        </main>
    </div>

{{-- CSS --}}

    
</body>
</html>
