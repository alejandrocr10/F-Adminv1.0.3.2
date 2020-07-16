<?php
	include 'plantillaRecursos.php';
	require '../php/conexion.php';

	$today=getdate();
	$fecha = 'FECHA: '.$today['mday'].'/'.$today['mon'].'/'.$today['year'];

	$sql="SELECT * FROM empleados";
	
	$resultado = mysqli_query($conexion,$sql);
	$total = mysqli_num_rows($resultado);
	
	$pdf = new PDF('P','mm','A4');
	$pdf->AddPage();//AÑADE PAGINA
	/*$pdf->Cell(100px tamaño,10 Alto,' Hello World! HOLA MUNDO!',borde (0/1),salto de linea(0/1),alineacion('R','L','C'));*/

	$pdf->SetFillColor(232,232,232);
	$pdf->SetFont('Arial','B',9);
	$pdf->setXY(20,60);
	$pdf->Cell(3,6,'#',1,0,'C',0);
	$pdf->Cell(18,6,'NOMBRE',1,0,'C',1);
	$pdf->Cell(20,6,'APELLIDO',1,0,'C',1);
	$pdf->Cell(20,6,'CEDULA',1,0,'C',1);
	$pdf->Cell(24,6,'TLF',1,0,'C',1);
	$pdf->Cell(20,6,'CARGO',1,0,'C',1);
	$pdf->Cell(22,6,'DIRECCION',1,0,'C',1);
	$pdf->Cell(18,6,'BANCO',1,0,'C',1);
	$pdf->Cell(26,6,'CUENTA',1,1,'C',1);
	$n = 1;
	$pdf->SetFont('Arial','',9);
	while ($row = mysqli_fetch_array($resultado)) {
		if ($n % 2 == 0) {
			$fc = 0;
		}else{
			$fc = 1;
		}
		$pdf->setX(20);
		$pdf->Cell(3,10,$n,0,0,'C',$fc);
		//$pdf->Cell(18,10,$row['nombre'],0,0,'L',$fc);
		$pdf->MultiAlignCell(18,5,utf8_decode($row['nombre']),0,0,'L',$fc);
		//$pdf->Cell(20,10,$row['apellido'],0,0,'L',$fc);
		$pdf->MultiAlignCell(20,5,utf8_decode($row['apellido']),0,0,'L',$fc);
		$pdf->Cell(20,10,$row['cedula'],0,0,'L',$fc);
		$pdf->Cell(24,10,$row['tlf'],0,0,'L',$fc);
		$pdf->Cell(20,10,$row['cargo'],0,0,'L',$fc);
		$dir = substr($row['direccion'],0,12);
		$pdf->Cell(22,10,utf8_decode($dir),0,0,'L',$fc);
		$pdf->Cell(18,10,$row['banco'],0,0,'L',$fc);
		$pdf->SetFont('Arial','',8);
		/*$pdf->Cell(32,6,$row['n_cuenta'],1,1,'L',1);*/
		$pdf->MultiCell(26,5,$row['n_cuenta'],0,'L',$fc);
		$pdf->SetFont('Arial','',9);
		$n++;
	}

	$pdf->SetFont('Arial','B',11);
	$pdf->setXY(146,35);
	$pdf->Cell(50,6,$fecha,0,0,'L',0);

	$pdf->Output();//ESTO IMPRIME TODO EN PANTALLA
	
?>