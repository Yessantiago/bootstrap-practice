<?php

$host = "localhost"; /* Conexion local */
$user = "uwebsql"; /* usuario */
$password = "2021uwebts-sql"; /* Password */
$db_name = "usuarios"; /* Base de datos */

$con = mysqli_connect($host, $user, $password, $db_name);
//se verifica la conexion 

if (!$con) {
    die("Fallo la conexion a la base de datos" . mysqli_connect_error()); 
}
?>