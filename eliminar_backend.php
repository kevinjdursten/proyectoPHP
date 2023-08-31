    
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link rel="stylesheet" href="style.css">
<body>
    <h1>eliminar productos</h1>
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
            }else{
                echo "<script>console.log('Conexion exitosa')</script>";

                $nombre= $_POST["nombre"];
                $id=$_POST["id"];
                
                $consulta = "DELETE FROM productos WHERE id='$id'";



                // Ejecutamos la consulta//
                $ejecucion = $conexion->query($consulta);
                // detectar las filas afectadas//
                $filasAfectadas = $conexion->affected_rows;

                // Verificamos si se elimino el producto//
                if($filasAfectadas ==1){
                    echo "<h2>eliminacion exitosa</h2>";
                    echo "<script>alert('producto eliminado satisfactoriamente');</script>";
                    echo "<a href='./insentar_frontend.php'>Registrar nuevo producto</a>";
                }else{
                    echo "Error al eliminar el producto";
                }

                $conexion->close();
            }
    ?>

</body>

</html>