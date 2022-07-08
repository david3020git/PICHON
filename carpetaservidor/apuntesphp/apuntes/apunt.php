<?php

          // tipos variables
// variable texto
 $palabra = "palabra";
echo "Esto es una variable de texto $palabra<br/>";
var_dump($palabra);
echo "<br/><br/>";
#variable númerica 
$numero = 30;
echo "Esta es una variable numerica $numero";
echo "<br/><br/>";
# variable booleana
$verdadero = true;
echo "Esto es una variable boleana $verdadero<br/>";
var_dump($verdadero);
echo "<br/><br/>";
// variable de arroglo
$colores = array("rojo","amarillo");
echo "Esto es una variable arreglo $colores[0]<br/>";
var_dump($colores);
echo "<br/><br/>";
//variable arreglo con propiedades 
$verduras = array("verduras1"=>"lechuga","verduras2"=>"fresas");
echo "Esto es una variable arreglo con propiedades $verduras[verduras1]";
echo "<br/><br/>";
// variables objetos
$frutas = (object)["fruta1"=>"pera","fruta2"=>"manzana"];
echo "esto es una variable objeto $frutas->fruta1";
//para saber que variable estamos utilizando usamo lo siguiente 
$numero = 30;
echo "Esta es una variable numerica $numero<br/>";
var_dump($numero);
echo "<br/><br/>";
//puedo escribir la etiqueta html y visual me las da con apertura y cierre 
// tambien si pon li * el numero que quiera me da una lista ahoor tiempo
/* en el ejemplo de los apntes de php tenemos tres carpetas views controllers y models 
la pagina se encuentra en views esta se la pasa a controllers y luego por ultimo va
al archivo php que es el encargado de que se vea esta vista 
/* codigo pa ver errores en el servidor 
<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
?>
OPERADORES DE INCREMENTO 4
1- PRE-INCREMENTO: ++$a suma una unidad y muestra su valor que seria a+1 
2- POST INCREMENTO: $a++ retorna a y luego incrementa a+1
3- PRE-DECREMENTO: decrementa a -1 y luego retorna a
4- POST-DECREMENTOS: retonra a y luego decrementa a en una unidad <a-1>
QUE SON LOS ARRAYS 
 contendores para guardar cualquier tipo de dato es una gran variable tenemos 2 tipos
    1 ARRAR INDEZADOS: es una gran variable y utilizamos los indices para acceder a sus valores
        el indice va entre[]y con el numero que quermos visualizar los arrays empiezan a contar desde 0
    2 ARRAY ASOCIATIVOS: van asosiaciodos a una clave valor la clave es el nombre
        se le puede dar el nombre que queramos de igual forma el valor 
        los nombres van entre comilla simples''
        para acceder a las posiciones debemos hacerlo por medio del nombre que hemos dado la clave 
    para comprobar si una variable es un array con is_array dentro de un condicional 
    if (is_array($nombre_array)) esto nos devuelve un valor boleano
    COMO RECORRER UN ARRAY 
    con el foreach($nombre_array as $clave=>$valor){
        instruciones del bucle;

    }
    recorrer un array indezado se hace con un bucle for normal regla a tener en cuenta 
    sino sabemos cuantas posiciones tiene el array le podemos pasar la propiedad count
    asi nos recorrer todo los elementos del array ejemploe
        $semana = ['lunes','martes','miercoles'];
     for ($i = 0; $i<count($semana);$i++)
     {
         echo $semana[$i];
     }
    FORMA DE AGREGAR UN ELEMENTO A UN ARRAYINDEZADO
        $nombre_arra['se puede poner la posicion en la que lo queremos]="valor_agregar";
    FORMA DE AGREGAR ELEMENTO A UN ARRAY ASOSIATIVO 
        le tenemos que indicar la clave y el valor 
            ejemplo $nombre_array["clave_del_array"]="valor_del_array";
    ARRAY  MULTIDIMENSINALES
        -esto es un array dentro de otro array
*/        ejemplo
$alimentos = array("fruta"=>array("tropical"=>"kivi",
                                "citrico"=>"mandarina",
                                "otros"=>"manzana"),
                 "leche"=>array("animal"=>"vaca",
                                "lacteo"=>"vacas"),
                 "carne"=>array("vacuno"=>"lomo_alto",
                                "solomillo"=>"corte" ));






















?>
 
