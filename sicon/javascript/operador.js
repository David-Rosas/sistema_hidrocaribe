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
	location.href="operador.php?id="+id+"&ale="+aleatorio(0,999999);
}
function eliminar(id,remitente)
{
	if(confirm("Esta seguro(a) que desea Eliminar la informacion de la Operadora numero: "+id+" ??"))
		{
			new Ajax.Request('operador_delete.php?id='+id+"&ale="+aleatorio(0,999999), 
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
	location.href="operador_buscar.php?nombre="+document.form.nombre.value+'&ale='+aleatorio(0,999999);
}
function guardar()
{
	if(vacio(document.form.nombre.value,"Nombre de Operadora"))
	{
		if(confirm("Esta seguro(a) de Almacenar los Siguientes Datos?? \n ID: "+document.form.id.value+"\n NOMBRE: "+document.form.nombre.value))
		{
			new Ajax.Request('operador_insert.php?id='+document.form.id.value+'&nombre='+document.form.nombre.value+'&ale='+aleatorio(0,999999), 
   		{
   			method:'get',
   			onSuccess: function(transport)
   						{
   							//document.form.id.value = transport.responseText;
   							alert(transport.responseText);
   							actualiza_id('operador');
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
function remoto()
{
	var url = "http://localhost/sicon/operador_insert.php";
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
	actualiza_id('operador');
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