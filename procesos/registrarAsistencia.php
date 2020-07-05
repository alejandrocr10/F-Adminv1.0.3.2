<?php 

	require_once "../php/crud.php";

	$obj= new crud();

	$datos=array(
		$_POST['ci'],
		$_POST['fecha'],
		$_POST['asistencia'],
		$_POST['causa'],
		$_POST['id_user'],
		$_POST['periodo']

				);

			echo $obj->registrarAsistencia($datos);    
	
 ?>