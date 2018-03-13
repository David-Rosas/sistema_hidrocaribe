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
function find()
{
	location.href="buscar_cliente.php?nombre="+document.form.nombre.value+'&ale='+aleatorio(0,999999);
}
function traer_cliente(id)
{
	new Ajax.Request('traer_cliente.php?id_cliente='+id+'&ale='+aleatorio(0,999999), 
   		{
   			method:'get',
   			onSuccess: function(transport)
   						{
   							respuesta_servidor = transport.responseText;
   							//alert(respuesta_servidor);
   							if(respuesta_servidor != '')
   							{
   								cliente = respuesta_servidor.split('**');
   								opener.document.form.id_cliente.value=id;
   								opener.document.form.nombre.value = cliente[0];
   								opener.document.form.direccion.value = cliente[1];
   								opener.document.form.tlf.value = cliente[2];
   								alert('Cliente Cargado Satisfactoriamente!');
   								cerrar();
   							}
	   					}
   			}
  				);
}
function cerrar()
{
	close();
}
function recargar()
{
	document.form.nombre.value = "";
	document.form.nombre.focus();
}

function aceptar(id,url)
{
	traer_cliente(id);
}
function mascara(e)
{
	var tecla=new Number();
	if(window.event) 	
	{
		tecla = e.keyCode;
	}
	else if(e.which) 
	{
		tecla = e.which;
	}
	else
		return true;
	if(tecla == 13)
		find();
//	if ((tecla < 47 && tecla != 8) || tecla > 58)
//	{ 
		//return false;
//	}
//	var tam=document.estado_cuenta.n_cuenta.value.length;
//	if((tam == 2 || tam == 7) && tecla != 8)
//		document.estado_cuenta.n_cuenta.value = document.estado_cuenta.n_cuenta.value + '- ';
}