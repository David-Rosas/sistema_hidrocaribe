<html>
<head>

<title>Estaciones</title>

</head>

<body>

<table cellspacing="10" cellpadding="10" border="0"  align="center">
<form action="funciones7.php" method="post">
        <tr>
            <td width="109"><b><center>Codigo:</b></center></b></td>
            <td width="110"><b><input type="text" name="codigo"><br/></b></td>
        </tr>
		 <tr>
            <td><b><center>Fecha:</center></b></td>
            <td><b><input type="text" name="fecha"><br/></b></td>
        </tr>
		<tr>
            <td><b><center>Hora:</center></b></td>
            <td><b><input type="text" name="hora"><br/></b></td>
        </tr>
        <tr>
		<td><b><center>Planta:</center></b></td>
            <td><b><select name="sitio" size="0">
				<?php
					$comando="SELECT nombre FROM planta order by nombre";
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
            <td><b><center>Causa:</center></b></td>
            <td><b><select name="causa" size="0">
				<?php
					$comando="SELECT nombre FROM causa order by nombre";
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
            <td><b><center>Hora Reinicio:</center></b></td>
            <td><b><input type="text" name="horaa"><br/></b></td>
        </tr>
		<tr>
            <td><b><center>Atendido:</center></b></td>
            <td><b><input type="text" name="atendido"><br/></b></td>
        </tr>
		</table>	
		<b><center><input type="submit" name="enviar" value ="Guardar" ><input type="submit" name="enviar" value ="Buscar" ><input type="submit" name="enviar" value ="Mostrar"><input type="reset" name="limpiar" value ="Limpiar"></center></</b></td>
  </form> 

</body>
</html>
