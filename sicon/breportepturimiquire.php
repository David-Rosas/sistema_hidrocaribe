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

<!-- formu lario con el campo de texto y el botón para lanzar el calendario-->
	<form action="reportepturimiquire.php" method="post">
	  <table width="740" height="263" border="0">
        <tr></tr>
        <tr></tr>
        <tr>
          <td width="284">&nbsp;</td>
          <td width="520"><p align="center" class="Estilo1">Indique la fecha: </p>
              <p><span class="Estilo2">Fecha:</span>
                  <input type="text" name="fecha" id="fecha"  value="<? echo $fecha ?>"/>
                  <input name="button" type="button" id="lanzador" value="..." />
                  <input type="submit" name="Submit" value="Buscar" />
                  <input type="reset" name="reset" value="Borrar" />
            </p></td>
          <td width="274">&nbsp;</td>
        </tr>
      </table>
	  <p>&nbsp;</p>
	<p>
	  
</form>

<!-- script que define y configura el calendario-->
<script type="text/javascript">
    Calendar.setup({
        inputField     :    "fecha",      // id del campo de texto
        ifFormat       :    "%d/%m/%Y",       // formato de la fecha, cuando se escriba en el campo de texto
        button         :    "lanzador"   // el id del botón que lanzará el calendario
    });
</script>

</body>
</html>

