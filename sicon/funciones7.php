<?php
switch($_POST["enviar"]) {
    case Guardar:
pg_connect("dbname=db_control user=postgres password=12345") 
or die("No se pudo realizar la conexión");
{
if($_REQUEST['codigo'] && $_REQUEST['fecha']&& $_REQUEST['hora']&& $_REQUEST['sitio']&& $_REQUEST['causa']&& $_REQUEST['horaa']&& $_REQUEST['atendido'])
{
 $query = "INSERT INTO  estaciones (id, fecha, hora, sitio, causa, horaa, atendido) 
               VALUES ('" . $_REQUEST['codigo'] . "',
			   			'" . $_REQUEST['fecha'] . "',
						'" . $_REQUEST['hora'] . "',
						'" . $_REQUEST['sitio'] . "',
						'" . $_REQUEST['causa'] . "',
						'" . $_REQUEST['horaa'] . "',
						'" . $_REQUEST['atendido'] . "')" ;
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
$query = "SELECT * FROM  estaciones ORDER BY id";
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
		 echo $row['causa'].'<br />' ;
		 echo $row['horaa'].'<br />' ; 
		 echo $row['atendido'].'<br />' ;
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

