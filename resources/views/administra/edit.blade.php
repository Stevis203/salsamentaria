<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</head>
<body class="sa">
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
        label{
            font-family: 'Times New Roman', Times, serif;
            color: bisque
        }
        button{
            font-family: 'Times New Roman', Times, serif
        }
    </style>
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
            <h1 style="font-family: 'Times New Roman', Times, serif">EDITAR USUARIO</h1>
        </div>
    </div>
    <div class="ff">
        <form action="{{ route('msadministrador.update', $user->id) }}" method="PUT">
            @csrf
            <div class="formulario">
                <div class="row mb-3">
                    <label class="col-md-4 col-form-label text-md-end" for="NOMBRE">NOMBRE</label>
                    <div class="col-md-6">
                        <input class="form-control" type="text" name="NOMBRE" id="" value="{{$user->name}}">
                    </div>
                </div>
            
                <div class="row mb-3">
                    <label class="col-md-4 col-form-label text-md-end" for="APELLIDO">APELLIDO</label>
                    <div class="col-md-6">
                        <input class="form-control" type="text" name="APELLIDO" id="" value="{{$user->apellido}}" >
                    </div>
                </div>
        
                <div class="row mb-3">
                    <label class="col-md-4 col-form-label text-md-end" for="DOCUMENTO">DOCUMENTO</label>
                    <div class="col-md-6">
                        <input class="form-control" type="text" name="DOCUMENTO" id="" value="{{$user->documento}}" >
                    </div>
                </div>
        
                <div class="row mb-3">
                    <label class="col-md-4 col-form-label text-md-end" for="TELEFONO">TELEFONO</label>
                    <div class="col-md-6">
                        <input class="form-control" type="text" name="TELEFONO" id="" value="{{$user->telefono}}" >
                    </div>
                </div>
        
                <div class="row mb-3">
                    <label class="col-md-4 col-form-label text-md-end" for="DIRECCION">DIRECCION</label>
                    <div class="col-md-6">
                        <input class="form-control" type="text" name="DIRECCION" id="" value="{{$user->direccion}}" >
                    </div>
                </div>
        
                <div class="row mb-3">
                    <label class="col-md-4 col-form-label text-md-end" for="CORREO">CORREO</label>
                    <div class="col-md-6">
                        <input class="form-control" type="text" name="CORREO" id="" value="{{$user->email}}" >
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-md-4 col-form-label text-md-end" for="ESTADO">ESTADO</label>
                    <div class="col-md-6">
                        <select class="form-control" name="ESTADO" id="" value="{{$user->estado}}">
                            <option value="Activo">ACTIVO</option>
                            <option value="Inactivo">INACTIVO</option>
                        </select>
                    </div>
                </div>
            </div>
            <div style="text-align: center; margin: 10px">
                <button type="submit" class="btn btn-primary">ACTUALIZAR</button>
            </div>
        </form>
    </div>
    
    <div class="ahg">
        <h1 style="font-family: 'Times New Roman', Times, serif">CON DERECHOS RESERVADOS AL AUT@R</h1>
    </div> 
</body>
</html>