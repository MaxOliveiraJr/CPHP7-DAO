<?php 


	require_once("config.php");

	// $sql = new sql();

	// $usuarios = $sql->select("SELECT * FROM tb_usuarios");

	// echo json_encode($usuarios);

	// $root = new Usuario();

	// $root->loadById('3');

	// echo $root;

	//carrega uma lista de usuários

	// $list = Usuario::getList();

	// echo json_encode($list);


	// $search = Usuario::search("jo");

	// echo json_encode($search);

	$usuario = new Usuario();

	$usuario->login("Root","1234");

	echo $usuario;
?>