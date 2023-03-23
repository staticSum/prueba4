<?php 
$inc = include("con_db.php");
if($inc){
	$consulta_alumnos = "SELECT `Id_Alumno`, `Nombre_al`, `Apellido_Paterno_al`, `Apellido_Materno_al`,
	`Edad_al`, `Genero`, `Fecha_de_Nacimiento_al`, `Email_Personal_al`, `Email_Alterno_al`,
	`Semestre_De_Inscripcion`, `Semestre_Actual`,`Tiempo_Completo_al`, `Tiempo_Parcial_al`,
	`id_Programa` FROM alumnos";
	// $consulta_alumnos_ini = "SELECT `Id_Alumno`, `Nombre_al`, `Apellido_Paterno_al`, `Apellido_Materno_al`,
	// `Email_Personal_al`, `Email_Alterno_al`,`Tiempo_Completo_al`, `Tiempo_Parcial_al` 
	// FROM alumnos";
	$consulta_asignaturas = "SELECT `IdAsign`, `CLAVE`, `D0`, `D1`, `D2`, `D3`, `D4`,
	`D5`, `D6`, `D7`, `D8`, ASIGNATURA FROM asignaturas";
	$consulta_claves = "SELECT `IdAsign`, `CLAVE`, `D0`, `D1`, `D2`, `D3`, `D4`,
	`D5`, `D6`, `D7`, `D8` FROM asignaturas";
	$consulta_datos = "SELECT alumnos.Id_Alumno, alumnos.Nombre_al, alumnos.Apellido_Paterno_al, 
	alumnos.Apellido_Materno_al, alumnos.Email_Personal_al, alumnos.Email_Alterno_al, programas.Id_Programas,
	programas.PROGRAMA, periodos.Id_Periodo_Ordenado, periodos.`NOM PERIODO`, 
	Id_datos, datos.id_alumnos, alumtiC, alumunA, fecha_reg, datos.id_Programas, id_semestre,
	id_periodo, asesor_Ext FROM datos
	JOIN programas ON programas.Id_Programas = datos.id_Programas
	JOIN periodos ON periodos.Id_Periodo_Ordenado = datos.id_periodo
	JOIN alumnos ON alumnos.Id_Alumno = datos.id_alumnos";
	$consulta_datos_asig = "SELECT asignaturas.IdAsign, asignaturas.D0, asignaturas.D1, asignaturas.D2, 
	asignaturas.D3, asignaturas.D4, asignaturas.D5, asignaturas.D6, asignaturas.D7, asignaturas.D8, 
	asignaturas.ASIGNATURA, profesores.Id_Profesor, CONCAT(profesores.Grado_Abr_prof, ' ',
	profesores.Nombre_prof,' ', profesores.`Apellido Paterno_prof`,' ', profesores.`Apellido Materno_prof`)
	full_name, escuelas.Id_Escuela, escuelas.AcronimoEscuela, datos.Id_datos, Id_datos_asignaturas, 
	datos_asignaturas.id_datos, id_Asign, id_prof_asig, id_escuelas FROM datos_asignaturas 
	JOIN asignaturas ON asignaturas.IdAsign = datos_asignaturas.id_Asign 
	JOIN escuelas ON escuelas.Id_Escuela = datos_asignaturas.id_escuelas 
	JOIN profesores ON profesores.Id_Profesor = datos_asignaturas.id_prof_asig 
	JOIN datos ON datos.Id_datos = datos_asignaturas.id_datos";
	# Descomentar para hacer pruebas
	// $consulta_datos_asig_b = "SELECT asignaturas.IdAsign, asignaturas.D0, asignaturas.D1, asignaturas.D2, 
	// asignaturas.D3, asignaturas.D4, asignaturas.D5, asignaturas.D6, asignaturas.D7, asignaturas.D8, 
	// asignaturas.ASIGNATURA, profesores.Id_Profesor, CONCAT(profesores.Grado_Abr_prof, ' ',
	// profesores.Nombre_prof,' ', profesores.`Apellido Paterno_prof`,' ', profesores.`Apellido Materno_prof`)
	// full_name, escuelas.Id_Escuela, escuelas.AcronimoEscuela, datos.Id_datos, Id_datos_asignaturas, 
	// datos_asignaturas.id_datos, id_Asign, id_prof_asig, id_escuelas FROM datos_asignaturas 
	// JOIN asignaturas ON asignaturas.IdAsign = datos_asignaturas.id_Asign 
	// JOIN escuelas ON escuelas.Id_Escuela = datos_asignaturas.id_escuelas 
	// JOIN profesores ON profesores.Id_Profesor = datos_asignaturas.id_prof_asig 
	// JOIN datos ON datos.Id_datos = datos_asignaturas.id_datos WHERE datos_asignaturas.id_datos = 1";
	$consulta_prof_asig = "SELECT * FROM profesores_asignaturas";
	$consulta_prof_asig_N = "SELECT profesores_asignaturas.id_profesores, Id_profesor, Grado_Abr_prof, 
	Nombre_prof, `Apellido Paterno_prof`, `Apellido Materno_prof`, 
	CONCAT(Grado_Abr_prof, ' ',Nombre_prof,' ',`Apellido Paterno_prof`,' ', `Apellido Materno_prof`) full_name 
	FROM profesores 
	INNER JOIN profesores_asignaturas ON profesores.Id_Profesor = profesores_asignaturas.id_profesores";
	$consulta_profesores = "SELECT Id_profesor, Grado_Abr_prof, Nombre_prof, 
	`Apellido Paterno_prof`, `Apellido Materno_prof`, CONCAT (Grado_Abr_prof, ' ',Nombre_prof, 
	' ',`Apellido Paterno_prof`,' ', `Apellido Materno_prof`) full_name FROM profesores
	ORDER BY Nombre_prof ASC";
	$consulta_escuelas = "SELECT Id_Escuela, NombreEscuela, AcronimoEscuela FROM escuelas";
	$consulta_programas = "SELECT Id_Programas, PROGRAMA, AcrominoProgamas FROM programas ORDER BY PROGRAMA DESC";
	$consulta_periodos = "SELECT Id_Periodo_Ordenado, `NOM PERIODO` FROM periodos";
	$consulta_periodos_last = "SELECT Id_Periodo_Ordenado FROM periodos ORDER by Id_Periodo_Ordenado DESC LIMIT 1";
	$consulta_semestres = "SELECT Id_Semestres, Numero_s, num_ord_semestres FROM semestres";

	$resultado_alumnos= mysqli_query($conex, $consulta_alumnos);
	$resultado_asignaturas= mysqli_query($conex, $consulta_asignaturas);
	$resultado_claves= mysqli_query($conex, $consulta_claves);
	$resultado_datos= mysqli_query($conex, $consulta_datos);
	$resultado_datos_asig= mysqli_query($conex, $consulta_datos_asig);
	// $resultado_datos_asig_b= mysqli_query($conex, $consulta_datos_asig_b);
	$resultado_datos_prof_asig= mysqli_query($conex, $consulta_prof_asig);
	$resultado_datos_prof_asigN= mysqli_query($conex, $consulta_prof_asig_N);
	$resultado_profesores= mysqli_query($conex, $consulta_profesores);
	$resultado_escuelas= mysqli_query($conex, $consulta_escuelas);
	$resultado_programas= mysqli_query($conex, $consulta_programas);
	$resultado_periodos_last= mysqli_query($conex, $consulta_periodos_last);
	$resultado_semestres= mysqli_query($conex, $consulta_semestres);
}
?>