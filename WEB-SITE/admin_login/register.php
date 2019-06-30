<?php

	require 'dbconfig/config.php';
?>

<!DOCTYPE html>

<html>

<head>

<title> Registration Page</title>

		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" href="../stylesheets/headsection_stylesheet.css">
		<link rel="stylesheet" href="../stylesheets/navbar_stylesheet.css">
		<link rel="stylesheet" href="../stylesheets/searchbox_stylesheet.css">
		<link rel="stylesheet" href="../stylesheets/slideshow_stylesheet.css">
		<link rel="stylesheet" href="../stylesheets/body_stylesheet.css">
		<link rel="stylesheet" href="../stylesheets/trendcards_stylesheet.css">
		<link rel="stylesheet" href="../stylesheets/footer_stylesheet.css">
		<link rel="stylesheet" href="../stylesheets/about_us_images.css">

	
	<script>
	
	function val()
	{
		if(frm.username.value=="")
		{
			alert("Enter the username");
			frm.password.focus();
			return false;
	
		}
	
		if(frm.password.value=="")
		{
			alert("Enter the password");
			frm.password.focus();
			return false;
	
		}


		if((frm.password.value).length<8)
		{
			alert("password should be minium 8 characters");
			frm.password.focus();
			return false;
	
		}

		if(frm.cpassword.value=="")
		{
			alert("Enter the Confirm Password");
			frm.cpassword.focus();
			return false;
		
		}

		if(frm.cpassword.value!=frm.password.value)
		{
			alert("Password confirmation does not match");
			return false;
	
		}

		return true;

}

</script>

	
		
</head>

<body id="bd">
	<!-- head section -->
	<?php include '../php/header.php';?>
	<!-- head section end -->
	
<br><br><br>

<div id="main-wrapper">

<center><h2>Registration Form</h2>

<img src="imgs/avatar.png" class="avatar"/>

</center>

<form name="frm" class="myform" action="register.php" method="post">

<label><b>Username</label><br/>
<input name="username" type="text" class="inputvalues" placeholder="Type your username" required/><br/>

<label><b>Password</label><br/>
<input name="password" type="password" class="inputvalues" placeholder="Your password" required/><br/>

<label><b>Confirm Password</label><br/>
<input name="cpassword"type="password" class="inputvalues" placeholder="Confirm password" required /><br/>

<input name="submit_btn"  type="submit" id="signup_btn" value="Sign Up" onclick="return val();"/><br/>
<a href="index.php" style="text-decoration:none;" ><input type="button" id="back_btn" value="Back"/></a>


</form>

<?php

if(isset($_POST['submit_btn']))
{
	//echo '<script type="text/javascript"> alert("Sign Up button clicked") </script>';
	
	$username = $_POST['username'];
	$password = $_POST['password'];
	$cpassword = $_POST['password'];
	
	if($password==$cpassword)
	{
		$query = "select * from user WHERE username='$username'";
		
		$query_run = mysqli_query($con,$query);
		
		if(mysqli_num_rows($query_run)>0)
		{
			//there is already a user with the same username
			echo'<script type="text/javascript" > alert("User already exists..try another username") </script>';
		}
		
		else
		{
			$query = "insert into user values('$username','$password')";
			$query_run = mysqli_query($con,$query);
			
			if($query_run)
			{
				
				echo'<script type="text/javascript" > alert("User Registered..Go to login page to login") </script>';
			}
			
			else
			{
				echo'<script type="text/javascript" > alert("Error!") </script>';	
			}	
		}	
	}
	
	else
	{
		echo'<script type="text/javascript" > alert("Password and confirmpassword does not match!") </script>';
	}	
}

?>
<br><br><br>

</div>

<br><br><br>
			<!-- footer section -->
	
			<footer>
			<br>	

			<span><a href="https://play.google.com/store?hl=en"><img src="../images/store/playstore.png" height="10%" width="15%"></a></span>
			<span style="top: -1vW;position: relative;"><a href="https://itunes.apple.com/us/genre/ios/id36?mt=8"><img src="../images/store/appstore.png"  id="appstore"></a></span>


			<!-- large table -->

			<table>
				<tr>
					<td> 	
					<span>
					
					<table style="color:white">
						<col width="250">
						<col width="250">
						<col width="250">
						<col width="250">
						<col width="250">
						
						<tr align="left">
							<th><a href="../about_us.php" class="links">About Us</a></th>
							<th><a href="../contact_us.php" class="links">Contact Us</th>
							<th>Brand</th>
							<th><a href="../login.php" class="links">My Account</th>
							
						</tr>
					
						<tr align="left">
							<th>Delivery Info</th>
							<th>Returns</th>
							<th>Gift vouchers</th>
							<th>Order History</th>
						</tr>
					
						<tr align="left">
							<th>Privacy Policy</th>
							<th>Site map</th>
							<th>Affiliates</th>
							<th>Wish List</th>
						</tr>
						
						<tr align="left">
							<th>Terms & Conditions</th>
							<th></th>
							<th>Specials</th>
							<th>Newsletters</th>
						</tr>
						</table>
					</span> 
					</td>


					<td> 
						<span id="tel"> </span>
					
						<span>
							<p style="color:white;"><img src="../images/phone.jpg"  height="100px" width="100px" style="float: left">Phone:<br>+94112187653<br>+94112176354<br>+94772345675<br>E-mail:<br>inquiries@xtore.com </p>
						</span> 
					</td>
				</tr>
				</table>

				<br><br><br><br>
				<table style="color:white; width:100%">
				
					
					<tr>
						<th style="text-align:left;">Copyright 1995-2018 Xtore. All Rights Reserved</th>
						<th style="text-align:right;">Last Updated: 07/08/2018</th>
					</tr>

				</tr>
				</table>
				</footer>
				<!-- footer section end -->

</body>

</html>