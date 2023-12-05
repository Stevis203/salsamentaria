<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>hola</title>
</head>
<body class="sa">
    <div class="container">
    <div class="fd">
        <div class="zzx">
            <div>
                <svg style="width: 30px" xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" viewBox="0 0 20 20" fill="currentColor">
                    <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path>
                </svg>
            </div>
            <div>
                <a style="color: bisque" class="nav-link active" aria-current="page" href="{{ route('administrador')}}">Atras</a>
            </div>
        </div>
        <div>
            <h1 style="font-family: 'Times New Roman', Times, serif">AGREGAR PRODUCTO</h1>
        </div>
    </div>
    <div class="ff">
        <style>
            .zzx{
                grid-template-columns: auto auto;
                display: flex;
            }
            .ff{
                margin-top: 30px;
                color: blanchedalmond;
                border-radius: 20px;
                justify-content: center;
                display: grid;
                text-align: center;
            }
            .sa{
                background-image: url('/img/bicoin.jpg');
                mask-repeat: no-repeat;
            }
            .fd{
                
                color: bisque;
                grid-template-columns: auto auto;
                display: grid;
                margin-top: 20px;
            }
            form{
                position: relative;
                max-width: 600px;
                padding: 50px;
                background: rgba(255, 255, 255, .2);
                box-shadow: 0 5px 15px rgba(0, 0, 0, .5);
                border-radius: 15px;
                text-align: center;
                display: grid;
            }
            .ahg{
                text-align: center;
                margin-top: 15px;
                color: bisque;
            }
        </style>
        <form method="POST" action="{{ route('agrecate') }}">
            @csrf
            
            <div class="row mb-3">
                <label for="rol" class="col-md-4 col-form-label text-md-end">codigoCategoria</label>
                <div class="col-md-6">
                    <select name="rol" id="rol" class="form-select" autofocus>
                        <option></option>
                        <option></option>
                        <option></option>
                        <option></option>
                    </select>
                </div>
            </div>
    
            <div class="row mb-3">
                <label for="Nombre" class="col-md-4 col-form-label text-md-end">Nombre</label>
    
                <div class="col-md-6">
                    <input id="Nombre" type="text" class="form-control" name="Nombre" value="{{ old('Nombre') }}" required autocomplete="name" autofocus>
    
                    @error('Nombre')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="row mb-3">
                <label for="apellido" class="col-md-4 col-form-label text-md-end">Marca</label>
    
                <div class="col-md-6">
                    <input id="apellido" type="text" class="form-control @error('apellido') is-invalid @enderror" name="apellido" value="{{ old('apellido') }}" required autocomplete="apellido" autofocus>
    
                    @error('apellido')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="row mb-3">
                <label for="apellido" class="col-md-4 col-form-label text-md-end">Tipo Producto</label>
    
                <div class="col-md-6">
                    <input id="apellido" type="text" class="form-control @error('apellido') is-invalid @enderror" name="apellido" value="{{ old('apellido') }}" required autocomplete="apellido" autofocus>
    
                    @error('apellido')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
    
            <div class="row mb-3">
                <label for="documento" class="col-md-4 col-form-label text-md-end">Estado</label>
    
                <div class="col-md-6">
                    <select class="form-select" name="" id="">
                        <option value="">Disponible</option>
                        <option value="">No Disponible</option>
                    </select>
                </div>
            </div>
    
            <div class="row mb-3">
                <label for="telefono" class="col-md-4 col-form-label text-md-end">Precio</label>
    
                <div class="col-md-6">
                    <input id="telefono" type="text" class="form-control @error('telefono') is-invalid @enderror" name="telefono" value="{{ old('telefono') }}" required autocomplete="telefono" autofocus>
    
                    @error('telefono')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
    
            <div class="row mb-3">
                <label for="direccion" class="col-md-4 col-form-label text-md-end">Descripcion</label>
    
                <div class="col-md-6">
                    <input id="direccion" type="text" class="form-control @error('direccion') is-invalid @enderror" name="direccion" value="{{ old('direccion') }}" required autocomplete="direccion" autofocus>
    
                    @error('direccion')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div style="text-align: center" class="row mb-0">
                <div class="col-md-6 offset-md-4">
                    <button type="submit" class="btn btn-primary">
                        <h4>{{ __('Guardar') }}</h4>
                    </button>
                </div>
            </div>
        </form>
        <style>
            label{
                font-family: 'Times New Roman', Times, serif
            }
            button{
                font-family: 'Times New Roman', Times, serif
            }
        </style>
    </div>    
    <div class="ahg">
        <h1 style="font-family: 'Times New Roman', Times, serif">CON DERECHOS RESERVADOS AL AUT@R</h1>
    </div> 
</div>           
</body>
</html>