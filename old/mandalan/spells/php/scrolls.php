<?php

include ('php/getfight.php');

$type=strip_tags($_POST["type"]);
echo "<table class=\"page\">";

if (!$type)
{

$query=sprintf("select * from spellbook where username='%s' and spelltype='Scroll' and learned>0 order by spelltype desc, element, spelllevel desc;",mysql_real_escape_string($username));
$result=mysql_query($query);
while($row = mysql_fetch_array($result))
{
echo "<tr><td class=\"border\">
<img src=\"../images/".$row['spellimage'].".png\" /><br />".$row['spellname']."<br />Level ".$row['spelllevel'];
echo "</td><td class=\"border\"><table class=\"page\"><tr><td class=\"left\">Description:</td><td class=\"left\">".$row['spelldescription'];
echo "</td></tr><tr><td class=\"left\">Spell Type:</td><td class=\"left\">".$row['spelltype']."</td></tr>";

if ($row['spelltype']=="Elemental")
{
echo "<tr><td class=\"left\">Element Type:</td><td class=\"left\">".$row['element'];
echo "</td></tr>";
}

echo "<tr><td class=\"left\">Mana Cost:</td><td class=\"left\">".$row['manacost'];
echo "</td></tr>";

if ($row['heallife']>0)
{
echo "<tr><td class=\"left\">Life Heal:</td><td class=\"left\">".$row['heallife'];
echo "</td></tr>";
}

if ($row['damage']>0)
{
echo "<tr><td class=\"left\">Damage:</td><td class=\"left\">".$row['damage'];
echo "</td></tr>";
}


if ($row['offensive']==0)
{
echo "<tr><td class=\"center\"><table class=\"page\"><tr><td class=\"page\"><form action=\"castscroll.php?";
echo time();
echo "\" method=\"post\">

<input class=\"invisible\" type=\"radio\" name=\"type\" checked=\"checked\" value=\"";
echo $row['spellname']." ".$row['spelllevel'];echo "\" />

<input class=\"invisible\" type=\"radio\" name=\"number\" checked=\"checked\" value=\"";
echo $row['spellnumber']."\" />


<input class=\"small\" type=\"submit\" value=\"Cast Scroll\" /></form>";
//form to cast spellbook

echo "</td></tr></table>";
}

if ($fight==1 and $row['offensive']==1)
{
echo "<tr><td class=\"center\"><form action=\"castscroll.php?";
echo time();
echo "\" method=\"post\"><input class=\"invisible\" type=\"radio\" name=\"number\" checked=\"checked\" value=\"";
echo $row['spellnumber']."\" />

<input class=\"invisible\" type=\"radio\" name=\"type\" checked=\"checked\" value=\"";
echo $row['spellname']." ".$row['spelllevel'];echo "\" /><input class=\"small\" type=\"submit\" value=\"Cast Scroll\" /></form>";
//form to cast spellbook

echo "</td></tr>";
}


echo "</td></tr>";
echo "</table>";

echo "</td></tr>";
}
}



if ($type=="Light")
{
$query=sprintf("select * from spellbook where username='%s' and learned>0 and spelltype='Elemental' and element='Light' order by spelltype desc, element, spelllevel desc;",mysql_real_escape_string($username));
$result=mysql_query($query);
while($row = mysql_fetch_array($result))
{


echo "<tr><td class=\"border\">

<img src=\"../images/".$row['spellimage'].".png\" /><br />".$row['spellname']."<br />Level ".$row['spelllevel'];

echo "</td><td class=\"border\">

<table class=\"page\"><tr><td class=\"left\">Description:</td><td class=\"left\">".$row['spelldescription'];


echo "</td></tr><tr><td class=\"left\">Spell Type:</td><td class=\"left\">".$row['spelltype']."</td></tr>";

if ($row['spelltype']=="Elemental")

{

echo "<tr><td class=\"left\">Element Type:</td><td class=\"left\">".$row['element'];

echo "</td></tr>";

}

echo "<tr><td class=\"left\">Mana Cost:</td><td class=\"left\">".$row['manacost'];

echo "</td></tr>";

if ($row['heallife']>0)

{

echo "<tr><td class=\"left\">Life Heal:</td><td class=\"left\">".$row['heallife'];


echo "</td></tr>";

}

if ($fight==1 || $row['offensive']==0)

{

echo "<tr><td class=\"center\"><form action=\"castspell.php?";

echo time();

echo "\" method=\"post\"><input class=\"invisible\" type=\"radio\" name=\"type\" checked=\"checked\" value=\"";


echo $row['spellname']." ".$row['spelllevel'];echo "\" /><input class=\"small\" type=\"submit\" value=\"Cast Spell\" /></form>";

//form to cast spellbook


}


echo "</td></tr>";

echo "</table>";

echo "</td></tr>";

}

}

if ($type=="Fire")
{

$query=sprintf("select * from spellbook where username='%s' and spelltype='Scroll' and element='Fire' and learned>0 order by spelltype desc, element, spelllevel desc;",mysql_real_escape_string($username));
$result=mysql_query($query);
while($row = mysql_fetch_array($result))
{
echo "<tr><td class=\"border\">


<img src=\"../images/".$row['spellimage'].".png\" /><br />".$row['spellname']."<br />Level ".$row['spelllevel'];
 
echo "</td><td class=\"border\">


<table class=\"page\"><tr><td class=\"left\">Description:</td><td class=\"left\">".$row['spelldescription'];
echo "</td></tr><tr><td class=\"left\">Spell Type:</td><td class=\"left\">".$row['spelltype']."</td></tr>";
if ($row['spelltype']=="Elemental")
{
echo "<tr><td class=\"left\">Element Type:</td><td class=\"left\">".$row['element'];
echo "</td></tr>";
}

if ($row['heallife']>0)
{
echo "<tr><td class=\"left\">Life Heal:</td><td class=\"left\">".$row['heallife'];
echo "</td></tr>";
}

echo "<tr><td class=\"center\" colspan=\"2\"><table class=\"page\"><tr><td class=\"page\"><form action=\"readscroll.php?";

echo time();
echo "\" method=\"post\"><input class=\"invisible\" type=\"radio\" name=\"type\" checked=\"checked\" value=\"";
echo $row['spellname']." ".$row['spelllevel'];echo "\" /><input class=\"small\" type=\"submit\" value=\"Read Scroll\" /></form>";
//form to cast spellbook

echo "</td></tr></table></td></tr>";
echo "</table>";

echo "</td></tr>";
}
}



echo "</table>";


?>