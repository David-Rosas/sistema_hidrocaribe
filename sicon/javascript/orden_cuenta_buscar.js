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
function listo(id,remitente)
{
	if(confirm("Esta Seguro que desea ejecutar este trabajo??. \nTiene los Soportes de que se Ejecuto el Trabajo??"))
	{
		new Ajax.Request('ejecutar_trabajo.php?id='+id+'&ale='+aleatorio(0,999999), 
   		{
   			method:'get',
   			onSuccess: function(transport)
   						{
   							//document.form.id.value = transport.responseText;
   							alert(transport.responseText);
   							location.href="";
   						}
   		}
  			);
  	}
}
function editar(id,remitente)
{
	location.href="orden_cuenta.php?id="+id+"&ale="+aleatorio(0,999999);
}
function imprimir(id,remitente)
{
	//alert("orden_cuenta_pdf.php?id="+id+"&ale="+aleatorio(0,999999));
	location.href="orden_cuenta_pdf.php?id="+id+"&ale="+aleatorio(0,999999);
}
function find()
{
	location.href="orden_cuenta_buscar.php?datos="+document.form.datos.value+'&ale='+aleatorio(0,999999);
}
function recargar()
{
	document.form.datos.value = "";
	document.form.datos.focus();
}
