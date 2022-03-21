<?php

require_once("config.php");

/*$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios");

echo json_encode($usuarios);*/

//Carrega um usuário
//$Joao = new Usuario();
//$Joao->LoadByID(2);
//echo $Joao;

//Carrega uma lista de usuários
//$listaUsuarios = Usuario::getList();
//echo json_encode($listaUsuarios);

//$search = Usuario::search("Gui");
//echo json_encode($search);

//carrega um usuário usando o login e a senha
$usuario = new Usuario();
$usuario->login("Gui", "123");
echo $usuario;

?>