<?php
include("clases/gui/gui.class.php");
include("configuracion.php");
include("funciones/funciones.php");
$dir_ccs = "clases/css/";
$dir_jpg = "imagenes/jpg/";
$dir_javascript = "javascript/";
$dir_png = "imagenes/png/";
$dir_gif = "imagenes/gif/";
$datos = $_GET['datos'];

$control = new control;
$marco = new marco;
$cuerpo = new gui;

$connection = pg_connect("host=$sql_host port=$puerto dbname=$sql_db user=$sql_usuario password=$sql_pass") or die("No se realiz&oacute la conexi&oacute;n Detalles: ".pg_last_error());
$cuerpo->set_titulo("SICOCON - BUSQUEDA DE ORDENES DE TRABAJO FINALIZADAS CON LISTADO DE NOTIFICACIONES");
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
	$cuerpo->add_script($dir_javascript."orden_notificacion_buscar_f.js");
$cuerpo->cerrar_head();

$cuerpo->abrir_body('align="center"',' action="actividad_buscar.php" method="get" name="form"',"90%");
	$cuerpo->esp_parrafo();
	$marco->set_class_titulo('tituloDOSE_4');
	$marco->set_colspan(3);
	$marco->set_propiedades('class="formato-blanco" align="center" border="0" cellpadding="0" cellspacing="0" width="100%"');
	$marco->set_titulo("");
	$marco_busqueda = clone $marco;
	$marco_busqueda->set_titulo("Filtrar Información");
	$marco_busqueda->abrir_marco();
		$control->set_altura(30);
		$control->set_largo1("25%");
		$control->set_largo2("75%");
		$control->set_class("formato-blanco");
		$control->set_alineacion_label("right");
		$control->set_size(60);
		$control->set_vacio(1);
		//$marco_busqueda->add_control($control);

		$control->set_tipo("input");
		$control->set_type("text");
		$control->set_vacio(0);
		
		$control->set_propiedades('style="text-align: left;"');
		$control->set_label("DATOS A BUSCAR");
		$control->set_name("datos");
		$control->set_value($datos);
		
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
	
		
		$imprimir = new boton($dir_png."imprimir.png","imprimir",$title="Imprimir Orden de Trabajo");
						
		$tabla = new grid($connection,"id,fecha,contrato,operadora,actividad,descripcion,zonas,rutas,listado","ordenes_f",array("id","fecha","contrato","operadora","actividad","descripcion","zonas","rutas","listado"),array($imprimir),"(id ilike '%$datos%' or fecha ilike '%$datos%' or contrato ilike '%$datos%' or operadora ilike '%$datos%' or actividad ilike '%$datos%' or descripcion ilike '%$datos%' or zonas ilike '%$datos%' or rutas ilike '%$datos%' or listado ilike '%$datos%') and tipo=1","fecha desc,hora desc limit 20");
		
		$marco->add_grid($tabla);
	$marco->cerrar_marco();
$cuerpo->cerrar_body();

pg_close($connection);
?>