<?php

require __DIR__."../conexion.php";
// Clase con funciones para editar tablas
class insertToDB {
// se crea una variable privada la cual tomara la definicion de la variable $conn utilizada para realizar la conexion
    private $pdo;
// cuando se instancia la clase el parametro del constructor pasa a ser la variable $conn dentro de la clase
    public function __construct($pdo) {
        $this->pdo = $pdo;
    }
//funcion para insertar datos a una tabla, la cual recibe 3 parametro, 2 de ellos arreglas para despues especificar los campos
    function Insert($nombre, $descripcion) {
// sentencia sql que ejecuta el comando para ingresar los valores deseados, en la tabla seleccionada a las columnas seleccionadas a traves de variables cuando la funcion sea instanciada
        $sql = "INSERT INTO Primarios " . "(priNombre".',' ."priDescripcion)
        VALUES ( " ."'". $nombre."'" . ','   ."'".$descripcion ."'". ")";
// condicion para verificar si es que los valores se ingresaron a la tabla
        try {
            $this->pdo->exec($sql);
            echo "New record created successfully";
        } catch (Exception $ex) {
            echo $sql."<br>".$ex->getMessage();
        }
    }
}