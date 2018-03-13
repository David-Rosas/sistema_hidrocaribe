<?php
include("clases/gui/gui.class.php");
include("configuracion.php");
include("funciones/funciones.php");
$dir_ccs = "clases/css/";
$dir_jpg = "imagenes/jpg/";
$dir_javascript = "javascript/";
$dir_png = "imagenes/png/";
$dir_gif = "imagenes/gif/";

$control = new control;
$marco = new marco;
$cuerpo = new gui;

$connection = pg_connect("host=$sql_host port=$puerto dbname=$sql_db user=$sql_usuario password=$sql_pass") or die("No se realiz&oacute la conexi&oacute;n Detalles: ".pg_last_error());
$sql = "SELECT max(id) from estaciones";
$max_id = resultadoIndividual($connection,$sql);
$cuerpo->set_titulo("SICON - GRAFICA DE CAUSAS DE ESTACIONES");
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
	$cuerpo->add_script($dir_javascript."buscarg.js");
	
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

$cuerpo->abrir_body('align="center"',' action="estaciones_buscar.php" method="post" name="form"',"70%");
	$cuerpo->esp_parrafo();
	$marco->set_class_titulo('tituloDOSE_4');
	$marco->set_colspan(3);
	$marco->set_propiedades('class="formato-blanco" align="center" border="0" cellpadding="0" cellspacing="0" width="100%"');
	$marco->set_titulo("");
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
		
		$control->set_label("P/P-E/B");
		$control->set_name("sitio");
		$control->set_value($sitio);
		$control->set_value($datos[0]);
		$control->set_propiedades('style="text-align: left;"' );
		$marco->add_control($control, $connection,"SELECT nombre FROM planta where eliminado=0 order by nombre");

				
		$control->set_label("");
		$control->set_type("button");
		$control->set_propiedades('onclick="graficar();"');
		$c6 = clone $control;
		$c6->set_name("grafica");
	    $c6->set_value("Grafica");
		
		$marco_busqueda->generar_botones(array($c6)); //genera varios controles en posicion horizontal a diferencia de addcontrol

	$marco_busqueda->cerrar_marco();
	
$cuerpo->cerrar_body();

pg_close($connection);
?>
