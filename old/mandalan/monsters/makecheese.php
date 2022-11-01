<?php

$query = sprintf("select * from inventory where username='%s';",mysql_real_escape_string($username));
$result=mysql_query($query);

while($row = mysql_fetch_array($result))
  {
  
  if ($row['itemname']=="milk")
  {
  if ($row['keep']>2)
  {
  echo "<table class=\"page\"><tr><td class=\"page\"><h3>You made one cheese.</h3><form action=\"makecheese.php?";

echo time();
echo "\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Make More Cheese\" /></form><br /><form action=\"maingraphics.php?";

echo time();
echo "\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Back to Map\" /></form>";
  
  include ('php/addcheese.php');
  }
else 
{
echo "<h3>You do not have enough milk.</h3><form action=\"maingraphics.php?";

echo time();
echo "\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Back to Map\" /></form>";
}
  }
  
  if (!$row['itemname']=="Milk")
  
  {
  echo "<h3>You do not have enough milk.</h3><form action=\"maingraphics.php?";
  echo time();
  echo "\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Back to Map\" /></form>";
  }