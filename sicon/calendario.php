<html>
<head>
	<title>Calendario de pruebas</title>
	
  <!-Hoja de estilos del calendario -->
  <link rel="stylesheet" type="text/css" media="all" href="calendar-blue.css" title="winter" />

  <!-- librer�a principal del calendario -->
  <script type="text/javascript" src="javascript/calendar.js"></script>

  <!-- librer�a para cargar el lenguaje deseado -->
  <script type="text/javascript" src="javascript/lang/calendar-es.js"></script>

  <!-- librer�a que declara la funci�n Calendar.setup, que ayuda a generar un calendario en unas pocas l�neas de c�digo -->
  <script type="text/javascript" src="javascript/calendar-setup.js"></script>
	
</head>

<body>

<!-- formu lario con el campo de texto y el bot�n para lanzar el calendario-->
<form action="#" method="get">
<input type="text" name="date" id="campo_fecha" />
<input type="button" id="lanzador" value="..." />
</form>

<!-- script que define y configura el calendario-->
<script type="text/javascript">
    Calendar.setup({
        inputField     :    "campo_fecha",      // id del campo de texto
        ifFormat       :    "%d/%m/%Y",       // formato de la fecha, cuando se escriba en el campo de texto
        button         :    "lanzador"   // el id del bot�n que lanzar� el calendario
    });
</script>

</body>
</html>



