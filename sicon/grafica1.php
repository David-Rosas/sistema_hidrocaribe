<?php 
 
	
  $sitio= $_GET["sitio"];
  $id = trim ($_GET['fecha_ini']);
  $id1 = trim ($_GET['fecha_fin']);
     
   include("configuracion.php");
   include "libchart/classes/libchart.php";   
	//$id=strtotime ($id);
	$id = substr($id,6,4) . "/" . substr($id,3,2) . "/" .substr($id,0,2);
	$id1 = substr($id1,6,4) . "/" . substr($id1,3,2) . "/" .substr($id1,0,2);
	echo $id;
	$chart = new verticalBarChart(600,600);
	
	$connection = pg_connect("host=$sql_host port=$puerto dbname=$sql_db user=$sql_usuario password=$sql_pass") or die("No se realiz&oacute la conexi&oacute;n Detalles: ".pg_last_error());
//	$sql = "SELECT * from estaciones where sitio ='$sitio'";
	
	$sql = "SELECT count(*) as cant, causa from estaciones where sitio ='$sitio' and fecha >= '$id' and fecha <= '$id1' group by causa";
	$buscar = pg_query($sql);
	echo $sql,"<br>";
	if ($buscar) 
	{ 
		$dataSet = new XYDataSet();
		while($pais = pg_fetch_array($buscar)) 
		{
			$dataSet->addPoint(new Point($pais[causa], $pais[cant]));
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
       

