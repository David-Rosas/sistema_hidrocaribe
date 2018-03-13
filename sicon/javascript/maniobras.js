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
	location.href="maniobras1.php?id="+id+"&ale="+aleatorio(0,999999);
}

function operadora_contrato(op)
{
	new Ajax.Request('buscarcv.php?idval='+document.form.idval.value+'&ale='+aleatorio(0,999999), 
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

function categoriav(op)
{
	new Ajax.Request('buscarcv.php?idcv='+document.form.idcv.value+'&ale='+aleatorio(0,999999), 
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

function guardar()
{
	
	if(vacio(document.form.fecha.value,"Fecha") && vacio(document.form.idval.value,"Sitio") && vacio(document.form.hora.value,"Hora") && vacio(document.form.nvueltas.value,"N.vueltas") && vacio(document.form.tvuelta1.value,"T.vueltas"))
	{
		if(confirm("Esta seguro(a) de Almacenar los Siguientes Datos?? \n ID: "+document.form.id.value+"\n FECHA: "+document.form.fecha.value+"\n SITIO: "+document.form.idval.value+"\n CAT: "+document.form.idcatv.value+"\n HORA: "+document.form.hora.value+"\n NVUELTAS: "+document.form.nvueltas.value+"\n TVUELTA: "+document.form.tvuelta1.value+"\n HORA: "+document.form.horar2.value+"\n NVUELTAS: "+document.form.nvueltas2.value+"\n TVUELTA: "+document.form.tvuelta2.value+"\n HORA: "+document.form.horar3.value+"\n NVUELTAS: "+document.form.nvueltas3.value+"\n TVUELTA: "+document.form.tvuelta3.value+"\n HORA: "+document.form.horar4.value+"\n NVUELTAS: "+document.form.nvueltas4.value+"\n TVUELTA: "+document.form.tvuelta4.value+"\n HORA: "+document.form.horar5.value+"\n NVUELTAS: "+document.form.nvueltas5.value+"\n TVUELTA: "+document.form.tvuelta5.value))
		{
			new Ajax.Request('maniobras_insert.php?id='+document.form.id.value+'&fecha='+document.form.fecha.value+'&idval='+document.form.idval.value+'&idcatv='+document.form.idcatv.value+'&hora='+document.form.hora.value+'&nvueltas='+document.form.nvueltas.value+'&tvuelta1='+document.form.tvuelta1.value+'&horar2='+document.form.horar2.value+'&nvueltas2='+document.form.nvueltas2.value+'&tvuelta2='+document.form.tvuelta2.value+'&horar3='+document.form.horar3.value+'&nvueltas3='+document.form.nvueltas3.value+'&tvuelta3='+document.form.tvuelta3.value+'&horar4='+document.form.horar4.value+'&nvueltas4='+document.form.nvueltas4.value+'&tvuelta4='+document.form.tvuelta4.value+'&horar5='+document.form.horar5.value+'&nvueltas5='+document.form.nvueltas5.value+'&tvuelta5='+document.form.tvuelta5.value+'&ale='+aleatorio(0,999999), 
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
	document.form.idval.value = "";
	document.form.idval.focus();
	document.form.idcatv.value = "";
	document.form.idcatv.focus();
	document.form.hora.value = "";
	document.form.hora.focus();
	document.form.nvueltas.value = "";
	document.form.nvueltas.focus();
	document.form.tvuelta1.value = "";
	document.form.tvuelta1.focus();
	document.form.horar2.value = "";
	document.form.horar2.focus();
	document.form.nvueltas2.value = "";
	document.form.nvueltas2.focus();
	document.form.tvuelta2.value = "";
	document.form.tvuelta2.focus();
	document.form.horar3.value = "";
	document.form.horar3.focus();
	document.form.nvueltas3.value = "";
	document.form.nvueltas3.focus();
	document.form.tvuelta3.value = "";
	document.form.tvuelta3.focus();
	document.form.horar4.value = "";
	document.form.horar4.focus();
	document.form.nvueltas4.value = "";
	document.form.nvueltas4.focus();
	document.form.tvuelta4.value = "";
	document.form.tvuelta4.focus();
	document.form.horar5.value = "";
	document.form.horar5.focus();
	document.form.nvueltas5.value = "";
	document.form.nvueltas5.focus();
	document.form.tvuelta5.value = "";
	document.form.tvuelta5.focus();
}
function imprimir(id,remitente)
{
	location.href = "reportemaniobras_pdf.php?fecha="+document.form.fecha.value+"&ale="+aleatorio(0,999999);
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