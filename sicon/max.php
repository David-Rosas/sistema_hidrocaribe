<?php
include_once("configuracion.php");
include_once("funciones/funciones.php");

$c = pg_connect("host=$sql_host port=$puerto dbname=$sql_db user=$sql_usuario password=$sql_pass");
$sql = "SELECT max(id) from ".$_GET['tabla'];
//echo $sql;
$max_id = resultadoIndividual($c ,$sql);
echo ($max_id + 1);
?>