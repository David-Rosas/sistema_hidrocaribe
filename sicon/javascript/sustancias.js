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
	location.href="sustancias1.php?id="+id+"&ale="+aleatorio(0,999999);
}

function eliminar(id,remitente)
{
	if(confirm("Esta seguro(a) que desea Eliminar la informacion de la Operadora numero: "+id+" ??"))
		{
			new Ajax.Request('sustancias_delete.php?id='+id+"&ale="+aleatorio(0,999999), 
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
	location.href="sustancias_buscar.php?fecha="+document.form.fecha.value+'&ale='+aleatorio(0,999999);
}
function guardar()
{
	if(vacio(document.form.fecha.value,"Fecha") && vacio(document.form.hora.value,"Hora") && vacio(document.form.sitio.value,"Sitio") && vacio(document.form.tsustancias.value,"Sustancias") && vacio(document.form.cantidad.value,"Cantidad") && vacio(document.form.nguia.value,"N.Guia") && vacio(document.form.recibido.value,"Recibido") && vacio(document.form.empresa.value,"Empresa"))
	{
		if(confirm("Esta seguro(a) de Almacenar los Siguientes Datos?? \n ID: "+document.form.id.value+"\n FECHA: "+document.form.fecha.value+"\n HORA: "+document.form.hora.value+"\n SITIO: "+document.form.sitio.value+"\n SUSTANCIAS: "+document.form.tsustancias.value+"\n CANTIDAD: "+document.form.cantidad.value+"\n NGUIA: "+document.form.nguia.value+"\n RECIBIDO: "+document.form.recibido.value+"\n OBSERVACION: "+document.form.observacion.value+"\n EMPRESA: "+document.form.empresa.value+"\n AUTORIZADO: "+document.form.autorizado.value+"\n FECHA: "+document.form.fecha2.value+"\n HORA: "+document.form.hora2.value+"\n PLANTA TRANSF: "+document.form.tsitio.value+"\n CANTIDAD: "+document.form.cantidadt.value+"\n NOVEDAD: "+document.form.novedad.value))
		{
			new Ajax.Request('sustancias_insert.php?id='+document.form.id.value+'&fecha='+document.form.fecha.value+'&hora='+document.form.hora.value+'&sitio='+document.form.sitio.value+'&tsustancias='+document.form.tsustancias.value+'&cantidad='+document.form.cantidad.value+'&nguia='+document.form.nguia.value+'&recibido='+document.form.recibido.value+'&observacion='+document.form.observacion.value+'&empresa='+document.form.empresa.value+'&autorizado='+document.form.autorizado.value+'&fecha2='+document.form.fecha2.value+'&hora2='+document.form.hora2.value+'&tsitio='+document.form.tsitio.value+'&cantidadt='+document.form.cantidadt.value+'&novedad='+document.form.novedad.value+'&ale='+aleatorio(0,999999), 
   		{
   			method:'get',
   			onSuccess: function(transport)
   						{
   							//document.form.id.value = transport.responseText;
   							alert(transport.responseText);
   							actualiza_id('sustancias');
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
	document.form.hora.value = "";
	document.form.hora.focus();
	document.form.sitio.value = "";
	document.form.sitio.focus();
	document.form.tsustancias.value = "";
	document.form.tsustancias.focus();
	document.form.cantidad.value = "";
	document.form.cantidad.focus();
	document.form.nguia.value = "";
	document.form.nguia.focus();
	document.form.recibido.value = "";
	document.form.recibido.focus();
	document.form.observacion.value = "";
	document.form.observacion.focus();
	document.form.empresa.value = "";
	document.form.empresa.focus();
	document.form.autorizado.value = "";
	document.form.autorizado.focus();
	document.form.fecha2.value = "";
	document.form.fecha2.focus();
	document.form.hora2.value = "";
	document.form.hora2.focus();
	document.form.tsitio.value = "";
	document.form.tsitio.focus();
	document.form.cantidadt.value = "";
	document.form.cantidadt.focus();
	document.form.novedad.value = "";
	document.form.novedad.focus();
}
function imprimir(id,remitente)
{
		location.href = "reportesustancias_pdf.php?fecha="+document.form.fecha.value+"&ale="+aleatorio(0,999999);
}
function remoto()
{
	var url = "http://localhost/sicon/sustancias_insert.php";
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
	actualiza_id('sustancias');
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
