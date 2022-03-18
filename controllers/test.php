<?php

require_once '../models/PersonaModel.php';

$objeto = new PersonaModel();

// $nombre , $apellidos , $password , $correo , $tipo
$resultado = $objeto->insert('Antonio' , 'Astudillo' , '4881245' , 'antonio@gmail.com' , '2');


var_dump($resultado);



 ?>
