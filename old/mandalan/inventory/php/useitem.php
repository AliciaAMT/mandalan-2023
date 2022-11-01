<?php

$type=strip_tags($_POST["type"]);

echo "<table class=\"page\">";

if (!$type)

{

$query=sprintf("select * from inventory where username='%s' and keep>0 and singleuse=1 order by itemtype desc;",mysql_real_escape_string($username));

$result=mysql_query($query);

while($row = mysql_fetch_array($result))

{

echo "<tr><td class=\"border\">

<img src=\"../images/".$row['itemimage'].".png\" /><br />".$row['itemname']."<br />Level ".$row['itemlevel']."<br />".$row['itemrarity'];



if ($row['keep']>1)

{

echo "<br />Amount: ".$row['keep'];

}



//display enchantable, transmutable, or adjustable





if ($row['transmute1']>0)

{

echo "<br />Transmutable";

}

if ($row['adjustable']>0)

{

echo "<br />Adjustable";

}

  

echo "</td><td class=\"border\">





<table class=\"page\"><tr><td class=\"left\"><h3>Description:</h3></td><td class=\"left\">".$row['itemdescription'];

echo "</td></tr><tr><td class=\"left\"><h3>Item Type:</h3></td><td class=\"left\">".$row['itemtype']."</td></tr>";



if ($row['itemtype']=="Armor")

{

echo "<tr><td class=\"left\"><h3>Armor Type:</h3></td><td class=\"left\">".$row['armortype']."</td></tr>";
$defense=$row['armorbase']+$row['itemlevel'];
echo "<tr><td class=\"left\"><h3>Armor Rating:</h3></td><td class=\"left\">".$defense."</td></tr>";

}



if ($row['itemtype']=="Other")

{

echo "<tr><td class=\"left\"><h3>Other Type:</h3></td><td class=\"left\">".$row['othertype']."</td></tr>";

}



if ($row['itemtype']=="Weapon")

{

echo "<tr><td class=\"left\">Weapon Type:</td><td class=\"left\">".$row['weapontype']."</td></tr>";

echo "<tr><td class=\"left\">Range:</td><td class=\"left\">".$row['itemrange']."</td></tr>";

echo "<tr><td class=\"left\">Speed:</td><td class=\"left\">".$row['itemspeed']."</td></tr>";

echo "<tr><td class=\"left\">Dualwield:</td><td class=\"left\">";

	if ($row['duality']==0)

	{ echo "No</td></tr>";}

	if ($row['duality']>0)

	{ echo "Yes</td></tr>";}

$damage=$row['weaponbase']+$row['itemlevel'];

echo "<tr><td class=\"left\">Damage:</td><td class=\"left\">".$damage."</td></tr>";

}

	if ($row['criticalhit']>0)

	{

	echo "<tr><td class=\"left\"><h3>Critical Hit:</h3></td><td class=\"left\">%".$row['criticalhit']."</td></tr>";

	}


if ($row['defense']>0)
{
echo "<tr><td class=\"left\">Defense:</td><td class=\"left\">+".$row['defense']."</td></tr>";
}


if ($row['life']>0)
{
echo "<tr><td class=\"left\">Life:</td><td class=\"left\">+".$row['life']."</td></tr>";
}




if ($row['itemvalue']>0)

{

echo "<tr><td class=\"left\"><h3>Value:</h3></td><td class=\"left\">".$row['itemvalue']." Gold</td></tr>";

}





if ($row['enhancement1']!="None")

{

echo "<tr><td class=\"left\"><h3>Bonus 1: </h3></td><td class=\"left\">".$row['enhancement1']."</td></tr>";

}
if ($row['enhancement2']!="None")

{

echo "<tr><td class=\"left\"><h3>Bonus 2: </h3></td><td class=\"left\">".$row['enhancement2']."</td></tr>";

}

if ($row['enhancement3']!="None")

{

echo "<tr><td class=\"left\"><h3>Bonus 3: </h3></td><td class=\"left\">".$row['enhancement3']."</td></tr>";

}

echo "</table>";



if ($row['readable']>0)

  {

  echo "<table class=\"page\"><tr><td class=\"page\">";

  echo "<form name=\"read\" action=\"read.php?".time();

  echo "\" method=\"get\"><input class=\"invisible\" type=\"radio\" name=\"read\" checked=\"checked\" value=\"".$row['itemname'];

  echo "\"><br /><input type=\"submit\" value=\"Read\" class=\"small\"></form></td></tr></table>";

  }
  
  
  if ($row['keylock']>0)

  {

  echo "<table class=\"page\"><tr><td class=\"page\">";

  echo "<form name=\"read\" action=\"keylock.php?".time();

  echo "\" method=\"get\"><input class=\"invisible\" type=\"radio\" name=\"keylock\" checked=\"checked\" value=\"".$row['itemname'];

  echo "\"><br /><input type=\"submit\" value=\"Unlock\" class=\"small\"></form></td></tr></table>";

  }

if ($row['keylock']==0 and $row['othertype']=="Container" and $row['itemname']!="Tinderbox")

  {

  echo "<table class=\"page\"><tr><td class=\"page\">";

  echo "<form name=\"read\" action=\"open.php?".time();

  echo "\" method=\"get\"><input class=\"invisible\" type=\"radio\" name=\"keylock\" checked=\"checked\" value=\"".$row['itemname'];

  echo "\"><br /><input type=\"submit\" value=\"Open\" class=\"small\"></form></td></tr></table>";

  }

//*******************************
  echo "<table class=\"page\"><tr><td class=\"page\">";

  echo "<form name=\"use\" action=\"../monsters/use.php?".time();

  echo "\" method=\"get\"><input class=\"invisible\" type=\"radio\" name=\"food\" checked=\"checked\" value=\"".$row['itemname'];

  echo "\"><br /><input type=\"submit\" value=\"Use\" class=\"small\"></form></td></tr></table>";

//************************
    

if ($row['duality']>0)

{

echo "<table class=\"page\"><tr><td class=\"page\">";

echo "<form name=\"equiplh\" action=\"keep.php?".time();

  echo "\" method=\"get\"><input class=\"invisible\" type=\"radio\" name=\"equiplh\" checked=\"checked\" value=\"".$row['itemnumber'];

  echo "\"><br /><input type=\"submit\" value=\"Equip Left\" class=\"small\"></form></td><td class=\"page\"><form name=\"equiprh\" action=\"keep.php?".time();

  echo "\" method=\"get\"><input class=\"invisible\" type=\"radio\" name=\"equiprh\" checked=\"checked\" value=\"".$row['itemnumber'];

  echo "\"><br /><input type=\"submit\" value=\"Equip Right\" class=\"small\"></form></td></tr><tr><td class=\"page\" colspan=\"2\"><form name=\"trade\" action=\"keep.php?".time();

  echo "\" method=\"get\"><input class=\"invisible\" type=\"radio\" name=\"trade\" checked=\"checked\" value=\"".$row['itemnumber'];

  echo "\"><br /><input type=\"submit\" value=\"Trade\" class=\"small\"></form></td></tr></table>";

  }

  //add flag equipable and criticalhit

if ($row['duality']==0 and $row['equipable']==1)

  {

  echo "<table class=\"page\"><tr><td class=\"page\">";

  echo "<form name=\"equip\" action=\"keep.php?".time();

  echo "\" method=\"get\"><input class=\"invisible\" type=\"radio\" name=\"equip\" checked=\"checked\" value=\"".$row['itemnumber'];

  echo "\"><br /><input type=\"submit\" value=\"Equip\" class=\"small\"></form></td></tr><tr><td class=\"page\"><form name=\"trade\" action=\"keep.php?".time();

  echo "\" method=\"get\"><input class=\"invisible\" type=\"radio\" name=\"trade\" checked=\"checked\" value=\"".$row['itemnumber'];

  echo "\"><br /><input type=\"submit\" value=\"Trade\" class=\"small\"></form>";

  echo "</td></tr></table>";

  }

  echo "</td></tr>";

}

echo "</table>";

}

if ($type=="All")

{

$query=sprintf("select * from inventory where username='%s' and keep>0 and singleuse=1 order by itemtype desc;",mysql_real_escape_string($username));

$result=mysql_query($query);

while($row = mysql_fetch_array($result))

{

echo "<tr><td class=\"border\">

<img src=\"../images/".$row['itemimage'].".png\" /><br />".$row['itemname']."<br />Level ".$row['itemlevel']."<br />".$row['itemrarity'];



if ($row['keep']>1)

{

echo "<br />Amount: ".$row['keep'];

}



//display enchantable, transmutable, or adjustable

if ($row['enchantment1']>0)

{

echo "<br />Enchantable";

}



if ($row['transmute1']>0)

{

echo "<br />Transmutable";

}

if ($row['adjustable']>0)

{

echo "<br />Adjustable";

}

  

echo "</td><td class=\"border\">





<table class=\"page\"><tr><td class=\"left\"><h3>Description:</h3></td><td class=\"left\">".$row['itemdescription'];

echo "</td></tr><tr><td class=\"left\"><h3>Item Type:</h3></td><td class=\"left\">".$row['itemtype']."</td></tr>";



if ($row['itemtype']=="Armor")

{

echo "<tr><td class=\"left\"><h3>Armor Type:</h3></td><td class=\"left\">".$row['armortype']."</td></tr>";
$defense=$row['armorbase']+$row['itemlevel'];
echo "<tr><td class=\"left\"><h3>Armor Rating:</h3></td><td class=\"left\">".$defense."</td></tr>";

}



if ($row['itemtype']=="Other")

{

echo "<tr><td class=\"left\"><h3>Other Type:</h3></td><td class=\"left\">".$row['othertype']."</td></tr>";

}



if ($row['itemtype']=="Weapon")

{

echo "<tr><td class=\"left\">Weapon Type:</td><td class=\"left\">".$row['weapontype']."</td></tr>";

echo "<tr><td class=\"left\">Range:</td><td class=\"left\">".$row['itemrange']."</td></tr>";

echo "<tr><td class=\"left\">Speed:</td><td class=\"left\">".$row['itemspeed']."</td></tr>";

echo "<tr><td class=\"left\">Dualwield:</td><td class=\"left\">";

	if ($row['duality']==0)

	{ echo "No</td></tr>";}

	if ($row['duality']>0)

	{ echo "Yes</td></tr>";}

$damage=$row['weaponbase']+$row['itemlevel'];

echo "<tr><td class=\"left\">Damage:</td><td class=\"left\">".$damage."</td></tr>";

}

	if ($row['criticalhit']>0)

	{

	echo "<tr><td class=\"left\"><h3>Critical Hit:</h3></td><td class=\"left\">%".$row['criticalhit']."</td></tr>";

	}


if ($row['defense']>0)
{
echo "<tr><td class=\"left\">Defense:</td><td class=\"left\">+".$row['defense']."</td></tr>";
}


if ($row['life']>0)
{
echo "<tr><td class=\"left\">Life:</td><td class=\"left\">+".$row['life']."</td></tr>";
}




if ($row['itemvalue']>0)

{

echo "<tr><td class=\"left\"><h3>Value:</h3></td><td class=\"left\">".$row['itemvalue']." Gold</td></tr>";

}



echo "</table>";



if ($row['readable']>0)

  {

  echo "<table class=\"page\"><tr><td class=\"page\">";

  echo "<form name=\"read\" action=\"read.php?".time();

  echo "\" method=\"get\"><input class=\"invisible\" type=\"radio\" name=\"read\" checked=\"checked\" value=\"".$row['itemname'];

  echo "\"><br /><input type=\"submit\" value=\"Read\" class=\"small\"></form></td></tr></table>";

  }
  
  
  if ($row['keylock']>0)

  {

  echo "<table class=\"page\"><tr><td class=\"page\">";

  echo "<form name=\"read\" action=\"keylock.php?".time();

  echo "\" method=\"get\"><input class=\"invisible\" type=\"radio\" name=\"keylock\" checked=\"checked\" value=\"".$row['itemname'];

  echo "\"><br /><input type=\"submit\" value=\"Unlock\" class=\"small\"></form></td></tr></table>";

  }

if ($row['keylock']==0 and $row['othertype']=="Container" and $row['itemname']!="Tinderbox")

  {

  echo "<table class=\"page\"><tr><td class=\"page\">";

  echo "<form name=\"read\" action=\"open.php?".time();

  echo "\" method=\"get\"><input class=\"invisible\" type=\"radio\" name=\"keylock\" checked=\"checked\" value=\"".$row['itemname'];

  echo "\"><br /><input type=\"submit\" value=\"Open\" class=\"small\"></form></td></tr></table>";

  }


    

if ($row['duality']>0)

{

echo "<table class=\"page\"><tr><td class=\"page\">";

echo "<form name=\"equiplh\" action=\"keep.php?".time();

  echo "\" method=\"get\"><input class=\"invisible\" type=\"radio\" name=\"equiplh\" checked=\"checked\" value=\"".$row['itemnumber'];

  echo "\"><br /><input type=\"submit\" value=\"Equip Left\" class=\"small\"></form></td><td class=\"page\"><form name=\"equiprh\" action=\"keep.php?".time();

  echo "\" method=\"get\"><input class=\"invisible\" type=\"radio\" name=\"equiprh\" checked=\"checked\" value=\"".$row['itemnumber'];

  echo "\"><br /><input type=\"submit\" value=\"Equip Right\" class=\"small\"></form></td></tr><tr><td class=\"page\" colspan=\"2\"><form name=\"trade\" action=\"keep.php?".time();

  echo "\" method=\"get\"><input class=\"invisible\" type=\"radio\" name=\"trade\" checked=\"checked\" value=\"".$row['itemnumber'];

  echo "\"><br /><input type=\"submit\" value=\"Trade\" class=\"small\"></form></td></tr></table>";

  }

  //add flag equipable and criticalhit

if ($row['duality']==0 and $row['equipable']==1)

  {

  echo "<table class=\"page\"><tr><td class=\"page\">";

  echo "<form name=\"equip\" action=\"keep.php?".time();

  echo "\" method=\"get\"><input class=\"invisible\" type=\"radio\" name=\"equip\" checked=\"checked\" value=\"".$row['itemnumber'];

  echo "\"><br /><input type=\"submit\" value=\"Equip\" class=\"small\"></form></td></tr><tr><td class=\"page\"><form name=\"trade\" action=\"keep.php?".time();

  echo "\" method=\"get\"><input class=\"invisible\" type=\"radio\" name=\"trade\" checked=\"checked\" value=\"".$row['itemnumber'];

  echo "\"><br /><input type=\"submit\" value=\"Trade\" class=\"small\"></form>";

  echo "</td></tr></table>";

  }

  echo "</td></tr>";

}

echo "</table>";

}

//#####################################################################################

if ($type=="Food")

{

$query=sprintf("select * from inventory where username='%s' and keep>0 and singleuse=1 and itemtype='Food' order by itemlevel desc;",mysql_real_escape_string($username));

$result=mysql_query($query);

while($row = mysql_fetch_array($result))

{

echo "<tr><td class=\"border\">

<img src=\"../images/".$row['itemimage'].".png\" /><br />".$row['itemname']."<br />Level ".$row['itemlevel']."<br />".$row['itemrarity'];



if ($row['keep']>1)

{

echo "<br />Amount: ".$row['keep'];

}



//display enchantable, transmutable, or adjustable

if ($row['enchantment1']>0)

{

echo "<br />Enchantable";

}



if ($row['transmute1']>0)

{

echo "<br />Transmutable";

}

if ($row['adjustable']>0)

{

echo "<br />Adjustable";

}

  

echo "</td><td class=\"border\">





<table class=\"page\"><tr><td class=\"left\"><h3>Description:</h3></td><td class=\"left\">".$row['itemdescription'];

echo "</td></tr><tr><td class=\"left\"><h3>Item Type:</h3></td><td class=\"left\">".$row['itemtype']."</td></tr>";



if ($row['itemtype']=="Armor")

{

echo "<tr><td class=\"left\"><h3>Armor Type:</h3></td><td class=\"left\">".$row['armortype']."</td></tr>";
$defense=$row['armorbase']+$row['itemlevel'];
echo "<tr><td class=\"left\"><h3>Armor Rating:</h3></td><td class=\"left\">".$defense."</td></tr>";

}



if ($row['itemtype']=="Other")

{

echo "<tr><td class=\"left\"><h3>Other Type:</h3></td><td class=\"left\">".$row['othertype']."</td></tr>";

}



if ($row['itemtype']=="Weapon")

{

echo "<tr><td class=\"left\">Weapon Type:</td><td class=\"left\">".$row['weapontype']."</td></tr>";

echo "<tr><td class=\"left\">Range:</td><td class=\"left\">".$row['itemrange']."</td></tr>";

echo "<tr><td class=\"left\">Speed:</td><td class=\"left\">".$row['itemspeed']."</td></tr>";

echo "<tr><td class=\"left\">Dualwield:</td><td class=\"left\">";

	if ($row['duality']==0)

	{ echo "No</td></tr>";}

	if ($row['duality']>0)

	{ echo "Yes</td></tr>";}

$damage=$row['weaponbase']+$row['itemlevel'];

echo "<tr><td class=\"left\">Damage:</td><td class=\"left\">".$damage."</td></tr>";

}

	if ($row['criticalhit']>0)

	{

	echo "<tr><td class=\"left\"><h3>Critical Hit:</h3></td><td class=\"left\">%".$row['criticalhit']."</td></tr>";

	}


if ($row['defense']>0)
{
echo "<tr><td class=\"left\">Defense:</td><td class=\"left\">+".$row['defense']."</td></tr>";
}


if ($row['life']>0)
{
echo "<tr><td class=\"left\">Life:</td><td class=\"left\">+".$row['life']."</td></tr>";
}




if ($row['itemvalue']>0)

{

echo "<tr><td class=\"left\"><h3>Value:</h3></td><td class=\"left\">".$row['itemvalue']." Gold</td></tr>";

}



echo "</table>";



if ($row['readable']>0)

  {

  echo "<table class=\"page\"><tr><td class=\"page\">";

  echo "<form name=\"read\" action=\"read.php?".time();

  echo "\" method=\"get\"><input class=\"invisible\" type=\"radio\" name=\"read\" checked=\"checked\" value=\"".$row['itemname'];

  echo "\"><br /><input type=\"submit\" value=\"Read\" class=\"small\"></form></td></tr></table>";

  }
  
  
  if ($row['keylock']>0)

  {

  echo "<table class=\"page\"><tr><td class=\"page\">";

  echo "<form name=\"read\" action=\"keylock.php?".time();

  echo "\" method=\"get\"><input class=\"invisible\" type=\"radio\" name=\"keylock\" checked=\"checked\" value=\"".$row['itemname'];

  echo "\"><br /><input type=\"submit\" value=\"Unlock\" class=\"small\"></form></td></tr></table>";

  }

if ($row['keylock']==0 and $row['othertype']=="Container" and $row['itemname']!="Tinderbox")

  {

  echo "<table class=\"page\"><tr><td class=\"page\">";

  echo "<form name=\"read\" action=\"open.php?".time();

  echo "\" method=\"get\"><input class=\"invisible\" type=\"radio\" name=\"keylock\" checked=\"checked\" value=\"".$row['itemname'];

  echo "\"><br /><input type=\"submit\" value=\"Open\" class=\"small\"></form></td></tr></table>";

  }


    

if ($row['duality']>0)

{

echo "<table class=\"page\"><tr><td class=\"page\">";

echo "<form name=\"equiplh\" action=\"keep.php?".time();

  echo "\" method=\"get\"><input class=\"invisible\" type=\"radio\" name=\"equiplh\" checked=\"checked\" value=\"".$row['itemnumber'];

  echo "\"><br /><input type=\"submit\" value=\"Equip Left\" class=\"small\"></form></td><td class=\"page\"><form name=\"equiprh\" action=\"keep.php?".time();

  echo "\" method=\"get\"><input class=\"invisible\" type=\"radio\" name=\"equiprh\" checked=\"checked\" value=\"".$row['itemnumber'];

  echo "\"><br /><input type=\"submit\" value=\"Equip Right\" class=\"small\"></form></td></tr><tr><td class=\"page\" colspan=\"2\"><form name=\"trade\" action=\"keep.php?".time();

  echo "\" method=\"get\"><input class=\"invisible\" type=\"radio\" name=\"trade\" checked=\"checked\" value=\"".$row['itemnumber'];

  echo "\"><br /><input type=\"submit\" value=\"Trade\" class=\"small\"></form></td></tr></table>";

  }

  //add flag equipable and criticalhit

if ($row['duality']==0 and $row['equipable']==1)

  {

  echo "<table class=\"page\"><tr><td class=\"page\">";

  echo "<form name=\"equip\" action=\"keep.php?".time();

  echo "\" method=\"get\"><input class=\"invisible\" type=\"radio\" name=\"equip\" checked=\"checked\" value=\"".$row['itemnumber'];

  echo "\"><br /><input type=\"submit\" value=\"Equip\" class=\"small\"></form></td></tr><tr><td class=\"page\"><form name=\"trade\" action=\"keep.php?".time();

  echo "\" method=\"get\"><input class=\"invisible\" type=\"radio\" name=\"trade\" checked=\"checked\" value=\"".$row['itemnumber'];

  echo "\"><br /><input type=\"submit\" value=\"Trade\" class=\"small\"></form>";

  echo "</td></tr></table>";

  }

  echo "</td></tr>";

}

echo "</table>";

}

//#####################################################################################

if ($type=="Potion")

{

$query=sprintf("select * from inventory where username='%s' and keep>0 and singleuse=1 and itemtype='Potion' order by itemlevel desc;",mysql_real_escape_string($username));

$result=mysql_query($query);

while($row = mysql_fetch_array($result))

{

echo "<tr><td class=\"border\">

<img src=\"../images/".$row['itemimage'].".png\" /><br />".$row['itemname']."<br />Level ".$row['itemlevel']."<br />".$row['itemrarity'];



if ($row['keep']>1)

{

echo "<br />Amount: ".$row['keep'];

}



//display enchantable, transmutable, or adjustable

if ($row['enchantment1']>0)

{

echo "<br />Enchantable";

}



if ($row['transmute1']>0)

{

echo "<br />Transmutable";

}

if ($row['adjustable']>0)

{

echo "<br />Adjustable";

}

  

echo "</td><td class=\"border\">





<table class=\"page\"><tr><td class=\"left\"><h3>Description:</h3></td><td class=\"left\">".$row['itemdescription'];

echo "</td></tr><tr><td class=\"left\"><h3>Item Type:</h3></td><td class=\"left\">".$row['itemtype']."</td></tr>";



if ($row['itemtype']=="Armor")

{

echo "<tr><td class=\"left\"><h3>Armor Type:</h3></td><td class=\"left\">".$row['armortype']."</td></tr>";
$defense=$row['armorbase']+$row['itemlevel'];
echo "<tr><td class=\"left\"><h3>Armor Rating:</h3></td><td class=\"left\">".$defense."</td></tr>";

}



if ($row['itemtype']=="Other")

{

echo "<tr><td class=\"left\"><h3>Other Type:</h3></td><td class=\"left\">".$row['othertype']."</td></tr>";

}



if ($row['itemtype']=="Weapon")

{

echo "<tr><td class=\"left\">Weapon Type:</td><td class=\"left\">".$row['weapontype']."</td></tr>";

echo "<tr><td class=\"left\">Range:</td><td class=\"left\">".$row['itemrange']."</td></tr>";

echo "<tr><td class=\"left\">Speed:</td><td class=\"left\">".$row['itemspeed']."</td></tr>";

echo "<tr><td class=\"left\">Dualwield:</td><td class=\"left\">";

	if ($row['duality']==0)

	{ echo "No</td></tr>";}

	if ($row['duality']>0)

	{ echo "Yes</td></tr>";}

$damage=$row['weaponbase']+$row['itemlevel'];

echo "<tr><td class=\"left\">Damage:</td><td class=\"left\">".$damage."</td></tr>";

}

	if ($row['criticalhit']>0)

	{

	echo "<tr><td class=\"left\"><h3>Critical Hit:</h3></td><td class=\"left\">%".$row['criticalhit']."</td></tr>";

	}


if ($row['defense']>0)
{
echo "<tr><td class=\"left\">Defense:</td><td class=\"left\">+".$row['defense']."</td></tr>";
}


if ($row['life']>0)
{
echo "<tr><td class=\"left\">Life:</td><td class=\"left\">+".$row['life']."</td></tr>";
}




if ($row['itemvalue']>0)

{

echo "<tr><td class=\"left\"><h3>Value:</h3></td><td class=\"left\">".$row['itemvalue']." Gold</td></tr>";

}



echo "</table>";



if ($row['readable']>0)

  {

  echo "<table class=\"page\"><tr><td class=\"page\">";

  echo "<form name=\"read\" action=\"read.php?".time();

  echo "\" method=\"get\"><input class=\"invisible\" type=\"radio\" name=\"read\" checked=\"checked\" value=\"".$row['itemname'];

  echo "\"><br /><input type=\"submit\" value=\"Read\" class=\"small\"></form></td></tr></table>";

  }
  
  
  if ($row['keylock']>0)

  {

  echo "<table class=\"page\"><tr><td class=\"page\">";

  echo "<form name=\"read\" action=\"keylock.php?".time();

  echo "\" method=\"get\"><input class=\"invisible\" type=\"radio\" name=\"keylock\" checked=\"checked\" value=\"".$row['itemname'];

  echo "\"><br /><input type=\"submit\" value=\"Unlock\" class=\"small\"></form></td></tr></table>";

  }

if ($row['keylock']==0 and $row['othertype']=="Container" and $row['itemname']!="Tinderbox")

  {

  echo "<table class=\"page\"><tr><td class=\"page\">";

  echo "<form name=\"read\" action=\"open.php?".time();

  echo "\" method=\"get\"><input class=\"invisible\" type=\"radio\" name=\"keylock\" checked=\"checked\" value=\"".$row['itemname'];

  echo "\"><br /><input type=\"submit\" value=\"Open\" class=\"small\"></form></td></tr></table>";

  }


    

if ($row['duality']>0)

{

echo "<table class=\"page\"><tr><td class=\"page\">";

echo "<form name=\"equiplh\" action=\"keep.php?".time();

  echo "\" method=\"get\"><input class=\"invisible\" type=\"radio\" name=\"equiplh\" checked=\"checked\" value=\"".$row['itemnumber'];

  echo "\"><br /><input type=\"submit\" value=\"Equip Left\" class=\"small\"></form></td><td class=\"page\"><form name=\"equiprh\" action=\"keep.php?".time();

  echo "\" method=\"get\"><input class=\"invisible\" type=\"radio\" name=\"equiprh\" checked=\"checked\" value=\"".$row['itemnumber'];

  echo "\"><br /><input type=\"submit\" value=\"Equip Right\" class=\"small\"></form></td></tr><tr><td class=\"page\" colspan=\"2\"><form name=\"trade\" action=\"keep.php?".time();

  echo "\" method=\"get\"><input class=\"invisible\" type=\"radio\" name=\"trade\" checked=\"checked\" value=\"".$row['itemnumber'];

  echo "\"><br /><input type=\"submit\" value=\"Trade\" class=\"small\"></form></td></tr></table>";

  }

  //add flag equipable and criticalhit

if ($row['duality']==0 and $row['equipable']==1)

  {

  echo "<table class=\"page\"><tr><td class=\"page\">";

  echo "<form name=\"equip\" action=\"keep.php?".time();

  echo "\" method=\"get\"><input class=\"invisible\" type=\"radio\" name=\"equip\" checked=\"checked\" value=\"".$row['itemnumber'];

  echo "\"><br /><input type=\"submit\" value=\"Equip\" class=\"small\"></form></td></tr><tr><td class=\"page\"><form name=\"trade\" action=\"keep.php?".time();

  echo "\" method=\"get\"><input class=\"invisible\" type=\"radio\" name=\"trade\" checked=\"checked\" value=\"".$row['itemnumber'];

  echo "\"><br /><input type=\"submit\" value=\"Trade\" class=\"small\"></form>";

  echo "</td></tr></table>";

  }

  echo "</td></tr>";

}

echo "</table>";

}




?>