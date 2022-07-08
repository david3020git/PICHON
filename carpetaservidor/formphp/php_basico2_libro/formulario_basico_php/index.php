<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulario index_php</title>
</head>
<body>


    
    <form action="inicio.php" method="POST">
        Nombre: <input type="text" name="nombre"><br>
        Pass: <input type="password" name="pass"><br>
        Descripcion: <textarea row="3" cols="50" name="desc"></textarea><br>
        Sexo: hombre <input type="radio" name="sexo" value="hombre"> 
        mujer <input type="radio" name="sexo" value="mujer"><br>
        <input type="hidden" name="trato" /> 
        Estudios: <select name="estudios">
        <option value="ninguno" selected="selected">Ninguno</option>
        <option value="primarios">Primarios</option>
        <option value="secundarios">Secundarios</option>
        <option value="superiores">Superiores</option>
        </select><br>
        Intereses:
        <input type="checkbox" name="intereses[]" value="informatica" checked="checked">informatica</input>
        <input type="checkbox" name="intereses[]" value="informatica">deportes</input>
        <input type="checkbox" name="intereses[]" value="informatica">cocina</input>
        <input type="checkbox" name="intereses[]" value="informatica">viajes</input><br>
        <input type="submit" value="Enviar">
            
        </form>
    <?php    setcookie("usuario_cookie", "david lee", time()+ 60*3);
      ?>
</body>
</html>