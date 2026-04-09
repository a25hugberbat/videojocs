<?php
$mysqli = include_once "conexion.php";
$id = $_POST["id"];
$nombre = $_POST["nombre"];
$genere = $_POST["genere"];
$descripcion = $_POST["descripcion"];

$sentencia = $mysqli->prepare("UPDATE videojuegos SET nombre = ?, descripcion = ?, genere = ? WHERE id = ?");
$sentencia->bind_param("sssi", $nombre, $descripcion, $genere, $id);
$sentencia->execute();

header("Location: listar.php");
?>