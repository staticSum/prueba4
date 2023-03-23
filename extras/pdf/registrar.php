<?php

include("con_db.php");
/*if($conex){
  echo "todo correcto";
   }*/
   if(isset($_POST['register'])){
      if(strlen($_POST['name']) > 0 && 
         strlen($_POST['firstLastname']) > 0 &&
         strlen($_POST['seconLastname']) > 0 &&
         strlen($_POST['numberRegistr']) > 0 &&
         strlen($_POST['email']) > 1 ){
          
               $name = trim($_POST['name']);
               $firstLastname = trim($_POST['firstLastname']);
               $seconLastname = trim($_POST['seconLastname']);
               $numberRegistr = trim($_POST['numberRegistr']);
               $email = trim($_POST['email']);
               $fechareg = date("d/m/y");
        
         $consulta = "INSERT INTO datos(nombre, apellidoP, apellidoM, numReg, email, fecha_reg) 
                      VALUES ('$name','$firstLastname','$seconLastname','$numberRegistr','$email','$fechareg')";

         $resultado = mysqli_query($conex,$consulta);

         if($resultado){
            ?>
            <h3 class="ok">¡Te has inscrito correctamente!</h3>
            <?php
         } else{
            ?>
            <h3 class="bad">¡ Ups ha ocurrido un error !</h3>
            <?php
         }
      }else {
         ?>
         <h3 class="bad">¡Porfavor complete los datos!</h3>
         <?php
      }
   }

?>