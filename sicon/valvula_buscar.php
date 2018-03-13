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
$cuerpo->set_titulo("SICON - BUSQUEDA DE VALVULA");
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
	$cuerpo->add_script($dir_javascript."valvula.js");
$cuerpo->cerrar_head();

$cuerpo->abrir_body('align="center"',' action="valvula_buscar.php" method="get" name="form"',"60%");
	$cuerpo->esp_parrafo();
	$marco->set_class_titulo('tituloDOSE_4');
	$marco->set_colspan(3);
	$marco->set_propiedades('class="formato-blanco" align="center" border="0" cellpadding="0" cellspacing="0" width="70%"');
//	$marco->set_titulo("Tipo de Orden de Trabajo");
	$marco_busqueda = clone $marco;
	$marco_busqueda->set_titulo("Filtrar Informacion");
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
		$control->set_label("NOMBRE");
		$control->set_name("nombre");
		$control->set_value($nombre);
		
		$marco_busqueda->add_control($control);
		
		$control->set_label("");
		$control->set_type("button");
		$control->set_propiedades('onclick="find();"');
		$c3 = clone $control;
		$control->set_propiedades('onclick="recargar();"');
		$c2 = clone $control;
		$c2->set_name("limpiar");
		$c2->set_value("Limpiar");
		$c3->set_name("buscar");
		$c3->set_value("Buscar");
		
		$marco_busqueda->generar_botones(array($c2,$c3)); //genera varios controles en posicion horizontal a diferencia de addcontrol

	$marco_busqueda->cerrar_marco();
	$marco->abrir_marco();
	
		$editar = new boton($dir_png."editar.png","editar",$title="Editar");
		$eliminar = new boton($dir_gif."eliminar.gif","eliminar",$title="Eliminar");		
		
		$tabla = new grid($connection,"id,nombre","valvula",array("Codigo","Nombre"),array($editar,$eliminar),"nombre ilike '%$nombre%' and eliminado=0","nombre");
		
		$marco->add_grid($tabla);
	$marco->cerrar_marco();
$cuerpo->cerrar_body();

pg_close($connection);
?>