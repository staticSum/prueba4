<?php

class ControladorAlumnos
{
  public static function ctrRegistrarAlumno()
  {
    if (isset($_POST["nuevoNombres"])) {
      $tabla = "alumnos";
      $datos = array(
        "nombres" => $_POST["nuevoNombres"],
        "apellidoP" => $_POST["nuevoApellidoP"],
        "apellidoM" => $_POST["nuevoApellidoM"]
      );

      $respuesta =  ModeloAlumnos::mdlRegistarAlumno($tabla, $datos);
      var_dump($respuesta);
      echo '<script>alert("si pasó!")</script>';
    }
  }

  public static function ctrMostrarAlumno($item, $valor)
  {
    $tabla = "alumnos";
    $respuesta = ModeloAlumnos::mdlMostrarAlumno($tabla, $item, $valor);
    //var_dump($respuesta);
    return $respuesta;
  }
}
?>