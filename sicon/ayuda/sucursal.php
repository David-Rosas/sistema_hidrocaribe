<?php
include("ayuda.php");

$texto = '
<div align="center">
<img src="../indexModulos_archivos/unidad.png" width="367" height="237" border="0" alt="">
<br><b>Menú Mantenimiento -> Empresa -> Unidad de Negocios</b>
</div><br><br>
'.$sangria.'
Esta opción te permite realizar las operaciones básicas (guardar, buscar, modificar y eliminar)
 sobre las diferentes unidades de negocios pertenecientes a la empresa. Al seleccionar esta opción 
 le aparecera la siguiente ventana:<br><br>
<div align="center"> 
 <img src="../indexModulos_archivos/unidad_negocios.png" width="600" height="313" border="0" alt="">
 <br><b>Ventana para registrar la Unidad de Negocios</b>
 </div> 
';

$titulo = 'Unidad de Negocios';
ayuda($titulo,$texto);
?>