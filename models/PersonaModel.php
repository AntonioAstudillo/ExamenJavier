<?php

require_once 'conexion/Conexion.php';

class PersonaModels extends Conexion{


   public function __construct(){
      parent::__construct();
   }

   public function insert($nombre , $apellidos , $password , $correo , $tipo)
   {
      $consulta = "INSERT INTO persona(idPersona , nombre , apellidos , password , correo , tipo) values(?,?,?,?,?,?)";

      $statement = $this->conexion->prepare($consulta);
      $statement->execute(array(null , $nombre , $apellidos, $password , $correo , $tipo));

      if($statement->rowCount() > 0){
         return true;
      }else{
         return false;
      }

   }
}


?>
