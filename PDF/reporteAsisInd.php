<?php
	include 'plantillaAsisInd.php';
	require '../php/conexion.php';

	$ci = $_POST['empleado'];
	$periodo = $_POST['periodo'];


	if ($ci == "..." || $periodo == "...") {
		echo "<script>alert('Seleccione todos los Campos!');</script>";
	}else{
	$today=getdate();
	$fecha = 'FECHA: '.$today['mday'].'/'.$today['mon'].'/'.$today['year'];

	$sql="SELECT E.nombre as nombre,
				 E.apellido as apellido,
				 A.fecha as fecha,
				 A.asistencia as asistencia,
				 A.causa as causa
	 FROM empleados AS E INNER JOIN asistencia AS A ON 
	 E.cedula=A.cedula WHERE A.cedula='$ci' AND A.periodo='$periodo' ORDER BY A.fecha ASC/*AND A.asistencia=*/";
	
	$resultado = mysqli_query($conexion,$sql);
	//$total = mysqli_num_rows($resultado);

	if(mysqli_num_rows($resultado) == 0){
		echo "<script>alert('Aun no tiene Asistencias Registradas.');</script>";
	}else{

	$asis = 0;
	$ina = 0;
	$YN = "";

	$pdf = new PDF('P','mm','A4');
	$pdf->AddPage();//AÑADE PAGINA
	/*$pdf->Cell(100px tamaño,10 Alto,' Hello World! HOLA MUNDO!',borde (0/1),salto de linea(0/1),alineacion('R','L','C'));*/

	$pdf->SetFillColor(232,232,232);
	$pdf->SetFont('Arial','B',11);
	$pdf->setXY(30,60);
	$pdf->Cell(6,6,'#',1,0,'C',0);
	$pdf->Cell(30,6,'Asistencia',1,0,'C',1);
	$pdf->Cell(50,6,'FECHA',1,0,'C',1);
	$pdf->Cell(70,6,'NOTA',1,1,'C',1);

	$n = 1;
	$pdf->SetFont('Arial','',11);
	while ($row = mysqli_fetch_array($resultado)) {
		$pdf->setX(30);
		$pdf->Cell(6,6,$n,1,0,'C',0);
		if ($row['asistencia']==1) {
			$asis++;
			$YN = "O";
		}else{
			$ina++;
			$YN = "X";
		}
		$pdf->Cell(30,6,$YN,1,0,'C',1);
		$pdf->Cell(50,6,$row['fecha'],1,0,'C',1);
		$pdf->Cell(70,6,$row['causa'],1,1,'C',1);
		if($n == 1){
			$name = $row['nombre'];
			$last = $row['apellido'];
		}
		$n++;
	}
	
	$pdf->SetFont('Arial','B',11);
	$pdf->setXY(146,35);
	$pdf->Cell(50,6,$fecha,0,0,'L',0);
	$pdf->setXY(146,40);
	$pdf->Cell(50,6,'ASISTENCIAS: '.$asis,0,0,'L',0);
	$pdf->setXY(146,45);
	$pdf->Cell(50,6,'INASISTENCIAS: '.$ina,0,0,'L',0);

	$pdf->setXY(30,40);
	$pdf->Cell(70,6,'Empleado: '.$name.' '.$last,0,1,'L',0);
	$pdf->setX(30);
	$pdf->Cell(50,6,'C.I: '.$ci,0,1,'L',0);
	$pdf->setX(30);
	$pdf->Cell(50,6,'Periodo: '.$periodo,0,1,'L',0);
	
	$pdf->Output();//ESTO IMPRIME TODO EN PANTALLA

	}//no tiene aistencias registradas
		}//faltan campos
?>