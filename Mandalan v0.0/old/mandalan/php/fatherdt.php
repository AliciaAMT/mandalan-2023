<?php

$response=strip_tags($_POST["type"]);

$query=sprintf("select * from flags where username='%s';", mysql_real_escape_string($username));

$result=mysql_query($query);

while($row = mysql_fetch_array($result))

  {

  if (!$response)

  {

if ($row['quest4']==1)

  {
  echo "<table class=\"page\" width=\"100%\"><tr><td class=\"border\">";  

  echo "<h4>Father</h4>";

  include ('php/npcdialogue.php');
  echo "Ah, I see you have found the family crest. It contains very special magic. Only those with great power can unlock it's abilities. Keep it. You will need it.";
  echo "</td></tr><tr><td class=\"border\"><h4>";

include ('../php/name.php');

echo "'s Response</h4></td><td class=\"borderl\">";
  echo "<table class=\"page\" width=\"100%\"><tr><td class=\"center\" width=\"15%\"><form action=\"../maingraphict.php?";
echo time();

echo "\" method=\"post\"><input class=\"invisible\" type=\"radio\" name=\"type\" checked=\"checked\" value=\"2\" /><input class=\"small\" type=\"submit\" value=\"Say: Ok, thank you.\" /></form></td></tr>";
  echo "</table>";
$query=sprintf("update flags set quest4=2 where username='%s';", mysql_real_escape_string($username));

  mysql_query ($query);

  include ('php/tableend.php');
  }

else
{
  
  

  if ($row['quest1']==0)

  {

  echo "<table class=\"page\" width=\"100%\"><tr><td class=\"border\">";  

  echo "<h4>Father</h4>";

  include (