<?php include ('php/header1.php'); ?>
<table class="page"><tr><td class="page"><h2>Guestbook</h2></td></tr><tr><td class="page">
<table class="page"><tr><td class="page">
<form action="signbook.php? <?php echo time(); ?>" method="post"><table><tr><td class="left">Name: </td><td class="left"><input class="mine" type="text" name="name" maxlength="20" /></td></tr><tr><td class="left">Location: </td><td class="left"><input class="mine" type="text" name="location" maxlength="20" /></td></tr><tr><td class="left">Comments: </td><td class="left"><textarea name="comments" maxlength="5000" rows="7" cols="40"></textarea></td></tr><tr><td class="left" colspan="2">
<?php
 require_once('recaptchalib.php');
  $publickey = "6LcTYsgSAAAAABS-P2q-KP31by_nE3RRqx4_-f94";
  echo recaptcha_get_html($publickey);
  ?>
</td></tr><tr><td class="page" colspan="2"><input class="small" type="submit" value="Submit" /></td></table></form>
</td></tr></table>
</td></tr><tr><td class="page">

<table class="page">
<?php
include ("php/connect.php");

$results=mysql_query("select * from guestbook where approve='y' order by date desc");
while ($row = mysql_fetch_array($results))
{
echo "<tr><td class=\"page\"><table><tr><td class=\"left\">Name: </td><td class=\"left\">";
echo stripslashes($row['name']);
echo "<br />";
echo "<tr><td class=\"left\">Location: </td><td class=\"left\">";
echo stripslashes($row['location']);
echo "<br />";
echo "<tr><td class=\"left\">Comments: </td><td class=\"left\">";$comments=stripslashes($row['comments']);echo nl2br($comments);
echo "<br /></td></tr></table><br /></td></tr>";

}

?>

</table></td></tr></table></body></html>
