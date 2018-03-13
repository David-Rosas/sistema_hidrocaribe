<?php
include("funciones/funciones.php");
include("configuracion.php");
$connection = pg_connect("host=$sql_host port=$puerto dbname=$sql_db user=$sql_usuario password=$sql_pass") or die("No se realiz&oacute la conexi&oacute;n Detalles: ".pg_last_error());
$id = $_GET['id'];
$fecha = $_GET['fecha'];
$hora = $_GET['hora'];
$sitio = $_GET['sitio'];
$idc = $_GET['idc'];
$idc2 = $_GET['idc2'];
$observacion = $_GET['observacion'];
$fechaa = $_GET['fechaa'];
$horaa = $_GET['horaa'];
$atendido = $_GET['atendido'];

	$sql1="SELECT nombre from causa where id=$idc";
	$causa=resultadoIndividual($connection,$sql1);
	
	$sql2="SELECT nombre from causa2 where id=$idc2";
	$causa2=resultadoIndividual($connection,$sql2);

$sql = "SELECT max(id) from estaciones";
$max_id = resultadoIndividual($connection,$sql);
$max_id = $max_id + 1; 
if(resultadoIndividual($connection,"SELECT fecha FROM estaciones WHERE id='$id'") == "")
{
	$sql = "INSERT INTO estaciones (id,fecha,hora,sitio,causa,causa2,observacion,fechaa,horaa,atendido,eliminado) values ('$max_id','$fecha','$hora','$sitio','$causa','$causa2','$observacion','$fechaa','$horaa','$atendido',0)";
	$msg = "Guardados";
}
else
{
	$sql = "UPDATE estaciones set fechaa='$fechaa',horaa='$horaa',atendido='$atendido' WHERE id='$id'";
	$msg = "Actualizados";
}
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
