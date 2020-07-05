<?php 

	require_once "../php/crud.php";

	$obj= new crud();


	echo $obj->eliminarUsuario($_POST['idUser']);

	
 ?>