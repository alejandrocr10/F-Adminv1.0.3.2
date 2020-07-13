<?php 

	class crud{

		/*OBTENER*/
		public function obtenCaso($id){
			require_once "conexion.php";

			$sql="SELECT *
					from casos 
					where id='$id'";

			$result=mysqli_query($conexion,$sql);
			$ver=mysqli_fetch_row($result);

			$datos=array(
				'id_cas' => $ver[0],
				'descripcion' => $ver[2],
				'materia' => $ver[3],
				'cliente' => $ver[5],
				'estado' => $ver[7]
				);

			return $datos;
		}

		public function obtenTrabajador($iduser){
			require_once "conexion.php";

			$sql="SELECT *
					from empleados 
					where id='$iduser'";

			$result=mysqli_query($conexion,$sql);
			$ver=mysqli_fetch_row($result);

			$datos=array(
				'id_trab' => $ver[0],
				'nombre' => $ver[2],
				'apellido' => $ver[3],
				'cedula' => $ver[1],
				'tlf' => $ver[4],
				'cargo' => $ver[5],
				'direccion' => $ver[6],
				'banco' => $ver[7],
				'n_cuenta' => $ver[8]
				);

			return $datos;
		}

		public function obtenAgenda($id){
			require_once "conexion.php";

			$sql="SELECT *
					from clientes 
					where id='$id'";

			$result=mysqli_query($conexion,$sql);
			$ver=mysqli_fetch_row($result);

			$datos=array(
				'nombre_ag' => $ver[1],
				'apellido_ag' => $ver[2],
				'ci_ag' => $ver[3],
				'rif_ag' => $ver[4],
				'tlf_ag' => $ver[5],
				);

			return $datos;
		}

		public function obtenAsistencia($iduser){
			require_once "conexion.php";

			$sql="SELECT id,
						Cedula
					from empleados 
					where id='$iduser'";

			$result=mysqli_query($conexion,$sql);
			$ver=mysqli_fetch_row($result);

			$datos=array(
				'id_user' => $ver[0],
				'cedula' => $ver[1]
				);

			return $datos;
		}
		
		public function obtenPeriodo($id){
			require_once "conexion.php";

			$sql="SELECT id,
						nombre,
						fecha_i,
						fecha_f
					from periodos 
					where id='$id'";

			$result=mysqli_query($conexion,$sql);
			$ver=mysqli_fetch_row($result);

			$datos=array(
				'id_per' => $ver[0],
				'nombre' => $ver[1],
				'fecha_i' => $ver[2],
				'fecha_f' => $ver[3]
				);

			return $datos;
		}

		public function obtenUsuario($iduser){
			require_once "conexion.php";

			$sql="SELECT id,
						nombre,
						apellido,
						correo,
						passw,
						nivel
					from usuarios 
					where id='$iduser'";

			$result=mysqli_query($conexion,$sql);
			$ver=mysqli_fetch_row($result);

			$datos=array(
				'id_est' => $ver[0],
				'nombre' => $ver[1],
				'apellido' => $ver[2],
				'correo' => $ver[3],
				'contraseña' => $ver[4],
				'nivel' => $ver[5]
				);

			return $datos;
		}
		public function obtenCliente($id){
			require_once "conexion.php";

			$sql="SELECT id,
						nombre,
						apellido,
						cedula,
						rif,
						tlf
					from clientes 
					where id='$id'";

			$result=mysqli_query($conexion,$sql);
			$ver=mysqli_fetch_row($result);

			$datos=array(
				'id_cli' => $ver[0],
				'nombre' => $ver[1],
				'apellido' => $ver[2],
				'ci' => $ver[3],
				'rif' => $ver[4],
				'tlf' => $ver[5]
				);

			return $datos;
		}
		/*OBTENERFIN*/

		/*ACTUALIZAR*/
		public function actualizarPeriodo($datos){
			require "conexion.php";

			$sql="UPDATE periodos set nombre='$datos[0]',
										fecha_i='$datos[1]',
										fecha_f='$datos[2]'
						where id='$datos[3]'";

			//ejecutamos la sentencia de sql
			$result=mysqli_query($conexion,$sql);
		}

		public function actualizarUsuario($datos){
			require "conexion.php";

			$sql="UPDATE usuarios set nombre='$datos[1]',
										apellido='$datos[2]',
										correo='$datos[3]',
										passw='$datos[4]',
										nivel='$datos[5]'
						where id='$datos[0]'";

			//ejecutamos la sentencia de sql
			$result=mysqli_query($conexion,$sql);
		}
		public function actualizarCliente($datos){
			require "conexion.php";

			$sql="UPDATE clientes set nombre='$datos[1]',
										apellido='$datos[2]',
										cedula='$datos[3]',
										rif='$datos[4]',
										tlf='$datos[5]'
						where id='$datos[0]'";

			//ejecutamos la sentencia de sql
			$result=mysqli_query($conexion,$sql);
		}

		public function actualizarTrabajador($datos){
			require "conexion.php";

			$sql="UPDATE empleados set cedula='$datos[3]',
										nombre='$datos[1]',
										apellido='$datos[2]',
										tlf='$datos[4]',
										cargo='$datos[5]',
										direccion='$datos[6]',
										banco='$datos[7]',
										n_cuenta='$datos[8]'
						where id='$datos[0]'";

			//ejecutamos la sentencia de sql
			$result=mysqli_query($conexion,$sql);
		}

		public function actualizarCaso($datos){
			require "conexion.php";

			$sql="UPDATE casos set descripcion='$datos[1]',
										cliente='$datos[2]',
										materia='$datos[3]',
										estado='$datos[4]'
						where id='$datos[0]'";

			//ejecutamos la sentencia de sql
			$result = mysqli_query($conexion,$sql);
		}
		/*ACTUALIZARFIN*/

		/*REGISTRAR*/
		public function registrarAsistencia($id){
			require "conexion.php";
			
			$sql="INSERT INTO asistencia  VALUES(NULL,'$id[0]',
								   '$id[1]',
								   '$id[2]',
								   '$id[3]',
								   '$id[5]'

								   )";

			$result=mysqli_query($conexion,$sql);

		}

		public function registrarUsuario($id){
			require_once "conexion.php";

			$sql="INSERT INTO usuarios  VALUES(NULL,'$id[0]',
								   '$id[1]',
								   '$id[2]',
								   '$id[3]',
								   '$id[4]'
								   )";
			//ejecutamos la sentencia de sql
			$result=mysqli_query($conexion,$sql);
		}

		public function registrarPeriodo($id){
			require_once "conexion.php";

			$sql="INSERT INTO periodos  VALUES(NULL,'$id[0]',
								   '$id[1]',
								   '$id[2]'
								   )";
			//ejecutamos la sentencia de sql
			return mysqli_query($conexion,$sql);
		}

		public function registrarCliente($id){
			require_once "conexion.php";

			$sql="INSERT INTO clientes  VALUES(NULL,'$id[0]',
								   '$id[1]',
								   '$id[2]',
								   '$id[3]',
								   '$id[4]'
								   )";
			//ejecutamos la sentencia de sql
			$result=mysqli_query($conexion,$sql);
		}

		public function registrarTrabajador($id){
			require "conexion.php";
			$asis = 0;
			$ina = 0;
			$sql="INSERT INTO empleados  VALUES(NULL,'$id[0]',
								   '$id[1]',
								   '$id[2]',
								   '$id[3]',
								   '$id[4]',
								   '$id[5]',
								   '$id[6]',
								   '$id[7]'
								   )";
			
			//ejecutamos la sentencia de sql
			$result=mysqli_query($conexion,$sql);
		}
		/*REGISTRARFIN*/

		/*ELIMINAR*/
		public function eliminarArchivoCompartido($id){
			require_once "conexion.php";
			
			$sql2 = "SELECT ruta FROM archivos_compartidos WHERE id='$id'";
			$result2 = mysqli_query($conexion,$sql2);
			$mostrar=mysqli_fetch_row($result2);
			$ruta = "../".$mostrar[0];
			unlink($ruta);

			$sql="DELETE from archivos_compartidos where id='$id'";
			$result = mysqli_query($conexion,$sql);//para poder usar una variable en vez de RETURN hay que cambiar el orden en el jquery 
			
			
		}

		public function eliminarCaso($id){
			require_once "conexion.php";
			
			$sql3 = "SELECT titulo,responsable FROM casos WHERE id='$id'";
			$result3 = mysqli_query($conexion,$sql3);
			$mostrar=mysqli_fetch_row($result3);
			$_carpeta = str_replace(array('.', ',','"',':'), '' , $mostrar[0]);

			$sql2 = "SELECT ruta FROM archivos WHERE carpeta='$_carpeta' AND responsable='$mostrar[1]'";
			$result2 = mysqli_query($conexion,$sql2);
			while ($mostrar=mysqli_fetch_row($result2)) {
				$ruta = "../".$mostrar[0];
				unlink($ruta);
			}
			

			$sql="DELETE from casos where id='$id'";
			$result = mysqli_query($conexion,$sql);//para poder usar una variable en vez de RETURN hay que cambiar el orden en el jquery 
			
			
		}

		public function eliminarUsuario($id){
			require_once "conexion.php";

			$sql="DELETE from usuarios where id='$id'";
			return mysqli_query($conexion,$sql);
		}
		
		public function eliminarCliente($id){
			require_once "conexion.php";

			$sql="DELETE from clientes where id='$id'";
			return mysqli_query($conexion,$sql);
		}

		public function eliminarPeriodo($id){
			require_once "conexion.php";

			$sql="DELETE from periodos where id='$id'";
			return mysqli_query($conexion,$sql);
		}

		public function eliminarTrabajador($id){
			require_once "conexion.php";

			$sql="DELETE from empleados where id='$id'";
			$result= mysqli_query($conexion,$sql);
			$sql2="DELETE from acumulacion where id='$id'";
			$result2= mysqli_query($conexion,$sql2);
		}
		/*ELIMINARFIN*/

		

		public function compartirArchivo($id){
			require_once "conexion.php";
				
			$today = getdate();
			$d = $today['mday'];
     		$m = $today['mon'];
     		$y = $today['year'];
			$fecha = $y."/".$m."/".$d;
			//ME FALTA ARREGLAR LA FECHA DE LOS DOC
			//ME SALE UN DIA ADELANTADO 

			$sql="INSERT INTO archivos_compartidos  VALUES(NULL,'$id[0]',
								   '$id[1]',
								   '$fecha',
								   '$id[2]'
								   )";
			//ejecutamos la sentencia de sql
			$result=mysqli_query($conexion,$sql);
		}

		public function registrarCasos($datos){
			require_once "conexion.php";

			$sql="INSERT INTO casos  VALUES(NULL,'$datos[0]',
								   '$datos[1]',
								   '$datos[2]',
								   '$datos[3]',
								   '$datos[4]',
								   '$datos[5]',
								   '$datos[6]'
								   )";
			//ejecutamos la sentencia de sql
			$result=mysqli_query($conexion,$sql);
		}

		public function registrarClientes($datos){
			require "conexion.php";

			$sql="INSERT INTO clientes  VALUES(NULL,'$datos[0]',
								   '$datos[1]',
								   '$datos[2]',
								   '$datos[3]',
								   '$datos[4]'
								   )";
			//ejecutamos la sentencia de sql
			$result=mysqli_query($conexion,$sql);
		}
		
		public function registrarDocs($datos){
			require "conexion.php";

			$today = getdate();
			$d = $today['mday'];
     		$m = $today['mon'];
     		$y = $today['year'];
			$fecha = $y."/".$m."/".$d;

			$sql="INSERT INTO archivos  VALUES(NULL,'$datos[0]',
								   '$datos[1]',
								   '$fecha',
								   '$datos[2]',
								   '$datos[3]',
								   '$datos[4]'
								   )";
			//ejecutamos la sentencia de sql
			$result=mysqli_query($conexion,$sql);
		}

		public function añadeDocs($datos){
			require_once "conexion.php";

			$today = getdate();
			$d = $today['mday'];
     		$m = $today['mon'];
     		$y = $today['year'];
			$fecha = $y."/".$m."/".$d;

			$sql="INSERT INTO archivos  VALUES(NULL,'$datos[0]',
								   '$datos[1]',
								   '$fecha',
								   '$datos[2]',
								   '$datos[3]',
								   '$datos[4]'
								   )";
			//ejecutamos la sentencia de sql
			$result=mysqli_query($conexion,$sql);
		}

	}

 ?>