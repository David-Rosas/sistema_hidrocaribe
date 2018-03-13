<?php
switch($_POST["enviar"]) {
    case Guardar:
pg_connect("dbname=db_control user=postgres password=12345") 
or die("No se pudo realizar la conexión");
{
if($_REQUEST['codigo'] && $_REQUEST['codpun']&& $_REQUEST['fecha']&& $_REQUEST['hora']&& $_REQUEST['presion']&& $_REQUEST['caudal'])
{
 $query = "INSERT INTO tomas (id, fecha, punto, hora, presion, caudal) 
               VALUES ('" . $_REQUEST['codigo'] . "',
			   		   '" . $_REQUEST['fecha'] . "',
					   '" . $_REQUEST['codpun'] . "',
					   '" . $_REQUEST['hora'] . "',
					   '" . $_REQUEST['presion'] . "',
                       '" . $_REQUEST['caudal'] . "')";
// Ejecuta la consulta SQL
 $result = pg_query($query);
 if($result)
 echo "El registro ha sido editado";
 else
 echo "Ocurrió un error ! ".pg_last_error();

}
 }
    break;
    case Mostrar:
pg_connect("dbname=db_control user=postgres password=12345") 
or die("No se pudo realizar la conexión");
// Consulta para selecionar los registros de la tabla
$query = "SELECT * FROM tomas ORDER BY id";
// Ejecuta la consulta SQL
$result = pg_query($query);
if($result)
{
 while ($row = pg_fetch_assoc($result)) 
 {
 echo $row['id']. '<br />' ; 
 echo $row['fecha'] ;
 echo $row['punto'] ; 
 echo $row['hora'] ; 
 echo $row['presion'] ; 
 echo $row['caudal'] ; 
 echo '<a href="eliminar.php?id=' . $row['id'] . '">Borrar registro</a><br />';
 echo '<hr />';
 }
}
else
 echo "Ocurrió un error ! ".pg_last_error();
 
       break;
    case Buscar:
        
		
		
		
		
		
		
        break;
  
}



?>
