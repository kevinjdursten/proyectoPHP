 <!DOCTYPE html>
 <html lang="en ">

 <head>
     <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 </head>
 <body>
<section>
    <div class="form-box">
      <div class="form-value">
        
      </div>  
 
</section>
   <a href="eliminar_frontend.php" target="_blank" rel="noopener noreferrer">eliminar</a>
   <a href="visualizar.php" target="_blank" rel="noopener noreferrer">visualizar"></a>
   <a href="insertar_frontend.php" target="_blank" rel="noopener noreferrer">insertar</a>
   <a href="editar_frontend.php" target="_blank" rel="noopener noreferrer">editar"></a>
   <a href="registrar_frontend.php" target="_blank" rel="noopener noreferrer">registrar"></a>
</nav>


    <h1>registrar productos</h1>
    <form action="./insertar_backend.php" method="post">
       <input type="text" placeholder="nombre" name="nombre">
       <input type="text" placeholder="descripcion" name="descripcion">
       <input type="number" placeholder="precio" name="precio">
       <input type="text" placeholder="color" name="color">
       <input type="number" placeholder="stock" name="stock">
       <input type="number" placeholder=" precio con descuento" name="preciodescuento">
       <input type="submit" value="enviar">
    </form>
 </body>

 </html>