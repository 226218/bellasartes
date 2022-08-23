<?php
$conexion=mysql_connect("localhost","root","") or die("Problemas en la conexion");
mysql_select_db("sistemaseguimiento",$conexion) or die("Problemas en la seleccion de la base de datos");
$registros=mysql_query("select Nombres,Contrasenha from usuario where DNI=48438728", $conexion) or die("Problemas en
el select".mysql_error());

while ($reg=mysql_fetch_array($registros))
{
echo "<td>";
echo "".$reg['Nombres']."<br>";
echo "</td>";
echo "<td>";
echo "".$reg['Contrasenha']."<br>";
echo "<hr>";
echo "</td>";
echo "<tr>";

}


mysql_close($conexion);
echo "El alumno fue dado de alta.";
?>