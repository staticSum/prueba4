<!-- Content Wrapper. Contains page content -->
<?php include("extras/principals.php");
if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') {
    $url = "https://";
} else
    $url = "http://";
// Agrega el nombre del dominio del hosting, ip,
$url .= $_SERVER['HTTP_HOST'];


// echo $url;
// echo '<br>';
//AGREGAS LA FUENTE DE LA SOLICITU DE LA URL
$url .= $_SERVER['REQUEST_URI'];
// echo $url;
$query = parse_url($url, PHP_URL_QUERY);
parse_str($query, $queryArray);
// echo "<br><em>idBoleta: " . $queryArray['idBoleta']. "</em><br>" 

?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Actualizar datos del Alumno</h1>
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

            <div class="row mb-2">
                <div class="col-12">
                    <form action="actualizarAlumno" method="POST">
                        <?php
                        if (isset($queryArray["idBoleta"])) {
                            $_GET["idBoleta"] = $queryArray["idBoleta"];
                            $item = "Id_Alumno";
                            $valor = $_GET["idBoleta"];
                            $es = siEsNumeroDeBoleta($valor);
                            $alumno = ControladorAlumnos::ctrMostrarAlumno($item, $valor);
                            unset($_GET["idBoleta"]);
                        } else {
                            // var_dump($_GET["idBoleta"]);
                            $item = "Id_Alumno";
                            $valor = @$_POST["buscador3"];
                            $es = siEsNumeroDeBoleta($valor);
                            $alumno = ControladorAlumnos::ctrMostrarAlumno($item, $valor);
                            //var_dump($alumno);
                        }
                        ?>
                        <!-- Aquí comienza la informacion -->
                        <input id="idalumno" idalumno="<?php if (isset($alumno) && $es === true) {
                                                            echo $alumno["Id_Alumno"];
                                                        }  ?>" hidden>

                        <div class="input-group">
                            <input type="search" class="form-control" placeholder="No. de Boleta" name="buscador3" value="<?php if ($alumno && $es === true) {
                                                                                                                                echo $alumno["Id_Alumno"];
                                                                                                                            } elseif (!$alumno && $es === false) {
                                                                                                                                echo "Dato incorrecto";
                                                                                                                                //echo "<script> Swal.fire({icon: 'error',title: 'Error...',text: 'Dato incorrecto!', footer:''}) </script>";
                                                                                                                            } elseif (!$alumno && $es === true) {
                                                                                                                                echo "Boleta incorrecta";
                                                                                                                                //echo "<script> Swal.fire({icon: 'error',title: 'Error...',text: 'Boleta incorrecta!', footer:''}) </script>";
                                                                                                                            }  ?>">
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                            </div>
                        </div>
                        <label for="Nombres">NOMBRE</label>
                        <div class="row mt-2">
                            <div class="col-3"><input type="text" class="form-control" placeholder="Nombre" name="mostrarNombreAlumno" id="mostrarNombreAlumno" value="<?php if ($alumno) {
                                                                                                                                                                            echo $alumno["Nombre_al"];
                                                                                                                                                                        }  ?>"></div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-3"><input type="text" class="form-control" placeholder="Apellido Paterno" name="mostrarApellidoPAlumno" id="mostrarApellidoPAlumno" value="<?php if ($alumno) {
                                                                                                                                                                                            echo $alumno["Apellido_Paterno_al"];
                                                                                                                                                                                        }  ?>"></div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-3"><input type="text" class="form-control" placeholder="Apellido Materno" name="mostrarApellidoMAlumno" id="mostrarApellidoMAlumno" value="<?php if ($alumno) {
                                                                                                                                                                                            echo $alumno["Apellido_Materno_al"];
                                                                                                                                                                                        }  ?>"></div>
                        </div>
                </div>

                <div name="domicilio" class="col-12 form-group">
                    <label for="Nombres">DOMICILIO</label>
                    <div class="row mt-2">
                        <div class="col-4"><input type="text" class="form-control" placeholder="Calle" name="mostrarCalleAlumno" id="mostrarCalleAlumno" value="<?php if ($alumno) {
                                                                                                                                                                    echo $alumno["Calle_al"];
                                                                                                                                                                }  ?>"></div>
                        <div class="col-1"><input type="text" class="form-control" placeholder="No. Int" name="mostrarNumIntAlumno" id="mostrarNumIntAlumno" value="<?php if ($alumno) {
                                                                                                                                                                        echo $alumno["Numero_INT_al"];
                                                                                                                                                                    }  ?>"></div>
                        <div class="col-1"><input type="text" class="form-control" placeholder="No. Ext" name="mostrarNumExtAlumno" id="mostrarNumExtAlumno" value="<?php if ($alumno) {
                                                                                                                                                                        echo $alumno["Numero_EXT_al"];
                                                                                                                                                                    }  ?>"></div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-4"><input type="text" class="form-control" placeholder="Colonia" name="mostrarColoniaAlumno" id="mostrarColoniaAlumno" value="<?php if ($alumno) {
                                                                                                                                                                            echo $alumno["Colonia_al"];
                                                                                                                                                                        }  ?>"></div>
                        <div class="col-2"><input type="text" class="form-control" placeholder="C.P." name="mostrarCPAlumno" id="mostrarCPAlumno" value="<?php if ($alumno) {
                                                                                                                                                                echo $alumno["Codigo_Postal_al"];
                                                                                                                                                            }  ?>"></div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-4"><input type="text" class="form-control" placeholder="Municipio" name="mostrarMunicipioAlumno" id="mostrarMunicipioAlumno" value="<?php if ($alumno) {
                                                                                                                                                                                echo $alumno["Municipio_al"];
                                                                                                                                                                            }  ?>"></div>
                        <div class="col-2"><input type="text" class="form-control" placeholder="Estado" name="mostrarEstadoAlumno" id="mostrarEstadoAlumno" value="<?php if ($alumno) {
                                                                                                                                                                        echo $alumno["EstadoAlumno"];
                                                                                                                                                                    }  ?>"></div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-6"><input type="text" class="form-control" placeholder="Ciudad" name="mostrarCiudadAlumno" id="mostrarCiudadAlumno" value="<?php if ($alumno) {
                                                                                                                                                                        echo $alumno["Ciudad_al"];
                                                                                                                                                                    }  ?>"></div>
                        <div class="col-6 d-flex justify-content-end">
                            <div class="col-3"><input type="text" class="form-control" placeholder="Genero" name="mostrarGeneroAlumno" id="mostrarGeneroAlumno" value="<?php if ($alumno) {
                                                                                                                                                                            echo $alumno["Genero"];
                                                                                                                                                                        }  ?>"></div>
                            <label for="mostrarEdadAlumno"> de </label>
                            <div class="col-3"><input type="text" class="form-control" placeholder="Edad" name="mostrarEdadAlumno" id="mostrarEdadAlumno" value="<?php if ($alumno) {
                                                                                                                                                                        echo $alumno["Edad_al"];
                                                                                                                                                                    }  ?>"></div>
                            <label for="mostrarEdadAlumno"> años, </label>
                            <div class="col-3"><input type="text" class="form-control" placeholder="Estado Civil" name="mostrarEstCivAlumno" id="mostrarEstCivAlumno" value="<?php if ($alumno) {
                                                                                                                                                                                    echo $alumno["Estado_Civil"];
                                                                                                                                                                                }  ?>"></div>
                        </div>
                    </div>
                </div>
                <div name="Columnas" class="col-12 form-group">
                    <hr align="left" noshade="noshade" size="2" width="100%" />
                    <!-- comienzo Fila 0 -->
                    <div class="row mt-2 d-flex justify-content-start">
                        <div class="col-12">
                            <div class="row ">
                                <div class="col-6">
                                    <div class="custom-control custom-checkbox">
                                        <input class="form-check-input" type="radio" id="customCheckboxCVU" <?php if (@$alumno['CVU_al'] == 1) {
                                                                                                                echo 'checked';
                                                                                                            } ?>>
                                        <label for="customCheckboxCVU" class="form-check-label">CVU</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input class="form-check-input" type="radio" id="customCheckboxCeE" <?php if (@$alumno['Certificado_Estudios_al'] == 1) {
                                                                                                                echo 'checked';
                                                                                                            } ?>>
                                        <label for="customCheckboxCeE" class="form-check-label">Certificado de Estudios</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input class="form-check-input" type="radio" id="customCheckboxTPr" <?php if (@$alumno['Titulo_Profesional_al'] == 1) {
                                                                                                                echo 'checked';
                                                                                                            } ?>>
                                        <label for="customCheckboxTPr" class="form-check-label">Título Profesional</label>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="custom-control custom-checkbox">
                                        <input class="form-check-input" type="radio" id="customCheckboxTC" <?php if (@$alumno['Tiempo_Completo_al'] == 1) {
                                                                                                                echo 'checked';
                                                                                                            } ?>>
                                        <label for="customCheckboxTC" class="form-check-label">Tiempo Completo</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input class="form-check-input" type="radio" id="customCheckboxTP" <?php if (@$alumno['Tiempo_Parcial_al'] == 1) {
                                                                                                                echo 'checked';
                                                                                                            } ?>>
                                        <label for="customCheckboxTP" class="form-check-label">Tiempo Parcial</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input class="form-check-input" type="radio" id="customCheckboxAEP" <?php if (@$alumno['Acta_de_Examen_Profesional_al'] == 1) {
                                                                                                                echo 'checked';
                                                                                                            } ?>>
                                        <label for="customCheckboxAEP" class="form-check-label">Acta de Examen Profesional</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- fin Fila 0 -->
                    <hr align="left" noshade="noshade" size="2" width="100%" />
                    <!-- comienzo Fila 1 -->
                    <div class="row mt-2">
                        <div class="col-6 ">
                            <div class="row">
                                <div class="col-4"><label for="mostrarFechaNacAlumno">Fecha de Nacimiento</label></div>
                                <div class="col-8"><input type="text" class="form-control" placeholder="Fecha de Nacimiento" name="mostrarFechaNacAlumno" id="mostrarFechaNacAlumno" value="<?php if ($alumno) {
                                                                                                                                                                                                echo $alumno["Fecha_de_Nacimiento_al"];
                                                                                                                                                                                            }  ?>"></div>
                            </div>
                        </div>
                        <div class="col-0"></div>
                        <div class="col-6 ">
                            <div class="row">
                                <div class="col-4"><label for="mostrarCURPAlumno">CURP</label></div>
                                <div class="col-8"><input type="text" class="form-control" placeholder="CURP" name="mostrarCURPAlumno" id="mostrarCURPAlumno" value="<?php if ($alumno) {
                                                                                                                                                                            echo $alumno["CURP_al"];
                                                                                                                                                                        }  ?>"></div>
                            </div>
                        </div>
                    </div><!-- fin Fila 1 -->
                    <!-- comienzo Fila 2 -->
                    <div class="row mt-2">
                        <div class="col-6 ">
                            <div class="row">
                                <div class="col-4"><label for="mostrarLugarNacAlumno">Lugar de Nacimiento</label></div>
                                <div class="col-8"><input type="text" class="form-control" placeholder="Lugar de Nacimmiento" name="mostrarLugarNacAlumno" id="mostrarLugarNacAlumno" value="<?php if ($alumno) {
                                                                                                                                                                                                    echo $alumno["Lugar_de_Nacimiento"];
                                                                                                                                                                                                }  ?>"></div>
                            </div>
                        </div>
                        <div class="col-0"></div>
                        <div class="col-6 ">
                            <div class="row">
                                <div class="col-4"><label for="mostrarRFCAlumno">RFC</label></div>
                                <div class="col-8"><input type="text" class="form-control" placeholder="RFC" name="mostrarRFCAlumno" id="mostrarRFCAlumno" value="<?php if ($alumno) {
                                                                                                                                                                        echo $alumno["RFC_al"];
                                                                                                                                                                    }  ?>"></div>
                            </div>
                        </div>
                    </div><!-- fin Fila 2 -->
                    <!-- comienzo Fila 3 -->
                    <div class="row mt-2">
                        <div class="col-6 ">
                            <div class="row">
                                <div class="col-4"><label for="mostrarLugarNacAlumno">Lugar de Nacimiento Op.</label></div>
                                <div class="col-8"><input type="text" class="form-control" placeholder="Lugar de Nacimiento Op." name="mostrarLugarNacAlumnoOp" id="mostrarLugarNacAlumnoOp" value="<?php if ($alumno) {
                                                                                                                                                                                                        echo $alumno["Lugar_de_Nacimiento_no_al"];
                                                                                                                                                                                                    }  ?>"></div>
                            </div>
                        </div>
                        <div class="col-0"></div>
                        <div class="col-6 ">
                            <div class="row">
                                <div class="col-4"><label for="mostrarEmailAlumno">Email Personal</label></div>
                                <div class="col-8"><input type="text" class="form-control" placeholder="Email 1" name="mostrarEmailAlumno" id="mostrarEmailAlumno" value="<?php if ($alumno) {
                                                                                                                                                                                echo $alumno["Email_Personal_al"];
                                                                                                                                                                            }  ?>"></div>
                            </div>
                        </div>
                    </div><!-- fin Fila 3 -->
                    <!-- comienzo Fila 4 -->
                    <div class="row mt-2">
                        <div class="col-6 ">
                            <div class="row">
                                <div class="col-4"><label for="mostrarNacionalidadAlumno">Nacionalidad</label></div>
                                <div class="col-8"><input type="text" class="form-control" placeholder="Nacionalidad" name="mostrarNacionalidadAlumno" id="mostrarNacionalidadAlumno" value="<?php if ($alumno) {
                                                                                                                                                                                                    echo $alumno["id_NacionalExtranjero"];
                                                                                                                                                                                                }  ?>"></div>
                            </div>
                        </div>
                        <div class="col-0"></div>
                        <div class="col-6 ">
                            <div class="row">
                                <div class="col-4"><label for="mostrarEmailAlterAlumno">Email Alternativo</label></div>
                                <div class="col-8"><input type="text" class="form-control" placeholder="Email 2" name="mostrarEmailAlterAlumno" id="mostrarEmailAlterAlumno" value="<?php if ($alumno) {
                                                                                                                                                                                        echo $alumno["Email_Alterno_al"];
                                                                                                                                                                                    }  ?>"></div>
                            </div>
                        </div>
                    </div><!-- fin Fila 4 -->
                    <!-- comienzo Fila 5 -->
                    <div class="row mt-2">
                        <div class="col-6 ">
                            <div class="row">
                                <div class="col-4"><label for="mostrarRefContAlumno">Referencia de Contacto</label></div>
                                <div class="col-8"><input type="text" class="form-control" placeholder="Referencia de Contacto" name="mostrarRefContAlumno" id="mostrarRefContAlumno" value="<?php if ($alumno) {
                                                                                                                                                                                                    echo $alumno["Referencia_De_Contacto_al"];
                                                                                                                                                                                                }  ?>"></div>
                            </div>
                        </div>
                        <div class="col-0"></div>
                        <div class="col-6 ">
                            <div class="row">
                                <div class="col-4"><label for="mostrarTelFijoAlumno">Teléfono Fijo</label></div>
                                <div class="col-8"><input type="text" class="form-control" placeholder="Teléfono Fijo" name="mostrarTelFijoAlumno" id="mostrarTelFijoAlumno" value="<?php if ($alumno) {
                                                                                                                                                                                        echo $alumno["Telefono_Fijo_al"];
                                                                                                                                                                                    }  ?>"></div>
                            </div>
                        </div>
                    </div><!-- fin Fila 5 -->
                    <!-- comienzo Fila 6 -->
                    <div class="row mt-2">
                        <div class="col-6 ">
                            <div class="row">
                                <div class="col-4"><label for="mostrarNumSegSocialAlumno">Número de Seguro Social</label></div>
                                <div class="col-8"><input type="text" class="form-control" placeholder="Número de Seguro Social" name="mostrarNumSegSocialAlumno" id="mostrarNumSegSocialAlumno" value="<?php if ($alumno) {
                                                                                                                                                                                                            echo $alumno["Num_Seg_Social_al"];
                                                                                                                                                                                                        }  ?>"></div>
                            </div>
                        </div>
                        <div class="col-0"></div>
                        <div class="col-6 ">
                            <div class="row">
                                <div class="col-4"><label for="mostrarTelMobileAlumno">Celular</label></div>
                                <div class="col-8"><input type="text" class="form-control" placeholder="Celular" name="mostrarTelMobileAlumno" id="mostrarTelMobileAlumno" value="<?php if ($alumno) {
                                                                                                                                                                                        echo $alumno["Telefono_Movil_al"];
                                                                                                                                                                                    }  ?>"></div>
                            </div>
                        </div>
                    </div><!-- fin Fila 6 -->
                    <!-- comienzo Fila 8 -->
                    <div class="row mt-2">
                        <div class="col-6 ">
                            <div class="row">
                                <div class="col-4"><label for="mostrarAlergiasAlumno">Alergias</label></div>
                                <div class="col-8"><input type="text" class="form-control" placeholder="Alergias" name="mostrarAlergiasAlumno" id="mostrarAlergiasAlumno" value="<?php if ($alumno) {
                                                                                                                                                                                        echo $alumno["Alergias"];
                                                                                                                                                                                    }  ?>"></div>
                            </div>
                        </div>
                        <div class="col-0"></div>
                        <div class="col-6 ">
                            <div class="row">
                                <div class="col-4"><label for="mostrarSemestreActualAlumno">Semestre Actual</label></div>
                                <div class="col-8"><input type="text" class="form-control" placeholder="Semestre Actual" name="mostrarSemestreActualAlumno" id="mostrarSemestreActualAlumno" value="<?php if ($alumno) {
                                                                                                                                                                                                        echo $alumno["Semestre_Actual"];
                                                                                                                                                                                                    }  ?>"></div>
                            </div>
                        </div>
                    </div><!-- fin Fila 8 -->
                    <!-- comienzo Fila 9 -->
                    <div class="row mt-2">
                        <div class="col-6 ">
                            <div class="row">
                                <div class="col-4"><label for="mostrarEspAlergiasAlumno">Especificaciones de Alergias</label></div>
                                <div class="col-8"><input type="text" class="form-control" placeholder="Especificaciones de Alergias" name="mostrarEspAlergiasAlumno" id="mostrarEspAlergiasAlumno" value="<?php if ($alumno) {
                                                                                                                                                                                                                echo $alumno["Especificacion_de_Alergias_al"];
                                                                                                                                                                                                            }  ?>"></div>
                            </div>
                        </div>
                        <div class="col-0"></div>
                        <div class="col-6 ">
                            <div class="row">
                                <div class="col-4"><label for="mostrarSemInscripcionAlumno">Semestre de Inscripción</label></div>
                                <div class="col-8"><input type="text" class="form-control" placeholder="Semestre de Inscripción" name="mostrarSemInscripcionAlumno" id="mostrarSemInscripcionAlumno" value="<?php if ($alumno) {
                                                                                                                                                                                                                echo $alumno["Semestre_De_Inscripcion"];
                                                                                                                                                                                                            }  ?>"></div>
                            </div>
                        </div>
                    </div><!-- fin Fila 9 -->
                    <!-- comienzo Fila 10 -->
                    <div class="row mt-2">
                        <div class="col-6 ">
                            <div class="row">
                                <div class="col-4"><label for="mostrarTipoSangreAlumno">Tipo de Sangre</label></div>
                                <div class="col-8"><input type="text" class="form-control" placeholder="Tipo de Sangre" name="mostrarTipoSangreAlumno" id="mostrarTipoSangreAlumno" value="<?php if ($alumno) {
                                                                                                                                                                                                echo $alumno["Tipo_de_Sangre_al"];
                                                                                                                                                                                            }  ?>"></div>
                            </div>
                        </div>
                        <div class="col-0"></div>
                        <div class="col-6 ">
                            <div class="row">
                                <div class="col-4"><label for="mostrarNumCVUAlumno">Número de CVU</label></div>
                                <div class="col-8"><input type="text" class="form-control" placeholder="Número de CVU" name="mostrarNumCVUAlumno" id="mostrarNumCVUAlumno" value="<?php if ($alumno) {
                                                                                                                                                                                        echo $alumno["No_CVU_al"];
                                                                                                                                                                                    }  ?>"></div>
                            </div>
                        </div>
                    </div><!-- fin Fila 10 -->
                    <!-- comienzo Fila 11 -->
                    <div class="row mt-2">
                        <div class="col-6 ">
                            <div class="row">
                                <div class="col-4"><label for="mostrarFactorRHAlumno">Factor RH</label></div>
                                <div class="col-8"><input type="text" class="form-control" placeholder="Factor RH" name="mostrarFactorRHAlumno" id="mostrarFactorRHAlumno" value="<?php if ($alumno) {
                                                                                                                                                                                        echo $alumno["Factor_RH_al"];
                                                                                                                                                                                    }  ?>"></div>
                            </div>
                        </div>
                        <div class="col-0"></div>
                        <div class="col-6 ">
                            <div class="row">
                                <div class="col-4"><label for="mostrarCedProfesionalAlumno">Número de Cédula Profesional</label></div>
                                <div class="col-8"><input type="text" class="form-control" placeholder="Número de Cédula Profesional" name="mostrarCedProfesionalAlumno" id="mostrarCedProfesionalAlumno" value="<?php if ($alumno) {
                                                                                                                                                                                                                        echo $alumno["No_Cedula_Profesional"];
                                                                                                                                                                                                                    }  ?>"></div>
                            </div>
                        </div>
                    </div><!-- fin Fila 11 -->
                    <!-- comienzo Fila 12 -->
                    <div class="row mt-2">
                        <div class="col-6 ">
                            <div class="row">
                                <div class="col-4"><label for="mostrarGradoEstudiosAlumno">Grado de Estudios</label></div>
                                <div class="col-8"><input type="text" class="form-control" placeholder="Grado de Estudios" name="mostrarGradoEstudiosAlumno" id="mostrarGradoEstudiosAlumno" value="<?php if ($alumno) {
                                                                                                                                                                                                        echo $alumno["Grado_de_Estudios"];
                                                                                                                                                                                                    }  ?>"></div>
                            </div>
                        </div>
                        <div class="col-0"></div>
                        <div class="col-6 ">
                            <div class="row">
                                <div class="col-4"><label for="mostrarFechaDictamenAlumno">Fecha de Dictamen de Admisión</label></div>
                                <div class="col-8"><input type="text" class="form-control" placeholder="Fecha del Dictamen" name="mostrarFechaDictamenAlumno" id="mostrarFechaDictamenAlumno" value="<?php if ($alumno) {
                                                                                                                                                                                                            echo $alumno["Fecha_Dictamen_Admision_al"];
                                                                                                                                                                                                        }  ?>"></div>
                            </div>
                        </div>
                    </div><!-- fin Fila 12 -->
                    <!-- comienzo Fila 13 -->
                    <div class="row mt-2">
                        <div class="col-6 ">
                            <div class="row">
                                <div class="col-4"><label for="mostrarInstProcedenciaAlumno">Institución de Procedencia</label></div>
                                <div class="col-8"><input type="text" class="form-control" placeholder="Institución de Procedencia" name="mostrarInstProcedenciaAlumno" id="mostrarInstProcedenciaAlumno" value="<?php if ($alumno) {
                                                                                                                                                                                                                        echo $alumno["Institucion_de_Procedencia_al"];
                                                                                                                                                                                                                    }  ?>"></div>
                            </div>
                        </div>
                        <div class="col-0"></div>
                        <div class="col-6 ">
                            <div class="row">
                                <div class="col-4"><label for="mostrarProgramaAlumno">Programa de Curso</label></div>
                                <div class="col-8"><input type="text" class="form-control" placeholder="Programa de Curso" name="mostrarProgramaAlumno" id="mostrarProgramaAlumno" value="<?php if ($alumno) {
                                                                                                                                                                                                echo $alumno["Programa_De_Curso_al"];
                                                                                                                                                                                            }  ?>"></div>
                            </div>
                        </div>
                    </div><!-- fin Fila 13 -->
                    <!-- comienzo Fila 14 -->
                    <div class="row mt-2">
                        <div class="col-6 ">
                            <div class="row">
                                <div class="col-4"><label for="mostrarEscProcedenciaAlumno">Escuela de Procedencia</label></div>
                                <div class="col-8"><input type="text" class="form-control" placeholder="Escuela de Procedencia" name="mostrarEscProcedenciaAlumno" id="mostrarEscProcedenciaAlumno" value="<?php if ($alumno) {
                                                                                                                                                                                                                echo $alumno["Escuela_de_Procedencia_al"];
                                                                                                                                                                                                            }  ?>"></div>
                            </div>
                        </div>
                        <div class="col-0"></div>
                        <div class="col-6 ">
                            <div class="row">
                                <div class="col-4"><label for="mostrarEstatusAlumno">Estatus</label></div>
                                <div class="col-8"><input type="text" class="form-control" placeholder="Estatus" name="mostrarEstatusAlumno" id="mostrarEstatusAlumno" value="<?php if ($alumno) {
                                                                                                                                                                                    echo $alumno["Alergias"];
                                                                                                                                                                                }  ?>"></div>
                            </div>
                        </div>
                    </div><!-- fin Fila 14 -->
                    <!-- comienzo Fila 15 -->
                    <div class="row mt-2">
                        <div class="col-6 ">
                            <div class="row">
                                <div class="col-4"><label for="mostrarCiudadEscuelaAlumno">Ciudad de Escuela</label></div>
                                <div class="col-8"><input type="text" class="form-control" placeholder="Ciudad de Escuela" name="mostrarCiudadEscuelaAlumno" id="mostrarCiudadEscuelaAlumno" value="<?php if ($alumno) {
                                                                                                                                                                                                        echo $alumno["Ciudad_Escuela_al"];
                                                                                                                                                                                                    }  ?>"></div>
                            </div>
                        </div>
                        <div class="col-0"></div>
                        <div class="col-6 ">
                            <div class="row">
                                <div class="col-4"><label for="mostrarInstituciónAlumno">Institución</label></div>
                                <div class="col-8"><input type="text" class="form-control" placeholder="Institución" name="mostrarInstituciónAlumno" id="mostrarInstituciónAlumno" value="<?php if ($alumno) {
                                                                                                                                                                                                echo $alumno["Institucion_al"];
                                                                                                                                                                                            }  ?>"></div>
                            </div>
                        </div>
                    </div><!-- fin Fila 15 -->
                    <!-- comienzo Fila 16 -->
                    <div class="row mt-2">
                        <div class="col-6 ">
                            <div class="row">
                                <div class="col-4"><label for="mostrarPaisEscuelaAlumno">Pais de Escuela</label></div>
                                <div class="col-8"><input type="text" class="form-control" placeholder="Pais de Escuela" name="mostrarPaisEscuelaAlumno" id="mostrarPaisEscuelaAlumno" value="<?php if ($alumno) {
                                                                                                                                                                                                    echo $alumno["Pais de Origen"];
                                                                                                                                                                                                }  ?>"></div>
                            </div>
                        </div>
                        <div class="col-0"></div>
                        <div class="col-6 ">
                            <div class="row">
                                <div class="col-4"><label for="mostrarReglamentoAlumno">Reglamento</label></div>
                                <div class="col-8"><input type="text" class="form-control" placeholder="Reglamento" name="mostrarReglamentoAlumno" id="mostrarReglamentoAlumno" value="<?php if ($alumno) {
                                                                                                                                                                                            echo $alumno["Reglamento"];
                                                                                                                                                                                        }  ?>"></div>
                            </div>
                        </div>
                    </div><!-- fin Fila 16 -->
                    <!-- comienzo Fila 7 -->
                    <div class="row mt-2">
                        <div class="col-6 ">
                            <div class="row">
                                <div class="col-4"><label for="mostrarOtroServMedicoAlumno">Otro Servicio Médico</label></div>
                                <div class="col-8"><input type="text" class="form-control" placeholder="Otro Servicio Médico" name="mostrarOtroServMedicoAlumno" id="mostrarOtroServMedicoAlumno" value="<?php if ($alumno) {
                                                                                                                                                                                                                echo $alumno["Otro_Servicio_Medico_al"];
                                                                                                                                                                                                            }  ?>"></div>
                            </div>
                        </div>
                        <div class="col-6 ">
                            <div class="row">
                                <div class="col-12 align-content-xl-end">
                                    <button type="button" class="btn btn-primary btn-lg btn-block">Actualizar</button>
                                </div>
                            </div>
                        </div>
                    </div><!-- fin Fila 7 -->
                </div>
                <!-- Aquí termina la informacion -->
                </form>

                <?php
                //  $alumno['nombre']<input name="idAlumno" class="col-12 form-group" value="">
                //  $vista()-> controlador($item, $valor) -> modelo($item, $valor) -> query ->
                //                                                                             |
                // $vista(array())   <-  controlador(array())  <-  modelo(fetch())      <- query <- |
                ?>

                <hr align="left" noshade="noshade" size="2" width="100%" />

            </div>
        </div>
    </div><!-- /.container-fluid -->

</div>
<!-- /.content-header -->
<!-- Main content -->
<div class="content">
    <div class="container">
        <div class="row">

        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->