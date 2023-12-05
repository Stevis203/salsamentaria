<!DOCTYPE html>
<html>
<head>
    <title>Menú de Navegación</title>
    <style>
        
        ul {
    background-color: black; /* Color de fondo del menú */
    text-align: center; /* Centra el menú horizontalmente */
}

li {
    display: inline-block; 
    vertical-align: middle;
    margin: 0 10px; 
}

li a {
    display: block;
<<<<<<< HEAD
    color: rgb(227, 216, 216); 
=======
    color: rgb(255, 255, 255); 
>>>>>>> ramaMafe
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    font-size: 18px; 
}

li a:hover {
<<<<<<< HEAD
    background-color: #332821; /* Color de fondo al pasar el mouse sobre el enlace */
=======
    background-color: #20b5cf; /* Color de fondo al pasar el mouse sobre el enlace */
    color: white
>>>>>>> ramaMafe
}

    </style>
</head>
<body>

<ul>
    <li><a href="{{ route('iniciar') }}">Inicio</a></li>
    <li><a href="{{ route('cat') }}">Productos</a></li>
    <li><a href="Servicios">Servicios</a></li>
    <li><a href="Contactos">Contactos</a></li>
</ul>

</body>
</html>
