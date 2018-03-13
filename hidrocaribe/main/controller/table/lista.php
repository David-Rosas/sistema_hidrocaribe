<?php


require_once '../../../config/Config_app.php';
require_once '../../class/Cl_Mysql.php';

    $db = new Conent();
    $arr = array();
    $db->Qry="SELECT * FROM ".$params["table"].";";
    $db->ConectDB_A();
    $i=0;
    while ($row=$db->Array_Data_a()){
        $arr[$i] = $row;
        $i++;
    }
    
    if(count($arr)==0){
        $arr["error"]=true;
        $arr["message"]="no se encuentran registros en el sistema";
    }
    $db->DB_Close();
    unset($row);
    unset($db);
       
echo json_encode($arr, JSON_UNESCAPED_UNICODE);
