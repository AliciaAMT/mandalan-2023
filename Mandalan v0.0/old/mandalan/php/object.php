<?php 

include ('php/getflags.php');

$query=sprintf("select map, xaxis, yaxis from stats where username='%s';", mysql_real_escape_string($username));

$result = mysql_query($query);

while($row = mysql_fetch_array($result))
  {  
  
  $imagename="<table class=\"page\"><tr><td class=\"center\" colspan=\"2\"><h3>You search...</h3></td></tr><tr><td class=\"left\"><h3>Found:</h3></td><td class=\"center\"><img src=\"images/";
  $itemname=".png\" /><br />";
  $experience="</td></tr><tr><td class=\"left\"><h3>Experience:</h3></td><td class=\"left\"><h3>+";
  $quest="</h3></td></tr><tr><td class=\"left\"><h3>Quest Updated:</h3></td><td class=\"left\"><h3>\"";
  $endquest="\"</h3></td></tr></table><br /><table class=\"page\"><tr><td class=\"page\"><form action=\"maingraphics.php?".time()."\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Back to Map\" /></form></td></tr></table>";
  
  
if ($row['map']=="homeup")
  {
  
  if ($row['map']=="homeup" and $row['xaxis']==2 and $row['yaxis']==2)
  {
  if ($bedroomrug==0)
  {
  
  echo $imagename."smallrustykey".$itemname."Small Rusty Key".$experience."5".$quest."The Hidden Key Quest".$endquest;
  
  $query=sprintf("update flags set bedroomrug=1 where username='%s';", mysql_real_escape_string($username));
  mysql_query ($query);
  
  $query=sprintf("update stats set experience=experience+5 where username='%s';", mysql_real_escape_string($username));
  mysql_query ($query);
  
//add key
include ('php/homeup22.php');
//end key  
  if ($thehiddenkey==0)
  {
  $query=sprintf("update flags set quest2=1 where username='%s';", mysql_real_escape_string($username));
  mysql_query ($query);
  }
  if ($thehiddenkey==2)
  {
  $query=sprintf("update flags set quest2=3 where username='%s';", mysql_real_escape_string($username));
  mysql_query ($query);
  
  }
  }
  
  
    
  if ($bedroomrug==1)
  {

  echo "<table class=\"page\"><tr><td class=\"center\"><h3>You Search the Rug</h3>Nothing Here</td></tr><tr><td class=\"center\"><table class=\"page\"><tr><td class=\"page\"><form action=\"maingraphics.php?";

echo time();
echo "\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Back to Map\" /></form></td></tr></table></td></tr></table";
  }
  }
  if ($row['map']=="homeup" and $row['xaxis']==3 and $row['yaxis']==1)
  {
  if ($bedroomwardrobe==0)
  {
  echo "<table class=\"page\"><tr><td class=\"center\" colspan=\"2\"><h3>You search the Wardrobe...</h3></td></tr><tr><td class=\"left\"><h3>Found:</h3></td><td class=\"center\"><img src=\"images/worncanvasshirt.png\" /><br />Worn Canvas Shirt</td></tr><tr><td class=\"left\"><h3>Found:</h3></td><td class=\"center\"><img src=\"images/worncanvaspants.png\" /><br />Worn Canvas Pants</td></tr><tr><td class=\"left\"><h3>Experience:</h3></td><td class=\"left\"><h3>+10</h3></td></tr></table><br /><table class=\"page\"><tr><td class=\"page\"><form action=\"maingraphics.php?";

echo time();
echo "\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Back to Map\" /></form></td></tr></table>";
  
  $query=sprintf("update flags set bedroomwardrobe=1 where username='%s';", mysql_real_escape_string($username));
  mysql_query ($query);
  
  $query=sprintf("update stats set experience=experience+10 where username='%s';", mysql_real_escape_string($username));
  mysql_query ($query);
  
include ('php/homeup31.php');
}
  if ($bedroomwardrobe==1)
  {
  echo "<table class=\"page\"><tr><td class=\"center\"><h3>You Search the Wardrobe...</h3>Nothing Here</td></tr><tr><td class=\"center\"><table class=\"page\"><tr><td class=\"page\"><form action=\"maingraphics.php?";

echo time();
echo "\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Back to Map\" /></form></td></tr></table></td></tr></table";
  }
  }
  
  
  if ($row['map']=="homeup" and $row['xaxis']==3 and $row['yaxis']==2)
  {
  echo "<table class=\"page\"><tr><td class=\"center\" colspan=\"2\"><h3>You Search the Desk...</h3>";
  
  if ($bedroomdesk==0)
  {
  echo "</td></tr><tr><td class=\"left\"><h3>Found:</h3></td><td class=\"center\"><img src=\"images/smallwaterskin.png\" /><br />Small Waterskin</td></tr><tr><td class=\"left\"><h3>Found:</h3></td><td class=\"center\"><img src=\"images/lockpick.png\" /><br />3 Lockpicks</td></tr><tr><td class=\"left\"><h3>Experience:</h3></td><td class=\"left\"><h3>+10</h3></td></tr></table><br /><table class=\"page\"><tr><td class=\"page\"><form action=\"maingraphics.php?";

echo time();
echo "\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Back to Map\" /></form></td></tr></table>";
  
  $query=sprintf("update flags set bedroomdesk=1 where username='%s';", mysql_real_escape_string($username));
  mysql_query ($query);
  
  $query=sprintf("update stats set experience=experience+10 where username='%s';", mysql_real_escape_string($username));
  mysql_query ($query);
  
include ('php/homeup32.php');
}
  if ($bedroomdesk==1)
  {
  echo "Nothing Here</td></tr><tr><td class=\"center\"><table class=\"page\"><tr><td class=\"page\"><form action=\"maingraphics.php?";

echo time();
echo "\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Back to Map\" /></form></td></tr></table></td></tr></table";
  }
  }
  
  
  if ($row['map']=="homeup" and $row['xaxis']==1 and $row['yaxis']==2)
  {
  echo "<table class=\"page\"><tr><td class=\"center\" colspan=\"2\"><h3>You search the Coatrack...</h3>";
  
  if ($bedroomcoatrack==0)
  {
  echo "</td></tr><tr><td class=\"left\"><h3>Found:</h3></td><td class=\"center\"><img src=\"images/worncanvascloak.png\" /><br />Worn Canvas Cloak</td></tr><tr><td class=\"left\"><h3>Found:</h3></td><td class=\"center\"><img src=\"images/worncanvashat.png\" /><br />Worn Canvas Hat</td></tr><tr><td class=\"left\"><h3>Experience:</h3></td><td class=\"left\"><h3>+10</h3></td></tr></table><br /><table class=\"page\"><tr><td class=\"page\"><form action=\"maingraphics.php?";

echo time();
echo "\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Back to Map\" /></form></td></tr></table>";
  
  $query=sprintf("update flags set bedroomcoatrack=1 where username='%s';", mysql_real_escape_string($username));
  mysql_query ($query);
  
  $query=sprintf("update stats set experience=experience+10 where username='%s';", mysql_real_escape_string($username));
  mysql_query ($query);
  
include ('php/homeup21.php');
}
  if ($bedroomcoatrack==1)
  {
  echo "Nothing Here</td></tr><tr><td class=\"center\"><table class=\"page\"><tr><td class=\"page\"><form action=\"maingraphics.php?";

echo time();
echo "\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Back to Map\" /></form></td></tr></table></td></tr></table";
  }
  }
  if ($row['map']=="homeup" and $row['xaxis']==3 and $row['yaxis']==3)
  {
  echo "<table class=\"page\"><tr><td class=\"center\" colspan=\"2\"><h3>You search the Shelf...</h3>";
  if ($bedroomshelf==0)
  {
  echo "</td></tr><tr><td class=\"left\"><h3>Found:</h3></td><td class=\"center\"><img src=\"images/bookoflaws.png\" /><br />Book of Laws</td></tr><tr><td class=\"left\"><h3>Experience:</h3></td><td class=\"left\"><h3>+5</h3></td></tr></table><br /><table class=\"page\"><tr><td class=\"page\"><form action=\"maingraphics.php?";

echo time();
echo "\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Back to Map\" /></form></td></tr></table>";
  
  $query=sprintf("update flags set bedroomshelf=1 where username='%s';", mysql_real_escape_string($username));
  mysql_query ($query);
  
  $query=sprintf("update stats set experience=experience+5 where username='%s';", mysql_real_escape_string($username));
  mysql_query ($query);

include ('php/homeup33.php');
}
  
  
    
  if ($bedroomshelf==1)
  {
  echo "Nothing Here</td></tr><tr><td class=\"center\"><table class=\"page\"><tr><td class=\"page\"><form action=\"maingraphics.php?";

echo time();
echo "\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Back to Map\" /></form></td></tr></table></td></tr></table";
  }
  }
  
  if ($row['map']=="homeup" and $row['xaxis']==2 and $row['yaxis']==3)
  {
  echo "<table class=\"page\"><tr><td class=\"center\" colspan=\"2\"><h3>You search the Chest...</h3>";
  if ($bedroomchest==0)
  {
  echo "</td></tr><tr><td class=\"left\"><h3>Found:</h3></td><td class=\"center\"><img src=\"images/worncanvasshoes.png\" /><br />Worn Canvas Shoes</td></tr><tr><td class=\"left\"><h3>Experience:</h3></td><td class=\"left\"><h3>+5</h3></td></tr></table><br /><table class=\"page\"><tr><td class=\"page\"><form action=\"maingraphics.php?";

echo time();
echo "\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Back to Map\" /></form></td></tr></table>";
  
  $query=sprintf("update flags set bedroomchest=1 where username='%s';", mysql_real_escape_string($username));
  mysql_query ($query);
  
  $query=sprintf("update stats set experience=experience+5 where username='%s';", mysql_real_escape_string($username));
  mysql_query ($query);

include ('php/homeup23.php');
}
  
  
    
  if ($bedroomchest==1)
  {
  echo "Nothing Here</td></tr><tr><td class=\"center\"><table class=\"page\"><tr><td class=\"page\"><form action=\"maingraphics.php?";

echo time();
echo "\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Back to Map\" /></form></td></tr></table></td></tr></table";
  }
  
  
  
  
  }
  if ($row['map']=="homeup" and $row['xaxis']==1 and $row['yaxis']==3)
  {
  if ($bedroombed==0)
  {
  echo "<table class=\"page\"><tr><td class=\"center\" colspan=\"2\"><h3>You look under the Bed...</h3></td></tr><tr><td class=\"left\"><h3>Found:</h3></td><td class=\"center\"><img src=\"images/lockedbox.png\" /><br />Locked Box</td></tr><tr><td class=\"left\"><h3>Experience:</h3></td><td class=\"left\"><h3>+5</h3></td></tr><tr><td class=\"left\"><h3>Quest Updated:</h3></td><td class=\"left\"><h3>\"The Hidden Key Quest\"</h3></td></tr></table><br /><table class=\"page\"><tr><td class=\"page\"><form action=\"maingraphics.php?";

echo time();
echo "\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Back to Map\" /></form></td></tr></table>";
  
  $query=sprintf("update flags set bedroombed=1 where username='%s';", mysql_real_escape_string($username));
  mysql_query ($query);
  
  $query=sprintf("update stats set experience=experience+5 where username='%s';", mysql_real_escape_string($username));
  mysql_query ($query);
  
//add key
include ('php/homeup13.php');
//end key  
  if ($thehiddenkey==0)
  {
  $query=sprintf("update flags set quest2=2 where username='%s';", mysql_real_escape_string($username));
  mysql_query ($query);
  }
  if ($thehiddenkey==1)
  {
  $query=sprintf("update flags set quest2=3 where username='%s';", mysql_real_escape_string($username));
  mysql_query ($query);
  
  }
  }
  
  
    
  if ($bedroombed==1)
  {
  echo "<table class=\"page\"><tr><td class=\"center\"><h3>You Search the Bed...</h3>Nothing Here</td></tr><tr><td class=\"center\"><table class=\"page\"><tr><td class=\"page\"><form action=\"maingraphics.php?";

echo time();
echo "\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Back to Map\" /></form></td></tr></table></td></tr></table";
  }

  }





}

if ($row['map']=="home")
{

if ($row['map']=="home" and $row['xaxis']==1 and $row['yaxis']==1)
  {
  
if ($homeshelf==0)
  {
  echo "<table class=\"page\"><tr><td class=\"center\" colspan=\"2\"><h3>You search the Shelf...</h3></td></tr><tr><td class=\"left\"><h3>Found:</h3></td><td class=\"center\"><img src=\"images/book.png\" /><br />Family History Book</td></tr><tr><td class=\"left\"><h3>Experience:</h3></td><td class=\"left\"><h3>+5</h3></td></tr></table><br /><table class=\"page\"><tr><td class=\"page\"><form action=\"maingraphics.php?";

echo time();
echo "\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Back to Map\" /></form></td></tr></table>";
  
  $query=sprintf("update flags set homeshelf=1 where username='%s';", mysql_real_escape_string($username));
  mysql_query ($query);
  
  $query=sprintf("update stats set experience=experience+5 where username='%s';", mysql_real_escape_string($username));
  mysql_query ($query);
  
include ('php/home11.php');
}
  

if ($homeshelf==1)
  {
  echo "<table class=\"page\"><tr><td class=\"center\"><h3>You Search the Shelf...</h3>Nothing Here</td></tr><tr><td class=\"center\"><table class=\"page\"><tr><td class=\"page\"><form action=\"maingraphics.php?";

echo time();
echo "\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Back to Map\" /></form></td></tr></table></td></tr></table";
  }
  }
  

//*****************************************************************************
if ($row['map']=="home" and $row['xaxis']==2 and $row['yaxis']==1)
  {
  
if ($homerug==0)
{
echo "<table class=\"page\"><tr><td class=\"center\" colspan=\"2\"><h3>You search under the Rug...</h3></td></tr><tr><td class=\"left\"><h3>Found:</h3></td><td class=\"center\"><img src=\"images/lockpick.png\" /><br />Lockpick</td></tr><tr><td class=\"left\"><h3>Experience:</h3></td><td class=\"left\"><h3>+5</h3></td></tr></table><br /><table class=\"page\"><tr><td class=\"page\"><form action=\"maingraphics.php?";

echo time();
echo "\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Back to Map\" /></form></td></tr></table>";
  
  $query=sprintf("update flags set homerug=1 where username='%s';", mysql_real_escape_string($username));
  mysql_query ($query);
  
  $query=sprintf("update stats set experience=experience+5 where username='%s';", mysql_real_escape_string($username));
  mysql_query ($query);
  
include ('php/home21.php');

}

if ($homerug==1)
  {
  echo "<table class=\"page\"><tr><td class=\"center\" colspan=\"2\"><h3>You search under the Rug...</h3>Nothing Here</td></tr><tr><td class=\"center\"><table class=\"page\"><tr><td class=\"page\"><form action=\"maingraphics.php?";

echo time();
echo "\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Back to Map\" /></form></td></tr></table></td></tr></table";
  }
  }
  
//*********************************************************************************************

if ($row['map']=="home" and $row['xaxis']==3 and $row['yaxis']==1)
  {
  
if ($homechest==0)
  {
  echo "<table class=\"page\"><tr><td class=\"center\" colspan=\"2\"><h3>You search the Chest...</h3></td></tr><tr><td class=\"left\"><h3>Locked:</h3></td><td class=\"center\">It looks like you can pick this lock with a lockpick.</td></tr><tr><td class=\"center\" colspan=\"2\"><table class=\"page\"><tr><td class=\"page\"><form action=\"picklock.php?";

echo time();
echo "\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Pick Lock\" /></form></td></tr></table></td></tr></table><br /><table class=\"page\"><tr><td class=\"page\"><form action=\"maingraphics.php?";

echo time();
echo "\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Back to Map\" /></form></td></tr></table>";
  
 }
  

if ($homechest==1)
  {
  echo "<table class=\"page\"><tr><td class=\"center\"><h3>You Search the Chest...</h3>Nothing Here</td></tr><tr><td class=\"center\"><table class=\"page\"><tr><td class=\"page\"><form action=\"maingraphics.php?";

echo time();
echo "\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Back to Map\" /></form></td></tr></table></td></tr></table";
  }
  }
  

if ($row['map']=="home" and $row['xaxis']==1 and $row['yaxis']==2)
  {
  
if ($homeshelf2==0)
  {
  echo "<table class=\"page\"><tr><td class=\"center\" colspan=\"2\"><h3>You search the Shelf...</h3></td></tr><tr><td class=\"left\"><h3>Found:</h3></td><td class=\"center\"><img src=\"images/skillet.png\" /><br />Skillet</td></tr><tr><td class=\"left\"><h3>Found:</h3></td><td class=\"center\"><img src=\"images/oil.png\" /><br />Cooking Oil</td></tr><tr><td class=\"left\"><h3>Experience:</h3></td><td class=\"left\"><h3>+10</h3></td></tr></table><br /><table class=\"page\"><tr><td class=\"page\"><form action=\"maingraphics.php?";

echo time();
echo "\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Back to Map\" /></form></td></tr></table>";
  
  $query=sprintf("update flags set homeshelf2=1 where username='%s';", mysql_real_escape_string($username));
  mysql_query ($query);
  
  $query=sprintf("update stats set experience=experience+10 where username='%s';", mysql_real_escape_string($username));
  mysql_query ($query);
  
include ('php/home12.php');
}
  

if ($homeshelf2==1)
  {
  echo "<table class=\"page\"><tr><td class=\"center\"><h3>You Search the Shelf...</h3>Nothing Here</td></tr><tr><td class=\"center\"><table class=\"page\"><tr><td class=\"page\"><form action=\"maingraphics.php?";

echo time();
echo "\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Back to Map\" /></form></td></tr></table></td></tr></table";
  }
  }
  

if ($row['map']=="home" and $row['xaxis']==2 and $row['yaxis']==2)
  {
    
  if ($hometable==0)
  {
echo "<table class=\"page\"><tr><td class=\"center\" colspan=\"2\"><h3>You Search the Table...</h3>";

  echo "</td></tr><tr><td class=\"left\"><h3>Found:</h3></td><td class=\"center\"><img src=\"images/rustyknife.png\" /><br />Rusty Kitchen Knife</td></tr><tr><td class=\"left\"><h3>Experience:</h3></td><td class=\"left\"><h3>+5</h3></td></tr></table><br /><table class=\"page\"><tr><td class=\"page\"><form action=\"maingraphics.php?";

echo time();
echo "\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Back to Map\" /></form></td></tr></table>";
  
  $query=sprintf("update flags set hometable=1 where username='%s';", mysql_real_escape_string($username));
  mysql_query ($query);
  
  $query=sprintf("update stats set experience=experience+5 where username='%s';", mysql_real_escape_string($username));
  mysql_query ($query);
  
include ('php/home22.php');
}
  if ($hometable==1)
  {
  echo "<table class=\"page\"><tr><td class=\"center\"><h3>You Search the Table...</h3>You find nothing of interest.</td></tr><tr><td class=\"center\"><table class=\"page\"><tr><td class=\"page\"><form action=\"maingraphics.php?";

echo time();
echo "\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Back to Map\" /></form></td></tr></table></td></tr></table";
  }
  }
  
  

if ($row['map']=="home" and $row['xaxis']==3 and $row['yaxis']==2)
  {
include ('php/homefireplace.php');  

}

  
if ($row['map']=="home" and $row['xaxis']==1 and $row['yaxis']==3)
  {
  if ($homepantry==0)
  {
  echo "<table class=\"page\"><tr><td class=\"center\" colspan=\"2\"><h3>You search the Kitchen Pantry...</h3></td></tr><tr><td class=\"left\"><h3>Found:</h3></td><td class=\"center\"><img src=\"images/meat.png\" /><br />Raw Meat x2</td></tr><tr><td class=\"left\"><h3>Found:</h3></td><td class=\"center\"><img src=\"images/bread.png\" /><br />Bread x6</td></tr><tr><td class=\"left\"><h3>Experience:</h3></td><td class=\"left\"><h3>+10</h3></td></tr></table><br /><table class=\"page\"><tr><td class=\"page\"><form action=\"maingraphics.php?";

echo time();
echo "\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Back to Map\" /></form></td></tr></table>";
  
  $query=sprintf("update flags set homepantry=1 where username='%s';", mysql_real_escape_string($username));
  mysql_query ($query);
  
  $query=sprintf("update stats set experience=experience+10 where username='%s';", mysql_real_escape_string($username));
  mysql_query ($query);
  
include ('php/home13.php');
}
  if ($homepantry==1)
  {
  echo "<table class=\"page\"><tr><td class=\"center\"><h3>You Search the Kitchen Pantry...</h3>Nothing Here</td></tr><tr><td class=\"center\"><table class=\"page\"><tr><td class=\"page\"><form action=\"maingraphics.php?";

echo time();
echo "\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Back to Map\" /></form></td></tr></table></td></tr></table";
  }
  }
  

if ($row['map']=="home" and $row['xaxis']==2 and $row['yaxis']==3)
  {
  if ($homerack==0)
  {
  echo "<table class=\"page\"><tr><td class=\"center\" colspan=\"2\"><h3>You search the Herb Rack...</h3></td></tr><tr><td class=\"left\"><h3>Found:</h3></td><td class=\"center\"><img src=\"images/cinnamon.png\" /><br />Cinnamon x2</td></tr><tr><td class=\"left\"><h3>Found:</h3></td><td class=\"center\"><img src=\"images/salt.png\" /><br />Salt x3</td></tr><tr><td class=\"left\"><h3>Experience:</h3></td><td class=\"left\"><h3>+10</h3></td></tr></table><br /><table class=\"page\"><tr><td class=\"page\"><form action=\"maingraphics.php?";

echo time();
echo "\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Back to Map\" /></form></td></tr></table>";
  
  $query=sprintf("update flags set homerack=1 where username='%s';", mysql_real_escape_string($username));
  mysql_query ($query);
  
  $query=sprintf("update stats set experience=experience+10 where username='%s';", mysql_real_escape_string($username));
  mysql_query ($query);
  
include ('php/home23.php');
}
  if ($homerack==1)
  {
  echo "<table class=\"page\"><tr><td class=\"center\"><h3>You Search the Herb Rack...</h3>Nothing Here</td></tr><tr><td class=\"center\"><table class=\"page\"><tr><td class=\"page\"><form action=\"maingraphics.php?";

echo time();
echo "\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Back to Map\" /></form></td></tr></table></td></tr></table";
  }
  }

  if ($row['map']=="home" and $row['xaxis']==3 and $row['yaxis']==3)
  {
  if ($homedrawer==0)
  {
  echo "<table class=\"page\"><tr><td class=\"center\" colspan=\"2\"><h3>You search the End Table Drawer...</h3></td></tr><tr><td class=\"left\"><h3>Found:</h3></td><td class=\"center\"><img src=\"images/purse.png\" /><br />Purse</td></tr><tr><td class=\"left\"><h3>Experience:</h3></td><td class=\"left\"><h3>+5</h3></td></tr></table><br /><table class=\"page\"><tr><td class=\"page\"><form action=\"maingraphics.php?";

echo time();
echo "\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Back to Map\" /></form></td></tr></table>";
  
  $query=sprintf("update flags set homedrawer=1 where username='%s';", mysql_real_escape_string($username));
  mysql_query ($query);
  
  $query=sprintf("update stats set experience=experience+5 where username='%s';", mysql_real_escape_string($username));
  mysql_query ($query);
  
include ('php/home33.php');
}
  if ($homedrawer==1)
  {
  echo "<table class=\"page\"><tr><td class=\"center\"><h3>You Search the Drawer...</h3>Nothing Here</td></tr><tr><td class=\"center\"><table class=\"page\"><tr><td class=\"page\"><form action=\"maingraphics.php?";

echo time();
echo "\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Back to Map\" /></form></td></tr></table></td></tr></table";
  }
  }

}
if ($row['map']=="yard")
{
if ($row['map']=="yard" and $row['xaxis']==3 and $row['yaxis']==3)
  {
  if ($shepfeed==0)
  {
echo "<table class=\"page\"><tr><td class=\"center\"><h3>You look into the dog house and notice something strange in Shep's food bowl. You reach into the little house to get the strange item when:</h3></td></tr><tr><td class=\"center\">Old Shep snarls and bites you! Maybe Old Shep is hungry. He sure took a bite out of your arm!</td></tr><tr><td class=\"page\"><table class=\"page\"><tr><td class=\"page\"><form action=\"maingraphics.php?";
echo time();
echo "\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Back to Map\" /></form></td></tr></table>";

$query=sprintf("update stats set life=life-5 where username='%s';", mysql_real_escape_string($username));
  mysql_query ($query);


}
    
  if ($shepfeed==1)
  {
   echo "<table class=\"page\"><tr><td class=\"center\" colspan=\"2\"><h3>You look into the dog house and notice something strange in Shep's food bowl. You reach into the little house to get the strange item when:</h3></td></tr><tr><td class=\"left\"><h3>Found:</h3></td><td class=\"center\"><img src=\"images/bonekey.png\" /><br />Bone Key</td></tr><tr><td class=\"left\"><h3>Experience:</h3></td><td class=\"left\"><h3>+5</h3></td></tr><tr><td class=\"left\"><h3>Quest Updated:</h3></td><td class=\"left\"><h3>\"The Lost Key Quest\"</h3></td></tr></table><br /><table class=\"page\"><tr><td class=\"page\"><form action=\"maingraphics.php?";

echo time();
echo "\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Back to Map\" /></form></td></tr></table>";
  
  $query=sprintf("update flags set shepfeed=2 where username='%s';", mysql_real_escape_string($username));
  mysql_query ($query);
  
  $query=sprintf("update stats set experience=experience+5 where username='%s';", mysql_real_escape_string($username));
  mysql_query ($query);
  
//add key
include ('php/yard33.php');
  }


if ($shepfeed==2)
  {
echo "<table class=\"page\"><tr><td class=\"center\"><h3>You look into the dog house and :</h3></td></tr><tr><td class=\"center\">see nothing of interest.</td></tr><tr><td class=\"page\"><table class=\"page\"><tr><td class=\"page\"><form action=\"maingraphics.php?";
echo time();
echo "\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Back to Map\" /></form></td></tr></table>";

}

}

if ($row['map']=="yard" and $row['xaxis']==2 and $row['yaxis']==1)
  {
  if ($yardgarden==0)
  {
  echo "<table class=\"page\"><tr><td class=\"center\" colspan=\"2\"><h3>You check the garden:</h3></td></tr><tr><td class=\"left\"><h3>Found:</h3></td><td class=\"center\"><img src=\"images/lettuce.png\" /><br />Lettuce x3</td></tr><tr><td class=\"left\"><h3>Experience:</h3></td><td class=\"left\"><h3>+5</h3></td></tr></table><br /><table class=\"page\"><tr><td class=\"page\"><form action=\"maingraphics.php?";

echo time();
echo "\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Back to Map\" /></form></td></tr></table>";
  
  $query=sprintf("update flags set yardgarden=1 where username='%s';", mysql_real_escape_string($username));
  mysql_query ($query);
  
  $query=sprintf("update stats set experience=experience+5 where username='%s';", mysql_real_escape_string($username));
  mysql_query ($query);
  
include ('php/yard21.php');
}

 if ($yardgarden==1)
  {
  echo "<table class=\"page\"><tr><td class=\"center\" colspan=\"2\"><h3>You check the garden:</h3></td></tr><tr><td class=\"left\"><h3>Found:</h3></td><td class=\"center\"><img src=\"images/lettuce.png\" /><br />Lettuce x3</td></tr><tr><td class=\"left\"><h3>Experience:</h3></td><td class=\"left\"><h3>+5</h3></td></tr></table><br /><table class=\"page\"><tr><td class=\"page\"><form action=\"maingraphics.php?";

echo time();
echo "\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Back to Map\" /></form></td></tr></table>";
  
  $query=sprintf("update flags set yardgarden=2 where username='%s';", mysql_real_escape_string($username));
  mysql_query ($query);
  
  $query=sprintf("update stats set experience=experience+5 where username='%s';", mysql_real_escape_string($username));
  mysql_query ($query);
  
include ('php/yard21.php');
}

  if ($yardgarden==2)
  {
  echo "<table class=\"page\"><tr><td class=\"center\"><h3>You check the garden:</h3>Nothing here, try again later.</td></tr><tr><td class=\"center\"><table class=\"page\"><tr><td class=\"page\"><form action=\"maingraphics.php?";

echo time();
echo "\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Back to Map\" /></form></td></tr></table></td></tr></table";
  }
}
if ($row['map']=="yard" and $row['xaxis']==1 and $row['yaxis']==2)
  {
  if ($yardmelon==0)
  {
  echo "<table class=\"page\"><tr><td class=\"center\" colspan=\"2\"><h3>You check the melon plants:</h3></td></tr><tr><td class=\"left\"><h3>Found:</h3></td><td class=\"center\"><img src=\"images/pumpkin.png\" /><br />Melon x3</td></tr><tr><td class=\"left\"><h3>Experience:</h3></td><td class=\"left\"><h3>+5</h3></td></tr></table><br /><table class=\"page\"><tr><td class=\"page\"><form action=\"maingraphics.php?";

echo time();
echo "\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Back to Map\" /></form></td></tr></table>";
  
  $query=sprintf("update flags set yardmelon=1 where username='%s';", mysql_real_escape_string($username));
  mysql_query ($query);
  
  $query=sprintf("update stats set experience=experience+5 where username='%s';", mysql_real_escape_string($username));
  mysql_query ($query);
  
include ('php/yard12.php');
}

 if ($yardmelon==1)
  {
  echo "<table class=\"page\"><tr><td class=\"center\" colspan=\"2\"><h3>You check the melon plants:</h3></td></tr><tr><td class=\"left\"><h3>Found:</h3></td><td class=\"center\"><img src=\"images/pumpkin.png\" /><br />Melon x3</td></tr><tr><td class=\"left\"><h3>Experience:</h3></td><td class=\"left\"><h3>+5</h3></td></tr></table><br /><table class=\"page\"><tr><td class=\"page\"><form action=\"maingraphics.php?";

echo time();
echo "\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Back to Map\" /></form></td></tr></table>";
  
  $query=sprintf("update flags set yardmelon=2 where username='%s';", mysql_real_escape_string($username));
  mysql_query ($query);
  
  $query=sprintf("update stats set experience=experience+5 where username='%s';", mysql_real_escape_string($username));
  mysql_query ($query);
  
include ('php/yard12.php');
}

  if ($yardmelon==2)
  {
  echo "<table class=\"page\"><tr><td class=\"center\"><h3>You check the melon plants:</h3>Nothing here, try again later.</td></tr><tr><td class=\"center\"><table class=\"page\"><tr><td class=\"page\"><form action=\"maingraphics.php?";

echo time();
echo "\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Back to Map\" /></form></td></tr></table></td></tr></table";
  }
  
}


if ($row['map']=="yard" and $row['xaxis']==3 and $row['yaxis']==1)
  {
  if ($yardtrees==0)
  {
  echo "<table class=\"page\"><tr><td class=\"center\" colspan=\"2\"><h3>You check the fruit tree:</h3></td></tr><tr><td class=\"left\"><h3>Found:</h3></td><td class=\"center\"><img src=\"images/apple.png\" /><br />Apple x3</td></tr><tr><td class=\"left\"><h3>Experience:</h3></td><td class=\"left\"><h3>+5</h3></td></tr></table><br /><table class=\"page\"><tr><td class=\"page\"><form action=\"maingraphics.php?";

echo time();
echo "\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Back to Map\" /></form></td></tr></table>";
  
  $query=sprintf("update flags set yardtrees=1 where username='%s';", mysql_real_escape_string($username));
  mysql_query ($query);
  
  $query=sprintf("update stats set experience=experience+5 where username='%s';", mysql_real_escape_string($username));
  mysql_query ($query);
  
include ('php/yard31.php');
}

 if ($yardtrees==1)
  {
   echo "<table class=\"page\"><tr><td class=\"center\" colspan=\"2\"><h3>You check the fruit tree:</h3></td></tr><tr><td class=\"left\"><h3>Found:</h3></td><td class=\"center\"><img src=\"images/apple.png\" /><br />Apple x3</td></tr><tr><td class=\"left\"><h3>Experience:</h3></td><td class=\"left\"><h3>+5</h3></td></tr></table><br /><table class=\"page\"><tr><td class=\"page\"><form action=\"maingraphics.php?";

echo time();
echo "\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Back to Map\" /></form></td></tr></table>";
  
  $query=sprintf("update flags set yardtrees=2 where username='%s';", mysql_real_escape_string($username));
  mysql_query ($query);
  
  
  $query=sprintf("update stats set experience=experience+5 where username='%s';", mysql_real_escape_string($username));
  mysql_query ($query);
  
include ('php/yard31.php');

}

  if ($yardtrees==2)
  {
  echo "<table class=\"page\"><tr><td class=\"center\"><h3>You check the fruit tree:</h3>Nothing here, try again later.</td></tr><tr><td class=\"center\"><table class=\"page\"><tr><td class=\"page\"><form action=\"maingraphics.php?";

echo time();
echo "\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Back to Map\" /></form></td></tr></table></td></tr></table";
  }
  
}

if ($row['map']=="yard" and $row['xaxis']==3 and $row['yaxis']==2)
  {
  if ($yardcoop==0)
  {
  echo "<table class=\"page\"><tr><td class=\"center\" colspan=\"2\"><h3>You check the chicken coop:</h3></td></tr><tr><td class=\"left\"><h3>Found:</h3></td><td class=\"center\"><img src=\"images/egg.png\" /><br />Egg x3</td></tr><tr><td class=\"left\"><h3>Experience:</h3></td><td class=\"left\"><h3>+5</h3></td></tr></table><br /><table class=\"page\"><tr><td class=\"page\"><form action=\"maingraphics.php?";

echo time();
echo "\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Back to Map\" /></form></td></tr></table>";
  
  $query=sprintf("update flags set yardcoop=1 where username='%s';", mysql_real_escape_string($username));
  mysql_query ($query);
  
  $query=sprintf("update stats set experience=experience+5 where username='%s';", mysql_real_escape_string($username));
  mysql_query ($query);
  
include ('php/yard32.php');
}

 if ($yardcoop==1)
  {
  echo "<table class=\"page\"><tr><td class=\"center\" colspan=\"2\"><h3>You check the chicken coop:</h3></td></tr><tr><td class=\"left\"><h3>Found:</h3></td><td class=\"center\"><img src=\"images/egg.png\" /><br />Egg x3</td></tr><tr><td class=\"left\"><h3>Experience:</h3></td><td class=\"left\"><h3>+5</h3></td></tr></table><br /><table class=\"page\"><tr><td class=\"page\"><form action=\"maingraphics.php?";

echo time();
echo "\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Back to Map\" /></form></td></tr></table>";
  
  $query=sprintf("update flags set yardcoop=2 where username='%s';", mysql_real_escape_string($username));
  mysql_query ($query);
  
  $query=sprintf("update stats set experience=experience+5 where username='%s';", mysql_real_escape_string($username));
  mysql_query ($query);
  
include ('php/yard32.php');
}

  if ($yardcoop==2)
  {
  echo "<table class=\"page\"><tr><td class=\"center\"><h3>You check the chicken coop:</h3>Nothing here, try again later.</td></tr><tr><td class=\"center\"><table class=\"page\"><tr><td class=\"page\"><form action=\"maingraphics.php?";

echo time();
echo "\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Back to Map\" /></form></td></tr></table></td></tr></table";
  }
  
}

}

if ($row['map']=="cellar")
{

if ($row['xaxis']==1 and $row['yaxis']==1)
  {
 if ($cellarrice==0)
  {
  
  $query=sprintf("update flags set cellarrice=1 where username='%s';", mysql_real_escape_string($username));
  mysql_query ($query);

  $query=sprintf("update stats set experience=experience+5 where username='%s';", mysql_real_escape_string($username));
  mysql_query ($query);
  
  echo "<table class=\"page\"><tr><td class=\"center\" colspan=\"2\"><h3>You look inside the canvas bag:</h3></td></tr><tr><td class=\"left\"><h3>Found:</h3></td><td class=\"center\"><img src=\"images/rice.png\" /><br />Rice x3</td></tr><tr><td class=\"left\"><h3>Experience:</h3></td><td class=\"left\"><h3>+5</h3></td></tr></table><br /><table class=\"page\"><tr><td class=\"page\"><form action=\"maingraphics.php?";
  echo time();
  echo "\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Back to Map\" /></form></td></tr></table>";
  
  include ('php/cellar11.php');
  }
  
  if ($cellarrice==1)
{
 
  echo "<table class=\"page\"><tr><td class=\"center\"><h3>You look inside the canvas bag:</h3>Nothing here.</td></tr><tr><td class=\"center\"><table class=\"page\"><tr><td class=\"page\"><form action=\"maingraphics.php?";
  echo time();
  echo "\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Back to Map\" /></form></td></tr></table></td></tr></table";

 } 
}


if ($row['map']=="cellar" and $row['xaxis']==3 and $row['yaxis']==1)
  {
  if ($cellarveggie==0)
  {
  echo "<table class=\"page\"><tr><td class=\"center\" colspan=\"2\"><h3>You look inside the canvas bag:</h3></td></tr><tr><td class=\"left\"><h3>Found:</h3></td><td class=\"center\"><img src=\"images/vegetables.png\" /><br />Vegetables x3</td></tr><tr><td class=\"left\"><h3>Experience:</h3></td><td class=\"left\"><h3>+5</h3></td></tr></table><br /><table class=\"page\"><tr><td class=\"page\"><form action=\"maingraphics.php?";

echo time();
echo "\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Back to Map\" /></form></td></tr></table>";
  
  $query=sprintf("update flags set cellarveggie=1 where username='%s';", mysql_real_escape_string($username));
  mysql_query ($query);
  
  $query=sprintf("update stats set experience=experience+5 where username='%s';", mysql_real_escape_string($username));
  mysql_query ($query);
  
include ('php/cellar31.php');
}

 if ($cellarveggie==1)
  {
  echo "<table class=\"page\"><tr><td class=\"center\"><h3>You look inside the canvas bag:</h3>Nothing here.</td></tr><tr><td class=\"center\"><table class=\"page\"><tr><td class=\"page\"><form action=\"maingraphics.php?";

echo time();
echo "\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Back to Map\" /></form></td></tr></table></td></tr></table";

}
  
}

if ($row['map']=="cellar" and $row['xaxis']==1 and $row['yaxis']==2)
  {
  if ($cellaritem==0)
  {
 
  $query=sprintf("update flags set cellaritem=1 where username='%s';", mysql_real_escape_string($username));
  mysql_query ($query);
  
  $query=sprintf("update stats set experience=experience+5 where username='%s';", mysql_real_escape_string($username));
  mysql_query ($query);
  
include ('php/cellar12.php');

 echo "<table class=\"page\"><tr><td class=\"center\" colspan=\"2\"><h3>You look inside the wooden crate:</h3></td></tr><tr><td class=\"left\"><h3>Found:</h3></td><td class=\"center\"><img src=\"images/".$itemimage.".png\" /><br />".$itemname."</td></tr><tr><td class=\"left\"><h3>Experience:</h3></td><td class=\"left\"><h3>+5</h3></td></tr></table><br /><table class=\"page\"><tr><td class=\"page\"><form action=\"maingraphics.php?";

echo time();
echo "\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Back to Map\" /></form></td></tr></table>";
  

}

 if ($cellaritem==1)
  {
  echo "<table class=\"page\"><tr><td class=\"center\"><h3>You look inside the wooden crate:</h3>Nothing here.</td></tr><tr><td class=\"center\"><table class=\"page\"><tr><td class=\"page\"><form action=\"maingraphics.php?";

echo time();
echo "\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Back to Map\" /></form></td></tr></table></td></tr></table";

}
  
}

if ($row['map']=="cellar" and $row['xaxis']==3 and $row['yaxis']==2)
  {
  if ($cellarpurse==0)
  {
 
  $query=sprintf("update flags set cellarpurse=1 where username='%s';", mysql_real_escape_string($username));
  mysql_query ($query);
  
  $query=sprintf("update stats set experience=experience+5 where username='%s';", mysql_real_escape_string($username));
  mysql_query ($query);
  
include ('php/cellar32.php');

 echo "<table class=\"page\"><tr><td class=\"center\" colspan=\"2\"><h3>You look inside the wooden crate:</h3></td></tr><tr><td class=\"left\"><h3>Found:</h3></td><td class=\"center\"><img src=\"images/".$itemimage.".png\" /><br />".$itemname."</td></tr><tr><td class=\"left\"><h3>Experience:</h3></td><td class=\"left\"><h3>+5</h3></td></tr></table><br /><table class=\"page\"><tr><td class=\"page\"><form action=\"maingraphics.php?";

echo time();
echo "\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Back to Map\" /></form></td></tr></table>";
  

}

 if ($cellarpurse==1)
  {
  echo "<table class=\"page\"><tr><td class=\"center\"><h3>You look inside the wooden crate:</h3>Nothing here.</td></tr><tr><td class=\"center\"><table class=\"page\"><tr><td class=\"page\"><form action=\"maingraphics.php?";

echo time();
echo "\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Back to Map\" /></form></td></tr></table></td></tr></table";

}
  
}

if ($row['map']=="cellar" and $row['xaxis']==1 and $row['yaxis']==3)
  {
  if ($cellarbottle==0)
  {
 
  $query=sprintf("update flags set cellarbottle=1 where username='%s';", mysql_real_escape_string($username));
  mysql_query ($query);
  
  $query=sprintf("update stats set experience=experience+5 where username='%s';", mysql_real_escape_string($username));
  mysql_query ($query);
  
include ('php/cellar13.php');

 echo "<table class=\"page\"><tr><td class=\"center\" colspan=\"2\"><h3>You look at the bottle rack:</h3></td></tr><tr><td class=\"left\"><h3>Found:</h3></td><td class=\"center\"><img src=\"images/bottle.png\" /><br />Bottle</td></tr><tr><td class=\"left\"><h3>Experience:</h3></td><td class=\"left\"><h3>+5</h3></td></tr></table><br /><table class=\"page\"><tr><td class=\"page\"><form action=\"maingraphics.php?";

echo time();
echo "\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Back to Map\" /></form></td></tr></table>";
  

}

 if ($cellarbottle==1)
  {
  echo "<table class=\"page\"><tr><td class=\"center\"><h3>You look at the bottle rack:</h3>Nothing here.</td></tr><tr><td class=\"center\"><table class=\"page\"><tr><td class=\"page\"><form action=\"maingraphics.php?";

echo time();
echo "\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Back to Map\" /></form></td></tr></table></td></tr></table";

}
  
}


if ($row['map']=="cellar" and $row['xaxis']==3 and $row['yaxis']==3)
  {
  if ($cellarpotion==0)
  {
 
  $query=sprintf("update flags set cellarpotion=1 where username='%s';", mysql_real_escape_string($username));
  mysql_query ($query);
  
  $query=sprintf("update stats set experience=experience+5 where username='%s';", mysql_real_escape_string($username));
  mysql_query ($query);
  
include ('php/cellar33.php');

 echo "<table class=\"page\"><tr><td class=\"center\" colspan=\"2\"><h3>You look at the wine rack:</h3></td></tr><tr><td class=\"left\"><h3>Found:</h3></td><td class=\"center\"><img src=\"images/".$itemimage.".png\" /><br />".$itemname."</td></tr><tr><td class=\"left\"><h3>Experience:</h3></td><td class=\"left\"><h3>+5</h3></td></tr></table><br /><table class=\"page\"><tr><td class=\"page\"><form action=\"maingraphics.php?";

echo time();
echo "\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Back to Map\" /></form></td></tr></table>";
  

}

 if ($cellarpotion==1)
  {
  echo "<table class=\"page\"><tr><td class=\"center\"><h3>You look at the wine rack:</h3>Nothing here.</td></tr><tr><td class=\"center\"><table class=\"page\"><tr><td class=\"page\"><form action=\"maingraphics.php?";

echo time();
echo "\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Back to Map\" /></form></td></tr></table></td></tr></table";

}
  
}


if ($row['map']=="cellar" and $row['xaxis']==3 and $row['yaxis']==4)
  {
  if ($cellarshelf==0)
  {
 
  $query=sprintf("update flags set cellarshelf=1 where username='%s';", mysql_real_escape_string($username));
  mysql_query ($query);
  
  $query=sprintf("update stats set experience=experience+5 where username='%s';", mysql_real_escape_string($username));
  mysql_query ($query);
  
include ('php/cellar34.php');

 echo "<table class=\"page\"><tr><td class=\"center\" colspan=\"2\"><h3>You look at the shelf:</h3></td></tr><tr><td class=\"left\"><h3>Found:</h3></td><td class=\"center\"><img src=\"images/".$spellimage.".png\" /><br />A ".$spellname." Scroll</td></tr><tr><td class=\"left\"><h3>Experience:</h3></td><td class=\"left\"><h3>+5</h3></td></tr></table><br /><table class=\"page\"><tr><td class=\"page\"><form action=\"maingraphics.php?";

echo time();
echo "\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Back to Map\" /></form></td></tr></table>";
  

}

 if ($cellarshelf==1)
  {
  echo "<table class=\"page\"><tr><td class=\"center\"><h3>You look at the shelf:</h3>Nothing here.</td></tr><tr><td class=\"center\"><table class=\"page\"><tr><td class=\"page\"><form action=\"maingraphics.php?";

echo time();
echo "\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Back to Map\" /></form></td></tr></table></td></tr></table";

}
  
}


if ($row['map']=="cellar" and $row['xaxis']==2 and $row['yaxis']==6)
  {
  if ($cellarchest==0)
  {
 
  $query=sprintf("update flags set cellarchest=1 where username='%s';", mysql_real_escape_string($username));
  mysql_query ($query);
  
  $query=sprintf("update stats set experience=experience+5 where username='%s';", mysql_real_escape_string($username));
  mysql_query ($query);
  
include ('php/cellarchest.php');

 echo "<table class=\"page\"><tr><td class=\"center\" colspan=\"2\"><h3>You look in the chest:</h3></td></tr><tr><td class=\"left\"><h3>Found:</h3></td><td class=\"center\"><img src=\"images/bluering.png\" /><br />Ring of Ice Protection</td></tr><tr><td class=\"left\"><h3>Experience:</h3></td><td class=\"left\"><h3>+5</h3></td></tr></table><br /><table class=\"page\"><tr><td class=\"page\"><form action=\"maingraphics.php?";

echo time();
echo "\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Back to Map\" /></form></td></tr></table>";
  

}

 if ($cellarchest==1)
  {
  echo "<table class=\"page\"><tr><td class=\"center\"><h3>You look in the chest:</h3>Nothing here.</td></tr><tr><td class=\"center\"><table class=\"page\"><tr><td class=\"page\"><form action=\"maingraphics.php?";

echo time();
echo "\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Back to Map\" /></form></td></tr></table></td></tr></table";

}
  
}





  
  }

if ($row['map']=="barn")
{

if ($row['map']=="barn" and $row['xaxis']==1 and $row['yaxis']==1)
  {
  if ($barnwood==0)
  {
  echo "<table class=\"page\"><tr><td class=\"center\" colspan=\"2\"><h3>You search for dry wood:</h3></td></tr><tr><td class=\"left\"><h3>Found:</h3></td><td class=\"center\"><img src=\"images/firewood.png\" /><br />Firewood x3</td></tr><tr><td class=\"left\"><h3>Experience:</h3></td><td class=\"left\"><h3>+5</h3></td></tr></table><br /><table class=\"page\"><tr><td class=\"page\"><form action=\"maingraphics.php?";

echo time();
echo "\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Back to Map\" /></form></td></tr></table>";
  
  $query=sprintf("update flags set barnwood=1 where username='%s';", mysql_real_escape_string($username));
  mysql_query ($query);
  
  $query=sprintf("update stats set experience=experience+5 where username='%s';", mysql_real_escape_string($username));
  mysql_query ($query);
  
include ('php/barn11.php');
}

 if ($barnwood==1)
  {
  echo "<table class=\"page\"><tr><td class=\"center\"><h3>You search for dry wood:</h3>You can salvage nothing.</td></tr><tr><td class=\"center\"><table class=\"page\"><tr><td class=\"page\"><form action=\"maingraphics.php?";

echo time();
echo "\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Back to Map\" /></form></td></tr></table></td></tr></table";

}
  
}
if ($row['map']=="barn" and $row['xaxis']==1 and $row['yaxis']==2)
  {
  if ($barnhay==0)
  {
  echo "<table class=\"page\"><tr><td class=\"center\" colspan=\"2\"><h3>You search the haystack:</h3></td></tr><tr><td class=\"left\"><h3>Found:</h3></td><td class=\"center\"><img src=\"images/needle.png\" /><br />Needle</td></tr><tr><td class=\"left\"><h3>Experience:</h3></td><td class=\"left\"><h3>+5</h3></td></tr></table><br /><table class=\"page\"><tr><td class=\"page\"><form action=\"maingraphics.php?";

echo time();
echo "\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Back to Map\" /></form></td></tr></table>";
  
  $query=sprintf("update flags set barnhay=1 where username='%s';", mysql_real_escape_string($username));
  mysql_query ($query);
  
  $query=sprintf("update stats set experience=experience+5 where username='%s';", mysql_real_escape_string($username));
  mysql_query ($query);
  
include ('php/barn12.php');
}

 if ($barnhay==1)
  {
  echo "<table class=\"page\"><tr><td class=\"center\"><h3>You search the hay and find nothing.</td></tr><tr><td class=\"center\"><table class=\"page\"><tr><td class=\"page\"><form action=\"maingraphics.php?";

echo time();
echo "\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Back to Map\" /></form></td></tr></table></td></tr></table";

}
  
}
if ($row['map']=="barn" and $row['xaxis']==2 and $row['yaxis']==3)
  {
  if ($barncow==0)
  {
  echo "<table class=\"page\"><tr><td class=\"center\" colspan=\"2\"><h3>You grab the nearest milk bucket and try milking the cow:</h3></td></tr><tr><td class=\"left\"><h3>Found:</h3></td><td class=\"center\"><img src=\"images/milk.png\" /><br />Milk x3</td></tr><tr><td class=\"left\"><h3>Experience:</h3></td><td class=\"left\"><h3>+5</h3></td></tr></table><br /><table class=\"page\"><tr><td class=\"page\"><form action=\"maingraphics.php?";

echo time();
echo "\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Back to Map\" /></form></td></tr></table>";
  
  $query=sprintf("update flags set barncow=1 where username='%s';", mysql_real_escape_string($username));
  mysql_query ($query);
  
  $query=sprintf("update stats set experience=experience+5 where username='%s';", mysql_real_escape_string($username));
  mysql_query ($query);
  
include ('php/barn23.php');
}

 if ($barncow==1)
  {
  echo "<table class=\"page\"><tr><td class=\"center\"><h3>You try milking the cow, but she is out of milk for now.</td></tr><tr><td class=\"center\"><table class=\"page\"><tr><td class=\"page\"><form action=\"maingraphics.php?";

echo time();
echo "\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Back to Map\" /></form></td></tr></table></td></tr></table";

}
  
}

if ($row['map']=="barn" and $row['xaxis']==1 and $row['yaxis']==3)
  {
  
  echo "<table class=\"page\"><tr><td class=\"center\" colspan=\"2\"><h3>Cheese Center:</h3></td></tr><table class=\"page\"><tr><td class=\"page\"><form action=\"makecheese.php?";

echo time();
echo "\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Make Cheese\" /></form></td></tr></table></td></tr></table>";
  
}
  
if ($row['map']=="barn" and $row['xaxis']==3 and $row['yaxis']==2)
  {
  if ($barnsack==0)
  {
  echo "<table class=\"page\"><tr><td class=\"center\" colspan=\"2\"><h3>You search the canvas sack:</h3></td></tr><tr><td class=\"left\"><h3>Found:</h3></td><td class=\"center\"><img src=\"images/oats.png\" /><br />Oats x3</td></tr><tr><td class=\"left\"><h3>Experience:</h3></td><td class=\"left\"><h3>+5</h3></td></tr></table><br /><table class=\"page\"><tr><td class=\"page\"><form action=\"maingraphics.php?";

echo time();
echo "\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Back to Map\" /></form></td></tr></table>";
  
  $query=sprintf("update flags set barnsack=1 where username='%s';", mysql_real_escape_string($username));
  mysql_query ($query);
  
  $query=sprintf("update stats set experience=experience+5 where username='%s';", mysql_real_escape_string($username));
  mysql_query ($query);
  
include ('php/barnsack.php');
}

 if ($barnsack==1)
  {
  echo "<table class=\"page\"><tr><td class=\"center\"><h3>You search the sack and find nothing.</td></tr><tr><td class=\"center\"><table class=\"page\"><tr><td class=\"page\"><form action=\"maingraphics.php?";

echo time();
echo "\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Back to Map\" /></form></td></tr></table></td></tr></table";

}
  
}

//***********************************

}

if ($row['map']=="ishforest")
{
if ($row['map']=="ishforest" and $row['xaxis']==1 and $row['yaxis']==1)
  {
  if ($ishforesttreea==0)
  {
  echo "<table class=\"page\"><tr><td class=\"center\" colspan=\"2\"><h3>You check the fruit tree:</h3></td></tr><tr><td class=\"left\"><h3>Found:</h3></td><td class=\"center\"><img src=\"images/apple.png\" /><br />Apple x3</td></tr><tr><td class=\"left\"><h3>Experience:</h3></td><td class=\"left\"><h3>+5</h3></td></tr></table><br /><table class=\"page\"><tr><td class=\"page\"><form action=\"maingraphics.php?";

echo time();
echo "\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Back to Map\" /></form></td></tr></table>";
  
  $query=sprintf("update flags set ishforesttreea=1 where username='%s';", mysql_real_escape_string($username));
  mysql_query ($query);
  
  $query=sprintf("update stats set experience=experience+5 where username='%s';", mysql_real_escape_string($username));
  mysql_query ($query);
  
include ('php/yard31.php');
}

 if ($ishforesttreea==1)
  {
   echo "<table class=\"page\"><tr><td class=\"center\" colspan=\"2\"><h3>You check the fruit tree:</h3></td></tr><tr><td class=\"left\"><h3>Found:</h3></td><td class=\"center\"><img src=\"images/apple.png\" /><br />Apple x3</td></tr><tr><td class=\"left\"><h3>Experience:</h3></td><td class=\"left\"><h3>+5</h3></td></tr></table><br /><table class=\"page\"><tr><td class=\"page\"><form action=\"maingraphics.php?";

echo time();
echo "\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Back to Map\" /></form></td></tr></table>";
  
  $query=sprintf("update flags set ishforesttreea=2 where username='%s';", mysql_real_escape_string($username));
  mysql_query ($query);
  
  
  $query=sprintf("update stats set experience=experience+5 where username='%s';", mysql_real_escape_string($username));
  mysql_query ($query);
  
include ('php/yard31.php');

}

  if ($ishforesttreea==2)
  {
  echo "<table class=\"page\"><tr><td class=\"center\"><h3>You check the fruit tree:</h3>Nothing here, try again later.</td></tr><tr><td class=\"center\"><table class=\"page\"><tr><td class=\"page\"><form action=\"maingraphics.php?";

echo time();
echo "\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Back to Map\" /></form></td></tr></table></td></tr></table";
  }
  
}
if ($row['map']=="ishforest" and $row['xaxis']==1 and $row['yaxis']==2)
  {
  if ($ishforesttreeb==0)
  {
  echo "<table class=\"page\"><tr><td class=\"center\" colspan=\"2\"><h3>You check the fruit tree:</h3></td></tr><tr><td class=\"left\"><h3>Found:</h3></td><td class=\"center\"><img src=\"images/apple.png\" /><br />Apple x3</td></tr><tr><td class=\"left\"><h3>Experience:</h3></td><td class=\"left\"><h3>+5</h3></td></tr></table><br /><table class=\"page\"><tr><td class=\"page\"><form action=\"maingraphics.php?";

echo time();
echo "\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Back to Map\" /></form></td></tr></table>";
  
  $query=sprintf("update flags set ishforesttreeb=1 where username='%s';", mysql_real_escape_string($username));
  mysql_query ($query);
  
  $query=sprintf("update stats set experience=experience+5 where username='%s';", mysql_real_escape_string($username));
  mysql_query ($query);
  
include ('php/yard31.php');
}

 if ($ishforesttreeb==1)
  {
   echo "<table class=\"page\"><tr><td class=\"center\" colspan=\"2\"><h3>You check the fruit tree:</h3></td></tr><tr><td class=\"left\"><h3>Found:</h3></td><td class=\"center\"><img src=\"images/apple.png\" /><br />Apple x3</td></tr><tr><td class=\"left\"><h3>Experience:</h3></td><td class=\"left\"><h3>+5</h3></td></tr></table><br /><table class=\"page\"><tr><td class=\"page\"><form action=\"maingraphics.php?";

echo time();
echo "\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Back to Map\" /></form></td></tr></table>";
  
  $query=sprintf("update flags set ishforesttreeb=2 where username='%s';", mysql_real_escape_string($username));
  mysql_query ($query);
  
  
  $query=sprintf("update stats set experience=experience+5 where username='%s';", mysql_real_escape_string($username));
  mysql_query ($query);
  
include ('php/yard31.php');

}

  if ($ishforesttreeb==2)
  {
  echo "<table class=\"page\"><tr><td class=\"center\"><h3>You check the fruit tree:</h3>Nothing here, try again later.</td></tr><tr><td class=\"center\"><table class=\"page\"><tr><td class=\"page\"><form action=\"maingraphics.php?";

echo time();
echo "\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Back to Map\" /></form></td></tr></table></td></tr></table";
  }
  
}


if ($row['map']=="ishforest" and $row['xaxis']==1 and $row['yaxis']==3)
  {
  if ($ishforesttreec==0)
  {
  echo "<table class=\"page\"><tr><td class=\"center\" colspan=\"2\"><h3>You check the fruit tree:</h3></td></tr><tr><td class=\"left\"><h3>Found:</h3></td><td class=\"center\"><img src=\"images/apple.png\" /><br />Apple x3</td></tr><tr><td class=\"left\"><h3>Experience:</h3></td><td class=\"left\"><h3>+5</h3></td></tr></table><br /><table class=\"page\"><tr><td class=\"page\"><form action=\"maingraphics.php?";

echo time();
echo "\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Back to Map\" /></form></td></tr></table>";
  
  $query=sprintf("update flags set ishforesttreec=1 where username='%s';", mysql_real_escape_string($username));
  mysql_query ($query);
  
  $query=sprintf("update stats set experience=experience+5 where username='%s';", mysql_real_escape_string($username));
  mysql_query ($query);
  
include ('php/yard31.php');
}

 if ($ishforesttreec==1)
  {
   echo "<table class=\"page\"><tr><td class=\"center\" colspan=\"2\"><h3>You check the fruit tree:</h3></td></tr><tr><td class=\"left\"><h3>Found:</h3></td><td class=\"center\"><img src=\"images/apple.png\" /><br />Apple x3</td></tr><tr><td class=\"left\"><h3>Experience:</h3></td><td class=\"left\"><h3>+5</h3></td></tr></table><br /><table class=\"page\"><tr><td class=\"page\"><form action=\"maingraphics.php?";

echo time();
echo "\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Back to Map\" /></form></td></tr></table>";
  
  $query=sprintf("update flags set ishforesttreec=2 where username='%s';", mysql_real_escape_string($username));
  mysql_query ($query);
  
  
  $query=sprintf("update stats set experience=experience+5 where username='%s';", mysql_real_escape_string($username));
  mysql_query ($query);
  
include ('php/yard31.php');

}

  if ($ishforesttreec==2)
  {
  echo "<table class=\"page\"><tr><td class=\"center\"><h3>You check the fruit tree:</h3>Nothing here, try again later.</td></tr><tr><td class=\"center\"><table class=\"page\"><tr><td class=\"page\"><form action=\"maingraphics.php?";

echo time();
echo "\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Back to Map\" /></form></td></tr></table></td></tr></table";
  }
  
}

if ($row['map']=="ishforest" and $row['xaxis']==1 and $row['yaxis']==4)
  {
  if ($ishforestpyramid==0)
  {
  echo "<table class=\"page\"><tr><td class=\"center\" colspan=\"2\"><h3>You examine the pyramid:</h3></td></tr><tr><td class=\"left\"><h3>You see nothing but strange inscriptions.</h3></td></tr></table><br /><table class=\"page\"><tr><td class=\"page\"><form action=\"maingraphics.php?";

echo time();
echo "\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Back to Map\" /></form></td></tr></table>";
  
 
}
if ($ishforestpyramid==1)
  {
  echo "<table class=\"page\"><tr><td class=\"center\" colspan=\"2\"><h3>You examine the pyramid:</h3></td></tr><tr><td class=\"left\"><h3>You say 'Open Sesame' and the face of the pyramid shudders as a hidden door opens.</h3></td></tr></table><br /><table class=\"page\"><tr><td class=\"page\"><form action=\"portal.php?";

echo time();
echo "\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Enter Pyramid\" /></form></td></tr></table><table class=\"page\"><tr><td class=\"page\"><form action=\"maingraphics.php?";

echo time();
echo "\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Back to Map\" /></form></td></tr></table>";
  
 
}

  
}

}
  

if ($row['map']=="cave")
{  
  if ($row['xaxis']==3 and $row['yaxis']==1)
  {
  if ($cavea==0)
  {
 
  $query=sprintf("update flags set cavea=1 where username='%s';", mysql_real_escape_string($username));
  mysql_query ($query);
  
  $query=sprintf("update stats set experience=experience+5 where username='%s';", mysql_real_escape_string($username));
  mysql_query ($query);
  
include ('php/cellar12.php');

 echo "<table class=\"page\"><tr><td class=\"center\" colspan=\"2\"><h3>You look inside the wooden crate:</h3></td></tr><tr><td class=\"left\"><h3>Found:</h3></td><td class=\"center\"><img src=\"images/".$itemimage.".png\" /><br />".$itemname."</td></tr><tr><td class=\"left\"><h3>Experience:</h3></td><td class=\"left\"><h3>+5</h3></td></tr></table><br /><table class=\"page\"><tr><td class=\"page\"><form action=\"maingraphics.php?";

echo time();
echo "\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Back to Map\" /></form></td></tr></table>";
  

}

 if ($cavea==1)
  {
  echo "<table class=\"page\"><tr><td class=\"center\"><h3>You look inside the wooden crate:</h3>Nothing here.</td></tr><tr><td class=\"center\"><table class=\"page\"><tr><td class=\"page\"><form action=\"maingraphics.php?";

echo time();
echo "\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Back to Map\" /></form></td></tr></table></td></tr></table";

}
  
}

if ($row['xaxis']==3 and $row['yaxis']==5)
  {
  if ($caveb==0)
  {
 
  $query=sprintf("update flags set caveb=1 where username='%s';", mysql_real_escape_string($username));
  mysql_query ($query);
  
  $query=sprintf("update stats set experience=experience+5 where username='%s';", mysql_real_escape_string($username));
  mysql_query ($query);
  
include ('php/cellar12.php');

 echo "<table class=\"page\"><tr><td class=\"center\" colspan=\"2\"><h3>You look inside the wooden crate:</h3></td></tr><tr><td class=\"left\"><h3>Found:</h3></td><td class=\"center\"><img src=\"images/".$itemimage.".png\" /><br />".$itemname."</td></tr><tr><td class=\"left\"><h3>Experience:</h3></td><td class=\"left\"><h3>+5</h3></td></tr></table><br /><table class=\"page\"><tr><td class=\"page\"><form action=\"maingraphics.php?";

echo time();
echo "\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Back to Map\" /></form></td></tr></table>";
  

}

 if ($caveb==1)
  {
  echo "<table class=\"page\"><tr><td class=\"center\"><h3>You look inside the wooden crate:</h3>Nothing here.</td></tr><tr><td class=\"center\"><table class=\"page\"><tr><td class=\"page\"><form action=\"maingraphics.php?";

echo time();
echo "\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Back to Map\" /></form></td></tr></table></td></tr></table";

}
  }
 if ($row['xaxis']==5 and $row['yaxis']==1)
  {
  if ($cavec==0)
  {
 
  $query=sprintf("update flags set cavec=1 where username='%s';", mysql_real_escape_string($username));
  mysql_query ($query);
  
  $query=sprintf("update stats set experience=experience+5 where username='%s';", mysql_real_escape_string($username));
  mysql_query ($query);
  
include ('php/cellar12.php');

 echo "<table class=\"page\"><tr><td class=\"center\" colspan=\"2\"><h3>You look inside the wooden crate:</h3></td></tr><tr><td class=\"left\"><h3>Found:</h3></td><td class=\"center\"><img src=\"images/".$itemimage.".png\" /><br />".$itemname."</td></tr><tr><td class=\"left\"><h3>Experience:</h3></td><td class=\"left\"><h3>+5</h3></td></tr></table><br /><table class=\"page\"><tr><td class=\"page\"><form action=\"maingraphics.php?";

echo time();
echo "\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Back to Map\" /></form></td></tr></table>";
  

}

 if ($cavec==1)
  {
  echo "<table class=\"page\"><tr><td class=\"center\"><h3>You look inside the wooden crate:</h3>Nothing here.</td></tr><tr><td class=\"center\"><table class=\"page\"><tr><td class=\"page\"><form action=\"maingraphics.php?";

echo time();
echo "\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Back to Map\" /></form></td></tr></table></td></tr></table";

}
  
} 
  
  if ($row['xaxis']==5 and $row['yaxis']==5)
  {
  if ($caved==0)
  {
 
  $query=sprintf("update flags set caved=1 where username='%s';", mysql_real_escape_string($username));
  mysql_query ($query);
  
  $query=sprintf("update stats set experience=experience+5 where username='%s';", mysql_real_escape_string($username));
  mysql_query ($query);
  
include ('php/cellar12.php');

 echo "<table class=\"page\"><tr><td class=\"center\" colspan=\"2\"><h3>You look inside the wooden crate:</h3></td></tr><tr><td class=\"left\"><h3>Found:</h3></td><td class=\"center\"><img src=\"images/".$itemimage.".png\" /><br />".$itemname."</td></tr><tr><td class=\"left\"><h3>Experience:</h3></td><td class=\"left\"><h3>+5</h3></td></tr></table><br /><table class=\"page\"><tr><td class=\"page\"><form action=\"maingraphics.php?";

echo time();
echo "\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Back to Map\" /></form></td></tr></table>";
  

}

 if ($caved==1)
  {
  echo "<table class=\"page\"><tr><td class=\"center\"><h3>You look inside the wooden crate:</h3>Nothing here.</td></tr><tr><td class=\"center\"><table class=\"page\"><tr><td class=\"page\"><form action=\"maingraphics.php?";

echo time();
echo "\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Back to Map\" /></form></td></tr></table></td></tr></table";

}
  
}
  
if ($row['xaxis']==7 and $row['yaxis']==3)
  {
  if ($cavee==0)
  {
 
  $query=sprintf("update flags set cavee=1 where username='%s';", mysql_real_escape_string($username));
  mysql_query ($query);
  
  $query=sprintf("update flags set ishforestpyramid=1 where username='%s';", mysql_real_escape_string($username));
  mysql_query ($query);
  
  $query=sprintf("update stats set experience=experience+5 where username='%s';", mysql_real_escape_string($username));
  mysql_query ($query);
  
include ('php/cave73.php');

 echo "<table class=\"page\"><tr><td class=\"center\" colspan=\"2\"><h3>You look inside the chest:</h3></td></tr><tr><td class=\"left\"><h3>Found:</h3></td><td class=\"center\"><img src=\"images/book.png\" /><br />Book of Ancient Inscriptions</td></tr><tr><td class=\"left\"><h3>Experience:</h3></td><td class=\"left\"><h3>+5</h3></td></tr></table><br /><table class=\"page\"><tr><td class=\"page\"><form action=\"maingraphics.php?";

echo time();
echo "\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Back to Map\" /></form></td></tr></table>";
  

}

 if ($cavee==1)
  {
  echo "<table class=\"page\"><tr><td class=\"center\"><h3>You look inside the chest:</h3>Nothing here.</td></tr><tr><td class=\"center\"><table class=\"page\"><tr><td class=\"page\"><form action=\"maingraphics.php?";

echo time();
echo "\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Back to Map\" /></form></td></tr></table></td></tr></table";

}
  
}  
  
  
  
}

if ($row['map']=="pyramida")
{

if ($row['xaxis']==2 and $row['yaxis']==3)
  {
  if ($pyramidachest1==0)
  {
 
  $query=sprintf("update flags set pyramidachest1=1 where username='%s';", mysql_real_escape_string($username));
  mysql_query ($query);
  
  $query=sprintf("update stats set experience=experience+5 where username='%s';", mysql_real_escape_string($username));
  mysql_query ($query);
  
include ('php/cellar12.php');

 echo "<table class=\"page\"><tr><td class=\"center\" colspan=\"2\"><h3>You look in the chest:</h3></td></tr><tr><td class=\"left\"><h3>Found:</h3></td><td class=\"center\"><img src=\"images/".$itemimage.".png\" /><br />".$itemname."</td></tr><tr><td class=\"left\"><h3>Experience:</h3></td><td class=\"left\"><h3>+5</h3></td></tr></table><br /><table class=\"page\"><tr><td class=\"page\"><form action=\"maingraphics.php?";

echo time();
echo "\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Back to Map\" /></form></td></tr></table>";
  

}

 if ($pyramidachest1==1)
  {
  echo "<table class=\"page\"><tr><td class=\"center\"><h3>You look in the chest:</h3>Nothing here.</td></tr><tr><td class=\"center\"><table class=\"page\"><tr><td class=\"page\"><form action=\"maingraphics.php?";

echo time();
echo "\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Back to Map\" /></form></td></tr></table></td></tr></table";

}
  
}

if ($row['xaxis']==11 and $row['yaxis']==3)
  {
  if ($pyramidachest2==0)
  {
 
  $query=sprintf("update flags set pyramidachest2=1 where username='%s';", mysql_real_escape_string($username));
  mysql_query ($query);
  
  $query=sprintf("update stats set experience=experience+5 where username='%s';", mysql_real_escape_string($username));
  mysql_query ($query);
  
include ('php/cellar12.php');

 echo "<table class=\"page\"><tr><td class=\"center\" colspan=\"2\"><h3>You look in the chest:</h3></td></tr><tr><td class=\"left\"><h3>Found:</h3></td><td class=\"center\"><img src=\"images/".$itemimage.".png\" /><br />".$itemname."</td></tr><tr><td class=\"left\"><h3>Experience:</h3></td><td class=\"left\"><h3>+5</h3></td></tr></table><br /><table class=\"page\"><tr><td class=\"page\"><form action=\"maingraphics.php?";

echo time();
echo "\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Back to Map\" /></form></td></tr></table>";
  

}

 else
  {
  echo "<table class=\"page\"><tr><td class=\"center\"><h3>You look in the chest:</h3>Nothing here.</td></tr><tr><td class=\"center\"><table class=\"page\"><tr><td class=\"page\"><form action=\"maingraphics.php?";

echo time();
echo "\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Back to Map\" /></form></td></tr></table></td></tr></table";

}
  
}


if ($row['xaxis']==5 and $row['yaxis']==12)
  {
  if ($pyramidachest3==0)
  {
 
  $query=sprintf("update flags set pyramidachest3=1 where username='%s';", mysql_real_escape_string($username));
  mysql_query ($query);
  
  $query=sprintf("update stats set experience=experience+5 where username='%s';", mysql_real_escape_string($username));
  mysql_query ($query);
  
include ('php/cellar12.php');

 echo "<table class=\"page\"><tr><td class=\"center\" colspan=\"2\"><h3>You look in the chest:</h3></td></tr><tr><td class=\"left\"><h3>Found:</h3></td><td class=\"center\"><img src=\"images/".$itemimage.".png\" /><br />".$itemname."</td></tr><tr><td class=\"left\"><h3>Experience:</h3></td><td class=\"left\"><h3>+5</h3></td></tr></table><br /><table class=\"page\"><tr><td class=\"page\"><form action=\"maingraphics.php?";

echo time();
echo "\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Back to Map\" /></form></td></tr></table>";
  

}

 else
  {
  echo "<table class=\"page\"><tr><td class=\"center\"><h3>You look in the chest:</h3>Nothing here.</td></tr><tr><td class=\"center\"><table class=\"page\"><tr><td class=\"page\"><form action=\"maingraphics.php?";

echo time();
echo "\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Back to Map\" /></form></td></tr></table></td></tr></table";

}
  
}

if ($row['xaxis']==7 and $row['yaxis']==12)
  {
  if ($pyramidachest4==0)
  {
 
  $query=sprintf("update flags set pyramidachest4=1 where username='%s';", mysql_real_escape_string($username));
  mysql_query ($query);
  
  $query=sprintf("update stats set experience=experience+5 where username='%s';", mysql_real_escape_string($username));
  mysql_query ($query);
  
include ('php/cellar12.php');

 echo "<table class=\"page\"><tr><td class=\"center\" colspan=\"2\"><h3>You look in the chest:</h3></td></tr><tr><td class=\"left\"><h3>Found:</h3></td><td class=\"center\"><img src=\"images/".$itemimage.".png\" /><br />".$itemname."</td></tr><tr><td class=\"left\"><h3>Experience:</h3></td><td class=\"left\"><h3>+5</h3></td></tr></table><br /><table class=\"page\"><tr><td class=\"page\"><form action=\"maingraphics.php?";

echo time();
echo "\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Back to Map\" /></form></td></tr></table>";
  

}

 else
  {
  echo "<table class=\"page\"><tr><td class=\"center\"><h3>You look in the chest:</h3>Nothing here.</td></tr><tr><td class=\"center\"><table class=\"page\"><tr><td class=\"page\"><form action=\"maingraphics.php?";

echo time();
echo "\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Back to Map\" /></form></td></tr></table></td></tr></table";

}
  
}










}
if ($row['map']=="pyramidb")
{

if ($row['xaxis']==2 and $row['yaxis']==3)
  {
  if ($pyramidbchest==0)
  {
 
  $query=sprintf("update flags set pyramidbchest=1 where username='%s';", mysql_real_escape_string($username));
  mysql_query ($query);
  
  $query=sprintf("update stats set experience=experience+5 where username='%s';", mysql_real_escape_string($username));
  mysql_query ($query);
  
include ('php/addcoi.php');

 echo "<table class=\"page\"><tr><td class=\"center\" colspan=\"2\"><h3>You look in the chest:</h3></td></tr><tr><td class=\"left\"><h3>Found:</h3></td><td class=\"center\"><img src=\"images/".$itemimage.".png\" /><br />".$itemname."</td></tr><tr><td class=\"left\"><h3>Experience:</h3></td><td class=\"left\"><h3>+5</h3></td></tr></table><br /><table class=\"page\"><tr><td class=\"page\"><form action=\"maingraphics.php?";

echo time();
echo "\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Back to Map\" /></form></td></tr></table>";
  

}
}









}

}
  
  
?>