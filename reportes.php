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

  <title>F&Admin | Reportes</title>

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
            <h1 class="m-0 text-dark">ADM | Reportes</h1>
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
        <div class="card card-primary card-outline">
          <div class="card-header">
            <h3 class="card-title">
              <i class="fas fa-file"></i>
               AREA DE REPORTES
            </h3>
          </div>
          <div class="card-body">
            <h4>Generar reporte de:</h4>
            <div class="row">
              <div class="col-5 col-sm-3 cc_cursor">
                <div class="nav flex-column nav-tabs h-100" id="vert-tabs-tab" role="tablist" aria-orientation="vertical">
                  <a class="nav-link active" id="vert-tabs-home-tab" data-toggle="pill" href="#vert-tabs-home" role="tab" aria-controls="vert-tabs-home" aria-selected="false">Recursos Humanos</a>
                  <a class="nav-link " id="vert-tabs-profile-tab" data-toggle="pill" href="#vert-tabs-profile" role="tab" aria-controls="vert-tabs-profile" aria-selected="true">General de Asistencias</a>
                  <a class="nav-link" id="vert-tabs-messages-tab" data-toggle="pill" href="#vert-tabs-messages" role="tab" aria-controls="vert-tabs-messages" aria-selected="false">Asistencias Individuales</a>
                  
                </div>
              </div>
              <div class="col-7 col-sm-9">
                <div class="tab-content" id="vert-tabs-tabContent">
                  <div class="tab-pane text-left fade active show" id="vert-tabs-home" role="tabpanel" aria-labelledby="vert-tabs-home-tab">
                     <!-- FORM -->

                     <form action="PDF/reporteRecursos.php" id="frm" method="POST" target="print_popup" onsubmit="window.open('about:blank','print_popup',width=100,height=100);">
                     <div class="form-row">
            
              <div class="form-group col-4 col-md-7">
                  <!--SELECT PERIODO-->
                  <div id="selectlista#"></div>
              </div>
                  <div class="form-group col-4 col-md-4">
                        <!--SELECT PERIODO-->
                          <div id="selectlista2#"></div>
                         
                  </div>    
              </div>
              <div class="text-center">
                        <button type="submit" class="btn btn-info text-white">Generar</button>
                        </div>
                        
                        </form>
                    <!-- FORM END --> 
                  </div>
                  <div class="tab-pane fade " id="vert-tabs-profile" role="tabpanel" aria-labelledby="vert-tabs-profile-tab">
                    <!-- FORM -->

                    <form action="PDF/reporteGeneral.php" id="frm" method="POST" target="print_popup" onsubmit="window.open('about:blank','print_popup',width=100,height=100);">
                     <div class="form-row">
            
              <div class="form-group col-4 col-md-7">
                  <!--SELECT PERIODO-->
                  <div id="selectlistaP"></div>
              </div>
                  <div class="form-group col-4 col-md-4">
                        <!--SELECT PERIODO-->
                          <div id="selectlista2#"></div>
                         
                  </div>    
              </div>
              <div class="text-center">
                        <button type="submit" class="btn btn-info text-white">Generar</button>
                        </div>
                        
                        </form>
                    <!-- FORM END -->   
                  </div>
                  <div class="tab-pane fade" id="vert-tabs-messages" role="tabpanel" aria-labelledby="vert-tabs-messages-tab">
                     <!-- FORM -->

                     <form action="PDF/reporteAsisInd.php" id="frm" method="POST" target="print_popup" onsubmit="window.open('about:blank','print_popup',width=100,height=100);">
                     <div class="form-row">
            
              <div class="form-group col-6 col-md-7">
                  <!--SELECT PERIODO-->
                  <div id="selectlista"></div>
              </div>
                  <div class="form-group col-6 col-md-4">
                        <!--SELECT PERIODO-->
                          <div id="selectlista2"></div>
                         
                  </div>    
              </div>
              <div class="text-center">
                        <button type="submit" class="btn btn-info text-white">Generar</button>
                        </div>
                        
                        </form>
                    <!-- FORM END --> 
                  </div>
                  
                </div>
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
		$('#selectlista').load('tablas/selectEmpleados.php');
	});
</script>

<script type="text/javascript">
	$(document).ready(function(){
		$('#selectlista2').load('tablas/selectPeriodos.php');
	});
</script>

<script type="text/javascript">
	$(document).ready(function(){
		$('#selectlistaP').load('tablas/selectPeriodos.php');
	});
</script>



