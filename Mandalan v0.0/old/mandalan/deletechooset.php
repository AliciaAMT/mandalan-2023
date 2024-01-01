<?php

$email=$_COOKIE["email"];

include ('php/headertf.php'); 
include ('php/connect.php');
include ('php/getaccountst2.php');
echo "<table class=\"page\"><tr><td class=\"page\" colspan=\"2\">Choose a character to delete permanently.</td></tr>";
echo "<tr><td class=\"page\"><form action=\"deletet.php?";
echo time();
echo "\" method=\"post\"><table class=\"page\"><tr><td class=\"page\"><input class=\"invisible\" type=\"radio\" name=\"name\" checked=\"checked\" value=\"".$char1;
echo "\"><input class=\"invisible\" type=\"radio\" name=\"char\" checked=\"checked\" value=\"char1\"><input class=\"small\" type=\"submit\" value=\"".$char1."\" /></td></tr></table></form></td>";

echo "<td class=\"page\"><form action=\"deletet.php?";
echo time();
echo "\" method=\"post\"><table class=\"page\"><tr><td class=\"page\"><input class=\"invisible\" type=\"radio\" name=\"name\" checked=\"checked\" value=\"".$char2;
echo "\"><input class=\"invisible\" type=\"radio\" name=\"char\" checked=\"checked\" value=\"char2\"><input class=\"small\" type=\"submit\" value=\"".$char2."\" /></td></tr></table></form></td></tr><tr>";

echo "<td class=\"page\"><form action=\"deletet.php?";
echo time();
echo "\" method=\"post\"><table class=\"page\"><tr><td class=\"page\"><input class=\"invisible\" type=\"radio\" name=\"name\" checked=\"checked\" value=\"".$char3;
echo "\"><input class=\"invisible\" type=\"radio\" name=\"char\" checked=\"checked\" value=\"char3\"><input class=\"small\" type=\"submit\" value=\"".$char3."\" /></td></tr></table></form></td>";

echo "<td class=\"page\"><form action=\"deletet.php?";
echo time();
echo "\" method=\"post\"><table class=\"page\"><tr><td class=\"page\"><input class=\"invisible\" type=\"radio\" name=\"name\" checked=\"checked\" value=\"".$char4;
echo "\"><input class=\"invisible\" type=\"radio\" name=\"char\" checked=\"checked\" value=\"char4\"><input class=\"small\" type=\"submit\" value=\"".$char4."\" /></td></tr></table></form></td></tr><tr>";

echo "<td class=\"page\"><form action=\"deletet.php?";
echo time();
echo "\" method=\"post\"><table class=\"page\"><tr><td class=\"page\"><input class=\"invisible\" type=\"radio\" name=\"name\" checked=\"checked\" value=\"".$char5;
echo "\"><input class=\"invisible\" type=\"radio\" name=\"char\" checked=\"checked\" value=\"char5\"><input class=\"small\" type=\"submit\" value=\"".$char5."\" /></td></tr></table></form></td>";

echo "<td class=\"page\"><form action=\"deletet.php?";
echo time();
echo "\" method=\"post\"><table class=\"page\"><tr><td class=\"page\"><input class=\"invisible\" type=\"radio\" name=\"name\" checked=\"checked\" value=\"".$char6;
echo "\"><input class=\"invisible\" type=\"radio\" name=\"char\" checked=\"checked\" value=\"char6\"><input class=\"small\" type=\"submit\" value=\"".$char6."\" /></td></tr></table></form></td></tr><tr></table>";

echo "</td></tr><tr><td class=\"page\" colspan=\"2\"><a href=\"choosecharacter2.php?";

echo time();
echo "\">Back</a></td></tr></table></body></html>";

?>