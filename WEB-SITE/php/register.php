<?php
session_start();

$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["userphoto"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["userphoto"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["userphoto"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["userphoto"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["userphoto"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}


if(isset($_POST['submit'])){
    $sLogin = $_POST['cus_name'];
    $sPass = $_POST['cus_password'];
    $sCPass = $_POST['cus_re_password'];
    $sEmail = $_POST['cus_email'];
    $iGender = (int)$_POST['gender'];
    $image_url= "php/".$target_file;
    $sErrors = '';
    if (strlen($sLogin) >= 1 and strlen($sLogin) <= 25) {
        if (strlen($sPass) >= 1 and strlen($sPass) <= 25) {
            if (strlen($sEmail) >= 1 and strlen($sEmail) <= 55) {
                if ($sPass == $sCPass) {
                    if (preg_match('^[a-zA-Z0-9\-\.]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$^', $sEmail)) {
                        if ($iGender == '1' xor $iGender == '0') {
                            // Add to database
                            // mysql_query
                            $conn = new mysqli("localhost","root","","greeting_card_shop");
                            if($conn->connect_error){
                                die("Connection failed:". $conn->connect_error);
                            }
                            $sql="INSERT INTO user(name,email,gender,password,image_url) VALUES('".$sLogin."','".$sEmail."',".$iGender.",'".$sPass."','".$image_url."')";

                            if ($conn->query($sql)==TRUE){
                                echo "New record creatd successfully";
                                header("Location: ../login.php?usr=".$sLogin);
                                $conn->close();
                                exit;
                            }
                            else{
                                $sErrors = 'Error While registering!';
                                $conn->close();
                            }
                            



                        } else {
                            $sErrors = 'Gender is wrong';
                        }
                    } else {
                        $sErrors = 'Email is wrong';
                    }
                } else {
                    $sErrors = 'Passwords are not the same';
                }
            } else {
                $sErrors = 'Address email is too long';
            }
        } else {
            $sErrors = 'Password is too long';
        }
    } else {
        $sErrors = 'Login is too long';
    }
    header("Location: ../register.php?err=".$sErrors);
    exit;
} 
?>