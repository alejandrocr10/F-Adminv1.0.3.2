<?php 

	require_once "../php/crud.php";

	$obj= new crud();

	$datos=array(
		$_POST['id_cas'],
		$_POST['descripcion'],
		$_POST['cliente'],
		$_POST['materia'],
		$_POST['estado']
				);

		echo $obj->actualizarCaso($datos);  
	
 ?>