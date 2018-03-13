<?php 
include 'Config_app.php';
$params = json_decode(file_get_contents('php://input'),true);
if(isset($params["_e"])){
    if($params["_e"]=="estatus"){
        $ar["e"] = estatus;
        echo json_encode($ar);
    }
}