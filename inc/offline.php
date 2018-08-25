<?php
require("bd.php");

$sql_select = "SELECT * FROM dice_users";
$result = mysql_query($sql_select);
$row = mysql_fetch_array($result);
do
{
	$time = time();
	if($time > $row['online_time'])
	{
$update_sql1 = "Update dice_users set online='0' WHERE id=".$row['id'];
mysql_query($update_sql1) or die("" . mysql_error());
	}
}
while($row = mysql_fetch_array($result));
?>