<?php

if(isset($_POST))
{
   require_once '../models/PersonaModel.php';

   $objeto = new PersonaModel();


   if(isset($_POST['bandera']))
   {
      switch($_POST['bandera'])
      {
         case '1':
            /*Recibimos los datos para mandarlos al modelo. Se pueden validar, pero no es el objetivo del examen.*/
            $nombre = $_POST['nombre'];
            $apellidos = $_POST['apellidos'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $tipo = $_POST['tipo'];
            $result = $objeto->insert($nombre , $apellidos , $password , $email , $tipo);

            if($result){
               echo 'true';
            }else{
               echo 'false';
            }
         break;
         case '2':
            $correo = $_POST['email'];
            $pass = $_POST['pass'];
            $result = $objeto->comprobarUsuario($correo , $pass);

            if($result){
               echo $result['tipo'];
            }else{
               echo 'false';
            }
         break;
         case '3':
            $puntaje = $_POST['puntaje'];
            $correo = $_POST['correo'];
            $result = $objeto->actualizarPuntaje($correo , $puntaje);

            if($result){
               echo 'true';
            }else{
               echo 'false';
            }
         break;
      }//cierra switch

   }else{
      $correo = $_POST['correo'];
      $resultado = $objeto->obtenerPuntaje($correo);
      echo $resultado['puntaje'];
   }//cierra if bandera


}//cierra if post


 ?>
