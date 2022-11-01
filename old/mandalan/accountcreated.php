<?php include ('php/header1.php'); ?>
<?php include ('php/startmain.php'); ?>

<?php

include ('php/connect.php');

$email=strip_tags($_POST["name"]);

$password=strip_tags($_POST["password"]);

$bday=strip_tags($_POST["bday"]);


$to = "aliciataylorguitar@gmail.com";
 $subject = $email;
 
 mail($to, $subject, $email);

//****set portrait according to gender defaults****


if (!$email)

{

die ("You must enter a valid email!<br /><form action=\"createaccount.php\" method=\"post\"><input type=\"submit\" class=\"small\" value=\"Create Account\" /></form>");

}

if (!$password)

{

die ("You must choose a password!<br /><form action=\"createaccount.php\" method=\"post\"><input type=\"submit\" class=\"small\" value=\"Create Account\" /></form>");

}



$results=query("select * from accounts");

while ($row = mysql_fetch_array($results))

{

if ($row['email']==$email)

	{

	die ("That email is already in use, please choose another.<br /><form action=\"createaccount.php\" method=\"post\"><input type=\"submit\" class=\"small\" value=\"Create Account\" /></form>");

	}

}


$querys = sprintf("insert into accounts 

values(
'%s', '%s', '%s', 'none', 'none', 'none', 'none', 'none', 'none', 0
);", 

mysql_real_escape_string($email),
mysql_real_escape_string($password),
mysql_real_escape_string($birthday));

mysql_query($querys);



echo "Email: ";

echo $email;

echo "<br />";

echo "Password: ";

echo $password;

echo "<br />";

?>

<br />

This account has been created. Please login and create your characters. You may create up to 6 characters: 

<br />
<table class="page"><tr><td class="page">
<form action="login.php" method="post"><input type="submit" class="small" value="Login" /></form>
</td></tr></table>

</td></tr></table>

</body>

</html>