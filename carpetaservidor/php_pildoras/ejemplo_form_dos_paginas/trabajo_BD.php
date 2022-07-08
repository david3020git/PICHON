<?php
require_once("conexcion_bd_php.php");
$db_connection = mysqli_connect($db_hots, $db_user, $db_password);
if (mysqli_connect_errno())
{
    echo "fallo al conectar con la base de datos";
    exit();
}
mysqli_select_db($db_connection, $db_name) or die("no se encuentra la base de datos");
mysqli_set_charset($db_connection, "utf8");
$consulta ="select * from hoja1";
$resultados = mysqli_query($db_connection, $consulta);
//$fila = mysqli_fetch_row($resultados);
while($fila=mysqli_fetch_array($resultados, MYSQLI_ASSOC))
{
    echo $fila['FECHA']. " ";
    echo $fila['VISITANTE']." ";
   
    
    echo "<br>";
}
mysqli_close($db_connection);
?>