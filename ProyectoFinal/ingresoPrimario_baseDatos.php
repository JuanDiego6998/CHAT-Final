<?php

require __DIR__."../conexion.php";

$sNombreFoto;
// Clase con funciones para editar tablas
class insertToDB {
// se crea una variable privada la cual tomara la definicion de la variable $conn utilizada para realizar la conexion
    private $pdo;
// cuando se instancia la clase el parametro del constructor pasa a ser la variable $conn dentro de la clase
    public function __construct($pdo) {
        $this->pdo = $pdo;
    }
//funcion para insertar datos a una tabla, la cual recibe 3 parametro, 2 de ellos arreglas para despues especificar los campos
    function Insert($nombre, $descripcion, $tablaNombre, $tablaDescripcion, $tabla) {
// sentencia sql que ejecuta el comando para ingresar los valores deseados, en la tabla seleccionada a las columnas seleccionadas a traves de variables cuando la funcion sea instanciada
        $sql = "INSERT INTO ".$tabla."(".$tablaNombre.",".$tablaDescripcion.")"
                . "VALUES ('".$nombre."', '".$descripcion."')";
// condicion para verificar si es que los valores se ingresaron a la tabla
        try {
            $this->pdo->exec($sql);
            echo "New record created successfully";
        } catch (Exception $ex) {
            echo $sql."<br>".$ex->getMessage();
        }
    }
    
    function InsertURL($sNombre, $sRef){
        $sql = "INSERT INTO imagenes (imgURL, imgRef)"
                . "VALUES ('img/portfolio/".$sNombre."', ".$sRef.")";
        try {
            $this->pdo->exec($sql);
            echo "New record created successfully";
        } catch (Exception $ex) {
            echo $sql."<br>".$ex->getMessage();
        }
    }
}

if(isset($_POST['ingresar'])){
    $file=$_FILES['file'];

    $fileName=$_FILES['file']['name'];
    $fileTmpName=$_FILES['file']['tmp_name'];
    $fileSize=$_FILES['file']['size'];
    $fileError=$_FILES['file']['error'];
    $fileType=$_FILES['file']['type'];
    
    $fileExt= explode('.',$fileName);
    $fileActualExt = strtolower(end($fileExt));
    
    $allowed=array('jpg','jpeg','png');
    
    if(in_array($fileActualExt, $allowed)){
        if($fileError === 0){ 
            if($fileSize < 1000000){
                $fileNameNew = uniqid('',true).".".$fileActualExt;
                $sNombreFoto = $fileNameNew;
             $fileDestination = 'img/portfolio/'.$fileNameNew;
             move_uploaded_file($fileTmpName, $fileDestination);
             header("location: index.php?uploadsuccess");
            }else{
                echo"your file is too big";
            }
        }else{
            echo " there was an error uploading your file";
        }
    } else {
        echo "you cannot upload files of this type";
    }
}