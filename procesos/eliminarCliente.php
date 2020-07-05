<?php 

	require_once "../php/crud.php";

	$obj= new crud();


	echo $obj->eliminarCliente($_POST['idUser']);

	
 ?>