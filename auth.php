<?php
@session_start();
	//Start session
	
	//Check whether the session variable SESS_MEMBER_ID is present or not
	if(!isset($_SESSION['SESS_MEMBER_ID'])) {
		echo '<script> location.href="index.php"; </script>';
		exit();
	}
?>