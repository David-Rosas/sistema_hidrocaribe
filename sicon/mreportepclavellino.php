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
	$a181 = $_POST["a181"];
	$a182 = $_POST["a182"];
	$a183 = $_POST["a183"];
	$a184 = $_POST["a184"];
	$a185 = $_POST["a185"];
	$a186 = $_POST["a186"];
	$a187 = $_POST["a187"];
	$a188 = $_POST["a188"];
	$a189 = $_POST["a189"];
    $a190 = $_POST["a190"];
	$a191 = $_POST["a191"];
	$a192 = $_POST["a192"];
	$a193 = $_POST["a193"];
	$a194 = $_POST["a194"];
	$a195 = $_POST["a195"];
	$a196 = $_POST["a196"];
	$a197 = $_POST["a197"];
	$a198 = $_POST["a198"];
	$a199 = $_POST["a199"];
	$a200 = $_POST["a200"];
	$a201 = $_POST["a201"];
    $a202 = $_POST["a202"];
	$a203 = $_POST["a203"];
	$a204 = $_POST["a204"];
	$a205 = $_POST["a205"];
	$a206 = $_POST["a206"];
	$a207 = $_POST["a207"];
	$a208 = $_POST["a208"];
	$a209 = $_POST["a209"];
	$a210 = $_POST["a210"];
	$a211 = $_POST["a211"];
	$a212 = $_POST["a212"];
	$a213 = $_POST["a213"];
	$a214 = $_POST["a214"];
	$a215 = $_POST["a215"];
	$a216 = $_POST["a216"];
	$a217 = $_POST["a217"];
	$a218 = $_POST["a218"];
	$a219 = $_POST["a219"];
	$a220 = $_POST["a220"];
	$a221 = $_POST["a221"];
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
	
	
	$sql = "SELECT fecha FROM clavellino WHERE fecha='$fecha'";
	$result = pg_query($sql) or die("$text_noquery");
	
	if(resultadoIndividual($connection,"SELECT fecha FROM clavellino WHERE fecha='$fecha'"))
	{
		$sql = "UPDATE clavellino set a1='$a1',a2='$a2',a3='$a3',a4='$a4',a5='$a5',a6='$a6',a7='$a7',a8='$a8',a9='$a9',a10='$a10',a11='$a11',a12='$a12',a13='$a13',a14='$a14',a15='$a15',a16='$a16',a17='$a17',a18='$a18',a19='$a19',a20='$a20',a21='$a21',a22='$a22',a23='$a23',a24='$a24',a25='$a25',a26='$a26',a27='$a27',a28='$a28',a29='$a29',a30='$a30',a31='$a31',a32='$a32',a33='$a33',a34='$a34',a35='$a35',a36='$a36',a37='$a37',a38='$a38',a39='$a39',a40='$a40',a41='$a41',a42='$a42',a43='$a43',a44='$a44',a45='$a45',a46='$a46',a47='$a47',a48='$a48',a49='$a49',a50='$a50',a51='$a51',a52='$a52',a53='$a53',a54='$a54',a55='$a55',a56='$a56',a57='$a57',a58='$a58',a59='$a59',a60='$a60',a61='$a61',a62='$a62',a63='$a63',a64='$a64',a65='$a65',a66='$a66',a67='$a67',a68='$a68',a69='$a69',a70='$a70',a71='$a71',a72='$a72',a73='$a73',a74='$a74',a75='$a75',a76='$a76',a77='$a77',a78='$a78',a79='$a79',a80='$a80',a81='$a81',a82='$a82',a83='$a83',a84='$a84',a85='$a85',a86='$a86',a87='$a87',a88='$a88',a89='$a89',a90='$a90',a91='$a91',a92='$a92',a93='$a93',a94='$a94',a95='$a95',a96='$a96',a97='$a97',a98='$a98',a99='$a99',a100='$a100',a101='$a101',a102='$a102',a103='$a103',a104='$a104',a105='$a105',a106='$a106',a107='$a107',a108='$a108',a109='$a109',a110='$a110',a111='$a111',a112='$a112',a113='$a113',a114='$a114',a115='$a115',a116='$a116',a117='$a117',a118='$a118',a119='$a119',a120='$a120',a121='$a121',a122='$a122',a123='$a123',a124='$a124',a125='$a125',a126='$a126',a127='$a127',a128='$a128',a129='$a129',a130='$a130',a131='$a131',a132='$a132',a133='$a133',a134='$a134',a135='$a135',a136='$a136',a137='$a137',a138='$a138',a139='$a139',a140='$a140',a141='$a141',a142='$a142',a143='$a143',a144='$a144',a145='$a145',a146='$a146',a147='$a147',a148='$a148',a149='$a149',a150='$a150',a151='$a151',a152='$a152',a153='$a153',a154='$a154',a155='$a155',a156='$a156',a157='$a157',a158='$a158',a159='$a159',a160='$a160',a161='$a161',a162='$a162',a163='$a163',a164='$a164',a165='$a165',a166='$a166',a167='$a167',a168='$a168',a169='$a169',a170='$a170',a171='$a171',a172='$a172',a173='$a173',a174='$a174',a175='$a175',a176='$a176',a177='$a177',a178='$a178',a179='$a179',a180='$a180',a181='$a181',a182='$a182',a183='$a183',a184='$a184',a185='$a185',a186='$a186',a187='$a187',a188='$a188',a189='$a189',a190='$a190',a191='$a191',a192='$a192',a193='$a193',a194='$a194',a195='$a195',a196='$a196',a197='$a197',a198='$a198',a199='$a199',a200='$a200',a201='$a201',a202='$a202',a203='$a203',a204='$a204',a205='$a205',a206='$a206',a207='$a207',a208='$a208',a209='$a209',a210='$a210',a211='$a211',a212='$a212',a213='$a213',a214='$a214',a215='$a215',a216='$a216',a217='$a217',a218='$a218',a219='$a219',a220='$a220',a221='$a221',ts1='$ts1',ts2='$ts2',ts3='$ts3',ts4='$ts4',ts5='$ts5',ts6='$ts6',ts7='$ts7',ts8='$ts8',ts9='$ts9',ts10='$ts10',ts11='$ts11',ts12='$ts12',ts13='$ts13',ts14='$ts14',ts15='$ts15',ts16='$ts16',ts17='$ts17',ts18='$ts18',ts19='$ts19',ts20='$ts20',ts21='$ts21',ts22='$ts22',ts23='$ts23',ts24='$ts24',ts25='$ts25',ts26='$ts26',ts27='$ts27',ts28='$ts28',ts29='$ts29',ts30='$ts30',ts31='$ts31',ts32='$ts32',ts33='$ts33',ts34='$ts34',ts35='$ts35',ts36='$ts36',ts37='$ts37',ts38='$ts38',ts39='$ts39',ts40='$ts40',ts41='$ts41',ts42='$ts42',ts43='$ts43',ts44='$ts44',ts45='$ts45',ts46='$ts46',ts47='$ts47',ts48='$ts48',ts49='$ts49',ts50='$ts50',ts51='$ts51',ts52='$ts52',ts53='$ts53',ts54='$ts54',ts55='$ts55',ts56='$ts56',ts57='$ts57',ts58='$ts58',ts59='$ts59',ts60='$ts60',ts61='$ts61',ts62='$ts62',ts63='$ts63',ts64='$ts64',ts65='$ts65',ts66='$ts66',ts67='$ts67',ts68='$ts68',ts69='$ts69',ts70='$ts70',ts71='$ts71',ts72='$ts72',ts73='$ts73',ts74='$ts74',ts75='$ts75',ts76='$ts76',ts77='$ts77',ts78='$ts78',ts79='$ts79',ts80='$ts80',ts81='$ts81',ts82='$ts82',ts83='$ts83',ts84='$ts84' WHERE fecha='$fecha'";
	echo "<center><br><br><b> Datos $msg Actualizados! </b></center>";
	echo "<center><br><br><br><br><font face='arial'>
			<a href=reportepclavellino.php>Regresar</a></font></center> ";
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
