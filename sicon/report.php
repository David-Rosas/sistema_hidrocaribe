 <?php 
      require_once('clases/ezpdf/class.ezpdf.php');
	  include_once("configuracion.php");
      $pdf =& new Cezpdf('a4');
   
      $pdf->selectFont('../fonts/courier.afm');
  
      $pdf->ezSetCmMargins(1,1,1.5,1.5);
	     
      $connection = pg_connect("host=$sql_host port=$puerto dbname=$sql_db user=$sql_usuario password=$sql_pass") or die("No se realiz&oacute la conexi&oacute;n Detalles: ".pg_last_error());
      
	//  mysql_select_db("demo", $conexion);
  
	  $sql = "SELECT id,fecha,punto,hora,presion,caudal FROM tomas ";  
      //$queEmp = "SELECT nombre, direccion, telefono FROM empresa";
   	  $resultado = pg_exec($connection, $sql); 
      //$resEmp = pg_query($resultado,$connection);
   
      //$totEmp = mysql_num_rows($resEmp);
	  //$row=pg_fetch_row($resEmp);
	   
      $i = 0;
  
      //while($datatmp = pg_fetch_row($resEmp)) {
       while ($row=pg_fetch_array($resultado)) {
  
          //$data[] = array_merge($row, array('num'=>$i));
   
      }
   
      $titles = array(
  
                      'id'=>'<b>Num</b>',
  
                      'fecha'=>'<b>Empresa</b>',
   
                      'punto'=>'<b>Direccion</b>',
  
                      'hora'=>'<b>Telefono</b>'
 
                  );
  
      $options = array(

                      'shadeCol'=>array(0.9,0.9,0.9),

                      'xOrientation'=>'center',

                      'width'=>500

                  );
  
      $txttit = "<b>BLOG.UNIJIMPE.NET</b>\n";
  
      $txttit.= "Ejemplo de PDF con PHP y MYSQL \n";
   
       
   
      $pdf->ezText($txttit, 12);
   
      $pdf->ezTable($data, $titles, '', $options);
   
      $pdf->ezText("\n\n\n", 10);
   
      $pdf->ezText("<b>Fecha:</b> ".date("d/m/Y"), 10);
   
      $pdf->ezText("<b>Hora:</b> ".date("H:i:s")."\n\n", 10);
   
      $pdf->ezStream();





?>