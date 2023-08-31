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


    <h1>eliminar productos</h1>
    <form action="./eliminar_backend.php" method="post">
        <input type="number" placeholder="id" name="id">
        <input type="text" placeholder="nombre" name="nombre">
        <input type="submit" value="enviar">
    </form>

</body>

</html>