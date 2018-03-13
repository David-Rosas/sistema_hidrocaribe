<?php
include("ayuda.php");

$texto = '
Para acceder al sistema debe realizar los siguientes pasos:
<ul>
<li>Primero encienda el computador.</li>
<li>Haga doble click al icono que identifica el navegador recomendado (Iceweasel <a href="../indexModulos_archivos/iceweasel.png"><img src="../indexModulos_archivos/iceweasel_thumbnail.png" width="16" height="16" border="0" alt=""></a> o Firefox <a href="../indexModulos_archivos/firefox.png"><img src="../indexModulos_archivos/firefox_thumbnail.png" width="16" height="16" border="0" alt=""></a>).</li>
<li>En la barra de direcciones introduzca la direccion web suministrada por el Administrador del Sistema SIGECAH y luego presione ENTER.<br>
Por ejemplo:<br>
 <img src="../indexModulos_archivos/direccion.png" width="586" height="24" border="0" alt=""></li>
<li>Aparecerá, la ventana de presentación del sistema (Vea la siguiente Figura), donde se debera seleccionar el nombre de usuario e introducir la clave de acceso.<br><br>
<div align="center">
<img src="../indexModulos_archivos/entrada.png" width="400" height="278" border="0" alt="">
<br><b>Ventana de Presentación del Sistema SIGECAH</b></div></li><br>
<li>Teclee los datos solicitados y oprima el botón entrar para acceder al sistema. 
</li>
<li>
Si los datos de identificación de usuario son válidos se carga en pantalla la ventana principal que se presenta en la siguiente figura.
<br><br><div align="center">
<img src="../indexModulos_archivos/principal.png" width="400" height="278" border="0" alt="">
<br><b>Ventana principal del SIGECAH</b></div>
<br>
</li>
</ul>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;La ventana de SIGECAH tiene características 
comunes a cualquier ventana de los sistemas operativos más comunes. Esta ventana 
cuenta con una barra de herramientas que presenta diferentes iconos, que corresponden 
a opciones dentro de las alternativas principales, lo que equivale a que se puede 
ejecutar cualquiera de los procesos vinculados con estos iconos sin tener que 
ubicarlos en el menú principal (ver figura)<br>.
<br><div align="center">
<img src="../indexModulos_archivos/menu_p.png" width="1019" height="53" border="0" alt="">
<br><b>Barra de Menú y de herramientas</b></div>
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;La barra de menús contiene seis (6) elementos principales: Mantenimiento, Procesos, Indicadores de Gestión, 
Listados, Preferencias y Ayuda. Además contiene un enlace que sirve para cerrar la sesion y salir del sistema.
<br><br>
<b>Mantenimiento:</b> permite seleccionar las operaciones básicas del sistema
(Guardar, Modificar, Mostrar y Eliminar). En esta sección se mantendra toda la información necesaria
 para que SIGECAH funcione adecuadamente.
<br><br>
<b>Procesos:</b> permite seleccionar las opciones para ejecutar acciones tales como: En esta sección se mantendra toda la información necesaria
 Solicitud de Servicios (Generación de Casos), Atención de Casos, asignacion de proyectos, 
 software, entrega de equipos a proveedores y cambiar contraseña.
 <br><br>
<b>Indicadores de Gestión:</b> permite visualizar e imprimir los indicadores de gestión de cada uno
 de los analistas que trabajan en la gerencia como por ejemplo: número de casos, 
 tiempo y dinero invertido, problemas frecuentes, etc, todo esto visualizado para 
 cada unidad atendida.
 <br><br>
<b>Listados:</b> permite visualizar e imprimir diferentes listados tales como, de equipos, proveedores y componentes
 alertas, sugerencias, etc.
 <br><br>
<b>Preferencias:</b> permite configurar elementos de la aplicacion tales como temas.
<br><br>
<b>Ayuda:</b> permite visualizar y estudiar el manual de usuario, creditos y Licencia. Además permite enviar
sugerencias al programador del sistema.
';

$titulo = 'Iniciando el Sistema';
ayuda($titulo,$texto);
?>