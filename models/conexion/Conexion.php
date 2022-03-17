<?php

require_once 'Config.php';


class Conexion
{
   protected $conexion;
   private $dns;

   public function __construct()
   {
      $this->dns = 'mysql:dbname='.DB_NAME .';host=' . DB_HOST;

      try{
         $this->conexion = new PDO($this->dns , DB_USER , DB_PASSWORD);
      }catch(PDOException $e){
         echo $e->getMessage();
      }
   }

   public function getConexion(){
      return $this->conexion;
   }
}





?>
