<?php 

	require_once "../php/crud.php";

	$obj = new crud();

	$datos=array(
		$_POST['nombre'],
		$_POST['fecha_i'],
		$_POST['fecha_f'],
		$_POST['id_per']
				);

		echo $obj->actualizarPeriodo($datos);  
	
 ?>