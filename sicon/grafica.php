<?php 
 
	
  $sitio= $_GET["sitio"];
  $causa= $_GET["causa"];
  $id = $_GET['fecha_ini'];
  $id1 = $_GET['fecha_fin'];
 
   
   include("configuracion.php");
	include "libchart/classes/libchart.php";   
	
  
	$chart = new verticalBarChart(600,400);
	
	$connection = pg_connect("host=$sql_host port=$puerto dbname=$sql_db user=$sql_usuario password=$sql_pass") or die("No se realiz&oacute la conexi&oacute;n Detalles: ".pg_last_error());
//	$sql = "SELECT * from estaciones where sitio ='$sitio'";
	
	$sql = "SELECT count(*) as cant, causa2 from estaciones where sitio ='$sitio' and fecha >= '$id' and fecha <= '$id1' and causa ='$causa' group by causa2";
	$buscar = pg_query($sql);
	if ($buscar) 
	{ 
		$dataSet = new XYDataSet();
		while($pais = pg_fetch_array($buscar)) 
		{
			$dataSet->addPoint(new Point($pais[causa2], $pais[cant]));
		}
		$chart->setDataSet($dataSet);
		$chart->setTitle("");
		$chart->render("generated/demo2.png");
	}
	
	//$chart->getPlot()->setGraphPadding(new Padding(40, 0, 0, 0));

	//$chart->setTitle("");
	//$chart->render("generated/demo2.png");
?>
   <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Libchart horizontal bars demonstration</title>
	<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-15" />
</head>
<body>
     <h1><center><?echo $sitio;?></center></h1>
	<img alt=""  src="generated/demo2.png" style="border: 1px solid gray;"/>
</body>
</html>
       

