<?php
include ('php/connect.php');

include ('php/getcookie.php');

$query = sprintf("select * from stats where username='%s';",mysql_real_escape_string($username));
$result=mysql_query($query);

while($row = mysql_fetch_array($result))
  {
$rand=mt_rand(1,100);
$miss=75-$row['accuracy'];
if ($rand<$miss+1)
{

$report="<span class=\"green\">You attack and <b>Miss!</b></span><br />";

include ('php/counter.php');

$report=$report.$counter;

$query = sprintf("update fightlog set event='%s' where username='%s';",
mysql_real_escape_string($report),
mysql_real_escape_string($username));
mysql_query($query);

}
if ($rand>$miss)
{
include ('php/enemyevade.php');
$rand1=mt_rand(1,100);
if ($rand1<$evade+1)
{
$report="<span class=\"green\">You attack and your enemy <b>Evades!</b></span><br />";

include ('php/counter.php');

$report=$report.$counter;

$query = sprintf("update fightlog set event='%s' where username='%s';",
mysql_real_escape_string($report),
mysql_real_escape_string($username));
mysql_query($query);
}
if ($rand1>$evade)
{
$power=$row['special'];
$chance=mt_rand(1,100);
if ($chance<$power+1)
{
$report="<span class=\"green\">Power hit, needs programmed.<b>Miss!</b></span><br />";

include ('php/counter.php');

$report=$report.$counter;

$query = sprintf("update fightlog set event='%s' where username='%s';",
mysql_real_escape_string($report),
mysql_real_escape_string($username));
mysql_query($query);

}
if ($chance>$power)
{
$critical=$row['critical'];
$hit=mt_rand(1,100);
if ($hit<$critical+1)
{
$damage=$row['lhdamage']+$row['rhdamage']+$row['f1damage']+$row['f2damage']+$row['s1damage']+$row['s2damage'];
$crit=$damage/2;
$damage=$damage+$crit;

$report="<span class=\"green\">You attack and hit with a <b>Critical Hit of ";
$report=$report.$damage;
$report=$report."!</b></span><br />";

include ('php/counter.php');

$report=$report.$counter;

$query = sprintf("update fightlog set event='%s' where username='%s';",
mysql_real_escape_string($report),
mysql_real_escape_string($username));
mysql_query($query);


$query = sprintf("update fightlog set enemylife=enemylife-'%s' where username='%s';",
mysql_real_escape_string($damage),
mysql_real_escape_string($username));
mysql_query($query);

}

if ($hit>$critical)
{
include ('php/enemyblock.php');
$rand3=mt_rand(1,100);
if ($rand3<$block+1)
{
$report="<span class=\"green\">You attack and your enemy <b>Blocks!</b></span><br />";

include ('php/counter.php');

$report=$report.$counter;

$query = sprintf("update fightlog set event='%s' where username='%s';",
mysql_real_escape_string($report),
mysql_real_escape_string($username));
mysql_query($query);
}
if ($rand3>$block)
{
$damage=$row['lhdamage']+$row['rhdamage']+$row['f1damage']+$row['f2damage']+$row['s1damage']+$row['s2damage'];
$amount=mt_rand(1,100);

include ('php/enemydeflect.php');

$report="<span class=\"green\">You attack and hit for <b>";
$report=$report.$amount;
$report=$report." </b>Damage! <b>";
$report=$report.$deflect;
$report=$report." </b>Damage is Deflected!</b></span><br />";

include ('php/counter.php');

$report=$report.$counter;

$query = sprintf("update fightlog set event='%s' where username='%s';",
mysql_real_escape_string($report),
mysql_real_escape_string($username));
mysql_query($query);

$query = sprintf("update fightlog set enemylife=enemylife-'%s' where username='%s';",
mysql_real_escape_string($amount),
mysql_real_escape_string($username));
mysql_query($query);
}
}
}
}
}
}
?>
