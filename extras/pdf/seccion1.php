<?php require('funcs.php') ?>
<?php include ('textosw.php') ?>

<section id="seccion_1"> 
        <?php global $numRg; ?>
        <?php global $aseIEpAl_text; ?>
        <?php global $aseintAl_text; ?>
        <?php global $aseextAl_text; ?>
        <?php global $identiAl_text; ?>
        <?php global $nombreAl_text; ?>
        <?php global $apellPAl_text; ?>
        <?php global $apellMAl_text; ?>
        <?php global $emailpAl_text; ?>
        <?php global $tiempCAl_text; ?>
        <?php global $tiempPAl_text; ?>
        <?php global $idProgAl_text; ?>
        <?php global $aseIEpAl_text; ?>
        <?php global $Id_datos; ?>
        <?php global $id_alumnos; ?>
        <?php global $alumntiC; ?>
        <?php global $alumunA; ?>
        <?php global $fecha_reg; ?>
        <?php global $id_Programas; ?>
        <?php global $id_semestre; ?>
        <?php global $id_periodo; ?>
        

        <h2>DATOS GENERALES</h2>
        <?php require("consuls.php");?>
        <form id="form_01" method="POST" autocomplete="off">
            <div id="DAT">
                
                <?php @$_SESSION['numReg'] = $_POST['numReg']; ?>
                <label for="numReg">No. de Registro: </label>        
                <input type="search" name="numReg" placeholder="A000000" maxlength="7" value="<?php echo $_SESSION['numReg'] ?? '' ?>"/><br>
                    
                <?php @$numRg = $_POST['numReg']; ?>
                <?php $idABuscar = "'". $numRg ."'"; ?>
                    <?php $resultado_alumnos_ini = buscarAlumnoInscrito($idABuscar); ?>
                    <?php while($traer = $resultado_alumnos_ini->fetch_assoc()){ ?>
                            <?php if (is_null($traer)) { ?>
                                <?php $nombreAl_text = strtoupper(noencon_F()); ?>
                                <?php $apellPAl_text = strtoupper(noencon_F()); ?>
                                <?php $apellMAl_text = strtoupper(noencon_F()); ?>
                                <?php $emailpAl_text = strtoupper(noencon_F()); ?>
                                <?php }else{ ?>
                                <?php $identiAl_text = strtoupper($traer['Id_Alumno']); ?>
                                <?php $nombreAl_text = strtoupper($traer['Nombre_al']); ?>
                                <?php $apellPAl_text = strtoupper($traer['Apellido_Paterno_al']); ?>
                                <?php $apellMAl_text = strtoupper($traer['Apellido_Materno_al']); ?>
                                <?php $emailpAl_text = $traer['Email_Personal_al']; ?>
                                <?php $tiempCAl_text = $traer['Tiempo_Completo_al']; ?>
                                <?php $tiempPAl_text = $traer['Tiempo_Parcial_al']; ?>   
                                <?php $idProgAl_text = $traer['id_Programa']; ?>   
                                <?php $aseIEpAl_text = $traer['asesor_Ext']; ?>
                                <?php }} ?>
                            <!-- Asesores -->
                            <?php if ($aseIEpAl_text == 1) { ?>
                            <?php $resultado_asesor_int = buscarAsesorInscrito($idABuscar,1); ?>
                            <?php $resultado_asesor_ext = buscarAsesorInscrito($idABuscar,2); ?> 
                                <?php while($traer = $resultado_asesor_int->fetch_assoc()){ ?>
                                <?php $aseintAl_text = strtoupper($traer['Nombre_Completo_ase']); ?>
                                <?php } ?>
                                <?php while($traer = $resultado_asesor_ext->fetch_assoc()){ ?>
                                <?php $aseextAl_text = strtoupper($traer['Nombre_Completo_ase']); ?>
                                <?php } ?>
                            <?php }elseif (is_null($aseIEpAl_text)) { ?>
                                <?php $aseintAl_text = strtoupper(noencon_F()); ?>
                                <?php $aseextAl_text = strtoupper(noencon_F()); ?>
                            <?php }else{ ?>
                            <?php $resultado_asesor_int = buscarAsesorInscrito($idABuscar,1); ?>
                                <?php while($traer = $resultado_asesor_int->fetch_assoc()){ ?>
                                <?php $aseintAl_text = strtoupper($traer['Nombre_Completo_ase']); ?>
                                <?php } ?>
                                <?php $aseextAl_text = strtoupper(noespec_F());?>
                                <?php } ?>

                <label name="boleta"><?php echo $numRg?></label><br>              
                <label for="nombre">Nombre Completo: </label>    
                <input type="text" name="nombre" placeholder="Nombre(s)"  value="<?php echo $nombreAl_text; ?>"/>
                <input type="text" name="apellP" placeholder="Apellido Paterno"  value="<?php echo $apellPAl_text; ?>"/>
                <input type="text" name="apellM" placeholder="Apellido Materno"  value="<?php echo $apellMAl_text; ?>"/><br>
                <label for="asesor">Asesor Interno: </label> 
                <input type="text" name="asesor" placeholder="Asesor" value="<?php echo $aseintAl_text; ?>"/><br>
                <label for="asesor">Asesor Externo: </label>
                <input type="text" name="asesor" placeholder="Asesor" value="<?php echo $aseextAl_text; ?>"/><br> 
                <!-- <input type="text" name="asesor" placeholder="Asesor"  value="<?php echo $traer['']; ?>"/><br> -->
                <input type="email" name="email" placeholder="email" value="<?php echo $emailpAl_text; ?>"/>      
                
            </div>
            <div id="SEL">
                <label for="SEL">Programa</label><br>
                <select name="label_progrm" class="form-control" style="max-width:30%;">
                    <?php $ejecutar = mysqli_query($conex, $consulta_programas) or die(mysqli_error($conex));?>
                    <?php foreach ($ejecutar as $opciones): ?>
                        <?php if ( $opciones['Id_Programas'] == $idProgAl_text){?>
                        <option value="<?php echo  $opciones['Id_Programas']?>" selected><?php echo $opciones['PROGRAMA']?></option> 
                        <?php }else{?>
                            <option value="<?php echo  $opciones['Id_Programas']?>"><?php echo  $opciones['PROGRAMA']?></option>  
                        <?php } ?>
                            
                    <?php endforeach ?>     
                    </select>
                <br>
                <label for="SEL">Reinscripción</label><br>
                <select name="label_numstr" class="form-control">
                    <?php $ejecutar = mysqli_query($conex, $consulta_semestres) or die(mysqli_error($conex));?>
                    <?php foreach ($ejecutar as $opciones): ?>
                    <option value="<?php echo  $opciones['Id_Semestres']?>"><?php echo  $opciones['Numero_s']?></option>    
                    <?php endforeach ?>     
                    </select>
                <br>
                <label for="SEL">Periodo</label><br>

                <?php $rowPeriodos = $resultado_periodos_last->fetch_assoc() ?>
                <?php $theLast = utf8_decode($rowPeriodos['Id_Periodo_Ordenado']) ?>
                <select name="label_period" class="form-control">
                    <?php $ejecutar = mysqli_query($conex, $consulta_periodos) or die(mysqli_error($conex));?>
                    <?php foreach ($ejecutar as $opciones): ?>
                    <?php if ( $opciones['Id_Periodo_Ordenado'] == $theLast){?>
                    <option value="<?php echo $opciones['Id_Periodo_Ordenado']?>" selected><?php echo  $opciones['NOM PERIODO']?></option> 
                    <?php }else{?>
                           <option value="<?php echo $opciones['Id_Periodo_Ordenado']?>"><?php echo  $opciones['NOM PERIODO']?></option>   
                    <?php } ?>
                    <?php endforeach ?>     
                    </select>
                <br>
            </div>
            <div id="ATC">
                <label for="ATC">Alumno de tiempo: </label>
                <!-- Tiempo Completo -->
                <?php if ($tiempCAl_text == 1) { ?> 
                <?php $valorCom = 1; ?>
                <!-- <?php echo $valorCom; ?>  -->
                   <label for="ATC"><input type="checkbox" name="cbCompple" value =$valorCom  checked>Completo</label>
                <?php }else{ ?>
                   <label for="ATC"><input type="checkbox" name="cbCompple" >Completo</label>
                <?php } ?>
                <!-- Tiempo Parcial -->
                <?php if ($tiempPAl_text == 1) { ?>
                <?php $valorPar = 2; ?>
                <!-- <?php echo $valorPar; ?>  --> 
                   <label for="ATC"><input type="checkbox" name="cbParcial" value =$valorPar checked>Parcial</label>
                <?php }else{ ?>
                   <label for="ATC"><input type="checkbox" name="cbParcial" >Parcial</label>
                <?php } ?>

            </div>
            <div id="RUA">
                <label for="RUA">Requiere una unidad de aprendizaje: </label>
                <label for="RUA"><input type="checkbox" name="cbSi" >Si</label>
                <label for="RUA"><input type="checkbox" name="cbNo" >No</label>
            </div>  
            <div id="ASI">
                <label for="ASI">¿Cuántas materias registrarás?</label>
                <input type="number" name="n_mats" id="nmats" min="1" max="10" placeholder ="1 a 10">
                <span class="validity"></span>
                <input type="submit" name="button_asig" value="Asignaturas">
            </div>
        </form>

    <label for="form_01">--------> Aquí Termina la sección 1</label><br>

    <!------------------------------------------------------------------------ Registro de Datos -->
    <?php $ultimo_registro = obtenElUltimoDeLaListaDatos();?>
    <?php while ( $ultimoDato = $ultimo_registro->fetch_assoc()) { ?>
          <?php $ultimo = $ultimoDato['ultimo']; ?>
    <?php } ?>
    <!-- <?php //print "Ultimo valor encontrado: $ultimo";?> -->
    <?php $elSiguiente = $ultimo + 1; ?>

    <?php if (is_null($identiAl_text)) {
        echo "Esta Vacio"; echo "<br>";
        }elseif (!(is_null($identiAl_text))) {
        echo "Contiene Datos"; echo "<br>"; 

                $Id_datos = $elSiguiente;
                $id_alumnos = $identiAl_text;
                if ($tiempCAl_text == 1 && $tiempPAl_text == 0) {
                    $alumntiC = $valorCom; //1 Tiempo Completo
                }elseif ($tiempCAl_text == 0 && $tiempPAl_text == 1) {
                    $alumntiC = $valorPar; //2 Tiempo Parcial
                }elseif ($tiempCAl_text == 0 && $tiempPAl_text == 0) {
                    $alumntiC = 0;
                }elseif ($tiempCAl_text == 1 && $tiempPAl_text == 1) {
                    $alumntiC = 0;
                }

                if (isset($_POST['cbSi']) == true && isset($_POST['cbNo']) == false) {
                   $alumunA = 1;
                }elseif (isset($_POST['cbSi']) == false && isset($_POST['cbNo']) == true) {
                    $alumunA = 0;
                }elseif (isset($_POST['cbSi']) == true && isset($_POST['cbNo']) == true) {
                    $alumunA = 0;
                }elseif (isset($_POST['cbSi']) == false && isset($_POST['cbNo']) == false) {
                    $alumunA = 0;
                }

                $fecha_reg = date("d/m/y");
                $id_Programas = $idProgAl_text;
                $id_semestre = trim($_POST['label_numstr']);
                $id_periodo = trim($_POST['label_period']);
            # code...

            echo "Id_datos: "; echo $Id_datos; echo "<br>";
            echo "id_alumnos: "; echo $id_alumnos; echo "<br>";
            echo "alumntiC: "; echo $alumntiC; echo "<br>";
            echo "alumunA: "; echo $alumunA; echo "<br>";
            echo "fecha_reg: "; echo $fecha_reg; echo "<br>";
            echo "id_Programas: "; echo $id_Programas; echo "<br>";
            echo "id_semestre: "; echo $id_semestre; echo "<br>";
            echo "id_periodo: "; echo $id_periodo; echo "<br>";

    } ?>    
</section>
