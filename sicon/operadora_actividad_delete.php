<?php

include("configuracion.php");
$connection = pg_connect("host=$sql_host port=$puerto dbname=$sql_db user=$sql_usuario password=$sql_pass") or die("No se realiz&oacute la conexi&oacute;n Detalles: ".pg_last_error());
$id = $_GET['id'];

$id_array = split(",",$id);
$sql = "DELETE FROM operadora_actividad WHERE id_operadora='".$id_array[0]."' and id_actividad='".$id_array[1]."'";

$resultado = @pg_query($connection,$sql);
if($resultado)
{
	echo "Datos Eliminados Correctamente!";
}
else
{
	echo "Ocurrio un Error Inesperado: ".pg_last_error();
}
?>