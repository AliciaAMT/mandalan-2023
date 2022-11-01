<?php

$keep=strip_tags($_GET["keep"]);

include ('php/keepitem.php');

$type=strip_tags($_POST["type"]);

echo "<table class=\"page\">";

if (!$type)

{

$query=sprintf("select * from inventory where username='%s' and trade>0 order by itemtype desc, weapontype, itemlevel desc, itemrarity desc;",mysql_real_escape_string($username));

$result=mysql_query($query);

while($row = mysql_fetch_array($result))

{

echo "<tr><td class=\"border\"><h2>".$row['itemname']."</h2>Level ".$row['itemlevel']." ".$row['itemrarity'];



if ($row['trade']>1)

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


<table class=\"page\"><tr><td class=\"left\">Description:</td><td class=\"left\">".$row['itemdescription'];

echo "</td></tr><tr><td class=\"left\">Item Type:</td><td class=\"left\">".$row['itemtype']."</td></tr>";



if ($row['itemtype']=="Armor")

{

echo "<tr><td class=\"left\"><h3>Armor Type:</h3></td><td class=\"left\">".$row['armortype']."</td></tr>";
$defense=$row['armorbase']+$row['itemlevel'];
echo "<tr><td class=\"left\"><h3>Armor Rating:</h3></td><td class=\"left\">".$defense."</td></tr>";

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

	echo "<tr><td class=\"left\">Critical Hit:</td><td class=\"left\">%".$row['criticalhit']."</td></tr>";

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

echo "<tr><td class=\"left\">Value:</td><td class=\"left\">".$row['itemvalue']." Gold</td></tr>";

}



echo "</table>";


echo "<table class=\"page\"><tr><td class=\"page\">";

  echo "<form name=\"keep\" action=\"tradet.php?".time();

  echo "\" method=\"get\"><input class=\"invisible\" type=\"radio\" name=\"keep\" checked=\"checked\" value=\"".$row['itemnumber'];

  echo "\"><br /><input type=\"submit\" value=\"Keep\" class=\"small\"></form></td></tr></table>";

  echo "</td></tr>";

}

echo "</table>";

}

else

{



$query=sprintf("select * from inventory where username='%s' and trade>0 and itemtype='%s' order by itemtype, weapontype, itemlevel desc, itemrarity;",mysql_real_escape_string($username),

mysql_real_escape_string($type));

$result=mysql_query($query);

while($row = mysql_fetch_array($result))

{

echo "<tr><td class=\"border\"><h2>".$row['itemname']."</h2>Level ".$row['itemlevel']." ".$row['itemrarity'];



if ($row['trade']>1)

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


<table class=\"page\"><tr><td class=\"left\">Description:</td><td class=\"left\">".$row['itemdescription'];

echo "</td></tr><tr><td class=\"left\">Item Type:</td><td class=\"left\">".$row['itemtype']."</td></tr>";


if ($row['itemtype']=="Armor")

{

echo "<tr><td class=\"left\"><h3>Armor Type:</h3></td><td class=\"left\">".$row['armortype']."</td></tr>";
$defense=$row['armorbase']+$row['itemlevel'];
echo "<tr><td class=\"left\"><h3>Armor Rating:</h3></td><td class=\"left\">".$defense."</td></tr>";

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

	echo "<tr><td class=\"left\">Critical Hit:</td><td class=\"left\">%".$row['criticalhit']."</td></tr>";

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

echo "<tr><td class=\"left\">Value:</td><td class=\"left\">".$row['itemvalue']." Gold</td></tr>";

}



echo "</table>";


echo "<table class=\"page\"><tr><td class=\"page\">";

  echo "<form name=\"keep\" action=\"tradet.php?".time();

  echo "\" method=\"get\"><input class=\"invisible\" type=\"radio\" name=\"keep\" checked=\"checked\" value=\"".$row['itemnumber'];

  echo "\"><br /><input type=\"submit\" value=\"Keep\" class=\"small\"></form></td></tr></table>";

  echo "</td></tr>";

}

echo "</table>";

}

?>