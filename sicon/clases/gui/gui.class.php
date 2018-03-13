<?php
function tamanio($arreglo)
{	
	$i=0;
	foreach ($arreglo as $valor) 
	{
			$i++;
	}
	return $i;
}
class boton
{
	var $imagen;
	var $accion;
	var $ancho;
	var $alto;
	var $title;
	
	function __construct($imagen,$accion,$title="",$ancho=20,$alto=20)
	{
		$this->imagen=$imagen;
		$this->accion=$accion;
		$this->ancho=$ancho;
		$this->alto=$alto;
		$this->title=$title;
	}
	function generar_boton($id="")
	{
		echo ' 
    	<a href="javascript: '.$this->accion.'(\''.$id.'\',\''.$_SERVER['HTTP_REFERER'].'\')">
    	<img src="'.$this->imagen.'" width="'.$this->ancho.'" height="'.$this->alto.'" border="0" alt="Nuevo" title="'.$this->title.'">
    	</a>
    	';
	}
}
class gui
{
	var $titulo;//el titulo de la pagina
	var $script;//los script de la pagina
	var $link;//los links de la pagina
	var $type;//tipo de estilo de la pagina
	var $languaje;//tipo de lenguaje de los script de la pagina
		
	function set_type($type="text/css")
	{
		$this->type=$type;
	}
	function set_languaje($languaje="javascript")
	{
		$this->languaje=$languaje;
	}
	function add_link($link,$rel="stylesheet",$type="text/css",$otras="")
	{
		echo '<link href="'.$link.'" rel="'.$rel.'" type="'.$type.'" '.$otras.'>';
		echo "\n";
	}
	function add_script($src)
	{
		echo '<script type="'.$this->type.'" src="'.$src.'"></script>';
		echo "\n";
	}
	function set_titulo($titulo)
	{
		$this->titulo=$titulo;
	}
	function abrir_head()
	{
		echo '<html><head><title>'.$this->titulo.'</title>';
		echo "\n";
	}
	function escribir_script($script)
	{
		echo "\n";
		echo $script;
		echo "\n";
	}
	function abrir_script()
	{
		echo "\n";
		echo '<script language="'.$this->languaje.'">';
		echo "\n";
	}
	function cerrar_script()
	{
		echo "\n";
		echo "</script>";
		echo "\n";
	}
	function cerrar_head()
	{
		echo "</head>";
		echo "\n";
	}
	function abrir_body($body="", $form="",$width="50%")
	{
		echo '<body background="imagenes/jpg/innova.jpg" '.$body.' >';
		echo "\n";
		echo '<form '.$form.'>';
		echo "\n";
		echo '<table cellpadding="0" cellspacing="0" border="0" align="center" valign="center" width="100%">
		<tbody align="center">
                <tr align="center">
                <td" align="center"></td>
                <td align="center">
		<div align="center">
		<table border="0" bgcolor="#FFFFFF" cellpadding="0" cellspacing="0" width="'.$width.'" align="center" valign="center">
              <tbody>
                <tr>
                  <td align="left" height="1"><img src="imagenes/gif/vc_esq_izq_sup.gif" alt="7" width="13" height="32"></td>
                  <td class="tituloDOSE_3" align="middle" background="imagenes/jpg/v_back_sup.jpg" valign="center">

                 	'.$this->titulo.'

				 </td>
                  <td align="right" width="13" height="1"><img src="imagenes/gif/vc_esq_der_sup.gif" alt="6" width="13" height="32"></td>
                </tr>
                <tr>
                  <td background="imagenes/gif/v_back_izq.gif" width="13" height="1"><img src="imagenes/gif/v_back_izq.gif" alt="3" width="13" height="2"></td>
                  <td class="tituloDOSE_2">
';
	}
	function cerrar_body()
	{
		echo '</td>
                  <td background="imagenes/gif/v_back_der.gif" width="13"><img src="imagenes/gif/v_back_der.gif" alt="1" width="13" height="8"></td>
                </tr>
                <tr>
                  <td align="left" width="13" height="1"><img src="imagenes/gif/v_esq_izq_inf.gif" alt="5" width="13" height="12"></td>
                  <td background="imagenes/gif/v_back_inf.gif" height="1"><img src="imagenes/gif/v_back_inf.gif" alt="2" width="2" height="12"></td>
                  <td align="right" width="13" height="1"><img src="imagenes/gif/v_esq_der_inf.gif" alt="4" width="13" height="12"></td>
                </tr>
              </tbody>
          </table></div></td>
          <td></td>
                </tr>
				</tbody>
          </table>';
		echo '</form></body></html>';
	}
	function add_body($contenido)
	{
		echo $contenido;
		echo "\n";
	}
	function esp_parrafo()
	{
		echo '<p>&nbsp;</p>';
		echo "\n";
	}
	
}

class control
{
	var $altura;
	var $largo1;
	var $largo2;
	var $vacio;
	var $class;
	var $alineacion_label;
	var $label;
	var $tipo;//Tipo de objeto ejm: input,textarea, etc...
	var $propiedades;
	var $name;
	var $value;
	var $size;
	var $type;
	var $boton;
	var $col;
	var $id;
	
	function __construct($boton=null)
	{
		$this->boton = $boton;
	}	
	function set_altura($altura)
	{
		$this->altura=$altura;
	} 
	function set_id($id)
	{
		$this->id=$id;
	} 
	function set_type($type)
	{
		$this->type=$type;
	} 
	function set_size($size)
	{
		$this->size=$size;
	} 
	function set_col($col)
	{
		$this->col=$col;
	}
	function set_name($name)
	{
		$this->name=$name;
	}
	function set_value($value)
	{
		$this->value=$value;
	}
	function set_largo1($largo1)
	{
		$this->largo1=$largo1;
	}
	function set_largo2($largo2)
	{
		$this->largo2=$largo2;
	}
	function set_vacio($vacio=0)
	{
		$this->vacio=$vacio;
	}
	function set_class($class)
	{
		$this->class=$class;
	}
	function set_alineacion_label($alineacion_label)
	{
		$this->alineacion_label=$alineacion_label;
	}
	function set_label($label)
	{
		$this->label=$label;
	}
	function set_boton($boton)
	{
		if($boton != null)
		{
			$this->boton= clone $boton;	
		}
		else
		{
			$this->boton=null;
		}
	}
	function set_tipo($tipo)
	{
		$this->tipo=$tipo;
	}
	function set_propiedades($propiedades)
	{
		$this->propiedades=$propiedades;
	}
	function general_select($connection, $comando="", $value=0)
	{
		$resultado= @pg_query($connection, $comando);
		echo '<select name="'.$this->name.'" '.$this->propiedades.'>';
		if($resultado)
		{
			while ($row = pg_fetch_row($resultado))
			{ 
				if($this->value == $row[0])
					$selected = "selected";
				else
					$selected = "";
				if($value == 0)
					echo "<option ".$selected.">".$row[0]."</option>";
				else
					echo '<option value="'.$row[0].'" '.$selected.'>'.$row[1].'</option>';
			}
		}
		echo "</select>";
		if($this->boton != null)
		{
			$this->generar_boton();
		}
	}
	function textarea()
	{
		echo '<textarea name="'.$this->name.'" rows="'.$this->size.'" cols="'.$this->col.'">'.$this->value.'</textarea>';
	}
	function generar_fecha()
	{
		echo '<tr>
 		     	<td height="'.$this->altura.'">
		      	<div align="'.$this->alineacion_label.'">
		      	'.$this->label.'
 		     	</div>
		      	</td>
		      	<td>';
		echo '<'.$this->tipo.' id="'.$this->id.'" name="'.$this->name.'" value="'.$this->value.'" size="15" '.$this->propiedades.' type="'.$this->type.'">';
		echo '<input type="reset" value=" ... " onclick="return showCalendar(';
		echo "'".$this->id."',";
		echo " '%d/%m/%Y ', ";
		echo "'24',";
		echo ' true);">';
		echo'	</td>
		      	</tr>';
	}
	function generar_control($connection,$comando,$value)
	{
		if($this->vacio == 0)
		{
				echo '<tr>
 		     	<td height="'.$this->altura.'">
		      	<div align="'.$this->alineacion_label.'">
		      	'.$this->label.'
 		     	</div>
		      	</td>
		      	<td>';
		      if($connection == "")
		      {
		      	if($this->tipo == "textarea")
					{
						$this->textarea();
					}
					else
					{
 		     			echo '<'.$this->tipo.' name="'.$this->name.'" value="'.$this->value.'" size="'.$this->size.'" '.$this->propiedades.' type="'.$this->type.'">';
 		     		}
 		     		if($this->boton != null)
					{
 		     			$this->boton->generar_boton();
 		     		}
 		     	}
 		     	else
 		     	{
 		     		$this->general_select($connection, $comando, $value);
 		     	}
		      echo'	</td>
		      	</tr>';
      }
      else
      {
      	echo '<tr class="'.$this->class.'">
      	<td height="'.$this->altura.'" width="'.$this->largo1.'">&nbsp;
      	</td>
      	<td width="'.$this->largo2.'">&nbsp;
     		</td>
      	</tr>';
      }
	}
}

class grid
{
	var $columnas;
	var $tabla;
	var $orden;
	var $condiciones;
	var $encabezado;
	var $acciones;
	var $conexion;
	
	function __construct($conexion,$columnas,$tabla,$encabezado,$acciones,$condiciones="",$orden="")
	{
		$this->conexion=$conexion;
		$this->columnas=$columnas;
		$this->tabla=$tabla;
		$this->condiciones=$condiciones;
		$this->orden=$orden;
		$this->encabezado=$encabezado;
		$this->acciones=$acciones;
	}
	function generar_grid()
	{
		$tam = tamanio($this->encabezado);		
		$sql = "SELECT ".$this->columnas." FROM ".$this->tabla;
		if($this->condiciones != "")
		{
			$sql = $sql." WHERE ".$this->condiciones;
		}
		if($this->orden != "")
		{
			$sql = $sql." ORDER BY ".$this->orden;
		}
		$res_query = pg_query($this->conexion,$sql);
		//echo $sql;
		echo "<tr>";
			$i=0;
			while($i < $tam)
			{
				echo "<td>";
				echo '<font size="2" color="#FF0000"><b>'.$this->encabezado[$i].'</b></font>';
				echo "</td>";
				$i++;
			}
			echo '<td><font size="2" color="#FF0000"><b>Acciones</b></font></td>';
			echo "</tr>";
		while($resultados = pg_fetch_row($res_query))
		{
			echo "<tr>";
			$i=0;
			while($i < $tam)
			{
				echo "<td>";
				echo $resultados[$i];
				echo "</td>";
				$i++;
			}
			$tam_bot=tamanio($this->acciones);
			$j=0;
			echo '<td align="left"><div align="center">';
			while($j<$tam_bot)
			{
				$this->acciones[$j]->generar_boton($resultados[0]);
				$j++;
			}
			echo "</td></div>";
			echo "</tr>";
		}
	}
}
///*********************************************************
class grid1
{
	var $columnas;
	var $tabla;
	var $orden;
	var $condiciones;
	var $encabezado;
	var $acciones;
	var $conexion;
	
	function __construct($conexion,$columnas,$tabla,$encabezado,$acciones,$condiciones="",$orden="")
	{
		$this->conexion=$conexion;
		$this->columnas=$columnas;
		$this->tabla=$tabla;
		$this->condiciones=$condiciones;
		$this->orden=$orden;
		$this->encabezado=$encabezado;
		$this->acciones=$acciones;
	}
	function generar_grid()
	{
		$tam = tamanio($this->encabezado);		
		$sql = "SELECT ".$this->columnas." FROM ".$this->tabla;
		if($this->condiciones != "")
		{
			$sql = $sql." WHERE ".$this->condiciones;
		}
		if($this->orden != "")
		{
			$sql = $sql." ORDER BY ".$this->orden;
		}
		$res_query = pg_query($this->conexion,$sql);
		//echo $sql;
		echo "<tr>";
			$i=0;
			while($i < $tam)
			{
				echo "<td>";
				echo '<font size="2" color="#FF0000"><b>'.$this->encabezado[$i].'</b></font>';
				echo "</td>";
				$i++;
			}
//			echo '<td><font size="2" color="#FF0000"><b>Acciones</b></font></td>';
			echo "</tr>";
		while($resultados = pg_fetch_row($res_query))
		{
			echo "<tr>";
			$i=0;
			while($i < $tam)
			{
				echo "<td>";
				echo $resultados[$i];
				echo "</td>";
				$i++;
			}
			$tam_bot=tamanio($this->acciones);
			$j=0;
			echo '<td align="left"><div align="center">';
			while($j<$tam_bot)
			{
				$this->acciones[$j]->generar_boton($resultados[0]);
				$j++;
			}
			echo "</td></div>";
			echo "</tr>";
		}
	}
}
///*********************************************************

class marco
{
	var $propiedades;
	var $colspan;
	var $class_titulo;
	var $titulo;
	function add_grid($obj_grid)
	{
		$obj_grid->generar_grid();
	}
	function generar_botones($control)
	{
		echo '<tr align="center">
 		     	<td height="'.$control[0]->altura.'">
		      	<div align="'.$control[0]->alineacion_label.'">
		      	'.$control[0]->label.'
 		     	</div>
		      	</td>
		      	<td>';
		foreach ($control as $valor) 
		{ 
	     		echo '<'.$valor->tipo.' name="'.$valor->name.'" value="'.$valor->value.'" '.$valor->propiedades.' type="'.$valor->type.'">&nbsp;&nbsp;';
		}
      echo'	</td>
		      	</tr>';
	}
	function add_control($control,$connection="",$comando="",$value=0)
	{
      $control->generar_control($connection,$comando,$value);
	}
	function add_control_fecha($control)
	{
      $control->generar_fecha();
	}
	function set_propiedades($propiedades)
	{
		$this->propiedades=$propiedades;
	}
	function set_colspan($colspan)
	{
		$this->colspan=$colspan;
	}
	function set_class_titulo($class_titulo)
	{
		$this->class_titulo=$class_titulo;
	}
	function set_titulo($titulo)
	{
		$this->titulo=$titulo;
	}
	function generar_controles()
	{
		foreach ($this->controles as $control) {
   			$control->generar_control();
		} 
	}
	function abrir_marco()
	{
		echo '<table '.$this->propiedades.'>
		<tbody>
		<tr>
      <td colspan="'.$this->colspan.'" class="'.$this->class_titulo.'">
      '.$this->titulo.'
      </td>
      </tr>';
	}
	function cerrar_marco()
	{
		echo '</tbody>
	  </table>';
	}
}
?>