<?php 
	
	require_once "../php/crud.php";

	$obj= new crud();

	echo json_encode($obj->obtenCliente($_POST['id_cli']));

 ?>