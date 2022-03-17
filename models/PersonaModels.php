<?php

require_once 'conexion/Conexion.php';

class PersonaModels extends Conexion{


   public function __construct(){
      parent::__construct();
   }

   public function insert($nombre , $apellidos , $correo , $tipo)
   {
      $consulta = "INSERT INTO persona(idPersona , nombre , apellidos , correo , tipo) values(?,?,?,?,?)";

      $statement = $this->conexion->prepare($consulta);
      $statement->execute(array(null , $nombre , $apellidos , $correo , $tipo));

   }
}


?>
