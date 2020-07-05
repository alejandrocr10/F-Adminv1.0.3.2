<?php 
	
	require_once "../php/crud.php";

	$obj= new crud();

	echo json_encode($obj->obtenUsuario($_POST['id_est']));

 ?>