<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>prueba examen</title>
</head>
<body>
    <!-- preofe buenas tardes en respuesta a la pregunta de que 
era mejor que el usuario ingresara el número claro es la mejor
opción tenia este codigo en el cual lo intente hacer de esa forma 
pero me ha sido imposible la verdad soy de buscarme la vida
pero si me pudiera guiar un poco para resolver el ejercicios se lo a
agradesco 
Mi idea es enviar el número a convertir en letras por medio 
de un formulario  crear la funcion que lo trate
el problema es cuando quiero comparar los indices del str $covert_str
con el array donde tendria todos los números aqui es donde me pierdo
llevaba varios dias con el ejercicio y por ello lo hice de la otra forma
 si me pudieras guiar por favor ?? -->

    <form action="" method="get">
        
    Introduce el número a convertir: <input type="number" name="numero">
            <input type="submit" name="enviar" value="enviar número">
        
    </form>
    <div class="visualizar_resultado">El resultado es: 
        <input type="text" name="ver_resultado">
    </div>
    <?php

        $numero = $_GET['numero'];
        
        function convertir($numero)
        {
            $conver_str = strval($numero);
            $array = ["uno"=>1, "dos"=>2, "tres"=>3, "cuatro"=>4];
            for($i = 0; $i < strlen($conver_str);$i++)
            {
                if( $encontrar_valor = in_array($conver_str[0], $array))
                {                   
                   foreach ($array as $clave=>$valor)
                   {
                       $encontrar_valor = $clave;
                       echo $encontrar_valor.'<br>';
                   }


                   
                }
                
            }
        }
        convertir(213);

    ?>   
</body>
</html>