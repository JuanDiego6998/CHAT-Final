
<?php
 session_start();
try{
            $pdo=new PDO('mysql:host=localhost; dbname=chat; charset=utf8', 'chatAdmin', 'chat1234'); // conecccion a la base de datos, llamada chat bajo las credenciales especificadas
            //echo "Conectado";
        } catch (Exception $ex) {
            echo "No conectado".$ex;
        }
 
if(isset($_POST['userName'])){
    
    $uname=$_POST['userName'];
    $password=$_POST['password'];
    
    $sql="select * from usuarios where userName='".$uname."'AND userPass='".$password."' limit 1";
    
    $result= $pdo->query($sql);

    if($row=$result->fetch()){
        
        header('Location:index.php?login=success'); 
       $_SESSION['log_in'] = $row['userName'];
       exit();
    }
    else{
       
        header('Location:login.html.php?login=error'); 
         echo " You Have Entered Incorrect Password";
    }
        
}
?>
