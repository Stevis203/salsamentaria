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

    <link rel="stylesheet" href="{{ asset('css/admin.css')}}">
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
 
</head>
<body class="qq">
    <style>
        .qq{
            background-image: url('/img/bicoin.jpg');
                mask-repeat: no-repeat;
        }
    </style>
    <div class="look" id="app">
        <nav class="navbar navbar-expand-md navbar-light  shadow-sm">
            <div class="container">
                <a class="navbar-brand">
                    <h2 style="font-family: 'Times New Roman', Times, serif;color: rgb(255, 255, 255)">Salsamentaria Juanchos</h2>
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
                                <a style="color: white" id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
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
        
        <div>
            <div style=" text-align: center" class="contenido">
                <h1 style="color: rgb(255, 255, 255);font-family: 'Times New Roman', Times, serif ">BIENVENIDO QUERIDO ADMINISTRADOR</h1>
            </div>
            <div class="contenido">
                <div class="centro">
                    <div class="holaa">
                        <h5>CLIENTES</h5>
                        <a href="{{ route('mscliente')}}"><img src="{{ asset('img/vende.jpg')}}" class="" alt="..."></a> 
                    </div>

                    <div class="holaa">
                        <h5>VENDEDORES</h5>
                        <a href="{{ route('msvend')}}"><img src="{{ asset('img/looo.jpg')}}" class="" alt="..."></a>
                    </div>

                    <div class="holaa">
                        <h5>ADMINISTRADORES</h5>
                        <a href="{{ route('msadministrador')}}"><img src="{{ asset('img/adminitro.png')}}" class="" alt="..."></a>
                    </div>

                    <div class="holaa">
                        <h5>PROVEEDORES</h5>
                        <a href="{{ route('msproveedor')}}"><img src="{{ asset('img/84.jpg')}}" class="" alt="..."></a>
                    </div>
                </div>
                <div style="justify-content: center" class="centro">
                    <div class="holaa">
                        <h5>AGREGAR<br> PRODUCTO</h5>
                        <a href="{{ route('agrecate')}}"><img class="asd" src="{{ asset('img/masssss.jpg')}}" class="" alt="..."></a>
                    </div>

                    <div class="holaa">
                        <h5>AGREGAR <br> USUARIO</h5>
                        <a href="{{ route('agreusus')}}"><img class="asd" src="{{ asset('gif/hello-2488_256.gif')}}" class="" alt="..."></a>
                    </div>
                    <style>
                        .asd{
                            width: 220px;
                            height: 200px;
                            background-color: white;
                        }
                        img{
                            width: 200px
                        }
                        h5{
                            text-align: center;
                            color: aqua
                        }
                        .holaa{
                            border-radius: 30px
                        }
                    </style>
                </div>
            </div>
           
        </div>
        <div>

        </div>
        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <div style="text-align: center;  width: 100% ">
        <h4 style="color: rgb(255, 255, 255);font-family: 'Times New Roman', Times, serif" > CON DERECHOS RESERVADOS AL AUT@R</h4>
    </div>
</body>
</html>
