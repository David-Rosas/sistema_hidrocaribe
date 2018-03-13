<?php
// Datos conexión a la Base de datos (PostgreSQL)
$sql_host="localhost";  // Host, nombre del servidor o IP del servidor PostgreSQL.
$sql_usuario="postgres";        // Usuario de PostgreSQL
$sql_pass="12345";           // contraseña de PostgreSQL
$puerto = "5432";

$sql_db="db_control";     // Base de datos que se usará.
//$sql_tabla="usuario"; // Nombre de la tabla que contendrá los datos de los usuarios
$connection = pg_connect("host=$sql_host port=$puerto dbname=db_control user=$sql_usuario password=$sql_pass");
//Comenzamos la sesión

?>
