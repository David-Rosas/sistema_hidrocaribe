<?php
include("clases/gui/gui.class.php");
include("configuracion.php");
include("funciones/funciones.php");
$dir_ccs = "clases/css/";
$dir_jpg = "imagenes/jpg/";
$dir_javascript = "javascript/";
$dir_png = "imagenes/png/";
$dir_gif = "imagenes/gif/";
$fecha = $_GET['fecha'];
$hora = $_GET['hora'];
$sitio = $_GET['sitio'];
$tsustancias = $_GET['tsustancias'];
$cantidad = $_GET['cantidad'];
$nguia = $_GET['nguia'];
$recibido = $_GET['recibido'];
$observacion=$_GET['observacion'];
$empresa = $_GET['empresa'];
$autorizado=$_GET['autorizado'];
$fecha2 = $_GET['fecha2'];
$hora2 = $_GET['hora2'];
$tsitio = $_GET['tsitio'];
$cantidadt = $_GET['cantidadt'];
$novedad = $_GET['novedad'];


$control = new control;
$marco = new marco;
$cuerpo = new gui;

$connection = pg_connect("host=$sql_host port=$puerto dbname=$sql_db user=$sql_usuario password=$sql_pass") or die("No se realiz&oacute la conexi&oacute;n Detalles: ".pg_last_error());
$sql = "SELECT max(id) from sustancias";
$max_id = resultadoIndividual($connection,$sql);
$cuerpo->set_titulo("SICON - BUSQUEDA DE SUSTANCIAS");
$cuerpo->set_languaje();
$cuerpo->set_type("text/javascript");

$cuerpo->abrir_head();
	$cuerpo->add_link($dir_ccs."ventanas.css","stylesheet","text/css");
	$cuerpo->add_link($dir_ccs."tablas.css","stylesheet","text/css");
	$cuerpo->add_link($dir_ccs."general.css","stylesheet","text/css");
	$cuerpo->add_link($dir_ccs."cabecera.css","stylesheet","text/css");
	$cuerpo->add_link($dir_ccs."stilo.css","stylesheet","text/css");
	$cuerpo->add_script($dir_javascript."scriptaculous/prototype.js");
	$cuerpo->add_script($dir_javascript."scriptaculous/effects.js");
	$cuerpo->add_script($dir_javascript."scriptaculous/window.js");
	$cuerpo->add_script($dir_javascript."scriptaculous/window_effects.js");
	$cuerpo->add_script($dir_javascript."scriptaculous/debug.js");
	$cuerpo->add_script($dir_javascript."buscars.js");
	
	$cuerpo->add_link($dir_ccs."ventanas.css","stylesheet","text/css");
	$cuerpo->add_link($dir_ccs."tablas.css","stylesheet","text/css");
	$cuerpo->add_link($dir_ccs."general.css","stylesheet","text/css");
	$cuerpo->add_link($dir_ccs."cabecera.css","stylesheet","text/css");
	$cuerpo->add_link($dir_ccs."calendar-blue.css","alternate stylesheet","text/css");
	$cuerpo->add_link($dir_ccs."stilo.css","stylesheet","text/css");
	$cuerpo->add_link($dir_ccs."skins/aqua/theme.css","stylesheet","text/css");
	$cuerpo->add_link($dir_ccs."calendar-blue2.css","alternate stylesheet","text/css");
	$cuerpo->add_link($dir_ccs."calendar-brown.css","alternate stylesheet","text/css");
	$cuerpo->add_link($dir_ccs."calendar-green.css","alternate stylesheet","text/css");
	$cuerpo->add_link($dir_ccs."calendar-win2k-1.css","alternate stylesheet","text/css");
	$cuerpo->add_link($dir_ccs."calendar-win2k-2.css","alternate stylesheet","text/css");
	$cuerpo->add_link($dir_ccs."calendar-win2k-cold-1.css","alternate stylesheet","text/css");
	$cuerpo->add_link($dir_ccs."calendar-win2k-cold-2.css","alternate stylesheet","text/css");
	$cuerpo->add_link($dir_ccs."calendar-system.css","alternate stylesheet","text/css");

	$cuerpo->add_script($dir_javascript."calendar.js");
	$cuerpo->add_script($dir_javascript."lang/calendar-en.js");
	$cuerpo->add_script($dir_javascript."scriptaculous/prototype.js");
	$cuerpo->add_script($dir_javascript."scriptaculous/effects.js");
	$cuerpo->add_script($dir_javascript."scriptaculous/window.js");
	$cuerpo->add_script($dir_javascript."scriptaculous/window_effects.js");
	$cuerpo->add_script($dir_javascript."scriptaculous/debug.js");
	$cuerpo->add_script($dir_javascript."calendario.js");
	
$cuerpo->cerrar_head();

		$cuerpo->abrir_body('align="center"',' action="sustancias_buscar.php" method="get" name="form"',"70%");
		$cuerpo->esp_parrafo();
		$marco->set_class_titulo('tituloDOSE_4');
		$marco->set_colspan(3);
		$marco->set_propiedades('class="formato-blanco" align="center" border="0" cellpadding="0" cellspacing="0" width="100%"');
		$marco_busqueda = clone $marco;
		$marco_busqueda->set_titulo("");
		$marco_busqueda->abrir_marco();
		$control->set_altura(30);
		$control->set_largo1("25%");
		$control->set_largo2("75%");
		$control->set_class("formato-blanco");
		$control->set_alineacion_label("right");
		$control->set_size(40);
		$control->set_vacio(1);
		$marco_busqueda->add_control($control);

		$control->set_tipo("input");
		$control->set_type("text");
		$control->set_vacio(0);
		
		$control->set_propiedades('style="text-align: left;"');
		$control->set_id("self1");
		$control->set_label("FECHA INICIAL");
		$control->set_name("fecha_ini");
		$control->set_value($fecha_ini);
		$marco->add_control_fecha($control);
		
		$control->set_propiedades('style="text-align: left;"');
		$control->set_id("self2");
		$control->set_label("FECHA FINAL");
		$control->set_name("fecha_fin");
		$control->set_value($fecha_fin);
		$marco->add_control_fecha($control);
		
		$control->set_label("Planta");
		$control->set_name("sitio");
		$control->set_value($sitio);
		$control->set_value($datos[0]);
		$control->set_propiedades('style="text-align: left;"' );
		$marco->add_control($control, $connection,"SELECT nombre FROM planta where eliminado=0 order by nombre");
		
		$control->set_label("Sustancia");
		$control->set_name("tsustancias");
		$control->set_value($tsustancias);
		$control->set_value($datos[0]);
		$control->set_propiedades('style="text-align: left;"' );
		$marco->add_control($control, $connection,"SELECT nombre FROM tsustancias where eliminado=0 order by nombre");


		$control->set_label("");
		$control->set_type("button");
		$control->set_propiedades('onclick="guardar();"');
		$c3 = clone $control;
		$control->set_propiedades('onclick="guardar1();"');
		$c2 = clone $control;
		$control->set_propiedades('onclick="imprimir();"');
		$c1 = clone $control;
		$control->set_propiedades('onclick="guardar2();"');
		$c4 = clone $control;
		$c4->set_name("buscar2");
		$c4->set_value("Buscar por Sustancia");
		$c1->set_name("Imprimir");
		$c1->set_value("imprimir");
		$c2->set_name("buscar1");
		$c2->set_value("Buscar por Planta");
		$c3->set_name("buscar");
		$c3->set_value("Buscar por Fecha");
		
		$marco_busqueda->generar_botones(array($c3,$c2,$c4,$c1)); //genera varios controles en posicion horizontal a diferencia de addcontrol

	$marco_busqueda->cerrar_marco();
	$marco->abrir_marco();
	
	$editar = new boton($dir_png."editar.png","editar",$title="Editar");
	
		$tabla = new grid1($connection,"id,fecha,hora,sitio,tsustancias,cantidad,nguia,recibido,observacion,empresa,autorizado,fecha2,hora2,tsitio,cantidadt,novedad","sustancias",array("Codigo","Fecha","Hora","Planta","Sustancias","Cantidad","N.Guia","Recibido","Observacion","Empresa","Autorizado","Fecha","Hora","Planta Tranf.","Cantidad Transf.","Novedad"),array($editar),"fecha ilike '%$fecha%' and eliminado=0","fecha");
		
		$marco->add_grid($tabla);
	$marco->cerrar_marco();
$cuerpo->cerrar_body();

pg_close($connection);
?>
