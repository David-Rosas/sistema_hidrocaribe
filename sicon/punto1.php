<?php
include("clases/gui/gui.class.php");
include("configuracion.php");
include("funciones/funciones.php");
$connection = pg_connect("host=$sql_host port=$puerto dbname=$sql_db user=$sql_usuario password=$sql_pass") or die("No se realiz&oacute la conexi&oacute;n Detalles: ".pg_last_error());
$dir_ccs = "clases/css/";
$dir_jpg = "imagenes/jpg/";
$dir_javascript = "javascript/";

if(isset($_GET['id']))
{
	$id = $_GET['id'];
	$max_id = $id - 1;
	$sql = "SELECT fecha from puntom WHERE id='$id'";
	$fecha = resultadoIndividual($connection,$sql);
	$sql = "SELECT punto from puntom WHERE id='$id'";
	$punto = resultadoIndividual($connection,$sql);
	$sql = "SELECT hora from puntom WHERE id='$id'";
	$hora = resultadoIndividual($connection,$sql);
	$sql = "SELECT presion from puntom WHERE id='$id'";
	$presion = resultadoIndividual($connection,$sql);
	$sql = "SELECT hora1 from puntom WHERE id='$id'";
	$hora1 = resultadoIndividual($connection,$sql);
	$sql = "SELECT presion1 from puntom WHERE id='$id'";
	$presion1 = resultadoIndividual($connection,$sql);
	$sql = "SELECT hora2 from puntom WHERE id='$id'";
	$hora2 = resultadoIndividual($connection,$sql);
	$sql = "SELECT presion2 from puntom WHERE id='$id'";
	$presion2 = resultadoIndividual($connection,$sql);
}
else
{
	$sql = "SELECT max(id) from puntom";
	$max_id = resultadoIndividual($connection,$sql);	
}

$control = new control;
$marco = new marco;
$cuerpo = new gui;

$cuerpo->set_titulo("SICON - PUNTOS DE MEDICI�N");
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
	$cuerpo->add_script($dir_javascript."punto.js");
	
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

$cuerpo->abrir_body('align="center"',' action="index1.php" method="post" name="form"',"60%");
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

		$control->set_label("ID");
		$control->set_tipo("input");
		$control->set_name("id");
		$control->set_value($max_id+1);
		$control->set_type("text");
		$control->set_vacio(0);
		$marco->add_control($control);
		
		$control->set_label("FECHA");
		$control->set_name("fecha");
		$control->set_value($fecha);
		$control->set_propiedades('style="text-align: left;"' );
		$marco->add_control($control);

		$control->set_label("PUNTO");
		$control->set_name("punto");
		$control->set_value($punto);
		$control->set_propiedades('style="text-align: left;"' );
		$marco->add_control($control);
		
		$control->set_propiedades('style="text-align: left;"');
		$control->set_label("HORA");
		$control->set_name("hora");
		$control->set_value($hora);
		$marco->add_control($control);
		
		$control->set_propiedades('style="text-align: left;"');
		$control->set_label("PRESION");
		$control->set_name("presion");
		$control->set_value($presion);
		$marco->add_control($control);
		
		$control->set_propiedades('style="text-align: left;"');
		$control->set_label("HORA");
		$control->set_name("hora1");
		$control->set_value($hora1);
		$marco->add_control($control);
		
		$control->set_propiedades('style="text-align: left;"');
		$control->set_label("PRESION");
		$control->set_name("presion1");
		$control->set_value($presion1);
		$marco->add_control($control);
		
		$control->set_propiedades('style="text-align: left;"');
		$control->set_label("HORA");
		$control->set_name("hora2");
		$control->set_value($hora2);
		$marco->add_control($control);
		
		$control->set_propiedades('style="text-align: left;"');
		$control->set_label("PRESION");
		$control->set_name("presion2");
		$control->set_value($presion2);
		$marco->add_control($control);
		
		$control->set_vacio(1);
		$marco->add_control($control);
		 
		$control->set_vacio(0);
		$control->set_propiedades('onclick="guardar();"');
		$control->set_label("");
		$control->set_type("button");
		
		$c1 = clone $control;		
		$c1->set_name("enviar");
		$c1->set_value("Guardar");
		
//		$control->set_propiedades('onclick="recargar();"');
//		$c2 = clone $control;
//		$c2->set_name("borrar");
//		$c2->set_value("Ayuda");
		
		$control->set_propiedades('onclick="find();"');
		$c3 = clone $control;
		$c3->set_name("buscar");
		$c3->set_value("Buscar");
		
//		$control->set_propiedades('onclick="nuevo();"');
//		$c = clone $control;
//		$c->set_name("nuevo1");
//		$c->set_value("Nuevo");
		
		$marco->generar_botones(array($c1,$c3)); //genera varios controles en posicion horizontal a diferencia de addcontrol
		
		$control->set_vacio(1);
		$marco->add_control($control);

	$marco->cerrar_marco();

$cuerpo->cerrar_body();
pg_close($connection);
?>