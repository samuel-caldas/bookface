<table width="100%" border="1">
  <tr>
    <td colspan="2">Header</td>
  </tr>
  <tr>
    <td width="200">Friends
<?php
include("config.php");

$result = mysql_query("SELECT member_id, firstname, url FROM members ORDER BY firstname ASC");

echo "<br />";
while($row = mysql_fetch_array($result))
  {
  		echo '<a href=http://localhost/member_details.php?id=' . $row["member_id"] . '>' . $row['firstname'] . '</a><br />';
  }

mysql_close($con);
?>	</td>
    <td>
	Content
<?php
include("config.php");

$member_id = $_GET["id"];

//echo "SELECT * FROM members WHERE member_id = $member_id";
$result = mysql_query("SELECT * FROM members WHERE member_id = $member_id");

$row = mysql_fetch_array($result);

echo "<br />";
echo 'Firstname: ' . $row["firstname"] . '<br />';
echo 'Lastname: ' . $row["lastname"] . '<br />';
echo 'Address: ' . $row["address"] . '<br />';
echo 'Contact #: ' . $row["contact_no"] . '<br />';
echo 'Birth Date: ' . $row["birthdate"] . '<br />';
echo 'Gender: ' . $row["gender"] . '<br />';
echo 'Website: ' . $row["url"] . '<br />';

mysql_close($con);
?>	</td>
  </tr>
  <tr>
    <td colspan="2">Footer</td>
  </tr>
</table>
