<?php
session_start(); //indicamos que vamos a usar sesiones

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" type="text/css" href="/css/main.css">

    <title>Leer Usuario</title>
</head>
<body>
    <div align="center">
        <div align="left" class="thin-page-500px">
            <h2>Leer Usuario</h2>
            <form action="" method="get" id="obtener_usuario">

            <label for="id">ID de Usuario:</label>
            <input type="number" id="id" name="id" required><br>
            </form>
   <button class="button" onclick="getClienteId()">Buscar</button> 
    <br><br>

   <div id="usuarios">

   </div>
</div>
<script src="/js/main.js"></script>
<script src="/js/obtenerUsuario.js"></script>
</div>
    
</body>
</html>