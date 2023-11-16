<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Avalia - UnB</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous" defer></script>
    <link rel="stylesheet" href="css/custom.css">
    <script src="https://unpkg.com/typed.js@2.0.16/dist/typed.umd.js"></script>
    {{-- Scroll --}}
    <script src="https://unpkg.com/scrollreveal"></script>
    {{-- Animetion --}}
    <script src="js/animation.js" defer></script>
    <!-- Liveware -->
    @livewireStyles
</head>
  <body class="bg">

    <!-- Navbar section -->
    {{-- @include('default_components.navbar') --}}

    <div class="main-content">

      @yield('content')

    </div>
    
    @livewireScripts
  
  </body>
</html>