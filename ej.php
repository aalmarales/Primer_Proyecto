<?php

$nombre=$_FILES["imagen"]["name"];
$tipo=$_FILES["imagen"]["type"];
$tamaño=$_FILES["imagen"]["size"];
$dir_temp=$_FILES["imagen"]["tmp_name"];

// Mover la imagen del directorio temporal al directorio final
$dir_destino=$_SERVER["DOCUMENT_ROOT"]."/PrimerProyecto/imagenes/";

    if (isset($_POST["envio"])) {

       if($tamaño<=1000000 && $tipo=="image/jpg"){
        echo $nombre."<br>".$tipo."<br>".$tamaño."<br>".$dir_temp."<br>".$_SERVER["DOCUMENT_ROOT"];
         move_uploaded_file($dir_temp,$dir_destino.$nombre);
       }else{
        echo "SOLO IMAGENES(/jpg)";
       }
         
        }
   
    

    
    
    ?>