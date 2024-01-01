<?php 

include ('php/getflags.php');

$query=sprintf("select map, xaxis, yaxis from stats where username='%s';", mysql_real_escape_string($username));

$result = mysql_query($query);

while($row = mysql_fetch_array($result))
  {
  
  if ($row['map']=="homeup" and $row['xaxis']==1 and $row['yaxis']==1)
  {
  $query=sprintf("update stats set map='home' where username='%s';",mysql_real_escape_string($username));
mysql_query($query);
  }
  if ($row['map']=="home" and $row['xaxis']==1 and $row['yaxis']==1)
  {
  $query=sprintf("update stats set map='homeup' where username='%s';",mysql_real_escape_string($username));
mysql_query($query);
  }

if ($row['map']=="home" and $row['xaxis']==2 and $row['yaxis']==1)
  {
$query=sprintf("update stats set map='yard' where username='%s';",mysql_real_escape_string($username));
mysql_query($query);
$query=sprintf("update stats set yaxis=3 where username='%s';",mysql_real_escape_string($username));
mysql_query($query);

}


if ($row['map']=="home" and $row['xaxis']==3 and $row['yaxis']==3)
  {
$query=sprintf("update stats set map='ishforest' where username='%s';",mysql_real_escape_string($username));
mysql_query($query);
$query=sprintf("update stats set mapdimensions=44 where username='%s';",mysql_real_escape_string($username));
mysql_query($query);
$query=sprintf("update stats set yaxis=1 where username='%s';",mysql_real_escape_string($username));
mysql_query($query);
$query=sprintf("update stats set xaxis=2 where username='%s';",mysql_real_escape_string($username));
mysql_query($query);

  }

//*************************new*******************************************


if ($row['map']=="yard" and $row['xaxis']==1 and $row['yaxis']==3)
  {

if ($shepfeed>1)
{
$query=sprintf("update stats set map='cellar' where username='%s';",mysql_real_escape_string($username));
mysql_query($query);
$query=sprintf("update stats set yaxis=1 where username='%s';",mysql_real_escape_string($username));
mysql_query($query);
$query=sprintf("update stats set xaxis=2 where username='%s';",mysql_real_escape_string($username));
mysql_query($query);
$query=sprintf("update stats set mapdimensions=00 where username='%s';",mysql_real_escape_string($username));
mysql_query($query);
}

else 
{
die ("<table class=\"page\"><tr><td class=\"border\">You try to open the cellar door, but it is locked. You cannot pick this lock. You will have to find the key before you can venture any further here.</td></tr><tr><td class=\"page\"><table class=\"page\"><tr><td class=\"page\"><form name=\"sleep\" action=\"maingraphict.php?".time()."\" method=\"get\"><input type=\"submit\" value=\"Back to Map\" class=\"small\"></form></td></tr></table></td></tr></table></body></html>"); 


}

  }


if ($row['map']=="yard" and $row['xaxis']==1 and $row['yaxis']==1)
  {
$query=sprintf("update stats set map='barn' where username='%s';",mysql_real_escape_string($username));
mysql_query($query);
$query=sprintf("update stats set yaxis=1 where username='%s';",mysql_real_escape_string($username));
mysql_query($query);
$query=sprintf("update stats set xaxis=2 where username='%s';",mysql_real_escape_string($username));
mysql_query($query);
$query=sprintf("update stats set mapdimensions=33 where username='%s';",mysql_real_escape_string($username));
mysql_query($query);

  }

if ($row['map']=="yard" and $row['xaxis']==2 and $row['yaxis']==3)
  {
$query=sprintf("update stats set map='home' where username='%s';",mysql_real_escape_string($username));
mysql_query($query);
$query=sprintf("update stats set yaxis=1 where username='%s';",mysql_real_escape_string($username));
mysql_query($query);

}

if ($row['map']=="cellar" and $row['xaxis']==2 and $row['yaxis']==1)
  {
$query=sprintf("update stats set map='yard' where username='%s';",mysql_real_escape_string($username));
mysql_query($query);
$query=sprintf("update stats set yaxis=3 where username='%s';",mysql_real_escape_string($username));
mysql_query($query);
$query=sprintf("update stats set xaxis=1 where username='%s';",mysql_real_escape_string($username));
mysql_query($query);
$query=sprintf("update stats set mapdimensions=33 where username='%s';",mysql_real_escape_string($username));
mysql_query($query);

}

if ($row['map']=="barn" and $row['xaxis']==2 and $row['yaxis']==1)
  {
$query=sprintf("update stats set map='yard' where username='%s';",mysql_real_escape_string($username));
mysql_query($query);
$query=sprintf("update stats set yaxis=1 where username='%s';",mysql_real_escape_string($username));
mysql_query($query);
$query=sprintf("update stats set xaxis=1 where username='%s';",mysql_real_escape_string($username));
mysql_query($query);
$query=sprintf("update stats set mapdimensions=33 where username='%s';",mysql_real_escape_string($username));
mysql_query($query);

  }


 if ($row['map']=="barn" and $row['xaxis']==3 and $row['yaxis']==1)
  { 
  {
die ("<table class=\"page\"><tr><td class=\"border\">You try to open the trap door, but it is locked. You cannot pick this lock. You will have to find the key before you can venture any further here.</td></tr><tr><td class=\"page\"><table class=\"page\"><tr><td class=\"page\"><form name=\"sleep\" action=\"maingraphict.php?".time()."\" method=\"get\"><input type=\"submit\" value=\"Back to Map\" class=\"small\"></form></td></tr></table></td></tr></table></body></html>"); 
}

}

if ($row['map']=="ishforest" and $row['xaxis']==4 and $row['yaxis']==4)
  {

  $query=sprintf("update stats set map='ishandar' where username='%s';",mysql_real_escape_string($username));
mysql_query($query);

$query=sprintf("update stats set yaxis=2 where username='%s';",mysql_real_escape_string($username));
mysql_query($query);

$query=sprintf("update stats set xaxis=1 where username='%s';",mysql_real_escape_string($username));
mysql_query($query);

$query=sprintf("update stats set mapdimensions=77 where username='%s';",mysql_real_escape_string($username));
mysql_query($query);
  }
  
  if ($row['map']=="ishandar" and $row['xaxis']==1 and $row['yaxis']==2)
  {

  $query=sprintf("update stats set map='ishforest' where username='%s';",mysql_real_escape_string($username));
mysql_query($query);

$query=sprintf("update stats set yaxis=4 where username='%s';",mysql_real_escape_string($username));
mysql_query($query);

$query=sprintf("update stats set xaxis=4 where username='%s';",mysql_real_escape_string($username));
mysql_query($query);

$query=sprintf("update stats set mapdimensions=44 where username='%s';",mysql_real_escape_string($username));
mysql_query($query);
  }
  if ($row['map']=="barn" and $row['xaxis']==3 and $row['yaxis']==1)
  {

  echo "Sorry you cannot enter. The door is locked and you cannot pick the lock. It seems to be enchanted.";
  }
  
  if ($row['map']=="ishforest" and $row['xaxis']==4 and $row['yaxis']==2)
  {

  $query=sprintf("update stats set map='marah' where username='%s';",mysql_real_escape_string($username));
mysql_query($query);

$query=sprintf("update stats set yaxis=2 where username='%s';",mysql_real_escape_string($username));
mysql_query($query);

$query=sprintf("update stats set xaxis=1 where username='%s';",mysql_real_escape_string($username));
mysql_query($query);

$query=sprintf("update stats set mapdimensions=33 where username='%s';",mysql_real_escape_string($username));
mysql_query($query);
  }
  if ($row['map']=="marah" and $row['xaxis']==1 and $row['yaxis']==2)
  {

  $query=sprintf("update stats set map='ishforest' where username='%s';",mysql_real_escape_string($username));
mysql_query($query);

$query=sprintf("update stats set yaxis=2 where username='%s';",mysql_real_escape_string($username));
mysql_query($query);

$query=sprintf("update stats set xaxis=4 where username='%s';",mysql_real_escape_string($username));
mysql_query($query);

$query=sprintf("update stats set mapdimensions=44 where username='%s';",mysql_real_escape_string($username));
mysql_query($query);
  }
  
  if ($row['map']=="ishforest" and $row['xaxis']==4 and $row['yaxis']==1)
  {

  $query=sprintf("update stats set map='cave' where username='%s';",mysql_real_escape_string($username));
mysql_query($query);

$query=sprintf("update stats set yaxis=3 where username='%s';",mysql_real_escape_string($username));
mysql_query($query);

$query=sprintf("update stats set xaxis=1 where username='%s';",mysql_real_escape_string($username));
mysql_query($query);

$query=sprintf("update stats set mapdimensions=00 where username='%s';",mysql_real_escape_string($username));
mysql_query($query);
  }
  
  if ($row['map']=="cave" and $row['xaxis']==1 and $row['yaxis']==3)
  {

  $query=sprintf("update stats set map='ishforest' where username='%s';",mysql_real_escape_string($username));
mysql_query($query);

$query=sprintf("update stats set yaxis=1 where username='%s';",mysql_real_escape_string($username));
mysql_query($query);

$query=sprintf("update stats set xaxis=4 where username='%s';",mysql_real_escape_string($username));
mysql_query($query);

$query=sprintf("update stats set mapdimensions=44 where username='%s';",mysql_real_escape_string($username));
mysql_query($query);
  }
  
  if ($row['map']=="ishforest" and $row['xaxis']==1 and $row['yaxis']==4)
  {

  $query=sprintf("update stats set map='pyramid' where username='%s';",mysql_real_escape_string($username));
mysql_query($query);

$query=sprintf("update stats set yaxis=1 where username='%s';",mysql_real_escape_string($username));
mysql_query($query);

$query=sprintf("update stats set xaxis=2 where username='%s';",mysql_real_escape_string($username));
mysql_query($query);

$query=sprintf("update stats set mapdimensions=33 where username='%s';",mysql_real_escape_string($username));
mysql_query($query);
  }
   if ($row['map']=="pyramid" and $row['xaxis']==2 and $row['yaxis']==1)
  {

  $query=sprintf("update stats set map='ishforest' where username='%s';",mysql_real_escape_string($username));
mysql_query($query);

$query=sprintf("update stats set yaxis=4 where username='%s';",mysql_real_escape_string($username));
mysql_query($query);

$query=sprintf("update stats set xaxis=1 where username='%s';",mysql_real_escape_string($username));
mysql_query($query);

$query=sprintf("update stats set mapdimensions=44 where username='%s';",mysql_real_escape_string($username));
mysql_query($query);
  }
  
  
//******************************end new*******************************
  }
?>