<?php

include("db.php");
if(isset($_POST['submit']))
{
	$cardno = $_POST['cardno'];
	$scode = $_POST['scode'];
	
	if(!empty($cardno) && !empty($scode))
	{
		$sql = "INSERT INTO `online-payment`(`cardno`, `scode`) 
		VALUES ('$cardno','$scode')";
	
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

	<title>Payment</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		
		<link rel="stylesheet" href="stylesheets/headsection_stylesheet.css">
		<link rel="stylesheet" href="stylesheets/navbar_stylesheet.css">
		<link rel="stylesheet" href="stylesheets/searchbox_stylesheet.css">
		<link rel="stylesheet" href="stylesheets/slideshow_stylesheet.css">
		<link rel="stylesheet" href="stylesheets/body_stylesheet.css">
		<link rel="stylesheet" href="stylesheets/trendcards_stylesheet.css">
		<link rel="stylesheet" href="stylesheets/footer_stylesheet.css">
		<link rel="stylesheet" href="stylesheets/about_us_images.css">
		<link rel="stylesheet" href="stylesheets/userphoto.css">
		
	<link rel="stylesheet" type="text/css" href="style.css">

	<script>

	function val()
	{
		if(frm.cardno.value=="")
		{
			alert("Please enter the Card No");
			frm.cardno.focus();
			return false;
			
		}
		
		if((frm.cardno.value).length<16)
		{
			alert("Card No should be 16 characters");
			frm.cardno.focus();
			return false;
		
		}
		
		if(frm.scode.value=="")
		{
			alert("Please enter the Security Code");
			frm.scode.focus();
			return false;
			
		}
		
		return true;
		
	}

	</script>
	
	

</head>

<body id="bd">

	<!-- head section -->
	<link rel="stylesheet" href="stylesheets/userphoto.css">

<a style="width:450px; height:200px;position:absolute" href="index.php">
</a>
<div id="headsection">
		<p align="right" style="margin-top:0px"><b> 
        <?php
        session_start();   
            if(isset($_SESSION['login_user'])){
                echo '<a href="profile.php">Hello '.$_SESSION['login_user'].'</a> / <a href="php/logout.php">Logout</a>';
            }else{
                echo '<a href="login.php">Login </a>/ <a href="register.php">Register </a> ';
            }
        ?>
            | <a href="faq.php"> FAQ </a><b></p> 

		<?php
		 if(isset($_SESSION['login_user'])){?>
			<div  align="right" class="userphotodiv">
			<a href="profile.php"><img src="<?php echo  $_SESSION['user_img']?>" height="140" width="100"> </a>
			</div>
		 <?php }
		 else
		 {
			 ?>
			
			<div  align="right" class="userphotodiv">
			<img src="php/uploads/default.jpg" height="176px" width="123px"> 
			</div>


		 <?php }
		 ?>


		<br><br>
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
		<a href="index.php">Home</a>
		<a href="promotions.php">Promotions</a>
		<a href="create_own.php">Build your own card</a>
		<a href="customer_sevice.php">Customer Service</a>
		<a href="about_us.php">About Us</a>
		
		
		
	</div>
<!-- Navigation bar end -->
	
	
	<!-- head section end -->

	<div class="header">
		<h2>Payment</h2>
	</div>
			
	 <form action="" method="POST" name="frm" >
	 
	<div class="input-group">

	  <label for="fname">Card number</label>
	  <input type="text" id="cardno" name="cardno" placeholder="Enter your Card number...." maxlength="16">

	 </div>
	  
	   <p align="right"><img src= "img/card.png" width="40%"></p>
	  
	<div class="input-group">
	  
		<label for="expire">Expiration Year/Month/Date</label>
		<input type="date" id="expire" name="expire" placeholder="DD/MM/YYY">
		
	</div>

	<div class="input-group">
		
	  <label for="security">Security code</label>
	  <input type="text" id="scode" name="scode" placeholder="3 or 4 digits" maxlength="4"><br><br>
	 
	</div>

	<div class="input-group"> 
	  
	   <input type="submit" class="btn" value="PAY" name="submit" onclick = "return val();" /><br/><br/>
	   <input type="Reset" class="btn" value="Reset">
	   
	</div>

	</form>		

	<!-- footer section -->
	<?php include 'php/footer.php';?>
	<!-- footer section end -->
	
	</body>

</html>