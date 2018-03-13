<?php
$sangria = "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
function ayuda($titulo,$texto)
{
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html><head>
<title></title>
<meta http-equiv="imagetoolbar" content="no"><style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
	background-color: #EFEBEF;
}

a:link {
	color: #006699;
}
a:visited {
	color: #006699;
}
a:active {
	color: #006699;
}

-->

.st_tbcss,.st_tdcss,.st_divcss,.st_ftcss{border:none;padding:0px;margin:0px}
A.st_acss,A.st_acss:link,A.st_acss:visited,A.st_acss:active,A.st_acss:hover{background-color:transparent}
</style>
<link href="tablas.css" rel="stylesheet" type="text/css">
<link href="ventanas.css" rel="stylesheet" type="text/css">
<link href="cabecera.css" rel="stylesheet" type="text/css">
<link href="general.css" rel="stylesheet" type="text/css">
</head>
<body bgcolor="#FFFFFF">

<form name="form" method="post" action="ANPB0.php" onsubmit="return Valida();">

<div align="center">
  <p style='text-indent: 1em'>&nbsp;</p>
  <table class="formato-blanco" border="0" width="95%">
    <tbody>
    <tr>
      <td><br>
      <div align="left">
		<table width="95%" align="center" border="0" cellpadding="0" cellspacing="0">
      <tbody>
      <tr>
      <td>
      </td>
      </tr>
      <tr>
      <td>
      <table width="99%" class="formato-blanco" align="center" border="0" cellpadding="0" cellspacing="0">
      <tbody>
      <tr>
      <td class="titulo-ventana">
      <?php echo $titulo; ?>
      </td>
      </tr>
      <tr class="formato-blanco">
      <td><br>
      <p>
      <?php echo $texto; ?>
      </p>
      </td>
      </tr>
      
      </tbody>
      </table>
      </td>
      </tr>
      <tr>
      <td>
      </td>
      </tr>
     	</tbody>
     	</table>
     	<br>
      </div>
      </td>
    </tr>
  </tbody>
  </table>
</div>
<p align="center">&nbsp;</p>
</form>
</body>
</html>
<?php
}
?>