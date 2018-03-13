<?php
switch($_POST["enviar"]) {
    case Guardar:
pg_connect("dbname=db_control user=postgres password=12345") 
or die("No se pudo realizar la conexión");
{
if($_REQUEST['codigo'] && $_REQUEST['fecha']&& $_REQUEST['hora']&& $_REQUEST['sitio']&& $_REQUEST['tsustancias']&& $_REQUEST['cantidad']&& $_REQUEST['ncompra']&& $_REQUEST['nguia']&& $_REQUEST['recibido']&& $_REQUEST['empresa']&& $_REQUEST['transferencia']&& $_REQUEST['novedad'])
{
 $query = "INSERT INTO  sustancias (id, fecha, hora, sitio, tsustancias, cantidad, ncompra, nguia, recibido, empresa, transferencia, novedad) 
               VALUES ('" . $_REQUEST['codigo'] . "',
			   			'" . $_REQUEST['fecha'] . "',
						'" . $_REQUEST['hora'] . "',
						'" . $_REQUEST['sitio'] . "',
						'" . $_REQUEST['tsustancias'] . "',
						'" . $_REQUEST['cantidad'] . "',
						'" . $_REQUEST['ncompra'] . "',
						'" . $_REQUEST['nguia'] . "',
						'" . $_REQUEST['recibido'] . "',
						'" . $_REQUEST['empresa'] . "',
						'" . $_REQUEST['transferencia'] . "',
                       	'" . $_REQUEST['novedad'] . "')";
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
$query = "SELECT * FROM  sustancias ORDER BY id";
// Ejecuta la consulta SQL
$result = pg_query($query);
if($result)
{
 while ($row = pg_fetch_assoc($result)) 
 {
 echo $row['id']. '<br />' ; 
 echo $row['fecha'].'<br />' ; 
 echo $row['hora'].'<br />' ;
 echo $row['sitio'].'<br />' ;
 echo $row['tsustancias'].'<br />' ;
 echo $row['cantidad'].'<br />' ;
 echo $row['ncompra'].'<br />' ;
 echo $row['nguia'].'<br />' ;
 echo $row['recibido'].'<br />' ;
 echo $row['empresa'].'<br />' ;
 echo $row['transferencia'].'<br />' ;
 echo $row['novedad'].'<br />' ;
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

