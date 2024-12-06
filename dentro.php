<?php
session_start();
if (isset($_SESSION["logueado"])) {
echo "HOLA"."<br>". $_SESSION["logueado"]."<br>";
//echo $_COOKIE["login"];
}
else{
    echo"usuario no registrado";
}

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
    <h1>BIENVENIDO ESTAS DENTRO</h1>

    <a href="admin.php">¿ Eres Administrador ?</a>
<form action="<?php $_SERVER["PHP_SELF"];?>" method="post">
    <div class="row g-3 align-items-center">
  <div class="col-auto">
    <label for="inputPassword6" class="col-form-label">Buscar...</label>
  </div>
  <div class="col-auto">
    <input type="text" name="frase" placeholder="Escriba el usuario...">
    <input type="submit" name="submitBtnBuscarFrase" value="Buscar">
  </div>
  </div>

</form>

<table>
    <tr>
    
    <td>Nombre</td>
    <td>Apellido</td>
    <td>Edad</td>
  
    </tr>

    <?php
  include("gestion.php");

  $obj= new Gestion();
  $fras=$_POST["frase"];
  $result=$obj->buscar_Frase($fras);

  foreach ($result as $fila):?>


  <tr>
    <td><?php echo $fila["nombre"];?></td>
    <td><?php echo $fila["apellido"];?></td>
    <td><?php echo $fila["edad"];?></td>
  </tr>
    <?php
    endforeach;
    ?>


</table>
  
</body>
</html>