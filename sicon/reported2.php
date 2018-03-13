<?php
include("funciones/funciones.php");
include("configuracion.php");
$connection = pg_connect("host=$sql_host port=$puerto dbname=$sql_db user=$sql_usuario password=$sql_pass") or die("No se realiz&oacute la conexi&oacute;n Detalles: ".pg_last_error());
    $fecha=$_POST["fecha"];
	
    $sql = "SELECT a1 from diario2 WHERE fecha='$fecha'";
	$a1 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a2 from diario2 WHERE fecha='$fecha'";
	$a2 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a3 from diario2 WHERE fecha='$fecha'";
	$a3 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a4 from diario2 WHERE fecha='$fecha'";
	$a4 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a5 from diario2 WHERE fecha='$fecha'";
	$a5 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a6 from diario2 WHERE fecha='$fecha'";
	$a6 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a7 from diario2 WHERE fecha='$fecha'";
	$a7 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a8 from diario2 WHERE fecha='$fecha'";
	$a8 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a9 from diario2 WHERE fecha='$fecha'";
	$a9 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a10 from diario2 WHERE fecha='$fecha'";
	$a10 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a11 from diario2 WHERE fecha='$fecha'";
	$a11 = resultadoIndividual($connection,$sql);
	$sql = "SELECT a12 from diario2 WHERE fecha='$fecha'";
	$a12 = resultadoIndividual($connection,$sql);
	$sql = "SELECT b1 from diario2 WHERE fecha='$fecha'";
	$b1 = resultadoIndividual($connection,$sql);
	$sql = "SELECT b2 from diario2 WHERE fecha='$fecha'";
	$b2 = resultadoIndividual($connection,$sql);
	$sql = "SELECT b3 from diario2 WHERE fecha='$fecha'";
	$b3 = resultadoIndividual($connection,$sql);
	$sql = "SELECT b4 from diario2 WHERE fecha='$fecha'";
	$b4 = resultadoIndividual($connection,$sql);
	$sql = "SELECT b5 from diario2 WHERE fecha='$fecha'";
	$b5 = resultadoIndividual($connection,$sql);
	$sql = "SELECT b6 from diario2 WHERE fecha='$fecha'";
	$b6 = resultadoIndividual($connection,$sql);
	$sql = "SELECT b7 from diario2 WHERE fecha='$fecha'";
	$b7 = resultadoIndividual($connection,$sql);
	$sql = "SELECT b8 from diario2 WHERE fecha='$fecha'";
	$b8 = resultadoIndividual($connection,$sql);
	$sql = "SELECT b9 from diario2 WHERE fecha='$fecha'";
	$b9 = resultadoIndividual($connection,$sql);
	$sql = "SELECT b10 from diario2 WHERE fecha='$fecha'";
	$b10 = resultadoIndividual($connection,$sql);
	$sql = "SELECT b11 from diario2 WHERE fecha='$fecha'";
	$b11 = resultadoIndividual($connection,$sql);
	$sql = "SELECT b12 from diario2 WHERE fecha='$fecha'";
	$b12 = resultadoIndividual($connection,$sql);
	$sql = "SELECT c1 from diario2 WHERE fecha='$fecha'";
	$c1 = resultadoIndividual($connection,$sql);
	$sql = "SELECT c2 from diario2 WHERE fecha='$fecha'";
	$c2 = resultadoIndividual($connection,$sql);
	$sql = "SELECT c3 from diario2 WHERE fecha='$fecha'";
	$c3 = resultadoIndividual($connection,$sql);
	$sql = "SELECT c4 from diario2 WHERE fecha='$fecha'";
	$c4 = resultadoIndividual($connection,$sql);
	$sql = "SELECT c5 from diario2 WHERE fecha='$fecha'";
	$c5 = resultadoIndividual($connection,$sql);
	$sql = "SELECT c6 from diario2 WHERE fecha='$fecha'";
	$c6 = resultadoIndividual($connection,$sql);
	$sql = "SELECT c7 from diario2 WHERE fecha='$fecha'";
	$c7 = resultadoIndividual($connection,$sql);
	$sql = "SELECT c8 from diario2 WHERE fecha='$fecha'";
	$c8 = resultadoIndividual($connection,$sql);
	$sql = "SELECT c9 from diario2 WHERE fecha='$fecha'";
	$c9 = resultadoIndividual($connection,$sql);
	$sql = "SELECT c10 from diario2 WHERE fecha='$fecha'";
	$c10 = resultadoIndividual($connection,$sql);
	$sql = "SELECT c11 from diario2 WHERE fecha='$fecha'";
	$c11 = resultadoIndividual($connection,$sql);
	$sql = "SELECT c12 from diario2 WHERE fecha='$fecha'";
	$c12 = resultadoIndividual($connection,$sql);
	$sql = "SELECT d1 from diario2 WHERE fecha='$fecha'";
	$d1 = resultadoIndividual($connection,$sql);
	$sql = "SELECT d2 from diario2 WHERE fecha='$fecha'";
	$d2 = resultadoIndividual($connection,$sql);
	$sql = "SELECT d3 from diario2 WHERE fecha='$fecha'";
	$d3 = resultadoIndividual($connection,$sql);
	$sql = "SELECT d4 from diario2 WHERE fecha='$fecha'";
	$d4 = resultadoIndividual($connection,$sql);
	$sql = "SELECT d5 from diario2 WHERE fecha='$fecha'";
	$d5 = resultadoIndividual($connection,$sql);
	$sql = "SELECT d6 from diario2 WHERE fecha='$fecha'";
	$d6 = resultadoIndividual($connection,$sql);
	$sql = "SELECT d7 from diario2 WHERE fecha='$fecha'";
	$d7 = resultadoIndividual($connection,$sql);
	$sql = "SELECT d8 from diario2 WHERE fecha='$fecha'";
	$d8 = resultadoIndividual($connection,$sql);
	$sql = "SELECT d9 from diario2 WHERE fecha='$fecha'";
	$d9 = resultadoIndividual($connection,$sql);
	$sql = "SELECT d10 from diario2 WHERE fecha='$fecha'";
	$d10 = resultadoIndividual($connection,$sql);
	$sql = "SELECT d11 from diario2 WHERE fecha='$fecha'";
	$d11 = resultadoIndividual($connection,$sql);
	$sql = "SELECT d12 from diario2 WHERE fecha='$fecha'";
	$d12 = resultadoIndividual($connection,$sql);
	$sql = "SELECT e1 from diario2 WHERE fecha='$fecha'";
	$e1 = resultadoIndividual($connection,$sql);
	$sql = "SELECT e2 from diario2 WHERE fecha='$fecha'";
	$e2 = resultadoIndividual($connection,$sql);
	$sql = "SELECT e3 from diario2 WHERE fecha='$fecha'";
	$e3 = resultadoIndividual($connection,$sql);
	$sql = "SELECT e4 from diario2 WHERE fecha='$fecha'";
	$e4 = resultadoIndividual($connection,$sql);
	$sql = "SELECT e5 from diario2 WHERE fecha='$fecha'";
	$e5 = resultadoIndividual($connection,$sql);
	$sql = "SELECT e6 from diario2 WHERE fecha='$fecha'";
	$e6 = resultadoIndividual($connection,$sql);
	$sql = "SELECT e7 from diario2 WHERE fecha='$fecha'";
	$e7 = resultadoIndividual($connection,$sql);
	$sql = "SELECT e8 from diario2 WHERE fecha='$fecha'";
	$e8 = resultadoIndividual($connection,$sql);
	$sql = "SELECT e9 from diario2 WHERE fecha='$fecha'";
	$e9 = resultadoIndividual($connection,$sql);
	$sql = "SELECT e10 from diario2 WHERE fecha='$fecha'";
	$e10 = resultadoIndividual($connection,$sql);
	$sql = "SELECT e11 from diario2 WHERE fecha='$fecha'";
	$e11 = resultadoIndividual($connection,$sql);
	$sql = "SELECT e12 from diario2 WHERE fecha='$fecha'";
	$e12 = resultadoIndividual($connection,$sql);
	$sql = "SELECT f1 from diario2 WHERE fecha='$fecha'";
	$f1 = resultadoIndividual($connection,$sql);
	$sql = "SELECT f2 from diario2 WHERE fecha='$fecha'";
	$f2 = resultadoIndividual($connection,$sql);
	$sql = "SELECT f3 from diario2 WHERE fecha='$fecha'";
	$f3 = resultadoIndividual($connection,$sql);
	$sql = "SELECT f4 from diario2 WHERE fecha='$fecha'";
	$f4 = resultadoIndividual($connection,$sql);
	$sql = "SELECT f5 from diario2 WHERE fecha='$fecha'";
	$f5 = resultadoIndividual($connection,$sql);
	$sql = "SELECT f6 from diario2 WHERE fecha='$fecha'";
	$f6 = resultadoIndividual($connection,$sql);
	$sql = "SELECT f7 from diario2 WHERE fecha='$fecha'";
	$f7 = resultadoIndividual($connection,$sql);
	$sql = "SELECT f8 from diario2 WHERE fecha='$fecha'";
	$f8 = resultadoIndividual($connection,$sql);
	$sql = "SELECT f9 from diario2 WHERE fecha='$fecha'";
	$f9 = resultadoIndividual($connection,$sql);
	$sql = "SELECT f10 from diario2 WHERE fecha='$fecha'";
	$f10 = resultadoIndividual($connection,$sql);
	$sql = "SELECT f11 from diario2 WHERE fecha='$fecha'";
	$f11 = resultadoIndividual($connection,$sql);
	$sql = "SELECT f12 from diario2 WHERE fecha='$fecha'";
	$f12 = resultadoIndividual($connection,$sql);
	$sql = "SELECT g1 from diario2 WHERE fecha='$fecha'";
	$g1 = resultadoIndividual($connection,$sql);
	$sql = "SELECT g2 from diario2 WHERE fecha='$fecha'";
	$g2 = resultadoIndividual($connection,$sql);
	$sql = "SELECT g3 from diario2 WHERE fecha='$fecha'";
	$g3 = resultadoIndividual($connection,$sql);
	$sql = "SELECT g4 from diario2 WHERE fecha='$fecha'";
	$g4 = resultadoIndividual($connection,$sql);
	$sql = "SELECT g5 from diario2 WHERE fecha='$fecha'";
	$g5 = resultadoIndividual($connection,$sql);
	$sql = "SELECT g6 from diario2 WHERE fecha='$fecha'";
	$g6 = resultadoIndividual($connection,$sql);
	$sql = "SELECT g7 from diario2 WHERE fecha='$fecha'";
	$g7 = resultadoIndividual($connection,$sql);
	$sql = "SELECT g8 from diario2 WHERE fecha='$fecha'";
	$g8 = resultadoIndividual($connection,$sql);
	$sql = "SELECT g9 from diario2 WHERE fecha='$fecha'";
	$g9 = resultadoIndividual($connection,$sql);
	$sql = "SELECT g10 from diario2 WHERE fecha='$fecha'";
	$g10 = resultadoIndividual($connection,$sql);
	$sql = "SELECT g11 from diario2 WHERE fecha='$fecha'";
	$g11 = resultadoIndividual($connection,$sql);
	$sql = "SELECT g12 from diario2 WHERE fecha='$fecha'";
	$g12 = resultadoIndividual($connection,$sql);
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

<h3 align="center">CENTRO DE CONTROL "MOLORCA"</h1>

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
    <td align=center></td>
    <td align=center></td>
    <td align=center></td>
    <td align=center></td>
    <td align=center></td>
    <td align=center></td>
    </tr>
<tr>
    <td align=center></td>
	<td align=center colspan="2">LECHERIA</td>
	
    <td align=center colspan="2">BARCELONA</td>
   
    <td align=center colspan="2">PTO LA CRUZ</td>
    
    <td align=center colspan="2">EL RICON</td>
    
    <td align=center  colspan="2">EL MAGUEY</td>
    
    <td align=center>VC 02</td>
    <td align=center>CLORO</td>
    </tr>
  <tr>
    <td align=center>Horas</td>
    <td align=center>Q (Lt/s)</td>
    <td align=center>P (mca)</td>
    <td align=center>Q (Lt/s)</td>
    <td align=center>P (mca)</td>
    <td align=center>Q (Lt/s)</td>
    <td align=center>P (mca)</td>
    <td align=center>Q (Lt/s)</td>
    <td align=center>P (mca)</td>
    <td align=center>Q (Lt/s)</td>
    <td align=center>P (mca)</td>
    <td align=center>Nº V.A</td>
	<td align=center>RESIDUAL</td>
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
    <td><input name="a8" type="text" id="a8" value="<? echo $a8 ?>" size="5"></td>
    <td><input name="a9" type="text" id="a9" value="<? echo $a9 ?>" size="5"></td>
    <td><input name="a10" type="text" id="a10" value="<? echo $a10 ?>" size="5"></td>
    <td><input name="a11" type="text" id="a11" value="<? echo $a11 ?>" size="5"></td>
    <td><input name="a12" type="text" id="a12" value="<? echo $a12 ?>" size="5"></td>
    

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
    <td><input name="b11" type="text" id="b11" value="<? echo $b11 ?>" size="5"></td>
    <td><input name="b12" type="text" id="b12" value="<? echo $b12 ?>" size="5"></td>
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
    <td><input name="c11" type="text" id="c11" value="<? echo $c11 ?>" size="5"></td>
    <td><input name="c12" type="text" id="c12" value="<? echo $c12 ?>" size="5"></td>
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
    <td><input name="d8" type="text" id="d8" value="<? echo $d8 ?>" size="5"></td>
    <td><input name="d9" type="text" id="d9" value="<? echo $d9 ?>" size="5"></td>
    <td><input name="d10" type="text" id="d10" value="<? echo $d10 ?>" size="5"></td>
    <td><input name="d11" type="text" id="d11" value="<? echo $d11 ?>" size="5"></td>
    <td><input name="d12" type="text" id="d12" value="<? echo $d12 ?>" size="5"></td>
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
    <td><input name="e11" type="text" id="e11" value="<? echo $e11 ?>" size="5"></td>
    <td><input name="e12" type="text" id="e12" value="<? echo $e12 ?>" size="5"></td>
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
    <td><input name="f11" type="text" id="f11" value="<? echo $f11 ?>" size="5"></td>
    <td><input name="f12" type="text" id="f12" value="<? echo $f12 ?>" size="5"></td>
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
    <td><input name="g11" type="text" id="g11" value="<? echo $g11 ?>" size="5"></td>
    <td><input name="g12" type="text" id="g12" value="<? echo $g12 ?>" size="5"></td>
 </tr>
</table>

<input type="submit" value="Guardar" onClick="this.form.action='adiario2.php'">
<input type="submit" value="Modificar" onClick="this.form.action='mdiario2.php'">
<input type="submit" value="Buscar" onClick="this.form.action='buscard2.php'">
</form>