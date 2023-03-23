<?php
class ModeloAlumnos {

    static public function mdlRegistarAlumno($tabla, $datos) {
        $stmt = Conexion::conectar()-> prepare("INSERT INTO $tabla(nombres, apellidoP, apellidoM) VALUES (:nombres, :apellidoP, :apellidoM )");
        $stmt -> bindParam(":nombres", $datos["nombres"], PDO::PARAM_STR); //proteccion de variables para que no pasen directo
        $stmt -> bindParam(":apellidoP", $datos["apellidoP"], PDO::PARAM_STR);
        $stmt -> bindParam(":apellidoM", $datos["apellidoM"], PDO::PARAM_STR);   

if($stmt -> execute()){
return "ok";

}
else {
    return "error";
    var_dump($stmt);

}

//$stmt -> close(); //Cerrar la conexion
$stmt = null; // Vaciamos el statement

}

static public function mdlMostrarAlumno($tabla, $item, $valor){
    $stmt = Conexion::conectar() -> prepare("SELECT * FROM $tabla WHERE $item = :$item");

    $stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);
    if($stmt -> execute()){
        
    return $stmt -> fetch();
    //$stmt -> close(); //Cerrar la conexión
    $stmt = null; // Vaciamos el statement

    }
    else {
    print_r($stmt -> errorInfo());
   
}

        }

}