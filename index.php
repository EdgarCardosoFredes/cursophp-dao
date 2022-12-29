<?php

require_once("config.php");
/*
$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios");

echo json_encode($usuarios);
*/

//$root = new Usuario();
//$root->loadByid(3);

//echo $root;


//$lista = usuario::getList();
//echo json_encode($lista);


//$search = Usuario::search("ed");
//echo json_encode($search);


$usuario = new Usuario;
$usuario->login("edgar", "12345");
echo $usuario;

?>