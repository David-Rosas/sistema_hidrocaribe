<?php

$params = json_decode(file_get_contents('php://input'),true);

switch ($params["log"]){
    case "login":
        require_once 'login.php';
    break;
}