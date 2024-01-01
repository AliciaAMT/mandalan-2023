<?php

include ('../php/getstats.php');
include ('php/getsmoke.php');
include ('php/getburn.php');
include ('../monsters/php/getskills.php');

$spell=$_POST["type"];
$query=sprintf("select * from stats where username='%s';",mysql_real_escape_string($username));
$result=mysql_query($query);
while($row = mysql_fetch_array($result))
{

//############################
if ($spell=='First Aid 1')

{

if ($row['mana']<5)

{

//not enough mana message

echo "<table class=\"page\"><tr><td class=\"center\"><h3>Not Enough Mana</h3>You need more mana before you can cast this spell. Resting is a way to regenerate mana.</td></tr><tr><td class=\"page\"><table class=\"page\"><tr><td class=\"page\">";

if ($row['fight']==1)

{echo "<form action=\"../monsters/cast.php?";
//write different script for healing/counter attack code

echo time();

echo "\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Back to Battle\" /></form>";}

if ($row['fight']==0)

{

echo "<form action=\"elementals.php?";

echo time();

echo "\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Back to Spellbook\" /></form></td></tr><tr><td class=\"page\">";

echo "<form action=\"../maingraphics.php?";

echo time();

echo "\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Back to Map\" /></form>";

}

echo "</td></tr></table></td></tr></table>";

}

else

{

$life=5;

$bonus=$row['wisdom']/10;

$bonus=$bonus+$row['level'];

$life=$life+$bonus;

$life=round($life);

$mana=$row['mana']-5;

$clife=$row['life'];
$clife=$clife+$blife;
$cmaxlife=$row['maxlife'];
$cmaxlife=$cmaxlife+$blife;

if ($cmaxlife<$clife+$life)

{

$query=sprintf("update stats set life=maxlife where username='%s';",mysql_real_escape_string($username));

mysql_query($query);

$newlife=$row['maxlife']+$blife;

}

else

{

$newlife=$row['life']+$life+$blife;

$query=sprintf("update stats set life=life+'%s' where username='%s';", mysql_real_escape_string($life), mysql_real_escape_string($username));


mysql_query($query);

$newlife=$row['life']+$life+$blife;

}

$query=sprintf("update stats set mana=mana-5 where username='%s';",mysql_real_escape_string($username));


mysql_query($query);


echo "<table class=\"page\"><tr><td class=\"center\"><h2>".$spell."</h2><img src=\"../images/redcross.png\" /><br />You cast ".$spell." and heal ".$life." life.</td></tr><tr><td class=\"center\">Life: ".$newlife."/".$cmaxlife."</td></tr><tr><td class=\"center\">Mana: ".$mana."/".$row['maxmana']."</td></tr><tr><td class=\"center\"><table class=\"page\"><tr><td class=\"page\">";


if ($row['fight']==1)


{echo "<form action=\"../monsters/cast.php?";
//write different script for healing/counter attack code


echo time();


echo "\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Back to Battle\" /></form>";}


if ($row['fight']==0)


{


echo "<form action=\"elementals.php?";


echo time();


echo "\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Back to Spellbook\" /></form></td></tr><tr><td class=\"page\">";


echo "<form action=\"../maingraphics.php?";


echo time();

echo "\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Back to Map\" /></form>";

}

echo "</td></tr></table></td></tr></table>";

}

}

//############################
if ($spell=='Soothing Aloe 1')

{

if ($row['mana']<5)

{

//not enough mana message

echo "<table class=\"page\"><tr><td class=\"center\"><h3>Not Enough Mana</h3>You need more mana before you can cast this spell. Resting is a way to regenerate mana.</td></tr><tr><td class=\"page\"><table class=\"page\"><tr><td class=\"page\">";

if ($row['fight']==1)

{echo "<form action=\"../monsters/cast.php?";
//write different script for healing/counter attack code

echo time();

echo "\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Back to Battle\" /></form>";}

if ($row['fight']==0)

{

echo "<form action=\"elementals.php?";

echo time();

echo "\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Back to Spellbook\" /></form></td></tr><tr><td class=\"page\">";

echo "<form action=\"../maingraphics.php?";

echo time();

echo "\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Back to Map\" /></form>";

}

echo "</td></tr></table></td></tr></table>";

}

else

{

$life=5;

$bonus=$row['wisdom']/10;

$bonus=$bonus+$row['level'];

$life=$life+$bonus;

$life=round($life);

$mana=$row['mana']-5;

$clife=$row['life'];
$clife=$clife+$blife;
$cmaxlife=$row['maxlife'];
$cmaxlife=$cmaxlife+$blife;

if ($cmaxlife<$clife+$life)

{

$query=sprintf("update stats set life=maxlife where username='%s';",mysql_real_escape_string($username));

mysql_query($query);

$newlife=$row['maxlife']+$blife;

}

else

{

$newlife=$row['life']+$life+$blife;

$query=sprintf("update stats set life=life+'%s' where username='%s';", mysql_real_escape_string($life), mysql_real_escape_string($username));


mysql_query($query);

$newlife=$row['life']+$life+$blife;

}

$query=sprintf("update stats set mana=mana-5 where username='%s';",mysql_real_escape_string($username));


mysql_query($query);


echo "<table class=\"page\"><tr><td class=\"center\"><h2>".$spell."</h2><img src=\"../images/aloe.png\" /><br />You cast ".$spell." and heal ".$life." life.</td></tr><tr><td class=\"center\">Life: ".$newlife."/".$cmaxlife."</td></tr><tr><td class=\"center\">Mana: ".$mana."/".$row['maxmana']."</td></tr><tr><td class=\"center\"><table class=\"page\"><tr><td class=\"page\">";


if ($row['fight']==1)


{echo "<form action=\"../monsters/cast.php?";
//write different script for healing/counter attack code


echo time();


echo "\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Back to Battle\" /></form>";}


if ($row['fight']==0)


{


echo "<form action=\"elementals.php?";


echo time();


echo "\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Back to Spellbook\" /></form></td></tr><tr><td class=\"page\">";


echo "<form action=\"../maingraphics.php?";


echo time();

echo "\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Back to Map\" /></form>";

}

echo "</td></tr></table></td></tr></table>";

}

}

//#################################
if ($spell=="Fireball 1")

{

$damage=$damage+0;

$mana=$row['mana']+$bmana;


if ($mana<10)

{

die ("<table class=\"page\"><tr><td class=\"center\"><h3>Not Enough Mana</h3>You need more mana before you can cast this spell. Resting is a way to regenerate mana.</td></tr><tr><td class=\"page\">

<table class=\"page\"><tr><td class=\"page\"><form action=\"../monsters/nomove.php?".time()."\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Back\" /></form></td></tr></table>


</td></tr></table></body></html>");

}

else

{

$critical=$sfcritical;
$rand=mt_rand(1,100);
$rand=$rand*.01;
$critical=$critical*$rand;
$critical=round($critical);

$chance=mt_rand(1,100);

if ($critical>$chance)
{

$damage=$damage+mt_rand(1,10);

$bonus=$row['wisdom']/10;

$bonus=$bonus+$row['level'];

$damage=$damage+$bonus;

$damage=round($damage)*2;

//insert account for enemy fire resist############******************




$query=sprintf("update enemy set enemylife=enemylife-'%s' where username='%s';", mysql_real_escape_string($damage), mysql_real_escape_string($username));


mysql_query($query);

$query=sprintf("update stats set mana=mana-10 where username='%s';",mysql_real_escape_string($username));

mysql_query($query);



echo "<table class=\"page\"><tr><td class=\"center\"><h2>".$spell."</h2><img src=\"../images/fireball.png\" /><br />You cast ".$spell." and inflict a <b>Critical Hit</b> of <b>".$damage."</b> damage.</td></tr><tr><td class=\"center\"><table class=\"page\"><tr><td class=\"page\">";



echo "<form action=\"../monsters/cast.php?";
//write different script for healing/counter attack code


echo time();


echo "\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Back to Battle\" /></form>";


}

else

{

//insert fire skill attributes###########################################################################
$enemyburn=$sfinferno;

$rand=mt_rand(1,100);
$rand=$rand*.01;
$enemyburn=$enemyburn*$rand;
$enemyburn=round($enemyburn);

$chance=mt_rand(1,100);

if ($enemyburn>$chance)
{

$query = sprintf("update enemy set infernocount=infernocount+3 where username='%s';",
mysql_real_escape_string($username));
mysql_query($query);

$query = sprintf("update enemy set enemylife=enemylife-'%s' where username='%s';",
mysql_real_escape_string($eburnamt),
mysql_real_escape_string($username));
mysql_query($query);

$report=$report."<span class=\"green\">You cast inferno on your enemy and he burns for <b>".$eburnamt."</b> damage for 3 rounds!</span><br />";

}

//#############################################################smokescreen
$smoke=$sfsmoke;
$rand=mt_rand(1,100);
$rand=$rand*.01;
$smoke=$smoke*$rand;
$smoke=round($smoke);

$chance=mt_rand(1,100);

if ($smoke>$chance)
{

$query = sprintf("update enemy set enemyaccuracy=enemyaccuracy-'%s' where username='%s';",
mysql_real_escape_string($smokeamt),
mysql_real_escape_string($username));
mysql_query($query);

$report=$report."<span class=\"green\">You cast Smokescreen on your enemy and he is blinded by smoke!</span><br />";

}

//smokescreen/-accuracy and inferno-counted burning

$damage=$damage+mt_rand(1,10);

$bonus=$row['wisdom']/10;

$bonus=$bonus+$row['level'];

$damage=$damage+$bonus;

$damage=round($damage);

//insert account for enemy fire resist############******************




$query=sprintf("update enemy set enemylife=enemylife-'%s' where username='%s';", mysql_real_escape_string($damage), mysql_real_escape_string($username));


mysql_query($query);

$query=sprintf("update stats set mana=mana-10 where username='%s';",mysql_real_escape_string($username));

mysql_query($query);



echo "<table class=\"page\"><tr><td class=\"center\"><h2>".$spell."</h2><img src=\"../images/fireball.png\" /><br />You cast ".$spell." and inflict ".$damage." damage.</td></tr><tr><td class=\"center\"><table class=\"page\"><tr><td class=\"page\">";


echo "<form action=\"../monsters/cast.php?";
//write different script for healing/counter attack code


echo time();


echo "\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Back to Battle\" /></form>";


echo "</td></tr></table></td></tr></table>";


}
}
}
//#################################
if ($spell=="Burning Steam 1")

{

$damage=$damage+0;

$mana=$row['mana']+$bmana;


if ($mana<5)

{

die ("<table class=\"page\"><tr><td class=\"center\"><h3>Not Enough Mana</h3>You need more mana before you can cast this spell. Resting is a way to regenerate mana.</td></tr><tr><td class=\"page\">

<table class=\"page\"><tr><td class=\"page\"><form action=\"../monsters/nomove.php?".time()."\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Back\" /></form></td></tr></table>


</td></tr></table></body></html>");

}


else

{

$dryice=$sdryice;
$rand=mt_rand(1,100);
$rand=$rand*.01;
$dryice=$dryice*$rand;
$dryice=round($dryice);

$chance=mt_rand(1,100);

if ($dryice>$chance)
{

$damage=$damage+mt_rand(1,10);

$bonus=$row['wisdom']/10;

$bonus=$bonus+$row['level'];

$damage=$damage+$bonus;

$damage=round($damage)*2;

//insert account for enemy water resist############******************




$query=sprintf("update enemy set enemylife=enemylife-'%s' where username='%s';", mysql_real_escape_string($damage), mysql_real_escape_string($username));


mysql_query($query);

$query=sprintf("update stats set mana=mana-5 where username='%s';",mysql_real_escape_string($username));

mysql_query($query);



echo "<table class=\"page\"><tr><td class=\"center\"><h2>".$spell."</h2><img src=\"../images/steam.png\" /><br />You freeze your enemy with <b>Dry Ice</b> and shatter your enemy inflicting a <b>Critical Hit</b> of <b>".$damage."</b> damage.</td></tr><tr><td class=\"center\"><table class=\"page\"><tr><td class=\"page\">";


echo "<form action=\"../monsters/cast.php?";
//write different script for healing/counter attack code


echo time();


echo "\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Back to Battle\" /></form>";


}


else

{

$critical=$swcritical;
$rand=mt_rand(1,100);
$rand=$rand*.01;
$critical=$critical*$rand;
$critical=round($critical);

$chance=mt_rand(1,100);

if ($critical>$chance)
{

$damage=$damage+mt_rand(1,10);

$bonus=$row['wisdom']/10;

$bonus=$bonus+$row['level'];

$damage=$damage+$bonus;

$damage=round($damage)*2;

//insert account for enemy water resist############******************




$query=sprintf("update enemy set enemylife=enemylife-'%s' where username='%s';", mysql_real_escape_string($damage), mysql_real_escape_string($username));


mysql_query($query);

$query=sprintf("update stats set mana=mana-5 where username='%s';",mysql_real_escape_string($username));

mysql_query($query);



echo "<table class=\"page\"><tr><td class=\"center\"><h2>".$spell."</h2><img src=\"../images/steam.png\" /><br />You cast ".$spell." and inflict a <b>Critical Hit</b> of <b>".$damage."</b> damage.</td></tr><tr><td class=\"center\"><table class=\"page\"><tr><td class=\"page\">";


echo "<form action=\"../monsters/cast.php?";
//write different script for healing/counter attack code


echo time();


echo "\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Back to Battle\" /></form>";


}

else

{

$damage=$damage+mt_rand(1,6);

$bonus=$row['wisdom']/10;

$bonus=$bonus+$row['level'];

$damage=$damage+$bonus;

$damage=round($damage);

//insert account for enemy water resist############******************




$query=sprintf("update enemy set enemylife=enemylife-'%s' where username='%s';", mysql_real_escape_string($damage), mysql_real_escape_string($username));


mysql_query($query);

$query=sprintf("update stats set mana=mana-5 where username='%s';",mysql_real_escape_string($username));

mysql_query($query);



echo "<table class=\"page\"><tr><td class=\"center\"><h2>".$spell."</h2><img src=\"../images/steam.png\" /><br />You cast ".$spell." and inflict ".$damage." damage.</td></tr><tr><td class=\"center\"><table class=\"page\"><tr><td class=\"page\">";


echo "<form action=\"../monsters/cast.php?";
//write different script for healing/counter attack code


echo time();


echo "\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Back to Battle\" /></form>";


echo "</td></tr></table></td></tr></table>";


}
}
}
}

}

?>