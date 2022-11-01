<?php
$baccuracy=0;
$bdefense=0;
$bdamage=0;
$bcritical=0;
$blife=0;
$bmana=0;
$bmaxlife=0;
$bmaxmana=0;
$bspeed=0;
$bstrength=0;
$bagility=0;
$bwisdom=0;
$bluck=0;
$bfireresist=0;
$biceresist=0;
$blightningresist=0;
$bearthresist=0;
$bpoisonresist=0;
$bimmobilizeresist=0;
$bdarkresist=0;
$bmindresist=0;
$bcriticalresist=0;
$bbleedresist=0;
$bmagicfind=0;
$blockpicking=0;
$bcooking=0;
$balchemy=0;
$benchanting=0;
$bholdresist=0;

$query=sprintf("select * from inventory where username='%s';",mysql_real_escape_string($username));
$result = mysql_query($query);
while($row = mysql_fetch_array($result))
	{
	if ($row['equip']>0)
	{
	$baccuracy=$baccuracy+$row['acccuracy'];
	$blife=$blife+$row['life'];
	$bmaxlife=$bmaxlife+$row['maxlife'];
	$bmana=$bmana+$row['mana'];
	$bmaxmana=$bmaxmana+$row['maxmana'];
	$bcritical=$bcritical+$row['criticalhit'];
	$bspeed=$bspeed+$row['speed'];
	$bstrength=$bstrength+$row['strength'];
	$bagility=$bagility+$row['agility'];
	$bwisdom=$bwisdom+$row['wisdom'];
	$bluck=$bluck+$row['luck'];
	$bfireresist=$bfireresist+$row['fireresist'];
	$biceresist=$biceresist+$row['iceresist'];
	$blightningresist=$blightningresist+$row['lightningresist'];
	$bearthresist=$bearthresist+$row['earthresist'];
	$bbleedresist=$bbleedresist+$row['bleedresist'];
	$bcriticalresist=$bcriticalresist+$row['criticalresist'];
	$bimmobilizeresist=$bimmobilizeresist+$row['immobilizeresist'];
	$bpoisonresist=$bpoisonresist+$row['poisonresist'];
	$bmindresist=$bmindresist+$row['mindresist'];
	$bdarkresist=$bdarkresist+$row['darkresist'];
	$bmagicfind=$bmagicfind+$row['magicfind'];
	$blockpicking=$blockpicking+$row['lockpicking'];	
	$bcooking=$bcooking+$row['cooking'];
	
	$balchemy=$balchemy+$row['alchemy'];
	
	$benchanting=$benchanting+$row['enchanting'];
$bholdresist=$bholdresist+$row['holdresist'];


	}
	}
?>