<html>
<head>
<style type="text/css">
<!--
.Estilo1 {
	font-family: "Monotype Corsiva";
	font-weight: bold;
	font-size: 36px;
}
-->
</style>
<body >
<title>SICON</title>
<link rel="shortcut icon" href="favicon.ico">
<style type="text/css">
<!--
.Estilo2 {font-size: 12px}
.Estilo3 {font-size: 18px}
.Estilo4 {	font-size: 24px;
	font-family: Georgia, "Times New Roman", Times, serif;
}
.Estilo7 {font-weight: bold; font-family: "Times New Roman", Times, serif;}
.Estilo8 {
	font-family: Georgia, "Times New Roman", Times, serif;
	font-style: italic;
}
-->
</style>
</head>
 <br>
			
				
				  
				  <center><img src="imagenes/jpg/marque.JPG"></center>
				  
                   <center> <table width="600" border="0">
  <tr>
    <td><img width="60" height="60" src="imagenes/jpg/1t_Untitled_13.jpg"></td>
    <td><span class="Estilo1">Reporte Diario Operacional</span></td>
  </tr>
</table></center>

          <br>
		  <br>
		  					 
                <table align="center" valign="middle">
				
				<tr>
                <td colspan="2" align="center" 
                <?PHP if ($_GET["errorusuario"]=="si"){?>
                 bgcolor=red><span style="color:ffffff"><b>Datos incorrectos</b></span>
                <?PHP }else{?>
                    bgcolor=#cccccc>Introduce tu clave de acceso
                <?PHP }?></td>
             </tr><br>
				<tr><td  rowspan=2 bgcolor="#FFFFFF">
				<form action="autentificar.php" method="POST">
				<fieldset>
				<center><b>Favor introducir usuario y password </b></center>
				<table border="0" bgcolor="#FFFFFF">
				<td width="100"><center><img src="imagenes/jpg/LOGO_HIDRO1.gif" ></center></td>
				<tr><td  align="center" ><b>Usuario:</b></td><td width=80><input type=text name="user" 

size=20 ></td></tr>
				<tr><td  align="center" ><b>Pass:</td><td width=80><input type=password name="pass" 

size=20></b></td></tr>
				<tr><td></td><td width=80 align=center><input type="submit" name="submit" height=20 width=80 

value="Accesar"></td></tr>
				</table>
				</fieldset>
				</form>
				</td></tr></table>
</html>


