<?php
	include 'plantillaGeneral.php';
	require '../php/conexion.php';

	$periodo = $_POST['periodo'];

	if ($periodo == "...") {
		echo "<script>alert('Seleccione una opción!');</script>";
	}else{
	$today=getdate();
	$fecha = 'FECHA: '.$today['mday'].'/'.$today['mon'].'/'.$today['year'];

	$sql="SELECT E.nombre as nombre,
				 E.apellido as apellido,
				 A.fecha as fecha,
				 A.asistencia as asistencia,
				 A.causa as causa,
				 A.cedula as ci
	 FROM empleados AS E INNER JOIN asistencia AS A ON 
	 E.cedula=A.cedula WHERE A.periodo='$periodo' ORDER BY A.cedula";
	
	$resultado = mysqli_query($conexion,$sql);

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
	$pdf->Cell(30,6,'Empleado',1,0,'C',1);
	$pdf->Cell(50,6,'Cedula',1,0,'C',1);
	$pdf->Cell(70,6,'Inasistencias',1,1,'C',1);

	$n = 1;
	$pdf->SetFont('Arial','',11);
	while ($row = mysqli_fetch_array($resultado)) {
		$pdf->setX(30);
		$pdf->Cell(6,6,$n,1,0,'C',0);
		$pdf->Cell(30,6,$row['nombre'].' '.$row['apellido'],1,0,'C',1);
		$pdf->Cell(50,6,$row['ci'],1,0,'C',1);
		$pdf->Cell(70,6,$row['asistencia'],1,1,'C',1);
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
	$pdf->Cell(50,6,'Periodo: '.$periodo,0,1,'L',0);
	
	$pdf->Output();//ESTO IMPRIME TODO EN PANTALLA
	}
?>