<?php
include("funciones/funciones.php");
include("configuracion.php");
$connection = pg_connect("host=$sql_host port=$puerto dbname=$sql_db user=$sql_usuario password=$sql_pass") or die("No se realiz&oacute la conexi&oacute;n Detalles: ".pg_last_error());
$fecha = $_GET['fecha'];
$id = $_GET['id'];
$hora = $_GET['hora'];
$sitio = $_GET['sitio'];
$tsustancias = $_GET['tsustancias'];
$cantidad = $_GET['cantidad'];
$nguia = $_GET['nguia'];
$recibido = $_GET['recibido'];
$observacion = $_GET['observacion'];
$empresa = $_GET['empresa'];
$autorizado = $_GET['autorizado'];
$fecha2 = $_GET['fecha2'];
$hora2 = $_GET['hora2'];
$tsitio = $_GET['tsitio'];
$cantidadt = $_GET['cantidadt'];
$novedad = $_GET['novedad'];


$sql = "SELECT max(id) from sustancias";
$max_id = resultadoIndividual($connection,$sql);
$max_id = $max_id + 1; 
if(resultadoIndividual($connection,"SELECT fecha FROM sustancias WHERE id='$id'") == "")
{
	$sql = "INSERT INTO sustancias (id,fecha,hora,sitio,tsustancias,cantidad,nguia,recibido,observacion,empresa,autorizado,fecha2,hora2,tsitio,cantidadt,novedad,eliminado) values ('$max_id','$fecha','$hora','$sitio','$tsustancias','$cantidad','$nguia','$recibido','$observacion','$empresa','$autorizado','$fecha2','$hora2','$tsitio','$cantidadt','$novedad',0)";
	$msg = "Guardados";
}
else
{
	$sql = "UPDATE sustancias set fecha2='$fecha2',hora2='$hora2',tsitio='$tsitio',cantidadt='$cantidadt',novedad='$novedad' WHERE id='$id'";
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
