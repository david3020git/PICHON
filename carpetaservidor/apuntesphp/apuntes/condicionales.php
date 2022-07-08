<?php

//condicionales es pedirle a la funcion que cuando ejecute la tarealo haga
// de acuerdo a unas condiciones
$a = 5;
$b = 15;

if ($a > $b){
    echo " a es mayor que b"; // el echo se muestra si se cumple la condicion
}
else if ($a == $b){ //else if significa y tambien
    echo "a es igual a b";
}
else {
    echo "a es menor que b";
}

echo "<br/><br/>";

//suiches estructura de control podemos poner cuantos casos necesitemos 
// cuidando los breaks 
$dia = "lunes";
switch($dia){
    case 'sabado':
        echo "voy a estudiar php";
        break;
    case 'viernes';
    echo "voy a la fiesta";
    break;
    case 'domingo';
    echo "voy a descansar";
    break;
    default: echo "voy a la universidad"; //significa que sino se cumplen
                                            // ninguna condicione se d este caso default
}

echo "<br/><br/>";
// bucles while nos permite poner una condicion
$n = 1;
while($n < 5){ // n se incrementa hasta llega a un  valor menor que 5
    echo $n; //ponesmos el echo primero ya que asi nos coge todos los numeros
    $n++;
}

echo "<br/><br/>";

// bucle do while 
$p = 1;

do{
    echo $p;
    $p++;

}
while($p <= 5);

echo "<br/><br/>";

// bucle for 
for($i = 1; $i<=5; $i++){
    echo $i;
}


?>