<?php session_start();  ?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>F&Admin | LOGIN</title>

   <!-- Font Awesome -->
   <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <link rel="icon" href="img/F&Alogo2.png" type="image/x-icon">
  <!-- alertify -->
  <link rel="stylesheet" type="text/css" href="plugins/alertify/css/alertify.css">
  <link rel="stylesheet" type="text/css" href="plugins/alertify/css/themes/bootstrap.css">

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  
    <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

<style>
.bg-login-image {
    background-image:url(img/abg_uno.jpg);
    background-position: center;
    background-size: cover;
}
.footer {
  position: fixed;
  left: 0;
  bottom: 0;
  width: 100%;
  color: white;
  text-align: center;
}
</style>

</head>

<body class="bg-gradient-light pt-5">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-6 d-none d-lg-block bg-login-image">
                <div class="carousel-caption">
                <h1 class="display-4" style="background-color:#0000001a;"> <b>Bienvenido!</b> Figueroa & Asociados.</h1>
                </div>
            
              </div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <img src="./img/F&Alogo.png" class="img-responsive" alt="" width = "50%";>
                    <hr>
                  </div>
                  <form action="./php/validarLogin.php" method="post" class="user">
                    <div class="input-group mb-3">
                      <input type="email" class="form-control form-control-user" id="exampleInputEmail" name="correo"  placeholder="Ingrese su correo..." required>
                      <div class="input-group-append">
                      <div class="input-group-text">
                        <span class="fas fa-envelope"></span>
                      </div>
                    </div>
                    </div>
                    <div class="input-group mb-3">
                      <input type="password" class="form-control form-control-user" id="exampleInputPassword" name="passw" placeholder="Contraseña" required>
                      <div class="input-group-append">
                      <div class="input-group-text">
                        <span class="fas fa-lock"></span>
                      </div>
                    </div>
                    </div>
                    <div class="input-group mb-3">
                        <select id="" name="nivel" class="form-control" required>
                            <option selected>Entrar como...</option>
                            <option value ="1">Abogado</option>
                            <option value ="2">Administrador</option>
                            <option value ="3">Técnico</option>
                        </select>
                    </div>
                    <input type="submit" value="Entrar" class="btn btn-primary  btn-block"></input>
                  </form>
                  
                  
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

<!-- Main Footer -->
<footer class="footer badge badge-dark">
    <!-- Default to the left -->
    <div class="text-center">
        <strong>Copyright &copy; 2020 F&Admin.</strong> Todos los Derechos Reservados.
    </div>
  </footer>

  <!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/alertify/alertify.js"></script>
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>

</body>

</html>

<?php if(isset($_SESSION['invalido'])) : ?>

<script> alertify.error('Correo o Contraseña Invalidos');</script>

<?php session_destroy(); endif;?>