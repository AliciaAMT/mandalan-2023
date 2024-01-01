<?php

include ('php/connect.php');

$email=strip_tags($_POST["name"]);

$password=strip_tags($_POST["password"]);

$bday=strip_tags($_POST["bday"]);


//****set portrait according to gender defaults****


if (!$email)

{

die ("You must enter a valid email!<br /><form action=\"createaccountt.php\" method=\"post\"><input type=\"submit\" class=\"small\" value=\"Create Account\" /></form>");

}

if (!$password)

{

die ("You must choose a password!<br /><form action=\"createaccountt.php\" method=\"post\"><input type=\"submit\" class=\"small\" value=\"Create Account\" /></form>");

}



$results=mysql_query("select * from accounts");

while ($row = mysql_fetch_array($results))

{

if ($row['email']==$email)

	{

	die ("That email is already in use, please choose another.<br /><form action=\"createaccountt.php\" method=\"post\"><input type=\"submit\" class=\"small\" value=\"Create Account\" /></form>");

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

echo "<br />

This account has been created. Please login and create your characters. You may create up to 6 characters: 

<br />

<a href=\"logint.php\" alt=\"log in\">Log In</a>

</td></tr></table>

</body>

</html>";
?>