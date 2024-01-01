<?php
include ('php/connect.php');

include ('php/getcookie.php');

$query = sprintf("update fightlog set enemy='rat' where username='%s';",mysql_real_escape_string($username));
mysql_query($query);

$query = sprintf("update fightlog set enemyname='Rat' where username='%s';",mysql_real_escape_string($username));
mysql_query($query);

$query = sprintf("update fightlog set enemylevel=1 where username='%s';",mysql_real_escape_string($username));
mysql_query($query);

$query = sprintf("update fightlog set enemylife=10 where username='%s';",mysql_real_escape_string($username));
mysql_query($query);

$query = sprintf("update fightlog set enemymaxlife=10 where username='%s';",mysql_real_escape_string($username));
mysql_query($query);

$query = sprintf("update fightlog set enemymana=0 where username='%s';",mysql_real_escape_string($username));
mysql_query($query);

$query = sprintf("update fightlog set enemymaxmana=0 where username='%s';",mysql_real_escape_string($username));
mysql_query($query);

$query = sprintf("update fightlog set enemycondition='Good' where username='%s';",mysql_real_escape_string($username));
mysql_query($query);

$query = sprintf("update fightlog set enemyatt1='Slight Scratch' where username='%s';",mysql_real_escape_string($username));
mysql_query($query);

$query = sprintf("update fightlog set enemyatt1dam=4 where username='%s';",mysql_real_escape_string($username));
mysql_query($query);

$query = sprintf("update fightlog set enemyatt2='Gnawing Bite' where username='%s';",mysql_real_escape_string($username));
mysql_query($query);

$query = sprintf("update fightlog set enemyatt2dam=6 where username='%s';",mysql_real_escape_string($username));
mysql_query($query);

$query = sprintf("update fightlog set enemypower='Plague' where username='%s';",mysql_real_escape_string($username));
mysql_query($query);

$query = sprintf("update fightlog set event='Select an Option' where username='%s';",mysql_real_escape_string($username));
mysql_query($query);

$query = sprintf("update fightlog set enemyevade=25 where username='%s';",mysql_real_escape_string($username));
mysql_query($query);

$query = sprintf("update fightlog set enemyblock=0 where username='%s';",mysql_real_escape_string($username));
mysql_query($query);

$query = sprintf("update fightlog set enemydefense=0 where username='%s';",mysql_real_escape_string($username));
mysql_query($query);

$query = sprintf("update fightlog set enemyaccuracy=10 where username='%s';",mysql_real_escape_string($username));
mysql_query($query);

$query = sprintf("update stats set fight=1 where username='%s';",mysql_real_escape_string($username));
mysql_query($query);
  ?>