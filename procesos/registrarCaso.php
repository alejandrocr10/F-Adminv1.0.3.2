<?php
session_start();
require_once "../php/crud.php";
$obj= new crud();
$obj2= new crud();

$responsable = $_SESSION['usuario'];
$estado = "RECIBIDO";

//VARIABLES DE CASO
$tit = $_POST['titulo'];

//VARIABLES DE CLIENTE
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$cedula = $_POST['ci'];
$rif = $_POST['rif'];
$tlf = $_POST['tlf'];
//VARIABLES DE DOCUMENTOS
$titulo_doc = $_POST['titulo_doc'];
$descripcion_doc = $_POST['descripcion_doc'];

$docs=$_FILES['docs']['name'];
$temp_name=$_FILES['docs']['tmp_name'];

$_tit = str_replace(array('.', ',','"',':'), '' , $tit);
$n_clientes = "";

//con esto creo lo que se mostrara en la tabla de casos en el campo de clientes
for ($i=0; $i <count($nombre) ; $i++) { 
	if(($nombre[$i] !== " ") && ($apellido[$i] !== " ")){

		$n_clientes .= $nombre[$i]." ".$apellido[$i].". ";

	}
}

if(!file_exists('../Archivos/casos/'.$_tit)){
	mkdir('../Archivos/casos/'.$_tit,0777,true);
	if(file_exists('../Archivos/casos/'.$_tit)){
		
		while(true) {

			//// RECUPERAR LOS VALORES DE LOS ARREGLOS ////////
			$name = current($docs);
			$t_name = current($temp_name);
			
			////// ASIGNARLOS A VARIABLES ///////////////////
			$n=(( $name !== false) ? $name : ", &nbsp;");
			$t=(( $t_name !== false) ? $t_name : ", &nbsp;");

			if(move_uploaded_file($t, '../Archivos/casos/' .$_tit.'/'.$n)){
				//echo"<script>location.href='../casos.php'</script>";
			}

			// Up! Next Value
			$name = next( $docs );
			$t_name = next( $temp_name );
			
			// Check terminator
			if($name === false && $t_name === false) break;

		}
		

	}
}else{

	if(file_exists('../Archivos/casos/'.$_tit)){
		
		while(true) {

			//// RECUPERAR LOS VALORES DE LOS ARREGLOS ////////
			$name = current($docs);
			$t_name = current($temp_name);

			////// ASIGNARLOS A VARIABLES ///////////////////
			$n=(( $name !== false) ? $name : ", &nbsp;");
			$t=(( $t_name !== false) ? $t_name : ", &nbsp;");

			if(move_uploaded_file($t, '../Archivos/casos/' .$_tit.'/'.$n)){
				//echo"<script>location.href='../casos.php'</script>";
			}

			// Up! Next Value
			$name = next( $docs );
			$t_name = next( $temp_name );
			
			// Check terminator
			if($name === false && $t_name === false) break;

		}
		

	}
}

//ENVIO DE DATOS DEL CASO A BASE DE DATOS MEDIANTE EL CRUD
$datos=array(
	$_POST['titulo'],
	$_POST['descripcion'],
	$_POST['materia'],
	$_POST['fecha'],
	$n_clientes,
	$responsable,
	$estado
			);

echo $obj->registrarCasos($datos);

if ($_POST['existe']==1) {
	//SI EL CLIENTE YA ESTA REGISTRADO NO LO REGISTRA OTRA VEZ
}else {
	//con esto creo subo los clientes a las tablas.
	for ($i=0; $i <count($nombre) ; $i++) { 
	
		$datos_c=array(
			$nombre[$i],
			$apellido[$i],
			$cedula[$i],
			$rif[$i],
			$tlf[$i]
					);
		
		echo $obj->registrarClientes($datos_c);
	}
}


//con esto creo/guardo la ruta de los archivos en la base de datos

for ($i=0; $i <count($titulo_doc) ; $i++) { 
	$ruta = 'Archivos/casos/' .$_tit.'/'.$docs[$i];
	$datos_docs=array(
		$titulo_doc[$i],
		$descripcion_doc[$i],
		$ruta,
		$tit,
		$responsable
				);
	
	echo $obj2->registrarDocs($datos_docs);

}

echo"<script>location.href='../casos.php'</script>";



?> 