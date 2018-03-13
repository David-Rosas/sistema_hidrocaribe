<?php
include("clases/gui/gui.class.php");
include("configuracion.php");
//include("db/main.php");
$dir_ccs = "clases/css/";
$dir_jpg = "imagenes/jpg/";
$dir_gif = "imagenes/gif/";
$dir_javascript = "javascript/";
$control=new control;
$marco = new marco;
$cuerpo = new gui;
$connection = pg_connect("host=$sql_host port=$puerto dbname=$sql_db user=$sql_usuario password=$sql_pass") or die("No se realiz&oacute la conexi&oacute;n Detalles: ".pg_last_error());


$cuerpo->set_titulo("SICOCON - OPERADORAS COMERCIALES / TIPO DE ORDEN DE TRABAJO");
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

$cuerpo->abrir_body('align="center"',' action="index1.php" method="post" name="form"',"90%");
$cuerpo->esp_parrafo();

$marco->set_class_titulo('tituloDOSE_5');
$marco->set_colspan(2);
$marco->set_propiedades('class="formato-blanco" align="center" border="0" cellpadding="0" cellspacing="0" width="95%"');
$marco->set_titulo("Asigne Operadoras Comerciales con el Tipo de Orden de Trabajo que pueden Realizar");
$marco->abrir_marco();
$control->set_altura(30);
$control->set_largo1("25%");
$control->set_largo2("75%");
$control->set_class("formato-blanco");
$control->set_alineacion_label("right");

$control->set_tipo("input");
$control->set_vacio(1);
$control->set_propiedades('style="text-align: left;" onchange="javascript:document.form.id_actividad.value=\'\';"');
$control->set_size(10);
$control->set_value("");
$control->set_type("text");
$marco->add_control($control);
$control->set_vacio(0);

$control->set_label("Operadora Comercial");
$control->set_name("id_operadora");
$marco->add_control($control, $connection,"SELECT id,nombre FROM operadora where eliminado=0 order by nombre",1);

$control->set_propiedades('style="text-align: left;"');
$escojer = new boton($dir_gif."buscar.gif","buscar",$title="Buscar en una nueva ventana los Tipos de Ordenes de Trabajo");
$control->set_boton($escojer);
$control->set_label("Tipo de Orden de Trabajo");
$control->set_name("id_actividad");
$marco->add_control($control);

$control->set_boton(null);
$control->set_propiedades('onclick="guardar();"');
$control->set_label("");
$control->set_name("enviar");
$control->set_value("Asignar Operadora a Tipo de Orden de Trabajo");
$control->set_type("button");
$marco->add_control($control);

echo "<tr><td></td><td><div id='et'></div></td></tr>";

$control->set_vacio(1);
$marco->add_control($control);

$marco->cerrar_marco();
$cuerpo->cerrar_body();
pg_close($connection);
?>