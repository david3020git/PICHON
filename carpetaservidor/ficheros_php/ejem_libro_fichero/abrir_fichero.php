<?php 

// abrir un fichero escritura
/*if ($fichero = fopen("archivo.txt", "w"))
{
    echo "se abrio correctamente";
    fwrite($fichero, "linea 1 \n");
}
    
else{
    echo "nose pudo abrir";
    fclose($fichero);
}*/
// abrir para lectura
if (file_exists("archivo.txt"))
{
    $fichero = fopen("archivo.txt", "r");
    while(!feof($fichero)){
        $linea = fgetc($fichero);
        echo $linea;        
    }
    echo " el fichero se visualizo correctamente <br>";     
   

}
else{
    echo "imposible abrir";
    fclose($fichero);
}
    






?>