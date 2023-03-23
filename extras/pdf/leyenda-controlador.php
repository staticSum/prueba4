<?php 
function cargaLeyendaAnual(){

$archivo = fopen("ext/leyendaAnual.txt", "r");
$leyenda = array();

$indice = 0;
while(!feof($archivo)){
	$traer = fgets($archivo);
	$leyenda[$indice] = $traer;
	// echo $leyenda[$indice];
	// echo $traer;
	$indice = $indice + 1;

 }

$respuesta = implode(" ", $leyenda);
return $respuesta;
fclose($archivo);
}

//$respuesta = cargaLeyendaAnual();
//echo $respuesta;
//print_r($respuesta);

?>