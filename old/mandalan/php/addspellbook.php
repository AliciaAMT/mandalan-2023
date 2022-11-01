<?php

$name=strip_tags($_POST["name"]);
$password=strip_tags($_POST["password"]);
$portrait=strip_tags($_POST["portrait"]);
$race=strip_tags($_POST["race"]);
$mclass=strip_tags($_POST["class"]);
$gender=strip_tags($_POST["gender"]);

if ($mclass=="Shaman")
{
$spellnumber2=time()-2;
$query = sprintf("insert into spellbook values(
'%s',
'%s',
'Holy Water',
'By chanting a ritual blessing you can transform regular boiling water into Holy Water, a key base for many other Potions.',
'Potion',
'Blessing',
'holywater',
1,
1,
0,
75,
'Water<br />Bottle<br />Fire',
75,
0,0

);",
mysql_real_escape_string($name),
mysql_real_escape_string($spellnumber2)
);
mysql_query($query);



$spellnumber6=time()-6;
$query = sprintf("insert into spellbook values(
'%s',
'%s',
'Soothing Aloe',
'You summon the healing power of aloe to alleviate your minor wounds.',
'Elemental',
'Earth',
'aloe',
1,
1,
5,
10,
'none',
0,
0,0

);",
mysql_real_escape_string($name),
mysql_real_escape_string($spellnumber6)
);
mysql_query($query);
}



else
{
$spellnumber6=time()-6;
$query = sprintf("insert into spellbook values(
'%s',
'%s',
'Soothing Aloe',
'You summon the healing power of aloe to alleviate your minor wounds.',
'Elemental',
'Earth',
'aloe',
1,
0,
5,
10,
'none',
0,
0,0

);",
mysql_real_escape_string($name),
mysql_real_escape_string($spellnumber6)
);
mysql_query($query, $con);


$spellnumber2=time()-2;
$query = sprintf("insert into spellbook values(
'%s',
'%s',
'Holy Water',
'By chanting a ritual blessing you can transform regular boiling water into Holy Water, a key base for many other Potions.',
'Potion',
'Blessing',
'holywater',
1,
0,
0,
75,
'Water<br />Bottle<br />Fire',
75,
0,0

);",
mysql_real_escape_string($name),
mysql_real_escape_string($spellnumber2)
);
mysql_query($query, $con);
}



if ($mclass=="Mystic")
{

$spellnumber8=time()-8;
$query = sprintf("insert into spellbook values(
'%s',
'%s',
'Fireball',
'Launch an explosive ball of fire at your enemy.',
'Elemental',
'Fire',
'fireball',
1,
1,
10,
0,
'None',
0,
1,15

);",
mysql_real_escape_string($name),
mysql_real_escape_string($spellnumber8)
);
mysql_query($query);



$spellnumber3=time()-3;
$query1 = sprintf("insert into spellbook values(
'%s',
'%s',
'Sparking Embers',
'This enchantment causes weapons to emit sparks of fire upon striking a target, causing extra damage. Enchanted armor has a chance to emit sparks upon being struck by the enemy.',
'Enchantment',
'Fire',
'fire',
1,
1,
5,
0,
'None',
0,
0,0

);",
mysql_real_escape_string($name),
mysql_real_escape_string($spellnumber3)
);
mysql_query($query1);


$spellnumber5=time()-5;
$query = sprintf("insert into spellbook values(
'%s',
'%s',
'Burning Steam',
'You shoot pillars of burning steam from your hands toward your enemies.',
'Elemental',
'Water',
'steam',
1,
1,
5,
0,
'none',
0,
1,6
);",
mysql_real_escape_string($name),
mysql_real_escape_string($spellnumber5)
);
mysql_query($query);
}
else
{
$spellnumber3=time()-3;
$query = sprintf("insert into spellbook values(
'%s',
'%s',
'Sparking Embers',
'This enchantment causes weapons to emit sparks of fire upon striking a target, causing extra damage. Enchanted armor has a chance to emit sparks upon being struck by the enemy.',
'Enchantment',
'Fire',
'fire',
1,
0,
25,
0,
'None',
0,
0,0
);",
mysql_real_escape_string($name),
mysql_real_escape_string($spellnumber3)
);
mysql_query($query);

$spellnumber5=time()-5;
$query = sprintf("insert into spellbook values(
'%s',
'%s',
'Burning Steam',
'You shoot out jets of burning steam from your hands toward your enemies.',
'Elemental',
'Water',
'steam',
1,
0,
5,
0,
'none',
0,
1,8
);",
mysql_real_escape_string($name),
mysql_real_escape_string($spellnumber5)
);
mysql_query($query);
}
if ($mclass=="Rogue")
{
$spellnumber4=time()-4;
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
1,15

);",
mysql_real_escape_string($name),
mysql_real_escape_string($spellnumber4)
);
mysql_query($query);
}
else
{

$spellnumber4=time()-4;
$query = sprintf("insert into spellbook values(
'%s',
'%s',
'Fireball',
'Launch an explosive ball of fire at your enemy.',
'Scroll',
'Fire',
'fireball',
1,
0,
0,
0,
'None',
0,
1,15

);",
mysql_real_escape_string($name),
mysql_real_escape_string($spellnumber4)
);
mysql_query($query);

}


$spellnumber=time();
$query = sprintf("insert into spellbook values(
'%s',
'%s',
'First Aid',
'By summoning your inner light you heal minor wounds. While healing is minimal, casting cost is very cheap.',
'Elemental',
'Light',
'redcross',
1,
0,
10,
15,
'none',
0,
0,0

);",
mysql_real_escape_string($name),
mysql_real_escape_string($spellnumber)
);

$spellnumber8=time()-8;
$query = sprintf("insert into spellbook values(
'%s',
'%s',
'Fireball',
'Launch an explosive ball of fire at your enemy.',
'Elemental',
'Fire',
'fireball',
1,
0,
10,
0,
'None',
0,
1,15

);",
mysql_real_escape_string($name),
mysql_real_escape_string($spellnumber8)
);
mysql_query($query);


 ?>