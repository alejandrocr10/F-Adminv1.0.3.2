<?php session_start(); ?>
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>F&Admin | Registro de personal</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <link rel="icon" href="img/F&Alogo2.png" type="image/x-icon">
  <!-- datatables -->
  <link rel="stylesheet" type="text/css" href="plugins/DataTablesBoton/DataTables-1.10.21/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="css/botonesdatatablefixed.css">
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
            <h1 class="m-0 text-dark">ADM | Trabajadores</h1>
          </div><!-- /.col -->
         
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
        
        <div class="col-12">
            <div class="card card-dark card-outline card-tabs">
              <div class="card-header p-0 pt-1 border-bottom-0">
                <ul class="nav nav-tabs" id="custom-tabs-three-tab" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link " id="custom-tabs-three-home-tab" data-toggle="pill" href="#custom-tabs-three-home" role="tab" aria-controls="custom-tabs-three-home" aria-selected="true"><i class="fa fa-plus-circle" aria-hidden="true"></i> Nuevo</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" id="custom-tabs-three-profile-tab" data-toggle="pill" href="#custom-tabs-three-profile" role="tab" aria-controls="custom-tabs-three-profile" aria-selected="false"><i class="fa fa-list" aria-hidden="true"></i> Listado</a>
                  </li>
                 
                </ul>
              </div>
              <div class="card-body">
                <div class="tab-content" id="custom-tabs-three-tabContent">
                  <div class="tab-pane fade " id="custom-tabs-three-home" role="tabpanel" aria-labelledby="custom-tabs-three-home-tab">
                     <!-- FORM -->
                     
                     <div class="row">
                     
                       
                        <div class="col-12">
                        <form action="" id="frm" method="POST">
                    
                     <div class="form-row">
                            <div class="form-group col-md-4">
                            <label for="inputEmail4">Nombre</label>
                            <input type="text" class="form-control" id="inputEmail" name="nombre" placeholder="Nombre">
                            </div>
                            <div class="form-group col-md-4">
                            <label for="inputPassword4">Apellido</label>
                            <input type="text" class="form-control" id="inputPassword4" name="apellido" placeholder="Apellido">
                            </div>
                            <div class="form-group col-md-4">
                              <label for="inputPassword4">Cédula</label>
                              <input type="text" class="form-control" id="inputPassw" name="ci" placeholder="Cédula">
                            </div>
                        </div>
              
                        <div class="form-row">
                            <div class="form-group col-md-2">
                            <label for="inputEmail4">Telefono</label>
                            <input type="text" class="form-control" id="input4" name="tlf" placeholder="Telefono">
                            </div>
                            <div class="form-group col-md-3">
                            <label for="inputPassword4">Cargo</label>
                            <input type="text" class="form-control" id="inpssword4" name="cargo" placeholder="Cargo">
                            </div>
                            <div class="form-group col-md-7">
                            <label for="inputPassword4">Dirección</label>
                            <input type="text" class="form-control" id="inputPasrd4" name="direccion" placeholder="Dirección">
                            </div>
                        </div>
                        
                        <hr>
                        <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="inputPassword4">Banco</label>
                            <input type="text" class="form-control" id="inputPrd4" name="banco" placeholder="Banco">
                            </div>
                            <div class="form-group col-md-8">
                            <label for="inputPassword4">Nº de Cuenta</label>
                            <input type="text" class="form-control" id="inputPasswor4" name="n_cuenta" placeholder="NºCuenta">
                            </div>
                            
                        </div> 
                        <button type="" id="btnRegistrar" class="btn btn-primary">Registrar</button>
                        </form>
                        
                        </div>
                        <div class="col-2"></div>

                     </div>
                     
                    <!-- FORM END -->
                  </div>
                  <div class="tab-pane fade active show" id="custom-tabs-three-profile" role="tabpanel" aria-labelledby="custom-tabs-three-profile-tab">
                     
                    <!-- DATATABLES -->

                    <div class="container">
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

<!-- Modal editar -->
<div class="modal fade" id="modalEditar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Actualizar Trabajador</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
                <form action="" id="frmActualizar" method="POST">
                <input type="text" hidden="" id="idtrab" name="id_trab">
                     <div class="form-row">
                            <div class="form-group col-md-4">
                            <label for="inputEmail4">Nombre</label>
                            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre">
                            </div>
                            <div class="form-group col-md-4">
                            <label for="inputPassword4">Apellido</label>
                            <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Apellido">
                            </div>
                            <div class="form-group col-md-4">
                              <label for="inputPassword4">Cédula</label>
                              <input type="text" class="form-control" id="ci" name="ci" placeholder="Cédula">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-2">
                            <label for="inputEmail4">Telefono</label>
                            <input type="text" class="form-control" id="tlf" name="tlf" placeholder="Telefono">
                            </div>
                            <div class="form-group col-md-3">
                            <label for="inputPassword4">Cargo</label>
                            <input type="text" class="form-control" id="cargo" name="cargo" placeholder="Cargo">
                            </div>
                            <div class="form-group col-md-7">
                            <label for="inputPassword4">Dirección</label>
                            <input type="text" class="form-control" id="direccion" name="direccion" placeholder="Dirección">
                            </div>
                        </div>
                        <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="inputPassword4">Banco</label>
                            <input type="text" class="form-control" id="banco" name="banco" placeholder="Banco">
                            </div>
                            <div class="form-group col-md-8">
                            <label for="inputPassword4">Nº de Cuenta</label>
                            <input type="text" class="form-control" id="n_cuenta" name="n_cuenta" placeholder="NºCuenta">
                            </div>
                            
                        </div> 
                        <button type="" id="btnActualizar" class="btn btn-primary">Actualizar</button>
                        </form>
                        
                        </div>
                        

                     </div>
            </div> 
<!-- Modal editar FIN -->

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
<!-- datatables botones-->
<script src="plugins/DataTablesBoton/Buttons-1.6.2/js/dataTables.buttons.min.js"></script>
<script src="plugins/DataTablesBoton/JSZip-2.5.0/jszip.min.js"></script>
<script src="plugins/DataTablesBoton/pdfmake-0.1.36/pdfmake.min.js"></script>
<script src="plugins/DataTablesBoton/pdfmake-0.1.36/vfs_fonts.js"></script>
<script src="plugins/DataTablesBoton/Buttons-1.6.2/js/buttons.html5.min.js"></script>
<script src="plugins/DataTablesBoton/Buttons-1.6.2/js/buttons.print.min.js"></script>
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
				url:"procesos/registrarTrabajador.php",
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
				url:"procesos/actualizarTrabajador.php",
				success:function(r){
					if(r==1){
            alertify.error("Fallo al Actualizar :(");
					}else{
            $('#iddatatable').load('tablas/tablaTrabajadores.php');
						alertify.success("Actualizado con exito :D");	
					}
				}
			});
		});
	});
</script>

<script type="text/javascript">
function obtenTrabajador(id){
		$.ajax({
			type:"POST",
			data:"id_trab=" + id,
			url:"procesos/obtenTrabajador.php",
			success:function(r){
				datos=jQuery.parseJSON(r);
				$('#idtrab').val(datos['id_trab']);
				$('#nombre').val(datos['nombre']);
				$('#apellido').val(datos['apellido']);
				$('#ci').val(datos['cedula']);
				$('#tlf').val(datos['tlf']);
				$('#cargo').val(datos['cargo']);
				$('#direccion').val(datos['direccion']);
				$('#banco').val(datos['banco']);
				$('#n_cuenta').val(datos['n_cuenta']);
			}
		});
	}

function eliminarDatos(id_User){
		alertify.confirm('Eliminar un Trabajador', '¿Seguro de eliminar este Trabajador?', function(){ 

			$.ajax({
				type:"POST",
				data:"idUser=" + id_User,
				url:"procesos/eliminarTrabajador.php",
				success:function(r){
					if(r==1){
						alertify.error("No se pudo eliminar...");
					}else{
						$('#iddatatable').load('tablas/tablaTrabajadores.php');
						alertify.success("Eliminado con exito !");
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
		$('#iddatatable').load('tablas/tablaTrabajadores.php');
	});
</script>

