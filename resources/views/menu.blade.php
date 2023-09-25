<!DOCTYPE html>
<html>
<head>
    <title>Menú de Navegación</title>
    <style>
        
        ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333; /* Color de fondo del menú */
    text-align: center; /* Centra el menú horizontalmente */
}

li {
    display: inline-block; 
    vertical-align: middle;
    margin: 0 10px; 
}

li a {
    display: block;
    color: white; 
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    font-size: 18px; 
}

li a:hover {
    background-color: #ff6600; /* Color de fondo al pasar el mouse sobre el enlace */
}

    </style>
</head>
<body>

<ul>
    <li><a href="productos.blade.php">Productos</a></li>
    <li><a href="cate.blade.php">Categorías</a></li>
    <li><a href="">Servicios</a></li>
    <li><a href="">Contactos</a></li>
</ul>

</body>
</html>
