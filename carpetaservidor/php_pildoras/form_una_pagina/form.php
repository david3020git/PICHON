<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejemplo formulrio en una sola pagina</title>
    <?php
            
        function ejecuta_consulta($labusqueda)
        {
            

            require("C:\\xampp\\htdocs\\php\\carpetaservidor\\php_pildoras\\conexcion_bd_php.php");
            $db_connection = mysqli_connect($db_hots, $db_user, $db_password);
            if (mysqli_connect_errno()) {
                echo "fallo al conectar con la base de datos";
                exit();
            }
            mysqli_select_db($db_connection, $db_name) or die("no se encuentra la base de datos");
            mysqli_set_charset($db_connection, "utf8");
            $consulta ="select * from hoja1 WHERE LOCAL LIKE'%$labusqueda%'";
            $resultados = mysqli_query($db_connection, $consulta);
            //$fila = mysqli_fetch_row($resultados);
            while ($fila=mysqli_fetch_array($resultados, MYSQLI_ASSOC)) {
                echo $fila['FECHA']. " ";
                echo $fila['VISITANTE']." ";
            
                
                echo "<br>";
            }
            mysqli_close($db_connection);
        }
?>
</head>
<body>
    <?php 
        $mibusqueda = $_POST['buscar'];
        $mipag= $_SERVER['PHP SELF'];
        if ($mibusqueda !=NULL)
        {
            ejecuta_consulta($mibusqueda);
        }else
        {
            echo ("<form action='" . $mipag . "' method='post'>
            <label>Buscar:<input type='text' name='buscar'></label>
            <input type='submit' name='enviando' value='dale'>
            </form>");
        }
    
    ?>
    
</body>
</html>