<?php
    require_once ("class/Cl_Sesion.php");
    require_once ("../config/Config_app.php");
    require_once ("class/Cl_Document.php");
    require_once ("class/Cl_Objetos.php");
    require_once ("class/Cl_Document_Menu.php");
    $Ses= new Cl_Sesion();    
    $Doc = new Document();
    $Obj = new Object_Part();
/******************************************************************************/
/******************************************************************************/
    if(isset($_GET["op"])=='Close'){
        /* para cuando se cierre la sesion  */
        require_once ("class/Cl_Sesion.php");
        require_once ("class/Cl_Document.php");
        $Doc = new Document();
        $Ses= new Cl_Sesion(); 
            $Ses->Cerrar_Session();
            $Doc->Document_Url("../","");
        /************************************/ 
    }
/******************************************************************************/
            if($Ses->Verificar_Session()){
                $Doc->Titulo=NAME_TITLE;
                $Doc->Document_Title_B();
                Main_Head($Doc);// esta funcion es para agregar los CSS al inicio de la estructura
                $Doc->Document_BodyInit("ng-controller='cmain'","");
                $Menu = new Cl_Document_Menu($_SESSION);
                $Menu->CreateMenu();
                echo ("<section ng-view class='container'></section>");
                echo "<div ng-include='template' ng-class='mtem' class='FadeIn'></div>";
                echo("<div ng-show='Msg' ng-class='clMsg'>{{Msg}}</div>");
                Main_Footer($Doc);// esta funcion es para agregar los JS al final de toda la estructura
                echo '<script>
                        $(".nav .float-nav li").click(function(){
                            $(".nav input").prop("checked", false);
                        });
                    </script>';
            }else{
               $Doc->Document_Url("../","");
            }
function Main_Head($Doc){
    $Doc->Document_CSS(URL_CSS."style.css");
    $Doc->Document_CSS(URL_CSS."scroll.css");
    $Doc->Document_CSS(URL_CSS."font-awesome.css");
    $Doc->Document_CSS(URL_CSS."xeditable.css");
    $Doc->Document_CSS(URL_CSS."tooltipster.css");
    $Doc->Document_CSS(URL_CSS."animate.css");
    $Doc->Document_CSS(URL_CSS."loading-bar.css");
    $Doc->Document_CSS(URL_CSS."chartist.css");
}
function Main_Footer($Doc){
    $Doc->Document_JS(URL_FRM."jquerymin.js");
    $Doc->Document_JS(URL_FRM."jquery-ui.js");
    $Doc->Document_JS(URL_FRM."tinymce/tinymce.min.js");
    $Doc->Document_JS(URL_FRM."angular.min.js");
    $Doc->Document_JS(URL_FRM."angular-route.js");
    $Doc->Document_JS(URL_FRM."angular-animate.js");
    $Doc->Document_JS(URL_FRM."xeditable.js");
    $Doc->Document_JS(URL_FRM."jquery.tooltipster.js");
    $Doc->Document_JS(URL_FRM."chartist.js");
    $Doc->Document_JS(URL_FRM."chartist-plugin-legend.js");
    $Doc->Document_JS(URL_FRM."loading-bar.js");
    $Doc->Document_JS(URL_JS."AppController.js");
}
/******************************************************************************/
/******************************************************************************/
//de esta forma tomo las variables no definidas por el usuario
//function prueba(...$val){
//  echo $val[0]+$val[1];
//}
