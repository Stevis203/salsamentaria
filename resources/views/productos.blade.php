<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="stylesheet" href="{{ asset('css/productos.css') }}">
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

        <link rel="stylesheet" href="{{ asset('public/build') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    
    <title>Catálogo</title>
</head>
<header>
    <div class="bobb">
        <div id="app">
            <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
                <div class="container">
                    <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions"><svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-chevron-double-down" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M1.646 6.646a.5.5 0 0 1 .708 0L8 12.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
                        <path fill-rule="evenodd" d="M1.646 2.646a.5.5 0 0 1 .708 0L8 8.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
                      </svg></button>
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
<body>
    @include('menu')
    <div class="titulo">
        <h1>Lista de Productos</h1>
        </div>
    <div class="container">
        <div class="row">
            <div class="col-3">
                <div class="menun">

                </div>
            </div>
            <div class="col-6">
               
                    <table>
                        <div class="contenido">
                                <div class="pagination">
                                    <!-- Enlace para retroceder a la página anterior -->
                 @if ($firstItems->count() > 0 && $currentPage > 1)
                <a href="{{ route('productos.index', ['page' => $currentPage - 1]) }}"><</a>
                @endif
            </div>
                                <div class="productos">
                                    @forelse ($firstItems as $fila)
                                        <div class="cont">
                                            {{$fila->nombre}}
                                            {{$fila->marca}}
                                            {{$fila->descripcion}}
                                            {{$fila->precio}}
                                            <img src="{{asset('img/'. $fila->imagen)}}" alt="Imagen" width="120px" height="120">
                                            @include('cantidad')
                                            <a href="#">Agregar</a>

                                            
                                        </div>
                                        
                                    @empty 
                                    @endforelse
                                     </div>
                                     <div class="pagination2">
                                        <!-- Enlace para avanzar a la página siguiente -->
                                        @if ($firstItems->count() > 0)
                                            <a href="{{ route('productos.index', ['page' => $currentPage + 1]) }}">></a>
                                        @endif
                                    </div>
                           
                        
                    </table>
            </div>
            </div>
        </div>
    </div>
    
    <style>
        body{
            background-image: url("./img/fondo.avif");
        }
        .pagitation{
            
        }
        .container{
            margin: 0;
            padding: 0;
        }
        *{
            margin: 0;
            padding: 0;
        }
        .row{
            columns: 3;

        }
    .menun{
        margin-right: 2px;
        margin-left: 2px;
        width: 20px;
    }
    .pagination a {
        font-size: 50px; /* Ajusta el tamaño del texto según tu preferencia */
        margin-right: 2px;
        margin-top: 100px;
        margin-left: 100px;
       /* border: 2px solid red;*/
        display: 
         /* Añade un espacio entre los enlaces */
        text-decoration: none; /* Elimina el subrayado predeterminado */
    }
    .pagination2 {
        font-size: 50px; /* Ajusta el tamaño del texto según tu preferencia */
        margin-right: 2px;
        margin-top: 100px;
        margin-left: 2px;
        /*border: 2px solid red;*/
        display: 
         /* Añade un espacio entre los enlaces */
        text-decoration: none; /* Elimina el subrayado predeterminado */
    }
    
    .pagination a:hover {
        color: black; /* Cambia el color al pasar el ratón por encima */
    }
    
        .productos {
            display: grid;
            grid-template-columns: repeat(3, 1fr); /* Dos columnas por fila */
            gap: 20px; /* Espacio entre las cajas de productos */
            justify-content: center;
            background-color: white;
            width: 100%; /* Utiliza todo el ancho disponible */
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2); /* Sombra para las cajas */
  
  }
  .contenido{
    display: flex;
    justify-content: space-between;
    /*border: 2px solid red;*/
    width: 1000px;    
    background-size: cover;
    background-position: center center;
    background-repeat: no-repeat

  }
  .titulo {
            margin-top: 80px;
            text-align: center; /* Centra el texto del título */
            background-color: rgba(255, 255, 255, 0.754);
            width: 400px;
            margin: 0 auto; /* Centra el bloque en el medio */
            padding: 20px;
            border-radius: 5px;
    
    
  }
    </style>
    <!-- Botones de navegación -->
    
    
    
</body>
</html>