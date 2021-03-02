<?php

require_once("config.php");
//carrega um usuário
//$root = new usuario();
//$root->loadbyId(3);
//echo $root;

//carregar uma lista de usuários
//$lista = Usuario::getList();

//echo json_encode($lista);
//Carrega uma lista de usuarios buscando pelo login
//$search = Usuario::search("jo");

//echo json_encode($search);
//Carrega o usuario usando o login e a senha
//$usuario = new Usuario();
//$usuario->login("root","123456");

//echo $usuario;

//$aluno = new Usuario("aluno", "@lun0");
//$aluno->insert();

//echo $aluno;

$usuario = new Usuario();

$usuario->loadById(3);

$usuario->update("professor", "!@#$%¨&*");

echo $usuario;

?>