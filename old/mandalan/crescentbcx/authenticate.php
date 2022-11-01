<?php
include ('php/setcookie.php');
?>
<?php include ('php/header1.php'); ?>
<?php
include ('php/connect.php');
$name=strip_tags($_POST["name"]);
$password=strip_tags($_POST["password"]);

$querys = sprintf("select * from members where name='%s';", mysql_real_escape_string($name));
$resultf = mysql_query($querys);

$row=mysql_fetch_array($resultf);
if(!$row)
{
die ("That name does not exist. Please try again.<br /><a href=\"login.php? <?php echo time(); ?>\">Login</a>");
}


$query8 = sprintf("select * from members where name='%s';", mysql_real_escape_string($name));
$result8 = mysql_query($query8);

while ($row=mysql_fetch_array($result8))
{
if ($row['password']!=$password)
{
die ("Name and Password do not match. Please try again.<br /><a href=\"login.php? <?php echo time(); ?>\">Login</a>");
}
}


$querym = sprintf("select * from members where name='%s';",mysql_real_escape_string($name));
$resultm=mysql_query($querym);

while($row=mysql_fetch_array($resultm))
  {
  echo $row['name'];
  echo " logged in successfully.<br />";
  }
?>


</td></tr></table></body></html>