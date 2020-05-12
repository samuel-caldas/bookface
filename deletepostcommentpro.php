<?php
				  if (isset($_GET['id']))
	{
include("config.php");
			$messages_id = $_GET['id'];
			//$result = mysql_query("SELECT * FROM friendlist WHERE friends_id = $member_id");
			mysql_query("DELETE FROM postcomment WHERE comment_id='$messages_id'");
			header("location: profile.php");
			exit();
			
			mysql_close($con);
			}
			?>