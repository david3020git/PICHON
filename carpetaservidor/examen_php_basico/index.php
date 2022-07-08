<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio examen php básico</title>
</head>
<body>
    <?php 
    /* Debemos crear una función que,
        recibiendo un número entero y mayor que 0, 
        convierta cada número en su correspondiente con letras, 
        es decir, 3523 lo debe mostrar como «tres cinco dos tres».
        Antes de escribir el código debemos explicar
        cómo lo haríamos.*/
    //funcion separar($num_entero)->num_separado
    
        
   /* require 'vendor/autoload.php';
    use Luecano\NumeroALetras\NumeroALetras;

    $formatter = new NumeroALetras();
    echo $formatter->toWords(213);*/
    /* convertir el entero a array para acceder por el indice y compararlo con un array que contenga todos los valores posibles 
    */
    function transformar_numeros_letras($numero)
    {
        $convert_str = strval($numero);
        for ($i=0;$i< strlen($convert_str);$i++)
        {
        $convert_str[$i];
            
        if ($convert_str[0] == $convert_str[$i])
        {
            echo "dos";
        }elseif($convert_str[1]== $convert_str[$i])
        {
            echo "uno";
        }elseif($convert_str[2]== $convert_str[$i])
        {
            echo "tres";
        }else
        {
            echo "el programa llega hasta aqui";
        }

    }


    }
    //echo transformar_numeros_letras(213); 
    /*--------------------------------------------------------------------------*/
    function transformar_numeros_letras2($numero)
    {
        $convert_str = strval($numero);
        for ($i = 0; $i < strlen($convert_str); $i++)
        {
            switch($convert_str[$i])
            {
                case 1:
                    echo "uno";
                break;
                case 2:
                    echo "dos";
            }
           
        }

     

    }


   
    echo transformar_numeros_letras2(213);
    
    
   // $cadena="213";
    
 /*for($i=0;$i<$cadena;$i++)
    {
       2 echo $cadena[0].'<br>';
       1 echo $cadena[1].'<br>';
       3 echo $cadena[2].'<br>';
        break;
    } 
    */

    /*$cadena="214";
    $contador = 0;
    for ($i=0;$i< strlen($cadena);$i++)
    {
        $cadena[$i];
            
        if ($cadena[0] == $cadena[$i])
        {
            echo "dos";
        }elseif($cadena[1]== $cadena[$i])
        {
            echo "uno";
        }elseif($cadena[2]== $cadena[$i])
        {
            echo "tres";
        }else
        {
            echo "el programa llega hasta aqui";
        }

    }   */
    
       
        
    

   
    ?>
</body>
</html>