<!DOCTYPE html>
<html>
	<head>
		<title>Search resulta</title>
		
		<link rel="stylesheet" href="stylesheets/headsection_stylesheet.css">
		<link rel="stylesheet" href="stylesheets/navbar_stylesheet.css">
		<link rel="stylesheet" href="stylesheets/searchbox_stylesheet.css">
		<link rel="stylesheet" href="stylesheets/body_stylesheet.css">
		<link rel="stylesheet" href="stylesheets/footer_stylesheet.css">
		<link rel="stylesheet" href="stylesheets/category_button_stylesheet.css">
		<link rel="stylesheet" href="stylesheets/card_stylesheet.css">
		<link rel="stylesheet" href="stylesheets/category_price.css">
		
	</head>
	
	<body id="bd">
		
	<!--header -->
	<?php include 'php/header.php';?>
	<!--header end -->	
	<br>
	

	<?php
		if(isset($_POST['submit']) || isset($_GET['cat'])){
			 include 'card_results.php';
		}
	?>



	<br>	
    <!-- footer section -->
	<?php include 'php/footer.php';?>
	<!-- footer section end -->

	</body>
</html>