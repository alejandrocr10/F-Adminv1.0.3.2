<?php session_start();?>
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

  <title>F&Admin | Principal</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <link rel="icon" href="img/F&Alogo2.png" type="image/x-icon">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
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
        <div class="row ">
          <div class="col-sm-6">
            
          </div><!-- /.col -->
          
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">

    <div class="container-fluid pb-3">
      <div class="row">
        <div class="col-12 d-block d-xs-block d-sm-none"><h2 class="">F&Admin | Bievenido!</h2></div>
        <div class="col-12">
        <!--CAROUSEL-->
        <div id="carouselExampleIndicators" class="carousel slide d-none d-xs-none d-sm-block" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="d-block w-100 " src="img/abg_uno.jpg" alt="First slide" width="400px" height="280px">
                <div class="carousel-caption d-none d-md-block">
                <h1 class=""> <b>Bienvenido!</b> Figueroa & Asociados,C.A</h1>
                  <p>...</p>
                  </div>
              </div>
              <div class="carousel-item">
                <img class="d-block w-100 " src="img/abg_dos.jpg" alt="Second slide" width="400px" height="280px">
                <div class="carousel-caption d-none d-md-block">
                <h1 class=""> <b>Bienvenido!</b> Figueroa & Asociados,C.A</h1>
                  <p>...</p>
                </div>
              </div>
              <div class="carousel-item">
                <img class="d-block w-100 " src="img/abg_tres.jpeg" alt="Third slide" width="400px" height="280px">
                <div class="carousel-caption d-none d-md-block">
                <h1 class=""> <b>Bienvenido!</b> Figueroa & Asociados
                  <p>...</p>
                </div>
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        <!--CAROUSELEND-->
        </div>
        
        
      </div>
    </div>
    
      <div class="container-fluid">
         
        

         <!--CARD -->
         <div class="card">
          
          <div class="card-body">
            
          <?php if($_SESSION['nivel'] == 3){ ?>
          
              <!-- Accesos Directos -->
        <div class="row">
          <div class="col-lg-4 col-md-4 col-sm-4 col-12">

            <div class="small-box bg-warning">
              <div class="inner">
                <h4 style="font-size: 20px;">
                  <strong>Registo de Usuarios:   </strong>
                </h4>
                <p>.</p>
              </div>
              <div class="icon">
                <i class="fa fa-users" aria-hidden="true"></i>
              </div>
              <a href="usuarios.php" class="small-box-footer">ir <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-4 col-sm-4 col-12">
            <div class="small-box bg-info">
              <div class="inner">
                <h4 style="font-size: 20px;">
                  <strong>Registro de Personal:</strong>
                </h4>
                <p>.</p>
              </div>
              <div class="icon">
                <i class="fa fa-users" aria-hidden="true"></i>
              </div>
              <a href="trabajadores.php" class="small-box-footer">ir <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-4 col-sm-4 col-12">
            <div class="small-box bg-primary">
              <div class="inner">
                <h4 style="font-size: 20px;">
                  <strong>Control de Asistencias</strong>
                </h4>
                <p>.</p>
              </div>
              <div class="icon">
                <i class="fa fa-users" aria-hidden="true"></i>
              </div>
              <a href="c_asistencia.php" class="small-box-footer">ir <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
        </div>
        <!-- /.row -->

        <div class="row">

          <div class="col-lg-4 col-md-4 col-sm-4 col-12">
            <div class="small-box bg-danger">
              <div class="inner">
                <h4 style="font-size: 20px;">
                  <strong>Gestión de Casos </strong>
                </h4>
                <p>.</p>
              </div>
              <div class="icon">
                <i class="fa fa-list" aria-hidden="true"></i>
              </div>
              <a href="casos.php" class="small-box-footer">ir <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-4 col-sm-4 col-12">
            <div class="small-box bg-success">
              <div class="inner">
                <h4 style="font-size: 20px;">
                  <strong>Recursos Compartidos   </strong>
                </h4>
                <p>.</p>
              </div>
              <div class="icon">
                <i class="fa fa-list" aria-hidden="true"></i>
              </div>
              <a href="compartir.php" class="small-box-footer">ir <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-4 col-sm-4 col-12">
            <div class="small-box bg-dark">
              <div class="inner">
                <h4 style="font-size: 20px;">
                  <strong>En desarrollo</strong>
                </h4>
                <p>Nuevo Modulo</p>
              </div>
              <div class="icon">
                <i class="fa fa-list" aria-hidden="true"></i>
              </div>
              <a href="#" class="small-box-footer">ir <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          </div>
          <!-- /.row -->
          
          </div>
        <!-- Accesos Directos fin -->
          <?php } ?>
        <?php if($_SESSION['nivel'] == 2){ ?>
         <!-- Accesos Directos -->
        <div class="row">

          <div class="col-sm-6 col-xs-12">
            <div class="small-box bg-info">
              <div class="inner">
                <h4 style="font-size: 20px;">
                  <strong>Registro de Personal:</strong>
                </h4>
                <p>.</p>
              </div>
              <div class="icon">
                <i class="fa fa-users" aria-hidden="true"></i>
              </div>
              <a href="trabajadores.php" class="small-box-footer">ir <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <div class="col-sm-6 col-xs-12">
            <div class="small-box bg-primary">
              <div class="inner">
                <h4 style="font-size: 20px;">
                  <strong>Control de Asistencias</strong>
                </h4>
                <p>.</p>
              </div>
              <div class="icon">
                <i class="fa fa-users" aria-hidden="true"></i>
              </div>
              <a href="c_asistencia.php" class="small-box-footer">ir <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
        </div>
        <!-- /.row -->

        <div class="row">

          <div class="col-sm-6 col-xs-12">
            <div class="small-box bg-danger">
              <div class="inner">
                <h4 style="font-size: 20px;">
                  <strong>Ver Asistencias </strong>
                </h4>
                <p>.</p>
              </div>
              <div class="icon">
                <i class="fa fa-list" aria-hidden="true"></i>
              </div>
              <a href="verAsistencias.php" class="small-box-footer">ir <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <div class="col-sm-6 col-xs-12">
            <div class="small-box bg-success">
              <div class="inner">
                <h4 style="font-size: 20px;">
                  <strong>Recursos Compartidos   </strong>
                </h4>
                <p>.</p>
              </div>
              <div class="icon">
                <i class="fa fa-list" aria-hidden="true"></i>
              </div>
              <a href="compartir.php" class="small-box-footer">ir <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>

          
          </div>
          <!-- /.row -->
          
          </div>
        <!-- Accesos Directos fin -->
        <?php } ?>
        
        <?php if($_SESSION['nivel'] == 1){ ?>
          <!-- Accesos Directos -->
        <div class="row">

          <div class="col-lg-4 col-md-4 col-12">
            <div class="small-box bg-danger">
              <div class="inner">
                <h4 style="font-size: 20px;">
                  <strong>Gestión de Casos </strong>
                </h4>
                <p>.</p>
              </div>
              <div class="icon">
                <i class="fa fa-list" aria-hidden="true"></i>
              </div>
              <a href="casos.php" class="small-box-footer">ir <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-4 col-12">
            <div class="small-box bg-primary">
              <div class="inner">
                <h4 style="font-size: 20px;">
                  <strong>Clientes   </strong>
                </h4>
                <p>.</p>
              </div>
              <div class="icon">
                <i class="fa fa-users" aria-hidden="true"></i>
              </div>
              <a href="clientes.php" class="small-box-footer">ir <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-4 col-12">
            <div class="small-box bg-warning">
              <div class="inner">
                <h4 style="font-size: 20px;">
                  <strong>Recursos Compartidos</strong>
                </h4>
                <p>.</p>
              </div>
              <div class="icon">
                <i class="fa fa-list" aria-hidden="true"></i>
              </div>
              <a href="compartir.php" class="small-box-footer">ir <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          </div>
          <!-- /.row -->
          
          </div>
        <!-- Accesos Directos fin -->
        <?php } ?>
        </div>

         <!--CARD END--> 
        
            
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
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
</body>
</html>
