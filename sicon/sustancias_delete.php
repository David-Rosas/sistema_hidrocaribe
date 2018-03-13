<?php

include("configuracion.php");
$connection = pg_connect("host=$sql_host port=$puerto dbname=$sql_db user=$sql_usuario password=$sql_pass") or die("No se realiz&oacute la conexi&oacute;n Detalles: ".pg_last_error());
$id = $_GET['id'];

$sql = "UPDATE sustancias SET eliminado=1 WHERE id='$id'";

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