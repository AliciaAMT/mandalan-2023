<?php

$open=strip_tags($_GET["keylock"]);

$number=strip_tags($_GET["number"]);


if ($open=="Purse")

{
include ('php/removepurse.php');

$gold=mt_rand(10,50);

echo "<table class=\"page\"><tr><td class=\"center\"><h3>Open Purse</h3></td></tr><tr><td class=\"left\"><h3>You open the purse and find:</h3></td><td class=\"center\"><h3>".$gold." Gold</h3></td></tr><tr><td class=\"left\"><h3>Experience:</h3></td><td class=\"left\"><h3>+5</h3></td></tr>";

  $query=sprintf("update stats set experience=experience+5 where username='%s';", mysql_real_escape_string($username));

  mysql_query ($query);

 $query=sprintf("update stats set gold=gold+'%s' where username='%s';", mysql_real_escape_string($gold), mysql_real_escape_string($username));

  mysql_query ($query);


echo "<tr><td class=\"page\" colspan=\"2\"><table class=\"page\"><tr><td class=\"page\">";


  echo "<form name=\"read\" action=\"../maingraphict.php?".time();


  echo "\" method=\"get\"><input type=\"submit\" value=\"Back\" class=\"small\"></form></td></tr></table>";
}

if ($open=="Money Purse")

{
include ('php/removepurse.php');

$gold=mt_rand(10,100);

echo "<table class=\"page\"><tr><td class=\"center\"><h3>Open Purse</h3></td></tr><tr><td class=\"left\">You open the purse and find:</td><td class=\"center\"><img src=\"../images/gold.png\" /><br />".$gold." Gold</td></tr><tr><td class=\"left\"><h3>Experience:</h3></td><td class=\"left\"><h3>+5</h3></td></tr>";

  $query=sprintf("update stats set experience=experience+5 where username='%s';", mysql_real_escape_string($username));

  mysql_query ($query);

 $query=sprintf("update stats set gold=gold+'%s' where username='%s';", mysql_real_escape_string($gold), mysql_real_escape_string($username));

  mysql_query ($query);


echo "<tr><td class=\"page\" colspan=\"2\"><table class=\"page\"><tr><td class=\"page\">";


  echo "<form name=\"read\" action=\"keept.php?".time();


  echo "\" method=\"get\"><input type=\"submit\" value=\"Back\" class=\"small\"></form></td></tr></table>";
}
?>