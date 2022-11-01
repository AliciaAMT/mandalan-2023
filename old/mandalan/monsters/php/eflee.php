<?php

$enemyevade=$enemyspeed+$row['enemyagility'];
$enemyevade=$enemyevade/2;
$rande=mt_rand(1,100);
$randee=$rande*.01;
$randee=$randee*$enemyevade;
$randee=round($randee);

$randy=mt_rand(1,100);
$randey=$randy*.01;
$randey=$randey*$evade;
$randey=round($randey);

if ($randee<$randey)
{
$counter=$counter."<span class=\"red\">";
$counter=$counter.$row['enemyname'];
$counter=$counter." attempts to flee and <b>Fails!</b></span><br />";

//add backstab chance according to skill/weapon equipped
$rand=mt_rand(1,100);
$rand=$rand*.01;
$backstab=$rand*$backstab;
$backstab=round($backstab);

$chance=mt_rand(1,100);

if ($backstab>$chance)
{
//backstab
//get critical hit
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

$query = sprintf("update stats set enemylife=enemylife-'%s' where username='%s';",
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

//add backstab chance

//backstab############################

$rand=mt_rand(1,100);
$rand=$rand*.01;
$backstab=$rand*$backstab;
$backstab=round($backstab);

$chance=mt_rand(1,100);

if ($backstab>$chance)
{
//backstab
$strongbonus=$strength;
$strongbonus=$strongbonus*.01;
$strongbonus=$damage*$strongbonus;
$damage=$damage+$strongbonus;
$levelbonus=$level;
$damage=$damage+$levelbonus;
$crit=$damage/2;
$damage=$damage+$crit;
$damage=round($damage);

$query = sprintf("update stats set enemylife=enemylife-'%s' where username='%s';",
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





//###########



else
{


$counter=$counter."<span class=\"red\">";
$counter=$counter.$row['enemyname'];
$counter=$counter." attempts to flee and <b>Succeeds!</b></span><br />";

$query = sprintf("update stats set fight=0 where username='%s';",
mysql_real_escape_string($username));
mysql_query($query);
}
}

?>