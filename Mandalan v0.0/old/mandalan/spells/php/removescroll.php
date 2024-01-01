<?php

$query=sprintf("update spellbook set learned=learned-1 where username='%s' and spellnumber='%s';",mysql_real_escape_string($username), mysql_real_escape_string ($number));


mysql_query($query);

?>