<?php
	
	require '../plugins/FPDFLIBRARY/fpdf.php';
	
	class PDF extends FPDF
	{
		function Header()
		{
			$this->Image('../img/F&Alogo.png', 35, 20, 21 );
			$this->SetFont('Arial','B',13);
			$this->Cell(30);
			$this->Cell(150,35, 'REPORTE DE RECURSOS HUMANOS.',0,0,'C');
			$this->Ln(22);
		}
		
		function Footer()
		{
			$this->SetY(-15);
			$this->SetFont('Arial','I', 8);
			$this->Cell(0,10, 'Pagina '.$this->PageNo().'/{nb}',0,0,'C' );
		}		
		/**
* MultiCell with alignment as in Cell.
* @param float $w
* @param float $h
* @param string $text
* @param mixed $border
* @param int $ln
* @param string $align
* @param boolean $fill
*/
			function MultiAlignCell($w,$h,$text,$border=0,$ln=0,$align='L',$fill=false)
			{
				// Store reset values for (x,y) positions
				$x = $this->GetX() + $w;
				$y = $this->GetY();

				// Make a call to FPDF's MultiCell
				$this->MultiCell($w,$h,$text,$border,$align,$fill);

				// Reset the line position to the right, like in Cell
				if( $ln==0 )
				{
					$this->SetXY($x,$y);
				}
			}
	}
?>