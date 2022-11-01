<?php

include ('php/setcookie.php');

include ('php/header1.php');

include ('php/connect.php');

$mode=strip_tags($_POST["mode"]);

$username=strip_tags($_POST["name"]);

if ($username=="none")
{
die ("You must first create a character for this character slot.<br /><a href=\"choosecharacter2.php?".time()."\">Choose Character</a></body></html>");
}

$querys = sprintf("select * from stats where username='%s';", mysql_real_escape_string($username));

$resultf = mysql_query($querys);

$row=mysql_fetch_array($resultf);

if(!$row)

{

die ("That name does not exist. Please try again.<br /><a href=\"logint.php?".time()."\">Login</a></body></html>");

}

$querym = sprintf("select * from stats where username='%s';",mysql_real_escape_string($username));

$resultm=mysql_query($querym);

while($row=mysql_fetch_array($resultm))

  {

  echo "<br />";

  echo $row['username'];

  echo " logged in successfully.<br /><br /><a href=\"";

 
  if ($mode==1)

  {

  echo "maingraphict.php?".time();

  echo "\">Play!</a>";

  }

  if ($mode==2)

  {

  echo "multimaint.php?".time();

  echo "\">Play!</a>";

  }

  }

?>


</body>

</html>