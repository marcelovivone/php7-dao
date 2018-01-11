<?php
require_once("config.php");

$sql = new Sql();

$usuarios = $sql->select("SELECT * from usuario");

echo json_encode($usuarios);
?>