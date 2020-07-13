<?php
require_once "../php/conexion.php";
session_start();
$output = '';
$ci = $_POST['ci'];

$sql="SELECT  * FROM asistencia WHERE cedula='$ci'";


$result = mysqli_query($conexion, $sql);  

?>

	<table class="table table-hover text-center table-striped  table-hover" id="iddatable2">
             <thead>
					<tr>
						
						<th class="text-center">Periodo</th>
						<th class="text-center">Fecha</th>
						<th class="text-center">Asistencia</th>
						<th class="text-center">Nota</th>
						
					</tr>
			</thead>
			
		<tbody>
        <?php 
			while ($mostrar=mysqli_fetch_array($result)) {
        $asis = ($mostrar["asistencia"]==1) ? "SI" : "NO";
				?>
				<tr>
					<td><?php echo $mostrar['periodo'] ?></td>
					<td><?php echo $mostrar['fecha'] ?></td>
					<td><?php echo $asis ?></td>
					<td><?php echo $mostrar['causa'] ?></td>
                    
          </tr>
				<?php 
			}
			?>
  
		</tbody>
	</table>


  <script>
  $(function () {
    $('#iddatable2').DataTable({
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