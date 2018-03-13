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
		location.href="buscar_suspension_e_fecha.php?fecha_ini="+document.form.fecha_ini.value+"&fecha_fin="+document.form.fecha_fin.value+'&ale='+aleatorio(0,999999);
}
