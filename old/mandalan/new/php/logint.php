
<?php

echo "<form action=\"choosecharacter.php?";

echo time();

echo "\" method=\"post\">

<table>

<tr>

<td class=\"page\" colspan=\"2\"><h2>Login</h2></td></tr>

<tr>

<td class=\"left\">

Email: 

</td>

<td class=\"left\">

<input type=\"text\" name=\"email\" maxlength=\"50\" />

</td>

</tr>

<tr>

<td class=\"left\">

Password: 

</td>

<td class=\"left\">

<input type=\"password\" name=\"password\" maxlength=\"25\" />

</td>

</tr>

<tr>

<td class=\"page\" colspan=\"2\">

<input class=\"small\" type=\"submit\" value=\"Login\" />

</td>

</tr>

</table>

</form>

</td></tr>

<tr><td class=\"page\">
<table class=\"page\"><tr><td class=\"page\"><form action=\"mandalatext.php\" method=\"post\">
<input class=\"small\" type=\"submit\" value=\"Back\" /></form></td></tr></table>
</td>
</tr>
</table>

</body>

</html>";
?>