<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>prueba examen</title>
</head>
<body>
  
    <?php
    if($_POST)
    {
        $data = $_POST;
    }else if($_GET)
    {
        $data = $_GET;
    }
    $numero= isset($data ["numero"])? $data ["numero"] : "";

    
    
   

    function transformar($numero=0)
    {
       

        $numu= ""; /* creo un array para guardar los valores */
        $array = [];
        $conver_str = strval($numero);
        for ($i = 0; $i <= strlen($conver_str); $i++) 
        {
            $array[] = $numu;

            
            switch (@$conver_str[$i]) {
            case 9:
            {
                $numu = "NUEVE";
                break;
            }
            case 8:
            {
                $numu = "OCHO";
                break;
            }
            case 7:
            {
                $numu = "SIETE";
                break;
            }
            case 6:
            {
                $numu = "SEIS";
                break;
            }
            case 5:
            {
                $numu = "CINCO";
                break;
            }
            case 4:
            {
                $numu = "CUATRO";
                break;
            }
            case 3:
            {
                $numu = "TRES";
                break;
            }
            case 2:
            {
                $numu = "DOS";
                break;
            }
            case 1:
            {
                $numu = "UNO";
                break;
            }
            case 0:
            {
                $numu = "";
                break;
            }
            
        }
       $resultado = implode(" ", $array);
       $resultado2 = "<< $resultado >>";
          
            
        }return $resultado2;
    }

echo transformar($numero);
?>

    
     <form action="" method="POST">
        
        Introduce el número a convertir: <input type="number" name="numero">
        <input type="submit" name="enviar" value="enviar número">
            
        </form>
         <?php
        
      

    ?>
</body>
</html>