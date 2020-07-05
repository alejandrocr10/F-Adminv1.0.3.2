<?php 

	require_once "../php/crud.php";

	$obj= new crud();

	$nombre=$_FILES['archivos']['name'];
	$temp_name=$_FILES['archivos']['tmp_name'];
	$ruta='Archivos/archivos_compartidos/' .$nombre;

	if(!file_exists('../Archivos/archivos_compartidos')){
		mkdir('../Archivos/archivos_compartidos',0777,true);
		if(file_exists('../Archivos/archivos_compartidos')){
			if(move_uploaded_file($temp_name, '../Archivos/archivos_compartidos/' .$nombre)){

				$datos=array(
					$_POST['titulo'],
					$_POST['descripcion'],
					$ruta		
							);
			
				echo $obj->compartirArchivo($datos);

				echo"<script>location.href='../compartir.php'</script>";
			}else{
				echo "Archivo no se pudo guardar.";
			}
		}
	}else{
		if(move_uploaded_file($temp_name, '../Archivos/archivos_compartidos/'.$nombre)){

			$datos=array(
				$_POST['titulo'],
				$_POST['descripcion'],
				$ruta		
						);
		
			echo $obj->compartirArchivo($datos);

			echo"<script>location.href='../compartir.php'</script>";
		}else{
			echo "Archivo no se pudo guardar!";
		}
	}

	
 ?>