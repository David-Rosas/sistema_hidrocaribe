<?php
include("clases/gui/gui.class.php");
include("configuracion.php");
include("funciones/funciones.php");
$dir_ccs = "clases/css/";
$dir_jpg = "imagenes/jpg/";
$dir_gif = "imagenes/gif/";
$dir_javascript = "javascript/";
$control=new control;
$marco = new marco;
$cuerpo = new gui;
$connection = pg_connect("host=$sql_host port=$puerto dbname=$sql_db user=$sql_usuario password=$sql_pass") or die("No se realiz&oacute la conexi&oacute;n Detalles: ".pg_last_error());

if(isset($_GET['id']))
{
	$id = $_GET['id'];
	$id_max = $id - 1;
	$sql = "SELECT id_contrato,id_operadora,id_actividad,descripcion,zonas,rutas,listado from ordenes WHERE id='$id'";
	$datos = devuelveValor($connection,$sql);
}
else
{
	$sql = "SELECT max(id) FROM orden_trab";
	$id_max = resultadoIndividual($connection,$sql);
}

$now = getdate(time());
$mes = array("","enero","febrero","marzo","abril","mayo","junio","julio","agosto","septiembre","octubre","noviembre","diciembre");
$fecha = $now['mday']." de ".$mes[$now['mon']]." de ".$now['year'];

$cuerpo->set_titulo("SICOCON - ORDEN DE TRABAJO");
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
$cuerpo->add_script($dir_javascript."orden_notificacion.js");

$cuerpo->cerrar_head();

$cuerpo->abrir_body('align="center" onload="operadora_contrato('.$datos[1].');"',' action="index1.php" method="post" name="form"',"90%");
$cuerpo->esp_parrafo();

$marco->set_class_titulo('tituloDOSE_5');
$marco->set_colspan(2);
$marco->set_propiedades('class="formato-blanco" align="center" border="0" cellpadding="0" cellspacing="0" width="95%"');

$marco_fecha = clone $marco;
$marco_boton = clone $marco;
$marco_fecha->set_titulo($fecha);
$marco_fecha->abrir_marco();
$marco_fecha->cerrar_marco();

$suscriptor = clone $marco;
$suscriptor->set_titulo("Datos del Suscriptor");
$suscriptor->abrir_marco();
	$control->set_altura(30);
	$control->set_largo1("25%");
	$control->set_largo2("75%");
	$control->set_class("formato-blanco");
	$control->set_alineacion_label("right");
	
	$control->set_vacio(1);
	$control->set_propiedades('style="text-align: left;""');
//$suscriptor->add_control($control);
	
	$control->set_vacio(0);
	$control->set_tipo("input");
	$control->set_size(30);
	$control->set_type("text");
	$control->set_label("Listado de Notificaciones");
	$control->set_name("listado");
	$control->set_value($datos[6]);
$suscriptor->add_control($control);
	$control->set_label("Zonas");
	$control->set_name("zonas");
	$control->set_value($datos[4]);
$suscriptor->add_control($control);

$control->set_label("Rutas");
	$control->set_name("rutas");
	$control->set_value($datos[5]);
$suscriptor->add_control($control);

	
$suscriptor->cerrar_marco();

$marco->set_titulo("Datos de la Actividad");
$marco->abrir_marco();

$control->set_vacio(1);
$control->set_propiedades('style="text-align: left;" readonly="readonly"');
$marco->add_control($control);

$control->set_vacio(0);

$control->set_tipo("input");
$control->set_label("Número");
$control->set_name("id");
$control->set_value($id_max+1);
$control->set_size(10);
$control->set_type("text");
$marco->add_control($control);

$control->set_label("Tipo de Contrato");
$control->set_name("id_contrato");
$control->set_value($datos[0]);
$control->set_propiedades('style="text-align: left;" onchange="operadora_contrato();"');
$marco->add_control($control, $connection,"SELECT id,nombre FROM contrato where eliminado=0 order by nombre",1);

$control->set_propiedades('style="text-align: left;" readonly="readonly" id="op"');
$control->set_label("Operadora Comercial");
$control->set_name("id_operadora");
$marco->add_control($control, $connection,"SELECT id,nombre FROM operadora where eliminado=20 order by nombre",1);

$escojer = new boton($dir_gif."buscar.gif","buscar",$title="Buscar en una nueva ventana los Tipos de Ordenes de Trabajo");
$control->set_boton($escojer);
$control->set_label("Actividad");
$control->set_value($datos[2]);
$control->set_name("id_actividad");
$marco->add_control($control);

$control->set_propiedades('style="text-align: left;"');

$control->set_boton(null);

$control->set_tipo("textarea");
$control->set_label("Descripción de la Actividad");
$control->set_name("descripcion");
$control->set_value($datos[3]);
$control->set_size(4);
$control->set_col(60);
$marco->add_control($control);


$control->set_vacio(1);
$marco->add_control($control);

$marco->cerrar_marco();

$marco_boton = clone $marco;
$marco_boton->set_titulo("");
$marco_boton->abrir_marco();
	$control->set_altura(0);
	$control->set_largo1("0%");
	$control->set_largo2("100%");
	$control->set_vacio(1);
	$control->set_propiedades('style="text-align: left;"');
	$marco_boton->add_control($control);
	$control->set_vacio(0);
	$control->set_tipo("input");
	$control->set_label("");

	$control->set_type("button");
	$control->set_propiedades('onclick="ayuda();"');
	$c2 = clone $control;
	$c2->set_name("ayuda1");
	$c2->set_value("Ayuda");
	
	$control->set_propiedades('onclick="guardar();"');
	$c3 = clone $control;
	$c3->set_name("guardar1");
	$c3->set_value("Guardar y Generar");
	
	$control->set_propiedades('onclick="nuevo();"');
	$c1 = clone $control;
	$c1->set_name("nuevo1");
	$c1->set_value("Nuevo");
	
	$marco_boton->generar_botones(array($c1,$c3,$c2)); //genera varios controles en posicion horizontal a diferencia de addcontrol

$marco_boton->cerrar_marco();
$cuerpo->cerrar_body();

pg_close($connection);
?>