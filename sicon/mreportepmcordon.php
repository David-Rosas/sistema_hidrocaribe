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
	$a15 = $_POST["a15"];
	$a16 = $_POST["a16"];
	$a17 = $_POST["a17"];
	$a18 = $_POST["a18"];
	$a19 = $_POST["a19"];
	$a20 = $_POST["a20"];
	$a21 = $_POST["a21"];
	$a22 = $_POST["a22"];
	$a23 = $_POST["a23"];
	$a24 = $_POST["a24"];
	$a25 = $_POST["a25"];
	$a26 = $_POST["a26"];
	$a27 = $_POST["a27"];
	$a28 = $_POST["a28"];
	$a29 = $_POST["a29"];
	$a30 = $_POST["a30"];
	$a31 = $_POST["a31"];
    $a32 = $_POST["a32"];
	$a33 = $_POST["a33"];
	$a34 = $_POST["a34"];
	$a35 = $_POST["a35"];
	$a36 = $_POST["a36"];
	$a37 = $_POST["a37"];
	$a38 = $_POST["a38"];
	$a39 = $_POST["a39"];
	$a40 = $_POST["a40"];
	$a41 = $_POST["a41"];
    $a42 = $_POST["a42"];
	$a43 = $_POST["a43"];
	$a44 = $_POST["a44"];
	$a45 = $_POST["a45"];
	$a46 = $_POST["a46"];
	$a47 = $_POST["a47"];
	$a48 = $_POST["a48"];
	$a49 = $_POST["a49"];
	$a50 = $_POST["a50"];
	$a51 = $_POST["a51"];
    $a52 = $_POST["a52"];
	$a53 = $_POST["a53"];
	$a54 = $_POST["a54"];
	$a55 = $_POST["a55"];
	$a56 = $_POST["a56"];
	$a57 = $_POST["a57"];
	$a58 = $_POST["a58"];
	$a59 = $_POST["a59"];
	$a60 = $_POST["a60"];
	$a61 = $_POST["a61"];
    $a62 = $_POST["a62"];
	$a63 = $_POST["a63"];
	$a64 = $_POST["a64"];
	$a65 = $_POST["a65"];
	$a66 = $_POST["a66"];
	$a67 = $_POST["a67"];
	$a68 = $_POST["a68"];
	$a69 = $_POST["a69"];
	$a70 = $_POST["a70"];
	$a71 = $_POST["a71"];
    $a72 = $_POST["a72"];
	$a73 = $_POST["a73"];
	$a74 = $_POST["a74"];
	$a75 = $_POST["a75"];
	$a76 = $_POST["a76"];
	$a77 = $_POST["a77"];
	$a78 = $_POST["a78"];
	$a79 = $_POST["a79"];
	$a80 = $_POST["a80"];
	$a81 = $_POST["a81"];
    $a82 = $_POST["a82"];
	$a83 = $_POST["a83"];
	$a84 = $_POST["a84"];
	$a85 = $_POST["a85"];
	$a86 = $_POST["a86"];
	$a87 = $_POST["a87"];
	$a88 = $_POST["a88"];
	$a89 = $_POST["a89"];
	$a90 = $_POST["a90"];
	$a91 = $_POST["a91"];
    $a92 = $_POST["a92"];
	$a93 = $_POST["a93"];
	$a94 = $_POST["a94"];
	$a95 = $_POST["a95"];
	$a96 = $_POST["a96"];
	$a97 = $_POST["a97"];
	$a98 = $_POST["a98"];
	$a99 = $_POST["a99"];
	$a100 = $_POST["a100"];
	$a101 = $_POST["a101"];
    $a102 = $_POST["a102"];
	$a103 = $_POST["a103"];
	$a104 = $_POST["a104"];
	$a105 = $_POST["a105"];
	$a106 = $_POST["a106"];
	$a107 = $_POST["a107"];
	$a108 = $_POST["a108"];
	$a109 = $_POST["a109"];
	$a110 = $_POST["a110"];
	$a111 = $_POST["a111"];
	$a112 = $_POST["a112"];
	$a113 = $_POST["a113"];
	$a114 = $_POST["a114"];
	$a115 = $_POST["a115"];
	$a116 = $_POST["a116"];
	$a117 = $_POST["a117"];
	$a118 = $_POST["a118"];
	$a119 = $_POST["a119"];
	$a120 = $_POST["a120"];
	$a121 = $_POST["a121"];
	$a122 = $_POST["a122"];
	$a123 = $_POST["a123"];
	$a124 = $_POST["a124"];
	$a125 = $_POST["a125"];
	$a126 = $_POST["a126"];
	$a127 = $_POST["a127"];
	$a128 = $_POST["a128"];
	$a129 = $_POST["a129"];
	$a130 = $_POST["a130"];
	$a131 = $_POST["a131"];
    $a132 = $_POST["a132"];
	$a133 = $_POST["a133"];
	$a134 = $_POST["a134"];
	$a135 = $_POST["a135"];
	$a136 = $_POST["a136"];
	$a137 = $_POST["a137"];
	$a138 = $_POST["a138"];
	$a139 = $_POST["a139"];
	$a140 = $_POST["a140"];
	$a141 = $_POST["a141"];
    $a142 = $_POST["a142"];
	$a143 = $_POST["a143"];
	$a144 = $_POST["a144"];
	$a145 = $_POST["a145"];
	$a146 = $_POST["a146"];
	$a147 = $_POST["a147"];
	$a148 = $_POST["a148"];
	$a149 = $_POST["a149"];
	$a150 = $_POST["a150"];
	$a151 = $_POST["a151"];
    $a152 = $_POST["a152"];
	$a153 = $_POST["a153"];
	$a154 = $_POST["a154"];
	$a155 = $_POST["a155"];
	$a156 = $_POST["a156"];
	$a157 = $_POST["a157"];
	$a158 = $_POST["a158"];
	$a159 = $_POST["a159"];
	$a160 = $_POST["a160"];
	$a161 = $_POST["a161"];
    $a162 = $_POST["a162"];
	$a163 = $_POST["a163"];
	$a164 = $_POST["a164"];
	$a165 = $_POST["a165"];
	$a166 = $_POST["a166"];
	$a167 = $_POST["a167"];
	$a168 = $_POST["a168"];
	$a169 = $_POST["a169"];
	$a170 = $_POST["a170"];
	$a171 = $_POST["a171"];
    $a172 = $_POST["a172"];
	$a173 = $_POST["a173"];
	$a174 = $_POST["a174"];
	$a175 = $_POST["a175"];
	$a176 = $_POST["a176"];
	$a177 = $_POST["a177"];
	$a178 = $_POST["a178"];
	$a179 = $_POST["a179"];
	$a180 = $_POST["a180"];
	
	
	$sql = "SELECT fecha FROM mcordon WHERE fecha='$fecha'";
	$result = pg_query($sql) or die("$text_noquery");
	
	if(resultadoIndividual($connection,"SELECT fecha FROM mcordon WHERE fecha='$fecha'"))
	{
		$sql = "UPDATE mcordon set a1='$a1',a2='$a2',a3='$a3',a4='$a4',a5='$a5',a6='$a6',a7='$a7',a8='$a8',a9='$a9',a10='$a10',a11='$a11',a12='$a12',a13='$a13',a14='$a14',a15='$a15',a16='$a16',a17='$a17',a18='$a18',a19='$a19',a20='$a20',a21='$a21',a22='$a22',a23='$a23',a24='$a24',a25='$a25',a26='$a26',a27='$a27',a28='$a28',a29='$a29',a30='$a30',a31='$a31',a32='$a32',a33='$a33',a34='$a34',a35='$a35',a36='$a36',a37='$a37',a38='$a38',a39='$a39',a40='$a40',a41='$a41',a42='$a42',a43='$a43',a44='$a44',a45='$a45',a46='$a46',a47='$a47',a48='$a48',a49='$a49',a50='$a50',a51='$a51',a52='$a52',a53='$a53',a54='$a54',a55='$a55',a56='$a56',a57='$a57',a58='$a58',a59='$a59',a60='$a60',a61='$a61',a62='$a62',a63='$a63',a64='$a64',a65='$a65',a66='$a66',a67='$a67',a68='$a68',a69='$a69',a70='$a70',a71='$a71',a72='$a72',a73='$a73',a74='$a74',a75='$a75',a76='$a76',a77='$a77',a78='$a78',a79='$a79',a80='$a80',a81='$a81',a82='$a82',a83='$a83',a84='$a84',a85='$a85',a86='$a86',a87='$a87',a88='$a88',a89='$a89',a90='$a90',a91='$a91',a92='$a92',a93='$a93',a94='$a94',a95='$a95',a96='$a96',a97='$a97',a98='$a98',a99='$a99',a100='$a100',a101='$a101',a102='$a102',a103='$a103',a104='$a104',a105='$a105',a106='$a106',a107='$a107',a108='$a108',a109='$a109',a110='$a110',a111='$a111',a112='$a112',a113='$a113',a114='$a114',a115='$a115',a116='$a116',a117='$a117',a118='$a118',a119='$a119',a120='$a120',a121='$a121',a122='$a122',a123='$a123',a124='$a124',a125='$a125',a126='$a126',a127='$a127',a128='$a128',a129='$a129',a130='$a130',a131='$a131',a132='$a132',a133='$a133',a134='$a134',a135='$a135',a136='$a136',a137='$a137',a138='$a138',a139='$a139',a140='$a140',a141='$a141',a142='$a142',a143='$a143',a144='$a144',a145='$a145',a146='$a146',a147='$a147',a148='$a148',a149='$a149',a150='$a150',a151='$a151',a152='$a152',a153='$a153',a154='$a154',a155='$a155',a156='$a156',a157='$a157',a158='$a158',a159='$a159',a160='$a160',a161='$a161',a162='$a162',a163='$a163',a164='$a164',a165='$a165',a166='$a166',a167='$a167',a168='$a168',a169='$a169',a170='$a170',a171='$a171',a172='$a172',a173='$a173',a174='$a174',a175='$a175',a176='$a176',a177='$a177',a178='$a178',a179='$a179',a180='$a180' WHERE fecha='$fecha'";
	
	echo "<center><br><br><b> Datos $msg Actualizados! </b></center>";
	echo "<center><br><br><br><br><font face='arial'>
			<a href=reportepmcordon.php>Regresar</a></font></center> ";
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

