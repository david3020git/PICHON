<?php
            
           
    $nombre = $_POST['nombre'];
    $edad = $_POST['edad'];
    $nif = $_POST['nif'];
    $apellido = $_POST['apellido'];

    require("C:\\xampp\\htdocs\\php\\carpetaservidor\\php_pildoras\\conexcion_bd_php.php");
    $db_connection = mysqli_connect($db_hots, $db_user, $db_password);
    if (mysqli_connect_errno()) {
    echo "fallo al conectar con la base de datos";
    exit();
    }
    mysqli_select_db($db_connection, $db_name) or die("no se encuentra la base de datos");
    mysqli_set_charset($db_connection, "utf8");
    $consulta ="INSERT INTO datospersonales (apellido, edad, nif, nombre) VALUES ('$apellido', $edad, '$nif', '$nombre')";
    $resultados = mysqli_query($db_connection, $consulta);
    //$fila = mysqli_fetch_row($resultados);
    if ($resultados== false)
    {
        echo "error en la consulta";
    }else
    {
        echo "resgistro guardado <br><br>";
        echo "<table><tr><td>$nombre</td></tr>";
        echo "<tr><td>$edad</td></tr>";
        echo "<tr><td>$nif</td></tr>";
        echo "<tr><td>$apellido</td></tr></table>";
    }
    
    ?>