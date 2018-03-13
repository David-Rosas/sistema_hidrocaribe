<?php
include("funciones/funciones.php");
include("configuracion.php");
$connection = pg_connect("host=$sql_host port=$puerto dbname=$sql_db user=$sql_usuario password=$sql_pass") or die("No se realiz&oacute la conexi&oacute;n Detalles: ".pg_last_error());
$fecha = $_GET['fecha'];
$id = $_GET['id'];

$sql = "SELECT max(id) from tomas";
$max_id = resultadoIndividual($connection,$sql);
$max_id = $max_id + 1; 
if(resultadoIndividual($connection,"SELECT fecha FROM tomas WHERE id='$id'") == "")
{
	$sql = "INSERT INTO tomas (id,fecha,punto,hora,presion,caudal,eliminado) values ('$max_id','$fecha','$punto','$hora','$presion','$caudal',0)";
	$msg = "Guardados";
}
else
{
	$sql = "UPDATE tomas set fecha='$fecha' WHERE id='$id'";
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
