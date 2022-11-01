<?php include ('php/getcookie.php'); ?>
<?php include ('php/header1.php'); ?>

<table class="page"><tr><td class="page"><h2>Dear Abba</h2></td></tr><tr><td class="page">
<?php
include ('php/connect.php');
include ('php/getcookie.php');

$message=$_GET["message"];
$topic=$_GET["title"];
$room="General Discussion";
$threadcount=1;
$number=time();
$date=date('Y/m/d G:ia');

if (!$topic || !$message)
{
die ("You must fill out the form completely. Please try again by pressing the back button in your browser.</td></tr></table></td></tr></table></body></html>
");
}


$querys=sprintf("insert into forum values (
'%s',
'%s',
'%s',
'%s',
'%s',
'%s',
'%s'
);",
mysql_real_escape_string($name),
mysql_real_escape_string($number),
mysql_real_escape_string($date),
mysql_real_escape_string($room),
mysql_real_escape_string($topic),
mysql_real_escape_string($threadcount),
mysql_real_escape_string($message));
mysql_query($querys, $con);



echo "<table class=\"page\"><tr><td class=\"lborder\"><b>Title: </b></td><td class=\"lborder\">".$topic;
echo "</td></tr><tr><td class=\"lborder\"><b>Message: </b></td><td class=\"lborder\">";
$message=stripslashes($message);
echo nl2br($message);
echo "<br />";
echo $date;
echo "<br />".$name;
echo "<br /></td></tr></table><table class=\"page\"><tr><td class=\"page\"><form action=\"forum.php?";
echo time();
echo "\" method=\"get\"><input class=\"small\" type=\"submit\" value=\"Back to Forum\" /></form></td></tr></table></body></html>";
?>


</td></tr></table></body></html>