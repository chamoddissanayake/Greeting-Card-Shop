<!DOCTYPE html>
<html>
	<head>
		<title>FAQ</title>
		
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
	 
	 
	 <style type="text/css">

.flip3D
{
	width:240px;
	height:200px;
	margin:10px;
	float:left;
}

.flip3D > .front
{

	position:absolute;
	-webkit-transform:perspective( 600px ) rotateY( 0deg );
	transform:perspective( 600px ) rotateY( 0deg );
	background:#80BFFF;
	width:240px;
	height:200px;
	border-radius:7px;
	-webkit-backface-visibility:hidden;
	backface-visibility:hidden;
	transition: -webkit-transform .5s linear 0s;
	transition:transform .5s linear 0s;

}

.flip3D > .back
{

	position:absolute;
	-webkit-transform:perspective( 600px ) rotateY( 180deg );
	transform:perspective( 600px ) rotateY( 180deg );
	background:#626DF7;
	width:240px;
	height:200px;
	border-radius:7px;
	-webkit-backface-visibility:hidden;
	backface-visibility:hidden;
	transition: -webkit-transform . 5s linear 0s;
	transition:transform .5s linear 0s;

}

.flip3D:hover> .front
{
	-webkit-transform: perspective( 600px )  rotateY( -180deg );
	transform: perspective( 600px )  rotateY( -180deg );

}

.flip3D:hover> .back
{
	-webkit-transform: perspective( 600px )  rotateY( 0deg );
	transform: perspective( 600px )  rotateY( 0deg );

}





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
	background-image:url(images/faq.jpg);
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
	
	<body id="bd" onload="digi()">

	<!--header -->
	<?php include 'php/header.php';?>
	<!-- header end -->

	<br>
	
	<div class="text-container">
			<h2>FAQ</h2>
	</div>
	
	<br>
	<center>
	<!--
	<div style="text-align: center;">
	
		<div class="flip3D">
			<div class ="back"> 
			<p>Answer:-You can use choose files to input your mp3 file</p>
			</div>
			
			<div class ="front"> 
				<p>Questions:-How I put a song to the build your own card</p>
			</div>
		</div>

		<div class="flip3D">
			<div class ="back"> Box 2 - Back 
			</div>
			<div class ="front"> Box 2 - Front
			</div>

		</div>

		<div class="flip3D">
			<div class ="back"> Box 3 - Back 
			</div>
			<div class ="front"> Box 3 - Front
			</div>

		</div>
		
		<div class="flip3D">
			<div class ="back"> Box 4 - Back 
			</div>
			<div class ="front"> Box 4 - Front
			</div>

		</div>
		
		<div class="flip3D">
			<div class ="back"> Box 5 - Back 
			</div>
			<div class ="front"> Box 5 - Front
			</div>

		</div>
	</div>
	
	-->
	
	<table>
		<tr>
			<td>
				<div class="flip3D">
						<div class ="back"> 
							<p>Answer:-Probably. We don't store any of your credit card information
							(that's handled by our payment processor Stripe, the best busines) and 
							we will never share your personal information with anyone else.</p>
						</div>
						
						<div class ="front"> 
							<p>Questions:- Is it safe to put my credit card  number into this website?</p>
						</div>
				</div>		
			</td>
			
			<td>
				<div class="flip3D">
						<div class ="back"> 
							<p>Answer:-We will never share your information with any third party .<br> 
							Who is a third party? - Well the first party is us, and the second party is you<br>
							So a third party is anyone other than us and you. And you know, they probably have enough already.</p>
						</div>
						
						<div class ="front"> 
							<p>Questions:-What is your privacy policy?</p>
						</div>
					</div>
			</td>
			
			<td>
				<div class="flip3D">
					<div class ="back"> 
						<p>Answer:-Send us an email at inquiries@xtore.com </p>
					</div>
					
					<div class ="front"> 
						<p>Questions:-I would like to return my order.</p>
					</div>
				</div>
			</td>
		</tr>
		
		<tr>
			<td>
				<div class="flip3D">
					<div class ="back"> 
						<p>Answer:-You can send us an email.</p>
					</div>
					
					<div class ="front"> 
						<p>Questions:-I want to change my credit/debit card.</p>
					</div>
				</div>
			</td>
			
			<td>
				<div class="flip3D">
					<div class ="back"> 
						<p>Answer:-You can click "forgot your password" link and enter your email.Then our web site will send you a verification code.</p>
					</div>
					
					<div class ="front"> 
						<p>Questions:-Forgot password?</p>
					</div>
				</div>
			</td>
			
			<td>
				<div class="flip3D">
					<div class ="back"> 
						<p>Answer:-Send us an email at inquiries@xtore.com. Then we will discuss this problem with your bank.</p>
					</div>
					
					<div class ="front"> 
						<p>Questions:-What can i do if xtore.com does not support my bank</p>
					</div>
				</div>
			</td>
		</tr>
	
	</table>
	
	
	
	
	</center>
	<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
	<!-- footer section -->
		<?php include 'php/footer.php';?>
	<!-- footer section end -->

	</body>
</html>