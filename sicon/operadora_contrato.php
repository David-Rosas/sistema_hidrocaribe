<?php
include("clases/gui/gui.class.php");
include("configuracion.php");
//include("db/main.php");
$dir_ccs = "clases/css/";
$dir_jpg = "imagenes/jpg/";
$dir_javascript = "javascript/";
$control=new control;
$marco = new marco;
$cuerpo = new gui;
$connection = pg_connect("host=$sql_host port=$puerto dbname=$sql_db user=$sql_usuario password=$sql_pass") or die("No se realiz&oacute la conexi&oacute;n Detalles: ".pg_last_error());


$cuerpo->set_titulo("SICOCON - TIPO DE CONTRATO / OPERADORAS COMERCIALES");
$cuerpo->set_languaje();
$cuerpo->set_type("text/javascript");
$cuerpo->abrir_head();
$cuerpo->add_link($dir_ccs."ventanas.css","stylesheet","text/css");
$cuerpo->add_link($dir_ccs."tablas.css","stylesheet","text/css");
$cuerpo->add_link($dir_ccs."general.css","stylesheet","text/css");
$cuerpo->add_link($dir_ccs."cabecera.css","stylesheet","text/css");
$cuerpo->add_link($dir_ccs."stilo.css","stylesheet","text/css");
$cuerpo->add_link($dir_ccs."mac_os_x.css","stylesheet","text/css");
$cuerpo->add_script($dir_javascript."scriptaculous/prototype.js");
$cuerpo->add_script($dir_javascript."scriptaculous/effects.js");
$cuerpo->add_script($dir_javascript."scriptaculous/window.js");
$cuerpo->add_script($dir_javascript."scriptaculous/window_effects.js");
$cuerpo->add_script($dir_javascript."scriptaculous/debug.js");
$cuerpo->add_script($dir_javascript."operadora_contrato.js");

$cuerpo->cerrar_head();

$cuerpo->abrir_body('align="center" onload="traer_operadora();"',' action="index1.php" method="post" name="form"',"90%");
$cuerpo->esp_parrafo();

$marco->set_class_titulo('tituloDOSE_5');
$marco->set_colspan(2);
$marco->set_propiedades('class="formato-blanco" align="center" border="0" cellpadding="0" cellspacing="0" width="95%"');
$marco->set_titulo("Asigne a una Operadora Comercial los Tipos de Contratos que puede Ejecutar");
$marco->abrir_marco();
$control->set_altura(30);
$control->set_largo1("25%");
$control->set_largo2("75%");
$control->set_class("formato-blanco");
$control->set_alineacion_label("right");

$control->set_tipo("input");
$control->set_vacio(1);
$control->set_propiedades('style="text-align: left;" onchange="traer_operadora();"');
$control->set_size(30);
$control->set_value("");
$control->set_type("text");
$marco->add_control($control);
$control->set_vacio(0);

$control->set_label("Tipo de Contrato");
$control->set_name("id_contrato");
$marco->add_control($control, $connection,"SELECT id,nombre FROM contrato where eliminado=0 order by nombre",1);

$control->set_propiedades('style="text-align: left;" id="op"');
$control->set_label("Operadora Comercial");
$control->set_name("id_operadora");
$marco->add_control($control, $connection,"SELECT id,nombre FROM operadora where eliminado=0 order by nombre",1);

$control->set_propiedades('onclick="guardar();"');
$control->set_label("");
$control->set_name("enviar");
$control->set_value("Asignar Tipo de Contrato a Operadora");
$control->set_type("button");
$marco->add_control($control);

$control->set_vacio(1);
$marco->add_control($control);

$marco->cerrar_marco();
$cuerpo->cerrar_body();
pg_close($connection);
?>