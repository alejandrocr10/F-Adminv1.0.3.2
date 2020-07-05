<?php 
	
	require_once "../php/crud.php";

	$obj= new crud();

	echo json_encode($obj->obtenAgenda($_POST['id_ag']));

 ?>