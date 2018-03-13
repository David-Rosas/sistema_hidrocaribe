<?php
//$connection = pg_connect("host=$sql_host port=$puerto dbname=$sql_db user=$sql_usuario password=$sql_pass")
$connection = pg_connect("host=localhost port=5432 dbname=db_control user=postgres password=12345");
// Suponiendo que el input de envio se llama form_loguin
if(isset($_POST['pass'])){
  // Recibo las variables del formulario anterior. aca supongo que los nombres
  // de los input son user y password respectivamente
  $user = $_POST['user'];
  $pass = $_POST['pass'];

  // Agrego los campos para revisar el contenido sies o no vacio
  if(!$user || !$pass){
  	if(!$pass){
    	echo "Password no puede estar Vacio";
	}
  }
  else{
		// Consulta sql que seleccion de la tabla usuario donde el usuario es $user, osea
		// es el valor recibido desde el formulario y el password es $pass
		$query = "SELECT * FROM acceso WHERE usuario = '$user' AND clave = '$pass'";  
	
		// Ejecuto la sentecia sql
		$resul =pg_query($query);
	
		// Si se reciben filas como respuesta
		//if(rows($resul)
		if (pg_fetch_row($resul) > 0 ){
		 //echo "Usuario existe...";
			require("index1.php");
		// De lo contrario, el numero de filas recibidas sera 0, osea no existe
		// y el usuario no sera valido
		}
		else{
			echo "Password Incorrecto verifique e intente nuevamente";
			require("index.php");
		}
  	}
}
?> 
