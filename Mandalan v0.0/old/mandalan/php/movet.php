<?php

include ('php/getflags.php');

$query = sprintf("select mapdimensions, xaxis, yaxis, map from stats where username='%s';",mysql_real_escape_string($username));
$result=mysql_query($query);
while($row = mysql_fetch_array($result))
  {
  
  if ($row['mapdimensions']==33)
  {
  
  if ($row['mapdimensions']==33 and $row['xaxis']==2 and $row['yaxis']==2)
{
echo "<a href=\"northt.php\">North</a>
<br />
<a href=\"southt.php\">South</a><br /><a href=\"eastt.php\">East</a><br /><a href=\"westt.php\">West</a>";
}

  if ($row['mapdimensions']==33 and $row['xaxis']==1 and $row['yaxis']==1)
{
echo "<a href=\"northt.php\">North</a> <a href=\"eastt.php\">East</a>";
}

if ($row['mapdimensions']==33 and $row['xaxis']==2 and $row['yaxis']==1)
{
echo "<a href=\"northt.php\">North</a> <a href=\"eastt.php\">East</a> <a href=\"westt.php\">West</a>";
}

if ($row['mapdimensions']==33 and $row['xaxis']==3 and $row['yaxis']==1)
{
echo "<a href=\"northt.php\">North</a> <a href=\"westt.php\">West</a>";
}

if ($row['mapdimensions']==33 and $row['xaxis']==1 and $row['yaxis']==2)
{
echo "<a href=\"northt.php\">North</a> <a href=\"southt.php\">South</a> <a href=\"eastt.php\">East</a>";
}

if ($row['mapdimensions']==33 and $row['xaxis']==3 and $row['yaxis']==2)
{
echo "<a href=\"northt.php\">North</a> <a href=\"southt.php\">South</a> <a href=\"westt.php\">West</a>";
}

if ($row['mapdimensions']==33 and $row['xaxis']==1 and $row['yaxis']==3)
{
echo "<a href=\"southt.php\">South</a> <a href=\"eastt.php\">East</a>";
}

if ($row['mapdimensions']==33 and $row['xaxis']==2 and $row['yaxis']==3)
{
echo "<a href=\"southt.php\">South</a> <a href=\"eastt.php\">East</a> <a href=\"westt.php\">West</a>";
}

if ($row['mapdimensions']==33 and $row['xaxis']==3 and $row['yaxis']==3)
{
echo "<a href=\"southt.php\">South</a> <a href=\"westt.php\">West</a>";
}


}
//******************************************

if ($row['mapdimensions']==00)
{

if ($row['map']=="cellar")
{

 if ($row['mapdimensions']==00 and $row['map']=="cellar" and $row['xaxis']==1 and $row['yaxis']==1)
{
echo "<a href=\"northt.php\">North</a>
<br /><a href=\"eastt.php\">East</a>";
}

 if ($row['mapdimensions']==00 and $row['map']=="cellar" and $row['xaxis']==2 and $row['yaxis']==1)
{
echo "<a href=\"northt.php\">North</a>
<br /><a href=\"eastt.php\">East</a><br /><a href=\"westt.php\">West</a>";
}

 if ($row['mapdimensions']==00 and $row['map']=="cellar" and $row['xaxis']==3 and $row['yaxis']==1)
{
echo "<a href=\"northt.php\">North</a>
<br /><a href=\"westt.php\">West</a>";
}

 if ($row['mapdimensions']==00 and $row['map']=="cellar" and $row['xaxis']==1 and $row['yaxis']==2)
{
echo "<a href=\"northt.php\">North</a>
<br />
<a href=\"southt.php\">South</a><br /><a href=\"eastt.php\">East</a>";
}

 if ($row['mapdimensions']==00 and $row['map']=="cellar" and $row['xaxis']==2 and $row['yaxis']==2)
{
echo "<a href=\"northt.php\">North</a>
<br />
<a href=\"southt.php\">South</a><br /><a href=\"eastt.php\">East</a><br /><a href=\"westt.php\">West</a>";
}

 if ($row['mapdimensions']==00 and $row['map']=="cellar" and $row['xaxis']==3 and $row['yaxis']==2)
{
echo "<a href=\"northt.php\">North</a>
<br />
<a href=\"southt.php\">South</a><br /><a href=\"westt.php\">West</a>";
}

 if ($row['mapdimensions']==00 and $row['map']=="cellar" and $row['xaxis']==1 and $row['yaxis']==3)
{
echo "<a href=\"northt.php\">North</a>
<br />
<a href=\"southt.php\">South</a><br /><a href=\"eastt.php\">East</a>";
}

 if ($row['mapdimensions']==00 and $row['map']=="cellar" and $row['xaxis']==2 and $row['yaxis']==3)
{
echo "<a href=\"northt.php\">North</a>
<br />
<a href=\"southt.php\">South</a><br /><a href=\"eastt.php\">East</a><br /><a href=\"westt.php\">West</a>";
}

 if ($row['mapdimensions']==00 and $row['map']=="cellar" and $row['xaxis']==3 and $row['yaxis']==3)
{
echo "<a href=\"northt.php\">North</a>
<br />
<a href=\"southt.php\">South</a><br /><a href=\"westt.php\">West</a>";
}

 if ($row['mapdimensions']==00 and $row['map']=="cellar" and $row['xaxis']==1 and $row['yaxis']==4)
{
echo "<a href=\"southt.php\">South</a><br /><a href=\"eastt.php\">East</a>";
}
 if ($row['mapdimensions']==00 and $row['map']=="cellar" and $row['xaxis']==2 and $row['yaxis']==4)
{
echo "<a href=\"northt.php\">North</a>
<br />
<a href=\"southt.php\">South</a><br /><a href=\"eastt.php\">East</a><br /><a href=\"westt.php\">West</a>";
}

 if ($row['mapdimensions']==00 and $row['map']=="cellar" and $row['xaxis']==3 and $row['yaxis']==4)
{
echo "<a href=\"southt.php\">South</a><br /><a href=\"westt.php\">West</a>";
}

 if ($row['mapdimensions']==00 and $row['map']=="cellar" and $row['xaxis']==2 and $row['yaxis']==5)
{
if ($cellarspider==0)
{
echo "<a href=\"monsters/cellarspidert.php?".time()."\">North</a>";
echo "<br /><a href=\"southt.php\">South</a>";
}

else
{

echo "<a href=\"northt.php\">North</a>";
echo "<br /><a href=\"southt.php\">South</a>";

}
}

 if ($row['mapdimensions']==00 and $row['map']=="cellar" and $row['xaxis']==2 and $row['yaxis']==6)
{
echo "<a href=\"southt.php\">South</a>";
}

}
//*********************************************************************************************************************************************************************************************************************************
if ($row['map']=="cave")
{

if ($row['xaxis']==1 and $row['yaxis']==3)
  {
  
  $rand=mt_rand(1,100);
  
  if ($rand>70)
  {
  echo "<a href=\"monsters/goblint.php?".time();
  echo "\">East</a>";
  }
  else 
  {
  echo "<a href=\"eastt.php?".time();
  echo "\">East</a>";
  }
  
  	}

if ($row['xaxis']==2 and $row['yaxis']==3)
  {
  
  $rand=mt_rand(1,100);
  
  if ($rand>70)
  {
  echo "<a href=\"monsters/goblint.php?".time();
  echo "\">West</a>";
  echo "<a href=\"monsters/goblint.php?".time();
  echo "\">East</a>";
  }
  else 
  {
  echo "<a href=\"westt.php?".time();
  echo "\">West</a>";
  echo "<a href=\"eastt.php?".time();
  echo "\">East</a>";
  }
  
  	}

if ($row['xaxis']==3 and $row['yaxis']==3)
  {
  
  $rand=mt_rand(1,100);
  if ($rand>70)
  {
  echo "<a href=\"monsters/goblin.php?".time();
  echo "\">West</a><a href=\"monsters/goblin.php?".time();
  echo "\">East</a><a href=\"monsters/goblin.php?".time();
  echo "\">North</a><a href=\"monsters/goblin.php?".time();
  echo "\">South</a>";
  }
  
  else
  {
  echo "<a href=\"northt.php?".time();
  echo "\">North</a><a href=\"southt.php?".time();
  echo "\">South</a><a href=\"eastt.php?".time();
  echo "\">East</a><a href=\"westt.php?".time();
  echo "\">West</a>";
  }
  	}
	
if ($row['xaxis']==4 and $row['yaxis']==3)
  {
  
  $rand=mt_rand(1,100);
  
  if ($rand>70)
  {
  echo "<a href=\"monsters/goblin.php?".time();
  echo "\">West</a><a href=\"monsters/goblin.php?".time();
  echo "\">East</a>";
  }
  else 
  {
  echo "<a href=\"westt.php?".time();
  echo "\">West</a>";
  echo "<a href=\"eastt.php?".time();
  echo "\">East</a>";
  }
  
  	}
	
if ($row['xaxis']==5 and $row['yaxis']==3)
  {
  
  $rand=mt_rand(1,100);
  if ($rand>70)
  {
  echo "<a href=\"monsters/goblin.php?".time();
  echo "\">West</a><a href=\"monsters/goblin.php?".time();
  echo "\">East</a><a href=\"monsters/goblin.php?".time();
  echo "\">North</a><a href=\"monsters/goblin.php?".time();
  echo "\">South</a>";
  }
  
  else
  {
  echo "<a href=\"northt.php?".time();
  echo "\">North</a><a href=\"southt.php?".time();
  echo "\">South</a><a href=\"eastt.php?".time();
  echo "\">East</a><a href=\"westt.php?".time();
  echo "\">West</a>";
  }
  	}
	
if ($row['xaxis']==6 and $row['yaxis']==3)
   {
  
  $rand=mt_rand(1,100);
  
  if ($rand>70)
  {
  echo "<a href=\"monsters/goblin.php?".time();
  echo "\">West</a><a href=\"monsters/goblin.php?".time();
  echo "\">East</a>";
  }
  else 
  {
  echo "<a href=\"westt.php?".time();
  echo "\">West</a>";
  echo "<a href=\"eastt.php?".time();
  echo "\">East</a>";
  }
  
  	}
	
if ($row['xaxis']==7 and $row['yaxis']==3)
 {
  
  $rand=mt_rand(1,100);
  
  if ($rand>70)
  {
  echo "<a href=\"monsters/goblin.php?".time();
  echo "\">West</a><a href=\"monsters/goblin.php?".time();
  echo "\">East</a>";
  }
  else 
  {
  echo "<a href=\"westt.php?".time();
  echo "\">West</a>";
  echo "<a href=\"eastt.php?".time();
  echo "\">East</a>";
  }
  
  	}
	
if ($row['xaxis']==3 and $row['yaxis']==2)
  {
  
  $rand=mt_rand(1,100);
  if ($rand>70)
  {
  echo "<a href=\"monsters/goblin.php?".time();
  echo "\">North</a><a href=\"monsters/goblin.php?".time();
  echo "\">South</a>";
  }
  
  else
  {
  echo "<a href=\"northt.php?".time();
  echo "\">North</a><a href=\"southt.php?".time();
  echo "\">South</a>";
  }
  	}

if ($row['xaxis']==3 and $row['yaxis']==4)
  {
  
  $rand=mt_rand(1,100);
  if ($rand>70)
  {
  echo "<a href=\"monsters/goblin.php?".time();
  echo "\">North</a><a href=\"monsters/goblin.php?".time();
  echo "\">South</a>";
  }
  
  else
  {
  echo "<a href=\"northt.php?".time();
  echo "\">North</a><a href=\"southt.php?".time();
  echo "\">South</a>";
  }
  	}

if ($row['xaxis']==5 and $row['yaxis']==2)
{
  
  $rand=mt_rand(1,100);
  if ($rand>70)
  {
  echo "<a href=\"monsters/goblin.php?".time();
  echo "\">North</a><a href=\"monsters/goblin.php?".time();
  echo "\">South</a>";
  }
  
  else
  {
  echo "<a href=\"northt.php?".time();
  echo "\">North</a><a href=\"southt.php?".time();
  echo "\">South</a>";
  }
  	}
	

if ($row['xaxis']==5 and $row['yaxis']==4)
 {
  
  $rand=mt_rand(1,100);
  if ($rand>70)
  {
  echo "<a href=\"monsters/goblin.php?".time();
  echo "\">North</a><a href=\"monsters/goblin.php?".time();
  echo "\">South</a>";
  }
  
  else
  {
  echo "<a href=\"northt.php?".time();
  echo "\">North</a><a href=\"southt.php?".time();
  echo "\">South</a>";
  }
  	}
	
if ($row['xaxis']==5 and $row['yaxis']==5)
  {
  
  $rand=mt_rand(1,100);
  if ($rand>70)
  {
  echo "<a href=\"monsters/goblin.php?".time();
  echo "\">South</a>";
  }
  
  else
  {
  echo "<a href=\"southt.php?".time();
  echo "\">South</a>";
  }
  	}

if ($row['xaxis']==3 and $row['yaxis']==5)
  {
  
  $rand=mt_rand(1,100);
  if ($rand>70)
  {
  echo "<a href=\"monsters/goblin.php?".time();
  echo "\">South</a>";
  }
  
  else
  {
  echo "<a href=\"southt.php?".time();
  echo "\">South</a>";
  }
  	}
	
if ($row['xaxis']==5 and $row['yaxis']==1)
  {
  
  $rand=mt_rand(1,100);
  if ($rand>70)
  {
  echo "<a href=\"monsters/goblin.php?".time();
  echo "\">North</a>";
  }
  
  else
  {
  echo "<a href=\"northt.php?".time();
  echo "\">North</a>";
  }
  	}

	if ($row['xaxis']==3 and $row['yaxis']==1)
  {
  
  $rand=mt_rand(1,100);
  if ($rand>70)
  {
  echo "<a href=\"monsters/goblin.php?".time();
  echo "\">North</a>";
  }
  
  else
  {
  echo "<a href=\"northt.php?".time();
  echo "\">North</a>";
  }
  	}

}


//**********************************************************************************************************************************************************************************************************************************
}
//*****************************************

 if ($row['mapdimensions']==44)
  {
  
  if ($row['xaxis']==2 and $row['yaxis']==2)
{
echo "<a href=\"northt.php\">North</a>
<br />
<a href=\"southt.php\">South</a><br /><a href=\"eastt.php\">East</a><br /><a href=\"westt.php\">West</a>";
}

if ($row['xaxis']==2 and $row['yaxis']==3)
{
echo "<a href=\"northt.php\">North</a>
<br />
<a href=\"southt.php\">South</a><br /><a href=\"eastt.php\">East</a><br /><a href=\"westt.php\">West</a>";
}

if ($row['xaxis']==3 and $row['yaxis']==2)
{
echo "<a href=\"northt.php\">North</a>
<br />
<a href=\"southt.php\">South</a><br /><a href=\"eastt.php\">East</a><br /><a href=\"westt.php\">West</a>";
}

if ($row['xaxis']==3 and $row['yaxis']==3)
{
echo "<a href=\"northt.php\">North</a>
<br />
<a href=\"southt.php\">South</a><br /><a href=\"eastt.php\">East</a><br /><a href=\"westt.php\">West</a>";
}

  if ($row['xaxis']==1 and $row['yaxis']==1)
{
echo "<a href=\"northt.php\">North</a> <a href=\"eastt.php\">East</a>";
}

if ($row['xaxis']==2 and $row['yaxis']==1)
{
echo "<a href=\"northt.php\">North</a> <a href=\"eastt.php\">East</a> <a href=\"westt.php\">West</a>";
}

if ($row['xaxis']==3 and $row['yaxis']==1)
{
echo "<a href=\"northt.php\">North</a> <a href=\"eastt.php\">East</a> <a href=\"westt.php\">West</a>";
}

if ($row['xaxis']==4 and $row['yaxis']==1)
{
echo "<a href=\"northt.php\">North</a> <a href=\"westt.php\">West</a>";
}

if ($row['xaxis']==1 and $row['yaxis']==2)
{
echo "<a href=\"northt.php\">North</a> <a href=\"southt.php\">South</a> <a href=\"eastt.php\">East</a>";
}

if ($row['xaxis']==1 and $row['yaxis']==3)
{
echo "<a href=\"northt.php\">North</a> <a href=\"southt.php\">South</a> <a href=\"eastt.php\">East</a>";
}


if ($row['xaxis']==4 and $row['yaxis']==2)
{
echo "<a href=\"northt.php\">North</a> <a href=\"southt.php\">South</a> <a href=\"westt.php\">West</a>";
}

if ($row['xaxis']==4 and $row['yaxis']==3)
{
echo "<a href=\"northt.php\">North</a> <a href=\"southt.php\">South</a> <a href=\"westt.php\">West</a>";
}




if ($row['xaxis']==1 and $row['yaxis']==4)
{
echo "<a href=\"southt.php\">South</a> <a href=\"eastt.php\">East</a>";
}

if ($row['xaxis']==2 and $row['yaxis']==4)
{
echo "<a href=\"southt.php\">South</a> <a href=\"eastt.php\">East</a> <a href=\"westt.php\">West</a>";
}

if ($row['xaxis']==3 and $row['yaxis']==4)
{
echo "<a href=\"southt.php\">South</a> <a href=\"eastt.php\">East</a> <a href=\"westt.php\">West</a>";
}


if ($row['xaxis']==4 and $row['yaxis']==4)
{
echo "<a href=\"southt.php\">South</a> <a href=\"westt.php\">West</a>";
}


}


}
?>