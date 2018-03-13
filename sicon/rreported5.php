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
  <style type="text/css">
<!--
.Estilo1 {
	font-size: 36px;
	font-weight: bold;
}
.Estilo2 {
	font-size: 18px;
	font-weight: bold;
}
-->
  </style>
</head>

<body>

<?
include("funciones/funciones.php");
include("configuracion.php");
$connection = pg_connect("host=$sql_host port=$puerto dbname=$sql_db user=$sql_usuario password=$sql_pass") or die("No se realiz&oacute la conexi&oacute;n Detalles: ".pg_last_error());
    $fecha=$_POST["fecha"];
	
    $sql = "SELECT a1 from diario5 WHERE fecha='$fecha'";
	$a1 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a2 from diario5 WHERE fecha='$fecha'";
	$a2 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a3 from diario5 WHERE fecha='$fecha'";
	$a3 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a4 from diario5 WHERE fecha='$fecha'";
	$a4 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a5 from diario5 WHERE fecha='$fecha'";
	$a5 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a6 from diario5 WHERE fecha='$fecha'";
	$a6 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a7 from diario5 WHERE fecha='$fecha'";
	$a7 = resultadoIndividual($connection,$sql);
	$sql = "SELECT b1 from diario5 WHERE fecha='$fecha'";
	$b1 = resultadoIndividual($connection,$sql);
	$sql = "SELECT b2 from diario5 WHERE fecha='$fecha'";
	$b2 = resultadoIndividual($connection,$sql);
	$sql = "SELECT b3 from diario5 WHERE fecha='$fecha'";
	$b3 = resultadoIndividual($connection,$sql);
	$sql = "SELECT b4 from diario5 WHERE fecha='$fecha'";
	$b4 = resultadoIndividual($connection,$sql);
	$sql = "SELECT b5 from diario5 WHERE fecha='$fecha'";
	$b5 = resultadoIndividual($connection,$sql);
	$sql = "SELECT b6 from diario5 WHERE fecha='$fecha'";
	$b6 = resultadoIndividual($connection,$sql);
	$sql = "SELECT b7 from diario5 WHERE fecha='$fecha'";
	$b7 = resultadoIndividual($connection,$sql);
	$sql = "SELECT c1 from diario5 WHERE fecha='$fecha'";
	$c1 = resultadoIndividual($connection,$sql);
	$sql = "SELECT c2 from diario5 WHERE fecha='$fecha'";
	$c2 = resultadoIndividual($connection,$sql);
	$sql = "SELECT c3 from diario5 WHERE fecha='$fecha'";
	$c3 = resultadoIndividual($connection,$sql);
	$sql = "SELECT c4 from diario5 WHERE fecha='$fecha'";
	$c4 = resultadoIndividual($connection,$sql);
	$sql = "SELECT c5 from diario5 WHERE fecha='$fecha'";
	$c5 = resultadoIndividual($connection,$sql);
	$sql = "SELECT c6 from diario5 WHERE fecha='$fecha'";
	$c6 = resultadoIndividual($connection,$sql);
	$sql = "SELECT c7 from diario5 WHERE fecha='$fecha'";
	$c7 = resultadoIndividual($connection,$sql);
	$sql = "SELECT d1 from diario5 WHERE fecha='$fecha'";
	$d1 = resultadoIndividual($connection,$sql);
	$sql = "SELECT d2 from diario5 WHERE fecha='$fecha'";
	$d2 = resultadoIndividual($connection,$sql);
	$sql = "SELECT d3 from diario5 WHERE fecha='$fecha'";
	$d3 = resultadoIndividual($connection,$sql);
	$sql = "SELECT d4 from diario5 WHERE fecha='$fecha'";
	$d4 = resultadoIndividual($connection,$sql);
	$sql = "SELECT d5 from diario5 WHERE fecha='$fecha'";
	$d5 = resultadoIndividual($connection,$sql);
	$sql = "SELECT d6 from diario5 WHERE fecha='$fecha'";
	$d6 = resultadoIndividual($connection,$sql);
	$sql = "SELECT d7 from diario5 WHERE fecha='$fecha'";
	$d7 = resultadoIndividual($connection,$sql);
	$sql = "SELECT e1 from diario5 WHERE fecha='$fecha'";
	$e1 = resultadoIndividual($connection,$sql);
	$sql = "SELECT e2 from diario5 WHERE fecha='$fecha'";
	$e2 = resultadoIndividual($connection,$sql);
	$sql = "SELECT e3 from diario5 WHERE fecha='$fecha'";
	$e3 = resultadoIndividual($connection,$sql);
	$sql = "SELECT e4 from diario5 WHERE fecha='$fecha'";
	$e4 = resultadoIndividual($connection,$sql);
	$sql = "SELECT e5 from diario5 WHERE fecha='$fecha'";
	$e5 = resultadoIndividual($connection,$sql);
	$sql = "SELECT e6 from diario5 WHERE fecha='$fecha'";
	$e6 = resultadoIndividual($connection,$sql);
	$sql = "SELECT e7 from diario5 WHERE fecha='$fecha'";
	$e7 = resultadoIndividual($connection,$sql);
	$sql = "SELECT f1 from diario5 WHERE fecha='$fecha'";
	$f1 = resultadoIndividual($connection,$sql);
	$sql = "SELECT f2 from diario5 WHERE fecha='$fecha'";
	$f2 = resultadoIndividual($connection,$sql);
	$sql = "SELECT f3 from diario5 WHERE fecha='$fecha'";
	$f3 = resultadoIndividual($connection,$sql);
	$sql = "SELECT f4 from diario5 WHERE fecha='$fecha'";
	$f4 = resultadoIndividual($connection,$sql);
	$sql = "SELECT f5 from diario5 WHERE fecha='$fecha'";
	$f5 = resultadoIndividual($connection,$sql);
	$sql = "SELECT f6 from diario5 WHERE fecha='$fecha'";
	$f6 = resultadoIndividual($connection,$sql);
	$sql = "SELECT f7 from diario5 WHERE fecha='$fecha'";
	$f7 = resultadoIndividual($connection,$sql);
	$sql = "SELECT g1 from diario5 WHERE fecha='$fecha'";
	$g1 = resultadoIndividual($connection,$sql);
	$sql = "SELECT g2 from diario5 WHERE fecha='$fecha'";
	$g2 = resultadoIndividual($connection,$sql);
	$sql = "SELECT g3 from diario5 WHERE fecha='$fecha'";
	$g3 = resultadoIndividual($connection,$sql);
	$sql = "SELECT g4 from diario5 WHERE fecha='$fecha'";
	$g4 = resultadoIndividual($connection,$sql);
	$sql = "SELECT g5 from diario5 WHERE fecha='$fecha'";
	$g5 = resultadoIndividual($connection,$sql);
	$sql = "SELECT g6 from diario5 WHERE fecha='$fecha'";
	$g6 = resultadoIndividual($connection,$sql);
	$sql = "SELECT g7 from diario5 WHERE fecha='$fecha'";
	$g7 = resultadoIndividual($connection,$sql);
		
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
<h3 align="center">E/B "Curaguaro"</h3>
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
    <td align=center></td>
    <td align=center></td>
	<td align=center>Cota Canal</td>
	<td align=center>Caratal</td>
  </tr>
  <tr>
  	<td align=center>Hora</td>
  	<td align=center>Equipo#1</td>
	<td align=center>Equipo#2</td>
	<td align=center>Equipo#3</td>
    <td align=center>P.S</td>
    <td align=center>P.D</td>
	<td align=center>Entrada</td>
	<td align=center>Salida</td>
	</tr>
  <tr>
    <td>5 AM</td>
    <td><input name="a1" type="text" id="a1" value="<? echo $a1 ?>" size="5"></td>
    <td><input name="a2" type="text" id="a2" value="<? echo $a2 ?>" size="5"></td>
    <td><input name="a3" type="text" id="a3" value="<? echo $a3 ?>" size="5"></td>
    <td><input name="a4" type="text" id="a4" value="<? echo $a4 ?>" size="5"></td>
    <td><input name="a5" type="text" id="a5" value="<? echo $a5 ?>" size="5"></td>
    <td><input name="a6" type="text" id="a6" value="<? echo $a6 ?>" size="5"></td>
	<td><input name="a7" type="text" id="a7" value="<? echo $a7 ?>" size="5"></td>
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
  </tr>
  <tr>
    <td>1 PM </td>
    <td><input name="d1" type="text" id="d1" value="<? echo $d1 ?>" size="5"></td>
    <td><input name="d2" type="text" id="d2" value="<? echo $d2 ?>" size="5"></td>
    <td><input name="d3" type="text" id="d3" value="<? echo $d3 ?>" size="5"></td>
    <td><input name="d4" type="text" id="d4" value="<? echo $d4 ?>" size="5"></td>
    <td><input name="d5" type="text" id="d5" value="<? echo $d5 ?>" size="5"></td>
    <td><input name="d6" type="text" id="d6" value="<? echo $d6 ?>" size="5"></td>
    <td><input name="d7" type="text" id="d7" value="<? echo $d7 ?>" size="5"></td>
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
  
  </tr>
</table>

<input type="submit" value="Buscar" onClick="this.form.action='rbuscard5.php'">
</form>

