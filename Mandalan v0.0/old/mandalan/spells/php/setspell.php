<?php

include ('php/getfight.php');

include ('php/getenemy.php');

$spell=$_POST["type"];

$spellimage=$_POST["image"];

$query=sprintf("update stats set quickspell='%s' where username='%s';",
mysql_real_escape_string($spell),
mysql_real_escape_string($username));

mysql_query($query);

echo "<table class=\"page\"><tr><td class=\"center\"><h2>".$spell."</h2><br /><img src=\"../images/";

echo $spellimage;

echo ".png\" /><br />You set ".$spell." as your quickspell.</td></tr><tr><td class=\"center\"><table class=\"page\"><tr><td class=\"page\">";

if ($fight==1)

{

echo "<form action=\"../monsters/setspell.php?".time()."\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Back\" /></form>";

echo "</td></tr></table></td></tr></table>";

}

if ($fight==0)

{

echo "<form action=\"elementals.php?";
echo time();
echo "\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Back to Spellbook\" /></form></td></tr><tr><td class=\"page\">";
echo "<form action=\"../maingraphics.php?";
echo time();
echo "\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Back to Map\" /></form>";

echo "</td></tr></table></td></tr></table>";

}


?>