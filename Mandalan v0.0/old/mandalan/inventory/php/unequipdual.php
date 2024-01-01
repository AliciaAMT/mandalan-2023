<?php


$query=sprintf("update inventory set equip=0, keep=1 where username='%s' and equip=1 and itemtype='Weapon' and duality=0;",mysql_real_escape_string($username));

mysql_query ($query);


?>