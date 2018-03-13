<?php
include("configuracion.php");
$connection = pg_connect("host=$sql_host port=$puerto dbname=$sql_db user=$sql_usuario password=$sql_pass") or die("No se realiz&oacute la conexi&oacute;n Detalles: ".pg_last_error());

$id = $_GET['id'];
$hora = date('H:i:s');
$now = getdate(time());
$mes = array("","01","02","03","04","05","06","07","08","09","10","11","12");
$fecha = $now['year']."-".$mes[$now['mon']]."-".$now['mday'];

$sql = "INSERT INTO orden_finalizada (id,hora,fecha) values ('$id','$hora','$fecha')";

$resultado = @pg_query($connection,$sql);
if($resultado)
{
	echo "Trabajo Ejecutado Satisfactoriamente";
}
else
{
	echo "Ocurrio un Error Inesperado: ".pg_last_error().$sql;
}
?>