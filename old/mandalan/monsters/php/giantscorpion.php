<?php
include ('php/getlevel.php');
include ('php/clearcounters.php');


$query = sprintf("update enemy set enemy='giantscorpion' where username='%s';",mysql_real_escape_string($username));
mysql_query($query);

$query = sprintf("update enemy set enemyname='Giant Scorpion' where username='%s';",mysql_real_escape_string($username));
mysql_query($query);

$enemylevel=mt_rand(20,25);
$query = sprintf("update enemy set enemylevel='%s' where username='%s';",mysql_real_escape_string($enemylevel),
mysql_real_escape_string($username));
mysql_query($query);

$enemylife=$enemylevel*10;
$query = sprintf("update enemy set enemylife='%s' where username='%s';",mysql_real_escape_string($enemylife),
mysql_real_escape_string($username));
mysql_query($query);

$query = sprintf("update enemy set enemymaxlife='%s' where username='%s';",
mysql_real_escape_string($enemylife),
mysql_real_escape_string($username));
mysql_query($query);

$query = sprintf("update enemy set enemymana=0 where username='%s';",mysql_real_escape_string($username));
mysql_query($query);

$query = sprintf("update enemy set enemymaxmana=0 where username='%s';",mysql_real_escape_string($username));
mysql_query($query);

$query = sprintf("update enemy set enemycondition='Good' where username='%s';",mysql_real_escape_string($username));
mysql_query($query);

$query = sprintf("update enemy set enemyatt1='Giant Bite' where username='%s';",mysql_real_escape_string($username));
mysql_query($query);

$query = sprintf("update enemy set enemyatt1dam=30 where username='%s';",mysql_real_escape_string($username));
mysql_query($query);

$query = sprintf("update enemy set enemyatt2='Poisonous Sting' where username='%s';",mysql_real_escape_string($username));
mysql_query($query);

$query = sprintf("update enemy set enemyatt2dam=35 where username='%s';",mysql_real_escape_string($username));
mysql_query($query);

$query = sprintf("update enemy set enemypower='Pincher Claws' where username='%s';",mysql_real_escape_string($username));
mysql_query($query);

$query = sprintf("update enemy set event='Select an Option' where username='%s';",mysql_real_escape_string($username));
mysql_query($query);

$query = sprintf("update enemy set enemyspeed=38 where username='%s';",mysql_real_escape_string($username));
mysql_query($query);

$query = sprintf("update enemy set enemyagility=38 where username='%s';",mysql_real_escape_string($username));
mysql_query($query);

$query = sprintf("update enemy set enemystrength=38 where username='%s';",mysql_real_escape_string($username));
mysql_query($query);

$query = sprintf("update counters set bleed=0 where username='%s';",mysql_real_escape_string($username));
mysql_query($query);

$query = sprintf("update counters set inferno=0 where username='%s';",mysql_real_escape_string($username));
mysql_query($query);


$query = sprintf("update enemy set enemyblock=10 where username='%s';",mysql_real_escape_string($username));
mysql_query($query);

$query = sprintf("update enemy set enemyarmor=8 where username='%s';",mysql_real_escape_string($username));
mysql_query($query);

$query = sprintf("update enemy set enemyaccuracy=35 where username='%s';",mysql_real_escape_string($username));
mysql_query($query);

$query = sprintf("update enemy set fight=1 where username='%s';",mysql_real_escape_string($username));
mysql_query($query);

include ('php/clearcounters.php');
  ?>