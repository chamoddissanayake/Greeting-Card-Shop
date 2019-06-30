<!DOCTYPE html>
<html>
	<head>
		<title>Greeting Cards</title>
		
		<link rel="stylesheet" href="stylesheets/headsection_stylesheet.css">
		<link rel="stylesheet" href="stylesheets/navbar_stylesheet.css">
		<link rel="stylesheet" href="stylesheets/searchbox_stylesheet.css">
		<link rel="stylesheet" href="stylesheets/body_stylesheet.css">
		<link rel="stylesheet" href="stylesheets/footer_stylesheet.css">
		<link rel="stylesheet" href="stylesheets/category_sample_background.css">
		<link rel="stylesheet" href="stylesheets/card_stylesheet.css">
		
	
		
	</head>
	
	<body id="bd">
	
	<!--header -->
		<?php include 'php/header.php';?>
	<!--header end -->

	<br><br>
	
	
	<div id="padding">
	<?php
		$conn = new mysqli("localhost","root","","greeting_card_shop");
        if($conn->connect_error){
            die("Connection failed:". $conn->connect_error);
        }
        $sql = "SELECT title, description,image_url,price FROM Card_Detail WHERE card_detail_id =".$_GET['id'];
        // echo $sql;
        $result= $conn->query($sql);
        if ($result->num_rows>0){
            $row =$result -> fetch_assoc();
            echo "<table>";
			echo "<col width='700'>";
			echo "<col width='700'>";
			echo "<tr align='left'>";
			echo "<th><img src=".$row['image_url']." height='80%' width='80%'></th>";
            echo "<th>";
			echo "<p style='font-family:Agency FB; font-size:24px;'' >".$row['title']."</p>";
			echo "<p style='font-family:Agency FB; font-size:24px;'' >".$row['description']."</p>";
			
			echo "<p id='price' style='font-size:40px'>$ ".$row['price']."</p><br> ";
			echo "<a href='payment.php'><input type='submit' value='Purchase' style='width:120px; height:40px; border-radius:8px' ></a>";
			echo "</th>";
			echo "</tr>";
			echo "</table>";
            
        }else{
			echo "0 results";
			echo "<br><br><br><br><br><br><br><br><br><br>";
        }

        $conn -> close();
        
	?>
		
	</div>
	
	
	<!-- footer section -->
		<?php include 'php/footer.php';?>
	<!-- footer section end -->

	</body>
</html>