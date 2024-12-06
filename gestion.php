<?php
require ("conexion.php");

class Gestion extends Conexion{


    public function __construct(){
        parent::__construct();
    }

    public function mostrarTodo(){

        $sql="SELECT * FROM mostrarall"; //---- Accediendo a la View de la BD
        $stm=$this->conexion_bd->prepare($sql);
        $stm->execute();
        $result=$stm->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function insertar($nombre,$apellido,$edad,$usuario,$pass,$foto){
    
        $sql="INSERT INTO registros_usuarios VALUES (:id,:nombre,:apellido,:edad,:usuario,:pass,:foto)";

        $stm=$this->conexion_bd->prepare($sql);
        $stm->execute(array(':id'=>NULL, ':nombre'=>$nombre, ':apellido'=>$apellido, ':edad'=>$edad, ':usuario'=>$usuario, ':pass'=>$pass, ':foto'=>$foto));
    }

    public function borrar($id){
        $sql="DELETE FROM registros_usuarios WHERE id=:id";

        $stm=$this->conexion_bd->prepare($sql);
        $stm->execute(array(':id'=>$id));
    }

    public function actualizar($id,$nombre,$apellido,$edad,$usuario){
        $sql="UPDATE registros_usuarios SET nombre=:nombre, apellido=:apellido, edad=:edad, usuario=:usuario WHERE id=:id";
        $stm=$this->conexion_bd->prepare($sql);
        $stm->execute(array(':id'=>$id,':nombre'=>$nombre, ':apellido'=>$apellido, ':edad'=>$edad, ':usuario'=>$usuario, ':pass'=>$pass));

    }

    public function buscar($usuario){
        
        $sql="SELECT nombre,apellido,password FROM registros_usuarios WHERE usuario= :usuario";
        $stm=$this->conexion_bd->prepare($sql);
        $stm->execute(array(':usuario'=>$usuario));

        $result=$stm->fetchAll(PDO::FETCH_ASSOC);

        return $result;
        
}

    public function buscar_Frase($frase){
        $sql="SELECT nombre,apellido,edad FROM registros_usuarios WHERE usuario LIKE '%' :frase '%'";
        $stm=$this->conexion_bd->prepare($sql);
        $stm->execute(array(":frase"=> $frase));

        $result=$stm->fetchAll(PDO::FETCH_ASSOC);

        return $result;


    }



}
?>