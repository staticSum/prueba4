<?php

require_once "conexion.php";

class ModeloUsuarios {
    // Mostrar Usuarios
    static public function mdlMostrarUsuarios($tabla, $item, $valor) {
        $stmt = Conexion::conectar()-> prepare("SELECT * FROM $tabla WHERE $item = :$item");
        $stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);
        $stmt -> execute();
        return $stmt -> fetch();

    }
}