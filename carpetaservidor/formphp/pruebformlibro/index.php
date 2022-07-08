<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica formularios </title>
</head>
<body>
<form action="inicio.php" method="post">
            Nombre : <input type="text" name="nombre"><br/>
            <br/>
            Pass: <input type="password" name="pass"><br/>
            <br/>
            Descripción: <textarea rows="3" cols="50" name="desc"></textarea><br/>
            <br/>
            Sexo: Hombre: <input type="radio" name="sexo" value="hombre">
            Mujer: <input type="radio" name="sexo" value="mujer"><br/>
            <input type="hidden" name="trato"/>
            Estudios: <select name="estudios">
                <option value="niguno" selected="selected">Ninguno</option>
                <option  value="primarios">Primarios</option>
                <option value="secuandarios">Secuandarios</option>
                <option value="superiores">Superiosres</option>
                          
            </select><br/>
            Intereses:
            <input type="checkbox" name="intereses[]" value="informatica" checked="checked">Informatica</input>
            <input type="checkbox" name="intereses[]" value="informatica">Deportes</input>
            <input type="checkbox" name="intereses[]" value="informatica">cocina</input>
            <input type="checkbox" name="intereses[]" value="informatia">viajes</input><br/>
            <input type="submit" value="enviar">
            
    </form>

</body>
</html>
