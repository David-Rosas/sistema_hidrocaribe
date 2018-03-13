<?php
include("funciones/funciones.php");
include("configuracion.php");
$connection = pg_connect("host=$sql_host port=$puerto dbname=$sql_db user=$sql_usuario password=$sql_pass") or die("No se realiz&oacute la conexi&oacute;n Detalles: ".pg_last_error());
$usuario = $_GET['usuario'];
$clave = $_GET['clave'];
$id = $_GET['id'];
$tipo = $_GET['tipo'];

$cifrado = crc32(md5($clave));

$sql = "SELECT max(id) from acceso";
$max_id = resultadoIndividual($connection,$sql);
$max_id = $max_id + 1; 
if(resultadoIndividual($connection,"SELECT usuario FROM acceso WHERE id='$id'") == "")
{
	$sql = "INSERT INTO acceso (id,usuario,clave,tipo,eliminado) values ('$max_id','$usuario','$cifrado','$tipo',0)";
	$msg = "Guardados";
}
else
{
	$sql = "UPDATE acceso set usuario='$usuario', clave='$clave', tipo='$tipo' WHERE id='$id'";
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
