<?php
require '../php/conexion.php';


	$sql="SELECT * from empleados";

	$result=mysqli_query($conexion,$sql);

	$cadena="<label>Empleado</label> 
            <select class='form-control input-sm' id='empleado' name='empleado' >
            <option selected=''>...</option>";

	while ($ver=mysqli_fetch_row($result)) {
		$cadena=$cadena.'<option value="'.$ver[1].'">'.utf8_encode($ver[2]).' '.utf8_encode($ver[3]).'</option>';
	}

	echo  $cadena."</select>";
?>