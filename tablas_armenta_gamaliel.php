<!doctype html>
<html lang="es">
<head>
	<title>Tablas de multiplicar</title>
</head>
<link rel="stylesheet" type="text/css" href="tablas_armenta">
<body bgcolor="aquamarine">
<div align="center">
	<p align="center"><h1>Tablas de multiplicar</h1></p>
<?php

echo "<table color=blue border=0 cellspacing=6><tr>";

/* Programa para imprimir las tablas de multiplicar desde la 1 a la 10 */
for($tabla=1; $tabla<=10; $tabla++) //<-un ciclo de 10 (uno para cada tabla)
{
 if($tabla==6) echo "</tr><tr>";
 echo "<td>";
 
     // Encabezado
     echo "<table bgcolor=lightblue border=1 cellspacing=0 cellpadding=2>";
     echo "<tr><th bgcolor=turquoise colspan=5> Tabla del $tabla </th></tr>";
     
     // generamos la tabla 
     for($i=1; $i<=10; $i++) 
     {
       echo "<tr><td bgcolor=pink align=center>$tabla</td>
                 <td align=center>*</td>
                 <td bgcolor=lightgreen align=center>$i</td>
                 <td align=center>=</td>
                 <td bgcolor=violet align=center> ". ($tabla*$i) . "</td>
             </tr>";
     }
     echo "</table> <br/>";
     
  echo "</td>";
}
echo "</tr></table>";

?>
</body>
</div>   
</html>