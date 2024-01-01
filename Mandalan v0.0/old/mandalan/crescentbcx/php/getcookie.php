<?php
$name=$_COOKIE["name"];

if (!$name)
{die ("<!DOCTYPE html PUBLIC\"-//W3C//DTD XHTML 1.0 Transitional//EN\"\"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\"><html xmlns=\"http://www.w3.org/1999/xhtml\"><head><meta name=\"Keywords\" content=\"\" /><meta name=\"Description\" content=\"\" /><link rel=\"stylesheet\" type=\"text/css\" href=\"main.css\" /></head><body><table><tr><td class=\"fill\"><table class=\"page\"><tr><td class=\"page\"><h1><b>Crescent Baptist Church</b></h1><i>John 3:16: For God so loved the world, that he gave his only begotten Son, that whosoever believeth in him should not perish, but have everlasting life. </i><br /><br /></td></tr></table><hr></td></tr><tr><td class=\"fill\"><table class=\"page\"><tr><td class=\"page\"><table class=\"menu\"><tr><td class=\menu\"><a href=\"home.php\"><b>Home</b></a></td><td class=\"menu\"><a href=\"calendar.php\"><b>Calendar</b></a></td><td class=\"menu\"><a href=\"forum.php\"><b>Message Board</b></a></td><td class=\"menu\"><a href=\"contact.php\"><b>Contact</b></a></td><td class=\"menu\"><a href=\"directions.php\"><b>Directions</b></a></td><td class=\"menu\"><a href=\"links.php\"><b>Links</b></a></td></tr></table></td></tr><tr><td class=\"page\">
<table class=\"page\"><tr><td class=\"page\"><h2>Login</h2></td></tr><tr><td class=\"page\">


<form action=\"authenticate.php\" method=\"post\">
<table>
<tr>
<td class=\"left\">
Name: 
</td>
<td class=\"left\">
<input class=\"mine\" type=\"text\" name=\"name\" maxlength=\"20\" />
</td>
</tr>
<tr>
<td class=\"left\">
Password: 
</td>
<td class=\"left\">
<input class=\"mine\" type=\"password\" name=\"password\" maxlength=\"16\" />
</td>
</tr>
<tr>
<td class=\"page\" colspan=\"2\">
<input class=\"small\" type=\"submit\" value=\"Login\" />
</td>
</tr>
</table>
</form>
</td></tr><tr><td class=\"page\">Not a member? Join for free here: <a href=\"welcome.php#membership\">Become a Member</a></table></body></html>");
}
?>

