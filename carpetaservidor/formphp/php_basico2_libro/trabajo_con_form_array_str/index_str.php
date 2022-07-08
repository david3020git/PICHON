<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejemplo formularios login</title>
</head>
<body>
    <!-- trabajo con formularios con strings str me quedo en bucles php2
        profe buenas tardes estoy haciendo este ejercicio del libro 
        trabajo de formularios con strings el de array ya lo hice y me salio perfecto 
        pero en este ejercicio nose porque al final no me imprime nada me podrias echar
        un vistazo es que no encuentro el fallo gracias-->
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
    if (isset($GLOBALS["data"]) && $_POST) {
        $_usuario = compruebaTexto("usuario");
        $_pass = compruebaTexto("pass");

        //Control de errores por separado
        if (strlen($_usuario) < 4) {
            $GLOBALS["errores"][] = "El usuario no puede ser menor de 4 caracteres.";
        }
        if (strlen($_pass) < 4) {
            $GLOBALS["errores"][] = "La contraseña no puede ser menor de 4 caracteres.";
        }
        foreach ($GLOBALS["tablasUsuarios"] as $regUser => $regDatos) {
            //Comprobamos el usuario y la contraseña
            if ($regUser == $_usuario) {
                $_temp = explode(";", $regDatos);
                //En el array 0 esta la contraseña
                if ($_pass == $_temp) {
                    $GLOBALS["datosUsuario"]["sexo"] = $_temp[1];//sexo
                    $GLOBALS["datosUsuario"]["edad"] = $_temp[2];//edad
                    $GLOBALS["datosUsuario"]["intereses"] = $_temp[3];//intereses
                    return true;
                }
            }else{
                break;
            }
        }
    }
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
function mostrarArray($mensajes=[])
{
    $ret = "";
    foreach($mensajes as $mensaje)
    {
        $ret.= '<li>'.$mensaje.'</li>';
    }
    return $ret;
}
// parte del data
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
$datosUsuario = [];
$tablasUsuarios = [  "admin" => "1234;hombre;32;cocina:viajes:informatica",
                    "jose"  => "jose;hombre;16",
                    "maria" => "maria;mujer;24;viajes"];


$usuario= compruebaTexto("usuario");
$pass= compruebaTexto("pass"); 
$datosUsuario['usuarios'] = $usuario;
$datosUsuario['pass'] = $pass;



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
    <?php 
    
    
    $met = "mostrarArray";
    $_aux = explode(":", $datosUsuario['intereses']);
    print <<< HTML
    Usuario: {$datosUsuario['usuario']}<br>
    Pass: {$datosUsuario['pass']}<br>
    Edad: {$datosUsuario['edad']}<br>
    Intereses: <ul>{$met($_aux)}</ul>
    HTML;
    } ?>

    
    
</body>
</html>