<?php  require_once "proclogin.php";?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejemplo loggin</title>
    <link type="text/css" rel="stylesheet" href="index.css">
</head>
<body>
<!-- FORMA GENERICA DE AUTO RECARGAR LA APAGINA USADOLA PARA ENVIAR Y MOSTRAR 
 INFORMACION
// APERTURA PHP
if ($_SERVER['REQUES_ METHOD'] != '$_POST'){ ?>
<form action="APERTURA PHP echo $_SERVER['PHP_SELF']?> "
}
para que un formulario no valido se quede como esta le enviamos las varibles por php linea ejemplos
en la line 23 a usuario por medio del value de igual forma a  pass con value
asi se recargara la pagina con los datos que el usuario escribio mal 
is null ()
isset ()
empyt()
 funcioens para comprobar datos 

?>-->
<?php if (!comprobarUsuario())
{  ?>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
        Usuario: 
        <input type="text" name="usuario" value="<?php echo $usuario;
        echo empty($_usuario)?"":$_usuario; ?> "><br/>
        Pass:
        <input type="password" name="pass" value="<?php echo $pass; ?>"><br/>
        Sexo: Hombre: <input type="radio" name="sexo" value="hombre">
        Mujer: <input type="radio" name="sexo" value="mujer"><br/>
                <input type="hidden" name="trato">
        Edad: <input type="number" name="edad"><br/>
        Intereses:
            <input type="checkbox" name="intereses[]" value="informatica" checked="checked">Informatica</input>
            <input type="checkbox" name="intereses[]" value="informatica">Deportes</input>
            <input type="checkbox" name="intereses[]" value="informatica">cocina</input>
            <input type="checkbox" name="intereses[]" value="informatia">viajes</input><br/>
            <input type="submit" name="submit" value="login">
        <br/><ul id="lista">
        <?php mostrarErrores($errores); ?></ul>
    </form>
<?php } 
else{
    
        $trato = ($datosUsuario['sexo'] == 'hombre') ? 'SR.' : 'Sra.';
        print <<< HTML2
    Bienvenido $trato {$datosUsuario['usuario']} <br/>
    HTML2;
 ?>
 
<?php } ?>


</body>
</html>