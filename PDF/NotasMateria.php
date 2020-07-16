<?php
	include 'plantilla.php';
	require '../php/conexion.php';
	
	/*$query = "SELECT E.nombre AS 'nombre', D.nombre AS 'nombreD',D.id as 'ID' FROM empleados AS E INNER JOIN departamentos AS D ON E.departamentoId=D.ID";*/
	$nombreM = $_POST['nombreM'];
	$nombreP = $_POST['nombreP'];
	$ci_prof = $_POST['ci_prof'];
	$periodo = $_POST['periodo'];
	$today=getdate();
	$fecha = 'Fecha: '.$today['mday'].'/'.$today['mon'].'/'.$today['year'];
	$query="SELECT A.cedula,
				   A.nombres
	 FROM empleados AS N INNER JOIN alumnos AS A ON 
	 N.cedula=A.cedula WHERE N.nombreMat='$nombreM' AND N.ci_prof='$ci_prof' AND N.periodo='$periodo'";
	
	$resultado = mysqli_query($conexion,$query);
	$row_cnt = mysqli_num_rows($resultado);
	if($row_cnt == 0){
		//echo "<h1>No ha cargado notas..</h1>";
		echo "<script>window.alert('No se ha cargado ninguna nota todavia.');</script>";
	}else{
	/*	$materia = "Asignatura: ";
	$materia = $materia.$row[3];
	
	$profesor = "Profesor: ";
	$profesor = $profesor.$row[13];

	$periodo = "Periodo: ";
	$periodo = $periodo.$row[5];
*/
$pdf = new PDF('P','mm','A4');
$pdf->AliasNbPages();
$pdf->AddPage();

$pdf->SetFillColor(232,232,232);
$pdf->SetFont('Arial','B',14);
//$pdf->Cell(20,6,'ID',1,0,'C',1);
/*	$pdf->cell(70,15,$materia,0,1);
$pdf->setXY(145,15);
$pdf->cell(70,15,'COORD.INFORMATICA',0,1);
$pdf->setXY(145,20);
$pdf->cell(70,15,$periodo,0,1);
$pdf->setY(38);
$pdf->cell(70,15,$profesor,0,1);
*/	$pdf->setY(53);
$pdf->Cell(67,6,'Nombres y Apellidos',0,0,'C',1);
$pdf->Cell(27,6,'Cedula',0,0,'C',1);
$pdf->Cell(14,6,'C.I',0,0,'C',1);
$pdf->Cell(14,6,'C.II',0,0,'C',1);
$pdf->Cell(14,6,'C.III',0,0,'C',1);
$pdf->Cell(14,6,'C.IV',0,0,'C',1);
$pdf->Cell(14,6,'OB',0,0,'C',1);
$pdf->Cell(14,6,'Total',0,0,'C',1);
$pdf->Cell(14,6,'Final',0,1,'C',1);

$pdf->SetFont('Arial','',12);

$datos = array();
$n = 0;
while($row = $resultado->fetch_assoc())
{	
	$pdf->Cell(67,6,utf8_decode($row['nombres'].' '.$row['apellidos']),0,0,'L');
	$pdf->Cell(27,6,utf8_decode('v-'.$row['cedula']),0,0,'C');
	$pdf->Cell(14,6,$row['n1'],0,0,'C');
	$pdf->Cell(14,6,$row['n2'],0,0,'C');
	$pdf->Cell(14,6,$row['n3'],0,0,'C');
	$pdf->Cell(14,6,$row['n4'],0,0,'C');
	$pdf->Cell(14,6,$row['ob'],0,0,'C');
	$pdf->Cell(14,6,$row['total'],0,0,'C');
	$pdf->Cell(14,6,$row['notaF'],0,1,'C');
	if($n==0){
		$datos[0] = $row['nombreMat'];
		$datos[1] = $row['ci_prof'];
		$datos[2] = $row['periodo'];
	}

}

$materia = "Asignatura: ";
$materia = $materia.$datos[0];

$profesor = "Profesor: ";
$profesor = $profesor.$nombreP.'  V-'.$datos[1];

$periodo = "Periodo: ";
$periodo = $periodo.$datos[2];

$pdf->SetFont('Arial','B',14);
$pdf->setY(33);
$pdf->cell(70,15,$materia,0,1);
$pdf->setXY(145,15);
$pdf->cell(70,15,'COORD.INFORMATICA',0,1);
$pdf->setXY(145,20);
$pdf->cell(70,15,$periodo,0,1);
$pdf->setXY(145,25);
$pdf->cell(70,15,$fecha,0,1);
$pdf->setY(38);
$pdf->cell(70,17,$profesor,0,1);

$pdf->Output();
	
}



	
?>