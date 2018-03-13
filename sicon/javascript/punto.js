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
	location.href="punto1.php?id="+id+"&ale="+aleatorio(0,999999);
}
function eliminar(id,remitente)
{
	if(confirm("Esta seguro(a) que desea Eliminar la informacion de la Operadora numero: "+id+" ??"))
		{
			new Ajax.Request('punto_delete.php?id='+id+"&ale="+aleatorio(0,999999), 
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
	location.href="punto_buscar.php?fecha="+document.form.fecha.value+'&ale='+aleatorio(0,999999);
}
function guardar()
{	
	if(vacio(document.form.fecha.value,"FECHA") && vacio(document.form.hora.value,"HORA") && vacio(document.form.presion.value,"PRESION")) 
	{
		if(confirm("Esta seguro(a) de Almacenar los Siguientes Datos?? \n ID: "+document.form.id.value+"\n FECHA: "+document.form.fecha.value+"\n PUNTO: "+document.form.punto.value+"\n HORA: "+document.form.hora.value+"\n PRESION: "+document.form.presion.value+"\n HORA: "+document.form.hora1.value+"\n PRESION: "+document.form.presion1.value+"\n HORA: "+document.form.hora2.value+"\n PRESION: "+document.form.presion2.value))
		{
			new Ajax.Request('punto_insert.php?id='+document.form.id.value+'&fecha='+document.form.fecha.value+'&punto='+document.form.punto.value+'&hora='+document.form.hora.value+'&presion='+document.form.presion.value+'&hora1='+document.form.hora1.value+'&presion1='+document.form.presion1.value+'&hora2='+document.form.hora2.value+'&presion2='+document.form.presion2.value+'&ale='+aleatorio(0,999999), 
   		{
   			method:'get',
   			onSuccess: function(transport)
   						{
   							//document.form.id.value = transport.responseText;
   							alert(transport.responseText);
   							actualiza_id('puntom');
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
	document.form.punto.value = "";
	document.form.punto.focus();
	document.form.hora.value = "";
	document.form.hora.focus();
	document.form.presion.value = "";
	document.form.presion.focus();
	document.form.hora1.value = "";
	document.form.hora1.focus();
	document.form.presion1.value = "";
	document.form.presion1.focus();
	document.form.hora2.value = "";
	document.form.hora2.focus();
	document.form.presion2.value = "";
	document.form.presion2.focus();
}
function imprimir(id,remitente)
{
//	location.href="reportetomas_pdf.php?id="+id+"&ale="+aleatorio(0,999999);
	location.href = "reportepunto_pdf.php?fecha_ini"+document.form.fecha_ini.value+"&ale="+aleatorio(0,999999);
//	location.href="report.php";
}
function remoto()
{
	var url = "http://localhost/sicon/punto_insert.php";
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
	actualiza_id('puntom');
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

