<?php

$skillet=0;
$rawmeat=0;
include ('../php/water.php');
include ('../php/getfire.php');
include ('php/getingredients.php');

$food=strip_tags($_GET["food"]);

if ($food=="friedmeat")
{

if ($fire=="n")
{
die ("<table class=\"page\"><tr><td class=\"page\">You do not have a fire required to cook for this recipe.</td></tr>
<tr><td class=\"page\">
<table class=\"page\"><tr><td class=\"page\"><form name=\"keep\" action=\"cookbook.php?".time()."\" method=\"get\"><input type=\"submit\" value=\"Back\" class=\"small\"></form></td></tr>
</td></tr></table></td></tr></table></body></html>");
}

if ($skillet>0 and $rawmeat>0)
{

$query=sprintf("update inventory set keep=keep-1 where username='%s' and itemname='Raw Meat';", mysql_real_escape_string($username));
mysql_query ($query);

include ('php/addfriedmeat.php');

echo "<table class=\"page\"><tr><td class=\"page\"><h2>Fried Meat</h2><br /><img src=\"../images/friedmeat.png\" /><br />You successfully cook Fried Meat!</td></tr>
<tr><td class=\"page\">
<table class=\"page\"><tr><td class=\"page\"><form name=\"keep\" action=\"cookbook.php?".time()."\" method=\"get\"><input type=\"submit\" value=\"Back\" class=\"small\"></form></td></tr>
</td></tr></table>";
}
else
{
echo "<table class=\"page\"><tr><td class=\"page\">You do not have all of the ingredients to cook this dish.</td></tr>
<tr><td class=\"page\">
<table class=\"page\"><tr><td class=\"page\"><form name=\"keep\" action=\"cookbook.php?".time()."\" method=\"get\"><input type=\"submit\" value=\"Back\" class=\"small\"></form></td></tr>
</td></tr></table>";
}
}

if ($food=="meatsandwich")
{


if ($friedmeat>0 and $bread>1)
{

$query=sprintf("update inventory set keep=keep-1 where username='%s' and itemname='Fried Meat';", mysql_real_escape_string($username));
mysql_query ($query);

include ('php/addmeatsand.php');

echo "<table class=\"page\"><tr><td class=\"page\"><h2>Fried Meat Sandwich</h2><br /><img src=\"../images/meatsandwich.png\" /><br />You successfully cook a Fried Meat Sandwich!</td></tr>
<tr><td class=\"page\">
<table class=\"page\"><tr><td class=\"page\"><form name=\"keep\" action=\"cookbook.php?".time()."\" method=\"get\"><input type=\"submit\" value=\"Back\" class=\"small\"></form></td></tr>
</td></tr></table>";
}
else
{
echo "<table class=\"page\"><tr><td class=\"page\">You do not have all of the ingredients to cook this dish.</td></tr>
<tr><td class=\"page\">
<table class=\"page\"><tr><td class=\"page\"><form name=\"keep\" action=\"cookbook.php?".time()."\" method=\"get\"><input type=\"submit\" value=\"Back\" class=\"small\"></form></td></tr>
</td></tr></table>";
}
}
if ($food=="applesauce")
{


if ($cinnamon>0 and $sugar>0 and $apples>2)
{

$query=sprintf("update inventory set keep=keep-1 where username='%s' and itemname='Cinnamon';", mysql_real_escape_string($username));
mysql_query ($query);

$query=sprintf("update inventory set keep=keep-1 where username='%s' and itemname='Sugar';", mysql_real_escape_string($username));
mysql_query ($query);

$query=sprintf("update inventory set keep=keep-3 where username='%s' and itemname='Apple';", mysql_real_escape_string($username));
mysql_query ($query);

include ('php/addapplesauce.php');

echo "<table class=\"page\"><tr><td class=\"page\"><h2>Applesauce</h2><br /><img src=\"../images/applesauce.png\" /><br />You successfully cook Applesauce!</td></tr>
<tr><td class=\"page\">
<table class=\"page\"><tr><td class=\"page\"><form name=\"keep\" action=\"cookbook.php?".time()."\" method=\"get\"><input type=\"submit\" value=\"Back\" class=\"small\"></form></td></tr>
</td></tr></table>";
}
else
{
echo "<table class=\"page\"><tr><td class=\"page\">You do not have all of the ingredients to cook this dish.</td></tr>
<tr><td class=\"page\">
<table class=\"page\"><tr><td class=\"page\"><form name=\"keep\" action=\"cookbook.php?".time()."\" method=\"get\"><input type=\"submit\" value=\"Back\" class=\"small\"></form></td></tr>
</td></tr></table>";
}

}

if ($food=="cesarsalad")
{


if ($lettuce>2 and $vegetables>0 and $salt>0 and $oil>0 and $vinegar>0)
{

$query=sprintf("update inventory set keep=keep-1 where username='%s' and itemname='Vegetables';", mysql_real_escape_string($username));
mysql_query ($query);

$query=sprintf("update inventory set keep=keep-1 where username='%s' and itemname='Salt';", mysql_real_escape_string($username));
mysql_query ($query);

$query=sprintf("update inventory set keep=keep-3 where username='%s' and itemname='Lettuce';", mysql_real_escape_string($username));
mysql_query ($query);

$query=sprintf("update inventory set keep=keep-1 where username='%s' and itemname='Oil';", mysql_real_escape_string($username));
mysql_query ($query);

$query=sprintf("update inventory set keep=keep-1 where username='%s' and itemname='Vinegar';", mysql_real_escape_string($username));
mysql_query ($query);

include ('php/addcesarsalad.php');

echo "<table class=\"page\"><tr><td class=\"page\"><h2>Cesar Salad</h2><br /><img src=\"../images/salad.png\" /><br />You successfully cook Cesar Salad!</td></tr>
<tr><td class=\"page\">
<table class=\"page\"><tr><td class=\"page\"><form name=\"keep\" action=\"cookbook.php?".time()."\" method=\"get\"><input type=\"submit\" value=\"Back\" class=\"small\"></form></td></tr>
</td></tr></table>";
}
else
{
echo "<table class=\"page\"><tr><td class=\"page\">You do not have all of the ingredients to cook this dish.</td></tr>
<tr><td class=\"page\">
<table class=\"page\"><tr><td class=\"page\"><form name=\"keep\" action=\"cookbook.php?".time()."\" method=\"get\"><input type=\"submit\" value=\"Back\" class=\"small\"></form></td></tr>
</td></tr></table>";
}

}
if ($food=="lifepotion")
{

if ($potionbottle==0)
{
die ("<table class=\"page\"><tr><td class=\"page\">You do not have a potion bottle required to cook for this recipe.</td></tr>
<tr><td class=\"page\">
<table class=\"page\"><tr><td class=\"page\"><form name=\"keep\" action=\"cookbook.php?".time()."\" method=\"get\"><input type=\"submit\" value=\"Back\" class=\"small\"></form></td></tr>
</td></tr></table></td></tr></table></body></html>");
}

if ($aloe>0 and $water>0)
{

$query=sprintf("update inventory set keep=keep-1 where username='%s' and itemname='Aloe';", mysql_real_escape_string($username));
mysql_query ($query);

include ('php/addlifepotion.php');

echo "<table class=\"page\"><tr><td class=\"page\"><h2>Life Potion</h2><br /><img src=\"../images/lifepotion.png\" /><br />You successfully brew life potion!</td></tr>
<tr><td class=\"page\">
<table class=\"page\"><tr><td class=\"page\"><form name=\"keep\" action=\"cookbook.php?".time()."\" method=\"get\"><input type=\"submit\" value=\"Back\" class=\"small\"></form></td></tr>
</td></tr></table>";
}
else
{
echo "<table class=\"page\"><tr><td class=\"page\">You do not have all of the ingredients to cook this dish.</td></tr>
<tr><td class=\"page\">
<table class=\"page\"><tr><td class=\"page\"><form name=\"keep\" action=\"cookbook.php?".time()."\" method=\"get\"><input type=\"submit\" value=\"Back\" class=\"small\"></form></td></tr>
</td></tr></table>";
}
}
if ($food=="friedeggs")
{

if ($fire=="n")
{
die ("<table class=\"page\"><tr><td class=\"page\">You do not have a fire required to cook for this recipe.</td></tr>
<tr><td class=\"page\">
<table class=\"page\"><tr><td class=\"page\"><form name=\"keep\" action=\"cookbook.php?".time()."\" method=\"get\"><input type=\"submit\" value=\"Back\" class=\"small\"></form></td></tr>
</td></tr></table></td></tr></table></body></html>");
}

if ($skillet>0 and $eggs>2 and $salt>0)
{

$query=sprintf("update inventory set keep=keep-5 where username='%s' and itemname='Egg';", mysql_real_escape_string($username));
mysql_query ($query);

$query=sprintf("update inventory set keep=keep-1 where username='%s' and itemname='Salt';", mysql_real_escape_string($username));
mysql_query ($query);

include ('php/addfriedeggs.php');

echo "<table class=\"page\"><tr><td class=\"page\"><h2>Fried Eggs</h2><br /><img src=\"../images/friedeggs.png\" /><br />You successfully cook Fried Eggs!</td></tr>
<tr><td class=\"page\">
<table class=\"page\"><tr><td class=\"page\"><form name=\"keep\" action=\"cookbook.php?".time()."\" method=\"get\"><input type=\"submit\" value=\"Back\" class=\"small\"></form></td></tr>
</td></tr></table>";
}
else
{
echo "<table class=\"page\"><tr><td class=\"page\">You do not have all of the ingredients to cook this dish.</td></tr>
<tr><td class=\"page\">
<table class=\"page\"><tr><td class=\"page\"><form name=\"keep\" action=\"cookbook.php?".time()."\" method=\"get\"><input type=\"submit\" value=\"Back\" class=\"small\"></form></td></tr>
</td></tr></table>";
}
}

if ($food=="diseasepot")
{

if ($potionbottle==0)
{
die ("<table class=\"page\"><tr><td class=\"page\">You do not have a potion bottle required to cook for this recipe.</td></tr>
<tr><td class=\"page\">
<table class=\"page\"><tr><td class=\"page\"><form name=\"keep\" action=\"cookbook.php?".time()."\" method=\"get\"><input type=\"submit\" value=\"Back\" class=\"small\"></form></td></tr>
</td></tr></table></td></tr></table></body></html>");
}

if ($rattail>4 and $water>0)
{

$query=sprintf("update inventory set keep=keep-5 where username='%s' and itemname='Rat Tail';", mysql_real_escape_string($username));
mysql_query ($query);

include ('php/adddiseasepot.php');

echo "<table class=\"page\"><tr><td class=\"page\"><h2>Disease Potion</h2><br /><img src=\"../images/diseasepot.png\" /><br />You successfully brew disease potion!</td></tr>
<tr><td class=\"page\">
<table class=\"page\"><tr><td class=\"page\"><form name=\"keep\" action=\"cookbook.php?".time()."\" method=\"get\"><input type=\"submit\" value=\"Back\" class=\"small\"></form></td></tr>
</td></tr></table>";
}
else
{
echo "<table class=\"page\"><tr><td class=\"page\">You do not have all of the ingredients to cook this dish.</td></tr>
<tr><td class=\"page\">
<table class=\"page\"><tr><td class=\"page\"><form name=\"keep\" action=\"cookbook.php?".time()."\" method=\"get\"><input type=\"submit\" value=\"Back\" class=\"small\"></form></td></tr>
</td></tr></table>";
}
}
?>