<?php
include("funciones/funciones.php");
include("configuracion.php");
$connection = pg_connect("host=$sql_host port=$puerto dbname=$sql_db user=$sql_usuario password=$sql_pass") or die("No se realiz&oacute la conexi&oacute;n Detalles: ".pg_last_error());
$id = $_GET['id'];
$fecha = $_GET['fecha'];
$punto = $_GET['punto'];
$hora = $_GET['hora'];
$presion = $_GET['presion'];
$hora1 = $_GET['hora1'];
$presion1 = $_GET['presion1'];
$hora2 = $_GET['hora2'];
$presion2 = $_GET['presion2'];

$sql = "SELECT max(id) from puntom";
$max_id = resultadoIndividual($connection,$sql);
$max_id = $max_id + 1; 
if(resultadoIndividual($connection,"SELECT fecha FROM puntom WHERE id='$id'") == "")
{
	$sql = "INSERT INTO puntom (id,fecha,punto,hora,presion,hora1,presion1,hora2,presion2,eliminado) values ('$max_id','$fecha','$punto','$hora','$presion','$hora1','$presion1','$hora2','$presion2',0)";
	$msg = "Guardados";
}
else
{
	$sql = "UPDATE puntom set hora1='$hora1',presion1='$presion1',hora2='$hora2',presion2='$presion2' WHERE id='$id'";
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
