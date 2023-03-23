<?php 
include 'plantilla_constancia.php';
include 'textosc.php';
require 'con_db.php';

global $pdf;
$readccion_sup  = array();

$pdf = new PDF('P','mm', 'letter');
$pdf->AddPage();
$pdf->AliasNbPages();
$pdf->SetFont('Arial','B',15);

#CELL largo, altoCelda, texto, borde, salto, alineación, fondo
#MULTI largo, altoCelda, texto, borde, alineación, fondo
$marg = 0;
$d = date("d");
$m = date("M");
$a = date("Y");

#----------------------- BUNDLE:
#----------------------------------------Fecha
$pdf->SetXY(114,60);
$pdf->SetFont(fonta(),normal(),10);
$Fecha = $d." de ".$m. " del ".$a;
$laFecha = ciudadDeMex_F().$Fecha;
$pdf->MultiCell(80,4,$laFecha,$marg,'R',0);
#---------------------------------------- Folio, Asunto, A quien Corresponda
$ancho_001 = 60;
$ini = 20;
$pdf->SetXY(20,34);
$pdf->SetFont(fonta(),bold(),8);
$pdf->Cell($ancho_001,4,folio_F(),$marg,1,'L');
$pdf->SetX($ini);
$pdf->SetFont(fonta(),normal(),8);
$pdf->Cell($ancho_001,4,"s/f",$marg,1,'L');
$pdf->SetX($ini);
$pdf->Cell($ancho_001,3,"",$marg,1,'L');
$pdf->SetX($ini);
$pdf->SetFont(fonta(),bold(),8);
$pdf->Cell($ancho_001,4,asunto_F(),$marg ,1 ,'L');
$pdf->SetX($ini);
$pdf->SetFont(fonta(),normal(),8);
$pdf->Cell($ancho_001,4, constancia_F(),$marg ,1 ,'L');
$pdf->SetX($ini);
$pdf->Cell($ancho_001,3,"",$marg ,1 ,'L');
$pdf->SetX($ini);
$pdf->SetFont(fonta(),bold(),8);
$pdf->Cell($ancho_001,4,aQuienCorres_F(),$marg ,1 ,'L');
$pdf->SetX($ini);
$pdf->SetFont(fonta(),bold(),8);
$pdf->Cell($ancho_001,4,presente_F(),$marg ,1 ,'L');
#--------------------------------------------------------------------------

#--------------DESCRPCION
$gender = "m";
	# Variables
	$nombreCompleto = "PAMELA ELIZABETH ROJAS GUERRERO DE LA LUZ COREA REODRIGUEZ PERES";
	$nombreCompleto = "C. ".$nombreCompleto;
    $numeroDeRegist = "A230064";
    $estatus_Alumno = "REGULAR";    
    $programaAlumno = "Maestría en Ciencias en Ingeniería metalúrgica";   
    $semestresProgr = "5" ;  
    $semestreActual = "1er";   
    $rangoInPeriodo = "30 de enero del 2022"; 
    $rangoFnPeriodo = "26 de junio del 2023"; 
    $rangoInVacacio = "31 de julio del 2022";
    $rangoFnVacacio = "18 de agosto del 2023";
    # Tex Hombre
    $parteTexto_H01 = porSeHaceConstarH_F();
    $parteTexto_H02 = esAlumnoDelProgH_F();
    $parteTexto_H03 = semestresYEstaInscH_F();
    # Tex Mujer
    $parteTexto_M01 = porSeHaceConstarM_F();
    $parteTexto_M02 = esAlumnaDelProgM_F();
    $parteTexto_M03 = semestresYEstaInscM_F();
    # Tex Generales
    $parteTexto_G01 = conNumeroDeReg_F();
    $parteTexto_G02 = elProgConstaDe_F();
    $parteTexto_G03 = queSeImparteEn_F();
    $parteTexto_G04 = semestreCorresponde_F();
    $parteTexto_G05 = semestreAl_F();
    $parteTexto_G06 = conUnPeriodoVacacional_F();
    $parteTexto_G07 = cursandoAsignaturas_F();

    // $parteTexto_G09 = conNumeroDeReg_F();
    // $parteTexto_G10 = conNumeroDeReg_F();
    // $parteTexto_G11 = conNumeroDeReg_F();
  	# Tam Variables
	$nombreCoLength = strlen($nombreCompleto);    
    $numRegisLength = strlen($numeroDeRegist);    
    $estatusALength = strlen($estatus_Alumno);  
    $programaLength = strlen($programaAlumno);    
    $semesProLength = strlen($semestresProgr);    
    $semesActLength = strlen($semestreActual);    
    $rangoIn_Length = strlen($rangoInPeriodo);    
    $rangoFn_Length = strlen($rangoFnPeriodo);  
    $rangoIv_Length = strlen($rangoInVacacio);    
    $rangoFv_Length = strlen($rangoFnVacacio);
    # Tam Hombre
    $tam_Texto__H01 = strlen($parteTexto_H01);
    $tam_Texto__H02 = strlen($parteTexto_H02);
    $tam_Texto__H03 = strlen($parteTexto_H03);
    # Tam Mujer
    $tam_Texto__M01 = strlen($parteTexto_M01);
    $tam_Texto__M02 = strlen($parteTexto_M02);
    $tam_Texto__M03 = strlen($parteTexto_M03);
    # Tam Genrerales
    $tam_Texto__G01 = strlen($parteTexto_G01);
    $tam_Texto__G02 = strlen($parteTexto_G02);
    $tam_Texto__G03 = strlen($parteTexto_G03);
    $tam_Texto__G04 = strlen($parteTexto_G04);
    $tam_Texto__G05 = strlen($parteTexto_G05);
    $tam_Texto__G06 = strlen($parteTexto_G06);
    $tam_Texto__G07 = strlen($parteTexto_G07);

    // echo ( $tam_Texto__H01 ); echo ("<br>"); #41
    // echo ( $tam_Texto__H02 ); echo ("<br>"); #12
    // echo ( $tam_Texto__H03 ); echo ("<br>"); echo ("<br>"); #33
    // echo ( $tam_Texto__M01 ); echo ("<br>"); #41
    // echo ( $tam_Texto__M02 ); echo ("<br>"); #12
    // echo ( $tam_Texto__M03 ); echo ("<br>"); echo ("<br>"); #33
    // echo ( $tam_Texto__G01 ); echo ("<br>"); #24
    // echo ( $tam_Texto__G02 ); echo ("<br>"); #17
    // echo ( $tam_Texto__G03 ); echo ("<br>"); #96
    // echo ( $tam_Texto__G04 ); echo ("<br>"); #35
    // echo ( $tam_Texto__G05 ); echo ("<br>"); #4
    // echo ( $tam_Texto__G06 ); echo ("<br>"); #32
    // echo ( $tam_Texto__G07 ); echo ("<br>"); #57

    $posicion_001 = $tam_Texto__M01 + $nombreCoLength;
    $posicion_100 = $posicion_001 + $tam_Texto__G01 -1;
    $posicion_002 = $posicion_100 + $numRegisLength + 1;
	$posicion_200 = $posicion_002 + 11;
    $posicion_003 = $posicion_200 + $estatusALength + 1;
	$posicion_300 = $posicion_003 + 16;
    $posicion_004 = $posicion_300 + $programaLength + 1;
	$posicion_400 = $posicion_004 + 97;
    $posicion_005 = $posicion_400 + $semesProLength + 1;
	$posicion_500 = $posicion_005 + 33;
    $posicion_006 = $posicion_500 + $semesActLength + 1;
	$posicion_600 = $posicion_006 + 34;
    $posicion_007 = $posicion_600 + $rangoIn_Length + 1;
	$posicion_700 = $posicion_007 + 3;
    $posicion_008 = $posicion_700 + $rangoFn_Length + 1;
	$posicion_800 = $posicion_008 + 31;
    $posicion_009 = $posicion_800 + $rangoIv_Length + 1;
	$posicion_900 = $posicion_009 + 3;
    $posicion_010 = $posicion_900 + $rangoFv_Length + 1;



if ($gender == "h") {

	#CELL largo, altoCelda, texto, borde, salto, alineación, fondo
	#MULTI largo, altoCelda, texto, borde, alineación, fondo
	$redaccion  = "Por este conducto se hace constar que el ".$nombreCompleto." con número de registro ".$numeroDeRegist.", es alumno ".$estatus_Alumno." del Programa de ".$programaAlumno.", que se imparte en esta sección de Estudios de Posgrado e Investigación, el programa consta de ".$semestresProgr." semestres y está inscrito en el ".$semestreActual.", semestre el cual corresponde del ".$rangoInPeriodo." al ".$rangoFnPeriodo.", con un periodo vacacional del ".$rangoInVacacio." al ".$rangoFnVacacio.", cursando las asignaturas que a continuación se indican:";
		$tam_Redac = strlen($redaccion);

}elseif ($gender == "m") {
	$redaccion_a  = "Por este conducto se hace constar que la ".$nombreCompleto." con número de registro ".$numeroDeRegist.", es alumna ".$estatus_Alumno." del Programa de ".$programaAlumno.", que se imparte en esta sección de Estudios de Posgrado e Investigación, el programa consta de ".$semestresProgr." semestres y está inscrita en el ".$semestreActual.", semestre el cual corresponde del ".$rangoInPeriodo." al ".$rangoFnPeriodo.", con un periodo vacacional del ".$rangoInVacacio." al ".$rangoFnVacacio.", cursando las asignaturas que a continuación se indican:";
		

	$redaccion = $parteTexto_M01.$nombreCompleto.$parteTexto_G01.$numeroDeRegist.$parteTexto_M02.$estatus_Alumno.$parteTexto_G02.$programaAlumno.$parteTexto_G03.$semestresProgr.$parteTexto_M03.$semestreActual.$parteTexto_G04.$rangoInPeriodo.$parteTexto_G05.$rangoFnPeriodo.$parteTexto_G06.$rangoInVacacio.$parteTexto_G05.$rangoFnVacacio. $parteTexto_G07;
		$tam_Redac = strlen($redaccion);

		for ($i=0; $i < $tam_Redac ; $i++) {
			if ($i > 40 && $i < $posicion_001) {
			 	$readccion_sup[$i] = $redaccion[$i];
			}elseif ($i > $posicion_100  && $i < $posicion_002) {
				$readccion_sup[$i] = $redaccion[$i];
			}elseif ($i > $posicion_200  && $i < $posicion_003) {
				$readccion_sup[$i] = $redaccion[$i];
			}elseif ($i > $posicion_300  && $i < $posicion_004) {
				$readccion_sup[$i] = $redaccion[$i];
			}elseif ($i > $posicion_400  && $i < $posicion_005) {
				$readccion_sup[$i] = $redaccion[$i];									
			}elseif ($i > $posicion_500  && $i < $posicion_006) {
				$readccion_sup[$i] = $redaccion[$i];									
			}elseif ($i > $posicion_600  && $i < $posicion_007) {
				$readccion_sup[$i] = $redaccion[$i];									
			}elseif ($i > $posicion_700  && $i < $posicion_008) {
				$readccion_sup[$i] = $redaccion[$i];									
			}elseif ($i > $posicion_800  && $i < $posicion_009) {
				$readccion_sup[$i] = $redaccion[$i];									
			}elseif ($i > $posicion_900  && $i < $posicion_010) {
				$readccion_sup[$i] = $redaccion[$i];									
			}else{
			 	$readccion_sup[$i] = " "; 			
			}
		}
		$redaccion_cad = implode($readccion_sup);
		// echo $redaccion_cad;

}else{
	$redaccion = "Se hace constar que ----------------------------- con número de registro --------, es alumno ------ del Programa de ------------------------------------- que se imparte en esta sección de Estudios de Posgrado e Investigación, el programa consta de --- semestres y está inscrita en el ----, Semestre el cual corresponde del ------------------------------------, con un periodo vacacional ------------------------------------------------, cursando las asignaturas que a continuación se indican:";
}

	// $pdf->SetXY(20,70);
	// $pdf->SetFillColor(232,232,232);
	// $pdf->SetFont(fonta(),normal(),9);
	// $pdf->MultiCell(173,4,utf8_decode($redaccion),1,'J',1);
	$pdf->SetXY(20,70);
	$pdf->SetFont(fonta(),bold(),9);
	$pdf->MultiCell(173,4,utf8_decode($redaccion_cad),1,'J',0);
	

$pdf->Output();
 ?>