<?php include ('php/getcookie.php'); ?>
<?php include ('php/header1.php'); ?>
<?php 
include ('php/connect.php'); 
$number=$_GET["number"];
$query=sprintf("select * from forum where number='%s' and threadcount=1 order by date;",mysql_real_escape_string($number));
$result=mysql_query($query);
while($row = mysql_fetch_array($result))
{
echo "<table class=\"page\"><tr><td class=\"border\"><table class=\"page\"><tr><td class=\"lborder\">";
echo "<h3>Title: </h3>";
echo "</td><td class=\"border\"><b>";
echo $row['topic'];
echo "</b></td></tr><tr><td class=\"lborder\">";
echo "<h3>Date: </h3>";
echo "</td><td class=\"lborder\">";
echo $row['date'];
echo "</td></tr><tr><td class=\"lborder\">";
echo "<h3>Author: </h3>";
echo "</td><td class=\"lborder\">";
echo $row['username'];
echo "</td></tr><tr><td class=\"lborder\">";
echo "<h3>Message: </h3>";
echo "</td><td class=\"lborder\">";
echo nl2br($row['message']);
echo "</td></tr></tr></table>";
}
?>

<table class="page"><tr><td class="page">
<form name="entry" action="addreply.php?<?php echo time(); ?>" method="get">Message Title: <input type="text" name="title" maxlength="50" /><br />
<textarea rows="10" cols="70" name="message" maxlength="5000" /></textarea><br /><table class="page"><tr><td class="page">
<?php 
echo "<input type=\"radio\" name=\"number\" checked=\"checked\" class=\"invisible\" value=\"";
echo $number;
echo "\" />";
?>
<input type="submit" value="Submit" class="small" /></td></tr></table></form>


</td></tr></table></body></html>