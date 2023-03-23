<?php 
require 'fpdf/fpdf.php';
include("textosw.php");
include("textos.php");
include("leyenda-controlador.php");

#CELL largo, altoCelda, texto, borde, salto, alineación, fondo
#MULTI largo, altoCelda, texto, borde, alineación, fondo


class PDF extends FPDF{

	function Header(){

		$marg = 0;
		$leyenda = cargaLeyendaAnual();

		$this->Image('img/encabezado_logo.png', 20, 15, 105);
		$this->SetFont('Arial','B',15);
		$this->SetFillColor(232,232,232);
		$this->SetXY(124,15);
		$this->SetFont(fonta(),normal(),10);
		#MULTI largo, altoCelda, texto, borde, alineación, fondo 
		$this->MultiCell(70,4,escuelaSupIngQui_F(),$marg,'R',0);
		$this->SetXY(124,23);
		$this->SetFont(fonta(),normal(),10);
		$this->MultiCell(70,4,seccionEstudiosPosgrado_F(),$marg,'R',0);
		#----------- LeyendaAnual
		$this->SetXY(134,33);
		$this->SetFont(fonta(),normal(),6);
		$this->MultiCell(60,3,utf8_decode($leyenda),$marg,'R',0);
	}

	function Footer(){
          
        $conmutLink = conmutador_F()." ".linkDeSepi_F();        
        $pagI = paginaF();
        $pags = $this->PageNo().'/{nb}';
        $numPags = $pagI . $pags;
        $espa = -22;
        $feet = 3;
        $marg = 0;
        
        $this->Image("img/pie_de_pagina_ipn_2023_05.png", 19, 245, 180);
        $this->SetFont(fonta(),normal(),6);
 		$this->SetXY(20,-12);
 		$this->Cell(174,4,$numPags,$marg,0,'R');
 		// $this->SetXY(20,-19);
 		$this->SetXY(20,$espa = $espa-$feet);
 		$this->Cell(174,4,$conmutLink,$marg,0,'L');
		$this->SetXY(20,$espa = $espa-$feet);
 		$this->Cell(174,4,avLuis_F(),$marg,0,'L');
		$this->SetXY(20,$espa = $espa-$feet);
 		$this->Cell(174,4,unidad_F(),$marg,0,'L');
 	}
}

 ?>