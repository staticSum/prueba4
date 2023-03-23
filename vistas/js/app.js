
// BS-Stepper Init
document.addEventListener('DOMContentLoaded', function () {
  window.stepper = new Stepper(document.querySelector('.bs-stepper'))
})


// $('body').hasClass('.select2'){
//     $(function () {
//       $('.select2').select2()
//     });
//     let resultadoBusqueda = document.querySelector("#resultadoBusqueda");

//     resultadoBusqueda.addEventListener('click', mostrarResultadosbusqueda);

//     function mostrarResultadosbusqueda(e){
//         e.preventDefault();
//         window.location = "index.php?ruta=registroAlumnos";
//     }
    
//   }
// let contenido = '<div class="alert alert-danger alert-dismissible fade show" role="alert"><strong>No se puede buscar algo vacío! </strong> ... El dato no fué encontrado.<button type="button" class="close" data-dismiss="alert" aria-label="Close">    <span aria-hidden="true">&times;</span></button></div>';


// $("#resultadoBusqueda").on("click", function(e){
//   e.preventDefault();
//   let idBoleta = $("#buscador").val();
//   console.log(idBoleta);
//   if(idBoleta == null || idBoleta == '') {
//       $(".alerta").html(contenido);
//   }
//   else {
//     console.log(idBoleta);
//   window.location.href =  "http://portal.esiqie/consultarAlumno/?buscarBoleta=" + idBoleta;
// }
// });