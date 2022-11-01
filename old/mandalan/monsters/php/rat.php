<?php

$query = sprintf("update enemy set enemy='rat' where username='%s';",mysql_real_escape_string($username));
mysql_query($query);

$query = sprintf("update enemy set enemyname='Rat' where username='%s';",mysql_real_escape_string($username));
mysql_query($query);

$query = sprintf("update enemy set enemylevel=1 where username='%s';",mysql_real_escape_string($username));
mysql_query($query);

$query = sprintf("update enemy set enemylife=20 where username='%s';",mysql_real_escape_string($username));
mysql_query($query);

$query = sprintf("update enemy set enemymaxlife=20 where username='%s';",mysql_real_escape_string($username));
mysql_query($query);

$query = sprintf("update enemy set enemymana=0 where username='%s';",mysql_real_escape_string($username));
mysql_query($query);

$query = sprintf("update enemy set enemymaxmana=0 where username='%s';",mysql_real_escape_string($username));
mysql_query($query);

$query = sprintf("update enemy set enemycondition='Good' where username='%s';",mysql_real_escape_string($username));
mysql_query($query);

$query = sprintf("update enemy set enemyatt1='Slight Scratch' where username='%s';",mysql_real_escape_string($username));
mysql_query($query);

$query = sprintf("update enemy set enemyatt1dam=6 where username='%s';",mysql_real_escape_string($username));
mysql_query($query);

$query = sprintf("update enemy set enemyatt2='Gnawing Bite' where username='%s';",mysql_real_escape_string($username));
mysql_query($query);

$query = sprintf("update enemy set enemyatt2dam=8 where username='%s';",mysql_real_escape_string($username));
mysql_query($query);

$query = sprintf("update enemy set enemypower='Plague' where username='%s';",mysql_real_escape_string($username));
mysql_query($query);

$query = sprintf("update enemy set event='Select an Option' where username='%s';",mysql_real_escape_string($username));
mysql_query($query);

$query = sprintf("update enemy set enemyspeed=8 where username='%s';",mysql_real_escape_string($username));
mysql_query($query);

$query = sprintf("update enemy set enemyagility=8 where username='%s';",mysql_real_escape_string($username));
mysql_query($query);

$query = sprintf("update enemy set enemystrength=10 where username='%s';",mysql_real_escape_string($username));
mysql_query($query);

$query = sprintf("update enemy set enemybleed=0 where username='%s';",mysql_real_escape_string($username));
mysql_query($query);

$query = sprintf("update enemy set infernocount=0 where username='%s';",mysql_real_escape_string($username));
mysql_query($query);


$query = sprintf("update enemy set enemyblock=0 where username='%s';",mysql_real_escape_string($username));
mysql_query($query);

$query = sprintf("update enemy set enemydefense=0 where username='%s';",mysql_real_escape_string($username));
mysql_query($query);

$query = sprintf("update enemy set enemyaccuracy=10 where username='%s';",mysql_real_escape_string($username));
mysql_query($query);

$query = sprintf("update enemy set fight=1 where username='%s';",mysql_real_escape_string($username));
mysql_query($query);

include ('php/clearcounters.php');
  ?>