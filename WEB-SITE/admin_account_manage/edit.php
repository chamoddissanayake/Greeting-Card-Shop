<?php

include("db.php");

$getid = $_GET['edit'];



$seledittwo = "SELECT * FROM `insertdeleteedittable` WHERE $getid";

$qry = mysqli_query($connect,$seledittwo);

$selassoc = mysqli_fetch_assoc($qry);

$id = $selassoc['id'];
$firstname = $selassoc['firstname'];
$lastname = $selassoc['lastname'];
$email = $selassoc['email'];

if(isset($_POST['updateedit']))
{
	$upid = $_POST['upid'];
	$upfirstname = $_POST['upfirstname'];
	$uplastname = $_POST['uplastname'];
	$upemail = $_POST['upemail'];
	
	
	$seleditt = " UPDATE `insertdeleteedittable` SET `firstname`= '$upfirstname',
	`lastname`= '$uplastname',`email`= '$upemail' WHERE `id`= '$upid'";
	
	$qry = mysqli_query($connect,$seleditt);

	if($qry)
	{
		header("location:display.php");
		
		
	}
	
}

//$seledit = " UPDATE `insertdeleteedittable` SET `id`=[value-1],`firstname`=[value-2],`lastname`=[value-3],`email`=[value-4] WHERE `id`= '$getid'";

?>



<!DOCTYPE html>

<html>
<head>

<title></title>

<link rel="stylesheet" type="text/css" href="user.css">

<script>
	
	function val()
	{
			if(frm.upfirstname.value=="")
			{
				alert("Enter the Firstname");
				frm.upfirstname.focus();
				return false;
				
			}
			
			if(frm.uplastname.value=="")
			{
				alert("Enter the Lastname");
				frm.uplastname.focus();
				return false;
				
			}
		
			if(frm.upemail.value=="")
			{
				alert("Enter the Email");
				frm.upemail.focus();
				return false;
				
			}
			
			var reg= /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za]{2,4})$/;
			
			if(reg.test(frm.upemail.value)==false)
			{
				alert('Invalid email address');
				frm.upemail.focus();
				return false;
				
			}
			
			return true;
		
	}
	
	</script>
	

</head>

<body>

<div class="header">

<h2>Update</h2>

</div>

<form method="POST" action="" name="frm" >

<div class="input-group">

<label>Upload-ID</label>
<input type="text" name="upid" value="<?php echo $id; ?>">

</div>

<div class="input-group">

<label>Upload-First-Name</label>
<input type="text" name="upfirstname" value="<?php echo $firstname; ?>">

</div>

<div class="input-group">

<label>Upload-Last-Name</label>
<input type="text" name="uplastname" value="<?php echo $lastname; ?>">

</div>

<div class="input-group">

<label>Upload-Email</label>
<input type="text" name="upemail" value="<?php echo $email; ?>">

</div>

<div class="input-group">

<label>Upload-ID</label>

<input type="submit" name="updateedit" value="Update" class="btn" onclick="return val();"/>

</div>

</form>

</body>


</html>