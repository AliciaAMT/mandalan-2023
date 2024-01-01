<?php

$query = sprintf("update stats set enemy='spider' where username='%s';",mysql_real_escape_string($username));
mysql_query($query);

$query = sprintf("update stats set enemyname='Spider' where username='%s';",mysql_real_escape_string($username));
mysql_query($query);

$query = sprintf("update stats set enemylevel=1 where username='%s';",mysql_real_escape_string($username));
mysql_query($query);

$query = sprintf("update stats set enemylife=15 where username='%s';",mysql_real_escape_string($username));
mysql_query($query);

$query = sprintf("update stats set enemymaxlife=15 where username='%s';",mysql_real_escape_string($username));
mysql_query($query);

$query = sprintf("update stats set enemymana=0 where username='%s';",mysql_real_escape_string($username));
mysql_query($query);

$query = sprintf("update stats set enemymaxmana=0 where username='%s';",mysql_real_escape_string($username));
mysql_query($query);

$query = sprintf("update stats set enemycondition='Good' where username='%s';",mysql_real_escape_string($username));
mysql_query($query);

$query = sprintf("update stats set enemyatt1='Small Bite' where username='%s';",mysql_real_escape_string($username));
mysql_query($query);

$query = sprintf("update stats set enemyatt1dam=2 where username='%s';",mysql_real_escape_string($username));
mysql_query($query);

$query = sprintf("update stats set enemyatt2='Poisonous Bite' where username='%s';",mysql_real_escape_string($username));
mysql_query($query);

$query = sprintf("update stats set enemyatt2dam=4 where username='%s';",mysql_real_escape_string($username));
mysql_query($query);

$query = sprintf("update stats set enemypower='Web' where username='%s';",mysql_real_escape_string($username));
mysql_query($query);

$query = sprintf("update stats set event='Select an Option' where username='%s';",mysql_real_escape_string($username));
mysql_query($query);

$query = sprintf("update stats set enemyspeed=10 where username='%s';",mysql_real_escape_string($username));
mysql_query($query);

$query = sprintf("update stats set enemyagility=10 where username='%s';",mysql_real_escape_string($username));
mysql_query($query);

$query = sprintf("update stats set enemystrength=10 where username='%s';",mysql_real_escape_string($username));
mysql_query($query);

$query = sprintf("update stats set enemybleed=0 where username='%s';",mysql_real_escape_string($username));
mysql_query($query);

$query = sprintf("update stats set infernocount=0 where username='%s';",mysql_real_escape_string($username));
mysql_query($query);


$query = sprintf("update stats set enemyblock=0 where username='%s';",mysql_real_escape_string($username));
mysql_query($query);

$query = sprintf("update stats set enemydefense=5 where username='%s';",mysql_real_escape_string($username));
mysql_query($query);

$query = sprintf("update stats set enemyaccuracy=15 where username='%s';",mysql_real_escape_string($username));
mysql_query($query);

$query = sprintf("update stats set fight=1 where username='%s';",mysql_real_escape_string($username));
mysql_query($query);

include ('php/clearcounters.php');
  ?>