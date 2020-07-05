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

  <title>F&Admin | Casos</title>

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
            <h1 class="m-0 text-dark">ADM | Casos</h1>
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

                     <form action="procesos/registrarCaso.php" id="frm" method="POST" enctype="multipart/form-data">
                     <div class="form-row">
                            <div class="form-group col-md-5">
                            <label for="inputEmail4">Titulo</label>
                            <input type="text" class="form-control"  name="titulo" placeholder="titulo"  required>
                            </div>
                            <div class="form-group col-md-7">
                            <label for="inputPassword4">Descripción</label>
                            <input type="text" class="form-control"  name="descripcion" placeholder="descripcion" required>
                            </div>   
                     </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                            <label for="inputState">Materia</label>
                            <select id="inputState" name="materia" class="form-control" required>
                                <option value="">Elegir...</option>
                                <option value="Laboral">Laboral</option>
                                <option value="Mercantil">Mercantil</option>
                                <option value="Civil">Civil</option>
                            </select>
                            </div>
                            <div class="form-group col-md-3">
                            <label for="inputPassword4">Fecha </label>
                            <input type="date" class="form-control"  name="fecha" placeholder="fecha" required>
                            </div>
                           
                        </div>
                        <h1 class="lead">Clientes involucrados</h1>
                        <hr>
                        <!--CLIENTES-->
                        <div class="form-row">
                            <table class="container" id="dynamic_field">
                            <div class="form-group col-md-2">
                            <input type="number" hidden="" id="existe" name="existe">
                            <label>Nombre</label>
                            <input type="text" class="form-control" id="nombre_ag" name="nombre[]" placeholder="Nombre" required>
                            </div>
                            <div class="form-group col-md-2">
                            <label>Apellido</label>
                            <input type="text" class="form-control" id="apellido_ag" name="apellido[]" placeholder="Apellido" required required>
                            </div>
                            <div class="form-group col-md-2">
                            <label>Cedula</label>
                            <input type="text" class="form-control" id="ci_ag" name="ci[]" placeholder="Cedula" required required>
                            </div>
                            <div class="form-group col-md-2">
                            <label>Rif</label>
                            <input type="text" class="form-control" id="rif_ag"  name="rif[]" placeholder="rif" required required>
                            </div>
                            <div class="form-group col-md-2">
                            <label>Telefono</label>
                            <input type="text" class="form-control" id="tlf_ag" name="tlf[]" placeholder="Telefono" required required>
                            </div> 
                            <div class="form-group col-md-1">
                            <label for="">Añadir</label><div></div>
                              <button type="button" name="add"  id="add" class="btn btn-success"><i class="fa fa-plus-circle"></i></button>
                            </div>
                            <div class="form-group col-md-1">
                            <label for="">Agenda</label><div></div>
                              <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modalAgenda"><i class="fa fa-book"></i></button>
                            </div> 
                            </table> 
                     </div>
                     
                     <h1 class="lead">Documentos</h1>
                     <hr>
                     <!--DOCUMENTOS-->
                     <div class="form-row">
                            <table class="container" id="dynamic_docs">
                            <div class="form-group col-md-3">
                            <label>Titulo</label>
                            <input type="text" class="form-control" size="" maxlength="" name="titulo_doc[]" placeholder="titulo" required>
                            </div>
                            <div class="form-group col-md-3">
                            <label>Descripción</label>
                            <input type="text" class="form-control"  name="descripcion_doc[]" placeholder="Descripción" required>
                            </div>
                            <div class="form-group col-md-3">
                            <label for="exampleInputFile">Documento</label>
                            <div class="input-group">
                              <div class="custom-file">
                                <input type="file" class="custom-file-input" name="docs[]" required>
                                <label class="custom-file-label" for="exampleInputFile">...</label>
                              </div>
                            </div>
                          </div>
                            <div class="form-group col-md-2">
                            <label for="">Añadir</label><div></div>
                              <button type="button" name="add"  id="add_doc" class="btn btn-success"><i class="fa fa-plus-circle"></i></button>
                            </div> 
                            </table> 
                     </div>
                     <br>
                        <button type="submit" id="" class="btn btn-primary">Registrar</button>
                        </form>
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
  
<!-- Modal EDITAR -->
<div class="modal fade" id="modalEditar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="modalEditar">Actualizar caso</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form id="frmActualizar" method="post">
						<input type="text" hidden="" id="id_cas" name="id_cas">
						<label>Descripción</label>
						<input type="text" class="form-control input-sm" id="descripcion" name="descripcion" style="font-size:18px;">
            <label>Cliente/s</label>
						<input type="text" class="form-control input-sm" id="cliente" name="cliente" style="font-size:18px;">
						<div class="row">
                            <div class="col-md-4">
                            <label for="inputState">Marteria</label>
                            <select id="materia" name="materia" class="form-control">
                                <option selected>Elegir...</option>
                                <option value ="Laboral">Laboral</option>
                                <option value ="Mercantil">Mercantil</option>
                                <option value ="Civil">Civil</option>
                              </select>
                            </div>
                            <div class="col-md-4">
                            <label for="inputState">Estado</label>
                            <select id="estado" name="estado" class="form-control">
                                <option selected>Elegir...</option>
                                <option value ="RECIBIDO">RECIBIDO</option>
                                <option value ="EN PROCESO">EN PROCESO</option>
                                <option value ="FINALIZADO">FINALIZADO</option>
                       </select>
                            </div>
                    </div>
            
						
						<!--Seccion-->
						
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
					<button type="button" class="btn btn-info" id="btnActualizar" style="color:white;">Actualizar</button>
				</div>
					</form>
			</div>
		</div>
	</div>
  <!-- Modal fin -->

  <!-- Modal Agenda -->
<div class="modal fade" id="modalAgenda" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="modalEditar">Clientes</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					
						<!-- DATATABLES -->
            <div class="container">
                      <div class="row">
                        <div class="col-12">
                          
                          <div id="iddatatable_agenda"></div>
                        
                        </div>
                      </div>
                    </div>
                    <!-- DATATABLES END -->
						
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
					
				</div>
					
			</div>
		</div>
	</div>
  <!-- Modal fin -->

  <!-- Modal AñadeDocs -->
<div class="modal fade" id="modalAñadeDocs" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="modalEditar">Añade Documentos al Caso</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					
						<form action="procesos/añadeDocs.php" id="frm_añadeDoc" method="post" enctype="multipart/form-data">
              <div class="form-group">
                  <input type="text" hidden="" id="añade_doc" name="añade_doc">
                    <label for="exampleInputEmail1">Titulo</label>
                    <input type="text" class="form-control" name="titulo" placeholder="Titulo" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Descripción</label>
                    <input type="text" class="form-control" name="descripcion" placeholder="Descripcion" required>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputFile">Documento</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" name="doc" required>
                        <label class="custom-file-label" for="exampleInputFile">...</label>
                      </div>
                    </div>
                  </div>
            
						
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
					<button type="submit" class="btn btn-primary">Registrar</button>
				</div>
        </form>
			</div>
		</div>
	</div>
  <!-- Modal fin -->

<!-- NEW MODAL -->
<div id="dataModal" class="modal fade">  
      <div class="modal-dialog modal-lg">  
           <div class="modal-content">  
                <div class="modal-header">  
                     <h4 class="modal-title">Documentos del Caso</h4>  
                     <button type="button" class="close" data-dismiss="modal">&times;</button>  
                </div>  
                <div class="modal-body" id="ver_docs">  
                <!--AQUI CARGA LA TABLA DE LOS DOCUMENTOS-->
                </div>  
                <div class="modal-footer">  
                     <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>  
                </div>  
           </div>  
      </div>  
 </div>
<!-- MODAL END -->

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

<!--TENGO QUE ARREGLAR ERROR DE AÑADIR FORMULARIOS-->

<script>

$(document).ready(function(){
    var i = 1;

    $('#add').click(function () {
        if (i <= 3) {
        i++;
        function sumar_id() {
          return i;
        }
        //CON ESTO LE SUMO ALTERO EL ID EN EL AJAX QUE ME PONE LOS DATOS EN  EL FORM

        $('#dynamic_field').append('<tr id="row'+i+'">' +
                                    '<td><input type="text" class="form-control" id="nombre_ag'+i+'" name="nombre[]" placeholder="Nombre" /></td>' +
                                    '<td><input type="text" class="form-control" id="apellido_ag'+i+'" name="apellido[]" placeholder="Apellido" /></td>' +
                                    '<td><input type="text" class="form-control" id="ci_ag'+i+'" name="ci[]" placeholder="Cedula" /></td>' +
                                    '<td><input type="text" class="form-control" id="rif_ag'+i+'" name="rif[]" placeholder="Rif" /></td>' +
                                    '<td><input type="text" class="form-control" id="tlf_ag'+i+'" name="tlf[]" placeholder="Telefono" /></td>' +
                                    '<td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove"><i class="fa fa-trash"></i></button></td>' + '<td><button type="button" class="btn btn-info" data-toggle="modal" data-target="#modalAgenda"><i class="fa fa-book"></i></button></td>' +
                                    '<br><br><hr></tr>');
                                  }
    });
  
    $(document).on('click', '.btn_remove', function () {
       var id = $(this).attr('id');
       $('#row'+ id).remove();
       i--;
    });

  });
</script>

<script type="text/javascript">

$(document).ready(function(){

        var x = 1;
    $('#add_doc').click(function () {
        if (x <= 3) {
        x++;
        $('#dynamic_docs').append('<tr id="row_doc'+x+'">' +
                                    '<td><input type="text" class="form-control" name="titulo_doc[]" placeholder="Titulo"/></td>' +
                                    '<td><input type="text" class="form-control" name="descripcion_doc[]" placeholder="descripcion"/></td>' +
                                    '<td><input type="file" name="docs[]" /></td>' +
                                    '<td><button type="button" name="remove" id_doc="'+x+'" class="btn btn-danger btn_remove"><i class="fa fa-trash"></i></button></td>' + 
                                    '<br><br><hr></tr>');
          
                                  }
    });
  
    $(document).on('click', '.btn_remove', function () {
       var id_doc = $(this).attr('id_doc');
       $('#row_doc'+ id_doc).remove();
       x--;
    });

  });
</script> 

<script type="text/javascript">
	$(document).ready(function(){
		$('#iddatatable').load('tablas/tablaCasos.php');
	});
</script>

<script type="text/javascript">
	$(document).ready(function(){
		$('#iddatatable_agenda').load('tablas/tablaAgenda.php');
	});
</script>

<script>  
 function docsModal(n_carpeta,n_responsable){
  var carpeta = n_carpeta;  
  var responsable = n_responsable;  
           $.ajax({  
                url:"tablas/tablaDocs.php",  
                method:"post",  
                data:{carpeta:carpeta,responsable:responsable},  
                success:function(data){  
                     $('#ver_docs').html(data);  
                     $('#dataModal').modal("show");  
                }  
           });
	}
 </script>

<script type="text/javascript">

function obtenCaso(id){
  
    $.ajax({
			type:"POST",
			data:"id_caso=" + id,
			url:"procesos/obtenCaso.php",
			success:function(r){
				datos=jQuery.parseJSON(r);
				    
				    $('#id_cas').val(datos['id_cas']);
				    $('#descripcion').val(datos['descripcion']);
				    $('#materia').val(datos['materia']);
				    $('#cliente').val(datos['cliente']);
				    $('#estado').val(datos['estado']);
			}
		});
	}

function agenda(id,existe){
    
    $('#existe').val(existe);
		
    $.ajax({
			type:"POST",
			data:"id_ag=" + id,
			url:"procesos/obtenagenda.php",
			success:function(r){
				datos=jQuery.parseJSON(r);
				    
				    $('#nombre_ag').val(datos['nombre_ag']);
				    $('#apellido_ag').val(datos['apellido_ag']);
				    $('#ci_ag').val(datos['ci_ag']);
				    $('#rif_ag').val(datos['rif_ag']);
				    $('#tlf_ag').val(datos['tlf_ag']);
			}
		});
	}

  function añadeDocs(id){
    $('#añade_doc').val(id);
	}

  </script>

  <script>
  function eliminarDatos(id){
		alertify.confirm('Eliminar un Caso', '¿Si elimina este caso perdera los documentos guardados.?', function(){ 

			$.ajax({
				type:"POST",
				data:"idCaso=" + id,
				url:"procesos/eliminarCaso.php",
				success:function(r){
					if(r==1){
						alertify.error("No se pudo eliminar...");
					}else{
						$('#iddatatable').load('tablas/tablaCasos.php');
						alertify.success("Eliminado con exito !");
					}
				}
			});

		}
		, function(){

		});
	}
  </script>

<script>

$(document).ready(function(){
		$('#btnActualizar').click(function(){
			datos=$('#frmActualizar').serialize();

			$.ajax({
				type:"POST",
				data:datos,
				url:"procesos/actualizarCaso.php",
				success:function(r){
					if(r==1){
            $('#iddatatable').load('tablas/tablaCasos.php');
						alertify.success("Actualizado con exito :D");
          }else{
            alertify.error("Fallo al Actualizar :(");
            	
					}
				}
			});
		});
	});

</script>