<?php
    require("gestion.php");
    $obj1= new Gestion();
    $array_datos=$obj1->mostrarTodo();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>

    <h1 align="center">LISTADO DE REGISTROS</h1>

    <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">NOMBRE</th>
      <th scope="col">APELLIDO</th>
      <th scope="col">EDAD</th>
      <th scope="col">USUARIO</th>
      <th scope="col">FOTO</th>
      <th><div class="spinner-grow" role="status">
  <span class="visually-hidden">Loading...</span>
</div></th>
<th><div class="spinner-grow" role="status">
  <span class="visually-hidden">Loading...</span>
</div></th>
    </tr>
  </thead>
  <?php
        foreach($array_datos as $fila):?>
       <tbody> 
    <tr>
        <td><?php echo "#". $fila["id"]?></td>
        <td><?php echo $fila["nombre"]?></td>
        <td><?php echo $fila["apellido"]?></td>
        <td><?php echo $fila["edad"]?></td>
        <td><?php echo $fila["usuario"]?></td>
        <td><img src="/PrimerProyecto/imagenes/<?php echo $fila["foto"]?>" width="5%"/></td>

        <td><a href="borrar_Registros.php?Id=<?php echo $fila["id"] ?>"><input type="button" name="delete" value="Borrar"></a></td>
        <td><a href="actualiza.php?Id=<?php echo $fila["id"] ?> & Nom=<?php echo $fila["nombre"] ?> &
        Apell=<?php echo $fila["apellido"] ?> & Edad=<?php echo $fila["edad"] ?> & User=<?php echo $fila["usuario"] ?>">
        <input type="button" name="update" value="Actualizar"></a></td>
    </tr>
    
    
<?php 
    endforeach;
?>
</tbody>
<div class="d-grid gap-2 d-md-block">
<a href="registro.php"><button class="btn btn-primary" type="button" name="registrar">REGISTRAR</button></a>
<a href="login.php"><button class="btn btn-primary" type="button" name="login">LOGIN</button></a>
</div>


</table>


</body>
</html>