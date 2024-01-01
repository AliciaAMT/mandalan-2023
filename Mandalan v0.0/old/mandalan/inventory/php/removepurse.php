<?php

$query2=sprintf("update inventory set keep=0 where username='%s' and itemnumber='%s';", mysql_real_escape_string($username), mysql_real_escape_string($number));

  mysql_query ($query2);

    ?>