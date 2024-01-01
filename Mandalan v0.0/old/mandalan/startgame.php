<?php

include ('php/setcookie.php');

include ('php/header1.php');

include ('php/startmain.php');

include ('php/connect.php');

$mode=strip_tags($_POST["mode"]);

$username=strip_tags($_POST["name"]);

if ($username=="none")
{
die ("You must first create a character for this character slot.<br /><a href=\"choosecharacter1.php?".time()."\">Choose Character</a></body></html>");
}

$querys = sprintf("select * from stats where username='%s';", mysql_real_escape_string($username));

$resultf = mysql_query($querys);

$row=mysql_fetch_array($resultf);

if(!$row)

{

die ("That name does not exist. Please try again.<br /><a href=\"login.php?".time()."\">Login</a></td></tr></table></body></html>");

}

$querym = sprintf("select * from stats where username='%s';",mysql_real_escape_string($username));

$resultm=mysql_query($querym);

while($row=mysql_fetch_array($resultm))

  {

  echo "<img src=\"images/".$row['portrait'];

  echo ".png\" border=\"0\" /><br />";

  echo $row['username'];

  echo " logged in successfully.<br /><br /><a href=\"";

  if ($mode==1)

  {

  echo "maingraphics.php?".time();

  echo "\">Play!</a>";

  }

  if ($mode==2)

  {

  echo "multimain.php?".time();

  echo "\">Play!</a>";

  }

  }

mysql_close($con);

?>

</td></tr></table>

</body>

</html>