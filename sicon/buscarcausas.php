<?php
include_once("configuracion.php");
$connection = pg_connect("host=$sql_host port=$puerto dbname=$sql_db user=$sql_usuario password=$sql_pass") or die("No se realiz&oacute la conexi&oacute;n Detalles: ".pg_last_error());
$id = $_GET['idc'];
$sql = "select idc2,o.nombre
from causas,causa2 as o
where idc='$id' and o.id=idc2 and o.eliminado=0";

$resultado= @pg_query($connection, $sql);
if($resultado)
{
	$i=0;
	while ($row = pg_fetch_row($resultado))
	{ 
		if($i!=0)
			echo "**";
		echo $row[0]."++".$row[1];
		$i++;
	}
}
?>