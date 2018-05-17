<?php

try{
            $pdo=new PDO('mysql:host=localhost; dbname=chat; charset=utf8', 'chatAdmin', 'chat1234'); // conecccion a la base de datos, llamada chat bajo las credenciales especificadas
            //echo "Conectado";
        } catch (Exception $ex) {
            echo "No conectado".$ex;
        }
