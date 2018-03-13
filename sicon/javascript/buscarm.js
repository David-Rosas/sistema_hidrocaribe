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
		location.href="buscarm.php?fecha_ini="+document.form.fecha_ini.value+"&fecha_fin="+document.form.fecha_fin.value+'&ale='+aleatorio(0,999999);
}
function guardar1()
{
	if(vacio(document.form.valvula.value,"Valvula"))
		location.href="buscarmv.php?valvula="+document.form.valvula.value+'&ale='+aleatorio(0,999999);
}
function guardar2()
{
	if(vacio(document.form.valvula.value,"Valvula"))
		location.href="buscarmv2.php?valvula="+document.form.valvula.value+'&ale='+aleatorio(0,999999);
}
function guardar3()
{
	if(vacio(document.form.fecha_ini.value,"Fecha Inicial") && vacio(document.form.fecha_fin.value,"Fecha Final"))
		location.href="buscarm2.php?fecha_ini="+document.form.fecha_ini.value+"&fecha_fin="+document.form.fecha_fin.value+'&ale='+aleatorio(0,999999);
}

function buscarn()
{
 if(vacio(document.form.valvula.value,"Sitio"))
		location.href="buscarm1.php";
}

function editar(id,remitente)
{
	location.href="maniobras1.php?id="+id+"&ale="+aleatorio(0,999999);
}

function imprimir(id,remitente)
{
//	location.href="reportetomas_pdf.php?id="+id+"&ale="+aleatorio(0,999999);
	location.href = "reportemaniobras_pdf.php?fecha_ini"+document.form.fecha_ini.value+"&ale="+aleatorio(0,999999);
//	location.href="report.php";
}
function imprimir1(id,remitente)
{
	//location.href = "reportetomas_pdf.php?fecha_ini"+document.form.fecha_ini.value+"&ale="+aleatorio(0,999999);
	location.href = "reportemaniobras2_pdf.php?fecha_ini="+document.form.fecha_ini.value+"&fecha_fin="+document.form.fecha_fin.value+'&ale='+aleatorio(0,999999);
//	location.href="report.php";
}

function imprimir2(id,remitente)
{
	//location.href = "reportetomas_pdf.php?fecha_ini"+document.form.fecha_ini.value+"&ale="+aleatorio(0,999999);
	location.href = "reportemaniobras3_pdf.php?valvula="+document.form.valvula.value+'&ale='+aleatorio(0,999999);
//	location.href="report.php";
}