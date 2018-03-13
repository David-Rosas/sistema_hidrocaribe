<?php
include ("seguridad.php");
?>

<html>
<head>
<title>SICON - Indice</title>
<link rel="shortcut icon" href="favicon.ico">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<body  background="imagenes/jpg/dibujo.jpg"  bgcolor="#B6D1FC">

<script language="JavaScript" type="text/javascript">
/**************************************************************
Menu en arbol. Script creado por Tunait! (31/7/2004)
Creado mediante el Generador de MenÃºs en http://javascript.tunait.com
Si quieres usar este script en tu sitio eres libre de hacerlo con la condiciÃ³n de que permanezcan intactas estas lÃ­neas, osea, los crÃ©ditos.
No autorizo a publicar y/o distribuir el cÃ³digo en sitios de script sin previa autorizaciÃ³n
Si quieres publicarlo, por favor, contacta conmigo.
http://javascript.tunait.com/
tunait@yahoo.com 
****************************************************************/
var anMenu = 500
var totalMen =5

var anImas = 17
var alImas = 15
var direc = 'imasmenu'
var mas = '/mast.gif'
var menos = '/menost.gif'
var puntos = '/puntost.gif'
var puntosv = '/puntosvt.gif'
var carpeab = '/carpabiertat.gif'
var carpece = '/carpcerradat.gif'
var puntosu = '/puntosut.gif'
var doc = '/doct.gif'
var docsel = '/docselt.gif'
var carpeabsel = '/carpabiertasel.gif'
var carpecesel = '/carpcerradasel.gif'
var icHome = '/home.gif'
var puntosh = '/puntosh.gif'
function tunMen(tex,enl,dest,subOp,an){
this.tex = tex;
this.enl = enl;
this.dest = dest;
this.subOp = subOp;
this.an = an;
this.secAc = false
}

var Op_0 = new tunMen("Menu",'introduccion.php','contenido',0)
var Op_1 = new tunMen("Archivo",null,null,8)
	var Op_1_0=new tunMen('Puntos de Medicion',null,null,2)
		var Op_1_0_0=new tunMen('Guardar/Actualizar','medicion.php','contenido',0)
		var Op_1_0_1=new tunMen('Buscar','medicion_buscar.php','contenido',0)
	var Op_1_1=new tunMen('Tipo de Sustancias',null,null,2)
		var Op_1_1_0=new tunMen('Guardar/Actualizar','tsustancia.php','contenido',0)
		var Op_1_1_1=new tunMen('Buscar','tsustancia_buscar.php','contenido',0)
	var Op_1_2=new tunMen('Plantas/Est. de Agua Potable',null,null,2)
		var Op_1_2_0=new tunMen('Guardar/Actualizar','planta.php','contenido',0)
		var Op_1_2_1=new tunMen('Buscar','planta_buscar.php','contenido',0)
	var Op_1_3=new tunMen('Plantas de Agua Servidas',null,null,2)
		var Op_1_3_0=new tunMen('Guardar/Actualizar','plantas.php','contenido',0)
		var Op_1_3_1=new tunMen('Buscar','plantas_buscar.php','contenido',0)	
	var Op_1_4=new tunMen('Valvula',null,null,2)
		var Op_1_4_0=new tunMen('Guardar/Actualizar','valvula.php','contenido',0)
		var Op_1_4_1=new tunMen('Buscar','valvula_buscar.php','contenido',0)
	var Op_1_5=new tunMen('Categoria Valvula',null,null,2)
		var Op_1_5_0=new tunMen('Guardar/Actualizar','catvalvula.php','contenido',0)
		var Op_1_5_1=new tunMen('Buscar','catvalvula_buscar.php','contenido',0)	
	var Op_1_6=new tunMen('Causas',null,null,2)
		var Op_1_6_0=new tunMen('Guardar/Actualizar','causa.php','contenido',0)
		var Op_1_6_1=new tunMen('Buscar','causa_buscar.php','contenido',0)
	var Op_1_7=new tunMen('Categoria Causas',null,null,2)
		var Op_1_7_0=new tunMen('Guardar/Actualizar','catcausa.php','contenido',0)
		var Op_1_7_1=new tunMen('Buscar','catcausa_buscar.php','contenido',0)		
var Op_2 = new tunMen("Operaciones",null,null,20)
		var Op_2_0=new tunMen('Maniobras de Valvula','maniobras.php','contenido',0)
		var Op_2_1=new tunMen('Estaciones de Agua Potable','estaciones.php','contenido',0)
		var Op_2_2=new tunMen('Estaciones de Agua Servidas','estaciones2.php','contenido',0)
		var Op_2_3=new tunMen('Sustancias','sustancias.php','contenido',0)
		var Op_2_4=new tunMen('Puntos de Medici�n de Presi�n','punto.php','contenido',0)
		var Op_2_5=new tunMen('C.Control Molorca','reported2.php','contenido',0)
		var Op_2_6=new tunMen('P/T Jose Antonio Anzoategui','reported.php','contenido',0)
		var Op_2_7=new tunMen('P/T El Rincon','reported3.php','contenido',0)
		var Op_2_8=new tunMen('P/T Santa Clara','reported4.php','contenido',0)
		var Op_2_9=new tunMen('E/B Curaguaro','reported5.php','contenido',0)
		var Op_2_10=new tunMen('E/B El Yai','reported6.php','contenido',0)
		var Op_2_11=new tunMen('Reporte de Estaciones','preporte.php','contenido',0)
		var Op_2_12=new tunMen('P/P Boca de Uchire','reportepbocauchire.php','contenido',0)
		var Op_2_13=new tunMen('P/P Valle Guanape','reportepvalleguanape.php','contenido',0)
		var Op_2_14=new tunMen('S/P Turimiquire','reportepturimiquire.php','contenido',0)
		var Op_2_15=new tunMen('S/P Juan Jose Codallos','reportepjjcodallos.php','contenido',0)
		var Op_2_16=new tunMen('P/P El Cord�n','reportepcordon.php','contenido',0)
		var Op_2_17=new tunMen('P/P Punto Medio de Control El Cord�n','reportepmcordon.php','contenido',0)
		var Op_2_18=new tunMen('P/P Clavellino','reportepclavellino.php','contenido',0)
		var Op_2_19=new tunMen('Control Diario Estanques Los Morochos','reportecdmorochos.php','contenido',0)
var Op_3 = new tunMen("Reporte Operacional",null,null,23)
		var Op_3_0=new tunMen('Maniobras de Valvula Reguladora','reportedm','contenido',0)
		var Op_3_1=new tunMen('Estaciones de Agua Potable','reportede.php','contenido',0)
		var Op_3_2=new tunMen('Estaciones de Agua Servida','reportedes.php','contenido',0)
		var Op_3_3=new tunMen('Sustancias','reporteds.php','contenido',0)
		var Op_3_4=new tunMen('Puntos de Medici�n','reportedpm.php','contenido',0)	
		var Op_3_5=new tunMen('Grafica de Causas','formulario.php','contenido',0)	
		var Op_3_6=new tunMen('Grafica de Categoria de Causas','formulario2.php','contenido',0)
		var Op_3_7=new tunMen('Reporte P/T Jose Antonio Anzoategui','rbuscard.php','contenido',0)
		var Op_3_8=new tunMen('Reporte P/T El Rincon','rbuscard3.php','contenido',0)
		var Op_3_9=new tunMen('Reporte P/T Santa Clara ','rbuscard4.php','contenido',0)
		var Op_3_10=new tunMen('Reporte E/B Curaguaro','rbuscard5.php','contenido',0)
		var Op_3_11=new tunMen('Reporte E/B El Yai','rbuscard6.php','contenido',0)
		var Op_3_12=new tunMen('Reporte C.Control Molorca','rbuscard2.php','contenido',0)
		var Op_3_13=new tunMen('Reporte de Estaciones','rbuscarpreporte','contenido',0)	
		var Op_3_14=new tunMen('Reporte P/P Boca de Uchire','rbreportepbocauchire.php','contenido',0)
		var Op_3_15=new tunMen('Reporte P/P Valle Guanape','rbreportepvalleguanape.php','contenido',0)
		var Op_3_16=new tunMen('Reporte S/P Turimiquire','rbreportepturimiquire.php','contenido',0)
		var Op_3_17=new tunMen('Reporte S/P Juan Jose Codallos','rbreportepjjcodallos.php','contenido',0)
		var Op_3_18=new tunMen('Reporte P/P El Cord�n','rbreportepcordon.php','contenido',0)
		var Op_3_19=new tunMen('Reporte P/P Punto Medio de Control El Cord�n','rbreportepmcordon.php','contenido',0)
		var Op_3_20=new tunMen('Reporte P/P Clavellino','rbreportepclavellino.php','contenido',0)
		var Op_3_21=new tunMen('Reporte Control Diario Estanques Los Morochos','rbreportecdmorochos.php','contenido',0)
		var Op_3_22=new tunMen('Reporte Excel','formularioexcel.php','contenido',0)				
var Op_4 = new tunMen("Sistema",null,null,1)
		var Op_4_0=new tunMen('Usuario','usuario.php','contenido',0)


		
var anchoTotal = 912
var tunIex=navigator.appName=="Microsoft Internet Explorer"?true:false;
if(tunIex && navigator.userAgent.indexOf('Opera')>=0){tunIex = false}
var manita = tunIex ? 'hand' : 'pointer'
var subOps = new Array()
function construye(){
cajaMenu = document.createElement('div')
cajaMenu.style.width = anMenu + "px"
document.getElementById('tunMe').appendChild(cajaMenu)
for(m=0; m < totalMen; m++){
	opchon = eval('Op_'+m)
	ultimo = false
	try{
	eval('Op_' + (m+1))
	}
	catch(error){
	ultimo = true
	}
	boton = document.createElement('div')
	boton.style.position = 'relative'
	boton.className = 'botones'
	boton.style.paddingLeft= 0
	carp = document.createElement('img')
	carp.style.marginRight = 5 + 'px'	
	carp.style.verticalAlign = 'middle'
	carp2 = document.createElement('img')
	carp2.style.verticalAlign = 'middle'


	enla = document.createElement('a')
	if(opchon.subOp > 0){
		carp2.style.cursor = manita
		carp2.src = direc + mas
		boton.secAc = opchon.secAc
		}
	else{
		carp2.style.cursor = 'default'
		enla.className = 'enls'
		if(ultimo){carp2.src = direc + puntosu}
		else{carp2.src = direc + puntos}
		}
		if(m == 0){
		carp.src = direc + icHome
		carp2.src = direc + puntosh
		}
	else{
		carp.src = direc + carpece
		}
	boton.appendChild(carp2)
	boton.appendChild(carp)
	enla.className = 'enls'
	enla.style.cursor = manita
	boton.appendChild(enla)
	enla.appendChild(document.createTextNode(opchon.tex))
	if(tunIex){
		enla.onmouseover = function(){this.className = 'botonesHover'}
		enla.onmouseout = function(){this.className = 'enls'}
		}
	if(opchon.enl != null && opchon.subOp == 0){
			enla.href = opchon.enl
			}
		if(opchon.dest != null && opchon.subOp == 0){
			enla.target = opchon.dest;
			}
	boton.id = 'op_' + m
	
	cajaMenu.appendChild(boton)
	if(opchon.subOp > 0 ){
		carp2.onclick= function(){
		abre(this.parentNode,this,this.nextSibling)
		}
		subOps[subOps.length] = boton.id.replace(/o/,"O")
		enla.onclick = function(){
			abre(this.parentNode,this.parentNode.firstChild,this.previousSibling)
			}
		}
	}
if(subOps.length >0){subMes()}
}
function subMes(){
lar = subOps.length
for(t=0;t<subOps.length;t++){
	opc =eval(subOps[t])
	for(v=0;v<opc.subOp;v++){
		if(eval(subOps[t] + "_" + v + ".subOp") >0){
			subOps[subOps.length] = subOps[t] + "_" + v
			}
		}
	}
construyeSub()
}
var fondo = true
function construyeSub(){
for(y=0; y<subOps.length;y++){
opchon = eval(subOps[y])
capa = document.createElement('div')
capa.className = 'subMe'
capa.style.position = 'relative'
capa.style.display = 'none'
if(!fondo){capa.style.backgroundImage = 'none'}
document.getElementById(subOps[y].toLowerCase()).appendChild(capa)
	for(s=0;s < opchon.subOp; s++){
		sopchon = eval(subOps[y] + "_" + s)
		ultimo = false
		try{
			eval(subOps[y] + "_" + (s+1))
			}
		catch(error){
			ultimo = true
			}
			if(ultimo && sopchon.subOp > 0){
			fondo = false
			}
		opc = document.createElement('div')
		opc.className = 'botones'
		opc.id = subOps[y].toLowerCase() + "_" + s
		if(tunIex){
			}
		enla = document.createElement('a')
		enla.className = 'enls'
		enla.style.cursor = manita
		if(sopchon.enl != null && sopchon.subOp == 0){
			enla.href = sopchon.enl
			if(sopchon.dest != null && sopchon.subOp == 0){
				enla.target = sopchon.dest
				}
			}
		
		enla.appendChild(document.createTextNode(sopchon.tex))
		capa.appendChild(opc)
		carp = document.createElement('img')
		carp.src = direc + carpece
		carp.style.verticalAlign = 'middle'
		carp.style.marginRight = 5 + 'px'
		carp2 = document.createElement('img')
		carp2.style.verticalAlign = 'middle'
		if(sopchon.subOp > 0){
			opc.secAc = sopchon.secAc
			carp2.style.cursor = manita
			carp2.src = direc + mas
				enla.onclick = function(){
				abre(this.parentNode,this.parentNode.firstChild,this.previousSibling)
				}
			carp2.onclick= function(){
			abre(this.parentNode,this,this.nextSibling)
			}
			if(tunIex){
			enla.onmouseover = function(){this.className = 'botonesHover'}
			enla.onmouseout = function(){this.className = 'enls'}
			}
			}
		else{
			carp2.style.cursor = 'default'
			carp.src = direc + doc
			if(ultimo){carp2.src = direc + puntosu; 
			if(sopchon.subOp > 0){alert('hola');capa.style.backgroundImage = 'none'}
			}
			else{carp2.src = direc + puntos}
				}
		opc.appendChild(carp2)
		opc.appendChild(carp)
		opc.appendChild(enla)
		
		}
	}
Seccion()
}
function abre(cual,im,car){
abierta = cual.lastChild.style.display != 'none'? true:false;
if(abierta){
	cual.lastChild.style.display = 'none'
	im.src = direc + mas
	if(cual.secAc){
		car.src = direc + carpecesel
		
		}
	else{car.src = direc + carpece}
	}
else{
	cual.lastChild.style.display = 'block'
	im.src = direc + menos
	if(cual.secAc){car.src = direc + carpeabsel}
	else{car.src = direc + carpeab}
	}
}
var seccion = null
function Seccion(){
if (seccion != null){
	if(seccion.length == 4){
		document.getElementById(seccion.toLowerCase()).firstChild.nextSibling.src = direc + carpeabsel
		document.getElementById(seccion.toLowerCase()).lastChild.className = 'secac2'
		document.getElementById(seccion.toLowerCase()).lastChild.onmouseover = function(){
			this.className = 'enls'
			}
		document.getElementById(seccion.toLowerCase()).lastChild.onmouseout = function(){
			this.className = 'secac2'
			}
		}
	else{
		document.getElementById(seccion.toLowerCase()).firstChild.nextSibling.src = direc + docsel
		document.getElementById(seccion.toLowerCase()).firstChild.nextSibling.nextSibling.className = 'secac'
		document.getElementById(seccion.toLowerCase()).parentNode.parentNode.lastChild.previousSibling.className = 'secac2' 
		//
			document.getElementById(seccion.toLowerCase()).parentNode.parentNode.lastChild.previousSibling.onmouseout = function(){
			this.className = 'secac2'
			}
			if(!tunIex){
			document.getElementById(seccion.toLowerCase()).parentNode.parentNode.lastChild.previousSibling.onmouseover = function(){
			this.className = 'enls'
			}
		}
		document.getElementById(seccion.toLowerCase()).parentNode.parentNode.secAc = true
		seccion = seccion.substring(0,seccion.length - 2)
		seccionb = document.getElementById(seccion.toLowerCase())
		abre(seccionb,seccionb.firstChild,seccionb.firstChild.nextSibling)
		if(seccion.length > 4){
		lar = seccion.length
			for(x = lar; x > 4; x-=2){
				seccion = seccion.substring(0,seccion.length - 2)
				seccionb = document.getElementById(seccion.toLowerCase())
				abre(seccionb,seccionb.firstChild,seccionb.firstChild.nextSibling)
				}
			}
		}
	}
}
onload = construye
</script>
<style type="text/css">
<!--
a.enls:link, a.enls:visited{
color: #000;
text-decoration: none;
}
a.enls:hover{
color: #CC0000;
background-color: #eeeeee;
}
a.secac2{
	color: #B87070;
	text-decoration: none;
}
a.secac{
	color: #FFFFFF;
	text-decoration: none;
	background-color: #CC0000;
}
a.secac:hover{
	color: #B87070;
	text-decoration: none;
	background-color: #ffffff;
}
.botones {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 12px;
	font-weight: bold;
	color: #000;
	margin: 0;
	padding-left: 18px;
	text-decoration: none;
	text-align: left;
}
.botonesHover {
text-decoration: none;
color: #CC0000;
background-color: #eeeeee;
}
/* AtenciÃ³n, evitar alterar la clase .subMe */
.subMe{
	display: none;
	margin: 0;
	background-image: url(imasmenu/puntosvt.gif);
	background-repeat:  repeat-y;
}
/* AtenciÃ³n, evitar alterar la clase .subMe */
body {
	background-color: #FFFFFF;
	font-family: verdana, tahoma, arial, sans serif;
	font-size: 12px;
}
-->
</style>
</head>



<br><br>
<div id="tunMe"></div>
</body>

<table width="200" border="1">
  <tr>
    <td><A HREF="cerrarsesion.php"  TARGET="_TOP">Salir</A></td>
  </tr>
</table>
</html>