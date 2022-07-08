<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo condicionales pildoras Informaticas</title>
</head>
<body>
    <form action="validacion_condicional1.php" name="datos_usuarios" id="dastos_usuarios" method="post">
        <table>
            <tr>
                <td>Nombre:</td>
                <td><label for="nombre_usuario"></label>
                <input type="text" name="nombre_usuario" id="nombre_usuario"></td>
            </tr>
            <tr>
                <td>Edad:</td>
                <td><label for="edad_usuario"></label>
                <input type="text" name="edad_usuario" id="edad_usuario"></td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td><input type="submit" name="enviado" id="enviado" value="enviar"></td>
            </tr>
        </table>
    </form>
</body>
</html>