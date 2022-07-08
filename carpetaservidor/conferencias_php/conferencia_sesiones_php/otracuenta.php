<?php 
session_start();

echo "desde que entraste has visto ".$_SESSION["cuantas paginas"]."paginas";

?>
<br>
<a href="index.php">volver</a>
<a href="salir.php">salir</a>