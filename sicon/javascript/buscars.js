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
function guardar()
{
	if(vacio(document.form.fecha_ini.value,"Fecha Inicial") && vacio(document.form.fecha_fin.value,"Fecha Final"))
		location.href="buscars.php?fecha_ini="+document.form.fecha_ini.value+"&fecha_fin="+document.form.fecha_fin.value+'&ale='+aleatorio(0,999999);
}
function guardar1()
{
	if(vacio(document.form.sitio.value,"Planta"))
		location.href="buscarsp.php?sitio="+document.form.sitio.value+'&ale='+aleatorio(0,999999);
}
function guardar2()
{
	if(vacio(document.form.tsustancias.value,"Sustancia"))
		location.href="buscarst.php?tsustancias="+document.form.tsustancias.value+'&ale='+aleatorio(0,999999);
}
function guardar3()
{
	if(vacio(document.form.fecha_ini.value,"Fecha Inicial") && vacio(document.form.fecha_fin.value,"Fecha Final"))
		location.href="buscars2.php?fecha_ini="+document.form.fecha_ini.value+"&fecha_fin="+document.form.fecha_fin.value+'&ale='+aleatorio(0,999999);
}
function guardar4()
{
	if(vacio(document.form.sitio.value,"Planta"))
		location.href="buscarsp2.php?sitio="+document.form.sitio.value+'&ale='+aleatorio(0,999999);
}
function guardar5()
{
	if(vacio(document.form.tsustancias.value,"Sustancia"))
		location.href="buscarst2.php?tsustancias="+document.form.tsustancias.value+'&ale='+aleatorio(0,999999);
}
function editar(id,remitente)
{
	location.href="sustancias1.php?id="+id+"&ale="+aleatorio(0,999999);
}
function imprimir(id,remitente)
{
//	location.href="reportetomas_pdf.php?id="+id+"&ale="+aleatorio(0,999999);
	location.href = "reportesustancias_pdf.php?fecha_ini"+document.form.fecha_ini.value+"&ale="+aleatorio(0,999999);
//	location.href="report.php";
}
function imprimir1(id,remitente)
{
	//location.href = "reportetomas_pdf.php?fecha_ini"+document.form.fecha_ini.value+"&ale="+aleatorio(0,999999);
	location.href = "reportesustancias2_pdf.php?fecha_ini="+document.form.fecha_ini.value+"&fecha_fin="+document.form.fecha_fin.value+'&ale='+aleatorio(0,999999);
//	location.href="report.php";
}
function imprimir2(id,remitente)
{
	//location.href = "reportetomas_pdf.php?fecha_ini"+document.form.fecha_ini.value+"&ale="+aleatorio(0,999999);
	location.href = "reportesustancias3_pdf.php?sitio="+document.form.sitio.value+'&ale='+aleatorio(0,999999);
//	location.href="report.php";
}
function imprimir3(id,remitente)
{
	//location.href = "reportetomas_pdf.php?fecha_ini"+document.form.fecha_ini.value+"&ale="+aleatorio(0,999999);
	location.href = "reportesustancias4_pdf.php?tsustancias="+document.form.tsustancias.value+'&ale='+aleatorio(0,999999);
//	location.href="report.php";
}