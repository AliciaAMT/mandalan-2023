<?php 


$query=sprintf ("update stats set yaxis=yaxis+1 where username='%s';",mysql_real_escape_string($username));

mysql_query ($query);

$query=sprintf("select * from stats where username='%s';",mysql_real_escape_string($username));

$result = mysql_query($query);

	while($row = mysql_fetch_array($result))
  {
  if ($row['mapdimensions']==33)
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


if ($row['map']=="cellar")
{

if ($row['map']=="cellar" and $row['yaxis']<1)
{
$query=sprintf("update stats set yaxis=1 where username='%s';",mysql_real_escape_string($username));
mysql_query ($query);
}

if ($row['map']=="cellar" and $row['yaxis']>6)
{
$query=sprintf("update stats set yaxis=6 where username='%s';",mysql_real_escape_string($username));
mysql_query ($query);
}

if ($row['map']=="cellar" and $row['yaxis']==1 and $row['xaxis']<1)
{
$query=sprintf("update stats set xaxis=1 where username='%s';",mysql_real_escape_string($username));
mysql_query ($query);
}

if ($row['map']=="cellar" and $row['yaxis']==1 and $row['xaxis']>3)
{
$query=sprintf("update stats set xaxis=3 where username='%s';",mysql_real_escape_string($username));
mysql_query ($query);
}

if ($row['map']=="cellar" and $row['yaxis']==2 and $row['xaxis']<1)
{
$query=sprintf("update stats set xaxis=1 where username='%s';",mysql_real_escape_string($username));
mysql_query ($query);
}

if ($row['map']=="cellar" and $row['yaxis']==2 and $row['xaxis']>3)
{
$query=sprintf("update stats set xaxis=3 where username='%s';",mysql_real_escape_string($username));
mysql_query ($query);
}

if ($row['map']=="cellar" and $row['yaxis']==3 and $row['xaxis']<1)
{
$query=sprintf("update stats set xaxis=1 where username='%s';",mysql_real_escape_string($username));
mysql_query ($query);
}

if ($row['map']=="cellar" and $row['yaxis']==3 and $row['xaxis']>3)
{
$query=sprintf("update stats set xaxis=3 where username='%s';",mysql_real_escape_string($username));
mysql_query ($query);
}

if ($row['map']=="cellar" and $row['yaxis']==4 and $row['xaxis']<1)
{
$query=sprintf("update stats set xaxis=1 where username='%s';",mysql_real_escape_string($username));
mysql_query ($query);
}

if ($row['map']=="cellar" and $row['yaxis']==4 and $row['xaxis']>3)
{
$query=sprintf("update stats set xaxis=3 where username='%s';",mysql_real_escape_string($username));
mysql_query ($query);
}

if ($row['map']=="cellar" and $row['yaxis']==5 and $row['xaxis']<2)
{
$query=sprintf("update stats set xaxis=2 where username='%s';",mysql_real_escape_string($username));
mysql_query ($query);
}

if ($row['map']=="cellar" and $row['yaxis']==5 and $row['xaxis']>2)
{
$query=sprintf("update stats set xaxis=2 where username='%s';",mysql_real_escape_string($username));
mysql_query ($query);
}

if ($row['map']=="cellar" and $row['yaxis']==6 and $row['xaxis']<2)
{
$query=sprintf("update stats set xaxis=2 where username='%s';",mysql_real_escape_string($username));
mysql_query ($query);
}

if ($row['map']=="cellar" and $row['yaxis']==6 and $row['xaxis']>2)
{
$query=sprintf("update stats set xaxis=2 where username='%s';",mysql_real_escape_string($username));
mysql_query ($query);
}
}



if ($row['mapdimensions']==44)
  {
  
  if ($row['xaxis']>4)
{
$query=sprintf("update stats set xaxis=4 where username='%s';",mysql_real_escape_string($username));

mysql_query ($query);

}

if ($row['yaxis']>4)
{

$query=sprintf("update stats set yaxis=4 where username='%s';",mysql_real_escape_string($username));

mysql_query ($query);

}

if ($row['xaxis']<1)
{

$query=sprintf("update stats set xaxis=1 where username='%s';",mysql_real_escape_string($username));

mysql_query ($query);

}

if ($row['yaxis']<1)
{

$query=sprintf("update stats set yaxis=1 where username='%s';",mysql_real_escape_string($username));

mysql_query ($query);

}


}


//***************************end new***************************************************




include ('php/map.php');
  }
?>