<?php
    // funciones 
    function mostrarErrores($errores=[])
    {
        foreach($errores as $error)
        {
            echo '<li>'.$error.'</li>';
        }
         
    }

    function comprobarUsuario()
    {
        if (isset($GLOBALS["data"]) && $_POST)
        {
            $_usuario = compruebaTexto("usuario");
            $_pass = compruebaTexto("pass");
        // que tenga un minimo de cacracteres
            if (strlen($_usuario)<4)
            {   
                $GLOBALS["errores"][] = "el usuario no puede tener menos de cuatro caracteres";

            }
            if (strlen($_pass)<4) 
            {
                $GLOBALS['errores'][] = 'La contraseña debe ser minimo de cinco carcteres';
            }

                foreach ($GLOBALS['tablaUsuarios'] as $regUser=>$regDatos)
                {
                    //comprobamos el usuario y contraseña
                    if ($regUser == $_usuario) 
                    {   
                        $_temp = explode(";", $regDatos);
                        if ($_pass == $_temp[0])
                        {
                            $GLOBALS["datosUsuario"]["sexo"] = $_temp[1];//sexo
                            $GLOBALS["datosUsuario"]["edad"] = $_temp[2];//edad
                            $GLOBALS["datosUsuario"]["intereses"] = $_temp[3];//intereses
                            return true;
                        } else
                        {
                            break;

                        }
                       
                    }
                }
                $GLOBALS["errores"] [] = "el usuario y contraseña no se correctos";
            }
            return false;
        }
    

    function compruebaTexto($campo)
    {
         $aux = $GLOBALS['data'];

        if (!isset($aux[$campo]))
        {
             $aux = '';
        } else 
        {
             $aux = $aux[$campo];

             return textoAlfanumerico($aux);
        }
    }

    function textoAlfanumerico($variable)
    {
        if (!is_array($variable))
        {   
            return preg_replace("/[^a-zA-Z0-9\s]/", "", $variable);
        }
        $arrayAux = [];
        foreach ($variable as $clave => $valor)
        {
            $arrayAux["clave"] = preg_replace("/[^a-zA-Z0-9\s]/", "", $valor);

        }
        return $arrayAux;


    }

    function mostrararray($mensajes=[])
    {
        $ret= 0;
        foreach($mensajes as $mensaje)
        {
            $ret = '<li>'.$mensaje.'</li>';
        }
        return $ret;

    }

    // parte del data


    $data = $_POST;

    $usuario = @isset($data['usuario']) ? $data['usuario'] : '';
    $pass = @isset($data['pass']) ? $data['pass'] : '';


    //declaracion de variables
    $errores = [];
    $datosUsuario = [];
    $tablaUsuarios= [
        "admin"=>"1234;32;cocina:viajes:informatica",
        "jose"=>"jose;hombre;16;",
        "maria"=>"maria;mujer;24;viajes"];
        
    
    $usuario = CompruebaTexto('usuario');
    $pass = CompruebaTexto('pass');
    $datosUsuario["usuario"] = $usuario;
    $datosUsuario["pass"] =$pass;

    


   /*
     $datosUsuario = <<< HTML
    Usuario: $usuario<br/>
    Pass: $pass<br/>
HTML;
*/
 

/* forma de mostrar los datos y recorrerolos con un bucle foreache apuntes

function mostraraary($array, $encabezado = null)
{
    if ($encabezado != null) {
        echo $encabezado;
    }
    foreach ($array as $clave => $valor) {
        echo utf8_decode("- Clave: $clave.Valor: $valor<br/>");
    }
}
if ($_POST){
    echo "Valores de \$_POST:<br/>";
    mostraraary($_POST);
}
else if ($_GET){
    mostraraary($_GET, "\$_GET: <br/>");
}
*/


?>