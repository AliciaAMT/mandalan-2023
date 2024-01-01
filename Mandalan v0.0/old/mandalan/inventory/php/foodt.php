<?php



$type=strip_tags($_POST["type"]);

echo "<table class=\"page\">";



if (!$type)

{

$query = sprintf("select * from inventory where username='%s' and keep>0 and itemtype='Food';",mysql_real_escape_string($username));

$result=mysql_query($query);



while($row = mysql_fetch_array($result))

{

echo "<tr><td class=\"border\"><h2>".$row['itemname']."</h2>Level ".$row['itemlevel']." ".$row['itemrarity'];



if ($row['keep']>1)

{

echo "<br />Amount: ".$row['keep'];

}



echo "</td><td class=\"border\">



<table class=\"page\"><tr><td class=\"left\">Description:</td><td class=\"left\">".$row['itemdescription'];

echo "</td></tr><tr><td class=\"left\">Item Type:</td><td class=\"left\">".$row['itemtype']."</td></tr>";

if ($row['enhancement1']!="None")
{
echo "<tr><td class=\"left\">Enhancement:</td><td class=\"left\">".$row['enhancement1']."</td></tr>";
}

if ($row['enhancement2']!="None")
{
echo "<tr><td class=\"left\">Enhancement:</td><td class=\"left\">".$row['enhancement2']."</td></tr>";
}


if ($row['itemvalue']>0)

{

echo "<tr><td class=\"left\">Value:</td><td class=\"left\">".$row['itemvalue']." Gold</td></tr>";

}

if ($row['maxwater']>0)

{

echo "<tr><td class=\"left\">Life: +10</td><td class=\"left\">Mana: +10</td></tr>";

echo "<tr><td class=\"left\">Water Units:</td><td class=\"left\">".$row['waterunits']."/".$row['maxwater']."</td></tr>";

}

if ($row['waterunits']>0)

{

echo "<tr><td class=\"center\" colspan=\"2\"><table class=\"page\"><tr><td class=\"page\"><form name=\"drink\" action=\"drinkt.php?".time();

  echo "\" method=\"get\"><input class=\"invisible\" type=\"radio\" name=\"drink\" checked=\"checked\" value=\"".$row['itemnumber'];

  echo "\"><br /><input type=\"submit\" value=\"Drink Water\" class=\"small\"></form></td></tr></table></td></tr>";

}



echo "</table>";



echo "</td></tr>";

}

echo "</table>";

}



else

{



$query = sprintf("select * from inventory where username='%s' and keep>0 and itemtype='Food' and othertype='%s';",mysql_real_escape_string($username), mysql_real_escape_string($type));

$result=mysql_query($query);



while($row = mysql_fetch_array($result))

{

echo "<tr><td class=\"border\"><h2>".$row['itemname']."</h2>Level ".$row['itemlevel']." ".$row['itemrarity'];



if ($row['keep']>1)

{

echo "<br />Amount: ".$row['keep'];

}



echo "</td><td class=\"border\">



<table class=\"page\"><tr><td class=\"left\">Description:</td><td class=\"left\">".$row['itemdescription'];

echo "</td></tr><tr><td class=\"left\">Item Type:</td><td class=\"left\">".$row['itemtype']."</td></tr>";

if ($row['enhancement1']!="None")
{
echo "<tr><td class=\"left\">Enhancement:</td><td class=\"left\">".$row['enhancement1']."</td></tr>";
}

if ($row['enhancement2']!="None")
{
echo "<tr><td class=\"left\">Enhancement:</td><td class=\"left\">".$row['enhancement2']."</td></tr>";
}


if ($row['itemvalue']>0)

{

echo "<tr><td class=\"left\">Value:</td><td class=\"left\">".$row['itemvalue']." Gold</td></tr>";

}

if ($row['maxwater']>0)

{

echo "<tr><td class=\"left\">Life: +5</td><td class=\"left\">Mana: +5</td></tr>";

echo "<tr><td class=\"left\">Water Units:</td><td class=\"left\">".$row['waterunits']."/".$row['maxwater']."</td></tr>";

}

if ($row['waterunits']>0)

{

echo "<tr><td class=\"center\" colspan=\"2\"><table class=\"page\"><tr><td class=\"page\"><form name=\"drink\" action=\"drinkt.php?".time();

  echo "\" method=\"get\"><input class=\"invisible\" type=\"radio\" name=\"drink\" checked=\"checked\" value=\"".$row['itemnumber'];

  echo "\"><br /><input type=\"submit\" value=\"Drink Water\" class=\"small\"></form></td></tr></table></td></tr>";

}



echo "</table>";



echo "</td></tr>";

}

echo "</table>";



}



?>
