<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Programacion orientada a objetos</title>
</head>
<body>
<?php

class Coche
{
    var $ruedas;
    var $color;
    var $motor;

    //construc es el contructor del programa 

    function __construct()
   
    {
        $this->ruedas = 4;

        $this->color="";

        $this->motor="1600";

    } 

    function arrancar()
    {
        echo "Estoy arrancando<br/>";

    }
    function girar()
    {
        echo "Estoy girando<br/>";
    }
    function frenar()
    {
        echo "estoy frenando<br/>";
    }

}

$renault = new Coche(); //estado inicial del obejtos el new llama al constructor 
$mazda = new Coche();
$seat = new Coche();

$mazda->frenar();

echo $mazda->ruedas;

?>

</body>
</html>