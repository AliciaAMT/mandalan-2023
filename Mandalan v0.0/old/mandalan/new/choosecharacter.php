<?php

$email=$_COOKIE["email"];

if (!$email)
{
$email=strip_tags($_POST["email"]);
setcookie ("email", $email);
}

include ('php/headertf.php'); 
include ('php/connect.php');

$password=strip_tags($_POST["password"]);

include ('php/getaccountst.php');

echo "<table class=\"page\"><tr><td class=\"border\"><form action=\"startgamet.php?";
echo time();
echo "\" method=\"post\"><table><tr><td class=\"page\" colspan=\"2\"><h2>Choose a Character</h2></td></tr><tr><td class=\"left\">Mode: </td><td class=\"left\"><select name=\"mode\"><option value=\"1\">Single Player</option><option value=\"2\">Single Player w/Chat</option></select></td></tr><tr><td class=\"left\">Character: </td><td class=\"left\"><select name=\"name\"><option value=\"";

echo $char1;

echo "\">";
echo $char1;
echo "</option><option value=\"";

echo $char2;

echo "\">";
echo $char2;
echo "</option>

<option value=\"";

echo $char3;

echo "\">";
echo $char3;
echo "</option>

<option value=\"";

echo $char4;

echo "\">";
echo $char4;
echo "</option>

<option value=\"";

echo $char5;

echo "\">";
echo $char5;
echo "</option>

<option value=\"";

echo $char6;

echo "\">";
echo $char6;
echo "</option>

</select>

</td>

</tr>



<tr>

<td class=\"page\" colspan=\"2\">

<input class=\"small\" type=\"submit\" value=\"Play\" />

</td>

</tr>

</table>

</form>
</td></tr>
<tr><td class=\"page\">

<form action=\"createcharactert.php\" method=\"post\">
<input class=\"small\" type=\"submit\" value=\"Create New Character\" /></form>
</td></tr>
<tr><td class=\"page\">

<form action=\"deletecharactert.php\" method=\"post\">
<input class=\"small\" type=\"submit\" value=\"Delete Character\" /></form>

<tr><td class=\"page\">

<a href=\"mandalatext.php?";

echo time();
echo "\">Back</a>

</td></tr>

</table>

</body>

</html>";

?>