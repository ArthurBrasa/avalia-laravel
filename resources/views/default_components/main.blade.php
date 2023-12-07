<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Avalia - UnB</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    
    <link rel="stylesheet" href="{{ asset('css/custom.css', true) }}">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('css/custom.css') }}"> --}}
    <script src="https://unpkg.com/typed.js@2.0.16/dist/typed.umd.js"></script>
    {{-- Scroll --}}
    <script src="https://unpkg.com/scrollreveal"></script>
    {{-- Animation --}}
    <script src="{{ asset('js/animation.js', true) }}"></script>
    <!-- Liveware -->
    @livewireStyles
</head>

  <body class="bg">

    <!-- Navbar section -->
    {{-- @include('default_components.navbar') --}}
    @yield('navbar')

    <div class="main-content">

      @yield('content')

    </div>
    
    @livewireScripts
  
  </body>
</html>