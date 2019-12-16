<!-- En esta seccion realizamos la conexion con la base de datos -->
<?php

$host= 'localhost';
$user= 'root';
$pass= '';
$db_name= 'itec_test_2019-11-18';

$conection = new mysqli($host, $user, $pass, $db_name, 3306);
if ($conection->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $conection->connect_errno . ") " . $conection->connect_error;
}