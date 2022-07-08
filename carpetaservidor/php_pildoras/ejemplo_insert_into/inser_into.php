<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejemplo insert into desde codigo pildoras</title>
</head>
<body>
<?php
            
           
    
    require("C:\\xampp\\htdocs\\php\\carpetaservidor\\php_pildoras\\conexcion_bd_php.php");
    $db_connection = mysqli_connect($db_hots, $db_user, $db_password);
    if (mysqli_connect_errno()) {
    echo "fallo al conectar con la base de datos";
    exit();
    }
    mysqli_select_db($db_connection, $db_name) or die("no se encuentra la base de datos");
    mysqli_set_charset($db_connection, "utf8");
    $consulta ="INSERT INTO datospersonales (apellido, edad, nif, nombre) VALUES ('MARTINEZ', 25, 'X8506057J', 'JUAN')";
    $resultados = mysqli_query($db_connection, $consulta);
    //$fila = mysqli_fetch_row($resultados);
    
    ?>
    
</body>
</html>