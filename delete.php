<?php
include("config.php");
$id=$_POST['useid'];
mysql_query("DELETE FROM friendlist WHERE friends_id='$id'");
echo 'friends succesfully deleted';
mysql_close($con);
?> 