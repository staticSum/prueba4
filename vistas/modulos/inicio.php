<!-- Content Wrapper. Contains page content -->
<!-- <div class=" sticky-top content-wrapper"> -->
<!-- Main content -->
<?php include("extras/principals.php"); ?>
<div class="container-fluid buscador" id="hero-contenedor">
    <video class="bg-video animacionVideo" playsinline="playsinline" autoplay="autoplay" muted="muted" id="hero-video">
        <source src="vistas/KRTa/assets/mp4/bg5_c.mp4" type="video/mp4" />
    </video>
    <?php
    // /7comentarios receinte inicia
    // $es = siEsNumeroDeBoleta(@$_POST["buscador"]);
    // if (isset($_POST["buscador"]) && $es === true) {
    //     //$action = "consultarAlumno";
    //     $item = "Id_Alumno";
    //     $var = "consultarAlumno";
    //     $valor = @$_POST["buscador"];
    //     $alumno = ControladorAlumnos::ctrMostrarAlumno($item, $valor);

    //comentarios recientesterminal
    // echo ('<pre>');
    // var_dump($alumno);
    // echo ('</pre>');
    // }
    ?>

    <h4 class="tituloUno text-center">SEPI ESIQIE</h4>
    <section class="content">
        <!-- <h4 class="tituloUno text-center display-4">ESIQIE</h4> -->
        <form method="POST">
            <?php
            $item = "Id_Alumno";
            $valor = @$_POST["buscador"];
            $alumno = controladorAlumnos::ctrMostrarAlumno($item, $valor);
            ?>

            <!-- <div class="row mt-12"> -->
            <div class="col-md-12 ">
                <div class="row form-group input-group form-control-lg justify-content-md-center centrar-inicio">
                    <div class="col-6 input-group input-group-lg">
                        <div class="form-group form-control-lg">
                            <label>Acciones:</label>
                            <select class="selec2">
                                <option selected>Consultar Información del Alumno</option>
                                <option>Actualizar Información del Alumno</option>
                                <option>Generar Constancia</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row form-group input-group form-control-lg justify-content-md-center">
                    <div class=" col-6 input-group input-group-lg">
                        <input type="search" class="form-control form-control-lg" placeholder="Ingresa no de boleta" name="buscador" id="buscador">
                        <div class="input-group-append">
                            <button type="submit" class="btn btn-lg btn-default" id="resultadoBusqueda">
                                <i class="fa fa-search"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-md-center">
                    <div class="col-4 alerta">
                        <?php
                        if(!empty($_POST["buscador"])){
                            $es = siEsNumeroDeBoleta($_POST["buscador"]);
                            if (isset($_POST["buscador"]) && $es === true) {
                                //var_dump($alumno);
                                if ($alumno == false) {
                                    echo '<div class="alert alert-warning alert-dismissible fade show" role="alert"><strong>¡ Boleta no registrada ! </strong><button type="button" class="close" data-dismiss="alert" aria-label="Close">    <span aria-hidden="true">&times;</span></button></div>';        
                                    //echo "<script> Swal.fire({icon: 'error',title: 'Error...',text: 'Alumno no encontrado!', footer:''}) </script>";
                                }else {
                                    echo '<div class="alert alert alert-success alert-dismissible fade show" role="alert"><strong>¡ Es Correcta ! </strong> ... Redireccionando.<button type="button" class="close" data-dismiss="alert" aria-label="Close">    <span aria-hidden="true">&times;</span></button></div>';    
                                    echo '<script> window.location.href=  "http://portal.esiqie/consultarAlumno?idBoleta='.$_POST["buscador"].'" </script>';
                                    
                                }       
                            }elseif(!empty($_POST["buscador"]) && $es === false) { 
                                echo '<div class="alert alert-danger alert-dismissible fade show" role="alert"><strong>¡ Guacamoles ! </strong> ... El dato es incorrecto.<button type="button" class="close" data-dismiss="alert" aria-label="Close">    <span aria-hidden="true">&times;</span></button></div>'; 
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
            <!-- </div> -->
        </form>
    </section>
</div>
<!-- </div> -->