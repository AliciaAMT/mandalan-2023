<?php
$query = sprintf("select * from stats where username='%s';",mysql_real_escape_string($username));
$result=mysql_query($query);

while($row = mysql_fetch_array($result))
  {
  if ($row['map']=="homeup" and $row['xaxis']==2 and $row['yaxis']==2)
  {
  echo "<a href=\"dialogue/father.php?";
  echo time();
  echo "\"><img src=\"images/male1.png\" border=\"0\" /><br />Father</a><br />";
  }
if ($row['map']=="home" and $row['xaxis']==2 and $row['yaxis']==2)
  {
$rand=rand(1,100);
if ($rand<100)
{
  echo "<a href=\"monsters/rat.php?";
  echo time();
  echo "\"><img src=\"images/rat.png\" border=\"0\" /><br />Rat<br />Level 1</a><br />";


}
  }

//**********************************new************************************


if ($row['map']=="yard" and $row['xaxis']==3 and $row['yaxis']==3)
  {
  echo "<a href=\"oldshep.php?";
  echo time();
  echo "\"><img src=\"images/shep.png\" border=\"0\" /><br />Old Shep</a><br />";
  }


if ($row['map']=="cellar" and $row['xaxis']==2 and $row['yaxis']==5)
  {
if ($row['cellarspider']==0)
{
  echo "<a href=\"monsters/cellarspider.php?";
  echo time();
  echo "\"><img src=\"images/cellarspider.png\" border=\"0\" /><br />Cellar Spider<br />Level 2</a><br />";
}
  }



if ($row['map']=="cellar" and $row['xaxis']==1 and $row['yaxis']==1)
  {
  
  $rand=mt_rand(1,100);
  
if ($rand>70)
{
  echo "<a href=\"monsters/rat.php?";
  echo time();
  echo "\"><img src=\"images/rat.png\" border=\"0\" /><br />Rat<br />Level 1</a><br />";
}
  }
//**********************************end new*******************************



  }
?>