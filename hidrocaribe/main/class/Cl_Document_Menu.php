<?php

class Cl_Document_Menu {
    
    private $option = array();
    
    public function __construct($menu) {
        $this->option = $menu;
        unset($menu);
        $this->option["MPRIN"] = json_decode($this->option["MPRIN"], true);
    }
    
    public function __destruct() {
        unset($this->option);
    } 
    
    public function CreateMenu(){
        $mn ="<div class='nav'>"
                . "<label for='smenu'><div class='btn-round animated bounceInDown'>"
                    . "<img src='".$this->option["FOTO"]."'>"
                    . "<span id='name'>".$this->option["NOMBRE"]." ".$this->option["APELLIDO"]."</span>"
                . "</div></label><input type='checkbox' id='smenu'>";
        $mn .= "<ul class='float-nav'>";
            for($i=0; $i< count($this->option["MPRIN"]); $i++){
                $action = 'action("'.$this->option["MPRIN"][$i]["url"].'")';
                $mn .= "<li ng-click='".$action."'><i class='".$this->option["MPRIN"][$i]["ico"]."'></i>".$this->option["MPRIN"][$i]["txt"]."</li>";
            }
        $mn .= "</ul></div>";
        echo $mn;
    }
    
    

    
}