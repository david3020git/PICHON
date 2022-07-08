<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>copia ejemplo</title>
</head>
<body>
   <?php 
   // funciones
   // convierte la nota numerica en texto
   function notaTexto($nota)
   {
       switch($nota)
       {
           case ($nota <5):
                echo "No superado";            
                break;
            case ($nota <6):
                echo "Superado";
                break;
            case ($nota <7):
                echo "Bien";
                break;
            case ($nota <8):
                echo "Notable";
                break;
            case ($nota <9):
                echo "Sobresaliente";
                break;
            case ($nota <10):
                echo "Excelente";
                break;

       }

   }
   function mostrarArray($array, bool $texto=false)
   {
       foreach($array as $nombre=>$nota)
       {
           echo "Nombre: $nombre. Nota: $nota.";
           if ($texto)// si queremos poner la nota en texto
           {
               notaTexto($nota);

           }
           echo '</br>';
       }

   }
   // variables 
   $alumnos = ["Juan"=>5, "Maria"=>7, "Pepe"=>6, "Ana"=>2,
   "Angela"=>9.5, "Juan Manuel"=>2, "Blanca"=>10, "Ruben"=>5];

   $suspensos=[];
   $aprobados=[];

   foreach($alumnos as $nombre=>$nota)
   {
       if($nota >=5)
       {
           $aprobados[$nombre]= $nota;
       }else
       {
           $suspensos[$nombre] = $nota;
       }
   }
   //ordenamos alfabeticamente
   ksort($alumnos);
   echo "listado ordenado alfabeticamente </br>";
   mostrarArray($alumnos);
   // ordenar por nota de menos a mas 
   arsort($alumnos);
   echo "listado ordenado por nota</br>"; 
   mostrarArray($alumnos, true);
   
   // aprobados
   echo "listado de aprobados </br>";
   if (count($aprobados)>0)
   {
       mostrarArray($aprobados);
   }else
   {
       echo "No hay aprobados";
   }
   echo "listado de suspensos";
   if (count($suspensos)>0)
   {
       mostrarArray($suspensos);
   }else
   {
       echo "No hay suspensos";
       echo 016;
   }
   var_dump(016);



    ?>
</body>
</html>