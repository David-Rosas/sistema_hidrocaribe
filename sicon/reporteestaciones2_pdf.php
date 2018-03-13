<?php
        include('clases/ezpdf/class.ezpdf.php');
		include_once("configuracion.php");
		include_once("funciones/funciones.php");
		$connection = pg_connect("host=$sql_host port=$puerto dbname=$sql_db user=$sql_usuario password=$sql_pass") or die("No se realiz&oacute la conexi&oacute;n Detalles: ".pg_last_error());
		$id = $_GET['fecha_ini'];
		$id1 = $_GET['fecha_fin'];
		if (!isset($id) || $id==""){
			$sql = "SELECT * FROM estaciones";
		}
		else
		{
			$sql = "SELECT id,fecha,hora,sitio,causa,observacion,fechaa,horaa,atendido FROM estaciones WHERE fecha >= '$id' and fecha <='$id1' and eliminado=0";	
		}
	  $resultado = pg_exec($connection, $sql); 
      $pdf =& new Cezpdf('LETTER','portrait');
      $pdf->selectFont('clases/ezpdf/fonts/Times-Roman.afm');
      $pdf->ezSetCmMargins(1,1,2,3); 
	  $pdf->ezImage("imagenes/jpg/LOGO_HIDRO.jpg", 0,500, 'none', 'left');
	  $pdf->ezText("<b>Reportes de Estaciones</b>\n",14,array('justification'=>'center'));	
	  $titulo = array(array("Fecha","Hora","Sitio","Causa","Observacion","Fecha A","Hora Atendido","Atendido por"));
    
	$titles = $titulo[0];
	while ($row=pg_fetch_row($resultado)) 
	{
      $data[] = array($row[1],$row[2],$row[3],$row[4],$row[5],$row[6],$row[7],$row[8]);
	}
	  $pdf->ezTable($data, $titles,$options);
	  $pdf->ezSetY(90);
	  $pdf->ezText("<b>Fecha:</b> ".date("d/m/Y"),10);
	  //$pdf->ezText("<b>Hora:</b> ".date("H:i:s")."\n\n",10);
	  $pdf->ezStream();

?>