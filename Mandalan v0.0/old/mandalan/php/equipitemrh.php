<?phpinclude ('php/unequipdual.php');
include ('php/removelh.php');

$query2=sprintf("update inventory set equip=1, equiprh=1, keep=0 where username='%s' and itemnumber='%s';", mysql_real_escape_string($username),mysql_real_escape_string($equiprh));
  mysql_query ($query2);
?>