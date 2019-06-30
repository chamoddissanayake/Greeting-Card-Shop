<!DOCTYPE html>
<html>
	<head>
		<title>Register</title>
		
		<link rel="stylesheet" href="stylesheets/headsection_stylesheet.css">
		<link rel="stylesheet" href="stylesheets/navbar_stylesheet.css">
		<link rel="stylesheet" href="stylesheets/searchbox_stylesheet.css">
		<link rel="stylesheet" href="stylesheets/slideshow_stylesheet.css">
		<link rel="stylesheet" href="stylesheets/body_stylesheet.css">
		<link rel="stylesheet" href="stylesheets/trendcards_stylesheet.css">
		<link rel="stylesheet" href="stylesheets/footer_stylesheet.css">
		<link rel="stylesheet" href="stylesheets/logregbutton.css">
<!--		<script src="register1.js"></script>  -->
		<style>
		#reg_fieldset{
			background-image:url('images/register/form_background_reg.jpg');
			background-size:cover;			
		}
		</style>
		
		<script>
			
			function validate()
				{	 
				var x = document.forms["register_form"]["cus_email"].value;
				var atpos = x.indexOf("@");
				var dotpos = x.lastIndexOf(".");
				
				//validate name
				if( document.register_form.cus_name.value == "" )
					{
					alert( "Please enter your name" );
					document.register_form.cus_name.focus() ;
					return false;
				}
	
				//validate email address 
				
				if( document.register_form.cus_email.value == "" )
					{
					alert( "Please enter email" );
					document.register_form.cus_email.focus() ;
					return false;
				}
				
				
				
				if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {
					alert("Not a valid e-mail address");
				return false;
				}
				
				
				
				
				//Validate password
				if( document.register_form.cus_password.value == "" )
					{
					alert( "Please enter valid password" );
					document.register_form.cus_password.focus() ;
					return false;
				}
				
				//validate re-enter password
				if( document.register_form.cus_re_password.value == "" )
					{
					alert( "Please enter re-enter password" );
					document.register_form.cus_re_password.focus() ;
					return false;
				}
				//Check both passwords are same
				
				if( document.register_form.cus_re_password.value != document.register_form.cus_password.value)
					{
					alert( "Passwords are not same." );
					//document.register_form.cus_re_password.focus() ;
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
	
	
	
	<br>
	
		<div id="err_div" style="background-color: #ffd733 ; font-size: 30px ; text-align: center"></div>

		<script>
				var urlStr = window.location.href;
				var url = new URL(urlStr);
				var err = url.searchParams.get("err");
				document.getElementById('err_div').innerHTML = err;
		
		
			</script>

		<center>
		<form name="register_form" onsubmit="return(validate())" action="php/register.php" method="POST" enctype="multipart/form-data">
			<fieldset style="border:4px groove; border-radius: 10px;width:300px;height:500px;" id="reg_fieldset">
				<legend>Register</legend>
				<center>
					<h3>CREATE AN ACCOUNT</h3>
				<label>Please enter your name</label><br>
				<input type="text" name="cus_name" size="30" style="border-radius:4px; border: 1px solid #ccc;border:1px solid black" ><br><br>
				<label>Gender</label>
				<input type="radio" id="gender" name="gender" value="1" style="border-radius:4px; border: 1px solid #ccc;border:1px solid black" >Male
				<input type="radio" id="gender" name="gender" value="0" style="border-radius:4px; border: 1px solid #ccc;border:1px solid black" >Female<br><br>
				<label>Please enter your  e-mail</label><br>
				<input type="e-mail" name="cus_email" size="30"  style="border-radius:4px; border: 1px solid #ccc;border:1px solid black" ><br><br>
				<label>Please enter your password</label><br>
				<input type="password"  name="cus_password"   size="30" style="border-radius:4px; border: 1px solid #ccc;border:1px solid black" ><br><br>
				<!-- pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?!.*\s).*$"-->
				<label>Please confirm your password</label><br>
				<input type="password" name="cus_re_password"  size="30" style="border-radius:4px; border: 1px solid #ccc;border:1px solid black" ><br><br>
				<label>Choose your photo: </label>
				<div style="margin-left: 50px;">
				<input type="file" id="userphoto" name="userphoto" accept="image/*">
				</div>
				
				<br>

				<input type="submit" name = "submit" value="Register" height="25" width="30" id="register_button" class="register_button" >
				<a href="admin_login/register.php" style="text-decoration:none "><p style="color:black;">Are you an admin?</P></a>
				</center>
				
			</fieldset>
		</form> 
		</center>
	

	<br><br><br>
	

	<!-- footer section -->
		<?php include 'php/footer.php';?>
	<!-- footer section end -->

	</body>
</html>