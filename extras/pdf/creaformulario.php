<?php 

function creaElFormatoSIP10($iD){
include ('plantilla_form.php');
include ('funcs.php');
require ('consuls.php');

 	$pdf = new PDF('P','mm', 'letter');
    $pdf->AliasNbPages();
 	$pdf->AddPage();

    // $tiempoCompleto = 1;
 	// $requiereUnidad = 1
    $idABuscar = $iD;

    $resultado_datos_quien = quienEsElAlumno($idABuscar);
     while($row = $resultado_datos_quien->fetch_assoc()){    
 	$idDataFormu = strtoupper(utf8_decode($row['Id_datos']));
    $nombreFormu = strtoupper(utf8_decode($row['Nombre_al']));
 	$apellPFormu = strtoupper(utf8_decode($row['Apellido_Paterno_al']));
 	$apellMFormu = strtoupper(utf8_decode($row['Apellido_Materno_al']));
    $reqAexFormu = strtoupper(utf8_decode($row['asesor_Ext']));
    $numRegFormu = strtoupper(utf8_decode($row['id_alumnos']));
    $tiempCFormu = strtoupper(utf8_decode($row['alumtiC']));
    $reqUniFormu = strtoupper(utf8_decode($row['alumunA']));   
    $periodFormu = strtoupper(utf8_decode($row['NOM PERIODO']));
    #Semestre y Programa
    $semstrFormu = strtoupper(utf8_decode($row['id_semestre']));
    $progrMFormu = strtoupper(utf8_decode($row['PROGRAMA']));}

    #Asesor
    $interno = 1;
    $externo = 2;
    $numRegForMu = "'". $numRegFormu ."'";
    
    if ($reqAexFormu == 1) {
       #Externo
        $resultado_datos_asesorInterno = quienEsElAsesor($numRegForMu,$interno);
        while ($row = $resultado_datos_asesorInterno->fetch_assoc()) {
        $intextFormuInt = strtoupper(utf8_decode($row['InternoExterno']));
        $asesGrFormuInt = strtoupper(utf8_decode($row['Grado_Abr_ase']));
        $asesNmFormuInt = strtoupper(utf8_decode($row['Nombre_ase']));
        $asesAPFormuInt = strtoupper(utf8_decode($row['Apellido Paterno_ase']));
        $asesAMFormuInt = strtoupper(utf8_decode($row['Apellido Materno_ase']));}

        $resultado_datos_asesorExterno = quienEsElAsesor($numRegForMu,$externo);
        while ($row = $resultado_datos_asesorExterno->fetch_assoc()) {
        $intextFormuExt = strtoupper(utf8_decode($row['InternoExterno']));
        $asesGrFormuExt = strtoupper(utf8_decode($row['Grado_Abr_ase']));
        $asesNmFormuExt = strtoupper(utf8_decode($row['Nombre_ase']));
        $asesAPFormuExt = strtoupper(utf8_decode($row['Apellido Paterno_ase']));
        $asesAMFormuExt = strtoupper(utf8_decode($row['Apellido Materno_ase']));}

    }elseif ($reqAexFormu == 0) {
        #Interno
        $resultado_datos_asesor = quienEsElAsesor($numRegForMu,$interno);
        while ($row = $resultado_datos_asesor->fetch_assoc()) {
        $intextFormuInt = strtoupper(utf8_decode($row['InternoExterno']));
        $asesGrFormuInt = strtoupper(utf8_decode($row['Grado_Abr_ase']));
        $asesNmFormuInt = strtoupper(utf8_decode($row['Nombre_ase']));
        $asesAPFormuInt = strtoupper(utf8_decode($row['Apellido Paterno_ase']));
        $asesAMFormuInt = strtoupper(utf8_decode($row['Apellido Materno_ase']));}
        $intextFormuExt = 0;
        $asesGrFormuExt = "";
        $asesNmFormuExt = "";
        $asesAPFormuExt = "";
        $asesAMFormuExt = "";
    }else{
        $intextFormuExt = 0;
        $asesGrFormuExt = "";
        $asesNmFormuExt = "";
        $asesAPFormuExt = "";
        $asesAMFormuExt = "";
        $intextFormuInt = 0;
        $asesGrFormuInt = "";
        $asesNmFormuInt = "";
        $asesAPFormuInt = "";
        $asesAMFormuInt = "";} 

    
    
    // $periodFormu = "A24";
    // $semstrFormu = "2";
    // $asesGrFormu = "Dr.";
    // $asesNmFormu = "Nombre 1";
    // $asesAPFormuInt = "ApellidoP1";
    // $asesAMFormuInt = "ApellidoM1";
    // $intextFormuExt = 0;
    // $asesGrFormuExt = "";
    // $asesNmFormuExt = "";
    // $asesAPFormuExt = "";
    // $asesAMFormuExt = "";
    // $intextFormuInt = 0;
    // $asesGrFormuInt = "";
    // $asesNmFormuInt = "";
    // $asesAPFormuInt = "";
    // $asesAMFormuInt = ""; 

   

    #Characters and extras
    $arrNumReg = str_split($numRegFormu);
    $arrPeriod = str_split($periodFormu);
    $tiempoCompleto = $tiempCFormu;
    $requiereUnidad = $reqUniFormu;
    #NOMBRE  
    $nombreCompleto = validarNombre($nombreFormu,$apellPFormu,$apellMFormu); #Nombre
    $nombreAiComplt = validarAsesor($asesGrFormuInt,$asesNmFormuInt,$asesAPFormuInt,$asesAMFormuInt); #Asesor Interno
    $nombreAeComplt = validarAsesor($asesGrFormuExt,$asesNmFormuExt,$asesAPFormuExt,$asesAMFormuExt); #Asesor Externo
    #Datos------------------------DATOS DEL SOLICITANTE
    #CELL largo, altoCelda, texto, borde, salto, alineación, fondo
    $pdf->SetFont(fonta(),bold(),'12');
    $pdf->Cell(0,6,dataSol(),0,1,'C');
    $pdf->SetFillColor(232,232,232);
    $pdf->SetFont(fonta(),bold(),fontaTamG());
    $pdf->Cell(0,6,nombreF(),1,1,'L',1);
    #MULTI largo, altoCelda, texto, borde, alineación, fondo 
    $pdf->Cell(16,5,apellidoF(),1,0,'C',1);
    $pdf->SetFont(fonta(),normal(),fontaTamG());
    $pdf->Cell(48,10,$apellPFormu,1,0,'C');
    $pdf->SetFont(fonta(),bold(),fontaTamG());
    $pdf->Cell(16,5,apellidoF(),1,0,'C',1);
    $pdf->SetFont(fonta(),normal(),fontaTamG());
    $pdf->Cell(48,10,$apellMFormu,1,0,'C');
    $pdf->SetFont(fonta(),bold(),fontaTamG());
    $pdf->Cell(20,10,nombresF(),1,0,'C',1);
    $pdf->SetFont(fonta(),normal(),fontaTamG());
    $pdf->Cell(48,10,$nombreFormu,1,1,'C');
    $pdf->SetFont(fonta(),bold(),fontaTamG());
    $pdf->SetXY(10,69);
    $pdf->Cell(16,5,paternoF(),1,0,'C',1);
    $pdf->SetXY(74,69);
    $pdf->Cell(16,5,maternoF(),1,1,'C',1);
    $pdf->Ln(3);
    $pdf->SetFont(fonta(),bold(),fontaTamG());
    $pdf->Cell(60,6,nombreUA(),1,0,'C',1);
    $pdf->Cell(136,6,nombrePA(),1,1,'C',1);
    $pdf->SetFont(fonta(),normal(),fontaTamG());
    $pdf->Cell(60,6,esiqie(),1,0,'L');
    $pdf->Cell(136,6,$progrMFormu,1,1,'L');
    $pdf->Ln(3);
    #Boleta
    $pdf->SetFont(fonta(),bold(),fontaTamG());
    for($a = 0; $a <= 6; $a++){
        if ($a < 6) {
           $pdf->Cell(5,6,$arrNumReg[$a],1,0,'C');
        }elseif ($a == 6) {
           $pdf->Cell(5,6,$arrNumReg[$a],1,1,'C');
        }       
    }
    #Descomentar para pruebas
    // $pdf->Cell(5,6,'B',1,0,'C');
    // $pdf->Cell(5,6,'2',1,0,'C');
    // $pdf->Cell(5,6,'2',1,0,'C');
    // $pdf->Cell(5,6,'0',1,0,'C');
    // $pdf->Cell(5,6,'5',1,0,'C');
    // $pdf->Cell(5,6,'2',1,0,'C');
    // $pdf->Cell(5,6,'4',1,1,'C');
    #Datos------------------------PROGRAMA ACADEMICO
    $pdf->Ln(3); #Separador 
    $pdf->SetFont(fonta(),normal(),fontaTamG());
    $pdf->Cell(0,7,numRegF(),0,1,'L');
    $pdf->Cell(29,7,alumnoTiF(),0,0,'L');
    $pdf->SetFont(fonta(),normal(),'6');
    $pdf->Cell(19,7,marcarF(),0,0,'L');
    $pdf->Cell(1,7,':',0,1,'L');
    
    $pos_01X = 90;
    $pos_01Y = 105;
    if($tiempoCompleto == 1){
        $pdf->SetXY($pos_01X,$pos_01Y);
        $pdf->SetFont(fonta(),bold(),fontaTamG());
    	$pdf->Cell(10,6,completoF(),0,0,'R');
    	$pdf->Cell(10,6,'X',1,0,'C',1);
    	$pdf->Cell(10,6,'',0,0,'C');
    	$pdf->SetFont(fonta(),normal(),fontaTamG());
    	$pdf->Cell(10,6,parcialF(),0,0,'R');
    	$pdf->Cell(10,6,'',1,1,'R');
    	$pdf->Ln(2); #Separador
	} elseif($tiempoCompleto == 0){
		$pdf->SetXY($pos_01X,$pos_01Y);
        $pdf->SetFont(fonta(),normal(),fontaTamG());
    	$pdf->Cell(10,6,completoF(),0,0,'R');
    	$pdf->Cell(10,6,'',1,0,'C');
    	$pdf->Cell(10,6,'',0,0,'C');
    	$pdf->SetFont(fonta(),bold(),fontaTamG());
    	$pdf->Cell(10,6,parcialF(),0,0,'R');
    	$pdf->Cell(10,6,'X',1,1,'C',1);
    	$pdf->Ln(2); #Separador
    } else{
	   	$pdf->SetXY($pos_01X,$pos_01Y);
        $pdf->SetFont(fonta(),normal(),fontaTamG());
    	$pdf->Cell(10,6,completoF(),0,0,'R');
    	$pdf->Cell(10,6,'',1,0,'C');
    	$pdf->Cell(10,6,'',0,0,'C');
    	$pdf->Cell(10,6,parcialF(),0,0,'R');
    	$pdf->Cell(10,6,'',1,1,'C'); 
    	$pdf->Ln(2); #Separador 
    }

    $pdf->SetFont(fonta(),normal(),fontaTamG());
    $pdf->Cell(90,7,programAluF(),0,0,'L');
    $pdf->Cell(106,6,$progrMFormu,1,1,'L');
    $pdf->Ln(2); #Separador
    $pdf->Cell(44,7,enlaUA_F(),0,0,'L');
    $pdf->Cell(152,6,esiqie(),1,1,'L');
    $pdf->Ln(3); #Separador--------Periodo
    #$pdf->SetFont(fonta(),normal(),'8');
    #Periodo
    $pdf->Cell(24,6,periodoF(),0,1,'L');
    for($b = 0; $b <= 2; $b++){
        if ($b < 2) {
           $pdf->Cell(11,6,$arrPeriod[$b],1,0,'C');
        }elseif ($b == 2) {
           $pdf->Cell(11,6,$arrPeriod[$b],1,1,'C');
        }       
    }
    // $pdf->Cell(11,6,'A',1,0,'C');
    // $pdf->Cell(11,6,'2',1,0,'C');
    // $pdf->Cell(11,6,'3',1,1,'C');
    $pdf->Ln(3); #Separador
    $pdf->SetFont(fonta(),bold(),fontaTamG());
    $pdf->Cell(86,9,programaF(),0,0,'L');
    $pdf->SetFont(fonta(),normal(),fontaTamG());
    $pdf->Cell(47,9,reinscrpF(),1,0,'C');
    #Reinscripcion Semestre
    for ($c = 2; $c<= 10; $c++ ){ 
        if ($c<10) {
            if ($c == $semstrFormu) {
                $pdf->SetFont(fonta(),normal(),fontaTamEG());
                $startX = $pdf->GetX();
                $startY = $pdf->GetY();
                $pdf->Cell(7,9,'X',1,0,'C',1);           
                $pdf->SetXY($startX,$startY);
                $pdf->SetFont(fonta(),normal(),fontaTamG());
                $pdf->Cell(7,9,$c,0,0,'C',0);}
            else {
                $pdf->SetFont(fonta(),normal(),fontaTamG()); 
                $pdf->Cell(7,9,$c,1,0,'C'); }
        }      
        elseif ($c == 10) {
           if ($c == $semstrFormu) {
                $pdf->SetFont(fonta(),normal(),fontaTamG());
                $startX = $pdf->GetX();
                $startY = $pdf->GetY();       
                $pdf->Cell(7,9,$c,0,0,'C',1);
                $pdf->SetXY($startX,$startY);
                $pdf->SetFont(fonta(),normal(),fontaTamEG());
                $pdf->Cell(7,9,'X',1,1,'C',0);}
            else {
                $pdf->SetFont(fonta(),normal(),fontaTamG()); 
                $pdf->Cell(7,9,$c,1,1,'C'); }
        }
    }

    // $pdf->Cell(7,9,reinscr2F(),1,0,'C');
    // $pdf->Cell(7,9,reinscr3F(),1,0,'C');
    // $pdf->Cell(7,9,reinscr4F(),1,0,'C');
    // $pdf->Cell(7,9,reinscr5F(),1,0,'C');
    // $pdf->Cell(7,9,reinscr6F(),1,0,'C');
    // $pdf->Cell(7,9,reinscr7F(),1,0,'C');
    // $pdf->Cell(7,9,reinscr8F(),1,0,'C');
    // $pdf->Cell(7,9,reinscr9F(),1,0,'C');
    // $pdf->Cell(7,9,reinsc10F(),1,1,'C');

    $pdf->SetFont(fonta(),normal(),'7');
    $pdf->Cell(175,6,marcarF(),0,1,'R');
    $pdf->SetFont(fonta(),normal(),fontaTamG());
    $pdf->Cell(196,8,reqUAP_F(),0,0,'C');
    
    $pos_02X = 150;
    $pos_02Y = 161; 
    if($requiereUnidad == 1){
        $pdf->SetXY($pos_02X,$pos_02Y);
        $pdf->SetFont(fonta(),bold(),fontaTamG());
    	$pdf->Cell(10,6,siF(),0,0,'R');
    	$pdf->Cell(10,6,'X',1,0,'C',1);
    	$pdf->SetFont(fonta(),normal(),fontaTamG());
    	$pdf->Cell(10,6,noF(),0,0,'R');
    	$pdf->Cell(10,6,'',1,1,'R');
	} elseif($requiereUnidad == 0){
		$pdf->SetXY($pos_02X,$pos_02Y);
        $pdf->SetFont(fonta(),normal(),fontaTamG());
    	$pdf->Cell(10,6,siF(),0,0,'R');
    	$pdf->Cell(10,6,'',1,0,'C');
    	$pdf->SetFont(fonta(),bold(),fontaTamG());
    	$pdf->Cell(10,6,noF(),0,0,'R');
    	$pdf->Cell(10,6,'X',1,1,'C',1);
    } else{
	   	$pdf->SetXY($pos_02X,$pos_02Y);
        $pdf->SetFont(fonta(),normal(),fontaTamG());
    	$pdf->Cell(10,6,siF(),0,0,'R');
    	$pdf->Cell(10,6,'',1,0,'C');
    	$pdf->Cell(10,6,noF(),0,0,'R');
    	$pdf->Cell(10,6,'',1,1,'C');  
    }		
    $pdf->Ln(1); #Separador 

    #Datos--------------------UNIDADES DE APRENDIZAJE
    $pdf->SetFont(fonta(),normal(),fontaTamG());
    $pdf->SetY(170);
    $pdf->Cell(39,9,clave_F(),1,0,'C');
    $pdf->Cell(60,9,unidadA_F(),1,0,'C');
    $pdf->Cell(55,9,profesor_F(),1,0,'C');
    $pdf->Cell(42,9,lugaR_F(),1,1,'C');
    #Unidades de aprendizaje por datos
    $height_01 = 6;    
    $weight_01 = 4;
    $weight_02 = 5;
    $tama_01 = 60;
    $tama_02 = 55;
    $tama_03 = 42;
    $contador = 0;
    # Imprimiendo las Asignaturas
    $resultado_datos_asig_quien = llenaSusMaterias($idDataFormu);
    while($row = $resultado_datos_asig_quien->fetch_assoc()){
 		$asignaturas = utf8_decode($row['ASIGNATURA']);
        $profesorAsi = utf8_decode($row['full_name']);
        $lugarDeReal = utf8_decode($row['AcronimoEscuela']);
 		$asignaturasT = strlen($asignaturas);
        $contador = $contador + 1;
        if($asignaturasT >= 56){
        	$pdf->SetFont(fonta(),normal(),'7');
		    // $pdf->Cell(3,$height_01,"",1,0,'C');          // Activar unicamente para agregar a 10 recuadros
            // $pdf->Cell($weight_01,$height_01,$row['D0'],1,0,'C');  // Bajando todos los demas a 4 espacios en x
            $pdf->Cell($weight_01,$height_01,$row['D1'],1,0,'C');
            $pdf->Cell($weight_02,$height_01,$row['D2'],1,0,'C');
		    $pdf->Cell($weight_02,$height_01,$row['D3'],1,0,'C');
		    $pdf->Cell($weight_02,$height_01,$row['D4'],1,0,'C');
		    $pdf->Cell($weight_02,$height_01,$row['D5'],1,0,'C');
		    $pdf->Cell($weight_02,$height_01,$row['D6'],1,0,'C');
		    $pdf->Cell($weight_02,$height_01,$row['D7'],1,0,'C');
		    $pdf->Cell($weight_02,$height_01,$row['D8'],1,0,'C');
		    $pdf->SetFont(fonta(),normal(),'5');
                $startX = $pdf->GetX() + $tama_01;
                $startY = $pdf->GetY();
       		    $pdf->MultiCell($tama_01,3,$asignaturas, 1,'C',1);         
                $pdf->SetXY($startX,$startY);
                $pdf->Cell($tama_02,6,$profesorAsi, 1 ,0,'C',1);
                $pdf->SetFont(fonta(),normal(),'7');
                $pdf->Cell($tama_03,6,$lugarDeReal, 1 ,1,'C',0);

        }elseif($asignaturasT < 56 && $asignaturasT > 1){
        	$pdf->SetFont(fonta(),normal(),'7');
		    // $pdf->Cell(3,$height_01,"",1,0,'C');
            // $pdf->Cell($weight_01,$height_01,$row['D0'],1,0,'C');
            $pdf->Cell($weight_01,$height_01,$row['D1'],1,0,'C');
            $pdf->Cell($weight_02,$height_01,$row['D2'],1,0,'C');
		    $pdf->Cell($weight_02,$height_01,$row['D3'],1,0,'C');
		    $pdf->Cell($weight_02,$height_01,$row['D4'],1,0,'C');
		    $pdf->Cell($weight_02,$height_01,$row['D5'],1,0,'C');
		    $pdf->Cell($weight_02,$height_01,$row['D6'],1,0,'C');
		    $pdf->Cell($weight_02,$height_01,$row['D7'],1,0,'C');
		    $pdf->Cell($weight_02,$height_01,$row['D8'],1,0,'C');
		    $pdf->SetFont(fonta(),normal(),'5');
            #CELL largo, altoCelda, texto, borde, salto, alineación, fondo	
        	$pdf->Cell($tama_01,6,$asignaturas, 1 ,0,'C',1);
            $pdf->Cell($tama_02,6,$profesorAsi, 1 ,0,'C',1);
            $pdf->SetFont(fonta(),normal(),'7');
            $pdf->Cell($tama_03,6,$lugarDeReal, 1 ,1,'C',0);     
        }else{
        	$pdf->SetFont(fonta(),normal(),'7');
        	// $pdf->Cell(3,$height_01,'',1,0,'C');
            // $pdf->Cell($weight_01,$height_01,'',1,0,'C');
            $pdf->Cell($weight_01,$height_01,'',1,0,'C');
		    $pdf->Cell($weight_02,$height_01,'',1,0,'C');
		    $pdf->Cell($weight_02,$height_01,'',1,0,'C');
		    $pdf->Cell($weight_02,$height_01,'',1,0,'C');
		    $pdf->Cell($weight_02,$height_01,'',1,0,'C');
		    $pdf->Cell($weight_02,$height_01,'',1,0,'C');
		    $pdf->Cell($weight_02,$height_01,'',1,0,'C');
		    $pdf->Cell($weight_02,$height_01,'',1,0,'C');
		    $pdf->SetFont(fonta(),normal(),'5');	
        	$pdf->Cell($tama_01,6,'', 1 ,0,'C',1);
            $pdf->Cell($tama_02,6,'', 1 ,0,'C',1);
            $pdf->Cell($tama_03,6,'', 1 ,1,'C',1);
        }
 	}

    #Whitexicans
    $paro = 10 - $contador;
    for($i = 1; $i <= $paro; $i++){
        $pdf->SetFont(fonta(),normal(),'7');
        // $pdf->Cell(3,$height_01,'',1,0,'C');
        // $pdf->Cell($weight_01,$height_01,'',1,0,'C');
        $pdf->Cell($weight_01,$height_01,'',1,0,'C');
        $pdf->Cell($weight_02,$height_01,'',1,0,'C');
        $pdf->Cell($weight_02,$height_01,'',1,0,'C');
        $pdf->Cell($weight_02,$height_01,'',1,0,'C');
        $pdf->Cell($weight_02,$height_01,'',1,0,'C');
        $pdf->Cell($weight_02,$height_01,'',1,0,'C');
        $pdf->Cell($weight_02,$height_01,'',1,0,'C');
        $pdf->Cell($weight_02,$height_01,'',1,0,'C');
        $pdf->SetFont(fonta(),normal(),'5');    
        $pdf->Cell($tama_01,6,'', 1 ,0,'C',0);
        $pdf->Cell($tama_02,6,'', 1 ,0,'C',0);
        $pdf->Cell($tama_03,6,'', 1 ,1,'C',0);
    }
    // $pdf->Cell($tama_01,6,$contador, 1 ,1,'C',1); //Solo para saber el valor del contador

    $pdf->SetFont(fonta(),normal(),'7');
    $pdf->SetXY(10,243);
    $pdf->Cell(65,4,$nombreCompleto,0,0,'C');
    if ($intextFormuInt == 1 && $intextFormuExt == 2) {
        $pdf->Cell(65,4,$nombreAeComplt,0,0,'C');
    }elseif ($intextFormuInt == 1 && $intextFormuExt == 0) {
        $pdf->Cell(65,4,$nombreAiComplt,0,0,'C');
    }else{
    // $pdf->Cell(65,4,asesor_F(),0,0,'C');    
    $pdf->Cell(65,4,$numRegFormu,0,0,'C');    
    }
    $pdf->Cell(66,4,jefe_F(),0,0,'C');

    $crearPDF = false;
    $fehc = date("dmY-G-i-s");
    $fileN = 'formato_sip10_';
    $fileNa = $fileN . $numRegFormu . '_';
    $fileNam = $fileNa . $fehc;
    $fileName = $fileNam . ".pdf";
    if($crearPDF){  	
	 	$pdf->Output('D',$fileName,1);
    }else{
    $pdf->Output('I',$fileName,1);	
    }
  return 0;  
}

$iD = "1";
creaElFormatoSIP10($iD);
?>