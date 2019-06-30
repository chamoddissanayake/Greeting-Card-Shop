<?php

	$con=mysqli_connect('localhost','root','');
	
	if (!$con)
	{
		echo 'Not connected to the server';
	}
	
	if(!mysqli_select_db($con,'feedback'))
	{
		echo 'Database not selected';
	}
    
    $About = $_POST['about'];
	$Name = $_POST['name'];
    $Email = $_POST['email'];
    $Subject = $_POST['subject'];
    $Page = $_POST['page'];
    $Comment = $_POST['comment'];
   
    

	
	$sql = "INSERT INTO customer_feedback(About,Name,Email,Subject, Page, Comment)
			VALUES('$About','$Name','$Email','$Subject','$Page','$Comment')";
	
	if(!mysqli_query($con, $sql))
	{
		echo 'Error occured.';
	}
	else
	{
		//echo 'Submitted successfully';
		echo '<script language ="javascript">';
		echo 'alert("Submitted successfully" )';
		echo '</script>';
		
		$con->close();
      
	}
	
	header("Location: ../index.php");
?>