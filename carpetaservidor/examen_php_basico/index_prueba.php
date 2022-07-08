<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index_prueba</title>
</head>
<body>
    <?php   
    


    function unidad($numero)
    {

        $numu= [];
        $conver_str = strval($numero);
        for ($i = 0; $i <strlen($conver_str); $i++) 
        {
            
            switch ( $conver_str[$i])
            {
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
        $resultado = implode(" ", $numu);
        return $resultado;
}       

	
}
$numero = 213;
unidad($numero);

    
    
    
    
    
    
    ?>
</body>
</html>