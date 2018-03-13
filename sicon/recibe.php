<?php
$ciudad = $_POST["ciudad"];
include("configuracion.php");

//echo "$ciudad";

$connection = pg_connect("host=$sql_host port=$puerto dbname=$sql_db user=$sql_usuario password=$sql_pass") or die("No se realiz&oacute la conexi&oacute;n Detalles: ".pg_last_error());
$sql = "SELECT * from pais where ciudad ='$ciudad'";
$buscar = pg_query($connection,$sql);// ejecutamos la sentencia sql
$pais = pg_fetch_array($buscar);
//echo "Nombre: $nombre <br> Apellido: $apellido <br>";
//echo "eMail: $email <br> Nick: $nick <br>";
//echo "Comentario: $comentario<br>" ; }


		echo "Su nombre es: $pais[ciudad]";
		echo "<br>";
		echo "Valor1: $pais[valor1]";
		echo "<br>";
		echo "valor2: $pais[valor2]";
		echo "<br>";
		echo "valor3: $pais[valor3]";


?>

