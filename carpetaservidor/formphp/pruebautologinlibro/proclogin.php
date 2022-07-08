<?php 
 
     $data = $_POST;

     $usuario = @isset($data['usuario']) ? $data['usuario'] : '';
     $pass = @isset($data['pass']) ? $data['pass'] : '';


     // tabla usuaris pruebas 
    $tablaUsuarios= ["admin"=>"12345", "jose"=>"jose", "maria"=>"maria" ];

    $errores = [];

    function mostrarErrores($errores=[])
    {
        foreach($errores as $error)
        {
            echo '<li>'.$error.'</li>';
        }
         
    }
    

    function comprobarUsuario()
    {
        if (isset($GLOBALS["data"]))
        {
            $_usuario = compruebaTexto("usuario");
            $_pass = compruebaTexto("pass");
        // que tenga un minimo de cacracteres
            if (strlen($_usuario) < 4)
            {   
                $GLOBALS["errores"][] = "el usuario no puede ser menos que 4caracteres";

            }
            if (strlen($_pass) < 4)
            {
                $GLOBALS["errores"][] = 'la contraseña no puede ser inferior a 4 caracteres';

                foreach ($GLOBALS['tablaUsuarios'] as $regUser => $regPass)
                {
                    //comprobamos el usuario y contraseña
                    if ($regUser == $_usuario && $regPass == $_pass) {
                        return true;
                    }
                }
                $GLOBALS["errores"] [] = "el usuario y contraseña no se correctos";
            }
            return false;
        }
    }
    
    



     function compruebaTexto($campo)
     {
         $aux = $GLOBALS['data'];

         if (!isset($aux[$campo])) {
             $aux = '';
         } else {
             $aux = $aux[$campo];

             return $aux;
         }
     }


    

     

     $usuario = CompruebaTexto('usuario');
     $pass = CompruebaTexto('pass');
     $datosUsuario = <<< HTML
    Usuario: $usuario<br/>
    Pass: $pass<br/>
HTML;
 

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