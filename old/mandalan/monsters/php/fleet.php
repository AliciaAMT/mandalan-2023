<?php

include ('php/enemyevade.php');

include ('php/enemyblock.php');

include ('php/enemydeadt.php');

include ('php/deadt.php');

include ('php/getbbleed.php');
include ('php/countbleed.php');
include ('php/burncount.php');



$query = sprintf("select * from stats where username='%s';",mysql_real_escape_string($username));
$result=mysql_query($query);

while($row = mysql_fetch_array($result))
  {
$rand=mt_rand(1,100);
$flee=$row['agility']+$row['speed'];
$flee=$flee/2;
$flee=$flee-$enemyagility;
if ($flee>$rand)
{
$query = sprintf("update enemy set fight=0 where username='%s';",mysql_real_escape_string($username));
mysql_query($query);

echo "<table class=\"page\"><tr><td class=\"border\">You successfully escape the battle!<br /><br />";

echo "<table class=\"page\"><tr><td class=\"page\">
<table class=\"page\"><tr><td class=\"page\"><form action=\"../maingraphict.php?".time()."\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Continue\" /></form></td></tr></table></td></tr></table></td></tr></table>";

die ("</td></tr></table></body></html>");
}
else
{
$report="<span class=\"green\">You were caught running away!</span><br />";

if ($bleedcount>0)
{
//enemy bleeds, query amount and report add

$query = sprintf("update enemy set enemybleed=enemybleed-1 where username='%s';",
mysql_real_escape_string($username));
mysql_query($query);

$query = sprintf("update enemy set enemylife=enemylife-'%s' where username='%s';",
mysql_real_escape_string($ebleedamt),
mysql_real_escape_string($username));
mysql_query($query);

$report=$report."<span class=\"green\">Your enemy bleeds for <b>".$ebleedamt."</b> damage!</span><br />";


}
if ($burncount>0)
{
//enemy bleeds, query amount and report add

$query = sprintf("update enemy set infernocount=infernocount-1 where username='%s';",
mysql_real_escape_string($username));
mysql_query($query);

$query = sprintf("update enemy set enemylife=enemylife-'%s' where username='%s';",
mysql_real_escape_string($eburnamt),
mysql_real_escape_string($username));
mysql_query($query);

$report=$report."<span class=\"green\">Your enemy burns for <b>".$eburnamt."</b> damage!</span><br />";


}

include ('php/countert.php');
$report=$report.$counter;

$query = sprintf("update enemy set event='%s' where username='%s';",mysql_real_escape_string($report), mysql_real_escape_string($username));
mysql_query($query);
}
}
?>
