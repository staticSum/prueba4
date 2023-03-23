<?php

$server = "localhost";
$__user_= "root";
$__pdu__= "";
$__ndb__= "esiqiedatabase";
$conex = mysqli_connect($server,$__user_,$__pdu__,$__ndb__) or die(mysqli_error($conex));
mysqli_character_set_name($conex);
mysqli_set_charset($conex, "utf8");
?>
