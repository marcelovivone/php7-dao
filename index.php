<?php

require_once("config.php");

//$sql = new Sql();

//$usuarios = $sql->select("SELECT * from usuario");

//echo json_encode($usuarios);

$usuario = new Usuario();

$usuario->loadbyId(2);

echo $usuario;

?>