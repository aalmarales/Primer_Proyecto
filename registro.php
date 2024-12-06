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
<div class='container'>
    <div class='row justify-content-center m-5'>
      <div class='card col-4 py-3'>
        <h3 class='m-2'>REGISTRO</h3><hr>
        <form action="verificar_Registros.php" method="post" class='p-3' enctype="multipart/form-data">
      
          <label>NOMBRE :
            <input class="form-control" type="text" name="nombreReg" placeholder="Nombre">
          </label><br><br>
          <label>APELLIDO :
            <input class="form-control" type="text" name="apellidoReg" placeholder="Apellido">
          </label><br><br>
          <label>EDAD :
            <input class="form-control" type="text" name="edadReg" placeholder="Edad">
          </label><br><br>
          <label>USUARIO :
            <input class="form-control" type="text" name="usuarioReg" placeholder="Usuario">
          </label><br><br>
      
          <label>PASSWORD :
            <input type="password" class="form-control mb-3" name="passwordReg" placeholder="Password">
          </label><br><br>
          <label>FOTO :
            <input type="file" class="form-control mb-3" name="imagenReg">
          </label>
      
          <input type="submit" class="btn btn-success" name="submitBtnReg" value="REGISTRAR">
          
        </form>
      </div>
    </div>
    </div>



    <!--<h1 align="center">PAGINA DE REGISTROS</h1>
<form action="verificar_Registros.php" method="post" align="center">
    
    <input type="text" name="nomb" placeholder="Nombre"><br>
    <input type="text" name="apell" placeholder="Apellido"><br>
    <input type="text" name="edad" placeholder="Edad"><br>
    <input type="text" name="user" placeholder="Usuario"><br>
    <input type="password" name="pass" placeholder="Contraseña"><br>
    <input type="submit" name="acept" value="Aceptar">
    <a href="index.php"><input type="button" name="cancel" value="Cancelar"></a>
        
    
    </form>-->

</body>
</html>