<!DOCTYPE html>
<html>
	<head>
		<title>User profile</title>
		
		<link rel="stylesheet" href="stylesheets/headsection_stylesheet.css">
		<link rel="stylesheet" href="stylesheets/navbar_stylesheet.css">
		<link rel="stylesheet" href="stylesheets/searchbox_stylesheet.css">		
		<link rel="stylesheet" href="stylesheets/body_stylesheet.css">
		<link rel="stylesheet" href="stylesheets/footer_stylesheet.css">
		<link rel="stylesheet" href="stylesheets/logregbutton.css">

        <style>
        #prof_fieldset{
			background-image:url('images/register/form_background_reg.jpg');
			background-size:cover;			
		}
		</style>
		
	</head>
	
	<body id="bd">
	
	<!-- header -->
	<?php include 'php/header.php';?>
	<!-- header end -->
    <br>
	
	
	
    <?php
            if(isset($_SESSION['user_id'])){
                

                $conn = new mysqli("localhost","root","","greeting_card_shop");
                if($conn->connect_error){
                    die("Connection failed:". $conn->connect_error);
                }
                $sql="SELECT name,email,gender FROM user WHERE user_id = '".$_SESSION['user_id']."'";
                $result = $conn->query($sql);
                if($result->num_rows==1){
                    $row = $result->fetch_assoc();

                    $male_status = "unchecked";
                    $female_status ="unchecked";

                    if($row['gender']==1){
                        $male_status="checked";
                    }else{
                        $female_status = "checked";
                    }


                    ?>
					
					<div>
						<h2 style="text-align:center">User profile</h2>
					</div>				
					
                    <form name="profile_form" onsubmit="return(validate());" action="profile.php" method="POST">
			            <fieldset style="border:4px groove; border-radius: 10px;margin-left:40% ;width:300px;height:420px;" id="prof_fieldset">
                            
                            <legend>Edit Profile</legend>
                            <center>
                                <h3>Change your details</h3>
                            <label>Name</label><br>
                            <input type="text" value="<?php echo $row['name'] ?>" name="cus_name" size="30" style="border-radius:4px; border: 1px solid #ccc;border:1px solid black" ><br><br>
                            <label>Gender</label>
                            <input type="radio" id="gender" <?php echo $male_status ?> name="gender" value="1" style="border-radius:4px; border: 1px solid #ccc;border:1px solid black" >Male
                            <input type="radio" id="gender"  <?php echo $female_status ?> name="gender" value="0" style="border-radius:4px; border: 1px solid #ccc;border:1px solid black" >Female<br><br>
                            <label>Please enter your  e-mail</label><br>
                            <input type="e-mail" value="<?php echo $row['email'] ?>" name="cus_email" size="30"  style="border-radius:4px; border: 1px solid #ccc;border:1px solid black" ><br><br>
                            <label>Please enter your new password</label><br>
                            <input type="password"  name="cus_password"   size="30" style="border-radius:4px; border: 1px solid #ccc;border:1px solid black" ><br><br>
                            <!-- pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?!.*\s).*$"-->
                            <label>Please confirm your new password</label><br>
                            <input type="password" name="cus_re_password"  size="30" style="border-radius:4px; border: 1px solid #ccc;border:1px solid black" ><br><br>

                            <input type="submit" name = "submit" value="Update Profile" height="25" width="30" class="register_button" >
                            
                           
                            </center>
                            
                        </fieldset>
		            </form> 

                    


                  <form name="profile_delete_form"  action="php/delete.php" method="POST">
			            <fieldset style="border:4px groove; border-radius: 10px;margin-left:40%;width:300px;height:80px;" id="prof_fieldset">
                            
                            <legend>Delete profile</legend>
                            <center>
                               
                        
                            <input type="submit" name = "delete_acc" value="Delete my account" height="25" width="30" id="delete_acc" class="register_button">

                            </center>
                            
                        </fieldset>
		            </form>     
                    
                    <?php
                }



            }else{
                header("Location: login.php?err=please login again");
                exit;
            }
        ?>

<?php
    if(isset($_POST['submit'])){
        $sLogin = $_POST['cus_name'];
        $sPass = $_POST['cus_password'];
        $sCPass = $_POST['cus_re_password'];
        $sEmail = $_POST['cus_email'];
        $iGender = (int)$_POST['gender'];
        $sErrors = '';
        // echo empty($sPass);

        if (strlen($sLogin) >= 1 and strlen($sLogin) <= 25) {
            if( (strlen($sPass) >= 1 and strlen($sPass) <= 25) || empty($sPass)) {
                if ((strlen($sEmail) >= 1 and strlen($sEmail) <= 55) ) {
                    if ($sPass == $sCPass) {
                        if (preg_match('^[a-zA-Z0-9\-\.]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$^', $sEmail)) {
                            if ($iGender == '1' xor $iGender == '0') {
                                // Add to database
                                // mysql_query
                                $conn = new mysqli("localhost","root","","greeting_card_shop");
                                if($conn->connect_error){
                                    die("Connection failed:". $conn->connect_error);
                                }
                                $sql="UPDATE user SET name='" .$sLogin."' , email='".$sEmail."',gender=".$iGender;
                                if(!empty($sPass)){
                                    $sql=$sql.",password='".$sCPass  . "'";
                                }
                                $sql=$sql." WHERE user_id=".$_SESSION['user_id'];
                            //    echo $sql;
    
                                if ($conn->query($sql)==TRUE){
                                    // header("Location: index.php");
                                    $_SESSION['login_user'] = $sLogin;

                                    $conn->close();
                                    echo "<script>window.location.href = 'index.php'</script>";
                                    exit;
                                }
                                else{
                                    $sErrors = 'Error While updating!';
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
        echo $sErrors;
        // header("Location: profile.php?err=".$sErrors);
        exit;
    }



?>






    <br><br><br>
	<!-- footer section -->
		<?php include 'php/footer.php';?>
	<!-- footer section end -->

	</body>
</html>