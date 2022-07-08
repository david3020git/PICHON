<?php
// ejemplo con operador ternario
if (isset($_POST["enviado"]))
{
    $contra = $_POST["contra"];
    $nombre = $_POST["nombre_usuario"];
    /* ejemplo con if 
    if ($edad<18)
    {
        echo "Eres menosr de edad no tienes acceso";
    }else
    {
        echo "Eres mayor de edad. Puedes acceder";
    }*/
    $resultado = $nombre=="juan" && $contra =="1234" ? "Puedes acceder" : " No Puedes acceder";

    echo $resultado;

}   


?>