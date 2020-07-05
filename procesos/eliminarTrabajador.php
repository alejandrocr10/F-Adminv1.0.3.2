<?php 

	require_once "../php/crud.php";

	$obj= new crud();


	echo $obj->eliminarTrabajador($_POST['idUser']);

	
 ?>