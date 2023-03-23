<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0"> Registro de Profesores</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="registroProfesores">Profesores</a></li>
                        <li class="breadcrumb-item"><a href="registroNuevoProfesor">Nuevo Profesor</a></li>
                        <li class="breadcrumb-item active"><a href="#">Actualizar Profesor</a></li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="card card-primary card-outline card-outline-tabs">
                        <div class="card-header p-0 border-bottom-0">
                            <ul class="nav nav-tabs" id="custom-tabs-four-tab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="custom-tabs-generales-tab" data-toggle="pill" href="#custom-tabs-generales" role="tab" aria-controls="custom-tabs-generales" aria-selected="true">Generales</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="custom-tabs-direccion-tab" data-toggle="pill" href="#custom-tabs-direccion" role="tab" aria-controls="custom-tabs-direccion" aria-selected="false">Específicos</a>
                                </li>
                            </ul>
                        </div>

                        <div class="card-body">
                            <div class="tab-content" id="custom-tabs-datosGenerales-tabContent">
                                <form role="form" method="get" action="registroAlumnos">
                                    <div class="tab-pane fade show active" id="custom-tabs-generales" role="tabpanel" aria-labelledby="custom-tabs-generales-tab"><!-- inicia tab pane Generales -->
                                        <div class="row mt-4">
                                            <div class="col-12 d-flex justify-content-end"><img src="vistas/AdminLTE/dist/img/user4-128x128.jpg" alt="" class="img img-thumbnail"></div>
                                            <div class="col-12 d-flex justify-content-end"><input type="file"></div>
                                            <div class="col-12 d-flex justify-content-end">
                                                <p>Peso máximo de 2MB</p>
                                            </div>
                                        </div>
                                        <div class="row mt-1"><!-- Vertical Steppers -->
                                            <div class="col-md-12"><!-- Stepers Wrapper -->
                                                <ul class="stepper stepper-vertical">
                                                    <div><!-- Primer Paso  -->
                                                        <li class="active">
                                                            <a href="#!">
                                                                <span class="circle">1</span>
                                                                <span class="label">Paso 1</span>
                                                            </a>
                                                        </li>
                                                        <div class="row mt-4"> <!--Inicia row0 -->
                                                            <div class="col-4"><input type="text" class="form-control" placeholder="No. de Registro" name="nuevoIdProfesor" id="nuevoIdProfesor" required="required"></div>
                                                        </div> <!--termina row0 -->
                                                        <div class="row mt-4"> <!--Inicia row1 -->
                                                            <div class="col-4"><input type="text" class="form-control" placeholder="Nombre(s)" name="nuevoNombresProf" id="nuevoNombresProf" required="required"></div>
                                                            <div class="col-4"><input type="text" class="form-control" placeholder="Apellido Paterno" name="nuevoApellidoPProf" id="nuevoApellidoPProf" required="required"></div>
                                                            <div class="col-4"><input type="text" class="form-control" placeholder="Apellido Materno" name="nuevoApellidoMProf" id="nuevoApellidoMProf" required="required"></div>
                                                        </div> <!--termina row1 -->
                                                        <div class="row mt-4"> <!--tinicia row2 -->
                                                            <div class="col-4"><input type="text" class="form-control" placeholder="Nombre Investigador" name="nuevoNombresInvestigador" id="nuevoNombresInvestigador" required="required"></div>
                                                            <div class="col-4">
                                                                <select type="select" class="form-control" placeholder="Genero" name="nuevoGeneroProfesor" id="nuevoGeneroProfesor" required="required">
                                                                    <option value="">---Selecciona un género---</option>
                                                                    <option value="h">Hombre</option>
                                                                    <option value="m">Mujer</option>
                                                                    <option value="ne">No especifica</option>
                                                                </select>
                                                            </div>                                               
                                                        </div> <!--termina row2 -->
                                                        <div class="row mt-4"> <!--Inicia row3 -->
                                                                <div class="col-4"><input type="text" class="form-control" placeholder="RFC" name="nuevoRFCProf" id="nuevoRFCProf" required="required"></div>
                                                            </div> <!--termina row3 -->
                                                        <div class="row mt-4"> <!--inicia row4 -->
                                                            <div class="col-4">
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend">
                                                                        <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                                                    </div><input type="text" class="form-control" placeholder="Email" name="nuevoEmailProf" id="nuevoEmailProf" required="required">
                                                                </div>
                                                            </div>
                                                            <div class="col-4">
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend">
                                                                        <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                                                    </div>
                                                                    <input type="text" class="form-control" placeholder="Email Alternativo" name="nuevoEmailAltProf" id="nuevoEmailAltProf">
                                                                </div>
                                                            </div>
                                                        </div><!--termina row4 -->
                                                        <div class="row mt-4"> <!--inicia row5 -->
                                                            <div class="col-4">
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend">
                                                                        <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                                                    </div>
                                                                    <input type="tel" class="form-control" placeholder="Teléfono fijo" name="nuevoTelFijoProf" id="nuevoTelFijoProf" required="required">
                                                                </div>
                                                            </div>
                                                            <div class="col-4">
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend">
                                                                        <span class="input-group-text"><i class="fas fa-mobile-alt"></i></span>
                                                                    </div>
                                                                    <input type="tel" class="form-control" placeholder="Extensión" name="nuevoExtensionTelProf" id="nuevoExtensionTelProf">
                                                                </div>
                                                            </div>
                                                        </div><!--termina row5 -->
                                                    </div>

                                                    <div><!-- Segundo Paso -->
                                                        <li class="active">
                                                            <a href="#!">
                                                                <span class="circle">2</span>
                                                                <span class="label">Paso 2</span>
                                                            </a>
                                                        </li>

                                                        <div class="row mt-4"> <!--inicia row6 -->
                                                            <div class="col-4"><input type="text" class="form-control" placeholder="COFFA" name="nuevoCoffaProf" id="nuevoCoffaProf"></div>
                                                            <div class="col-4"><input type="text" class="form-control" placeholder="COFFA Inicio" name="nuevoCoffaInicioProf" id="nuevoCoffaInicioProf"></div>
                                                            <div class="col-4"><input type="text" class="form-control" placeholder="COFFA Final" name="nuevoCoffaFinalProf" id="nuevoCoffaFinalProf"></div>
                                                        </div><!--termina row6 -->
                                                        <div class="row mt-4"> <!--inicia row7 -->
                                                            <div class="col-4"><input type="text" class="form-control" placeholder="Evidencia COFFA" name="nuevoEvidenciaCoffaProf" id="nuevoEvidenciaCoffaProf"></div>
                                                            <div class="col-8"><input type="text" class="form-control" placeholder="Ubicación" name="nuevoUbicaCoffaProf" id="nuevoUbicaCoffaProf"></div>
                                                        </div><!--termina row7 -->
                                                        <!-- Comienzo Button 2do paso -->
                                                        <div class="row mt-1">
                                                            <div class="col-md-12 text-right">
                                                                <button class="btn btn-primary btn-sm">Siguiente</button>
                                                            </div>
                                                        </div><!-- /Final Buttons Steppers 2do paso-->
                                                    </div>
                                                </ul><!-- /.Stepers Wrapper -->
                                            </div>
                                        </div>

                                    </div> <!-- termina tabpane Generales-->

                                    <!-- inicia tab pane Específicos -->
                                    <div class="tab-pane fade" id="custom-tabs-direccion" role="tabpanel" aria-labelledby="custom-tabs-direccion-tab">

                                        <div class="row mt-1"><!-- Vertical Steppers -->
                                            <div class="col-md-12"><!-- Stepers Wrapper -->
                                                <ul class="stepper stepper-vertical">
                                                    <div><!-- Tercer Paso -->
                                                        <li class="completed">
                                                            <a href="#!">
                                                                <span class="circle">3</span>
                                                                <span class="label">Paso 3</span>
                                                            </a>
                                                        </li>

                                                        <div class="row mt-4"> <!--inicia row8 -->
                                                            <div class="col-4"><input type="text" class="form-control" placeholder="Colegio Sepi" name="nuevoColegioSepiProf" id="nuevoColegioSepiProf"></div>
                                                            <div class="col-4"><input type="text" class="form-control" placeholder="Colegio Inicio" name="nuevoColegioIniProf" id="nuevoColegioIniProf"></div>
                                                            <div class="col-4"><input type="text" class="form-control" placeholder="Colegio Final" name="nuevoColegioFinProf" id="nuevoColegioFinProf"></div>
                                                        </div> <!--termina row8 -->
                                                        <div class="row mt-4"> <!--inicia row9 -->
                                                            <div class="col-4"><input type="text" class="form-control" placeholder="Archivo Físico" name="nuevoArchivoProf" id="nuevoArchivoProf"></div>
                                                            <div class="col-4"><input type="text" class="form-control" placeholder="Fué alumno PIFI" name="nuevoFuePIFIProf" id="nuevoFuePIFIProf"></div>
                                                            <div class="col-4"><input type="text" class="form-control" placeholder="Especialidad" name="nuevoEspecialidadProf" id="nuevoEspecialidadProf"></div>
                                                        </div> <!--termina row9 -->
                                                        <div class="row mt-4"> <!--inicia row10 -->
                                                            <div class="col-3"><input type="text" class="form-control" placeholder="Grado" name="nuevoGradoProf" id="nuevoGradoProf"></div>
                                                            <div class="col-3"><input type="text" class="form-control" placeholder="Grado Abr" name="nuevoGradoAbrProf" id="nuevoGradoAbrProf"></div>
                                                            <div class="col-3"><input type="text" class="form-control" placeholder="Evidencia de Grado" name="nuevoEvidenciaGradoProf" id="nuevoEvidenciaGradoProf"></div>
                                                            <div class="col-3"><input type="text" class="form-control" placeholder="Año de Grado" name="nuevoYearGradoProf" id="nuevoYearGradoProf"></div>
                                                        </div> <!--termina row10 -->
                                                        <div class="row mt-4"> <!--inicia row11 -->
                                                            <div class="col-3"><input type="text" class="form-control" placeholder="Núm. Interior" name="nuevoNumIntProf" id="nuevoNumIntProf"></div>
                                                            <div class="col-3"><input type="text" class="form-control" placeholder="Núm. Exterior" name="nuevoNumExtProf" id="nuevoNumExtProf"></div>
                                                        </div> <!--termina row11 -->
                                                    </div>

                                                    <div><!-- Cuarto Paso -->
                                                        <li class="active">
                                                            <a href="#!">
                                                                <span class="circle">4</span>
                                                                <span class="label">Paso 4</span>
                                                            </a>
                                                        </li>

                                                        <div class="col-12 d-flex justify-content-start"> <!--inicia row12 -->
                                                            <div class="custom-control custom-checkbox">
                                                                <input class="custom-control-input color-morado" type="checkbox" id="customCheckSNI">
                                                                <label for="customCheckSNI" class="custom-control-label"><i>Evidencia SNI</i></label>
                                                            </div>
                                                        </div><!--termina row12 -->
                                                        <div class="row mt-4"> <!--inicia row13 -->
                                                            <div class="col-3"><input type="text" class="form-control" placeholder="SNI" name="nuevoSniProf" id="nuevoSniProf"></div>
                                                            <div class="col-3"><input type="text" class="form-control" placeholder="SNI Inicio" name="nuevoSniInicioProf" id="nuevoSniInicioProf"></div>
                                                            <div class="col-3"><input type="text" class="form-control" placeholder="SNI Final" name="nuevoSniFinalProf" id="nuevoSniFinalProf"></div>
                                                            <div class="col-3"><input type="text" class="form-control" placeholder="Nivel SNI" name="nuevoNivelSniProf" id="nuevoNivelSniProf"></div>
                                                        </div><!--termina row13 -->
                                                        <div class="col-12 d-flex justify-content-start"> <!--inicia row14 -->
                                                            <div class="custom-control custom-checkbox">
                                                                <input class="custom-control-input color-morado" type="checkbox" id="customCheckEDI">
                                                                <label for="customCheckEDI" class="custom-control-label"><i>Evidencia EDI</i></label>
                                                            </div>
                                                        </div><!--termina row14 -->
                                                        <div class="row mt-4"> <!--inicia row15 -->
                                                            <div class="col-3"><input type="text" class="form-control" placeholder="EDI" name="nuevoEdiProf" id="nuevoEdiProf"></div>
                                                            <div class="col-3"><input type="text" class="form-control" placeholder="EDI Inicio" name="nuevoEdiInicioProf" id="nuevoEdiInicioProf"></div>
                                                            <div class="col-3"><input type="text" class="form-control" placeholder="EDI Final" name="nuevoEdiFinalProf" id="nuevoEdiFinalProf"></div>
                                                            <div class="col-3"><input type="text" class="form-control" placeholder="Nivel EDI" name="nuevoNivelEdiProf" id="nuevoNivelEdiProf"></div>
                                                        </div><!--termina row15 -->

                                                        <?php
                                                        $crearAlumno = new ControladorAlumnos();
                                                        $crearAlumno->ctrRegistrarAlumno();
                                                        echo "<script>alert('Ahora hace falta enviar a bbdd')</script>";
                                                        if (isset($_POST["nuevoNombres"])) {
                                                        }
                                                        ?>
                                                    </div>
                                                </ul><!-- /.Stepers Wrapper -->
                                            </div>
                                        </div>
                                        <div class="row mt-1"><!-- Comienzo Buttons Steppers -->
                                            <div class="col-md-12 text-right">
                                                <button class="btn btn-flat btn-sm">Cancelar</button>
                                                <button class="btn btn-primary btn-sm" type="submit">Registrar</button>
                                            </div>
                                        </div><!-- /Final Buttons Steppers Submit-->

                                    </div><!-- termina tab pane Específicos -->

                                </form>
                            </div>
                        </div>
                    </div> <!-- card-outline-tabs -->
                </div><!-- /.col-md-6 -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div><!-- /.content -->
</div><!-- /.content-wrapper -->

<!-- nuevoIdProfesor
nuevoNombresProf
nuevoApellidoPProf
nuevoApellidoMProf
nuevoNombresInvestigador
nuevoGeneroProfesor
nuevoRFCProf
nuevoEmailProf
nuevoEmailAltProf
nuevoTelFijoProf
nuevoExtensionTelProf

nuevoCoffaProf
nuevoCoffaInicioProf
nuevoCoffaFinalProf
nuevoEvidenciaCoffaProf
nuevoUbicaCoffaProf

nuevoColegioSepiProf
nuevoColegioIniProf
nuevoColegioFinProf
nuevoArchivoProf
nuevoFuePIFIProf
nuevoEspecialidadProf
nuevoGradoProf
nuevoGradoAbrProf
nuevoEvidenciaGradoProf
nuevoYearGradoProf
nuevoNumIntProf
nuevoNumExtProf

customCheckSNI
nuevoSniProf
nuevoSniInicioProf
nuevoSniFinalProf
nuevoNivelSniProf
customCheckEDI
nuevoEdiProf
nuevoEdiInicioProf
nuevoEdiFinalProf
nuevoNivelEdiProf -->