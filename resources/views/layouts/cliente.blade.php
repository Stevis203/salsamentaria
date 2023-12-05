<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salsamentaria Juanchos</title>
    <link rel="stylesheet" href="styles.css"> <!-- Enlaza tu hoja de estilos aquí -->

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <title>Inicio</title>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="stylesheet" href="{{ asset('css/inicio.css') }}">
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

        <link rel="stylesheet" href="{{ asset('public/build') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    
    <title>Inicio</title>
</head>
<header>
    <div class="bobb">
        <div id="app">
            <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
                <div class="container">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <h2 style="font-family: 'Times New Roman', Times, serif">Salsamentaria Juanchos</h2>
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
                                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                    </li>
                                @endif
    
                                @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
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
        </div>
     </header>
</head>
<header>
    @include('menu')
</header>
<body>
    
        <body>
            <div id="main-content">
                <h1>Salsamentaria Juanchos</h1>
                <p>Somos una empresa con varios años de servicio en la venta y distribución de productos para salsamentaria, comidas rápidas, restaurantes, entre otros.</p>
                <a href="{{ url('/mision-vision') }}">Explorar</a>

            </div>
        </body>
        
        </html>
        
      </head>
    </body>
        <style>
            body {
                font-family: Arial, sans-serif;
                margin: 0;
                padding: 0;
                background: url('https://i.pinimg.com/736x/63/bd/18/63bd18b2d8abea28da2ed39c9e22b0d0.jpg') center/cover no-repeat;
                color: #f3e7e7; /* Cambia el color del texto según el fondo */
            }
    
            header {
                background-color: #000000;
                text-align: center;
                padding: 1em;
                margin-top: -10px;
            }
    
            #main-content {
                text-align: ;
                margin: 0; /* Centra el contenido horizontalmente y ajusta el margen superior e inferior */
                padding: 80px;
                background-color: rgba(244, 240, 240, 0.); /* Fondo blanco semitransparente para mejorar legibilidad */
                border-radius: 10px;
                max-width: 800px;
            }
    
            h1 {
                font-family: 'Arial', sans-serif;/* Utiliza la fuente 'Pacifico' o cualquier otra fuente que te guste */
                font-size: 3.5em;
                margin-bottom: 10px;
            }
    
            p {
                font-size: 1.2em;
                margin-bottom: 20px;
            }
    
            #explore-btn {
                display: inline-block;
                padding: 10px 20px;
                font-size: 1.2em;
                text-decoration: none;
                background-color:  #b9a67f;
                color: #fff;
                border-radius: 5px;
                transition: background-color 0.3s;
            }
    
            #explore-btn:hover {
                background-color:  #b9a67f; /* Cambia el color al pasar el ratón */
            }
    
        </style>
    
      
