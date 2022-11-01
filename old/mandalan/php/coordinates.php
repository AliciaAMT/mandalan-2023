<?php

$query = sprintf("select map, xaxis, yaxis from stats where username='%s';",mysql_real_escape_string($username));
$result=mysql_query($query);
while($row = mysql_fetch_array($result))
  {
  
echo "Location: ";

if ($row['map']=="homeup")
{
echo "Father's House, Floor 2";
}

if ($row['map']=="home")
{
echo "Father's House, Floor 1";
}

if ($row['map']=="yard")
{
echo "Father's Back Yard";
}

if ($row['map']=="cellar")
{
echo "Father's Cellar";
}


echo "<br />Tile: ".$row['xaxis'].",".$row['yaxis'];
  
  }
?>