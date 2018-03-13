<?

session_name("sesion");
session_start();

					
if(isset($_SESSION['user']) && isset($_SESSION['pass']))
  {
	      
	//echo "BIENVENIDO";
  
   }
   else
   {
   echo "<center><b>Error de acceso: Necesitas iniciar sesion</b></center>";
   }
?> 
<html>
<head>
<title>SICON - Indice</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<FRAMESET cols="25%, *">
	<frame src="indice2.php" frameborder="1" marginwidth="0" marginheight="0">
	<frame src="introduccion.php"  name="contenido" frameborder="1" marginwidth="0" marginheight="0">
</FRAMESET><noframes></noframes>
</html>
