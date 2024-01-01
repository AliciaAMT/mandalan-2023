<?php

include ('php/getfight.php');

$food=strip_tags($_GET["food"]);

$query = sprintf("select * from stats where username='%s';",mysql_real_escape_string($username));
$result=mysql_query($query);

while($row = mysql_fetch_array($result))
  {

if ($food=="Bread")

{

echo "<table class=\"page\"><tr><td class=\"center\"><h3>Consume Bread</h3></td></tr>
<tr><td class=\"left\">You eat the Bread with the following effects:</td></tr>
<tr><td class=\"center\">
<table class=\"page\"><tr><td class=\"left\"><h3>Life:</h3></td><td class=\"left\"><h3>+5</h3></td></tr>
<tr><td class=\"left\"><h3>Mana:</h3></td><td class=\"left\"><h3>+5</h3></td></tr></table>
</td></tr>";


echo "<table class=\"page\"><tr><td class=\"page\"><form name=\"read\" action=\"../maingraphict.php?".time()."\" method=\"get\"><input type=\"submit\" value=\"Back to Map\" class=\"small\"></form></td></tr></table>";


echo "</tr></td></table>";


if ($row['life']+5>$row['maxlife'])
  {
  $query = sprintf("update stats set life=maxlife where username='%s';",mysql_real_escape_string($username));
mysql_query($query);
  }
else
{
  $query=sprintf("update stats set life=life+5 where username='%s';", mysql_real_escape_string($username));
  mysql_query ($query);
}
  
  
  if ($row['mana']+5>$row['maxmana'])
  {
$query = sprintf("update stats set mana=maxmana where username='%s';",mysql_real_escape_string($username));
mysql_query($query);
}
else
{
$query=sprintf("update stats set mana=mana+5 where username='%s';", mysql_real_escape_string($username));
  mysql_query ($query);
}

  $query=sprintf("update inventory set keep=keep-1 where username='%s' and itemname='Bread';", mysql_real_escape_string($username));

  mysql_query ($query);
 


}


if ($food=="Fried Meat")

{

echo "<table class=\"page\"><tr><td class=\"center\"><h3>Consume Fried Meat</h3></td></tr>
<tr><td class=\"left\">You eat the Fried Meat with the following effects:</td></tr>
<tr><td class=\"center\">
<table class=\"page\"><tr><td class=\"left\"><h3>Life:</h3></td><td class=\"left\"><h3>+15</h3></td></tr>
<tr><td class=\"left\"><h3>Mana:</h3></td><td class=\"left\"><h3>+5</h3></td></tr></table></td></tr>";

echo "<table class=\"page\"><tr><td class=\"page\"><form name=\"read\" action=\"../maingraphict.php?".time()."\" method=\"get\"><input type=\"submit\" value=\"Back to Map\" class=\"small\"></form></td></tr></table>";

echo "</td></tr></table>";

  $query=sprintf("update inventory set keep=keep-1 where username='%s' and itemname='Fried Meat';", mysql_real_escape_string($username));

  mysql_query ($query);
 
 

if ($row['life']+15>$row['maxlife'])
  {
  $query = sprintf("update stats set life=maxlife where username='%s';",mysql_real_escape_string($username));
mysql_query($query);
  }
  else
{
 $query=sprintf("update stats set life=life+15 where username='%s';", mysql_real_escape_string($username));
  mysql_query ($query);
}
  
  if ($row['mana']+5>$row['maxmana'])
  {
$query = sprintf("update stats set mana=maxmana where username='%s';",mysql_real_escape_string($username));
mysql_query($query);
}
else {
$query=sprintf("update stats set mana=mana+5 where username='%s';", mysql_real_escape_string($username));
  mysql_query ($query);
}


if ($food=="Fried Meat Sandwich")

{

echo "<table class=\"page\"><tr><td class=\"center\"><h3>Consume Fried Meat Sandwich</h3></td></tr>
<tr><td class=\"left\">You eat the Fried Meat Sandwich with the following effects:</td></tr>
<tr><td class=\"center\">
<table class=\"page\"><tr><td class=\"left\"><h3>Life:</h3></td><td class=\"left\"><h3>+30</h3></td></tr>
<tr><td class=\"left\"><h3>Mana:</h3></td><td class=\"left\"><h3>+20</h3></td></tr></table></td></tr>";

echo "<table class=\"page\"><tr><td class=\"page\"><form name=\"read\" action=\"../maingraphict.php?".time()."\" method=\"get\"><input type=\"submit\" value=\"Back to Map\" class=\"small\"></form></td></tr></table>";

echo "</td></tr></table>";

  $query=sprintf("update inventory set keep=keep-1 where username='%s' and itemname='Fried Meat Sandwich';", mysql_real_escape_string($username));

  mysql_query ($query);
 
 

if ($row['life']+30>$row['maxlife'])
  {
  $query = sprintf("update stats set life=maxlife where username='%s';",mysql_real_escape_string($username));
mysql_query($query);
  }
  else
{
 $query=sprintf("update stats set life=life+30 where username='%s';", mysql_real_escape_string($username));
  mysql_query ($query);
}
  
  if ($row['mana']+20>$row['maxmana'])
  {
$query = sprintf("update stats set mana=maxmana where username='%s';",mysql_real_escape_string($username));
mysql_query($query);
}
else {
$query=sprintf("update stats set mana=mana+20 where username='%s';", mysql_real_escape_string($username));
  mysql_query ($query);
}




if ($food=="Apple")

{

echo "<table class=\"page\"><tr><td class=\"center\"><h3>Consume Apple</h3></td></tr>
<tr><td class=\"left\">You eat the Apple with the following effects:</td></tr>
<tr><td class=\"center\">
<table class=\"page\"><tr><td class=\"left\"><h3>Life:</h3></td><td class=\"left\"><h3>+5</h3></td></tr>
<tr><td class=\"left\"><h3>Mana:</h3></td><td class=\"left\"><h3>+5</h3></td></tr></table>
</td></tr>";


echo "<table class=\"page\"><tr><td class=\"page\"><form name=\"read\" action=\"../maingraphict.php?".time()."\" method=\"get\"><input type=\"submit\" value=\"Back to Map\" class=\"small\"></form></td></tr></table>";


echo "</tr></td></table>";


if ($row['life']+5>$row['maxlife'])
  {
  $query = sprintf("update stats set life=maxlife where username='%s';",mysql_real_escape_string($username));
mysql_query($query);
  }
else
{
  $query=sprintf("update stats set life=life+5 where username='%s';", mysql_real_escape_string($username));
  mysql_query ($query);
}
  
  
  if ($row['mana']+5>$row['maxmana'])
  {
$query = sprintf("update stats set mana=maxmana where username='%s';",mysql_real_escape_string($username));
mysql_query($query);
}
else
{
$query=sprintf("update stats set mana=mana+5 where username='%s';", mysql_real_escape_string($username));
  mysql_query ($query);
}

  $query=sprintf("update inventory set keep=keep-1 where username='%s' and itemname='Apple';", mysql_real_escape_string($username));

  mysql_query ($query);
 
}


if ($food=="Melon")

{

echo "<table class=\"page\"><tr><td class=\"center\"><h3>Consume Melon</h3></td></tr>
<tr><td class=\"left\">You eat the Melon with the following effects:</td></tr>
<tr><td class=\"center\">
<table class=\"page\"><tr><td class=\"left\"><h3>Life:</h3></td><td class=\"left\"><h3>+5</h3></td></tr>
<tr><td class=\"left\"><h3>Mana:</h3></td><td class=\"left\"><h3>+5</h3></td></tr></table>
</td></tr>";


echo "<table class=\"page\"><tr><td class=\"page\"><form name=\"read\" action=\"../maingraphict.php?".time()."\" method=\"get\"><input type=\"submit\" value=\"Back to Map\" class=\"small\"></form></td></tr></table>";


echo "</tr></td></table>";


if ($row['life']+5>$row['maxlife'])
  {
  $query = sprintf("update stats set life=maxlife where username='%s';",mysql_real_escape_string($username));
mysql_query($query);
  }
else
{
  $query=sprintf("update stats set life=life+5 where username='%s';", mysql_real_escape_string($username));
  mysql_query ($query);
}
  
  
  if ($row['mana']+5>$row['maxmana'])
  {
$query = sprintf("update stats set mana=maxmana where username='%s';",mysql_real_escape_string($username));
mysql_query($query);
}
else
{
$query=sprintf("update stats set mana=mana+5 where username='%s';", mysql_real_escape_string($username));
  mysql_query ($query);
}

  $query=sprintf("update inventory set keep=keep-1 where username='%s' and itemname='Melon';", mysql_real_escape_string($username));

  mysql_query ($query);
 }


if ($food=="Lettuce")

{

echo "<table class=\"page\"><tr><td class=\"center\"><h3>Consume Lettuce</h3></td></tr>
<tr><td class=\"left\">You eat the Lettuce with the following effects:</td></tr>
<tr><td class=\"center\">
<table class=\"page\"><tr><td class=\"left\"><h3>Life:</h3></td><td class=\"left\"><h3>+5</h3></td></tr>
<tr><td class=\"left\"><h3>Mana:</h3></td><td class=\"left\"><h3>+5</h3></td></tr></table>
</td></tr>";


echo "<table class=\"page\"><tr><td class=\"page\"><form name=\"read\" action=\"../maingraphict.php?".time()."\" method=\"get\"><input type=\"submit\" value=\"Back to Map\" class=\"small\"></form></td></tr></table>";


echo "</tr></td></table>";


if ($row['life']+5>$row['maxlife'])
  {
  $query = sprintf("update stats set life=maxlife where username='%s';",mysql_real_escape_string($username));
mysql_query($query);
  }
else
{
  $query=sprintf("update stats set life=life+5 where username='%s';", mysql_real_escape_string($username));
  mysql_query ($query);
}
  
  
  if ($row['mana']+5>$row['maxmana'])
  {
$query = sprintf("update stats set mana=maxmana where username='%s';",mysql_real_escape_string($username));
mysql_query($query);
}
else
{
$query=sprintf("update stats set mana=mana+5 where username='%s';", mysql_real_escape_string($username));
  mysql_query ($query);
}

  $query=sprintf("update inventory set keep=keep-1 where username='%s' and itemname='Lettuce';", mysql_real_escape_string($username));

  mysql_query ($query);
 }




}
}
}

?>