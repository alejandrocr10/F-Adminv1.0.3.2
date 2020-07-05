<?php

require_once "../php/conexion.php";
                            
                            $sql="SELECT E.Nombre,E.Apellido,E.Cedula,A.Fecha,A.Asistencia,A.causa,A.periodo
                            FROM empleados E
                            JOIN asistencia A
                            ON E.cedula = A.cedula";
                            
                            $result=mysqli_query($conexion,$sql);

?>

	<table class="table table-hover text-center" id="iddatable">
             <thead>
					<tr>
						
						<th class="text-center">Nombre</th>
						<th class="text-center">Periodo</th>
						<th class="text-center">Fecha</th>
						<th class="text-center">Asistencia</th>
						<th class="text-center">Nota</th>
					</tr>
			</thead>
			
		<tbody>
        <?php 
			while ($mostrar=mysqli_fetch_row($result)) {
				?>
				<tr >
					
        <?php if ($mostrar[4] == 1) {
          $asistencia = "SI";
        }else {
          $asistencia = "NO";
        } ?>
					
					<td><?php echo $mostrar[0]." ".$mostrar[1]; ?></td>
					<td><?php echo $mostrar[6]; ?></td>
					<td><?php echo $mostrar[3]; ?></td>
					<td><?php echo $asistencia ?></td>
					<td><?php echo $mostrar[5] ?></td>
					
          
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
        "lengthChange": false,
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
            dom:'Bfrtilp',
			    buttons:[
				{
					extend: 'excelHtml5',
					text: '<i class="fas fa-file-excel"></i>',
					titleAttr: 'Exportar a Excel',
					className: 'btn btn-success'
				},
				{
					extend: 'pdfHtml5',
					text: '<i class="fas fa-file-pdf"></i>',
					titleAttr: 'Exportar a PDF',
					className: 'btn btn-danger'
				},
				{
					extend: 'print',
					text: '<i class="fa fa-print"></i>',
					titleAttr: 'Imprimir',
					className: 'btn btn-info'
				},
			]
    });
  });
</script>