<?php
switch($_POST["enviar"]) {
    case Guardar:
pg_connect("dbname=db_control user=postgres password=12345") 
or die("No se pudo realizar la conexión");
{
if($_REQUEST['codigo']&& $_REQUEST['fecha'] && $_REQUEST['codval']&& $_REQUEST['hora']&& $_REQUEST['nvueltas']&& $_REQUEST['horar'])
{
 $query = "INSERT INTO  maniobras (id, fecha, sitio, hora, nvueltas, horar) 
               VALUES ('" . $_REQUEST['codigo'] . "',
			            '" . $_REQUEST['fecha'] . "',
			   			'" . $_REQUEST['codval'] . "',
						'" . $_REQUEST['hora'] . "',
						'" . $_REQUEST['nvueltas'] . "',
                       	'" . $_REQUEST['horar'] . "')";
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
$query = "SELECT * FROM  maniobras ORDER BY id";
// Ejecuta la consulta SQL
$result = pg_query($query);
if($result)
{
 while ($row = pg_fetch_assoc($result)) 
 {
 echo $row['id']. '<br />' ; 
 echo $row['fecha'].'<br />' ;
 echo $row['sitio'].'<br />' ; 
 echo $row['hora'].'<br />' ;
 echo $row['nvueltas'].'<br />' ;
 echo $row['horar'].'<br />' ;
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

