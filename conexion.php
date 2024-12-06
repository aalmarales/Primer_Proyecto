<?php
//require ("config.php");

class Conexion{

    protected $conexion_bd;

    public function __construct(){
        try {
            $this->conexion_bd = new PDO("mysql:host=localhost; dbname=proyecto1","root","");
            $this->conexion_bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } 
        catch (Exception $e) {
            die("Conexion Fallida a MySql". $e->getMessage());
        }
        

        
    }
}
?>