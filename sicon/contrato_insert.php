<?php
include("funciones/funciones.php");
include("configuracion.php");
$connection = pg_connect("host=$sql_host port=$puerto dbname=$sql_db user=$sql_usuario password=$sql_pass") or die("No se realiz&oacute la conexi&oacute;n Detalles: ".pg_last_error());
$nombre = $_GET['nombre'];
$id = $_GET['id'];

$sql = "SELECT max(id) from contrato";
$max_id = resultadoIndividual($connection,$sql);
$max_id = $max_id + 1; 
if(resultadoIndividual($connection,"SELECT nombre FROM contrato WHERE id='$id'") == "")
{
	$sql = "INSERT INTO contrato (id,nombre,eliminado) values ('$max_id','$nombre',0)";
	$msg = "Guardados";
}
else
{
	$sql = "UPDATE contrato set nombre='$nombre' WHERE id='$id'";
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