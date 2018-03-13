<?PHP
include ('configuracion.php');
include ('funciones/funciones.php');

	session_start();

	$user= $_POST["user"];
	$pass= $_POST["pass"];
	if(!$user || !$pass)
	  { 
		echo "Password no puede estar Vacio";
		}
	  	  else
	  {
		
	  		$query = "SELECT * FROM acceso WHERE usuario = '$user' AND clave = '$pass'"; 
			$resul =pg_query($query);
			$sql = "SELECT tipo FROM acceso WHERE usuario = '$user' AND clave = '$pass'"; 
			$tipo = resultadoIndividual($connection,$sql);
			
					if ((pg_fetch_row($resul) > 0) && ($tipo=="ADMINISTRADOR"))
					{
				//usuario y contraseña válidos
				//Crear variable para la sesión
				$_SESSION["autentificado"]= "1";
				$_SESSION['user']=$user;
				$_SESSION['pass']=$pass;
				//$_SESSION["user"]= $_POST["user"];
				//$_SESSION["pass"]= $_POST["pass"];
				header ("Location: index1.php");	
				}
				
			else
						{
						
			$query = "SELECT * FROM acceso WHERE usuario = '$user' AND clave = '$pass'"; 
			$resul =pg_query($query);
			$sql = "SELECT tipo FROM acceso WHERE usuario = '$user' AND clave = '$pass'"; 
			$tipo = resultadoIndividual($connection,$sql);
			
					if ((pg_fetch_row($resul) > 0) && ($tipo=="OBSERVADOR"))
								{
							//usuario y contraseña válidos
							//Crear variable para la sesión
							$_SESSION["autentificado"]= "1";
							$_SESSION["user"]= $_POST["user"];
							$_SESSION["pass"]= $_POST["pass"];
							header ("Location: index3.php");	
							}	
				else
						{
						
					$query = "SELECT * FROM acceso WHERE usuario = '$user' AND clave = '$pass'"; 
			$resul =pg_query($query);
			$sql = "SELECT tipo FROM acceso WHERE usuario = '$user' AND clave = '$pass'"; 
			$tipo = resultadoIndividual($connection,$sql);
			
					if ((pg_fetch_row($resul) > 0) && ($tipo=="USUARIO"))
								{
							//usuario y contraseña válidos
							//Crear variable para la sesión
							$_SESSION["autentificado"]= "1";
							$_SESSION["user"]= $_POST["user"];
							$_SESSION["pass"]= $_POST["pass"];
							header ("Location: index2.php");	
							}	
							
				else 
				{
				//si no existe, ir a la Página de Inicio
				header("Location: index.php?errorusuario=si");
					}
		
		
						}
	 
						}
	 
	  }
						

			
		
?>
