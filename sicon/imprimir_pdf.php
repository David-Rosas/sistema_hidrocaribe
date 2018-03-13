<?php
require("aut_verifica.inc.php");
require("funciones.php");
//$nivel_acceso=4; // Nivel de acceso para esta página.
// se chequea si el usuario tiene un nivel inferior
// al del nivel de acceso definido para esta página.
// Si no es correcto, se mada a la página que lo llamo con
// la variable de $error_login definida con el nº de error segun el array de
// aut_mensaje_error.inc.php
/*if ($nivel_acceso < $_SESSION['usuario_nivel']){
echo "<script language='javascript' type='text/javascript'>
alert('Acceso no autorizado')
location.href = '../../../controlGestion.php'
</script>";
exit;
}*/
require_once('ezpdf/class.ezpdf.php');

//Caracteristicas del documentos
$pdf =& new Cezpdf('letter');

$pdf->selectFont('ezpdf/fonts/Times-Roman.afm');
$pdf->ezSetCmMargins(1,1,1.5,1.5);


//Sacar los datos de la Base de Datos

$conexion = pg_connect("host=$sql_host port=$puerto dbname=$sql_db user=$sql_usuario password=$sql_pass") or die("No se realiz&oacute la conexi&oacute;n") or die(pg_last_error());
//,oac.cod_municipio,oac.bd,oac.buzon,oac.clave_buzon,oac.usu_internet,oac.clave_internet,oac.direccion,oac.tlf
/*
$sql = "select o.codigo_ofi,o.descripcion_ofi,s.nombre_suc,oac.n_oficina
		from oficina as o,departamento as d,sucursal as s,oficina_oac as oac
		where o.codigo_dep=d.codigo_dep and s.codigo_suc=d.codigo_suc
			and oac.codigo_ofi=o.codigo_ofi and o.eliminado=0
		order by s.nombre_suc";
*/

//Recibe variables $_GET
$consulta = $_GET['consulta'];
$tecnico = $_SESSION['usuario_id'];
$filtro1 = $_GET['filtro1'];
$filtro2 = $_GET['filtro2'];
$filtro3 = $_GET['filtro3'];
$filtro4 = $_GET['filtro4'];
$filtro5 = $_GET['filtro5'];
$sucu = $_GET['sucursal'];


//sql de usuarios
$v0 = "select nombre_usu,apellido_usu,descripcion_ofi,nombre_dep,codigo_usu 
from usuario,oficina,acceso,departamento as D,sucursal as S,personal_tec as P 
where acceso.id=usuario.codigo_usu and acceso.eliminado=0 and oficina.codigo_dep=D.codigo_dep 
and oficina.codigo_ofi = usuario.codigo_ofi and S.codigo_suc = P.codigo_suc 
and D.codigo_suc = S.codigo_suc and P.codigo_tec = '$tecnico'
and nombre_usu ilike '%$filtro1%' and apellido_usu ilike '%$filtro2%'
and descripcion_ofi ilike '%$filtro3%' and nombre_dep ilike '%$filtro4%'
order by(descripcion_ofi)";

//sql de problemas de nivel 1
$v1 = "select codigo_cat,categoria,problema.tipo,descripcion_cat
from categoria_prob,problema
where categoria_prob.eliminado=0 and categoria_prob.tipo=codigo_prob
and codigo_cat ilike '%$filtro1%' and categoria ilike '%$filtro2%'
and codigo_prob ilike '%$filtro3%' and descripcion_cat ilike '%$filtro4%'
order by(codigo_cat)";

//sql de Oficinas
$v2 = "select o.codigo_ofi,o.descripcion_ofi,d.nombre_dep,s.nombre_suc
from oficina as o,sucursal as s,departamento as d,personal_tec as P
where o.codigo_dep=d.codigo_dep and s.codigo_suc=d.codigo_suc and o.eliminado=0
and P.codigo_tec = '$tecnico' and P.codigo_suc = s.codigo_suc
and o.codigo_ofi ilike '%$filtro1%' and o.descripcion_ofi ilike '%$filtro2%'
and d.nombre_dep ilike '%$filtro3%'
order by(d.nombre_dep)";

//sql de personal tecnico
$v3 = "select cedula_tec,nombre_tec,apellido_tec,nombre_suc 
from personal_tec,sucursal,acceso
where acceso.id=personal_tec.codigo_tec and acceso.eliminado=0 and sucursal.codigo_suc = personal_tec.codigo_suc 
order by(nombre_suc)";

//sql de Problemas de nivel 0
$v4 = "select codigo_prob,tipo
from problema
where eliminado=0 and tipo ilike '%$prob%'
order by(codigo_prob)";

//sql de unidades de negocio
$v5 = "select codigo_suc,nombre_suc,descripcion_suc from sucursal where eliminado=0";

//sql de Gerencias o Superintendencias
$v6 = "select codigo_dep,nombre_dep,descripcion_dep,nombre_suc
from sucursal as s,departamento as d,personal_tec as P
where s.codigo_suc=d.codigo_suc
and P.codigo_tec = '$tecnico' and P.codigo_suc = s.codigo_suc and d.eliminado=0
order by(d.nombre_dep)";

//sql de equipos
$v7 = "select codigo_equ,nombre_equ,descripcion_equ,usuario.nombre_usu||' '||usuario.apellido_usu
from equipo,usuario,sucursal as S,oficina as O,departamento as D,personal_tec as P
where equipo.eliminado=0 and usuario.codigo_usu=equipo.codigo_usu and S.codigo_suc=P.codigo_suc
and S.codigo_suc=D.codigo_suc and D.codigo_dep=O.codigo_dep and usuario.codigo_ofi=O.codigo_ofi
and P.codigo_tec='$tecnico' and codigo_equ ilike '%$filtro1%' and nombre_equ ilike '%$filtro2%' 
and descripcion_equ ilike '%$filtro3%' and (usuario.nombre_usu ilike '%$filtro4%' or usuario.apellido_usu ilike '%$filtro4%')
order by(nombre_equ)";

//sql de Componentes
$v8 = "select c.codigo_com,c.descripcion_com,e.nombre_equ,(u.nombre_usu,u.apellido_usu)
from componente as c,equipo as e,usuario as u,oficina as o,departamento as d,sucursal as s,personal_tec as p
where (c.eliminado=0 and c.codigo_equ=e.codigo_equ and e.codigo_usu=u.codigo_usu and u.codigo_ofi=o.codigo_ofi
and o.codigo_dep=d.codigo_dep and d.codigo_suc=s.codigo_suc and p.codigo_suc=s.codigo_suc and
p.codigo_tec='$tecnico')";

//sql de Software
$v9 = "select codigo_sof,descripcion_sof,sistemaoperativook,tipo_lic 
from software
where eliminado = 0 and codigo_sof ilike '%$filtro1%'
and descripcion_sof ilike '%$filtro2%' and sistemaoperativook ilike '%$filtro3%'
and tipo_lic ilike '%$filtro4%'
order by(codigo_sof)";

//sql de Cargo
$v10 = "select codigo_car,nombre_car,descripcion_car
from cargo
where eliminado=0
order by(nombre_car)";

//sql de Proyectos
$v11 = "select codigo_proy,titulo_proy,descripcion_proy,nombre_suc
from sucursal,proyecto
where sucursal.codigo_suc=proyecto.codigo_suc and proyecto.eliminado=0
order by(nombre_suc)";

//sql de Proveedores
$v12 = "select rif_pro,nombre_pro,direccion_pro,telefono_pro
from proveedor 
where eliminado = 0
order by(nombre_pro)";

$v13 = "select descripcion_ofi,nombre_equ,codigo_equ,usuario.nombre_usu,usuario.apellido_usu,procesador,memoria,dd,descripcion_equ
			from equipo,usuario,sucursal as S,oficina as O,departamento as D,personal_tec as P
			where equipo.eliminado=0 and usuario.codigo_usu=equipo.codigo_usu and S.codigo_suc=P.codigo_suc
			and S.codigo_suc=D.codigo_suc and D.codigo_dep=O.codigo_dep and usuario.codigo_ofi=O.codigo_ofi
			and P.codigo_tec='$tecnico'
			order by descripcion_ofi,descripcion_equ";

$v14 = "select descripcion_ofi,nombre_equ,codigo_equ,usuario.nombre_usu,usuario.apellido_usu,procesador,memoria,dd,descripcion_equ
			from equipo,usuario,sucursal as S,oficina as O,departamento as D
			where equipo.eliminado=0 and usuario.codigo_usu=equipo.codigo_usu and S.codigo_suc=D.codigo_suc 
			and D.codigo_dep=O.codigo_dep and usuario.codigo_ofi=O.codigo_ofi
			and nombre_suc ilike '%$sucu%'
			order by nombre_suc,descripcion_ofi,descripcion_equ";
			
$v15 = "select descripcion_ofi,nombre_equ,equipo.codigo_equ,usuario.nombre_usu,usuario.apellido_usu,procesador,memoria,dd,descripcion_equ,pr.nombre_pro,descripcion_equ,en.motivo_salida,en.fecha_ini,en.hora_ini
			from equipo,usuario,sucursal as S,oficina as O,departamento as D,personal_tec as P,entrega as en,proveedor as pr
			where equipo.eliminado=0 and usuario.codigo_usu=equipo.codigo_usu and S.codigo_suc=P.codigo_suc
			and S.codigo_suc=D.codigo_suc and D.codigo_dep=O.codigo_dep and usuario.codigo_ofi=O.codigo_ofi
			and P.codigo_tec='$tecnico' and en.rif_pro=pr.rif_pro
			and en.codigo_equ=equipo.codigo_equ
			order by descripcion_ofi,descripcion_equ";
			
$v16 = "select descripcion_ofi,nombre_equ,equipo.codigo_equ,usuario.nombre_usu,usuario.apellido_usu,procesador,memoria,dd,descripcion_equ,p.nombre_pro,descripcion_equ,en.motivo_salida,en.fecha_ini,en.hora_ini
			from equipo,usuario,sucursal as S,oficina as O,departamento as D,entrega as en,proveedor as p
			where equipo.eliminado=0 and usuario.codigo_usu=equipo.codigo_usu and S.codigo_suc=D.codigo_suc 
			and D.codigo_dep=O.codigo_dep and usuario.codigo_ofi=O.codigo_ofi and en.rif_pro=p.rif_pro
			and en.codigo_equ=equipo.codigo_equ
			and nombre_suc ilike '%$sucu%'
			order by nombre_suc,descripcion_ofi,descripcion_equ";
						
						
			
$sql = array($v0,$v1,$v2,$v3,$v4,$v5,$v6,$v7,$v8,$v9,$v10,$v11,$v12,$v13,$v14,$v15,$v16);
$tam = array(4,3,3,3,1,2,3,3,3,3,2,3,3,3,3,3,3);	
$titulo = array(
array('<b>Nombre</b>','<b>Apellido</b>',utf8_decode('<b>Coordinación o Jefatura</b>'),'<b>Gerencia o Superintendencia</b>'),
array(utf8_decode('<b>Código</b>'),'<b>Categoria</b>','<b>Tipo de Problema</b>',utf8_decode('<b>Descripción</b>')),
array(utf8_decode('<b>Código</b>'),utf8_decode('<b>Descripción</b>'),'<b>Gerencia o Superintendencia</b>','<b>Unidad de Negocios</b>'),
array(utf8_decode('<b>Cédula</b>'),'<b>Nombre</b>','<b>Apellido</b>','<b>Unidad de Negocios</b>'),
array(utf8_decode('<b>Código</b>'),'<b>Tipo de Problema</b>'),
array(utf8_decode('<b>Código</b>'),'<b>Nombre</b>',utf8_decode('<b>Descripción</b>')),
array(utf8_decode('<b>Código</b>'),'<b>Nombre</b>',utf8_decode('<b>Descripción</b>'),'<b>Unidad de Negocios</b>'),
array(utf8_decode('<b>Código</b>'),'<b>Marca/Modelo</b>',utf8_decode('<b>Descripción</b>'),'<b>Responsable</b>'),
array(utf8_decode('<b>Código</b>'),utf8_decode('<b>Descripción</b>'),'<b>Equipo</b>','<b>Responsable</b>'),
array(utf8_decode('<b>Código</b>'),utf8_decode('<b>Descripción</b>'),'<b>S.O.?</b>','<b>Licencia</b>'),
array(utf8_decode('<b>Código</b>'),'<b>Nombre</b>',utf8_decode('<b>Descripción</b>')),
array(utf8_decode('<b>Código</b>'),utf8_decode('<b>Título</b>'),utf8_decode('<b>Descripción</b>'),'<b>Unidad de Negocios</b>'),
array('<b>RIF</b>','<b>Nombre</b>',utf8_decode('<b>Dirección</b>'),utf8_decode('<b>Teléfono</b>')),
array('<b>Hardware</b>','<b>Software</b>',utf8_decode('<b>Responsable</b>'),utf8_decode('<b>Ubicación</b>')),
array('<b>Hardware</b>','<b>Software</b>',utf8_decode('<b>Responsable</b>'),utf8_decode('<b>Ubicación</b>')),
array('<b>Hardware</b>','<b>Datos de Salida</b>',utf8_decode('<b>Proveedor</b>'),utf8_decode('<b>Motivo de Salida</b>')),
array('<b>Hardware</b>','<b>Datos de Salida</b>',utf8_decode('<b>Proveedor</b>'),utf8_decode('<b>Motivo de Salida</b>'))
);	
$subtitulo = array(
utf8_decode("<b>Gerencia de Área Tecnología de Información")."</b>\n"."SIGECAH - Listado de Usuarios \n",
utf8_decode("<b>Gerencia de Área Tecnología de Información")."</b>\n"."SIGECAH - Listado de Problemas Categorizados\n",
utf8_decode("<b>Gerencia de Área Tecnología de Información")."</b>\n"."SIGECAH - Listado de Oficinas\n",
utf8_decode("<b>Gerencia de Área Tecnología de Información")."</b>\n".utf8_decode("SIGECAH - Listado de Personal Técnico\n"),
utf8_decode("<b>Gerencia de Área Tecnología de Información")."</b>\n"."SIGECAH - Listado de Problemas de Nivel 0\n",
utf8_decode("<b>Gerencia de Área Tecnología de Información")."</b>\n"."SIGECAH - Listado de Unidades de Negocios\n",
utf8_decode("<b>Gerencia de Área Tecnología de Información")."</b>\n"."SIGECAH - Listado de Gerenicas o Superintendencias\n",
utf8_decode("<b>Gerencia de Área Tecnología de Información")."</b>\n"."SIGECAH - Listado de Equipos\n",
utf8_decode("<b>Gerencia de Área Tecnología de Información")."</b>\n"."SIGECAH - Listado de Componentes\n",
utf8_decode("<b>Gerencia de Área Tecnología de Información")."</b>\n"."SIGECAH - Listado de Software\n",
utf8_decode("<b>Gerencia de Área Tecnología de Información")."</b>\n"."SIGECAH - Listado de Cargos\n",
utf8_decode("<b>Gerencia de Área Tecnología de Información")."</b>\n"."SIGECAH - Listado de Proyectos\n",
utf8_decode("<b>Gerencia de Área Tecnología de Información")."</b>\n"."SIGECAH - Listado de Proveedores\n",
utf8_decode("<b>Gerencia de Área Tecnología de Información")."</b>\n"."SIGECAH - Listado de Equipos y Software ($sucu)\n",
utf8_decode("<b>Gerencia de Área Tecnología de Información")."</b>\n"."SIGECAH - Listado de Equipos y Software ($sucu)\n",
utf8_decode("<b>Gerencia de Área Tecnología de Información")."</b>\n"."SIGECAH - Listado de Salidas de Equipos a Proveedores ($sucu)\n",
utf8_decode("<b>Gerencia de Área Tecnología de Información")."</b>\n"."SIGECAH - Listado de Salidas de Equipos a Proveedores ($sucu)\n"
);
 
//echo $sql[$consulta];
$respuesta = pg_query($conexion,$sql[$consulta]) or die(pg_last_error());



//llenar los datos del informe
    //  $ixx = 0;
      
while($resultados = pg_fetch_row($respuesta)) 
{
	$i = 0;
   while($i <= $tam[$consulta])
   {
   	if($consulta == 9 and $i == 2)
   	{
   		if($resultados[$i] == 1)
   			$resultados[$i] = "Si";
   		else
   			$resultados[$i] = "No";
   	}
   	if($consulta == 9 and $i == 3)
   	{
   		if($resultados[$i] == 1)
   			$resultados[$i] = "Privativa";
   		else
   			$resultados[$i] = "Libre";
   	}   	
   	if($consulta != 9)
   	{
   	  		$resultados[$i] = utf8_decode($resultados[$i]); 	
   	}
   	//$titulo[$consulta][$i] = utf8_decode($titulo[$consulta][$i]);
   	
   	//echo $resultados[$i];
   	//echo "*  *=> * $i *";
   	$i++;
   }
   //echo "<br>";
   if($consulta == 15 or $consulta == 16)
	{
		$temp = array();
		$temp = $resultados;
		$hard = "";
		$hardware = array();
		//$hardware = devuelveValor($conexion,"select descripcion_com from componente where codigo_equ=".$temp[2]);
		//$software = devuelveValor($conexion,"select descripcion_sof from software as S,tiene_instalado as I where I.codigo_sof=S.codigo_sof and I.codigo_equ=".$temp[2]);
		$hard = $temp[1]."\n".$temp[5]."\n".$temp[6]."\n".$temp[7]."\n".$temp[8];
		$resultado= pg_query($conexion,"select descripcion_com from componente where codigo_equ=".$temp[2]);
		while($resultados = pg_fetch_row($resultado))
		{
			 $hard = $hard."\n".$resultados[0];
		}
		$columna2 = "Fecha: ".$temp[12]."\nHora: ".$temp[13];
		$data[] = array(utf8_decode($hard),utf8_decode($columna2),utf8_decode($temp[9]),utf8_decode($temp[11]));
	}
	else if($consulta == 13 or $consulta == 14)
	{
		$temp = array();
		$temp = $resultados;
		$hard = "";
		$soft = "";
		$hardware = array();
		$software = array();
		//$hardware = devuelveValor($conexion,"select descripcion_com from componente where codigo_equ=".$temp[2]);
		//$software = devuelveValor($conexion,"select descripcion_sof from software as S,tiene_instalado as I where I.codigo_sof=S.codigo_sof and I.codigo_equ=".$temp[2]);
		$hard = $temp[1]."\n".$temp[5]."\n".$temp[6]."\n".$temp[7]."\n".$temp[8];
		$resultado= pg_query($conexion,"select descripcion_com from componente where codigo_equ=".$temp[2]);
		while($resultados = pg_fetch_row($resultado))
		{
			 $hard = $hard."\n".$resultados[0];
		}
		$resultado= pg_query($conexion,"select descripcion_sof from software as S,tiene_instalado as I where I.codigo_sof=S.codigo_sof and I.codigo_equ=".$temp[2]);
		while($resultados = pg_fetch_row($resultado))
		{
				 $soft = $soft.$resultados[0]."\n";
		}
		$data[] = array($hard,$soft,$temp[3]." ".$temp[4],$temp[0]);
	}	 
	else
	   $data[] = $resultados; 
}


// $data = array (array (14,"OAC Araya","Corporativa",69),array (19,"OAC Cumanacoa","Sucre",72));
//$titles = array('<b>Codigo</b>','<b>Nombre</b>','<b>Sucursal</b>','<b>Numero de Oficina</b>');


$titles = $titulo[$consulta];

$datacreator = array (
                    'Title'=>$subtitulo[$consulta],
                    'Author'=>'Misael Ferrer - Arapito',
                    'Subject'=>'Listado de Definiciones',
                    'Creator'=>'misael_ferrer@yahoo.com',
                    'Producer'=>'http://200.90.27.161/sigecah'
                    );
$pdf->addInfo($datacreator);

$options = array('shadeCol'=>array(0.9,0.9,0.9),'xOrientation'=>'center','width'=>500);

      //$txttit = "<b>SIGECAH - Oficinas Comerciales</b>\n";
      //$txttit.= "Reporte de Oficinas Comerciales \n";
      $pdf->ezImage("img/logo_hc.jpg", 0, 55, 'none', 'left');
		$pdf->ezText(utf8_decode("<b>C.A. Hidrológica del Caribe</b>"), 14);
      $pdf->ezText($subtitulo[$consulta], 12);
      $pdf->ezTable($data, $titles, '', $options);
      $pdf->ezText("\n\n\n", 10);
      //$pdf->ezNewPage();
      $pdf->ezText("<b>Fecha:</b> ".date("d/m/Y"), 10);
      $pdf->ezText("<b>Hora:</b> ".date("H:i:s")."\n\n", 10);
      $pdf->ezStream();
      //print_r($software);
      //echo "<br>";
     // print_r($titles);
?>