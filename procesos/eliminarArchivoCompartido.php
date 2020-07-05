<?php 

	require_once "../php/crud.php";

	$obj= new crud();
	


	echo $obj->eliminarArchivoCompartido($_POST['idDoc']);
	

	
 ?>