<?php

require_once("config.php");

//$sql = new Sql();
//$usuarios = $sql->select("SELECT * from usuario");
//echo json_encode($usuarios);

// exibe um usuário
//$usuario = new Usuario();
//$usuario->loadbyId(2);
//echo $usuario;

// exibe todos os usuários
//$lista = Usuario::getList();
//echo json_encode($lista);

// exibe todos os usuários
//$lista = Usuario::search("l");
//echo json_encode($lista);

// exibe usuário por login e senha
//$usuario = new Usuario();
//$usuario->login("Tila", "02468");
//echo $usuario;

//inclui usuário (sem o construtor)
//$aluno = new Usuario();
//$aluno->setDsclogin("Donna");
//$aluno->setDscsenha("09876");
//$aluno->insert();
//echo $aluno;

//inclui usuário (com o construtor)
$aluno = new Usuario("Donna", "09876");

$aluno->insert();

echo $aluno;

?>