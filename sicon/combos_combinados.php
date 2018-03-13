<?php
//***** combos_combinados.php *****//

// CODIGO PHP.
 // Autor: Francisco J. Pedrero Ortega
 // Fecha: 25-05-2000.
 
 $db = @pg_connect("host=localhost user=postgres password=12345 dbname=empresa") or die("No se ha podido conectar...");
?>
<html>
  <head>
...
...
...
    <script language="javascript">
      // Función que rellena el segundo combo según el valor seleccionado en el primero.
      // Se le pasa como parámetro el nombre del formulario desde el cuál se llama a la función,
      // de ésta manera podemos llamarlo desde combos con el mismo nombre en una misma página pero
      // desde distintos formularios.
      function rellenaCombo(formulario)
      {
        with (document.forms[formulario])  // Establecemos por defecto el nombre formulario pasado para toda la función.
        {
          var centro = id_centro[id_centro.selectedIndex].value; // Valor seleccionado en el primer combo.
          var n = id_empleado.length;  // Numero de líneas del segundo combo.
          
          id_empleado.disabled = false;  // Activamos el segundo combo.
          
          for (var i = 0; i < n; ++i)
            id_empleado.remove(id_empleado.options[i]); // Eliminamos todas las líneas del segundo combo.
          
          id_empleado[0] = new Option("", 'null'); // Creamos la primera línea del segundo combo.
          
          if (centro != 'null')  // Si el valor del primer combo es distinto de 'null'.
          {
   <?php
   // CODIGO PHP
    // Para cada centro, construimos el segundo combo con los empleados del mismo.
    $cons_cen = @pg_exec($db, "SELECT * FROM centros;");
    
    for ($l = 0; $l < pg_numrows($cons_cen); ++$l)
    {
     $cen = @pg_fetch_object($cons_cen, $l);
   ?>
            if (centro == '<?php echo $cen->id;?>')
            {
    <?php
    // CODIGO PHP
      // Construimos los valores del segundo combo con los empleados del centro.
      $cons_emp = @pg_exec($db, "SELECT * FROM empleados WHERE id_centros = ".$cen->id." ORDER BY nombre;");
      
      for ($m = 0; $m < pg_numrows($cons_emp); ++$m)
      {
       $emp = @pg_fetch_object($cons_emp, $m);
    ?>
              id_empleado[id_empleado.length] = new Option("<?php echo $emp->nombre;?>", '<?php echo $emp->id;?>');
    <?php
    // CODIGO PHP
      }
    ?>
            }
   <?php
   // CODIGO PHP
    }
   ?>
            id_empleado.focus();  // Enviamos el foco al segundo combo.
          }
          else  // El valor del primer combo es 'null'.
          {
            id_empleado.disabled = true;  // Desactivamos el segundo combo (que estará vacío).
            id_centro.focus();  // Enviamos el foco al primer combo.
          }
          
          id_empleado.selectedIndex = 0;  // Seleccionamos el primer valor del segundo combo ('null').
        }
      }
    </script>
  </head>
  <body>
    <table>
      <tr>
        <td>
        <form name="datos" method="post" action="...">
...
...
...
            <select name="id_centro" onChange="rellenaCombo('datos');">
              <option value="null" selected>Seleccione Centro
<?php
// CODIGO PHP
 // Contruimos el primer combo con los valores de la tabla 'centros'.
 $cons_centros = @pg_exec($db, "SELECT * FROM centros;");
 
 for ($k = 0; $k < pg_numrows($cons_centros); ++$k)
 {
  $centro = @pg_fetch_object($cons_centros, $k);
  echo "              <option value=\"".$centro->id."\">".$centro->nombre."\n";
 }
?>
          </select>
        </td>
        <td>
          <select name="id_empleado" disabled>
            <option value="null">Seleccione Empleado
          </select>
        </td>
        </form>
...
...
...
      </tr>
...
...
...
    </table>
  </body>
</html>