<html>
<head>

<title>Sustancias</title>

</head>

<body>

<table cellspacing="10" cellpadding="10" border="0"  align="center">
<form action="funciones8.php" method="post">
        <tr>
            <td width="109"><b><center>Codigo:</b></center></b></td>
            <td width="110"><b><input type="text" name="codigo"><br/></b></td>
        </tr>
		<tr>
            <td width="109"><b><center>Fecha:</b></center></b></td>
            <td width="110"><b><input type="text" name="fecha"><br/></b></td>
       
            <td width="109"><b><center>Hora:</b></center></b></td>
            <td width="110"><b><input type="text" name="hora"><br/></b></td>
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
       
            <td><b><center>Sustancia:</center></b></td>
            <td><b><select name="tsustancias" size="0">

				<?php
					$comando="SELECT nombre FROM tsustancias order by nombre";
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
            <td><b><center>Cantidad:</center></b></td>
            <td><b><input type="text" name="cantidad"><br/></b></td>
        </tr>
		<tr>
            <td><b><center>Numero de Compra:</center></b></td>
            <td><b><input type="text" name="ncompra"><br/></b></td>
        
            <td><b><center>Numero de Guia:</center></b></td>
            <td><b><input type="text" name="nguia"><br/></b></td>
        </tr>
		<tr>
            <td><b><center>Recibido por:</center></b></td>
            <td><b><input type="text" name="recibido"><br/></b></td>
        </tr>
		<tr>
            <td><b><center>Empresa:</center></b></td>
            <td><b><input type="text" name="empresa"><br/></b></td>
        </tr>
		<tr>
            <td><b><center>Transferencia:</center></b></td>
            <td><b><input type="text" name="transferencia"><br/></b></td>
        </tr>
		<tr>
            <td><b><center>Novedad:</center></b></td>
            <td><b><input type="text" name="novedad"><br/></b></td>
        </tr>
		</table>	
		<b><center><input type="submit" name="enviar" value ="Guardar" ><input type="submit" name="enviar" value ="Buscar" ><input type="submit" name="enviar" value ="Mostrar"><input type="reset" name="limpiar" value ="Limpiar"></center></</b></td>
  </form> 

</body>
</html>
