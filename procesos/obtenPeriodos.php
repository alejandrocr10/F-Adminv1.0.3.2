<?php 
	
	require_once "../php/crud.php";

	$obj= new crud();

	echo json_encode($obj->obtenPeriodo($_POST['id_periodo']));

 ?>