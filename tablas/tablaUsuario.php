<?php
session_start();
require_once "../php/conexion.php";
                            
                            $sql="SELECT *
                            from usuarios";
                            
                            $result=mysqli_query($conexion,$sql);

?>

	<table class="table table-hover text-center table-striped  table-hover" id="iddatable">
             <thead>
					<tr>
						
						<th class="text-center">Nombre</th>
						<th class="text-center">Apellido</th>
						<th class="text-center">Correo</th>
						<th class="text-center">Contraseña</th>
						<th class="text-center">Nivel</th>
						<?php
                        if($_SESSION['nivel']==3){
                        ?>
						<th class="text-center">Editar</th>
						<th class="text-center">Eliminar</th>
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
					<td><?php echo "****" ?></td>
                    <?php if ($mostrar[5]==1) {
                        $niv = "ABOGADO";
                    }elseif ($mostrar[5]==2) {
                        $niv = "ADMINISTRADOR";
                    }else {
                        $niv = "TECNICO";
                    }?>
					<td><?php echo $niv ?></td>
                    <?php
                        if($_SESSION['nivel']==3){
                    ?>
                    <td><a href="#!" class="btn btn-success btn-raised" data-toggle="modal" data-target="#modalEditar" onclick="obtenUsuario('<?php echo $mostrar[0] ?>')"><i class="fa fa-edit"></i></a></td>
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