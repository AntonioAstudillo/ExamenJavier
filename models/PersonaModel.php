<?php

require_once 'conexion/Conexion.php';

class PersonaModel extends Conexion{


   public function __construct(){
      parent::__construct();
   }

   public function insert($nombre , $apellidos , $password , $correo , $tipo)
   {
      try
      {
         $this->conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
         $this->conexion->beginTransaction();

         $consulta = "INSERT INTO persona(idPersona , nombre , apellidos , password , correo , tipo) values(?,?,?,?,?,?)";

         $statement = $this->conexion->prepare($consulta);
         $statement->execute(array(null , $nombre , $apellidos, $password , $correo , $tipo));
         $lastId = $this->conexion->lastInsertId();

         if($tipo == 2)
         {
            $consulta = "INSERT INTO alumno(idAlumno , idPersona) values(? , ?)";
            $statement = $this->conexion->prepare($consulta);
            $statement->execute(array(null , $lastId));
         }
         else
         {
            $consulta = "INSERT INTO maestro(idmaestro , idPersona) values(? , ?)";
            $statement = $this->conexion->prepare($consulta);
            $statement->execute(array(null , $lastId));
         }

         $this->conexion->commit();

      }catch(Exception $e){
         $this->conexion->rollback();
         echo $e->getMessage();
      }

      if($statement->rowCount() > 0)
      {
         return true;
      }
      else
      {
         return false;
      }

   }


   public function comprobarUsuario($email , $password)
   {
      $consulta = "SELECT tipo FROM persona WHERE correo = ? and password = ?";

      $statement = $this->conexion->prepare($consulta);
      $statement->execute(array($email , $password));

      if($statement->rowCount() > 0)
      {
         return $statement->fetch(PDO::FETCH_ASSOC);
      }else{
         return false;
      }

   }


}


?>
