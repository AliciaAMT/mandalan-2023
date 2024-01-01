<?php

include ('../php/getstats.php');
include ('php/getskills.php');
include ('php/getestats.php');
include ('php/getdamage.php');
include ('php/mystats.php');
include ('php/deadt.php');
include ('php/enemydeadt.php');

$query = sprintf("select * from enemy where username='%s';",mysql_real_escape_string($username));
$result=mysql_query($query);

while($row = mysql_fetch_array($result))
  {
  if ($row['enemylife']<1)
  {

 $counter=$counter."<span class=\"red\">";
$counter=$counter.$row['enemyname'];
$counter=$counter." is dead!</span><br /><table class=\"page\"><tr><td class=\"page\"><table class=\"page\"><tr><td class=\"page\"><form action=\"loott.php?".time()."\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Loot Body\" /></form></td></tr></table>
</td></tr></table></br>";

  }
  
  else
  {
  
$rand=mt_rand(1,10);
if ($row['enemylife']<6 and $rand <4)
{

$enemyevade=$row['enemyspeed']+$row['enemyagility'];
$enemyevade=$enemyevade/2;
$rande=mt_rand(1,100);
$randee=$rande*.01;
$randee=$randee*$enemyevade;
$randee=round($randee);

$randy=mt_rand(1,100);
$randey=$randy*.01;
$randey=$randey*$speed;
$randey=round($randey);

if ($randee<$randey)
{
$counter=$counter."<span class=\"red\">";
$counter=$counter.$row['enemyname'];
$counter=$counter." attempts to flee and <b>Fails!</b></span><br />";

//add backstab chance according to skill/weapon equipped
//$rand=mt_rand(1,100);
//$rand=$rand*.01;
//$sbackstab=$rand*$sbackstab;
//$sbackstab=round($sbackstab);

$chance=mt_rand(1,100);

if ($sbackstab>$chance)
{

$strongbonus=$strength;
$strongbonus=$strongbonus*.01;
$strongbonus=$damage*$strongbonus;
$damage=$damage+$strongbonus;

$levelbonus=$level;
$damage=$damage+$levelbonus;
$crit=$damage/2;
$damage=$damage+$crit;
$damage=round($damage);

$query = sprintf("update enemy set enemylife=enemylife-'%s' where username='%s';",
mysql_real_escape_string($damage),
mysql_real_escape_string($username));
mysql_query($query);

$counter=$counter."<span class=\"green\">";
$counter=$counter."You Backstab ".$row['enemyname'];
$counter=$counter." and inflict a Critical Hit of <b>".$damage."!</b></span><br />";

}

}

else
{

$rand=mt_rand(1,100);
$rand=$rand*.01;
$sbackstab=$rand*$sbackstab;
$sbackstab=round($sbackstab);

$chance=mt_rand(1,100);

if ($sbackstab>$chance)
{

$strongbonus=$strength;
$strongbonus=$strongbonus*.01;
$strongbonus=$damage*$strongbonus;
$damage=$damage+$strongbonus;
$levelbonus=$level;
$damage=$damage+$levelbonus;
$crit=$damage/2;
$damage=$damage+$crit;
$damage=round($damage);

$query = sprintf("update enemy set enemylife=enemylife-'%s' where username='%s';",
mysql_real_escape_string($damage),
mysql_real_escape_string($username));
mysql_query($query);

$counter="<span class=\"red\">";
$counter=$counter.$row['enemyname'];
$counter=$counter." attempts to flee and <b>Almost Succeeds!</b></span><br />";

$counter=$counter."<span class=\"green\">";
$counter=$counter."You Backstab ".$row['enemyname'];
$counter=$counter." and inflict a Critical Hit of <b>".$damage."!</b></span><br />";

}

else
{

$counter=$counter."<span class=\"red\">";
$counter=$counter.$row['enemyname'];
$counter=$counter." attempts to flee and <b>Succeeds!</b></span><br />";

$query = sprintf("update enemy set fight=0 where username='%s';",
mysql_real_escape_string($username));
mysql_query($query);
}
}
}

else
{
  
  $rand=mt_rand(1,150);
$miss=100-$row['enemyaccuracy'];
$miss=$miss+$bcurse;
if ($rand<$miss)
{

$counter=$counter."<span class=\"red\">";
$counter=$counter.$row['enemyname'];
$counter=$counter." counter-attacks and <b>Misses!</b></span><br />";

include ('php/eendturnt.php');

}
else
{


$rand1=mt_rand(1,100);
$rand1=$rand1*.01;
$rand1=$rand1*$agility;

$rand=mt_rand(1,100);
$rand=$rand*.01;
$enemyagility=$row['enemyagility']*$rand;

if ($rand1<$enemyagility)
{
$counter=$counter."<span class=\"red\">";
$counter=$counter.$row['enemyname'];
$counter=$counter." counter-attacks and you <b>Evade!</b></span><br />";
include ('php/eendturnt.php');
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
$rand=$rand-$luck;
if ($holdresist>$rand)
{
$counter=$counter."<span class=\"red\">";
$counter=$counter.$row['enemyname'];
$counter=$counter." attempts to hold you with <b>Spider Webs!</b> <b>You resist!</b></span><br />";
include ('php/eendturnt.php');
}

else
{
$counter=$counter."<span class=\"red\">";
$counter=$counter.$row['enemyname'];
$counter=$counter." attempts to hold you with <b>Spider Webs!</b> You cannot move for <b>1</b> turn and the Spider inflicts <b>5</b> damage!</span><br />";

$query = sprintf("update stats set life=life-5 where username='%s';",
mysql_real_escape_string($username));
mysql_query($query);

$query = sprintf("update stats set held=1 where username='%s';",
mysql_real_escape_string($username));
mysql_query($query);


if ($life-5<0)
{
$counter=$counter."You died!<br /><table class=\"page\"><tr><td class=\"page\"><table class=\"page\"><tr><td class=\"page\"><form action=\"revivet.php?".time()."\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Follow the Light\" /></form></td></tr></table></td></tr></table>";
}

include ('php/countert.php');

}
}



if ($row['enemy']=="spider")
{

$rand=mt_rand(1,100);

if ($holdresist>$rand)
{
$counter=$counter."<span class=\"red\">";
$counter=$counter.$row['enemyname'];
$counter=$counter." attempts to hold you with <b>Spider Webs!</b> <b>You resist!</b></span><br />";
include ('php/eendturnt.php');
}

else
{
$counter=$counter."<span class=\"red\">";
$counter=$counter.$row['enemyname'];
$counter=$counter." attempts to hold you with <b>Spider Webs!</b> You cannot move for <b>1</b> turn and the Spider inflicts <b>5</b> damage!</span><br />";

$query = sprintf("update stats set life=life-5 where username='%s';",
mysql_real_escape_string($username));
mysql_query($query);

$query = sprintf("update stats set held=1 where username='%s';",
mysql_real_escape_string($username));
mysql_query($query);


if ($life-5<0)
{
$counter=$counter."You died!<br /><table class=\"page\"><tr><td class=\"page\"><table class=\"page\"><tr><td class=\"page\"><form action=\"revivet.php?".time()."\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Follow the Light\" /></form></td></tr></table></td></tr></table>";
}

include ('php/countert.php');

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
include ('php/eendturnt.php');
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

include ('php/eendturnt.php');

if ($life-10<0)
{
$counter=$counter."You died!<br /><table class=\"page\"><tr><td class=\"page\"><table class=\"page\"><tr><td class=\"page\"><form action=\"revivet.php?".time()."\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Follow the Light\" /></form></td></tr></table></td></tr></table>";
}
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
include ('php/eendturnt.php');
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

include ('php/eendturnt.php');



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

if ($randblock<$block)
{

$enemydamage=$row['enemyatt2dam'];
$enemydamage=$enemydamage+$row['enemylevel'];
$block=$block*.01;
$block=round($block*$enemydamage);

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

include ('php/eendturnt.php');


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

include ('php/eendturnt.php');


}

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

include ('php/eendturnt.php');


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

include ('php/eendturnt.php');



}


}
}
}
}
}
}
}
}
?>
