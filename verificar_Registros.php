<?php
require("gestion.php");


    $nombre=$_POST["nombreReg"];
    $apellido=$_POST["apellidoReg"];
    $edad=$_POST["edadReg"];
    $usuario=$_POST["usuarioReg"];
    $nomb_foto= $_FILES["imagenReg"]["name"];

    $contra=$_POST["passwordReg"];
    $pass_hash=password_hash($contra,PASSWORD_DEFAULT);

if(strlen($nombre)==0 ||strlen($apellido)==0 || strlen($edad)==0 || strlen($usuario)==0 || strlen($contra)==0)
    {
        echo "DEBE RELLENAR TODOS LOS CAMPOS";
    }
elseif(!is_numeric($edad))
{
    echo "LA EDAD DEBE SER UN NUMERO";
}
elseif(is_numeric($nombre)||is_numeric($apellido)){
    echo "EL NOMBRE Y EL APELLIDO DEBEN DE SER LETRAS";
}



else{
    if(isset($_FILES["imagenReg"])){
        $dir_destino=$_SERVER["DOCUMENT_ROOT"]. "/PrimerProyecto/imagenes/";
        move_uploaded_file($_FILES["imagenReg"]["tmp_name"],$dir_destino.$nomb_foto);
    }


    $envio=new Gestion();
    $envio->insertar($nombre,$apellido,$edad,$usuario,$pass_hash,$nomb_foto);
    header("Location:index.php");
}







    
?>