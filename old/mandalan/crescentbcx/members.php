<?php include ('php/header1.php'); ?>
<table class="page"><tr><td class="page"><h2>Members</h2></td></tr><tr><td class="page">
<table class="page">
<?php
include ('php/connect.php');

$results=mysql_query("select * from members order by date desc");
while ($row = mysql_fetch_array($results))
{
echo "<tr><td class=\"page\"><table><tr><td class=\"left\">Name: </td><td class=\"left\">";
echo $row['name'];
echo "<br />";
echo "<tr><td class=\"left\">Location: </td><td class=\"left\">";
echo $row['location'];
echo "<br />";
echo "<tr><td class=\"left\">Date of Birth: </td><td class=\"left\">";
echo $row['age'];
echo "<br /></td></tr></table><br /></td></tr>";

}

?>

</table></body></html>
