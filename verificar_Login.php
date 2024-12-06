<?php
require("gestion.php");

$usuario=$_POST["usuario"];
$pass=$_POST["password"];

$buscar=new Gestion();
$array_buscar=$buscar->buscar($usuario);

foreach($array_buscar as $fila){
    if(password_verify($pass,$fila["password"])){

        session_start();
        $_SESSION["logueado"]=$_POST["usuario"];
       // setcookie("login","primera cookie");

        header("Location:dentro.php");
    }
    else{
        
        echo '<script>alert("COMPRUEBE SU CONTRASEÑA");</script>';
        header("Location:login.php");
    }
}




?>