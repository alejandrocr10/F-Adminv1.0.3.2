<?php 

	require_once "../php/crud.php";

	$obj= new crud();

	$datos=array(
		$_POST['nombre'],
		$_POST['apellido'],
		$_POST['ci'],
		$_POST['rif'],
		$_POST['tlf']
				);

	echo $obj->registrarCliente($datos);

	
 ?>