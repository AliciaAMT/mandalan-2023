<?php include ('php/header1.php'); ?>

<table class="page"><tr><td class="page"><h2>Login</h2></td></tr><tr><td class="page">


<form action="authenticate.php? <?php echo time(); ?>" method="post">
<table>
<tr>
<td class="left">
Name: 
</td>
<td class="left">
<input class="mine" type="text" name="name" maxlength="20" />
</td>
</tr>
<tr>
<td class="left">
Password: 
</td>
<td class="left">
<input class="mine" type="password" name="password" maxlength="16" />
</td>
</tr>
<tr>
<td class="page" colspan="2">
<input class="small" type="submit" value="Login" />
</td>
</tr>
</table>
</form>
</td></tr><tr><td class="page">Not a member? Join for free here: <a href="welcome.php#membership">Become a Member</a></table></body></html>