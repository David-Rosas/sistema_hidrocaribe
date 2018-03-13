<?php
      include('clases/ezpdf/class.ezpdf.php');
		include_once("configuracion.php");
		include_once("funciones/funciones.php");
		$connection = pg_connect("host=$sql_host port=$puerto dbname=$sql_db user=$sql_usuario password=$sql_pass") or die("No se realiz&oacute la conexi&oacute;n Detalles: ".pg_last_error());
		$id = $_GET['id'];
		$sql = "SELECT ord.fecha,ord.hora,o.nombre,a.nombre,t.numero_listado,t.zonas,t.rutas,ord.descripcion 
		FROM orden_trab AS ord,operadora AS o,actividad AS a,tarea AS t 
		WHERE ord.id='$id' AND ord.id_actividad=a.id AND ord.id_operadora=o.id AND t.id=ord.id";
		$resultado = devuelveValor($connection,$sql);
      $pdf =& new Cezpdf('LETTER','landscape');

      $pdf->selectFont('clases/ezpdf/fonts/Times-Roman.afm');
      $pdf->ezSetCmMargins(2.5,2,2,2);
   
      $datacreator = array (
   
                          'Title'=>'Orden de Trabajo con Listado de Suspensiones',
   
                          'Author'=>'Misael Ferrer',
   
                          'Subject'=>'Sistema de Informacion Web para el Control de los Contratos de Hidrocaribe',
   
                          'Creator'=>'misael_ferrer@yahoo.com',
   
                          'Producer'=>'http://www.arapito.com.ve'
  
                          );
  
      $pdf->addInfo($datacreator);
      
  		$options = array('shadeCol'=>array(0.9,0.9,0.9),'xOrientation'=>'center','width'=>600);
  		$pdf->ezImage("imagenes/jpg/LOGO_HIDRO.jpg", 0, 670, 'none', 'left');
  		$pdf->ezText("\n",1);
      $pdf->ezText("<b>ORDEN DE TRABAJO</b>\n",18,array('justification'=>'center'));
  /*
      $pdf->ezText(utf8_decode("<b>ORDEN DE TRABAJO Nº: </b>".$id)."____\n",11,array('justification'=>'right'));
      $pdf->ezText(utf8_decode("<b>FECHA: </b>".$resultado[0])."____\n",11,array('justification'=>'right'));
      $pdf->ezText(utf8_decode("<b>HORA: </b>".$resultado[1])."____\n",11,array('justification'=>'right'));
      
      $pdf->ezText(utf8_decode("<b>OPERADORA COMERCIAL: </b>".$resultado[2])."\n",12,array('justification'=>'left'));
      $pdf->ezText(utf8_decode("<b>ACTIVIDAD: </b>".$resultado[3])."\n",12,array('justification'=>'left'));
      $pdf->ezText("\n",4);
      $pdf->ezText(utf8_decode("<b>DATOS DEL SUSCRIPTOR </b>")."\n",14,array('justification'=>'left'));
      $pdf->ezText(utf8_decode("<b>LISTADO DE SUSPENSIONES: </b>".$resultado[4])."\n",12,array('justification'=>'left'));
      $pdf->ezText(utf8_decode("<b>ZONAS: </b>".$resultado[5])."\n",12,array('justification'=>'left'));
		$pdf->ezText(utf8_decode("<b>RUTAS: </b>".$resultado[6])."\n",12,array('justification'=>'left'));
		$pdf->ezText(utf8_decode("<b>DESCRIPCIÓN DE LA ACTIVIDAD: </b>".$resultado[7])."\n",12,array('justification'=>'left'));
	*/
		$titulo = array(
		array(utf8_decode('<b>ORDEN DE TRABAJO Nº: </b>'),'<b>'.$id.'</b>')
		);
      $titles = $titulo[0];
      $data[] = array(utf8_decode("<b>FECHA: </b>"),$resultado[0]);
      $data[] = array(utf8_decode("<b>HORA: </b>"),$resultado[1]);
      
      $data[] = array(utf8_decode("<b>OPERADORA COMERCIAL: </b>"),utf8_decode($resultado[2]));
      $data[] = array(utf8_decode("<b>ACTIVIDAD: </b>"),utf8_decode($resultado[3]));
      //$pdf->ezText("\n",4);
      $data[] = array(utf8_decode("<b>DATOS DEL SUSCRIPTOR </b>"),"");
      $data[] = array(utf8_decode("<b>LISTADO DE NOTIFICACIONES: </b>"),utf8_decode($resultado[4]));
      $data[] = array(utf8_decode("<b>ZONAS: </b>"),utf8_decode($resultado[5]));
		$data[] = array(utf8_decode("<b>RUTAS: </b>"),utf8_decode($resultado[6]));
		$data[] = array(utf8_decode("<b>DESCRIPCIÓN DE LA ACTIVIDAD: </b>"),utf8_decode($resultado[7]));
	
		$pdf->ezTable($data, $titles, '', $options);
		$pdf->ezText("\n\n\n", 2);
		$pdf->ezImage("imagenes/jpg/pie.jpg", 0, 670, 'none', 'left');
		$pdf->ezText("\n", 10);
  		$pdf->ezImage("imagenes/jpg/barra.jpg", 0, 670, 'none', 'left');
/*
		
		$pdf->ezText(utf8_decode(utf8_decode("DATOS JAC "."\n\n")), 12, array('justification'=>'center'));
  		$pdf->ezText(utf8_decode("____________________________"), 12, array('justification'=>'center'));
  		$pdf->ezText(utf8_decode(utf8_decode("EMISOR "."\n\n\n\n")), 12, array('justification'=>'center'));
      $pdf->ezText(utf8_decode("____________________________"), 12, array('justification'=>'center'));
      $pdf->ezText(utf8_decode(utf8_decode("RECEPTOR "."\n")), 12, array('justification'=>'center'));
*/      
      //$pdf->ezText(utf8_decode($resultados[19]), 12, array('justification'=>'center'));
      //$pdf->ezText("\n", 2);
      //$pdf->ezText("\n", 2);
      //$pdf->ezText("\n",10);
  
      //$pdf->ezText("<b>Fecha:</b> ".date("d/m/Y"),10);
  
      //$pdf->ezText("<b>Hora:</b> ".date("H:i:s")."\n\n",10);
  
      $pdf->ezStream();

?>