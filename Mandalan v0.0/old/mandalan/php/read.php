<?php

include ('../php/connect.php');

include ('php/getcookie.php');
$read=strip_tags($_GET["read"]);

if ($read=="Book of Laws")
{
echo "<table class=\"page\"><tr><td class=\"center\"><h3>Book of Laws</h3></td></tr><tr><td class=\"left\">1. No killing of humanoids<br />2. No stealing<br />3. Council of Elders settle disputes and add new laws by majority vote.<br />4. Anyone convicted of breaking the law by the Council of Elders may be put to death.<br /></td></tr><tr><td class=\"left\">...the rest of the book is very tedious and not worth reading. It basically says that the Council of Elders is made up of 9 members and each Elder may remain a member until he dies and someone inherits his membership, or he gives his membership away to whomever he deems worthy. Over the years this system has led to a very corrupt Council where bribery and scandal rule the day.</td></tr><tr><td class=\"center\"><table class=\"page\"><tr><td class=\"page\">";

echo "<form action=\"keep.php?";
echo time();
echo "\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Back to Inventory\" /></form></td></tr><tr><td class=\"page\">";

echo "<form action=\"../maingraphics.php?";
echo time();
echo "\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Back to Map\" /></form>";
echo "</td></tr></table></td></tr></table>";


}
?>