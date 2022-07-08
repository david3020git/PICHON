<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejemplo formularios login</title>
</head>
<body>
<?php
//funciones
function mostrarErrores($errores=[])
{
    foreach($errores as $error)
    {
        echo '<li>'.$error.'</li>';
    }
}
function comprobarUsuario()
{
    if(isset($GLOBALS["data"]) && $_POST)
    {
        $_usuario = compruebaTexto("usuario");
        $_pass = compruebaTexto("pass");

        //Control de errores por separado
        if (strlen($_usuario) < 4)
        {
            $GLOBALS["errores"][] = "El usuario no puede ser menor de 4 caracteres.";
        }
        if (strlen($_pass) < 4)
        {
            $GLOBALS["errores"][] = "La contraseña no puede ser menor de 4 caracteres.";
        }
        foreach($GLOBALS["tablaUsuarios"] as $regUser=>$regPass)
        {
            //Comprobamos el usuario y la contraseña
            if ($regUser == $_usuario && $regPass == $_pass)
            {
                setcookie ("usuario_cookie", $_usuario, time () +30);
                setcookie ("pass_cookie", $_pass, time () +30);
            return true;
            }
        }
        //Si llega aqui es que no ha encontrado la contraseña
        $GLOBALS["errores"][] = "El usuario y/o la contraseña no son correctos.";
    }
    return false;
}
function compruebaTexto($campo){
    @$aux = $GLOBALS["data"];
    if (!isset($aux[$campo]))
        $aux = "";
    else
        $aux = $aux[$campo];
    return textoAlfanumerico($aux);
}
function textoAlfanumerico($variable)
{
    if (!is_array($variable))
        return preg_replace("/[^a-zA-Z0-9\s]/", "", $variable);
    $arrayAux = [];
    foreach($variable as $clave => $valor)
    {
        $arrayAux[$clave] = preg_replace("/[^a-zA-Z0-9\s]/", "", $valor);
    }
    return $arrayAux;
}
// parte del data
echo $_COOKIE['usuario_cookie'];
if($_POST)
{
    $data = $_POST;
}elseif ($_GET)
{
    $data = $_GET;
}
$nombre= isset($data ["usuario"])? $data ["usuario"] : "";
$nombre= isset($data ["pass"])? $data ["pass"] : "";
// variables

$errores = [];
$tablaUsuarios = [  "admin" => "1234",
                    "jose"  => "jose",
                    "maria" => "maria"];
        





$usuario= compruebaTexto("usuario");
$pass= compruebaTexto("pass"); 
$datosUsuario = <<< HTML
    Usuario: $usuario<br>
    Pass: $pass<br>
HTML;
?>
<?php if (!comprobarUsuario()) { ?>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
        Usuario:
        <input type="text" name="usuario" value="<?php
        $_usuario;
        echo empty($_usuario) ? "" : $_usuario; ?>" />
        Contraseña:
        <input type="password" name="pass" value="<?php echo $pass;?>">

        <input type="submit" name="submit" value="login"/>
        
<br><ul style="color: brown;">
<?php mostrarErrores($errores); ?><ul>
    </form>
<?php } else { ?>
    <?php echo $datosUsuario;} ?>

    
    
</body>
</html>