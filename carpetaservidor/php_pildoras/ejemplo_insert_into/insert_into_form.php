<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejemplo insert into desde formulario pildoras php</title>
    <style>
        form{
            display: grid;
            width:  40%;
            height: 40%;
            border: 1px solid;
            margin: 20px auto;
            background-color: bisque;
            color: black;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            border-radius: 5px;
            padding: 5px;

        }
    </style>
</head>
<body>
    <form action="inser_into_registro.php" method="post">
        NOMBRE: <label><input type="text"  name="nombre" id="nombre"></label>
        APELLIDO:<label><input type="text" name="apellido" id="apellido"></label>
        EDAD:<label><input type="text" name="edad" id="edad"></label>
        NIF:<label><input type="text" name="nif" id="NIF"></label>
        <input type="submit" name="enviar" value="enviar">   
    
    </form>
</body>
</html>