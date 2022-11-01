<?php

 $query = sprintf("update inventory set trade=0 where itemnumber='%s';",
   mysql_real_escape_string($itemnumber));
mysql_query($query);

?>