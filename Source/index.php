<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Newsfeed</title>
	<link rel="stylesheet" type="text/css" href="newsfeed.css">
</head>
<body>
	<?php require 'partials.php' ?>
	 

	<h1> Newsfeed </h1>


	<div class = "column">
		
	

	<section class="textbox">
		<div class="textbox-heading">
			<h2>What's on your mind?</h2>
		</div>
		<form action= "" method="post">
			<input type = "text" name = "message" placeholder="type your message here...">
			<button type="submit" name="message_btn"> Post </button>
		</form>
	
	
</div>
<div class="table">
		<table width="50% border="1" cellpadding="5" cellspacing="5"
			<tr>
			
				
				<td> Message </td>
				<td> Date and Time </td>
			
			</tr> 
			<?php include ('newsfeeddisplay.php') ?>
</table>
</div>
<li class="nav-item active">
        <a class="nav-link" href="logout.php">Logout <span class="sr-only">(current)</span></a>
      </li>';
</section>
</body>
</html>




<?php
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: login.php");
    exit;
}


include 'newsfeed.php';

if(isset($_POST['message_btn']))
{
	$message = $_POST['message'];

	$pdoQuery = "INSERT INTO postinfo(message) VALUES(:message)";
	$pdoQuery_run = $newsfeedcon->prepare($pdoQuery);
	$pdoQuery_exec = $pdoQuery_run->execute(['message' => $message]);

	if($pdoQuery_exec)
	{
		echo '<script> alert("Your message was posted.") </script>';
 		
	}
	
	
	else
{
	echo '<script> alert("Posting Failed") </script>';
}

//display
}

?>