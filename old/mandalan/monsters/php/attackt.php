<?php

include ('php/getwtype.php');
include ('../php/getstats.php');

include ('php/getbbleed.php');
include ('php/getburn.php');

//**********getweapon and skill for bleeding numbers

include ('php/get.php');

$query = sprintf("select * from stats where username='%s';",mysql_real_escape_string($username));
$result=mysql_query($query);

while($row = mysql_fetch_array($result))
  {

$rand=mt_rand(1,100);
$miss=75-$row['accuracy'];
if ($rand<$miss+1)
{

$report="<span class=\"green\">You attack and <b>Miss!</b></span><br />";

include ('php/endturnt.php');

}

else
{

$rand1=mt_rand(1,100);

if ($rand1<$enemyagility+1)
{
$report="<span class=\"green\">You attack and your enemy <b>Evades!</b></span><br />";

include ('php/endturnt.php');
}

else
{
$power=$row['special'];
$chance=mt_rand(1,100);
if ($chance<$power+1)
{
$report="<span class=\"green\">Power hit, needs programmed.<b>Miss!</b></span><br />";

include ('php/endturnt.php');
}

else
{
//get critical hit
include ('php/critical.php');
$hit=mt_rand(1,100);
if ($hit<$critical+1)
{
include ('php/getdamage.php');

//######################################fixstrength
$strongbonus=$strength;
$strongbonus=$strongbonus*.01;
$strongbonus=$damage*$strongbonus;
$damage=$damage+$strongbonus;
//#############################################fixlevel
$levelbonus=$level;
$damage=$damage+$levelbonus;
$crit=$damage/2;
$damage=$damage+$crit;
$damage=round($damage);

$query = sprintf("update enemy set enemylife=enemylife-'%s' where username='%s';",
mysql_real_escape_string($damage),
mysql_real_escape_string($username));
mysql_query($query);

$report="<span class=\"green\">You attack and hit with a <b>Critical Hit of ";
$report=$report.$damage;
$report=$report."!</b></span><br />";

include ('php/bleedchance.php');
include ('php/endturnt.php');
}

else
{
//change block ##############
$rand3=mt_rand(1,100);

if ($rand3<$block+1)
{
$report="<span class=\"green\">You attack and your enemy <b>Blocks!</b></span><br />";

include ('php/endturnt.php');
}

else
{
include ('php/getdamage.php');
//#########################################strength
$strongbonus=$strength;
$strongbonus=$strongbonus*.01;
$damage=$damage+$strongbonus;
$amount=mt_rand(1,100);
$amount=$amount*.01;
$damage=round($damage*$amount);
//#################################################level
$levelbonus=$level;
$damage=$damage+$levelbonus;

include ('php/enemydeflect.php');
$deflect=round($deflect*$damage);
$diffdam=$damage-$deflect;

$query = sprintf("update enemy set enemylife=enemylife-'%s' where username='%s';",
mysql_real_escape_string($diffdam),
mysql_real_escape_string($username));
mysql_query($query);

$report="<span class=\"green\">You attack and hit for <b>";
$report=$report.$damage;
$report=$report." </b>Damage! <b>";
$report=$report.$deflect;
$report=$report." </b>Damage is Deflected!</b></span><br />";
include ('php/bleedchance.php');
include ('php/endturnt.php');
}
}
}
}
}
}
?>