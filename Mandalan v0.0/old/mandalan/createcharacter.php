<?php include ('php/header1.php'); ?>
<?php include ('php/startmain.php'); ?>
<table class="page">
<tr>
<td class="page"><h2>Character Creation</h2>
</td>
</tr>
<tr>
<td class="page">

<form action="charactercreated.php? <?php echo time(); ?>" method="post">
<table>
<tr>
<td class="left">
Name: 
</td>
<td class="left">
<input type="text" name="name" maxlength="15" />
</td>
</tr>
<tr><td class="left">Choose Race: </td><td class="left"><select name="race">
<option value="Human">Human</option>
<option value="Half-Elf">Half-Elf</option>
<option value="Dark-Elf">Dark-Elf</option>
<option value="Light-Elf">Light-Elf</option><option value="Wood-Elf">Wood-Elf</option><option value="Dwarf">Dwarf</option><option value="Half-Giant">Half-Giant</option>
</select> <a href="race.php" target="_blank">?</a></td></tr><tr><td class="left">Choose Primary Class: </td><td class="left"><select name="class">
<option value="Knight">Knight</option>
<option value="Paladin">Paladin</option>
<option value="Ninja">Ninja</option>
<option value="Rogue">Rogue</option>
<option value="Mystic">Mystic</option>
<option value="Shaman">Shaman</option>
</select> <a href="class.php" target="_blank">?</a></td></tr><tr><td class="left">Choose Gender: </td><td class="left"><select name="gender">
<option value="Male">Male</option>
<option value="Female">Female</option>
</select> <a href="gender.php" target="_blank">?</a></td></tr>

<tr>

<td class="page" colspan="2">

<table class="page">

<tr><td class="border"><table class="page"><tr><td class="page"><img src="images/male1i.png" border="0" /></td></tr><td class="page"><input type="radio" name="portrait" value="male1"></td></tr></table></td><td class="border"><table class="page"><tr><td class="page"><img src="images/male2i.png" border="0" /></td></tr><tr><td class="page"><input type="radio" name="portrait" value="male2"></td></tr></table></td><td class="border"><table class="page"><tr><td class="page"><img src="images/male3i.png" border="0" /></td></tr><tr><td class="page"><input type="radio" name="portrait" value="male3"></td></tr></table></td><td class="border"><table class="page"><tr><td class="page"><img src="images/male4i.png" border="0" /></td></tr><tr><td class="page"><input type="radio" name="portrait" value="male4"></td></tr></table></td><td class="border"><table class="page"><tr><td class="page"><img src="images/male5i.png" border="0" /></td></tr><tr><td class="page"><input type="radio" name="portrait" value="male5"></td></tr></table>



</td></tr><tr><td class="border">



<table class="page">

<tr><td class="page"><img src="images/male6i.png" border="0" /></td></tr><td class="page"><input type="radio" name="portrait" value="male6"></td></tr></table></td><td class="border"><table class="page"><tr><td class="page"><img src="images/male7i.png" border="0" /></td></tr><tr><td class="page"><input type="radio" name="portrait" value="male7"></td></tr></table></td><td class="border"><table class="page"><tr><td class="page"><img src="images/male8i.png" border="0" /></td></tr><tr><td class="page"><input type="radio" name="portrait" value="male8"></td></tr></table></td><td class="border"><table class="page"><tr><td class="page"><img src="images/male9i.png" border="0" /></td></tr><tr><td class="page"><input type="radio" name="portrait" value="male9"></td></tr></table></td><td class="border"><table class="page"><tr><td class="page"><img src="images/male10i.png" border="0" /></td></tr><tr><td class="page"><input type="radio" name="portrait" value="male10"></td></tr></table></td></tr>



<tr><td class="border"><table class="page"><tr><td class="page"><img src="images/female1i.png" border="0" /></td></tr><td class="page"><input type="radio" name="portrait" value="female1"></td></tr></table></td><td class="border"><table class="page"><tr><td class="page"><img src="images/female2i.png" border="0" /></td></tr><tr><td class="page"><input type="radio" name="portrait" value="female2"></td></tr></table></td><td class="border"><table class="page"><tr><td class="page"><img src="images/female3i.png" border="0" /></td></tr><tr><td class="page"><input type="radio" name="portrait" value="female3"></td></tr></table></td><td class="border"><table class="page"><tr><td class="page"><img src="images/female4i.png" border="0" /></td></tr><tr><td class="page"><input type="radio" name="portrait" value="female4"></td></tr></table></td><td class="border"><table class="page"><tr><td class="page"><img src="images/female5i.png" border="0" /></td></tr><tr><td class="page"><input type="radio" name="portrait" value="female5"></td></tr></table>



</td></tr>



<tr><td class="border"><table class="page"><tr><td class="page"><img src="images/female6i.png" border="0" /></td></tr><td class="page"><input type="radio" name="portrait" value="female6"></td></tr></table></td><td class="border"><table class="page"><tr><td class="page"><img src="images/female7i.png" border="0" /></td></tr><tr><td class="page"><input type="radio" name="portrait" value="female7"></td></tr></table></td><td class="border"><table class="page"><tr><td class="page"><img src="images/female8i.png" border="0" /></td></tr><tr><td class="page"><input type="radio" name="portrait" value="female8"></td></tr></table></td><td class="border"><table class="page"><tr><td class="page"><img src="images/female9i.png" border="0" /></td></tr><tr><td class="page"><input type="radio" name="portrait" value="female9"></td></tr></table></td><td class="border"><table class="page"><tr><td class="page"><img src="images/female10i.png" border="0" /></td></tr><tr><td class="page"><input type="radio" name="portrait" value="female10"></td></tr></table></td></tr>







</td></tr></table></td></tr>

<tr><td class="center" colspan="2"><input class="small" type="submit" value="Create Character" /></td></tr></table>
</td></tr>
</table>
</form>
</td></tr>
<tr><td class="page">
<a href="mandala.php">Back</a>
</td></tr></table>

</td></tr></table>
</body>
</html>