<?php 

	require_once "../php/crud.php";

	$obj= new crud();

	$datos=array(
		$_POST['nombre'],
		$_POST['apellido'],
		$_POST['correo'],
		$_POST['passw'],
		$_POST['nivel']
				);

	echo $obj->registrarUsuario($datos);

	
 ?>