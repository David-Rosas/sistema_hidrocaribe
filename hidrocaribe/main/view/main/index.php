<?php
require_once '../../class/Cl_Sesion.php';
$Ses = new Cl_Sesion();
switch ($_SESSION["NIVEL"]){
    case "A":
        include "A.min.html";
    break;
    case "B":
        include "B.min.html";
    break;
    case "C":
        include "C.min.html";
    break;
}