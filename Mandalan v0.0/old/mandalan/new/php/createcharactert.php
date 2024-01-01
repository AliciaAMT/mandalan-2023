<?php

echo "<table class=\"page\">

<tr>

<td class=\"border\"><table class=\"page\"><tr><td class=\"page\"><h2>Character Creation</h2>

</td>

</tr>

<tr>

<td class=\"page\">



<form action=\"charactercreatedt.php?";

echo time(); 
echo "\" method=\"post\">

<table>

<tr>

<td class=\"left\">

Name: 

</td>

<td class=\"left\">

<input type=\"text\" name=\"name\" maxlength=\"15\" />

</td>

</tr>



<tr>

<td class=\"page\" colspan=\"2\"><table class=\"page\"><tr><td class=\"left\">Choose Race: </td><td class=\"left\"><select name=\"race\">

<option value=\"Human\">Human</option>

<option value=\"Half-Elf\">Half-Elf</option>

<option value=\"Dark-Elf\">Dark-Elf</option>

<option value=\"Light-Elf\">Light-Elf</option><option value=\"Wood-Elf\">Wood-Elf</option><option value=\"Dwarf\">Dwarf</option><option value=\"Half-Giant\">Half-Giant</option>

</select> <a href=\"race.php\" target=\"_blank\">?</a></td></tr><tr><td class=\"left\">Choose Primary Class: </td><td class=\"left\"><select name=\"class\">

<option value=\"Knight\">Knight</option>

<option value=\"Paladin\">Paladin</option>

<option value=\"Ninja\">Ninja</option>

<option value=\"Rogue\">Rogue</option>

<option value=\"Mystic\">Mystic</option>

<option value=\"Shaman\">Shaman</option>

</select> <a href=\"class.php\" target=\"_blank\">?</a></td></tr><tr><td class=\"left\">Choose Gender: </td><td class=\"left\"><select name=\"gender\">

<option value=\"Male\">Male</option>

<option value=\"Female\">Female</option>

</select> <a href=\"gender.php\" target=\"_blank\">?</a></td></tr>

<tr>

<td class=\"page\" colspan=\"2\">





</td></tr></table></td></tr>

<tr><td class=\"center\" colspan=\"2\"><input class=\"small\" type=\"submit\" value=\"Create Character\" /></td></tr></table>

</td></tr>

</table>

</form>

</td></tr>
</td></tr>
</table>
<tr><td class=\"page\">

<a href=\"mandalatext.php\">Back</a>

</td></tr></table>



</td></tr></table>

</body>

</html>";
?>