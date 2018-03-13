<?
session_name("sesion");
session_start();
if(isset($_SESSION['user']) && isset($_SESSION['pass'])){
   //phpinfo();
   printf("<center><a href='cerrarsesion.php'>Cerrar Sesion</a></center>");
   }
   else{
   echo "<center><b>Error de acceso: Necesitas iniciar sesion</b></center>";
   }
?> 