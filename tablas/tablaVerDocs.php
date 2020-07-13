<?php
session_start();
require_once "../php/conexion.php";
                            
                            $sql="SELECT *
                            from archivos";
                            
                            $result=mysqli_query($conexion,$sql);

?>

	<table class="table table-hover text-center table-striped  table-hover" id="iddatable">
             <thead>
					<tr>
						
						<th class="text-center">Titulo</th>
						<th class="text-center">Descripción</th>
						<th class="text-center">Fecha</th>
						<th class="text-center">Usuario</th>
						
						<th class="text-center">Descargar</th>
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
					<td><?php echo $mostrar[6] ?></td>
                    
                    <td><a href="<?php echo $mostrar[4] ?>" class="btn btn-info" download><i class="fa fa-download"></i></a></td>
                
                </tr>
				<?php 
			}
			?>
  
		</tbody>
	</table>

<script>
  $(function () {
    $('#iddatable').DataTable({
        "rowReorder": true,
        "scrollY": 300,
        "paging": false,
        "lengthChange": true,
        "searching": true,
        "ordering": true,
        "info": false,
        "autoWidth": false,
        "responsive": false,
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