function aleatorio(inferior,superior)
{
    numPosibilidades = superior - inferior
    aleat = Math.random() * numPosibilidades
    aleat = Math.round(aleat)
    return parseInt(inferior) + aleat
} 
function generar_pdf(servidor,id)
{
	if (servidor.indexOf("Ocurrio un Error Inesperado:") == -1) 
	{  
		//alert("orden_suspension_pdf.php?id="+id);
		if(confirm("Desea que SICOCON imprima la Orden de Trabajo ??"))
			location.href="orden_suspension_pdf.php?id="+id;	  
   } 
}
function guardar()
{
	url='orden_suspension_insert.php?listado='+document.form.listado.value+'&zonas='+document.form.zonas.value+'&id='+document.form.id.value+'&rutas='+document.form.rutas.value+'&id_contrato='+document.form.id_contrato.value+'&id_operadora='+document.form.id_operadora.value+'&id_actividad='+document.form.id_actividad.value+'&descripcion='+document.form.descripcion.value+'&ale='+aleatorio(0,999999);
	if(confirm("Esta seguro(a) que desea Almacenar los Datos del Formulario??"))
		{
			new Ajax.Request(url,
   		{
   			method:'get',
   			onSuccess: function(transport)
   						{
   							//document.form.id.value = transport.responseText;
   							alert(transport.responseText);
   							generar_pdf(transport.responseText,document.form.id.value);
   						}
   		}
  			);
  		}
}
function operadora_contrato(op)
{
	new Ajax.Request('buscar_operadoras_contrato.php?id_contrato='+document.form.id_contrato.value+'&ale='+aleatorio(0,999999), 
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
function eliminar(id,url)
{
	if(confirm("Esta seguro(a) que Desea eliminar el Registro Seleccionado ??"))
		{
			new Ajax.Request('operadora_actividad_delete.php?id='+id+'&ale='+aleatorio(0,999999), 
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
function buscar(id,url)
{
	if(document.form.id_operadora.value != '')
	{
		window.open('buscar_actividad.php?id_operadora='+document.form.id_operadora.value,'buscar_actividad','toolbar=0,location=0,directories=0,status=1,menubar=0,scrollbars=1,resizable=1,width=550,height=800');
	}
	else
	{
		alert('Debe Seleccionar una Operadora Comercial');
		document.form.id_operadora.focus();
	}
}
function nuevo()
{
	if(confirm('Esta Seguro que desea Limpiar la Ventana?.\nSe Pueden Perder Datos!!'))
	{
		location.href="orden_suspension.php";
	}
}