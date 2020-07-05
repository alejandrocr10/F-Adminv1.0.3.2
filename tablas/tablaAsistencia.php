<?php

require_once "../php/conexion.php";
                            
                            $sql="SELECT *
                            from empleados";
                            
                            $result=mysqli_query($conexion,$sql);

?>

	<table class="table table-hover text-center" id="iddatable">
             <thead>
					<tr>
						<th class="text-center">Nombre</th>
						<th class="text-center">Cédula</th>
						<th class="text-center">Comprueba Asistencia</th>
					</tr>
			</thead>
			
		<tbody>
        <?php 
			while ($mostrar=mysqli_fetch_row($result)) {
				?>
				<tr >
					<td><?php echo $mostrar[2]." ".$mostrar[3] ?></td>
					<td><?php echo $mostrar[1] ?></td>
					<td><a href="#!" class="btn btn-success btn-raised" data-toggle="modal" data-target="#modalAsistencia" onclick="agregarAsistencia('<?php echo $mostrar[0] ?>')"><i class="fa fa-check"></i></a></td>
          
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