<?php 

	require_once "../php/crud.php";

	$obj= new crud();
	
	echo $obj->eliminarCaso($_POST['idCaso']);
	
	
 ?>