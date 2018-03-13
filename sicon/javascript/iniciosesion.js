/**
* Este script valida los elementos de un formulario, lo hace de la siguiente manera:
* Las 3 primeras letras indican el tipo de elemento(tex=texto num=numerico sel=listamenu  che=chekbox),
* las siguientes determinan el nombre referente al elemento (cedula) y la ultima indica si el elemento es T=Obligatorio
* u F=Opcional.  Ejemplo: numCedulaT = es un n�mero, Es la Cedula lo que se va a guardar y la T indica que es obligatorio.
*/

/**
* Coloca el puntero en un elemento
**/
function puntero(objeto){
	objeto.focus();
}



/**
* Recibe un elemento del formulario y verifica si es un numero, retorna True o False
**/
function isNumber(inputStr) {
	for (var i = 0; i < inputStr.length; i++) {
	var oneChar = inputStr.charAt(i);
			if (oneChar!="1" && oneChar!="2" && oneChar!="3" && oneChar!="4" && oneChar!="5" && oneChar!="6" &&
				oneChar!="7" && oneChar!="8" && oneChar!="9" && oneChar!="0" && oneChar!=".") {
			alert("Por Favor coloque solo n�meros \n");
			return false;
			}
	}
 return true;
}


/**
* Recibe una direccion de correo y verifica que sea v�lida
**/
function validarCorreo(elemento){
    var Email = elemento.value;
    var Formato = /^([\w-\.])+@([\w-]+\.)+([a-z]){2,4}$/;
	var Comparacion = Formato.test(Email);
     if(Comparacion == false){
          //alert("El "+ separaString(getDescripcion(elemento)) +" ingresado no es v�lido");
          //elemento.focus();
		  return true;
     }
     return false;
}



/**
* Recibe un formulario, lee sus elementos y verifica que los obligatorios sean llenados y que los numericos no posean caracteres
**/
function checkForm(form){
	 // Aqui se coloca el name de todos los campos text
	 var textObligatorios =new Array("texUsuarioR", "texContrasenaR", "texCodigoR");

	 //var textcorreos = new Array("texCorreoElectronicoR");

	var retorno=true;
	var x=parent.document.getElementById("msgerror");
	var Mensaje='<table class="errorMsg">';
	Mensaje+="<tr><td>Los Siguientes Datos son Necesarios: </td></tr>";
	var retorna=true;

	for (var i = 0; i < form.elements.length; i++) {
		form.elements[i].style.backgroundColor='#FFFFFF';

		if (form.elements[i].type == "text" || form.elements[i].type == "password") {

			if(form.elements[i].value == ""){

				for(j=0; j<=textObligatorios.length; j++){
					if (textObligatorios[j]==form.elements[i].name){
						form.elements[i].style.backgroundColor='#FFFFCC';
						Mensaje+="<tr><td>"+form.elements[i].title+"</td></tr>";
						retorna=false;
					}

				}

			}
			/*else{

				for(j=0; j<=textObligatorios.length; j++){
					if (textcorreos[j] == form.elements[i].name && validarCorreo(form.elements[i])){
						Mensaje+="<tr><td>"+form.elements[i].title+"</td></tr>";
						retorna=false;
					}
				}
			}*/

		}//cierra for


	}


	Mensaje+="<tr><td><br></td></tr>";
	Mensaje+="</table>";
	if(retorna==false){
  	x.innerHTML=Mensaje;
		return false;
	}else{

		return true;
	}


}