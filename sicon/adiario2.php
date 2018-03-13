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
	$a8 = $_POST["a8"];
	$a9 = $_POST["a9"];
	$a10 = $_POST["a10"];
	$a11 = $_POST["a11"];
	$a12 = $_POST["a12"];
	$b1 = $_POST["b1"];
    $b2 = $_POST["b2"];
	$b3 = $_POST["b3"];
	$b4 = $_POST["b4"];
	$b5 = $_POST["b5"];
	$b6 = $_POST["b6"];
	$b7 = $_POST["b7"];
	$b8 = $_POST["b8"];
	$b9 = $_POST["b9"];
	$b10 = $_POST["b10"];
	$b11 = $_POST["b11"];
	$b12 = $_POST["b12"];
	$c1 = $_POST["c1"];
    $c2 = $_POST["c2"];
	$c3 = $_POST["c3"];
	$c4 = $_POST["c4"];
	$c5 = $_POST["c5"];
	$c6 = $_POST["c6"];
	$c7 = $_POST["c7"];
	$c8 = $_POST["c8"];
	$c9 = $_POST["c9"];
	$c10 = $_POST["c10"];
	$c11 = $_POST["c11"];
	$c12 = $_POST["c12"];
	$d1 = $_POST["d1"];
    $d2 = $_POST["d2"];
	$d3 = $_POST["d3"];
	$d4 = $_POST["d4"];
	$d5 = $_POST["d5"];
	$d6 = $_POST["d6"];
	$d7 = $_POST["d7"];
	$d8 = $_POST["d8"];
	$d9 = $_POST["d9"];
	$d10 = $_POST["d10"];
	$d11 = $_POST["d11"];
	$d12 = $_POST["d12"];
	$e1 = $_POST["e1"];
    $e2 = $_POST["e2"];
	$e3 = $_POST["e3"];
	$e4 = $_POST["e4"];
	$e5 = $_POST["e5"];
	$e6 = $_POST["e6"];
	$e7 = $_POST["e7"];
	$e8 = $_POST["e8"];
	$e9 = $_POST["e9"];
	$e10 = $_POST["e10"];
	$e11 = $_POST["e11"];
	$e12 = $_POST["e12"];
	$f1 = $_POST["f1"];
    $f2 = $_POST["f2"];
	$f3 = $_POST["f3"];
	$f4 = $_POST["f4"];
	$f5 = $_POST["f5"];
	$f6 = $_POST["f6"];
	$f7 = $_POST["f7"];
	$f8 = $_POST["f8"];
	$f9 = $_POST["f9"];
	$f10 = $_POST["f10"];
	$f11 = $_POST["f11"];
	$f12 = $_POST["f12"];
	$g1 = $_POST["g1"];
    $g2 = $_POST["g2"];
	$g3 = $_POST["g3"];
	$g4 = $_POST["g4"];
	$g5 = $_POST["g5"];
	$g6 = $_POST["g6"];
	$g7 = $_POST["g7"];
	$g8 = $_POST["g8"];
	$g9 = $_POST["g9"];
	$g10 = $_POST["g10"];
	$g11 = $_POST["g11"];
	$g12 = $_POST["g12"];
	
	$sql = "SELECT fecha FROM diario2 WHERE fecha='$fecha'";
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
$sql = "INSERT INTO diario2 (fecha,a1,a2,a3,a4,a5,a6,a7,a8,a9,a10,a11,a12,b1,b2,b3,b4,b5,b6,b7,b8,b9,b10,b11,b12,c1,c2,c3,c4,c5,c6,c7,c8,c9,c10,c11,c12,d1,d2,d3,d4,d5,d6,d7,d8,d9,d10,d11,d12,e1,e2,e3,e4,e5,e6,e7,e8,e9,e10,e11,e12,f1,f2,f3,f4,f5,f6,f7,f8,f9,f10,f11,f12,g1,g2,g3,g4,g5,g6,g7,g8,g9,g10,g11,g12) 
values ('$fecha','$a1','$a2','$a3','$a4','$a5','$a6','$a7','$a8','$a9','$a10','$a11','$a12','$b1','$b2','$b3','$b4','$b5','$b6','$b7','$b8','$b9','$b10','$b11','$b12','$c1','$c2','$c3','$c4','$c5','$c6','$c7','$c8','$c9','$c10','$c11','$c12','$d1','$d2','$d3','$d4','$d5','$d6','$d7','$d8','$d9','$d10','$d11','$d12','$e1','$e2','$e3','$e4','$e5','$e6','$e7','$e8','$e9','$e10','$e11','$e12','$f1','$f2','$f3','$f4','$f5','$f6','$f7','$f8','$f9','$f10','$f11','$f12','$g1','$g2','$g3','$g4','$g5','$g6','$g7','$g8','$g9','$g10','$g11','$g12')";
	$msg = "Guardados";
			echo "<center><br><br><br><b>Datos $msg Satisfactoriamente!</b></center>";
			echo "<center><br><br><br><br><font face='arial'><a href=reported2.php>Regresar</a></font></center> ";

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
