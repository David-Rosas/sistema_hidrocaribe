<?php

class Document{
    Public $Titulo="";
    Public $CSS="";
    Public $JS="";
    Public $charset="";
    
    Function __construct(){
        $this->Document_Header_Init();
    }
    
    Function __destruct(){
       $this->Document_Close();
    }
    
    Private Function Document_Header_Init(){
        echo("<!DOCTYPE HTML>");
        echo("<HTML LANG='".LAN."' ng-app='AppHidrocaribe'><HEAD>");
    }

    Private Function Document_Header_Content(){
        echo("<META CHARSET='".ENC."'/><META NAME='viewport' CONTENT='width=device-width, MINIMUM-SCALE=1.0, MAXIMUM-SCALE=1.0' />");
        echo("<META NAME='description' CONTENT='Aplicaci&oacute;n para Sha de Venezuela'/>");
        echo("<LINK REL='shortcut icon' HREF='".URL_IMG."favicon.ico' TYPE='image/x-icon' />");
        header("Content-Type: text/html; charset='".ENC."'"); //para establecer la codificacion php por defecto
        date_default_timezone_set(HZONE); // establese la zona horaria por defecto
    }
    
    Public Function Document_Title_A($title){
        echo("<TITLE ng-bind=\"'".NAME_TITLE." '+title\">$title</TITLE>");
        $this->Document_Header_Content();
    }
    
    Public Function Document_Title_B(){
        echo("<TITLE ng-bind=\"'".NAME_TITLE." '+title\">$this->Titulo</TITLE>");
        $this->Document_Header_Content();
    }
    
    Public Function Document_CSS($css){
    echo("<LINK REL='Stylesheet' TYPE='text/css' HREF='".$css."' MEDIA='screen'>");
    }

    Public Function Document_JS($js){
    echo("<SCRIPT TYPE='text/javascript' SRC='".$js."'></SCRIPT>");
    }

    Public Function Document_BodyInit($js, $cl){
      echo("</HEAD><BODY ".$js." class='".$cl."' >");
    }
    
    
    Private Function Document_Close(){
        echo("</BODY></HTML>");
    }
    
    Public Function Document_Url($file,$urlData){
//        $url='?enc='.ENC.'&lan='.LAN; //esta variable maneja los parametros principales de la app
        header("location:".$file.$urlData);
    }
    
    public Function Document_Url_validate($get){
        $pase=false;
        if(isset($get["enc"]) and isset($get["lan"])){
            if(!empty($get["enc"]) and !empty($get["lan"]) ){
                if($get["enc"] == ENC and $get["lan"] == LAN ){
                    $pase=true;
                }else{
                    $pase=false;
                }
            }else{
                $pase=false;
            }
        }else{
            $pase=false;
        }
        return $pase;
    } 
    
}