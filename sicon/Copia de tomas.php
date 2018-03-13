<html>
<head>

<title>Tomas</title>

</head>

<body>

<table cellspacing="10" cellpadding="10" border="0"  align="center">
<form action="funciones6.php" method="post">
       
	   <tr>
            <td width="109"><b><center>Codigo:</b></center></b></td>
            <td width="110"><b><input type="text" name="codigo"><br/></b></td>
        </tr>
        <tr>
            <td><b><center>Fecha:</center></b></td>
            <td><b><input type="text" name="fecha"><br/></b></td>
        </tr>
		<tr>
            <td><b><center>Punto de Medicion:</center></b></td>
            <td><b><select name="codpun" size="0">
				<?php
					$comando="SELECT nombre FROM medicion order by nombre";
					$connection = pg_connect("dbname=db_control user=postgres password=12345") or die("No se realiz&oacute la conexi&oacute;n Detalles: ".pg_last_error());
					$resultado= pg_query($connection, $comando);// or die("Error en la insercion. <br>".pg_last_error());
					if($resultado)
					{
						while ($row = pg_fetch_row($resultado))
						{ 
							?> 
     						<option><?php echo "$row[0]"; ?></option>
   						<?php
   					}
   					pg_close($connection);
   				}
   				?>
				  	  </select><br/></b></td>
        </tr>
		<tr>
            <td width="109"><b><center>Hora:</b></center></b></td>
            <td width="110"><b><input type="text" name="hora"><br/></b></td>
        </tr>
		 <tr>
            <td><b><center>Presion:</center></b></td>
            <td><b><input type="text" name="presion"><br/></b></td>
        </tr>
		<tr>
            <td><b><center>Caudal:</center></b></td>
            <td><b><input type="text" name="caudal"><br/></b></td>
        </tr>
		</table>	
		<b><center><input type="submit" name="enviar" value ="Guardar" ><input type="submit" name="enviar" value ="Buscar" ><input type="submit" name="enviar" value ="Mostrar"><input type="reset" name="limpiar" value ="Limpiar"></center></</b></td>
  </form> 

</body>
</html>
