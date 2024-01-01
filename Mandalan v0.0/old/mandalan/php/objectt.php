<?php 

include ('php/getflags.php');

$query=sprintf("select map, xaxis, yaxis from stats where username='%s';", mysql_real_escape_string($username));

$result = mysql_query($query);

while($row = mysql_fetch_array($result))
  {
  
  if ($row['map']=="homeup")
  {
  
  if ($row['map']=="homeup" and $row['xaxis']==2 and $row['yaxis']==2)
  {
  if ($bedroomrug==0)
  {
  echo "<table class=\"page\"><tr><td class=\"center\" colspan=\"2\"><h3>You look under the rug...</h3></td></tr><tr><td class=\"left\"><h3>Found:</h3></td><td class=\"left\"><h3>Small Rusty Key</h3></td></tr><tr><td class=\"left\"><h3>Experience:</h3></td><td class=\"left\"><h3>+5</h3></td></tr><tr><td class=\"left\"><h3>Quest Updated:</h3></td><td class=\"left\"><h3>The Hidden Key Quest</h3></td></tr></table><br /><table class=\"page\"><tr><td class=\"page\"><form action=\"maingraphict.php?";

echo time();
echo "\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Back to Map\" /></form></td></tr></table>";
  
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
  echo "<table class=\"page\"><tr><td class=\"center\"><h3>You Search the Rug</h3>Nothing Here</td></tr><tr><td class=\"center\"><table class=\"page\"><tr><td class=\"page\"><form action=\"maingraphict.php?";

echo time();
echo "\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Back to Map\" /></form></td></tr></table></td></tr></table";
  }
  }
  if ($row['map']=="homeup" and $row['xaxis']==3 and $row['yaxis']==1)
  {
  if ($bedroomwardrobe==0)
  {
  echo "<table class=\"page\"><tr><td class=\"center\" colspan=\"2\"><h3>You search the Wardrobe...</h3></td></tr><tr><td class=\"left\"><h3>Found:</h3></td><td class=\"center\"><h3>Worn Canvas Shirt</h3></td></tr><tr><td class=\"left\"><h3>Found:</h3></td><td class=\"center\"><h3>Worn Canvas Pants</h3></td></tr><tr><td class=\"left\"><h3>Experience:</h3></td><td class=\"left\"><h3>+10</h3></td></tr></table><br /><table class=\"page\"><tr><td class=\"page\"><form action=\"maingraphict.php?";

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
  echo "<table class=\"page\"><tr><td class=\"center\"><h3>You Search the Wardrobe...</h3>Nothing Here</td></tr><tr><td class=\"center\"><table class=\"page\"><tr><td class=\"page\"><form action=\"maingraphict.php?";

echo time();
echo "\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Back to Map\" /></form></td></tr></table></td></tr></table";
  }
  }
  
  
  if ($row['map']=="homeup" and $row['xaxis']==3 and $row['yaxis']==2)
  {
  echo "<table class=\"page\"><tr><td class=\"center\" colspan=\"2\"><h3>You Search the Desk...</h3>";
  
  if ($bedroomdesk==0)
  {
  echo "</td></tr><tr><td class=\"left\"><h3>Found:</h3></td><td class=\"center\"><h3>Small Waterskin</h3></td></tr><tr><td class=\"left\"><h3>Found:</h3></td><td class=\"center\"><h3>Lockpick x3</h3></td></tr><tr><td class=\"left\"><h3>Experience:</h3></td><td class=\"left\"><h3>+10</h3></td></tr></table><br /><table class=\"page\"><tr><td class=\"page\"><form action=\"maingraphict.php?";

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
  echo "Nothing Here</td></tr><tr><td class=\"center\"><table class=\"page\"><tr><td class=\"page\"><form action=\"maingraphict.php?";

echo time();
echo "\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Back to Map\" /></form></td></tr></table></td></tr></table";
  }
  }
  
  
  if ($row['map']=="homeup" and $row['xaxis']==1 and $row['yaxis']==2)
  {
  echo "<table class=\"page\"><tr><td class=\"center\" colspan=\"2\"><h3>You search the Coatrack...</h3>";
  
  if ($bedroomcoatrack==0)
  {
  echo "</td></tr><tr><td class=\"left\"><h3>Found:</h3></td><td class=\"center\"><h3>Worn Canvas Cloak</h3></td></tr><tr><td class=\"left\"><h3>Found:</h3></td><td class=\"center\"><h3>Worn Canvas Hat</h3></td></tr><tr><td class=\"left\"><h3>Experience:</h3></td><td class=\"left\"><h3>+10</h3></td></tr></table><br /><table class=\"page\"><tr><td class=\"page\"><form action=\"maingraphict.php?";

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
  echo "Nothing Here</td></tr><tr><td class=\"center\"><table class=\"page\"><tr><td class=\"page\"><form action=\"maingraphict.php?";

echo time();
echo "\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Back to Map\" /></form></td></tr></table></td></tr></table";
  }
  }
  if ($row['map']=="homeup" and $row['xaxis']==3 and $row['yaxis']==3)
  {
  echo "<table class=\"page\"><tr><td class=\"center\" colspan=\"2\"><h3>You search the Shelf...</h3>";
  if ($bedroomshelf==0)
  {
  echo "</td></tr><tr><td class=\"left\"><h3>Found:</h3></td><td class=\"center\"><h3>Book of Laws</h3></td></tr><tr><td class=\"left\"><h3>Experience:</h3></td><td class=\"left\"><h3>+5</h3></td></tr></table><br /><table class=\"page\"><tr><td class=\"page\"><form action=\"maingraphict.php?";

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
  echo "Nothing Here</td></tr><tr><td class=\"center\"><table class=\"page\"><tr><td class=\"page\"><form action=\"maingraphict.php?";

echo time();
echo "\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Back to Map\" /></form></td></tr></table></td></tr></table";
  }
  }
  
  if ($row['map']=="homeup" and $row['xaxis']==2 and $row['yaxis']==3)
  {
  echo "<table class=\"page\"><tr><td class=\"center\" colspan=\"2\"><h3>You search the Chest...</h3>";
  if ($bedroomchest==0)
  {
  echo "</td></tr><tr><td class=\"left\"><h3>Found:</h3></td><td class=\"center\"><h3>Worn Canvas Shoes</h3></td></tr><tr><td class=\"left\"><h3>Experience:</h3></td><td class=\"left\"><h3>+5</h3></td></tr></table><br /><table class=\"page\"><tr><td class=\"page\"><form action=\"maingraphict.php?";

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
  echo "</td></tr><tr><td class=\"left\">Nothing Here</td></tr><tr><td class=\"center\"><table class=\"page\"><tr><td class=\"page\"><form action=\"maingraphict.php?";

echo time();
echo "\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Back to Map\" /></form></td></tr></table></td></tr></table";
  }
  
  
  
  
  }
  if ($row['map']=="homeup" and $row['xaxis']==1 and $row['yaxis']==3)
  {
  if ($bedroombed==0)
  {
  echo "<table class=\"page\"><tr><td class=\"center\" colspan=\"2\"><h3>You look under the Bed...</h3></td></tr><tr><td class=\"left\"><h3>Found:</h3></td><td class=\"center\"><h3>Locked Box</h3></td></tr><tr><td class=\"left\"><h3>Experience:</h3></td><td class=\"left\"><h3>+5</h3></td></tr><tr><td class=\"left\"><h3>Quest Updated:</h3></td><td class=\"left\"><h3>\"The Hidden Key Quest\"</h3></td></tr></table><br /><table class=\"page\"><tr><td class=\"page\"><form action=\"maingraphict.php?";

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
  echo "<table class=\"page\"><tr><td class=\"center\"><h3>You Search the Bed...</h3>Nothing Here</td></tr><tr><td class=\"center\"><table class=\"page\"><tr><td class=\"page\"><form action=\"maingraphict.php?";

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
  echo "<table class=\"page\"><tr><td class=\"center\" colspan=\"2\"><h3>You search the Shelf...</h3></td></tr><tr><td class=\"left\"><h3>Found:</h3></td><td class=\"center\"><h3>Family History Book</h3></td></tr><tr><td class=\"left\"><h3>Experience:</h3></td><td class=\"left\"><h3>+5</h3></td></tr></table><br /><table class=\"page\"><tr><td class=\"page\"><form action=\"maingraphict.php?";

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
  echo "<table class=\"page\"><tr><td class=\"center\"><h3>You Search the Shelf...</h3>Nothing Here</td></tr><tr><td class=\"center\"><table class=\"page\"><tr><td class=\"page\"><form action=\"maingraphict.php?";

echo time();
echo "\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Back to Map\" /></form></td></tr></table></td></tr></table";
  }
  }
  

//*****************************************************************************
if ($row['map']=="home" and $row['xaxis']==2 and $row['yaxis']==1)
  {
  
if ($homerug==0)
{
echo "<table class=\"page\"><tr><td class=\"center\" colspan=\"2\"><h3>You search under the Rug...</h3></td></tr><tr><td class=\"left\"><h3>Found:</h3></td><td class=\"center\"><h3>Lockpick</h3></td></tr><tr><td class=\"left\"><h3>Experience:</h3></td><td class=\"left\"><h3>+5</h3></td></tr></table><br /><table class=\"page\"><tr><td class=\"page\"><form action=\"maingraphict.php?";

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
  echo "<table class=\"page\"><tr><td class=\"center\" colspan=\"2\"><h3>You search under the Rug...</h3>Nothing Here</td></tr><tr><td class=\"center\"><table class=\"page\"><tr><td class=\"page\"><form action=\"maingraphict.php?";

echo time();
echo "\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Back to Map\" /></form></td></tr></table></td></tr></table";
  }
  }
  
//*********************************************************************************************

if ($row['map']=="home" and $row['xaxis']==3 and $row['yaxis']==1)
  {
  
if ($homechest==0)
  {
  echo "<table class=\"page\"><tr><td class=\"center\" colspan=\"2\"><h3>You search the Chest...</h3></td></tr><tr><td class=\"left\"><h3>Locked:</h3></td><td class=\"center\">It looks like you can pick this lock with a lockpick.</td></tr><tr><td class=\"center\" colspan=\"2\"><table class=\"page\"><tr><td class=\"page\"><form action=\"picklockt.php?";

echo time();
echo "\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Pick Lock\" /></form></td></tr></table></td></tr></table><br /><table class=\"page\"><tr><td class=\"page\"><form action=\"maingraphict.php?";

echo time();
echo "\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Back to Map\" /></form></td></tr></table>";
  
 }
  

if ($homechest==1)
  {
  echo "<table class=\"page\"><tr><td class=\"center\"><h3>You Search the Chest...</h3>Nothing Here</td></tr><tr><td class=\"center\"><table class=\"page\"><tr><td class=\"page\"><form action=\"maingraphict.php?";

echo time();
echo "\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Back to Map\" /></form></td></tr></table></td></tr></table";
  }
  }
  

if ($row['map']=="home" and $row['xaxis']==1 and $row['yaxis']==2)
  {
  
if ($homeshelf2==0)
  {
  echo "<table class=\"page\"><tr><td class=\"center\" colspan=\"2\"><h3>You search the Shelf...</h3></td></tr><tr><td class=\"left\"><h3>Found:</h3></td><td class=\"center\"><h3>Skillet</h3></td></tr><tr><td class=\"left\"><h3>Found:</h3></td><td class=\"center\"><h3>Cooking Oil</h3></td></tr><tr><td class=\"left\"><h3>Experience:</h3></td><td class=\"left\"><h3>+10</h3></td></tr></table><br /><table class=\"page\"><tr><td class=\"page\"><form action=\"maingraphict.php?";

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
  echo "<table class=\"page\"><tr><td class=\"center\"><h3>You Search the Shelf...</h3>Nothing Here</td></tr><tr><td class=\"center\"><table class=\"page\"><tr><td class=\"page\"><form action=\"maingraphict.php?";

echo time();
echo "\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Back to Map\" /></form></td></tr></table></td></tr></table";
  }
  }
  

if ($row['map']=="home" and $row['xaxis']==2 and $row['yaxis']==2)
  {
    
  if ($hometable==0)
  {
echo "<table class=\"page\"><tr><td class=\"center\" colspan=\"2\"><h3>You Search the Table...</h3>";

  echo "</td></tr><tr><td class=\"left\"><h3>Found:</h3></td><td class=\"center\"><h3>Rusty Kitchen Knife</h3></td></tr><tr><td class=\"left\"><h3>Experience:</h3></td><td class=\"left\"><h3>+5</h3></td></tr></table><br /><table class=\"page\"><tr><td class=\"page\"><form action=\"maingraphict.php?";

echo time();
echo "\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Back to Map\" /></form></td></tr></table>";
  
  $query=sprintf("update flags set hometable=1 where username='%s';", mysql_real_escape_string($username));
  mysql_query ($query);
  
  $query=sprintf("update flags set experience=experience+5 where username='%s';", mysql_real_escape_string($username));
  mysql_query ($query);
  
include ('php/home22.php');
}
  if ($hometable==1)
  {
  echo "<table class=\"page\"><tr><td class=\"center\"><h3>You Search the Table...</h3>You find nothing of interest.</td></tr><tr><td class=\"center\"><table class=\"page\"><tr><td class=\"page\"><form action=\"maingraphict.php?";

echo time();
echo "\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Back to Map\" /></form></td></tr></table></td></tr></table";
  }
  }
  
  

if ($row['map']=="home" and $row['xaxis']==3 and $row['yaxis']==2)
  {
include ('php/homefireplacet.php');  

}

  
if ($row['map']=="home" and $row['xaxis']==1 and $row['yaxis']==3)
  {
  if ($homepantry==0)
  {
  echo "<table class=\"page\"><tr><td class=\"center\" colspan=\"2\"><h3>You search the Kitchen Pantry...</h3></td></tr><tr><td class=\"left\"><h3>Found:</h3></td><td class=\"center\"><h3>Raw Meat x2</h3></td></tr><tr><td class=\"left\"><h3>Found:</h3></td><td class=\"center\"><h3>Bread x6</h3></td></tr><tr><td class=\"left\"><h3>Experience:</h3></td><td class=\"left\"><h3>+10</h3></td></tr></table><br /><table class=\"page\"><tr><td class=\"page\"><form action=\"maingraphict.php?";

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
  echo "<table class=\"page\"><tr><td class=\"center\"><h3>You Search the Kitchen Pantry...</h3>Nothing Here</td></tr><tr><td class=\"center\"><table class=\"page\"><tr><td class=\"page\"><form action=\"maingraphict.php?";

echo time();
echo "\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Back to Map\" /></form></td></tr></table></td></tr></table";
  }
  }
  

if ($row['map']=="home" and $row['xaxis']==2 and $row['yaxis']==3)
  {
  if ($homerack==0)
  {
  echo "<table class=\"page\"><tr><td class=\"center\" colspan=\"2\"><h3>You search the Herb Rack...</h3></td></tr><tr><td class=\"left\"><h3>Found:</h3></td><td class=\"center\"><h3>Cinnamon x2</h3></td></tr><tr><td class=\"left\"><h3>Found:</h3></td><td class=\"center\"><h3>Salt x3</h3></td></tr><tr><td class=\"left\"><h3>Experience:</h3></td><td class=\"left\"><h3>+10</h3></td></tr></table><br /><table class=\"page\"><tr><td class=\"page\"><form action=\"maingraphict.php?";

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
  echo "<table class=\"page\"><tr><td class=\"center\"><h3>You Search the Herb Rack...</h3>Nothing Here</td></tr><tr><td class=\"center\"><table class=\"page\"><tr><td class=\"page\"><form action=\"maingraphict.php?";

echo time();
echo "\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Back to Map\" /></form></td></tr></table></td></tr></table";
  }
  }
  if ($row['map']=="home" and $row['xaxis']==3 and $row['yaxis']==3)
  {
  if ($homedrawer==0)
  {
  echo "<table class=\"page\"><tr><td class=\"center\" colspan=\"2\"><h3>You search the End Table Drawer...</h3></td></tr><tr><td class=\"left\"><h3>Found:</h3></td><td class=\"center\"><h3>Purse</h3></td></tr><tr><td class=\"left\"><h3>Experience:</h3></td><td class=\"left\"><h3>+5</h3></td></tr></table><br /><table class=\"page\"><tr><td class=\"page\"><form action=\"maingraphict.php?";

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
  echo "<table class=\"page\"><tr><td class=\"center\"><h3>You Search the Drawer...</h3>Nothing Here</td></tr><tr><td class=\"center\"><table class=\"page\"><tr><td class=\"page\"><form action=\"maingraphict.php?";

echo time();
echo "\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Back to Map\" /></form></td></tr></table></td></tr></table";
  }
  }

}

//********************************new*************************************************************
if ($row['map']=="yard")
{

if ($row['map']=="yard" and $row['xaxis']==3 and $row['yaxis']==3)
  {
  if ($shepfeed==0)
  {
echo "<table class=\"page\"><tr><td class=\"center\"><h3>You look into the dog house and notice something strange in Shep's food bowl. You reach into the little house to get the strange item when:</h3></td></tr><tr><td class=\"center\">Old Shep snarls and bites you! Maybe Old Shep is hungry. He sure tried to take a bite out of your arm!</td></tr>
<tr><td class=\"page\">

<table class=\"page\"><tr><td class=\"page\"><form action=\"maingraphict.php?";
echo time();
echo "\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Back to Map\" /></form></td></tr></table>";
 $query=sprintf("update stats set life=life-3 where username='%s';", mysql_real_escape_string($username));
  mysql_query ($query);
}
    
  if ($shepfeed==1)
  {
   echo "<table class=\"page\"><tr><td class=\"center\" colspan=\"2\"><h3>You look into the dog house and notice something strange in Shep's food bowl. You reach into the little house to get the strange item when:</h3></td></tr><tr><td class=\"left\"><h3>Found:</h3></td><td class=\"center\"><img src=\"images/bonekey.png\" /><br />Bone Key</td></tr><tr><td class=\"left\"><h3>Experience:</h3></td><td class=\"left\"><h3>+5</h3></td></tr><tr><td class=\"left\"><h3>Quest Updated:</h3></td><td class=\"left\"><h3>\"The Lost Key Quest\"</h3></td></tr></table><br /><table class=\"page\"><tr><td class=\"page\"><form action=\"maingraphict.php?";

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
echo "<table class=\"page\"><tr><td class=\"center\"><h3>You look into the dog house and :</h3></td></tr><tr><td class=\"center\">see nothing of interest.</td></tr>
<tr><td class=\"page\">

<table class=\"page\"><tr><td class=\"page\"><form action=\"maingraphict.php?";
echo time();
echo "\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Back to Map\" /></form></td></tr></table>";

}

}

if ($row['map']=="yard" and $row['xaxis']==2 and $row['yaxis']==1)
  {
  if ($yardgarden==0)
  {
  echo "<table class=\"page\"><tr><td class=\"center\" colspan=\"2\"><h3>You check the garden:</h3></td></tr><tr><td class=\"left\"><h3>Found:</h3></td><td class=\"center\">
<h3>Lettuce x3</h3></td></tr><tr><td class=\"left\"><h3>Experience:</h3></td><td class=\"left\"><h3>+5</h3></td></tr></table><br /><table class=\"page\"><tr><td class=\"page\"><form action=\"maingraphict.php?";

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
  echo "<table class=\"page\"><tr><td class=\"center\" colspan=\"2\"><h3>You check the garden:</h3></td></tr><tr><td class=\"left\"><h3>Found:</h3></td><td class=\"center\"><h3>Lettuce x3</h3></td></tr><tr><td class=\"left\"><h3>Experience:</h3></td><td class=\"left\"><h3>+5</h3></td></tr></table><br /><table class=\"page\"><tr><td class=\"page\"><form action=\"maingraphict.php?";

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
  echo "<table class=\"page\"><tr><td class=\"center\"><h3>You check the garden:</h3>Nothing here, try again later.</td></tr><tr><td class=\"center\"><table class=\"page\"><tr><td class=\"page\"><form action=\"maingraphict.php?";

echo time();
echo "\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Back to Map\" /></form></td></tr></table></td></tr></table";
  }
}
if ($row['map']=="yard" and $row['xaxis']==1 and $row['yaxis']==2)
  {
  if ($yardmelon==0)
  {
  echo "<table class=\"page\"><tr><td class=\"center\" colspan=\"2\"><h3>You check the melon plants:</h3></td></tr><tr><td class=\"left\"><h3>Found:</h3></td><td class=\"center\"><h3>Melon x3</h3></td></tr><tr><td class=\"left\"><h3>Experience:</h3></td><td class=\"left\"><h3>+5</h3></td></tr></table><br /><table class=\"page\"><tr><td class=\"page\"><form action=\"maingraphict.php?";

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
  echo "<table class=\"page\"><tr><td class=\"center\" colspan=\"2\"><h3>You check the melon plants:</h3></td></tr><tr><td class=\"left\"><h3>Found:</h3></td><td class=\"center\"><h3>Melon x3</h3></td></tr><tr><td class=\"left\"><h3>Experience:</h3></td><td class=\"left\"><h3>+5</h3></td></tr></table><br /><table class=\"page\"><tr><td class=\"page\"><form action=\"maingraphict.php?";

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
  echo "<table class=\"page\"><tr><td class=\"center\"><h3>You check the melon plants:</h3>Nothing here, try again later.</td></tr><tr><td class=\"center\"><table class=\"page\"><tr><td class=\"page\"><form action=\"maingraphict.php?";

echo time();
echo "\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Back to Map\" /></form></td></tr></table></td></tr></table";
  }
  
}


if ($row['map']=="yard" and $row['xaxis']==3 and $row['yaxis']==1)
  {
  if ($yardtrees==0)
  {
  echo "<table class=\"page\"><tr><td class=\"center\" colspan=\"2\"><h3>You check the fruit tree:</h3></td></tr><tr><td class=\"left\"><h3>Found:</h3></td><td class=\"center\"><h3>Apple x3</h3></td></tr><tr><td class=\"left\"><h3>Experience:</h3></td><td class=\"left\"><h3>+5</h3></td></tr></table><br /><table class=\"page\"><tr><td class=\"page\"><form action=\"maingraphict.php?";

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
   echo "<table class=\"page\"><tr><td class=\"center\" colspan=\"2\"><h3>You check the fruit tree:</h3></td></tr><tr><td class=\"left\"><h3>Found:</h3></td><td class=\"center\">
<h3>Apple x3</h3></td></tr><tr><td class=\"left\"><h3>Experience:</h3></td><td class=\"left\"><h3>+5</h3></td></tr></table><br /><table class=\"page\"><tr><td class=\"page\"><form action=\"maingraphict.php?";

echo time();
echo "\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Back to Map\" /></form></td></tr></table>";
  
  $query=sprintf("update flags set yardtrees=2 where username='%s';", mysql_real_escape_string($username));
  mysql_query ($query);
  
  $query=sprintf("update stats set experience=experience+5 where username='%s';", mysql_real_escape_string($username));
  mysql_query ($query);
  
include ('php/yard31.php');}

  if ($yardtrees==2)
  {
  echo "<table class=\"page\"><tr><td class=\"center\"><h3>You check the fruit tree:</h3>Nothing here, try again later.</td></tr><tr><td class=\"center\"><table class=\"page\"><tr><td class=\"page\"><form action=\"maingraphict.php?";

echo time();
echo "\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Back to Map\" /></form></td></tr></table></td></tr></table";
  }
  
}

if ($row['map']=="yard" and $row['xaxis']==3 and $row['yaxis']==2)
  {
  if ($yardcoop==0)
  {
  echo "<table class=\"page\"><tr><td class=\"center\" colspan=\"2\"><h3>You check the chicken coop:</h3></td></tr><tr><td class=\"left\"><h3>Found:</h3></td><td class=\"center\"><h3>Egg x3</h3></td></tr><tr><td class=\"left\"><h3>Experience:</h3></td><td class=\"left\"><h3>+5</h3></td></tr></table><br /><table class=\"page\"><tr><td class=\"page\"><form action=\"maingraphict.php?";

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
  echo "<table class=\"page\"><tr><td class=\"center\" colspan=\"2\"><h3>You check the chicken coop:</h3></td></tr><tr><td class=\"left\"><h3>Found:</h3></td><td class=\"center\"><h3>Egg x3</h3></td></tr><tr><td class=\"left\"><h3>Experience:</h3></td><td class=\"left\"><h3>+5</h3></td></tr></table><br /><table class=\"page\"><tr><td class=\"page\"><form action=\"maingraphict.php?";

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
  echo "<table class=\"page\"><tr><td class=\"center\"><h3>You check the chicken coop:</h3>Nothing here, try again later.</td></tr><tr><td class=\"center\"><table class=\"page\"><tr><td class=\"page\"><form action=\"maingraphict.php?";

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
  echo "<table class=\"page\"><tr><td class=\"center\" colspan=\"2\"><h3>You look in the Canvas Sack:</h3></td></tr><tr><td class=\"left\"><h3>Found:</h3></td><td class=\"center\">
<h3>Rice x3</h3></td></tr><tr><td class=\"left\"><h3>Experience:</h3></td><td class=\"left\"><h3>+10</h3></td></tr></table><br /><table class=\"page\"><tr><td class=\"page\"><form action=\"maingraphict.php?";

echo time();
echo "\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Back to Map\" /></form></td></tr></table>";
  
  $query=sprintf("update flags set cellarrice=1 where username='%s';", mysql_real_escape_string($username));
  mysql_query ($query);
  
  $query=sprintf("update stats set experience=experience+10 where username='%s';", mysql_real_escape_string($username));
  mysql_query ($query);
  
include ('php/cellar11.php');
}

 if ($cellarrice==1)
  {
  
  echo "<table class=\"page\"><tr><td class=\"center\"><h3>You check the canvas bag:</h3>Nothing here.</td></tr><tr><td class=\"center\"><table class=\"page\"><tr><td class=\"page\"><form action=\"maingraphict.php?";

echo time();
echo "\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Back to Map\" /></form></td></tr></table></td></tr></table";
  }
}
  
  if ($row['xaxis']==3 and $row['yaxis']==1)
  {
  if ($cellarveggie==0)
  {
  echo "<table class=\"page\"><tr><td class=\"center\" colspan=\"2\"><h3>You look in the Canvas Sack:</h3></td></tr><tr><td class=\"left\"><h3>Found:</h3></td><td class=\"center\">
<h3>Vegetables x3</h3></td></tr><tr><td class=\"left\"><h3>Experience:</h3></td><td class=\"left\"><h3>+10</h3></td></tr></table><br /><table class=\"page\"><tr><td class=\"page\"><form action=\"maingraphict.php?";

echo time();
echo "\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Back to Map\" /></form></td></tr></table>";
  
  $query=sprintf("update flags set cellarveggie=1 where username='%s';", mysql_real_escape_string($username));
  mysql_query ($query);
  
  $query=sprintf("update stats set experience=experience+10 where username='%s';", mysql_real_escape_string($username));
  mysql_query ($query);
  
include ('php/cellar31.php');
}

 if ($cellarveggie==1)
  {
  
  echo "<table class=\"page\"><tr><td class=\"center\"><h3>You check the canvas bag:</h3>Nothing here.</td></tr><tr><td class=\"center\"><table class=\"page\"><tr><td class=\"page\"><form action=\"maingraphict.php?";

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

 echo "<table class=\"page\"><tr><td class=\"center\" colspan=\"2\"><h3>You look inside the wooden crate:</h3></td></tr><tr><td class=\"left\"><h3>Found:</h3></td><td class=\"center\">".$itemname."</td></tr><tr><td class=\"left\"><h3>Experience:</h3></td><td class=\"left\"><h3>+5</h3></td></tr></table><br /><table class=\"page\"><tr><td class=\"page\"><form action=\"maingraphict.php?";

echo time();
echo "\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Back to Map\" /></form></td></tr></table>";
  

}

 if ($cellaritem==1)
  {
  echo "<table class=\"page\"><tr><td class=\"center\"><h3>You look inside the wooden crate:</h3>Nothing here.</td></tr><tr><td class=\"center\"><table class=\"page\"><tr><td class=\"page\"><form action=\"maingraphict.php?";

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

 echo "<table class=\"page\"><tr><td class=\"center\" colspan=\"2\"><h3>You look inside the wooden crate:</h3></td></tr><tr><td class=\"left\"><h3>Found:</h3></td><td class=\"center\">".$itemname."</td></tr><tr><td class=\"left\"><h3>Experience:</h3></td><td class=\"left\"><h3>+5</h3></td></tr></table><br /><table class=\"page\"><tr><td class=\"page\"><form action=\"maingraphict.php?";

echo time();
echo "\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Back to Map\" /></form></td></tr></table>";
  

}

 if ($cellarpurse==1)
  {
  echo "<table class=\"page\"><tr><td class=\"center\"><h3>You look inside the wooden crate:</h3>Nothing here.</td></tr><tr><td class=\"center\"><table class=\"page\"><tr><td class=\"page\"><form action=\"maingraphict.php?";

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

 echo "<table class=\"page\"><tr><td class=\"center\" colspan=\"2\"><h3>You look at the bottle rack:</h3></td></tr><tr><td class=\"left\"><h3>Found:</h3></td><td class=\"center\">Bottle</td></tr><tr><td class=\"left\"><h3>Experience:</h3></td><td class=\"left\"><h3>+5</h3></td></tr></table><br /><table class=\"page\"><tr><td class=\"page\"><form action=\"maingraphict.php?";

echo time();
echo "\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Back to Map\" /></form></td></tr></table>";
  

}

 if ($cellarbottle==1)
  {
  echo "<table class=\"page\"><tr><td class=\"center\"><h3>You look at the bottle rack:</h3>Nothing here.</td></tr><tr><td class=\"center\"><table class=\"page\"><tr><td class=\"page\"><form action=\"maingraphict.php?";

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

 echo "<table class=\"page\"><tr><td class=\"center\" colspan=\"2\"><h3>You look at the wine rack:</h3></td></tr><tr><td class=\"left\"><h3>Found:</h3></td><td class=\"center\">".$itemname."</td></tr><tr><td class=\"left\"><h3>Experience:</h3></td><td class=\"left\"><h3>+5</h3></td></tr></table><br /><table class=\"page\"><tr><td class=\"page\"><form action=\"maingraphict.php?";

echo time();
echo "\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Back to Map\" /></form></td></tr></table>";
  

}

 if ($cellarpotion==1)
  {
  echo "<table class=\"page\"><tr><td class=\"center\"><h3>You look at the wine rack:</h3>Nothing here.</td></tr><tr><td class=\"center\"><table class=\"page\"><tr><td class=\"page\"><form action=\"maingraphict.php?";

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

 echo "<table class=\"page\"><tr><td class=\"center\" colspan=\"2\"><h3>You look at the shelf:</h3></td></tr><tr><td class=\"left\"><h3>Found:</h3></td><td class=\"center\">A ".$spellname." Scroll</td></tr><tr><td class=\"left\"><h3>Experience:</h3></td><td class=\"left\"><h3>+5</h3></td></tr></table><br /><table class=\"page\"><tr><td class=\"page\"><form action=\"maingraphict.php?";

echo time();
echo "\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Back to Map\" /></form></td></tr></table>";
  

}

 if ($cellarshelf==1)
  {
  echo "<table class=\"page\"><tr><td class=\"center\"><h3>You look at the shelf:</h3>Nothing here.</td></tr><tr><td class=\"center\"><table class=\"page\"><tr><td class=\"page\"><form action=\"maingraphict.php?";

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

 echo "<table class=\"page\"><tr><td class=\"center\" colspan=\"2\"><h3>You look in the chest:</h3></td></tr><tr><td class=\"left\"><h3>Found:</h3></td><td class=\"center\">Ring of Ice Protection</td></tr><tr><td class=\"left\"><h3>Experience:</h3></td><td class=\"left\"><h3>+5</h3></td></tr></table><br /><table class=\"page\"><tr><td class=\"page\"><form action=\"maingraphict.php?";

echo time();
echo "\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Back to Map\" /></form></td></tr></table>";
  

}

 if ($cellarchest==1)
  {
  echo "<table class=\"page\"><tr><td class=\"center\"><h3>You look in the chest:</h3>Nothing here.</td></tr><tr><td class=\"center\"><table class=\"page\"><tr><td class=\"page\"><form action=\"maingraphict.php?";

echo time();
echo "\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Back to Map\" /></form></td></tr></table></td></tr></table";

}
  
} 
  
  
  //********************************************
  
  }
  
 if ($row['map']=="barn")
{

if ($row['map']=="barn" and $row['xaxis']==1 and $row['yaxis']==1)
  {
  if ($barnwood==0)
  {
  echo "<table class=\"page\"><tr><td class=\"center\" colspan=\"2\"><h3>You search for dry wood:</h3></td></tr><tr><td class=\"left\"><h3>Found:</h3></td><td class=\"center\">Firewood x3</td></tr><tr><td class=\"left\"><h3>Experience:</h3></td><td class=\"left\"><h3>+5</h3></td></tr></table><br /><table class=\"page\"><tr><td class=\"page\"><form action=\"maingraphict.php?";

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
  echo "<table class=\"page\"><tr><td class=\"center\"><h3>You search for dry wood:</h3>You can salvage nothing.</td></tr><tr><td class=\"center\"><table class=\"page\"><tr><td class=\"page\"><form action=\"maingraphict.php?";

echo time();
echo "\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Back to Map\" /></form></td></tr></table></td></tr></table";

}
  
}
if ($row['map']=="barn" and $row['xaxis']==1 and $row['yaxis']==2)
  {
  if ($barnhay==0)
  {
  echo "<table class=\"page\"><tr><td class=\"center\" colspan=\"2\"><h3>You search the haystack:</h3></td></tr><tr><td class=\"left\"><h3>Found:</h3></td><td class=\"center\">Needle</td></tr><tr><td class=\"left\"><h3>Experience:</h3></td><td class=\"left\"><h3>+5</h3></td></tr></table><br /><table class=\"page\"><tr><td class=\"page\"><form action=\"maingraphict.php?";

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
  echo "<table class=\"page\"><tr><td class=\"center\"><h3>You search the hay and find nothing.</td></tr><tr><td class=\"center\"><table class=\"page\"><tr><td class=\"page\"><form action=\"maingraphict.php?";

echo time();
echo "\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Back to Map\" /></form></td></tr></table></td></tr></table";

}
  
}
if ($row['map']=="barn" and $row['xaxis']==2 and $row['yaxis']==3)
  {
  if ($barncow==0)
  {
  echo "<table class=\"page\"><tr><td class=\"center\" colspan=\"2\"><h3>You grab the nearest milk bucket and try milking the cow:</h3></td></tr><tr><td class=\"left\"><h3>Found:</h3></td><td class=\"center\">Milk x3</td></tr><tr><td class=\"left\"><h3>Experience:</h3></td><td class=\"left\"><h3>+5</h3></td></tr></table><br /><table class=\"page\"><tr><td class=\"page\"><form action=\"maingraphict.php?";

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
  echo "<table class=\"page\"><tr><td class=\"center\"><h3>You try milking the cow, but she is out of milk for now.</td></tr><tr><td class=\"center\"><table class=\"page\"><tr><td class=\"page\"><form action=\"maingraphict.php?";

echo time();
echo "\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Back to Map\" /></form></td></tr></table></td></tr></table";

}
  
}

if ($row['map']=="barn" and $row['xaxis']==1 and $row['yaxis']==3)
  {
  
  echo "<table class=\"page\"><tr><td class=\"center\" colspan=\"2\"><h3>Cheese Center:</h3></td></tr><table class=\"page\"><tr><td class=\"page\"><form action=\"makecheeset.php?";

echo time();
echo "\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Make Cheese\" /></form></td></tr></table></td></tr></table>";
  
}
  
if ($row['map']=="barn" and $row['xaxis']==3 and $row['yaxis']==2)
  {
  if ($barnsack==0)
  {
  echo "<table class=\"page\"><tr><td class=\"center\" colspan=\"2\"><h3>You search the canvas sack:</h3></td></tr><tr><td class=\"left\"><h3>Found:</h3></td><td class=\"center\">Oats x3</td></tr><tr><td class=\"left\"><h3>Experience:</h3></td><td class=\"left\"><h3>+5</h3></td></tr></table><br /><table class=\"page\"><tr><td class=\"page\"><form action=\"maingraphict.php?";

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
  echo "<table class=\"page\"><tr><td class=\"center\"><h3>You search the sack and find nothing.</td></tr><tr><td class=\"center\"><table class=\"page\"><tr><td class=\"page\"><form action=\"maingraphict.php?";

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
  echo "<table class=\"page\"><tr><td class=\"center\" colspan=\"2\"><h3>You check the fruit tree:</h3></td></tr><tr><td class=\"left\"><h3>Found:</h3></td><td class=\"center\">Apple x3</td></tr><tr><td class=\"left\"><h3>Experience:</h3></td><td class=\"left\"><h3>+5</h3></td></tr></table><br /><table class=\"page\"><tr><td class=\"page\"><form action=\"maingraphict.php?";

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
   echo "<table class=\"page\"><tr><td class=\"center\" colspan=\"2\"><h3>You check the fruit tree:</h3></td></tr><tr><td class=\"left\"><h3>Found:</h3></td><td class=\"center\">Apple x3</td></tr><tr><td class=\"left\"><h3>Experience:</h3></td><td class=\"left\"><h3>+5</h3></td></tr></table><br /><table class=\"page\"><tr><td class=\"page\"><form action=\"maingraphict.php?";

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
  echo "<table class=\"page\"><tr><td class=\"center\"><h3>You check the fruit tree:</h3>Nothing here, try again later.</td></tr><tr><td class=\"center\"><table class=\"page\"><tr><td class=\"page\"><form action=\"maingraphict.php?";

echo time();
echo "\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Back to Map\" /></form></td></tr></table></td></tr></table";
  }
  
}

}

 
  }
?>