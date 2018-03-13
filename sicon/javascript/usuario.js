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
//	location.href="usuario.php?id="+id+"&ale="+aleatorio(0,999999);
	location.href="usuario.php?id="+id+"&ale="+aleatorio(0,999999);
}
function eliminar(id,remitente)
{
	if(confirm("Esta seguro(a) que desea Eliminar la informacion id: "+id+" ??"))
		{
			new Ajax.Request('usuario_delete.php?id='+id+"&ale="+aleatorio(0,999999), 
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
	location.href="usuario_buscar.php?usuario="+document.form.usuario.value+'&ale='+aleatorio(0,999999);
}
function guardar()
{
	if(vacio(document.form.usuario.value,"Nombre ") || vacio(document.form.clave.value,"Clave ") || vacio(document.form.tipo.value,"Tipo "))
	{
		if(confirm("Esta seguro(a) de Almacenar los Siguientes Datos?? \n ID: "+document.form.id.value+"\n USUARIO: "+document.form.usuario.value+"\n Tipo: "+document.form.tipo.value))
		{
			new Ajax.Request('usuario_insert.php?id='+document.form.id.value+'&usuario='+document.form.usuario.value+'&clave='+document.form.clave.value+'&tipo='+document.form.tipo.value+'&ale='+aleatorio(0,999999), 
   		{
   			method:'get',
   			onSuccess: function(transport)
   						{
   							//document.form.id.value = transport.responseText;
   							alert(transport.responseText);
   							actualiza_id('acceso');
   							recargar();
   						}
   		}
  			);
  		}
  	}
}
function recargar()
{
	document.form.usuario.value = "";
	document.form.usuario.focus();
	document.form.clave.value = "";
	document.form.clave.focus();
	document.form.tipo.value = "";
	document.form.tipo.focus();
}
function nuevo()
{
	actualiza_id('acceso')
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