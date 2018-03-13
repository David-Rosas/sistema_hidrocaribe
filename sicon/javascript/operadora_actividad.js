function aleatorio(inferior,superior)
{
    numPosibilidades = superior - inferior
    aleat = Math.random() * numPosibilidades
    aleat = Math.round(aleat)
    return parseInt(inferior) + aleat
} 
function guardar()
{
	if(confirm("Esta seguro(a) de Almacenar los Siguientes Datos?? \n ID ACTIVIDAD: "+document.form.id_actividad.value+"\n ID OPERADORA: "+document.form.id_operadora.value))
		{
			new Ajax.Request('operadora_actividad_insert.php?id_actividad='+document.form.id_actividad.value+'&id_operadora='+document.form.id_operadora.value+'&ale='+aleatorio(0,999999), 
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
var win;
function esperar()
{
win = new Window({
        className: "mac_os_x",
        title: "SICOCON 1.0.0 - Cargando...",
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
  win.setLocation(top, 0)
  win.setSize(50,50)
  top = top + 25
  //win.destroy();
}
function acabar_espera()
{
	win.destroy();
}
function traer()
{
	new Ajax.Request('tipo_ajax.php?id='+document.form.id_operadora.value+'&ale='+aleatorio(0,999999), 
   		{
   			method:'get',
   			onSuccess: function(transport)
   						{
   							//alert(transport.responseText);
   							var contenedor = document.getElementById("et");
   							contenedor.innerHTML = transport.responseText;
   							
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
	window.open('buscar_actividad_filtrada.php?id_operadora='+document.form.id_operadora.value,'buscar_actividad','toolbar=0,location=0,directories=0,status=1,menubar=0,scrollbars=1,resizable=1,width=550,height=800');
}