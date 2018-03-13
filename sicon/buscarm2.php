<?php
include("clases/gui/gui.class.php");
include("configuracion.php");
include("funciones/funciones.php");
$dir_ccs = "clases/css/";
$dir_jpg = "imagenes/jpg/";
$dir_javascript = "javascript/";
$dir_png = "imagenes/png/";
$dir_gif = "imagenes/gif/";
$fecha_ini = $_GET['fecha_ini'];
$fecha_fin = $_GET['fecha_fin'];


$control = new control;
$marco = new marco;
$cuerpo = new gui;

$connection = pg_connect("host=$sql_host port=$puerto dbname=$sql_db user=$sql_usuario password=$sql_pass") or die("No se realiz&oacute la conexi&oacute;n Detalles: ".pg_last_error());
$cuerpo->set_titulo("SICON - MANIOBRAS DE VALVULAS");
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
	$cuerpo->add_script($dir_javascript."buscarm.js");
	$cuerpo->cerrar_head();
	
	$cuerpo->abrir_body('',' action="index1.php" method="post" name="form"',"60%");
	$cuerpo->esp_parrafo();
	$marco->set_class_titulo('tituloDOSE_4');
	$marco->set_colspan(2);
	$marco->set_propiedades('class="formato-blanco" align="center" border="0" cellpadding="0" cellspacing="0" width="100%"');
	$marco->set_titulo("");
	$marco->abrir_marco();
		$control->set_altura(30);
		$control->set_largo1("25%");
		$control->set_largo2("75%");
		$control->set_class("formato-blanco");
		$control->set_alineacion_label("right");
		$control->set_propiedades('style="text-align: left;" readonly="readonly"');
		$control->set_size(40);
		$control->set_vacio(1);
		$marco->add_control($control);

		$control->set_label("Fecha Inicial");
		$control->set_tipo("input");
		$control->set_name("fecha_ini");
		$control->set_value($fecha_ini);
		$control->set_type("text");
		$control->set_vacio(0);
		$marco->add_control($control);
		
		$control->set_propiedades('style="text-align: left;"');
		$control->set_label("Fecha Final");
		$control->set_name("fecha_fin");
		$control->set_value($fecha_fin);
		$marco->add_control($control);
		
//	    $control->set_label("SITIO");
//		$control->set_name("valvula");
//		$control->set_value($datos[0]);
//		$control->set_value($valvula);
//		$control->set_propiedades('style="text-align: left;"' );
//      $marco->add_control($control, $connection,"SELECT nombre FROM valvula where eliminado=0 order by nombre");
	
		$control->set_vacio(1);
		$marco->add_control($control);
		
		
		$marco->abrir_marco();
	
		$imprimir1 = new boton($dir_png."imprimir.png","imprimir1",$title="Imprimir");
		//$editar = new boton($dir_png."editar.png","editar",$title="Editar");
		
		$tabla = new grid($connection,"id,fecha,valvula,catvalvula,hora,nvueltas,tvuelta1,horar2,nvueltas2,tvuelta2,horar3,nvueltas3,tvuelta3,horar4,nvueltas4,tvuelta4,horar5,nvueltas5,tvuelta5","maniobras",array("Codigo","Fecha","Valvula","Categoria","Hora","N.Vueltas","","Hora","N.Vueltas","","Hora","N.Vueltas","","Hora","N.Vueltas","","Hora","N.Vueltas",""),array($imprimir1),"(fecha>='".$fecha_ini."' and fecha<='".$fecha_fin."')","fecha desc limit 20");
						
		//$tabla = new grid($connection,"id,fecha,valvula,catvalvula,hora,nvueltas,tvuelta1,horar2,nvueltas2,tvuelta2,horar3,nvueltas3,tvuelta3,horar4,nvueltas4,tvuelta4,horar5,nvueltas5,tvuelta5","maniobras",array("Codigo","Fecha","Valvula","Categoria","Hora","N.Vueltas","","Hora","N.Vueltas","","Hora","N.Vueltas","","Hora","N.Vueltas","","Hora","N.Vueltas",""),array($editar,$imprimir1),"(fecha>='".$fecha_ini."' and fecha<='".$fecha_fin."' and valvula'".$valvula."')","fecha desc limit 20");
		
		$marco->add_grid($tabla);
	$marco->cerrar_marco();
$cuerpo->cerrar_body();

pg_close($connection);
?>
