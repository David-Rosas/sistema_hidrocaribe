<?php
   $ciudad = $_POST["ciudad"];

	include("configuracion.php");
	include "libchart/classes/libchart.php";
   echo "$ciudad";



	$chart = new PieChart(600, 170);
	
	$connection = pg_connect("host=$sql_host port=$puerto dbname=$sql_db user=$sql_usuario password=$sql_pass") or die("No se realiz&oacute la conexi&oacute;n Detalles: ".pg_last_error());
	$sql = "SELECT * from pais where ciudad ='$ciudad'";
	
	$buscar = pg_query($connection,$sql);
	$pais = pg_fetch_array($buscar);

	
	 $dataSet = new XYDataSet();
	$dataSet->addPoint(new Point("Valor1", $pais[valor1]));
	$dataSet->addPoint(new Point("Valor2", $pais[valor2]));
	$dataSet->addPoint(new Point("valor3", $pais[valor3]));
	$chart->setDataSet($dataSet);
	
	 $chart->render("generated/demo2.png");
		
	
	
	
	
//	$chart->getPlot()->setGraphPadding(new Padding(5, 30, 20, 140));

	$chart->setTitle("Pais");
//	$chart->render("generated/demo2.png");
?>
   <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Libchart horizontal bars demonstration</title>
	<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-15" />
</head>
<body>
	<img alt="Horizontal bars chart"  src="generated/demo2.png" style="border: 1px solid gray;"/>
</body>
</html>
       