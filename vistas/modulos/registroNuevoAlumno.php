<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0"> Registro de Alumnos</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="registroAlumnos">Matricular Alumnos</a></li>
            <li class="breadcrumb-item"><a href="registroNuevoAlumno">Nuevo Alumno</a></li>
            <li class="breadcrumb-item active"><a href="consultarAlumno">Consultar</a></li>
            <li class="breadcrumb-item"><a href="actualizarAlumno">Actualizar</a></li>
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
                  <a class="nav-link active" id="custom-tabs-generales-tab" data-toggle="pill"
                    href="#custom-tabs-generales" role="tab" aria-controls="custom-tabs-generales"
                    aria-selected="true">Generales</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="custom-tabs-direccion-tab" data-toggle="pill" href="#custom-tabs-direccion"
                    role="tab" aria-controls="custom-tabs-direccion" aria-selected="false">Dirección</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="custom-tabs-referencias_m-tab" data-toggle="pill"
                    href="#custom-tabs-referencias_m" role="tab" aria-controls="custom-tabs-referencias_m"
                    aria-selected="false">Referencias M</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="custom-tabs-estudios-tab" data-toggle="pill" href="#custom-tabs-estudios"
                    role="tab" aria-controls="custom-tabs-estudios" aria-selected="false">Estudios</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="custom-tabs-actuales-tab" data-toggle="pill" href="#custom-tabs-actuales"
                    role="tab" aria-controls="custom-tabs-actuales" aria-selected="false">Actuales</a>
                </li>
              </ul>
            </div>

            <div class="card-body">
              <div class="tab-content" id="custom-tabs-datosGenerales-tabContent">
                <form role="form" method="get" action="registroAlumnos">
                  <div class="tab-pane fade show active" id="custom-tabs-generales" role="tabpanel"
                    aria-labelledby="custom-tabs-generales-tab"><!-- inicia tab pane Generales -->
                    <div class="row mt-4">
                      <div class="col-12 d-flex justify-content-end"><img
                          src="vistas/AdminLTE/dist/img/user1-128x128.jpg" alt="" class="img img-thumbnail"></div>
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
                              <div class="col-4"><input type="text" class="form-control" placeholder="No. de Boleta"
                                  name="nuevoRegistro" id="nuevoRegistro" required="required"></div>
                            </div> <!--termina row0 -->
                            <div class="row mt-4"> <!--Inicia row1 -->
                              <div class="col-4"><input type="text" class="form-control" placeholder="Nombre(s)"
                                  name="nuevoNombres" id="nuevoNombres" required="required"></div>
                              <div class="col-4"><input type="text" class="form-control" placeholder="Apellido Paterno"
                                  name="nuevoApellidoP" id="nuevoApellidoP" required="required"></div>
                              <div class="col-4"><input type="text" class="form-control" placeholder="Apellido Materno"
                                  name="nuevoApellidoM" id="nuevoApellidoM" required="required"></div>
                            </div> <!--termina row1 -->
                            <div class="row mt-4"> <!--tinicia row2 -->
                              <div class="col-4"><input type="date" class="form-control"
                                  placeholder="Fecha de Nacimiento" name="nuevoFechaNac" id="nuevoFechaNac"
                                  required="required"></div>
                              <div class="col-4"><input type="text" class="form-control" value="<?php echo "56"?>"
                                  name="nuevoEdadAlumno" id="nuevoEdadAlumno"></div>
                              <div class="col-4">
                                <select type="select" class="form-control" placeholder="Genero" name="nuevoGeneroAlumno"
                                  id="nuevoGeneroAlumno" required="required">
                                  <option value="">---Selecciona un género---</option>
                                  <option value="h">Hombre</option>
                                  <option value="m">Mujer</option>
                                  <option value="b">Binario</option>
                                  <option value="ne">No especifica</option>
                                </select>
                              </div>
                            </div> <!--termina row2 -->
                            <div class="row mt-4"> <!--inicia row3 -->
                              <div class="col-3"><select type="select" class="form-control" placeholder="Estado Civil"
                                  name="nuevoEstadoCivil" id="nuevoEstadoCivil">
                                  <option value="">---Selecciona un Estado Civil---</option>
                                  <option value="so">Soltero</option>
                                  <option value="sa">Soltera</option>
                                  <option value="co">Casado</option>
                                  <option value="ca">Casada</option>
                                  <option value="do">Divorciado</option>
                                  <option value="da">Divorciada</option>
                                  <option value="ne">No especifica</option>
                                </select></div>
                              <div class="col-3">
                                <select type="select" class="form-control" placeholder="Lugar de Nacimiento"
                                  name="nuevoLugarNac" id="nuevoLugarNac" required="required">
                                  <option value="">---Lugar de Nacimiento---</option>
                                  <option value="c">CDMX</option>
                                  <option value="e">Estado 2</option>
                                  <option value="e3">Estado 3</option>
                                  <option value="ne">No especifica</option>
                                </select>
                              </div>
                              <div class="col-3"><input type="text" class="form-control"
                                  placeholder="Lugar de Nacimiento Opcional" name="nuevoLugarNacOp"
                                  id="nuevoLugarNacOp"></div>
                              <div class="col-3">
                                <select type="select" class="form-control" placeholder="Nacionalidad"
                                  name="nuevoNacionalidad" id="nuevoNacionalidad">
                                  <option value="">---Nacionalidad---</option>
                                  <option value="ma">Mexican@</option>
                                  <option value="ex">Extranjer@</option>
                                  <option value="ne">No especifica</option>
                                </select>
                              </div>
                            </div><!--termina row3 -->

                          </div>

                          <div><!-- Segundo Paso -->
                            <li class="active">
                              <a href="#!">
                                <span class="circle">2</span>
                                <span class="label">Paso 2</span>
                              </a>
                            </li>

                            <div class="row mt-4"> <!--inicia row4 -->
                              <div class="col-6"><input type="text" class="form-control" placeholder="CURP"
                                  name="nuevoCURP" id="nuevoCURP" required="required"></div>
                              <div class="col-6"><input type="text" class="form-control" placeholder="RFC"
                                  name="nuevoRFC" id="nuevoRFC" required="required"></div>
                            </div><!--termina row4 -->
                            <div class="row mt-4"> <!--inicia row5 -->
                              <div class="col-3">
                                <div class="input-group">
                                  <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                  </div><input type="text" class="form-control" placeholder="Email" name="nuevoEmail"
                                    id="nuevoEmail" required="required">
                                </div>
                              </div>
                              <div class="col-3">
                                <div class="input-group">
                                  <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                  </div>
                                  <input type="text" class="form-control" placeholder="Email Alternativo"
                                    name="nuevoEmailAlt" id="nuevoEmailAlt">
                                </div>
                              </div>
                              <div class="col-3">
                                <div class="input-group">
                                  <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                  </div>
                                  <input type="tel" class="form-control" placeholder="Teléfono fijo" name="nuevoTelFijo"
                                    id="nuevoTelFijo" required="required">
                                </div>
                              </div>
                              <div class="col-3">
                                <div class="input-group">
                                  <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-mobile-alt"></i></span>
                                  </div>
                                  <input type="tel" class="form-control" placeholder="Télefono mobile"
                                    name="nuevoTelMobile" id="nuevoTelMobile">
                                </div>
                              </div>
                            </div><!--termina row5 -->
                            <div class="row m-2"> <!--inicia row6 -->
                              <div class="col-3"></div>
                              <div class="offset-10">
                                <div class="custom-control custom-checkbox">
                                  <input class="custom-control-input color-morado" type="checkbox"
                                    id="customCheckboxVisa">
                                  <label for="customCheckbox3" class="custom-control-label"><i>VISA</i></label>
                                </div>
                              </div>
                            </div><!--termina row6 -->
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
                  <!-- inicia tab pane direccion -->
                  <div class="tab-pane fade" id="custom-tabs-direccion" role="tabpanel"
                    aria-labelledby="custom-tabs-direccion-tab">

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

                            <div class="row mt-4"> <!--inicia row1 -->
                              <div class="col-4"><input type="text" class="form-control" placeholder="C.P."
                                  name="nuevoCPAlumno" id="nuevoCPAlumno"></div>
                              <div class="col-4"><input type="text" class="form-control" placeholder="Colonia"
                                  name="nuevoColonia" id="nuevoColonia"></div>
                              <div class="col-4"><input type="text" class="form-control" placeholder="Municipio"
                                  name="nuevoMunicipio" id="nuevoMunicipio"></div>
                            </div> <!--termina row1 -->
                            <div class="row mt-4"> <!--inicia row2 -->
                              <div class="col-4">
                                <select type="select" class="form-control" placeholder="Estado" name="nuevoEstado"
                                  id="nuevoEstado">
                                  <option value="">---Selecciona un Estado---</option>
                                  <option value="cd">CDMX</option>
                                  <option value="me">Edo. Mex</option>
                                  <option value="gu">Guadalajara</option>
                                  <option value="ne">No especifica</option>
                                </select>
                              </div>
                              <div class="col-4"><input type="text" class="form-control" placeholder="Ciudad"
                                  name="nuevoCiudad" id="nuevoCiudad"></div>
                              <div class="col-4"><input type="text" class="form-control" placeholder="Calle"
                                  name="nuevoCalle" id="nuevoCalle"></div>
                            </div><!--termina row2 -->
                            <div class="row mt-4"> <!--inicia row3 -->
                              <div class="col-4"><input type="text" class="form-control" placeholder="Núm. Interior"
                                  name="nuevoNumInt" id="nuevoNumInt"></div>
                              <div class="col-4"><input type="text" class="form-control" placeholder="Núm. Exterior"
                                  name="nuevoNumExt" id="nuevoNumExt"></div>
                            </div> <!--termina row3 -->
                         
                            <!-- Comienzo Button 3er paso -->
                            <div class="row mt-1">
                              <div class="col-md-12 text-right">
                                <button class="btn btn-flat btn-sm">Atrás</button>
                                <button class="btn btn-primary btn-sm">Siguiente</button>
                              </div>
                            </div><!-- /Final Buttons Steppers 3er paso-->
                          </div>
                        </ul><!-- /.Stepers Wrapper -->
                      </div>
                    </div>

                  </div><!-- termina tab pane direccion -->

                  <!-- inicia tab pane Referencia M -->
                  <div class="tab-pane fade" id="custom-tabs-referencias_m" role="tabpanel"
                    aria-labelledby="custom-tabs-referencias_m-tab">

                    <div class="row mt-1"><!-- Vertical Steppers -->
                      <div class="col-md-12"><!-- Stepers Wrapper -->
                        <ul class="stepper stepper-vertical">
                          <div><!-- Cuarto Paso -->
                            <li class="completed">
                              <a href="#!">
                                <span class="circle">4</span>
                                <span class="label">Paso 4</span>
                              </a>
                            </li>

                            <div class="row mt-4"> <!--inicia row1 -->
                              <div class="col-4"><input type="text" class="form-control"
                                  placeholder="Referencia de Contacto" name="nuevoRefContacto" id="nuevoRefContacto">
                              </div>
                              <div class="col-4"><input type="text" class="form-control"
                                  placeholder="Número de Seguro Social" name="nuevoNumSegSocial" id="nuevoNumSegSocial">
                              </div>
                              <div class="col-4"><input type="text" class="form-control"
                                  placeholder="Otro servicio Médico" name="nuevoServMedico" id="nuevoServMedico"></div>
                            </div> <!--termina row1 -->
                            <div class="row mt-4"><!--inicia row2 -->
                              <div class="col-4">
                                <select type="select" class="form-control" placeholder="Alergias" name="nuevoAlergias"
                                  id="nuevoAlergias">
                                  <option value="">---Selecciona una Alergia---</option>
                                  <option value="sp">Si presenta</option>
                                  <option value="np">No presenta</option>
                                  <option value="se">Sin Especificar</option>
                                </select>
                              </div>
                              <div class="col-4"><input type="text" class="form-control"
                                  placeholder="Especificaciones de Alergias" name="nuevoEspAlergias"
                                  id="nuevoEspAlergias"></div>
                              <div class="col-4"><input type="text" class="form-control" placeholder="Tipo de Sangre"
                                  name="nuevoTipoSangre" id="nuevoTipoSangre"></div>
                            </div> <!--termina row2 -->
                            <div class="row mt-4"><!--inicia row3 -->
                              <div class="col-4"><input type="text" class="form-control" placeholder="Factor RH"
                                  name="nuevoFactorRH" id="nuevoFactorRH"></div>
                              <div class="col-8"><input type="text" class="form-control"
                                  placeholder="Información Importante" name="nuevoInfImportante"
                                  id="nuevoInfImportante">
                              </div>
                            </div> <!--termina row3 -->
                            
                            <!-- Comienzo Button 4to paso -->
                            <div class="row mt-1">
                              <div class="col-md-12 text-right">
                                <button class="btn btn-flat btn-sm">Atrás</button>
                                <button class="btn btn-primary btn-sm">Siguiente</button>
                              </div>
                            </div><!-- /Final Buttons Steppers 4to paso-->
                          </div>
                        </ul><!-- /.Stepers Wrapper -->
                      </div>
                    </div>

                  </div><!-- termina tab pane Referencia M -->

                  <!-- inicia tab pane Estudios -->
                  <div class="tab-pane fade" id="custom-tabs-estudios" role="tabpanel"
                    aria-labelledby="custom-tabs-estudios-tab">

                    <div class="row mt-1"><!-- Vertical Steppers -->
                      <div class="col-md-12"><!-- Stepers Wrapper -->
                        <ul class="stepper stepper-vertical">
                          <div><!-- Quinto Paso -->
                            <li class="active">
                              <a href="#!">
                                <span class="circle">5</span>
                                <span class="label">Paso 5</span>
                              </a>
                            </li>

                            <div class="row mt-4"><!--inicia row1 -->
                              <div class="col-4"><input type="text" class="form-control" placeholder="Promedio"
                                  name="nuevoPromedio" id="nuevoPromedio"></div>
                              <div class="col-4">
                                <select type="select" class="form-control" placeholder="Grado de Estudios"
                                  name="nuevoGradoEstudios" id="nuevoGradoEstudios">
                                  <option value="">---Selecciona Grado de Estudios---</option>
                                  <option value="li">Licenciatura</option>
                                  <option value="ma">Maestria</option>
                                  <option value="se">Sin Especificar</option>
                                </select>
                              </div>
                              <div class="col-4"><input type="text" class="form-control"
                                  placeholder="Institución de Procedencia" name="nuevoInstProcedencia"
                                  id="nuevoInstProcedencia">
                              </div>
                            </div> <!--termina row1 -->
                            <div class="row mt-4"><!--inicia row2 -->
                              <div class="col-4"><input type="text" class="form-control"
                                  placeholder="Escuela de Procedencia" name="nuevoEscProcedencia"
                                  id="nuevoEscProcedencia">
                              </div>
                              <div class="col-4"><input type="text" class="form-control" placeholder="Ciudad de Escuela"
                                  name="nuevoCiudadEscuela" id="nuevoCiudadEscuela"></div>
                              <div class="col-4">
                                <select type="select" class="form-control" placeholder="Pais de Escuela"
                                  name="nuevoPaisEscuela" id="nuevoPaisEscuela">
                                  <option value="">---Selecciona Pais---</option>
                                  <option value="me">México</option>
                                  <option value="ar">Argentina</option>
                                  <option value="co">Colombia</option>
                                </select>
                              </div>
                            </div> <!--termina row2 -->
                            <div class="row mt-4"><!--inicia row3 -->
                              <div class="col-4 d-flex justify-content-start">
                                <div class="custom-control custom-checkbox">
                                  <input class="custom-control-input color-morado" type="checkbox" id="customCheckCVU">
                                  <label for="customCheckCVu" class="custom-control-label"><i>CVU</i></label>
                                </div>
                              </div>
                              <div class="col-4 d-flex justify-content-start">
                                <div class="custom-control custom-checkbox">
                                  <input class="custom-control-input color-morado" type="checkbox" id="customCheckCES">
                                  <label for="customCheckCEs" class="custom-control-label"><i>Certificado de
                                      Estudios</i></label>
                                </div>
                              </div>
                              <div class="col-4"><input type="text" class="form-control" placeholder="Numero de CVU"
                                  name="nuevoNumCVU" id="nuevoNumCVU"></div>
                            </div> <!--termina row3 -->
                            <div class="row mt-4"><!--inicia row4 -->
                              <div class="col-4 d-flex justify-content-start">
                                <div class="custom-control custom-checkbox">
                                  <input class="custom-control-input color-morado" type="checkbox" id="customCheckTPR">
                                  <label for="customCheckTPr" class="custom-control-label"><i>Título
                                      Profesional</i></label>
                                </div>
                              </div>
                              <div class="col-4 d-flex justify-content-start">
                                <div class="custom-control custom-checkbox">
                                  <input class="custom-control-input color-morado" type="checkbox" id="customCheckAEX">
                                  <label for="customCheckAEx" class="custom-control-label"><i>Acta de Exámen
                                      Profesional</i></label>
                                </div>
                              </div>
                              <div class="col-4"><input type="text" class="form-control"
                                  placeholder="Numero de Cédula Profesional" name="nuevoNumCedula" id="nuevoNumCedula">
                              </div>
                            </div> <!--termina row4 -->
                            <div class="row mt-4"><!--inicia row5 -->
                              <div class="col-4"><input type="text" class="form-control"
                                  placeholder="Fecha de dictámen de Admisión" name="nuevoFechaDictamen"
                                  id="nuevoFechaDictamen">
                              </div>
                              <div class="col-8">
                                <select type="select" class="form-control" placeholder="Programa de Curso"
                                  name="nuevoProgramaAlumno" id="nuevoProgramaAlumno">
                                  <option value="">---Selecciona Programa---</option>
                                  <option value="ma">Maestría</option>
                                  <option value="do">Doctorado</option>
                                  <option value="sn">Sin Especificar</option>
                                </select>
                              </div>
                            </div> <!--termina row5 -->
                        
                            <!-- Comienzo Button 5to paso -->
                            <div class="row mt-1">
                              <div class="col-md-12 text-right">
                                <button class="btn btn-flat btn-sm">Atrás</button>
                                <button class="btn btn-primary btn-sm">Siguiente</button>
                              </div>
                            </div><!-- /Final Buttons Steppers 5to paso-->
                          </div>
                        </ul><!-- /.Stepers Wrapper -->
                      </div>
                    </div>

                  </div><!-- termina tab pane Estudios-->

                  <!-- inicia tab pane Actuales -->
                  <div class="tab-pane fade" id="custom-tabs-actuales" role="tabpanel"
                    aria-labelledby="custom-tabs-actuales-tab">

                    <div class="row mt-1"><!-- Vertical Steppers -->
                      <div class="col-md-12"><!-- Stepers Wrapper -->
                        <ul class="stepper stepper-vertical">
                          <div><!-- Sexto Paso -->
                            <li class="active">
                              <a href="#!">
                                <span class="circle">6</span>
                                <span class="label">Paso 6</span>
                              </a>
                            </li>

                            <div class="row mt-4"><!--inicia row1 -->
                              <div class="col-4">
                                <select type="select" class="form-control" placeholder="Estado" name="nuevoEstadoAlumno"
                                  id="nuevoEstadoAlumno">
                                  <option value="">---Selecciona un Estado---</option>
                                  <option value="cd">CDMX</option>
                                  <option value="me">Edo. Mex</option>
                                  <option value="gu">Guadalajara</option>
                                  <option value="ne">No especifica</option>
                                </select>
                              </div>
                              <div class="col-4"><input type="text" class="form-control" placeholder="Institución"
                                  name="nuevoInstitucion" id="nuevoInstitucion"></div>
                              <div class="col-4">
                                <select type="select" class="form-control" placeholder="Semestre de Inscripción"
                                  name="nuevoSemestreAlumno" id="nuevoSemestreAlumno">
                                  <option value="">---Selecciona Semestre---</option>
                                  <option value="a2">A22</option>
                                  <option value="b2">B22</option>
                                  <option value="a3">A23</option>
                                  <option value="b3">B23</option>
                                </select>
                              </div>
                            </div> <!--termina row1 -->
                            <div class="row mt-4"><!--inicia row2 -->
                              <div class="col-4">
                                <select type="select" class="form-control" placeholder="Reglamento"
                                  name="nuevoReglamento" id="nuevoReglamento">
                                  <option value="">---Selecciona uno---</option>
                                  <option value="er">En Reglamento</option>
                                  <option value="fr">Fuera de Reglamento</option>
                                  <option value="ne">No especifica</option>
                                </select>
                              </div>
                              <div class="col-4"><input type="text" class="form-control" placeholder="Fecha de Ingreso"
                                  name="nuevoFechaDeIngreso" id="nuevoFechaDeIngreso"></div>
                              <div class="col-4">
                                <select type="select" class="form-control" placeholder="Perido de Actualización"
                                  name="nuevoPeriodoActual" id="nuevoPeriodoActual">
                                  <option value="">---Selecciona un Año---</option>
                                  <option value="a0">2020</option>
                                  <option value="a1">2021</option>
                                  <option value="a2">2022</option>
                                  <option value="a3">2023</option>
                                </select>
                              </div>
                            </div> <!--termina row2 -->
                            <div class="row mt-4"> <!-- inicia row3 -->
                              <div class="col-4 d-flex justify-content-end">
                                <div class="custom-control custom-checkbox">
                                  <input class="custom-control-input color-morado" type="checkbox" id="customCheckTC">
                                  <label for="customCheckTC" class="custom-control-label"><i>Tiempo Completo</i></label>
                                </div>
                              </div>
                              <div class="col-4 d-flex justify-content-end">
                                <div class="custom-control custom-checkbox">
                                  <input class="custom-control-input color-morado" type="checkbox" id="customCheckTP">
                                  <label for="customCheckCTP" class="custom-control-label"><i>Tiempo Parcial</i></label>
                                </div>

                              </div>
                              <?php
                              $crearAlumno = new ControladorAlumnos();
                              $crearAlumno->ctrRegistrarAlumno();
                              ?>

                            </div><!-- termina row3 -->

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

                  </div><!-- termina tab pane Actuales-->

                </form>
              </div>
            </div>
          </div> <!-- card-outline-tabs -->
        </div><!-- /.col-md-6 -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div><!-- /.content -->
</div><!-- /.content-wrapper -->


<!-- nuevoNombres
nuevoApellidoP
nuevoApellidoM
nuevoFechaNac
nuevoEdadAlumno
nuevoGeneroAlumno
nuevoEstadoCivil
nuevoLugarNac
nuevoLugarNacOp
nuevoNacionalidad
nuevoCURP
nuevoRFC
nuevoEmail
nuevoEmailAlt
nuevoTelFijo
nuevoTelMobile
customCheckboxVisa

nuevoCPAlumno
nuevoColonia
nuevoMunicipio
nuevoEstado
nuevoCiudad
nuevoCalle
nuevoNumInt
nuevoNumExt

nuevoRefContacto
nuevoNumSegSocial
nuevoServMedico
nuevoAlergias
nuevoEspAlergias
nuevoTipoSangre
nuevoFactorRH
nuevoInfImportante

nuevoPromedio
nuevoGradoEstudios
nuevoInstProcedencia
nuevoEscProcedencia
nuevoCiudadEscuela
nuevoPaisEscuela
customCheckCVU
customCheckCES
nuevoNumCVU
customCheckTPR
customCheckAEX
nuevoNumCedula
nuevoFechaDictamen
nuevoProgramaAlumno

nuevoEstadoAlumno
nuevoInstitucion
nuevoSemestreAlumno
nuevoReglamento
nuevoFechaDeIngreso
nuevoPeriodoActual
customCheckTC
customCheckTP -->
