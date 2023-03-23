<?php
session_start();
?>

<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="vistas/img/logo-esiqie-rs.png" type="image/x-icon">
  <title>Sistema de Administracion - ESIQIE</title>
  <!-- CSS -->
  <!-- <link rel="stylesheet" href="vistas/css/estilo-login.css">
  <link rel="stylesheet" href="vistas/css/estilo-inicio.css">
  <link rel="stylesheet" href="vistas/css/estilo-generales.css">
  <link rel="stylesheet" href="vistas/KRTa/css/estilo-video.css">
  <link rel="stylesheet" href="vistas/css/estilo-footer.css">
  <link rel="stylesheet" href="vistas/css/estilo-preLoader.css"> -->
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Theme style -->
  <link rel="stylesheet" href="vistas/AdminLTE/plugins/bs-stepper/css/bs-stepper.min.css">
  <link rel="stylesheet" href="vistas/AdminLTE/plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="vistas/AdminLTE/dist/css/adminlte.min.css">
  <!--- MDB -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <link rel="stylesheet" href="../vistas/MDB/css/bootstrap.min.css">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="vistas/AdminLTE/plugins/fontawesome-free/css/all.min.css">
  <!-- Bootstrap Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
  <!-- KRTa -->
  <link rel="icon" type="image/x-icon" href="vistas/KRTa/assets/favicon.ico" />
  <!-- Mias -->
  <link rel="stylesheet" href="vistas/css/estilos.css">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <style>
    /* apply a natural box layout model to all elements, but allowing components to change */
    html {
      box-sizing: border-box;
    }

    *,
    *:before,
    *:after {
      box-sizing: inherit;
    }
  </style>

</head>


<?php
// $_SESSION["iniciarSesion"] = "ok";
if (isset($_SESSION["iniciarSesion"]) && $_SESSION["iniciarSesion"] == "ok") {

  echo ' <body class="hold-transition layout-top-nav"> <div class="wrapper">';
  include "modulos/encabezado.php";
  if (isset($_GET["ruta"])) {
    if (
      $_GET["ruta"] == "inicio" ||
      $_GET["ruta"] == "registroAlumnos" ||
      $_GET["ruta"] == "registroNuevoAlumno" ||
      $_GET["ruta"] == "registroNuevoProfesor" ||
      $_GET["ruta"] == "registroProfesores" ||
      $_GET["ruta"] == "registroMaterias" ||
      $_GET["ruta"] == "registroProgramas" ||
      $_GET["ruta"] == "consultarAlumno" ||
      $_GET["ruta"] == "actualizarAlumno" ||
      $_GET["ruta"] == "generarEstadisticos" ||
      $_GET["ruta"] == "generarConstancias" ||
      $_GET["ruta"] == "stepper" ||
      $_GET["ruta"] == "salir"

    ) {
      include "modulos/" . $_GET["ruta"] . ".php";
    } else {
      include "modulos/404.php";
    }
  }
  include "modulos/footer.php";
  echo '</div>';
} else {
  echo '<body class="hold-transition layout-top-nav login-page">';
  include "modulos/login.php";
}

?>
<!-- ./wrapper -->
<!-- REQUIRED SCRIPTS -->
<!-- JS -->
<script src="vistas\js\modals.js"></script>
<!-- jQuery -->
<script src="vistas/AdminLTE/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="vistas/AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="vistas/AdminLTE/plugins/bs-stepper/js/bs-stepper.js"></script>
<!-- stepper fin -->
<script src="vistas/AdminLTE/dist/js/adminlte.min.js"></script>
<script src="vistas/AdminLTE/plugins/select2/js/select2.full.min.js"></script>
<script src="vistas/js/app.js"></script>
<script src="vistas/js/alumnos.js"></script>
<script src="vistas/js/footer.js"></script>


<!-- AdminLTE for demo purposes -->
<!-- <script src="vistas/AdminLTE/dist/js/demo.js"></script> -->
<!-- <script type="text/javascript" src="vistas/MDB/js/popper.min.js"></script> -->
<!-- <script type="text/javascript" src="vistas/MDB/js/mdb.min.js"></script> -->
</body>
</html>