<?php
include("ayuda.php");

$texto = '
Requerimientos en el Servidor<br>
<ul>
<li>Microprocesador Pentium de 333 MHz o superior.</li>
<li>Un disco duro con espacio disponible de 2 Gigabytes.</li>
<li>Tarjeta de video VGA o superior.</li>
<li>Tarjeta de Red de 100 Mbps o superior.</li>
<li>16 MB de memoria RAM.</li>
<li>Una Unidad de CD-ROOM.</li>
<li>Teclado</li>
</ul>
<br>
Requerimientos en el Cliente<br>
<ul>
<li>Microprocesador Pentium de 333 MHz o superior.</li>
<li>Un disco duro con espacio disponible de 30 Megabytes.</li>
<li>Tarjeta de video VGA o superior.</li>
<li>Tarjeta de Red de 100 Mbps o superior.</li>
<li>64 MB de memoria RAM.</li>
<li>Teclado</li>
<li>Ratón</li>
</ul>';

$titulo = 'Requisitos de Hardware (mínimos)';
ayuda($titulo,$texto);
?>