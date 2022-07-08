<?php

//funciones sin parametros 

function saludo(){
    echo "hola<br/>";
}

saludo();
 //funciones con parametros
  function despedidad($adios){
      echo $adios."<br/>"; //forma de concatenar una variable con una cadea atraves del punto
  }
despedidad("chao");

// funciones con retorno importante estas funciones se llaman atravez de un echo

function retorno($retornar){
    return $retornar;
}
echo retorno("retornar");






?>
