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

  <title>F&Admin | Control de Asistencias</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <link rel="icon" href="img/F&Alogo2.png" type="image/x-icon">
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
            <h1 class="m-0 text-dark">ACT | Asistencia</h1>
          </div><!-- /.col -->
         
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="card card-dark card-outline card-tabs">
              <div class="card-header p-0 pt-1 border-bottom-0">
                <ul class="nav nav-tabs" id="custom-tabs-three-tab" role="tablist">
                  
                  <li class="nav-item">
                    <a class="nav-link active" id="custom-tabs-three-profile-tab" data-toggle="pill" href="#custom-tabs-three-profile" role="tab" aria-controls="custom-tabs-three-profile" aria-selected="false"><i class="nav-icon fas fa-edit"></i> Control</a>
                  </li>
                 
                </ul>
              </div>
              <div class="card-body">
                <div class="tab-content" id="custom-tabs-three-tabContent">
                  <div class="tab-pane fade " id="custom-tabs-three-home" role="tabpanel" aria-labelledby="custom-tabs-three-home-tab">
                     
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

  <!-- Modal asistencia -->
	<div class="modal fade" id="modalAsistencia" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered modal-md" role="document">
			<div class="modal-content">
				<div class="modal-header bg-dark">
					<h5 class="modal-title" id="exampleModalLabel">Compruebe Asistencia</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form id="frmAsistencia" >
          <input type="text" hidden="" id="iduser" name="id_user">
						
            <div class="form-row">
            <div class="form-group col-4 col-md-12">
                <label>Cedula</label>
						    <input type="text" class="form-control input-sm" id="ci" name="ci" readonly style="font-size:18px;">
              </div>
              <div class="form-group col-4 col-md-7">
                  <label>Fecha</label>
						      <input type="date" class="form-control input-sm" id="fecha" name="fecha" style="font-size:18px;">
              </div>
                  <div class="form-group col-4 col-md-4">
                        <!--SELECT PERIODO-->
                          <div id="selectlista"></div>
                         
                  </div>    
              </div>

            <div class="form-row">
            <div class="form-group col-6 col-md-8">
                        <label for="inputState">Asistencia</label>
                        <select id="inputState" name="asistencia" class="form-control">
                          <option selected="">Elegir...</option>
                          <option value="1">SI</option>
                          <option value="0">NO</option>
                         </select>
                  </div>
                  <div class="form-group col-6 col-md-4">
                        <label for="inputState">Causa</label>
                        <select id="inputState" name="causa" class="form-control">
                          <option selected="">*</option>
                          <option >LIBRE</option>
                          <option >PERMISO</option>
                          <option >ENFERMEDAD</option>
                          <option >EMERGENCIA FAMILIAR</option>
                          <option >OTROS</option>
                         </select>
                  </div>
              </div>         
					</form>
				</div>
				<div class="modal-footer bg-dark">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
					<button type="button" class="btn btn-primary" id="btnRegistrar" style="color:white;">Aceptar</button>
				</div>
			</div>
		</div>
	</div>
  <!-- Modal editar -->

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
<!-- SweetAlert2 -->
<script src="plugins/sweetalert2/sweetalert2.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
</body>
</html>

<script type="text/javascript">
	$(document).ready(function(){
		$('#btnRegistrar').click(function(){
			datos=$('#frmAsistencia').serialize();

			$.ajax({
				type:"POST",
				data:datos,
				url:"procesos/registrarAsistencia.php",
				success:function(r){
					if(r==1){
            alertify.error("Fallo al Registrar :(");
					}else{
						alertify.success("Registrado con exito :D");
					}
				}
			});
		});
	});
</script>

<script type="text/javascript">

function agregarAsistencia(id){
		$.ajax({
			type:"POST",
			data:"id_user=" + id,
			url:"procesos/obtenAsistencia.php",
			success:function(r){
				datos=jQuery.parseJSON(r);
				$('#iduser').val(datos['id_user']);
				$('#ci').val(datos['cedula']);
			}
		});
	}

</script>

<script type="text/javascript">
	$(document).ready(function(){
		$('#iddatatable').load('tablas/tablaAsistencia.php');
	});
</script>
<script type="text/javascript">
	$(document).ready(function(){
		$('#selectlista').load('tablas/selectPeriodos.php');
	});
</script>

