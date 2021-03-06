<?php
session_start();
require_once "../php/conexion.php";
                            
                            $sql="SELECT *
                            from clientes";
                            
                            $result=mysqli_query($conexion,$sql);

?>

	<table class="table table-hover text-center table-striped  table-hover" id="iddatable_ag">
             <thead>
					<tr>
						
						<th class="text-center">Nombre</th>
						<th class="text-center">Elegir</th>
                        
					</tr>
			</thead>
			
		<tbody>
        <?php 
			while ($mostrar=mysqli_fetch_row($result)) {
				?>
				<tr>
					<td><?php echo $mostrar[1].' '.$mostrar[2] ?></td>
                    <td><a href="#!" class="btn btn-primary btn-raised " onclick="agenda('<?php echo $mostrar[0] ?>','<?php echo 1 ?>')"><i class="fa fa-check"></i></a></td>
                </tr>
				<?php 
			}
			?>
  
		</tbody>
	</table>

<script>
  $(function () {
    $('#iddatable_ag').DataTable({
      "rowReorder": true,
        "scrollY": 300,
        "paging": false,
        "lengthChange": false,
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