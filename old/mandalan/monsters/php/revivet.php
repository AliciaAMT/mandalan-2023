<?php


$query = sprintf("select * from stats where username='%s';",mysql_real_escape_string($username));
$result=mysql_query($query);

while($row = mysql_fetch_array($result))
  {
  $query=sprintf("update stats set cond='Good' where username='%s';", mysql_real_escape_string($username));
  mysql_query($query);
  
  $query=sprintf("update stats set life=maxlife where username='%s';", mysql_real_escape_string($username));
  mysql_query($query);
  
$query=sprintf("update stats set mana=maxmana where username='%s';", mysql_real_escape_string($username));
  mysql_query($query);


  $query=sprintf("update stats set map=savemap where username='%s';", mysql_real_escape_string($username));
  mysql_query($query);
  
  $query=sprintf("update stats set mapdimensions=savemapdimensions where username='%s';", mysql_real_escape_string($username));
  mysql_query($query);
  
  $query=sprintf("update stats set yaxis=saveyaxis where username='%s';", mysql_real_escape_string($username));
  mysql_query($query);

$query=sprintf("update stats set xaxis=savexaxis where username='%s';", mysql_real_escape_string($username));
  mysql_query($query);

$query=sprintf("update enemy set fight=0 where username='%s';", mysql_real_escape_string($username));
  mysql_query($query);
  
  $query=sprintf("update stats set deaths=deaths+1 where username='%s';", mysql_real_escape_string($username));
  mysql_query($query);
  
  $exploss=round($row['experience']*.05);
  $query=sprintf("update stats set experience=experience-'%s' where username='%s';", mysql_real_escape_string($exploss), mysql_real_escape_string($username));
  mysql_query($query);
  
  echo "<div class=\"full\"><table class=\"page\"><tr><td class=\"border\">You move toward the light, but you are stopped by an angel who says, \"You must return. Your work is not yet finished.\"<br /><br />You awake in bed with a slight headache and a case of dejavu. You lose ".$exploss;
  echo " experience.<br /><br /><table class=\"page\"><tr><td class=\"page\"><table class=\"page\"><tr><td class=\"page\"><form action=\"../maingraphict.php?".time()."\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Continue\" /></form></td></tr></table></td></tr></table><br /><br /></td></tr></table></div></body></html>";
}
  ?>