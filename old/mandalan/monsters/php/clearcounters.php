<?php

$query = sprintf("update counters set ebleed=0 where username='%s';",mysql_real_escape_string($username));
mysql_query($query);

$query = sprintf("update counters set held=0 where username='%s';",mysql_real_escape_string($username));
mysql_query($query);

$query = sprintf("update counters set bleeding=0 where username='%s';",mysql_real_escape_string($username));
mysql_query($query);

$query = sprintf("update counters set inferno=0 where username='%s';",mysql_real_escape_string($username));
mysql_query($query);

$query = sprintf("update counters set frozen=0 where username='%s';",mysql_real_escape_string($username));
mysql_query($query);

$query = sprintf("update counters set stunned=0 where username='%s';",mysql_real_escape_string($username));
mysql_query($query);

$query = sprintf("update counters set poisoned=0 where username='%s';",mysql_real_escape_string($username));
mysql_query($query);

$query = sprintf("update counters set eheld=0 where username='%s';",mysql_real_escape_string($username));
mysql_query($query);

$query = sprintf("update counters set einferno=0 where username='%s';",mysql_real_escape_string($username));
mysql_query($query);

$query = sprintf("update counters set efrozen=0 where username='%s';",mysql_real_escape_string($username));
mysql_query($query);

$query = sprintf("update counters set estunned=0 where username='%s';",mysql_real_escape_string($username));
mysql_query($query);

$query = sprintf("update counters set epoisoned=0 where username='%s';",mysql_real_escape_string($username));
mysql_query($query);

?>