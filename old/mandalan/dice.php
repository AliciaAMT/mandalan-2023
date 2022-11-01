<?php
include ('header.php');
include ('getgold.php');
echo "<table class=\"page\"><tr><td class=\"border\"><h2>Gambling</h2>
<table class=\"page\"><tr><td class=\"page\"><form action=\"shootdice.php?";
echo time();
echo "\" method=\"post\">
<table class=\"page\"><tr><td class=\"page\" colspan=\"2\"><h2>How Much Would You Like to Wager?</h2></td></tr>
<tr><td class=\"left\">Your Gold: </td><td class=\"left\">".$gold."</td></tr>
<tr><td class=\"left\">Amount: </td><td class=\"left\"><select name=\"amount\"><option value=\"50\">50</option><option value=\"100\">100</option><option value=\"500\">500</option><option value=\"1000\">1000</option><option value=\"5000\">5000</option><option value=\"10000\">10000</option>
</select>Gold</td></tr>

<tr>

<td class=\"page\" colspan=\"2\">

<input class=\"small\" type=\"submit\" value=\"Roll Dice\" />

</td>

</tr>

</table>

</form></td></tr></table>";
echo "<form action=\"../inn.php\" method=\"post\"><input type=\"submit\" class=\"small\" value=\"Back\" /></form>";
echo "</td></tr></table></body></html>";

?>