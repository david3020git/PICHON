<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>examen pregunta 6</title>
    <link type="text/css" href="index.css" rel="stylesheet">
</head>
<body>
    
    <?php
     /* Debemos crear una función que,
        recibiendo un número entero y mayor que 0, 
        convierta cada número en su correspondiente con letras, 
        es decir, 3523 lo debe mostrar como «tres cinco dos tres».
        Antes de escribir el código debemos explicar
        cómo lo haríamos.*/
        //-------------------------------------------//
        
        /*  Par desarrollar el código lo primero que genero es una función “transformar_numeros_letras”,
         a la cual le voy a pasar como único parámetro “$numero”.
        Dentro de la función desarrollo el código al completo para ello;
        creo una variable “$lista_valores”, que es un array vacío en el que voy a guardar posteriormente los resultados
        que quiero visualizar.
        A continuación, voy a necesitar que la variable “$numero” cuyo valor es un “int” sea convertida a un “str” y
        asi poder hacer un bucle por sus índices.
        Uso la función “strval” y le paso “$numero” así ya tenemos que el valor de la variable “$numero” es de tipo “str”.
        Lo siguiente es hacer un bucle para recorrer la variable “$convert_str” 
        ya que quiero que el bucle se haga no por los valores sino por los índices necesito la función “strlen” que da la longitud y 
        con ello el bucle se haría solo 3 veces la misma cantidad de índices.
        En las siguientes líneas de código voy aplicar una condición para cada iteración y
        que se guarde este valor en el array vacío que tenemos definido anteriormente “$lista_valores”.
        Para finalizar el código creo una variable “$resultado” la cual me va a servir para poder visualizar
        el resultado mediante una operación. Esta operación es usar el medoto implode al cual se le pasa
        un array y un separador y nos muestra el resultado como un string. 
        Hago uso de este método y le paso el separado como una cadena vacía y así obtengo el resultado
        que quiero el cual lo voy a devolver en el “return”.
        Visualizo el “return” dentro de una etiqueta “p” de html y le concateno la variable “$resultado”.
        La ultima línea de código es en la cual mediante “echo” veo en pantalla el
        resultado de llamar a la función “transformar_numeros_letras” pasándole como parámetro el int 213


        */

        //<<tres cinco dos tres>>
        function transformar($numero)
        {
            $lista_valores = [];
            $convert_str = strval($numero);
            $array_num = ["uno"=>1, "dos"=>2, "tres"=>3, "cuatro"=>4];
            foreach ($array_num as $array_valores)
            {
                for ($i = 0; $i < strlen($convert_str); $i++)
                {
                    if ($encontrar_valor = is_array($convert_str[0], $array_valores))
                    {
                        $lista_valores = $encontrar_valor;
                    }
                    elseif ($convert_str[1]== $array_valores)
                    {
                        $lista_valores;
                    }
                }
            }
            $resultado = implode(" ", $lista_valores);
            echo $resultado;
            return $resultado;
       /*     for ($i=0;$i< strlen($convert_str);$i++)
            {
                //$convert_str[$i];
                    
                if ($convert_str[0] == $convert_str[$i])
                {
                    $lista_valores[0] = "<< dos ";
                } elseif ($convert_str[1]== $convert_str[$i])
                {
                    $lista_valores[1]=  " uno";
                } elseif ($convert_str[2]== $convert_str[$i])
                {
                    $lista_valores[2] = " tres >>";
                } else
                {
                    echo "el programa llega hasta aqui";
                }
            }$resultado = implode(" ", $lista_valores);
            return "El resultado es: ".'<p>'. $resultado.'</p>';*/
        }
        $numero = 323;
        echo transformar($numero);
        
        
       /* function transformar_numeros_letras($numero)
        {
            $lista_valores = [];
            $convert_str = strval($numero);
            for ($i=0;$i< strlen($convert_str);$i++)
            {
                //$convert_str[$i];
                    
                if ($convert_str[0] == $convert_str[$i])
                {
                    $lista_valores[0] = "<< dos ";
                } elseif ($convert_str[1]== $convert_str[$i])
                {
                    $lista_valores[1]=  " uno";
                } elseif ($convert_str[2]== $convert_str[$i])
                {
                    $lista_valores[2] = " tres >>";
                } else
                {
                    echo "el programa llega hasta aqui";
                }
            }$resultado = implode(" ", $lista_valores);
            return "El resultado es: ".'<p>'. $resultado.'</p>';
        }
    
         echo transformar_numeros_letras(213);   */ 
    ?>
    <div class="grid-contenedor">
       
            <div class="convert_num">Número a convertir 
                <input type="text" class="num" value="213" name="valor_enviado">
            </div>
            
       
    </div>
    
    
</body>
</html>