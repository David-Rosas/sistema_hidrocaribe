<html>
<head>
<title></title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

<script language="JavaScript" type="text/javascript">
/**************************************************************
MenÃº en arbol. Script creado por Tunait! (31/7/2004)
Creado mediante el Generador de MenÃºs en http://javascript.tunait.com
Si quieres usar este script en tu sitio eres libre de hacerlo con la condiciÃ³n de que permanezcan intactas estas lÃ­neas, osea, los crÃ©ditos.
No autorizo a publicar y/o distribuÃ­r el cÃ³digo en sitios de script sin previa autorizaciÃ³n
Si quieres publicarlo, por favor, contacta conmigo.
http://javascript.tunait.com/
tunait@yahoo.com 
****************************************************************/
var anMenu = 500
var totalMen =4

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

var Op_0 = new tunMen("Introducci\u00F3n",'introduccion.php','contenido',0)
var Op_1 = new tunMen("Conociendo el Sistema",null,null,4)
 var Op_1_0 = new tunMen("Requisitos M\u00EDnimos",null,null,2)
	var Op_1_0_0=new tunMen('Hardware','hardware.php','contenido',0) 
	var Op_1_0_1=new tunMen('Software','software.php','contenido',0)
 var Op_1_1=new tunMen('Pasos para la Instalaci\u00F3n','instalacion.php','contenido',0)
 var Op_1_2=new tunMen('Acceder al Sistema','acceso.php','contenido',0)
 var Op_1_3=new tunMen('Iniciar del Sistema','principal.php','contenido',0)
var Op_2 = new tunMen("Men\u00FA del Sistema",null,null,6)
var Op_2_0 = new tunMen("Men\u00FA Mantenimiento",null,null,8)
		var Op_2_0_0=new tunMen('Empresa',null,null,3) 
			var Op_2_0_0_0=new tunMen('Unidad de Negocios','sucursal.php','contenido',0) 
			var Op_2_0_0_1=new tunMen('Gerencia o Superintendencia','gerencia.php','contenido',0) 
			var Op_2_0_0_2=new tunMen('Coordinaci\u00F3n o Jefatura','coordinacion.php','contenido',0) 
		var Op_2_0_1=new tunMen('Analista','analista.php','contenido',0) 
		var Op_2_0_2=new tunMen('Problema',null,null,2) 
			var Op_2_0_2_0=new tunMen('Nivel 0','nivel0.php','contenido',0) 
			var Op_2_0_2_1=new tunMen('Nivel 1','nivel1.php','contenido',0)  
		var Op_2_0_3=new tunMen('Inventario',null,null,3) 
			var Op_2_0_3_0=new tunMen('Equipo','equipo.php','contenido',0) 
			var Op_2_0_3_1=new tunMen('Componente','componente.php','contenido',0) 
			var Op_2_0_3_2=new tunMen('Software','software_.php','contenido',0)  
		var Op_2_0_4=new tunMen('Cargo','cargo.php','contenido',0) 
		var Op_2_0_5=new tunMen('Proyecto','proyecto.php','contenido',0) 
		var Op_2_0_6=new tunMen('Proveedor','proveedor.php','contenido',0) 
		var Op_2_0_7=new tunMen('Usuario','usuario.php','contenido',0) 
var Op_2_1 = new tunMen("Men\u00FA Procesos",null,null,7) 
		var Op_2_1_0=new tunMen('Solicitudes',null,null,2) 
			var Op_2_1_0_0=new tunMen('Solicitud de Servicios','solicitud.php','contenido',0) 
			var Op_2_1_0_1=new tunMen('Avance de Solicitudes','avance.php','contenido',0) 
		var Op_2_1_1=new tunMen('Atenci\u00F3n de Casos',null,null,5) 
			var Op_2_1_1_0=new tunMen('Casos Pendientes','pendiente.php','contenido',0) 
			var Op_2_1_1_1=new tunMen('Casos Abiertos','abierto.php','contenido',0) 
			var Op_2_1_1_2=new tunMen('Casos Cerrados','cerrado.php','contenido',0) 
			var Op_2_1_1_3=new tunMen('Casos en Espera','en_espera.php','contenido',0) 
			var Op_2_1_1_4=new tunMen('Casos Abiertos por mi','mis_casos.php','contenido',0) 
		var Op_2_1_2=new tunMen('Proyectos',null,null,3) 
			var Op_2_1_2_0=new tunMen('Asignar Proyectos','asignar_proyecto.php','contenido',0) 
			var Op_2_1_2_1=new tunMen('Avance de Proyectos','avance_proyecto.php','contenido',0) 
			var Op_2_1_2_2=new tunMen('Mis Proyectos','mis_proyecto.php','contenido',0) 
		var Op_2_1_3=new tunMen('Software',null,null,2) 
			var Op_2_1_3_0=new tunMen('Asignar Software','asignar_software.php','contenido',0) 
			var Op_2_1_3_1=new tunMen('Asignar Software por Lote','asignar_software_lote.php','contenido',0) 
		var Op_2_1_4=new tunMen('Componente',null,null,1) 
			var Op_2_1_4_0=new tunMen('Asignar Compente','asignar_componente.php','contenido',0) 
		var Op_2_1_5=new tunMen('Proveedor',null,null,2) 
			var Op_2_1_5_0=new tunMen('Entrega de Equipo a Proveedor','entrega_equipo.php','contenido',0)
			var Op_2_1_5_1=new tunMen('Recibo de Equipo de Proveedor','recibo_equipo.php','contenido',0) 
		var Op_2_1_6=new tunMen('Cambiar Contrase\u00F1a','contrasenia.php','contenido',0) 
var Op_2_2 = new tunMen("Men\u00FA Indicadores de Gesti\u00F3n",null,null,5) 
		var Op_2_2_0=new tunMen('Tiempo en Atender','atender.php','contenido',0) 
		var Op_2_2_1=new tunMen('Tiempo en Solucionar','solucionar.php','contenido',0) 
		var Op_2_2_2=new tunMen('N\u00FAmero de Casos',null,null,7) 
			var Op_2_2_2_0=new tunMen('Por Analista',null,null,4) 
				var Op_2_2_2_0_0=new tunMen('Abierto por Analista','abierto_analista.php','contenido',0) 
				var Op_2_2_2_0_1=new tunMen('Cerrado por Analista','cerrado_analista.php','contenido',0) 
				var Op_2_2_2_0_2=new tunMen('Abierto o Cerrado por Analista','o_analista.php','contenido',0) 
				var Op_2_2_2_0_3=new tunMen('Abierto y Cerrado por Analista','y_analista.php','contenido',0) 
			var Op_2_2_2_1=new tunMen('Por Coordinaci\u00F3n o Jefatura','por_oficina.php','contenido',0) 
			var Op_2_2_2_2=new tunMen('Por Gerencia o Superintendencia','por_gerencia.php','contenido',0) 
			var Op_2_2_2_3=new tunMen('Por Cargo',null,null,2) 
				var Op_2_2_2_3_0=new tunMen('Generados por Cargo','generado_cargo.php','contenido',0) 
				var Op_2_2_2_3_1=new tunMen('Resueltos por Cargo','resuelto_cargo.php','contenido',0) 
			var Op_2_2_2_4=new tunMen('Por Dia','por_dia.php','contenido',0) 
			var Op_2_2_2_5=new tunMen('Por Meses','por_meses.php','contenido',0) 
			var Op_2_2_2_6=new tunMen('Por Años','por_anio.php','contenido',0) 
		var Op_2_2_3=new tunMen('Dinero Invertido',null,null,5) 
			var Op_2_2_3_0=new tunMen('Por Analista','inversion_analista.php','contenido',0) 
			var Op_2_2_3_1=new tunMen('Por Unidad de Negocios','inversion_sucursal.php','contenido',0) 
			var Op_2_2_3_2=new tunMen('Por Gerencia o Superintendencia','inversion_gerencia.php','contenido',0) 
			var Op_2_2_3_3=new tunMen('Por Coordinaci\u00F3n','inversion_coordinacion.php','contenido',0) 
			var Op_2_2_3_4=new tunMen('Por Cargo','inversion_cargo.php','contenido',0) 
		var Op_2_2_4=new tunMen('Problemas Frecuentes','frecuentes.php','contenido',0) 
var Op_2_3 = new tunMen("Men\u00FA Listados",null,null,8) 
		var Op_2_3_0=new tunMen('Equipos, Componentes y Software','equipo_software.php','contenido',0) 
		var Op_2_3_1=new tunMen('Equipos, Componentes y Proveedores','equipo_proveedor.php','contenido',0) 
		var Op_2_3_2=new tunMen('Proyectos',null,null,2) 
			var Op_2_3_2_0=new tunMen('Proyectos Completos','completo.php','contenido',0) 
			var Op_2_3_2_1=new tunMen('Proyectos Incompletos','incompleto.php','contenido',0) 
		var Op_2_3_3=new tunMen('Casos','caso.php','contenido',0) 
		var Op_2_3_4=new tunMen('Oficinas de Atenci\u00F3n al Cliente','oac.php','contenido',0) 
		var Op_2_3_5=new tunMen('Alertas','alerta.php',null,0) 
		var Op_2_3_6=new tunMen('Problemas, Diagnosticos y Soluciones','p_d_s.php','contenido',0) 
		var Op_2_3_7=new tunMen('Listado de Sugerencias','lista_sugerencias.php','contenido',0) 
var Op_2_4 = new tunMen("Men\u00FA Preferencias",null,null,2) 
		var Op_2_4_0=new tunMen('Apariencia',null,null,1) 
			var Op_2_4_0_0=new tunMen('Temas',null,null,2) 
				var Op_2_4_0_0_0=new tunMen('Windows Vista','vista.php','contenido',0)
				var Op_2_4_0_0_1=new tunMen('MAC OS','mac.php','contenido',0)
		var Op_2_4_1=new tunMen('Nota de Confirmaci\u00F3n','confirmacion.php','contenido',0) 
var Op_2_5 = new tunMen("Men\u00FA Ayuda",null,null,4) 
	var Op_2_5_0=new tunMen('Guia de Usuario','guia.php','contenido',0)		
	var Op_2_5_1=new tunMen('Cr\u00E9ditos','creditos.php','contenido',0)
	var Op_2_5_2=new tunMen('Licencia','licencia.php','contenido',0)
	var Op_2_5_3=new tunMen('Sugerencias','sugerencias.php','contenido',0)
var Op_3 = new tunMen("Conclusiones y Recomendaciones",null,null,2)
	var Op_3_0=new tunMen('Coclusiones','conclusiones.php','contenido',0)
	var Op_3_1=new tunMen('Recomendaciones','recomendaciones.php','contenido',0)

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
color: #3366CC;
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
	color: #3366CC;
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
	background-color: #E5E5E5;
	font-family: verdana, tahoma, arial, sans serif;
	font-size: 12px;
}
-->
</style>
</head>





<br><br>
<div id="tunMe"></div>
</body>
</html>