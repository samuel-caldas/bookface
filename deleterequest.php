<?php
				  if (isset($_GET['id']))
	{

include("config.php");
			$friendid = $_GET['id'];
			//$result = mysql_query("SELECT * FROM friendlist WHERE friends_id = $member_id");
			mysql_query("DELETE FROM friendlist WHERE friends_id='$friendid'");
			header("location: profile.php");
			exit();
			
			mysql_close($con);
			}
			?>