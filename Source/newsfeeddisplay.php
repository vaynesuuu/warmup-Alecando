<?php
include 'newsfeed.php';

if(isset($_POST['message_btn']))
{
	$pdoQuery = "SELECT * FROM postinfo ORDER BY id DESC";
	$pdoQuery_run = $newsfeedcon->query($pdoQuery);

		if($pdoQuery_run)
		{
			
			//while($row = $pdoQuery_run->fetch(PDO::FETCH_OBJ))
			foreach($pdoQuery_run as $row)
			{
				echo '
				<tr>
					<th> '.$row->message.' </th><br></br>
					<th> '.$row->date.' </th>
				</tr>
				';
			}

		}
		else
		{
			echo '<script> alert("No record")</script>';
		}

}