<?php
function siEsNumeroDeBoleta($boleta){
	//$talla = "";
	
	$dispa = "";
	$c = 0;
	$cadena_de_texto = $boleta;
	$cadena_buscada1 = 'A';
	$cadena_buscada2 = 'B';

	$longitudCadena = strlen($cadena_de_texto);
	$posicion_coincidencia1 = strrpos($cadena_de_texto, $cadena_buscada1);
	$posicion_coincidencia2 = strrpos($cadena_de_texto, $cadena_buscada2);

	if ($longitudCadena == 7) {
		$talla="m";
		$es = FALSE;
		//echo ($talla);echo ('<br>');
		//echo ("Si pasas");echo ('<br>');
	//se puede hacer la comparacion con 'false' o 'true' y los comparadores '===' o '!=='
		if ($posicion_coincidencia1 === false && $posicion_coincidencia2 === false) {
			//echo "pero NO se ha encontrado ni A ni B"; 
			//echo ('<br>');
		} else {
			if ($posicion_coincidencia1 == 0 && $posicion_coincidencia2 === false) {
				//echo "Éxito!!! Esta en la posicion correcta:";echo ('<br>');
				//echo "Éxito!!! Se ha encontrado la palabra A en la posición: ".$posicion_coincidencia1;
				//echo ('<br>');
				$restante = substr($cadena_de_texto, -6);
				$arreglo = str_split($restante);
				foreach ($arreglo as $element) {
					if (is_numeric($element)) {
						//echo var_export($element, true) . " Si", PHP_EOL;echo ('<br>');
						$c = $c + 1;
					} else {
						//echo var_export($element, true) . " No", PHP_EOL;echo ('<br>');
					}
				}//echo ($c);echo ('<br>');
            	//var_dump($arreglo);
            	//echo ($restante);echo ('<br>');
			}elseif ($posicion_coincidencia1 === false && $posicion_coincidencia2 == 0) {
				//echo "Éxito!!! Esta en la posicion correcta:";echo ('<br>');
				//echo "Éxito!!! Se ha encontrado la palabra B en la posición: ".$posicion_coincidencia2;
				//echo ('<br>');
				$restante = substr($cadena_de_texto, -6);
				$arreglo = str_split($restante);
				foreach ($arreglo as $element) {
					if (is_numeric($element)) {
						//echo var_export($element, true) . " Si", PHP_EOL;echo ('<br>');
						$c = $c + 1;
					} else {
						//echo var_export($element, true) . " No", PHP_EOL;echo ('<br>');
					}
				}//echo ($c);echo ('<br>');
            	//var_dump($arreglo);
            	//echo ($restante);echo ('<br>');
			}
			else{
				//echo "Pero, Esta Mal";echo ('<br>');		
			}

            // echo "Éxito!!! Se ha encontrado la palabra buscada en la posición: ".$posicion_coincidencia1;
            // echo ('<br>');
            // echo "Éxito!!! Se ha encontrado la palabra buscada en la posición: ".$posicion_coincidencia2;
            // echo ('<br>');
		}

		//echo("Posc1:".$posicion_coincidencia1);
		//echo ('<br>');
		//echo("Posc2:".$posicion_coincidencia2);
		//echo ('<br>');
		if ($c == 6) {
			//$talla = "b";
			$es = TRUE;
			//echo($talla);
		}

	}elseif ($longitudCadena < 7) {
		//$talla = "s";
		$es = FALSE;
		//echo ($talla);echo ('<br>');
	}elseif ($longitudCadena > 7) {
		//$talla = "g";
		$es = FALSE;
		//echo ($talla);echo ('<br>');
	}

return ($es);
}
?>