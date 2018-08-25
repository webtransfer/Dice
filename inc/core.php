<?php
require("bd.php");
$sid = $_COOKIE["sid"];



$sql_select = "SELECT * FROM dice_games ORDER BY `id` DESC LIMIT 20";
$result = mysql_query($sql_select);
$row = mysql_fetch_array($result);
do
{
	$sql_select1 = "SELECT * FROM dice_users WHERE id=".$row['user_id'];
$result1 = mysql_query($sql_select1);
$row1 = mysql_fetch_array($result1);
$ytar = $row['youtube'];
if($ytar == 1)
{
	$yts = '<i class="fab fa-youtube danger"></i>';
}
if($row['shans'] >= 60)
{
	$sts = "success";
}
if($row['shans'] < 60 && $row['shans'] >= 30)
{
	$sts = "warning";
}
if($row['shans'] <= 29)
{
	$sts = "danger";
}

if($row['type'] == "win")
{
	$st = "success";
}
if($row['type'] == "lose")
{
	$st = "danger";
}
$login = ucfirst($row['login']);
	$game =  <<<HERE
$game
<tr data-user="$row[user_id]" data-game="$row[id]" onclick="window.open('/game/$row[id]');"><td class="text-truncate " style="font-weight:600">$yts $login</td><td class="text-truncate $st" style="font-weight:600">$row[chislo]</td><td class="text-truncate " style="font-weight:600">$row[cel]</td><td class="text-truncate " style="font-weight:600">$row[suma] 💵</td><td class="text-xs-center font-small-2"><span><progress style="margin-top:8px" class="progress progress-sm progress-$sts mb-0" value="$row[shans]" max="100"></progress></span></td><td class="text-truncate $st " style="font-weight:600">$row[win_summa] 💵</td></tr>
HERE;
$st = "";
$sts = "";
$login = "";
}
while($row = mysql_fetch_array($result));

$sid = $_COOKIE["sid"];
$time = time() + 5;
$ip = $_SERVER["REMOTE_ADDR"];
$update_sql1 = "Update dice_users set online='1', online_time='$time', ip='$ip' WHERE hash='$sid'";
    mysql_query($update_sql1) or die("" . mysql_error());
	
	$sql_select = "SELECT COUNT(*) FROM dice_users WHERE online='1'";
$result = mysql_query($sql_select);
$row = mysql_fetch_array($result);

$online = $row['COUNT(*)'];

    $result = array(
	'game' => "$game",
    'online' => "$online"
    );
	
    echo json_encode($result);
?>