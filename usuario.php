<?php

//importar la conexion
require 'includes/config/databases.php';
$db = conectarDB();
//Crear un email y psw
$email = 'correo@correo.com';
$password = '123456';

$passwordHash = password_hash($password, PASSWORD_BCRYPT);

//Query para crear el usuario
$query = "INSERT INTO usuarios(email, password) VALUES('{$email}','{$passwordHash}');";

exit;

//Agregarlo a la base de datos
mysqli_query($db, $query);