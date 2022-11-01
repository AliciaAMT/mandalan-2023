<?php include ('php/access.php'); ?>
<?php include ('php/header1.php'); ?>

<table class="page"><tr><td class="page"><h2>Message Board</h2></td></tr><tr><td class="fill">

<table class="page"><tr><td class="fill"><h3>Subject</h3></td><td class="fill"><h3>Date of Last Post</h3></td></tr><tr><td class="lborder">
<a href="general.php?<?php echo time(); ?>">General News</a></td><td class="border"><?php
include ('php/connect.php');

$result = mysql_query("select * from forum where room='General News' order by number desc limit 1");

while ($row=mysql_fetch_array($result))
{
echo $row['date'];
}

?></td></tr><tr><td class="lborder">
<a href="prayer.php?<?php echo time(); ?>">Prayer Requests</a></td><td class="border"><?php
include ('php/connect.php');

$result = mysql_query("select * from forum where room='Prayer Requests' order by date desc limit 1");

while ($row=mysql_fetch_array($result))
{
echo $row['date'];
}

?></td></tr><tr><td class="lborder">
<a href="praise.php?<?php echo time(); ?>">Praise Reports</a></td><td class="border"><?php
include ('php/connect.php');
$result = mysql_query("select * from forum where room='Praise Reports' order by date desc limit 1");
while ($row=mysql_fetch_array($result))
{echo $row['date'];}
?>

</td></tr></table>
</td></tr></table></body></html>