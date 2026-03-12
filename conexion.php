<?php
$host = "localhost";
$usuario = "a25hugberbat_apiDAW";
$contrasenia = "zktzSR&{UxZ#-{9(";
$base_de_datos = "a25hugberbat_apiDAW";
$mysqli = new mysqli($host, $usuario, $contrasenia, $base_de_datos);
if ($mysqli->connect_errno) {
    echo "Falló la conexión a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
return $mysqli;