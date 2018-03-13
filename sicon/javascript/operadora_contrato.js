function aleatorio(inferior,superior)
{
    numPosibilidades = superior - inferior
    aleat = Math.random() * numPosibilidades
    aleat = Math.round(aleat)
    return parseInt(inferior) + aleat
} 
var win;
function esperar()
{
		win = new Window({
        className: "mac_os_x",
        title: "...",
        top:0,
        left:0,
        width:670,
        height:470,
        url: "espera.php",
        showEffectOptions: {
              duration:1.5
        }
})
  win.show();
  //win.maximize();
  win.setLocation(top, 110)
  win.setSize(250,250)
  top = top + 25
  //win.destroy();
}
function acabar_espera()
{
	win.destroy();
}
function guardar()
{
	if(confirm("Esta seguro(a) de Almacenar los Siguientes Datos?? \n ID CONTRATO: "+document.form.id_contrato.value+"\n ID OPERADORA: "+document.form.id_operadora.value))
		{
			new Ajax.Request('operadora_contrato_insert.php?id_contrato='+document.form.id_contrato.value+'&id_operadora='+document.form.id_operadora.value+'&ale='+aleatorio(0,999999), 
   		{
   			method:'get',
   			onSuccess: function(transport)
   						{
   							//document.form.id.value = transport.responseText;
   							alert(transport.responseText);
   							//location.href="";
   						}
   		}
  			);
  		}
}
function traer_operadora()
{
	new Ajax.Request('buscar_operadora.php?id_contrato='+document.form.id_contrato.value+'&ale='+aleatorio(0,999999), 
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
			new Ajax.Request('operadora_contrato_delete.php?id='+id+'&ale='+aleatorio(0,999999), 
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