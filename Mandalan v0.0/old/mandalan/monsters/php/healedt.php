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
$report="<span class=\"green\">You healed!</span><br />";

if ($bleedcount>0)
{
//enemy bleeds, query amount and report add

$query = sprintf("update stats set enemybleed=enemybleed-1 where username='%s';",
mysql_real_escape_string($username));
mysql_query($query);

$query = sprintf("update stats set enemylife=enemylife-'%s' where username='%s';",
mysql_real_escape_string($ebleedamt),
mysql_real_escape_string($username));
mysql_query($query);

$report=$report."<span class=\"green\">Your enemy bleeds for <b>".$ebleedamt."</b> damage!</span><br />";


}

if ($burncount>0)
{
//enemy bleeds, query amount and report add

$query = sprintf("update stats set infernocount=infernocount-1 where username='%s';",
mysql_real_escape_string($username));
mysql_query($query);

$query = sprintf("update stats set enemylife=enemylife-'%s' where username='%s';",
mysql_real_escape_string($eburnamt),
mysql_real_escape_string($username));
mysql_query($query);

$report=$report."<span class=\"green\">Your enemy burns for <b>".$eburnamt."</b> damage!</span><br />";


}

include ('php/countert.php');
$report=$report.$counter;
$query = sprintf("update stats set event='%s' where username='%s';",
mysql_real_escape_string($report),
mysql_real_escape_string($username));
mysql_query($query);
}
?>
