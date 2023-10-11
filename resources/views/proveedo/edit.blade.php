<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('css/edit.css')}}">

    <header>
        <div class="bobb">
            <div id="app">
                <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
                    <div class="container">
                        
                        <a class="navbar-brand" href="{{ url('/') }}">
                            <h2 style="font-family: 'Times New Roman', Times, serif">EDITAR CLIENTE</h2>
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
<body>
    <form action="{{ route('msproveedor.update', $user->id) }}" method="PUT">
        @csrf
        <div class="formulario">
            <div>
                <label for="NOMBRE">NOMBRE</label>
                <div>
                    <input type="text" name="NOMBRE" id="" value="{{$user->name}}">
                </div>
            </div>
        
            <div>
                <label for="APELLIDO">APELLIDO</label>
                <div>
                    <input type="text" name="APELLIDO" id="" value="{{$user->apellido}}" >
                </div>
            </div>
    
            <div>
                <label for="DOCUMENTO">DOCUMENTO</label>
                <div>
                    <input type="text" name="DOCUMENTO" id="" value="{{$user->documento}}" >
                </div>
            </div>
    
            <div>
                <label for="TELEFONO">TELEFONO</label>
                <div>
                    <input type="text" name="TELEFONO" id="" value="{{$user->telefono}}" >
                </div>
            </div>
    
            <div>
                <label for="DIRECCION">DIRECCION</label>
                <div>
                    <input type="text" name="DIRECCION" id="" value="{{$user->direccion}}" >
                </div>
            </div>
    
            <div>
                <label for="CORREO">CORREO</label>
                <div>
                    <input type="text" name="CORREO" id="" value="{{$user->email}}" >
                </div>
            </div>
        </div>
        <div style="text-align: center; margin: 10px">
            <button type="submit" class="btn btn-primary">ACTUALIZAR</button>
        </div>
    </form>
</body>
</html>