<?php include ('php/header1.php'); ?>

<table class="page"><tr><td class="page"><h2>Prayer Requests Room</h2></td></tr><tr><td class="page"><table class="page"><tr><td class="page"><form name="new" action="newtopicp.php?<?php echo time(); ?>" method="get"><input type="submit" value="Start New Discussion" class="small" /></form></td></tr></table></td></tr><tr><td class="fill">

<table class="page"><tr><td class="filled"><h3>Prayer Requests</h3></td><td class="filled"><h3>Name of Author</h3></td><td class="filled"><h3>Date</h3></td><td class="filled"><h3>Additions</h3></td></tr>

<?php 
include ("php/connect.php");

$results=mysql_query("select * from forum where room='Prayer Requests' order by number desc");
while ($row = mysql_fetch_array($results))
{



if ($row['threadcount']>0)
{
echo "<tr><td class=\"lborder\">

<form name=\"topic\" action=\"topic.php?";

echo time();
echo "\" method=\"get\"><input type=\"radio\" name=\"number\" checked=\"checked\" class=\"invisible\" value=\"";
echo $row['number'];
echo "\" /><input type=\"submit\" value=\"".$row['topic']."\" class=\"black\" /></form>";


echo "</td><td class=\"border\">";
echo $row['username'];
echo "</td><td class=\"lborder\">";
echo $row['date'];
echo "</td><td class=\"lborder\">";
echo $row['threadcount']-1;
echo "</td></tr>";
}
}
?>
</table>
</td></tr></table></body></html>