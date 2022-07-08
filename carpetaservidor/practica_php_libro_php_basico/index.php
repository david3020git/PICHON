<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica php basico apuntes php basico</title>
</head>
<body>
    <?php 
    /*  
    Realiza una página web que muestre 
    los datos de los alumnos con su nota media.
    Se debe crear el array asociado con 
    los nombres de los alumnos y sus correspondientes notas,
    al menos se deben crear 8. 
    Se supone que las notas tienen un valor entre 0 a 10, 
    ambos inclusive.
        Mostrar los siguientes arrays:
        • Mostrar nombre y nota ordenado alfabéticamente por la nota.
        • Mostrar nombre, nota y, en función de la nota, «No Superado» 
        si es menor que 5, «Superado» si es entre 5 y 6,
        «Bien» entre 6 y 7, «Notable» entre 7 y 9 y 
        «Sobresaliente» entre 9 y 10. Ordenado de mayor a menor.
    • Crear un array y mostrar nombre y nota de los aprobados.
    • Crear un array y mostrar nombre y nota de los suspensos.
        */
    // definir alumnos y notas
    $arr_alum = ['juan'=>3, 'maria'=>6, 'lucas'=>8, 'pedro'=>4, 'marcos'=>7, 'marta'=>8, 'paco'=>8, 'david'=>9];
    // swist para convertir nota en texto
    
    // mostrar alumnos por medio de una funtion
    function mostrar(){

    }
    
    Ksort($arr_alum);// ordena por clave
    //asort($arr_orden_clave);// ordena por los valores
    foreach( $arr_alum as $clave=>$valor)
     {  
         echo "la CLAVE $clave esta asosiada al  VALOR $valor <br/>";

     }
    

    //mostrar arrays nombre, nota ordenado alfabeticamente por la nota
    //$arr_orden_nota = asort($arr_alum);
    //echo $arr_orden_nota;
    // mostrar aprobados y suspensos
    
    
    ?>
    
</body>
</html>