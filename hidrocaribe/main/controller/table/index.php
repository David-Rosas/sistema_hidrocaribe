<?php

$params = json_decode(file_get_contents('php://input'),true);

switch ($params["porcess"]){
    case "lista":
        require_once 'lista.php';
    break;
    case "save":
        require_once 'save.php';
    break;
    case "delete":
        require_once 'delete.php';
    break;
}
