<?php 
include("funciones/funciones.php");
include("configuracion.php");
$connection = pg_connect("host=$sql_host port=$puerto dbname=$sql_db user=$sql_usuario password=$sql_pass") or die("No se realiz&oacute la conexi&oacute;n Detalles: ".pg_last_error());
    $fecha=$_POST["fecha"];
    $a1 = $_POST["a1"];
    $a2 = $_POST["a2"];
	$a3 = $_POST["a3"];
	$a4 = $_POST["a4"];
	$a5 = $_POST["a5"];
	$a6 = $_POST["a6"];
	$a7 = $_POST["a7"];
	$b1 = $_POST["b1"];
    $b2 = $_POST["b2"];
	$b3 = $_POST["b3"];
	$b4 = $_POST["b4"];
	$b5 = $_POST["b5"];
	$b6 = $_POST["b6"];
	$b7 = $_POST["b7"];
	$c1 = $_POST["c1"];
    $c2 = $_POST["c2"];
	$c3 = $_POST["c3"];
	$c4 = $_POST["c4"];
	$c5 = $_POST["c5"];
	$c6 = $_POST["c6"];
	$c7 = $_POST["c7"];
	$d1 = $_POST["d1"];
    $d2 = $_POST["d2"];
	$d3 = $_POST["d3"];
	$d4 = $_POST["d4"];
	$d5 = $_POST["d5"];
	$d6 = $_POST["d6"];
	$d7 = $_POST["d7"];
	$e1 = $_POST["e1"];
    $e2 = $_POST["e2"];
	$e3 = $_POST["e3"];
	$e4 = $_POST["e4"];
	$e5 = $_POST["e5"];
	$e6 = $_POST["e6"];
	$e7 = $_POST["e7"];
	$f1 = $_POST["f1"];
    $f2 = $_POST["f2"];
	$f3 = $_POST["f3"];
	$f4 = $_POST["f4"];
	$f5 = $_POST["f5"];
	$f6 = $_POST["f6"];
	$f7 = $_POST["f7"];
	$g1 = $_POST["g1"];
    $g2 = $_POST["g2"];
	$g3 = $_POST["g3"];
	$g4 = $_POST["g4"];
	$g5 = $_POST["g5"];
	$g6 = $_POST["g6"];
	$g7 = $_POST["g7"];
		
    $sql = "SELECT fecha FROM diario5 WHERE fecha='$fecha'";
	$result = pg_query($sql) or die("$text_noquery");
	if	(empty($fecha))
	{
			echo "<center><br><br><b> ERROR NO HA INGRESADO LA FECHA</b></center>";
			echo "<center><br><br><br><br><font face='arial'> <a href=javascript:history.back()>Regresar</a></font></center> ";
	}
	 elseif (pg_num_rows($result) != 0)
	 {
	  		echo "<center><br><br><b> ERROR FECHA YA REGISTRADA</b></center>";
			echo "<center><br><b> SOLO SE PERMITE MODIFICAR</b></center>";
	  		echo "<center><br><br><br><br><font face='arial'><a href=javascript:history.back()>Regresar</a></font></center> ";
  	 } 
	else
	{
		$sql = "INSERT INTO diario5 (fecha,fechax,a1,a2,a3,a4,a5,a6,a7,b1,b2,b3,b4,b5,b6,b7,c1,c2,c3,c4,c5,c6,c7,d1,d2,d3,d4,d5,d6,d7,e1,e2,e3,e4,e5,e6,e7,f1,f2,f3,f4,f5,f6,f7,g1,g2,g3,g4,g5,g6,g7) values ('$fecha',to_date('$fecha','DD-MM-YYYY'),'$a1','$a2','$a3','$a4','$a5','$a6','$a7','$b1','$b2','$b3','$b4','$b5','$b6','$b7','$c1','$c2','$c3','$c4','$c5','$c6','$c7','$d1','$d2','$d3','$d4','$d5','$d6','$d7','$e1','$e2','$e3','$e4','$e5','$e6','$e7','$f1','$f2','$f3','$f4','$f5','$f6','$f7','$g1','$g2','$g3','$g4','$g5','$g6','$g7')";
	$msg = "Guardados";
			$msg = "Guardados";
			echo "<center><br><br><br><b>Datos $msg Satisfactoriamente!</b></center>";
			echo "<center><br><br><br><br><font face='arial'><a href=reported5.php>Regresar</a></font></center> ";

	}
$resultado = @pg_query($connection,$sql);
if($resultado)
{
//	echo "Datos $msg Satisfactoriamente!";
//	echo "<center><br><br><br><br><font face='arial'><a href=reported.php>Regresar</a></font></center> ";
}
else
{
	echo "Ocurrio un Error Inesperado: ".pg_last_error();
}
pg_close($connection); 


?>
