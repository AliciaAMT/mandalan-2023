<?php
$query2=sprintf("update inventory set equip=0, equiprh=0, equiplh=0, keep=1 where username='%s' and equiprh=1 and equip=1;", mysql_real_escape_string($username));

  mysql_query ($query2);

    ?>