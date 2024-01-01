<?php

$querys = sprintf("insert into cookbook values ( 
'%s',
0, 0, 0, 0, 0, 0, 0, 0, 0, 0

);", 

mysql_real_escape_string($name)

);

mysql_query($querys);

?>