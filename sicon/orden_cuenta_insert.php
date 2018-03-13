<?php
include("funciones/funciones.php");
include("configuracion.php");
$connection = pg_connect("host=$sql_host port=$puerto dbname=$sql_db user=$sql_usuario password=$sql_pass") or die("No se realiz&oacute la conexi&oacute;n Detalles: ".pg_last_error());

$cuenta = $_GET['cuenta'];
$direccion = $_GET['direccion'];
$nombre = $_GET['nombre'];
$tlf = $_GET['tlf'];
$id_contrato = $_GET['id_contrato'];
$id_operadora = $_GET['id_operadora'];
$id_actividad = $_GET['id_actividad'];
$descripcion = $_GET['descripcion'];
$id_cliente = $_GET['id_cliente'];
$id = $_GET['id'];

$hora = date('H:i:s');
$now = getdate(time());
$mes = array("","01","02","03","04","05","06","07","08","09","10","11","12");
$fecha = $now['year']."-".$mes[$now['mon']]."-".$now['mday'];


$sql = "SELECT max(id) from orden_trab";
$id_orden = resultadoIndividual($connection,$sql);
$id_orden = $id_orden + 1; 

if(resultadoIndividual($connection,"SELECT id FROM orden_trab WHERE id='".$id."'") == "")
{
	$sql = "INSERT INTO orden_trab (id,fecha,hora,id_operadora,id_actividad,descripcion,id_contrato) values ('".$id."','".$fecha."','".$hora."','".$id_operadora."','".$id_actividad."','".$descripcion."','".$id_contrato."')";
	$sql_tar = "INSERT INTO obra (id,punto_cuenta,nombre,direccion,tlf,id_cliente) values ('".$id."','".$cuenta."','".$nombre."','".$direccion."','".$tlf."','".$id_cliente."')";
	$msg = "Guardados";
}
else
{
	$sql = "UPDATE orden_trab SET id_contrato='$id_contrato',id_operadora='$id_operadora',id_actividad='$id_actividad',descripcion='$descripcion' WHERE id='$id'";
	$sql_tar = "UPDATE obra SET punto_cuenta='$cuenta',nombre='$nombre',direccion='$direccion',tlf='$tlf',id_cliente='$id_cliente' WHERE id='$id'";
	$msg = "Actualizados";
}
$r1 = @pg_query($connection,$sql);
$r2 = @pg_query($connection,$sql_tar);
if($r1 and $r2)
{
	echo "Datos $msg Satisfactoriamente!";
}
else
{
	echo "Ocurrio un Error Inesperado: ".pg_last_error().$sql_tar." ".$sql;
}
?>