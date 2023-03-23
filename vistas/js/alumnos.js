$("#resultadoBusqueda").click(function(event){
 
    // event.preventDefault();
    let idAlumno = $("#buscador").val();
    // console.log(idAlumno);
    let datos = new FormData();
    datos.append("propiedadIdAlumno", idAlumno);
  
//    console.log(datos.getAll('Supervariable'));
$.ajax({
    url: "ajax/alumnos.ajax.php",
    method: "POST",
    data: datos,
    cache: false,
    contentType: false,
    processData: false,
    dataType: "json",
    success: function(respuesta){
        console.log(respuesta);
    }
});

});
