<?php

class Object_Part {

    Public Function Obj_Item_List($cl, $name) {
        if (empty($cl)) {
            echo("<div id='Obj_Item' ><p>" . $name . "</p><i class='fa-pencil'></i></div>");
        }
        else {
            echo("<div id='Obj_Item' Class='" . $cl . "'><p>" . $name . "</p><i class='fa-pencil'></i></div>");
        }
    }

    Public Function Obj_Boton($id, $cl, $val, $js) {
        echo ("<input type='button' name='" . $id . "' id='" . $id . "' class='BTN " . $cl . "' value='" . $val . "' " . $js . "/>");
    }

    Public Function Obj_Text($id, $cl, $plh, $aut, $tip, $js) {
        if (empty($cl)) {
            echo("<input type='" . $tip . "'  name='" . $id . "' id='" . $id . "' placeholder='" . $plh . "' " . $js . " required=''  />");
        }
        else {
            echo("<input type='" . $tip . "'  name='" . $id . "' id='" . $id . "' class='" . $cl . "' placeholder='" . $plh . "'  " . $js . " required=''  />");
        }
    }

    Public Function Obj_Search($id, $cl, $plh, $aut, $model, $init) {
        echo("<div class='inp_Search' $init >");
        $this->Obj_Text($id, "", $plh, $aut, "TEXT", "ng-model='" . $model . "'");
        echo("<i class='fa fa-search IBTN'></i>");
        echo("<div class='List_Suge' ng-if='$model'>");
        echo("<div ng-repeat='LT in LDB' ng-show='([LT.rzn] | filter:$model).length > 0 || ([LT.ID] | filter:$model).length > 0' ><p ng-click='GetCliente(LT.ID)'>{{LT.rzn}}</p></div>");
        echo("</div></div>");
    }

    Public Function Obj_TextArea($id, $cl, $plh, $js, $row, $col) {
        echo("<textarea  name='" . $id . "' id='" . $id . "' class='" . $cl . "' rows=" . $row . " cols=" . $col . " placeholder='" . $plh . "'  " . $js . " ></textarea>");
    }

    Public Function Obj_Combo($id, $cl, $plh, $js) {
        $cla = '';
        if (!$cl === "") {
            $cla = 'Class="' . $cl . '"';
        }
        echo("<div class='inp_select'><p>" . $plh . "</p><select  name='" . $id . "' id='" . $id . "' " . $cla . " " . $js . "></select></div>");
    }

    Public Function Obj_Combo_2($id, $cl, $plh, $js, $dat) {
        $cla = '';
        if (!$cl === "") {
            $cla = 'Class="' . $cl . '"';
        }
        $i = 0;
        echo("<div class='inp_select " . $cl . "'><p>" . $plh . "</p><select  name='" . $id . "' id='" . $id . "' " . $js . ">");
        while ($i < count($dat)) {
            echo("<option value='" . $dat[$i] . "'>" . $dat[$i] . "</option>");
            $i++;
        }
        echo("</select></div>");
    }

    public function Obj_Check($id, $cl, $tx, $js) {
        if ($cl === '') {
            echo('<label id="labeltx" for="' . $id . '"><input type="checkbox" name="' . $id . '" id="' . $id . '" value="mante" class="CHK" ' . $js . ' /> <a>' . $tx . '</a></label>');
        }
        else {
            echo('<label id="labeltx" for="' . $id . '"><input type="checkbox" name="' . $id . '" id="' . $id . '" class="CHK ' . $cl . '" value="mante" ' . $js . ' /><a>' . $tx . '</a></label>');
        }
    }

    public function Formulario($id, $cl, $mth, $js) {
        if ($cl === "") {
            echo("<form name='" . $id . "' id='" . $id . "'");
            echo("method='" . $mth . "' enctype='application/x-www-form-urlencoded'");
            echo("accept-charset='UTF-8' ".$js.">");
        }
        else {
            echo("<form name='" . $id . "' id='" . $id . "' class='" . $cl . "' ");
            echo("method='" . $mth . "' enctype='application/x-www-form-urlencoded'");
            echo("accept-charset='UTF-8'" . $js . ">");
        }
    }

    public function Formulario_Close() {
        echo("</form>");
    }

}
