<?php

require_once("config.php");

/*$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios");

echo json_encode($usuarios);*/

//NOTE Carrega um usuário
//$Joao = new Usuario();
//$Joao->LoadByID(2);
//echo $Joao;

//NOTE Carrega uma lista de usuários
//$listaUsuarios = Usuario::getList();
//echo json_encode($listaUsuarios);

//$search = Usuario::search("Gui");
//echo json_encode($search);

//NOTE carrega um usuário usando o login e a senha
//$usuario = new Usuario();
//$usuario->login("Gui", "123");
//echo $usuario;


//NOTE criando um novo usuário
/*$aluno = new Usuario("MaisOutroAluno", "0utr0@lun0");
$aluno->insert();

echo $aluno;
*/

//NOTE Alterar um usuário
/*$usuario = new Usuario();
$usuario->LoadByID(1);
$usuario->update("Aluno", "Hcode");
echo $usuario;
*/

$usuario = new Usuario();
$usuario->LoadByID(14);

$usuario->delete();
echo $usuario;



?>