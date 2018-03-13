<?php
function formato($expresion)
{
	if (strlen($expresion) == 1)
		return "0".$expresion;
	return $expresion;		
}
function esBisiesto($anio)
{
	if($anio%4 == 0 and ($anio%100 != 0 or $anio%400 == 0))
		return 1;
	else
		return 0;
}
function dias($mes)
{
	switch ($mes)
	{
		case "01": 
		$retorname = 31;
		break;
		case "02": 
		$retorname = 28;
		break;
		case "03": 
		$retorname = 31;
		break;
		case "04": 
		$retorname = 30;
		break;
		case "05": 
		$retorname = 31;
		break;
		case "06": 
		$retorname = 30;
		break;
		case "07": 
		$retorname = 31;
		break;
		case "08": 
		$retorname = 31;
		break;
		case "09": 
		$retorname = 30;
		break;
		case "10": 
		$retorname = 31;
		break;
		case "11": 
		$retorname = 30;
		break;
		case "12": 
		$retorname = 31;
		break;
	}
	return $retorname;
}
function recorrerDias($fecha_ini,$fecha_fin)
{
	$fecha_final = $fecha_fin;
	$fecha_ini = split("-",$fecha_ini);
	$fecha_fin = split("-",$fecha_fin);
	

	$anio_ini = $fecha_ini[0];
	$anio_fin = $fecha_fin[0];
	global $i;
	$i = 0;
	$arreglo = array();
	$entro = 0;
	while($anio_ini <= $anio_fin)
	{
		$mes_ini = $fecha_ini[1];
		$mes_fin = $fecha_fin[1];
		while($mes_ini <= $mes_fin)
		{
			if($entro == 0)
			{
				$dia_ini = $fecha_ini[2];
				$entro = 1;
			}
			else
				$dia_ini = 1;
			//$dia_fin = $fecha_fin[2];
			while(($dia_ini < (dias($mes_ini) + esBisiesto($anio_ini))) and ($fecha_final != $anio_ini."-".formato($mes_ini)."-".formato($dia_ini)))
			{
				$arreglo[$i] = $anio_ini."-".formato($mes_ini)."-".formato($dia_ini);
				//echo $arreglo[$i]."\n";
				$dia_ini++;
				$i++;
				
			}
			$mes_ini++;
		}
		$anio_ini++;
	} 
	return $arreglo;
}
function tipoReporte($tipo,$valor,$hasta,$desde)
{
	switch($tipo)
	{
		case 1:
			$retorname = "(codigo_per_abi=$valor) and fecha_ini >= '$desde' and fecha_ini <= '$hasta'";
		break;
		case 2:
			$retorname = "(codigo_per_cer=$valor) and fecha_fin >= '$desde' and fecha_fin <= '$hasta'";
		break;
		case 3:
			$retorname = "(codigo_per_abi=$valor or codigo_per_cer=$valor) and fecha_fin >= '$desde' and fecha_fin <= '$hasta'";
		break;
		case 4:
			$retorname = "(codigo_per_abi=$valor and codigo_per_cer=$valor) and fecha_fin >= '$desde' and fecha_fin <= '$hasta'";
		break;
		case 5:
			$retorname = "(codigo_per_cer=$valor) and fecha_fin >= '$desde' and fecha_fin <= '$hasta'";
		break;
		default:
			print ("Ocurrio un Error en el reporte");
		break;
	}
	return $retorname;
}
function devuelveValor($conexion,$sql)
{
	//echo $sql."<br>";
	$resultado= pg_query($conexion,$sql);
	$resultados = pg_fetch_row($resultado);
	//echo $resultados[0];
	return $resultados;	
}
function resultadoIndividual($conexion,$sql)
{
//echo $sql;
	$resultado= pg_query($conexion,$sql);
	$resultados = pg_fetch_row($resultado);
	//echo $resultados[0];
	return $resultados[0];	
}
function mensaje1($pagina, $clase)
{
echo "<script language='javascript' type='text/javascript'>		

		   alert('Datos Guardados Satisfactoriamente')
			if (confirm('Desea almacenar $clase ??'))
			   location.href='$pagina'
			else
			   location.href = '../../../controlGestion.php'
		</script>";
}
function mensaje2($pagina, $clase)
{
echo "<script language='javascript' type='text/javascript'>		

		   alert('$clase')
			location.href='$pagina'
			
		</script>";
}
function conectar($ip, $puerto, $nombreDb, $usuario, $clave, $comando)
{
//	echo "host=$ip port=$puerto dbname=$nombreDb user=$usuario password=$clave";
	$connection = pg_connect("host=$ip port=$puerto dbname=$nombreDb user=$usuario password=$clave") or die("No se realiz&oacute la conexi&oacute;n hoy");
	$resultado= pg_query($connection, $comando);// or die("Error en la insercion. <br>".pg_last_error());
	//pg_close($connection);
	return $resultado;
}

function mayor($item, $tabla)
{
	require("aut_config.inc.php");
	$comando="SELECT max(".$item.") FROM ".$tabla;
	//echo "$sql_host, $puerto, $sql_db, $sql_usuario, $sql_pass";
	$resultado=conectar($sql_host, $puerto, $sql_db, $sql_usuario, $sql_pass, $comando);	
	if($resultado)
	{
		while ($row = pg_fetch_row($resultado))
		{ 
			$elmayor=$row[0];
		}
		//pg_close($connection);
	}
	return $elmayor;
}
function accesosDirectos()
{
	echo "
	<a title='Casos Pendientes' href='javascript: ventana(\"templates/pages/php/atencion_casos.php?consulta=pendiente\",\"Atencion de Casos\");'>
    <img src='indexModulos_archivos/messaging_inbox.png' alt='Buscar' border='0' height='25' width='25'>
   </a>&nbsp;&nbsp;
  ";
  echo "
	<a title='Casos Abiertos' href='javascript: ventana(\"templates/pages/php/atencion_casos.php?consulta=abierto\",\"Atencion de Casos\");'>
    <img src='indexModulos_archivos/caso_abierto.png' alt='Buscar' border='0' height='25' width='25'>
   </a>&nbsp;&nbsp;
  ";
  echo "
	<a title='Casos Cerrados' href='javascript: ventana(\"templates/pages/php/atencion_casos.php?consulta=cerrado\",\"Atencion de Casos\");'>
    <img src='indexModulos_archivos/caso_cerrado.png' alt='Buscar' border='0' height='25' width='25'>
   </a>&nbsp;&nbsp;
  ";
  echo "
	<a title='Casos en Espera' href='javascript: ventana(\"templates/pages/php/atencion_casos.php?consulta=esperando\",\"Atencion de Casos\");'>
    <img src='indexModulos_archivos/esperar.png' alt='Buscar' border='0' height='25' width='25'>
   </a>&nbsp;&nbsp;
  ";
  echo "
	<a title='Mis Casos' href='javascript: ventana(\"templates/pages/php/atencion_casos.php?consulta=mios\",\"Atencion de Casos\");'>
    <img src='indexModulos_archivos/virtual.gif' alt='Buscar' border='0' height='25' width='25'>
   </a>&nbsp;&nbsp;
  ";
  echo "
	<a title='Solicitud de Servicios' href='javascript: ventana(\"templates/pages/php/PSServicio.php\",\"Solicitud de Servicios\");'>
    <img src='indexModulos_archivos/language.png' alt='Buscar' border='0' height='25' width='25'>
   </a>&nbsp;&nbsp;
  ";
  echo "
	<a title='Avance de Solicitudes de un Usuario Especifico' href='javascript: ventana(\"templates/pages/php/seleccionar_usuario.php\",\"Buscar Casos de un Usuario\");'>
    <img src='indexModulos_archivos/micaso.gif' alt='Buscar' border='0' height='25' width='25'>
   </a>&nbsp;&nbsp;
  ";
}
/*
function acciones()
{
	echo '<td width="25" height="20" class="toolbar"> 
    <div align="center">
    <a href="javascript: nuevo();">
    <img src="nuevo.png" width="20" height="20" border="0" alt="Nuevo" title="Limpiar el Formulario">
    </a>
    </div>
    </td>
    <td class="toolbar" width="25">
    <div align="center">
    <a href="javascript: guardar();">
    <img src="guardar3.png" alt="Grabar" border="0" height="20" width="20" title="Guardar Información">
    </a>
    </div>
    </td>
    <td class="toolbar" width="25">
    <div align="center">
    <a href="javascript: buscar();">
    <img src="buscar93.gif" alt="Buscar" border="0" height="20" width="20" title="Mostrar todo el Personal Técnico">
    </a>
    </div>
    </td>
    
    <td class="toolbar" width="25">
    <div align="center">
    <a href="javascript: ayuda();">
    <img src="ayuda4.png" alt="Ayuda" border="0" height="20" width="20" title="Ayuda de SIGECAH">
    </a>
    </div>
    </td>';
}*/
function acciones($nuevo=1,$guardar=1,$ayuda=1,$buscar=1)
{
	if($nuevo==1)
	{
		echo '<td width="25" height="20" class="toolbar"> 
   	 <div align="center">
    	<a href="javascript: nuevo();">
    	<img src="nuevo.png" width="20" height="20" border="0" alt="Nuevo" title="Limpiar el Formulario">
    	</a>
    	</div>
    	</td>';
   }
   if($guardar==1)
   {
    echo '<td class="toolbar" width="25">
    <div align="center">
    <a href="javascript: guardar();">
    <img src="guardar3.png" alt="Grabar" border="0" height="20" width="20" title="Guardar Información">
    </a>
    </div>
    </td>';
   }
   if($buscar==1)
   {
    echo '<td class="toolbar" width="25">
    <div align="center">
    <a href="javascript: buscar();">
    <img src="buscar93.gif" alt="Buscar" border="0" height="20" width="20" title="Mostrar todo el Personal Técnico">
    </a>
    </div>
    </td>';
   }
	if($ayuda==1)
	{    
		echo '<td class="toolbar" width="25">
    <div align="center">
    <a href="javascript: ayuda();">
    <img src="ayuda4.png" alt="Ayuda" border="0" height="20" width="20" title="Ayuda de SIGECAH">
    </a>
    </div>
    </td>';
   }
}
?>