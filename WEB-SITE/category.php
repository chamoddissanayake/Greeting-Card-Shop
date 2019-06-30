<!DOCTYPE html>
<html>
	<head>
		<title>Category</title>
		
		<link rel="stylesheet" href="stylesheets/headsection_stylesheet.css">
		<link rel="stylesheet" href="stylesheets/navbar_stylesheet.css">
		<link rel="stylesheet" href="stylesheets/searchbox_stylesheet.css">
		<link rel="stylesheet" href="stylesheets/body_stylesheet.css">
		<link rel="stylesheet" href="stylesheets/footer_stylesheet.css">
		<link rel="stylesheet" href="stylesheets/category_button_stylesheet.css">
		<link rel="stylesheet" href="stylesheets/card_stylesheet.css">
		
		
		<style type="text/css">

body,h2
{
	margin:0;
	padding:0;
	font-family:arial;
	
	
}	

.text-container h2
{
	font-size:30px;
	color:rgba(225,225,225,.1);
	background-image:url(images/category/Color.jpg);
	background-repeat:repeat-x;
	-webkit-background-clip:text;
	animation:animate 15s Linear infinite;
}

	@keyframes animate
	{
		0%
		{
			background-position:Left 0px top 10px;
		}

		40%
		{
			background-position:Left 800px top 10px;
		}
			
	}		
			
			
.text-container
{
	margin-top:5%;
	text-align:center;


}

</style>
		
	</head>
	
	<body id="bd">
	
	<!--header -->
	<?php include 'php/header.php';?>
	<!--header end -->
	
	
	<br>
	<!-- ----------------------------------------------------------------- -->	
		
	
	<!-- cards start -->
<!--	<center><h2 style="color:red;">Personalize Birthday Cards</h2></center><br><br>
	<center>
	<img src="images/trend/birthday.jpg" class="navi_images" >
	<img src="images/trend/mum.jpg" class="navi_images">
	<img src="images/trend/thank.jpg" class="navi_images">
	</center>
	<br><br>
	<hr>  -->
	<!--  cards end -->
	
	<!-- Category buttons Start -->
	
	<a href="search_results.php?cat=birthday"><input type="button" class="category_buttons" value="Birthday Card"></a>
	<a href="search_results.php?cat=anniversary"><input type="button" class="category_buttons" value="Anniversary Card"></a>
	<a href="search_results.php?cat=thankyou"><input type="button" class="category_buttons" value="Thank you Card"></a>
	<a href="search_results.php?cat=celebrations"><input type="button" class="category_buttons" value="Celebrations Card"></a>
	<a href="search_results.php?cat=mothers"><input type="button" class="category_buttons" value="Mothers' Card"></a>
	<a href="search_results.php?cat=fathers"><input type="button" class="category_buttons" value="Fathers' Card"></a>
	<a href="search_results.php?cat=bestfriend"><input type="button" class="category_buttons" value="Best Friend Card"></a>
	
	<!-- Category buttons End -->
	<br><br><br>
	
	<div class="text-container">
		<h2>Personalized cards for every occasion</h2>
	</div>
	
	
	<?php include 'card_results.php';?>
	
	<!-- footer section -->
		<?php include 'php/footer.php';?>
	<!-- footer section end -->	
	

	</body>
</html>