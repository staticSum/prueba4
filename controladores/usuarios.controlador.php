<?php
class ControladorUsuarios {

    public function ctrIngresoUsuario() {

        if(isset($_POST["ingUsuario"])){
        if(preg_match('/^[a-zA-Z0-9]+$/', $_POST["ingUsuario"]) && preg_match('/^[a-zA-Z0-9]+$/', $_POST["ingPassword"])) {
            $tabla = "usuarios";
            $item = "usuario";
            $valor = $_POST["ingUsuario"]; // para pasar valortes sin ser vistas por url
            //get si se aparecen por url
            $respuesta = ModeloUsuarios::mdlMostrarUsuarios($tabla, $item, $valor);
            // var_dump($respuesta); Debuguear pa
            // print_r($respuesta); 
            // var_dump($respuesta["usuario"]);
            // var_dump($respuesta["password"]);
            if(is_array($respuesta)){
            if($respuesta["usuario"] == $_POST["ingUsuario"] && $respuesta["password"] == $_POST["ingPassword"]){
                $_SESSION["iniciarSesion"] = "ok";
                echo '<div class="alert alert-success"><i class="fas fa-key"></i> Entrando...</div>';
                echo '<script> setTimeout( () => { window.location = "inicio";}, "1500");  </script>';   
            }
            else {
            // echo 'ni siquiera me valido';
            echo '<div class="alert alert-danger"><i class="fas fa-exclamation-triangle"></i> Error, vuelve a intentar.</div>';
                }
            }
        }
            else {
            // echo 'ni siquiera me valido';
            echo '<div class="alert alert-danger"><i class="fas fa-exclamation-triangle"></i> Tus datos son incorrectos.</div>';
                }
    }
        //Ingreso Usuario
    }
}

