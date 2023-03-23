<?php require("textos.php") ?>

<section id="seccion_2">
        <?php global $numFin; ?>

        <?php $numFin = 0; ?>
        <?php if (isset($_POST['button_asig'])) {
                $numFin = $_POST['n_mats'];
                echo "Materias: "; echo $numFin; echo "<br>";

                if  (($numFin > 0) && 
                    strlen($_POST['nombre']) > 0 && 
                    strlen($_POST['apellP']) > 0 && 
                    strlen($_POST['apellM']) > 0 ) {
                    $inserta = "INSERT INTO `datos`(`Id_datos`, `id_alumnos`, `alumtiC`, `alumunA`, `fecha_reg`, 
                                        `id_Programas`, `id_semestre`, `id_periodo`,`num_materias`) 
                                        VALUES ('$Id_datos','$id_alumnos','$alumntiC','$alumunA','$fecha_reg',
                                        '$id_Programas','$id_semestre','$id_periodo','$numFin');";

                    $resultado = mysqli_query($conex,$inserta);

                    if($resultado){
                    ?>
                    <h3 class="ok">¡ Te has inscrito correctamente !</h3>
                    <?php
                    } else{
                    ?>
                    <h3 class="bad">¡ Ups ha ocurrido un error !</h3>
                    <?php
                    }
                }
            
        }else {
            echo (nota_asig_F());
        }    
            $Tit03 = "ASIGNATURAS : ". $numFin; ?>

        <h2>TIRA DE MATERIAS</h2>
        <form id="form_02">
            <div id="TAB">
                <h3><?php echo $Tit03 ?></h3>
                <table border="1">
                    <thead>
                        <tr>
                            <th>ASIGNATURA</th>
                            <th>PROFESOR</th>
                            <th>LUGAR DE REALIZACIÓN</th>
                        </tr> 
                    </thead> 
                    <tbody>
                            <?php for($irow = 1; $irow <=$numFin; $irow++) { ?>
                            <tr>                
                                <td>
                                    <!-- ASIGNATURA -->
                                    <select name="label_asiGn[]" class="table-control" style="max-width:70%;">   
                                    <?php $row = mysqli_query($conex, $consulta_asignaturas) ?>
                                    <?php foreach ($row as $opciones): ?>
                                    <option value="<?php echo $opciones['IdAsign'];?>">
                                                    <?php echo $opciones['ASIGNATURA'];?>
                                                    <?php echo " - " ?>
                                                    <?php echo $opciones['CLAVE'];?>
                                    </option>
                                    <?php endforeach?>        
                                    </select>  
                                </td>
                                <td>
                                    <!-- PROFESOR -->
                                    <select name="label_proFs" class="table-control" style="max-width:70%;">   
                                    <?php $row = mysqli_query($conex, $consulta_profesores) ?>
                                    <?php foreach ($row as $opciones): ?>
                                    <option value="<?php echo  $opciones['Id_profesor']?>">
                                                   <?php echo  $opciones['full_name']?>
                                    </option> 
                                    <?php endforeach ?> 
                                    </select>   
                                </td> 
                                <td>
                                    <!-- LUGAR -->
                                    <select name="label_lugRl" class="table-control" style="max-width:70%;">   
                                    <?php $row = mysqli_query($conex, $consulta_escuelas) ?>
                                    <?php foreach ($row as $opciones): ?>
                                    <option value="<?php echo  $opciones['Id_Escuela']?>">
                                                   <?php echo  $opciones['AcronimoEscuela']?>
                                                   </option> 
                                    <?php endforeach ?> 
                                    </select>
                                </td>        
                            </tr> 
                            <?php } ?>  
                    </tbody>               
                </table>
            </div>
            <div id="BTN">
                <input type="submit" name="register" value="Generar">
            </div>
        </form>
    </section>