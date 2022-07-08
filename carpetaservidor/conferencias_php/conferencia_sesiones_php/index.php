<?php

session_start();
if (!isset(($_SESSION["cuantas paginas"])))
{
    $_SESSION["cuantas paginas"] = 1;
}else
{
    $_SESSION["cuantas paginas"]++;
}
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo "desde que entraste has visto ".$_SESSION["cuantas paginas"]."paginas";
    
    ?>
    <br><br>
    <a href="otracuenta.php">Ver otra pagina</a>
</body>
</html>