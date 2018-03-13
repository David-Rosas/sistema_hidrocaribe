<?php

//estas son las constantes de informacion del cliente
define("APPNAME", "app");
define("CUSTOMER", "Hidrocaribe C.A");
define("IDFISCAL", "G-20009373-0");
define("NAME_TITLE", "Hidrocaribe C.A");
define("ds",DIRECTORY_SEPARATOR);
//estas son las constantes de conexion a la base de datos
define("HOST", "localhost");
define("USER", "root");
define("PASS", "");
define("BDDS", "hidrocaribe");
define("PORT", "3306");
define("BDENC", "UTF8");
//estas son las constantes de ambiente del la aplicacion
define("ENC", "UTF-8");
define("LAN", "es-ES");
define("HZONE", "America/Caracas");

$Dir = str_replace("main/", "", 'http://'.$_SERVER["HTTP_HOST"].$_SERVER["REQUEST_URI"]);
//$Dir = str_replace("MAIN/index.php", "", 'http://'.$_SERVER["SERVER_NAME"].$_SERVER["SCRIPT_NAME"]);
//print_r($_SERVER);
define("URL_G", $Dir); //para obtener la url de trabajo Global
define("URL_CSS", $Dir . "css/"); //para obtener la url de CSS
define("URL_JS", $Dir . "js/"); //para obtener la url de JS
define("URL_FRM", $Dir . "js/frm/"); //para obtener la url de Framework
define("URL_IMG", $Dir . "img/"); //para obtener la url de IMG

date_default_timezone_set(HZONE);
define("FECHA", date("Y-m-d")); // obtengo la fecha de hoy

// $root = "http://".$_SERVER['HTTP_HOST'];
//
// $root .= dirname($_SERVER['SCRIPT_NAME']);
//
// define("root",$root);

define("estatus", 1);
// estatus 0 - update
// estatus 1 - good