<?php
require '../php/conexion.php';


	$sql="SELECT * from periodos";

	$result=mysqli_query($conexion,$sql);

	$cadena="<label>Periodo</label> 
            <select class='form-control input-sm' id='periodo' name='periodo'>
            <option selected=''>...</option>";

	while ($ver=mysqli_fetch_row($result)) {
		$cadena=$cadena.'<option>'.utf8_encode($ver[1]).'</option>';
	}

	echo  $cadena."</select>";
?>