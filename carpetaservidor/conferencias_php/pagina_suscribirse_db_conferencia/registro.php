<?php
/* 
BASE DE DATOS COMANDOS 
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

*/


$db_hots="localhost";
$db_user="root";
$db_password="";
$db_name="bd_deusto";
$db_table_name="usuarios";
// conecxion base de datos
$db_connection = mysqli_connect($db_hots, $db_user, $db_password, $db_name);
// contro de errores
if(!$db_connection)
{
    die("no se ha podido conectar con la base de datos");
}
if ($db_connection)
    echo "correcto".'<br>';
//CAPTURAR VALORES ENVIADOS
$subs_name = utf8_decode($_POST['nombre']);
$subs_apellido = utf8_decode($_POST['apellido']);
$subs_correo = utf8_decode($_POST['mail']);
// consulta query
$resultado = $db_connection->query("Select * from ".$db_table_name." WHERE correo='".$subs_correo."'");
if($resultado AND $resultado->num_rows>0)
header('location: faile.html');// me envia a la apgina que le digo
else{
    echo "estamos dentro".'<br>';
    $insert_value = 'INSERT INTO '. $db_name .'. '.$db_table_name.' ( nombre, apellido, correo) VALUES ("' . $subs_name . '", "'. $subs_apellido. '", "'. $subs_correo . '")';
    $enviar = mysqli_select_db($db_connection, $db_name);
    $retry_values= mysqli_query($db_connection, $insert_value);

}
if(!$retry_values)
    die('Error: '.'<br>');
else
    header('location: source.html');

mysqli_close($db_connection);

?>