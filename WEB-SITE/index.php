<!DOCTYPE html>
<html>
	<head>
		<title>Home</title>
		
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		
		<link rel="stylesheet" href="stylesheets/headsection_stylesheet.css">
		<link rel="stylesheet" href="stylesheets/navbar_stylesheet.css">
		<link rel="stylesheet" href="stylesheets/searchbox_stylesheet.css">
		<link rel="stylesheet" href="stylesheets/slideshow_stylesheet.css">
		<link rel="stylesheet" href="stylesheets/body_stylesheet.css">
		<link rel="stylesheet" href="stylesheets/trendcards_stylesheet.css">
		<link rel="stylesheet" href="stylesheets/footer_stylesheet.css">
		<link rel="stylesheet" href="stylesheets/category_sample_background.css">
	
		
	 <script src="javascripts/clock.js"></script> 
		
		
	</head>
	
	<body id="bd" onload="digi()">

	<!--header -->
	<?php include 'php/header.php';?>
	<!-- header end -->

	
	<!--Clock -->

	<p id="clock" style="position: relative; left: 1400px;" ></p>
	
	<!-- Clock end --> 
	
	<!-- video Start -->
		<center>
		<video width="1152" height="648" autoplay controls loop>
		<source src="videos/video1.mp4" type="video/mp4">
		</video>
		</center>
	<!-- Video End-->
	<br>

	
	<!-- Trending cards start -->
	<center><u><h2 style="color:black;">Trending Cards</h2></u></center>
	<center>
	<a href="search_results.php?cat=birthday"><img src="images/trend/birthday.jpg" class="trend_cd_cir" ></a>
	<a href="search_results.php?cat=mothers"><img src="images/trend/mum.jpg" class="trend_cd_cir"></a>
	<a href="search_results.php?cat=thankyou"><img src="images/trend/thank.jpg" class="trend_cd_cir"></a>
	</center>
	<br><br>

	<!-- Trending cards end -->
	
	
	
	<!-- Slide show start -->
	
	<div class="container"> 
		
			<input type="radio" name="images" id="i1" checked>
			<input type="radio" name="images" id="i2">
			<input type="radio" name="images" id="i3">
			<input type="radio" name="images" id="i4">
			<input type="radio" name="images" id="i5">
			
			
			<div class="slide_img" id="one">
				<img src="images/slideshow/slide1.jpg">
				<label for="i5" class="pre"></label>
				<label for="i2" class="nxt"></label>
			</div>
			
			<div class="slide_img" id="two">
				<img src="images/slideshow/slide2.jpg">
				<label for="i1" class="pre"></label>
				<label for="i3" class="nxt"></label>
			</div>
			
			<div class="slide_img" id="three">
				<img src="images/slideshow/slide3.jpg">
				<label for="i2" class="pre"></label>
				<label for="i4" class="nxt"></label>
			</div>
			
			<div class="slide_img" id="four">
				<img src="images/slideshow/slide4.jpg">
				<label for="i3" class="pre"></label>
				<label for="i5" class="nxt"></label>
			</div>
			
			<div class="slide_img" id="five">
				<img src="images/slideshow/slide5.jpg">
				<label for="i4" class="pre"></label>
				<label for="i1" class="nxt"></label>
			</div>
	
		<div class="nav">
			<label class="dots" id="dot1" for="i1"></label>
			<label class="dots" id="dot2" for="i2"></label>
			<label class="dots" id="dot3" for="i3"></label>
			<label class="dots" id="dot4" for="i4"></label>
			<label class="dots" id="dot5" for="i5"></label>
			
		</div>
	
	
	</div>
	<br><br>
	
	<!-- Slide show end -->

	
	<!-- footer section -->
		<?php include 'php/footer.php';?>
	<!-- footer section end -->

	</body>
</html>