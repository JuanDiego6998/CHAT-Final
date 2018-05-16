
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
    $status=$_POST['status'];
    
    $sql="select * from usuarios where userName='".$uname."'AND userPass='".$password."' AND userStatus=0 limit 1";
    $sql_2="select * from usuarios where userName='".$uname."'AND userPass='".$password."' AND userStatus=1 limit 1";
    
    $result= $pdo->query($sql);
    $result_2= $pdo->query($sql_2);

    if($row=$result->fetch()){
        
        header('Location:index.php?login=profesor'); 
        
       $_SESSION['log_in'] = $row['userName'];
       exit();
    }
    else{
       
        header('Location:login.html.php?login=error'); 
         echo " You Have Entered Incorrect Password";
    }
    if($row=$result_2->fetch()){
        
        header('Location:index.php?login=estudiante'); 
        
       $_SESSION['log_inEstud'] = $row['userName'];
       exit();
    }
    else{
       
        header('Location:login.html.php?login=error'); 
         echo " You Have Entered Incorrect Password";
    }
        
}
?>
