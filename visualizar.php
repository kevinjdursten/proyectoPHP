<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>productos registrados</title>
</head>
<link rel="stylesheet" href="style.css">
<body>
    <h1>productos registrados</h1>
    <nav>
   <a href="eliminar_frontend.php" target="_blank" rel="noopener noreferrer">eliminar</a>
   <a href="visualizar.php" target="_blank" rel="noopener noreferrer">visualizar"></a>
   <a href="insertar_frontend.php" target="_blank" rel="noopener noreferrer">insertar</a>
   <a href="editar_frontend.php" target="_blank" rel="noopener noreferrer">editar"></a>
   <a href="registrar_frontend.php" target="_blank" rel="noopener noreferrer">registrar"></a>
</nav>


    <?php
    // Definimos las variables de conexion.
    $host = "localhost";
    $usuario = "root";
    $clave = "";
    $baseDeDatos = "crud_php";

    // Creamos una instancia de la clase mysqli.
    $conexion = new mysqli($host, $usuario, $clave, $baseDeDatos);
    // Verificamos la conexion.
    if ($conexion->connect_error) {
        die("La conexion fallo: " . $conexion->connect_error);
    } else {
        echo "<script>console.log('Conexion exitosa')</script>";
        $consulta = "SELECT * FROM productos";
        $ejecucion = $conexion->query($consulta);

        while ($fila = $ejecucion->fetch_assoc()) {
            echo "<p>id: " . $fila["id"] . "</p>";
            echo "<p>nombre: " . $fila["nombre"] . "</p>";
            echo "<p>descripcion: " . $fila["descripcion"] . "</p>";
            echo "<p>precio: " . $fila["precio"] . "</p>";
            echo "<p>color: " . $fila["color"] . "</p>";
            echo "<p>stock: " . $fila["stock"] . "</p>";
            echo "<p>precio con descuento: " . $fila["precio_descuento"] . "</p>";
            echo "registrado el: " . $fila["creado"] . "<br>";
            echo "<hr>";
        }
    }
    ?>
</body>

</html>