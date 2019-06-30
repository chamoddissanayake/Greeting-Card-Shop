<?php
session_start();

if(isset($_POST['submit'])){
    $sEmail = $_POST['cus_email'];
    $sPass = $_POST['cus_password'];

    $conn = new mysqli("localhost","root","","greeting_card_shop");
    if($conn->connect_error){
        die("Connection failed:". $conn->connect_error);
    }
    $sql="SELECT user_id,name,image_url FROM user WHERE email = '".$sEmail."' AND password = '".$sPass."'";
    $result = $conn->query($sql);
    if($result->num_rows==1){
        $row = $result->fetch_assoc();
        // session_register("username");
        $_SESSION['login_user'] = $row['name'];
        $_SESSION['user_id'] = $row['user_id'];
        $_SESSION['user_img'] = $row['image_url'];

        // echo $_SESSION['login_user'];
        header("Location: ../index.php");
        exit;
    }else{
        header("Location: ../login.php?err=login failed");
        exit;
    }

    $conn->close();
   
}
?>