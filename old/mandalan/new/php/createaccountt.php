<?php

echo "<table class=\"page\"><tr><td class=\"page\"><h2>New Account Creation</h2>
</td>
</tr>
<tr>
<td class=\"page\">
<form action=\"accountcreatedt.php?";
echo time(); 
echo "\" method=\"post\">
<table>
<tr>
<td class=\"left\">
Email: 
</td>
<td class=\"left\">
<input type=\"text\" name=\"name\" maxlength=\"50\" />
</td>
</tr>
<tr>
<td class=\"left\">
Password: 
</td>
<td class=\"left\">
<input type=\"password\" name=\"password\" maxlength=\"15\" />
</td>
</tr>";
echo "<tr><td class=\"left\">
Birthdate:
<td class=\"left\">
<input type=\"text\" name=\"bday\" maxlength=\"25\" />
</td></tr>
</table>
</td></tr>
<tr><td class=\"center\" colspan=\"2\"><input class=\"small\" type=\"submit\" value=\"Create Account\" /></td></tr></table>
</td></tr>
</table>
</form>
</td></tr>
<tr><td class=\"page\">
<a href=\"mandalatext.php\">Back</a>
</td></tr></table><br />
Your information will not be shared with any other party and is for identification and account password retrieval only. You may receive a gift on your birthday, but entering your birthdate is not required.
</td></tr></table>
</body>
</html>";

?>