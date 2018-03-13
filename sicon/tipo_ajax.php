<?php
include("funciones/funciones.php");
include("configuracion.php");
$connection = pg_connect("host=$sql_host port=$puerto dbname=$sql_db user=$sql_usuario password=$sql_pass") or die("No se realiz&oacute la conexi&oacute;n Detalles: ".pg_last_error());

$id = $_GET['id'];

$sql = "SELECT nombre from operadora_actividad,actividad WHERE id_operadora='$id' AND id_actividad=id";
$resultado= @pg_query($connection, $sql);
while ($row = pg_fetch_row($resultado))
{
	echo '<ul>';
	echo '<li>'.$row[0].'</li>';
	echo '</ul>';
} 
pg_close();
?>