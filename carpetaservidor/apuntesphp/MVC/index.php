<?php
// la pagina index es para la salida de las vistas al usuario  y tambien atravez de el 
// enviaremos las distintas acciones que el usuario envie al controlador

// el require es una forma de importar archivos a nuestros programas con el once se obliga que se importe solo una vez 
require_once ("C:\xampp\htdocs\php\carpetaservidor\apuntesphp\MVC\controllers\controller.php");

$mvc = new MvcController();
$mvc -> plantilla();

?>