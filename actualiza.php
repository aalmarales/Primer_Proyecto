<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1 align="center">ACTUALIZAR REGISTROS</h1>
    <?php

    $id=$_GET["Id"];
    $nombre=$_GET["Nom"];
    $apellido=$_GET["Apell"];
    $edad=$_GET["Edad"];
    $user=$_GET["User"];

    ?>
    

    <form action="actualizar_Registros.php" method="post" align="center">
    
    <label for="id"></label><input type="hidden" name="id" value="<?php echo $id?>"><br>
    <label for="nom">Nombre:</label><input type="text" name="nom" value="<?php echo $nombre?>"><br>
    <label for="ape">Apellido:</label><input type="text" name="ape" value="<?php echo $apellido?>"><br>
    <label for="ed">Edad:</label><input type="text" name="ed" value="<?php echo $edad?>"><br>
    <label for="us">Usuario:</label><input type="text" name="us" value="<?php echo $user?>"><br>
    
    <input type="submit" name="act" value="Actualizar">
    <a href="index.php"><input type="button" name="cancel" value="Cancelar"></a>
        
    
    </form>
</body>
</html>