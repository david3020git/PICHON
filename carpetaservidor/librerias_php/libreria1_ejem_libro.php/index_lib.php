<?php


$PI = 3.14159265359;

function cuadrado ($num)
{
    return $num * $num;
}
function areaCircunferencia ($radio)
{
    return $GLOBALS ["PI"] * cuadrado ($radio);
}
?>
