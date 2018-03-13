<?
include("funciones/funciones.php");
include("configuracion.php");
$connection = pg_connect("host=$sql_host port=$puerto dbname=$sql_db user=$sql_usuario password=$sql_pass") or die("No se realiz&oacute la conexi&oacute;n Detalles: ".pg_last_error());
    $fecha=$_POST["fecha"];
	
    $sql = "SELECT a1 from diario3 WHERE fecha='$fecha'";
	$a1 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a2 from diario3 WHERE fecha='$fecha'";
	$a2 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a3 from diario3 WHERE fecha='$fecha'";
	$a3 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a4 from diario3 WHERE fecha='$fecha'";
	$a4 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a5 from diario3 WHERE fecha='$fecha'";
	$a5 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a6 from diario3 WHERE fecha='$fecha'";
	$a6 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a7 from diario3 WHERE fecha='$fecha'";
	$a7 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a8 from diario3 WHERE fecha='$fecha'";
	$a8 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a9 from diario3 WHERE fecha='$fecha'";
	$a9 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a10 from diario3 WHERE fecha='$fecha'";
	$a10 = resultadoIndividual($connection,$sql);
	
	$sql = "SELECT b1 from diario3 WHERE fecha='$fecha'";
	$b1 = resultadoIndividual($connection,$sql);
	$sql = "SELECT b2 from diario3 WHERE fecha='$fecha'";
	$b2 = resultadoIndividual($connection,$sql);
	$sql = "SELECT b3 from diario3 WHERE fecha='$fecha'";
	$b3 = resultadoIndividual($connection,$sql);
	$sql = "SELECT b4 from diario3 WHERE fecha='$fecha'";
	$b4 = resultadoIndividual($connection,$sql);
	$sql = "SELECT b5 from diario3 WHERE fecha='$fecha'";
	$b5 = resultadoIndividual($connection,$sql);
	$sql = "SELECT b6 from diario3 WHERE fecha='$fecha'";
	$b6 = resultadoIndividual($connection,$sql);
	$sql = "SELECT b7 from diario3 WHERE fecha='$fecha'";
	$b7 = resultadoIndividual($connection,$sql);
	$sql = "SELECT b8 from diario3 WHERE fecha='$fecha'";
	$b8 = resultadoIndividual($connection,$sql);
	$sql = "SELECT b9 from diario3 WHERE fecha='$fecha'";
	$b9 = resultadoIndividual($connection,$sql);
	$sql = "SELECT b10 from diario3 WHERE fecha='$fecha'";
	$b10 = resultadoIndividual($connection,$sql);

	$sql = "SELECT c1 from diario3 WHERE fecha='$fecha'";
	$c1 = resultadoIndividual($connection,$sql);
	$sql = "SELECT c2 from diario3 WHERE fecha='$fecha'";
	$c2 = resultadoIndividual($connection,$sql);
	$sql = "SELECT c3 from diario3 WHERE fecha='$fecha'";
	$c3 = resultadoIndividual($connection,$sql);
	$sql = "SELECT c4 from diario3 WHERE fecha='$fecha'";
	$c4 = resultadoIndividual($connection,$sql);
	$sql = "SELECT c5 from diario3 WHERE fecha='$fecha'";
	$c5 = resultadoIndividual($connection,$sql);
	$sql = "SELECT c6 from diario3 WHERE fecha='$fecha'";
	$c6 = resultadoIndividual($connection,$sql);
	$sql = "SELECT c7 from diario3 WHERE fecha='$fecha'";
	$c7 = resultadoIndividual($connection,$sql);
	$sql = "SELECT c8 from diario3 WHERE fecha='$fecha'";
	$c8 = resultadoIndividual($connection,$sql);
	$sql = "SELECT c9 from diario3 WHERE fecha='$fecha'";
	$c9 = resultadoIndividual($connection,$sql);
	$sql = "SELECT c10 from diario3 WHERE fecha='$fecha'";
	$c10 = resultadoIndividual($connection,$sql);
	
	$sql = "SELECT d1 from diario3 WHERE fecha='$fecha'";
	$d1 = resultadoIndividual($connection,$sql);
	$sql = "SELECT d2 from diario3 WHERE fecha='$fecha'";
	$d2 = resultadoIndividual($connection,$sql);
	$sql = "SELECT d3 from diario3 WHERE fecha='$fecha'";
	$d3 = resultadoIndividual($connection,$sql);
	$sql = "SELECT d4 from diario3 WHERE fecha='$fecha'";
	$d4 = resultadoIndividual($connection,$sql);
	$sql = "SELECT d5 from diario3 WHERE fecha='$fecha'";
	$d5 = resultadoIndividual($connection,$sql);
	$sql = "SELECT d6 from diario3 WHERE fecha='$fecha'";
	$d6 = resultadoIndividual($connection,$sql);
	$sql = "SELECT d7 from diario3 WHERE fecha='$fecha'";
	$d7 = resultadoIndividual($connection,$sql);
	$sql = "SELECT d8 from diario3 WHERE fecha='$fecha'";
	$d8 = resultadoIndividual($connection,$sql);
	$sql = "SELECT d9 from diario3 WHERE fecha='$fecha'";
	$d9 = resultadoIndividual($connection,$sql);
	$sql = "SELECT d10 from diario3 WHERE fecha='$fecha'";
	$d10 = resultadoIndividual($connection,$sql);
	
	$sql = "SELECT e1 from diario3 WHERE fecha='$fecha'";
	$e1 = resultadoIndividual($connection,$sql);
	$sql = "SELECT e2 from diario3 WHERE fecha='$fecha'";
	$e2 = resultadoIndividual($connection,$sql);
	$sql = "SELECT e3 from diario3 WHERE fecha='$fecha'";
	$e3 = resultadoIndividual($connection,$sql);
	$sql = "SELECT e4 from diario3 WHERE fecha='$fecha'";
	$e4 = resultadoIndividual($connection,$sql);
	$sql = "SELECT e5 from diario3 WHERE fecha='$fecha'";
	$e5 = resultadoIndividual($connection,$sql);
	$sql = "SELECT e6 from diario3 WHERE fecha='$fecha'";
	$e6 = resultadoIndividual($connection,$sql);
	$sql = "SELECT e7 from diario3 WHERE fecha='$fecha'";
	$e7 = resultadoIndividual($connection,$sql);
	$sql = "SELECT e8 from diario3 WHERE fecha='$fecha'";
	$e8 = resultadoIndividual($connection,$sql);
	$sql = "SELECT e9 from diario3 WHERE fecha='$fecha'";
	$e9 = resultadoIndividual($connection,$sql);
	$sql = "SELECT e10 from diario3 WHERE fecha='$fecha'";
	$e10 = resultadoIndividual($connection,$sql);
	
	$sql = "SELECT f1 from diario3 WHERE fecha='$fecha'";
	$f1 = resultadoIndividual($connection,$sql);
	$sql = "SELECT f2 from diario3 WHERE fecha='$fecha'";
	$f2 = resultadoIndividual($connection,$sql);
	$sql = "SELECT f3 from diario3 WHERE fecha='$fecha'";
	$f3 = resultadoIndividual($connection,$sql);
	$sql = "SELECT f4 from diario3 WHERE fecha='$fecha'";
	$f4 = resultadoIndividual($connection,$sql);
	$sql = "SELECT f5 from diario3 WHERE fecha='$fecha'";
	$f5 = resultadoIndividual($connection,$sql);
	$sql = "SELECT f6 from diario3 WHERE fecha='$fecha'";
	$f6 = resultadoIndividual($connection,$sql);
	$sql = "SELECT f7 from diario3 WHERE fecha='$fecha'";
	$f7 = resultadoIndividual($connection,$sql);
	$sql = "SELECT f8 from diario3 WHERE fecha='$fecha'";
	$f8 = resultadoIndividual($connection,$sql);
	$sql = "SELECT f9 from diario3 WHERE fecha='$fecha'";
	$f9 = resultadoIndividual($connection,$sql);
	$sql = "SELECT f10 from diario3 WHERE fecha='$fecha'";
	$f10 = resultadoIndividual($connection,$sql);
	
	$sql = "SELECT g1 from diario3 WHERE fecha='$fecha'";
	$g1 = resultadoIndividual($connection,$sql);
	$sql = "SELECT g2 from diario3 WHERE fecha='$fecha'";
	$g2 = resultadoIndividual($connection,$sql);
	$sql = "SELECT g3 from diario3 WHERE fecha='$fecha'";
	$g3 = resultadoIndividual($connection,$sql);
	$sql = "SELECT g4 from diario3 WHERE fecha='$fecha'";
	$g4 = resultadoIndividual($connection,$sql);
	$sql = "SELECT g5 from diario3 WHERE fecha='$fecha'";
	$g5 = resultadoIndividual($connection,$sql);
	$sql = "SELECT g6 from diario3 WHERE fecha='$fecha'";
	$g6 = resultadoIndividual($connection,$sql);
	$sql = "SELECT g7 from diario3 WHERE fecha='$fecha'";
	$g7 = resultadoIndividual($connection,$sql);
	$sql = "SELECT g8 from diario3 WHERE fecha='$fecha'";
	$g8 = resultadoIndividual($connection,$sql);
	$sql = "SELECT g9 from diario3 WHERE fecha='$fecha'";
	$g9 = resultadoIndividual($connection,$sql);
	$sql = "SELECT g10 from diario3 WHERE fecha='$fecha'";
	$g10 = resultadoIndividual($connection,$sql);
	$sql = "SELECT ts1 from diario3 WHERE fecha='$fecha'";
	$ts1 = resultadoIndividual($connection,$sql);
	$sql = "SELECT ts2 from diario3 WHERE fecha='$fecha'";
	$ts2 = resultadoIndividual($connection,$sql);
	$sql = "SELECT ts3 from diario3 WHERE fecha='$fecha'";
	$ts3 = resultadoIndividual($connection,$sql);
	$sql = "SELECT ts4 from diario3 WHERE fecha='$fecha'";
	$ts4 = resultadoIndividual($connection,$sql);
	$sql = "SELECT ts5 from diario3 WHERE fecha='$fecha'";
	$ts5 = resultadoIndividual($connection,$sql);
	$sql = "SELECT ts6 from diario3 WHERE fecha='$fecha'";
	$ts6 = resultadoIndividual($connection,$sql);
	$sql = "SELECT ts7 from diario3 WHERE fecha='$fecha'";
	$ts7 = resultadoIndividual($connection,$sql);
	$sql = "SELECT ts8 from diario3 WHERE fecha='$fecha'";
	$ts8 = resultadoIndividual($connection,$sql);
	$sql = "SELECT ts9 from diario3 WHERE fecha='$fecha'";
	$ts9 = resultadoIndividual($connection,$sql);
	$sql = "SELECT ts10 from diario3 WHERE fecha='$fecha'";
	$ts10 = resultadoIndividual($connection,$sql);
	$sql = "SELECT ts11 from diario3 WHERE fecha='$fecha'";
	$ts11 = resultadoIndividual($connection,$sql);
	$sql = "SELECT ts12 from diario3 WHERE fecha='$fecha'";
	$ts12 = resultadoIndividual($connection,$sql);
	$sql = "SELECT ts13 from diario3 WHERE fecha='$fecha'";
	$ts13 = resultadoIndividual($connection,$sql);
	$sql = "SELECT ts14 from diario3 WHERE fecha='$fecha'";
	$ts14 = resultadoIndividual($connection,$sql);
	$sql = "SELECT ts15 from diario3 WHERE fecha='$fecha'";
	$ts15 = resultadoIndividual($connection,$sql);
	$sql = "SELECT ts16 from diario3 WHERE fecha='$fecha'";
	$ts16 = resultadoIndividual($connection,$sql);
	$sql = "SELECT ts17 from diario3 WHERE fecha='$fecha'";
	$ts17 = resultadoIndividual($connection,$sql);
	$sql = "SELECT ts18 from diario3 WHERE fecha='$fecha'";
	$ts18 = resultadoIndividual($connection,$sql);
	$sql = "SELECT ts19 from diario3 WHERE fecha='$fecha'";
	$ts19 = resultadoIndividual($connection,$sql);
	$sql = "SELECT ts20 from diario3 WHERE fecha='$fecha'";
	$ts20 = resultadoIndividual($connection,$sql);
	$sql = "SELECT ts21 from diario3 WHERE fecha='$fecha'";
	$ts21 = resultadoIndividual($connection,$sql);
	$sql = "SELECT ts22 from diario3 WHERE fecha='$fecha'";
	$ts22 = resultadoIndividual($connection,$sql);
	$sql = "SELECT ts23 from diario3 WHERE fecha='$fecha'";
	$ts23 = resultadoIndividual($connection,$sql);
	$sql = "SELECT ts24 from diario3 WHERE fecha='$fecha'";
	$ts24 = resultadoIndividual($connection,$sql);
	$sql = "SELECT ts25 from diario3 WHERE fecha='$fecha'";
	$ts25 = resultadoIndividual($connection,$sql);
	$sql = "SELECT ts26 from diario3 WHERE fecha='$fecha'";
	$ts26 = resultadoIndividual($connection,$sql);
	$sql = "SELECT ts27 from diario3 WHERE fecha='$fecha'";
	$ts27 = resultadoIndividual($connection,$sql);
	$sql = "SELECT ts28 from diario3 WHERE fecha='$fecha'";
	$ts28 = resultadoIndividual($connection,$sql);
	$sql = "SELECT ts29 from diario3 WHERE fecha='$fecha'";
	$ts29 = resultadoIndividual($connection,$sql);
	$sql = "SELECT ts30 from diario3 WHERE fecha='$fecha'";
	$ts30 = resultadoIndividual($connection,$sql);
	$sql = "SELECT ts31 from diario3 WHERE fecha='$fecha'";
	$ts31 = resultadoIndividual($connection,$sql);
	$sql = "SELECT ts32 from diario3 WHERE fecha='$fecha'";
	$ts32 = resultadoIndividual($connection,$sql);
	$sql = "SELECT ts33 from diario3 WHERE fecha='$fecha'";
	$ts33 = resultadoIndividual($connection,$sql);
	$sql = "SELECT ts34 from diario3 WHERE fecha='$fecha'";
	$ts34 = resultadoIndividual($connection,$sql);
	$sql = "SELECT ts35 from diario3 WHERE fecha='$fecha'";
	$ts35 = resultadoIndividual($connection,$sql);
	$sql = "SELECT ts36 from diario3 WHERE fecha='$fecha'";
	$ts36 = resultadoIndividual($connection,$sql);
	$sql = "SELECT ts37 from diario3 WHERE fecha='$fecha'";
	$ts37 = resultadoIndividual($connection,$sql);
	$sql = "SELECT ts38 from diario3 WHERE fecha='$fecha'";
	$ts38 = resultadoIndividual($connection,$sql);
	$sql = "SELECT ts39 from diario3 WHERE fecha='$fecha'";
	$ts39 = resultadoIndividual($connection,$sql);
	$sql = "SELECT ts40 from diario3 WHERE fecha='$fecha'";
	$ts40 = resultadoIndividual($connection,$sql);
	$sql = "SELECT ts41 from diario3 WHERE fecha='$fecha'";
	$ts41 = resultadoIndividual($connection,$sql);
	$sql = "SELECT ts42 from diario3 WHERE fecha='$fecha'";
	$ts42 = resultadoIndividual($connection,$sql);
	$sql = "SELECT ts43 from diario3 WHERE fecha='$fecha'";
	$ts43 = resultadoIndividual($connection,$sql);
	$sql = "SELECT ts44 from diario3 WHERE fecha='$fecha'";
	$ts44 = resultadoIndividual($connection,$sql);
	$sql = "SELECT ts45 from diario3 WHERE fecha='$fecha'";
	$ts45 = resultadoIndividual($connection,$sql);
	$sql = "SELECT ts46 from diario3 WHERE fecha='$fecha'";
	$ts46 = resultadoIndividual($connection,$sql);
	$sql = "SELECT ts47 from diario3 WHERE fecha='$fecha'";
	$ts47 = resultadoIndividual($connection,$sql);
	$sql = "SELECT ts48 from diario3 WHERE fecha='$fecha'";
	$ts48 = resultadoIndividual($connection,$sql);
	$sql = "SELECT ts49 from diario3 WHERE fecha='$fecha'";
	$ts49 = resultadoIndividual($connection,$sql);
	$sql = "SELECT ts50 from diario3 WHERE fecha='$fecha'";
	$ts50 = resultadoIndividual($connection,$sql);
	$sql = "SELECT ts51 from diario3 WHERE fecha='$fecha'";
	$ts51 = resultadoIndividual($connection,$sql);
	$sql = "SELECT ts52 from diario3 WHERE fecha='$fecha'";
	$ts52 = resultadoIndividual($connection,$sql);
	$sql = "SELECT ts53 from diario3 WHERE fecha='$fecha'";
	$ts53 = resultadoIndividual($connection,$sql);
	$sql = "SELECT ts54 from diario3 WHERE fecha='$fecha'";
	$ts54 = resultadoIndividual($connection,$sql);
	$sql = "SELECT ts55 from diario3 WHERE fecha='$fecha'";
	$ts55 = resultadoIndividual($connection,$sql);
	$sql = "SELECT ts56 from diario3 WHERE fecha='$fecha'";
	$ts56 = resultadoIndividual($connection,$sql);
	$sql = "SELECT ts57 from diario3 WHERE fecha='$fecha'";
	$ts57 = resultadoIndividual($connection,$sql);
	$sql = "SELECT ts58 from diario3 WHERE fecha='$fecha'";
	$ts58 = resultadoIndividual($connection,$sql);
	$sql = "SELECT ts59 from diario3 WHERE fecha='$fecha'";
	$ts59 = resultadoIndividual($connection,$sql);
	$sql = "SELECT ts60 from diario3 WHERE fecha='$fecha'";
	$ts60 = resultadoIndividual($connection,$sql);
	$sql = "SELECT ts61 from diario3 WHERE fecha='$fecha'";
	$ts61 = resultadoIndividual($connection,$sql);
	$sql = "SELECT ts62 from diario3 WHERE fecha='$fecha'";
	$ts62 = resultadoIndividual($connection,$sql);
	$sql = "SELECT ts63 from diario3 WHERE fecha='$fecha'";
	$ts63 = resultadoIndividual($connection,$sql);
	$sql = "SELECT ts64 from diario3 WHERE fecha='$fecha'";
	$ts64 = resultadoIndividual($connection,$sql);
	$sql = "SELECT ts65 from diario3 WHERE fecha='$fecha'";
	$ts65 = resultadoIndividual($connection,$sql);
	$sql = "SELECT ts66 from diario3 WHERE fecha='$fecha'";
	$ts66 = resultadoIndividual($connection,$sql);
	$sql = "SELECT ts67 from diario3 WHERE fecha='$fecha'";
	$ts67 = resultadoIndividual($connection,$sql);
	$sql = "SELECT ts68 from diario3 WHERE fecha='$fecha'";
	$ts68 = resultadoIndividual($connection,$sql);
	$sql = "SELECT ts69 from diario3 WHERE fecha='$fecha'";
	$ts69 = resultadoIndividual($connection,$sql);
	$sql = "SELECT ts70 from diario3 WHERE fecha='$fecha'";
	$ts70 = resultadoIndividual($connection,$sql);
	$sql = "SELECT ts71 from diario3 WHERE fecha='$fecha'";
	$ts71 = resultadoIndividual($connection,$sql);
	$sql = "SELECT ts72 from diario3 WHERE fecha='$fecha'";
	$ts72 = resultadoIndividual($connection,$sql);
	$sql = "SELECT ts73 from diario3 WHERE fecha='$fecha'";
	$ts73 = resultadoIndividual($connection,$sql);
	$sql = "SELECT ts74 from diario3 WHERE fecha='$fecha'";
	$ts74 = resultadoIndividual($connection,$sql);
	$sql = "SELECT ts75 from diario3 WHERE fecha='$fecha'";
	$ts75 = resultadoIndividual($connection,$sql);
	$sql = "SELECT ts76 from diario3 WHERE fecha='$fecha'";
	$ts76 = resultadoIndividual($connection,$sql);
	$sql = "SELECT ts77 from diario3 WHERE fecha='$fecha'";
	$ts77 = resultadoIndividual($connection,$sql);
	$sql = "SELECT ts78 from diario3 WHERE fecha='$fecha'";
	$ts78 = resultadoIndividual($connection,$sql);
	$sql = "SELECT ts79 from diario3 WHERE fecha='$fecha'";
	$ts79 = resultadoIndividual($connection,$sql);
	$sql = "SELECT ts80 from diario3 WHERE fecha='$fecha'";
	$ts80 = resultadoIndividual($connection,$sql);
	$sql = "SELECT ts81 from diario3 WHERE fecha='$fecha'";
	$ts81 = resultadoIndividual($connection,$sql);
	$sql = "SELECT ts82 from diario3 WHERE fecha='$fecha'";
	$ts82 = resultadoIndividual($connection,$sql);
	$sql = "SELECT ts83 from diario3 WHERE fecha='$fecha'";
	$ts83 = resultadoIndividual($connection,$sql);
	$sql = "SELECT ts84 from diario3 WHERE fecha='$fecha'";
	$ts84 = resultadoIndividual($connection,$sql);
	$sql = "SELECT ts85 from diario3 WHERE fecha='$fecha'";
	$ts85 = resultadoIndividual($connection,$sql);
	$sql = "SELECT ts86 from diario3 WHERE fecha='$fecha'";
	$ts86 = resultadoIndividual($connection,$sql);

	
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
<h3 align="center">Planta de Tratamiento "El Rincón"</h3>
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
<table width="500" border="2">
<tr>
    <td align=center></td>
	<td align=center></td>
	<td align=center></td> 
    <td align=center></td>
    <td align=center colspan="2">Turbiedad</td>
    
    <td align=center colspan="2">Color</td>
   
    <td align=center>PAC</td>
    <td align=center>Sulf.AL</td>
    <td align=center>Polim</td>
  </tr>
  <tr>
    <td align=center>Horas</td>
    <td align=center>Q.Entrada</td>
    <td align=center>Q.Salida</td>
    <td align=center>TANQ</td>
    <td align=center>E</td>
    <td align=center>S</td>
    <td align=center>E</td>
    <td align=center>S</td>
    <td align=center>(ppm)</td>
    <td align=center>(ppm)</td>
    <td align=center>(ppm)</td>
	</tr>
  <tr>
    <td>5 AM</td>
    <td><input name="a1" type="text" id="a1"  value="<? echo $a1 ?>" size="5"></td>
    <td><input name="a2" type="text" id="a2" value="<? echo $a2 ?>" size="5"></td>
    <td><input name="a3" type="text" id="a3" value="<? echo $a3 ?>" size="5"></td>
    <td><input name="a4" type="text" id="a4" value="<? echo $a4 ?>" size="5"></td>
    <td><input name="a5" type="text" id="a5" value="<? echo $a5 ?>" size="5"></td>
    <td><input name="a6" type="text" id="a6" value="<? echo $a6 ?>" size="5"></td>
    <td><input name="a7" type="text" id="a7" value="<? echo $a7 ?>" size="5"></td>
    <td><input name="a8" type="text" id="a8" value="<? echo $a8 ?>" size="5"></td>
    <td><input name="a9" type="text" id="a9" value="<? echo $a9 ?>" size="5"></td>
    <td><input name="a10" type="text" id="a10" value="<? echo $a10?>" size="5"></td>
    </tr>
  <tr>
    <td>7 AM</td>
    <td><input name="b1" type="text" id="b1" value="<? echo $b1 ?>" size="5"></td>
    <td><input name="b2" type="text" id="b2" value="<? echo $b2 ?>" size="5"></td>
    <td><input name="b3" type="text" id="b3" value="<? echo $b3 ?>" size="5"></td>
    <td><input name="b4" type="text" id="b4" value="<? echo $b4 ?>" size="5"></td>
    <td><input name="b5" type="text" id="b5" value="<? echo $b5 ?>" size="5"></td>
    <td><input name="b6" type="text" id="b6" value="<? echo $b6 ?>" size="5"></td>
    <td><input name="b7" type="text" id="b7" value="<? echo $b7 ?>" size="5"></td>
    <td><input name="b8" type="text" id="b8" value="<? echo $b8 ?>" size="5"></td>
    <td><input name="b9" type="text" id="b9" value="<? echo $b9 ?>" size="5"></td>
    <td><input name="b10" type="text" id="b10" value="<? echo $b10 ?>" size="5"></td>
    
  </tr>
  <tr>
    <td>11 AM</td>
    <td><input name="c1" type="text" id="c1" value="<? echo $c1 ?>" size="5"></td>
    <td><input name="c2" type="text" id="c2" value="<? echo $c2 ?>" size="5"></td>
    <td><input name="c3" type="text" id="c3" value="<? echo $c3 ?>" size="5"></td>
    <td><input name="c4" type="text" id="c4" value="<? echo $c4 ?>" size="5"></td>
    <td><input name="c5" type="text" id="c5" value="<? echo $c5 ?>" size="5"></td>
    <td><input name="c6" type="text" id="c6" value="<? echo $c6 ?>" size="5"></td>
    <td><input name="c7" type="text" id="c7" value="<? echo $c7 ?>" size="5"></td>
    <td><input name="c8" type="text" id="c8" value="<? echo $c8 ?>" size="5"></td>
    <td><input name="c9" type="text" id="c9" value="<? echo $c9 ?>" size="5"></td>
    <td><input name="c10" type="text" id="c10" value="<? echo $c10 ?>" size="5"></td>
    
  </tr>
  <tr>
    <td>1 PM </td>
    <td><input name="d1" type="text" id="d1" value="<? echo $d1 ?>" size="5"></td>
    <td><input name="d2" type="text" id="d2" value="<? echo $d2 ?>" size="5"></td>
    <td><input name="d3" type="text" id="d3" value="<? echo $d3 ?>" size="5"></td>
    <td><input name="d4" type="text" id="d4" value="<? echo $d4 ?>" size="5"></td>
    <td><input name="d5" type="text" id="d5" value="<? echo $d5 ?>" size="5"></td>
    <td><input name="d6" type="text" id="d6" value="<? echo $d6 ?>" size="5"></td>
    <td><input name="d7" type="text" id="d7" value="<? echo $d7 ?>" size="5" ></td>
    <td><input name="d8" type="text" id="d8" value="<? echo $d8 ?>" size="5"></td>
    <td><input name="d9" type="text" id="d9" value="<? echo $d9 ?>" size="5"></td>
    <td><input name="d10" type="text" id="d10" value="<? echo $d10 ?>" size="5"></td>
   
  </tr>
  <tr>
    <td>5 PM </td>
    <td><input name="e1" type="text" id="e1" value="<? echo $e1 ?>" size="5"></td>
    <td><input name="e2" type="text" id="e2" value="<? echo $e2 ?>" size="5"></td>
    <td><input name="e3" type="text" id="e3" value="<? echo $e3 ?>" size="5"></td>
    <td><input name="e4" type="text" id="e4" value="<? echo $e4 ?>" size="5"></td>
    <td><input name="e5" type="text" id="e5" value="<? echo $e5 ?>" size="5"></td>
    <td><input name="e6" type="text" id="e6" value="<? echo $e6 ?>" size="5"></td>
    <td><input name="e7" type="text" id="e7" value="<? echo $e7 ?>" size="5"></td>
    <td><input name="e8" type="text" id="e8" value="<? echo $e8 ?>" size="5"></td>
    <td><input name="e9" type="text" id="e9" value="<? echo $e9 ?>" size="5"></td>
    <td><input name="e10" type="text" id="e10" value="<? echo $e10 ?>" size="5"></td>
   
  </tr>
  <tr>
    <td>9 PM </td>
    <td><input name="f1" type="text" id="f1" value="<? echo $f1 ?>" size="5"></td>
    <td><input name="f2" type="text" id="f2" value="<? echo $f2 ?>" size="5"></td>
    <td><input name="f3" type="text" id="f3" value="<? echo $f3 ?>" size="5"></td>
    <td><input name="f4" type="text" id="f4" value="<? echo $f4 ?>" size="5"></td>
    <td><input name="f5" type="text" id="f5" value="<? echo $f5 ?>" size="5"></td>
    <td><input name="f6" type="text" id="f6" value="<? echo $f6 ?>" size="5"></td>
    <td><input name="f7" type="text" id="f7" value="<? echo $f7 ?>" size="5"></td>
    <td><input name="f8" type="text" id="f8" value="<? echo $f8 ?>" size="5"></td>
    <td><input name="f9" type="text" id="f9" value="<? echo $f9 ?>" size="5"></td>
    <td><input name="f10" type="text" id="f10" value="<? echo $f10 ?>" size="5"></td>
    
  </tr>
  <tr>
    <td>11 Pm </td>
    <td><input name="g1" type="text" id="g1" value="<? echo $g1 ?>" size="5"></td>
    <td><input name="g2" type="text" id="g2" value="<? echo $g2 ?>" size="5"></td>
    <td><input name="g3" type="text" id="g3" value="<? echo $g3 ?>" size="5"></td>
    <td><input name="g4" type="text" id="g4" value="<? echo $g4 ?>" size="5"></td>
    <td><input name="g5" type="text" id="g5" value="<? echo $g5 ?>" size="5"></td>
    <td><input name="g6" type="text" id="g6" value="<? echo $g6 ?>" size="5"></td>
    <td><input name="g7" type="text" id="g7" value="<? echo $g7 ?>" size="5"></td>
    <td><input name="g8" type="text" id="g8" value="<? echo $g8 ?>" size="5"></td>
    <td><input name="g9" type="text" id="g9" value="<? echo $g9 ?>" size="5"></td>
    <td><input name="g10" type="text" id="g10" value="<? echo $g10 ?>" size="5"></td>
   </tr>
 </table>

 </html>
<table width="50" border="2">
<tr>
    <td align=center></td>
    <td align=center></td>
    <td align=center>Consumo</td>
    <td align=center>Existencia</td>
    <td align=center>Dosis Promedio</td>
    <td align=center>Nº Cilindros</td>
    <td align=center></td>
    <td align=center></td>
    <td align=center></td>
    <td align=center></td>
    <td align=center></td>
	</tr>
<tr>
    <td align=center></td>
	<td align=center>Sustancias Quimica</td>
	<td align=center>(Kg/dia)</td> 
    <td align=center>(kg)</td>
    <td align=center>(ppm)</td>
    <td align=center>LL</td>
    <td align=center>V</td>
    <td align=center>B</td>
  </tr>
  <tr>
    <td align=center></td>
    <td align=center>Cloro Cilindros 2000LB</td>
    <td><input name="ts1" type="text" id="ts1" value="<? echo $ts1 ?>" size="5"></td>
    <td><input name="ts2" type="text" id="ts2" value="<? echo $ts2 ?>" size="5"></td>
    <td><input name="ts3" type="text" id="ts3" value="<? echo $ts3 ?>" size="5"></td>
    <td><input name="ts4" type="text" id="ts4" value="<? echo $ts4 ?>" size="5"></td>
    <td><input name="ts5" type="text" id="ts5" value="<? echo $ts5 ?>" size="5"></td>
    <td><input name="ts6" type="text" id="ts6" value="<? echo $ts6 ?>" size="5"></td>
   </tr>
	<tr>
    <td></td>
    <td>Cloro Cilindros 150LB</td>
    <td><input name="ts7" type="text" id="ts7" value="<? echo $ts7 ?>" size="5"></td>
    <td><input name="ts8" type="text" id="ts8" value="<? echo $ts8 ?>" size="5"></td>
    <td><input name="ts9" type="text" id="ts9" value="<? echo $ts9 ?>" size="5"></td>
    <td><input name="ts10" type="text" id="ts10" value="<? echo $ts10?>" size="5"></td>
    <td><input name="ts11" type="text" id="ts11" value="<? echo $ts11?>" size="5"></td>
    <td><input name="ts12" type="text" id="ts12" value="<? echo $ts12?>" size="5"></td>
    </tr>
   <tr>
    <td></td>
    <td>Proveedor</td>
    <td><input name="ts13" type="text" id="ts13" value="<? echo $ts13 ?>" size="5"></td>
    <td><input name="ts14" type="text" id="ts14" value="<? echo $ts14 ?>" size="5"></td>
    <td><input name="ts15" type="text" id="ts15" value="<? echo $ts15 ?>" size="5"></td>
    <td colspan="3">Nº Cuñetes Existentes</td>
    </tr>
   <tr>
    <td rowspan="3">Hipoclorito de Clacio</td>
    <td><input name="ts16" type="text" id="ts16" value="<? echo $ts16?>" size="20"></td>
    <td><input name="ts17" type="text" id="ts17" value="<? echo $ts17?>" size="5"></td>
    <td><input name="ts18" type="text" id="ts18" value="<? echo $ts18?>" size="5"></td>
    <td><input name="ts19" type="text" id="ts19" value="<? echo $ts19?>" size="5"></td>
    <td><input name="ts20" type="text" id="ts20" value="<? echo $ts20?>" size="5"></td>
  </tr>
  <tr>
   
    <td><input name="ts21" type="text" id="ts21" value="<? echo $ts21?>" size="20"></td>
    <td><input name="ts22" type="text" id="ts22" value="<? echo $ts22?>" size="5"></td>
    <td><input name="ts23" type="text" id="ts23" value="<? echo $ts23?>" size="5"></td>
    <td><input name="ts24" type="text" id="ts24" value="<? echo $ts24?>" size="5"></td>
    <td><input name="ts25" type="text" id="ts25" value="<? echo $ts25?>" size="5"></td>
	</tr>
	
    <td><input name="ts26" type="text" id="ts25" value="<? echo $ts25?>" size="20"></td>
    <td><input name="ts27" type="text" id="ts27" value="<? echo $ts27?>" size="5"></td>
    <td><input name="ts28" type="text" id="ts28" value="<? echo $ts28?>" size="5"></td>
    <td><input name="ts29" type="text" id="ts29" value="<? echo $ts29?>" size="5"></td>
    <td><input name="ts30" type="text" id="ts30" value="<? echo $ts30?>" size="5"></td>
   <tr>
    <td rowspan="3">Policloruro de Aluminio</td>
    <td><input name="ts31" type="text" id="ts31" value="<? echo $ts31?>" size="20"></td>
    <td><input name="ts32" type="text" id="ts32" value="<? echo $ts32?>" size="5"></td>
    <td><input name="ts33" type="text" id="ts33" value="<? echo $ts33?>" size="5"></td>
    <td><input name="ts34" type="text" id="ts34" value="<? echo $ts34?>" size="5"></td>
    </tr>
   
    <td><input name="ts35" type="text" id="ts35" value="<? echo $ts35?>" size="20"></td>
    <td><input name="ts36" type="text" id="ts36" value="<? echo $ts36?>" size="5"></td>
    <td><input name="ts37" type="text" id="ts37" value="<? echo $ts37?>" size="5"></td>
    <td><input name="ts38" type="text" id="ts38" value="<? echo $ts38?>" size="5"></td>
  <tr>
  
    <td><input name="ts39" type="text" id="ts39" value="<? echo $ts39?>" size="20"></td>
    <td><input name="ts40" type="text" id="ts40" value="<? echo $ts40?>" size="5"></td>
    <td><input name="ts41" type="text" id="ts41" value="<? echo $ts41?>" size="5"></td>
    <td><input name="ts42" type="text" id="ts42" value="<? echo $ts42?>" size="5"></td>
	</tr>
    <td rowspan="2">Sulfato de Aluminio</td>
    <td><input name="ts43" type="text" id="ts43" value="<? echo $ts43?>" size="20"></td>
    <td><input name="ts44" type="text" id="ts44" value="<? echo $ts44?>" size="5"></td>
    <td><input name="ts45" type="text" id="ts45" value="<? echo $ts45?>" size="5"></td>
    <td><input name="ts46" type="text" id="ts46" value="<? echo $ts46?>" size="5"></td>
    </tr>
  	<tr>
	
    <td><input name="ts47" type="text" id="ts47" value="<? echo $ts47?>" size="20"></td>
    <td><input name="ts48" type="text" id="ts48" value="<? echo $ts48?>" size="5"></td>
    <td><input name="ts49" type="text" id="ts49" value="<? echo $ts49?>" size="5"></td>
    <td><input name="ts50" type="text" id="ts50" value="<? echo $ts50?>" size="5"></td>
	</tr>
	<tr>
     <td rowspan="3">Polimero</td>
    <td><input name="ts51" type="text" id="ts51" value="<? echo $ts51?>" size="20"></td>
    <td><input name="ts52" type="text" id="ts52" value="<? echo $ts52?>" size="5"></td>
    <td><input name="ts53" type="text" id="ts53" value="<? echo $ts53?>" size="5"></td>
    <td><input name="ts54" type="text" id="ts54" value="<? echo $ts54?>" size="5"></td>
  </tr>
  <tr>
	
    <td><input name="ts55" type="text" id="ts55" value="<? echo $ts55?>" size="20"></td>
    <td><input name="ts56" type="text" id="ts56" value="<? echo $ts56?>" size="5"></td>
    <td><input name="ts57" type="text" id="ts57" value="<? echo $ts57?>" size="5"></td>
    <td><input name="ts58" type="text" id="ts58" value="<? echo $ts58?>" size="5"></td>
	</tr>
	<tr>
	
    <td><input name="ts59" type="text" id="ts59" value="<? echo $ts59?>" size="20"></td>
    <td><input name="ts60" type="text" id="ts60" value="<? echo $ts60?>" size="5"></td>
    <td><input name="ts61" type="text" id="ts61" value="<? echo $ts61?>" size="5"></td>
    <td><input name="ts62" type="text" id="ts62" value="<? echo $ts62?>" size="5"></td>
	</tr>
  <tr>
    <td rowspan="3">Cal Hidratada</td>
    <td><input name="ts63" type="text" id="ts63" value="<? echo $ts63?>" size="20"></td>
    <td><input name="ts64" type="text" id="ts64" value="<? echo $ts64?>" size="5"></td>
    <td><input name="ts65" type="text" id="ts65" value="<? echo $ts65?>" size="5"></td>
    <td><input name="ts66" type="text" id="ts66" value="<? echo $ts66?>" size="5"></td>
  </tr>
  <tr>
	
    <td><input name="ts67" type="text" id="ts67" value="<? echo $ts67?>" size="20"></td>
    <td><input name="ts68" type="text" id="ts68" value="<? echo $ts68?>" size="5"></td>
    <td><input name="ts69" type="text" id="ts69" value="<? echo $ts69?>" size="5"></td>
    <td><input name="ts70" type="text" id="ts70" value="<? echo $ts70?>" size="5"></td>
	</tr>
	<tr>
	
    <td><input name="ts71" type="text" id="ts71" value="<? echo $ts71?>" size="20"></td>
    <td><input name="ts72" type="text" id="ts72" value="<? echo $ts72?>" size="5"></td>
    <td><input name="ts73" type="text" id="ts73" value="<? echo $ts73?>" size="5"></td>
    <td><input name="ts74" type="text" id="ts74" value="<? echo $ts74?>" size="5"></td>
	</tr>
  <tr>
    <td>Otros</td>
    <td><input name="ts75" type="text" id="ts75" value="<? echo $ts75?>" size="20"></td>
    <td><input name="ts76" type="text" id="ts76" value="<? echo $ts76?>" size="5"></td>
    <td><input name="ts77" type="text" id="ts77" value="<? echo $ts77?>" size="5"></td>
    <td><input name="ts78" type="text" id="ts78" value="<? echo $ts78?>" size="5"></td>
  </tr>
  <tr>
    <td>Otros</td>
    <td><input name="ts79" type="text" id="ts79" value="<? echo $ts79?>" size="20"></td>
    <td><input name="ts80" type="text" id="ts80" value="<? echo $ts80?>" size="5"></td>
    <td><input name="ts81" type="text" id="ts81" value="<? echo $ts81?>" size="5"></td>
    <td><input name="ts82" type="text" id="ts82" value="<? echo $ts82?>" size="5"></td>
    </tr>
	<tr>
    <td>Otros</td>
    <td><input name="ts83" type="text" id="ts83" value="<? echo $ts83?>" size="20"></td>
    <td><input name="ts84" type="text" id="ts84" value="<? echo $ts84?>" size="5"></td>
    <td><input name="ts85" type="text" id="ts85" value="<? echo $ts85?>" size="5"></td>
    <td><input name="ts86" type="text" id="ts86" value="<? echo $ts86?>" size="5"></td>
 </tr>
 </table>


<input type="submit" value="Buscar" onClick="this.form.action='rbuscard3.php'">
</form>

