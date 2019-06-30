
<?php
include("db.php");
if(isset($_POST['submitinserdetails']))
{
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$email = $_POST['email'];

	if(!empty($firstname) && !empty($lastname) && !empty($email))
	{
		$sql = "INSERT INTO `insertdeleteedittable`(`firstname`, `lastname`, `email`) 
		VALUES ('$firstname','$lastname','$email')";
	
		$qry =mysqli_query($connect,$sql);
	
		if($qry)
		{		
			echo"Inserted successfully";
		}
	}
	else
	{
		echo"All fields must be Filled";
			
	}
}
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Upload</title>
		
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		
		<link rel="stylesheet" type="../text/css" href="formvalid.css">
		<link rel="stylesheet" href="../stylesheets/headsection_stylesheet.css">
		<link rel="stylesheet" href="../stylesheets/navbar_stylesheet.css">
		<link rel="stylesheet" href="../stylesheets/body_stylesheet.css">
		<link rel="stylesheet" href="../stylesheets/footer_stylesheet.css">
		<link rel="stylesheet" href="../stylesheets/buildown_stylesheet.css">
		<link rel="stylesheet" type="text/css" href="style.css">
	<style>
		.btn
		{
			padding:10px;
			font-size:15px;
			background:#5F9EA0;
			border:none;
			border-radius:5px;
			
		}
		#logout_btn
		{
			margin-top:10px;
			background-color:#c0392b;
			padding:5px;
			color:white;
			width:5%;
			margin-left: 1440px;
			text-align:center;
			font_size:10px;
			font_weight:bold;	
			margin-bottom:20px;
					
		}

		
		
		
	</style>
	
	<script>
	
	function val()
	{
			if(frm.firstname.value=="")
			{
				alert("Enter the Firstname");
				frm.firstname.focus();
				return false;
				
			}
			
			if(frm.lastname.value=="")
			{
				alert("Enter the Lastname");
				frm.lastname.focus();
				return false;
				
			}
		
			if(frm.email.value=="")
			{
				alert("Enter the Email");
				frm.email.focus();
				return false;
				
			}
			
			var reg= /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
			
			if(reg.test(frm.email.value)==false)
			{
				alert('Invalid email address');
				frm.email.focus();
				return false;
				
			}
			
			return true;
		
	}
	
	</script>
	
	</head>
	
	<body id="bd">

		<!--header -->
	<link rel="stylesheet" href="stylesheets/userphoto.css">

<a style="width:450px; height:200px;position:absolute" href="index.php">
</a>
<div id="headsection">
		<p align="right" style="margin-top:0px"><b> 
        <a href="../admin_login/index.php" style="text-decoration:none" ><input name="logout" type="submit" id="logout_btn" value="Log Out">|</a> <a href="../faq.php"> FAQ </a><b></p> 




		<br><br><br><br><br><br><br>
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
		<a href="../about_us.php">About Us</a>
		
	
		
	</div>
<!-- Navigation bar end -->
		<!--header end -->
	
		<div class="header">
		<h2>Upload</h2>
		</div>

		<form action="" method="POST" name="frm">

		<div class="input-group">
			<label>First-Name</label>
			<input type="text" name="firstname">
		</div>

		<div class="input-group">
			<label>Last-Name</label>
			<input type="text" name="lastname">
		</div>

		<div class="input-group">
			<label>Email</label>
			<input type="text" name="email">
		</div>
			<input type="submit" name="submitinserdetails" value="insert" class="btn" onclick="return val();"/>
		<a href="display.php" style="text-decoration:none;" ><input type="button" value="display" class="btn" >
		<a href="../admin_login/homepage.php" style="text-decoration:none;" ><input type="button" value="back" class="btn" >
		</form>
		<br><br>
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

