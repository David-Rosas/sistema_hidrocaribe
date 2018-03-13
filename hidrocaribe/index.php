<?php
require_once ("main/class/Cl_Sesion.php");
require_once ("config/Config_app.php");
require_once ("main/class/Cl_Document.php");
require_once ("main/class/Cl_Objetos.php");
$Ses = new Cl_Sesion();
$Doc = new Document();
$Obj = new Object_Part();
if ($Ses->Verificar_Session()) {
    $Doc->Document_Url("main", "");
}
else {
    $Doc->Document_Title_A("Login ".CUSTOMER);
    $Doc->Document_CSS(URL_CSS . "login.css");
    $Doc->Document_CSS(URL_CSS . "font-awesome.css");
    $Doc->Document_CSS(URL_CSS . "xeditable.css");
    $Doc->Document_CSS(URL_CSS . "animate.css");
    $Doc->Document_BodyInit("ng-controller='InitLogin'","lBody");
    echo ("<div class='title animated fadeInDown'>Sistema de Control de Incidencias y Reportes en la Distribución del Servicio de Agua Potable y Servida de la Unidad de Gestión Anzoátegui Norte de la C.A Hidrológica del Caribe.</div>");
    echo("<div class='ContL' ng-init='LoadInit()'>");
        echo("<div ng-include='LayLogin'></div>");
        echo("<div ng-show='Msg' ng-class='clMsg'>{{Msg}}</div>");
    echo("</div>");
    echo("<footer></footer>");
    $Doc->Document_JS(URL_FRM . "jquerymin.js");
    $Doc->Document_JS(URL_FRM . "jquery-ui.js");
    $Doc->Document_JS(URL_FRM . "angular.min.js");
    $Doc->Document_JS(URL_FRM . "angular-route.js");
    $Doc->Document_JS(URL_FRM . "angular-animate.js");
    $Doc->Document_JS(URL_FRM . "xeditable.js");
    $Doc->Document_JS(URL_JS . "AppLogin.js");
}