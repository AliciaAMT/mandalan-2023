<?php include ('php/header1.php'); ?>
<?php include ('php/connect.php');

$number=$_GET["number"];
$query=sprintf("select * from forum where number='%s' order by threadcount desc, date desc;",mysql_real_escape_string($number));
$result=mysql_query($query);
while($row = mysql_fetch_array($result))
{
$room=$row['room'];
echo "<table class=\"page\" width=\"100%\"><tr><td class=\"fill\"><table class=\"page\"><tr><td class=\"lborder\">";
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
$message=stripslashes($row['message']);
echo nl2br($message);
echo "</td></tr><tr><td class=\"page\" colspan=\"2\">";

echo "<table class=\"page\"><tr><td class=\"page\"><form name=\"reply\" action=\"reply.php?";
echo time();
echo "\" method=\"get\"><input type=\"radio\" name=\"number\" checked=\"checked\" class=\"invisible\" value=\"";
echo $row['number'];
echo "\" /><input type=\"radio\" name=\"room\" checked=\"checked\" class=\"invisible\" value=\"";
echo $room;
echo "\" /><input type=\"submit\" value=\"Add\" class=\"small\" /></form></td><td class=\"page\"><form name=\"new\" action=\"forum.php?";
echo time();
echo "\" method=\"get\"><input type=\"radio\" name=\"number\" checked=\"checked\" class=\"invisible\" value=\"";
echo $row['number'];
echo "\" /><input type=\"submit\" value=\"Back\" class=\"small\" /></form></td></tr></table>";
echo "</td></tr></table>";
echo "</td></tr></table>";
}
?>
</body></html>
