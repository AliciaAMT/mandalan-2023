<?php
include ('php/evade.php');
//create this file based on agility and speed
include ('php/block.php');
//create this file based on strength and agility
include ('php/deflect.php');
include ('php/defense.php');
//create this file based on defense, return amount to be deflected
include ('php/life.php');
include ('php/level.php');
include ('../php/getstats.php');
include ('php/getearthresist.php');
include ('php/getbackstab.php');
include ('php/getdamage.php');
include ('php/getstrength.php');
include ('php/getlevel.php');
include ('php/getagility.php');
include ('php/getenemyspeed.php');
include ('php/getspeed.php');

include ('php/getcritresist.php');
include ('php/getholdresist.php');



$randdeflect=mt_rand(1,30);
$deflect=$deflect*$randdeflect;
$deflect=$deflect*.01;
$deflect=round($deflect);

$randdefense=mt_rand(1,30);
$defense=$defense*$randdefense;
$defense=$defense*.01;
$defense=round($defense);


$query = sprintf("select * from stats where username='%s';",mysql_real_escape_string($username));
$result=mysql_query($query);

while($row = mysql_fetch_array($result))
  {
  if ($row['enemylife']<1)
  {


 $counter=$counter."<span class=\"red\">";
$counter=$counter.$row['enemyname'];
$counter=$counter." is dead!</span><br /><table class=\"page\"><tr><td class=\"page\"><table class=\"page\"><tr><td class=\"page\"><form action=\"loot";
$counter=$counter.$row['enemy'];
$counter=$counter.".php?".time()."\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Loot Body\" /></form></td></tr></table>
</td></tr></table></br>";

 // enemy dead dialogue
  }
  
  else
  {
  
  //add flee attempt if life <6#####################################################
$rand=mt_rand(1,10);
if ($row['enemylife']<6 and $rand <6)
{
//calculate fleeing success according to speed and agility vs your own
include ('php/eflee.php');
}

//**********************************************
else
{

  
  $rand=mt_rand(1,100);
$miss=75-$row['enemyaccuracy'];
if ($rand<$miss)
{

$counter=$counter."<span class=\"red\">";
$counter=$counter.$row['enemyname'];
$counter=$counter." counter-attacks and <b>Misses!</b></span><br />";
//*****************

include ('php/eendturn.php');


//***************

}
else
{


$rand1=mt_rand(1,100);
$rand1=$rand1*.01;
$rand1=$rand1*$agility;

$rand=mt_rand(1,100);
$rand=$rand*.01;
$enemyagility=$enemyagility*$rand;

if ($rand1<$enemyagility)
{
$counter=$counter."<span class=\"red\">";
$counter=$counter.$row['enemyname'];
$counter=$counter." counter-attacks and you <b>Evade!</b></span><br />";

include ('php/eendturn.php');

}
else
{
$power=25;
$chance=mt_rand(1,100);
if ($chance<$power)
{


if ($row['enemy']=="cellarspider")
{

$rand=mt_rand(1,100);

if ($holdresist>$rand)
{
$counter=$counter."<span class=\"red\">";
$counter=$counter.$row['enemyname'];
$counter=$counter." attempts to hold you with <b>Spider Webs!</b> <b>You resist!</b></span><br />";
}

else
{
$counter=$counter."<span class=\"red\">";
$counter=$counter.$row['enemyname'];
$counter=$counter." attempts to hold you with <b>Spider Webs!</b> You cannot move for <b>1</b> turn and the Spider inflicts <b>10</b> damage!</span><br />";

$query = sprintf("update stats set life=life-10 where username='%s';",
mysql_real_escape_string($username));
mysql_query($query);

$query = sprintf("update stats set held=1 where username='%s';",
mysql_real_escape_string($username));
mysql_query($query);


if ($life-10<1)
{
$counter=$counter."You died!<br /><table class=\"page\"><tr><td class=\"page\"><table class=\"page\"><tr><td class=\"page\"><form action=\"revive.php?".time()."\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Follow the Light\" /></form></td></tr></table></td></tr></table>";
}

include ('php/counter.php');

}
}



if ($row['enemy']=="rat")
{

$rand=mt_rand(1,100);

if ($earthresist>$rand)
{
$counter=$counter."<span class=\"red\">";
$counter=$counter.$row['enemyname'];
$counter=$counter." attempts to infect you with the <b>Plague!</b> <b>You resist!</b></span><br />";

include ('php/eendturn.php');

}

else
{
$counter=$counter."<span class=\"red\">";
$counter=$counter.$row['enemyname'];
$counter=$counter." infects you with the <b>Plague!</b> The infected bite inflicts <b>10</b> damage!</span><br />";

$query = sprintf("update stats set cond='Plagued' where username='%s';",
mysql_real_escape_string($username));
mysql_query($query);

$query = sprintf("update stats set life=life-10 where username='%s';",
mysql_real_escape_string($username));
mysql_query($query);

if ($life-10<1)
{
$counter=$counter."You died!<br /><table class=\"page\"><tr><td class=\"page\"><table class=\"page\"><tr><td class=\"page\"><form action=\"revive.php?".time()."\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Follow the Light\" /></form></td></tr></table></td></tr></table>";
}
include ('php/eendturn.php');
}
}

}
else
{
//#################################################critical hit
$critical=10;
$hit=mt_rand(1,100);
if ($hit<$critical)
{

//write chance to resist based on resistances
$rhit=mt_rand(1,100);
if ($rhit<$criticalresist)
{
$counter=$counter."<span class=\"red\">";
$counter=$counter.$row['enemyname'];
$counter=$counter." counter-attacks with a <b>Critical Hit!</b> But you <b>Resist</b>!</span><br />";
include ('php/eendturn.php');
}

else
{

$damage=$row['enemyatt2dam'];
$levelbonus=$row['enemylevel'];
$damage=$damage+$levelbonus;
$crit=$damage/2;
$damage=$damage+$crit;
$damage=round($damage);

$counter=$counter."<span class=\"red\">";
$counter=$counter.$row['enemyname'];
$counter=$counter." counter-attacks with a <b>Critical Hit of ";
$counter=$counter.$damage;
$counter=$counter."!</b></span><br />";

$query = sprintf("update stats set life=life-'%s' where username='%s';",
mysql_real_escape_string($damage),
mysql_real_escape_string($username));
mysql_query($query);

if ($life-$damage<1)
{
$counter=$counter."You died!<br /><table class=\"page\"><tr><td class=\"page\"><table class=\"page\"><tr><td class=\"page\"><form action=\"revive.php?".time()."\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Follow the Light\" /></form></td></tr></table></td></tr></table>";

}
include ('php/eendturn.php');
}
}

else
{
$randatt2=mt_rand(1,100);
if ($randatt2<30)
{

$randblock=mt_rand(1,100);
$rand=mt_rand(1,100);
$rand=$rand*.01;
$block=$block*$rand;
//####################################################################################
if ($randblock<$block)
{

$enemydamage=$row['enemyatt2dam'];
$enemydamage=$enemydamage+$row['enemylevel'];
$block=$block*.01;
$block=round($block*$enemydamage);
//###################################################################################
$defense=$defense/2;

//write chance to resist based on resistances
$defense=$defense+$level;
$randdef=mt_rand(50,100)*.01;
$defense=$defense*$randdef;
$defense=round($defense);
$difference=$enemydamage-$block;
$difference=$difference-$defense;
if($difference<0)
{$difference=0;}

$counter=$counter."<span class=\"red\">";
$counter=$counter.$row['enemyname'];
$counter=$counter." attacks you with ";
$counter=$counter.$row['enemyatt2'];
$counter=$counter." for ";
$counter=$counter.$enemydamage;
$counter=$counter." damage and you <b>Block ";
$counter=$counter.$block;
$counter=$counter." damage with ";
$counter=$counter.$defense;
$counter=$counter." damage deflected!</b></span><br />";

$query = sprintf("update stats set life=life-'%s' where username='%s';",
mysql_real_escape_string($difference),
mysql_real_escape_string($username));
mysql_query($query);

if ($life-$difference<1)
{
$counter=$counter."You died!<br /><table class=\"page\"><tr><td class=\"page\"><table class=\"page\"><tr><td class=\"page\"><form action=\"revive.php?".time()."\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Follow the Light\" /></form></td></tr></table></td></tr></table>";

}
include ('php/eendturn.php');
}



else
{
$enemydamage=$row['enemyatt2dam'];
$enemydamage=$enemydamage+$row['enemylevel'];
$defense=$defense/2;
$defense=$defense+$level;
$randdef=mt_rand(50,100)*.01;
$defense=$defense*$randdef;
$defense=round($defense);
$difference=$enemydamage-$defense;
if($difference<0)
{$difference=0;}

$counter=$counter."<span class=\"red\">";
$counter=$counter.$row['enemyname'];
$counter=$counter." attacks with ";
$counter=$counter.$row['enemyatt2'];
$counter=$counter." for <b>";
$counter=$counter.$enemydamage;
$counter=$counter." damage!</b>You deflect <b>";
$counter=$counter.$defense;
$counter=$counter." damage!</b></span><br />";

$query = sprintf("update stats set life=life-'%s' where username='%s';",
mysql_real_escape_string($difference),
mysql_real_escape_string($username));
mysql_query($query);
if ($life-$difference<1)
{
$counter=$counter."You died!<br /><table class=\"page\"><tr><td class=\"page\"><table class=\"page\"><tr><td class=\"page\"><form action=\"revive.php?".time()."\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Follow the Light\" /></form></td></tr></table></td></tr></table>";

}
include ('php/eendturn.php');
}

else
{

$randblock=mt_rand(1,100);
$rand=mt_rand(1,100);
$rand=$rand*.01;
$block=$block*$rand;

if ($randblock<$block)
{

$enemydamage=$row['enemyatt1dam'];
$enemydamage=$enemydamage+$row['enemylevel'];
$block=$block*.01;
$block=round($block*$enemydamage);

$defense=$defense/2;
$defense=$defense+$level;
$randdef=mt_rand(50,100)*.01;
$defense=$defense*$randdef;
$defense=round($defense);
$difference=$enemydamage-$block;
$difference=$difference-$defense;
if($difference<0)
{$difference=0;}

$counter=$counter."<span class=\"red\">";
$counter=$counter.$row['enemyname'];
$counter=$counter." attacks you with ";
$counter=$counter.$row['enemyatt1'];
$counter=$counter." for ";
$counter=$counter.$enemydamage;
$counter=$counter." damage and you <b>Block ";
$counter=$counter.$block;
$counter=$counter." damage with ";
$counter=$counter.$defense;
$counter=$counter." damage deflected!</b></span><br />";

$query = sprintf("update stats set life=life-'%s' where username='%s';",
mysql_real_escape_string($difference),
mysql_real_escape_string($username));
mysql_query($query);

if ($life-$difference<1)
{
$counter=$counter."You died!<br /><table class=\"page\"><tr><td class=\"page\"><table class=\"page\"><tr><td class=\"page\"><form action=\"revive.php?".time()."\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Follow the Light\" /></form></td></tr></table></td></tr></table>";

}
include ('php/eendturn.php');
}
}


}
else
{
$enemydamage=$row['enemyatt1dam'];
$enemydamage=$enemydamage+$row['enemylevel'];
$defense=$defense/2;
$defense=$defense+$level;
$randdef=mt_rand(50,100)*.01;
$defense=$defense*$randdef;
$defense=round($defense);
$difference=$enemydamage-$defense;
if($difference<0)
{$difference=0;}

$counter=$counter."<span class=\"red\">";
$counter=$counter.$row['enemyname'];
$counter=$counter." attacks with ";
$counter=$counter.$row['enemyatt1'];
$counter=$counter." for <b>";
$counter=$counter.$enemydamage;
$counter=$counter." damage!</b> You deflect <b>";
$counter=$counter.$defense;
$counter=$counter." damage!</b></span><br />";

$query = sprintf("update stats set life=life-'%s' where username='%s';",
mysql_real_escape_string($difference),
mysql_real_escape_string($username));
mysql_query($query);

if ($life-$difference<1)
{
$counter=$counter."You died!<br /><table class=\"page\"><tr><td class=\"page\"><table class=\"page\"><tr><td class=\"page\"><form action=\"revive.php?".time()."\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Follow the Light\" /></form></td></tr></table></td></tr></table>";

}
include ('php/eendturn.php');

}


}
}
}






}
}
}

}
?>
