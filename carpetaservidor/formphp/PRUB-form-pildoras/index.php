<?php
    include ("procesar.php");
    ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba Formulario Pildoras Informaticas Youtube</title>
     <link rel="stylesheet" href="index.css">
</head>
<body>
    <form action="" method="post"  class="formulario">

        <input type="text" name="num1" id="num1" placeholder="Digite el Primer Número">
        <input type="text" name="num2" id="num2" placeholder="Digite Segundo Número">
        <label for="operacion" id="operacion"></label>
        <select name="operacion" id="operacion">
            <option>Suma</option>
            <option>Resta</option>
            <option>Multiplicación</option>
            <option>División</option>
            <option>Modulo</option>
            <option>Incremento</option>
            <option>Decremento</option>     
        </select>
        <input type="submit" name="button" id="button" value="enviar">   
    </form>
    <?php 
    
        if (isset($_POST["button"]));
        {
            $numero1 = $_POST['num1'];
            $numero2 = $_POST['num2'];
            $operacion = $_POST['operacion'];
            calcular($operacion);
        }  
    
    
        

    ?>

    
</body>
</html>