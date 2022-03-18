<?php
require_once '../models/PersonaModel.php';

$objeto = new PersonaModel();
$resultado = $objeto->readAll();

?>
