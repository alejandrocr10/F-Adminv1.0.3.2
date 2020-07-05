<?php 
	
	require_once "../php/crud.php";

	$obj= new crud();

	echo json_encode($obj->obtenAsistencia($_POST['id_user']));

 ?>