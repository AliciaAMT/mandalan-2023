<?php
$query=sprintf("update stats set firelit='n' where username='%s';",mysql_real_escape_string($username));
mysql_query($query);
?>