<html>
<head>
 <!-Hoja de estilos del calendario -->
  <link rel="stylesheet" type="text/css" media="all" href="calendario/calendar-blue2.css" title="winter" />
 <!-- librería principal del calendario -->
  <script type="text/javascript" src="javascript/calendar.js"></script>
  <script type="text/javascript" src="pedirdatos.js"></script>
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
#Layer1 {
	position:absolute;
	width:200px;
	height:55px;
	z-index:1;
	left: 150px;
	top: 7px;
}
-->
  </style>
<body bgcolor="">

<title></title>
<link rel="shortcut icon" href="favicon.ico">

<br>
<br>
<br>
<br>
<table  align="center" valign="middle"><tr><td  rowspan=3 bgcolor="#FFFFFF">
<fieldset>

<form name="datos" method="post" action="...">
				<table align="center" border="0" bgcolor="#FFFFFF">
				
				<td align="center"><font face="Times New Roman" size="5"><b>Reporte Excel</b></font></td>
				
		
					<tr><td  align="right" ><b>Fecha Inicial:</b></td><td width=150><input type="text" name="fecha_ini" id="fecha_ini" size="8" value="<? echo $fecha ?>"/><input name="button" type="button" id="lanzador" value="..." /></td>
                   <tr><td  align="right" ><b>Fecha Final:</b></td><td width=150><input type="text" name="fecha_fin" id="fecha_fin" size="8" value="<? echo $fecha ?>"/><input name="button" type="button" id="lanzador2" value="..." /></td>
				<td  align="right" ><b>P/T o E/B</b></td><td width=150>
				<select name="ptoeb"><optgroup label="" >
					<option value ="diario">P/T Jose Antonio Anzoategui</option>
					<option value ="diario3">P/T El Rincon</option>
                    <option value ="diario4">P/T Santa Clara</option>
                    <option value ="diario5">E/B Curaguaro</option>
                    <option value ="diario6">E/B El Yai</option>
					</optgroup>
			     </select></b></td></tr>
				

				
						
				<td><input type="submit" value="Archivo Excel" onClick="this.form.action='archivoexcel.php'"></td></tr>
		</table>
		</table>				
				
<script type="text/javascript">
    Calendar.setup({
        inputField     :    "fecha_ini",      // id del campo de texto
        ifFormat       :    "%Y-%m-%d",       // formato de la fecha, cuando se escriba en el campo de texto
        button         :    "lanzador"   // el id del botón que lanzará el calendario
    });
</script>		

<script type="text/javascript">
    Calendar.setup({
        inputField     :    "fecha_fin",      // id del campo de texto
        ifFormat       :    "%Y-%m-%d",       // formato de la fecha, cuando se escriba en el campo de texto
        button         :    "lanzador2"   // el id del botón que lanzará el calendario
    });
</script>				
				
</html>

