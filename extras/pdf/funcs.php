<?php 

function validarNombre($nombre, $apellidoPaterno, $apellidoMaterno){
	
    $nombreFormu = $nombre;
    $apellPFormu = $apellidoPaterno;
    $apellMFormu = $apellidoMaterno;
    $sp = " ";

	$nombreFormL = strlen($nombreFormu);
    $apellPFormL = strlen($apellPFormu);
    $apellMFormL = strlen($apellMFormu);
    $nombreFormA = substr($nombreFormu,0,1);
    $apellPFormA = substr($apellPFormu,0,1);
    $apellMFormA = substr($apellMFormu,0,1);
    $nombreFormB = strtolower(substr($nombreFormu,1,$nombreFormL));
    $apellPFormB = strtolower(substr($apellPFormu,1,$apellPFormL));
    $apellMFormB = strtolower(substr($apellMFormu,1,$apellMFormL));
    $nombreFormC = $nombreFormA.$nombreFormB;
    $apellPFormC = $apellPFormA.$apellPFormB;
    $apellMFormC = $apellMFormA.$apellMFormB;
    $nombreCompl = $nombreFormC.$sp.$apellPFormC.$sp.$apellMFormC; #Nombre

return $nombreCompl;
}

function validarAsesor($grado, $nombre, $apellidoPaterno, $apellidoMaterno){
    
    $gradoAFormu = $grado;
    $nombreFormu = $nombre;
    $apellPFormu = $apellidoPaterno;
    $apellMFormu = $apellidoMaterno;
    $sp = " ";
    
    $gradoAFormL = strlen($grado);
    $nombreFormL = strlen($nombreFormu);
    $apellPFormL = strlen($apellPFormu);
    $apellMFormL = strlen($apellMFormu);
    $gradoAFormA = substr($gradoAFormu,0,1);
    $nombreFormA = substr($nombreFormu,0,1);
    $apellPFormA = substr($apellPFormu,0,1);
    $apellMFormA = substr($apellMFormu,0,1);
    $gradoAFormB = strtolower(substr($gradoAFormu,1,$gradoAFormL));
    $nombreFormB = strtolower(substr($nombreFormu,1,$nombreFormL));
    $apellPFormB = strtolower(substr($apellPFormu,1,$apellPFormL));
    $apellMFormB = strtolower(substr($apellMFormu,1,$apellMFormL));
    $gradoAFormC = $gradoAFormA.$gradoAFormB;
    $nombreFormC = $nombreFormA.$nombreFormB;
    $apellPFormC = $apellPFormA.$apellPFormB;
    $apellMFormC = $apellMFormA.$apellMFormB;
    $nombreCompl = $gradoAFormC.$sp.$nombreFormC.$sp.$apellPFormC.$sp.$apellMFormC; #Nombre

return $nombreCompl;
}

function quienEsElAlumno($idABuscar){
include 'con_db.php';

    $consulta_datos_quien = "SELECT alumnos.Id_Alumno,alumnos.Nombre_al, alumnos.Apellido_Paterno_al, 
    alumnos.Apellido_Materno_al, alumnos.Email_Personal_al, alumnos.Email_Alterno_al, alumnos.asesor_Ext, 
    programas.Id_Programas, programas.PROGRAMA, periodos.Id_Periodo_Ordenado, 
    periodos.`NOM PERIODO`, Id_datos, datos.id_alumnos, alumtiC, alumunA, 
    fecha_reg, datos.id_Programas, id_semestre, id_periodo FROM datos
    JOIN programas ON programas.Id_Programas = datos.id_Programas
    JOIN periodos ON periodos.Id_Periodo_Ordenado = datos.id_periodo
    JOIN alumnos ON alumnos.Id_Alumno = datos.id_alumnos WHERE datos.Id_datos = $idABuscar";

    $resultado_datos_quien = mysqli_query($conex, $consulta_datos_quien);

return $resultado_datos_quien;
}

function quienEsElAsesor($idABuscar, $intExt){
include 'con_db.php';

    $cosulta_alumnos_asesores = "SELECT asesores.Id_Asesor, asesores.`Nombre_ase`, asesores.`Apellido Paterno_ase`, 
        asesores.`Apellido Materno_ase`, asesores.`Grado_Abr_ase`, `Id_alumn_asesor`, `id_alumno`, alumnos_asesores.`id_asesor`, 
        `InternoExterno`, `id_escuelas` 
        FROM `alumnos_asesores`
        JOIN asesores ON asesores.Id_Asesor = alumnos_asesores.id_asesor
        WHERE alumnos_asesores.id_alumno = $idABuscar
        AND `InternoExterno` = $intExt";

    $resultado_alumnos_asesores = mysqli_query($conex, $cosulta_alumnos_asesores);

return $resultado_alumnos_asesores;
}

function llenaSusMaterias($idDataFormu){
include 'con_db.php';

    $consulta_datos_ASIGNA = "SELECT asignaturas.IdAsign, asignaturas.D0, asignaturas.D1, asignaturas.D2, 
    asignaturas.D3, asignaturas.D4, asignaturas.D5, asignaturas.D6, asignaturas.D7, asignaturas.D8, 
    asignaturas.ASIGNATURA, profesores.Id_Profesor, CONCAT(profesores.Grado_Abr_prof, ' ',
    profesores.Nombre_prof,' ', profesores.`Apellido Paterno_prof`,' ', profesores.`Apellido Materno_prof`)
    full_name, escuelas.Id_Escuela, escuelas.AcronimoEscuela, datos.Id_datos, Id_datos_asignaturas, 
    datos_asignaturas.id_datos, id_Asign, id_prof_asig, id_escuelas FROM datos_asignaturas 
    JOIN asignaturas ON asignaturas.IdAsign = datos_asignaturas.id_Asign 
    JOIN escuelas ON escuelas.Id_Escuela = datos_asignaturas.id_escuelas 
    JOIN profesores ON profesores.Id_Profesor = datos_asignaturas.id_prof_asig 
    JOIN datos ON datos.Id_datos = datos_asignaturas.id_datos WHERE datos_asignaturas.id_datos = $idDataFormu";

    $resultado_datos_asig_quien = mysqli_query($conex, $consulta_datos_ASIGNA);

return $resultado_datos_asig_quien;
}

function buscarAlumnoInscrito($idABuscar){
include 'con_db.php';

    $consulta_alumnos_ini = "SELECT `Id_Alumno`, `Nombre_al`, `Apellido_Paterno_al`, `Apellido_Materno_al`,
    `Email_Personal_al`, `Email_Alterno_al`, `Tiempo_Completo_al`, `Tiempo_Parcial_al`, `id_Programa`, asesor_Ext
    FROM alumnos 
    WHERE Id_Alumno = $idABuscar";

    $resultado_alumnos_ini = mysqli_query($conex, $consulta_alumnos_ini);

return $resultado_alumnos_ini;
}

function buscarAsesorInscrito($idABuscar, $intExt){
include 'con_db.php';

    $consulta_asesor_ini = "SELECT `id_alumno`, `alumnos_asesores`.`id_asesor`, alumnos_asesores.InternoExterno,
    asesores.Id_Asesor, asesores.Nombre_Completo_ase 
    FROM `alumnos_asesores` JOIN asesores 
    ON asesores.Id_Asesor = alumnos_asesores.id_asesor 
    WHERE `id_alumno` = $idABuscar AND alumnos_asesores.InternoExterno = $intExt";

    $resultado_asesor_ini = mysqli_query($conex, $consulta_asesor_ini);

return $resultado_asesor_ini;
}

function obtenElUltimoDeLaListaDatos(){
include 'con_db.php';
    
    $consulta_ultimo_lista_datos = "SELECT MAX(`Id_datos`) ultimo FROM `datos`";

    $resultado_ultimo_lista_datos = mysqli_query($conex, $consulta_ultimo_lista_datos);

return $resultado_ultimo_lista_datos;
}

function registraDatosGenerales(){
include 'con_db.php';

}

function introduccionConstancia(){
include 'con_db.php';

    $consulta_datos_de_Alumno = "Hola";

return 0;
}

 ?>