
<?php
 
 require "proclogin.php";




 
?>
<?php  
        $trato = ($datosUsuario["trato"]=="hombre") ? "Señorr." : "Señora.";
        print <<< HTML2
    Bienvenido $trato{$datosUsuario["usuario"]}<br/>
    HTML2;
    ?>
<?php 
    $usuario = empty($data["datosUsuario"])?"": explode(";", $data["datosUsuario"]);
        foreach ($datosUsuario as $d){ ?>
        <input type="hidden" name="usuario[]" value="<?php echo $d; ?>">
    
<?php } ?>


  


