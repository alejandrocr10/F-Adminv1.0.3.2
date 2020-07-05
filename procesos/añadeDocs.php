<?php 
	session_start();
	require_once "../php/crud.php";

	$obj= new crud();

	$responsable = $_SESSION['usuario'];
	$nombre=$_FILES['doc']['name'];
	$temp_name=$_FILES['doc']['tmp_name'];
	$carpeta = $_POST['añade_doc'];
	$_carpeta = str_replace(array('.', ',','"',':'), '' , $carpeta);
	$ruta='Archivos/casos/' .$_carpeta.'/'.$nombre;

	if(move_uploaded_file($temp_name, '../Archivos/casos/'.$_carpeta.'/'.$nombre)){

		$datos=array(
			$_POST['titulo'],
			$_POST['descripcion'],
			$ruta,
			$carpeta,
			$responsable		
					);
	
		echo $obj->añadeDocs($datos);

		echo"<script>location.href='../casos.php'</script>";
	}else{
		echo "Archivo no se pudo guardar!";
	}

	
 ?>