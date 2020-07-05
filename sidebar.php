<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-primary-light elevation-4">
    <!-- Brand Logo -->
    <a href="main.php" class="brand-link bg-primary">
      <img src="img/F&AlogoRed.png" alt="F&Admin Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">F&Admin</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="img/perfil.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="main.php" class="d-inline"><?php echo $_SESSION['usuario']; ?> </a>
          
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        <?php if($_SESSION['nivel'] == 3){ ?>
          <li class="nav-item has-treeview ">
            <a href="#" class="nav-link ">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Administración
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="usuarios.php" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Usuarios</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="trabajadores.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Registro de personal</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="periodos.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Periodos</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview ">
            <a href="#" class="nav-link ">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Actividades
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="c_asistencia.php" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Control de Asistencia</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="verAsistencias.php" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ver Asistencias</p>
                </a>
                </li>
            </ul>
          </li>
          <li class="nav-item has-treeview ">
            <a href="#" class="nav-link ">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Gestión de Casos
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview ">
              <li class="nav-item">
                <a href="casos.php" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Casos</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="clientes.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Clientes</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
                <a href="compartir.php" class="nav-link ">
                  <i class="nav-icon far fa-plus-square"></i>
                  <p>Recursos Compartidos</p>
                </a>
              </li>
          
          <li class="nav-item">
                <a href="php/cerrarSesion.php" class="nav-link active">
                  <i class="nav-icon far fa-circle text-danger "></i>
                  <p>Cerrar sesión</p>
                </a>
          </li>
          <?php } ?>
          <?php if($_SESSION['nivel'] == 2){ ?>
            <li class="nav-item has-treeview ">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Administración
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              
              <li class="nav-item">
                <a href="trabajadores.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Registro de personal</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="periodos.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Periodos</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview ">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Actividades
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="c_asistencia.php" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Control de Asistencia</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="verAsistencias.php" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ver Asistencias</p>
                </a>
                </li>
            </ul>
          </li>  
          <li class="nav-item">
                <a href="compartir.php" class="nav-link">
                  <i class="nav-icon far fa-plus-square"></i>
                  <p>Recursos Compartidos</p>
                </a>
              </li>
          <li class="nav-item">
                <a href="php/cerrarSesion.php" class="nav-link active">
                  <i class="nav-icon far fa-circle text-danger "></i>
                  <p>Cerrar sesión</p>
                </a>
          </li>
          <?php } ?>
          <?php if($_SESSION['nivel'] == 1){ ?>
            <li class="nav-item has-treeview ">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Gestión de Casos
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview ">
              <li class="nav-item">
                <a href="casos.php" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Casos</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="clientes.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Clientes</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
                <a href="compartir.php" class="nav-link">
                  <i class="nav-icon far fa-plus-square"></i>
                  <p>Recursos Compartidos</p>
                </a>
              </li>
          
          <li class="nav-item">
                <a href="php/cerrarSesion.php" class="nav-link active">
                  <i class="nav-icon far fa-circle text-danger "></i>
                  <p>Cerrar sesión</p>
                </a>
          </li>
          <?php } ?>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>