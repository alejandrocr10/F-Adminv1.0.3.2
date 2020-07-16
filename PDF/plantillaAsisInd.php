<?php
	
	require '../plugins/FPDFLIBRARY/fpdf.php';
	
	class PDF extends FPDF
	{
		function Header()
		{
			$this->Image('../img/F&Alogo.png', 35, 20, 21 );
			$this->SetFont('Arial','B',13);
			$this->Cell(30);
			$this->Cell(150,35, 'REPORTE QUINCENAL DE ASISTENCIA INDIVIDUAL.',0,0,'C');
			$this->Ln(22);
		}
		
		function Footer()
		{
			$this->SetY(-15);
			$this->SetFont('Arial','I', 8);
			$this->Cell(0,10, 'Pagina '.$this->PageNo().'/{nb}',0,0,'C' );
		}		
	}
?>