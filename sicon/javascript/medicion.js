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
	location.href="medicion.php?id="+id+"&ale="+aleatorio(0,999999);
}
function eliminar(id,remitente)
{
	if(confirm("Esta seguro(a) que desea Eliminar la informacion del Tipo de Contrato id: "+id+" ??"))
		{
			new Ajax.Request('medicion_delete.php?id='+id+"&ale="+aleatorio(0,999999), 
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
	location.href="medicion_buscar.php?nombre="+document.form.nombre.value+'&ale='+aleatorio(0,999999);
}
function guardar()
{
	if(vacio(document.form.nombre.value,"Nombre"))
	{
		if(confirm("Esta seguro(a) de Almacenar los Siguientes Datos?? \n ID: "+document.form.id.value+"\n NOMBRE: "+document.form.nombre.value))
		{
			new Ajax.Request('medicion_insert.php?id='+document.form.id.value+'&nombre='+document.form.nombre.value+'&ale='+aleatorio(0,999999), 
   		{
   			method:'get',
   			onSuccess: function(transport)
   						{
   							//document.form.id.value = transport.responseText;
   							alert(transport.responseText);
   							actualiza_id('medicion');
   							recargar();
   						}
   		}
  			);
  		}
  	}
}
function recargar()
{
	document.form.nombre.value = "";
	document.form.nombre.focus();
}
function nuevo()
{
	actualiza_id('medicion')
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