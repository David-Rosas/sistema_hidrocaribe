<?php
  /* 
   * esta clase se utiliza para el manejo de sesiones y cokies 
   * de la aplicacion
   */
   
class Cl_Sesion {
	
 //   public  $Vida="10H";        // el tiempo de vida que tendra la cookie
    public  $InfSesion=[
        "Name"=>""                // nombre de la cookie
    ];

    public function __construct() {
        $this->InfSesion["Name"]="_CustomerApp";
        $this->Init_Session(); 
    }

    private Function Init_Session(){
        session_name($this->InfSesion["Name"]);
        session_start();
        $this->Verificar_Session();
    }

    public Function Cerrar_Session(){
        session_destroy();
        session_unset();
    }

    public Function Verificar_Session(){
        /*
         * _DISABLED = 0
         * _NONE = 1
         * _ACTIVE = 2
         */
        if( session_status()== PHP_SESSION_ACTIVE ){
            if(isset($_SESSION["NICK"])){
                $session=true;
            }else{
                $session=false;
            }
        }else if( session_status()== PHP_SESSION_DISABLED ){
            $this->Cerrar_Sesion();
            $session=false;
        }else if( session_status()== PHP_SESSION_NONE ){
            $this->Cerrar_Sesion();
            $session=false;
        }
        return $session;
    }
    
    public function Update_Session($VarName,$VarData){
        $_SESSION[$VarName]=$VarData;
    }
    
    public function Session_Datos(){
        return $_SESSION;
    }
//    public Function Calcular_Vida( $t){ //para calcular el tiempo que durara la cookie activa
//        $v=str_split(strtoupper($t));
//        $j=count($v);
//        $tiempo=0; //variable para el calculo de tiempo
//        for ($i=0; $i<$j ;$i++){
//            if($v[$i]=='S'){
//                $tiempo=1;
//            }else
//            if($v[$i]=='M'){
//                $tiempo=60;
//            }else
//            if($v[$i]=='H'){
//                $tiempo=3600;
//            }else
//            if($v[$i]=='D'){
//                $tiempo=86400;
//            }else
//            if($v[$i]=='Ms'){
//                $tiempo=2592000;
//            }else
//            if($v[$i]=='Y'){
//                $tiempo=946080000;
//                $t=1;
//            }
//        }
//        $vida = $t * $tiempo;
//        return $vida;
//    }
}
