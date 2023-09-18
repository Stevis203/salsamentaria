<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Botón de Cantidades</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      text-align: center;
      margin: 0;
    }

    #cantidad {
      font-size: 24px;
      margin: 10px;
    }

    #botones {
      display: flex;
      align-items: center;
      justify-content: center;
    }

    button {
      background-color: #4c95af;
      border: none;
      color: white;
      padding: 5px 10px;
      text-align: center;
      text-decoration: none;
      font-size: 16px;
      margin: 5px;
      cursor: pointer;
      border-radius: 5px;
      width: 30px;
      height: 30px;
    }
  </style>
</head>
<body>
  <div id="botones">
    <button id="disminuir">-</button>
    <span id="cantidad">0</span>
    <button id="aumentar">+</button>
  </div>

  <script>
    const botonDisminuir = document.getElementById('disminuir');
    const botonAumentar = document.getElementById('aumentar');
    const cantidadElemento = document.getElementById('cantidad');
    let cantidad = 0;

    botonDisminuir.addEventListener('click', () => {
        if(cantidad>0){
      cantidad--;
        }
      actualizarCantidad();
    });

    botonAumentar.addEventListener('click', () => {
      cantidad++;
      actualizarCantidad();
    });

    function actualizarCantidad() {
      cantidadElemento.textContent = cantidad;
    }
  </script>
</body>
</html>
