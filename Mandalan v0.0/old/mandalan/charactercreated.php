<?php 
$email=$_COOKIE["email"];

if (!$email)
{
die ("<!DOCTYPE html PUBLIC\"-//W3C//DTD XHTML 1.0 Transitional//EN\"\"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\"><html xmlns=\"http://www.w3.org/1999/xhtml\"><head><meta name=\"Keywords\" content=\"\" /><meta name=\"Description\" content=\"\" /><link rel=\"stylesheet\" type=\"text/css\" href=\"main.css\" /><title>Mandala</title></head><body>Your session has expired. Please log in <a href=\"mandala.php\" target=\"_top\">Here</a></body></html>");
}

include ('php/header1.php');

include ('php/startmain.php'); 

include ('php/connect.php');

$name=strip_tags($_POST["name"]);

$portrait=strip_tags($_POST["portrait"]);

$race=strip_tags($_POST["race"]);

$mclass=strip_tags($_POST["class"]);

$gender=strip_tags($_POST["gender"]);

$password="none";



//sanitize

if (!$name)

{

die ("You must choose a Name!<br /><form action=\"createcharacter.php\" method=\"post\"><input type=\"submit\" class=\"small\" value=\"Create Character\" /></form>");

}


$life=50;
$maxlife=50;
$mana=30;
$maxmana=30;
$speed=mt_rand(10,15);
$accuracy=mt_rand(10,15);
$strength=mt_rand(10,15);
$agility=mt_rand(10,15);
$wisdom=mt_rand(10,15);
$fireresist=mt_rand(0,10);
$iceresist=mt_rand(0,10);
$airresist=mt_rand(0,10);
$lightresist=mt_rand(0,10);
$darkresist=mt_rand(0,10);
$poisonresist=mt_rand(0,10);
$mindresist=mt_rand(0,10);
$holdresist=mt_rand(0,10);
$criticalresist=mt_rand(0,10);
$bleedresist=mt_rand(0,10);
$skillpoints=5;
$earthresist=mt_rand(0,10);
$luck=mt_rand(10,15);
$magicfind=0;
$lockpicking=0;
$cooking=mt_rand(0,10);
$alchemy=0;
$enchanting=0;


//add stat bonuses according to class and race


if ($mclass=="Knight")

{

$strength=$strength+7;

$accuracy=$accuracy+7;

$speed=$speed+2;

$criticalresist=$criticalresist+5;

$skillpoints=$skillpoints+7;

}

if ($mclass=="Paladin")

{

$strength=$strength+5;

$accuracy=$accuracy+3;

$speed=$speed+1;

$criticalresist=$criticalresist+5;

$skillpoints=$skillpoints+3;

$wisdom=$wisdom+3;

$darkresist=$darkresist+5;

$mana=$mana+5;

$maxmana=$maxmana+5;

}



if ($mclass=="Ninja")

{

$strength=$strength+5;

$accuracy=$accuracy+5;

$speed=$speed+5;

$skillpoints=$skillpoints+5;

$wisdom=$wisdom+2;

$agility=$agility+5;

$fireresist=$fireresist+5;

$iceresist=$iceresist+5;

}

if ($mclass=="Mystic")

{

$wisdom=$wisdom+10;

$mindresist=$mindresist+10;

$lightresist=$lightresist+5;

$darkresist=$darkresist+5;

$skillpoints=$skillpoints+5;

$mana=$mana+15;

$maxmana=$maxmana+15;

$enchanting=$enchanting+25;



//add a spell and enchantment

}



if($mclass=="Rogue")

{

$speed=$speed+7;

$accuracy=$accuracy+5;

$agility=$agility+7;

$wisdom=$wisdom+2;

$holdresist=$holdresist+5;

$skillpoints=$skillpoints+5;

$lockpicking=$lockpicking+25;

//add scroll

}





if ($mclass=="Shaman")

{

$wisdom=$wisdom+10;

$fireresist=$fireresist+10;

$iceresist=$iceresist+10;

$skillpoints=$skillpoints+3;

$mana=$mana+15;

$maxmana=$maxmana+15;

$earthresist=$earthresist+10;

$alchemy=$alchemy+25;

//add spell and potion

}





if ($race=="Human")

{

$life=$life+5;

$maxlife=$maxlife+5;

$magicfind=$magicfind+25;

}



if ($race=="Half-Elf")

{

$strength=$strength-3;

$speed=$speed+3;

$agility=$agility+3;

$accuracy=$accuracy+3;

$wisdom=$wisdom+3;

$maxlife=$maxlife+2;

$life=$life+2;

$fireresist=$fireresist+1;

$iceresist=$iceresist+1;

$lightresist=$lightresist+1;

$darkresist=$darkresist+1;

$poisonresist=$poisonresist+1;

$earthresist=$earthresist+1;

$magicfind=$magicfind+10;

}

if ($race=="Dark-Elf")

{$strength=$strength-5;

$speed=$speed+5;

$agility=$agility+5;

$accuracy=$accuracy+5;

$wisdom=$wisdom+5;

$fireresist=$fireresist+2;

$iceresist=$iceresist+2;

$lightresist=$lightresist-5;

$darkresist=$darkresist+5;

$poisonresist=$poisonresist+2;}

if ($race=="Light-Elf")

{$strength=$strength-5;

$speed=$speed+5;

$agility=$agility+5;

$accuracy=$accuracy+5;

$wisdom=$wisdom+5;

$fireresist=$fireresist+2;

$iceresist=$iceresist+2;

$lightresist=$lightresist+5;

$darkresist=$darkresist-5;

$poisonresist=$poisonresist+2;}

if ($race=="Wood-Elf")

{
$strength=$strength-5;

$speed=$speed+5;

$agility=$agility+5;

$accuracy=$accuracy+5;

$wisdom=$wisdom+5;

$fireresist=$fireresist+5;

$iceresist=$iceresist+5;

$lightresist=$lightresist+2;

$darkresist=$darkresist+2;

$poisonresist=$poisonresist+2;}

if ($race=="Dwarf")

{$life=$life+10;

$maxlife=$maxlife+10;

$speed=$speed-3;

$strength=$strength+5;

$agility=$agility-3;

$fireresist=$fireresist+3;

$criticalresist=$criticalresist+3;

$bleedresist=$bleedresist+3;

}

if ($race=="Half-Giant")

{

$life=$life+15;

$maxlife=$maxlife+15;

$strength=$strength+7;

$speed=$speed-3;

$agility=$agility-5;

$holdresist=$holdresist+7;

$mindresist=$mindresist-5;

$wisdom=$wisdom-5;

}

$results=mysql_query("select * from stats");

while ($row = mysql_fetch_array($results))

{

if ($row['username']==$name)

	{

	die ("That name is already taken, please choose another.<br /><form action=\"createcharacter.php\" method=\"post\"><input type=\"submit\" class=\"small\" value=\"Create Character\" /></form>");

	}

}

include ('php/addchar.php');


$querys = sprintf("insert into stats values(
'%s', '%s', 'None', '%s', '%s', '%s', 'Peasant', '%s', 'Good', 1, 0, 'homeup', 33, 2, 2, 'n', 'homeup', 33, 1, 3, '%s', '%s', '%s', '%s', 0, 0, 0, 
'%s', '%s', '%s', '%s', '%s',
 '%s', '%s', '%s', '%s', '%s',
 '%s', '%s', '%s', '%s', '%s',
 '%s', '%s', '%s', '%s', '%s',
 '%s', '%s', 'none'
);",
mysql_real_escape_string($name),
mysql_real_escape_string($password),
mysql_real_escape_string($portrait),
mysql_real_escape_string($race),
mysql_real_escape_string($mclass),
mysql_real_escape_string($gender),
mysql_real_escape_string($life),
mysql_real_escape_string($maxlife),
mysql_real_escape_string($mana),
mysql_real_escape_string($maxmana),
mysql_real_escape_string($strength),
mysql_real_escape_string($agility),
mysql_real_escape_string($speed),
mysql_real_escape_string($accuracy),
mysql_real_escape_string($wisdom),
mysql_real_escape_string($luck),
mysql_real_escape_string($magicfind),
mysql_real_escape_string($lockpicking),
mysql_real_escape_string($cooking),
mysql_real_escape_string($alchemy),
mysql_real_escape_string($enchanting),
mysql_real_escape_string($fireresist),
mysql_real_escape_string($iceresist),
mysql_real_escape_string($earthresist),
mysql_real_escape_string($airresist),
mysql_real_escape_string($darkresist),
mysql_real_escape_string($lightresist),
mysql_real_escape_string($mindresist),
mysql_real_escape_string($holdresist),
mysql_real_escape_string($bleedresist),
mysql_real_escape_string($criticalresist),
mysql_real_escape_string($skillpoints));

mysql_query($querys);



//inventory



//rattail



include ('php/zeroinv.php');
$itemnumber=$itemnumber+1;
$itemname="Rat Tail";

$itemdescription="Rat tails are common ingredients in potions and enchantments.";

$itemtype="Other";

$itemimage="rattail";

$itemlevel=1;

$itemrarity="Common";

$itemvalue=0;

$keep=0;

$othertype="Reagent";





include ('php/addinv.php');



//end rattail

//lockpick

include ('php/zeroinv.php');

$itemname="Lockpick";

$itemdescription="Lockpicks can be used on most locks that do not require special keys.";

$itemtype="Other";

$itemimage="lockpick";

$itemlevel=1;

$itemrarity="Common";

$itemvalue=0;

$keep=0;

$othertype="Tool";





include ('php/addinv.php');



include ('php/addspellbook.php');


include ('php/addskills.php');
include ('php/addenemy.php');
include ('php/addcounters.php');
include ('php/addflags.php');
include ('php/addcookbook.php');

echo "Name: ";

echo $name;

echo "<br /><img src=\"images/".$portrait;

echo ".png\" border=\"0\" />";

echo "<br />";

?>

<br />

This character has been created. Please login: 

<br />

<table class="page"><tr><td class="page">
<form action="choosecharacter1.php" method="post"><input type="submit" class="small" value="Login" /></form>
</td></tr></table>

</td></tr></table>

</body>

</html>