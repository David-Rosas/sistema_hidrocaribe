<?php

class Conent{
    public $Qry;
    private $MyConect;
    private $Result;
    public $Er=array();
    public function __construct() {
        
    }
    public function __destruct() {
        unset($this->Qry);
        unset($this->MyConect);
        unset($this->Result);
    } 
    
    public function ConectDB_A(){
        mysqli_report(MYSQLI_REPORT_STRICT);
        try {
            $this->MyConect = new mysqli(HOST, USER, PASS, BDDS, PORT);
            mysqli_set_charset($this->MyConect, BDENC);
            $this->Result=mysqli_query($this->MyConect,$this->Qry);
            return $this->Result;
        } catch (Exception $e ) {
            $code = $e->getCode();
            if($code>="1000" || $code>="2000" ){
                $this->Er["error"]=true;
                $this->Er["message"]="[ MYSQL ERROR $code ] Se ha producido un error al intentar conectarse al servidor, contacte con el administrador del sistema.";
            }
             return $this->Er;
        }
    }
    public function DB_Close(){
        //$this->MyConect->close();
        unset($this->Qry);
        unset($this->MyConect);
        unset($this->Result);
    }
    public function N_Row(){
        return $this->Result->num_rows;
    }
    public function Array_Data_a(){
        if($this->MyConect->error){
            $this->Er["error"]=true;
            $this->Er["message"]="[ MYSQL ERROR ".$this->MyConect->errno." ] Se ha producido un error al intentar conectarse al servidor, contacte con el administrador del sistema.";
            return $this->Er;
        }else{
            return $this->Result->fetch_array(MYSQLI_ASSOC);
        }
    }
    public function Array_Data_b(){
        if($this->MyConect->error){
            $this->Er["error"]=true;
            $this->Er["message"]="[ MYSQL ERROR ".$this->MyConect->errno." ] Se ha producido un error al intentar conectarse al servidor, contacte con el administrador del sistema.";
            return $this->Er;
        }else{  
            return $this->Result->fetch_array($this->N_Row());
        }
    }
}

