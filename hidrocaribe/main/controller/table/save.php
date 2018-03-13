<?php


require_once '../../../config/Config_app.php';
require_once '../../class/Cl_Mysql.php';


    $db = new Conent();
    
    if($params["id"] == "0"){
        echo $db->Qry=sql_insert($params);
    }else{
        echo  $db->Qry=sql_update($params);
    }
    
    $db->ConectDB_A();
   
    $db->DB_Close();
    unset($row);
    unset($db);

 
 function sql_insert($params){
    $cols = array_keys($params["data"]);
    $con =0;
    $id=0;
    $sql = "insert into ".$params["table"]." (";
    for($i=0; $i<count($cols); $i++ ){
        if ($cols[$i][3]!== 'id_') {
            $con++;
        }else{
            $id = $i;
        }
    }
    
    for($i=0; $i<count($cols); $i++ ){
        if ($id != $i ){
            $sql.= $cols[$i].",";
        }
    }
    
    
    $sql = substr($sql, 0, -1).") values(";

    for ($i=0; $i < $con; $i++) {
        if ($id != $i ){
            $sql.="'".$params["data"]["$cols[$i]"]."',";
        }
    }
    $sql = substr($sql, 0, -1).");";
    return $sql;
 }
 
 function sql_update($params){
    $cols = array_keys($params["data"]);
    $sql = "update ".$params["table"]." set ";
    for($i=0; $i<count($cols); $i++ ){
        $sql.= $cols[$i]." = '".$params["data"]["$cols[$i]"]."',";
    }
    $sql = substr($sql, 0, -1)." where ".$cols[0]."='".$params["data"]["$cols[0]"]."';";
    return $sql;
 }