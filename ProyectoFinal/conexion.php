<?php

// variables que seran utilizadas para la conexion a la base de datos
$servername = "localhost"; 
$username = "chatAdmin";
$password = "chat1234";
$dbname = "chat";

// crear conexion
$conn = new mysqli($servername, $username, $password, $dbname); 
// chequear el estado de la conexion
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if (!$conn->set_charset("utf8")) {
    printf("Error loading character set utf8: %s\n", $conn->error);
    exit();
} 
