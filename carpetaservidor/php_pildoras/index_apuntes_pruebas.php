<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php bses de datos pildoras informaticas</title>
</head>
<body>
    <?php
    /* BASE DE DATOS COMANDOS 
CREATE DATABSE (VALORES SEPARADOS POR COMAS)-> CREAR BASE DE DATOS 
USE DATABSE (NOMBRE DE LA BASE DE DATOS)-> ESPECIFICAR CON QUE BASE DE DATOS VAMOS A TRABAJAR
DROP TABLE (NOMBRE DE LA TABLA A A ELIMINAR) ELIMINAR UNA TABLA DE UNA BASE DE DATOS
DROP DATABASE-> IGUAL QUE ARRIVA 
INSERT INTO NOMBREBASE DE DATOS (NOMBRES AGREGAR) VALUES (VALORES AGREGAR)
EJEMPLO-> 
         INSERT INTO DATOSPERSONALES (NIF, NOMBRE, APELLIDO, EDAD) VALUES ("X8407042J", "DAVID", "LIE", 30);
ALTER TABLE (NOMBRE DE LA TABLA) DROP NOMBRE DEL CAMPO A ELIMINAR
ALTER TABLE (NOMBRE BASE DE DATOS) ADD COLUMN NOMBRE COLUMNA AGREGAR 
CONSULTAS SQL
- SELECT NOMBRES A CONSULTAR FROM NOMBRE DE LA TABLA 
DATOS PARA CONECTAR UN PAGINA WEB A UN SERVIDOR 
1 DIRECION DE LA BBDD(BASE DE DATOS)
2 NOMBRE DE LA BBDD
3 USUARIO DE LA BBDD
4 CONTRASEÑA DE LA BBDD
funciones mysqle->
    ->mysqli_query(para ejecutar las sentencias query que queremos hacer)
    ->mysqli_fetch_row(recorre linea a linea el archivo )
    ->mysqli_connect_errno()se ejecuta siempre que no podamos conectarnos a la base de datos
    ->mysqli_set_charset($db_connection, "utf8"); especificar el chasert


    TRABAJO CON CRACTERES ESPECIALES MYSQL (%  -)
    %-> SUSTITUYE A UNA CADENA DE CARACTERES
    EJEMPLO -> SI QUIERO QUE ME MUESTRE RESIGISTROS QUE 
    EMPIECEN CON BALON%
    QUE TERMINEN CON %BALON (PUEDEN HABER VARIOS CARACTERES ANTES DE LA ALABRA BALON)
    EJEPLO-> SELECT * FROM hoja1 WHERE VISITANTE LIKE 'Real Madrid%';
    -> SUSTITUYE A UN SOLO CARACTER
  */ 
    // VARIABLES PARA LA CONEXION 
    //CONEXION EXTERNA GARDANDO  LOS DATOS DE CONEXCION HACIENDO UN REQUIERED IMPORTAMOS
   /* $db_hots="localhost";
$db_user="root";
$db_password="mprojo3020DLA";
$db_name="curso_php_pildoras";
$db_table_name="datspersonales";*/
require_once("conexcion_bd_php.php");
$db_connection = mysqli_connect($db_hots, $db_user, $db_password);
// el condicional es para optimizar el funcionamiento sino se puede conetar sañe del codigo php

if (mysqli_connect_errno())
{
    echo "fallo al conectar con la base de datos";
    exit();
}
mysqli_select_db($db_connection, $db_name) or die("no se encuentra la base de datos");
mysqli_set_charset($db_connection, "utf8");
$consulta ="select * from datospersonales";
$resultados = mysqli_query($db_connection, $consulta);
//$fila = mysqli_fetch_row($resultados);
while(($fila=mysqli_fetch_row($resultados))==true)
{
    echo $fila[0]. " ";
    echo $fila[1]. " ";
    echo $fila[2]. " ";
    echo $fila[3]. " ";
    
    echo "<br>";
}



mysqli_close($db_connection);


    ?>
</body>
</html>