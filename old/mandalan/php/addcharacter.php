<?php

$querys = sprintf("insert into character 

values(
'%s', '%s', 'None', '%s', '%s', '%s', 'Peasant', '%s', 'Good', 1, 0, 'homeup', 33, 2, 2, 'n', 'homeup', 33, 1, 3, '%s', '%s', '%s', '%s', 0, 0, 0, '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 
0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 
0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 
0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 
0, 0, 0, 0, 0, 0, 0, 0
);", 

mysql_real_escape_string($name),
mysql_real_escape_string($password),
mysql_real_escape_string($portrait),
mysql_real_escape_string($race),
mysql_real_escape_string($mclass),
mysql_real_escape_string($gender),
mysql_real_escape_string($life),
mysql_real_escape_string($maxlife),
mysql_real_escape_string($mana),
mysql_real_escape_string($maxmana),
mysql_real_escape_string($strength),
mysql_real_escape_string($agility),
mysql_real_escape_string($speed),
mysql_real_escape_string($accuracy),
mysql_real_escape_string($wisdom),
mysql_real_escape_string($luck),
mysql_real_escape_string($magicfind),
mysql_real_escape_string($lockpicking),
mysql_real_escape_string($cooking),
mysql_real_escape_string($alchemy),
mysql_real_escape_string($enchanting),
mysql_real_escape_string($fireresist),
mysql_real_escape_string($iceresist),
mysql_real_escape_string($earthresist),
mysql_real_escape_string($airresist),
mysql_real_escape_string($darkresist),
mysql_real_escape_string($lightresist),
mysql_real_escape_string($mindresist),
mysql_real_escape_string($holdresist),
mysql_real_escape_string($bleedresist),
mysql_real_escape_string($criticalresist),
mysql_real_escape_string($skillpoints));

mysql_query($querys);


?>