<?php

include ('../php/getstats.php');
include ('php/getdamage.php');
include ('php/getskills.php');

$query = sprintf("select * from stats where username='%s';",mysql_real_escape_string($username));
$result=mysql_query($query);

while($row = mysql_fetch_array($result))
  {
  $strength=$row['strength']+$bstrength;
  $accuracy=$row['accuracy']+$baccuracy+$saccuracy;
  $speed=$row['speed']+$bspeed;
  $agility=$row['agility']+$bagility;
  $wisdom=$row['wisdom']+$bwisdom;
  $luck=$row['luck']+$bluck;  
  $defense=$barmorbase+$bdefense;
  $damage=$damage+$bdamage;
  $fireresist=$row['fireresist']+$sfireresist+$bfireresist;
  $waterresist=$row['waterresist']+$swaterresist+$bwaterresist;
  $earthresist=$row['earthresist']+$searthresist+$bearthresist;
  $airresist=$row['airresist']+$sairresist+$bairresist;
  $darkresist=$row['darkresist']+$sdarkresist+$bdarkresist;
  $lightresist=$row['lightresist']+$slightresist+$blightresist;
  $mindresist=$row['mindresist']+$bmindresist;
  $holdresist=$row['holdresist']+$bholdresist;
  $bleedresist=$row['bleedresist']+$bbleedresist;
  $criticalresist=$row['criticalresist']+$bcriticalresist;
  $life=$row['life']+$blife;
  $block=$strength+$speed+$sblock;
  $block=$block/2;
  $level=$row['level'];
 
  }
  
  ?>