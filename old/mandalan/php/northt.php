<?php 


$query=sprintf ("update stats set yaxis=yaxis+1 where username='%s';",mysql_real_escape_string($username));

mysql_query ($query);

$query=sprintf("select * from stats where username='%s';",mysql_real_escape_string($username));

$result = mysql_query($query);

	while($row = mysql_fetch_array($result))
  {
  
  if ($row['mapdimensions']==33 and $row['xaxis']>3)
{
$query=sprintf("update stats set xaxis=3 where username='%s';",mysql_real_escape_string($username));

mysql_query ($query);

}

if ($row['mapdimensions']==33 and $row['yaxis']>3)
{

$query=sprintf("update stats set yaxis=3 where username='%s';",mysql_real_escape_string($username));

mysql_query ($query);

}

if ($row['mapdimensions']==33 and $row['xaxis']<1)
{

$query=sprintf("update stats set xaxis=1 where username='%s';",mysql_real_escape_string($username));

mysql_query ($query);

}

if ($row['mapdimensions']==33 and $row['yaxis']<1)
{

$query=sprintf("update stats set yaxis=1 where username='%s';",mysql_real_escape_string($username));

mysql_query ($query);

}

  }
?>