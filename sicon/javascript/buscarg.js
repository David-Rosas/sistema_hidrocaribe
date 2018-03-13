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
     if(vacio(document.form.sitio.value,"Sitio")&& vacio(document.form.fecha_ini.value,"Fecha Inicial")&&vacio(document.form.fecha_fin.value,"Fecha Final"))
		location.href="grafica1.php?sitio="+document.form.sitio.value+"&fecha_ini="+document.form.fecha_ini.value+"&fecha_fin="+document.form.fecha_fin.value+'&ale='+aleatorio(0,999999);
 }
	 
	 
function graficar2()
{
     if(vacio(document.form.sitio.value,"Sitio") && vacio(document.form.causa.value,"Causa"))
		location.href="grafica.php?sitio="+document.form.sitio.value+"&causa="+document.form.causa.value+'&ale='+aleatorio(0,999999);
 }
	 

function guardar()
{
	if(vacio(document.form.fecha_ini.value,"Fecha Inicial") && vacio(document.form.fecha_fin.value,"Fecha Final"))
		location.href="buscare.php?fecha_ini="+document.form.fecha_ini.value+"&fecha_fin="+document.form.fecha_fin.value+'&ale='+aleatorio(0,999999);
	
}
function guardar1()
{
	if(vacio(document.form.sitio.value,"P/T y E/B"))
		location.href="buscarep.php?sitio="+document.form.sitio.value+'&ale='+aleatorio(0,999999);
	
}
function guardar2()
{
	if(vacio(document.form.causa.value,"Causa"))
		location.href="buscarec.php?causa="+document.form.causa.value+'&ale='+aleatorio(0,999999);
	
}
function guardar3()
{
	if(vacio(document.form.fechaa.value,"Fecha Arranque"))
		location.href="buscarefa.php?fechaa="+document.form.fechaa.value+'&ale='+aleatorio(0,999999);
	
}
function editar(id,remitente)
{
	location.href="estaciones1.php?id="+id+"&ale="+aleatorio(0,999999);
}
function imprimir(id,remitente)
{
//	location.href="reportetomas_pdf.php?id="+id+"&ale="+aleatorio(0,999999);
	location.href = "reporteestaciones_pdf.php?fecha_ini"+document.form.fecha_ini.value+"&ale="+aleatorio(0,999999);
//	location.href="report.php";
}
function imprimir1(id,remitente)
{
	//location.href = "reportetomas_pdf.php?fecha_ini"+document.form.fecha_ini.value+"&ale="+aleatorio(0,999999);
	location.href = "reporteestaciones2_pdf.php?fecha_ini="+document.form.fecha_ini.value+"&fecha_fin="+document.form.fecha_fin.value+'&ale='+aleatorio(0,999999);
//	location.href="report.php";
}
function imprimir2(id,remitente)
{
		location.href = "reporteestaciones3_pdf.php?sitio="+document.form.sitio.value+'&ale='+aleatorio(0,999999);

}
function imprimir3(id,remitente)
{
		location.href = "reporteestaciones4_pdf.php?causa="+document.form.causa.value+'&ale='+aleatorio(0,999999);

}
function imprimir4(id,remitente)
{
		location.href = "reporteestaciones5_pdf.php?fechaa="+document.form.fechaa.value+'&ale='+aleatorio(0,999999);

}