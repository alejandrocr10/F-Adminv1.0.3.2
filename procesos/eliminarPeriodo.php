<?php 

	require_once "../php/crud.php";

	$obj= new crud();


	echo $obj->eliminarPeriodo($_POST['idper']);

	
 ?>