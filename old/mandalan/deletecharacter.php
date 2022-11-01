<?php include ('php/headert.php'); ?>

<?php

$name=strip_tags($_POST["name"]);

echo "<table class=\"page\"><tr><td class=\"page\"><b>Warning!</b><br />Are you sure you want to delete a character? You will lose it forever!<br />";

echo "<table class=\"page\"><tr><td class=\"page\"><form action=\"deletechoose.php?";
echo time();
echo "\" method=\"post\"><input class=\"invisible\" type=\"radio\" name=\"name\" checked=\"checked\" value=\"".$name;
echo "\"><input class=\"small\" type=\"submit\" value=\"Yes\" /></form>";

echo "</td></tr><tr><td class=\"page\"><form action=\"choosecharacter1.php?";
echo time();
echo "\" method=\"post\">";
echo "<input class=\"small\" type=\"submit\" value=\"No\" /></form></td></tr></table></td></tr></table>";
?>

</body></html>


