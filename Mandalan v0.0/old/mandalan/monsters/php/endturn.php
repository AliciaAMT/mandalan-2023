<?php

include ('php/getestats.php');
include ('../php/getstats.php');
include ('php/getlevel.php');
include ('php/getlife.php');

$query = sprintf("select * from counters where username='%s';",mysql_real_escape_string($username));
$result=mysql_query($query);

while($row = mysql_fetch_array($result))
  {
  
  if ($bliferegen>0)
  {
  $bliferegen=round($bliferegen);
  $move="<b>You regenerate ".$bliferegen." life!</b><br />";

$report=$report.$move;
  
  
  $query = sprintf("update stats set life=life+'%s' where username='%s';",
  mysql_real_escape_string($bliferegen),
mysql_real_escape_string($username));
mysql_query($query);

if ($life+$bliferegen>$maxlife)
{
$query = sprintf("update stats set life=maxlife where username='%s';",
mysql_real_escape_string($username));
mysql_query($query);
}
  
  }
  
  
  $rand=mt_rand(1,100);
  if ($bmanadrain>$rand)
  {
  $bmanadrain=round($bmanadrain);
  $query = sprintf("update enemy set mana=0 where username='%s';",
mysql_real_escape_string($username));
mysql_query($query);

$query = sprintf("update stats set mana=mana+'%s' where username='%s';",
mysql_real_escape_string($bmanadrain),
mysql_real_escape_string($username));
mysql_query($query);
  
  $move="<b>You drain your enemy's mana for ".$bmanadrain."!</b><br />";

$report=$report.$move;

$query = sprintf("update enemy set event='%s' where username='%s';",
mysql_real_escape_string($report),
mysql_real_escape_string($username));
mysql_query($query);
  
  }
  
  $rand=mt_rand(1,100);
  if ($bknockback>$rand)
  {
  
  $move="<b>Your enemy is knocked back! You may make another move!</b>";

$report=$report.$move;

$query = sprintf("update enemy set event='%s' where username='%s';",
mysql_real_escape_string($report),
mysql_real_escape_string($username));
mysql_query($query);
  
  }
  else
  {
  
  $rand=mt_rand(1,100);
  if ($bblindness>$rand)
  {
  
  $move="<b>Your enemy is blind! You may make another move!</b>";

$report=$report.$move;

$query = sprintf("update enemy set event='%s' where username='%s';",
mysql_real_escape_string($report),
mysql_real_escape_string($username));
mysql_query($query);
  
  }
  else
  {
  
  
  $rand=mt_rand(1,100);
  if ($bphysdamage>$rand)
  {
  
  $query = sprintf("update enemy set life=life-'%s' where username='%s';",
mysql_real_escape_string($level),
mysql_real_escape_string($username));
mysql_query($query);
  
  $move="<b>You hit your enemy with physical pain for ".$level." damage!</b><br />";

$report=$report.$move;

$query = sprintf("update enemy set event='%s' where username='%s';",
mysql_real_escape_string($report),
mysql_real_escape_string($username));
mysql_query($query);
  
  }
  
  
  $rand=mt_rand(1,100);
  if ($bdisease>$rand)
  {
  
  $query = sprintf("update enemy set life=life-'%s' where username='%s';",
mysql_real_escape_string($bdisease),
mysql_real_escape_string($username));
mysql_query($query);
  
  $move="<b>Your enemy is diseased for ".$bdisease." damage!</b><br />";

$report=$report.$move;

$query = sprintf("update enemy set event='%s' where username='%s';",
mysql_real_escape_string($report),
mysql_real_escape_string($username));
mysql_query($query);
  
  }
  
  
  $rand=mt_rand(1,100);
  if ($bsleep>$rand)
  {
  
  $move="Your enemy is asleep! You may make another move!";

$report=$report.$move;

$query = sprintf("update enemy set event='%s' where username='%s';",
mysql_real_escape_string($report),
mysql_real_escape_string($username));
mysql_query($query);
  
  }
  else
  {
  
  $rand=mt_rand(1,100);
  if ($bacid>$rand)
  {
  
  $query = sprintf("update enemy set life=life-'%s' where username='%s';",
mysql_real_escape_string($level),
mysql_real_escape_string($username));
mysql_query($query);
  
  $move="<b>You burn your enemy with acid for ".$level." damage!</b><br />";

$report=$report.$move;

$query = sprintf("update enemy set event='%s' where username='%s';",
mysql_real_escape_string($report),
mysql_real_escape_string($username));
mysql_query($query);
  
  }
  
  $rand=mt_rand(1,100);
  if ($bweaken>$rand)
  {
  $query = sprintf("update enemy set estrength=0 where username='%s';",
mysql_real_escape_string($username));
mysql_query($query);


$move="<b>You weaken your enemy!</b><br />";

$report=$report.$move;

$query = sprintf("update enemy set event='%s' where username='%s';",
mysql_real_escape_string($report),
mysql_real_escape_string($username));
mysql_query($query);
  }
  
  $rand=mt_rand(1,100);
  if ($bdebility>$rand)
  {
  
  $query = sprintf("update enemy set life=life-'%s' where username='%s';",
mysql_real_escape_string($level),
mysql_real_escape_string($username));
mysql_query($query);
  
  $move="<b>You cast debility on your enemy for ".$level." damage!</b><br />";

$report=$report.$move;

$query = sprintf("update enemy set event='%s' where username='%s';",
mysql_real_escape_string($report),
mysql_real_escape_string($username));
mysql_query($query);
  
  }
  
  if ($row['eheld']>0)
  {
  
  $rand=mt_rand(1,100);
  $resist=100-$eholdresist;
  if ($rand>$resist)
  {
  $move="Your enemy resists being held!";

$report=$report.$move;

include ('php/counter.php');

$report=$report.$counter;

$query = sprintf("update enemy set event='%s' where username='%s';",
mysql_real_escape_string($report),
mysql_real_escape_string($username));
mysql_query($query);
  }
  else
  {
  $move="Your enemy is held! You may make another move!";

$report=$report.$move;

$query = sprintf("update enemy set event='%s' where username='%s';",
mysql_real_escape_string($report),
mysql_real_escape_string($username));
mysql_query($query);
}
  }
  
  else
  {
  if ($row['efrozen']>0)
  {
   $rand=mt_rand(1,100);
  $resist=100-$ewaterresist;
  if ($rand>$resist)
  {
  $move="Your enemy resists being frozen!";

$report=$report.$move;

include ('php/counter.php');

$report=$report.$counter;

$query = sprintf("update enemy set event='%s' where username='%s';",
mysql_real_escape_string($report),
mysql_real_escape_string($username));
mysql_query($query);
  }
  else
  {
  
  $move="Your enemy is frozen! You may make another move!";

$report=$report.$move;

$query = sprintf("update enemy set event='%s' where username='%s';",
mysql_real_escape_string($report),
mysql_real_escape_string($username));
mysql_query($query);
  }
  }
  else
  {
  if ($row['estunned']>0)
  {
  $move="Your enemy is stunned! You may make another move!";

$report=$report.$move;

$query = sprintf("update enemy set event='%s' where username='%s';",
mysql_real_escape_string($report),
mysql_real_escape_string($username));
mysql_query($query);
  }
  else
  {
  if ($row['ebleed']>0)
  {
  
  $rand=mt_rand(1,100);
  $resist=100-$ebleedresist;
  if ($rand>$resist)
  {
  $move="Your enemy resists bleeding!";

$report=$report.$move;

include ('php/counter.php');

$report=$report.$counter;

$query = sprintf("update enemy set event='%s' where username='%s';",
mysql_real_escape_string($report),
mysql_real_escape_string($username));
mysql_query($query);

  }
  else
  {
  
  
  $ebleedamt=mt_rand(1,10);
  
  $query = sprintf("update counters set ebleed=ebleed-1 where username='%s';",
mysql_real_escape_string($username));
mysql_query($query);

$query = sprintf("update enemy set enemylife=enemylife-'%s' where username='%s';",
mysql_real_escape_string($ebleedamt),
mysql_real_escape_string($username));
mysql_query($query);

$report=$report."<span class=\"green\">Your enemy bleeds for <b>".$ebleedamt."</b> damage!</span><br />";

  }
  }
  
  if ($row['einferno']>0)
  {
  
  $rand=mt_rand(1,100);
  $resist=100-$efireresist;
  if ($rand>$resist)
  {
  $move="Your enemy resists inferno!";

$report=$report.$move;

include ('php/counter.php');

$report=$report.$counter;

$query = sprintf("update enemy set event='%s' where username='%s';",
mysql_real_escape_string($report),
mysql_real_escape_string($username));
mysql_query($query);
  }
  else
  {
  
  $eburnamt=mt_rand(1,20);
  
  $query = sprintf("update counters set einferno=einferno-1 where username='%s';",
mysql_real_escape_string($username));
mysql_query($query);

$query = sprintf("update enemy set enemylife=enemylife-'%s' where username='%s';",
mysql_real_escape_string($eburnamt),
mysql_real_escape_string($username));
mysql_query($query);

$report=$report."<span class=\"green\">Your enemy burns for <b>".$eburnamt."</b> damage!</span><br />";

  }
  }
  
   if ($row['epoisoned']>0)
  {
  
  $rand=mt_rand(1,100);
  $resist=100-$eearthresist;
  if ($rand>$resist)
  {
  $move="Your enemy resists poison!";

$report=$report.$move;

include ('php/counter.php');

$report=$report.$counter;

$query = sprintf("update enemy set event='%s' where username='%s';",
mysql_real_escape_string($report),
mysql_real_escape_string($username));
mysql_query($query);
  }
  else
  {
  
  $epoisonedamt=mt_rand(1,30);
  
  $query = sprintf("update counters set epoisoned=epoisoned-1 where username='%s';",
mysql_real_escape_string($username));
mysql_query($query);

$query = sprintf("update enemy set enemylife=enemylife-'%s' where username='%s';",
mysql_real_escape_string($epoisonedamt),
mysql_real_escape_string($username));
mysql_query($query);

$report=$report."<span class=\"green\">Your enemy is poisoned for <b>".$epoisonedamt."</b> damage!</span><br />";

  }
  }
  
  $espeedrand=mt_rand(1,500)+$espeed;
  $speedrand=mt_rand(1,100)+$speed+$luck;
  
  if ($espeedrand<$speedrand)
  { 
$move="You are fast enough for another move!";

$report=$report.$move;

$query = sprintf("update enemy set event='%s' where username='%s';",
mysql_real_escape_string($report),
mysql_real_escape_string($username));
mysql_query($query);

}
else
{

include ('php/counter.php');

$report=$report.$counter;

$query = sprintf("update enemy set event='%s' where username='%s';",
mysql_real_escape_string($report),
mysql_real_escape_string($username));
mysql_query($query);
}
    
  }
  }
  }
  }
}
}
}
?>