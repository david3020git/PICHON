<?php 
    // verrificar que la cookie esta resgitrada
    if (isset($_COOKIE['sitio']))
    {
        if (isset($_REQUEST['btninsertar']))
        {
            echo "Las Cookies ya estarn registradas <br>";
        }
        //como ya existen verifico si quiere elimnar
        if (isset($_REQUEST['btneliminar']))
        {
            echo "eliminando cookie<br>";
            // definir las cookies
            setcookie("sitio","",0);
            setcookie("usuario","",0);
            setcookie("clave","",0);
        }
        //verificar listado de cookies
        if (isset($_REQUEST['btnlistar']))
        {
            //se vaa desplegar el menu
            echo "desplegando cookies...<br>";
            echo "sitio".$_COOKIE['sitio']."<br>";
            echo "usuario".$_COOKIE["usuario"]."<br>";
            echo "clave".$_COOKIE["clave"]."<br>";
        }
    }else
    {
        // si la cookie no existe verifica si quiere insertarlas
        echo "registrado las cookie<br>";
        setcookie("sitio", "david", time()+3600);
        setcookie("usuario", $_REQUEST['txtusuario'],time()+3600);
        setcookie("clave", $_REQUEST['txtclave'], time()+3600);
    }
    // verifico eliminar sin existencia
    if (isset($_REQUEST['btneliminar']))
    {
        echo "no existen las cokies<br>";

    }
    // verifico listar sin existencia
    if (isset($_REQUEST['btlistar']))
    {
        echo "no existen las cookies<br>";
    }



    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio con cookies</title>
    
</head>
<body>
    <form action="cookie.php" method="post">
        Usuario: <input type="text" name="txtusuario" value="david"><br>
        Clave: <input type="password" name="txtclave" value="pass"><br>
        <input type="submit" value="Insertar" name="btninsertar">
        <input type="submit" value="Eliminar" name="btneliminar">
        <input type="submit" value="Listar" name="btnlistar">

    </form>
</body>
</html>