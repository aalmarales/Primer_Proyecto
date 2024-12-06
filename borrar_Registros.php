<?php
require("gestion.php");

$id=$_GET["Id"];
$borra= new Gestion();
$borra->borrar($id);

header("Location:index.php");
?>