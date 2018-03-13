<?php
include("funciones/funciones.php");
include("configuracion.php");
$connection = pg_connect("host=$sql_host port=$puerto dbname=$sql_db user=$sql_usuario password=$sql_pass") or die("No se realiz&oacute la conexi&oacute;n Detalles: ".pg_last_error());
$id=$_GET['id'];
$fecha = $_GET['fecha'];
$idval = $_GET['idval'];
$idcatv = $_GET['idcatv'];
$hora = $_GET['hora'];
$nvueltas = $_GET['nvueltas'];
$tvuelta1 = $_GET['tvuelta1'];
$horar2 = $_GET['horar2'];
$nvueltas2 = $_GET['nvueltas2'];
$tvuelta2 = $_GET['tvuelta2'];
$horar3 = $_GET['horar3'];
$nvueltas3 = $_GET['nvueltas3'];
$tvuelta3 = $_GET['tvuelta3'];
$horar4 = $_GET['horar4'];
$nvueltas4 = $_GET['nvueltas4'];
$tvuelta4 = $_GET['tvuelta4'];
$horar5= $_GET['horar5'];
$nvueltas5 = $_GET['nvueltas5'];
$tvuelta5 = $_GET['tvuelta5'];



	$sql1="SELECT nombre from valvula where id=$idval";
	$valvula=resultadoIndividual($connection,$sql1);
	
	$sql2="SELECT nombre from catvalvula where id=$idcatv";
	$catvalvula=resultadoIndividual($connection,$sql2);
	
		$sql = "SELECT max(id) from maniobras";
		$max_id = resultadoIndividual($connection,$sql);
		$max_id = $max_id + 1; 
		if(resultadoIndividual($connection,"SELECT fecha FROM maniobras WHERE id='$id'") == "")
		{
			$sql = "INSERT INTO maniobras (id,fecha,valvula,catvalvula,hora,nvueltas,tvuelta1,horar2,nvueltas2,tvuelta2,horar3,nvueltas3,tvuelta3,horar4,nvueltas4,tvuelta4,horar5,nvueltas5,tvuelta5,eliminado) values ('$max_id','$fecha','$valvula','$catvalvula','$hora','$nvueltas','$tvuelta1','$horar2','$nvueltas2','$tvuelta2','$horar3','$nvueltas3','$tvuelta3','$horar4','$nvueltas4','$tvuelta4','$horar5','$nvueltas5','$tvuelta5',0)";
			$msg = "Guardados";
		}
		else
		{
			$sql = "UPDATE maniobras set horar2='$horar2',nvueltas2='$nvueltas2',tvuelta2='$tvuelta2',horar3='$horar3',nvueltas3='$nvueltas3',tvuelta3='$tvuelta3',horar4='$horar4',nvueltas4='$nvueltas4',tvuelta4='$tvuelta4',horar5='$horar5',nvueltas5='$nvueltas5',tvuelta5='$tvuelta5' WHERE id='$id'";
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