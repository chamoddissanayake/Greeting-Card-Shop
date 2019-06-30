<?php

include("db.php");


?>




<!DOCTYPE html>
<html>
	<head>
		<title></title>
	
			<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
			
			<link rel="stylesheet" type="../text/css" href="formvalid.css">
			<link rel="stylesheet" href="../stylesheets/headsection_stylesheet.css">
			<link rel="stylesheet" href="../stylesheets/navbar_stylesheet.css">
			<link rel="stylesheet" href="../stylesheets/body_stylesheet.css">
			<link rel="stylesheet" href="../stylesheets/footer_stylesheet.css">
			<link rel="stylesheet" href="../stylesheets/buildown_stylesheet.css">
			<link rel="stylesheet" type="text/css" href="style.css">

<style type="text/css">

table
{
	border:1px solid black;
	border-coLLapse:collapse;
}

td
{
	border:1px solid black;
	padding:10px;
	
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
	</head>

	<body id="bd">
		
		<!--header -->

	<link rel="stylesheet" href="stylesheets/userphoto.css">

<a style="width:450px; height:200px;position:absolute" href="index.php">
</a>
<div id="headsection">
		<p align="right" style="margin-top:0px"><b> 
        <input name="logout" type="submit" id="logout_btn" value="Log Out"/> <a href="faq.php"> FAQ </a><b></p> 




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
		<br><br><br><br>
<center>	
		<table>
		<tr>
			<td>ID</td>
			<td>First name</td>
			<td>Last name</td>
			<td>Email</td>
		</tr>
		<tr>

		<?php

		$sel = "SELECT * FROM `insertdeleteedittable`";
		$qrydisplay = mysqli_query($connect,$sel);

		while($row = mysqli_fetch_array($qrydisplay))
		{
			$id = $row['id'];
			$firstname = $row['firstname'];
			$lastname = $row['lastname'];
			$email= $row['email'];
			
			echo"<tr><td>" .$id. "</td><td>".$firstname."</td><td>".$lastname."</td><td>".$email."</td><td><a href='edit.php?edit=$id'>Edit</a></td><td><a href='delete.php?deleteid=$id'>Delete</a></td></tr>";
			
			
		}

		?>

		</tr>

		</table>
</center>		
		<br><br><br><br>
		
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
