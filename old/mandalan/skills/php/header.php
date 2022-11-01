<?php



include ('../php/connect.php');

include ('../php/getcookie.php');



echo "<!DOCTYPE html PUBLIC\"-//W3C//DTD XHTML 1.0 Transitional//EN\"\"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\"><html xmlns=\"http://www.w3.org/1999/xhtml\"><head><meta name=\"Keywords\" content=\"\" /><meta name=\"Description\" content=\"\" /><link rel=\"stylesheet\" type=\"text/css\" href=\"../main.css\" /><title>Mandala</title></head><body>

<table class=\"page\" width=\"100%\"><tr><td class=\"page\" width=\"35%\"><div class=\"border1\">

<table class=\"page\"><tr><td class=\"page\" colspan=\"2\"><img src=\"../images/equipment.png\" /><h2>Skills Menu</h2></td></tr><tr><td class=\"left\" colspan=\"2\">Skill Points: ";



include ('../php/skillpoints.php');



echo "</td></tr><tr><td class=\"left\"><form action=\"blade.php?";



echo time();

echo "\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Blade\" /></form></td><td class=\"left\"><form action=\"staff.php?";



echo time();

echo "\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Staff/Wand\" /></form></td></tr><tr><td class=\"left\"><form action=\"missile.php?";



echo time();

echo "\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Missile\" /></form></td><td class=\"left\"><form action=\"blunt.php?";



echo time();

echo "\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Blunt\" /></form></td></tr><tr><td class=\"left\"><form action=\"pole.php?";



echo time();

echo "\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Pole-Arm\" /></form></td><td class=\"left\"><form action=\"exotic.php?";



echo time();

echo "\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Exotic\" /></form></td></tr><tr><td class=\"left\"><form action=\"fire.php?";



echo time();

echo "\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Fire\" /></form></td><td class=\"left\"><form action=\"water.php?";



echo time();

echo "\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Water\" /></form></td></tr><tr><td class=\"left\"><form action=\"air.php?";



echo time();

echo "\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Air\" /></form></td><td class=\"left\"><form action=\"earth.php?";



echo time();

echo "\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Earth\" /></form></td></tr><tr><td class=\"left\"><form action=\"dark.php?";



echo time();

echo "\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Dark\" /></form></td><td class=\"left\"><form action=\"light.php?";



echo time();

echo "\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Light\" /></form></td></tr><tr><td class=\"center\" colspan=\"2\"><form action=\"../maingraphics.php?";



echo time();

echo "\" method=\"post\"><input class=\"small\" type=\"submit\" value=\"Back to Map\" /></form></td></tr></table></div></td><td class=\"page\"><table class=\"page\"><tr><td class=\"page\">";



?>