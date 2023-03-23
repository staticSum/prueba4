<?php
 #include("formularioSIP10.php"); 
 require('fpdf/fpdf.php');
 require('consuls.php');
 include("textos.php");
setlocale(LC_TIME, 'Spanish_Mexican');

 class PDF extends FPDF{

 	function Header(){

 		$d = date("d");
 		$m = date("m");
 		$a = date("Y");

                #Part
 		$this->Image('img/logoIPN.png', 10, 8, 30);
 		# largo, altoCelda, texto, borde, salto, alineación, color	
		$this->SetFillColor(232,232,232);
                $this->SetFont(fonta(),bold(),8);
                $this->SetXY(190,10);
 		$this->Cell(17,3,sip10_1(), 0, 1, 'C',1);
 		$this->SetXY(190,13);
 		$this->Cell(17,3,sip10_2(), 0, 0, 'C',1);

 		$this->SetFont(fonta(),bold(),16);
 		$this->SetXY(50,10);
 		$this->Cell(120,7, ipn(), 0, 1, 'C');
 		$this->SetFont(fonta(),bold(),14);
 		$this->SetXY(50,17);
 		$this->Cell(120,7, sip(), 0, 1, 'C');
 		$this->SetFont(fonta(),'I',14);
 		$this->SetXY(50,26);
 		$this->Cell(120,7, sreins(), 0, 0, 'C');
 		#Fecha
                $this->SetFont(fonta(),'I',10);
                $this->SetXY(150,40);
                $this->Cell(12,6,'Fecha: ', 0, 0, 'R');
                $this->SetFont(fonta(),normal(),9);
 		$this->Cell(12,6, $d, 1, 0, 'C');
 		$this->Cell(12,6, $m, 1, 0, 'C');
 		$this->Cell(16,6, $a, 1, 1, 'C');
                $this->SetXY(162,45);
                $this->SetFont(fonta(),normal(),7);
                $this->Cell(12,6,'d', 0, 0, 'C');
                $this->Cell(12,6,'m', 0, 0, 'C');
                $this->Cell(16,6,'a', 0, 1, 'C');
 		#Line
 		$this->Ln(1);
 	}

 	function Footer(){
                
        $pagI = paginaF();
        $pags = $this->PageNo().'/{nb}';
        $numPags = $pagI . $pags ;
                $this->SetFont(fonta(),normal(),6);
 		$this->SetY(-12);
 		$this->Cell(0,4,$numPags,0,0,'R');
 		$this->SetY(-15);
 		$this->Cell(0,4,nota(),0,0,'L');
 		$this->SetFont(fonta(),normal(),8);
 		$this->SetY(-20);
 		$this->Cell(65,4,alumno_F(),1,0,'C');
 		$this->Cell(65,4,asesorA_F(),1,0,'C');
                $this->SetFont(fonta(),bold(),8);
 		$this->Cell(66,4,jefeSepi_F(),1,0,'C');
 		$this->SetFont(fonta(),normal(),6);
 		$this->SetY(-32);
 		$this->Cell(65,12,' firma 1 ',1,0,'C');
 		$this->Cell(65,12,' firma 2 ',1,0,'C');
 		$this->Cell(66,12,' firma 3 ',1,0,'C');
 		// $this->SetFont(fonta(),normal(),8);
 		// $this->SetY(-36);
 		// $this->Cell(65,4,' Alumno ',0,0,'C');
 		// $this->Cell(65,4,asesorA_F(),0,0,'C');
 		// $this->Cell(66,4,jefe_F(),0,0,'C');
 	}

 }
?>
