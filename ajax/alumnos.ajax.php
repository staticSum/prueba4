<?php
require_once "../controladores/alumnos.controlador.php";
require_once "../modelos/alumnos.modelo.php";


// class AjaxAlumnos {
//     public $Id_Alumno;
//     public function ajaxConsultarAlumno(){ 
//         $item = "Id_Alumno";
//         $valor = $this -> Id_Alumno;
//         $respuesta = ControladorAlumnos::ctrConsultarAlumno($item, $valor);
//         echo json_encode($respuesta);
// }
// }

// if(isset($_POST["idAlumno"])){
//     $consultar = new AjaxAlumnos();
//     $consultar -> Id_Alumno = $_POST["idAlumno"];
//     $consultar -> ajaxConsultarAlumno();
// }