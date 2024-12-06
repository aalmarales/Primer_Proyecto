<?php
require("gestion.php");

$id=$_POST["id"];
$nombre=$_POST["nom"];
$apellido=$_POST["ape"];
$edad=$_POST["ed"];
$user=$_POST["us"];

$actualiza=new Gestion;
$actualiza->actualizar($id,$nombre,$apellido,$edad,$user);
header("Location:index.php");
?>