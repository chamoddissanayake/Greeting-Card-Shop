<!DOCTYPE html>
<head>
    <title>Sucess!</title>
       
    <style> 
    
        body  {
            background-image: url("../images/background.jpg");
            
        }
    
        .conTab{
            
                margin-top:100px;
            
        }
    
    </style>
    
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		
		<link rel="stylesheet" href="../stylesheets/headsection_stylesheet.css">
		<link rel="stylesheet" href="../stylesheets/navbar_stylesheet.css">
		<link rel="stylesheet" href="../stylesheets/searchbox_stylesheet.css">
		<link rel="stylesheet" href="../stylesheets/slideshow_stylesheet.css">
		<link rel="stylesheet" href="../stylesheets/body_stylesheet.css">
		<link rel="stylesheet" href="../stylesheets/trendcards_stylesheet.css">
		<link rel="stylesheet" href="../stylesheets/footer_stylesheet.css">
		<link rel="stylesheet" href="../stylesheets/about_us_images.css">
		<link rel="stylesheet" href="../stylesheets/userphoto.css">
		
            
</head>

<body>

        <!-- head section -->
	
	<a style="width:450px; height:200px;position:absolute" href="index.php">
</a>
<div id="headsection">
		<p align="right" style="margin-top:0px"><b> 
        
         <a href="../faq.php"> FAQ </a><b></p> 
		<br><br><br><br><br><br><br><br><br>
		</div>
		
		
	<!--  Navigation bar  start -->
	
	<div class="navbar">
 
		<div class="dropdown">
			<button class="dropbtn">Category</button>
    
			<div class="dropdown-content">
			<a href="../category.php">All Cards</a>
			<a href="../search_results.php?cat=birthday">Birthday Card</a>
			<a href="../search_results.php?cat=anniversary">Anniversary Card</a>
			<a href="../search_results.php?cat=mothers">Mothers day Card</a>
			<a href="../search_results.php?cat=fathers">Fathers day Card</a>
			<a href="../search_results.php?cat=getwell">Get Well Card</a>
			<a href="../search_results.php?cat=sympathy">Sympathy Card</a>
			<a href="../search_results.php?cat=wedding">Wedding Card</a>
			<a href="../search_results.php?cat=thankyou">Thank You Card</a>
			<a href="../search_results.php?cat=chrisrtmas">Christmas Card</a>
			</div>
		</div> 
		<a href="../index.php">Home</a>
		<a href="../promotions.php">Promotions</a>
		<a href="../create_own.php">Build your own card</a>
		<a href="../customer_sevice.php">Customer Service</a>
		<a href="../about_us.php">About Us</a>
		
		<div id="searchbox" class="searchbox-right">
			<form class = "searchbox-form" action="search_results.php" method="POST">
				<input type="text" name="serch_box">
				<input type="submit" name="submit" value="Search">
			</form>
		</div>
		
	</div>
<!-- Navigation bar end -->
        
        <?php
        /*$servername = "localhost";
        $username = "root";
        $password = "";
        
        
        // Create connection
        $conn = new mysqli($servername, $username, $password);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } 
        
        // Create database
        $sql = "CREATE DATABASE finalCard";
        if ($conn->query($sql) === TRUE) {
            echo "Database created successfully";
        } else {
            echo "Error creating database: " . $conn->error;
        }
        
        $conn->close(); */
        ?>

        <?php /*
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "finalcard";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } 
        
        // sql to create table
        $sql = "CREATE TABLE cardPreview (

        topic varchar(30) PRIMARY KEY,
        noPgs   int(1) NOT NULL,
        c_width   int(2) NOT NULL,
        c_height  int(2) NOT NULL,
        c_to      varchar(20) NOT NULL,
        c_from    varchar(20) NOT NULL,
        message   varchar(100),
        
        
        
        
        )";

        if ($conn->query($sql) === TRUE) {
            echo "Table MyGuests created successfully";
        } else {
            echo "Error creating table: " . $conn->error;
        }
        
        $conn->close(); */
        ?>




    
       <?php 

        require 'cardConfig.php';

        if (isset($_POST["sub"]))
        {

            $topic = $_POST["topic"];
            $noPgs = $_POST["noPgs"];
            $c_width= $_POST["c_width"];
            $c_height = $_POST["c_height"];
            $c_to = $_POST["c_to"];
            $c_from = $_POST["c_from"];
            $message = $_POST["message"];
            
            
            
            $sql = "INSERT INTO buildCard (topic, noPgs, c_width, c_height, c_to, c_from, message)
                    VALUES ('$topic', '$noPgs', '$c_width', '$c_height', '$c_to', '$c_from', '$message')";



            if($conn->query($sql)) { ?>
                <div id="r1" align="center">
                    <h1 >Ordered Successfully</h1>
                </div>
            <?php }else 
            { ?>
                <div id="r2">
                    <h1>Fail</h1>
                </div>
            <?php 
                echo $conn->error;
            }   
        }
        mysqli_close($conn);
        
    ?>
    
    <div align="center" class="conTab""> 
        <table border=1px height=80px width=550px >
        
            <tr>
                <td>Topic</td>
                <td>Pages</td>
                <td>Width</td>
                <td>Height</td>
                <td>To</td>
                <td>From</td>
                <td>Quote</td>
            </tr>
            
            <tr>
                <td> <?php echo $topic ?> </td>
                <td> <?php echo $noPgs ?> </td>
                <td> <?php echo $c_width ?> </td>
                <td> <?php echo $c_height ?> </td>
                <td> <?php echo $c_to ?> </td>
                <td> <?php echo $c_from ?> </td>
                <td> <?php echo $message ?> </td>
            
            </tr>
       </div>    
    
    </table>
    
    
     <div style="margin: 50px  ">
     
     
                <a href="../index.php" style="text-decoration: none"> <input type="button" value="Home" height="25" width="30" id="create_own_cancel" style="background-color: #ccd1d1;font-size: 105%; margin: 5px auto; border-radius: 4px; cursor:pointer;">
				</a>

     </div>
     
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