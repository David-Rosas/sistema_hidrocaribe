<?php
    dl('php5-sqlanywhere.so');

    $cnx = sqlanywhere_connect("UID=DBA;PWD=SQL");
    $res = sqlanywhere_query($cnx, "SELECT * FROM tabla");
    while( $datos = sqlanywhere_fetch_array($res) ){
        print_r($datos);
    }
    sqlanywhere_free_result($res);
    sqlanywhere_close($cnx);
?>
