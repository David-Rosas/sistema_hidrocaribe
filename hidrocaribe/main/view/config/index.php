<?php
require_once '../../class/Cl_Sesion.php';
$Ses = new Cl_Sesion();
switch ($_SESSION["NIVEL"]){
    case "A":
        include "A.min.html";
    break;
    default :
        include "A.min.html";
    break;
}
