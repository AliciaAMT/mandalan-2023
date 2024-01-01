<?php

include ('php/getestat.php');
include ('php/getskills.php');

$backstab=0;

$query = sprintf("select * from stats where username='%s';",mysql_real_escape_string($username));
$result=mysql_query($query);

while($row = mysql_fetch_array($result))
  {
  $evade=$row['speed']+$row['agility'];
$evede=$evade/2;
  
  //***block***
  
  $block=$row['agility']+$row['strength'];
$block=$block+$bstrength+$bagility;
$block=$block/2;


//*******************************************************
$block=$block+$sblock;
//*********************************************************

if ($lhweapontype==$rhweapontype)
{
$bonus=$block/2;
$block=$block+$bonus;
}
  
  //***end block***
  
  $deflect=$row['level']+$bdefense+$barmor;
  
  $defense=$row['level']+$bdefense+$barmor;
  
  $life=$row['life'];
  $life=$life+$blife;
  
  $level=$row['level'];
  
  $earthresist=$row['earthresist'];
//*****************************************************
$earthresist=$earthresist+$searthresist;
//****************************************************

  $earthresist=$earthresist+$bearthresist;
  
  $backstab=$backstab+$sbackstab;
	
  $strength=$strength+$row['strength'];
  
  $agility=$row['agility'];
  $agility=$agility+$bagility;
  //************************************************************
  $enemyspeed=$enemyspeed+$senemyspeed;
  //**********************************************************
  $enemyspeed=$enemyspeed+$benemyspeed;
  $enemyspeed=$enemyspeed-$bslow;
  
  $criticalresist=$row['criticalresist'];
  $criticalresist=$criticalresist+$bcriticalresist;
  
  $holdresist=$row['holdresist'];
  $holdresist=$holdresist+$bholdresist;
    
  
  }
  
  ?>