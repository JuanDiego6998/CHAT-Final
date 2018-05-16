<?php

require __DIR__."../conexion.php";
// Clase con funciones para editar tablas
class insertToDB {
// se crea una variable privada la cual tomara la definicion de la variable $conn utilizada para realizar la conexion
    private $conn;
// cuando se instancia la clase el parametro del constructor pasa a ser la variable $conn dentro de la clase
    public function __construct($conn) {
        $this->conn = $conn;
    }
//funcion para insertar datos a una tabla, la cual recibe 3 parametro, 2 de ellos arreglas para despues especificar los campos
    function Insert($nombre, $descripcion) {
// sentencia sql que ejecuta el comando para ingresar los valores deseados, en la tabla seleccionada a las columnas seleccionadas a traves de variables cuando la funcion sea instanciada
        $sql = "INSERT INTO Primarios " . "(priNombre".',' ."priDescripcion)
        VALUES ( " ."'". $nombre."'" . ','   ."'".$descripcion ."'". ")";
// condicion para verificar si es que los valores se ingresaron a la tabla
        if ($this->conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo"<br>";
           echo "Error: " . $sql . "<br>" . $this->conn->error;
        }
    }
}