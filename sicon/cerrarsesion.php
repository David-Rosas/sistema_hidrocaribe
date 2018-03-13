<?
	session_start();
	session_register();
    	session_destroy();
   
	header ("Location: index.php");
?> 