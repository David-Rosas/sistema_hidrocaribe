<?php

require_once '../../../config/Config_app.php';
require_once '../../class/Cl_Mysql.php';
require_once '../../class/Cl_Sesion.php';
    $db = new Conent();
    $Sess = new Cl_Sesion();
    $login = array();
    $db->Qry="select id_usuario, tx_nombre, tx_apellido, tx_email, tx_password, en_nivel, tx_menu_pri,tx_foto from t_usuario where id_usuario='".$params["user"]."' or tx_email='".$params["user"]."' and en_estatus='A';";
    $db->ConectDB_A();
    $row  = $db->Array_Data_a();
    if(isset($db->Er)){
        if(count($db->Er)==0){
            $cant = count($row);
            if($cant>"0"){
                if(md5($params["pass"]) == $row["tx_password"]){
                    $Sess->Update_Session("NICK",$row["id_usuario"] );
                    $Sess->Update_Session("NOMBRE",$row["tx_nombre"] );
                    $Sess->Update_Session("APELLIDO",$row["tx_apellido"] );
                    $Sess->Update_Session("EMAIL",$row["tx_email"] );
                    $Sess->Update_Session("NIVEL",$row["en_nivel"] );
                    $Sess->Update_Session("MPRIN",$row["tx_menu_pri"] );
                    $Sess->Update_Session("FOTO",$row["tx_foto"] );                    
                    $login["error"]=false;  
                }else{
                    $login["error"]=true;
                    $login ["message"]="[ERROR : 1001 ] No se pudo verificar la información, verifique el correo o contraseña he intente de nuevo";
                }
            }else{
                $login["error"]=true;
                $login ["message"]="[ERROR : 1002 ] Se ha producido un error al autenticar los datos, verifique que ha ingresado el usuario y la contraseña correctamente";
            }
            $db->DB_Close(); 
        }
    }else{
        $login["error"]=true;
        $login ["message"]=$db->Er["message"];
        $db->DB_Close();
    }
        
echo json_encode($login, JSON_UNESCAPED_UNICODE);

