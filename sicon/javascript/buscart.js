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
		location.href="buscat.php?fecha_ini="+document.form.fecha_ini.value+"&fecha_fin="+document.form.fecha_fin.value+'&ale='+aleatorio(0,999999);
}
function recargar()
{
	document.form.fecha.value = "";
	document.form.fecha.focus();
	document.form.punto.value = "";
	document.form.punto.focus();
	document.form.hora.value = "";
	document.form.hora.focus();
	document.form.presion.value = "";
	document.form.presion.focus();
	document.form.caudal.value = "";
	document.form.caudal.focus();
}
function imprimir(id,remitente)
{
//	location.href="reportetomas_pdf.php?id="+id+"&ale="+aleatorio(0,999999);
	location.href = "reportetomas_pdf.php?fecha_ini"+document.form.fecha_ini.value+"&ale="+aleatorio(0,999999);
//	location.href="report.php";
}
function imprimir1(id,remitente)
{
	//location.href = "reportetomas_pdf.php?fecha_ini"+document.form.fecha_ini.value+"&ale="+aleatorio(0,999999);
	location.href = "reportetomas2_pdf.php?fecha_ini="+document.form.fecha_ini.value+"&fecha_fin="+document.form.fecha_fin.value+'&ale='+aleatorio(0,999999);
//	location.href="report.php";
}