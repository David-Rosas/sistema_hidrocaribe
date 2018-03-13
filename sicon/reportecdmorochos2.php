<?php
include("funciones/funciones.php");
include("configuracion.php");
$connection = pg_connect("host=$sql_host port=$puerto dbname=$sql_db user=$sql_usuario password=$sql_pass") or die("No se realiz&oacute la conexi&oacute;n Detalles: ".pg_last_error());
    $fecha=$_POST["fecha"];
	
    $sql = "SELECT a1 from morochos WHERE fecha='$fecha'";
	$a1 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a2 from morochos WHERE fecha='$fecha'";
	$a2 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a3 from morochos WHERE fecha='$fecha'";
	$a3 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a4 from morochos WHERE fecha='$fecha'";
	$a4 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a5 from morochos WHERE fecha='$fecha'";
	$a5 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a6 from morochos WHERE fecha='$fecha'";
	$a6 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a7 from morochos WHERE fecha='$fecha'";
	$a7 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a8 from morochos WHERE fecha='$fecha'";
	$a8 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a9 from morochos WHERE fecha='$fecha'";
	$a9= resultadoIndividual($connection,$sql);
	$sql = "SELECT a10 from morochos WHERE fecha='$fecha'";
	$a10 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a11 from morochos WHERE fecha='$fecha'";
	$a11 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a12 from morochos WHERE fecha='$fecha'";
	$a12 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a13 from morochos WHERE fecha='$fecha'";
	$a13 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a14 from morochos WHERE fecha='$fecha'";
	$a14 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a15 from morochos WHERE fecha='$fecha'";
	$a15 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a16 from morochos WHERE fecha='$fecha'";
	$a16 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a17 from morochos WHERE fecha='$fecha'";
	$a17 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a18 from morochos WHERE fecha='$fecha'";
	$a18 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a19 from morochos WHERE fecha='$fecha'";
	$a19= resultadoIndividual($connection,$sql);
	$sql = "SELECT a20 from morochos WHERE fecha='$fecha'";
	$a20 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a21 from morochos WHERE fecha='$fecha'";
	$a21 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a22 from morochos WHERE fecha='$fecha'";
	$a22 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a23 from morochos WHERE fecha='$fecha'";
	$a23 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a24 from morochos WHERE fecha='$fecha'";
	$a24 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a25 from morochos WHERE fecha='$fecha'";
	$a25 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a26 from morochos WHERE fecha='$fecha'";
	$a26 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a27 from morochos WHERE fecha='$fecha'";
	$a27 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a28 from morochos WHERE fecha='$fecha'";
	$a28 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a29 from morochos WHERE fecha='$fecha'";
	$a29= resultadoIndividual($connection,$sql);
	$sql = "SELECT a30 from morochos WHERE fecha='$fecha'";
	$a30 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a31 from morochos WHERE fecha='$fecha'";
	$a31 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a32 from morochos WHERE fecha='$fecha'";
	$a32 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a33 from morochos WHERE fecha='$fecha'";
	$a33 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a34 from morochos WHERE fecha='$fecha'";
	$a34 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a35 from morochos WHERE fecha='$fecha'";
	$a35 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a36 from morochos WHERE fecha='$fecha'";
	$a36 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a37 from morochos WHERE fecha='$fecha'";
	$a37 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a38 from morochos WHERE fecha='$fecha'";
	$a38 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a39 from morochos WHERE fecha='$fecha'";
	$a39= resultadoIndividual($connection,$sql);
	$sql = "SELECT a40 from morochos WHERE fecha='$fecha'";
	$a40 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a41 from morochos WHERE fecha='$fecha'";
	$a41 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a42 from morochos WHERE fecha='$fecha'";
	$a42 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a43 from morochos WHERE fecha='$fecha'";
	$a43 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a44 from morochos WHERE fecha='$fecha'";
	$a44 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a45 from morochos WHERE fecha='$fecha'";
	$a45 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a46 from morochos WHERE fecha='$fecha'";
	$a46 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a47 from morochos WHERE fecha='$fecha'";
	$a47 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a48 from morochos WHERE fecha='$fecha'";
	$a48 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a49 from morochos WHERE fecha='$fecha'";
	$a49= resultadoIndividual($connection,$sql);
	$sql = "SELECT a50 from morochos WHERE fecha='$fecha'";
	$a50 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a51 from morochos WHERE fecha='$fecha'";
	$a51 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a52 from morochos WHERE fecha='$fecha'";
	$a52 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a53 from morochos WHERE fecha='$fecha'";
	$a53 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a54 from morochos WHERE fecha='$fecha'";
	$a54 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a55 from morochos WHERE fecha='$fecha'";
	$a55 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a56 from morochos WHERE fecha='$fecha'";
	$a56 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a57 from morochos WHERE fecha='$fecha'";
	$a57 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a58 from morochos WHERE fecha='$fecha'";
	$a58 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a59 from morochos WHERE fecha='$fecha'";
	$a59= resultadoIndividual($connection,$sql);
	$sql = "SELECT a60 from morochos WHERE fecha='$fecha'";
	$a60 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a61 from morochos WHERE fecha='$fecha'";
	$a61 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a62 from morochos WHERE fecha='$fecha'";
	$a62 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a63 from morochos WHERE fecha='$fecha'";
	$a63 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a64 from morochos WHERE fecha='$fecha'";
	$a64 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a65 from morochos WHERE fecha='$fecha'";
	$a65 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a66 from morochos WHERE fecha='$fecha'";
	$a66 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a67 from morochos WHERE fecha='$fecha'";
	$a67 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a68 from morochos WHERE fecha='$fecha'";
	$a68 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a69 from morochos WHERE fecha='$fecha'";
	$a69= resultadoIndividual($connection,$sql);
	$sql = "SELECT a70 from morochos WHERE fecha='$fecha'";
	$a70 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a71 from morochos WHERE fecha='$fecha'";
	$a71 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a72 from morochos WHERE fecha='$fecha'";
	$a72 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a73 from morochos WHERE fecha='$fecha'";
	$a73 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a74 from morochos WHERE fecha='$fecha'";
	$a74 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a75 from morochos WHERE fecha='$fecha'";
	$a75 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a76 from morochos WHERE fecha='$fecha'";
	$a76 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a77 from morochos WHERE fecha='$fecha'";
	$a77 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a78 from morochos WHERE fecha='$fecha'";
	$a78 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a79 from morochos WHERE fecha='$fecha'";
	$a79= resultadoIndividual($connection,$sql);
	$sql = "SELECT a80 from morochos WHERE fecha='$fecha'";
	$a80 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a81 from morochos WHERE fecha='$fecha'";
	$a81 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a82 from morochos WHERE fecha='$fecha'";
	$a82 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a83 from morochos WHERE fecha='$fecha'";
	$a83 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a84 from morochos WHERE fecha='$fecha'";
	$a84 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a85 from morochos WHERE fecha='$fecha'";
	$a85 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a86 from morochos WHERE fecha='$fecha'";
	$a86 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a87 from morochos WHERE fecha='$fecha'";
	$a87 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a88 from morochos WHERE fecha='$fecha'";
	$a88 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a89 from morochos WHERE fecha='$fecha'";
	$a89= resultadoIndividual($connection,$sql);
	$sql = "SELECT a90 from morochos WHERE fecha='$fecha'";
	$a90 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a91 from morochos WHERE fecha='$fecha'";
	$a91 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a92 from morochos WHERE fecha='$fecha'";
	$a92 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a93 from morochos WHERE fecha='$fecha'";
	$a93 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a94 from morochos WHERE fecha='$fecha'";
	$a94 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a95 from morochos WHERE fecha='$fecha'";
	$a95 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a96 from morochos WHERE fecha='$fecha'";
	$a96 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a97 from morochos WHERE fecha='$fecha'";
	$a97 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a98 from morochos WHERE fecha='$fecha'";
	$a98 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a99 from morochos WHERE fecha='$fecha'";
	$a99= resultadoIndividual($connection,$sql);
	$sql = "SELECT a100 from morochos WHERE fecha='$fecha'";
	$a100 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a101 from morochos WHERE fecha='$fecha'";
	$a101 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a102 from morochos WHERE fecha='$fecha'";
	$a102 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a103 from morochos WHERE fecha='$fecha'";
	$a103 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a104 from morochos WHERE fecha='$fecha'";
	$a104 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a105 from morochos WHERE fecha='$fecha'";
	$a105 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a106 from morochos WHERE fecha='$fecha'";
	$a106 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a107 from morochos WHERE fecha='$fecha'";
	$a107 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a108 from morochos WHERE fecha='$fecha'";
	$a108 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a109 from morochos WHERE fecha='$fecha'";
	$a109= resultadoIndividual($connection,$sql);
	$sql = "SELECT a110 from morochos WHERE fecha='$fecha'";
	$a110 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a111 from morochos WHERE fecha='$fecha'";
	$a111 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a112 from morochos WHERE fecha='$fecha'";
	$a112 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a113 from morochos WHERE fecha='$fecha'";
	$a113 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a114 from morochos WHERE fecha='$fecha'";
	$a114 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a115 from morochos WHERE fecha='$fecha'";
	$a115 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a116 from morochos WHERE fecha='$fecha'";
	$a116 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a117 from morochos WHERE fecha='$fecha'";
	$a117 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a118 from morochos WHERE fecha='$fecha'";
	$a118 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a119 from morochos WHERE fecha='$fecha'";
	$a119= resultadoIndividual($connection,$sql);
	$sql = "SELECT a120 from morochos WHERE fecha='$fecha'";
	$a120 = resultadoIndividual($connection,$sql);
	
	
	
?>
<html>
<head>
		
  <!-Hoja de estilos del calendario -->
  <link rel="stylesheet" type="text/css" media="all" href="calendar-blue.css" title="winter" />

  <!-- librería principal del calendario -->
  <script type="text/javascript" src="javascript/calendar.js"></script>

  <!-- librería para cargar el lenguaje deseado -->
  <script type="text/javascript" src="javascript/lang/calendar-es.js"></script>

  <!-- librería que declara la función Calendar.setup, que ayuda a generar un calendario en unas pocas líneas de código -->
  <script type="text/javascript" src="javascript/calendar-setup.js"></script>
	
</head>

<body>
<br />
<br />

<h3 align="center">Reporte Control Diario Estanques Los Morochos</h3>

<!-- formu lario con el campo de texto y el botón para lanzar el calendario-->
<form method="post">
<td align=center>Fecha</td><input type="text" name="fecha"  id="fecha" value="<? echo $fecha ?>"/>
<input type="button" id="lanzador"  value="..." />


<!-- script que define y configura el calendario-->
<script type="text/javascript">
    Calendar.setup({
        inputField     :    "fecha",      // id del campo de texto
        ifFormat       :    "%d/%m/%Y",       // formato de la fecha, cuando se escriba en el campo de texto
        button         :    "lanzador"   // el id del botón que lanzará el calendario
    });
</script>

</html>
<table width="600" border="1">
  <tr>
    <td>Hora</td>
    <td>Caudal(L/s)</td>
    <td>Estanque  Nº1(M3)</td>
    <td>Estanque  Nº2(M3)</td>
    <td>Nivel Total</td>
    <td>Observaciones</td>
  </tr>
  <tr>
    <td>06:00 am</td>
     <td><input name="a1" type="text" id="a1" value="<? echo $a1 ?>" size="5"></td>
    <td><input name="a2" type="text" id="a2" value="<? echo $a2 ?>" size="5"></td>
    <td><input name="a3" type="text" id="a3" value="<? echo $a3 ?>" size="5"></td>
    <td><input name="a4" type="text" id="a4" value="<? echo $a4 ?>" size="5"></td>
    <td><input name="a5" type="text" id="a5" value="<? echo $a5 ?>" size="5"></td>
  </tr>
  <tr>
    <td>07:00 am</td>
     <td><input name="a6" type="text" id="a6" value="<? echo $a6 ?>" size="5"></td>
    <td><input name="a7" type="text" id="a7" value="<? echo $a7 ?>" size="5"></td>
    <td><input name="a8" type="text" id="a8" value="<? echo $a8 ?>" size="5"></td>
    <td><input name="a9" type="text" id="a9" value="<? echo $a9 ?>" size="5"></td>
    <td><input name="a10" type="text" id="a10" value="<? echo $a10 ?>" size="5"></td>
  </tr>
  <tr>
    <td>08:00 am</td>
    <td><input name="a11" type="text" id="a11" value="<? echo $a11 ?>" size="5"></td>
    <td><input name="a12" type="text" id="a12" value="<? echo $a12 ?>" size="5"></td>
    <td><input name="a13" type="text" id="a13" value="<? echo $a13 ?>" size="5"></td>
    <td><input name="a14" type="text" id="a14" value="<? echo $a14 ?>" size="5"></td>
    <td><input name="a15" type="text" id="a15" value="<? echo $a15 ?>" size="5"></td>
  </tr>
  <tr>
    <td>09:00 am</td>
    <td><input name="a16" type="text" id="a16" value="<? echo $a16 ?>" size="5"></td>
    <td><input name="a17" type="text" id="a17" value="<? echo $a17 ?>" size="5"></td>
    <td><input name="a18" type="text" id="a18" value="<? echo $a18 ?>" size="5"></td>
    <td><input name="a19" type="text" id="a19" value="<? echo $a19 ?>" size="5"></td>
    <td><input name="a20" type="text" id="a20" value="<? echo $a20 ?>" size="5"></td>
  </tr>
  <tr>
    <td>10:00 am</td>
      <td><input name="a21" type="text" id="a21" value="<? echo $a21 ?>" size="5"></td>
    <td><input name="a22" type="text" id="a22" value="<? echo $a22 ?>" size="5"></td>
    <td><input name="a23" type="text" id="a23" value="<? echo $a23 ?>" size="5"></td>
    <td><input name="a24" type="text" id="a24" value="<? echo $a24 ?>" size="5"></td>
    <td><input name="a25" type="text" id="a25" value="<? echo $a25 ?>" size="5"></td>
  </tr>
  <tr>
    <td>11:00 am</td>
    <td><input name="a26" type="text" id="a26" value="<? echo $a26 ?>" size="5"></td>
    <td><input name="a27" type="text" id="a27" value="<? echo $a27 ?>" size="5"></td>
    <td><input name="a28" type="text" id="a28" value="<? echo $a28 ?>" size="5"></td>
    <td><input name="a29" type="text" id="a29" value="<? echo $a29 ?>" size="5"></td>
    <td><input name="a30" type="text" id="a30" value="<? echo $a30 ?>" size="5"></td>
  </tr>
  <tr>
    <td>12:00 pm</td>
     <td><input name="a31" type="text" id="a31" value="<? echo $a31 ?>" size="5"></td>
    <td><input name="a32" type="text" id="a32" value="<? echo $a32 ?>" size="5"></td>
    <td><input name="a33" type="text" id="a33" value="<? echo $a33 ?>" size="5"></td>
    <td><input name="a34" type="text" id="a34" value="<? echo $a34 ?>" size="5"></td>
    <td><input name="a35" type="text" id="a35" value="<? echo $a35 ?>" size="5"></td>
  </tr>
  <tr>
    <td>01:00 pm</td>
    <td><input name="a36" type="text" id="a36" value="<? echo $a36 ?>" size="5"></td>
    <td><input name="a37" type="text" id="a37" value="<? echo $a37 ?>" size="5"></td>
    <td><input name="a38" type="text" id="a38" value="<? echo $a38 ?>" size="5"></td>
    <td><input name="a39" type="text" id="a39" value="<? echo $a39 ?>" size="5"></td>
    <td><input name="a40" type="text" id="a40" value="<? echo $a40 ?>" size="5"></td>
  </tr>
  <tr>
    <td>02:00 pm</td>
     <td><input name="a41" type="text" id="a41" value="<? echo $a41 ?>" size="5"></td>
    <td><input name="a42" type="text" id="a42" value="<? echo $a42 ?>" size="5"></td>
    <td><input name="a43" type="text" id="a43" value="<? echo $a43 ?>" size="5"></td>
    <td><input name="a44" type="text" id="a44" value="<? echo $a44 ?>" size="5"></td>
    <td><input name="a45" type="text" id="a45" value="<? echo $a45 ?>" size="5"></td>
  </tr>
  <tr>
    <td>03:00 pm</td>
    <td><input name="a46" type="text" id="a46" value="<? echo $a46 ?>" size="5"></td>
    <td><input name="a47" type="text" id="a47" value="<? echo $a47 ?>" size="5"></td>
    <td><input name="a48" type="text" id="a48" value="<? echo $a48 ?>" size="5"></td>
    <td><input name="a49" type="text" id="a49" value="<? echo $a49 ?>" size="5"></td>
    <td><input name="a50" type="text" id="a50" value="<? echo $a50 ?>" size="5"></td>
  </tr>
  <tr>
    <td>04:00 pm</td>
    <td><input name="a51" type="text" id="a51" value="<? echo $a51 ?>" size="5"></td>
    <td><input name="a52" type="text" id="a52" value="<? echo $a52 ?>" size="5"></td>
    <td><input name="a53" type="text" id="a53" value="<? echo $a53 ?>" size="5"></td>
    <td><input name="a54" type="text" id="a54" value="<? echo $a54 ?>" size="5"></td>
    <td><input name="a55" type="text" id="a55" value="<? echo $a55 ?>" size="5"></td>
  </tr>
  <tr>
    <td>05:00 pm</td>
    <td><input name="a56" type="text" id="a56" value="<? echo $a56 ?>" size="5"></td>
    <td><input name="a57" type="text" id="a57" value="<? echo $a57 ?>" size="5"></td>
    <td><input name="a58" type="text" id="a58" value="<? echo $a58 ?>" size="5"></td>
    <td><input name="a59" type="text" id="a59" value="<? echo $a59 ?>" size="5"></td>
    <td><input name="a60" type="text" id="a60" value="<? echo $a60 ?>" size="5"></td>
  </tr>
  <tr>
    <td>06:00 pm</td>
    <td><input name="a61" type="text" id="a61" value="<? echo $a61 ?>" size="5"></td>
    <td><input name="a62" type="text" id="a62" value="<? echo $a62 ?>" size="5"></td>
    <td><input name="a63" type="text" id="a63" value="<? echo $a63 ?>" size="5"></td>
    <td><input name="a64" type="text" id="a64" value="<? echo $a64 ?>" size="5"></td>
    <td><input name="a65" type="text" id="a65" value="<? echo $a65 ?>" size="5"></td>
  </tr>
  <tr>
    <td>07:00 pm</td>
     <td><input name="a66" type="text" id="a66" value="<? echo $a66 ?>" size="5"></td>
    <td><input name="a67" type="text" id="a67" value="<? echo $a67 ?>" size="5"></td>
    <td><input name="a68" type="text" id="a68" value="<? echo $a68 ?>" size="5"></td>
    <td><input name="a69" type="text" id="a69" value="<? echo $a69 ?>" size="5"></td>
    <td><input name="a70" type="text" id="a70" value="<? echo $a70 ?>" size="5"></td>
  </tr>
  <tr>
    <td>08:00 pm</td>
     <td><input name="a71" type="text" id="a71" value="<? echo $a71 ?>" size="5"></td>
    <td><input name="a72" type="text" id="a72" value="<? echo $a72 ?>" size="5"></td>
    <td><input name="a73" type="text" id="a73" value="<? echo $a73 ?>" size="5"></td>
    <td><input name="a74" type="text" id="a74" value="<? echo $a74 ?>" size="5"></td>
    <td><input name="a75" type="text" id="a75" value="<? echo $a75 ?>" size="5"></td>
  </tr>
  <tr>
    <td>09:00 pm</td>
   <td><input name="a76" type="text" id="a76" value="<? echo $a76 ?>" size="5"></td>
    <td><input name="a77" type="text" id="a77" value="<? echo $a77 ?>" size="5"></td>
    <td><input name="a78" type="text" id="a78" value="<? echo $a78 ?>" size="5"></td>
    <td><input name="a79" type="text" id="a79" value="<? echo $a79 ?>" size="5"></td>
    <td><input name="a80" type="text" id="a80" value="<? echo $a80 ?>" size="5"></td>
  </tr>
  <tr>
    <td>10:00 pm</td>
    <td><input name="a81" type="text" id="a81" value="<? echo $a81 ?>" size="5"></td>
    <td><input name="a82" type="text" id="a82" value="<? echo $a82 ?>" size="5"></td>
    <td><input name="a83" type="text" id="a83" value="<? echo $a83 ?>" size="5"></td>
    <td><input name="a84" type="text" id="a84" value="<? echo $a84 ?>" size="5"></td>
    <td><input name="a85" type="text" id="a85" value="<? echo $a85 ?>" size="5"></td>
  </tr>
  <tr>
    <td>11:00 pm</td>
   <td><input name="a86" type="text" id="a86" value="<? echo $a86 ?>" size="5"></td>
    <td><input name="a87" type="text" id="a87" value="<? echo $a87 ?>" size="5"></td>
    <td><input name="a88" type="text" id="a88" value="<? echo $a88 ?>" size="5"></td>
    <td><input name="a89" type="text" id="a89" value="<? echo $a89 ?>" size="5"></td>
    <td><input name="a90" type="text" id="a90" value="<? echo $a90 ?>" size="5"></td>
  </tr>
  <tr>
    <td>12:00 am</td>
     <td><input name="a91" type="text" id="a91" value="<? echo $a91 ?>" size="5"></td>
    <td><input name="a92" type="text" id="a92" value="<? echo $a92 ?>" size="5"></td>
    <td><input name="a93" type="text" id="a93" value="<? echo $a93 ?>" size="5"></td>
    <td><input name="a94" type="text" id="a94" value="<? echo $a94 ?>" size="5"></td>
    <td><input name="a95" type="text" id="a95" value="<? echo $a95 ?>" size="5"></td>
  </tr>
  <tr>
    <td>01:00 am</td>
     <td><input name="a96" type="text" id="a96" value="<? echo $a96 ?>" size="5"></td>
    <td><input name="a97" type="text" id="a97" value="<? echo $a97 ?>" size="5"></td>
    <td><input name="a98" type="text" id="a98" value="<? echo $a98 ?>" size="5"></td>
    <td><input name="a99" type="text" id="a99" value="<? echo $a99 ?>" size="5"></td>
    <td><input name="a100" type="text" id="a100" value="<? echo $a100 ?>" size="5"></td>
  </tr>
  <tr>
    <td>02:00 am</td>
      <td><input name="a101" type="text" id="a101" value="<? echo $a101 ?>" size="5"></td>
    <td><input name="a102" type="text" id="a102" value="<? echo $a102 ?>" size="5"></td>
    <td><input name="a103" type="text" id="a103" value="<? echo $a103 ?>" size="5"></td>
    <td><input name="a104" type="text" id="a104" value="<? echo $a104 ?>" size="5"></td>
    <td><input name="a105" type="text" id="a105" value="<? echo $a105 ?>" size="5"></td>
  </tr>
  <tr>
    <td>03:00 am</td>
     <td><input name="a106" type="text" id="a106" value="<? echo $a106 ?>" size="5"></td>
    <td><input name="a107" type="text" id="a107" value="<? echo $a107 ?>" size="5"></td>
    <td><input name="a108" type="text" id="a108" value="<? echo $a108 ?>" size="5"></td>
    <td><input name="a109" type="text" id="a109" value="<? echo $a109 ?>" size="5"></td>
    <td><input name="a110" type="text" id="a110" value="<? echo $a110 ?>" size="5"></td>
  </tr>
  <tr>
    <td>04:00 am</td>
     <td><input name="a111" type="text" id="a111" value="<? echo $a111 ?>" size="5"></td>
    <td><input name="a112" type="text" id="a112" value="<? echo $a112 ?>" size="5"></td>
    <td><input name="a113" type="text" id="a113" value="<? echo $a113 ?>" size="5"></td>
    <td><input name="a114" type="text" id="a114" value="<? echo $a114 ?>" size="5"></td>
    <td><input name="a115" type="text" id="a115" value="<? echo $a115 ?>" size="5"></td>
  </tr>
  <tr>
    <td>05:00 am</td>
   <td><input name="a116" type="text" id="a116" value="<? echo $a116 ?>" size="5"></td>
    <td><input name="a117" type="text" id="a117" value="<? echo $a117 ?>" size="5"></td>
    <td><input name="a118" type="text" id="a118" value="<? echo $a118 ?>" size="5"></td>
    <td><input name="a119" type="text" id="a119" value="<? echo $a119 ?>" size="5"></td>
    <td><input name="a120" type="text" id="a120" value="<? echo $a120 ?>" size="5"></td>
  </tr>
</table>

<br>

<input type="submit" value="Buscar" onClick="this.form.action='rbreportecdmorochos.php'">
</form>

</html>