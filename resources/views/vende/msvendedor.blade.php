<!DOCTYPE html>
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

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
<body>

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Cliente</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Proveedor</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Administrador</a>
              </li>
            </ul>
            <form class="d-flex" role="search">
              <input class="form-control me-2"  type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Buscar</button>
            </form>
          </div>
        </div>
      </nav>

    <h1 style="text-align: center; margin: 10px; font-family: 'Times New Roman', Times, serif">MIRA LOS VENDEDORES DE LA EMPRESA</h1>
    <div class="container">
        <table class="table table-bordered">
            <tr class="letra" style="text-align: center; ">
                <td style="background-color: dimgrey; color: white">NOMBRE</td>
                <td style="background-color: dimgrey; color: white">APELLIDO</td>
                <td style="background-color: dimgrey; color: white">DOCUMENTO</td>
                <td style="background-color: dimgrey; color: white">TELEFONO</td>
                <td style="background-color: dimgrey; color: white">DIRECCION</td>            
                <td style="background-color: dimgrey; color: white">CORREO ELECTRONICO</td>
                <td style="background-color: dimgrey; color: white" colspan="2">ACCIONES</td>
    
            </tr>
        
            <style ></style>
    
            @foreach ($user as $clie)
            <tr style="text-align: center">
                <td>{{ $clie->name }}</td>
                <td>{{ $clie->apellido }}</td>
                <td>{{ $clie->documento }}</td>
                <td>{{ $clie->telefono }}</td>
                <td>{{ $clie->direccion }}</td>
                <td>{{ $clie->email }}</td>
                <td><a href="{{ route('edit', $clie->id)}}"><button type="button" class="btn btn-primary">EDITAR</button></a></td>
                <td><a href="{{ route('msvendedor.destroy', $clie->id)}}"><button type="button" class="btn btn-danger" onclick="return confirm('Esta seguro de eliminar este cliente')">ELIMINAR</button></a></td>
            </tr>
            @endforeach
        </table> 
    </div>
</body>
</html>