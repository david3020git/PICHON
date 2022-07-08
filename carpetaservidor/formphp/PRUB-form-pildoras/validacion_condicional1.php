<?php

if (isset($_POST["enviando"]));
{
    $edad = $_POST["edad_usuario"];
    $nombre = $_POST["nombre_usuario"];

        switch (true) {
            case $edad<=18:
                echo "eres menor de edad";
                break;
            case $edad <=40:
                echo "Eres joven";  
                break;
            case $$edad<=65:
                echo "Eres maduro";
                
                break;
            default:
                echo "usuario no definido";
                
        }

 /*   if($edad <= 18)
    {
        echo "Eres menor de edad ";
    }else if ($edad <=40)
    {
        echo "Eres joven";
    }else if($edad<=65)
    {   
        echo "Eres maduro";
    }else
    {
        echo "cuídate";
    }
*/
}

?>