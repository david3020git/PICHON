<style>

    .resultado{
        font-size: 32px;
        color: red;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;

    }


</style>


<?php





function calcular($calculo)
{
   
    if (!strcmp('Suma', $calculo)) 
    {
        global $numero1;
        global $numero2;
        $resultado = $numero1 + $numero2;
        echo "<p class='resultado'> El resultado es: $resultado</p>";
    }

    if (!strcmp('Resta', $calculo)) 
    {
        global $numero1;
        global $numero2;
        $resultado = $numero1 - $numero2;
        echo "<p class='resultado'> El resultado es: $resultado </p>";
    }

    if (!strcmp('Multiplicación', $calculo)) 
    {
        global $numero1;
        global $numero2;
        $resultado = $numero1 * $numero2;
        echo "<p class='resultado'> El resultado es: $resultado </p>";
    }

    if (!strcmp('División', $calculo)) 
    {   
        global $numero1;
        global $numero2;
        $resultado = $numero1 / $numero2;
        echo "<p class='resultado'> El resultado es: $resultado </p>";
    }

    if (!strcmp('Modulo', $calculo)) 
    {
        global $numero1;
        global $numero2;
        $resultado = $numero1 % $numero2;
        echo "<p class='resultado'> El resultado es: $resultado </p>";
    }
    //incremento y decremento

    if (!strcmp('Incremento', $calculo)) 
    {
        global $numero1;
        $numero1 ++;
        $resultado = $numero1;
        echo "<p class='resultado'> El resultado es: $resultado </p>";
    }

    if (!strcmp('Decremento', $calculo)) 
    {
        global $numero1;
        $numero1--;
        $resultado = $numero1;
        echo "<p class='resultado'> El resultado es: $resultado </p>";
    }
}



?>