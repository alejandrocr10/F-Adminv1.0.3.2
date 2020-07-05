<?php 

	require_once "../php/crud.php";

	$obj= new crud();

	$datos=array(
		$_POST['id_trab'],
		$_POST['nombre'],
		$_POST['apellido'],
		$_POST['ci'],
		$_POST['tlf'],
		$_POST['cargo'],
		$_POST['direccion'],
		$_POST['banco'],
		$_POST['n_cuenta']
				);

		echo $obj->actualizarTrabajador($datos);  
	
 ?>