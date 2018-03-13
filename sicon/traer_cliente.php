<?php
include_once("configuracion.php");
$connection = pg_connect("host=$sql_host port=$puerto dbname=$sql_db user=$sql_usuario password=$sql_pass") or die("No se realiz&oacute la conexi&oacute;n Detalles: ".pg_last_error());
$id = split("-",$_GET['id_cliente']);
$sql = "select nomcli,apecli,dircli,telcli
from sih_cliente
where codent='".$id[0]."' and codmun='".$id[1]."' and codzon='".$id[2]."' and codrut='".$id[3]."' and codcli='".$id[4]."'";

$resultado= @pg_query($connection, $sql);
if($resultado)
{
	$row = pg_fetch_row($resultado);
	$nom = split(" ",$row[0]);
	$ape = split(" ",$row[1]);
	echo $nom[0]." ".$ape[0]."**".$row[2]."**".$row[3];
}
?>