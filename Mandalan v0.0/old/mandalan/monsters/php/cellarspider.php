<?php

$query = sprintf("update enemy set enemy='cellarspider' where username='%s';",mysql_real_escape_string($username));
mysql_query($query);

$query = sprintf("update enemy set enemyname='Cellar Spider' where username='%s';",mysql_real_escape_string($username));
mysql_query($query);

$query = sprintf("update enemy set enemylevel=2 where username='%s';",mysql_real_escape_string($username));
mysql_query($query);

$query = sprintf("update enemy set enemylife=50 where username='%s';",mysql_real_escape_string($username));
mysql_query($query);

$query = sprintf("update enemy set enemymaxlife=50 where username='%s';",mysql_real_escape_string($username));
mysql_query($query);

$query = sprintf("update enemy set enemymana=0 where username='%s';",mysql_real_escape_string($username));
mysql_query($query);

$query = sprintf("update enemy set enemymaxmana=0 where username='%s';",mysql_real_escape_string($username));
mysql_query($query);

$query = sprintf("update enemy set enemycondition='Good' where username='%s';",mysql_real_escape_string($username));
mysql_query($query);

$query = sprintf("update enemy set enemyatt1='Small Bite' where username='%s';",mysql_real_escape_string($username));
mysql_query($query);

$query = sprintf("update enemy set enemyatt1dam=2 where username='%s';",mysql_real_escape_string($username));
mysql_query($query);

$query = sprintf("update enemy set enemyatt2='Poisonous Bite' where username='%s';",mysql_real_escape_string($username));
mysql_query($query);

$query = sprintf("update enemy set enemyatt2dam=4 where username='%s';",mysql_real_escape_string($username));
mysql_query($query);

$query = sprintf("update enemy set enemypower='Web' where username='%s';",mysql_real_escape_string($username));
mysql_query($query);

$query = sprintf("update enemy set event='Select an Option' where username='%s';",mysql_real_escape_string($username));
mysql_query($query);

$query = sprintf("update enemy set enemyspeed=12 where username='%s';",mysql_real_escape_string($username));
mysql_query($query);

$query = sprintf("update enemy set enemyagility=12 where username='%s';",mysql_real_escape_string($username));
mysql_query($query);

$query = sprintf("update enemy set enemystrength=10 where username='%s';",mysql_real_escape_string($username));
mysql_query($query);

$query = sprintf("update enemy set enemybleed=0 where username='%s';",mysql_real_escape_string($username));
mysql_query($query);

$query = sprintf("update enemy set infernocount=0 where username='%s';",mysql_real_escape_string($username));
mysql_query($query);


$query = sprintf("update enemy set enemyblock=0 where username='%s';",mysql_real_escape_string($username));
mysql_query($query);

$query = sprintf("update enemy set enemydefense=5 where username='%s';",mysql_real_escape_string($username));
mysql_query($query);

$query = sprintf("update enemy set enemyaccuracy=15 where username='%s';",mysql_real_escape_string($username));
mysql_query($query);

$query = sprintf("update enemy set fight=1 where username='%s';",mysql_real_escape_string($username));
mysql_query($query);

include ('php/clearcounters.php');
  ?>