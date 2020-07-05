<?php 

	require_once "../php/crud.php";

	$obj= new crud();

	$datos=array(
		$_POST['nombre'],
		$_POST['fecha_i'],
		$_POST['fecha_f']
				);

	echo $obj->registrarPeriodo($datos);

	
 ?>