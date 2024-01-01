<?php

$query=sprintf("update flags set giantscorpion=1 where username='%s';", mysql_real_escape_string($username));
mysql_query($query);

?>