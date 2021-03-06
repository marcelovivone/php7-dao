<?php

require_once("config.php");

/*
// exibe todos os usuários
$sql = new Sql();
$usuarios = $sql->select("SELECT * from usuario");
echo json_encode($usuarios);
*/

/*
// exibe um usuário
$usuario = new Usuario();
$usuario->loadbyId(2);
echo $usuario;
*/
/*
// exibe todos os usuários
$lista = Usuario::getList();
echo json_encode($lista);
*/

/*
// exibe todos os usuários
$lista = Usuario::search("l");
echo json_encode($lista);
*/

/*
// exibe usuário por login e senha
$usuario = new Usuario();
$usuario->login("Tila", "02468");
echo $usuario;
*/

/*
// inclui usuário (sem o construtor)
$usuario = new Usuario();
$usuario->setDsclogin("Donna");
$usuario->setDscsenha("09876");
$usuario->insert();
echo $usuario;
*/

/*
// inclui usuário (com o construtor)
$usuario = new Usuario("Donna", "09876");
$usuario->insert();
echo $usuario;
*/

/*
// atualiza usuário
$usuario = new Usuario();
$usuario->loadById(7);
$usuario->update("Paco", "08642");
echo $usuario;
*/

// exclui usuário
$usuario = new Usuario();
$usuario->loadById(8);
$usuario->delete();
echo $usuario;

?>