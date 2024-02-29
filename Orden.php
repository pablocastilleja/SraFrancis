<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="Css/Style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Ordenar</title>
</head>
<body>
    <header>
        <img src="Img/Slde7_1.png" alt="Logo de Francis Deliciosos Tacos" class="logo">
            <h1></h1>
        <nav>
            <ul>
                <li><a href="Index.html">Inicio</a></li>
                <li><a href="Menu.html">Menú</a></li>
                <li><a href="#">Ofertas</a></li>
                <li><a href="Ubicacion.html">Contacto</a></li>
            </ul>
            <div class="title-menu"><h1>Menú Mañanero</h1></div>
        </nav>
    </header>

    <main class="container-orden">
    <img src="ruta_de_tu_imagen.jpg" alt="Descripción de la imagen" class="imagen-menu">
    <select id="selectMenu" onchange="mostrarMenu()">
   <option value="martes">Martes</option>
   <option value="miercoles">Miércoles</option>
   <!-- Agrega opciones para los demás días -->
</select>
    </main>

    <footer>
            <p>&copy; 2023 Deliciosos Tacos y mas Francis&copy;   <?php echo date("d/m/Y"); ?></p>            
        </footer>
    
        <script src="Js/Java.js"></script>
</body>
</html>