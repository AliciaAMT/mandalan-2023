<?php

$type=strip_tags($_POST["type"]);

if (!$type)
{

echo "<table class=\"page\" width=\"100%\">";

$query = sprintf("select * from flags where username='%s';",mysql_real_escape_string($username));

$result=mysql_query($query);

while($row = mysql_fetch_array($result))

  {

  if ($row['quest4']==1)
{
echo "<tr><td class=\"border\">The Family Crest</td><td class=\"borderl\">You found the family crest. You should talk to your father about it.</td></tr>";
}
else
{

  if ($row['quest1']==0)

  {

  echo "<tr><td class=\"border\">The Apprentice</td><td class=\"borderl\">Your new father wants to talk to you.</td></tr>";

  }

   if ($row['quest1']==2)

  {

  echo "<tr><td class=\"border\">The Apprentice</td><td class=\"borderl\">You have decided to travel north to be an apprentice to Solias the mystic. Perhaps he can explain how you came to be in this strange world.";

  echo "You are to show Solias's letter to gain entrance to the House of Elders where Solias resides. ";

  echo "Your father warned you to gather supplies at home before you venture out on the treacherous roads.</td></tr>";

  }

   if ($row['quest1']==1)

  {

  echo "<tr><td class=\"border\">The Apprentice</td><td class=\"borderl\">Your new father wishes your to travel north and to visit Solias the mystic, but you refused. ";

  echo "Your father hopes that you will reconsider.</td></tr>";

  }

  if ($row['quest2']==1)

  {

  echo "<tr><td class=\"border\">The Hidden Key</td><td class=\"borderl\">You found a small rusted key hidden under your bedroom rug. Now if you could only find your locked box. You have a vague memory that you locked something valuable in it, but you do not remember where you hid the box.</td></tr>";

  }

  if ($row['quest2']==2)

  {

  echo "<tr><td class=\"border\">The Hidden Key</td><td class=\"borderl\">You found a small locked box under your bed in your bedroom, but you only have a vague memory of where you hid the key.</td></tr>";

  }

if ($row['quest2']==3)

  {

  echo "<tr><td class=\"border\">The Hidden Key</td><td class=\"borderl\">You found the key and the locked box. Now you can look in your inventory and unlock the box to get your prized possession.</td></tr>";

  }

  if ($row['shepfeed']>0)
{

if ($row['shepfeed']==1)
{

echo "<tr><td class=\"border\">Hungry Dog</td><td class=\"borderl\">You fed Old Shep, and he appears to be happy to see you now. Perhaps now he will let you look in his dog house.</td></tr>";
}

if ($row['shepfeed']==2)
{
echo "<tr><td class=\"border\">The Lost Key</td><td class=\"borderl\">You found an old key in Shep the dog's house. Maybe you should talk to your father about it.</td></tr>";
}

}

}

}

echo "</table>";
}

if ($type=="Main Quests")
{

echo "<table class=\"page\" width=\"100%\">";

$query = sprintf("select * from flags where username='%s';",mysql_real_escape_string($username));

$result=mysql_query($query);

while($row = mysql_fetch_array($result))

  {
    if ($row['quest4']==1)
{
echo "<tr><td class=\"border\">The Family Crest</td><td class=\"borderl\">You found the family crest. You should talk to your father about it.</td></tr>";
}
else
{

  if ($row['quest1']==0)

  {

  echo "<tr><td class=\"border\">The Apprentice</td><td class=\"borderl\">Your new father wants to talk to you.</td></tr>";

  }

   if ($row['quest1']==2)

  {

  echo "<tr><td class=\"border\">The Apprentice</td><td class=\"borderl\">You have decided to travel north to be an apprentice to Solias the mystic. Perhaps he can explain how you came to be in this strange world.";

  echo "You are to show Solias's letter to gain entrance to the House of Elders where Solias resides. ";

  echo "Your father warned you to gather supplies at home before you venture out on the treacherous roads.</td></tr>";

  }

   if ($row['quest1']==1)

  {

  echo "<tr><td class=\"border\">The Apprentice</td><td class=\"borderl\">Your new father wishes your to travel north and to visit Solias the mystic, but you refused. ";

  echo "Your father hopes that you will reconsider.</td></tr>";

  }

}

}

echo "</table>";
 
} 
if ($type=="Side Quests")
{  
  
echo "<table class=\"page\" width=\"100%\">";

$query = sprintf("select * from flags where username='%s';",mysql_real_escape_string($username));

$result=mysql_query($query);

while($row = mysql_fetch_array($result))

  {
if ($row['quest2']==1)

  {

  echo "<tr><td class=\"border\">The Hidden Key</td><td class=\"borderl\">You found a small rusted key hidden under your bedroom rug. Now if you could only find your locked box. You have a vague memory that you locked something valuable in it, but you do not remember where you hid the box.</td></tr>";

  }

  if ($row['quest2']==2)

  {

  echo "<tr><td class=\"border\">The Hidden Key</td><td class=\"borderl\">You found a small locked box under your bed in your bedroom, but you only have a vague memory of where you hid the key.</td></tr>";

  }

if ($row['quest2']==3)

  {

  echo "<tr><td class=\"border\">The Hidden Key</td><td class=\"borderl\">You found the key and the locked box. Now you can look in your inventory and unlock the box to get your prized possession.</td></tr>";

  }

  if ($row['shepfeed']>0)
{

if ($row['shepfeed']==1)
{

echo "<tr><td class=\"border\">Hungry Dog</td><td class=\"borderl\">You fed Old Shep, and he appears to be happy to see you now. Perhaps now he will let you look in his dog house.</td></tr>";
}

if ($row['shepfeed']==2)
{
echo "<tr><td class=\"border\">The Lost Key</td><td class=\"borderl\">You found an old key in Shep the dog's house. Maybe you should talk to your father about it.</td></tr>";
}

}

}

echo "</table>";

}

if ($type=="All Quests")
{
echo "<table class=\"page\" width=\"100%\">";

$query = sprintf("select * from flags where username='%s';",mysql_real_escape_string($username));

$result=mysql_query($query);

while($row = mysql_fetch_array($result))

  {
  
  if ($row['quest4']==1)
{
echo "<tr><td class=\"border\">The Family Crest</td><td class=\"borderl\">You found the family crest. You should talk to your father about it.</td></tr>";
}
else
{

  if ($row['quest1']==0)

  {

  echo "<tr><td class=\"border\">The Apprentice</td><td class=\"borderl\">Your new father wants to talk to you.</td></tr>";

  }

   if ($row['quest1']==2)

  {

  echo "<tr><td class=\"border\">The Apprentice</td><td class=\"borderl\">You have decided to travel north to be an apprentice to Solias the mystic. Perhaps he can explain how you came to be in this strange world.";

  echo "You are to show Solias's letter to gain entrance to the House of Elders where Solias resides. ";

  echo "Your father warned you to gather supplies at home before you venture out on the treacherous roads.</td></tr>";

  }

   if ($row['quest1']==1)

  {

  echo "<tr><td class=\"border\">The Apprentice</td><td class=\"borderl\">Your new father wishes your to travel north and to visit Solias the mystic, but you refused. ";

  echo "Your father hopes that you will reconsider.</td></tr>";

  }

  if ($row['quest2']==1)

  {

  echo "<tr><td class=\"border\">The Hidden Key</td><td class=\"borderl\">You found a small rusted key hidden under your bedroom rug. Now if you could only find your locked box. You have a vague memory that you locked something valuable in it, but you do not remember where you hid the box.</td></tr>";

  }

  if ($row['quest2']==2)

  {

  echo "<tr><td class=\"border\">The Hidden Key</td><td class=\"borderl\">You found a small locked box under your bed in your bedroom, but you only have a vague memory of where you hid the key.</td></tr>";

  }

if ($row['quest2']==3)

  {

  echo "<tr><td class=\"border\">The Hidden Key</td><td class=\"borderl\">You found the key and the locked box. Now you can look in your inventory and unlock the box to get your prized possession.</td></tr>";

  }

  if ($row['shepfeed']>0)
{

if ($row['shepfeed']==1)
{

echo "<tr><td class=\"border\">Hungry Dog</td><td class=\"borderl\">You fed Old Shep, and he appears to be happy to see you now. Perhaps now he will let you look in his dog house.</td></tr>";
}

if ($row['shepfeed']==2)
{
echo "<tr><td class=\"border\">The Lost Key</td><td class=\"borderl\">You found an old key in Shep the dog's house. Maybe you should talk to your father about it.</td></tr>";
}

}

}

}
echo "</table>";
  }
  



?>