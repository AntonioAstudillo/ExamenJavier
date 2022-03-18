<?php

if(isset($_POST))
{
   require_once '../models/PersonaModel.php';

   /*Recibimos los datos para mandarlos al modelo. Se pueden validar, pero no es el objetivo del examen.*/
   $nombre = $_POST['nombre'];
   $apellidos = $_POST['apellidos'];
   $email = $_POST['email'];
   $password = $_POST['password'];
   $tipo = $_POST['tipo'];

   $objeto = new PersonaModels();
   $result = $objeto->insert($nombre , $apellidos , $password , $email , $tipo);

   if($result){
      echo 'true';
   }else{
      echo 'false';
   }
}





 ?>
