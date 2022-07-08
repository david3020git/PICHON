<?php

class MvcController {

     //bloque que controla el programa en dos bloques
     
        //Primer bloque llamada a la plantilla
        //----------------------------------------------
        public function plantilla(){
           // include sirve para invocar el achivo que contienecofigo html
            require_once ("C:\xampp\htdocs\php\carpetaservidor\apuntesphp\MVC\views\template.php");
        }

        //Segundo bloque Interación con el usuario
        //--------------------------------------------
        public function enlacesPaginasController(){
            if ($_GET) {
                $enlaces = $_GET["action"];
                echo $enlaces;
            }
        }
    }
?>

