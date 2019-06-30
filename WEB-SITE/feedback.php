<!DOCTYPE html>
<html>
	<head>
		<title>Feedback</title>
		
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		
		<link rel="stylesheet" href="stylesheets/headsection_stylesheet.css">
		<link rel="stylesheet" href="stylesheets/navbar_stylesheet.css">
		<link rel="stylesheet" href="stylesheets/searchbox_stylesheet.css">
		<link rel="stylesheet" href="stylesheets/body_stylesheet.css">
		<link rel="stylesheet" href="stylesheets/footer_stylesheet.css">
	
		<style>
		#feedback_fieldset{
			background-image:url('images/feedback/feedbackform.jpg');
			background-size:cover;
			margin-left: 40px;
		}
		</style>
		
		<script>
			function validate()
				{	 
				var x = document.forms["feedback_form"]["email"].value;
				var atpos = x.indexOf("@");
				var dotpos = x.lastIndexOf(".");
				
				//validate name
				if( document.feedback_form.name.value == "" )
					{
					alert( "Please enter your name" );
					document.feedback_form.name.focus() ;
					return false;
				}
	
				//validate email address 
				if( document.feedback_form.email.value == "" )
					{
					alert( "Please enter email");
					document.feedback_form.email.focus();
					return false;
				}
								
				if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {
					alert("Not a valid e-mail address");
				return false;
				}
				
				
				//validate Subject
				if( document.feedback_form.subject.value == "" )
					{
					alert( "Please enter subject" );
					document.feedback_form.subject.focus() ;
					return false;
				}
				
				//validate Comment
				if( document.feedback_form.comment.value == "" )
					{
					alert( "We need your valueable comment." );
					document.feedback_form.comment.focus() ;
					return false;
				}
							
				return( true );
				}
		</script>
		
	</head>
	
	<body id="bd">
	
	<!-- head section -->
	<?php include 'php/header.php';?>
	<!-- head section end -->
	
	
	<!-- Body section start -->
	
		
	<h2><p align="center" style="padding: 0px ;"> Give Feedback </h2></p>
	
	<p align="justify" style="padding: 35px;"><img src="images/feedback.jpg" style="float: right"  height="30%" width="30%"> Use the form below to send us your comments or report any problems you experienced finding information on our website. We read all feedback carefully, but please note that we cannot respond to the comments you submit.</p>
	

		<form name="feedback_form" onsubmit="return(validate())" action="php/feedback.php" method="POST">
			<fieldset style="border:4px groove; border-radius: 10px;width:900px;height:600px " id="feedback_fieldset"  >
				
				<center>
					<h2>GIVE YOUR VALUEABLE FEEDBACK HERE</h2>
				<div style="margin-left:190px">
				<label><p align="justify" style="padding: 35px;"> I HAVE FEEDBACK ABOUT: </label
				
				><select  name="about" placeholder="Select" style="width:240px;height:30px;border-radius:4px; border: 1px solid #ccc;border:1px solid black" ></p>
					<option value="problem1">General Feedback</option>
					<option value="problem2">Websites issue</option>
					<option value="problem3">Report a problem or bug</option>
					<option value="problem4">Didn't find what I was loking for</option>
				</select>
				</div>

			<table>
			<col width="100">
  			<col width="300">
			<col width="100">
  			<col width="300">
				<tr>
					<td><label ><p align="justify" style="padding: 0px;">Name:</label>
					</td>

					<td> <input type="text" name="name" size="30" style="height:22px;border-radius:4px; border: 1px solid #ccc;border:1px solid black" ></p>
					</td>
					
					<td><label ><p align="justify" style="padding: 0px;">Email Address:</label>
					</td>

					<td><input type="text" name="email" size="30" style="height:22px;border-radius:4px; border: 1px solid #ccc;border:1px solid black" ><br></p>
					</td>
				</tr>

				<tr>
					<td><label ><p align="justify" style="padding: 0px;">Subject:</label> 
					</td>

					<td><input type="text" name="subject" size="30" style="height:22px;border-radius:4px; border: 1px solid #ccc;border:1px solid black" ><br></p>
					</td>
					
					<td><label ><p align="justify" style="padding: 0px;">Page or URL:</label> 
					</td>
					
					<td><input type="text" name="page" size="30" style="height:22px;border-radius:4px; border: 1px solid #ccc;border:1px solid black" ><br></p>
					</td>
				</tr>


			</table>





			<label><p align="center" style="padding: 0px;">Comments:</label><b>
			<textarea name="comment" rows="10" cols="114" style="border-radius:4px; border: 1px solid #ccc;border:1px solid black" placeholder="Type comments, feedbacks, suggestions here" ></textarea></p>
	
				
			<input type="submit"  value="Submit my feedback" height="25" width="30" id="feedback_submit" style="background-color: #33beff;font-size: 125%; margin: 5px auto; border-radius: 4px; cursor:pointer;" >
		
			</center>
				
			</fieldset>
		</form> 
		<br/>
	
	<!--Body section end -->
	
	<!-- footer section -->
	<?php include 'php/footer.php';?>
	<!-- footer section end -->

	</body>
</html>