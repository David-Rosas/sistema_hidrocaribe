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
		$ts1 = $_POST["ts1"];
	$ts2 = $_POST["ts2"];
	$ts3 = $_POST["ts3"];
	$ts4 = $_POST["ts4"];
	$ts5 = $_POST["ts5"];
	$ts6 = $_POST["ts6"];
	$ts7 = $_POST["ts7"];
	$ts8 = $_POST["ts8"];
	$ts9 = $_POST["ts9"];
	$ts10 = $_POST["ts10"];
	$ts11 = $_POST["ts11"];
	$ts12 = $_POST["ts12"];
	$ts13 = $_POST["ts13"];
	$ts14 = $_POST["ts14"];
	$ts15 = $_POST["ts15"];
	$ts16 = $_POST["ts16"];
	$ts17 = $_POST["ts17"];
	$ts18 = $_POST["ts18"];
	$ts19 = $_POST["ts19"];
	$ts20 = $_POST["ts20"];
	$ts21 = $_POST["ts21"];
	$ts22 = $_POST["ts22"];
	$ts23 = $_POST["ts23"];
	$ts24 = $_POST["ts24"];
	$ts25 = $_POST["ts25"];
	$ts26 = $_POST["ts26"];
	$ts27 = $_POST["ts27"];
	$ts28 = $_POST["ts28"];
	$ts29 = $_POST["ts29"];
	$ts30 = $_POST["ts30"];
	$ts31 = $_POST["ts31"];
	$ts32 = $_POST["ts32"];
	$ts33 = $_POST["ts33"];
	$ts34 = $_POST["ts34"];
	$ts35 = $_POST["ts35"];
	$ts36 = $_POST["ts36"];
	$ts37 = $_POST["ts37"];
	$ts38 = $_POST["ts38"];
	$ts39 = $_POST["ts39"];
	$ts40 = $_POST["ts40"];
	$ts41 = $_POST["ts41"];
	$ts42 = $_POST["ts42"];
	$ts43 = $_POST["ts43"];
	$ts44 = $_POST["ts44"];
	$ts45 = $_POST["ts45"];
	$ts46 = $_POST["ts46"];
	$ts47 = $_POST["ts47"];
	$ts48 = $_POST["ts48"];
	$ts49 = $_POST["ts49"];
	$ts50 = $_POST["ts50"];
	$ts51 = $_POST["ts51"];
	$ts52 = $_POST["ts52"];
	$ts53 = $_POST["ts53"];
	$ts54 = $_POST["ts54"];
	$ts55 = $_POST["ts55"];
	$ts56 = $_POST["ts56"];
	$ts57 = $_POST["ts57"];
	$ts58 = $_POST["ts58"];
	$ts59 = $_POST["ts59"];
	$ts60 = $_POST["ts60"];
	$ts61 = $_POST["ts61"];
	$ts62 = $_POST["ts62"];
	$ts63 = $_POST["ts63"];
	$ts64 = $_POST["ts64"];
	$ts65 = $_POST["ts65"];
	$ts66 = $_POST["ts66"];
	$ts67 = $_POST["ts67"];
	$ts68 = $_POST["ts68"];
	$ts69 = $_POST["ts69"];
	$ts70 = $_POST["ts70"];
	$ts71 = $_POST["ts71"];
	$ts72 = $_POST["ts72"];
	$ts73 = $_POST["ts73"];
	$ts74 = $_POST["ts74"];
	$ts75 = $_POST["ts75"];
	$ts76 = $_POST["ts76"];
	$ts77 = $_POST["ts77"];
	$ts78 = $_POST["ts78"];
	$ts79 = $_POST["ts79"];
	$ts80 = $_POST["ts80"];
	$ts81 = $_POST["ts81"];
	$ts82 = $_POST["ts82"];
	$ts83 = $_POST["ts83"];
	$ts84 = $_POST["ts84"];
	$ts85 = $_POST["ts85"];
	$ts86 = $_POST["ts86"];
		
    $sql = "SELECT fecha FROM diario3 WHERE fecha='$fecha'";
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
		$sql = "INSERT INTO diario3 (fecha,fechax,a1,a2,a3,a4,a5,a6,a7,a8,a9,a10,b1,b2,b3,b4,b5,b6,b7,b8,b9,b10,c1,c2,c3,c4,c5,c6,c7,c8,c9,c10,d1,d2,d3,d4,d5,d6,d7,d8,d9,d10,e1,e2,e3,e4,e5,e6,e7,e8,e9,e10,f1,f2,f3,f4,f5,f6,f7,f8,f9,f10,g1,g2,g3,g4,g5,g6,g7,g8,g9,g10,ts1,ts2,ts3,ts4,ts5,ts6,ts7,ts8,ts9,ts10,ts11,ts12,ts13,ts14,ts15,ts16,ts17,ts18,ts19,ts20,ts21,ts22,ts23,ts24,ts25,ts26,ts27,ts28,ts29,ts30,ts31,ts32,ts33,ts34,ts35,ts36,ts37,ts38,ts39,ts40,ts41,ts42,ts43,ts44,ts45,ts46,ts47,ts48,ts49,ts50,ts51,ts52,ts53,ts54,ts55,ts56,ts57,ts58,ts59,ts60,ts61,ts62,ts63,ts64,ts65,ts66,ts67,ts68,ts69,ts70,ts71,ts72,ts73,ts74,ts75,ts76,ts77,ts78,ts79,ts80,ts81,ts82,ts83,ts84,ts85,ts86) values ('$fecha',to_date('$fecha','DD-MM-YYYY'),'$a1','$a2','$a3','$a4','$a5','$a6','$a7','$a8','$a9','$a10','$b1','$b2','$b3','$b4','$b5','$b6','$b7','$b8','$b9','$b10','$c1','$c2','$c3','$c4','$c5','$c6','$c7','$c8','$c9','$c10','$d1','$d2','$d3','$d4','$d5','$d6','$d7','$d8','$d9','$d10','$e1','$e2','$e3','$e4','$e5','$e6','$e7','$e8','$e9','$e10','$f1','$f2','$f3','$f4','$f5','$f6','$f7','$f8','$f9','$f10','$g1','$g2','$g3','$g4','$g5','$g6','$g7','$g8','$g9','$g10','$ts1','$ts2','$ts3','$ts4','$ts5','$ts6','$ts7','$ts8','$ts9','$ts10','$ts11','$ts12','$ts13','$ts14','$ts15','$ts16','$ts17','$ts18','$ts19','$ts20','$ts21','$ts22','$ts23','$ts24','$ts25','$ts26','$ts27','$ts28','$ts29','$ts30','$ts31','$ts32','$ts33','$ts34','$ts35','$ts36','$ts37','$ts38','$ts39','$ts40','$ts41','$ts42','$ts43','$ts44','$ts45','$ts46','$ts47','$ts48','$ts49','$ts50','$ts51','$ts52','$ts53','$ts54','$ts55','$ts56','$ts57','$ts58','$ts59','$ts60','$ts61','$ts62','$ts63','$ts64','$ts65','$ts66','$ts67','$ts68','$ts69','$ts70','$ts71','$ts72','$ts73','$ts74','$ts75','$ts76','$ts77','$ts78','$ts79','$ts80','$ts81','$ts82','$ts83','$ts84','$ts85','$ts86')";
	$msg = "Guardados";
			$msg = "Guardados";
			echo "<center><br><br><br><b>Datos $msg Satisfactoriamente!</b></center>";
			echo "<center><br><br><br><br><font face='arial'><a href=reported3.php>Regresar</a></font></center> ";

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
