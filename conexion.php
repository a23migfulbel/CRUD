<?php
$host = "localhost";
$usuario = "a23migfulbel_Juegos";
$contrasenia = "Juegos123456";
$base_de_datos = "a23migfulbel_Juegos";
$mysqli = new mysqli($host, $usuario, $contrasenia, $base_de_datos);
if ($mysqli->connect_errno) {
    echo "Falló la conexión a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
return $mysqli;
