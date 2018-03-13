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
	location.href="catvalvula.php?id="+id+"&ale="+aleatorio(0,999999);
}
function eliminar(id,remitente)
{
	if(confirm("Esta seguro(a) que desea Eliminar la informacion id: "+id+" ??"))
		{
			new Ajax.Request('catvalvula_delete.php?id='+id+"&ale="+aleatorio(0,999999), 
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
	location.href="catvalvula_buscar.php?nombre="+document.form.nombre.value+'&ale='+aleatorio(0,999999);
}
function guardar()
{
	if(vacio(document.form.nombre.value,"Nombre"))
	{
		if(confirm("Esta seguro(a) de Almacenar los Siguientes Datos?? \n ID: "+document.form.id.value+"\n NOMBRE: "+document.form.nombre.value+"\n Sitio: "+document.form.sitio.value))
		{
			new Ajax.Request('catvalvula_insert.php?id='+document.form.id.value+'&nombre='+document.form.nombre.value+'&sitio='+document.form.sitio.value+'&ale='+aleatorio(0,999999), 
   		{
   			method:'get',
   			onSuccess: function(transport)
   						{
   							//document.form.id.value = transport.responseText;
   							alert(transport.responseText);
   							actualiza_id('catvalvula');
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
	actualiza_id('catvalvula')
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
function aceptar(id,url)
{
	opener.document.form.id_actividad.value=id;
	close();
}