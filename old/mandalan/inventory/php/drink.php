<?php 

include ('php/emptywater.php');


$query=sprintf("select * from stats where username='%s';", mysql_real_escape_string($username));



$result = mysql_query($query);



while($row = mysql_fetch_array($result))

  {

  if ($row['maxlife']<$row['life']+5)

  {

  $query=sprintf("update stats set life=maxlife where username='%s';", mysql_real_escape_string($username));

  mysql_query ($query, $con);

  }

  else

  {

  $query=sprintf("update stats set life=life+5 where username='%s';", mysql_real_escape_string($username));

  mysql_query ($query, $con);

  }

  if ($row['maxmana']<$row['mana']+5)

  {

  $query=sprintf("update stats set mana=maxmana where username='%s';", mysql_real_escape_string($username));

  mysql_query ($query, $con);

  }

  else

  {

  $query=sprintf("update stats set mana=mana+5 where username='%s';", mysql_real_escape_string($username));

  mysql_query ($query, $con);

  }

  

  echo "<table class=\"page\"><tr><td class=\"center\"><img src=\"../images/water.png\" /><br /><h3>Water Break</h3>You drink one eight-hour serving of water and heal Life +5 and Mana +5.</td></tr><tr><td class=\"left\">Life: ".$row['life']."/".$row['maxlife']."</td></td><tr><td class=\"left\">Mana: ".$row['mana']."/".$row['maxmana']."</td></tr><tr><td class=\"center\"><table class=\"page\"><tr><td class=\"center\">";

  

  if ($row['fight']==1)

{

echo "<form action=\"../monsters/drank.php?";

echo time();

echo "\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Back to Battle\" /></form>";

}

if ($row['fight']==0)

{

echo "<form action=\"food.php?";

echo time();

echo "\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Back to Inventory\" /></form></td></tr><tr><td class=\"page\">";



echo "<form action=\"../maingraphics.php?";

echo time();

echo "\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Back to Map\" /></form>";

}




  echo "</td></tr></table></td></tr></table";

  

  }

?>