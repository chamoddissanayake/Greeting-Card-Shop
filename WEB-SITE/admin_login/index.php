<?php

	session_start();
	require 'dbconfig/config.php';

?>

<!DOCTYPE html>

<html>

<head>

<title> Login Page</title>

		<link rel="stylesheet" type="text/css" href="css/style.css">	
		<link rel="stylesheet" href="../stylesheets/headsection_stylesheet.css">
		<link rel="stylesheet" href="../stylesheets/navbar_stylesheet.css">
		<link rel="stylesheet" href="../stylesheets/searchbox_stylesheet.css">
		<link rel="stylesheet" href="../stylesheets/slideshow_stylesheet.css">
		<link rel="stylesheet" href="../stylesheets/body_stylesheet.css">
		<link rel="stylesheet" href="../stylesheets/trendcards_stylesheet.css">
		<link rel="stylesheet" href="../stylesheets/footer_stylesheet.css">
		<link rel="stylesheet" href="../stylesheets/about_us_images.css">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		
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

		return true;
		
	}
		

	</script>
		
</head>

<body id="bd">
	<!-- head section -->
	
	<a style="width:450px; height:200px;position:absolute" href="index.php">
</a>
<div id="headsection">
		<p align="right" style="margin-top:0px"><b> 
        
         <a href="faq.php"> FAQ </a><b></p> 
		<br><br><br><br><br><br><br><br><br>
		</div>
		
		
	<!--  Navigation bar  start -->
	
	<div class="navbar">
 
		<div class="dropdown">
			<button class="dropbtn">Category</button>
    
			<div class="dropdown-content">
			<a href="category.php">All Cards</a>
			<a href="search_results.php?cat=birthday">Birthday Card</a>
			<a href="search_results.php?cat=anniversary">Anniversary Card</a>
			<a href="search_results.php?cat=mothers">Mothers day Card</a>
			<a href="search_results.php?cat=fathers">Fathers day Card</a>
			<a href="search_results.php?cat=getwell">Get Well Card</a>
			<a href="search_results.php?cat=sympathy">Sympathy Card</a>
			<a href="search_results.php?cat=wedding">Wedding Card</a>
			<a href="search_results.php?cat=thankyou">Thank You Card</a>
			<a href="search_results.php?cat=chrisrtmas">Christmas Card</a>
			</div>
		</div> 
		<a href="../index.php">Home</a>
		<a href="../promotions.php">Promotions</a>
		<a href="../create_own.php">Build your own card</a>
		<a href="../customer_sevice.php">Customer Service</a>
		<a href="about_us.php">About Us</a>
		
		<div id="searchbox" class="searchbox-right">
			<form class = "searchbox-form" action="search_results.php" method="POST">
				<input type="text" name="serch_box">
				<input type="submit" name="submit" value="Search">
			</form>
		</div>
		
	</div>
<!-- Navigation bar end -->
	
	
	
<br><br><br>

<div id="main-wrapper">

<center>
	<h2>Login Form</h2>

<img src="imgs/avatar.png" class="avatar">

</center>

<form class="myform" action="index.php" method="post" name="frm">

<label><b>Username</label><br/>
<input name="username"  type="text" class="inputvalues" placeholder="Type your username" required/><br/>

<label><b>Password</label><br/>
<input name="password" type="password" class="inputvalues" placeholder="Your password" required/><br/>

<input name="login" type="submit" id="login_btn" value="Login" onclick="return val();"/><br/>
<a href="register.php" style="text-decoration:none;"><input type="button" id="register_btn" value="Register"/></a>


</form>

<?php

if(isset($_POST['login']))
{
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	$query = "select * from user WHERE username='$username' AND password= '$password'";
	
	$query_run = mysqli_query($con,$query);
	
	if(mysqli_num_rows($query_run)>0)
	{
		//valid
		$_SESSION['username'] = $username;
		header('location:homepage.php');
		
	}
	
	else
	{
		//invalid
		
		echo '<script type="text/javascript"> alert("Invald credentials") </script>';
		
		
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

