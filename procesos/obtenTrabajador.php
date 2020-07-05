<?php 
	
	require_once "../php/crud.php";

	$obj= new crud();

	echo json_encode($obj->obtenTrabajador($_POST['id_trab']));

 ?>