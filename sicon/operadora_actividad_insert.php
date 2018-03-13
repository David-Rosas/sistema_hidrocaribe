<?php

include("configuracion.php");
$connection = pg_connect("host=$sql_host port=$puerto dbname=$sql_db user=$sql_usuario password=$sql_pass") or die("No se realiz&oacute la conexi&oacute;n Detalles: ".pg_last_error());
$id_operadora = $_GET['id_operadora'];
$id_actividad = $_GET['id_actividad'];

$sql = "INSERT INTO operadora_actividad (id_operadora,id_actividad) values ('$id_operadora','$id_actividad')";
$msg = "Guardados";

$resultado = @pg_query($connection,$sql);
if($resultado)
{
	echo "Datos $msg Satisfactoriamente!";
}
else
{
	echo "Ocurrio un Error Inesperado: ".pg_last_error();
}
?>