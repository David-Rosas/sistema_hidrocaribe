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

function imprimir(id,remitente)
{
	location.href="orden_suspension_pdf.php?id="+id+"&ale="+aleatorio(0,999999);
}
function find()
{
	location.href="orden_suspension_buscar_f.php?datos="+document.form.datos.value+'&ale='+aleatorio(0,999999);
}
function recargar()
{
	document.form.datos.value = "";
	document.form.datos.focus();
}
