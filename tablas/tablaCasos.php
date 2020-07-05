<?php
session_start();
require_once "../php/conexion.php";
							
						if ($_SESSION['nivel'] == 1) {
							$sql="SELECT *
                            from casos where responsable = '".$_SESSION["usuario"]."' ";
						}else {
							$sql="SELECT *
                            from casos ";
						}
                            
                            
                            $result=mysqli_query($conexion,$sql);

?>

	<table class="table table-hover text-center" id="iddatable">
             <thead>
					<tr>
						
						<th class="text-center">Titulo</th>
						<th class="text-center">Descripción</th>
						<th class="text-center">Materia</th>
						<th class="text-center">Fecha</th>
						<th class="text-center">Cliente/s</th>
						<?php
                        if($_SESSION['nivel']==3){
                        ?>
						<th class="text-center">Responsable</th>
						<?php } ?>
						<th class="text-center">Estado</th>
						
						<th class="text-center">Ver Documentos</th>
						<?php
                        if($_SESSION['nivel']==3 || $_SESSION['nivel']==1){
                        ?>
						<th class="text-center">Editar</th>
						<?php } ?>
						<?php
                        if($_SESSION['nivel']==3){
                        ?>
						<th class="text-center">Editar</th>
						<th class="text-center">Eliminar</th>
						<?php } ?>
						<?php
                        if($_SESSION['nivel']==1){
                        ?>
						<th class="text-center">Añadir Docs</th>
						<?php } ?>
					</tr>
			</thead>
			
		<tbody>
        <?php 
			while ($mostrar=mysqli_fetch_row($result)) {
				?>
				<tr>
					<td><?php echo $mostrar[1] ?></td>
					<td><?php echo $mostrar[2] ?></td>
					<td><?php echo $mostrar[3] ?></td>
					<td><?php echo $mostrar[4] ?></td>
					<td><?php echo $mostrar[5] ?></td>
					<?php
                        if($_SESSION['nivel']==3){
                        ?>
					<td><?php echo $mostrar[6] ?></td>
						<?php } ?>
					<td><small class="label pull-right bg-warning"><?php echo $mostrar[7] ?></small></td>
                    <td><a href="#!" class="btn btn-primary btn-raised view_data" onclick="docsModal('<?php echo $mostrar[1]; ?>','<?php echo $mostrar[6]; ?>')" ><i class="fa fa-eye"></i></a></td>
					<?php
                     if($_SESSION['nivel']==3 || $_SESSION['nivel']==1){
                    ?>
					<td><a href="#!" class="btn btn-success btn-raised" data-toggle="modal" data-target="#modalEditar" onclick="obtenCaso('<?php echo $mostrar[0] ?>')"><i class="fa fa-edit"></i></a></td>
					<?php } ?>
					<?php
                     if($_SESSION['nivel']==3){
                    ?>
					<td><a href="#!" class="btn btn-danger btn-raised " onclick="eliminarDatos('<?php echo $mostrar[0] ?>')"><i class="fa fa-trash"></i></a></td>
					<?php } ?>
						<?php
                        if($_SESSION['nivel']==1){
                        ?>
						<td><a href="#!" class="btn btn-warning btn-raised" data-toggle="modal" data-target="#modalAñadeDocs" onclick="añadeDocs('<?php echo $mostrar[1] ?>')" ><i class="fa fa-plus"></i></a></td>
						<?php } ?>
				</tr>
				<?php 
			}
			?>
  
		</tbody>
	</table>

<script>
  $(function () {
    $('#iddatable').DataTable({
        "paging": true,
        "lengthChange": true,
        "searching": true,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
        language: {
                "lengthMenu": "Mostrar _MENU_ registros",
                "zeroRecords": "No se encontraron resultados",
                "info": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                "infoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
                "infoFiltered": "(filtrado de un total de _MAX_ registros)",
                "sSearch": "Buscar:",
                "oPaginate": {
                    "sFirst": "Primero",
                    "sLast":"Último",
                    "sNext":"Siguiente",
                    "sPrevious": "Anterior"
			     },
			     "sProcessing":"Procesando...",
            },
    });
  });
</script>