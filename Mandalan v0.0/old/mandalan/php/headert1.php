<?php
include ('php/connect.php');
include ('php/getcookie.php');
echo "<!DOCTYPE html PUBLIC\"-//W3C//DTD XHTML 1.0 Transitional//EN\"\"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\"><html xmlns=\"http://www.w3.org/1999/xhtml\"><head><meta name=\"Keywords\" content=\"\" /><meta name=\"Description\" content=\"\" /><link rel=\"stylesheet\" type=\"text/css\" href=\"maint.css\" /><title>Mandala</title></head><body>";
include ('php/enemy.php');

$query=sprintf("select fight from enemy where username='%s';",mysql_real_escape_string($username));

$result = mysql_query($query);
while($row = mysql_fetch_array($result))
	{
	if ($row['fight']==1)
	{
	die ("<br /><table class=\"page\"><tr><td class=\"border\">You are currently engaged in a battle. You must either fight or attempt to flee.<br /><br /><table class=\"page\"><tr><td class=\"page\"><form action=\"monsters/nomovet.php?".time()."\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Continue\" /></form></td></tr></table></td></tr></table></body></html>");
	}
	}
?>