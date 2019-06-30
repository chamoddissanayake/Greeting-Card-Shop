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
		
		<div id="searchbox" class="searchbox-right">
			<form class = "searchbox-form" action="search_results.php" method="POST">
				<input type="text" name="serch_box">
				<input type="submit" name="submit" value="Search">
			</form>
		</div>
		
	</div>
<!-- Navigation bar end -->