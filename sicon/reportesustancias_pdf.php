<?php
        include('clases/ezpdf/class.ezpdf.php');
		include_once("configuracion.php");
		include_once("funciones/funciones.php");
		$connection = pg_connect("host=$sql_host port=$puerto dbname=$sql_db user=$sql_usuario password=$sql_pass") or die("No se realiz&oacute la conexi&oacute;n Detalles: ".pg_last_error());
		$id = $_GET['fecha'];
		if (!isset($id) || $id==""){
			$sql = "SELECT * FROM sustancias";
		}
		else
		{
			$sql = "SELECT id,fecha,hora,sitio,tsustancias,cantidad,nguia,recibido,observacion,empresa,autorizado,fecha2,hora2,tsitio,cantidadt,novedad FROM sustancias WHERE fecha = '$id' and eliminado=0";	
		}
	  $resultado = pg_exec($connection, $sql); 
      $pdf =& new Cezpdf('A3','landscape');
      $pdf->selectFont('clases/ezpdf/fonts/Times-Roman.afm');
      $pdf->ezSetCmMargins(1,1,2,3); 
	  $pdf->ezImage("imagenes/jpg/LOGO_HIDRO.jpg", 0,500, 'none', 'left');
	  $pdf->ezText("<b>Reportes de Sustancias</b>\n",14,array('justification'=>'center'));	
	  $titulo = array(array("Fecha","Hora","Sitio","Sustancia","Cant.","N.Guia","Recibido","Observacion","Empresa","Autorizado","Fecha","Hora","Planta T.","Cant.","Novedad"));
    
	$titles = $titulo[0];
	while ($row=pg_fetch_row($resultado)) 
	{
      $data[] = array($row[1],$row[2],$row[3],$row[4],$row[5],$row[6],$row[7],$row[8],$row[9],$row[10],$row[11],$row[12],$row[13],$row[14],$row[15]);
	}
	  $pdf->ezTable($data,$titles,$options);
	  $pdf->ezSetY(90);
	  $pdf->ezText("<b>Fecha:</b> ".date("d/m/Y"),8);
	  //$pdf->ezText("<b>Hora:</b> ".date("H:i:s")."\n\n",10);
	  $pdf->ezStream();

?>