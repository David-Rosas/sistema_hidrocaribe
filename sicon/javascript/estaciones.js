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
	location.href="estaciones.php?id="+id+"&ale="+aleatorio(0,999999);
}

function eliminar(id,remitente)
{
	if(confirm("Esta seguro(a) que desea Eliminar la informacion de la Operadora numero: "+id+" ??"))
		{
			new Ajax.Request('estaciones_delete.php?id='+id+"&ale="+aleatorio(0,999999), 
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
	location.href="estaciones_buscar.php?fecha="+document.form.fecha.value+'&ale='+aleatorio(0,999999);
}
function guardar()
{
	if(vacio(document.form.fecha.value,"Fecha") && vacio(document.form.hora.value,"Hora") && vacio(document.form.sitio.value,"Sitio"))
	{
		if(confirm("Esta seguro(a) de Almacenar los Siguientes Datos?? \n ID: "+document.form.id.value+"\n FECHA: "+document.form.fecha.value+"\n HORA: "+document.form.hora.value+"\n SITIO: "+document.form.sitio.value+"\n CAUSA: "+document.form.idc.value+"\n CATEGORIA: "+document.form.idc2.value+"\n OBSERVACION: "+document.form.observacion.value+"\n FECHAA: "+document.form.fechaa.value+"\n HORA: "+document.form.horaa.value+"\n ATENDIDO: "+document.form.atendido.value))
		{
			new Ajax.Request('estaciones_insert.php?id='+document.form.id.value+'&fecha='+document.form.fecha.value+'&hora='+document.form.hora.value+'&sitio='+document.form.sitio.value+'&idc='+document.form.idc.value+'&idc2='+document.form.idc2.value+'&observacion='+document.form.observacion.value+'&fechaa='+document.form.fechaa.value+'&horaa='+document.form.horaa.value+'&atendido='+document.form.atendido.value+'&ale='+aleatorio(0,999999), 
   		{
   			method:'get',
   			onSuccess: function(transport)
   						{
   							//document.form.id.value = transport.responseText;
   							alert(transport.responseText);
   							actualiza_id('estaciones');
   							recargar();
   						}
   		}
  			);
  		}
  	}
}

function operadora_contrato(op)
{
	new Ajax.Request('buscarcausas.php?idc='+document.form.idc.value+'&ale='+aleatorio(0,999999), 
   		{
   			method:'get',
   			onSuccess: function(transport)
   						{
   							respuesta_servidor = transport.responseText;
   							select = document.getElementById('op');
   							while(select.hasChildNodes())
								{
									select.removeChild(select.firstChild);
								}
   							if(respuesta_servidor != '')
   							{
   								operadoras = respuesta_servidor.split('**');
   								i=0;
   								while(i < operadoras.length)
   								{
	   								datos=operadoras[i].split('++');
   									opcion=document.createElement('option');
   									texto=document.createTextNode(datos[1]);
   									opcion.value=datos[0];
   									opcion.appendChild(texto);
   									if(op == datos[0])
   										opcion.selected = true;
   									select.appendChild(opcion);
   									i++;
   								}
   							}
   							else
   							{
   								document.form.id_actividad.value='';
   							}
	   					}
   			}
  				);
}

function recargar()
{
	document.form.fecha.value = "";
	document.form.fecha.focus();
	document.form.hora.value = "";
	document.form.hora.focus();
	document.form.sitio.value = "";
	document.form.sitio.focus();
	document.form.idc.value = "";
	document.form.idc.focus();
	document.form.idc2.value = "";
	document.form.idc2.focus();
	document.form.observacion.value = "";
	document.form.observacion.focus();
	document.form.fechaa.value = "";
	document.form.fechaa.focus();
	document.form.horaa.value = "";
	document.form.horaa.focus();
	document.form.atendido.value = "";
	document.form.atendido.focus();
		
}
function imprimir(id,remitente)
{
	location.href = "reporteestaciones_pdf.php?fecha="+document.form.fecha.value+"&ale="+aleatorio(0,999999);
}
function remoto()
{
	var url = "http://localhost/sicon/estaciones_insert.php";
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
	actualiza_id('estaciones');
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
