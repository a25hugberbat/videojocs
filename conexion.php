<?php
// Les dades de connexió són a config.php, que NO es puja a GitHub.
// Si no existeix, copia config.example.php amb el nom config.php i omple-la.
$config = require __DIR__ . "/config.php";

$mysqli = new mysqli($config["host"], $config["usuario"], $config["contrasenia"], $config["base_de_datos"]);
if ($mysqli->connect_errno) {
    echo "Falló la conexión a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
return $mysqli;
