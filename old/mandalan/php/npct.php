<?php

include ('php/getflags.php');

$query = sprintf("select map, xaxis, yaxis, level from stats where username='%s';",mysql_real_escape_string($username));
$result=mysql_query($query);

while($row = mysql_fetch_array($result))
  {
  if ($row['map']=="homeup" and $row['xaxis']==2 and $row['yaxis']==2)
  {
  echo "<h4><a href=\"dialogue/fathert.php?";
  echo time();
  echo "\">Father</a></h4><br />";
  }
if ($row['map']=="home" and $row['xaxis']==2 and $row['yaxis']==2)
  {
$rand=rand(1,100);
if ($rand<100)
{
  echo "<a href=\"monsters/ratt.php?";
  echo time();
  echo "\"><h4>Rat Level 1</h4></a><br />";

}
  }

if ($row['map']=="yard" and $row['xaxis']==3 and $row['yaxis']==3)
  {
  echo "<h4><a href=\"oldshept.php?";
  echo time();
  echo "\">Old Shep</a></h4><br />";
  }

if ($row['map']=="cellar")
{

if ($row['map']=="cellar" and $row['xaxis']==2 and $row['yaxis']==5)
  {
if ($cellarspider==0)
{
  echo "<h4><a href=\"monsters/cellarspidert.php?";
  echo time();
  echo "\">Cellar Spider Level 2</a></h4><br />";
}
  }

if ($row['map']=="cellar" and $row['xaxis']==1 and $row['yaxis']==1)
  {
  
  $rand=mt_rand(1,100);
  
if ($rand>70)
{
  echo "<h4><a href=\"monsters/ratt.php?";
  echo time();
  echo "\">Rat Level 1</a></h4><br />";
}
  }
  
if ($row['map']=="cellar" and $row['xaxis']==3 and $row['yaxis']==1)
  {
  
  $rand=mt_rand(1,100);
  
if ($rand>70)
{
  echo "<h4><a href=\"monsters/ratt.php?";
  echo time();
  echo "\">Rat Level 1</a></h4><br />";
}
  }
  
if ($row['map']=="cellar" and $row['xaxis']==1 and $row['yaxis']==2)
  {
  
  $rand=mt_rand(1,100);
  
if ($rand>70)
{
  echo "<h4><a href=\"monsters/spidert.php?";
  echo time();
  echo "\">Spider Level 1</a></h4><br />";
}
  }
  
if ($row['map']=="cellar" and $row['xaxis']==3 and $row['yaxis']==2)
  {
  
  $rand=mt_rand(1,100);
  
if ($rand>70)
{
  echo "<h4><a href=\"monsters/spidert.php?";
  echo time();
  echo "\">Spider Level 1</a></h4><br />";
}
  }

if ($row['map']=="cellar" and $row['xaxis']==1 and $row['yaxis']==3)
  {
  
  $rand=mt_rand(1,100);
  
if ($rand>70)
{
  echo "<h4><a href=\"monsters/rattl.php?";
  echo time();
  echo "\">Rat Level ?</a></h4><br />";
}
  }
  
  if ($row['map']=="cellar" and $row['xaxis']==3 and $row['yaxis']==3)
  {
  
  $rand=mt_rand(1,100);
  
if ($rand>70)
{
  echo "<h4><a href=\"monsters/rattl.php?";
  echo time();
  echo "\">Rat Level ?</a></h4><br />";
}
  }
if ($row['map']=="cellar" and $row['xaxis']==1 and $row['yaxis']==4)
  {
  
  $rand=mt_rand(1,100);
  
if ($rand>70)
{
  echo "<h4><a href=\"monsters/spidertl.php?";
  echo time();
  echo "\">Spider Level ?</a></h4><br />";
}
  }
  
  if ($row['map']=="cellar" and $row['xaxis']==3 and $row['yaxis']==4)
  {
  
  $rand=mt_rand(1,100);
  
if ($rand>70)
{
  echo "<h4><a href=\"monsters/spidertl.php?";
  echo time();
  echo "\">Spider Level ?</a></h4><br />";
}
  }
  
  }

if ($row['map']=="barn")

{

$rand=mt_rand(1,100);

if ($rand>70)
{

echo "<h4><a href=\"monsters/spidertl.php?";
  echo time();
  echo "\">Spider Level ?</a></h4><br />";

}

if ($rand>50 and $rand<70)
{
echo "<h4><a href=\"monsters/rattl.php?";
  echo time();
  echo "\">Rat Level ?</a></h4><br />";

}

}

if ($row['map']=="ishforest")

{

$rand=mt_rand(1,100);

if ($rand>70)
{

echo "<h4><a href=\"monsters/spidertl.php?";
  echo time();
  echo "\">Spider Level ?</a></h4><br />";

}

if ($rand>50 and $rand<70)
{
echo "<h4><a href=\"monsters/rattl.php?";
  echo time();
  echo "\">Rat Level ?</a></h4><br />";

}

}
//**********************************end new*******************************

  }
?>