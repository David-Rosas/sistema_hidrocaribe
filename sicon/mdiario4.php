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
	$a13 = $_POST["a13"];
	$a14 = $_POST["a14"];
	$b1 = $_POST["b1"];
    $b2 = $_POST["b2"];
	$b3 = $_POST["b3"];
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
	$c13 = $_POST["c13"];
	$c14 = $_POST["c14"];
	$d1 = $_POST["d1"];
    $d2 = $_POST["d2"];
	$d3 = $_POST["d3"];
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
	$e13 = $_POST["e13"];
	$e14 = $_POST["e14"];
	$f1 = $_POST["f1"];
    $f2 = $_POST["f2"];
	$f3 = $_POST["f3"];
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
	$g13 = $_POST["g13"];
	$g14 = $_POST["g14"];
	$h1 = $_POST["h1"];
    $h2 = $_POST["h2"];
	$h3 = $_POST["h3"];
	$i1 = $_POST["i1"];
    $i2 = $_POST["i2"];
	$i3 = $_POST["i3"];
	$i4 = $_POST["i4"];
	$i5 = $_POST["i5"];
	$i6 = $_POST["i6"];
	$i7 = $_POST["i7"];
	$i8 = $_POST["i8"];
	$i9 = $_POST["i9"];
	$i10 = $_POST["i10"];
	$i11 = $_POST["i11"];
	$i12 = $_POST["i12"];
	$i13 = $_POST["i13"];
	$i14 = $_POST["i14"];
	$j1 = $_POST["j1"];
    $j2 = $_POST["j2"];
	$j3 = $_POST["j3"];
	$k1 = $_POST["k1"];
    $k2 = $_POST["k2"];
	$k3 = $_POST["k3"];
	$k4 = $_POST["k4"];
	$k5 = $_POST["k5"];
	$k6 = $_POST["k6"];
	$k7 = $_POST["k7"];
	$k8 = $_POST["k8"];
	$k9 = $_POST["k9"];
	$k10 = $_POST["k10"];
	$k11 = $_POST["k11"];
	$k12 = $_POST["k12"];
	$k13 = $_POST["k13"];
	$k14 = $_POST["k14"];
	$l1 = $_POST["l1"];
    $l2 = $_POST["l2"];
	$l3 = $_POST["l3"];
	$m1 = $_POST["m1"];
    $m2 = $_POST["m2"];
	$m3 = $_POST["m3"];
	$m4 = $_POST["m4"];
	$m5 = $_POST["m5"];
	$m6 = $_POST["m6"];
	$m7 = $_POST["m7"];
	$m8 = $_POST["m8"];
	$m9 = $_POST["m9"];
	$m10 = $_POST["m10"];
	$m11 = $_POST["m11"];
	$m12 = $_POST["m12"];
	$m13 = $_POST["m13"];
	$m14 = $_POST["m14"];
	$n1 = $_POST["n1"];
    $n2 = $_POST["n2"];
	$n3 = $_POST["n3"];
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
	
	$sql = "SELECT fecha FROM diario4 WHERE fecha='$fecha'";
	$result = pg_query($sql) or die("$text_noquery");
	
	if(resultadoIndividual($connection,"SELECT fecha FROM diario4 WHERE fecha='$fecha'"))
	{
	$sql = "UPDATE diario4 set a1='$a1',a2='$a2',a3='$a3',a4='$a4',a5='$a5',a6='$a6',a7='$a7',a8='$a8',a9='$a9',a10='$a10',a11='$a11',a12='$a12',a13='$a13',a14='$a14',b1='$b1',b2='$b2',b3='$b3',c1='$c1',c2='$c2',c3='$c3',c4='$c4',c5='$c5',c6='$c6',c7='$c7',c8='$c8',c9='$c9',c10='$c10',c11='$c11',c12='$c12',c13='$c13',c14='$c14',d1='$d1',d2='$d2',d3='$d3',e1='$e1',e2='$e2',e3='$e3',e4='$e4',e5='$e5',e6='$e6',e7='$e7',e8='$e8',e9='$e9',e10='$e10',e11='$e11',e12='$e12',e13='$e13',e14='$e14',f1='$f1',f2='$f2',f3='$f3',g1='$g1',g2='$g2',g3='$g3',g4='$g4',g5='$g5',g6='$g6',g7='$g7',g8='$g8',g9='$g9',g10='$g10',g11='$g11',g12='$g12',g13='$g13',g14='$g14',h1='$h1',h2='$h2',h3='$h3',i1='$i1',i2='$i2',i3='$i3',i4='$i4',i5='$i5',i6='$i6',i7='$i7',i8='$i8',i9='$i9',i10='$i10',i11='$i11',i12='$i12',i13='$i13',i14='$i14',j1='$j1',j2='$j2',j3='$j3',k1='$k1',k2='$k2',k3='$k3',k4='$k4',k5='$k5',k6='$k6',k7='$k7',k8='$k8',k9='$k9',k10='$k10',k11='$k11',k12='$k12',k13='$k13',k14='$k14',l1='$l1',l2='$l2',l3='$l3',m1='$m1',m2='$m2',m3='$m3',m4='$m4',m5='$m5',m6='$m6',m7='$m7',m8='$m8',m9='$m9',m10='$m10',m11='$m11',m12='$m12',m13='$m13',m14='$m14',n1='$n1',n2='$n2',n3='$n3',ts1='$ts1',ts2='$ts2',ts3='$ts3',ts4='$ts4',ts5='$ts5',ts6='$ts6',ts7='$ts7',ts8='$ts8',ts9='$ts9',ts10='$ts10',ts11='$ts11',ts12='$ts12',ts13='$ts13',ts14='$ts14',ts15='$ts15',ts16='$ts16',ts17='$ts17',ts18='$ts18',ts19='$ts19',ts20='$ts20',ts21='$ts21',ts22='$ts22',ts23='$ts23',ts24='$ts24',ts25='$ts25',ts26='$ts26',ts27='$ts27',ts28='$ts28',ts29='$ts29',ts30='$ts30',ts31='$ts31',ts32='$ts32',ts33='$ts33',ts34='$ts34',ts35='$ts35',ts36='$ts36',ts37='$ts37',ts38='$ts38',ts39='$ts39',ts40='$ts40',ts41='$ts41',ts42='$ts42',ts43='$ts43',ts44='$ts44',ts45='$ts45',ts46='$ts46',ts47='$ts47',ts48='$ts48',ts49='$ts49',ts50='$ts50',ts51='$ts51',ts52='$ts52',ts53='$ts53',ts54='$ts54',ts55='$ts55',ts56='$ts56',ts57='$ts57',ts58='$ts58',ts59='$ts59',ts60='$ts60',ts61='$ts61',ts62='$ts62',ts63='$ts63',ts64='$ts64',ts65='$ts65',ts66='$ts66',ts67='$ts67',ts68='$ts68',ts69='$ts69',ts70='$ts70',ts71='$ts71',ts72='$ts72',ts73='$ts73',ts74='$ts74',ts75='$ts75',ts76='$ts76',ts77='$ts77',ts78='$ts78',ts79='$ts79',ts80='$ts80',ts81='$ts81',ts82='$ts82',ts83='$ts83',ts84='$ts84',ts85='$ts58',ts86='$ts86' WHERE fecha='$fecha'";
	echo "<center><br><br><b> Datos $msg Actualizados! </b></center>";
	echo "<center><br><br><br><br><font face='arial'>
			<a href=reported4.php>Regresar</a></font></center> ";
}
else if	(empty($fecha))
{
			echo "<center><br><br><b> ERROR NO HA INGRESADO LA FECHA A MODIFICAR</b></center>";
			echo "<center><br><br><br><br><font face='arial'> <a href=javascript:history.back()>Regresar</a></font></center> ";
}
elseif (pg_num_rows($result) == 0)
{
	echo "<center><br><br><b> ERROR NO ESTA REGISTRADA ESA FECHA</b></center>";
	echo "<center><br><br><br><br><font face='arial'><a href=javascript:history.back()>Regresar</a></font></center> ";
} 
$resultado = @pg_query($connection,$sql);
if($resultado)
{
//	echo "Datos $msg Satisfactoriamente!";
//	echo "<center><br><br><br><br><font face='arial'><a href=reported.php>Regresar</a></font></center> ";
}
else
{
//	echo "Ocurrio un Error Inesperado: ".pg_last_error();
}
pg_close($connection); 


?>

