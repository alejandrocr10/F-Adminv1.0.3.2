<?php

require_once "../php/conexion.php";
                            
							$sql="SELECT *
							FROM empleados ";
                            
                            $result=mysqli_query($conexion,$sql);

?>

	<table class="table table-hover  table-striped text-center  table-hover" id="iddatable">
             <thead>
					<tr>
						
						<th class="text-center">Nombre</th>
						<th class="text-center">Cedula</th>
						<th class="text-center">Cargo</th>
						<th class="text-center">Asistencias</th>
						
					</tr>
			</thead>
			
		<tbody>
        <?php 
			while ($mostrar=mysqli_fetch_array($result)) {
				?>
				<tr >

					<td><?php echo $mostrar['nombre']." ".$mostrar['apellido']; ?></td>
					<td><?php echo $mostrar['cedula']; ?></td>
					<td><?php echo $mostrar['cargo']; ?></td>
					<td><a href="#!" class="btn btn-warning btn-raised" onclick="verAsistencias('<?php echo $mostrar['cedula'] ?>')"><i class="fa fa-eye"></i></a></td>
					
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