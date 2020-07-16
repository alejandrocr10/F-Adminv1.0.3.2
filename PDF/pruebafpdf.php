<?php
require('../plugins/FPDFLIBRARY/fpdf.php');

//$pdf = new FPDF('L','mm','Legal');//CREA EL OBJETO FPDF
//$pdf = new FPDF('L','mm',array(ancho,alto));
$pdf = new FPDF('P','mm','A4');
$pdf->AddPage();//AÑADE PAGINA
$pdf->SetFont('Arial','B',20);
/*$pdf->Cell(100px tamaño,10 Alto,' Hello World! HOLA MUNDO!',borde (0/1),salto de linea(0/1),alineacion('R','L','C'));*/
$pdf->setX(100);
$pdf->Cell(60,10,' Alejandro ',1,1,'L');
$pdf->setY(50);
$pdf->Cell(45,10,' Hello World! xxxxx',1,1,'C');
$y = $pdf->GetY();
$pdf->SetY($y+20);
$pdf->Cell(45,10,' Cabello ',1,0,'R');
$pdf->Cell(45,10,' PHP ',0,1,'R');

$pdf->setXY(100,70);
$pdf->MultiCell(100,20,'HOLA ME LLAMO ALEJANDRO tengo 20 años y me gusta programar en php',1,'C',0);//El ultimo valor es el fondo,el segundo valor es el tamaño de la linea
$pdf->AddPage();


$pdf->Output();//ESTO IMPRIME TODO EN PANTALLA

?>