<?php
session_start();
require_once "../php/conexion.php";
                            
                            $sql="SELECT *
                            from archivos_compartidos";
                            
                            $result=mysqli_query($conexion,$sql);

?>

	<table class="table table-hover text-center" id="iddatable">
             <thead>
					<tr>
						
						<th class="text-center">Titulo</th>
						<th class="text-center">Descripción</th>
						<th class="text-center">Fecha</th>
						<th class="text-center">Descargar</th>
                        <?php
                        if($_SESSION['nivel']==3){
                        ?>
						<th class="text-center">eliminar</th>
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
                    <td><a href="<?php echo $mostrar[4] ?>" download class="btn btn-success btn-raised"><i class="fa fa-download"></i></a></td>
					<?php
                    if($_SESSION['nivel']==3){
                    ?>
                    <td><a href="#!" class="btn btn-danger btn-raised " onclick="eliminarDatos('<?php echo $mostrar[0] ?>')"><i class="fa fa-trash"></i></a></td>
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