<?php 

	require_once "../php/crud.php";

	$obj= new crud();

	$datos=array(
		$_POST['id_est'],
		$_POST['nombre'],
		$_POST['apellido'],
		$_POST['correo'],
		$_POST['contraseña'],
		$_POST['nivel']
				);

		echo $obj->actualizarUsuario($datos);  
	
 ?>