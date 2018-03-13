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
function editar(id,remitente)
{
	location.href="maniobras.php?id="+id+"&ale="+aleatorio(0,999999);
}
function eliminar(id,remitente)
{
	if(confirm("Esta seguro(a) que desea Eliminar la informacion de la Operadora numero: "+id+" ??"))
		{
			new Ajax.Request('maniobras_delete.php?id='+id+"&ale="+aleatorio(0,999999), 
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
function find()
{
	location.href="maniobras_buscar.php?fecha="+document.form.fecha.value+'&ale='+aleatorio(0,999999);
}
function guardar()
{
	if(vacio(document.form.fecha.value,"Nombre de Operadora"))
	{
		if(confirm("Esta seguro(a) de Almacenar los Siguientes Datos?? \n ID: "+document.form.id.value+"\n FECHA: "+document.form.fecha.value+"\n SITIO: "+document.form.sitio.value+"\n HORA: "+document.form.hora.value+"\n NVUELTAS: "+document.form.nvueltas.value+"\n HORA: "+document.form.horar.value))
		{
			new Ajax.Request('maniobras_insert.php?id='+document.form.id.value+'&fecha='+document.form.fecha.value+'&sitio='+document.form.sitio.value+'&hora='+document.form.hora.value+'&nvueltas='+document.form.nvueltas.value+'&horar='+document.form.horar.value+'&ale='+aleatorio(0,999999), 
   		{
   			method:'get',
   			onSuccess: function(transport)
   						{
   							//document.form.id.value = transport.responseText;
   							alert(transport.responseText);
   							actualiza_id('maniobras');
   							recargar();
   						}
   		}
  			);
  		}
  	}
}
function recargar()
{
	document.form.fecha.value = "";
	document.form.fecha.focus();
	document.form.sitio.value = "";
	document.form.sitio.focus();
	document.form.hora.value = "";
	document.form.hora.focus();
	document.form.nvueltas.value = "";
	document.form.nvueltas.focus();
	document.form.horar.value = "";
	document.form.horar.focus();
}
function remoto()
{
	var url = "http://localhost/sicon/maniobras_insert.php";
	//alert(url);
	new Ajax.Request(url, 
   	{
   		method:'get',
   		onSuccess: function(transport)
   						{
   							alert('Remoto()');
   							alert(transport.responseText);
   						}
   	}
  		);
}
function nuevo()
{
	remoto();
	actualiza_id('maniobras');
	recargar();
}
function actualiza_id(tabla)
{
		new Ajax.Request('max.php?tabla='+tabla+'&ale='+aleatorio(0,999999), 
   	{
   		method:'get',
   		onSuccess: function(transport)
   						{
   							document.form.id.value = transport.responseText;
   							//alert(transport.responseText);
   						}
   	}
  		);
}
