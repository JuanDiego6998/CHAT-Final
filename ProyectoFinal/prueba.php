<?php

// variables que seran utilizadas para la conexion a la base de datos
$servername = "localhost"; 
$username = "chatAdmin";
$password = "chat1234";
$dbname = "objetos";

// crear conexion
$conn = new mysqli($servername, $username, $password, $dbname); 
// chequear el estado de la conexion
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
