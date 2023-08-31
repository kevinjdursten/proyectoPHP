<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link rel="stylesheet" href="style.css">
<body>
<nav>
   <a href="eliminar_frontend.php" target="_blank" rel="noopener noreferrer">eliminar</a>
   <a href="visualizar.php" target="_blank" rel="noopener noreferrer">visualizar"></a>
   <a href="insertar_frontend.php" target="_blank" rel="noopener noreferrer">insertar</a>
   <a href="editar_frontend.php" target="_blank" rel="noopener noreferrer">editar"></a>
   <a href="registrar_frontend.php" target="_blank" rel="noopener noreferrer">registrar"></a>
</nav>


    <h1>registrar productos</h1>
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
            }else{
                echo "<script>console.log('Conexion exitosa')</script>";

                $nombre= $_POST["nombre"];
                $descripcion=$_POST["descripcion"];
                $precio=$_POST["precio"];
                $color=$_POST["color"];
                $stock=$_POST["stock"];
                $preciodescuento=$_POST["preciodescuento"];

                $consulta = "INSERT INTO productos(nombre,descripcion,precio,color,stock,precio_descuento) values('$nombre','$descripcion','$precio','$color','$stock','$preciodescuento')";
                // Ejecutamos la consulta 
                $ejecucion = $conexion->query($consulta);

                // Validamos si el usuario se inserto.
                if($ejecucion){
                    echo "<h2>Registro Exitoso</h2>";
                    echo "<script>alert('producto registrado correctamente');</script>";
                    echo "<a href='./insentar_frontend.php'>Registrar nuevo producto</a>";
                }else{
                    echo "Error al registrar el producto";
                }

                $conexion->close();
            }
    ?>

</body>

</html>