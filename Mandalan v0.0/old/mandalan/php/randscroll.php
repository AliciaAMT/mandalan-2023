<?php

$rand=mt_rand(1,2);

if ($rand==1)

{

$spellname="Fireball";
$spellimage="fireball";
$spellnumber4=time();
$query = sprintf("insert into spellbook values(
'%s',
'%s',
'Fireball',
'Launch an explosive ball of fire at your enemy.',
'Scroll',
'Fire',
'fireball',
1,
1,
0,
0,
'None',
0,
1,10

);",
mysql_real_escape_string($username),
mysql_real_escape_string($spellnumber4)
);
mysql_query($query);

}

if ($rand==2)

{
$spellname="First Aid";
$spellimage="redcross";
$spellnumber4=time();
$query = sprintf("insert into spellbook values(
'%s',
'%s',
'First Aid',
'By summoning your inner light you heal minor wounds. While healing is minimal, casting cost is very cheap.',
'Scroll',
'Light',
'redcross',
1,
1,
5,
5,
'None',
0,
0,0

);",
mysql_real_escape_string($username),
mysql_real_escape_string($spellnumber4)
);
mysql_query($query);
}




?>