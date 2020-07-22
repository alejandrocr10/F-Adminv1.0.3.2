<?php session_start(); require "php/comprobar.php";?>
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>F&Admin | Registro de Usuarios</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <link rel="icon" href="img/F&Alogo2.png" type="image/x-icon">
  <!-- datatables -->
  <link rel="stylesheet" type="text/css" href="plugins/DataTablesBoton/DataTables-1.10.21/css/dataTables.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <link rel="stylesheet" type="text/css" href="plugins/alertify/css/alertify.css">
  <link rel="stylesheet" type="text/css" href="plugins/alertify/css/themes/bootstrap.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  <?php include "navbar.php"; ?>
  <!-- /.navbar -->

  <!-- sidebar -->
  <?php include "sidebar.php"; ?>
  <!-- /.sidebar -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">ADM | Usuarios</h1>
          </div><!-- /.col -->
         
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">

        <div class="col-md-1"></div>

        <div class="col-12 col-md-10">
            <div class="card card-dark card-outline card-tabs">
              <div class="card-header p-0 pt-1 border-bottom-0">
                <ul class="nav nav-tabs" id="custom-tabs-three-tab" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link " id="custom-tabs-three-home-tab" data-toggle="pill" href="#custom-tabs-three-home" role="tab" aria-controls="custom-tabs-three-home" aria-selected="true"><i class="fa fa-plus-circle"></i> Nuevo</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" id="custom-tabs-three-profile-tab" data-toggle="pill" href="#custom-tabs-three-profile" role="tab" aria-controls="custom-tabs-three-profile" aria-selected="false"><i class="fa fa-list"></i> Listado</a>
                  </li>
                 
                </ul>
              </div>
              <div class="card-body">
                <div class="tab-content" id="custom-tabs-three-tabContent">
                  <div class="tab-pane fade " id="custom-tabs-three-home" role="tabpanel" aria-labelledby="custom-tabs-three-home-tab">
                     <!-- FORM -->

                     <form action="" id="frm" method="POST">
                     <div class="form-row">
                            <div class="form-group col-6 col-md-6">
                            <label for="inputEmail4">Nombre</label>
                            <input type="text" class="form-control"  name="nombre" placeholder="Nombre" required>
                            </div>
                            <div class="form-group col-6 col-md-6">
                            <label for="inputPassword4">Apellido</label>
                            <input type="text" class="form-control"  name="apellido" placeholder="Apellido" required>
                            </div>
                     </div>
                        <div class="form-row">
                            <div class="form-group col-7 col-md-6">
                            <label for="inputEmail4">Correo</label>
                            <input type="email" class="form-control"  name="correo" placeholder="Correo" required>
                            </div>
                            <div class="form-group col-5 col-md-6">
                            <label for="inputPassword4">Contraseña</label>
                            <input type="password" class="form-control"  name="passw" placeholder="Contraseña" required>
                            </div>
                        </div>
                        
                        <div class="form-row">
                        <div class="form-group col-6 col-md-4">
                            <label for="inputState">Nivel</label>
                            <select id="inputState" name="nivel" class="form-control" required>
                                <option selected>Elegir...</option>
                                <option value ="1">Abogado</option>
                                <option value ="2">Administrador</option>
                                <?php if ($_SESSION['nivel'] == 3) :?>
                                <option value ="3">Técnico</option>
                                <?php endif;?>
                            </select>
                            </div>
                        </div> 
                        <div class="text-center">
                        <button type="" id="btnRegistrar" class="btn btn-primary">Registrar</button>
                        </div>
                        
                        </form>
                    <!-- FORM END -->
                  </div>

                  <div class="tab-pane fade active show" id="custom-tabs-three-profile" role="tabpanel" aria-labelledby="custom-tabs-three-profile-tab">
                     
                    <!-- DATATABLES -->
                    <div class="container-fluid">
                      <div class="row">
                        <div class="col-12">
                          
                          <div id="iddatatable"></div>
                        
                        </div>
                      </div>
                    </div>
                    <!-- DATATABLES END -->

                  </div>
                  
                </div>
              </div>
              <!-- /.card -->
            </div>
          </div>
            
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
  <!-- Modal editar -->
	<div class="modal fade" id="modalEditar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered " role="document">
			<div class="modal-content">
				<div class="modal-header bg-dark">
					<h5 class="modal-title" id="exampleModalLabel">Actualizar Usuario</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body ">
					<form id="frmActualizar" method="post">
						<input type="text" hidden="" id="idest" name="id_est">
						
            <label>Nombre</label>
						<input type="text" class="form-control input-sm " id="nombre" name="nombre" style="font-size:18px;">
						<label>Apellido</label>
						<input type="text" class="form-control input-sm" id="apellido" name="apellido" style="font-size:18px;">
						<label>correo</label>
						<input type="email" class="form-control input-sm" id="correo" name="correo" style="font-size:18px;">
						
						<div class="form-row">
                <div class="form-group col-8 col-md-8">
                  <label>Contraseña</label>
                  <input type="text" class="form-control input-sm" id="contraseña" name="contraseña" style="font-size:18px;">
                </div>
                    <div class="form-group col-4 col-md-4">
                            <label for="inputState">Nivel</label>
                            <select id="nivel" name="nivel" class="form-control">
                                <option selected>Elegir...</option>
                                <option value ="1">Abogado</option>
                                <option value ="2">Administrador</option>
                                <option value ="3">Técnico</option>
                                
                       </select>
                    </div>
            </div> 
						<!--Seccion-->
						
				</div>
				<div class="modal-footer bg-dark">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
					<button type="button" class="btn btn-info" id="btnActualizar" style="color:white;">Actualizar</button>
				</div>
					</form>
			</div>
		</div>
	</div>


  <!-- Main Footer -->
  <footer class="main-footer ">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      AleCR10
    </div>
    <!-- Default to the left -->
    <div class="text-center">
        <strong>Copyright &copy; 2020 F&Admin.</strong> Todos los Derechos Reservados.
    </div>
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/alertify/alertify.js"></script>
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- datatables -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
</body>
</html>

<script type="text/javascript">
	$(document).ready(function(){
		$('#btnRegistrar').click(function(){
			datos=$('#frm').serialize();

			$.ajax({
				type:"POST",
				data:datos,
				url:"procesos/registrarUsuario.php",
				success:function(r){
					if(r==1){
						alertify.success("Registrado con exito :D");
					}else{
						alertify.error("Fallo al Registrar :(");
					}
				}
			});
		});
	});

  $(document).ready(function(){
		$('#btnActualizar').click(function(){
			datos=$('#frmActualizar').serialize();

			$.ajax({
				type:"POST",
				data:datos,
				url:"procesos/actualizarUsuario.php",
				success:function(r){
					if(r==1){
            alertify.error("Fallo al Actualizar :(");
					}else{
            $('#iddatatable').load('tablas/tablaUsuario.php');
						alertify.success("Actualizado con exito :D");	
					}
				}
			});
		});
	});
</script>

<script type="text/javascript">

function obtenUsuario(id){
		$.ajax({
			type:"POST",
			data:"id_est=" + id,
			url:"procesos/obtenUsuario.php",
			success:function(r){
				datos=jQuery.parseJSON(r);
				$('#idest').val(datos['id_est']);
				$('#nombre').val(datos['nombre']);
				$('#apellido').val(datos['apellido']);
				$('#correo').val(datos['correo']);
				$('#contraseña').val(datos['contraseña']);
				$('#nivel').val(datos['nivel']);
			}
		});
	}

  function eliminarDatos(id_User){
		alertify.confirm('Eliminar un usuario', '¿Seguro de eliminar este usuario?', function(){ 

			$.ajax({
				type:"POST",
				data:"idUser=" + id_User,
				url:"procesos/eliminarUsuario.php",
				success:function(r){
					if(r==1){
						$('#iddatatable').load('tablas/tablaUsuario.php');
						alertify.success("Eliminado con exito !");
					}else{
						alertify.error("No se pudo eliminar...");
					}
				}
			});

		}
		, function(){

		});
	}
</script> 

<script type="text/javascript">
	$(document).ready(function(){
		$('#iddatatable').load('tablas/tablaUsuario.php');
	});
</script>

