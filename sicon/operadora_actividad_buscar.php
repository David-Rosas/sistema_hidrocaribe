<?php
include("clases/gui/gui.class.php");
include("configuracion.php");
include("funciones/funciones.php");
$dir_ccs = "clases/css/";
$dir_jpg = "imagenes/jpg/";
$dir_javascript = "javascript/";
$dir_png = "imagenes/png/";
$dir_gif = "imagenes/gif/";
$nombre = $_GET['nombre'];

$control = new control;
$marco = new marco;
$cuerpo = new gui;

$connection = pg_connect("host=$sql_host port=$puerto dbname=$sql_db user=$sql_usuario password=$sql_pass") or die("No se realiz&oacute la conexi&oacute;n Detalles: ".pg_last_error());
$cuerpo->set_titulo("SICOCON - BUSQUEDA DE OPERADORAS / TIPO DE ORDEN DE TRABAJO");
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
	$cuerpo->add_script($dir_javascript."operadora_actividad.js");
$cuerpo->cerrar_head();

$cuerpo->abrir_body('align="center"',' action="operadora_actividad_buscar.php" method="get" name="form"',"95%");
	$cuerpo->esp_parrafo();
	$marco->set_class_titulo('tituloDOSE_4');
	$marco->set_colspan(3);
	$marco->set_propiedades('class="formato-blanco" align="center" border="0" cellpadding="0" cellspacing="0" width="100%"');
	$marco->set_titulo("");
	$marco->abrir_marco();
	
		$eliminar = new boton($dir_gif."eliminar.gif","eliminar",$title="Eliminar Operadora");		
		
		$tabla = new grid($connection,"id_operadora||','||id_actividad,operadora.nombre,actividad.nombre","operadora_actividad,operadora,actividad",array("Identificación","Operadora","Tipo de Orden de Trabajo"),array($eliminar),"operadora.id=operadora_actividad.id_operadora and actividad.id=operadora_actividad.id_actividad","operadora.nombre");
		
		$marco->add_grid($tabla);
	$marco->cerrar_marco();
$cuerpo->cerrar_body();

pg_close($connection);
?>