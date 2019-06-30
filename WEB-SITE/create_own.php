<!DOCTYPE html>
<html>
	<head>
		<title>Create your own card</title>

		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

		<link rel="stylesheet" type="text/css" href="formvalid.css">
	<!--	<script src="formvalid.js"> </script>    -->
		
		
		<link rel="stylesheet" href="stylesheets/headsection_stylesheet.css">
		<link rel="stylesheet" href="stylesheets/navbar_stylesheet.css">
		<link rel="stylesheet" href="stylesheets/searchbox_stylesheet.css">
		<link rel="stylesheet" href="stylesheets/body_stylesheet.css">
		<link rel="stylesheet" href="stylesheets/footer_stylesheet.css">
		<link rel="stylesheet" href="stylesheets/buildown_stylesheet.css">
		
		
		
	<script type="text/javascript">
	
	
 
      function validate()
      {	 
		//Theme
		if( document.buildOwn.theme.value == "-1" )
         {
            alert( "Please choose a theme" );
            return false;
         }
		
		
		//Topic
		 if( document.buildOwn.topic.value == "" )
         {
            alert( "Please enter a topic" );
            document.buildOwn.topic.focus() ;
            return false;
         }
		 
		 //Number of pages
		 if( document.buildOwn.noPgs.value == "" ||
         isNaN( document.buildOwn.noPgs.value ) ||
         document.buildOwn.noPgs.length < 3 )
         {
            alert( "Please enter valid number for number of pages field" );
            document.buildOwn.noPgs.focus() ;
            return false;
         }
		 
		 //Width
		 if( document.buildOwn.c_width.value == "" ||
         isNaN( document.buildOwn.c_width.value ) ||
         document.buildOwn.c_width.length < 3 )
         {
            alert( "Please enter valid number for Width" );
            document.buildOwn.c_width.focus() ;
            return false;
         }
		 
		 //Height
		 if( document.buildOwn.c_height.value == "" ||
         isNaN( document.buildOwn.c_height.value ) ||
         document.buildOwn.c_height.length < 3 )
         {
            alert( "Please enter valid number for Height" );
            document.buildOwn.noPgs.focus() ;
            return false;
         }
		 
		 
		 //To
		 if( document.buildOwn.c_to.value == "" )
         {
            alert( "Please enter To" );
            document.buildOwn.c_to.focus() ;
            return false;
         }
		 
		 //From
		 if( document.buildOwn.c_from.value == "" )
         {
            alert( "Please enter From" );
            document.buildOwn.c_from.focus() ;
            return false;
         }
		 
		 return( true );
		 
		 
      }
   
	</script>
	
	</head>
	
	<body id="bd">
		
	<!--header -->
		<?php include 'php/header.php';?>
	<!--header end -->

	<br>
	<!-- body section -->
	
	
	<div id="build">
	<form action="php\confirm.php" method="post" name="buildOwn" style=" border:4px double black; border-radius: 10px;margin-left:400px;margin-right:500px;width:550px;height:900px;padding:50px 50px 50px 150px;" onsubmit="return(validate());" >
			
				<table>
				<tr><td>
					<img src="images/greetingCard.png"  width="150" height="150" >
				</td>	
				
				<td><h2 style="color:black"><u>Build your own card</h2></u><br></td>
				
				</tr>
				</table>	
					
					
				<label> Theme: </label><br>
				<select placeholder="Select" style="width:240px;height:30px;border-radius:4px; border: 1px solid #ccc;border:1px solid black" name="theme">
					<option value="theme1">Theme 1</option>
					<option value="theme2">Theme 2</option>
					<option value="theme3">Theme 3</option>
					<option value="theme4">Theme 4</option>
				</select><br><br>
				
				
				
				<label >Enter topic:</label> <br><input type="text" name="topic" size="30" style="height:22px;border-radius:4px; border: 1px solid #ccc;border:1px solid black" ><br><br>
				<label>Number of pages: </label><br><input type="number" name="noPgs" size="25" style="height:22px;border-radius:4px; border: 1px solid #ccc;border:1px solid black"  ><br><br>
				<label>Width (mm):</label> <br> <input type="number" name="c_width"size="11" style="height:22px;border-radius:4px; border: 1px solid #ccc;border:1px solid black" ><br> <br> 
				<label>Height (mm):</label> <br> <input type="number" name="c_height" size="11"  style="height:22px;border-radius:4px; border: 1px solid #ccc;border:1px solid black"><br><br>
				<label>To:</label><br></label><input type="text" name="c_to" size="40"  style="height:22px;border-radius:4px; border: 1px solid #ccc;border:1px solid black" ><br><br>
				<label>From:</label><br><input type="text" size="37" name="c_from" style="height:22px;border-radius:4px; border: 1px solid #ccc;border:1px solid black" ><br><br>
				<label>Choose mp3 file</label><br><input type="file" size="37" style="height:22px;border-radius:4px; border: 1px solid #ccc;border:1px solid black"><br><br>
				
				
				<label>Quote:</label><br><textarea name="message" rows="10" cols="30" style="border-radius:4px; border: 1px solid #ccc;border:1px solid black">Type here.</textarea>

				<br><br>
				<div  style="margin: 1px 35px; ">
					<input type="reset" value="Clear" height="25" width="30" id="create_own_clear" style="background-color: #ccd1d1;font-size: 105%; margin: 5px auto; border-radius: 4px; cursor:pointer; ">
					<input type="submit" value="Submit" height="25" width="30" id="create_own_submit" name="sub" style="background-color: #4CAF50;font-size: 125%; margin: 5px auto; border-radius: 4px; cursor:pointer;" >
					<a href="index.php" style="text-decoration: none"> <input type="button" value="Cancel" height="25" width="30" id="create_own_cancel" style="background-color: #ccd1d1;font-size: 105%; margin: 5px auto; border-radius: 4px; cursor:pointer;">
					</a>
				
				</div>
				
		
		</form> 
	</div>
	
	
	
	
	<!-- body section end -->
	
	<!-- footer section -->
		<?php include 'php/footer.php';?>
	<!-- footer section end -->
	
	</body>
</html>