<?php
/*
//abrir fichero
//escribir en fichero puntero al inicio borra todo y si puede lo crea sno existe

ejemplo ficheros--------------
$archivo = fopen('archivo.txt', "w");

//escribir en fichero
$texto = "Ejemplo de escritura en fichero php";
fwrite($archivo, $texto);-----------
*/

$ruta = './archivos/'; 
$nombre = 'archivo.txt';
$archivoCrudo = $ruta.$nombre; 
//$archivo = fopen($archivoCrudo, 'w');
//fwrite($archivo, 'Ejemplo'); 
if(!is_dir($ruta))
{ 
    echo 'No existe el directorio.';
    mkdir($ruta);
    echo 'Directorio creado correctamente.';
}
    
if($archivo = @fopen($archivoCrudo, 'w+'))
{ 
    fwrite($archivo, 'Ejemplo de prueba 3'); 
    echo 'El fichero '.$nombre.' se ha guardado correctamente.'.'<br>';
    //fclose($archivo);
    
}else{
    echo ('No se ha podido abrir el archivo');
}    
/*while(!feof($archivo))
{ $i = ftell($archivo);
     $c = fgetc($archivo);//Indice
     echo $i.': '.$c."<br>";//Caracter
} 
//echo ftell($archivo).': ';
/*while(false !== ($c = fgetc($archivo)))
{
    echo $c.'<br>'.ftell($archivo).': ';
}  // var_dump($c);
------------------------------*/
$i = 0;
while ($f = fgets($archivo))
{ 
    echo $i.' '.(ftell($archivo)-1).': '. $f.'<br>';
    $i = ftell($archivo);
}


fclose($archivo);



?>