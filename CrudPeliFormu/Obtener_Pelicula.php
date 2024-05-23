<?php
session_start(); //indicamos que vamos a usar sesiones

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="/css/main.css">

    <title>Leer Pelicula</title>
</head>
<body>
    <div align="center">
        <div align="left" class="thin-page-500px">
            <h2>Leer Pelicula</h2>
            <form action="" method="get" id="obtener_pelicula">

                <label for="id_ca">ID de Pelicula:</label>
                <input type="number" id="id_ca" name="id_ca" required><br>
                
            </form>
            <button class="button" onclick="getPeliculaId()">Buscar</button> 
            <br><br>

            <div id="peliculas">

            </div>
    </div>
<script src="/js/main.js"></script>
<script src="/js/obtenerPelicula.js"></script>
</div>
</body>
</html>