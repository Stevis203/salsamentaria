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

        <link rel="stylesheet" href="{{ asset('public/build') }}">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="{{ asset('css/administrador.css')}}">
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
 
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand">
                    <h2 style="font-family: 'Times New Roman', Times, serif;color: rgb(0, 0, 0)">Salsamentaria Juanchos</h2>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Iniciar Sesión') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Registrate') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                        {{ __('Salir') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">Navbar</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Dropdown
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#">Action</a></li>
                      <li><a class="dropdown-item" href="#">Another action</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                  </li>
                </ul>
                <form class="d-flex" role="search">
                  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn btn-outline-success" type="submit">Buscar</button>
                </form>
              </div>
            </div>
          </nav>

        <div>
            <div style="background-color: rgb(0, 0, 0)" class="contenido">
                <h1 style="color: rgb(255, 255, 255);font-family: 'Times New Roman', Times, serif ">BIENVENIDO QUERIDO ADMINISTRADOR</h1>
            </div>
            <div class="contenido">
                <div class="centro">
                    <div class="holaa">
                        <a href="{{ route('mscliente')}}"><img src="{{ asset('img/client.jpg')}}" class="" alt="..."></a>
                        
                        <h5 class="card-title">{{'CLIENTES'}}</h5>
                        <!-- Agrega aquí el enlace o cualquier otro contenido que desees -->
                    </div>

                    <div class="holaa">
                        <a href="{{ route('msvendedor')}}"><img src="{{ asset('img/zx.jpg')}}" class="" alt="..."></a>
                        
                        <h5 class="card-title">{{'VENDEDORES'}}</h5>
                        <!-- Agrega aquí el enlace o cualquier otro contenido que desees -->
                    </div>

                    <div class="holaa">
                        <a href="{{ route('msadministrador')}}"><img src="{{ asset('img/zz.jpg')}}" class="" alt="..."></a>
                        
                        <h5 class="card-title">{{'ADMINISTRADORES'}}</h5>
                        <!-- Agrega aquí el enlace o cualquier otro contenido que desees -->
                    </div>

                    <div class="holaa">
                        <a href="{{ route('msproveedor')}}"><img src="{{ asset('img/provee.jpg')}}" class="" alt="..."></a>
                        
                        <h5 class="card-title">{{'PROVEEDORES'}}</h5>
                        <!-- Agrega aquí el enlace o cualquier otro contenido que desees -->
                    </div>
                </div>

                <div style="justify-content: center" class="centro">
                    <div class="holaa">
                        <a href="{{ route('nevo') }}"><img src=" {{ asset('img/crea.jpg')}}" class="" alt="..."></a>
                        
                        <h5 class="card-title">{{'CREAR'}}</h5>
                        <h5 class="card-title">{{'USUARIOS'}}</h5>
                        <!-- Agrega aquí el enlace o cualquier otro contenido que desees -->
                    </div>
                </div>
            </div>
            <div style="text-align: center; background-color: rgb(0, 0, 0)">
                <h4 style="color: rgb(255, 255, 255);font-family: 'Times New Roman', Times, serif" > CON DERECHOS RESERVADOS AL AUT@R</h4>
            </div>
        </div>
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
