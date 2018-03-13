<?php

require_once '../../../config/Config_app.php';
require_once '../../class/Cl_Mysql.php';
    $user = $params;

    $db = new Conent();
   echo  $db->Qry="DELETE FROM ".$params["table"]." WHERE ".$params["field"]." = '".$params["id"]."';";
    $db->ConectDB_A();
    
    $db->DB_Close();
    unset($row);
    unset($db);