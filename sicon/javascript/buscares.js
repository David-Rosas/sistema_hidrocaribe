function aleatorio(inferior,superior)
{
    numPosibilidades = superior - inferior
    aleat = Math.random() * numPosibilidades
    aleat = Math.round(aleat)
    return parseInt(inferior) + aleat
} 
function vacio(datos,etiqueta)
{
	 if (datos.length==0){
       alert("El campo "+etiqueta+" no puede estar vacio!!")
       return 0;
    } 
    return 1;
}

function graficar()
{
     if(vacio(document.form.sitio.value,"Sitio"))
		location.href="graficas.php?sitio="+document.form.sitio.value+'&ale='+aleatorio(0,999999);
}
	 
function graficar2()
{
if(vacio(document.form.sitio.value,"Sitio") && vacio(document.form.causa.value,"Causa"))
		location.href="graficas.php?sitio="+document.form.sitio.value+"&causa="+document.form.causa.value+'&ale='+aleatorio(0,999999);
}

function guardar()
{
	if(vacio(document.form.fecha_ini.value,"Fecha Inicial") && vacio(document.form.fecha_fin.value,"Fecha Final"))
		location.href="buscares.php?fecha_ini="+document.form.fecha_ini.value+"&fecha_fin="+document.form.fecha_fin.value+'&ale='+aleatorio(0,999999);
	
}
function guardar1()
{
	if(vacio(document.form.sitio.value,"P/T y E/B"))
		location.href="buscareps.php?sitio="+document.form.sitio.value+'&ale='+aleatorio(0,999999);
	
}
function guardar2()
{
	if(vacio(document.form.causa.value,"Causa"))
		location.href="buscarecs.php?causa="+document.form.causa.value+'&ale='+aleatorio(0,999999);
	
}
function guardar3()
{
	if(vacio(document.form.fechaa.value,"Fecha Arranque"))
		location.href="buscarefas.php?fechaa="+document.form.fechaa.value+'&ale='+aleatorio(0,999999);
	
}
function guardar4()
{
	if(vacio(document.form.fecha_ini.value,"Fecha Inicial") && vacio(document.form.fecha_fin.value,"Fecha Final"))
		location.href="buscare2s.php?fecha_ini="+document.form.fecha_ini.value+"&fecha_fin="+document.form.fecha_fin.value+'&ale='+aleatorio(0,999999);
	
}
function guardar5()
{
	if(vacio(document.form.causa.value,"Causa"))
		location.href="buscarec2s.php?causa="+document.form.causa.value+'&ale='+aleatorio(0,999999);
	
}
function guardar6()
{
	if(vacio(document.form.sitio.value,"P/T y E/B"))
		location.href="buscarep2s.php?sitio="+document.form.sitio.value+'&ale='+aleatorio(0,999999);
	
}
function guardar7()
{
	if(vacio(document.form.fechaa.value,"Fecha Arranque"))
		location.href="buscarefa2s.php?fechaa="+document.form.fechaa.value+'&ale='+aleatorio(0,999999);
	
}
function editar(id,remitente)
{
	location.href="estacioness1.php?id="+id+"&ale="+aleatorio(0,999999);
}
function imprimir(id,remitente)
{
//	location.href="reportetomas_pdf.php?id="+id+"&ale="+aleatorio(0,999999);
	location.href = "reporteestacioness_pdf.php?fecha_ini"+document.form.fecha_ini.value+"&ale="+aleatorio(0,999999);
//	location.href="report.php";
}
function imprimir1(id,remitente)
{
	//location.href = "reportetomas_pdf.php?fecha_ini"+document.form.fecha_ini.value+"&ale="+aleatorio(0,999999);
	location.href = "reporteestaciones2s_pdf.php?fecha_ini="+document.form.fecha_ini.value+"&fecha_fin="+document.form.fecha_fin.value+'&ale='+aleatorio(0,999999);
//	location.href="report.php";
}
function imprimir2(id,remitente)
{
		location.href = "reporteestaciones3s_pdf.php?sitio="+document.form.sitio.value+'&ale='+aleatorio(0,999999);

}
function imprimir3(id,remitente)
{
		location.href = "reporteestaciones4s_pdf.php?causa="+document.form.causa.value+'&ale='+aleatorio(0,999999);

}
function imprimir4(id,remitente)
{
		location.href = "reporteestaciones5s_pdf.php?fechaa="+document.form.fechaa.value+'&ale='+aleatorio(0,999999);

}