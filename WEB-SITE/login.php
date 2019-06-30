<!DOCTYPE html>
<html>
	<head>
		<title>Login</title>
		
		<link rel="stylesheet" href="stylesheets/headsection_stylesheet.css">
		<link rel="stylesheet" href="stylesheets/navbar_stylesheet.css">
		<link rel="stylesheet" href="stylesheets/searchbox_stylesheet.css">
		<link rel="stylesheet" href="stylesheets/slideshow_stylesheet.css">
		<link rel="stylesheet" href="stylesheets/body_stylesheet.css">
		<link rel="stylesheet" href="stylesheets/trendcards_stylesheet.css">
		<link rel="stylesheet" href="stylesheets/footer_stylesheet.css">
		<link rel="stylesheet" href="stylesheets/logregbutton.css">
		
		<style>
		#log_fieldset{
			background-image:url('images/login/form_background_log.jpg'); 
			background-size:cover;
		}
		</style>
		
		<script>
			 function validate()
				{	 
				if( document.login_form.fname.value == "" )
					{
					alert( "Please enter username" );
					document.login_form.fname.focus() ;
					return false;
				}
				
				if( document.login_form.password.value == "" )
					{
					alert( "Please enter password" );
					document.login_form.password.focus() ;
					return false;
				}
				
				
				return( true );
				}
			
			
		</script>
		
	</head>
	
	<body id="bd">
	
		<!-- header -->
		<?php include 'php/header.php';?>
		<!-- header end -->



	<div id="reg_success" style="background-color: #ffd733 ; font-size: 30px ; text-align: center"></div>

	<script>
		var urlStr = window.location.href;
		var url = new URL(urlStr);
		var usr = url.searchParams.get("usr");
		if(usr){
			document.getElementById('reg_success').innerHTML = "Hello "+usr+", your registeration is success. Please login!";
		}
		var err =  url.searchParams.get("err");
		if(err){
			document.getElementById('reg_success').innerHTML = "Login failed!! Please try again";
		}
	</script>

	<br>
	
	<center>

		<form action="php/login.php"  method="POST" name="login_form" onsubmit="return(validate());">
			<fieldset style=" text-align:center; border:4px groove; border-radius: 10px;width:300px;height:390px" id="log_fieldset">
				<legend>Login</legend>
				<center>
					<h2>LOGIN</h2>
					<a href="http://www.facebook.com"><img src="images/login/fb.png" height="50%" width="50%"></a>
					<a href="http://www.twitter.com"><img src="images/login/twitter.png" height="50%" width="50%"><br></a>
   
				<label>Please enter your email</label><br>
				<input type="text" name="cus_email" size="30" style="border-radius:4px; border: 1px solid #ccc;border:1px solid black" ><br><br>
				<label>Please enter your password</label><br>
				<input type="password" name="cus_password" size="30" style="border-radius:4px; border: 1px solid #ccc;border:1px solid black"><br>
				<a href="forget.php" style="text-decoration:none"><p style="color:red;">Forget your password?</P></a>

				<input type="submit" name="submit" value="Login" height="25" width="30" class="register_button" >
				
				<a href="admin_login/index.php" style="text-decoration:none "><p style="color:black;">Are you an admin?</P></a>
				
				</center>
				
			</fieldset>
		</form> 
	</center>


	</br>

	<!-- footer section -->
		<?php include 'php/footer.php';?>
	<!-- footer section end -->

	</body>
</html>