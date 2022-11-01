<?php

$type=strip_tags($_POST["type"]);
echo "<table class=\"page\">";

if (!$type)
{

$query=sprintf("select * from spellbook where username='%s' and spelltype='Potion' and learned>0 order by spelltype desc, element, spelllevel desc;",mysql_real_escape_string($username));
$result=mysql_query($query);
while($row = mysql_fetch_array($result))
{
echo "<tr><td class=\"border\"><h2>".$row['spellname']."</h2>Level ".$row['spelllevel'];
 
echo "</td><td class=\"border\">


<table class=\"page\"><tr><td class=\"left\">Description:</td><td class=\"left\">".$row['spelldescription'];
echo "</td></tr><tr><td class=\"left\">Spell Type:</td><td class=\"left\">".$row['spelltype']."</td></tr>";

echo "<tr><td class=\"left\">Ingredients:</td><td class=\"left\">".$row['ingredients'];
echo "</td></tr>";
if ($row['heallife']>0)
{
echo "<tr><td class=\"left\">Life Heal:</td><td class=\"left\">".$row['heallife'];
echo "</td></tr>";
}
if ($row['healmana']>0)
{
echo "<tr><td class=\"left\">Mana Heal:</td><td class=\"left\">".$row['healmana'];
echo "</td></tr>";
}

echo "<tr><td class=\"center\" colspan=\"2\"><table class=\"page\"><tr><td class=\"page\"><form action=\"brewpott.php?";

echo time();
echo "\" method=\"post\"><input class=\"invisible\" type=\"radio\" name=\"type\" checked=\"checked\" value=\"";
echo $row['spellname']." ".$row['spelllevel'];echo "\" /><input class=\"small\" type=\"submit\" value=\"Make Potion\" /></form>";
//form to cast spellbook

echo "</td></tr></table></td></tr>";
echo "</table>";

echo "</td></tr>";
}
}

if ($type=="Blessings")
{

$query=sprintf("select * from spellbook where username='%s' and spelltype='Potion' and element='Blessing' and learned>0 order by spelltype desc, element, spelllevel desc;",mysql_real_escape_string($username));
$result=mysql_query($query);
while($row = mysql_fetch_array($result))
{
echo "<tr><td class=\"border\"><h2>".$row['spellname']."</h2>Level ".$row['spelllevel'];
 
echo "</td><td class=\"border\">


<table class=\"page\"><tr><td class=\"left\">Description:</td><td class=\"left\">".$row['spelldescription'];
echo "</td></tr><tr><td class=\"left\">Spell Type:</td><td class=\"left\">".$row['spelltype']."</td></tr>";

echo "<tr><td class=\"left\">Ingredients:</td><td class=\"left\">".$row['ingredients'];
echo "</td></tr>";
if ($row['heallife']>0)
{
echo "<tr><td class=\"left\">Life Heal:</td><td class=\"left\">".$row['heallife'];
echo "</td></tr>";
}
if ($row['healmana']>0)
{
echo "<tr><td class=\"left\">Mana Heal:</td><td class=\"left\">".$row['healmana'];
echo "</td></tr>";
}

echo "<tr><td class=\"center\" colspan=\"2\"><table class=\"page\"><tr><td class=\"page\"><form action=\"brewpott.php?";

echo time();
echo "\" method=\"post\"><input class=\"invisible\" type=\"radio\" name=\"type\" checked=\"checked\" value=\"";
echo $row['spellname']." ".$row['spelllevel'];echo "\" /><input class=\"small\" type=\"submit\" value=\"Make Potion\" /></form>";
//form to cast spellbook

echo "</td></tr></table></td></tr>";
echo "</table>";

echo "</td></tr>";
}
}



echo "</table>";


?>