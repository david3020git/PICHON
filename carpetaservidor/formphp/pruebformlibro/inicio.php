<?php
$data = $_POST;
//forma de controlar los formularios con isset le paso la variable para ver si existe sino me devolveria un valor vacio
$nombre = isset($data["nombre"])? $data["nombre"] : "";
$pass = isset($data["pass"])? $data["pass"] : "";
$desc = isset($data["desc"])? $data["desc"] : "";
$sexo = isset($data["sex"])? $data["sexo"] : "";
$estudios = isset($data["estudios"])? $data["estudios"] : "";
$intereses = isset($data["intereses"])? $data["intereses"] : [];
$intereses = implode( " ",$intereses);

function compruebaTexto($campo)
{
    $aux = $GLOBALS['data'];

    if (!isset($aux[$campo])) {
        $aux = '';
    }else {
        $aux = $aux[$campo];

    return textoAlfanumerico($aux);
    }
    $nombre = compruebaTexto('nombre');
    $pass = compruebaTexto('pass');
    $desc = compruebaTexto('desc');
    $sexo = compruebaTexto('sexo');
    $estudios = compruebaTexto('estudios');
}

 
function textoAlfanumerico($variable){
    if (!is_array($variable)){
        return preg_replace("/[^a-zA-Z0-9\s]", "", $variable );
    }
    $arrayAux = [];
    foreach($variable as $clave => $valor){
        $arrayAux[$clave] = preg_replace("/[^a-zA-Z0-9\s]", "", $valor );
        return $arrayAux;
    

    
    }

   
}
// var_dump(textoAlfanumerico(["hola3", "&"]));
 
  



        
    


$nombre = @$data ["nombre"];
$pass = @$data ["pass"];
$desc = @$data["desc"];
$sexo = @$data["sexo"];
$estudios = @$data["estudios"];
$intereses = @implode( " ",$data ["intereses"]);
print<<< HTML
    Nombre: $nombre<br/>
    Pass: $pass<br/>
    Descripcion: $desc<br/>
    Estudios: $estudios<br/>
    Sexo: $sexo<br/>
    Intereses: $intereses<br/>
    HTML;

?>
