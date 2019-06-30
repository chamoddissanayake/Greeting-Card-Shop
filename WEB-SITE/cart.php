<!DOCTYPE html>
<html>
	<head>
		<title>Cart</title>
		
		<link rel="stylesheet" href="stylesheets/headsection_stylesheet.css">
		<link rel="stylesheet" href="stylesheets/navbar_stylesheet.css">
		<link rel="stylesheet" href="stylesheets/searchbox_stylesheet.css">
		<link rel="stylesheet" href="stylesheets/slideshow_stylesheet.css">
		<link rel="stylesheet" href="stylesheets/body_stylesheet.css">
		<link rel="stylesheet" href="stylesheets/trendcards_stylesheet.css">
		<link rel="stylesheet" href="stylesheets/footer_stylesheet.css">
		<link rel="stylesheet" href="stylesheets/logregbutton.css">
		<link rel="stylesheet" href="stylesheets/purchasingbody.css">
		<style>
		#log_fieldset{
			background-image:url('images/login/form_background_log.jpg'); 
		}
		
		.title{
			
			color:white;
		
		}
		
		
		</style>
		
		
		
	</head>
	
	<body id="bd" >
	
	<!--header -->
	<?php include 'php/header.php';?>
	<!--header end -->		


	<div class="cart">
	
	<h2 align="center" ">Shopping cart </h2> 
	

	<br>
	
	
	<p align="center"  style="font-family:times new roman;"> *maximum of 10 cards from each type is allowed at once* </p>
	
	<div align="center">
	
		<table border="1" width=800>
		
			<tr style="background-color:#55585b; ">
			
				<th class="title">Product name</th>
				<th class="title">Unit price</th>
				<th class="title">Quantity</th>
				<th class="title">Sub price</th>
			
			</tr>
			
			<!-- product 1-->
			
			<tr align="center">
			
				<td>Birthday card</td>
				<td >$3.99</td>
			

				<td> 
				
					
				<script>			
	
					function calculateTot() {
						var no = document.getElementById("no");
						var option = no.options[no.selectedIndex].text;
						var txt = 3.99 * option;
						
						document.getElementById("subTot").value = txt;
					}
	
				</script>
	
					<select id="no">
						<option>1</option>
						<option>2</option>
						<option>3</option>
						<option>4</option>
						<option>5</option>
						<option>6</option>
						<option>7</option>
						<option>8</option>
						<option>9</option>
						<option>10</option>
					</select>
					<input type="button" onclick="calculateTot()" value="Submit"> 
					
					
 				</td>			
				
				<td> $<input type="text" id="subTot" size="20" ></td>
							
				
			</tr>
			
			
			<tr align="center">
			
				<td>Thank you card</td>
				<td >$4.31</td>
			

				<td> 
				
					
				<script>			
	
					function calculateTotv() {
						var no = document.getElementById("num");
						var option = num.options[num.selectedIndex].text;
						var txt = 4.31 * option;
						
						document.getElementById("subTotv").value = txt;
					}
	
	
	
	
				</script>
	
					<select id="num">
						<option>1</option>
						<option>2</option>
						<option>3</option>
						<option>4</option>
						<option>5</option>
						<option>6</option>
						<option>7</option>
						<option>8</option>
						<option>9</option>
						<option>10</option>
					</select>
					<input type="button" onclick="calculateTotv()" value="Submit"> 
					
					
 				</td>			
				
				<td> $<input type="text" id="subTotv" size="20" ></td>
						
				
			</tr>	
			
		
		</table>
		<br><br>
		
		<input type="submit" value="Next" onclick="calculateSubTot()">		
	
	
	</div>
	
	<br><br><br><br><br>
	
	<div id="finalTot" align="center">
	
		<script>
		
			function calculateSubTot(){
			
				var  tot1 =	document.getElementById("subTot");
				var  tot2 =	 document.getElementById("subTotv");
				
				var fin = tot1 + tot2;
				
				document.getElementById("subtotal") = fin;
			
			}
			
		</script>
	
		<label id="subtotal">Sub total: $</label>
		
	
	</div>
	
	
	<br><br><br><br><br>
	
	</div>
	
	
	<!-- footer section -->
	<?php include 'php/footer.php';?>
	<!-- footer section end -->


	</body>
</html>