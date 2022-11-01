<?php
$query = sprintf("select map, xaxis, yaxis from stats where username='%s';",mysql_real_escape_string($username));
$result=mysql_query($query);

	while($row = mysql_fetch_array($result))
  {
  if ($row['map']=="homeup" and $row['xaxis']==1 and $row['yaxis']==1)
  {
  echo "<h4><a href=\"portalt.php\">Stairs Down</a></h4>";
  }
  if ($row['map']=="home" and $row['xaxis']==1 and $row['yaxis']==1)
  {
  echo "<h4><a href=\"portalt.php\">Stairs Up</a></h4>";
  }
  if ($row['map']=="home" and $row['xaxis']==3 and $row['yaxis']==3)
  {
  echo "<h4><a href=\"portalt.php\">Front Door</a></h4>";
  }
  if ($row['map']=="home" and $row['xaxis']==2 and $row['yaxis']==1)
  {
  echo "<h4><a href=\"portalt.php\">Back Door</a></h4>";
  }
if ($row['map']=="yard" and $row['xaxis']==2 and $row['yaxis']==3)
  {
  echo "<h4><a href=\"portalt.php\">Back Door</a></h4>";
  }

if ($row['map']=="yard" and $row['xaxis']==1 and $row['yaxis']==3)
  {
  echo "<h4><a href=\"portalt.php\">Cellar Door</a></h4>";
  }

if ($row['map']=="yard" and $row['xaxis']==1 and $row['yaxis']==1)
  {
  echo "<h4><a href=\"portalt.php\">Barn Door</a></h4>";
  }

if ($row['map']=="cellar" and $row['xaxis']==2 and $row['yaxis']==1)
  {
  echo "<h4><a href=\"portalt.php\">Ladder Out of Cellar</a></h4>";
  }
if ($row['map']=="barn" and $row['xaxis']==2 and $row['yaxis']==1)
  {
  echo "<h4><a href=\"portalt.php\">Barn Door</a></h4>";
  }
if ($row['map']=="barn" and $row['xaxis']==3 and $row['yaxis']==1)
  {
  echo "<h4><a href=\"portalt.php\">Trap Door</a></h4>";
  }
if ($row['map']=="ishforest" and $row['xaxis']==2 and $row['yaxis']==1)
  {
  echo "<h4><a href=\"portalt.php\">Father's House</a></h4>";
  }
  if ($row['map']=="ishforest" and $row['xaxis']==4 and $row['yaxis']==4)
  {
  echo "<h4><a href=\"portalt.php\">Gate to Ishandar</a></h4>";
  }
  
  if ($row['map']=="ishandar" and $row['xaxis']==1 and $row['yaxis']==2)
  {
  echo "<h4><a href=\"portalt.php\">Gate to Ishandar Forest</a></h4>";
  }
  
   if ($row['map']=="ishforest" and $row['xaxis']==4 and $row['yaxis']==2)
  {
  echo "<h4><a href=\"portalt.php\">Lady Marah's House</a></h4>";
  }
  
   if ($row['map']=="marah" and $row['xaxis']==1 and $row['yaxis']==2)
  {
  echo "<h4><a href=\"portalt.php\">Front Door</a></h4>";
  }
  
  if ($row['map']=="ishforest" and $row['xaxis']==4 and $row['yaxis']==1)
  {
  echo "<h4><a href=\"portalt.php\">Cave Entrance</a></h4>";
  }
  
  if ($row['map']=="cave" and $row['xaxis']==1 and $row['yaxis']==3)
  {
  echo "<h4><a href=\"portalt.php\">Cave Exit</a></h4>";
  }
  
  if ($row['map']=="ishandar" and $row['xaxis']==2 and $row['yaxis']==1)
  {
  echo "<h4><a href=\"innt.php\">Inn</a></h4>";
  }
  if ($row['map']=="pyramid" and $row['xaxis']==2 and $row['yaxis']==1)
  {
  echo "<h4><a href=\"portalt.php\">Pyramid Exit</a></h4>";
  }
  
  }
?>