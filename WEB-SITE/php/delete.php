<?php
session_start();

if(isset($_POST['delete_acc'])){
   

    $conn = new mysqli("localhost","root","","greeting_card_shop");
    if($conn->connect_error){
        die("Connection failed:". $conn->connect_error);
    }
    $sql="DELETE FROM user WHERE user_id = ".$_SESSION['user_id'];
  
    $conn->query($sql);
  
    if($conn->query($sql)===TRUE){
        echo "Record deleted successfully";
        if(session_destroy()){
            header("Location: ../login.php");
        }
        $conn->close();

    }
   
}

?>