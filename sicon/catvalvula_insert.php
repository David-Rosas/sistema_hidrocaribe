<?php
include("funciones/funciones.php");
include("configuracion.php");
$connection = pg_connect("host=$sql_host port=$puerto dbname=$sql_db user=$sql_usuario password=$sql_pass") or die("No se realiz&oacute la conexi&oacute;n Detalles: ".pg_last_error());
$nombre = $_GET['nombre'];
$sitio= $_GET['sitio'];
$id = $_GET['id'];

 
		$sql = "SELECT id FROM valvula where nombre='$sitio'";
		$tipo = resultadoIndividual($connection,$sql);

$sql = "SELECT max(id) from catvalvula";
$max_id = resultadoIndividual($connection,$sql);
$max_id = $max_id + 1; 
if(resultadoIndividual($connection,"SELECT nombre FROM catvalvula WHERE id='$id'") == "")
{
	$sql = "INSERT INTO catvalvula (id,nombre,nombre2,eliminado) values ('$max_id','$nombre','$sitio',0)";
	$sql1 = "INSERT INTO catval (idcatv,idval) values ('$max_id','$tipo')";
	$msg = "Guardados";
}
else
{
	$sql = "UPDATE catvalvula set nombre='$nombre' WHERE id='$id'";
	$msg = "Actualizados";
}
$resultado = @pg_query($connection,$sql);
$resultado1 = @pg_query($connection,$sql1);
if($resultado)
{
	echo "Datos $msg Satisfactoriamente!";
}
else
{
	echo "Ocurrio un Error Inesperado: ".pg_last_error();
}
?>