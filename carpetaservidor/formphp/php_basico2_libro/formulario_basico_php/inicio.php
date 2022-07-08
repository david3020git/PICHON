<?php
if($_POST)
{
    $data = $_POST;
}elseif ($_GET)
{
    $data = $_GET;
}

$nombre= isset($data ["nombre"])? $data ["nombre"] : "";
$pass= isset($data ["pass"])? $data ["pass"] : "";
$desc= isset($data ["desc"])? $data ["desc"] : "";
$sexo= isset($data ["sexo"])? $data ["sexo"] : "";
$estudios= isset($data ["estudios"])? $data ["estudios"] : "";
$intereses= isset($data ["intereses"])? $data ["intereses"] : [];
$intereses= implode (", ", $intereses);

function compruebaTexto($campo){
    $aux = $GLOBALS["data"];
    if (!isset($aux[$campo]))
        $aux = "";
    else
        $aux = $aux[$campo];
    return textoAlfanumerico($aux);
}
$nombre= compruebaTexto("nombre");
$pass= compruebaTexto("pass"); 
$desc = compruebaTexto("desc"); 
$sexo = compruebaTexto("sexo"); 
$estudios = compruebaTexto("estudios");
/* comprobar texto */
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

print <<< HTML
    Nombre: $nombre<br>
    Pass: $pass<br>
    Descripcion: $desc<br>
    Estudios: $estudios<br>
    Sexo: $sexo<br>
    Intereses: $intereses<br>
HTML;


/* ejemplo im`rimir con texto plano en html----------------------------------
$nombre = $_POST['nombre'];
$pass = $_POST['pass'];
print <<< HTML
<html>
<body>
<form action="inicio.php" method="post">
    Nombre: <input type="text" name="nombre" value="$nombre"><br>
    Pass: <input type="text" name="pass" value="$pass"><br>
    <input type="submit" name="submit" value="Enviar">
</form>
</body>
</html>
HTML;*/
?>
<!--<form action="index.php" method="POST">
    <input type="text" name="nombre" value="/* echo $nombre;?>">
    <input type="password" name="pass" value=" echo $pass */?>">-->

</form>
<?php
/* 
function mostrarArray($array, $encabezado=null)
{
    if ($encabezado!=null)
        echo $encabezado;
    foreach($array as $clave => $valor){
        echo ("- Clave: $clave. Valor: $valor</br>");
    }
}
if ($_POST){
    $data = $_POST;
    echo "Valores de \$_POST:</br>";
    mostrarArray($data);
}else if($_GET){
    $data = $_GET;
    mostrarArray($data, " Valores de \$_GET:</br>");
}
--------------------------------------------------*/
/*-------------------------------------------------------
if ($_POST)
{
    echo "Valores de \$_POST:</br>";
    foreach ($_POST as $clave=>$valor)
    {
        echo ("- Clave: $clave. Valor: $valor</br>");
    }
}elseif($_GET)
{
    echo "Valores de \$_GET:</br>";
    foreach ($_GET as $clave=>$valor)
    {
        echo ("- Clave: $clave. Valor: $valor</br>");
    }
}
-------------------------------------------------------*/
/* forma de recibir datos de un formulario
$nombre = $_POST['nombre'];
$edad = $_POST['edad'];
echo "hola $nombre. usted tiene $edad años.";
*/

?>