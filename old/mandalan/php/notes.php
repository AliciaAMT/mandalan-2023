shepfeed
yardmelon
yardgarden
yardtree
yardcoop

cellar11 - rice
cellar31 - vegetables
cellar12 - random item
cellar32 - rope, belt or gloves
cellar13 - empty bottles
cellar33 - wine, potions
cellar14 - water? water container?
cellar34 - scrolls, recipes
cellarspider - spidersilk
held
cellarchest - blue ring





held

if ($row['enemy']=="cellarspider")
{

$rand=mt_rand(1,100);

if ($holdresist>$rand)
{
$counter="<span class=\"red\">";
$counter=$counter.$row['enemyname'];
$counter=$counter." attempts to hold you with <b>Spider Webs!</b> <b>You resist!</b></span><br />";
}

else
{
$counter="<span class=\"red\">";
$counter=$counter.$row['enemyname'];
$counter=$counter." attempts to hold you with <b>Spider Webs!</b> You cannot move for <b>1</b> turn!</span><br />";

$query = sprintf("update stats set life=life-10 where username='%s';",
mysql_real_escape_string($username));
mysql_query($query);

$query = sprintf("update stats set held=1 where username='%s';",
mysql_real_escape_string($username));
mysql_query($query);


if ($life-10<1)
{
$counter=$counter."You died!<br /><table class=\"page\"><tr><td class=\"page\"><table class=\"page\"><tr><td class=\"page\"><form action=\"revive.php?".time()."\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Follow the Light\" /></form></td></tr></table></td></tr></table>";
}

include ('php/counter.php');

}



write into database AFTER release!!

finish writing text objectt.php file 

finish text portalst.php file ???

add oldshep.php and oldshept.php files

give shep raw meat, shepfeed=1, lose raw meat, gain experience, hint about looking in dog house/food dish

bonekey.png

add to quest missing key quest according to shepfeed

